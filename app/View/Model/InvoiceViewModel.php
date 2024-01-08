<?php

namespace App\View\Model;

use App\Enums\Font;
use App\Enums\PaymentTerms;
use App\Models\Order;
use App\Models\Setting\DocumentDefault;
use App\Models\ZipCode;
use Filament\Panel\Concerns\HasFont;
use Illuminate\Support\Collection;

class InvoiceViewModel
{
    use HasFont;

    public DocumentDefault $invoice;

    public Order $order;

    public ?array $data = [];

    public function __construct(DocumentDefault $invoice,Order $order, ?array $data = null)
    {
        $this->invoice = $invoice;
        $this->order = $order;
        $this->data = $data;
    }

    public function logo(): ?string
    {
        return $this->invoice->logo_url;
    }

    public function show_logo(): bool
    {
        return $this->data['show_logo'] ?? $this->invoice->show_logo ?? false;
    }

    // Company related methods
    public function company_name(): string
    {
        return $this->invoice->company->name;
    }

    public function company_address(): ?string
    {
        return $this->invoice->company->street ?? null;
    }

    public function company_phone(): ?string
    {
        return $this->invoice->company->phone1 ?? null;
    }

    public function company_city(): ?string
    {
        return $this->invoice->company->city ?? null;
    }

    // public function company_state(): ?string
    // {
    //     return $this->invoice->company->profile->state->name ?? null;
    // }
    //
    public function company_zip(): ?string
    {
        return $this->invoice->company->zip ?? null;
    }

    public function company_country(): ?string
    {
        return $this->invoice->company->country ?? null;
    }

    // Invoice numbering related methods
    // public function number_prefix(): string
    // {
    //     return $this->data['number_prefix'] ?? $this->invoice->number_prefix ?? 'INV-';
    // }
    //
    // public function number_digits(): int
    // {
    //     return $this->data['number_digits'] ?? $this->invoice->number_digits ?? 5;
    // }
    //
    // public function number_next(): string
    // {
    //     return $this->data['number_next'] ?? $this->invoice->number_next;
    // }
    //
    //
    //
    public  function client_name(): string
    {
        return $this->order->client->name1;
    }

    public function client_street(): ?string
    {
        return $this->order->client->street ?? '-';
    }

    public function client_zip(): ?string
    {
        return ZipCode::find($this->order->client->zip)?->getAttribute('zip') ?? '0815';
    }

    public function client_city(): ?string
    {
        return ZipCode::find($this->order->client->zip)?->getAttribute('location') ?? 'Musterhausen';
    }

    public function client_country(): ?string
    {
        return $this->order->client->country ?? 'Austria';
    }

    public function invoice_number(): string
    {
        // return DocumentDefault::getNumberNext(padded: true, format: true, prefix: $this->number_prefix(), digits: $this->number_digits(), next: $this->number_next());
        return $this->order->number;
    }

    // Invoice date related methods
    public function invoice_date(): string
    {
        return $this->order->created_at;
    }

    public function payment_terms(): string
    {
        return $this->data['payment_terms'] ?? $this->invoice->payment_terms?->value ?? PaymentTerms::DEFAULT;
    }

    public function invoice_due_date(): string
    {
        $dateFormat = $this->order->created_at;


        return PaymentTerms::from($this->payment_terms())->getDueDate($dateFormat);
    }

    public function order_items(): Collection
    {
        return $this->order->items;
    }

    public function calc_sub_total()
    {
        $sum_items = collect($this->order->items)->map(
            function ($item) {
                return [
                'price' => $item['qty'] * $item['unit_price'] - $item['qty'] * $item['unit_price'] * $item['discount'] / 100
                ];
            }
        )->sum('price');

        return $sum_items;
    }

    public function sub_total(): ?string
    {

        return number_format($this->calc_sub_total(), 2, ',', '.');

    }

    public function discount(): string
    {
        return $this->order->discount ?? '-';
    }

    public function discount_price(): string
    {
        return  $this->order->discount ? number_format($this->order->discount * $this->calc_sub_total() / 100, 2, ',', '.') : '-';
    }

    public function total_price(): string
    {
        return number_format($this->order->total_price, 2, ',', '.');
    }

    public function fontFamily(): string
    {
        if($this->data) {
            if ($this->data['font']) {
                return Font::from($this->data['font'])->getLabel();
            }

            if ($this->invoice->font) {
                return $this->invoice->font->getLabel();
            }

        }

        return Font::from(Font::DEFAULT)->getLabel();
    }

    // Invoice header related methods
    public function header(): string
    {
        return $this->data['header'] ?? $this->invoice->header ?? 'Rechnung';
    }

    public function subheader(): ?string
    {
        return $this->data['subheader'] ?? $this->invoice->subheader ?? null;
    }

    // Invoice styling
    public function accent_color(): string
    {
        return $this->data['accent_color'] ?? $this->invoice->accent_color;
    }


    public function footer(): ?string
    {
        return $this->data['footer'] ?? $this->invoice->footer ?? null;
    }

    public function terms(): ?string
    {
        return $this->data['terms'] ?? $this->invoice->terms ?? null;
    }

    public function getItemColumnName(string $column, string $default): string
    {
        $custom = $this->data[$column]['custom'] ?? $this->invoice->{$column . '_custom'} ?? null;

        if ($custom) {
            return $custom;
        }

        $option = $this->data[$column]['option'] ?? $this->invoice->{$column . '_option'} ?? null;

        return $option ? $this->invoice->getLabelOptionFor($column, $option) : $default;
    }

    // // Invoice column related methods
    public function item_name(): string
    {
        return $this->getItemColumnName('item_name', 'Items');
        // return "item_name";
    }

    public function item_qty(): string
    {
        return $this->getItemColumnName('item_qty', 'Anzahl');
        // return "item_amount";
    }

    public function unit_name(): string
    {
        return $this->getItemColumnName('unit_name', 'Quantity');
        // return "unit_name";
    }

    public function price_name(): string
    {
        return $this->getItemColumnName('price_name', 'Price');
        // return 'price_name';
    }

    public function amount_name(): string
    {
        return $this->getItemColumnName('amount_name', 'Amount');
        // return 'Summe';
    }
    /**
     * @return array<string,mixed>
     */
    public function buildViewData(): array
    {
        return [
            'logo' => $this->logo(),
            'show_logo' => $this->show_logo(),
            'company_name' => $this->company_name(),
            'company_address' => $this->company_address(),
            'company_phone' => $this->company_phone(),
            'company_city' => $this->company_city(),
            // 'company_state' => $this->company_state(),
            'company_zip' => $this->company_zip(),
            'company_country' => $this->company_country(),
            // 'number_prefix' => $this->number_prefix(),
            // 'number_digits' => $this->number_digits(),
            // 'number_next' => $this->number_next(),
            'client_name' => $this->client_name(),
            'client_street' => $this->client_street(),
            'client_zip' => $this->client_zip(),
            'client_city' => $this->client_city(),
            'client_country' => $this->client_country(),
            'invoice_number' => $this->invoice_number(),
            'invoice_date' => $this->invoice_date(),
            'invoice_due_date' => $this->invoice_due_date(),
            'header' => $this->header(),
            'subheader' => $this->subheader(),
            'accent_color' => $this->accent_color(),
            'order_items' => $this->order_items(),
            'discount' => $this->discount(),
            'discount_price' => $this->discount_price(),
            'sub_total' => $this->sub_total(),
            'total_price' => $this->total_price(),
            'font_family' => $this->fontFamily(),
            'font_html' => $this->font($this->fontFamily())->getFontHtml(),
            'footer' => $this->footer(),
            'terms' => $this->terms(),
            'item_name' => $this->item_name(),
            'item_qty' => $this->item_qty(),
            // 'item_amount' => $this->item_amount(),
            'unit_name' => $this->unit_name(),
            'price_name' => $this->price_name(),
            'amount_name' => $this->amount_name(),
        ];
    }
}


<?php

namespace App\Http\Controllers;

use App\Enums\DocumentType;
use App\Models\Order;
use Google\Service\Storage as GoogleStorage;
use Illuminate\Support\Facades\Storage;
use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Enums\Format;
use Spatie\LaravelPdf\Facades\Pdf;
use App\Models\Setting\DocumentDefault as InvoiceModel;


class Invoices extends Controller
{
    /**
     * @return Pdf
     * @param  mixed $id
     */
    public function generatePDF($id)
    {

        $invoice = Order::find($id);

         $template = InvoiceModel::invoice()
             ->firstOrNew(
                [
                     'company_id' => 1,
                     'type' => DocumentType::Invoice->value,
                 ]
            );

        $data = [
            'template' => $template,
            'invoice' => $invoice
        ];
        // dd(Storage::path($template->logo));
        $imageType = pathinfo($template->logo_url, PATHINFO_EXTENSION);
        // dd(pathinfo($template->logo_url), base_path());
        $imageData = file_get_contents(Storage::path('public') . '/' . $template->logo);
        $data['base64'] = 'data:image/' . $imageType . ';base64,' . base64_encode($imageData);
        // dd($template->logo_url, $data);
         // dd($data, $data['invoice']->items()->first()->article());
        // dd(
        $footer = '<div style="font-size: 10px; margin: 0 auto">Seite <span class="pageNumber"></span> von <span class="totalPages"></span></div>';

        return
            Pdf::view('invoices.default', $data)
            ->margins(30, 0, 20, 0, 'mm')
            ->headerView('invoices.components.header', $data)
            ->footerHtml($footer)
                // ->save(str_replace(' ', '', $invoice->client->name1).'.pdf')
            ->name(str_replace(' ', '', $invoice->client->name1));
        // );
        // return view('invoices.default', $data);
        // return view('invoices.components.header', $data);
        //

    }   //
}

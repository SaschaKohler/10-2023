@php
    $data = $this->form->getRawState();
    $viewModel = new \App\View\Model\InvoiceViewModel($this->Irecord,$this->record, $data);
    $viewSpecial = $viewModel->buildViewData();
    extract($viewSpecial,\EXTR_SKIP);
@endphp


{!! $font_html !!}

<style>
    .inv-paper {
        font-family: '{{ $font_family }}', sans-serif;
    }
</style>


<x-company.invoice.container class="modern-template-container">

    <!-- Colored Header with Logo -->
    <x-company.invoice.header class="bg-gray-800 h-20">
        <!-- Logo -->
        <div class="w-2/3">
            @if($logo && $show_logo)
                <x-company.invoice.logo class="ml-6" :src="$logo"/>
            @endif
        </div>

        <!-- Ribbon Container -->
        <div class="w-1/3 absolute right-0 top-0 p-2 h-28 flex flex-col justify-end rounded-bl-sm"
             style="background: {{ $accent_color }};">
            @if($header)
                <h1 class="text-3xl font-bold text-white text-center uppercase">{{ $header }}</h1>
            @endif
        </div>
    </x-company.invoice.header>

    <!-- Company Details -->
    <x-company.invoice.metadata class="modern-template-metadata space-y-6">
        <div class="text-xs">
            <h2 class="text-base font-semibold">{{ $company_name }}</h2>
            @if($company_address && $company_city && $company_state && $company_zip)
                <p>{{ $company_address }}</p>
                <p>{{ $company_city }}, {{ $company_state }} {{ $company_zip }}</p>
                <p>{{ $company_country }}</p>
            @endif
        </div>

        <div class="flex justify-between items-end">
            <!-- Billing Details -->
            <div class="text-xs">
                <h3 class="text-gray-600 dark:text-gray-400 font-medium tracking-tight mb-1">Rechnung an</h3>
                <p class="text-base font-bold" style="color: {{ $accent_color }}">{{ $client_name }}</p>
                <p>{{ $client_street }}</p>
                <p>{{ $client_zip }} {{ $client_city }}</p>
                <p>{{ $client_country }}</p>
            </div>

            <div class="text-xs">
                <table class="min-w-full">
                    <tbody>
                    <tr>
                        <td class="font-semibold text-right pr-2">Rechnungs Nr.:</td>
                        <td class="text-left pl-2">{{ $invoice_number }}</td>
                    </tr>
                    <tr>
                        <td class="font-semibold text-right pr-2">Datum:</td>
                        <td class="text-left pl-2">{{ $invoice_date }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-company.invoice.metadata>

    <!-- Line Items Table -->
    <x-company.invoice.line-items class="modern-template-line-items">
        <table class="w-full text-left table-fixed">
            <thead class="text-sm leading-8">
            <tr class="text-gray-600 dark:text-gray-400">
                <th class="text-left pl-6">{{ $item_qty }}</th>
                <th class="text-center">{{ $item_name }}</th>
                <th class="text-center">{{ $unit_name }}</th>
                <th class="text-right">{{ $price_name }}</th>
                <th class="text-right pr-6">{{ $amount_name }}</th>
            </tr>
            </thead>
            <tbody class="text-xs border-t-2 border-b-2 leading-8">
            @foreach ($order_items as $item)
            <tr>
                <td class="text-center">{{ $item->qty }}</td>
                <td class="text-left pl-6 font-semibold">{{ $item->article->short_text }}</td>
                <td class="text-center">{{ $item->unit }}</td>
                <td class="text-right">{{ $item->unit_price }}</td>
                <td class="text-right pr-6">{{ $item->sub_total }}</td>

            </tr>
            @endforeach
            </tbody>
            <tfoot class="text-xs leading-loose">
            <tr>
                <td class="pl-6" colspan="3"></td>
                <td class="text-right font-semibold">Zwischensumme:</td>
                <td class="text-right pr-6">{{ $sub_total }}</td>
            </tr>
            @if ($discount)
            <tr class="text-success-800 dark:text-success-600">
                <td class="pl-6" colspan="3"></td>
                <td class="text-right">Rabatt({{ $discount }}%)</td>
                <td class="text-right pr-6">{{ $discount_price }} </td>
            </tr>
            @endif
            <tr>
                <td class="pl-6" colspan="3"></td>
                <td class="text-right">Mehrwertsteuer (20%):</td>
                <td class="text-right pr-6">$102.60</td>
            </tr>
            <tr>
                <td class="pl-6" colspan="3"></td>
                <td class="text-right font-semibold border-t">Summe:</td>
                <td class="text-right border-t pr-6">{{ $total_price }}</td>
            </tr>
            <tr>
                <td class="pl-6" colspan="3"></td>
                <td class="text-right font-semibold border-t-4 border-double">Endbetrag (EURO):</td>
                <td class="text-right border-t-4 border-double pr-6">{{ $total_price }}</td>
            </tr>
            </tfoot>
        </table>
    </x-company.invoice.line-items>

    <!-- Footer Notes -->
    <x-company.invoice.footer class="modern-template-footer">
        <h4 class="font-semibold px-6" style="color: {{ $accent_color }}">Terms & Conditions</h4>
        <span class="border-t-2 my-2 border-gray-300 block w-full"></span>
        <div class="flex justify-between space-x-4 px-6">
            <p class="w-1/2 break-words line-clamp-4">{{ $terms }}</p>
            <p class="w-1/2 break-words line-clamp-4">{{ $footer }}</p>
        </div>
    </x-company.invoice.footer>
</x-company.invoice.container>


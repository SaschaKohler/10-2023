<?php

namespace App\Http\Controllers;

use App\Enums\DocumentType;
use App\Models\Order;
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

         // dd($data, $data['invoice']->items()->first()->article());
        return Pdf::view('invoices.invoice', $data);
        // return view('invoices.invoice', $data);
    }   //
}

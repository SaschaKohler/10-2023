<?php

namespace App\Http\Controllers;

use Spatie\Browsershot\Browsershot;
use Spatie\LaravelPdf\Facades\Pdf;
use App\Models\User;

class Invoices extends Controller
{
    public function generatePDF()
    {
         Browsershot::url('https:://google.com')
             ->noSandbox();



        $users = User::all();

        $users = $users->chunk(30);

        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'users' => $users
        ];

        return Pdf::view('invoices.invoice', $data);
    }   //
}

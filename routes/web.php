<?php

use App\Http\Controllers\Invoices;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get(
    '/', function () {
        return view('welcome');
    }
);
Route::prefix('admin')->group(
    function () {
        Route::get('invoices-print/{id}', [Invoices::class, 'generatePDF'])->name('invoices.print');
    }
);
// Route::get('/invoices/pdf-invoice',  [Invoices::class ,'generatePDF']);

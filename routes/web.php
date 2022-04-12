<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceLineController;
use App\Http\Controllers\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

route::get('/rentable', [CarController::class, 'rentable'])->name('rentable');

route::get('/rented', [CarController::class, 'rented'])->name('rented');

route::get('/rent/{id}', [CarController::class, 'rent'])->name('rent');

route::post('/rentThis/{id}', [CarController::class, 'rentThis'])->name('rentThis');



Route::resources([
    'cars' => CarController::class,
    'invoices' => InvoiceController::class,
    'invoiceLines' => InvoiceLineController::class,
    'settings' => SettingController::class,
]);

require __DIR__.'/auth.php';

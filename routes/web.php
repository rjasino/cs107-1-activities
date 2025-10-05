<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

Route::get(
    '/customers/create',
    [CustomerController::class, 'create']
)->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

Route::get('/customers/{id}', [CustomerController::class, 'show'])->name('customers.show');

Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::put('/customers/{id}', [CustomerController::class, 'update'])->name('customers.update');

Route::delete('/customers/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');

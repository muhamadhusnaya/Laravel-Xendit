<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('order');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/', [App\Http\Controllers\OrderController::class,'index']);
Route::post('/create-invoice', [App\Http\Controllers\OrderController::class,'createInvoice'])->name('createInvoice');
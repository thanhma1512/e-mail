<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-email', [OrderController::class, 'testEmail']);

Route::get('/order-confirmation', [OrderController::class, 'sendOrderConfirmation'])->name('order-confirmation');
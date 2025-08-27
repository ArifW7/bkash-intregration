<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BkashController;

Route::get('/', function () {
    return view('welcome');
});


// Checkout (URL) User Part
Route::get('/bkash-pay', [BkashController::class, 'payment'])->name('url-pay');
Route::post('/bkash-create', [BkashController::class, 'createPayment'])->name('url-create');
Route::get('/bkash-callback', [BkashController::class, 'callback'])->name('url-callback');

// Checkout (URL) Admin Part
Route::get('/bkash-refund', [BkashController::class, 'getRefund'])->name('url-get-refund');
Route::post('/bkash-refund', [BkashController::class, 'refundPayment'])->name('url-post-refund');
Route::get('/bkash-search', [BkashController::class, 'getSearchTransaction'])->name('url-get-search');
Route::post('/bkash-search', [BkashController::class, 'searchTransaction'])->name('url-post-search');
Route::get('/bkash-query/{paymentID}', [BkashController::class, 'queryPaymentAPI'])->name('url-get-query');


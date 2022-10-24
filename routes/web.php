<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;



Route::get('/', [IndexController::class, "index"]);
Route::prefix('su-kien')->name('su-kien.')->group(function () {
    Route::get('/tat-ca', [EventController::class, "index"]);
    Route::get('/chi-tiet-{id}/{slug}.html', [EventController::class, "detail"]);
});
Route::post('/dat-ve', [EventController::class, "order"]);
Route::post('/gui-ve-mail',[EventController::class,"sendTicketMail"]);
Route::post('/thanh-toan', [EventController::class, "checkout"]);
Route::get('/thanh-toan', [EventController::class, "PaymentPage"])->name('trang-thanh-toan')->middleware('CheckOrder');
Route::get('/thanh-toan-thanh-cong', [EventController::class, "checkoutSuccess"])->middleware('CheckoutSuccess');
Route::prefix('lien-he')->group(function () {
    Route::get('/', [ContactController::class, "index"]);
    Route::post('/gui', [ContactController::class, "_send"]);
});

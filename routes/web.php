<?php

use App\Http\Controllers\AdsController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');


 Route::get('/ads', [AdsController::class, 'index'])->name('ads.index');
 Route::get('/ads/create', [AdsController::class, 'create'])->name('ads.create');
 Route::post('/ads', [AdsController::class, 'store'])->name('ads.store');
 Route::get('/ads/{id}', [AdsController::class, 'show'])->name('ads.show');
 Route::get('/ads/{id}/edit', [AdsController::class, 'edit'])->name('ads.edit');
 Route::put('/ads/{id}', [AdsController::class, 'update'])->name('ads.update');
 Route::delete('/ads/{id}', [AdsController::class, 'destroy'])->name('ads.destroy');
 Route::post('/send-email', [EmailController::class, 'sendEmail'])->name('send.email');
 Route::get('/send-notification', [EmailController::class, 'sendNotification'])->name('send.notification');


Route::resource('ads', AdsController::class);
Route::resource('categories', CategoryController::class);

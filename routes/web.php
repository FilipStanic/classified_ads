<?php

use App\Http\Controllers\AdsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ads', [AdsController::class, 'index'])->name('ads.index');
Route::get('/ads/create', [AdsController::class, 'create'])->name('ads.create');
Route::post('/ads', [AdsController::class, 'store'])->name('ads.store');

Route::get('/ads/{id}', [AdsController::class, 'show'])->name('ads.show');


<?php

use App\Http\Controllers\AdsController;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/ads', [AdsController::class, 'showAds'] );

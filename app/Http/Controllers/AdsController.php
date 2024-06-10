<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function showAds()
    {
//      $ads = Ad::where('status', 'active')->orderBy('type', 'DESC')->get();
        $ads = Ad::orderBy('price', 'DESC')->get();
        return view('ads', compact('ads'));
    }
}

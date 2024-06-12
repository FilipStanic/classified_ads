<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use App\Models\Category;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ads = Ad::orderBy('price', 'desc')->get();

        return view('ads.index', compact('ads'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('ads.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'title' => 'required',
//            'content' => 'required',
//            'price' => 'required',
//            'category_id' => 'required',
//            'type' => 'required',
//        ]);

        Ad::create([
            'title' => $request->title,
            'content' => $request->input('content'),
            'price' => $request->price,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'user_id' => 1,
        ]);

//        Ad::create($request->all());
        return redirect()->route('ads.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ad = Ad::find($id);

        return view('ads.show', compact('ad'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

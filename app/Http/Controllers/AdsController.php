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
        $ads = Ad::orderBy('created_at', 'desc')->get();

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


        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'type' => 'required',
            'image' => 'image',
        ]);

        $image = $request->file('image');
        $image_name = $image->hashName();

        $image->storeAs('public/images', $image_name);

        $request->merge([
            'user_id' => auth()->user()->id ?? 1,
        ]);

        $ad = Ad::create($request->all());
        $ad->update(['image' => 'images/' . $image_name]);

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
        $ad = Ad::find($id);
        $categories = Category::all();

        return view('ads.edit', compact('ad', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'type' => 'required',
        ]);

        $ad = Ad::find($id);
        $ad->update($request->all());

        return redirect()->route('ads.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ad = Ad::find($id);
        $ad->delete();

        return redirect()->route('ads.index');
    }
}

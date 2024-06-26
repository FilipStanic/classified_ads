<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Ad;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();

        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        Category::create([
            'title' => $request->title,
        ]);

        return redirect()->route('categories.index');
    }


    public function show(string $id)
    {

    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        if (Ad::where('category_id', $category->id)->exists()) {
            return redirect()->route('categories.index')->with('error', 'Cannot delete category with associated ads.');
        }
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}

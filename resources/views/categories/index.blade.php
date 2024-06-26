@extends('layouts.layout-categories')

@section('title', 'Categories')

@section('categories-content')
    <ul style="list-style-type: none; padding: 0; text-align: center;">
        <li><a href="/">Home</a></li>
        <li><a href="/ads">Ads</a></li>
        <li><a href="/categories">Categories</a></li>
    </ul>

    <a href="{{route('welcome')}}"><--- Home Page</a>
    <br>
    <a href="{{route('categories.create')}}">Create Category</a>
    <div class="category-div">
        <ul class="categories-list">
            @foreach($categories as $category)
                <li>
                    <div class="category">
                        <p>Title: {{ $category->title }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

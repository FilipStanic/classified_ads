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
        <ul style="list-style-type: none;" class="categories-list">
            <h1>Titles: </h1>
            @foreach($categories as $category)
                <li>
                    <div class="category">
                        <p>{{ $category->title }}</p>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

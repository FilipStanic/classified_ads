@extends('layouts.layout-categories')

@section('title', 'Categories')

@section('categories-content')
    <ul style="list-style-type: none; padding: 0; text-align: center;">
        <li><a href="/">Home</a></li>
        <li><a href="/ads">Ads</a></li>
        <li><a href="/categories">Categories</a></li>
    </ul>

    <a href="{{route('categories.index')}}"><- Back</a>


@endsection


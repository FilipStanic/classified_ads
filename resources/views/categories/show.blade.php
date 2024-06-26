@extends('layouts.layout-categories')

@section('title', 'Categories')

@section('categories-content')
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/ads">Ads</a></li>
        <li><a href="/categories">Categories</a></li>
    </ul>

    <a href="{{route('categories.index')}}"><- Back</a>


@endsection


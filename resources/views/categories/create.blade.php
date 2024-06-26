@extends('layouts.layout-categories')

@section('title', 'Categories')
<ul style="list-style-type: none; padding: 0; text-align: center;">
    <li><a href="/">Home</a></li>
    <li><a href="/ads">Ads</a></li>
    <li><a href="/categories">Categories</a></li>

</ul>

<a href="{{route('categories.index')}}"><- Back</a>

<form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="input-div">
        <label for="title">Create New Title</label>
        <input type="text" value="{{ old('title') }}" name="title" id="title">
    </div>

</form>
@section('categories-content')
@endsection

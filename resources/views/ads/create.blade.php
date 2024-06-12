@extends('layouts.layout-ads')

@section('title', 'Ads')

@section('ads-content')
    <ul style="list-style-type: none; padding: 0; text-align: center;">
        <li><a href="/">Home</a></li>
        <li><a href="/ads">Ads</a></li>
    </ul>

    <a href="{{route('ads.index')}}"><- Back</a>


    <form action="/ads" method="POST">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" value="" name="title" id="title">
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" value="" name="price" id="price">
        </div>

        <div>
            <label>Type</label>

            <label for="free">Free</label>
            <input type="radio" value="free" name="type" id="free">
            <label for="paid">Paid</label>
            <input type="radio" value="paid" name="type" id="paid">
        </div>


        <div>
            <label for="category">Category</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">Create</button>
        </div>
    </form>

@endsection


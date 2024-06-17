@extends('layouts.layout-ads')

@section('title', 'Ads')

@section('ads-content')

    <ul style="list-style-type: none; padding: 0; text-align: center;">
        <li><a href="/">Home</a></li>
        <li><a href="/ads">Ads</a></li>
    </ul>

    <a href="{{route('ads.index')}}"><- Back</a>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/ads/{{$ad->id}}" method="POST">
        @method('PUT')
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" value="{{ old('title') ?? $ad->title }}" name="title" id="title">
{{--            {{$errors->first('title')}}--}}
        </div>

        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" cols="30" rows="10">{{ old('content') ?? $ad->content }}</textarea>
{{--            {{$errors->first('content')}}--}}
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" value="{{old('price') ??  $ad->price }}" name="price" id="price">
        </div>

        <div>



            <label>Type</label>

            <label for="free">Free</label>
            <input type="radio" value="free" name="type" id="free" @if(old('type') == 'free' || $ad->type == 'free') checked @endif>
            <label for="paid">Paid</label>
            <input type="radio" value="paid" name="type" id="paid" @if(old('type') == 'paid' || $ad->type == 'paid') checked @endif>
        </div>


        <div>
            <label for="category">Category</label>
            <select name="category_id" id="category_id">
                @foreach($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == old('category_id') || $category->id == $ad->category_id) selected @endif>{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <button type="submit">Save</button>
        </div>
    </form>

@endsection


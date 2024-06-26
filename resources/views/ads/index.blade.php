@extends('layouts.layout-ads')

@section('title', 'Ads')

@section('ads-content')
    <ul style="list-style-type: none; padding: 0; text-align: center;">
        <li><a href="/">Home</a></li>
        <li><a href="/ads">Ads</a></li>
        <li><a href="/categories">Categories</a></li>
    </ul>

    <a href="{{route('ads.create')}}">Create Ad</a>

    @foreach($ads as $ad)
        <div class="ad" style="@if($ad->type == 'paid') border: 1px solid red @else border: 1px solid blue @endif">
            <img src="{{ asset('storage/'.$ad->image) }}" alt="" width="150">
            <img src="{{ asset($ad->image) }}" alt="" width="150">
            <div style="display: flex">
                <div style="margin-left: 20px; width: 90%">
                    <p>Category: {{ $ad->category->title }}</p>
                    <h2><a href="/ads/{{$ad->id}}">{{ $ad->title }}</a></h2>
                    <p>{{ $ad->content }}</p>
                    <p>Author: {{ $ad->user->name }}</p>
                    <p>Price: <span style="font-weight: bold">{{ number_format($ad->price) }} Usd</span></p>
                </div>
                <div style="width: 20%">
                    <a href="/ads/{{$ad->id}}/edit">Edit</a>
                    <form action="/ads/{{$ad->id}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
@endsection


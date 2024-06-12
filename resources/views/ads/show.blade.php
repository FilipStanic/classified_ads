@extends('layouts.layout-ads')

@section('title', 'Ads')

@section('ads-content')
    <ul style="list-style-type: none; padding: 0; text-align: center;">
        <li><a href="/">Home</a></li>
        <li><a href="/ads">Ads</a></li>
    </ul>

    <a href="{{route('ads.index')}}"><- Back</a>

        <div class="ad" style="@if($ad->type == 'paid') border: 1px solid red @else border: 1px solid blue @endif">
            <img src="{{ $ad->image }}" alt="" width="150">
            <div style="margin-left: 20px">
                <p>Category: {{ $ad->category->title }}</p>
                <h2><a href="/ads/{{$ad->id}}">{{ $ad->title }}</a></h2>
                <p>{{ $ad->content }}</p>
                <p>Author: {{ $ad->user->name }}</p>
                <p>Price: <span style="font-weight: bold">{{ number_format($ad->price) }} Usd</span></p>
            </div>
        </div>

@endsection


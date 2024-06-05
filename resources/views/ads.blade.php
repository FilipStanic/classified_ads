<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .ad {
            display: flex;
            padding: 5px;
            margin: 10px;
        }
    </style>
</head>
<body>

<h1>ADS</h1>


@foreach($ads as $ad)
    <div class="ad" style="@if($ad->type == 'paid') border: 1px solid red; @endif">
        <img src="{{ $ad->image }}" alt="" width="150">
        <div style="margin-left: 20px;">
            <p>Category: {{ $ad->category->title }}</p>
            <h2>{{ $ad->title }}</h2>
            <p>{{ $ad->content }}</p>
            <p>Author: {{$ad->user->name}}</p>
            <p>Price: <span style="font-weight: bold">{{ number_format($ad->price) }} usd</span></p>
        </div>
    </div>
@endforeach
</body>
</html>

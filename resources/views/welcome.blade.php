@extends('layouts.layout-welcome')

@section('title', 'Welcome')

@section('content')
    <style>

        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Open Sans", sans-serif;
        }

        .page {
            text-align: center;
        }

        h1 {
            font-family: "Open Sans", sans-serif;
            margin-bottom: 20px;
        }

        a {
            text-decoration: none;
            font-size: xx-large;
        }
    </style>

    <h1>Welcome to the main page</h1>
    <ul style="list-style-type: none; padding: 0;">
        <li><a href="/">Home</a></li>
        <li><a href="/ads">Ads</a></li>
    </ul>
@endsection


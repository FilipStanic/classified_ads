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
            font-weight: bold;
            font-size: xx-large;
        }

        a {
            text-decoration: none;
            font-size: xx-large;
        }

        button {
            padding: 10px;
            font-weight: bold;
            background-color: #c3ffff;
            border-color: gray;
            border-radius: 10px;
            margin-top: 10px;
        }
        button:hover {
            cursor: pointer;
        }

    </style>

    <div>
        <h1>Welcome to the main page</h1>
        <ul style="list-style-type: none; padding: 0;">
            <li><a href="/">Home</a></li>
            <li><a href="/ads">Ads</a></li>
            <li><a href="/categories">Categories</a></li>
        </ul>
    </div>


    <form action="{{ route('send.email') }}" method="POST">
        @csrf
        <button type="submit">Send an email to Admin</button>
    </form>


    <form action="{{ route('send.notification') }}" method="GET">
        @csrf
        <button type="submit">Send the notification to Admin</button>
    </form>


    <form action="{{ route('start.job') }}" method="GET">
        @csrf
        <button type="submit">Start Job</button>
    </form>

    <form action="{{ route('start.event') }}" method="GET">
        @csrf
        <button type="submit">Start Event</button>
    </form>

@endsection


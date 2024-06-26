<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">


    <style>
        * {
            font-family: "Open Sans", sans-serif;
        }

        a {
            text-decoration: none;
            font-size: xx-large;
        }

        .category-div {
            display: flex;
            width: 500px;
            padding: 5px;
            margin: 10px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
@yield('categories-content')
</body>
</html>

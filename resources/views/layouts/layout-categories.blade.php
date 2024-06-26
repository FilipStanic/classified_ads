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
            flex-direction: column;
            align-items: center;
            padding: 5px;
            margin: 10px;
        }

        .category-div ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .category-div li {
            border: 1px solid black;
            width: 50%;
            margin: 5px 0;
            padding: 10px;
            text-align: center;
            font-size: larger;
            font-weight: bold;
        }


        .input-div {
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .input-div label {
            display: block;
            margin-bottom: 10px;
        }

        .input-div input {
            width: 400px;
            padding: 5px;
            font-size: 16px;
        }
    </style>
</head>
<body>
@yield('categories-content')
</body>
</html>

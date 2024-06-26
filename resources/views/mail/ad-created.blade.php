<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        p {
            padding: 10px;
        }

        small {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: deeppink;
        }
    </style>
</head>
<body>

<h1>Ad Created</h1>
<p>Your ad has been created successfully.</p>
<p>Title: {{$ad->title}}</p>
<p>Content: {{$ad->content}}</p>

<small>Thank you for using our application.</small>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> * My First Projet * </h1>
    <p> Welcome User! </p>

    <form action="http://127.0.0.1:8000/" method="get">
        <input type="submit" value="Go to Welcome" />
    </form>
    <img src="{{ URL::to('images/background.jpg') }}" alt="picture" width=1000 height=400>
</body>
</html>
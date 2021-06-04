<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <p> Pogi ni Von Aralar mahilig pumunta sa George Town </p>
    
    <form action="http://127.0.0.1:8000/kahitano" method="get">
        <input type="submit" value="Go to Home" />
    </form>

    <img src="{{ URL::to('images/image.jpg') }}" alt="picture">
</body>
</html>
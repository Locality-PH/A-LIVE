<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> A LIVE - HOME PAGE </title>
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <link rel="stylesheet" href={{ URL::asset('css/home.css') }}>
</head>
<style> 
body{
    background-image: url('{{ asset ('pic/background.jpg') }}');
    background-size: cover;
}

</style>
<body>
<nav>
    <label class="logo">A-LIVE</label>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About Us</a></li>
    </ul>
</nav>
</body>
</html>
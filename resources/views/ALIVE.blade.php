<!DOCTYPE html>
<html>
<head>
<style>
body{
      background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('{{ asset ('pic/vack.jpg') }}');
      background-size: cover;
  }
</style>
<title> A-LIVE-HOME </title>
<link rel="stylesheet" href={{ URL::asset('css/home.css') }}>
</head>
<body>
<header>
  <div class="main">
     <div>
      <ul>
      <div class="logo">
     <img src="{{ URL::to('pic/logo.png') }}" alt="picture" >
           </div>
             <li><a href="#">Bussiness</a></li>
             <li><a href="#">Stream</a></li>
             <li><a href="#">Games</a></li>
             <li  class="active"><a  href="#">Home</a></li>
      </ul>
    </div>
  </div>
</header>
  <div class="title">

    <h1>ANIME FAN WORLD</h1>   
  </div>
<div class="button">
  <a href="#" class="btn">GET STARTED</a>

</div>
</body>
</html>

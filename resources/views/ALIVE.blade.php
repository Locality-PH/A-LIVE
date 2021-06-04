<!DOCTYPE html>
<html>
<head>
<style>
body{
      background-image: url('{{ asset ('pic/vack.jpg') }}');
      background-size: cover;
  }
</style>
<title> A-LIVE-HOME </title>
<link rel="stylesheet" href={{ URL::asset('css/home.css') }}>
</head>
<body>
<nav> 
<ul>
    <label class="logo">A-LIVE</label>
 
    <li><a href="#bussiness">Bussiness</a></li>
  <li><a href="#stream">Stream</a></li>
  <li><a href="#game">Games</a></li>
  <li><a  class="active" href="#home">Home</a></li>
</ul>
</nav>


</body>
</html>

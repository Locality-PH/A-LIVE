<!DOCTYPE html>
<html>
<head>
<style>
  section.page1{
      background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('{{ asset ('pic/bc.jpg') }}');
      background-size: cover;
  }
  section.page2{
      background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('{{ asset ('pic/vack.jpg') }}');
      background-size: cover;
  }
</style>
<title> A-LIVE-HOME </title>
<link rel="stylesheet" href={{ URL::asset('css/home.css') }}>
</head>

<body>
<div class="container">
  <nav class="navbar">
    <div class="main">
      <div>
        <ul>
            <div class="logo">
              <img src="{{ URL::to('pic/logo.png') }}" alt="picture" >
            </div>
                <li><a href="#business">Bussiness</a></li>
                <li><a href="#stream">Stream</a></li>
                <li><a href="#games">Games</a></li>
                <li  class="active"><a  href="#home">Home</a></li>
       </ul>
     </div>
   </div>
  </nav>
  <section class="page1">
          <div class="title">

           <h1>ANIME FAN WORLD</h1>   
          </div>
          <div class="button">
           <a href="#button1" class="btn">GET STARTED</a>
          </div>

  </section>
</div>
 
  <section class="page2">
  <div class="title">
    <h2>BECOME A STREAMER</h2> 
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin quis rutrum ex. Praesent euismod augue eu pulvinar mollis. Ut vel erat finibus,</p>
  </div>
  <div class="imgs">
  <img src="{{ URL::to('pic/imgs.jpg') }}" alt="picture" >
  </div>
  <div class="button">
           <a href="#button1" class="btn">Start Now</a>
          </div>
  </section>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{ URL::asset('css/live.css') }}>
    <title>A-LIVE</title>
</head>
<body>
    <div class="live">
        <div class="nav">
            <div class="logo">
            <img src="{{ URL::to('pic/logo.png') }}" alt="picture" >
            </div>
              <div class="navlinks">
                 <ul>
                 <li  class="active"><a  href="#home">HOME</a></li>
                 <li><a href="#games">GAMES</a></li>
                 <li><a href="#stream">STREAM</a></li>
                 <li><a href="#business">BUSINESS</a></li> 
                 <li><a href="#login">LOGIN</a></li> 
                 </ul>
              
              </div>
            </div>
        <div class="titlebanner">
            <h1>ANIME FAN WORLD</h1>
            <p>An open platform community created <br> to express love for Anime</p>
            <button type="button" class="btn">GET STARTED</button>
        </div>
    
    </div>
</body>
</html>
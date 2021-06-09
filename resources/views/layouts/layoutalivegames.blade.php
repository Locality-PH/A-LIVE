<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>A-Live Games</title>
    <style>
      .aliveBN
      {
        color: #00fff6;
        font-weight:bold;
      }
      .aliveBN:hover
      {
        animation: pulse 3s infinite;
      }
      @keyframes pulse
      {
        0%
          {
            color:#00e4dc;
          }
        100%
          {
            color:#00fff6;
          }
      }
      .homeN, .gamesN, .streamN, .businessN
      {
        color: #ffffff;
      }
      .homeN:hover, .gamesN:hover, .streamN:hover, .businessN:hover
      {
        color:#cccccc;
      }
      .itemHome:hover, .itemGames:hover, .itemStream:hover, .itemBusiness:hover
      {
        background-color: #52585e;
      }
      .itemHome, .itemGames, .itemStream, .itemBusiness
      {
        border-radius: 5px;
      }
     </style>
  </head>
  <body>
      <div class="navbar-alive" style="min-width: 300px;">
        <nav class="navbar navbar-expand-lg bg-secondary">
          <div class="container-fluid">
            <a class="navbar-brand aliveBN" href="#">A-LIVE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleXxl" aria-controls="navbarsExampleXxl" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarsExampleXxl">
              <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                <li class="nav-item itemHome">
                  <a class="nav-link active homeN" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item itemGames">
                  <a class="nav-link active gamesN" aria-current="page" href="#">Games</a>
                </li>
                <li class="nav-item itemStream">
                  <a class="nav-link active streamN" aria-current="page" href="#">Stream</a>
                </li>
                <li class="nav-item itemHome">
                  <a class="nav-link active businessN" aria-current="page" href="#">Business</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!--container-->
      <div class="searchbar container-fluid mt-4">
        <div class="row justify-content-center">
          <div class="col-6">
            <form>
              <div class="row justify-content-center">
                <div class="col-10" style="max-width: 600px;">
                    <input class="form-control searchbar" type="text" placeholder="Search" aria-label="Search" style="border-radius: 0px; border:2px solid #6c757d; min-width: 100px;">
                </div>
                <div class="col-2" style="max-width: 200px;">
                    <button type="button" class="btn btn-secondary"><img src="{{ URL::to('images/search.svg') }}" height="25px" width="25px"></button>
                </div>
              </div>
            </form>
          </div>
        </div> 
      </div>

      @yield('designitems1')

      @yield('items')

        <div class="container footer1">
           <div class="row" style="height: 500px;">
              <div class="display-3 d-flex justify-content-center mt-5">All Rights Reserve 2021 Copyright A-LIVE</div>
            </div>
          </div>
        </div>







    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>
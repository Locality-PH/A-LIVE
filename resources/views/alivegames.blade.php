@extends("layouts.layoutalivegames")

@section('designitems1')
<style>
        .item0
        {
          background-image: url('images/sao.png');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          box-shadow: 1px 5px 15px 5px #888888;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px;  
          border-radius: 10px;
        }
        .item0:hover
        {
          background: linear-gradient( rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2) ), url('images/sao.png');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px;  
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
        .item1
        {
          background-image: url('images/naruto.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px; 
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
        .item2
        {
          background-image: url('images/op.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px;  
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
        .item3
        {
          background-image: url('images/7ds.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px;  
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
        .item4
        {
          background-image: url('images/dbz.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px;  
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
        .item5
        {
          background-image: url('images/kmy.jpeg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px;  
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
        .item6
        {
          background-image: url('images/agk.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px;  
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
        .item7
        {
          background-image: url('images/gundam.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px; 
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
        .item8
        {
          background-image: url('images/blends.jpg');
          background-repeat: no-repeat;
          background-size: 100% 100%;
          background-position: center;
          height: auto;
          width: auto;
          min-width: 300px; max-width: 300px;
          min-height: 300px; max-height: 300px; 
          border-radius: 10px;
          box-shadow: 1px 5px 15px 5px #888888;
        }
      </style>
@endsection
@section('items')
<div class="container">
          <div class="row justify-content-center">
            <!--1st column-->
              <div class="col m-4 item0 mt-5"><div class="itemcont0"></div></div>
              <div class="col m-4 item1 mt-5"></div>
              <div class="col m-4 item2 mt-5"></div>
            <!--2nd column-->
              <div class="col m-4 item3 mt-5"></div>
              <div class="col m-4 item4 mt-5"></div>
              <div class="col m-4 item5 mt-5"></div>
            <!--3rd column-->
              <div class="col m-4 item6 mt-5"></div>
              <div class="col m-4 item7 mt-5"></div>
              <div class="col m-4 item8 mt-5"></div>
          </div>
          
        </div>
@endsection
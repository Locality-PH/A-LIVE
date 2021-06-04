<!DOCTYPE html>
<html>
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
 
}
li {
  float: right;
  
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 6px 13px;
  text-decoration: none;
 
}
li a:hover {
  background-color: #19FFFF;
}
body{
    background-image: url('{{ asset ('pic/vack.jpg') }}');
    background-size: cover;
}
label.logo{
    color:#19FFFF;
    font-size: 25px;
    margin:0;
    padding: 8px 100px;
    font-weight:bold;

}
</style>
<title> A-LIVE-HOME </title>
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

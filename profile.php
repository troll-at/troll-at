<?php
session_start();
if (!empty($_SESSION['username'])) {
}else{
    header('Location: login.php');

}

  
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-color:#ffe0b9;
}
#trol{
	background-color:#ff9a00;
	margin-left:50px;
	color:black;
}
.topnav {
  overflow: hidden;
  background-color: #ff9a00;
  overflow-x: hidden;
  position:fixed;
  width:100%;
}

.topnave {
  overflow: hidden;
  background-color: #ff9a00;
}
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.topnave a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 20px 16px 10px;
  text-decoration: none;
  font-size: 17px;
  height:30px;
}
.topnav>input{
	float: left;
  display: block;
  margin-left:40px;
  color: black;
  margin-top:12px;
  width:200px;
  text-align: left;
  padding-left:10px;

  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #f97100;
  color: black;
}
.topnave a:hover {
  background-color: #f97100;
  color: black;
}

.topnav a#activee {
  background-color: #f28600;
  color: white;
  margin-left:254px;
}
.topnave a#activee {
  background-color: #f28600;
  color: white;
  margin-left:254px;
}

.topnav .icon {
  display: none;
}
.principale_imgs{
	width: 100%;
	background-image:url('images/index.jpg');
	background-repeat:no-repeat;
	background-size:100% 280px;
	height: 280px;
}
.principale_imgs>span{
  color:green;
  font-family: Arial, Helvetica, sans-serif;
  font-size:20px;
  color:white;
  padding-left:0;
}
#user_img{
	height:118px;
	border-radius:50%;
	border:solid white 2px;
	margin-top:178px;
	margin-left:40px;
}
.trolls{
	background-color:white;
	width : 600px;
  color:black;
	margin-top:50px;
  margin-left:100px;
  height:1000px;


}
#profile_photo{
	width:48px;
	border:solid 0.5px white;
	border-radius:50%;
  margin-left:20px;
  padding-top:10px;
}
#posted-image{
  width:600px;
  padding-top:5px;
}
.sidenav {
  width: 400px;
  position:absolute;
  top: 400px;
  right: 30px;
  background: white;
  padding: 8px 0;
  top:400px;
}

.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 25px;
  color: black;
  display: block;
}

.sidenav a:hover {
  color: black;
}
#a{
  color:white;
  background:#f97100;
  border:1px #f97100 solid;
  height: 30px;
  margin-left:20px;
  width:80px;
}
@media screen and (max-width: 1139px) {
.sidenav{
  display: none;
}
}
@media screen and (max-width: 830px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
  .topnave {
  overflow: hidden;
  background-color: #ff9a00;
  padding-top:40px;
}
.topnave a#activee {
	margin-left:0;
}
  .topnave a {
  float: left;
  width:55px;
  display: block;
  margin-top:10px;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 16px;
}
  #trol{
  	margin-left:0;
  }
  .topnav a#activee{
  	margin-left:190px;
  }
  .topnav>input{
    width: 100%;
    height:10px;
  font-size: 18px;
  padding: 11px;
  margin-left:0;
  border: 1px solid #ddd;
}

#trol{
	padding-left:40%;
  }
}

@media screen and (max-width: 830px) {
  .trolls{
  background-color:white;
  width : 400px;
  color:black;
  margin-top:50px;
  margin-left:100px;
  height:850px;
  

}
#profile_photo{
  width:48px;
  border:solid 0.5px white;
  border-radius:50%;
  margin-left:20px;
  padding-top:10px;
}
#posted-image{
  width:400px;
  padding-top:5px;
}
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }

.sidenav{
  display: none;
}
}
@media screen and (max-width:347px){
	#user_img{
	height:128px;
	border-radius:50%;
	border:solid white 2px;
	margin-top:188px;
	margin-left:110px;
}
.principale_imgs>span{
  color:black;
  font-family: Arial, Helvetica, sans-serif;
  font-size:20px;
  margin-bottom:20px;
  padding-left:135px;
}  
.topnave{
  padding-top:80px;
  padding-left:15px;
}

.sidenav{
  display: none;
}

.trolls{
  background-color:white;
  width : 200px;
  color:black;
  margin-top:50px;
  margin-left:40px;
  height:400px;
  

}
#profile_photo{
  width:48px;
  border:solid 0.5px white;
  border-radius:50%;
  margin-left:10px;
  padding-top:10px;
}
#posted-image{
  width:200px;
  padding-top:5px;
}
}
@media screen and (max-width:450px){

.trolls{
  background-color:white;
  width : 300px;
  color:black;
  margin-top:50px;
  margin-left:40px;
  height:400px;
  

}
#profile_photo{
  width:48px;
  border:solid 0.5px white;
  border-radius:50%;
  margin-left:10px;
  padding-top:10px;
}
#posted-image{
  width:300px;
  padding-top:5px;
}
}

@media screen and (max-width: 350px) {
  .trolls{
  background-color:white;
  width : 100%;
  color:black;
  margin-top:50px;
  margin-left:23px;
  height:400px;
  

}
#profile_photo{
  width:48px;
  border:solid 0.5px white;
  border-radius:50%;
  margin-left:10px;
  padding-top:10px;
}
#posted-image{
  width:300px;
  padding-top:5px;
}
}
@media screen and (max-width: 350px) {

.trolls{
  background-color:white;
  width : 100%;
  color:black;
  margin-top:120px;
  margin-left:0px;
  height:400px;
  

}
#profile_photo{
  width:48px;
  border:solid 0.5px white;
  border-radius:50%;
  margin-left:10px;
  padding-top:10px;
}
#posted-image{
  width:100%;
  padding-top:5px;
}}
</style>
</head>
<body>

<div class="topnav" id="myTopnav">
  <a id="trol" href="">TROLL-AT</a>
  <a href="#news">Home</a>
  <a href="#contact">followers</a>
  <a href="#about">following</a>
  <a href="search.php">Search</a>
  <a href="">Post</a>
  <a href="">Settings</a> <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<nav class="principale_imgs">
	<img id="user_img" src="images/index.png" align="bottom"><span>Chouaib</span>
</nav>
<div class="topnave" id="Topnav">
  <a id="activee" href="#news">Home</a>
  <a href="#contact">followers</a>
  <a href="#about">following</a>
  <a href="">Settings</a>
 </div>
  <div class="sidenav">
  <a href="#about">followers : <strong>100K</strong></a>
  <a href="#services">following : <strong>1M</strong></a>
  <a href="#clients"><button id="a">Follow</button></a>

</div>
<nav  class="trolls">
  <img id="profile_photo" src="images/index.png">
  <img id="posted-image" src="images/img1.jpg">
</nav>

<nav  class="trolls">
  <img id="profile_photo" src="images/index.png">
  <img id="posted-image" src="images/img1.jpg">
</nav>
<nav  class="trolls">
  <img id="profile_photo" align="middle" src="images/index.png"><span style="padding-left:20px;">chouaib</span>
  <img id="posted-image" src="images/img1.jpg">
</nav>





<!-- Footer -->
<footer style="background-color:#ff9700;margin-top:50px;" class="page-footer font-small blue">

  <!-- Copyright -->
  <div style="padding-top:30px;padding-bottom:25px;color:#ddd" align="center" class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="" style="text-decoration-line:none;color:white"> Troll-At.github.io</a>
  </div>
  <!-- Copyright -->
  <div align="center" style="background-color:#ff5000;padding-top:15px;padding-bottom:10px;">
    Created by Mohamed chouaib Loumedene
  </div>
</footer>
<!-- Footer -->






<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html>
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
	<link rel="stylesheet" type="text/css" href="css/pro.css">
	<title>POST</title>
</head>
<body style="background:#ff7700">
<body>

<div class="topnav" id="myTopnav">
  <a id="trol" href="">TROLL-AT</a>
  <a href="">followers
  <a href="#about">following</a>
  <a href="search.php">Search</a>
  <a href="post.php">Post</a>
  <a href="">Settings</a> <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="topnave" id="Topnav">
  
 
 </div>
<div align="center" style="color: white;margin-top: 100px;"><h1>Select an troll to post it please</h1></div>
<form action="posted.php" method="post" enctype="multipart/form-data">
    <div align="center">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input  type="submit" value="Upload Image" name="submit">
</div>
</form>
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
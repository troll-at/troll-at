<?php
session_start();
if (!empty($_SESSION['username'])) {

}else{
    header('Location: login.php');

}
?>
<?php
?>
<?php
$user = $_SESSION['username'];
 $db = mysqli_connect("127.0.0.1", "root", "", $user);
 $query="SELECT * FROM `image`";
 $result=mysqli_query($db , $query);
 while ($row = mysqli_fetch_assoc($result)) {

?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/pro.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="topnav" id="myTopnav">
  <a id="trol" href="">TROLL-AT</a>
  <a href="#news">Home</a>
  <a href="#contact">followers</a>
  <a href="#about">following</a>
  <a href="search.php">Search</a>
  <a href="post.php">Post</a>
  <a href="settings.php">Settings</a> 
  <a href="deconexion.php">Logout</a><a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<nav style="background-image: url('<?php echo $row['image'];?>')" class="principale_imgs">
  <img width="128px" id="user_img" src="<?php $use=$row['image']; echo $use;}?>" align="bottom"><span><?php echo $_SESSION['username'];?></span>
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
<?php
$username =$_SESSION['username'];
 $db = mysqli_connect("127.0.0.1", "root", "", $username);
 $query="SELECT * FROM `$username`";
 $result=mysqli_query($db , $query);
 while ($row = mysqli_fetch_assoc($result)) {
  echo "
  <nav class='trolls'>
  <img id='profile_photo' src='".$use."'>
  <img id='posted-image' src='".$row['images']."'>
  </nav>";
}
?>




<!-- Footer -->
<footer style="background-color:#ff9700;margin-top:50px;" class="page-footer font-small blue">

  <!-- Copyright -->
  <div style="padding-top:30px;padding-bottom:25px;color:#ddd" align="center" class="footer-copyright text-center py-3">© 2019 Copyright:
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
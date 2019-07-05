<?php
 $db = mysqli_connect("127.0.0.1", "root", "", "chouaib");
 $query="SELECT * FROM `image`";
 $result=mysqli_query($db , $query);
 while ($row = mysqli_fetch_assoc($result)) {
 
?>
<!DOCTYPE html>
<html>
<title>Settings</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/pro.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey w3-content" style="max-width:1600px;background-color:#ffe0b9;">
<div style="background-color:#ffe0b9;">
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar">
  <div>
  <br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="<?php echo $row['image'];} ?>" style="width:45%;" class="w3-round"><br><br>
    <h4><b><?php echo "Chouaib";?></b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="#portfolio" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">POSTs</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Passsword</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Followers</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Following</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-padding">Logout</a>
  </div><dir></dir>
  </div>
</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">
    <a href="#"><img src="/w3images/avatar_g2.jpg" style="width:65px;" class="w3-circle w3-right w3-margin w3-hide-large w3-hover-opacity"></a>
    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b><?php echo "Chouaib"?></b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">

    <div class="w3-third w3-container w3-margin-bottom">
      <a href=""><img src="images/password.png" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Password</b></p></a>
        
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <a href=""><img src="images/followers.png" alt="Norway" style="width:100%;height:200px;"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Followers</b></p></a>
        
      </div>
    </div>
    <div class="w3-third w3-container">
      <a href=""><img src="images/folloing.png" alt="Norway" style="width:100%;height:200px;" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Follwing</b></p></a>
        
      </div>
    </div>
  </div>
  
  <!-- Second Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <a href=""><img src="images/logout.png" alt="Norway" style="width:100%;height:200px;" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>Logout</b></p></a>
        
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="images/POSTs.jpg" alt="Norway" style="width:100%;height:200px;" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <p><b>POSTs</b></p>
      </div>
            </div>
    <br>
  <!-- Pagination -->
  <!-- Images of Me -->
  <div class="w3-row-padding w3-padding-16" id="about">
    <div class="w3-col m6">
      <img src="/w3images/avatar_g.jpg" alt="Me" style="width:100%">
    </div>
    <div class="w3-col m6">
      <img src="/w3images/me2.jpg" alt="Me" style="width:100%">
    </div>
  </div>

  <br>
  <footer style="width:100%;background-color:#ff9700;margin-top:50px;" class="page-footer font-small blue">

  <!-- Copyright -->
  <div style="padding-top:30px;padding-bottom:25px;color:#ddd" align="center" class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="" style="text-decoration-line:none;color:white"> Troll-At.github.io</a>
  </div>
  <!-- Copyright -->
  <div align="center" style="background-color:#ff5000;padding-top:15px;padding-bottom:10px;">
    Created by Mohamed chouaib Loumedene
  </div>
</footer>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>
</div>
</body>
</html>

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
<form action="posted.php" method="post" enctype="multipart/form-data">
    <div align="center">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input  type="submit" value="Upload Image" name="submit">
</div>
</form></div>
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
<?php
session_start();
$username = $_SESSION['username'];
$dbconn=mysqli_connect("127.0.0.1", "root", "", $username);
$target_dir = "$username\ ";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$rand = rand(000,100000000000);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        
    }
}
// Check if file already exists
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "<div style='color:white;margin-top:100px;' align='center'><h1>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</h1></div>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "<div style='color:white;margin-top:100px;' align='center'><h1>Sorry, your file was not uploaded.</h1></div>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    	$lin=basename( $_FILES["fileToUpload"]["name"]);
        $line=$username."/".$lin;
    	$mysql="INSERT INTO $username (images) VALUES ('$line')";
    	if (mysqli_query($dbconn, $mysql)) {
    		echo "
    <div style='color:white;margin-top:100px;' align='center'><h1>Your photo has been uploaded</h1><a href='user-profile.php'><button style='backgound-color:green;font-size:25px;text-decoration:none;color:white;background-color:red;border:solid 1px red;'>go to your profile</button></a></div>";

    	} else {
        echo "

    <div style='color:white;margin-top:100px;' align='center'><h1>Sorry, there was a problem</h1></div>
";
    }
}}
?>

<?php
session_start();

$username = $_SESSION['usernam'];
$dbconn=mysqli_connect("127.0.0.1", "root", "", $username);
$target_dir = "$username\ ";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
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
    	$mysql="INSERT INTO image (image) VALUES ('$line')";
    	if (mysqli_query($dbconn, $mysql)) {
    		echo "
    <div style='color:white;margin-top:100px;' align='center'><h1>upload the couverture photo</h1><a href='insert-couv.php'><button style='backgound-color:green;font-size:25px;text-decoration:none;color:white;background-color:red;border:solid 1px red;'>Continue</button></a></div>";

    	} else {
        echo "<div style='color:white;margin-top:100px;' align='center'><h1>Sorry, there was a problem</h1></div>";
    }
}}
?>
<!DOCTYPE html>
<html>
<head>
    <title>profile photo</title>
</head>
<body style="background-color:#ff9700;">

</body>
</html>
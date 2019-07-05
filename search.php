<?php
session_start();
if (!empty($_SESSION['username'])) {
  
}else{
    header('Location: login.php');

}
?>
<?php
 $db = mysqli_connect("127.0.0.1", "root", "", "trollat-login-signin");
 $query="SELECT * FROM `troll-at-users` ";
 $result=mysqli_query($db , $query);
 while ($row = mysqli_fetch_assoc($result)) {

 }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/sit.css">
	<link rel="stylesheet" type="text/css" href="css/site.css">
	<title></title>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a id="trol" href="">TROLL-AT</a>
  <a href="#news">Home</a>
  <a href="#contact">followers</a>
  <a href="#about">following</a>
  <a href="search.php">search</a>
  <a href="">Settings</a> <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<br>

<nav class="trolls"><br>
<form method="post" action="result.php">
	<input id="myInput" onkeyup="myFunction()" type="text" placeholder="search..." name="userse" style="border: 1px solid #ff9700;"><button type="submit" name="search" style="margin-top:12px;border:1px solid #ff9700;background-color:#ff9700;color:white;font-size:19px;">search</button>
</form><br>
<div style="font-size:25px;padding-left: 20px;padding-bottom:10px;color:#ff9700;">Results :</div>
<div style="overflow-y: scroll;height:650px;width:600px;display: inline-block;">
<?php
 $db = mysqli_connect("127.0.0.1", "root", "", "trollat-login-signin");
 $query="SELECT * FROM `troll-at-users` ";
 $result=mysqli_query($db , $query);
 while ($row = mysqli_fetch_assoc($result)) {
 	echo "<table  id='myTable' style='border-collapse: collapse;width: 100%;border: 1px solid #ddd;font-size: 18px;'><tr style='border-bottom: 1px solid #ddd;'><td style='  text-align: left;padding: 12px;'>".$row['username']."<td><tr></table>";
 }
?>

</div>
</nav>
<script>
function mFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
function follow(){
document.getElementById("follow-button").style.background = "#ff9700";
document.getElementById('follow-button').innerHTML = "following";
</script>

}
</script>

</body>
</html>
<?php
session_start();
if (!empty($_SESSION['username'])) {
  
}else{
    header('Location: login.php');

}
?>
<?php

 
 $query="SELECT * FROM `troll-at-users` ";
 $result=mysqli_query($db , $query);
 while ($row = mysqli_fetch_assoc($result)) {

 }
if(isset($_POST['search']))
{
    // id to search
    $id = $_POST['userse'];
    
    // connect to mysql
    $db = mysqli_connect("127.0.0.1", "root", "", "trollat-login-signin");
    
    // mysql search query
    $query = "SELECT * FROM `troll-at-users` ";
    
    $result = mysqli_query($connect, $query);
    
    // if id exist 
    // show data in inputs
    
      while ($row = mysqli_fetch_assoc($result))
      {
        $fname = $row['fname'];
        $lname = $row['lname'];
        $age = $row['age'];
      }  
    
    
    // if the id not exist
    // show a message and clear inputs

    

    mysqli_close($connect);
    
}

// in the first time inputs are empty
else{
    $fname = "";
    $lname = "";
    $age = "";
}


?>


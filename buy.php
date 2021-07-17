<?php
session_start();
?>



<?php 

$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}
mysqli_select_db($conn,'test');
$sex=$_SESSION['email'];
$method = $_POST['method'];
$code = $_POST['code'];
$package = $_POST['package'];
$date = $_POST['date'];
$query = "insert into payment (email, method, code, package, date)
values('$sex','$method','$code', '$package', '$date') ";

// echo "$query";

$query_run=mysqli_query($conn,$query);

if($query_run){
    echo '<script type = "text/javascript"> alert("Your confirmation form has been accepted.") </script>';
}
else {
    echo '<script type = "text/javascript"> alert("Something went wrong! Please try again later.") </script>';
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="refresh" content="0; url='home.php'" />
  </head>
  <body>
    
  </body>
</html>
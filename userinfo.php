<?php 

$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}
mysqli_select_db($conn,'test');
$user = $_POST['user'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$comment = $_POST['comment'];

$query = "insert into login (user, email, pass, comment)
values('$user','$email', '$pass', '$comment') ";




echo "$query";

mysqli_query($conn,$query);

header('location:login.php');
?>
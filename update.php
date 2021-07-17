<?php 
session_start();
header('location:signIn.php');
$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}

$sex=$_SESSION['email'];

mysqli_select_db($conn,'test');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$phone = $_POST['phone'];

$s = "select * from registerdata where email = '$email'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    echo "Email Already Taken";

}
else{
 $query = "update registerdata set firstname = '$firstname', lastname = '$lastname', email = '$email', password = '$password', country ='$country', phone = '$phone' where email = '$sex'";
 $query2 = "update payment set email = '$email' where email = '$sex'";
mysqli_query($conn,$query);
mysqli_query($conn,$query2);
echo" Registration Successful";
}


// echo "$query";
 

// header('location:register.php');
?>
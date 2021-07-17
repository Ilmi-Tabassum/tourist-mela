<?php 
session_start();
header('location:signIn.php');
$conn = mysqli_connect("localhost", "root", "WhateverPassword");

if($conn){
    echo "Connection success";
}else{
    echo " NoConnection";
}
mysqli_select_db($conn,'test');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$country = $_POST['country'];
$phone = $_POST['phone'];
$image = $_FILES['file'];

print_r($firstname);
print_r($lastname);
print_r($email);
print_r($password);
print_r($country);
print_r($phone);
//print_r($image);


$filename = $image['name'];
print_r($filename);
$fileerror = $image['error'];
$filetmp = $image['tmp_name'];

//12.jpg how to get extension
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileextstored = array('png', 'jpg', 'jpeg');

if(in_array($filecheck, $fileextstored)){
    $destinationfile = 'upload/' .$filename;
    move_uploaded_file($filetmp,$destinationfile);
}



$s = "select * from registerdata where email = '$email'";
$result = mysqli_query($conn, $s);
$num = mysqli_num_rows($result);

if($num == 1){
    header('location:register1.php');
}
else{
    $q= "INSERT INTO `registerdata`( `firstname`, `lastname`, `email`, `password`, `country`, `phone`, `image`) 
    VALUES ('$firstname','$lastname','$email','$password','$country','$phone','$destinationfile')";
}
//  $query = "insert into registerdata (firstName , lastName, email, password, country, phone, image )
// values('$firstname', '$lastname' , '$email', '$password', '$country','$phone','$image') ";
$query =  mysqli_query($conn,$q);
?>
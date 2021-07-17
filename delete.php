
<?php 

$con = mysqli_connect("localhost", "root", "WhateverPassword");

if($con){
    echo "Connection success";
}else{
    echo " NoConnection";
}
mysqli_select_db($con,'test');

$id = $_GET['id'];

$q = " DELETE FROM payment WHERE id = $id ";

echo "$q";

mysqli_query($con, $q);

header('location:RegisterInfo.php');

?>
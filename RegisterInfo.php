<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
     
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TrustyTouristGuide RegisterInfo</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel=”stylesheet” href="css/bootstrap.css">
<link rel=”stylesheet” href="css/bootstrap-responsive.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>
<!-- navBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="home.php">TrustyTouristGuide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
        
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SignIn.php">SignIn</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sign Out</a>
     </li>
        </a>
        </a>
       
        </ul>
 
    </form>
  </div>
</nav>

<div class="jumbotron">
<!-- Nmae -->
  <div class = "container">
  <h1 class = "text-center text-white bg-dark"> Your Account Information </h1>

  <br>
  <div class ="table-responsive">
  <table class="table table-bordered table-striped table-hover"> 
<thread>
  <th>Firstname </th>
  <th>Lastname </th>
  <th>Email </th>
  <th>Country</th>
  <th>Contact Number</th>
  <th>Profile Picture </th>
</thread>


<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'test');
$sex=$_SESSION['email'];
$sql = "SELECT * FROM registerdata WHERE email = '$sex'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
  // echo "". $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. " " . $row["country"]. " " . $row["phone"]. " " . $row["image"]."<br>"; 
 ?> 
<tr>
<td><?php echo $row['firstname']; ?> </td>
<td><?php echo $row['lastname']; ?> </td>
<td><?php echo $row['email']; ?> </td>
<td><?php echo $row['country']; ?> </td>
<td><?php echo $row['phone']; ?> </td>
<td><img src ="<?php echo $row['image']; ?>" width="70" height="70"> </td>
</tr>
</table>
</div>
<?php
  }
$conn->close();
?>


<div>
    <p>Click here if you want to update your account information<p>
    <a href = "AccountUpdate.php" class = " btn btn-success">Update Account Information </a>
  </div>



<div class="jumbotron">
<!-- Nmae -->
  <div class = "container">
  <h1 class = "text-center text-white bg-dark"> Your Purchased Packages </h1>

  <br>
  <div class ="table-responsive">
  <table class="table table-bordered table-striped table-hover"> 
<thread>
  <tr class="bg-dark text-white text-center">
   
  <th>Payment Method</th>
  <th>Your Code</th>
  <th>Journey Date</th>
  <th>Operations</th>
  
</tr>
</thread>


<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'test');
$sex=$_SESSION['email'];
$sql = "SELECT * FROM payment WHERE email = '$sex'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
// echo "". $row["firstname"]. " " . $row["lastname"]. " " . $row["email"]. " " . $row["country"]. " " . $row["phone"]. " " . $row["image"]."<br>"; 
 ?> 


<tr class = "text-center">
<!-- <td><?php echo $row['id']; ?> </td> -->
<td><?php echo $row['method']; ?> </td>
<td><?php echo $row['code']; ?> </td>
<td><?php echo $row['date']; ?> </td>
<td>
<a href="PackageUpdate.php?id=<?php echo $row['id']; ?>" class = " btn btn-success">Update</a>
<a href="delete.php?id=<?php echo $row['id']; ?>" class = " btn btn-success">Delete</a>
</td>
<th>
</tr>

</div>
<?php
  }
?>


</table>



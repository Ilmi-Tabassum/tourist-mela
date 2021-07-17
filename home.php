<?php
session_start();
?>




<!DOCTYPE html>
<html>
<head>
     <title></title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
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



<h3> 
<?php
$conn = mysqli_connect("localhost", "root", "WhateverPassword");
mysqli_select_db($conn,'test');
$sex=$_SESSION['email'];
$sql = "SELECT * FROM registerdata WHERE email = '$sex'";
$result = mysqli_query($conn, $sql);
  while($row = mysqli_fetch_array($result)) {
  echo "". "Welcome," . $row["firstname"]. " " . $row["lastname"]. "<br>"; 
  }
$conn->close();
?>
</h3>




      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="Services.php">Services</a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="buyPack.php">Buy Pack</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="RegisterInfo.php">Account Info</a>
     </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Sign Out</a>
     </li>

    </ul>
    
    
    </form>
  </div>
</nav>


<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="images/Capture12.png" alt="pink" width="1000" height="100">
    </div>
    <div class="carousel-item">
      <img src="images/bihar.jpg" alt="sam" width="1000" height="100">
</div>
     
    <div class="carousel-item">
      <img src="images/mesu.jpg" alt="York" width="1000" height="100">
    </div>
    <div class="carousel-item">
      <img src="images/Ahsan.jpg" alt="New York" width="1000" height="100">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<!-- if else condition  //TO DO -->





<!-- OUR SERVICES -->
<section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Our Popular Packages</h3>
</div>
<div class ="container-fluid">
 <div class = "row">
   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card card1">
  <img class="card-img-top" src="images/satin.png" alt="card1 image">
  <div class="card-body">
    <h4 class="card-title">Cox's Bazar Sandy Sea Beach</h4>
    <p class="card-text">  4nights/ 5days</p>
    <a href="buypack.php" class="btn btn-success">Check for Details</a>
  </div>
</div>
</div>


   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card card2">
  <img class="card-img-top" src="images/sajek.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Sajek Valley Rangamati District</h4>
  
    <p class="card-text">  3nights/ 4days</p>
    <a href="buyPack.php" class="btn btn-success">Check for details</a>
  </div>
</div>
</div>

   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card card3">
  <img class="card-img-top" src="images/rajbari.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Tajhat Zamindar Bari</h4>
    <p class="card-text">2nights/ 3days</p>
    <a href="#" class="btn btn-success">Check for details</a>
  </div>
</div> 

</section>
<!-- Holiday Packages -->
<section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Our Holiday Packages</h3>
</div>
<div class ="container-fluid">
 <div class = "row">
   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card  card4">
  <img class="card-img-top" src="images/capture12.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">World Heritage Tour</h4>
    <p class="card-text">  4nights/ 5days</p>
    <a href="#" class="btn btn-success">Check for Details</a>
  </div>
</div>
</div>


   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card card5">
  <img class="card-img-top" src="images/historic.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"></h4>
  
    <p class="card-text">  3nights/ 4days</p>
    <a href="#" class="btn btn-success">Check for details</a>
  </div>
</div>
</div>

   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card card6">
  <img class="card-img-top" src="images/captureD.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Sreemangal Upazila TREE GARDEN</h4>
    <p class="card-text">2nights/ 3days</p>
    <a href="#" class="btn btn-success">Check for details</a>
  </div>
</div> 

</section>


<!-- Form Creation -->
<section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Visit Dhaka</h3>
</div>
<div class ="container-fluid">
 <div class = "row">
   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card card7">
  <img class="card-img-top" src="images/capture12.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">World Heritage Tour</h4>
    <p class="card-text">  4nights/ 5days</p>
    <a href="#" class="btn btn-success">Check for Details</a>
  </div>
</div>
</div>


   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card card8">
  <img class="card-img-top" src="images/historic.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Sajek Valley Rangamati District</h4>
  
    <p class="card-text">  3nights/ 4days</p>
    <a href="#" class="btn btn-success">Check for details</a>
  </div>
</div>
</div>

   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card card9">
  <img class="card-img-top" src="images/packaages2.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Tajhat Zamindar Bari</h4>
    <p class="card-text">2nights/ 3days</p>
    <a href="#" class="btn btn-success">Check for details</a>
  </div>
</div> 

</section>

<section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Contact Us </h3>
</div> 
<div class ="w-50 m-auto">

<form action="userinfo.php" method = "post">
<div class = "form-group">
<label for = "user">UserName</label>
<input type ="text" name ="user" autocomplete= "off" class="form-control">
</input>
<div class="form-row">
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type ="text" name ="email" autocomplete= "off" class="form-control">
    </div>



    <form class="form-inline">
  <div class="form-group">
    <label>Password</label>
    <input type="txt" name="pass" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
    <small id="passwordHelpInline" class="text-muted">
      <p>Must be 8-20 characters long.</p>
    </small>
  </div>
</form>

    <div class = "form-group">
<label>Comment</label>

<input type="text" name ="comment" autocomplete= "off"  placeholder="Please give us feedback" class="form-control" > </input>
<small id="CommentHelpInline" class="text-muted">
No Hate speech</small>
</div>
</div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2" >
        Agree to terms and conditions
        <button class="btn btn-success" type="submit">Submit form</button>
      </label>
    </div>



</div>
</form>
</div>
</section>

<!-- footer -->

<footer>
  <p class="p-3 bg-dark text-white text-center">@IlmiTabassum TrustyTouristGuide</p>
</footer>



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </body>
  </html>

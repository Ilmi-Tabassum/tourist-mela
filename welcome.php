<!DOCTYPE html>
<html>
<head>
     <title></title>
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  </head>
  <body>
  
<!-- navBar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="welcome.php">TrustyTouristGuide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="welcome.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="about.php">About</a>
        
      </li>
      <li class="nav-item">
      <a class="nav-link" href="Services.php">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="SignIn.php">Sign In</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Sign Up</a>
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

<!-- ABOUT -->
<section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> About Us </h3>
</div>
<div class="container-fluid">

<div class= "row">
  <div class = "col-lg-4 col-md-4 col-12">
    <img src ="images/ilmi.png" alt="Paris" class="center aboutimg">
</div>
<div class = "col-lg-4 col-md-2 col-12">

  <h2 class ="text-left">I am Ilmi Tabassum</h2>
  <p class ="text-left"> Welcome to my Company TrustyTouristGuide.</p> 
  <p1 class ="text-left"> We heir guides for secure and amazing tour of our turists </p1>
  <br>
  <p2 class ="text-left"> Lots of members are currently working in my company as Tourist Guides</p2>
</br>
  <a href = "about.php" class = " btn btn-success">  Check More </a>
</div>
</div>
</div>

<!-- OUR SERVICES -->
<section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Our Customers</h3>
</div>
<div class ="container-fluid">
 <div class = "row">
   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card" >
  <img class="card-img-top" src="images/tour1.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Suzzy Doey</h4>
    <p class="card-text">She is from britain visiting Sylhet Shahjalal Mazar Sharif</p>
    <a href="#" class="btn btn-success">See Profile for details</a>
  </div>
</div>
</div>


   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card" >
  <img class="card-img-top" src="images/tour2.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Anna Herry</h4>
    <p class="card-text">She is from Canada visiting Barisal Durga Sagor</p>
    <a href="#" class="btn btn-success">See Profile for details</a>
  </div>
</div>
</div>

   <div class= "col-lg-4 col-md-4 col-12">
   <div class="card" >
  <img class="card-img-top" src="images/tour3.png" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">John Luiz</h4>
    <p class="card-text">He is from South America visiting Dhaka Lalbagh Kella</p>
    <a href="#" class="btn btn-success">See Profile for details</a>
  </div>
</div> 
</section>

<!-- Form Creation -->

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

<!DOCTYPE html>
<html>
<head>
     <title></title>
     <meta charset="utf-8">
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
  <a class="navbar-brand" href="#">TrustyTouristGuide</a>
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
      <!-- <li class="nav-item">
        <a class="nav-link" href="SignIn.php">SignIn</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="AccountUpdate.php">Account Settings</a>
     </li>
        </a>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">LogOut</a>
     </li>

        </a>
        </ul>
    </form>
  </div>
</nav>


<div class="jumbotron">
  <h1>Purchase Packages</h1>
  <p>Touch your Dream</p>
  <div class ="container">
  <section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> UpdatePayments </h3>
<br>

<form action="updatepayment.php?id=<?php echo $_GET['id']; ?>" method = "post" class="was-validated">

<div class="form-row">
  <div class="form-group col-md-6">
   <h4> <label for="Package">Payment Method</label> </h4>
    <span style="color: red !important; display: inline; float: none;"></span>
    <select name="method" class="form-control" required>
                <option value=""></option>
                <option value="PayPal">Paypal</option>
                <option value="Visa">Visa</option>
                <option value="Bkash">Bkash</option>
                <option value="Nagad">Nagad</option>               
      </select>                
  </div>



    <form class="form-inline">
    <div class="form-group col-md-6">
  <div class="form-group">
  <h4>  <label>Enter Payment Code/Number</label> </h4>
   <input type="txt" name="code" class="form-control mx-sm-2" autocomplete= "off" required>
    <div class="invalid-feedback">Please fill out this field.</div>
 </div>
</div>
</div>



<div class="form-group col-md-6">
   <h4> <label>Select Package</label></h4>
    <span style="color: red !important; display: inline; float: none;"></span>
    <select name="package" class="form-control" required>
                <option value=""></option>
                <option value="package1">Package 1</option>
                <option value="Package2">Package 2</option>
                <option value="Package3">Package 3</option>
                <option value="Package4">Package 4</option>
                <option value="Package5">Package 5</option>
                <option value="Package6">Package 6</option>
               
    </select>                  
</div>

<div class="form-group col-md-6">
<h4> <label>Select Date Of Your Journey</label> </h4>
 

   <input type="date" name="date" class="form-control mx-sm-2" width="800px" height="130px" autocomplete= "off" required>
    <div class="invalid-feedback">Please fill out this field.</div>
 </div>



        <button class="btn btn-success" type="submit" style="float: right;"><h1>Update Package!</h1></button> 
        </div>
      </label>
    </div>
    </container>

</div>
</div>
</div>
</div>
</div>
</section>
<footer>
  <p class="p-3 bg-dark text-white text-center">@IlmiTabassum TrustyTouristGuide</p>
</footer>
</body>
</html>
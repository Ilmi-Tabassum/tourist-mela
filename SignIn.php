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
        <a class="nav-link" href="register.php">Sign In</a>
      </li>
        </a>
        <li class="nav-item">
        <a class="nav-link" href="register.php">Sign Up</a>
     </li>
        </a>
        </ul>
  
    </form>
  </div>
</nav>
<div class="jumbotron">
  <h1>SignIN</h1>
  <p>Step Towards your Dream</p>


    <section class ="my-5">
  <div class="py-5">
    <h3 class ="text-center"> Sign In </h3>
</div> 
<div class ="w-50 m-auto">

<form action="validation.php" method = "post" class="was-validated">
<div class = "form-group">

<div class="form-row">
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type ="text" name ="email" autocomplete= "off" class="form-control" required>
    </div>



    <form class="form-inline">
  <div class="form-group">
    <label>Password</label>
    <input type="txt" name="password" class="form-control mx-sm-3" aria-describedby="passwordHelpInline" required>
    <small id="passwordHelpInline" class="text-muted">
      <p>Must be 8-20 characters long.</p>
    </small>
  </div>
</form>

    <div class = "form-group">
<!-- <label>message</label> -->

<!-- <input type="text" name ="message" autocomplete= "off"  placeholder="Please give us feedback" class="form-control" > </input>
<small id="CommentHelpInline" class="text-muted">
No Hate speech</small> -->
</div>
</div>

    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
      <label class="form-check-label" for="invalidCheck2" >
        Agree to terms and conditions
        <div>
        <button class="btn btn-success" type="submit">Sign In</button>
        </div>
      </label>
    </div>

    <label class="form-check-label" for="invalidCheck2" >
  <div>
    <p>If you don't have an account yet, please sign up to create an account first.<p>
    <a href = "register.php" class = " btn btn-success"> Sign Up </a>
  </div>
</div>
</form>
</div>
</section>


</div>
</div>
</div>
<footer>
  <p class="p-3 bg-dark text-white text-center">@IlmiTabassum TrustyTouristGuide</p>
</footer>
</body>
</html>
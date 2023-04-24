<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    
    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    
    <script type="text/javascript" 
      src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart'],'language':'ru'}]}">
    </script>
    
    <link rel="stylesheet" type="text/css" href="style/mainstyle.css">
    
    <script type="text/javascript">


    //load api package
    google.load('visualization', '1', {packages: ['corechart']});
    
    </script>
    
    <title>The Bust Stop</title>
  </head>

  <body>

    <div class="container-fluid no-padding"> <!-- containers are 1200px wide with default 15px padding -->
      <div class="row">
        <div class="col-md-12">

        <img class="img-fluid float-center img-responsive" src="img/banner.jpg" alt="Bust Stop" id="img" style="border: 1px solid"/>

      </div> <!-- col -->
      </div> <!-- row -->
    </div><!-- container -->
<style>
    img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  clip-path: inset(0);
  display: block;
  margin: 0 auto;
  border: 2px solid black;
}
</style>
    <div class="d-flex" id="wrapper">
    
      <!-- Navigation (RHS) Content -->
      <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" style="color: black; " href="./index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="./Register_cust.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="./Store.php">Store</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="./login_admin.php">Admin</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="./login_cust.php">Log in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="./show_bra_measurment.php">Show bra measurments</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="./Display_post.php">Posts and updates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="./Location.php">Location</a>
              </li>
            </ul>
          </div>
        </nav>

        <div class="container-fluid">
          <h3 class="mt-4" style="text-align: center; color: Maroon;">Welcome To The Bust Stop Website!</h3>
        </div>
      </div> 
    </div>
  </body>
</html>
<?php


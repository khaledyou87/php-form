<?php 

session_start();



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
    <header>
   


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">KHALED MAIL</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">about me</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">contact</a>
      </li>
    </ul>

<?php 



if (isset($_SESSION['userId'])) {
           
  echo '<form class="form-inline my-2 my-lg-0" action="includes/logout.inc.php" method="post">
      
  <button class="btn btn-dark my-2 my-sm-0" type="submit" name="logout-submit">logout</button>
</form>';


}
else {
 echo '<form class="form-inline my-2 my-lg-0" action="includes/login.inc.php" method="post">
 <input class="form-control mr-sm-2" type="text" name="mailuid" placeholder="Username/E-mail...">
 <input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password...">
 <button class="btn btn-dark my-2 my-sm-0" type="submit" name="login-submit">login</button>
</form>
<a href="signup.php" class="nav-link go">signup</a>';
}



 
 ?>










    
  </div>
</nav>
    
    
    
    </header>

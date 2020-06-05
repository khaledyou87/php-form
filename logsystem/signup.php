<?php 
    require "header.php";






?>



        <main>
        <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign Up</h5>


            <?php 
            
            if (isset($_GET['error'])) {
              
              if ($_GET['error'] == "emptyfields") {
                 echo '<p class="badsignup">Fill in all fields</p>';
              }
              elseif ($_GET['error'] == "invalidmailuid") {
                echo '<p class="badsignup">Invalid Username and E-mail</p>';
              }
              elseif ($_GET['error'] == "invaliduid") {
                echo '<p class="badsignup">Invalid Username</p>';
              }
              elseif ($_GET['error'] == "invalidmail") {
                echo '<p class="badsignup">Invalid  E-mail</p>';
              }
              elseif ($_GET['error'] == "passwordcheck") {
                echo '<p class="badsignup">Your passwords do not match! </p>';
              }
              elseif ($_GET['error'] == "usertaken") {
                echo '<p class="badsignup">Username is already taken! </p>';
              }
              
             
             



            }
            
           
           if (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
              echo '<p class="goodsignup">Signup successful !</p>';
 }
             
           }

          ?>


            <form class="form-signin" action="includes/signup.inc.php" method="post" >
            <div class="form-label-group">
                <input type="text"  name = "uid"   class="form-control" placeholder="Username"  >
                <label for="inputUsername">Username</label>
              </div>
              <div class="form-label-group">
                <input type="text"   name= "mail" class="form-control" placeholder="E_mail address" >
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="pwd" class="form-control" placeholder="Password" >
                <label for="inputPassword">Password</label>
              </div>
              <div class="form-label-group">
                <input type="password" name="pwd-repeat" class="form-control" placeholder="Repeat password" >
                <label for="inputPassword">Repeat password</label>
              </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Remember password</label>
              </div>
              
              <button class="btn btn-lg btn-dark btn-block text-uppercase" type="submit" name="signup-submit">Sign up</button>
             
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
        
        
        
        </main>





<?php 


    require "footer.php";

?>        
<?php 
    require "header.php";






?>



        <main>




            

       <?php 
       
       
       if (isset($_SESSION['userId'])) {

        echo '<p class="login-status">you are logged in!</p>';

        echo 'Hello '. $_SESSION['userUid'] ;


      }
      else {
       echo '<p class="logout-status">you are logged out!</p>';
      }
      

     



       
       ?>
        
        
        </main>





<?php 


    require "footer.php";


?>        
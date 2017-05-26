<?php
//include('test.php');
    // Controleur pour gérer le formulaire de connexion des utilisateurs
  
  
      
        if (isset($_COOKIE["cookiehash"])) {
            setcookie("cookiedec", "", time() - 1000000, '/');
            unset($_COOKIE["cookiehash"]);

             echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
       		
         }else{ 

          echo 'Erreur de deconnexion';
        }

        
         
          

        

?>
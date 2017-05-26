<?php

        if (isset($_COOKIE["cookiehash"])) {
            setcookie("cookiedec", "", time() - 1000000, '/');
            unset($_COOKIE["cookiehash"]);

             echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
       		
         }
        
         
          

        

?>
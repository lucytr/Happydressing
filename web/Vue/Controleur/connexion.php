<?php
  
  

        if(isset($_POST['mail']) && isset($_POST['mdp'])){ 
          $cookiehash = sha1($_POST['mail']);
           $cookie=setcookie("cookiehash",$cookiehash, time() + (3600 * 25),"/");
            
                include("../Modele/connexion.php");
                include("../Modele/utilisateurs.php");

                $mail =htmlspecialchars($_POST['mail']);
                 $mdp =htmlspecialchars($_POST['mdp']);
                $Newmdp = $Newmdp = crypt($mdp,'$5$rounds=5000$anexamplestringforsalt$');

                $modeladmin = new ModelUti();
                $req= $modeladmin->mdp($db,$_POST['mail'],$Newmdp);
                //var_dump($req);
          
            
                    if ($req['mail']== $mail && $req['mdp']==$Newmdp) {
                    
                      
                      echo "<script type='text/javascript'>document.location.replace('../Vue/interfacemembre.php');</script>";

                      
                                             
                    } else {
                    
                   
                        echo '<script>alert("Erreur de mot de passe ou d \'identifiant");</script>';
                         echo "<script type='text/javascript'>document.location.replace('../index.php');</script>";
           
                    }
                    

           } else {
                echo "<script type='text/javascript'>document.location.replace('../Vue/interfacemembre.php');</script>";

            } 

                                  
        

?>
<?php
//include('test.php');
    // Controleur pour gérer le formulaire de connexion des utilisateurs
 /*if (!isset($_COOKIE["token"])) {   */
    
        

        if(isset($_POST['mail']) && isset($_POST['mdp'])){ 
          $cookiehash = sha1($_POST['mail']);
           $cookie=setcookie("cookiehash",$cookiehash, time() + (3600 * 25),"/");
           //echo($_COOKIE['cookiehash']);
            
            /*if(isset($_GET['cible']) && $_GET['cible']=="verif") {*/
                include("../Modele/connexion.php");
                include("../Modele/utilisateurs.php");

                $mail =htmlspecialchars($_POST['mail']);
                 $mdp =htmlspecialchars($_POST['mdp']);
                $Newmdp = $Newmdp = crypt($mdp,'$5$rounds=5000$anexamplestringforsalt$');

                $modeladmin = new ModelUti();
                $req= $modeladmin->mdp($db,$_POST['mail'],$Newmdp);
                var_dump($req);
          
            //$modeladmin= new Model();
            //$admin = $modeladmin->selectById($db,$id_admin, $mdp);
            
                    if ($req['mail']== $mail && $req['mdp']==$Newmdp) {
                     /*include("token.php");*/
                       /*$data = Array("idUser" => $req["mail"]);
                       $token = generateToken($data);
                        echo $token;*/

                        /*header ("Location : ../Vue/interfacemembre.html");*/
                      
                      echo "<script type='text/javascript'>document.location.replace('../Vue/interfacemembre.php');</script>";
                     // echo " ok verif";

                      
                                             
                    } else {
                    
                   
                        echo '<script>alert("Erreur de mot de passe ou d \'identifiant");</script>';
           
                    }
                    

           }/* else {

                include("../Vue/connexion_erreur.php"); 
            }  */                       

        

?>
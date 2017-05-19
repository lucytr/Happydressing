<?php
    // Controleur pour gérer le formulaire de connexion des utilisateurs
    
    if(isset($_GET['cible']) && $_GET['cible']=="verif") { // L'utilisateur vient de valider le formulaire de connexion
        if(isset($_POST['mail']) && isset($_POST['mdp'])){ // L'utilisateur a rempli tous les champs du formulaire
            include("Modele/utilisateurs.php");
            $mail =htmlspecialchars($_POST['mail']);
             $mdp =htmlspecialchars($_POST['mdp']);
            

            $modeladmin = new Model();
            $req= $modeladmin->mdp($db,$_POST['mail'],$_POST['mdp']);
            //var_dump($req);

            //$modeladmin= new Model();
            //$admin = $modeladmin->selectById($db,$id_admin, $mdp);
            
                if ($req['mail']= $mail && $req['mdp']==$mdp) {
                    /*if ($res["mdp"]==$mdp) {
                       //$data = Array("idUser" => $admin["id_admin"]);
                       // $token = generateToken($data);
                        //echo $token;
                        //setcookie("token", $token, time() + (3600 * 25), "/");*/
                        include("Vue/accueil.php");                          
                } else {
                    $message = "données incorrectes";
                    include("Vue/connexion_erreur.php"); 

                }

        } else {

            $message = "Les données sont incorrectes";
            include("Vue/connexion_erreur.php");                          

        }
        
        //echo $message;
    }

?>
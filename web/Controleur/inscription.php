
<?php

    
           
 if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp']) ){
                
            	require_once("../Modele/utilisateurs.php");
                require_once("../Modele/connexion.php");


                $prenom = htmlspecialchars(trim($_POST['prenom']));
                $nom = htmlspecialchars(trim($_POST['nom']));
                $mail = htmlspecialchars(trim($_POST['mail']));
                $mdp =htmlspecialchars($_POST['mdp']);
                $prenom = strtolower($prenom);
                $nom = strtolower($nom);
                $prenom = ucfirst($prenom);
                $nom = ucfirst($nom);
                
                $mail = strtolower($mail);
                $id_pers= sha1($_POST['mail']);

                
                $Newmdp = crypt($mdp,'$5$rounds=5000$anexamplestringforsalt$');
                
                        if($mail){
                            
                            $req=new ModelUti();
                            $res=$req->verifmail($db,$mail);
                                if ($res==false){

                                    $req=new ModelUti();
                                    $req->createAdmin($db, $_POST['nom'], $_POST['prenom'] ,$_POST['mail'], $Newmdp,$id_pers);

              	  echo "<script type='text/javascript'>document.location.replace('../Vue/commun.php');</script>";


            }else{
              echo '<script>alert("Un compte existe deja sous cet email");</script>';
            }
        }else{ 

             echo '<script>alert("La communication du mail est obligatoire");</script>';

        }
       
     
}else{
    echo '<script>alert("Erreur de saisi veuillez recommencer");</script>';
}

    


?>






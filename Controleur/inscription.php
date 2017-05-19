
<?php

        //if(estAdmin()){

		if(isset($_GET['cible']) && $_GET['cible'] && $_GET['cible'] =="inscription") {
           
            if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['mdp']) ){
                //Echappement (script injection, sql injection, ...)
                //Suppression des caractères invisibles
            	include("Modele/utilisateurs.php");

                $prenom = htmlspecialchars(trim($_POST['prenom']));
                $nom = htmlspecialchars(trim($_POST['nom']));
                $mail = htmlspecialchars(trim($_POST['mail']));
                $mdp =htmlspecialchars($_POST['mdp']);//Mot de passe par default
                //Met le prénom et le nom avec première lettre en majuscule et le reste en minuscule
                $prenom = strtolower($prenom);
                $nom = strtolower($nom);
                $prenom = ucfirst($prenom);
                $nom = ucfirst($nom);
                //On met le code de classe et le mail en minuscule
                $mail = strtolower($mail);
                /**
                 * Cryptage du mot de passe en SHA256 avec 5000 boucles de hachage
                 */
                $Mdp = crypt($mdp,'$5$rounds=5000$anexamplestringforsalt$');
                
                

                //Création
                $req=new Model();
                $req->createAdmin($db, $_POST['nom'], $_POST['prenom'] ,$_POST['mail'], $_POST['mdp']);
                
              	 include("Vue/inscriptionok.php");
            }else{
                echo 'erreur d\'inscription';
                include("Vue/connexion_erreur.php");
            }
        }
       // else{
            //header('Location: ./query=login/admin');
        
    


?>






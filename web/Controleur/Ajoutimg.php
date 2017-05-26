

<?php

include('../vue/Ajoutphoto.php');
require_once("../Modele/connexion.php");
require_once("../Modele/utilisateurs.php");
require_once("../Modele/imgClass.php");


if ($_FILES['image']['error'] > 0) {

    echo "Erreur lors du transfert";

}else{


                $nomOrigine = $_FILES['image']['name'];
                $elementsChemin = pathinfo($nomOrigine);
                $extensionFichier = strtolower($elementsChemin['extension']);
                $extensionsAutorisees = array("jpeg", "jpg", "gif");
      

                if (!(in_array($extensionFichier, $extensionsAutorisees))) {
                    echo "Le fichier n'a pas l'extension attendue";
                  } else {  

                    $nom = md5(uniqid(rand(), true));
                     $nomDestination = $nom.".".$extensionFichier;
                     $repertoireDestination= '../fichier/';
    

                    if (move_uploaded_file($_FILES["image"]["tmp_name"], $repertoireDestination.$nomDestination)) {
                       // echo "Le fichier temporaire ".$_FILES["image"]["tmp_name"]. " a été déplacé vers ".$repertoireDestination.$nomDestination;

                         Img::creerMin($repertoireDestination.$nomDestination, '../fichier/min',$nomDestination, 320 ,200);


                         $req= new ModelUti();
                         $res=$req->image($db, $nomDestination);

                         echo '<img src="' . $repertoireDestination.$nomDestination .'" width="320" height="200">';

                         echo "<script type='text/javascript'>document.location.replace('../Vue/inventaire.php');</script>";


                    } else {
                        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ". "Le déplacement du fichier temporaire a échoué". " vérifiez l'existence du répertoire ".$repertoireDestination;
                    }

                  }
 }

?>
</body>
</html>



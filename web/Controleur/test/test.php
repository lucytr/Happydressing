

<!DOCTYPE html>
<html>

<body>
 <form method="post" enctype="multipart/form-data">
   
   <form enctype="multipart/form-data" action="fileupload.php" method="post">
      <input type="hidden" name="MAX_FILE_SIZE" value="100000" />
      Transfère le fichier <input type="file" name="monfichier" />
      <input type="submit" />
    </form>
   <br />
    
</form>



<?php
require('../Modele/utilisateurs.php');

$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
 
   //mkdir('fichier/', 0777, true);
 
     $nom = md5(uniqid(rand(), true));
     $nomDestination = $nom.".".$extensionFichier;
     $repertoireDestination= '../fichier/';
     
      require_once("../Modele/imgClass.php");


    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], $repertoireDestination.$nomDestination)) {
          echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"]. " a été déplacé vers ".$repertoireDestination.$nomDestination;
         // echo "<img src=\"".$repertoireDestination.$nomDestination."\" width=\"100\" height=\"190\">";   

             Img::creerMin($repertoireDestination.$nomDestination, '../fichier/min',$nomDestination, 320 ,200);
     } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ". "Le déplacement du fichier temporaire a échoué". " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}



?>
       

</body>
</html>









<?php

require_once("../Modele/connexion.php");

require_once("../Modele/utilisateurs.php");
//include("../Vue/inventaire.php");





if (isset($_COOKIE['cookiehash'])){

 $id_pers = $_COOKIE['cookiehash'];


  $reponse=$db->query("SELECT * FROM produit where id_pers = '$id_pers'");
 

 while($donnee=$reponse->fetch()){

    echo "<TR>";
    echo "<TD>" . $donnee['id_produit'] . "</TD>";
    echo "<TD>" . $donnee['nom'] . "</TD>";
    echo "<TD>" . $donnee['description'] . "</TD>";
    echo "<TD>" . $donnee['prix'] . "</TD>";
    echo "<TD>" . $donnee['taille'] . "</TD>";
    echo "<TD>" . $donnee['ville'] . "</TD>";
    echo "<TD>" . $donnee['idcategorie'] . "</TD>";
    echo "<TD>" . $donnee['idmarque'] . "</TD>";

    echo "<th>" ?>     <input type="button" value="Supprimer " onclick="javascript:location.href='../Controleur/supprod.php?id=<?php print($donnee['id_produit']); ?>';"/> <?php "</th>";

    echo "<th>" ?> 
        <input type="button" value="Modifier" onclick="javascript:location.href='updateprod.php?id=<?php print($donnee['id_produit']); ?>';"/> <?php "</th>";  

    echo "</TR>";

  }

  $id= intval($donnee['id_produit']); 

$req=new ModelUti();
$res= $req->affimodif($db,$id);
  
}

?>
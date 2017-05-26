<!DOCTYPE html">
<html lang="fr">
	<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" type="text/css" href="css/cssinventaire.css"> 



<body>
<?php
include ('navbarmembre.html');
?>

  <div class="container" >

  
    <table class="table table-hover">
      <thead>
        <tr>
          <th>Référence</th>
          <th>Nom</th>
          <th>Description</th>
          <th>Prix</th>
          <th>Taille</th>
          <th>Ville de vente</th>
          <th>Marque</th>
          <th>Type de produit</th>

        </tr>
      </thead>
      <tbody>
      </div>


<?php
require_once("../Modele/connexion.php");
require_once("../Modele/utilisateurs.php");


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
 <input type="button" value="Modifier" onclick="javascript:location.href='../Vue/modifprod.php?id=<?php 
 print($donnee['id_produit']);
 ?>';"/> <?php "</th>";    
echo "</TR>";

  }

   $id= intval($donnee['id_produit']); 

$req=new ModelUti();
$res= $req->affimodif($db,$id);
  
}



?>


  
</body>
</html>
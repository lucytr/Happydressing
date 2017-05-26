<?php

require_once("../Modele/connexion.php");
require_once("../Modele/utilisateurs.php");

$id_produit = $_GET["id"];
$req = new ModelUti();

$res=$req->SupProd($db, $id_produit);

  echo "<script type='text/javascript'>document.location.replace('../Vue/inventaire.php');</script>";




?>
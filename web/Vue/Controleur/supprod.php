<?php

require_once("../Modele/connexion.php");
require_once("../Modele/utilisateurs.php");

$id_produit = $_GET["id"];
$req = new ModelUti();

$res=$req->SupProd($db, $id_produit);
/*$res1=$res->idprod($db,$id_produit);

$dossier='../fichier/min';
$repertoire =opendir($dossier);

while (false !== ($fichier = readdir($repertoire))){
if($id_produit ==$res1['idimage']){

	unlink($)
}



}*/


  echo "<script type='text/javascript'>document.location.replace('../Vue/inventaire.php');</script>";




?>
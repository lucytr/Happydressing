<!DOCTYPE html>
<html>

<body>
<?php

require_once("../Modele/connexion.php");

 function inventaire($db,$id_pers){

          $sql = "SELECT * FROM produit where id_pers = :id_pers";
            $statement= $db->prepare($sql);
            $statement->execute(array(':nom'=> $nom,':description'=> $description,':prix'=> $prix,':taille'=> $taille,':ville'=> $ville,':idcategorie'=> $idcategorie,':idmarque'=> $idmarque, ':id_pers'=> $id_pers));
             while($req=  $statement->fetch());
             var_dump($req);
              return $req;

    }

if(isset($_COOKIE['cookiehash']))

  $id_pers= $_COOKIE['cookiehash'];


$res=inventaire($db, $id_pers);

var_dump($res);


    ?>

</body>
</html>


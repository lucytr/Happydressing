

<?php
$dos = "../fichier/min";
$dir = opendir($dos);

while($file = readdir($dir)){

    $allow_ext =array("jpg", "png","jpeg");
    $ext = strtolower(substr($file, -3));
        if(in_array($ext,$allow_ext)){
     $nom= $file;
      //echo $nom;
        require_once('../Modele/connexion.php');
        require_once('../Modele/utilisateurs.php');
        $req= new ModelUti();
        $res= $req->idprod($db, $nom);
        $id= intval($res['idimage']);

        $res1= $req->detailprod($db,  $id);

        $res2=$req->getmail($db, $res1['id_pers']);
        //var_dump($res2);


        
     
?>
        <div class="col-md-4">
                <div class="thumbnail">
                    <img src= "../fichier/min/<?php echo $file; ?> "alt="ALT NAME" class="img-responsive" />
                    <div class="caption">
                         <h3><?php echo $res1['nom']; ?></h3>
                        <p> Prix : <?php echo $res1['prix']; ?></p>
                       <p> Taille / pointure :<?php echo $res1['taille']; ?></p>
                       <p>Ville de vente: <?php echo $res1['ville']; ?></p>
                        <p> Marque: <?php echo $res1['idmarque']; ?></p>
                        <p>Categorie: <?php echo $res1['idcategorie']; ?></p>
                         <p> Contact: <?php echo $res2['mail']; ?></p>
                        
                        </p>
                    </div>
                </div>
            </div>
<?php
              
   }


}




?>

      


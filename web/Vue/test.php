

<!DOCTYPE html>
<html>

<body>
 <form class="form-horizontal" method="post" >


<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom de l'article </label>  
  <div class="col-md-4">
  <input id="nom" name="nom" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description </label>  
  <div class="col-md-4">
  <input id="description" name="description" placeholder="" class="form-control input-md" required="" type="textarea">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prix">Prix</label>  
  <div class="col-md-4">
  <input id="prix" name="prix" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="taille">Taille ou pointure</label>  
  <div class="col-md-4">
  <input id="taille" name="taille" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="ville">Ville de vente</label>  
  <div class="col-md-4">
  <input id="ville" name="ville" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<div class="form-group">
  <label class="col-md-4 control-label" for="idmarque"> Marque </label>
  <div class="col-md-2">
    <select id="idmarque" name="idmarque" class="form-control">
      <option value="nike">nike</option>
      <option value="2">Dl.</option>
      <option value="">D-na.</option>
    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="id_type"> Type de produit </label>
  <div class="col-md-2">
    <select id="id_type" name="id_type" class="form-control">
      <option value="Jupe">Jupe</option>
      <option value="Robe">Robe</option>
      <option value="">D-na.</option>
    </select>
  </div>
</div>



 <label class="col-md-4 control-label"  for="image">image</label>
  <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
  <div class="col-md-4">
   <input type="file" name="image" id="image" /><br />

      <input type="submit" value="Valider" />

  </div>
</div>


</form>


<?php

require_once("Modele/connexion.php");
require_once("Modele/utilisateurs.php");
require_once("Modele/imgClass.php");

 if( isset($_FILES['image'])){



 $nomOrigine = $_FILES['image']['name'];
                $elementsChemin = pathinfo($nomOrigine);
                $extensionFichier = strtolower($elementsChemin['extension']);
                $extensionsAutorisees = array("jpeg", "jpg", "gif");


                if (!(in_array($extensionFichier, $extensionsAutorisees))) {
                    echo "Le fichier n'a pas l'extension attendue";
                  } else {  

                    $nom = md5(uniqid(rand(), true));
                    $nomDestination = $nom.".".$extensionFichier;
                    $repertoireDestination= 'fichier/';
    

                        if (move_uploaded_file($_FILES["image"]["tmp_name"], $repertoireDestination.$nomDestination)) {
                            echo "Le fichier temporaire ".$_FILES["image"]["tmp_name"]. " a été déplacé vers ".$repertoireDestination.$nomDestination;

                             Img::creerMin($repertoireDestination.$nomDestination, 'fichier/min',$nomDestination, 320 ,200);
                             $idimage = $nomDestination;
                             $req = new ModelUti();
                             $res=$req->image($db, $idimage);

                                } else {
                                    echo "Le fichier n'a pas été uploadé (trop gros ?) ou ". "Le déplacement du fichier temporaire a échoué". " vérifiez l'existence du répertoire ".$repertoireDestination;
                                }

                  
                  }
} else {
  echo 'Erreur image ';
}

if(isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['taille']) && isset($_POST['ville']) && isset($_POST['idmarque']) && isset($_POST['id_type']) ){
 



                $nom = htmlspecialchars($_POST['nom']);
                $description= htmlspecialchars($_POST['description']);
                $prix =intval($_POST['prix']);
                $taille =intval($_POST['taille']);
                $ville =htmlspecialchars($_POST['ville']);
                $idmarque =htmlspecialchars($_POST['idmarque']);
                $id_type =htmlspecialchars($_POST['id_type']);
                $id_pers = $_COOKIE['cookiehash'];
                 $image = $_FILES['image'];
                //image



                $req=new ModelUti();
                $res=$req->getid($db,$id_pers);

                 //$verifmail = new ModelUti();
                 // $req->$verifmail->verifid($db,$id_pers);
                  

                    if ($id_pers== $res['id_pers']){

                          $req=new ModelUti();
                          $res1= $req->verifmarque($db,$_POST['idmarque']);
                          //var_dump($res1);
                 
                              if ($res1 == false){ 
                                   $req=new ModelUti();
                                $res2= $req->AjoutMarque($db, $_POST['idmarque']);
                                  var_dump($res2);
                
                               echo ' ok ajout marque';

                             } else{ 
                                echo'Marque existe ';
                             }
                  }else{

                    echo' Erreur de mail';
                  }



                $req=new ModelUti();
                $res3= $req->AjoutProd($db, $_POST['nom'], $_POST['description'] ,$prix, $taille, $_POST['ville'],$_POST['idmarque'],$_POST['id_type'] ,$id_pers);

                var_dump($res3);
                include("Vue/ajoutok.php");
          
           
       }else{

         include("Vue/ajoutpasok.php");

              
    }
    /*else{

  echo'Erreur'
}
     */ 
/*require('/Modele/utilisateurs.php');

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
     $repertoireDestination= 'fichier/';
     
      require_once("imgClass.php");


    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], $repertoireDestination.$nomDestination)) {
          echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"]. " a été déplacé vers ".$repertoireDestination.$nomDestination;
         // echo "<img src=\"".$repertoireDestination.$nomDestination."\" width=\"100\" height=\"190\">";   

             Img::creerMin($repertoireDestination.$nomDestination, 'fichier/min',$nomDestination, 320 ,200);
     } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ". "Le déplacement du fichier temporaire a échoué". " vérifiez l'existence du répertoire ".$repertoireDestination;
    }
}

*/

    ?>



    

</body>
</html>









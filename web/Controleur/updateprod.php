<?php


if(isset($_POST['id_produit']) &&isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['taille']) && isset($_POST['ville']) && isset($_POST['idcategorie']) && isset($_POST['idmarque']) ){


				        $id_produit= $_POST['id_produit'];
                $nom = htmlspecialchars($_POST['nom']);
                $description= htmlspecialchars($_POST['description']);
                $prix =intval($_POST['prix']);
                $taille =intval($_POST['taille']);
                $ville =htmlspecialchars($_POST['ville']);
                $idmarque =htmlspecialchars($_POST['idmarque']);
                $idcategorie =htmlspecialchars($_POST['idcategorie']);
                $id_pers = $_COOKIE['cookiehash'];
                

                require_once("../Modele/connexion.php");
                require_once("../Modele/utilisateurs.php");
                require_once("../Modele/imgClass.php");


                $req=new ModelUti();
                $res=$req->getid($db,$id_pers);

                 
                  

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
                $res3= $req->ModifProd($db, $nom, $description ,$prix, $taille, $ville,$idcategorie,$idmarque ,$id_pers, $id_produit);

                var_dump($res3);
                 echo "<script type='text/javascript'>document.location.replace('../Vue/inventaire.php');</script>";
          
               
       }else{

        echo " erreur de modif";
              
    }


?>
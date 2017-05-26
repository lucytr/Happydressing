
   <?php



    if(isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['taille']) && isset($_POST['ville']) && isset($_POST['idcategorie']) && isset($_POST['idmarque']) ){

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
                                  //var_dump($res2);
                
                               //echo ' ok ajout marque';

                             } else{ 
                                //echo'Marque existe ';
                             }
                    }else{

                      //echo' Erreur de mail';
                    }



                $req=new ModelUti();
                $res3= $req->AjoutProd($db, $_POST['nom'], $_POST['description'] ,$prix, $taille, $_POST['ville'],$_POST['idcategorie'],$_POST['idmarque'] ,$id_pers);

               // var_dump($res3);
                /*echo "<script type='text/javascript'>document.location.replace('../Vue/interfacemembre.php');</script>";*/
                echo "<script type='text/javascript'>document.location.replace('Vue/AjoutPhoto.php');</script>";

               
       }else{

      echo "<script type='text/javascript'>document.location.replace('../Vue/interfacemembre.php');</script>";
              
    }

    ?>
</body>
</html>





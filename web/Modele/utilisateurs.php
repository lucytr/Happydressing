<?php


    Class ModelUti{

        function mdp($db,$mail,$mdp){
            
            $sql = "SELECT * FROM personne WHERE mail = :mail AND mdp=:mdp";
            $statement= $db->prepare($sql);
            $statement->execute(array(':mail'=> $mail,':mdp'=>$mdp));
             $req=  $statement->fetch();
             var_dump($req);
              return $req;
        }
        
       

        function createAdmin($db,$nom,$prenom,$mail,$mdp,$id_pers){
            try{
              
             $req= $db->query("INSERT INTO Personne (nom,prenom,mail,mdp,id_pers) VALUES('$nom','$prenom', '$mail', '$mdp','$id_pers')");
              

              var_dump($req);
            }
            catch(PDOException $e){
             echo($e->getMessage());
              die("<br> Erreur lors de l'ajout d'un administrateur à la table " );
            }
        } 


        function AjoutProd($db,$nom,$description,$prix,$taille,$ville,$idcategorie,$idmarque,$id_pers){
           // try{
             $req= $db->query("INSERT INTO produit (nom,description,prix,taille,ville,idcategorie,idmarque,id_pers)

              VALUES('$nom','$description', '$prix','$taille', '$ville','$idcategorie','$idmarque','$id_pers')");
             var_dump($req);

            
        } 

        function AjoutMarque($db,$idmarque){

              $req= $db->query("INSERT INTO marque (idmarque) VALUES('$idmarque')");
              return $req;
    
            
        } 

        function verifmarque($db,$idmarque){


            $sql= "SELECT * from marque where idmarque = :idmarque ";
            $statement= $db->prepare($sql);


            $statement->execute(array(':idmarque' => $idmarque));
             $req=  $statement->fetch();
             return $req;
            var_dump($req);
          
      } 
       


        function deco(){
        if (isset($_COOKIE["cookiehash"])) {
            setcookie("cookiedec", "", time() - 1000000, '/');
            unset($_COOKIE["cookiehash"]);
       
         }else{ 

          echo 'Erreur de deconnexion';
        }

        }


    function verifid($db,$id_pers){
            
            $sql = "SELECT * FROM personne WHERE mail = :mail ";
            $statement= $db->prepare($sql);
            $statement->execute(array(':mail'=> $mail));
             $req=  $statement->fetch();
             var_dump($req);
              return $req;
        }

        function verifmail($db,$mail){
            
            $sql = "SELECT * FROM personne WHERE mail = '$mail' ";
        $statement= $db->query($sql);
        $req= $statement->fetch();
        var_dump($req['mail']);
        return $req;

        }


    function getid($db,$id_pers){

        $sql = "SELECT id_pers FROM personne WHERE id_pers = :id_pers ";
        $statement= $db->prepare($sql);
        $statement->execute(array(':id_pers'=> $id_pers));
        $req= $statement->fetch();
        var_dump($req);
        return $req;


    }




    function SupProd($db,$id_produit){
           
             $req= $db->query("DELETE From produit where id_produit ='$id_produit' ");
            
    }

    function ModifProd($db,$nom,$description,$prix,$taille,$ville,$idcategorie,$idmarque, $id_produit){
                       $req= $db->query("UPDATE produit SET nom= '$nom',description ='$description',prix='$prix',taille='$taille',ville ='$ville',idcategorie='$idcategorie',idmarque='$idmarque' where id_produit = '$id_produit'");
             var_dump($req);
    }
 
    function inventaire($db,$id_pers){

          $sql = "SELECT * FROM produit where id_pers = :id_pers";
            $statement= $db->prepare($sql);
            $statement->execute(array(':nom'=> $nom,':description'=> $description,':prix'=> $prix,':taille'=> $taille,':ville'=> $ville,':idcategorie'=> $idcategorie,':idmarque'=> $idmarque, ':id_pers'=> $id_pers));
             $req=  $statement->fetch();
             var_dump($req);
              return $req;

    }




    function image($db, $nomDestination){
        $req= $db->query("INSERT INTO Image (nom) VALUES('$nomDestination') ");

    }



    function affimodif($db, $id){

      
      $reponse = $db->query("SELECT * FROM produit WHERE Id_produit= '$id'"); 
      $donnees = $reponse->fetch();
      return $donnees;

    }

   function idprod($db, $nom)
    {

       $sql = "SELECT * FROM image WHERE nom = '$nom' ";
        $statement= $db->query($sql);
        $req= $statement->fetch();
        //var_dump($req['idimage']);
        return $req;

  
    }

    function detailprod($db,$id){

       $sql = "SELECT * FROM produit WHERE id_produit = '$id' ";
        $statement= $db->query($sql);
        $req= $statement->fetch();
        //var_dump($req);
        return $req;
    }

    function getmail($db,$id){

       $sql = "SELECT * FROM personne WHERE id_pers = '$id' ";
        $statement= $db->query($sql);
        $req= $statement->fetch();
        //var_dump($req);
        return $req;
    }

      function triefemme(){

          $sql = "SELECT * FROM produit WHERE id_produit = '$id' AND idcategorie='FEMME'";
        $statement= $db->query($sql);
        $req= $statement->fetch();
        //var_dump($req);
        return $req;

      }

  }
?>



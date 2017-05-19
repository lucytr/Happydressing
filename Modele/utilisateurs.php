<?php
    require("connexion.php");

    // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
    /*function mdp($db,$id_admin){
        $sql = "SELECT count(*) as exist FROM administrateur WHERE id_admin='".$id_admin."'";
        $reponse = $db->query($sql);
        return $reponse;
    }
*/
    Class Model{

        function mdp($db,$id_admin,$mdp){
            
            $sql = "SELECT * FROM administrateur WHERE mail = :mail AND mdp=:mdp";
            $statement= $db->prepare($sql);
            $statement->execute(array(':mail'=> $id_admin,':mdp'=>$mdp));
             $req=  $statement->fetch();
            var_dump($req);
            return $req;
        }
        /*function selAll($db){

        $sq1= $db->query("SELECT * FROM administrateur WHERE id_admin='".$id_admin."'");
        
        return $sq1;
        }*/

        // fonction qui cherche le mot de passe d'un utilisateur avec un identifiant dans la base de données
        function utilisateurs($db){
            $reponse = $db->query('SELECT mail FROM administrateur');
            return $reponse;
        }


        function createAdmin($db,$nom,$prenom,$mail,$mdp){
            try{
              /*$sql = 'INSERT INTO administrateur (nom,prenom,mail,mdp) VALUES(:nom,:prenom,:mail,:mdp)';
              $req=$db->prepare($sql);*/

           /* $reponse = $db->prepare('INSERT INTO administrateur (nom,prenom,mail,mdp)  values (:nom,:prenom,:mail,:mdp)');*/
             $req= $db->query("INSERT INTO administrateur (nom,prenom,mail,mdp) VALUES('$nom','$prenom', '$mail', '$mdp')");
              

              var_dump($req);
            }
            catch(PDOException $e){
             echo($e->getMessage());
              die("<br> Erreur lors de l'ajout d'un administrateur à la table " );
            }
        }      
    }
?>
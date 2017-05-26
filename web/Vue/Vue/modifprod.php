<!DOCTYPE html>
<html>
<html lang="fr">
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet"  type="text/css" href="css/cssAjout.css">

<body>


    <?php
    require("../Modele/connexion.php");
    include('navbarmembre.html');


    //REcupere l'id du produit à modfier
    $reponse = $db->query('SELECT * FROM produit WHERE Id_produit='.$_GET['id']);
    $donnees = $reponse->fetch();


    ?>

    <form class="form-horizontal" role="form" method ="post" action="../Controleur/updateprod.php"  accept-charset="UTF-8" id="login-nav">



    <legend>Modifier d'un article </legend>



    <div class="form-group">
      <label class="col-md-4 control-label" for="id_produit"> </label>  
        <div class="col-md-4">
          <input type="hidden" name="id_produit" value=" <?php echo $donnees['id_produit']; ?>"/>
        
      </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label" for="nom">Nom de l'article </label>  
        <div class="col-md-4">
          <input type="text" name="nom" value=" <?php echo $donnees['nom']; ?>"/>
        
        
      </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label" for="description">Description </label>  
        <div class="col-md-4">
          <input type="text" name="description" value=" <?php echo $donnees['description']; ?>"/>
        
      </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label" for="prix">Prix</label>  
        <div class="col-md-4">
          <input type="text" name="prix" value=" <?php echo $donnees['prix']; ?>"/>
        
        
      </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label" for="taille">Taille ou pointure</label> 
        <div class="col-md-4">
          <input type="text" name="taille" value="<?php echo $donnees['taille']; ?>"/>
        
      </div>
    </div>

    <div class="form-group">
      <label class="col-md-4 control-label" for="idcategorie"> Categorie </label>
        <div class="col-md-2">
          <select id="idcategorie" name="idcategorie" class="form-control">
            <option value="Femme">FEMME</option>
            <option value="Homme">HOMME</option>
            <option value="Fille">FILLE</option>
            <option value="Garcon">GARCON</option>
            <option value="Accessoires">ACCESSOIRES</option>

        </select>
      </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label" for="idmarque">Marque</label>  
        <div class="col-md-4">
          <input type="text" name="idmarque" value="<?php echo $donnees['idmarque']; ?>"/>
        

      </div>
    </div>


    <div class="form-group">
      <label class="col-md-4 control-label" for="companie"></label>  
        <div class="col-md-4">
          <input id="submit" name="submit" placeholder="" class="form-control input-md" required="" type="submit">
        
      </div>
    </div>



    </form>

    
</body>
</html>
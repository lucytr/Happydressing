<!DOCTYPE html>
<html lang="fr">
	<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<link rel="stylesheet" type="text/css" href="css/cssAjout.css"> 


<body>
<?php
include ('navbarmembre.html');
?>
    
<form class="form-horizontal" role="form" method ="post" action="../Controleur/Ajouter.php"  accept-charset="UTF-8" id="login-nav">


<legend>Ajout d'un article </legend>



<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom de l'article </label>  
  <div class="col-md-4">
  <input id="nom" name="nom" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description </label>  
  <div class="col-md-4">
  <input id="description" name="description" placeholder="" class="form-control input-md" required="" type="textarea">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="prix">Prix</label>  
  <div class="col-md-4">
  <input id="prix" name="prix" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="taille">Taille ou pointure</label>  
  <div class="col-md-4">
  <input id="taille" name="taille" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="ville">Ville de vente</label>  
  <div class="col-md-4">
  <input id="ville" name="ville" placeholder="" class="form-control input-md" required="" type="text">
    
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
      <option value="Accessoires">ACCESOIRES</option>


    </select>
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="idmarque">Marque</label>  
  <div class="col-md-4">
  <input id="idmarque" name="idmarque" placeholder="" class="form-control input-md" required="" type="text">







<div class="form-group">
  <label class="col-md-4 control-label" for="companie"></label>  
  <div class="col-md-4">
  <input id="submit" name="submit" placeholder="" class="form-control input-md" required="" type="submit">
    
  </div>
</div>



</form>




          
</body>
</html>
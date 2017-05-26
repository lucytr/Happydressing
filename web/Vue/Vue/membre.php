<!DOCTYPE html">
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
    
        <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Ajout d'un article </legend>

<!-- Select Basic -->


<!-- Text input-->
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
  <label class="col-md-4 control-label" for="idcategorie"> Categorie</label>
  <div class="col-md-2">
    <select id="id_type" name="idcategorie" class="form-control">
      <option value="Femme">Femme</option>
      <option value="Homme">Homme</option>
      <option value="Fille">Fille</option>
      <option value="Garcon">Garçon</option>
      <option value="Acessoires">Acessoires</option>


    </select>
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="idmarque">Marque/label>  
  <div class="col-md-4">
  <input id="idmarque" name="idmarque" placeholder="" class="form-control input-md" required="" type="text">
    
  </div>
</div>




 <label class="col-md-4 control-label"  for="image"></label>
  <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
  <div class="col-md-4">
   <input type="file" name="image" id="image" /><br />


<div class="form-group">
  <label class="col-md-4 control-label" for="companie"></label>  
  <div class="col-md-4">
  <input id="companie" name="companie" placeholder="" class="form-control input-md" required="" type="submit">
    
  </div>
</div>


</fieldset>
</form>




          
</body>
</html>
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

<form method="post" action ='../Controleur/Ajoutimg.php' enctype="multipart/form-data">
<!-- Form Name -->
<legend>Ajout d'un article </legend>

<!-- Select Basic -->




     
     <label for="image">Fichier (tous formats | max. 1 Mo) :</label><br />
     <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
     <input type="file" name="image" id="image" /><br />
     
     <input type="submit" name="submit" value="Envoyer" />


     
    
  </div>
</div>


</form>





          
</body>
</html>
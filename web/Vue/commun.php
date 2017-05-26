<!DOCTYPE html>
<html lang="fr">
	<meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/cssAjout.css"> 

<body>
<nav class="navbar navbar-default navbar-inverse" role="navigation">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="?">HappyDressing</a>
    </div>

    
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
           <li><a href="../Controleur/fichefemme.php" >FEMME</a></li>
        </ul>

        <ul class="nav navbar-nav">
        
          <li><a href="../Controleur/Deconnexion.php" >HOMME</a></li>
        </ul>

        <ul class="nav navbar-nav">
          <li><a href="../Controleur/Deconnexion.php" >FILLE</a></li>
        </ul>

        <ul class="nav navbar-nav">  
          <li><a href="../Controleur/Deconnexion.php" >GARCON</a></li>
        </ul>

      <ul class="nav navbar-nav">
         <li><a href="../Controleur/Deconnexion.php" >ACCESSOIRES</a></li>
      </ul>



      <ul class="nav navbar-nav navbar-right">
        <li><a href="Vue/inscription.html" >Subscribe</a></li>

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" ><b>Login</b> <span class="caret"></span></a>

              <ul id="login-dp" class="dropdown-menu dropdown-menu-right">
                <li>
                   <div class="row">
                      <div class="col-md-12">
                        Je m'identifie
                        
                                        
                         <form class="form" role="form" method="post"  action="Controleur/connexion.php" accept-charset="UTF-8" id="login-nav">
                            <div class="form-group">
                               <label class="sr-only" for="mail">identifiant</label>
                               <input type="text" class="form-control" name="mail" placeholder="identifiant" required>
                            </div>
                            <div class="form-group">

                               <label class="sr-only" >mot de passe </label>
                               <input type="password" class="form-control" name="mdp" placeholder="Password" required>
                                <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                            </div>
                            <div class="form-group">
                               <button type="submit" class="btn btn-primary btn-block" ">Sign in</button>
                            </div>
                            <div class="checkbox">
                               <label>
                               <input type="checkbox"> keep me logged-in
                               </label>
                            </div>
                         </form>



                      </div>
                      
                   </div>
                </li>
              </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
    
         <div class="container">
            <h2>Carousel Example</h2>  
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
              
              <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
              </ol>

     
              <div class="carousel-inner">
                <div class="item active">
                  <img src="dressing.png" alt="Los Angeles">
                </div>

                <div class="item">
                  <img src="Shopping.png" alt="Chicago">
                </div>
              </div>

              
              <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div> 
          </br>

<?php
require_once("../Controleur/ficheproduit.php");
?>
</body>
</html>
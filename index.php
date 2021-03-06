<?php
require('../vendor/autoload.php'); 
    /*require("Modele/connexion.php");*/
     /*require("Vue/commun.html");*/

 $dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);

$app->get('/db/', function() use($app) {
  $st = $app['pdo']->prepare('SELECT name FROM test_table');
  $st->execute();

  $names = array();
  while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
    $app['monolog']->addDebug('Row ' . $row['name']);
    $names[] = $row;
  }

  return $app['twig']->render('database.twig', array(
    'names' => $names
  ));
});

   
   /* if(!isset($_COOKIE["userID"])){ // L'utilisateur n'est pas connecté
        include("Controleur/connexion.php"); 
        include("Controleur/inscription.php");

        //include("Controleur/inscription.php"); // On utilise un controleur secondaire pour éviter d'avoir un fichier index.php trop gros
    

}*/

?>

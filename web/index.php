<?php
require('../vendor/autoload.php'); 
    /*require("Modele/connexion.php");*/
     /*require("Vue/commun.html");*/

 $dbopts = parse_url(getenv('postgres://zcddbxqvttkdwg:1c29bf6f57482e63f00101685e0019d10ac232cf4b22b5301c22da4be0bb2210@ec2-54-163-246-154.compute-1.amazonaws.com:5432/ddgdhkk7gmaiv9'));
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

<?php
/* local
    $dbname = "Vente_de_produit";
    $host='localhost';
    $user='postgres';
    $pass='290296';
*/

    
    $dbname = "ddgdhkk7gmaiv9";
    $host='ec2-54-163-246-154.compute-1.amazonaws.com';
    $user='zcddbxqvttkdwg';
    $pass='1c29bf6f57482e63f00101685e0019d10ac232cf4b22b5301c22da4be0bb2210';

    $db = new PDO("pgsql:host=$host;dbname=$dbname", "$user", "$pass");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


?>


<?php
$servername="127.0.0.1";
$username="moumeneh25techin_Admin";//Mon compte administrateur avec toues les prévilege 
$password="xEv_3L{v=6!&";
try {
    $connexion = new PDO("mysql:host=$servername;dbname=moumeneh25techin_compte_creation", $username, $password);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "yess je suis la ";
}   
    catch(PDOException $e){
        echo "erreur : ".$e->getMessage();

    }

?>
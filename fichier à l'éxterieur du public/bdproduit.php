<?php

$servername = "127.0.0.1";

$utilisateur2 = "moumeneh25techin_lecture";

$pass2 = ",w5zVe#[Ku3X";

try {
    $connexionProduits = new PDO("mysql:host=$servername;dbname=moumeneh25techin_produits", $utilisateur2, $pass2);
    $connexionProduits->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur connexion produits : " . $e->getMessage();
}

// Mot de passe lecture : ,w5zVe#[Ku3X
// Mot de passe écriture : m%?KjfuQ(r]
?>

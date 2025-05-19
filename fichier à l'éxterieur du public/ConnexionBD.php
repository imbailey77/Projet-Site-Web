<?php
// Connexion principale (comptes, authentification)
$servername = "127.0.0.1";
$utilisateur1 = "moumeneh25techin_Admin";
$utilisateur2 = "moumeneh25techin_lecture";
$pass1 = "xEv_3L{v=6!&";
$pass2 = ",w5zVe#[Ku3X";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=moumeneh25techin_compte_creation", $utilisateur1, $pass1);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur connexion comptes : " . $e->getMessage();
}

try {
    $connexionProduits = new PDO("mysql:host=$servername;dbname=moumeneh25techin_produits", $utilisateur2, $pass2);
    $connexionProduits->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur connexion produits : " . $e->getMessage();
}

// Mot de passe lecture : ,w5zVe#[Ku3X
// Mot de passe écriture : m%?KjfuQ(r]
?>

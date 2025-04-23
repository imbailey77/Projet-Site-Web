<?php
session_start();

if (!isset($_SESSION['Panier'])) {
    $_SESSION['Panier'] = [];
}

if (isset($_POST['nom'], $_POST['prix'], $_POST['image'])) {
    $produit = [
        'nom' => $_POST['nom'],
        'prix' => $_POST['prix'],
        'image' => $_POST['image'],
    ];
    $_SESSION['panier'][] = $produit;
}

// Redirige vers le panier ou la page produits
header('Location: Panier.php');
exit;

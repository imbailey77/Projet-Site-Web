<?php include 'Entete.php'; ?> 


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Produits</title>
    <link rel="stylesheet" href="css/produits.css">
</head>
<body>

<h1>Nos Produits</h1>

<div class="conteneur-produits">
    <?php
    // Tableau contenant les informations des produits
    $produits = [
        ["nom" => "Sérum Précieux Votre Visage", "description" => "Un sérum de luxe hautement concentré", "prix" => 880, "image" => "imgp/serum.png"],
 
        ["nom" => "Huile Majestueuse", "description" => "Huile nourrissante pour le visage", "prix" => 735, "image" => "imgp/huile.png"],
        ["nom" => "Crème Riche Régénérante", "description" => "Crème riche pour une régénération intense", "prix" => 920, "image" => "imgp/creme2.png"],

        ["nom" => "Lotion Tonique Fraîcheur", "description" => "Lotion tonique rafraîchissante", "prix" => 430, "image" => "imgp/gel.png"],
        ["nom" => "Baume Nuit Réparateur", "description" => "Brume de nuit douce", "prix" => 815, "image" => "imgp/Brume.png"],
        ["nom" => "Masque Hydratation Intense", "description" => "Masque hydratant intense", "prix" => 650, "image" => "imgp/masque.png"],
        ["nom" => "Gel Nettoyant Purifiant", "description" => "Gel nettoyant purifiant", "prix" => 320, "image" => "imgp/cremeh.png"],
        ["nom" => "Essence Revitalisante", "description" => "Prfume de luxe a l'eau de coco des hautes ", "prix" => 720, "image" => "imgp/prfum.png"],
    ];

    // Affichage des produits en boucle
    foreach ($produits as $produit) :
    ?>
        <div class="produit">
            <img src="<?= htmlspecialchars($produit['image']) ?>" alt="<?= htmlspecialchars($produit['nom']) ?>">
            <h2><?= htmlspecialchars($produit['nom']) ?></h2>
            <p><?= htmlspecialchars($produit['description']) ?></p>
            <p class="prix">CA$<?= number_format($produit['prix'], 2) ?></p>
        </div>
    <?php endforeach; ?>
</div>

<script src="script.js"></script>

</body>
</html>

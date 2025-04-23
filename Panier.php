<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier</title>
    <link rel="stylesheet" href="css/Panier.css">
</head>
<body>
<?php include 'Entete.php'; ?>

<h1 style="text-align:center; margin-top: 40px;">Mon Panier 🛍️</h1>

<div class="conteneur-produits">
    <?php if (!empty($_SESSION['panier'])) : ?>
        <?php foreach ($_SESSION['panier'] as $produit) : ?>
            <div class="produit">
                <img src="<?= htmlspecialchars($produit['image']) ?>" alt="<?= htmlspecialchars($produit['nom']) ?>">
                <h2><?= htmlspecialchars($produit['nom']) ?></h2>
                <p class="prix">CA$<?= number_format($produit['prix'], 2) ?></p>
            </div>
        <?php endforeach; ?>
    <?php else : ?>
        <p class="vide">Ton panier est vide 😢</p>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
</body>
</html>

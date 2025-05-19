<?php
require_once("Auth.php");
if (!Auth::connecter()) {
    header("Location: Connexion.php");
    exit();
}
include("Entete.php");
require_once(__DIR__ . "/../../bdproduit.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Nos Produits</title>
    <link rel="stylesheet" href="css/produits.css">
    <link rel="stylesheet" href="css/Bouton.css">
</head>
<body>

<?php include("Chargement.php"); ?>

<h1>Nos Produits</h1>

<div class="conteneur-produits">
<?php
try {
    $stmt =  $connexionProduits->prepare("SELECT * FROM produits");
    $stmt->execute();
    $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($produits as $produit) {
        echo '<div class="produit">';
        echo '<img src="'.htmlspecialchars($produit["image"]).'" alt="'.htmlspecialchars($produit["nom"]).'" width="150">';
        echo '<h3>'.htmlspecialchars($produit["nom"]).'</h3>';
        echo '<p>'.htmlspecialchars($produit["description"]).'</p>';
        echo '<p>Prix : '.htmlspecialchars($produit["prix"]).' $</p>';
        echo '<form action="Ajouter-Panier.php" method="post">';
        echo '<input type="hidden" name="nom" value="'.htmlspecialchars($produit["nom"]).'">';
        echo '<input type="hidden" name="prix" value="'.htmlspecialchars($produit["prix"]).'">';
        echo '<input type="hidden" name="image" value="'.htmlspecialchars($produit["image"]).'">';
        echo  '<button type="submit" class="bouton-ajout">Ajouter au panier 🛒</button>';
        echo '</form>';
        echo '</div>';
    }
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
</div>
</body>
</html>

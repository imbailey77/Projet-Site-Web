<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Lyn&Dv's</title>
    <link rel="stylesheet" href="style_accueil.css">
    <link rel="stylesheet" href="Entete.css">
    <link rel="icon" type="image/png" href="icone.png">
</head>
<body>

    <?php include 'Entete.php'; ?> <!-- Header inclus -->

    <!-- Ajout de la vidéo -->
    <div class="video-container">
        <video autoplay loop muted>
            <source src="intro.mp4" type="video/mp4">
           
        </video>
    </div>

    <h1 class="content">Bienvenue sur Lyn&Dv's</h1>
    <script defer src="interaction-index.js" ></script>
    <div class="conteneur">
    <div class="carte">
        <img src="imgp/Produit3.1.png" alt="Image de base" class="base">
        <img src="imgp/Produit3.2.png" alt="Image au survol" class="survol">
    </div>

    <div class="carte">
        <img src="imgp/Produit4.1.png" alt="Image de base" class="base">
        <img src="imgp/Produit4.2.png" alt="Image au survol" class="survol">
    </div>

    <div class="carte">
        <img src="imgp/Produit5.1.png" alt="Image de base" class="base">
        <img src="imgp/Produit5.2.png" alt="Image au survol" class="survol">
    </div>
</div>


</body>
</html>
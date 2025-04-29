<?php
require_once("Session.php");
Session::start();
?>
<link rel="stylesheet" href="css/Entete.css">

<header>
    <nav>
        <ul>
            <li><img src="imgp/Logo2.png" alt="Logo Lyn&Dv's" class="logo"></li>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="Produits.php">Produits</a></li>
            <li><a href="Expertise.php">Expertise</a></li>
            <li><a href="https://github.com/imbailey77">Contact</a></li>
        <div class="droite">
            <?php if (isset($_SESSION['utilisateur'])) : ?>
                <span class="utilisateur">👋 Bonjour <?= htmlspecialchars($_SESSION['utilisateur']['prenom']) ?> <?= htmlspecialchars($_SESSION['utilisateur']['nom']) ?> !</span>
                <li><a href="deconnexion.php">Se déconnecter</a></li>
                <li><a href="Panier.php">Panier</a></li>
            <?php else : ?>
                <li><a href="Connexion.php">Se connecter</a></li>
                <li><a href="inscription.php">S'inscrire</a></li>
            <?php endif; ?>
        </div>
        </ul>
    </nav>
</header>

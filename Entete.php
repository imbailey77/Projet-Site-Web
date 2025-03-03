<link rel="stylesheet" href="css/chargement.css">

<?php include 'chargement.php'; ?>

<header>
        <nav>
            <ul>
                <li><img src="Logo2.png" alt="Logo Lyn&Dv's" class="logo"></li>
                <li><a href="Accueil.php">Accueil</a></li>
                <li><a href="#">Produits</a></li>
                <li><a href="#">Expertise</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="Connexion.php">Se Deconnecter</a></li>
                <li><a href="Pannier.php">Panier</a></li>
            </ul>
        </nav>
</header>
<div id="conteneur-chargement">
    <div id="chargement-wifi">
        <svg class="cercle-externe" viewBox="0 0 86 86">
            <circle class="arriere" cx="43" cy="43" r="40"></circle>
            <circle class="avant" cx="43" cy="43" r="40"></circle>
        </svg>
        <svg class="cercle-milieu" viewBox="0 0 60 60">
            <circle class="arriere" cx="30" cy="30" r="27"></circle>
            <circle class="avant" cx="30" cy="30" r="27"></circle>
        </svg>
        <svg class="cercle-interne" viewBox="0 0 34 34">
            <circle class="arriere" cx="17" cy="17" r="15"></circle>
            <circle class="avant" cx="17" cy="17" r="15"></circle>
        </svg>
        <div class="texte" data-text="Chargement...">Chargement...</div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setTimeout(() => {
            document.getElementById("conteneur-chargement").style.display = "none";
        }, 4000);
    });
</script>

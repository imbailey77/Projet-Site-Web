<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <!-- Feuilles de style -->
    <link rel="stylesheet" href="css/style-connexion.css">
    <link rel="stylesheet" href="css/Bouton.css">
</head>
<body>


<?php include("Entete.php"); ?>

<div class="formulaire-connexion">
    <h1>Connexion à votre compte</h1>

    <div class="conteneur-formulaire">
        <form action="authentification.php" method="post">
            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail" required>

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" required>

            <button type="submit" class="button">Se connecter</button>
        </form>
    </div>

    <p class="lien-secondaire">Pas encore de compte ? <a href="inscription.php">Inscrivez-vous ici</a></p>
</div>
<?php if (isset($_GET['echec'])): ?>
    <p style="color:red;">Échec de connexion : veuillez vérifier vos identifiants.</p>
<?php endif; ?>


<?php include 'footer.php'; ?>

</body>
</html>

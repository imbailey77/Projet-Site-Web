<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Créer un compte</title>
    <!-- Feuilles de style -->
    <link rel="stylesheet" href="css/style-connexion.css">
    <link rel="stylesheet" href="css/Bouton.css">
</head>
<body>


<?php include("Entete.php"); ?>

<div class="formulaire-inscription">
    <h1>Créer un nouveau compte client</h1>

    <div class="conteneur-formulaire" >
        <form action="Enregistrement.php" method="post" >
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" >

            <label for="nom">Nom de famille</label>
            <input type="text" name="nom" id="nom" >

            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail" >

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" >

            <p class="texte-offre">Inscrivez-vous et recevez une routine découverte offerte d'une valeur de CAS$50.00 avec votre première commande</p>

            <label class="zone-cochee">
                <input type="checkbox" name="newsletter"> Abonnez-vous à notre newsletter Lyn&Dev's
            </label>

            <button type="submit" class="button" name="créationCompte">Créer mon compte</button>
        </form>
    </div>

    <p class="lien-secondaire">Déjà inscrit ? <a href="Connexion.php">Connectez-vous ici</a></p>
</div>
<script src="Java-script/Validation.js"></script>
<?php include 'footer.php'; ?>

</body>
</html>

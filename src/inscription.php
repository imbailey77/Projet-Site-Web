<?php include("Entete.php"); ?>
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
<!-- Copier et compris d'une video youtube pour la forme du formulaire qui changer quand on clique sur connctez-vous-ici -->



<div class="formulaire-inscription">
    <h1>Créer un nouveau compte client</h1>

    <div class="conteneur-formulaire" >
        <form id="form" method="post">
   

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom">
            <span id="erreur-prenom" class="erreur"></span>

            <label for="nom">Nom de famille</label>
            <input type="text" name="nom" id="nom">
            <span id="erreur-nom" class="erreur"></span>

            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail">
            <span id="erreur-mail" class="erreur"></span>

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp">
            <span id="erreur-mdp" class="erreur"></span>

            <p class="texte-offre">Inscrivez-vous et recevez une routine découverte offerte d'une valeur de CAS$50.00 avec votre première commande</p>

            <label class="zone-cochee">
                <input type="checkbox" name="newsletter"> Abonnez-vous à notre newsletter Lyn&Dev's
            </label>
            
            <button type="submit" class="button" name="créationCompte">Créer mon compte</button>
        </form>
    </div>

    <p class="lien-secondaire">Déjà inscrit ? <a href="Connexion.php">Connectez-vous ici</a></p>
</div>

<?php include 'footer.php'; ?>
<script src="Java-script/Validation.js"></script>
</body>
</html>

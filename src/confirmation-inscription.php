<?php include("Entete.php"); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Confirmation d'inscription</title>
    <link rel="stylesheet" href="css/style-connexion.css">
    <link rel="stylesheet" href="css/Bouton.css">
</head>
<body>
<div class="formulaire-confirmation">
    <h1>Confirmation de vos informations</h1>
    <div class="conteneur-formulaire">
        <form id="form-confirmation" action="Enregistrement.php" method="post">
            <p><strong>Prénom :</strong> <span id="conf-prenom"></span></p>
            <p><strong>Nom :</strong> <span id="conf-nom"></span></p>
            <p><strong>Adresse mail :</strong> <span id="conf-mail"></span></p>
            <input type="hidden" name="prenom" id="prenom">
            <input type="hidden" name="nom" id="nom">
            <input type="hidden" name="mail" id="mail">
            <input type="hidden" name="mdp" id="mdp">
            <input type="hidden" name="infolettre" id="infolettre">
            <input type="hidden" name="créationCompte" value="1">
            <button type="submit" name="creationCompte" class="button">Confirmer et Créer mon compte</button>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const data = JSON.parse(localStorage.getItem("inscription"));
        if (!data) {
            window.location.href = "inscription.php";
            return;
        }

        document.getElementById("conf-prenom").textContent = data.prenom;
        document.getElementById("conf-nom").textContent = data.nom;
        document.getElementById("conf-mail").textContent = data.mail;

        // Injecte dans les champs hidden pour soumission
        document.getElementById("prenom").value = data.prenom;
        document.getElementById("nom").value = data.nom;
        document.getElementById("mail").value = data.mail;
        document.getElementById("mdp").value = data.mdp;
        document.getElementById("infolettre").value = data.newsletter ? "on" : "";
    });
</script>
</body>
</html>

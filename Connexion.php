<?php require_once("Auth.php");
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["mail"] ?? '';
    $mdp = $_POST["mdp"] ?? '';

    if (Auth::login($email, $mdp)) {
        header("Location: Produits.php");
        exit();
    } else {
        $message = "Email ou mot de passe incorrect.";
    }
}
include("Entete.php");
?>
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




<div class="formulaire-connexion">
    <h1>Connexion à votre compte</h1>

    <div class="conteneur-formulaire">
        <form action="" method="post">
            <label for="mail">Adresse mail</label>
            <input type="text" name="mail" id="mail" required>

            <label for="mdp">Mot de passe</label>
            <input type="password" name="mdp" id="mdp" required>

            <button type="submit" class="button" name="valider">Se connecter</button>
        </form>
    </div>

    <p class="lien-secondaire">Pas encore de compte ? <a href="inscription.php">Inscrivez-vous ici</a></p>
</div>


<?php include 'footer.php'; ?>

</body>
</html>

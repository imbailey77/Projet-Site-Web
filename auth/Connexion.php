<?php
require_once("Auth.php");
$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Sécurisation des entrées
    $email = filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL);
    $mdp = filter_input(INPUT_POST, "mdp", FILTER_UNSAFE_RAW);
    $mdp = trim($mdp);

    if ($email && !empty($mdp)) {
        if (Auth::connexion1($email, $mdp)) {
            header("Location: Double-auth.php");
            exit();
        } else {
            $message = "Email ou mot de passe incorrect.";
            file_put_contents('/home/moumeneh25techin/logs/acces-refuses.log', date("Y-m-d H:i:s") . " - Échec de connexion pour le client  mot de passe ou mail non valide$email\n", FILE_APPEND);
        }
    } else {
        $message = "Veuillez entrer une adresse courriel valide et un mot de passe.";
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

    <?php if (!empty($message)): ?>
        <p style="color:red"><?= htmlspecialchars($message) ?></p>
    <?php endif; ?>

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

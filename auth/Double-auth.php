<?php
require_once("Session.php");
Session::start();

$auth = Session::get("f_auth");
$erreur = "";

// Vérifie que la session temporaire est bien définie
if (!$auth || !isset($auth["code"])) {
    die("Session expirée. Veuillez vous reconnecter.");
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Filtrage du code reçu
    $codeEntre = filter_input(INPUT_POST, "code", FILTER_VALIDATE_INT);

    if ($codeEntre !== false && $codeEntre == $auth["code"]) {
        Session::destroy(); // Fin de la session temporaire
        Session::start();   // Nouvelle session valide

        Session::set("utilisateur", [
            "nom" => $auth["nom"],
            "prenom" => $auth["prenom"],
            "email" => $auth["email"]
        ]);
        file_put_contents('/home/moumeneh25techin/logs/acces-reussis.log', date("Y-m-d H:i:s") . " - Authentification réussie pour le client $email\n", FILE_APPEND);
        header("Location: Produits.php");
        exit;
    } else {
        file_put_contents('/home/moumeneh25techin/logs/acces-refuses.log', date("Y-m-d H:i:s") . " - Échec de connexion code non valide $email\n", FILE_APPEND);
        $erreur = "Code invalide. Veuillez réessayer.";
    }
}
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Vérification 2FA - Lyn&Dv's</title>
    <link rel="stylesheet" href="css/style-connexion.css">
</head>
<body>
    <h1>Vérification en deux étapes</h1>
    <p>Un code de sécurité a été envoyé à votre adresse courriel.</p>

    <?php if ($erreur): ?>
        <p style="color:red"><?= htmlspecialchars($erreur) ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="code">Entrez le code reçu :</label>
        <input type="text" name="code" id="code" required><br>
        <button type="submit">Valider</button>
    </form>
</body>
</html>

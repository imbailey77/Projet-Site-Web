<?php
require_once __DIR__ . "/sessionSet.include.php";
session_start();

if (!isset($_SESSION['mail']) || !isset($_SESSION['ip']) || $_SESSION['ip'] !== $_SERVER['REMOTE_ADDR']) {
    header("Location: connexion.php?echec=1");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon espace personnel</title>
</head>
<body>
    <h1>Contenu personnel et confidentiel</h1>
    <h2>Courriel : <?php echo htmlspecialchars($_SESSION['mail']); ?></h2>

    <?php
    if (isset($_COOKIE['prenom_utilisateur'])) {
        echo "<h3>Bonjour, " . htmlspecialchars($_COOKIE['prenom_utilisateur']) . " !</h3>";
    }
    ?>
</body>
</html>

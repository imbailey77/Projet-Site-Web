<?php
require_once(__DIR__ . "/../../ConnexionBD.php");

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['créationCompte'])) {

    // Filtrage des entrées
    $Nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $Email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
    $mdpRaw = filter_input(INPUT_POST, 'mdp', FILTER_UNSAFE_RAW);
    $infolettre = isset($_POST['infolettre']); // booléen true si coché

    // Validation
    if ($Nom && $Prenom && $Email && !empty($mdpRaw)) {
        $mdp = password_hash(trim($mdpRaw), PASSWORD_DEFAULT);

        $insertQuery = $connexion->prepare("INSERT INTO Utilisateur (Nom, Prenom, email, mdp) VALUES (:nom, :prenom, :email, :mdp)");
        $insertQuery->bindParam(':nom', $Nom);
        $insertQuery->bindParam(':prenom', $Prenom);
        $insertQuery->bindParam(':email', $Email);
        $insertQuery->bindParam(':mdp', $mdp);

        if ($insertQuery->execute()) {
            // Envoi de l'e-mail d’infolettre si coché
            if ($infolettre) {
                $message = "Bonjour $Prenom,\n\nMerci de vous être inscrit(e) chez Lyn&Dev’s. Vous recevrez désormais nos nouveautés.";
                envoyerMail($Email, $message);
                file_put_contents('/home/moumeneh25techin/logs/insertion-bd.log', date("Y-m-d H:i:s") . " - Insertion d’un nouveau client : $Email\n", FILE_APPEND);
                
            }
            header("Location: inscription.php");
            exit();
        } else {
            echo "Erreur SQL : " . implode(" | ", $insertQuery->errorInfo());
        }
    } else {
        echo "Données invalides. Veuillez vérifier tous les champs.";
    }
}

// Fonction d’envoi de mail
function envoyerMail($to, $message) {
    $subject = 'Bienvenue chez Lyn&Dev’s';
    $headers = 
        'From: moumeneh25techin@moumene.h25.techinfo420.ca' . "\r\n" .
        'Reply-To: info@lyn-devs.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    return mail($to, $subject, $message, $headers);
}
?>

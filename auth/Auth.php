<?php
require_once("Session.php");
require_once(__DIR__ . "/../../ConnexionBD.php");

class Auth {

    public static function connexion1($email, $password) {
        Session::start();
        global $connexion;
    
        // Filtrage sécurisé
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        $password = trim($password); // retire les espaces accidentels
    
        if (!$email || empty($password)) {
            return false; // Données invalides, on arrête là
        }
    
        $stmt = $connexion->prepare("SELECT * FROM Utilisateur WHERE Email = :email");
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($utilisateur && password_verify($password, $utilisateur["mdp"])) {
            $Code2f = rand(1000, 9999);
    
            Session::set("f_auth", [
                "nom" => $utilisateur["Nom"],
                "prenom" => $utilisateur["Prenom"],
                "email" => $utilisateur["Email"],
                "code" => $Code2f,
            ]);
    
            // Envoi du mail
            $destinataire = $utilisateur["Email"];
            $sujet = "Votre code de vérification Lyn&Dev's";
            $message = "Bonjour {$utilisateur['Prenom']},\n\nVoici votre code de vérification : $Code2f\n\nIl est valide pendant 5 minutes.\n\nMerci !";
            $headers =
                'From: moumeneh25techin@moumene.h25.techinfo420.ca' . "\r\n" .
                'Reply-To: moumeneh25techin@moumene.h25.techinfo420.ca' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
    
            mail($destinataire, $sujet, $message, $headers);
    
            return true;
        }
    
        return false;
    }
    

    public static function connecter() {
        Session::start();
        return Session::get("utilisateur") !== null;
    }

    public static function deconnexion() {
        Session::start();
        Session::destroy();
        header("Location: Connexion.php");
        exit();
    }
}
?>

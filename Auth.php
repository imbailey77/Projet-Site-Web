<?php
require_once("Session.php");
require_once("ConnexionBD.php"); // Utilisation directe de la vraie ConnexionBD fournie

class Auth {
    public static function login($email, $password) {
        Session::start();
        global $connexion; // vient de ConnexionBD.php

        $stmt = $connexion->prepare("SELECT * FROM Utilisateur WHERE Email = ?");
        $stmt->execute([$email]);
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($utilisateur && password_verify($password, $utilisateur["mdp"])) {
            Session::set("utilisateur", [
                "nom" => $utilisateur["Nom"],
                "prenom" => $utilisateur["Prenom"],
                "email" => $utilisateur["Email"]
            ]);
            return true;
        }
        return false;
    }

    public static function isConnected() {
        Session::start();
        return Session::get("utilisateur") !== null;
    }

    public static function logout() {
        Session::start();
        Session::destroy();
        header("Location: Connexion.php");
        exit();
    }
}
?>

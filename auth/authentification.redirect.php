<?php
require_once __DIR__ . "/ConnexionBD.include.php";
require_once __DIR__ . "/sessionSet.include.php";
session_start();

if (!empty($_POST['mail']) && !empty($_POST['mdp'])) {
    $courriel = filter_input(INPUT_POST, "mail", FILTER_VALIDATE_EMAIL);
    $mdp = filter_input(INPUT_POST, "mdp", FILTER_DEFAULT);

    if ($courriel && $mdp) {
        try {
            $requete = $connexion->prepare("SELECT prenom, mdp FROM Utilisateur WHERE Email = :email");
            $requete->bindParam(':email', $courriel, PDO::PARAM_STR);
            $requete->execute();

            $utilisateur = $requete->fetch(PDO::FETCH_ASSOC);

            if ($utilisateur && $mdp === $utilisateur['mdp']) {
                $_SESSION['mail'] = $courriel;
                $_SESSION['prenom'] = $utilisateur['prenom'];
                $_SESSION['ip'] = $_SERVER['REMOTE_ADDR'];

                // Cookie optionnel
                setcookie("prenom_utilisateur", $utilisateur['prenom'], time() + (60 * 60 * 24 * 7), "/", "", true, true);

                header("Location: moninfoperso.php");
                exit();
            } else {
                header("Location: connexion.php?echec=1");
                exit();
            }
        } catch (PDOException $e) {
            echo "Erreur SQL : " . $e->getMessage();
            exit();
        }
    } else {
        header("Location: connexion.php?echec=1");
        exit();
    }
} else {
    header("Location: connexion.php?echec=1");
    exit();
}

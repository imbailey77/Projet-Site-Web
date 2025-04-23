<?php
include 'ConnexionBD.php';

    if(isset($_POST['créationCompte'])){
            $Nom=$_POST['nom'];
            $Prenom=$_POST['prenom'];
            $Email=$_POST['mail'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
  
            $insertQuery="INSERT INTO Utilisateur(Nom,Prenom,email,mdp)
                            VALUES ('$Nom','$Prenom','$Email','$mdp')";
                if($connexion->query($insertQuery)==TRUE){
                    header("location: inscription.php");
                    exit();
                }
                else{
                    echo "Error:".$connexion->error;
                }
            
    }



?>
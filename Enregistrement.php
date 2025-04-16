<?php
include 'ConnexionBD.php';

    if(isset($_POST['créationCompte'])){
            $Nom=$_POST['nom'];
            $Prénom=$_POST['prenom'];
            $Email=$_POST['email'];
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
  
            $insertQuery="INSERT INTO Utilisateur(Nom,Prenom,email,mdp)
                            VALUES ('$Nom','$Prenom','$Email','$mdp')";
                if($connexion->query($insertQuery)==TRUE){
                    header("location: Connexion.php");
                    exit();
                }
                else{
                    echo "Error:".$connexion->error;
                }
            
    }



?>
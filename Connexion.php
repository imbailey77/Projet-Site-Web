<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte - Lyn&Dv's</title>
    <link rel="stylesheet" href="css/style-connexion.css">
   
    <link rel="stylesheet" href="css/Boutton.css">



</head>
<body>
   
    <script defer src="Java-script/Validation.js" ></script>
    <?php include 'Entete.php'; ?>
    
    <main>
        <div class="container"></div>
     
        <section class="signup-form" >
            <h1>Créer un nouveau compte client</h1>
            <div class="form-container" id="créationForm">
                <h2>Informations personnelles</h2>
                <form id="form" action="Enregistrement.php" method="Post">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" >
                
                    <label for="nom">Nom de famille</label>
                    <input type="text" id="nom" name="nom" >
                
                    <label for="email">Adresse mail</label>
                    <input type="text" id="email" name="email">  

                    <label for="password">Mot de passe</label>
                    <input type="password" id="mdp" name="mdp">  
                
                    <p class="offer">Inscrivez-vous et recevez une routine découverte offerte d'une valeur de CA$50.00 avec votre première commande</p>
                
                    <label class="checkbox">
                        <input type="checkbox" name="newsletter">
                        Abonnez-vous à notre newslettre  Lyn&Dev's
                    </label>
                
                    <button type="submit" id  ="CréationBtn" class="custom-button" name ="créationCompte">Créer mon compte</button>
                    <!-- Affiche si il y a une erreur de Validation -->
                    <p id="error" style="color: red;"></p>
                </form>
                
                
            </div>
        </section>
    </main>
   <script src="Java-script/compte.js"></script>
</body>
</html>

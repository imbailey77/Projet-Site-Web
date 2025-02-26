<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un compte - Lyn&Dv's</title>
    <link rel="stylesheet" href="style-log.css">
    <link rel="stylesheet" href="Entete.css">
    <link rel="stylesheet" href="Boutton.css">



</head>
<body>
    <?php include 'Entete.php'; ?> 
    <script defer src="Validation.js" ></script>
    
    
    <main>
        <div class="container"></div>
     
        <section class="signup-form">
            <h1>Créer un nouveau compte client</h1>
            <div class="form-container">
                <h2>Informations personnelles</h2>
                <form id="form" action="/" method="GET">
                    <label for="prenom">Prénom</label>
                    <input type="text" id="prenom" name="prenom" >
                
                    <label for="nom">Nom de famille</label>
                    <input type="text" id="nom" name="nom" >
                
                    <label for="email">Adresse mail</label>
                    <input type="text" id="email" name="email">  
                
                    <p class="offer">Inscrivez-vous et recevez une routine découverte offerte d'une valeur de CA$000.00 avec votre première commande</p>
                
                    <label class="checkbox">
                        <input type="checkbox" name="newsletter">
                        Abonnez-vous à la newsletter
                    </label>
                
                    <button type="submit" class="custom-button">Créer mon compte</button>
                
                    <!-- Ajout d'un élément pour afficher les erreurs -->
                    <p id="error" style="color: red;"></p>
                </form>
                
            </div>
        </section>
    </main>
</body>
</html>

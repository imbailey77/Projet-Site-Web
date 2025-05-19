// Java-script/Validation.js

document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("form");
    const mail = document.getElementById("mail");
    const mdp = document.getElementById("mdp");
    const nom = document.getElementById("nom");
    const prenom = document.getElementById("prenom");

    form.addEventListener("submit", function (e) {
        e.preventDefault(); // on empêche l'envoi direct

        let valid = true;

        // Vérification email
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(mail.value.trim())) {
            document.getElementById("erreur-mail").textContent = "Adresse courriel invalide.";
            valid = false;
        } else {
            document.getElementById("erreur-mail").textContent = "";
        }

        // Vérification nom
        if (nom.value.trim() === "") {
            document.getElementById("erreur-nom").textContent = "Nom requis.";
            valid = false;
        } else {
            document.getElementById("erreur-nom").textContent = "";
        }

        // Vérification prénom
        if (prenom.value.trim() === "") {
            document.getElementById("erreur-prenom").textContent = "Prénom requis.";
            valid = false;
        } else {
            document.getElementById("erreur-prenom").textContent = "";
        }

        // Vérification mot de passe
        if (mdp.value.trim().length < 6) {
            document.getElementById("erreur-mdp").textContent = "Le mot de passe doit contenir au moins 6 caractères.";
            valid = false;
        } else {
            document.getElementById("erreur-mdp").textContent = "";
        }

        // Si tout est bon, on va vers une page de confirmation avec les données en localStorage
        if (valid) {
            const donnes = {
                prenom: prenom.value.trim(),
                nom: nom.value.trim(),
                mail: mail.value.trim(),
                mdp: mdp.value.trim(),
                newsletter: document.querySelector('[name="newsletter"]').checked
            };
            localStorage.setItem("inscription", JSON.stringify(donnes));
            window.location.href = "confirmation-inscription.php";
        }
    });
});

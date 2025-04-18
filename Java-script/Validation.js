const nom = document.getElementById("nom");
const prenom = document.getElementById("prenom");
const email = document.getElementById("email");
const form = document.getElementById("form");
const errorElement = document.getElementById("error");

form.addEventListener("submit", (evenement) => {
    let messages = [];

    if (nom.value.trim() === "") { 
        messages.push("Il faut remplir le champ du Nom");
    }

    if (prenom.value.trim() === "") { 
        messages.push("Il faut remplir le champ du Prénom");
    }
    if (prenom.value.trim().length<2){
        messages.push("Le prénom doit contenir au moins 2 lettres ")
    }

    if (email.value.trim() === "") { 
        messages.push("Il faut remplir le champ de l'adresse mail");
    } else if (!/\S+@\S+\.\S+/.test(email.value)) {
        messages.push("L'adresse mail n'est pas valide");
    }

    if (messages.length > 0) {
        evenement.preventDefault(); // Empêche l'envoi du formulaire
        errorElement.innerText = messages.join("\n");
    }
});

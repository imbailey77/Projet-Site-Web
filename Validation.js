const nom = document.getElementById("name");
const prenom = document.getElementById("prenom");
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

    if (messages.length > 0) {
        evenement.preventDefault(); // Empêche l'envoi du formulaire
        errorElement.innerText = messages.join(", ");
    }
});

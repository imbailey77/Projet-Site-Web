// On écoute tous les formulaires de suppression
const formulaires = document.querySelectorAll('.form-supprimer');

formulaires.forEach(function(formulaire) {
    formulaire.addEventListener('submit', function () {
        // Supprime le bloc du produit visuellement AVANT d'envoyer le formulaire
        const produit = formulaire.closest('.produit');
        produit.remove();
    });
});

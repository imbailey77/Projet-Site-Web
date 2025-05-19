const formulaires = document.querySelectorAll('.form-supprimer');

formulaires.forEach(function(formulaire) {
    formulaire.addEventListener('submit', function (event) {
        // Supprime visuellement
        const produit = formulaire.closest('.produit');
        produit.remove();

 
    });
});

<link rel="stylesheet" href="css/Chargement.css">

<div id="chargement">
    <div class="glowing-cube-container">
        <div class="glowing-cube">
            <div class="top">❤</div>
            <div>
                <span style="--i:0;"></span>
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>
        </div>
        <p class="texte-chargement">Chargement en cours...</p>
    </div>
</div>
<!-- la partie en haut viens directement de UNIVERS.IO UX/UI pour la page chargement j'ai juste copier coller le code pour le css/html du chargement  -->
<script>
    window.addEventListener("load", function () {
        setTimeout(function () {
            const loader = document.getElementById("chargement");
            if (loader) {
                loader.style.opacity = 0;
                loader.style.pointerEvents = "none";
                setTimeout(() => loader.style.display = "none", 500);
            }
        }, 3000); // ← temps d’affichage du chargement (3 secondes)
    });
</script>

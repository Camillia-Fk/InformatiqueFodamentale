
	/*
	    Fonction pour afficher ou masquer le champ "Précisez"
	    quand je clics sur planete elle s'affiche
    
    	*/
    function afficherChampPrecisez() {

        // Utilise document.getElementById pour obtenir une référence à l'élément de la case à cocher "Les planètes" en utilisant son ID sujetPlanetes.
        var checkbox = document.getElementById('sujetPlanetes');

        // Utilise document.getElementById pour obtenir une référence à l'élément du champ "Précisez" en utilisant son ID champPrecisez.
        var champPrecisez = document.getElementById('champPrecisez');

            // Vérifie si la case à cocher "Les planètes" est cochée
    if (checkbox.checked) {
            /* Vérifie si la case à cocher "Les planètes" est cochée en utilisant la propriété checked.
            Si la case est cochée (checkbox.checked est true), le champ "Précisez" est affiché en définissant sa propriété display à block.
            Sinon, le champ "Précisez" est masqué en définissant sa propriété display à none */                
            champPrecisez.style.display = 'block';
    } 
    else {
        champPrecisez.style.display = 'none';
        }
}

	/* addEventListener définit une fonction qui sera appelée chaque fois que l'événement spécifié est déclenché sur la cible.
 	Dans ce cas, l'événement spécifié est "DOMContentLoaded", ce qui signifie que la fonction sera exécutée une fois que le DOM est complètement chargé et analysé. 
 	*/

document.addEventListener("DOMContentLoaded", function() {
    // Sélectionne tous les champs de saisie et les zones de texte dans le formulaire
    var inputs = document.querySelectorAll("input, textarea");

    // Parcourt chaque champ et ajoute un événement onfocus pour changer la couleur de fond
    inputs.forEach(function(input) {
        input.onfocus = function() {
            input.style.backgroundColor = "yellow";
        };

        // Facultatif : Réinitialise la couleur de fond lorsqu'on quitte le champ
        input.onblur = function() {
            input.style.backgroundColor = "";
        };
    });

    // Sélectionne le formulaire par son ID
    var form = document.getElementById('contactForm');

            // Ajoute un écouteur d'événement pour la soumission du formulaire
    form.onsubmit = function(event) {
                // Affiche une alerte
        alert("Vos réponses ont bien été envoyées");
                // Le formulaire sera soumis après la fermeture de l'alerte
                return true;
        };
    });
    
// Exécute le code lorsque le DOM est complètement chargé
document.addEventListener("DOMContentLoaded", function() {

    // Effets de survol sur les éléments de titre (h2 et h3)
    const titles = document.querySelectorAll('h2, h3');
    titles.forEach(title => {
        title.addEventListener('mouseover', function() {
            this.style.color = '#ff6600'; // Couleur orange
        });
        title.addEventListener('mouseout', function() {
            this.style.color = '#003366'; // Couleur bleu foncé
        });
    });

    // Effets de survol sur les paragraphes
    const paragraphs = document.querySelectorAll('p');
    paragraphs.forEach(paragraph => {
        paragraph.addEventListener('mouseover', function() {
            this.style.backgroundColor = '#f0f0f0'; // Couleur de fond gris clair
        });
        paragraph.addEventListener('mouseout', function() {
            this.style.backgroundColor = ''; // Pas de couleur de fond
        });
    });

    // Création du bouton "Retour en haut de page"
    const backToTop = document.createElement('button');
    backToTop.id = 'backToTop'; 
    backToTop.textContent = '↑ Retour en haut'; 
    document.body.appendChild(backToTop); 

    // Affiche ou masque le bouton "Retour en haut" en fonction du défilement
    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) { 
            backToTop.style.display = 'block'; 
        } else {
            backToTop.style.display = 'none'; 
        }
    });

    // Défilement fluide vers le haut de la page lorsqu'on clique sur le bouton
    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' }); 
    });

    // Sélectionne toutes les images avec la classe "interactive"
const images = document.querySelectorAll('img.interactive');
console.log("Images interactives sélectionnées:", images);

// Pour chaque image sélectionnée, ajoute une transition pour les transformations et l'ombre portée
images.forEach(image => {
    image.style.transition = 'transform 0.3s ease, box-shadow 0.3s ease';

    // Ajoute un gestionnaire d'événement pour l'événement "mouseover" (quand la souris passe sur l'image)
    image.addEventListener('mouseover', function() {
        console.log("Souris sur l'image:", this);
        // Agrandit l'image légèrement (de 5%) et ajoute une ombre portée
        this.style.transform = 'scale(1.05)'; 
        this.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.3)';
    });

    // Ajoute un gestionnaire d'événement pour l'événement "mouseout" (quand la souris quitte l'image)
    image.addEventListener('mouseout', function() {
        console.log("Souris quittant l'image:", this);
        // Réinitialise l'image à sa taille normale et enlève l'ombre portée
        this.style.transform = 'scale(1)'; 
        this.style.boxShadow = 'none';
    });
});

});

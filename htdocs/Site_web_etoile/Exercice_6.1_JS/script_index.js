document.addEventListener("DOMContentLoaded", function() {
    // Effets de survol sur les titres et les paragraphes
    const titles = document.querySelectorAll('h2, h3');
    titles.forEach(title => {
        title.addEventListener('mouseover', function() {
            this.style.color = '#ff6600';
        });

        title.addEventListener('mouseout', function() {
            this.style.color = '#003366';
        });
    });

    const paragraphs = document.querySelectorAll('p');
    paragraphs.forEach(paragraph => {
        paragraph.addEventListener('mouseover', function() {
            this.style.backgroundColor = '#f0f0f0';
        });

        paragraph.addEventListener('mouseout', function() {
            this.style.backgroundColor = '';
        });
    });

    // Bouton retour en haut
    const backToTop = document.createElement('button');
    backToTop.id = 'backToTop';
    backToTop.textContent = '↑ Retour en haut';
    document.body.appendChild(backToTop);

    window.addEventListener('scroll', function() {
        if (window.scrollY > 200) {
            backToTop.style.display = 'block';
        } else {
            backToTop.style.display = 'none';
        }
    });

    backToTop.addEventListener('click', function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Sélectionner toutes les images avec la classe "interactive"
    const images = document.querySelectorAll('img.interactive');
    console.log("Images interactives sélectionnées:", images);

    images.forEach(image => {
        image.addEventListener('mouseover', function() {
            console.log("Souris sur l'image:", this);
            this.style.transform = 'scale(1.1) rotate(5deg)';
            this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.3)';
        });

        image.addEventListener('mouseout', function() {
            console.log("Souris quittant l'image:", this);
            this.style.transform = 'scale(1) rotate(0deg)';
            this.style.boxShadow = 'none';
        });
    });
});
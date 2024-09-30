// Déclaration d'une constante avec les paires questions-réponses
const responses = {
    "bonjour": "Bonjour ! Comment puis-je vous aider ?",
    "combien de planetes tournent autour du soleil ?": "Il y a 8 planètes qui tournent autour du Soleil : Mercure, Vénus, la Terre, Mars, Jupiter, Saturne, Uranus et Neptune.",
    "quel age a le soleil ?": "Le Soleil a environ 4,6 milliards d'années.",
    "a quel type d'etoile appartient le soleil ?": "Le Soleil est une étoile de type 'naine jaune'.",
    "quand le soleil mourra-t-il ?": "Le Soleil devrait mourir dans environ 5 milliards d'années. Il deviendra une géante rouge avant de se transformer en une naine blanche.",
    "combien de temps met la lumiere du soleil pour atteindre la terre ?": "La lumière du Soleil met environ 8 minutes et 20 secondes pour atteindre la Terre.",
    "aurevoir": "Aurevoir et à bientôt",
};

// Fonction principale appelée lors de l'envoi d'un message par l'utilisateur
function sendMessage() {
    
    // Récupération du texte saisi par l'utilisateur dans le champ d'entrée avec l'ID 'user-input' et enlever les espaces blancs avec la méthode trim
    const userInput = document.getElementById('user-input').value.trim();
    
    // Vérification si l'utilisateur a saisi quelque chose. Si non, on arrête la fonction.
    if (userInput === "") return;

    // Affiche le message de l'utilisateur dans la zone des messages du chatbot
    displayMessage(userInput, 'user');

    // Réinitialise le champ de saisie à une chaîne vide après l'envoi du message
    document.getElementById('user-input').value = '';
    
    // Obtient la réponse du chatbot en fonction du message de l'utilisateur
    const botResponse = getBotResponse(userInput.toLowerCase());

    // Affiche la réponse du chatbot après un délai de 500ms pour simuler une réflexion
    function showBotResponse() {
        displayMessage(botResponse, 'bot');
    }
    
    setTimeout(showBotResponse, 500);
}

    /*  Cette fonction permet de pouvoir généré de manière dynamique du code html et d'utiliser du css grace à javascript.
        A chaque entrée de user, un <div> et un <span> sont générés pour affiche la question de l'utilisateur
        Puis ensuite la réponse du bot est également envoyé dans un autre <div> et <span>
        <div>
            <span> question de l'user </span>
        </div>    
        <div>
            <span> réponse du bot </span>
        </div>       
    */

// Affiche un message dans le conteneur de messages du chatbot
function displayMessage(message, sender) {

    // Création d'un nouvel élément <div> pour contenir le message
    const messageContainer = document.createElement('div');
   
    // Attribution d'une classe CSS en fonction de l'expéditeur (user ou bot)
    messageContainer.className = `message ${sender}`;

    // Création d'un élément <span> pour le contenu du message
    const messageContent = document.createElement('span');
   
    // Ajout de l'élément <span> à l'intérieur du conteneur de message <div>
    messageContainer.appendChild(messageContent);

    // Ajout du conteneur de message à la zone de discussion (élément avec l'ID 'chatbot-messages')=
    document.getElementById('chatbot-messages').appendChild(messageContainer);
   
    // Assure que le dernier message est visible en scrollant automatiquement vers le bas
    messageContainer.scrollIntoView({ behavior: 'smooth' });

    // Si le message provient du bot, applique un effet de machine à écrire
    if (sender === 'bot') {
        typeWriter(message, messageContent, 50); // Appelle la fonction typeWriter pour afficher le texte progressivement
    } else {
        
        // Si le message provient de l'utilisateur, affiche simplement le texte
        messageContent.textContent = message;
    }
}



// Fonction pour obtenir la réponse du chatbot en fonction de l'entrée utilisateur
function getBotResponse(userInput) {
    // Retourne la réponse correspondante si elle existe, sinon retourne un message par défaut
    return responses[userInput] || "Je ne comprends pas cette question.";
}

// Texte d'introduction du chatbot
const introText = "Bonjour, je suis un robot, dites moi bonjour et posez moi une des questions parmi celles de la liste à votre gauche.";

// Afficher le message d'introduction écrit par le bot
function IntroMessage() {
    displayMessage(introText, 'bot');
}

// Le message doit s'afficher après le chargement complet du DOM
document.addEventListener("DOMContentLoaded", IntroMessage);


/* Fonction pour afficher du texte avec un effet de machine à écrire
    innerHTML est utilisé pour modifier le contenu d'un élément HTML.
    Exemple: 
    - i = 0 et text = "Bonjour"
    - text.charAt(i) retourne text.charAt(0) = "B",
    - Ce caractère est ajouté à element.innerHTML, 
      ce qui modifie le contenu HTML de l'élément pour y ajouter progressivement les caractères obtenus par charAt.
      On ajoute 1 à i pour passer au caractère suivant.

    Ainsi, au fil des appels de la fonction, element.innerHTML affichera "B", puis "Bo", "Bon", etc., 
    jusqu'à afficher "Bonjour" en entier puis ça s'arrêtera quand i > text.length.
*/
function typeWriter(text, element, delay = 100) {
    let i = 0;

    // Vérifie que l'élément existe pour éviter les erreurs
    if (!element) return; 

    element.innerHTML = "";

    function type() {
        if (i < text.length) {

            // Ajoute progressivement chaque caractère du texte à l'élément
            element.innerHTML += text.charAt(i);
            i++;

            // Petit délais avant l'affichage des caractères suivant
            setTimeout(type, delay);
        }
    }

    // Démarre l'animation de saisie
    type();
}


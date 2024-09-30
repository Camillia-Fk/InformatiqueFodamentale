<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les étoiles - Page d'accueil</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
    <!--Ajouter le fichier css -->
    <link rel="stylesheet" type="text/css" href="styleFormulaire.css">
        <meta charset="utf-8">
    <!-- Ajouter le fichier javascript-->
    <script src="script.js" defer></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

    <?php require_once(__DIR__ . '/header.php'); ?>
        <h1>Contactez nous</h1>
        
        <form id="contactForm" action="submit_contact.php" method="POST">
        
        <p>Pour en savoir plus sur vous, voici un petit formulaire</p>
        

        <p>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" />
        </p>

        <p>
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required />
        </p>

        <p>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required />
        </p>

        <p>
            <label>Notez notre site :</label><br>
            <div class="radio-group">
                <input type="radio" id="note1" name="note" value="1">
                <label for="note1">1</label><br>
                <input type="radio" id="note2" name="note" value="2">
                <label for="note2">2</label><br>
                <input type="radio" id="note3" name="note" value="3">
                <label for="note3">3</label><br>
                <input type="radio" id="note4" name="note" value="4">
                <label for="note4">4</label><br>
                <input type="radio" id="note5" name="note" value="5">
                <label for="note5">5</label><br>
            </div>
        </p>
        <p>
            <label>Prochain sujet du site :</label><br>
            <input type="checkbox" name="sujet[]" value="Les trous noirs"> Les trous noirs
            <input type="checkbox" name="sujet[]" value="Les lunes"> Les lunes
            <input type="checkbox" name="sujet[]" value="Les galaxies"> Les galaxies
<!-- L'ID "sujetPlanetes" est utilisé pour sélectionner la case à cocher "Les planètes" avec JavaScript -->
<!-- Lorsque la case est cochée ou décochée, la fonction afficherChampPrecisez() est appelée -->
            <input type="checkbox" id="sujetPlanetes" name="sujet[]" value="Les planètes" onclick="afficherChampPrecisez()">Les planètes<br><br>
        </p>
       
 <!-- L'ID de la fonction AfficherChampPrécisez(), display : none masque initialement ce conteneur, rendant le champ de texte et son label invisibles 
  jusqu'à ce que la fonction JavaScript change ce style.--> 
        <div id="champPrecisez" style="display: none;">
            <label for="precisez">Si "Les planètes", précisez :</label>
            <input type="text" id="precisez" name="precisez"><br><br>
        </div>

        <p class="form-group">
            <label for="avis">Votre avis:</label>
            <textarea class="form-control" id="avis" name="avis" rows="5" ></textarea>
        </p>
        <input type="submit" value="Envoyer">

        </form>
        <br />
    </div>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les étoiles - Page d'accueil</title>
    <!-- Inclure le fichier CSS de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Inclure le fichier CSS personnalisé pour le formulaire -->
    <link rel="stylesheet" type="text/css" href="styleFormulaire.css">
    <!-- Metadonnée du charset UTF-8 pour supporter les caractères spéciaux -->
    <meta charset="utf-8">
</head>
<body class="d-flex flex-column min-vh-100">
    <div class="container">

        <!-- Inclure le fichier d'en-tête PHP -->
        <?php require_once(__DIR__ . '/header.php'); ?>

        <!-- Titre de la page -->
        <h1>Contactez nous</h1>
        
        <!-- Formulaire de contact, envoyant les données vers "submit_contact.php" avec la méthode POST -->
        <form action="submit_contact.php" method="POST">
        
            <!-- Description courte du formulaire -->
            <p>Pour mieux vous connaître et améliorer nos services, veuillez remplir ce court formulaire.</p>
            
            <!-- Champ pour le nom de l'utilisateur -->
            <p>
                <label for="nom">Nom :</label>
                <input type="text" id="nom" name="nom" />
            </p>

            <!-- Champ pour le prénom de l'utilisateur, requis -->
            <p>
                <label for="prenom">Prénom* :</label>
                <input type="text" id="prenom" name="prenom" required />
            </p>

            <!-- Champ pour l'email de l'utilisateur, requis et de type email pour validation -->
            <p>
                <label for="email">Email* :</label>
                <input type="email" id="email" name="email" required />
            </p>

            <!-- Groupe de boutons radio pour noter le site, valeur allant de 1 à 5 -->
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

            <!-- Groupe de cases à cocher pour choisir les sujets d'intérêt -->
            <p>
                <label>Prochain sujet du site :</label><br>
                <input type="checkbox" name="sujet[]" value="Les trous noirs"> Les trous noirs
                <input type="checkbox" name="sujet[]" value="Les lunes"> Les lunes
                <input type="checkbox" name="sujet[]" value="Les galaxies"> Les galaxies
                <input type="checkbox" name="sujet[]" value="Les planètes"> Les planètes <br>
            </p>
            
            <!-- Champ pour préciser le nom d'une planète si "Les planètes" est sélectionné -->
            <p>
                <label for="autre_planete">Si "Les planètes", précisez :</label>
                <input type="text" id="autre_planete" name="precisez">
            </p>

            <!-- Champ de texte pour permettre à l'utilisateur de laisser un avis -->
            <p class="form-group">
                <label for="avis">Votre avis:</label>
                <textarea class="form-control" id="avis" name="avis" rows="5" ></textarea>
            </p>

            <!-- Bouton pour soumettre le formulaire -->
            <input type="submit" value="Envoyer">

        </form>
        <br />
    </div>
</body>
</html>

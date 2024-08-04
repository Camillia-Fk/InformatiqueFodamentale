<?php

// Activer l'affichage des erreurs
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Configuration de la base de données
// Définit le nom du serveur de base de données. 
$servername = "sql203.infinityfree.com";
//Définit le nom d'utilisateur pour se connecter à la base de données.
$username = "if0_36946131";
//Définit le mot de passe de l'utilisateur pour se connecter à la base de données.
$password = "1m21oK4uFM";
//Définit le nom de la base de données à laquelle on souhaite se connecter
$dbname = "if0_36946131_formulaire_bd";

// Créer une connexion
//Crée une nouvelle instance de l'objet mysqli pour établir une connexion à la base de données en utilisant les paramètres définis précédemment.
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
//Vérifie si une erreur de connexion s'est produite. L'objet mysqli possède une propriété connect_error qui est définie en cas d'échec de la connexion.
if ($conn->connect_error) {
    //Si une erreur de connexion est détectée, le script s'arrête (die()) et affiche un message d'erreur contenant le détail de l'erreur de connexion. 
    //Cela empêche le reste du script de s'exécuter sans une connexion réussie à la base de données.
    die("Connexion échouée: " . $conn->connect_error);
}

// Fonction pour nettoyer les données et éviter les injections SQL
function nettoyer($data) {
    $data = trim($data);  // Supprime les espaces en début et fin de chaîne
    $data = stripslashes($data); // Supprime les antislashs
    $data = htmlspecialchars($data);  // Convertit les caractères spéciaux en entités HTML
    return $data;
}
// Récupérer les données du formulaire
$postData = $_POST;

//Initialise un tableau vide pour stocker les messages d'erreur.
$errors = [];

// Validation et nettoyage des champs obligatoires
$prenom = isset($postData['prenom']) ? nettoyer($postData['prenom']) : '';
$email = isset($postData['email']) ? nettoyer($postData['email']) : '';
$nom = isset($postData['nom']) ? nettoyer($postData['nom']) : NULL;
$note = isset($postData['note']) ? nettoyer($postData['note']) : NULL;
$sujet = isset($postData['sujet']) ? implode(', ', array_map('nettoyer', $postData['sujet'])) : NULL;
$precisez = isset($postData['precisez']) ? nettoyer($postData['precisez']) : NULL;
$avis = isset($postData['avis']) ? nettoyer($postData['avis']) : NULL;


// Validation des champs obligatoires
if ($prenom === '') {
    $errors[] = 'Le prénom est requis.';
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Un email valide est requis.';
}

// Affichage des erreurs
if (!empty($errors)) {
    // Parcourt chaque erreur dans le tableau $errors
    foreach ($errors as $error) {
        // Affiche chaque erreur dans un paragraphe rouge. htmlspecialchars est utilisé pour éviter les failles.
        echo '<p style="color:red;">' . htmlspecialchars($error) . '</p>';
    }
    return;
}


// Préparation de la requête SQL pour insérer les données
$stmt = $conn->prepare("INSERT INTO message (nom, prenom, email, note, sujet, precisez, avis) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nom, $prenom, $email, $note, $sujet, $precisez, $avis);

if ($stmt->execute()) {
    echo "Nouvel enregistrement créé avec succès";
} else {
    echo "Erreur: " . $stmt->error;
}

$stmt->close();
$conn->close();
// Les données sont valides et peuvent être affichées
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Contact reçu</title>
</head>
<body>
    <div class="container">
        <h1>Message bien reçu !</h1>
        <div>
            <h5>Rappel de vos informations</h5>
            <!--Affiche le nom ou "Non renseigné" s'il est absent.-->
            <p class="card-text"><b>Nom</b> : <?php echo isset($postData['nom']) ? htmlspecialchars($postData['nom']) : 'Non renseigné'; ?></p>
            <!--Affiche le prénom.-->
            <p class="card-text"><b>Prénom</b> : <?php echo htmlspecialchars($postData['prenom']); ?></p>
            <p class="card-text"><b>Email</b> : <?php echo htmlspecialchars($postData['email']); ?></p>
            <p class="card-text"><b>Note</b> : <?php echo isset($postData['note']) ? htmlspecialchars($postData['note']) : 'Non renseignée'; ?></p>
            <p class="card-text"><b>Sujet(s)</b> : <?php echo isset($postData['sujet']) ? htmlspecialchars(implode(', ', $postData['sujet'])) : 'Non renseigné'; ?></p>
            <!--Si le sujet "Les planètes" est sélectionné, affiche des informations supplémentaires.-->
            <?php if (isset($postData['sujet']) && in_array('Les planètes', $postData['sujet'])): ?>
                <p class="card-text"><b>Précision</b> : <?php echo isset($postData['precisez']) ? htmlspecialchars($postData['precisez']) : 'Non renseignée'; ?></p>
            <?php endif; ?>
            <p class="card-text"><b>Avis</b> : <?php echo isset($postData['avis']) ? htmlspecialchars($postData['avis']) : 'Non renseigné'; ?></p>
        </div>
    </div>
</body>
</html>
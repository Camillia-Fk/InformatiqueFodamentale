<?php

// Activer l'affichage des erreurs pour le débogage
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuration de la base de données
$servername = "localhost";  // Nom du serveur de la base de données
$username = "root";         // Nom d'utilisateur de la base de données
$password = "";             // Mot de passe de l'utilisateur
$dbname = "formulaire_bd";  // Nom de la base de données à utiliser

// Créer une connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    // Affiche une erreur et arrête l'exécution si la connexion échoue
    die("Connexion échouée: " . $conn->connect_error);
}

// Fonction pour nettoyer les données et éviter les injections SQL
function nettoyer($data) {
    $data = trim($data);  // Supprime les espaces en début et fin de chaîne
    $data = stripslashes($data); // Supprime les antislashs
    $data = htmlspecialchars($data);  // Convertit les caractères spéciaux en entités HTML
    return $data;  // Retourne la chaîne nettoyée
}

// Récupérer les données du formulaire
$postData = $_POST;  // Récupère les données envoyées via POST

// Initialiser un tableau pour stocker les messages d'erreur
$errors = [];

// Validation et nettoyage des champs obligatoires
$prenom = isset($postData['prenom']) ? nettoyer($postData['prenom']) : '';  // Nettoie le prénom
$email = isset($postData['email']) ? nettoyer($postData['email']) : '';  // Nettoie l'email
$nom = isset($postData['nom']) ? nettoyer($postData['nom']) : NULL;  // Nettoie le nom (peut être null)
$note = isset($postData['note']) ? nettoyer($postData['note']) : NULL;  // Nettoie la note (peut être null)
$sujet = isset($postData['sujet']) ? implode(', ', array_map('nettoyer', $postData['sujet'])) : NULL;  // Nettoie et concatène les sujets choisis
$precisez = isset($postData['precisez']) ? nettoyer($postData['precisez']) : NULL;  // Nettoie la précision (si applicable)
$avis = isset($postData['avis']) ? nettoyer($postData['avis']) : NULL;  // Nettoie l'avis (peut être null)

// Validation des champs obligatoires
if ($prenom === '') {
    $errors[] = 'Le prénom est requis.';  // Ajoute une erreur si le prénom est vide
}
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Un email valide est requis.';  // Ajoute une erreur si l'email est vide ou invalide
}

// Affichage des erreurs si présentes
if (!empty($errors)) {
    foreach ($errors as $error) {
        echo '<p style="color:red;">' . htmlspecialchars($error) . '</p>';  // Affiche chaque erreur
    }
    return;  // Arrête l'exécution si des erreurs sont présentes
}

// Préparation de la requête SQL pour insérer les données dans la base
$stmt = $conn->prepare("INSERT INTO message (nom, prenom, email, note, sujet, precisez, avis) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $nom, $prenom, $email, $note, $sujet, $precisez, $avis);  // Lie les paramètres de la requête

// Exécuter la requête et vérifier le résultat
if ($stmt->execute()) {
    echo "Nouvel enregistrement créé avec succès";  // Message de succès
} else {
    echo "Erreur: " . $stmt->error;  // Affiche l'erreur en cas d'échec
}

// Fermer la requête et la connexion à la base de données
$stmt->close();
$conn->close();
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
            <!-- Affiche le nom ou "Non renseigné" s'il est absent -->
            <p class="card-text"><b>Nom</b> : <?php echo isset($postData['nom']) ? htmlspecialchars($postData['nom']) : 'Non renseigné'; ?></p>
            <!-- Affiche le prénom -->
            <p class="card-text"><b>Prénom</b> : <?php echo htmlspecialchars($postData['prenom']); ?></p>
            <!-- Affiche l'email -->
            <p class="card-text"><b>Email</b> : <?php echo htmlspecialchars($postData['email']); ?></p>
            <!-- Affiche la note ou "Non renseignée" si elle est absente -->
            <p class="card-text"><b>Note</b> : <?php echo isset($postData['note']) ? htmlspecialchars($postData['note']) : 'Non renseignée'; ?></p>
            <!-- Affiche les sujets ou "Non renseigné" s'ils sont absents -->
            <p class="card-text"><b>Sujet(s)</b> : <?php echo isset($postData['sujet']) ? htmlspecialchars(implode(', ', $postData['sujet'])) : 'Non renseigné'; ?></p>
            <!-- Si le sujet "Les planètes" est sélectionné, affiche des informations supplémentaires -->
            <?php if (isset($postData['sujet']) && in_array('Les planètes', $postData['sujet'])): ?>
                <p class="card-text"><b>Précision</b> : <?php echo isset($postData['precisez']) ? htmlspecialchars($postData['precisez']) : 'Non renseignée'; ?></p>
            <?php endif; ?>
            <!-- Affiche l'avis ou "Non renseigné" s'il est absent -->
            <p class="card-text"><b>Avis</b> : <?php echo isset($postData['avis']) ? htmlspecialchars($postData['avis']) : 'Non renseigné'; ?></p>
        </div>
    </div>
</body>
</html>

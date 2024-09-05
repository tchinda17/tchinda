<?php
include '../config/config.php'; // Inclure la configuration de la base de données

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $nom = $_POST['nom'];
    $password = $_POST['password']; // Mot de passe en clair
    $confpass = $_POST['confpass']; // Mot de passe de confirmation en clair

    // Vérifier si les mots de passe correspondent
    if ($confpass === $password) {
        // Vérifier si l'email existe déjà
        $stmt = $conn->prepare("SELECT * FROM user WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            header("Location: ../pages/inscription.php?error=email_exist");
        } else {
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT); // Hachage du mot de passe

            // Préparer et exécuter la requête d'insertion
            $stmt = $conn->prepare("INSERT INTO user (nom, email, motdepasse) VALUES (:nom, :email, :password)");
            $stmt->bindParam(':nom', $nom);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':password', $hashedPassword);

            if ($stmt->execute()) {
                echo "Inscription réussie !";
                // Rediriger vers la page de connexion ou d'accueil
                header("Location: ../index.php");
                exit();
            } else {
                echo "Erreur lors de l'inscription.";
            }
        }
    } else {
        echo "Le mot de passe ne correspond pas.";
    }
}
?>

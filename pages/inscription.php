<?php
require_once '../config/config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $motdepasse = $_POST['password'];
    $confpass = $_POST['confpass'];

// verification de l'existance d'un mail 
    $req = "SELECT COUNT(*) FROM user WHERE email = :email ";
    $var = $conn->prepare($req);
    $var->bindParam(':email', $email);
    $var->execute();
    $resultat = $var->fetchColumn();
    if ($resultat > 0) {
        $erreur = " le mail est deja utilise ";
    } else {
        // verification du mot de passe et insertion des informations dans la db 
        if ($motdepasse == $confpass) {
            $sql = "INSERT INTO user (nom, email, motdepasse) VALUES (:nom, :email, :motdepasse)";
            $stat = $conn->prepare($sql);
            $stat->bindParam(':nom', $nom);
            $stat->bindParam(':email', $email);
            $stat->bindParam(':motdepasse', $motdepasse);

            if ($stat->execute()) {
                header('location: ../index.php');
            } else {
                $erreur = "Erreur lors de l'inscription.";
            }
        } else {
            $erreur = "mot de passe different";
        }
    }
   
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body>
    <div class="container">
        <!-- affichage des messages  -->
        <?php if (!empty($erreur)) : ?>
            <div class="error-message">
                <?php echo $erreur; ?>
            </div>
        <?php endif; ?>
        <form class="signup-form" method="post" action="">
            <h2>Inscription</h2>
            <div class="input-group">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="nom" placeholder="Entrez votre nom d'utilisateur" required>
            </div>
            <div class="input-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Entrez votre email" required>
            </div>
            <div class="input-group">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            </div>
            <div class="input-group">
                <label for="confirm-password">Confirmer le mot de passe</label>
                <input type="password" id="confirm-password" name="confpass" placeholder="Confirmez votre mot de passe" required>
            </div>
            <button type="submit">S'inscrire</button>
            <p>Déjà un compte ? <a href="../index.php">Se connecter ici</a></p>
        </form>
    </div>

</body>

</html>
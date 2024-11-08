<?php
//  $erreur = " le mail est deja utilise ";
require_once 'config/config.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name= $_POST['username'];
    $motdepass= $_POST['password'];

    $req = "SELECT COUNT(*) FROM user WHERE nom = :nom and motdepasse = :motdepass ";
    $var = $conn->prepare($req);
    $var->bindParam(':nom', $name);
    $var->bindParam(':motdepass', $motdepass);
    $var->execute();
    $resultat = $var->fetchColumn();
    if ($resultat > 0) {
       
        header('location: pages/dashboard/dash.php');
        
        
    }else{
        $erreur="nom d'utilisateur ou mot de passe incorret .";
    }

} 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Connexion</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <!-- affichage des messages  -->
    <?php if (!empty($erreur)) : ?>
            <div class="error-message">
                <?php echo $erreur; ?>
            </div>
        <?php endif; ?>
    <form class="login-form" method="post" action="">
        <h2>Connexion</h2>
        <div class="input-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" placeholder="Entrez votre nom d'utilisateur" required>
        </div>
        <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
            <a href="pages/forget.php">mot de passe oublier ?</a>
        </div>
        <button type="submit">Se connecter</button>
        <p>Pas de compte ?<a href="pages/inscription.php"> S'inscrire ici</a></p>
    </form>
</div>

</body>
</html>

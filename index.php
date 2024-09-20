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
    <form class="login-form">
        <h2>Connexion</h2>
        <div class="input-group">
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" placeholder="Entrez votre nom d'utilisateur" required>
        </div>
        <div class="input-group">
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrez votre mot de passe" required>
        </div>
        <button type="submit">Se connecter</button>
        <p>Pas de compte ? <a href="pages/inscription.php">S'inscrire ici</a></p>
    </form>
</div>

</body>
</html>

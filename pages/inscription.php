<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Inscription</title>
</head>

<body>
    <div class="container">
        <div class="form-container">
            <h1>S'inscrire</h1>
            <form id="signupForm" action="traitement_inscription.php" method="post">
                <label for="signupNom">Votre Nom</label>
                <input type="text" id="signupNom" name="nom" placeholder="Votre Nom" required>

                <label for="signupEmail">Votre Email</label>
                <input type="email" id="signupEmail" name="email" placeholder="Votre Email" required>

                <label for="signupPassword">Mot de passe</label>
                <input type="password" id="signupPassword" name="password" placeholder="Mot de passe" required>

                <label for="confirmPassword">Confirmer le mot de passe</label>
                <input type="password" id="confirmPassword" name="confpass" placeholder="Confirmez votre mot de passe" required>

                <button type="submit">S'inscrire</button>
                <p>Vous avez déjà un compte? <a href="login.html">Connectez-vous</a></p>
            </form>
        </div>
    </div>
</body>

</html>
<?php
session_start();
// Configuration de la base de données
$host = 'localhost'; // ou votre hôte
$dbname = 'colispros'; // nom de votre base de données
$username = 'root'; // votre nom d'utilisateur
$password = ''; // votre mot de passe

try {
    // Connexion à la base de données
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Vérification si le formulaire est soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $motdepasse = $_POST['password']; // Ne pas hacher le mot de passe ici

        // Requête de récupération de l'utilisateur par email
        $sql = "SELECT * FROM user WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':email', $email); 
        $stmt->execute();

        // Récupérez l'utilisateur 
        $utilisateur = $stmt->fetch(PDO::FETCH_ASSOC); 

        // Vérification si l'utilisateur existe et si le mot de passe est correct
        if ($utilisateur && password_verify($motdepasse, $utilisateur['motdepasse'])) { 
            // Connexion réussie
            // echo "Connexion réussie ! Bienvenue, " . htmlspecialchars($utilisateur['email']) . ".";
            
            // Rediriger vers la page d'accueil ou une autre page
            // header("Location: dashboard/tableau.php");
            $_SESSION['nom']=$utilisateur['nom'];
            header("Location: dashboard/tableau.php");
        
        } else {
            echo "Identifiants invalides.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Connexion</title>
    
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Se connecter</h1>
            <form id="loginForm" method="POST">
                <label for="loginEmail">Votre Email</label>
                <input type="email" id="loginEmail" name="email" placeholder="Votre Email" required>
                
                <label for="loginPassword">Mot de passe</label>
                <input type="password" id="loginPassword" name="password" placeholder="Mot de passe" required>
                
                <button type="submit">Se connecter</button>
                <p>Vous n'avez pas de compte? <a href="signup.html">Inscrivez-vous</a></p>
            </form>
        </div>
    </div>
</body>
</html>













<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Transporteurs</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css' rel='stylesheet'>
    <style>
        /* Styles pour le bouton */
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: white;
            background-color: #007bff; /* Couleur de fond */
            border: none;
            border-radius: 5px; /* Coins arrondis */
            text-decoration: none; /* Pas de soulignement */
            cursor: pointer; /* Curseur en forme de main */
        }
        

        .btn:hover {
            background-color: #0056b3; /* Couleur de fond au survol */
        }

        /* Styles pour la liste des détails du transporteur */
        .transporteur-details {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
    <script>
        function afficherDetails(nom, adresse, telephone, email) {
            const detailsDiv = document.getElementById('transporteur-details');
            detailsDiv.innerHTML = `
                <h3>Détails du Transporteur</h3>
                <p><strong>Nom :</strong> ${nom}</p>
                <p><strong>Adresse :</strong> ${adresse}</p>
                <p><strong>Téléphone :</strong> ${telephone}</p>
                <p><strong>Email :</strong> ${email}</p>
            `;
            detailsDiv.style.display = 'block'; // Afficher les détails
        }
    </script>
</head>
<body>
    <div>
   
    <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Colis</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="cardbox">
        <div class="card">
            <h1>Liste de Colis</h1>
            <form method="POST" action="">
                <div class="colis">
                    <label for="nom-client">Nom du Client :</label>
                    <input type="text" id="nom-client" name="nom-client" required>

                    <label for="nombre-colis">Nombre de Colis :</label>
                    <input type="number" id="nombre-colis" name="nombre-colis" min="1" required>

                    <label for="dimensions">Dimensions du Colis (L x l x H en cm) :</label>
                    <input type="text" id="dimensions" name="dimensions" placeholder="ex: 30x20x15" required>

                    <label for="poids">Poids du Colis (en kg) :</label>
                    <input type="number" id="poids" name="poids" required>

                    <label for="adresse-expedition">Adresse d'Expédition :</label>
                    <textarea id="adresse-expedition" name="adresse-expedition" required></textarea>

                    <label for="adresse-livraison">Adresse de Livraison :</label>
                    <textarea id="adresse-livraison" name="adresse-livraison" required></textarea>
                </div>
                
                <div class="button-group">
                    <button type="submit" class="btn">Ajouter le Colis</button>
                    <button type="button" class="btn">Annuler</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

    
    
</div>
    <script>
      // Menutoggle
      let toggle = document.querySelector('.toggle');
      let navigation = document.querySelector('.navigation');
      let main = document.querySelector('.main');

      toggle.onclick = function(){
        navigation.classList.toggle('active');
        main.classList.toggle('active');
      }


      //add hovered class in selected item
      let list = document.querySelectorAll('.navigation li');
      function activeLink(){
        list.forEach((item) => 
        item.classList.remevo('hovered'));
        this.classList.add('hovered');
      }
      list.forEach((item) => item.addEventListener('mouseover',activeLink));
    </script>
</body>
</html>














<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste de Colis</title>
    <link rel="stylesheet" href="../assets/css/clients.css">
</head>
<body>
    <div class="cardbox">
        <div class="card">
            <h1>Liste de Colis</h1>
            <form method="POST" action="">
                <div class="colis">
                    <label for="nom-client">Nom du Client :</label>
                    <input type="text" id="nom-client" name="nom-client" required>

                    <label for="nombre-colis">Nombre de Colis :</label>
                    <input type="number" id="nombre-colis" name="nombre-colis" min="1" required>

                    <label for="dimensions">Dimensions du Colis (L x l x H en cm) :</label>
                    <input type="text" id="dimensions" name="dimensions" placeholder="ex: 30x20x15" required>

                    <label for="poids">Poids du Colis (en kg) :</label>
                    <input type="number" id="poids" name="poids" required>

                    <label for="adresse-expedition">Adresse d'Expédition :</label>
                    <textarea id="adresse-expedition" name="adresse-expedition" required></textarea>

                    <label for="adresse-livraison">Adresse de Livraison :</label>
                    <textarea id="adresse-livraison" name="adresse-livraison" required></textarea>
                </div>
                
                <div class="button-group">
                    <button type="submit" class="btn">Ajouter le Colis</button>
                    <button type="button" class="btn">Annuler</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>

<?php
// Start session
session_start();
$utilisateur 

?>

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
    
</head>
<body>
    <div class="container">
    <?php
    include("../includes/sidebar.php");
    
    ?>
    </div>
    <div class="main">
   <?php
    include("../includes/nav.php");
    
    ?>
    </div>
    
    </div>
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
    </div>?
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

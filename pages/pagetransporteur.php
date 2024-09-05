<?php
session_start();
$utilisateur = $_SESSION['nom'];

?>
<?php
// Start session
session_start();
$utilisateur = [
    'nom' => $_SESSION['nom'] ?? 'Inconnu',
    'adresse' => $_SESSION['adresse'] ?? 'Non spécifiée',
    'telephone' => $_SESSION['téléphone'] ?? 'Non spécifié',
    'email' => $_SESSION['e-mail'] ?? 'Non spécifié'
];

// Simuler une liste de transporteurs (normalement récupérée d'une base de données)
$transporteurs = [
    ['nom' => 'Transporteur A', 'adresse' => 'Adresse A', 'téléphone' => '0123456789', 'e-mail' => 'contact@transpA.com'],
    ['nom' => 'Transporteur B', 'adresse' => 'Adresse B', 'téléphone' => '9876543210', 'e-mail' => 'contact@transpB.com'],
    
    // Ajoutez d'autres transporteurs ici
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
    <div class="navigation">
        <ul>
            <li>
                <a href="#">
                  <span class="icon"><i class="fa-brands fa-apple"></i></span>

                  <span class="title"><?php echo $utilisateur ?> </span>
                </a>
            </li>
            <li>
                <a href="#">
                  <span class="icon"><i class="fa-solid fa-house"></i></span>
                  <span class="title">Tableau de bords</span>
                </a>
            </li>
            <li>
                <a href="../pages/transporteurs.php">
                <span class="icon"><i class="fas fa-truck"></i></span>
                <span class="title">Transporteurs</span>
                </a>
            </li>
            <li>
                <a href="#">
                  <span class="icon"><i class="fas fa-building"></i></span>
                  <span class="title">Agences</span>
                </a>
            </li>
            <li>
                <a href="#">
                <span class="icon"><i class="fas fa-user"></i></span>
                  <span class="title">Clients</span>
                </a>
            </li>
            
            <li>
                <a href="#">
                  <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
                  <span class="title">Signout</span>
                </a>
            </li>
        </ul>
    </div>

   <!--main-->
   <div class="main">
    <div class="topbar">
      <div class="toggle">
      <i class="fa-solid fa-bars"></i>
      </div> 
      <!-- search -->
      <div class="search">
        <label>
          <input type="text" placeholder="search here">
          <i class="fa-solid fa-magnifying-glass"></i>
        </label>
      </div>
      <!-- userimg -->
       <div class="user">
       <img src="image/image1.jpg" width="50" height="auto">
       </div>
    </div>

    <!-- card -->
     <div class="cardbox">
       <div class="card">
        <div>
          <div class="numbers">1.504</div>
          <div class="cardname">Daily Views</div>
        </div>
        <div class="iconbx">
        <span class="icon"><i class="fa-solid fa-eye"></i></span>
        </div>
       </div>
        <div class="card">
            <div>
               <div class="numbers">80</div>
               <div class="cardname">sales</div>
           </div>
          
           <div class="iconbx">
                <span class="icon"><i class="fa-solid fa-cart-shopping"></i></span>
          </div>
        </div>
        <div class="card">
           <div>
              <div class="numbers">284</div>
              <div class="cardname">comment</div>
            </div>
    
            <div class="iconbx">
                <span class="icon"><i class="fa-regular fa-comments"></i></span>
            </div>
          </div>
          <div class="card">
            <div>
              <div class="numbers">$7,842</div>
              <div class="cardname">Earning</div>
            </div>
               <div class="iconbx">
                 <span class="icon"><i class="fa-solid fa-dollar-sign"></i></span>
             </div>
           </div>
     </div>


      <!--oder details list-->
      <div class="container">
        <h1>Liste des Transporteurs</h1>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Adresse</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transporteurs as $transporteur): ?>
                <tr onclick="afficherDetails('<?php echo addslashes($transporteur['nom']); ?>', '<?php echo addslashes($transporteur['adresse']); ?>', '<?php echo addslashes($transporteur['téléphone']); ?>', '<?php echo addslashes($transporteur['e-mail']); ?>')">
                    <td><?php echo $transporteur['nom']; ?></td>
                    <td><?php echo $transporteur['adresse']; ?></td>
                    <td><?php echo $transporteur['téléphone']; ?></td>
                    <td><?php echo $transporteur['e-mail']; ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <div id="transporteur-details" class="transporteur-details" style="display:none;"></div> <!-- Masqué par défaut -->
    </div>
        <!--new customers-->
        <div class="recentcustomers">
    <div class="cardheader">
        <h2>Recent Customers</h2>
    </div>
    <table>
        <tr>
            <td width="60px">
                <div class="image">
                    <img src="image/image2.jpg" alt="Image de Raissa" /> </div><!-- Correction ici -->
            </td>
            <td>
                <h4>Raissa<br><span>Italy</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="image">
                    <img src="image/image3.jpg" alt="Image de Raissa" /> </div><!-- Correction ici -->
            </td>
            <td>
                <h4>Raissa<br><span>france</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="image">
                    <img src="image/image4.jpg" alt="Image de Raissa" /> </div><!-- Correction ici -->
            </td>
            <td>
                <h4>Raissa<br><span>belgique</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="image">
                    <img src="image/image5.jpg" alt="Image de Raissa" /> </div><!-- Correction ici -->
            </td>
            <td>
                <h4>Raissa<br><span>togo</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="image">
                    <img src="image/image6.jpg" alt="Image de Raissa" /> </div><!-- Correction ici -->
            </td>
            <td>
                <h4>Raissa<br><span>nigeria</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="image">
                    <img src="image/image8.jpg" alt="Image de Raissa" /> </div><!-- Correction ici -->
            </td>
            <td>
                <h4>Raissa<br><span>Italy</span></h4>
            </td>
        </tr>
    </table>
</div>



      </div>

   </div>
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




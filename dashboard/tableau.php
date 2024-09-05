<?php
session_start();
$utilisateur = $_SESSION['nom'];

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
    <?php
    include("../includes/sidebar.php");
    
    ?>
</div>
   <!--main-->
   <div class="main">
   <?php
    include("../includes/nav.php");
    
    ?>
    </div>
    <?php
    include("../includes/card.php");
    
    ?>
    <!-- card -->
    


      <!--oder details list-->
      <div class="details">
        <div class="recentorders">
          <div class="cardheader">
           <h2>recent orders</h2>
           <a href="#" class="btn">view all</a>
          </div>
          <table>
            <thead>
              <tr>
                <td>name</td>
                <td>prise</td>
                <td>payement</td>
                <td>status</td>
              </tr>
            </thead>
            <tbody>
              <tr>
               <td>refrigerator</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">delivered</span></td> 
            </tr>
            <tr>
               <td>coolers</td>
               <td>$1200</td>
               <td>due</td>
               <td><span class="statuts delivered">pending</span></td> 
            </tr>
            <tr>
               <td>speakers</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">return</span></td> 
            </tr>
             <tr>
               <td>hp laptop</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">in progress</span></td> 
            </tr>
            <tr>
               <td>apple watch</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">delivered</span></td> 
            </tr>
            <tr>
               <td>wall fan</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">pending</span></td> 
              </tr>
              <tr>
               <td>adidas shoes</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">return</span></td> 
              </tr>
              <tr>
               <td>demin shirts</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">in progress</span></td> 
              </tr>
              <tr>
               <td>casual shoes</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">pending</span></td> 
              </tr>
              <tr>
               <td>wallfan</td>
               <td>$1200</td>
               <td>paid</td>
               <td><span class="statuts delivered">pending</span></td> 
              </tr>
              <tr>
               <td>denim shirts</td>
               <td>$1200</td>
               <td>due</td>
               <td><span class="statuts delivered">in progress</span></td> 
              </tr>
            </tbody>
          </table>
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
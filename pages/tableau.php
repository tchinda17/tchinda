<?php
require_once '../includes/header.php';
?>


<div class="container">
<?php
require_once '../includes/sidebar.php';
?>


  <!--main-->
  <div class="main">
 
<?php
require_once '../includes/topbar.php';
?>
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
                <img src="image/image2.jpg" alt="Image de Raissa" />
              </div><!-- Correction ici -->
            </td>
            <td>
              <h4>Raissa<br><span>Italy</span></h4>
            </td>
          </tr>
          <tr>
            <td width="60px">
              <div class="image">
                <img src="image/image3.jpg" alt="Image de Raissa" />
              </div><!-- Correction ici -->
            </td>
            <td>
              <h4>Raissa<br><span>france</span></h4>
            </td>
          </tr>
          <tr>
            <td width="60px">
              <div class="image">
                <img src="image/image4.jpg" alt="Image de Raissa" />
              </div><!-- Correction ici -->
            </td>
            <td>
              <h4>Raissa<br><span>belgique</span></h4>
            </td>
          </tr>
          <tr>
            <td width="60px">
              <div class="image">
                <img src="image/image5.jpg" alt="Image de Raissa" />
              </div><!-- Correction ici -->
            </td>
            <td>
              <h4>Raissa<br><span>togo</span></h4>
            </td>
          </tr>
          <tr>
            <td width="60px">
              <div class="image">
                <img src="image/image6.jpg" alt="Image de Raissa" />
              </div><!-- Correction ici -->
            </td>
            <td>
              <h4>Raissa<br><span>nigeria</span></h4>
            </td>
          </tr>
          <tr>
            <td width="60px">
              <div class="image">
                <img src="image/image8.jpg" alt="Image de Raissa" />
              </div><!-- Correction ici -->
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

<?php
  require_once '../includes/footer.php';
?>
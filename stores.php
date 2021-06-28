<?php include "includes/navigation.php"; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD81CpVqAQlS0UCXnCXkSN0rcfBzQYg_Ic"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="test2.js"></script>

<!-- back to top button  -->
<button onclick="topFunction()" id="cbbtt" title="Go to top">
  <i class="fa fa-angle-double-up" style="font-size:36px;color: #73A6E4;"></i> <!--fa fa-arrow-circle-up -->
</button>
 
<!-- Franchise Parallax Image with Portfolio Text -->
<div class="bgimg-5 w3-display-container w3-opacity-min" id="franchise">
  <div class="w3-display-middle">
<!--     <span class="w3-text-white" id="thanos">Franchise</span>-->
     <span class="w3-text-white" id="thanos">Stores</span>
  </div>
</div>


<div class="w3-bg-grammes-l">
<div class="container mt-3">
  <div class="w3-xxxlarge w3-text-cbcyan w3-center w3-margin-bottom">Καταστήματα</div>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">Λίστα</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Χάρτης</a>
    </li>
<!--
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
-->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      
       <h3>ΕΛΛΑΔΑ</h3>
        <div class="w3-container">
          
            <table class="w3-table w3-hide-small">
                <tr>
                  <td>Κομοτηνή</td>
                  <td>Ξάνθη</td>
                  <td>Καβάλα</td>
                </tr>
                <tr>
                  <td>Δράμα</td>
                  <td>Πολύκαστρο</td>
                  <td>Σκύδρα</td>
                </tr>
                <tr>
                  <td>Γιαννιτσά</td>
                  <td>Κουφάλια</td>
                  <td>Θεσσαλονίκη</td>
                </tr>
                <tr>
                  <td>Κοζάνη</td>
                  <td>Κέρκυρα</td>
                  <td>Λευκάδα</td>
                </tr>
                <tr>
                  <td>Αγρίνιο</td>
                  <td>Ναύπακτος</td>
                  <td>Αθήνα</td>
                </tr>
                <tr>
                  <td>Ρίο</td>
                  <td>Πάτρα</td>
                  <td>Βραχναίϊκα</td>
                </tr>
                <tr>
                  <td>Κ.Αχαϊά</td>
                  <td>Πύργος</td>
                  <td>Καλαμάτα</td>
                </tr>
                <tr>
                  <td>Σαντορίνη</td>
                  <td>Ρόδος</td>
                </tr>
            </table>
            <!-- on small devices -->
            <table class="w3-table w3-hide-medium w3-hide-large">
                <tr>
                  <td>Κομοτηνή</td>
                  <td>Ξάνθη</td>
                </tr>
                <tr>
                  <td>Καβάλα</td>
                  <td>Δράμα</td>
                </tr>
                <tr>
                  <td>Πολύκαστρο</td>
                  <td>Σκύδρα</td>
                </tr>
                <tr>
                  <td>Γιαννιτσά</td>
                  <td>Κουφάλια</td>
                </tr>
                <tr>
                  <td>Θεσσαλονίκη</td>
                  <td>Κοζάνη</td>
                </tr>
                <tr>
                  <td>Κέρκυρα</td>
                  <td>Λευκάδα</td>
                </tr>
                <tr>
                  <td>Αγρίνιο</td>
                  <td>Ναύπακτος</td>
                </tr>
                <tr>
                  <td>Αθήνα</td>
                  <td>Ρίο</td>
                </tr>
                <tr>
                  <td>Πάτρα</td>
                  <td>Βραχναίϊκα</td>
                </tr>
                <tr>
                  <td>Κ.Αχαϊά</td>
                  <td>Πύργος</td>
                </tr>
                <tr>
                  <td>Καλαμάτα</td>
                  <td>Σαντορίνη</td>
                </tr>
                <tr>
                  <td>Ρόδος</td>
                </tr>
            </table>                                 
        
         <br>
         
          <h3>ΕΚΤΟΣ ΕΛΛΑΔΟΣ</h3>
            <table class="w3-table w3-hide-small">
                    <tr>
                      <td>Μόντρεαλ</td>
                      <td>Μόναχο</td>
                      <td>Στουντγκάρδη</td>
                    </tr>
                    <tr>
                      <td>Νις(Σερβία)</td>
                      <td>Λευκωσία</td>
                      <td>Λάρνακα</td>
                    </tr>
                    <tr>
                      <td>Πάφος</td>
                      <td>Λεμεσσός</td>
                      <td>Ριάντ</td>
                    </tr>
                    <tr>
                      <td>Τζέντα</td>
                      <td>Αλκουμφούντα</td>
                      <td>Ταΐφ</td>
                    </tr>
                    <tr>
                      <td>Αλμπάχα</td>
                      <td>Ντουμπάι</td>
                      <td></td>
                    </tr>
              </table>
              
              <!-- on small devices -->
              <table class="w3-table w3-hide-medium w3-hide-large">
                <tr>
                  <td>Μόντρεαλ</td>
                  <td>Μόναχο</td>
                </tr>
                <tr>
                  <td>Στουντγκάρδη</td>
                  <td>Νις(Σερβία)</td>
                </tr>
                <tr>
                  <td>Λευκωσία</td>
                  <td>Λάρνακα</td>
                </tr>
                <tr>
                  <td>Πάφος</td>
                  <td>Λεμεσσός</td>
                </tr>
                <tr>
                  <td>Ριάντ</td>
                  <td>Τζέντα</td>
                </tr>
                <tr>
                  <td>Αλκουμφούντα</td>
                  <td>Ταΐφ</td>
                </tr>
                <tr>
                  <td>Αλμπάχα</td>
                  <td>Ντουμπάι</td>
                </tr>
            </table> 
              
        </div>      
        
        <div class="w3-padding-64"></div>        
    </div>
    
    
    <div id="menu1" class="container tab-pane fade"><br>
     
        <div class="w3-bg-grammes-l">
            <div class="w3-auto w3-center w3-margin-big-bottom">
<!--    OLD MAP          <iframe src="https://www.google.gr/maps/d/u/1/embed?mid=1PspkCY8MGRXcbBLilGhJMpBavu0D0oWm" width="1240" height="560"></iframe>-->
                  <div id="map" style="height: 500px; width: 100%;"></div>
            </div>
        </div>
        
        <!-- on mobile --
        <div class="w3-bg-grammes-l w3-hide-large w3-hide-medium">
            <div class="w3-content w3-center w3-margin-big-bottom">
<!--     OLD MAP         <iframe src="https://www.google.gr/maps/d/u/1/embed?mid=1PspkCY8MGRXcbBLilGhJMpBavu0D0oWm" width="370" height="500"></iframe>  --
               <div id="map" style="height: 400px; width: 100%;"></div>
            </div>
        </div>  -->
        
    </div>
<!--
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
      
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
-->
 
  </div>
</div>

</div>
<script src="includes/script.js"></script>

<?php  include "includes/footer.php";?>
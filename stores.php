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
      
       <h3>ΠΕΡΙΟΧΕΣ</h3>
        <div class="w3-container">
          
            <table class="w3-table w3-hide-small">
                <tr class="w3-text-cbcyan3">
                    <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="storeKomotini.php">Ν.Ροδόπης</a></td>
                    <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Ξάνθης</a></td>
                    <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Καβάλας</a></td>
                </tr>
                <tr>
                    <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#_">Ν.Δράμας</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Σερρών</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Κιλκίς</a></td>
                </tr>
                <tr>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Θεσ/νίκης</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Πέλλας</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Κοζάνης</a></td>
                </tr>
                <tr>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Κερκύρας</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Λευκάδας</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Αιτωλοακαρνανίας</a></td>
                </tr>
                <tr>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Αττικής</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Αχαΐας</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Ηλίας</a></td>
                </tr>
                <tr>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Μεσσηνίας</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Κυκλάδων</a></td>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Ν.Δωδεκανήσων</a></td>
                </tr>
                <tr>
                  <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Κύπρος</a></td>
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
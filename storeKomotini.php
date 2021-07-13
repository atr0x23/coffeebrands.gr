<?php include "includes/navigation.php"; ?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD81CpVqAQlS0UCXnCXkSN0rcfBzQYg_Ic"></script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="komotini.js"></script>

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
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      
       <h3>ΚΟΜΟΤΗΝΗ</h3>
       <h5><a class="w3-text-cbcyan3" href="stores.php"><i class="fa fa-mail-reply-all"></i>αρχική</a></h5>
        <div class="w3-container">
          
            <table class="w3-table w3-hide-small">
                <tr>
                    <th class="w3-center">Διεύθυνση</th>
                    <th class="w3-center">Ωράριο Καταστήματος</th>
                    <th class="w3-center">Ωράριο Delivery</th>
                    <th class="w3-center">Παραγγελία</th>
                </tr>
                <tr class="linehover w3-text-cbcyan3"><a href="storeKomotini.php">
                    <td class="w3-center">Θησέως 1</td>
                    <td class="w3-center">06:00 - 22:00</td>
                    <td class="w3-center">07:00 - 21:00</td>
                    <td class="w3-center"><i class="fa fa-coffee"></i></td>
                </a></tr>
            </table>
            
            <!-- on small devices -->
            <table class="w3-table w3-hide-medium w3-hide-large">
               <tr class="w3-text-cbcyan3">
                    <th>Οδός</th>
                    <th></th>
                </tr>
                <tr>
                    <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#">Θησέως 1</a></td>
                    <td><a class="w3-text-cbcyan3 hvr-grow-shadow" href="#"><i class="fa fa-coffee"></i></a></td>
                </tr>
               
            </table>                                 
            
         <br>
              
        </div>      
        
        <div class="w3-padding-64"></div>        
    </div>
    
    <div id="menu1" class="container tab-pane fade"><br>
     
        <div class="w3-bg-grammes-l">
            <div class="w3-auto w3-center w3-margin-big-bottom">
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
 
  </div>
</div>

</div>
<script src="includes/script.js"></script>

<?php  include "includes/footer.php";?>
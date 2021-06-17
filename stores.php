<?php include "includes/navigation.php"; ?>

<button onclick="topFunction()" id="cbbtt" title="Go to top">
  <i class="fa fa-angle-double-up" style="font-size:36px;color: #73A6E4;"></i> <!--fa fa-arrow-circle-up -->
</button>
 
  <div class="w3-padding-64"></div>
  <div class="w3-padding-64"></div> 

<div class="container mt-3">
  <div class="w3-xxxlarge w3-text-cbcyan w3-center w3-margin-bottom">Καταστήματα</div>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#home">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#menu1">Χάρτης</a>
    </li>
<!--
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2">Menu 2</a>
    </li>
-->
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane"><br>
      <h3>HOME</h3>
        
        <div class="w3-container">
          
          <ul class="w3-ul w3-card-4">
            <li class="w3-bar">
<!--              <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>-->
              <img src="img/fav-icon.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
              <div class="w3-bar-item">
                <span class="w3-large">Mike</span><br>
                <span>Web Designer</span>
              </div>
            </li>

            <li class="w3-bar">
<!--              <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>-->
              <img src="img/fav-icon.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
              <div class="w3-bar-item">
                <span class="w3-large">Jill</span><br>
                <span>Support</span>
              </div>
            </li>

            <li class="w3-bar">
<!--              <span onclick="this.parentElement.style.display='none'" class="w3-bar-item w3-button w3-white w3-xlarge w3-right">×</span>-->
              <img src="img/fav-icon.png" class="w3-bar-item w3-circle w3-hide-small" style="width:85px">
              <div class="w3-bar-item">
                <span class="w3-large">Jane</span><br>
                <span>Accountant</span>
              </div>
            </li>
          </ul>
          
        </div>
        <div class="w3-padding-64"></div>        
    </div>
    
    
    <div id="menu1" class="container tab-pane fade active"><br>
      
        <div class="w3-bg-grammes-l w3-hide-small">
            <div class="w3-auto w3-center w3-margin-big-bottom">
              <iframe src="https://www.google.gr/maps/d/u/1/embed?mid=1PspkCY8MGRXcbBLilGhJMpBavu0D0oWm" width="1240" height="560"></iframe>
            </div>
        </div>
        
        <!-- on mobile -->
        <div class="w3-bg-grammes-l w3-hide-large w3-hide-medium">
            <div class="w3-content w3-center w3-margin-big-bottom">
              <iframe src="https://www.google.gr/maps/d/u/1/embed?mid=1PspkCY8MGRXcbBLilGhJMpBavu0D0oWm" width="400" height="500"></iframe>
            </div>
        </div>
        
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



<script src="includes/script.js"></script>

<?php  include "includes/footer.php";?>
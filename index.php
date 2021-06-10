<?php include "includes/navigation.php"; ?>


<button onclick="topFunction()" id="cbbtt" title="Go to top">
  <i class="fa fa-angle-double-up" style="font-size:36px;color: #73A6E4;"></i> <!--fa fa-arrow-circle-up -->
</button> 

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span> -->
    <img src="img/cb-logo.png"><br><br><br>
    <!-- <img src="/img/cb-logo.png"> -->
    <!-- <p class="w3-center"><a href="#demo" class="btn btn-outline-secondary btn-lg">Παράγγειλε Τώρα</a></p> -->
    <p class="w3-center"><a href="#demo" class="cbbutton2 w3-round"><i class="fa fa-coffee"></i> Παράγγειλε Τώρα</a></p>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-bg-grammes-l">
  <div class="w3-content w3-container w3-padding-64" id="about">
<!--    <h1 class="w3-center">About us</h1><br>-->
    <h1 class="w3-center"><img src="img/about.png"></h1><br>
    <p class="w3-center"><em>Η Φιλοσοφία μας...</em></p>
    <p class="w3-justify" style="font-size: 18px;">Η Coffeebrands συνέβη επειδή μοιραζόμαστε το ίδιο πάθος για μία μοναδική εμπειρία καφέ!
      Με αγάπη για τον ποιοτικό καφέ, το 2009, άνοιξε το πρώτο κατάστημα Coffeebrands. Μακριά από το εμπορικό κέντρο, σε μία εναλλακτική περιοχή της πόλης της Πάτρας, δημιουργήθηκε ο πρώτος χώρος συνάντησης των φανατικών του καφέ. Διάσημα brands καφέ, ημιεπαγγελματικός εξοπλισμός για παραγωγή καφέ στο σπίτι και το γραφείο, αλλά και η δυνατότητα να απολαύσουν premium καφέ και φρέσκα σνακ ενόσω έκαναν τις αγορές τους, εξέλιξαν το Coffeebrands σε πολλά περισσότερα από μία boutique καφέ. 
      </p>
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <p><b><i class="fa fa-user w3-margin-right"></i>espresso specialists</b></p><br>
        <img src="img/about.jpg" class="w3-round w3-image" alt="Photo of Me" width="500" height="333">
      </div>

      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large w3-justify">
        <p style="font-size: 18px;">Λίγοι μόνο μήνες λειτουργίας του πρώτου καταστήματος αρκούσαν ώστε οι λάτρεις του καφέ να αναδείξουν το Coffeebrands σε αγαπημένο προορισμό για καφέ, σνακ κι όχι μόνο! Οι coffee-lovers επισκέπτονται το δικό τους Coffeebrands για να απολαύσουν μία εμπειρία, που τους ταξιδεύει, σε ένα χώρο που νιώθουν σαν το σπίτι τους. Πριν ακόμα γίνει ενός έτους το πρώτο κατάστημα Coffeebrands, είχε δημιουργηθεί και δεύτερο, το οποίο έγινε δεκτό με επίσης μεγάλο ενθουσιασμό.
          Σήμερα με καταστήματα σε Ελλάδα, Κύπρο, Γερμανία, Σερβία, Dubai, Σαουδική Αραβία και με μία δυναμική εξέλιξης που υποστηρίζουν οι Coffeebrandisti σε κάθε γειτονιά του κόσμου, προσφέρουμε πολλά περισσότερα από ένα καφέ.</p>
      </div>
    </div>
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min" id="ourProducts">
  <div class="w3-display-middle">
<!--    <span class="w3-text-white" id="thanos">OurProducts</span>-->
    <span class="w3-text-white" id="thanos"><img src="img/products.png"></span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-bg-grammes-r">
    <!-- Works only on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-hide-small w3-auto">
      <div class="row w3-center w3-padding-top-64">
        <div class="column3">
          <div class="card">
            <img src="img/kafes.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center">
                <p id="thanoSmall">Megisto</p>
                <p class="w3-large w3-text-white">Espresso</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="img/signature.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center">
                <p id="thanoSmall">Signature</p>
                <p class="w3-large w3-text-white">Drinks</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="img/home&office2.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center">
                <p class="w3-large w3-text-white">Coffeebrands</p>
                <p id="thanoSmall">@Home</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
      </div>
            <!-- sencond row -->
      <div class="row w3-center w3-padding-top-64">
        <div class="column3">
          <div class="card">
            <img src="img/slimNew.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center w3-padding-top-24">
<!--                <p class="w3-large w3-text-white">Coffeebrands</p>-->
                <p id="thanoSmall">Slim</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="img/snacksNew.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center w3-padding-top-24">
<!--                <p class="w3-large w3-text-white">Coffeebrands</p>-->
                <p id="thanoSmall">Snacks</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="img/tea.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center w3-padding-top-24">
<!--                <p class="w3-large w3-text-white">Coffeebrands</p>-->
                <p id="thanoSmall">Tea</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
      </div>
      <!-- 3d row -->
      <div class="row w3-center w3-padding-top-64">
        <div class="column3">
          <div class="card">
            <img src="img/morningHeroes2.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center w3-padding-top-24">
<!--                <p class="w3-large w3-text-white">Coffeebrands</p>-->
                <p id="thanoSmall">Morning Heroes</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="img/chillcup1.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center w3-padding-top-24">
<!--                <p class="w3-large w3-text-white">Coffeebrands</p>-->
                <p id="thanoSmall">Chillcup</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="img/juice%20spot_2.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center w3-padding-top-24">
<!--                <p class="w3-large w3-text-white">Coffeebrands</p>-->
                <p id="thanoSmall">Juice Spot</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
      </div>
      
    </div> 


  <div class="w3-content w3-container w3-padding-64 w3-margin-bottom" id="portfolio">
    <!-- <h1 class="w3-center">Megisto</h1>
    <h3 class="w3-center">Home & Office</h3>
    <p class="w3-center"><em>Here are some of my latest lorem work ipsum tipsum.<br> Click on the images to make them bigger</em></p><br> -->

    <!-- on small devices -->

    <div class="w3-hide-large w3-hide-medium">
      <div class="row">

        <div class="column">
          <div class="card">
            <img src="img/kafes.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Megisto Espresso">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Megisto</p>
              <!-- <span class="w3-large w3-text-white">Espresso</span> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>  
        </div>
        <div class="column">
          <div class="card">
          <img src="img/signature.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Signature Drinks">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Signature</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="img/home&office2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffeebrands at home">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">@Home</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="img/slimNew.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Slim Coffee & Chocolate">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Slim</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="img/snacksNew.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffeebrands Snacks">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Snacks</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="img/tea.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffeebrands TEA">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Tea</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="img/juice%20spot_2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Juice Spot">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Juice Spot</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="img/morningHeroes2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Morning Heroes">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Mornig Heroes</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="img/chillcup1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Chillcup">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Chillcup</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
       
      </div>

    </div>

  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-white" onclick="this.style.display='none'">
  <span class="w3-button w3-large w3-white w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-large"></p>
  </div>
</div>

<!-- enjoy coffeebrands drink -->
<div class="w3-xxxlarge w3-text-cbcyan w3-center w3-margin-bottom">Μπορείτε να απολαύσετε ένα ρόφημα Coffeebrands​</div>
<div class="w3-row w3-center w3-cbbg-white w3-padding-16">
  <div class="w3-third w3-section">
    <img src="img/stoKatastima.png"><br>
    <span class="w3-xlarge w3-text-cbblue">Στο Κατάστημα</span>
  </div>
  <div class="w3-third w3-section">
    <img src="img/delivery.png"><br>
    <span class="w3-xlarge w3-text-cbblue">Στο Χώρο Σας</span>
  </div>
  <div class="w3-third w3-section">
    <img src="img/takeAway.png"><br>
    <span class="w3-xlarge w3-text-cbblue">Take Away</span>
  </div>
</div>


<!--signature blend -->
<div class="w3-row w3-container w3-padding-64 w3-bg-signature-blend">
  <div class="w3-content"> 
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="img/signature-blend.jpg" class="w3-image" alt="Megisto Blend" width="422" height="575">
    </div>

    <div class="w3-col m6 w3-padding-large w3-justify">
      <p style="font-size: 18px; padding-top: 130px; color: white;">
        Ο Megisto, το signature blend των Coffeebrands, είναι αποτέλεσμα χρόνων αναζήτησης και διατίθεται αποκλειστικά στα καταστήματά μας.
        Διαφορετικής προέλευσης και επεξεργασίας καρποί από όλα τα πλάτη του Ισημερινού συνδυάζονται ιδανικά ώστε να δημιουργήσουν το χαρμάνι Megisto
        που έχει πλούσιο σώμα, πλήρη, έντονη γεύση, αρώματα καρυδιού και εσπεριδοειδών και χαμηλή οξύτητα. Διατίθεται σε espresso, φίλτρου, ελληνικό, στιγμιαίο και cold brew
      </p>
      <p style="font-size: 20px; padding-top: 30px; letter-spacing: 3px;">
        <a href="https://coffeebrandsdelivery.com" title="Coffeebrands Online" target="_blank" class="w3-text-cbcyan2">
          ΔΟΚΙΜΑΣΕ ΤΩΡΑ
        </a>
      </p>
    </div>
  </div>  
</div>



<!-- start of event section -->
<div class="w3-bg-grammes-r">
  <div class="w3-content">
      
      <div class="w3-padding-64">
<!--        <h1 class="w3-center">Instagram</h1>-->
        <h1 class="w3-center"><img src="img/insta.png"></h1>
        <p class="w3-center w3-text-cbblue"><b>FOLLOW US FOR MORE</b></p>
      </div>


      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">

        <!-- Indicators -->
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slider-images2.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/slider-images1.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel1.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel2.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel3.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel4.jpg">
          </div>
          <div class="carousel-item">
            <img src="img/carousel5.jpg">
          </div>
        </div>
        
        <!-- Left and right controls -->
      
      </div>
    <div class="w3-padding-64"></div>
  </div>
</div>  
<!-- end of event section -->

<!-- shops section start -->
<div class="w3-bg-grammes-l w3-hide-small">
  <div class="w3-xxxlarge w3-text-cbcyan w3-center w3-margin-bottom w3-padding-64" id="shops">Τα Καταστήματά μας​</div>
    <div class="w3-auto w3-center w3-margin-big-bottom">
      <iframe src="https://www.google.gr/maps/d/u/1/embed?mid=1PspkCY8MGRXcbBLilGhJMpBavu0D0oWm" width="1240" height="560"></iframe>
    </div>
</div>
<!-- shops section mobile -->
<div class="w3-bg-grammes-l w3-hide-large w3-hide-medium">
  <div class="w3-xxxlarge w3-text-cbcyan w3-center w3-margin-bottom w3-padding-64" id="shopsMobile">Τα Καταστήματά μας​</div>
    <div class="w3-content w3-center w3-margin-big-bottom">
      <iframe src="https://www.google.gr/maps/d/u/1/embed?mid=1PspkCY8MGRXcbBLilGhJMpBavu0D0oWm" width="400" height="500"></iframe>
    </div>
</div>
<!-- shops section ends-->

<!-- Contact Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min" id="contact">
  <div class="w3-display-middle">
<!--     <span class="w3-text-white" id="thanos">Contactus</span>-->
     <span class="w3-text-white" id="thanos"><img src="img/contactus.png"></span>
  </div>
</div>

<!-- Container (Contact Section) -->

 <?php 
    
    if(isset($_POST['send_message'])){

    $to      =  "atr0x23@outlook.com";  //franchise@coffeebrands.gr" info@vasandi-aromata.gr
    $name =  wordwrap($_POST['name'],70); // use wordwrap() if lines are longer than 70 characters
    $body    =  $_POST['message']; 
    $header  =  "From: " . $_POST['email'];     
    // send email
    $resault = mail($to,$name,$body,$header);
        if(!$resault){
           echo "<script> alert('ουπς..., κάτι πήγε στραβά') </script>";
        }else
        
        echo "<script> alert('Ευχαριστούμε, το μήνυμά σας έχει σταλεί!') </script>";
        

//    $message_sent = "<div class='alert alert-success' role='alert'> Ευχαριστούμε, το μήνυμά σας έχει σταλεί! <mark>:)</mark> </div>";
//    $something_is_wrong = "";
    } else echo "";
?>

<div class="w3-bg-grammes-r">
  <div class="w3-content w3-container w3-padding-64">
    <h3 class="w3-center w3-text-blue">Στείλε μας το μήνυμά σου...</h3>
    <!-- <p class="w3-center"><em></em></p> -->
    <div class="w3-row w3-padding-32 w3-section">
      <div class="w3-col m4 w3-container">
        <img src="img/contact3.jpg" class="w3-image w3-round w3-hide-small">
      </div>
      <div class="w3-col m8 w3-panel w3-text-blue">
        <div class="w3-large w3-margin-bottom">
          <i class="fa fa-map-marker fa-fw w3-hover-text-cbcyan w3-xlarge w3-margin-right"></i> Πάτρα, GR<br>
          <i class="fa fa-phone fa-fw w3-hover-text-cbcyan w3-xlarge w3-margin-right"></i> Τηλ: +30 1515151515<br>
          <i class="fa fa-envelope fa-fw w3-hover-text-cbcyan w3-xlarge w3-margin-right"></i> Email: info@coffeebrands.gr<br>
        </div>
        
        <form action="" method="post" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Όνομα" id="name" required name="name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" id="email" placeholder="Email" required name="email">
            </div>
          </div>
<!--          <input class="w3-input w3-border" type="text" placeholder="Message" required name="message">-->
             <textarea class="w3-input w3-border" placeholder="Γράψτε το μήνυμά σας..." id="message" name="message" rows="4" cols="50"></textarea>
            <div class="w3-half">Θέλω να λαμβάνω ενημερώσεις<input class="w3-border" type="checkbox" id="newsletter" name="newsletter"></div>             
          <button class="w3-button w3-white w3-right w3-section" type="submit" name="send_message">
            <i class="fa fa-paper-plane"></i> Αποστολή
          </button>
        </form>
      </div>
    </div>
  </div>
</div>

<script src="includes/script.js"></script>

<?php  include "includes/footer.php";?>
 
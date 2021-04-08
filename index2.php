<!DOCTYPE html>
<html>
<title>Coffeebrands.gr</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Ubuntu", sans-serif;}
body, html {
  height: 100%;
  color: #73A6E4;  /* #212949 #777 */
  line-height: 1.8;
}
/*-----custom fonts*/
@font-face {
  font-family: coffeebrandsFont;
  src: url('portrait-script-regular.ttf');
}

h1, #thanos {font-family: "coffeebrandsFont";
    font-size: 78px;}

#thanoSmall {font-family: "coffeebrandsFont";
    font-size: 50px;
    line-height: 0.8;}

#thanoSmaller {font-family: "coffeebrandsFont";
    font-size: 42px;
    line-height: 0.8;}
/*------end of custom fonts*/

.justifytext{text-align: justify;}


/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 {
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
  background-image: url('/img/cb-background1.jpg'); /*http://psofos.gr/vanilla/img/1st-section.jpg*/
  min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
  background-image: url("/img/hand-cup.jpg"); /* http://psofos.gr/farm.jpg */
  min-height: 400px;
}

/* Third image (Franchise) */
.bgimg-4 {
  background-image: url("/img/franchise.jpg"); /* http://psofos.gr/al_ahsa_saudi_arabia.jpg */
  min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
  background-image: url("/img/contactUs-bg.jpg"); /* http://psofos.gr/al_ahsa_saudi_arabia.jpg  megisto-beans-white.jpg */
  min-height: 400px;
}

/*slideshow*/
.mySlides {display:none; animation-duration: 3.5s;}

/*Coffeebrands button*/

.cbbutton {
  border: 2px solid #212949;
  color: #212949;
  background-color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px ;
  letter-spacing: 2px;
  transition-duration: 0.6s;
  cursor: pointer;
}
.cbbutton:hover {
  background-color: #73A6E4;
  text-decoration: none;
  color: #212949;
}

/*Coffeebrands button 2*/

.cbbutton2 {
  border: 1px solid #73A6E4;
  color: white;
  background-color: #212949;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px ;
  letter-spacing: 2px;
  transition-duration: 0.6s;
  cursor: pointer;
}

/*cbbutton2 small*/
.cbbutton2small {
  border: 1px solid #73A6E4;
  color: white;
  background-color: #212949;
  padding: 4px 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 10px;
  margin: 4px 2px ;
  letter-spacing: 2px;
  transition-duration: 0.6s;
  cursor: pointer;
}


.cbbutton2small:hover, .cbbutton2:hover {
  background-color: #73A6E4;
  text-decoration: none;
  color: #212949;
}


/*Coffeebrands back to top*/

#cbbtt {
  width: 40px;
  height: 40px;
  display: block;
  position: fixed;
  bottom: 20px;
  right: -60px;
  z-index: 99;
  border: none;
  outline: none;
  background-color:transparent;
  cursor: pointer;
  padding: 1px;
  border-radius: 50%;
}

#cbbtt:hover {
  background-color: #212949;
}

 /* Make the image fully responsive on event section */
 .carousel-inner img {
    width: 100%;
    height: 100%;
  }

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1600px) {
  .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
    min-height: 400px;
  }
}

/*###########################################*/
/*style for products section on small devices*/
/*###########################################*/

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
}

.cardContainer {
  padding: 12px 16px;
  background-color: #212949;
}

/* Clear floats after the columns */
.cardContainer::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

/* Create 3 equal columns that floats next to each other but NOT on small devices*/
.column3 {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
  /* background-color: #212949; */
}

</style>
<body>

  

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-white w3-hide-medium w3-hide-large w3-left" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"> Menu</i>
    </a>
    <a href="#home" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-home"></i> Αρχική</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> Η Εταιρεία</a>
    <a href="#ourProducts" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> Προϊόντα</a>
    <a href="#franchise" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-link"></i> Franchise</a>
    <a href="#shops" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-map-marker"></i> Καταστήματα</a>
    <a href="#contact" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-envelope"></i> Επικοινωνία</a>
    <!-- <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right w3-hover-red"><i class="fa fa-search"></i></a> -->
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right"><img src="/img/greece.png" style="max-width: 18px;"></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-right"><img src="/img/english.png" style="max-width:18px;"></a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">Η Εταιρεία</a>
    <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">Προϊόντα</a>
    <a href="#franchise" class="w3-bar-item w3-button" onclick="toggleFunction()">Franchise</a>
    <a href="#shopsMobile" class="w3-bar-item w3-button" onclick="toggleFunction()">Καταστήματα</a>
    <a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">Επικοινωνία</a>
    <!-- <a href="#" class="w3-bar-item w3-button">SEARCH</a> -->
    <a href="#" class="w3-bar-item w3-button"><img src="/img/greece.png" style="max-width: 18px;"></a>
    <a href="#" class="w3-bar-item w3-button"><img src="/img/english.png" style="max-width:18px;"></a>
  </div>
</div>

<button onclick="topFunction()" id="cbbtt" title="Go to top">
  <i class="fa fa-angle-double-up" style="font-size:36px;color: #73A6E4;"></i> <!--fa fa-arrow-circle-up -->
</button> 

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <!-- <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">MY <span class="w3-hide-small">WEBSITE</span> LOGO</span> -->
    <img src="/img/cb-logo.png"><br><br><br>
    <!-- <img src="/img/cb-logo.png"> -->
    <!-- <p class="w3-center"><a href="#demo" class="btn btn-outline-secondary btn-lg">Παράγγειλε Τώρα</a></p> -->
    <p class="w3-center"><a href="#demo" class="cbbutton2 w3-round"><i class="fa fa-coffee"></i> Παράγγειλε Τώρα</a></p>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-bg-grammes-l">
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h1 class="w3-center">About us</h1><br>
    <p class="w3-center"><em>Η Φιλοσοφία μας...</em></p>
    <p class="justifytext" style="font-size: 18px;">Η Coffeebrands συνέβη επειδή μοιραζόμαστε το ίδιο πάθος για μία μοναδική εμπειρία καφέ!
      Με αγάπη για τον ποιοτικό καφέ, το 2009, άνοιξε το πρώτο κατάστημα Coffeebrands. Μακριά από το εμπορικό κέντρο, σε μία εναλλακτική περιοχή της πόλης της Πάτρας, δημιουργήθηκε ο πρώτος χώρος συνάντησης των φανατικών του καφέ. Διάσημα brands καφέ, ημιεπαγγελματικός εξοπλισμός για παραγωγή καφέ στο σπίτι και το γραφείο, αλλά και η δυνατότητα να απολαύσουν premium καφέ και φρέσκα σνακ ενόσω έκαναν τις αγορές τους, εξέλιξαν το Coffeebrands σε πολλά περισσότερα από μία boutique καφέ. 
      </p>
    <div class="w3-row">
      <div class="w3-col m6 w3-center w3-padding-large">
        <p><b><i class="fa fa-user w3-margin-right"></i>espresso specialists</b></p><br>
        <img src="/img/about.jpg" class="w3-round w3-image" alt="Photo of Me" width="500" height="333">
      </div>

      <!-- Hide this text on small devices -->
      <div class="w3-col m6 w3-hide-small w3-padding-large justifytext">
        <p style="font-size: 18px;">Λίγοι μόνο μήνες λειτουργίας του πρώτου καταστήματος αρκούσαν ώστε οι λάτρεις του καφέ να αναδείξουν το Coffeebrands σε αγαπημένο προορισμό για καφέ, σνακ κι όχι μόνο! Οι coffee-lovers επισκέπτονται το δικό τους Coffeebrands για να απολαύσουν μία εμπειρία, που τους ταξιδεύει, σε ένα χώρο που νιώθουν σαν το σπίτι τους. Πριν ακόμα γίνει ενός έτους το πρώτο κατάστημα Coffeebrands, είχε δημιουργηθεί και δεύτερο, το οποίο έγινε δεκτό με επίσης μεγάλο ενθουσιασμό.
          Σήμερα με καταστήματα σε Ελλάδα, Κύπρο, Γερμανία, Σερβία, Dubai, Σαουδική Αραβία και με μία δυναμική εξέλιξης που υποστηρίζουν οι Coffeebrandisti σε κάθε γειτονιά του κόσμου, προσφέρουμε πολλά περισσότερα από ένα καφέ.</p>
      </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">Αποτελέσματα αξιολογήσεων από πελάτες μας:</p> <!-- Our Customers Review Results: -->
    <p class="w3-wide w3-text-blue"><i class="fa fa-check-square-o" aria-hidden="true"></i>Quality</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-cb-poll w3-center" style="width:90%">90%</div>
    </div>
    <p class="w3-wide w3-text-blue"><i class="fa fa-cogs" aria-hidden="true"></i>Service</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-cb-poll w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide w3-text-blue"><i class="fa fa-euro"></i><i class="fa fa-money" aria-hidden="true"></i>Cost</p>
    <div class="w3-light-grey">
      <div class="w3-container w3-padding-small w3-cb-poll w3-center" style="width:75%">75%</div>
    </div>
  </div>
</div>
<div class="w3-row w3-center w3-dark-grey w3-padding-16">
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">95+ Καταστήματα</span><br>
    Σε όλο τον κόσμο!
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">Έλλάδα - Κύπρος</span><br>
    Γερμανία - Σερβία - Καναδάς
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">5+ Καταστήματα</span><br>
    Ηνωμένα Αραβικά Εμιράτα
  </div>
  <div class="w3-quarter w3-section">
    <span class="w3-xlarge">12.500+ | Μήνα</span><br>
    Ευχαριστημένοι πελάτες
  </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min" id="ourProducts">
  <div class="w3-display-middle">
    <span class="w3-text-white" id="thanos">OurProducts</span>
  </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-bg-grammes-r">
    <!-- Works only on tablets, laptops and desktops. Will stack on mobile devices/small screens (100% width) -->
    <div class="w3-hide-small w3-auto">
      <div class="row w3-center w3-padding-top-64">
        <div class="column3">
          <div class="card">
            <img src="/img/espresso.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center">
                <p id="thanoSmall">Megisto</p>
                <p class="w3-large w3-text-white">Espresso</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="/img/signature.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center">
                <p id="thanoSmall">Signature</p>
                <p class="w3-large w3-text-white">Drinks</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="/img/athome.jpg" style="width:100%" class="w3-hover-opacity">
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
            <img src="/img/slim.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center">
                <p class="w3-large w3-text-white">Coffeebrands</p>
                <p id="thanoSmall">Slim</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="/img/snacks.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center">
                <p class="w3-large w3-text-white">Coffeebrands</p>
                <p id="thanoSmall">Snacks</p>
                <p><a href="#_" class="cbbutton2">Περισσότερα</a></p>
              </div>
          </div>
        </div>
        <div class="column3">
          <div class="card">
            <img src="/img/tea.jpg" style="width:100%" class="w3-hover-opacity">
              <div class="cardContainer w3-center">
                <p class="w3-large w3-text-white">Coffeebrands</p>
                <p id="thanoSmall">Tea</p>
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
            <img src="/img/espresso.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Megisto Espresso">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Megisto</p>
              <!-- <span class="w3-large w3-text-white">Espresso</span> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>  
        </div>
        <div class="column">
          <div class="card">
          <img src="/img/signature.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Signature Drinks">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Signature</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="/img/athome.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffeebrands at home">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">@Home</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="/img/slim.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Slim Coffee & Chocolate">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Slim</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="/img/snacks.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffeebrands Snacks">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Snacks</p>
              <!-- <p class="w3-large w3-text-white">Drinks</p> -->
              <a href="#_" class="cbbutton2small">Περισσότερα</a>
            </div>
          </div>
        </div>
        <div class="column">
          <div class="card">
          <img src="/img/tea.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Coffeebrands TEA">
            <div class="cardContainer w3-center">
              <p id="thanoSmaller">Tea</p>
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
    <img src="/img/stoKatastima.png"><br>
    <span class="w3-xlarge w3-text-cbblue">Στο Κατάστημα</span>
  </div>
  <div class="w3-third w3-section">
    <img src="/img/delivery.png"><br>
    <span class="w3-xlarge w3-text-cbblue">Στο Χώρο Σας</span>
  </div>
  <div class="w3-third w3-section">
    <img src="/img/takeAway.png"><br>
    <span class="w3-xlarge w3-text-cbblue">Take Away</span>
  </div>
</div>


<!-- Franchise Parallax Image with Portfolio Text -->
<div class="bgimg-4 w3-display-container w3-opacity-min" id="franchise">
  <div class="w3-display-middle">
     <span class="w3-text-white" id="thanos">Franchise</span>
  </div>
</div>


<!-- Container (Franchise Section) -->
 <?php 
    
        if(isset($_POST['submit'])){

        $to      =  "atr0x23@outlook.com";  //franchise@coffeebrands.gr" info@vasandi-aromata.gr
        $subject =  wordwrap($_POST['subject'],70); // use wordwrap() if lines are longer than 70 characters
        $body    =  $_POST['phone']; 
        $header  =  "From: " . $_POST['email'];     
        // send email
        mail($to,$subject,$body,$header); 

        $message_sent = "<div class='alert alert-success' role='alert'> Ευχαριστούμε, το αίτημά σας έχει σταλεί! <mark>:)</mark> </div>";
        $something_is_wrong = "";
        }
          ?>

<div class="w3-bg-grammes-l">
  <div class="w3-content w3-container w3-padding-64">
  <?php echo $message_sent; ?>
    <h3 class="w3-center">Η ΙΔΕΑ</h3>
    <p class="justifytext" style="font-size: 18px; margin-bottom: 50px;">Ένα κατάστημα του δικτύου Coffeebrands εξειδικεύεται στην παραγωγή του τέλειου espresso και παράλληλα προσφέρει μια ευρεία γκάμα προϊόντων με όλα τα είδη καφέ, ροφημάτων, αναψυκτικών, κρύων σάντουιτς, γλυκισμάτων, με άριστη ποιότητα και σε ανταγωνιστικές τιμές. 
      Το ευχάριστο περιβάλλον και ο σχεδιασμός του καθιστικού προσφέρονται για κατανάλωση εντός καταστήματος ενώ παράλληλα όλα τα προϊόντα παρέχονται για take away κατανάλωση ή και delivery στον χώρο του πελάτη.​
      </p>
    <h3 class="w3-center">ΟΡΟΙ ΚΑΙ ΠΡΟΫΠΟΘΕΣΕΙΣ​</h3> 
    <p class="justifytext" style="font-size: 18px;">Η λειτουργία ενός καταστήματος Coffeebrands βασίζεται στην αποκλειστική χρήση και διάθεση των προϊόντων που φέρουν το σήμα της εταιρείας, καθώς είναι σχεδιασμένα να θέσουν την βάση παρασκευής ενός τέλειου ροφήματος με γνώμονα την άριστη ποιότητα και την μοναδική γεύση.
      Η αρχική επένδυση για ένα κατάστημα Coffeebrands μεγέθους 35 – 100 τ.μ. ξεκινά από 35,000 Ευρώ (μόνο στην Ελλάδα), ποσό που αφορά στην διαμόρφωση, επίπλωση και τον εξοπλισμό. 
      Η εταιρεία μας, στα πλαίσια της συνεχούς ανάπτυξής της παρέχει δυνατότητα τραπεζικής χρηματοδότησης έως και 50% του κόστους κατασκευής ενός Καταστήματος Coffeebrands για συγκεκριμένες πόλεις της Ελλάδας και υπό προϋποθέσεις. Διαβάστε περισσότερα... 
      Τα Entry Fees είναι από τα πλέον ανταγωνιστικά της αγοράς, ενώ για περιορισμένο αριθμό καταστημάτων στην Αθήνα μηδενίζονται και αντικαθίστανται υπό προϋποθέσεις με ένα ειδικό πρόγραμμα χρηματοδότησης. 
      Περιοδικά τέλη, όπως royalties και marketing fees δεν υπάρχουν.</p>
      <br>

    <h3 class="w3-center">Άνοιξε το δικό σου Coffeebrands</h3>
    <p class="w3-center"><em>Αν επιθυμείς να  γίνεις συνεργάτης ή να μάθεις περισσότερα για το πως μπορείς και εσύ να ενταχθείς
      <br>στο δίκτυο καταστημάτων Coffeebrands πάτα παρακάτω για να συμπληρώσεις τα στοιχεία σου. </em></p>
      
      <p class="w3-center"><a href="#demo" class="cbbutton" data-toggle="collapse">Επιθυμώ να γίνω Franchisee</a></p>
      <div id="demo" class="collapse">
          
        <p>Άνοιξε το δικό σου <i class="fa fa-coffee"></i>, Coffeebrands​!</p>
        <form role="form" action="" method="post" id="login-form" autocomplete="off">
        
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Όνομα" required name="subject" id="subject">
            </div>
<!--
            <div class="w3-half">
              <input class="w3-input w3-border" type="tel" placeholder="Phone" required name="Phone">
            </div>
-->
            <div class="w3-half">
              <input class="w3-input w3-border" type="email" placeholder="Email" required name="email" id="email">
            </div>
          </div>

         <input type="tel" name="phone" id="phone" class="w3-input w3-border" required placeholder="Τηλέφωνο" pattern="[0-9]{10}">
          
          <button type="submit" name="submit" class="w3-button w3-white w3-right w3-section">
            <i class="fa fa-paper-plane"></i> Αποστολή </button>
        </form>
      </div>
  </div>
</div>

<!--signature blend -->
<div class="w3-row w3-container w3-padding-64 w3-bg-signature-blend">
  <div class="w3-content"> 
    <div class="w3-col m6 w3-center w3-padding-large">
      <img src="/img/signature-blend.jpg" class="w3-image" alt="Megisto Blend" width="422" height="575">
    </div>

    <div class="w3-col m6 w3-padding-large justifytext">
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
        <h1 class="w3-center">Instagram</h1>
        <p class="w3-center w3-text-cbblue"><b>FOLLOW US FOR MORE</b></p>
      </div>


      <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="4000">

        <!-- Indicators -->
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/img/slider-images2.jpg">
          </div>
          <div class="carousel-item">
            <img src="/img/slider-images1.jpg">
          </div>
          <div class="carousel-item">
            <img src="/img/carousel1.jpg">
          </div>
          <div class="carousel-item">
            <img src="/img/carousel2.jpg">
          </div>
          <div class="carousel-item">
            <img src="/img/carousel3.jpg">
          </div>
          <div class="carousel-item">
            <img src="/img/carousel4.jpg">
          </div>
          <div class="carousel-item">
            <img src="/img/carousel5.jpg">
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
     <span class="w3-text-white" id="thanos">Contactus</span>
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
          <button class="w3-button w3-white w3-right w3-section" type="submit" name="send_message">
            <i class="fa fa-paper-plane"></i> Αποστολή
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <!-- <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Αρχική</a> -->
  <div class="w3-section">
    <img src="img/award-sca.png" width="70px" height="70px">
    <img src="img/award-barista.png" width="70px" height="70px">
    <img src="img/award-silver.png" width="70px" height="70px">
  </div>
  <div class="w3-xxlarge w3-section">
    <a href="https://www.facebook.com/coffeebrands.gr/"><i class="fa fa-facebook-official w3-text-cbcyan2"></i></a>
    <a href="https://www.instagram.com/coffeebrands_gr"><i class="fa fa-instagram w3-text-cbcyan2"></i></a>
    <a href="#_"><i class="fa fa-snapchat w3-text-cbcyan2"></i></a>
    <!-- <i class="fa fa-pinterest-p w3-hover-text-cbcyan"></i> -->
    <a href="https://twitter.com/coffeebrands_gr"><i class="fa fa-twitter w3-text-cbcyan2"></i></a>
    <a href="https://www.linkedin.com/company/coffeebrands"><i class="fa fa-linkedin w3-text-cbcyan2"></i></a>
  </div>
  <p>&#169; Powered by <a href="#home" title="Coffeebrands Hellas" target="_blank" class="w3-text-cbcyan2">Coffeebrands &#174;</a></p>
</footer>
 
<script>
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }

  /**** Change style of navbar on scroll ************************************************
   **** Only lines or blocks without cbbtt comment are responsible for the navbar. ****** */

  var prevScrollpos = window.pageYOffset;// cbbtt
  window.onscroll = function() {myFunction()};

  function myFunction() {
      var navbar = document.getElementById("myNavbar");
      var currentScrollPos = window.pageYOffset; // cbbtt
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
          navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
        /*cbbtt*/
      if (prevScrollpos > currentScrollPos) { 
        document.getElementById("cbbtt").style.right = "30px";
      } else {document.getElementById("cbbtt").style.right = "-60px";} 
      prevScrollpos = currentScrollPos;
      /*cbbtt  end*/
  }
        /*cbbtt*/
  function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }   /*cbbtt  end*/

  // Used to toggle the menu on small screens when clicking on the menu button
  function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
      } else {
          x.className = x.className.replace(" w3-show", "");
      }
  }

  /* slideshow */
  var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
/* end of slideshow */
</script>

</body>
</html>
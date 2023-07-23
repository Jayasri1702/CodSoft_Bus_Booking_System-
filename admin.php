<?php
session_start();
if(!isset($_SESSION['aname'])){
  header('location:registration/admin.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Transport</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/bus3.jpg" rel="icon">
  <link href="img/bus3.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <style>
  div.gallery {
  margin: 20px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
</style>
 
</head>

<body id="body" style="background-color:#DDCCFF;">

  <!--==========================
    Top Bar
  ============================-->
 

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

 
    <div id="logo" class="pull-left">
        <h1><a href="#body" class="scrollto">JAYA SRI <span>TRAVELS</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#body">Home</a></li>
          <li><a href="booking.php">Check Booking</a></li>
          <li><a href="bookingdetail.php">Journey Date</a></li>
          <!-- <li><a href="#"><?php echo $_SESSION['aname'];?></a></li> -->
          <li><a href="registration/logout.php">logout</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">

    <div class="intro-content">
      <h2>Life is not a project <br>but a<span> journey</span><br>to be enjoyed</h2>
      <div>
        <a href="profile.php" class="btn-get-started scrollto">Ticket Book</a>
      </div>
    </div>

    <div id="intro-carousel" class="owl-carousel" >
      <!-- <div class="item" style="background-image: url('img/bus1.jpg');"></div>
      <div class="item" style="background-image: url('img/bus2.jpg');"></div>
      <div class="item" style="background-image: url('img/bus3.jpg');"></div>
      <div class="item" style="background-image: url('img/bus4.jpg');"></div>
      <div class="item" style="background-image: url('img/bus5.jpg');"></div>
      <div class="item" style="background-image: url('img/bus6.jpg');"></div> -->
      <div class="item" style="background-image: url('img/bus7.jpg');"></div>
      <!-- <div class="item" style="background-image: url('img/intro-carousel/5.jpg');"></div> -->
    </div>

  </section><!-- #intro -->
  <br><br><br><br>
  <main id="main">  
    

      <section id="about" class="about" style="margin-right:87px;">  
        <div class="container flex items-centre">  
          <div class="left flex-1 justify-right">  
            <img src="bus4.jpg" height="300px" width="400px" alt="profile pic">  
          </div>  
          <div class="right flex-1" style="margin-left:100px;">  
            <h1>About Us</h1>  
            <h2>Jaya Sri Travels</h2>  <br>
            <p><b>Jaya Sri Travels is the world's largest online bus ticket booking service trusted by over 25 million happy customers globally. Jaya Sri Travels offers bus ticket booking through its website, iOS and Android mobile apps for all major routes. Bangalore to Chennai Bus, Chennai to Bangalore Bus, Kolkata to Siliguri Bus, Chandigarh to Manali Bus, Delhi to Jaipur Bus,  Mumbai to Pune Bus,  Bangalore to Goa Bus, Hyderabad to Bangalore Bus, Bangalore to Hyderabad Bus, Delhi to Dehradun Bus, Lucknow to Delhi Bus, Jaipur to Delhi Bus, Bhopal to Indore Bus, Delhi to Manali Bus, Indore to Bhopal Bus  </b></p>  
          </div>  
        </div>  
      </section> 
   
   
   
      <!-- #portfolio -->
     <section id="Partners" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>Partners</h2>
          <p>With there Help and Corporation we make your travel full of Joy and Memorable</p>
        </div>
          <br><br>
        
<div class="gallery">
  <a target="_blank" href="img_5terre.jpg">
    <img src="make_my_trip.png" alt="Cinque Terre" width="600" height="400">
  </a>
  <div class="desc">MakeMyTrip is the super travel app to book hotels, flight tickets, buses, train tickets, etc. We are the largest online travel booking company.</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_forest.jpg">
    <img src="Orange.png" alt="Forest" width="600" height="400">
  </a>
  <div class="desc">Orange Travels is a well-known bus operator in South India that offers excellent road bus connectivity across major routes and cities.</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_lights.jpg">
    <img src="redbus.jpeg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">redBus is the world's largest online bus ticket booking service trusted by over 25 million happy customers globally.</div>
</div>

<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="Fouji.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Fouji Travels is one of the leading and most reliable bus service operators in India. They provide services on major popular bus routes.</div>
</div>
<div class="gallery">
  <a target="_blank" href="img_mountains.jpg">
    <img src="abhibus.png" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">AbhiBus is India’s fastest growing online ticket booking platform offering bus ticket booking, train ticket booking and bus rental services.</div>
</div>

      </div>
    </section><

    <!--==========================
      About Section
    ============================-->
    <section id="about" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 about-img">
             <img src="img/port3.jpg" alt="">
          </div>

         
        </div>

      </div>
    </section><!-- #about -->

   

   
    
  </main>

  <br>
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Traveler</strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="#"> <br> <b>JAYA SRI TRAVELS</b></a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/magnific-popup/magnific-popup.min.js"></script>
  <script src="lib/sticky/sticky.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
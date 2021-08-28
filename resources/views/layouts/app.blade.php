<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Talice Green HR</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset ('/boot/imgs/logoo.png')}}" rel="icon">
  <link href="{{ asset ('/boot/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset ('/boot/lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset ('/boot/lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('/boot/lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('/boot/lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('/boot/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ asset ('/boot/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset ('/boot/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NewBiz
    Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>


  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <h1 class="text-light"><a href="#header"><span>NewBiz</span></a></h1> -->
        <a href="#intro" class="scrollto" style="color:#707070; font-size:25px;"><img src="./boot/img/svg/019-caduceus.svg"  alt="" class="img-fluid">HMS</a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#abouts">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#contact">Contact Us</a></li>
          
          <li class="drop-down"><a href="#register" class="btn-get-started" style="color:#fff;">Login</a>
            <ul>
              <li><a href="{{ route ('doctor.login')}}">Doctors</a></li>

              <li class="#"><a href="{{ route ('user.login')}}">Patient</a>
           
                
              </li>
        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header><!-- #header -->


            @yield('content')
           
            
  
    

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  
  <!-- JavaScript Libraries -->
  <script src="{{ asset ('/boot/lib/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/jquery/jquery-migrate.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/easing/easing.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/mobile-nav/mobile-nav.js')}}"></script>
  <script src="{{ asset ('/boot/lib/wow/wow.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/counterup/counterup.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/owlcarousel/owl.carousel.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset ('/boot/lib/lightbox/js/lightbox.min.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{ asset ('/boot/contactform/contactform.js')}}"></script>

  <!-- Template Main Javascript File -->
  <script src="{{ asset ('/boot/js/main.js')}}"></script>

</body>
</html>

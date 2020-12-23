<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>ORR</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('frontend/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('frontend/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- ========================================= -->
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/favicon.ico')}}">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/chosen.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/color-01.css')}}">

  <!-- Template Main CSS File -->
  <link href="{{asset('frontend/assets/css/style.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="{{asset('frontend/css/frontend/vendor.css')}}">
  <link rel="stylesheet" href="{{asset('frontend/css/frontend/grid.css')}}">

   <!-- Put all third-party CSS files in the vendor.css file and minify the files -->
   <link href="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/vendors.css')}}" rel="stylesheet" type="text/css"
        media="all" />

     <!-- Link your style.css and responsive.css files below -->
     <link href="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/style.css')}}" rel="stylesheet" type="text/css"
        media="all" />

  <!-- Make your theme CSS calls here -->
  <link href="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/theme-custom.css')}}" rel="stylesheet" type="text/css" media="all" />
  <!-- Make your theme RTL CSS calls here -->
  <link href="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/theme-responsive.css')}}" rel="stylesheet" type="text/css" media="all" />
  <!-- Make all your dynamic CSS and Color calls here -->
  <link href="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/skin-and-color.css')}}" rel="stylesheet" type="text/css" media="all" />

   <!-- Put all third-party JS files in the vendor.css file and minify the files -->
   <script src="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/vendor.js')}}"></script>
  <!-- Your main.js file upload this file -->
  <script src="{{asset('frontend/s/files/1/0265/8933/1530/t/2/assets/theme.js')}}"></script>
  <!-- <script src="js/frontend/comment.js" defer="defer"></script> -->
  

  <!-- =======================================================
  * Template Name: Presento - v2.0.2
  * Template URL: https://bootstrapmade.com/presento-bootstrap-corporate-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
    <a href="index.html" class="logo mr-auto"><img src="{{asset('frontend/assets/img/apple-touch-icon.png')}}" alt=""></a>
      <h1 class="logo mr-auto"><a href="{{url('/')}} ">ONLINE READING ROME <span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{url('/')}}">Home</a></li>
          <li class="drop-down"><a href="">Books Catagories</a>
            <ul>
              <li class="drop-down"><a href="/showbook/{{'Science'}}">Science</a>
                <!-- <ul>
                  <li><a href="#">Science</a></li>
                  <li><a href="#">Humanities</a></li>
                  <li><a href="#">Commerce</a></li>
                  <li><a href="#">Adventure</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->
              </li>
              <li class="drop-down"><a href="/showbook/{{'Humanities'}}">Humanities</a>
              </li>
              <li class="drop-down"><a href="/showbook/{{'Adventure'}}">Adventure</a>
              </li>
              <li class="drop-down"><a href="/showbook/{{'Commerce'}}">Commerce</a>
              </li>
            </ul>
          </li>
          <li class="drop-down"><a href="">My Books</a>
            <ul>
            <li class="drop-down"><a href="/mybook/{{'Science'}}">Science</a>
                <!-- <ul>
                  <li><a href="#">Science</a></li>
                  <li><a href="#">Humanities</a></li>
                  <li><a href="#">Commerce</a></li>
                  <li><a href="#">Adventure</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul> -->
              </li>
              
              <li class="drop-down"><a href="/mybook/{{'Humanities'}}">Humanities</a>
              </li>
              <li class="drop-down"><a href="/mybook/{{'Adventure'}}">Adventure</a>
              </li>
              <li class="drop-down"><a href="/mybook/{{'Commerce'}}">Commerce</a>
              </li>
            </ul>
          </li>
          
          
          <li><a href="{{url('addbook')}}">Add Books</a></li>
          <!-- <li><a href="blog.html">Blog</a></li> -->
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <!-- <a href="#about" class="get-started-btn scrollto">Get Started</a> -->
    </div>
  </header><!-- End Header -->
  <div class="content" >
      @yield('content')

  </div>
  

  

  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Presento<span>.</span></h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

         

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <!-- <div class="copyright">
          &copy; Copyright <strong><span>ONLINE READING ROOM</span></strong>. All Rights Reserved
        </div> -->
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/presento-bootstrap-corporate-template/ -->
          Designed by <a href="">Sarowar</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('frontend/assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/venobox/venobox.min.js')}}"></script>
  <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
  <!-- ================================================ -->
  <script src="{{asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4')}}"></script>
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.flexslider.js')}}"></script>
	<script src="{{asset('assets/js/chosen.jquery.min.js')}}"></script>
	<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.countdown.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.sticky.js')}}"></script>
	<script src="{{asset('assets/js/functions.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>

</body>

</html>
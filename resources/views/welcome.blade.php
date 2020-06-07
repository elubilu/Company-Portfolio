<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Company Profile</title>
        <!-- Favicons -->
        <link href="/assets/img/logo1.png" rel="icon">
        <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
        <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="/assets/vendor/venobox/venobox.css" rel="stylesheet">

        <!-- Template Main CSS File -->
        <link href="assets/css/style.css" rel="stylesheet">
        <!-- <link rel="stylesheet" href="/css/all.css"> -->
        <script>
           
            (function () {
                window.Laravel = {
                    csrfToken: '{{ csrf_token() }}'
                };
            })();
          
        </script>
      
    </head>
    <body>
	<!-- ======= Top Bar ======= -->
	  <section id="topbar" class="d-none d-lg-block">
	    <div class="container d-flex">
	      <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i><a href="mailto:info@YourCompany.com">info@yourcompany.com</a>
            <i class="icofont-phone"></i> +880 17 1111 1111
            </div>
            <div class="social-links">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
	      </div>
	    </div>
	  </section>
         <div id="app">
            
                <mainapp ></mainapp>
           
         </div>

    </body>
    <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Site office 01:</h4>
            <p>
              Zindabazar <br>
              Sylhet Sadar,Sylhet 3116<br>
              Bangladesh <br><br>
              <strong>Phone:</strong>  +880 17 1111 1111<br>
              <strong>Email:</strong> info@YourCompany.com<br>
            </p>

          </div>
          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Site office 02:</h4>
            <p>
              Zindabazar <br>
              Sylhet Sadar,Sylhet 3100<br>
              Bangladesh <br><br> 
              <strong>Phone:</strong>  +880 17 1111 1111<br>
              <strong>Email:</strong> info@YourCompany.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Corporate office:</h4>
            <p>
              Zindabazar <br>
              Zindabazar,Sylhet 3100<br>
              Bangladesh <br><br>
              <strong>Phone:</strong>  +880 17 1111 1111<br>
              <strong>Email:</strong> info@YourCompany.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>About Your Company</h3>
            <p>We are aware of our responsibilities, clearly defines goals to deliver on our corporate promise with urgency, passion and energy.</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Your Company</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
           Developed by <a href="https://www.facebook.com/ahmedras3l">Ahmed Rasel</a>
      </div>
    </div>
  </footer><!-- End Footer -->
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="/assets/vendor/php-email-form/validate.js"></script>
    <script src="/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/counterup/counterup.min.js"></script>
    <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="/assets/vendor/venobox/venobox.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/assets/js/main.js"></script>
    <script src="{{mix('/js/app.js')}}"></script>

</html>

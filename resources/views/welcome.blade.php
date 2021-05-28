<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home - {{config('web_config')['WEB_TITLE']}}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/frontend/vendor/venobox/venobox.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/frontend/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Shuffle - v2.3.1
  * Template URL: https://bootstrapmade.com/bootstrap-3-one-page-template-free-shuffle/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active">
            <div class="carousel-background"><img src="{{ Storage::url(config('web_config')['WEB_PLACE_IMAGE']) }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Selamat Datang Di Website {{config('web_config')['WEB_PLACE_NAME']}}</h2>
                <p class="animate__animated animate__fadeInUp">{{config('web_config')['WEB_PLACE_NAME']}} Berlokasi Di {{config('web_config')['WEB_PLACE_ADDRESS']}}</p>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ Storage::url(config('web_config')['WEB_TAKMIR_IMAGE']) }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">Website {{config('web_config')['WEB_PLACE_NAME']}} Ini Dibangun Menggunakan Aplikasi Yang Bernama {{config('web_config')['WEB_TITLE']}}</h2>
                <p class="animate__animated animate__fadeInUp">{{config('web_config')['WEB_DESCRIPTION']}}</p>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-background"><img src="{{ Storage::url(config('web_config')['WEB_SLIDE_IMAGE']) }}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown">{{config('web_config')['WEB_TITLE']}}</h2>
                <p class="animate__animated animate__fadeInUp">{{config('web_config')['WEB_MOTTO']}}</p>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="#"><span>{{config('web_config')['WEB_TITLE']}}</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li><a href="/">Home</a></li>
          @guest
          <li><a href="{{route('login')}}">Login</a></li>
          @else
          <li><a href="{{route('blogs.index')}}">Blog</a></li>
          <li><a href="{{route('forums.index')}}">Forum</a></li>
          <li class="{{ (Request::segment(3) == 'summary') ? 'active' : '' }}"><a class="nav-link" href="{{route('cashs.index')}}">Rekapitulasi Kas</a></li>
          <li><a href="{{route('dashboard')}}">Hi, {{ Auth::user()->name }}</a></li>
          @endguest   
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <main id="main">


    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-ui-user-group"></i>
              <span data-toggle="counter-up">{{totalUsers()}}</span>
              <p><strong>Total User</strong> </p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-money"></i>
              <span data-toggle="counter-up">{{number_format(totalCashs())}}</span>
              <p><strong>Saldo Kas Akhir {{config('web_config')['WEB_PLACE_NAME']}} </strong></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="icofont-speech-comments"></i>
              <span data-toggle="counter-up">{{totalForums()}}</span>
              <p><strong>Total Forum</strong></p>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Counts Section -->


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        Copyright &copy; {{date('Y')}} Made with 💙 by <a href="https://www.facebook.com/han.rivaldy.5" target="_blank">Farhan Rivaldy </a>
    </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/frontend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/jquery-sticky/jquery.sticky.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/counterup/counterup.min.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
  <script src="{{asset('assets/frontend/vendor/venobox/venobox.min.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assets/frontend/js/main.js')}}"></script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PODARENT &mdash; Sewa Mobil Murah dan Terpercaya</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <!-- Import Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Pacifico&family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet" />

  <!-- Import Stylesheets -->
  <link rel="stylesheet" href="{{ asset('frontend/fonts/icomoon/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap-datepicker.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/jquery.fancybox.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/fonts/flaticon/font/flaticon.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend/css/aos.css') }}" />

  <!-- MAIN CSS -->
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />

  <!-- Custom CSS for Fonts and Styles -->
  <style>
    body {
      font-family: 'Roboto', sans-serif;
    }
    .social a {
    color: #000 !important;
    background-color: #fff !important;
    border-radius: 50%;
    display: inline-block;
    height: 40px;
    width: 40px;
    line-height: 40px;
    text-align: center;
    margin-right: 10px;
  }
  .social a span {
    color: #000 !important;
  }
    .site-logo a {
      font-family: 'Pacifico', cursive;
      font-size: 24px;
    }
    .nav-link {
      font-family: 'Montserrat', sans-serif;
      font-weight: 500;
      font-size: 16px;
      color: #fff !important;
    }
    .navbar-brand {
      font-family: 'Comic Sans MS';
      font-size: 24px;
      color: #fff !important;
    }
    .navbar-brand strong {
      color: #fff !important;
    }
    .footer-heading {
      font-family: 'Montserrat', sans-serif;
      font-weight: 700;
    }
    .footer p, .footer ul li a {
      font-family: 'Montserrat', sans-serif;
      font-weight: 300;
      color: #fff;
    }
    .navbar {
      background-color: transparent !important;
    }
    .site-navbar .navbar-brand img {
      max-height: 40px;
      margin-right: 10px;
    }
    .footer {
      background-color: #000;
      color: #fff;
    }
    .footer .social a {
      color: #fff !important;
      background-color: #000 !important;
      border-radius: 50%;
      display: inline-block;
      height: 40px;
      width: 40px;
      line-height: 40px;
      text-align: center;
      margin-right: 10px;
    }
    .footer .social a span {
      color: #fff !important;
    }
    .btn.btn-primary.btn-white {
      color: #000;
      background-color: #fff;
      border-color: #fff;
    }
    .bg-primary {
      background-color: #000 !important;
    }
    .bg-primary .text-white {
      color: #fff !important;
    }
  </style>
</head>

<body>
  <div class="site-wrap" id="home-section">
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    <header class="site-navbar site-navbar-target" role="banner">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
          <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('frontend/images/logo.svg') }}" alt="Logo">
            <strong>PODA RENT</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('daftar-mobil') }}">Daftar Mobil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('tentang-kami') }}">Tentang Kami</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('kontak') }}">Kontak</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    @yield('content')

    <div class="site-section bg-primary py-5">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-7 mb-4 mb-md-0">
            <h2 class="mb-0 text-white">Apa yang kalian tunggu ?</h2>
            <p class="mb-0 opa-7 text-white">Buruan sewa mobil sekarang sebelum harga bbm naik</p>
          </div>
          <div class="col-lg-5 text-md-right">
            <a href="#" class="btn btn-primary btn-white">Sewa Sekarang</a>
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <h2 class="footer-heading mb-4">About Us</h2>
            <p>{{ $setting->footer_description }}</p>
            <ul class="list-unstyled social">
              <li><a href="{{ $setting->instagram }}"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Resources</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Support</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Company</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Terms of Service</a></li>
                  <li><a href="#">Privacy</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>

  <script src="{{ asset('frontend/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('frontend/js/aos.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  @stack('script-alt')
</body>
</html>

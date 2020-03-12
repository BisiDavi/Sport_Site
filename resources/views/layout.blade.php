<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport Academy</title>

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" type="text/css" href="css/layout.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="'assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!--cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container-fluid d-flex">
      <div class="logo mr-auto d-flex">
        <a href="/"><img src="{{asset('img/codepen.png')}}" alt="logo" class="img-fluid mr-2"></a>
        <h1 class="text-light"><a href="/">Sport Academy</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
      </div>
      <!-- start nav -->
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="/about">About</a></li>
          <li><a href="/admission">Admission</a></li>
          <li><a href="/blog">Blog / News</a></li>
          <li><a href="/gallery">Gallery</a></li>
          <li><a href="/contact">Contact Us</a></li>
          <!--<a class="btn" role="button" href="/enroll">Join Team</a>-->
          <li class="my-btn" role="btn"><a href="/enroll">Join Team</a></li>
        </ul>
      </nav
      ><!-- end .nav-menu -->
    </div>
    </header>
    <!-- End Header -->


    @yield('content')

    <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-newsletter" data-aos="fade-up">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Oh yeah, it's good to have you onboard! </p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top" style="background:rgba(83, 84, 97, 0.77);">
      <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 d-sm-none d-sm-block d-xs-none d-xs-block footer-contact" data-aos="fade-up" data-aos-delay="100">
                <div class="logo-bottom mr-auto d-flex mb-2 mt-2">
                    <a href="/"><img src="{{asset('img/codepen footer.png')}}" alt="logo" class="img-fluid mr-2"></a>
                    <h1><a href="/">Sport Academy</a></h1>
                    <!-- Uncomment below if you prefer to use an image logo -->
                </div>
                <p>
                    Authentic African Sports Academy is an independent residential sports college for boys and girls. It combines education with sports along with a special focus on football development. The academy is designed to help aspiring players hone their football skills, place them in the limelight, and facilitate their discovery and recruitment
                    into the big clubs to play alongside football stars of their dreams.The academy is subdivided into two viz
                </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 d-none d-sm-block footer-links" data-aos="fade-up" data-aos-delay="200">
                <h1 class="ml-5">Additional Link</h1>
                <ul>
                    <li><a href="#location">Our Location</a></li>
                    <li><a href="#Scholarship">Scholarship</a></li>
                    <li><a href="#Curriculum">Curriculum</a></li>
                    <li><a href="#Benefits">Benefits</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 footer-links" data-aos="fade-up" data-aos-delay="300">
                <h1>Contact the Academy</h1>
                <form>
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="text" class="form-control" placeholder="Fullname">
                        </div>
                        <div class="form-group col-md-6 col-sm-6">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group col-md-12 col-sm-12" style="margin-left:-5%;">
                        <textarea type="text" class="form-control" placeholder="Message" rows="3"></textarea>
                    </div>

                    <button class="btn btn-secondary"  type="submit">Send</button>
                </form>
            </div>
        </div>
      </div>
    </div>

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Sport Academy</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rock  — Dentist & Dental </title>
    <link rel="icon" href="images/icon.webp" type="image/gif" sizes="16x16">
    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Rock  — Dentist & Dental Clinic Website Template" name="description">
    <meta content="" name="keywords">
    <meta content="" name="author">
    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/swiper.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">

</head>

<body>
    <div id="wrapper">
        <a href="#" id="back-to-top"></a>

        <!-- preloader begin -->
        <div id="de-loader"></div>
        <!-- preloader end -->

        <!-- header begin -->
      <header class="transparent scroll-light"> 
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="de-flex sm-pt10">

          <!-- LOGO -->
          <div class="de-flex-col">
            <div id="logo">
              <a href="{{ route('home') }}">
                <img class="logo-main" src="images/logo-white.webp" alt="">
                <img class="logo-scroll" src="images/logo-black.webp" alt="">
                <img class="logo-mobile" src="images/logo-white.webp" alt="">
              </a>
            </div>
          </div>

          <!-- MENU -->
          <div class="de-flex-col header-col-mid">
            <ul id="mainmenu">
              

              <li>
                <a class="menu-item" href="{{ route('services') }}">Services</a>
              </li>
              <li>
                <a class="menu-item" href="{{ route('gallery') }}">Gallery</a>
              </li>

              <li>
                <a class="menu-item" href="{{ route('about') }}">About</a>
              </li>

              <li>
                <a class="menu-item" href="{{ route('contact') }}">Contact</a>
              </li>
            </ul>
          </div>

          <!-- BUTTON -->
          <div class="de-flex-col">
            <div class="menu_side_area">
              <a href="{{ route('booking') }}" class="btn-main fx-slide">
                <span>Book Appointment</span>
              </a>
              <span id="menu-btn"></span>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</header>



          <main>
        {{$slot}}
    </main>
        <!-- footer begin -->
        <footer class="section-dark">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-lg-4 col-sm-6">
                        <img src="images/logo-white.webp" class="logo-footer" alt="">
                        <div class="spacer-20"></div>
                        <p>At Rock , we’re dedicated to providing high-quality, personalized dental care for patients
                            of all ages. Our skilled team uses the latest technology to ensure comfortable, efficient
                            treatments and beautiful, healthy smiles for life.</p>

                        <div class="social-icons mb-sm-30">
                            <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                            <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 order-lg-1 order-sm-2">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="widget">
                                    <h5>Company</h5>
                                    <ul>
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="{{ route('services') }}">Our Services</a></li>
                                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                                        <li><a href="{{ route('about') }}">About Us</a></li>
                                  
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 ">
                                <div class="widget">
                                    <h5>Our Services</h5>
                                    <ul>
                                        <li><a href="#">General Dentistry</a></li>
                                        <li><a href="#">Cosmetic Dentistry</a></li>
                                        <li><a href="#">Pediatric Dentistry</a></li>
                                        <li><a href="#">Restorative Dentistry</a></li>
                                        <li><a href="#">Preventive Dentistry</a></li>
                                        <li><a href="#">Orthodontics</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 order-lg-2 order-sm-1">
                        <div class="widget">
                            <h5>Contact Us</h5>
                            <div class="fw-bold text-white"><i class="icofont-location-pin me-2 id-color"></i>Clinic
                                Ajemr</div>
                            100 S Main St

                            <div class="spacer-20"></div>

                            <div class="fw-bold text-white"><i class="icofont-phone me-2 id-color"></i>Call Us</div>
                           xxxxxxxxx

                            <div class="spacer-20"></div>

                            <div class="fw-bold text-white"><i class="icofont-envelope me-2 id-color"></i>Send a Message
                            </div>
                            contact@gmail.com.com
                        </div>
                    </div>
                </div>
            </div>
            
        </footer>
        <!-- footer end -->
    </div>

    <div id="extra-wrap" class="text-light">
        <div id="btn-close">
            <span></span>
            <span></span>
        </div>

        <div id="extra-content" class='d-none'>
            <img src="images/logo-white.webp" class="w-150px" alt="">

            <div class="spacer-30-line"></div>

            <h5>Our Services</h5>
            <ul class="ul-check">
                <li><a href="service-general-dentistry.html">General Dentistry</a></li>
                <li><a href="service-cosmetic-dentistry.html">Cosmetic Dentistry</a></li>
                <li><a href="service-pediatric-dentistry.html">Pediatric Dentistry</a></li>
                <li><a href="service-restorative-dentistry.html">Restorative Dentistry</a></li>
                <li><a href="service-preventive-dentistry.html">Preventive Dentistry</a></li>
                <li><a href="service-orthodontics.html">Orthodontics</a></li>
            </ul>

            <div class="spacer-30-line"></div>

            <h5>Contact Us</h5>
            <div><i class="icofont-clock-time me-2 op-5"></i>Monday - Friday 08.00 - 18.00</div>
            <div><i class="icofont-location-pin me-2 op-5"></i>100 S Main St, New York, </div>
            <div><i class="icofont-envelope me-2 op-5"></i>contact@Rock care.com </div>

            <div class="spacer-30-line"></div>

            <h5>About Us</h5>
            <p>At Rock , we’re dedicated to providing high-quality, personalized dental care for patients of all ages.
                Our skilled team uses the latest technology to ensure comfortable, efficient treatments and beautiful,
                healthy smiles for life.</p>

            <div class="social-icons">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
        </div>
    </div>

    <!-- Javascript Files
    ================================================== -->
    <script src="js/plugins.js"></script>
    <script src="js/designesia.js"></script>
    <script src="js/swiper.js"></script>
    <script src="js/custom-swiper-1.js"></script>
    <script src="js/custom-marquee.js"></script>
    <script>
    document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] +
        ':35729/livereload.js?LR-verbose&snipver=1&LiveTest=1"></' + 'script>')
    </script>
</body>

</html>

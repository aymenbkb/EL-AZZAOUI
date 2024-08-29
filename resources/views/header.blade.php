<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">


    <title>EL AZZAOUI SCHOOL</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-scholar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/signin.css') }}">
    <link rel="stylesheet" href="{{asset('assets/css/header.css')}}">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
   
<!--

TemplateMo 586 Scholar

https://templatemo.com/tm-586-scholar

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="">
                    </a>
                    
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                      <form id="search" action="#">
                        <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                        <i class="fa fa-search"></i>
                      </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li class="scroll-to-section"><a href="/">Home</a></li>
                      <li class="scroll-to-section"><a href="/services">Services</a></li>
                      <li class="scroll-to-section"><a href="/courses">Courses</a></li>
                      <li class="scroll-to-section"><a href="/team">Team</a></li>
                      <li class="scroll-to-section"><a href="/events">Events</a></li>
                      <li class="scroll-to-section">
                        <a href="{{ url('/signin') }}"> 
                            <label class="popup">
                              <input type="checkbox" />
                              <div tabindex="0" class="burger">
                                <svg
                                  viewBox="0 0 24 24"
                                  fill="white"
                                  height="20"
                                  width="20"
                                  xmlns="http://www.w3.org/2000/svg"
                                >
                                  <path
                                    d="M12 2c2.757 0 5 2.243 5 5.001 0 2.756-2.243 5-5 5s-5-2.244-5-5c0-2.758 2.243-5.001 5-5.001zm0-2c-3.866 0-7 3.134-7 7.001 0 3.865 3.134 7 7 7s7-3.135 7-7c0-3.867-3.134-7.001-7-7.001zm6.369 13.353c-.497.498-1.057.931-1.658 1.302 2.872 1.874 4.378 5.083 4.972 7.346h-19.387c.572-2.29 2.058-5.503 4.973-7.358-.603-.374-1.162-.811-1.658-1.312-4.258 3.072-5.611 8.506-5.611 10.669h24c0-2.142-1.44-7.557-5.631-10.647z"
                                  ></path>
                                </svg>
                              </div>
                              <nav class="popup-window">
                                <legend>Quick Start</legend>
                                <ul>
                                  <li>
                                    <button>
                                      <svg
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1.2"
                                        stroke-linecap="round"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          d="M19 4v6.406l-3.753 3.741-6.463-6.462 3.7-3.685h6.516zm2-2h-12.388l1.497 1.5-4.171 4.167 9.291 9.291 4.161-4.193 1.61 1.623v-12.388zm-5 4c.552 0 1 .449 1 1s-.448 1-1 1-1-.449-1-1 .448-1 1-1zm0-1c-1.104 0-2 .896-2 2s.896 2 2 2 2-.896 2-2-.896-2-2-2zm6.708.292l-.708.708v3.097l2-2.065-1.292-1.74zm-12.675 9.294l-1.414 1.414h-2.619v2h-2v2h-2v-2.17l5.636-5.626-1.417-1.407-6.219 6.203v5h6v-2h2v-2h2l1.729-1.729-1.696-1.685z"
                                        ></path>
                                      </svg>
                                      <span  >Log In</span>
                                    </button>
                                  </li>
                                  <li>
                                    <button>
                                      <svg
                                        width="14"
                                        height="14"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="1"
                                        stroke-linecap="round"
                                        xmlns="http://www.w3.org/2000/svg"
                                      >
                                        <path
                                          d="M2.598 9h-1.055c1.482-4.638 5.83-8 10.957-8 6.347 0 11.5 5.153 11.5 11.5s-5.153 11.5-11.5 11.5c-5.127 0-9.475-3.362-10.957-8h1.055c1.443 4.076 5.334 7 9.902 7 5.795 0 10.5-4.705 10.5-10.5s-4.705-10.5-10.5-10.5c-4.568 0-8.459 2.923-9.902 7zm12.228 3l-4.604-3.747.666-.753 6.112 5-6.101 5-.679-.737 4.608-3.763h-14.828v-1h14.826z"
                                        ></path>
                                      </svg>
                                      <span>Sign Up</span>
                                    </button>
                                  </li>
                                </ul>
                              </nav>
                            </label>
                            </a>
                        </li>
                  </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>

  @yield('content')

  <footer class="footer">
    <div class="container footer-row">
      <div class="footer-col">
        <h4>Info</h4>
        <ul class="links">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Compressions</a></li>
          <li><a href="#">Customers</a></li>
          <li><a href="#">Service</a></li>
          <li><a href="#">Collection</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Explore</h4>
        <ul class="links">
          <li><a href="#">Free Designs</a></li>
          <li><a href="#">Latest Designs</a></li>
          <li><a href="#">Themes</a></li>
          <li><a href="#">Popular Designs</a></li>
          <li><a href="#">Art Skills</a></li>
          <li><a href="#">New Uploads</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Legal</h4>
        <ul class="links">
          <li><a href="#">Customer Agreement</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">GDPR</a></li>
          <li><a href="#">Security</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">Media Kit</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Newsletter</h4>
        <p>
          Subscribe to our newsletter for a weekly dose
          of news, updates, helpful tips, and
          exclusive offers.
        </p>
        <form action="#">
          <input type="email" placeholder="Your email" required>
          <button type="submit">SUBSCRIBE</button>
        </form>
        <div class="icons">
          <i class="fa-brands fa-facebook-f"></i>
          <i class="fa-brands fa-twitter"></i>
          <i class="fa-brands fa-linkedin"></i>
          <i class="fa-brands fa-github"></i>
        </div>
      </div>
    </div>
  </footer>
  
  
 
  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/isotope.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl-carousel.js') }}"></script>
  <script src="{{ asset('assets/js/counter.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
  
  @yield('scripts') <!-- Section for page-specific JS -->
  </body>
</html>
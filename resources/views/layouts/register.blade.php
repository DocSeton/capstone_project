<!doctype html>
<html lang="en">
  <head>
    <title>Wesleyan University-Philippines Event Evaluation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/jquery.fancybox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo" ><a href="{{ url('/landing') }}" class="h2 mb-0">WUPEES</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ url('/landing') }}" class="nav-link">Home</a></li>
                <li><a href="#blog-section" class="nav-link">About</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                <li><a href="{{ route('register') }}" class="nav-link">Register</a></li>




              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/background.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">


      @yield('registercontent')

        </div>
      </div>

      <a href="#next" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>


    <div class="site-section" id="next">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
            <img src="images/flaticon-svg/svg/calendar.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Events</h3>
            <p>See all the new and upcoming events of the University. Enjoy, relax and learn at the same time!</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
            <img src="images/flaticon-svg/svg/checklist.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Online Evaluations</h3>
            <p>Evaluate the event online for better experience. Say good bye to the traditional way of evaluating on papers.</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
            <img src="images/flaticon-svg/svg/immigration.svg" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4">
            <h3 class="card-title">Online Attendance</h3>
            <p>Made it easier for you, just a quick scan and you're good to go.</p>
          </div>

        </div>


            <section class="site-section">
              <div class="container">

                <div class="row mb-5 justify-content-center">
                  <div class="col-md-7 text-center">
                    <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">How It Works</h2>
                    <p class="lead" data-aos="fade-up" data-aos-delay="100">Below are examples on how you can use the event site.</p>
                  </div>
                </div>

                <div class="row align-items-lg-center" >
                  <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">

                    <div class="owl-carousel slide-one-item-alt">
                      <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
                      <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
                      <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
                      <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="custom-direction">
                      <a href="#" class="custom-prev"><span><span class="icon-keyboard_backspace"></span></span></a><a href="#" class="custom-next"><span><span class="icon-keyboard_backspace"></span></span></a>
                    </div>

                  </div>
                  <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

                    <div class="owl-carousel slide-one-item-alt-text">

                      <div>
                        <h2 class="section-title mb-3">Online Registration and Login</h2>
                        <p>Register an account on the register link above and login.</p>

                        <p><a href="{{ route('register') }}" class="btn btn-success mr-2 mb-2">Learn More</a></p>
                      </div>

                      <div>
                        <h2 class="section-title mb-3">Event registration and information.</h2>
                        <p>After logging in, register on any event you are interested and browse information about it.</p>
                        <p><a href="#" class="btn btn-success mr-2 mb-2">Learn More</a></p>
                      </div>

                      <div>
                        <h2 class="section-title mb-3">Online Attendance</h2>
                        <p>Use your own account QR code as an ID for attendance on the account settings.</p>

                        <p><a href="#" class="btn btn-success mr-2 mb-2">Learn More</a></p>
                      </div>

                      <div>
                        <h2 class="section-title mb-3">Event Evaluation</h2>
                        <p>Click start evaluation on any available posted event.</p>

                        <p><a href="#" class="btn btn-success mr-2 mb-2">Learn More</a></p>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </section>






        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="images/wesleyan.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black">Amortization Computation</h3>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>

            </div>

            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Officia quaerat eaque neque</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
              </ul>

            </div>
          </div>
        </div>
      </div>
    </div>



    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Event's Review</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/student1.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Arlene Faye Rueda</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/student2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Cristalyn Macapagal</p>
              </figure>

            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/student3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Jonathan Torres</p>
              </figure>


            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/student4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Aldrine Roque</p>
              </figure>

            </div>
          </div>

        </div>
    </section>





    <section class="site-section" id="gallery-section" data-aos="fade">


      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">WU-P Event Gallery</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5">
          <div id="filters" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <!--
            <button class="btn btn-primary" data-filter=".web">Events</button>
            <button class="btn btn-primary" data-filter=".design">Party</button>
            <button class="btn btn-primary" data-filter=".brand">Holidays</button>
          -->
          </div>
        </div>

        <div id="posts" class="row no-gutter">
          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal7.jpg">
            </a>
          </div>
          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal8.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal9.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">

            <a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal10.jpg">
            </a>

          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal11.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal12.jpg">
            </a>
          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal13.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_3.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal14.jpg">
            </a>
          </div>

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_4.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal20.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_5.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal21.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_1.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal17.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_2.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/gal18.jpg">
            </a>
          </div>


        </div>
      </div>

    </section>




<section class="site-section border-bottom" id="team-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-8 text-center">
        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">Meet the Team</h2>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">BSIT 4-1</p>
      </div>
    </div>
    <div class="row">


      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
        <div class="team-member">
          <figure>
            <ul class="social">
              <li><a href="https://www.facebook.com/Lecx19" target="_blank"><span class="icon-facebook"></span></a></li>
              <li><a href="" target="_blank"><span class="icon-twitter"></span></a></li>
              <li><a href="https://www.instagram.com/limagicia/" target="_blank"><span class="icon-instagram"></span></a></li>
            </ul>
            <img src="images/lecx.jpg" alt="Image" class="img-fluid" style="height:260px;width:300px;">
          </figure>
          <div class="p-3">
            <h3>Ivan Lecx B. Valencia</h3>
            <span class="position">Leader</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member">
          <figure>
            <ul class="social">
              <li><a href="https://www.facebook.com/lazyknightzero" target="_blank"><span class="icon-facebook" ></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-twitter" ></span></a></li>
              <li><a href="#"  target="_blank"><span class="icon-instagram"></span></a></li>
            </ul>
            <img src="images/ches.jpg" alt="Image" class="img-fluid" style="height:260px;width:300px;">
          </figure>
          <div class="p-3">
            <h3>Jan Chester E. Garubo</h3>
            <span class="position">Member</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member">
          <figure>
            <ul class="social">
              <li><a href="https://www.facebook.com/Heintie" target="_blank"><span class="icon-facebook" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-twitter"target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-instagram"target="_blank"></span></a></li>
            </ul>
            <img src="images/hein.jpg" alt="Image" class="img-fluid" style="height:260px;width:300px;">
          </figure>
          <div class="p-3">
            <h3>Heinrich Dela A. Fuente</h3>
            <span class="position">Member</span>
          </div>
        </div>
      </div>



      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="team-member">
          <figure>
            <ul class="social">
              <li><a href="https://m.facebook.com/weafufu" target="_blank"><span class="icon-facebook" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-twitter" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-instagram" target="_blank"></span></a></li>
            </ul>
            <img src="images/wealan.png" alt="Image" class="img-fluid" style="height:260px;width:300px;">
          </figure>
          <div class="p-3">
            <h3>Wealand Allen M. Ferrer</h3>
            <span class="position">Member</span>
          </div>
        </div>
      </div>



      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="team-member">
          <figure>
            <ul class="social">
              <li><a href="https://www.facebook.com/lemuelaldwin.villar" target="_blank"><span class="icon-facebook" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-twitter" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-instagram" target="_blank"></span></a></li>
            </ul>
            <img src="images/lem.jpg" alt="Image" class="img-fluid" style="height:260px;width:300px;">
          </figure>
          <div class="p-3">
            <h3>Lemuel Aldwin Villar</h3>
            <span class="position">Member</span>
          </div>
        </div>
      </div>



      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="">
        <div class="team-member">
          <figure>
            <ul class="social">
              <li><a href="https://www.facebook.com/SeaRinks" target="_blank"><span class="icon-facebook" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-twitter" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-instagram" target="_blank"></span></a></li>
            </ul>
            <img src="images/jerome.jpg" alt="Image" class="img-fluid" style="height:260px;width:300px;">
          </figure>
          <div class="p-3">
            <h3>Jerome Kent Javier</h3>
            <span class="position">Member</span>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="team-member">
          <figure>
            <ul class="social">
              <li><a href="https://www.facebook.com/tikimbert" target="_blank"><span class="icon-facebook" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-twitter" target="_blank"></span></a></li>
              <li><a href="#" target="_blank"><span class="icon-instagram" target="_blank"></span></a></li>
            </ul>
            <img src="images/kimbert.jpg" alt="Image" class="img-fluid" style="height:260px;width:300px;">
          </figure>
          <div class="p-3">
            <h3>Kimbert Dominguez</h3>
            <span class="position">Member</span>
          </div>
        </div>
      </div>


    </div>
  </div>
</section>



<section class="site-section" id="blog-section">
  <div class="container">
    <div class="row mb-5 justify-content-center">
      <div class="col-md-8 text-center">
        <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">About Us</h2>
        <p class="lead" data-aos="fade-up" data-aos-delay="100">WUP Event and Evaluation System is an online user-friendly event and evaluation website .</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
        <figure class="circle-bg">
        <img src="images/hero_1.jpg" alt="Free Website Template by Free-Template.co" class="img-fluid">
        </figure>
      </div>
      <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">

        <h3 class="text-black mb-4">We Make Things Easier For You</h3>

        <p>The website lets you do things like event registration, evaluation and attendance in just one go on your devices.</p>
        <p>It contains posts and announcements regarding to many different events of the University so make sure you're registered!.</p>

      </div>
    </div>

  </div>
</section>




    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Us</h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h2 text-success"></span>
              <span >Mabini Street Extension, Cabanatuan, Nueva Ecija 3100</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 text-success"></span>
              <a href="#" style = "color:#00cc00;">+63 (044) 463-2162 / 463-2074</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h2 text-success"></span>
              <a href="#" style = "color:#00cc00;">admin@wesleyan.edu.ph</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">




          </div>

        </div>
      </div>
    </section>


    <footer class="site-footer">
        <div class="row text-center">
          <div class="col-md-12">

              <p class="copyright">
            Copyright &copy; 2020 Wesleyan University - Philippines. All Rights Reserved. <a href="http://wesleyan.edu.ph/">WU-P</a></p>

          </div>
        </div>
    </footer>

  </div> <!-- .site-wrap -->


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script>
      $(function() {

      var multiImgPreview = function(input, imgPreviewPlaceholder) {

          if (input.files) {
              var filesAmount = input.files.length;

              for (i = 0; i < filesAmount; i++) {
                  var reader = new FileReader();

                  reader.onload = function(event) {
                      $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                  }

                  reader.readAsDataURL(input.files[i]);
              }
          }

      };

      $('#image').on('change', function() {
          multiImgPreview(this, 'div.imgPreview');
      });
      });
  </script>



  <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('js/aos.js') }}"></script>
  <script src="{{ asset('js/jquery.fancybox.min.js') }}"></script>
  <script src="{{ asset('js/jquery.sticky.js') }}"></script>
  <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>


  </body>
</html>

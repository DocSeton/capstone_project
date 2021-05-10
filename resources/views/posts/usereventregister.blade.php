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

    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


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
            <h1 class="mb-0 site-logo" ><a href="{{ url('/userhome') }}" class="h2 mb-0">WUPEES</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="{{ url('/userhome') }}" class="nav-link">Home</a></li>
                <li><a href="{{ url('/userevent') }}" class="nav-link">Registered Events</a></li>
                <li><a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->name }}</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Profile</a>
                  </div>
                </li>
                <li><a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                        <p>Logout</p>
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                    </form>
                </li>



              <!--  <li><a href="" class="nav-link">Admin Login</a></li>  -->




              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>


<div class="" style="background-color:#2eb82e; height:80px;">

</div>

<div class="container">

@foreach($postevent as $post)

  <div class="card">
    <div class="container" style="padding: 15px; box-shadow: 0 1px 5px rgb(194, 193, 193);">

      <form action="{{route('posts.register',[$post->id])}}" method = "POST" enctype="multipart/form-data">
        @csrf

        <div class="card-header">

            <h2><b>Register to this event? <button type="submit" name = "upload" class="btn btn-outline-success btn-lg"><i class="fas fa-share"></i>Register</button></b></h2>

        </div>

        <div class="form-group">
            <input type="hidden" class="form-control  @error('user') is-invalid @enderror" name = "user" id = "user" value="{{ Auth::user()->name }}">

            @error('user')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group">
          <input type="hidden" id="status" name = "status" class="form-control" value="Registered" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
        </div>

        <div class="form-group">
          <input type="hidden" id="event" name = "event" class="form-control" value="{{old('title',$post->title)}}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
        </div>

        <div class="form-group">
          <input type="hidden" id="author" name = "author" class="form-control" value="{{old('author',$post->author)}}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
        </div>



        <div class="card card-widget">
              <div class="card-body">
                <h3>{{ $post->title }}</h3>
                <h5><b>Evaluation link: <a href="{{ $post->link }}" target="_blank">{{ $post->link }}</a></h5>
                <hr>
                <img class="img-fluid pad" src="{{ asset('storage/images/posts/'. $post->image) }}" alt="No current event photo">
                <hr>
              </div>
        </div>



      </form>

          </div>
    </div>

@endforeach

</div>


    <footer class="site-footer">
        <div class="row text-center">
          <div class="col-md-12">

              <p class="copyright">
            Copyright &copy; 2020 Wesleyan University - Philippines. All Rights Reserved. <a href="http://wesleyan.edu.ph/">WU-P</a></p>

          </div>
        </div>
    </footer>

<!-- .site-wrap -->



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

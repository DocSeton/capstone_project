<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>WU-P Event Evaluation System</title>
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


<link rel=“stylesheet” type=“text/css” href=“style.css” />

<style type = "text/css">
*, *:before, *:after {
    -webkit-box-sizing: border-box;
       -moz-box-sizing: border-box;
            box-sizing: border-box;
}

body {
  background-color:#e9ebee;
}

.f-card {
  background-color:white;
  height:640px;
  width:702px;
  border: 1px solid #d0d1d5;
  border-radius:3px;
  margin: auto;
  margin-bottom:10px;
  padding: 12px;

  box-shadow: 0 0 5px rgba(0, 0, 0, .30); /* Not original, just a test */
}

.header {
  margin-bottom:17px;
}

.co-logo {
  /*display:block;*/
  float:left;
  margin-right:8px;

  width:40px;
  height:40px;
}

.co-name > a {
  font-family: Helvetica;
  font-size:14px;
  font-weight: bold;
  line-height: 1.38;
  color: #365899;
  text-decoration:none;

  margin-bottom:2px;
}

.co-name > a:hover {
  text-decoration:underline;
}

.time {
  font-family: Helvetica;
  font-size:12px;
  color: #90949c;
}

.time > a {
  color: #90949c;
  text-decoration:none;
}

.time > a:hover {
  text-decoration:underline;
}

.options {
  font-family: Helvetica;
  font-size:12px;
  color: #e5e5e5;
  float:right;
}

.options:hover {
  color: black; /* Fallback */
  color: rgba(0, 0, 0, .30);
}

.content {
  clear:both;
  font-family: Helvetica, sans-serif;
  font-size:14px;
  line-height: 1.38;
}

.reference {
  width:676px;
}
.reference-thumb {
  display:block;
  width:676px;
  height:460px;
}

.reference-content {
  border: 2px solid black;
  border: 2px solid rgba(0, 0, 0, .1);
  border-top: 0;
  padding: 10px 12px 10px 12px;
}

.reference:hover .reference-content {
  border-color: black; /* Fallback */
  border-color: rgba(0, 0, 0, .15);
}

.reference-title {
  font-family: Georgia;
  font-size: 18px;
  font-weight: 500;
  line-height: 22px;

  margin-bottom:5px;
}

.reference-subtitle {
  font-family: Helvetica;
  font-size:12px;
  line-height: 16px;
}

.reference-font {
  color: #90949c;
  font-family: Helvetica;
  font-size: 11px;
  line-height: 11px;
  text-transform: uppercase;

  padding-top:9px;
}

.social {
  margin-top:12px;
}
.social-buttons {
  color: #7f7f7f;
  font-family: Helvetica;
  font-size: 12px;
  font-weight:bold;
  line-height:14px;

  border-top:1px solid #e5e5e5;
  padding-top:4px;

}

.social-buttons span {
  font-size: 12px;
  margin-right:20px;
  padding:4px 4px 4px 0;
}

.social-buttons span:hover {
  text-decoration:underline;
  cursor:pointer;
}

.social-buttons span i {
  padding-right:4px;
}


/* Solve problem where border size changes on hover */
#galphoto {
  border: 2px solid #33cc33;

}
#galphoto:hover {
  outline: 2px solid #2eb82e;
}
</style>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style = "color:#53c653;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/home') }}" class="nav-link">Home</a>
      </li>

    </ul>




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style = "background-color:#206020;">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      <img src="{{ asset('dist/img/wupees.png') }}" alt="WUPEES" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">WUPEES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/wuplogo.png') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header"><strong></strong></li>

        <li class="nav-item">
          <a href="{{ ('userevent') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Events
            </p>
          </a>
        </li>

          <li class="nav-header">SETTINGS</li>
          <li class="nav-item has-treeview">
            <a href="{{ ('usergallery') }}" class="nav-link">
              <i class="nav-icon fa fa-file-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>


          <li class="nav-header">OTHERS</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                 <i class="nav-icon far fa-circle text-danger"></i>
                <p>Logout</p>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

            <a href="#" class="">
              <p class="text"></p>
            </a>

          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="container" style = "height:40px;">
    </div>

    @yield('homecontent')
    @yield('surveytemplate')
    @yield('registereventcontent')
    @yield('usergallery')


  </div>
  <!-- /.content-wrapper -->


  </div>
  <!-- /.content-wrapper -->








  <footer class="main-footer" style = "background-color:#; color:#53c653; text-align:center;">
    <h6>Copyright &copy; 2020 Wesleyan University - Philippines. All Rights Reserved. <a style = "color:#00ff00;" href="http://wesleyan.edu.ph/">WU-P</a></h6>

  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<!-- Sparkline -->
<script src="{{ asset('plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('dist/js/demo.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('../../plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('../../plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>


<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

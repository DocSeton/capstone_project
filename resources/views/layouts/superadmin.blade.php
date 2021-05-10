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



  <link rel="stylesheet" href="{{ asset('../lib/main.css') }}" />
  <script src="{{ asset('../lib/main.js') }}"></script>

  <script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {

        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,listYear'
        },

        displayEventTime: false, // don't show the time column in list view

        eventClick: function(arg) {
          // opens events in a popup window
          window.open(arg.event.url, 'google-calendar-event', 'width=700,height=600');

          arg.jsEvent.preventDefault() // don't navigate in main tab
        },

        loading: function(bool) {
          document.getElementById('loading').style.display =
            bool ? 'block' : 'none';
        }

      });

      calendar.render();
    });

  </script>
  <style>

    .calendarbody {
      margin: 40px 10px;
      padding: 0;
      font-family: Arial, Helvetica Neue, Helvetica, sans-serif;
      font-size: 14px;
    }

    #loading {
      display: none;
      position: absolute;
      top: 10px;
      right: 10px;
    }

    #calendar {
      max-width: 1100px;
      max-height: 600px;
      margin: 0 auto;
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
        <a href="{{ url('/superadmin') }}" class="nav-link">Home</a>
      </li>

    </ul>




  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style = "background-color:#206020;">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      <img src="{{ asset('dist/img/wuplogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">WUPEES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header"><strong>ADMINISTRATION</strong></li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Events
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="{{ ('eventall') }}" class="nav-link">
                <i class="fas fa-calendar-week nav-icon"></i>
                <p>All Events</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ ('request') }}" class="nav-link">
                <i class="fas fa-calendar-times nav-icon"></i>
                <p>Pending Events</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ ('approved') }}" class="nav-link">
                <i class="fas fa-calendar-check nav-icon"></i>
                <p>Approved Events</p>
              </a>
            </li>


          </ul>
        </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                 Evaluation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ ('uploadedevaluation') }}" class="nav-link">
                  <i class="fas fa-link nav-icon"></i>
                  <p>Uploaded Evaluations</p>
                </a>
              </li>
            </ul>
          </li>

<!--
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Attendance
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Event Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Attendance</p>
                </a>
              </li>

            </ul>
          </li>
-->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-file"></i>
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ ('collegegallery') }}" class="nav-link">
                  <i class="fa fa-image nav-icon"></i>
                  <p>College Gallery</p>
                </a>
              </li>

            </ul>
          </li>



        <li class="nav-header">ACCOUNTS</li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                 Users
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ ('studentusers') }}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                  <p>Users</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ ('adminusers') }}" class="nav-link">
                  <i class="fas fa-user-cog nav-icon"></i>
                  <p>Admin Users</p>
                </a>
              </li>



            </ul>

          </li>



          <li class="nav-header">REPORTS</li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                 College Reports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ ('cas') }}" class="nav-link">
                  <i class="fas fa-calculator nav-icon"></i>
                  <p>CAS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('cba') }}" class="nav-link">
                  <i class="fas fa-business-time nav-icon"></i>
                  <p>CBA</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('ccje') }}" class="nav-link">
                  <i class="fas fa-balance-scale nav-icon"></i>
                  <p>CCJE</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('cect') }}" class="nav-link">
                  <i class="fas fa-laptop nav-icon"></i>
                  <p>CECT</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('coed') }}" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                  <p>COED</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('chtm') }}" class="nav-link">
                  <i class="fas fa-utensils nav-icon"></i>
                  <p>CHTM</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('conams') }}" class="nav-link">
                  <i class="fas fa-user-nurse nav-icon"></i>
                  <p>CONAMS</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('graduateschool') }}" class="nav-link">
                  <i class="fas fa-user-graduate nav-icon"></i>
                  <p>GRADUATE SCHOOL</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('jwslg') }}" class="nav-link">
                  <i class="fas fa-gavel nav-icon"></i>
                  <p>JWLSG</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('osa') }}" class="nav-link">
                  <i class="fas fa-user-shield nav-icon"></i>
                  <p>OSA</p>
                </a>
              </li>

            </ul>

          </li>



          <li class="nav-header">OTHERS</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                 <i class="nav-icon far fa-circle text-danger"></i>
                {{ __('Logout') }}
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

    @yield('content')
    @yield('createadmin')
    @yield('useredit')
    @yield('eventedit')
    @yield('cas')
    @yield('cba')
    @yield('ccje')
    @yield('cect')
    @yield('coed')
    @yield('chtm')
    @yield('conams')
    @yield('graduateschool')
    @yield('jwslg')
    @yield('osa')
    @yield('collegegallery')
    @yield('adminusers')

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

<!-- Script to print the content of a div -->
<script type="text/javascript">

      function printDiv(){
        var printContents = document.getElementById("approve").innerHTML;
        var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();

      document.body.innerHTML = originalContents;
      }


      function printDiv2(){
        var printContents = document.getElementById("student").innerHTML;
        var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();

      document.body.innerHTML = originalContents;
      }


      function printDiv3(){
        var printContents = document.getElementById("registration").innerHTML;
        var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();

      document.body.innerHTML = originalContents;
      }


      function printDiv4(){
        var printContents = document.getElementById("attendance").innerHTML;
        var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();

      document.body.innerHTML = originalContents;
      }

</script>



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



</body>
</html>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>WU-P Event Evaluation System</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
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


  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>



  <link rel="stylesheet" href="{{ asset('../lib/main.css') }}" />
  <script src="{{ asset('../lib/main.js') }}"></script>

  <script>

    document.addEventListener('DOMContentLoaded', function() {
      var calendarEl = document.getElementById('calendar');

      var calendar = new FullCalendar.Calendar(calendarEl, {

        headerToolbar: {
          left: 'prev,next today',
          center: 'title',
          right: 'dayGridMonth,timeGridWeek,timeGridDay,listYear'
        },



        displayEventTime: false, // don't show the time column in list view
        selectable: true,

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

    .imgPreview img {
        padding: 8px;
        max-width: 100%;
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
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style = "color:#53c653; padding:15px;">

    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/admin') }}" class="nav-link" style="font-size:17px;"><b>Home</b></a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ ('homepost') }}" class="nav-link" style="font-size:17px;"><b>Event Page</b></a>
      </li>

    </ul>

  </nav>
  <!-- /.navbar -->






  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style = "background-color:#206020;">
    <!-- Brand Logo -->
    <a href="{{ url('/admin') }}" class="brand-link">
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
          <li class="nav-header"><strong>ADMINISTRATION</strong></li>

        <li class="nav-item">
          <a href="{{ ('create') }}" class="nav-link">
            <i class="fas fa-pen-square nav-icon"></i>
            <p><b>Create Event</b></p>
          </a>
        </li>

        <li class="nav-item has-treeview">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-week"></i>
            <p>
              Events
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">

            <li class="nav-item">
              <a href="{{ ('viewevent') }}" class="nav-link">
                <i class="fas fa-calendar-day nav-icon"></i>
                <p>Created Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ ('approvedevents') }}" class="nav-link">
                <i class="far fa-calendar-check nav-icon"></i>
                <p>Approved Events</p>
              </a>
            </li>


            <li class="nav-item">
              <a href="{{ ('postedevent') }}" class="nav-link">
                <i class="fas fa-calendar-check nav-icon"></i>
                <p>Posted Events</p>
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
                <a href="{{ ('uploadevaluation') }}" class="nav-link">
                  <i class="far fa-sticky-note nav-icon"></i>
                  <p>Upload Evaluation</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('evaluationlink') }}" class="nav-link">
                  <i class="fas fa-sticky-note nav-icon"></i>
                  <p>Evaluated Events</p>
                </a>
              </li>

            </ul>
          </li>



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
                <a href="{{ ('addattendance') }}" class="nav-link">
                  <i class="fab fa-elementor nav-icon"></i>
                  <p>Event Attendance</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{ ('showattendance') }}" class="nav-link">
                  <i class="fas fa-user-edit nav-icon"></i>
                  <p>Event Attendees</p>
                </a>
              </li>


            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ ('viewusers') }}" class="nav-link">
                  <i class="fas fa-user-friends nav-icon"></i>
                  <p>View Users</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Gallery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{ ('gallerylink') }}" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>Upload Gallery Link</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('uploadedgallerylinks') }}" class="nav-link">
                  <i class="fa fa-file-image nav-icon"></i>
                  <p>Uploaded Links</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('gallery') }}" class="nav-link">
                  <i class="fa fa-file-image nav-icon"></i>
                  <p>Event Gallery</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-header">DOCUMENTATION</li>


          <li class="nav-item">
            <a href="{{ ('reports') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Reports</p>
            </a>
          </li>

          <li class="nav-header">OTHERS</li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                 <i class="nav-icon fas fa-sign-out-alt text-danger"></i>
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
    @yield('createcontent')
    @yield('questionnaire')
    @yield('showquestions')
    @yield('view')
    @yield('addorremove')
    @yield('addquestionnaire')
    @yield('atemplate')
    @yield('btemplate')
    @yield('editcontent')
    @yield('adminhome')
    @yield('survey')
    @yield('sampleholder')
    @yield('adminregistercontent')
    @yield('showquestionnaire')
    @yield('customquestionnaire')
    @yield('gallery')
    @yield('eventcontent')
    @yield('editpostcontent')
    @yield('registereventcontent')
    @yield('evaluationupload')
    @yield('uploadphotos')
    @yield('homepost')
    @yield('addstudent')
    @yield('reports')
    @yield('postcontent')
    @yield('gallerylink')






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




<!--<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js"></script> -->





<!-- ADD AND REMOVE INPUT FORM-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script></head>
<script type="text/javascript">
var index=0;
</script>










</body>
</html>

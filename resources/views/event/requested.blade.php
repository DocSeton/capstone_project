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
        <a href="{{ url('/admin') }}" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/events') }}" class="nav-link">Event Page</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


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

        <li class="nav-item">
          <a href="{{ ('create') }}" class="nav-link">
            <i class="fa fa-plus nav-icon"></i>
            <p><b>Create Event</b></p>
          </a>
        </li>

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
              <a href="{{ ('viewevent') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Created Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ ('approvedevents') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Approved Events</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ ('requested') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Verified Events</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ ('postedevent') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
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
                <i class="far fa-circle nav-icon"></i>
                <p>Upload Evaluation</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ ('evaluationlink') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
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
                <a href="{{ ('questionnaire') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Attendance</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ ('show') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Attendance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ ('showquestions') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Attendees</p>
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
                  <i class="far fa-circle nav-icon"></i>
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
                <a href="{{ ('gallery') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Department Events</p>
                </a>
              </li>

            </ul>
          </li>


          <li class="nav-header">DOCUMENTATION</li>


          <li class="nav-item">
            <a href="{{ ('admin') }}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Reports</p>
            </a>
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


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">



          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Verified Events Table</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">

                <thead>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Duration Start</th>
                  <th>Duration End</th>
                  <th>Time Start</th>
                  <th>Time End</th>
                  <th>Venue</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Event Status</th>
                <!--  <th>View</th>   -->
                  <th>Post</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($events as $event)
                <tr>
                  <td id = "id" value = "{{ $event->id }}">{{ $event->id }}</td>
                  <td id = "title" value = "{{ $event->title }}">{{ $event->title }}</td>
                  <td id = "description" value = "{{ $event->description }}">{{ $event->description }}</td>
                  <td id = "date" value = "{{ $event->date_from }}">{{ $event->date_from }}</td>
                  <td id = "date" value = "{{ $event->date_to }}">{{ $event->date_to }}</td>
                  <td id = "time_start" value = "{{ $event->time_start }}">{{ $event->time_start }}</td>
                  <td id = "time_end" value = "{{ $event->time_end }}">{{ $event->time_end }}</td>
                  <td id = "venue" value = "{{ $event->venue }}">{{ $event->venue }}</td>
                  <td id = "created_at" value = "{{ $event->created_at }}">{{ $event->created_at }}</td>
                  <td id = "updated_at" value = "{{ $event->updated_at }}">{{ $event->updated_at }}</td>
                  <td id = "status" value = "{{ $event->status }}">{{ $event->status }}</td>
<!-- View Modal
                  <td><a href="#" class = "btn btn-primary" data-toggle="modal" data-target="#myModalview-{{ $event->id }}">View</a>

                    <div id="myModalview-{{ $event->id }}" class="modal fade" role="dialog">
                      <div class="modal-dialog">


                      <div class="modal-content">
                        <div class="modal-header">
                          <h4><strong>Event Details</strong></h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>

                        </div>
                        <div class="modal-body">
                          <p>ID: <strong>{{ $event->id }}</strong></p>
                          <p>Title: <strong>{{ $event->title }}</strong></p>
                          <p>Description: <strong>{{ $event->description }}</strong></p>
                          <p>Duration Start: <strong>{{ $event->date_from }}</strong></p>
                          <p>Duration End: <strong>{{ $event->date_to }}</strong></p>
                          <p>Time Start: <strong>{{ $event->time_start }}</strong></p>
                          <p>Time End: <strong>{{ $event->time_end }}</strong></p>
                          <p>Venue: <strong>{{ $event->venue }}</strong></p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>

                      </div>
                    </div>
                  </td>
-->
                  <td><a href="{{ ('events') }}" class = "btn btn-success" >Post</a></td>
                </tr>
                @endforeach
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Duration Start</th>
                    <th>Duration End</th>
                    <th>Time Start</th>
                    <th>Time End</th>
                    <th>Venue</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Event Status</th>
          <!--          <th>View</th>     -->
                    <th>Post</th>

                  </tr>
                </tfoot>


              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
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
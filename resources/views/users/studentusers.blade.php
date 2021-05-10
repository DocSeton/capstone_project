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
        <a href="{{ url('/superadmin') }}" class="nav-link">Home</a>
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


    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Student Users Table</h3>
            </div>
            <br>
          <div style = "text-align:center;">
            <h3>Users</h3>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Role</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Department</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>{{ $user->id }}</td>
                  <td>{{ $user->role }}</td>
                  <td>{{ $user->name }} {{ $user->middlename }} {{ $user->lastname }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->department }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
                  <td><a href="{{ route('users.edit',[$user->id]) }}" class = "btn btn-outline-success">Change Role</a></td>

                  <!-- Delete Modal -->
                  <td><a href="#" class = "btn btn-outline-danger" data-toggle="modal" data-target="#myModaldelete-{{ $user->id }}">Delete</a>
                      <div id="myModaldelete-{{ $user->id }}" class="modal fade" role="dialog">
                          <div class="modal-dialog">


                            <div class="modal-content">
                              <div class="modal-header">
                                  <h3><strong>Are you sure you want to delete this user?</strong></h3>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                            <div class="modal-body">

                                <strong>ID:</strong> <input type="text" name="id" value="{{ $user->id }}" class = "form-control">
                                <strong>Name:</strong> <input type="text" name="name" value="{{ $user->name }} {{ $user->middlename }} {{ $user->lastname }}" class = "form-control">
                                <strong>Email:</strong> <input type="text" name="email" value="{{ $user->email }}" class = "form-control">
                                <strong>Password:</strong> <input type="text" name="password" value="{{ $user->password }}" class = "form-control">
                                <strong>Role:</strong> <input type="text" name="role" value="{{ $user->role }}" class = "form-control">
                                <strong>Department:</strong> <input type="text" name="department" value="{{ $user->department }}" class = "form-control">
                                <strong>Created_at:</strong> <input type="text" name="created_at" value="{{ $user->created_at }}" class = "form-control">
                                <strong>Updated_at:</strong> <input type="text" name="updated_at" value="{{ $user->updated_at }}" class = "form-control">
                                <br>
                                <a href="{{ route('user.delete',$user->id) }}" class="btn btn btn-danger" style = "margin-left:320px;">Delete</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                            </div>

                            </div>

                          </div>
                        </div>
                    </td>
                  <!-- Delete Modal End -->

                </tr>
                @endforeach
                <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Role</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
                    <th>Action</th>
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
<script src="{{ asset('}plugins/moment/moment.min.js') }}"></script>
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

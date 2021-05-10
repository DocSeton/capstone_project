@extends('layouts.superadmin')

@section('adminusers')


<div class="container-fluid">

  <div class="row">

    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <a href="{{ ('eventall') }}" style="color:#000000;">
      <div class="info-box">
        <span class="info-box-icon bg-primary"><i class="far fa-calendar"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Events</span>
          <span class="info-box-number">{{ count($event) }}</span>
        </div>

        <!-- /.info-box-content -->
      </div>
      </a>
      <!-- /.info-box -->
    </div>

    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <a href="{{ ('request') }}" style="color:#000000;">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="far fa-check-square"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pending Events</span>
          <span class="info-box-number">{{ count($created) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      </a>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->



    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <a href="{{ ('approved') }}" style="color:#000000;">
      <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-check-square"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Approved Events</span>
          <span class="info-box-number">{{ count($approved) }}</span>
        </div>
        <!-- /.info-box-content -->
      </div>
    </a>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->




    <div class="col-md-3 col-sm-6 col-12">
      <a href="{{ ('studentusers') }}" style="color:#000000;">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>

        <div class="info-box-content">

          <span class="info-box-text">Student Users</span>
          <span class="info-box-number">{{ count($user) }}</span>

        </div>

      </div>
    </a>
    </div>


    <div class="col-md-3 col-sm-6 col-12">
      <a href="{{ ('adminusers') }}" style="color:#000000;">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>

        <div class="info-box-content">

          <span class="info-box-text">Admin Users</span>
          <span class="info-box-number">{{ count($adminuser) }}</span>

        </div>

      </div>
      </a>
    </div>








<!-- ADMINS -->

<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;background-color:#87986a;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center;">
                      <h2>COLLEGE ADMINS</h2>
                    </div>


                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display: block;">

                    <div class="row">

                      @foreach($admin as $admin)
                        <!-- /.col -->
                        <div class="col-md-4">
                          <a href="{{ ('adminusers') }}" style="color:#000000;">
                          <!-- Widget: user widget style 1 -->
                          <div class="card card-widget widget-user">
                            <!-- Add the bg color to the header using any of the bg-* classes -->
                            <div class="widget-user-header" style="background-color:#cfe1b9;">
                              <h3 class="widget-user-username">{{ $admin->department }}</h3>
                              <h5 class="widget-user-desc"></h5>

                            </div>
                            <div class="widget-user-image">
                              <img class="img-circle elevation-2" src="../dist/img/admin.jpg" alt="User Avatar">
                            </div>
                            <div class="card-footer">
                              <div class="row">

                                <div class="col-sm-12">
                                  <div class="description-block">
                                    <h5 class="description-header">{{ $admin->name }} {{ $admin->middlename }} {{ $admin->lastname }}</h5>
                                    <span class="description-text">{{ $admin->role }}</span>
                                  </div>
                                  <!-- /.description-block -->
                                </div>


                              </div>
                              <!-- /.row -->
                            </div>
                          </div>
                          <!-- /.widget-user -->
                          </a>
                        </div>
                      @endforeach
                    </div>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
</div>







</div>

</div>




<!--
<div class="card">

  <div class="card-body">
      <div id='calendar' class="calendarbody"></div>
  </div>

</div>
-->

@endsection

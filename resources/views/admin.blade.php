@extends('layouts.admin')

@section('content')




<div class="container-fluid">

  <div class="row">



    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <a href="{{ ('viewevent') }}" style="text-decoration:none;color:#000000;">
      <div class="info-box">
        <span class="info-box-icon bg-primary"><i class="far fa-calendar"></i></span>


        <div class="info-box-content">
          <span class="info-box-text">Events</span>
          <span class="info-box-number">{{ count($approved) }}</span>
        </div>

        <!-- /.info-box-content -->
      </div>
      </a>
      <!-- /.info-box -->
    </div>

    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <a href="{{ ('viewevent') }}" style="text-decoration:none;color:#000000;">
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
      <a href="{{ ('approvedevents') }}" style="text-decoration:none;color:#000000;">
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
      <a href="{{ ('viewusers') }}" style="text-decoration:none;color:#000000;">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-user"></i></span>

        <div class="info-box-content">

          <span class="info-box-text">Users</span>
          <span class="info-box-number">{{ count($user) }}</span>

        </div>

        <!-- /.info-box-content -->
      </div>
      </a>
      <!-- /.info-box -->
    </div>






  </div>
  <!-- /.row -->

</div>



<!--
<div class="card">

  <div class="card-body">
      <div id='calendar' class="calendarbody"></div>
  </div>

</div>

-->

<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#1b4332;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h3>ONGOING EVENTS</h3>
                    </div>


                  </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="display: block;">

                    <div class="row">
                      @foreach($approved as $approved)
                      @if($current->toDateString() >= $approved->date_from && $current->toDateString() <=  $approved->date_to)
                      <div class="col-md-4">
                        <!-- Widget: user widget style 2 -->
                        <div class="card card-widget widget-user-2">
                          <!-- Add the bg color to the header using any of the bg-* classes -->
                          <div class="widget-user-header" style="background-color:#d8f3dc;">
                            <div class="widget-user-image">
                              <img class="img-circle elevation-2" src="../dist/img/admin.jpg" alt="User Avatar">
                            </div>
                            <!-- /.widget-user-image -->
                            <h3 class="widget-user-username">{{ $approved->title }}</h3>
                            <h5 class="widget-user-desc">{{ $approved->author }}</h5>
                          </div>
                          <div class="card-footer p-0">
                            <ul class="nav flex-column">
                              <li class="nav-item">
                                <a href="{{ ('requested') }}" class="nav-link" style="color:#000000;">
                                  <div class="">
                                    Duration <span class="float-right badge">{{ $approved->date_from }} - {{ $approved->date_from }}</span>
                                  </div>
                                  <div class="">
                                    Time <span class="float-right badge">{{ $approved->time_start }} - {{ $approved->time_end }}</span>
                                  </div>
                                  <div class="">
                                    Venue <span class="float-right badge">{{ $approved->venue }}</span>
                                  </div>

                                </a>
                              </li>

                            </ul>
                          </div>
                        </div>
                        <!-- /.widget-user -->
                      </div>
                      @else

                      @endif
                      @endforeach

                    </div>

                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
</div>





<!-- APPROVED EVENT -->

<div class="col-md-12">
                       <div class="card card-success">
                         <div class="card-header" style="text-align:center;background-color:#2d6a4f;">
                           <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                             </button>
                           </div>
                           <div class="" style="text-align:center;">
                             <h3>APPROVED EVENTS</h3>
                           </div>


                         </div>
                         <!-- /.card-header -->
                         <div class="card-body" style="display: block;">

                           <div class="row">

                             @foreach($approved2 as $approved)


                             <div class="col-md-4">
                               <!-- Widget: user widget style 2 -->
                               <div class="card card-widget widget-user-2">
                                 <!-- Add the bg color to the header using any of the bg-* classes -->
                                 <div class="widget-user-header" style="background-color:#95d5b2;">
                                   <div class="widget-user-image">
                                     <img class="img-circle elevation-2" src="../dist/img/admin.jpg" alt="User Avatar">
                                   </div>
                                   <!-- /.widget-user-image -->
                                   <h3 class="widget-user-username">{{ $approved->title }}</h3>
                                   <h5 class="widget-user-desc">{{ $approved->author }}</h5>
                                 </div>
                                 <div class="card-footer p-0">
                                   <ul class="nav flex-column">
                                     <li class="nav-item">
                                       <a href="{{ ('eventall') }}" class="nav-link" style="color:#000000;">
                                         <div class="">
                                           Duration <span class="float-right badge">{{ $approved->date_from }} - {{ $approved->date_from }}</span>
                                         </div>
                                         <div class="">
                                           Time <span class="float-right badge">{{ $approved->time_start }} - {{ $approved->time_end }}</span>
                                         </div>
                                         <div class="">
                                           Venue <span class="float-right badge">{{ $approved->venue }}</span>
                                         </div>

                                       </a>
                                     </li>

                                   </ul>
                                 </div>
                               </div>
                               <!-- /.widget-user -->
                             </div>

                             @endforeach

                           </div>

                         </div>
                         <!-- /.card-body -->
                       </div>
                       <!-- /.card -->
</div>



<!-- PENDING EVENT -->

<div class="col-md-12">
                       <div class="card card-success">
                         <div class="card-header" style="text-align:center;color:#dddf00; background-color:#2d6a4f;">
                           <div class="card-tools">
                             <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                             </button>
                           </div>
                           <div class="" style="text-align:center;">
                             <h3>PENDING FOR APPROVAL</h3>
                           </div>


                         </div>
                         <!-- /.card-header -->
                         <div class="card-body" style="display: block;">


                           <div class="row">

                             @foreach($created as $created)


                             <div class="col-md-4">
                               <!-- Widget: user widget style 2 -->
                               <div class="card card-widget widget-user-2">
                                 <!-- Add the bg color to the header using any of the bg-* classes -->
                                 <div class="widget-user-header" style="background-color:#b7e4c7;">
                                   <div class="widget-user-image">
                                     <img class="img-circle elevation-2" src="../dist/img/admin.jpg" alt="User Avatar">
                                   </div>
                                   <!-- /.widget-user-image -->
                                   <h3 class="widget-user-username">{{ $created->title }}</h3>
                                   <h5 class="widget-user-desc">{{ $created->author }}</h5>
                                 </div>
                                 <div class="card-footer p-0">
                                   <ul class="nav flex-column">
                                     <li class="nav-item">
                                       <a href="{{ ('request') }}" class="nav-link" style="color:#000000;">
                                         <div class="">
                                           Duration <span class="float-right badge">{{ $created->date_from }} - {{ $created->date_from }}</span>
                                         </div>
                                         <div class="">
                                           Time <span class="float-right badge">{{ $created->time_start }} - {{ $created->time_end }}</span>
                                         </div>
                                         <div class="">
                                           Venue <span class="float-right badge">{{ $created->venue }}</span>
                                         </div>

                                       </a>
                                     </li>

                                   </ul>
                                 </div>
                               </div>
                               <!-- /.widget-user -->
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


</div>



@endsection

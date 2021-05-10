@extends('layouts.admin')

@section('reports')

<div class="container-fluid">

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">

        <div class="card">

          <!-- Alert message (start) -->
            @if(Session::has('message'))
            <div class="alert {{ Session::get('alert-class') }}">
               {{ Session::get('message') }}
            </div>
            @endif
          <!-- Alert message (end) -->

          <div class="card-header">
            <h4>
              <i class="fas fa-file-invoice"></i> {{ Auth::user()->department }} Summary Reports
              <small class="float-right">Date: {{ $current->toDateString() }}</small>
            </h4>

            <div class="row invoice-info">
              <!-- /.col -->
              <div class="col-sm-4 invoice-col">
                <br>
                <b>College: </b>{{ Auth::user()->department }}<br>
                <b>Officer Name: </b>{{ Auth::user()->name }}<br>
                <b>Officer ID:</b> {{ Auth::user()->id }}<br>
                <b>Role:</b> {{ Auth::user()->role }}<br>
              </div>
              <!-- /.col -->



            </div>


          </div>
          <div class="">
          <p>     </p>
          </div>



          <div class="card-body">

            <div class="card" id="approve">

              <div class="card-header" style="background-color:#FFFFFF;">

                <div style="float:right;">
                  <a href=""  class="btn btn-default" onclick="printDiv()"><i class="fa fa-print"></i> Print</a>
                </div>

                <h4 style="text-align:center;">Approved Events</h4>
              </div>

              <div class="container-fluid">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>

                    <th>Events</th>
                    <th>Author</th>
                    <th>Duration</th>
                    <th>Venue</th>

                  </tr>
                  </thead>

                  <tbody>
                  @foreach ($reports as $reports)
                  <tr>


                    <td id = "title" value = "{{ $reports->title }}">{{ $reports->title }}</td>
                    <td id = "author" value = "{{ $reports->author }}">{{ $reports->author }}</td>
                    <td id = "duration" value = "{{ $reports->date_from }} - {{ $reports->date_to }}">{{ date('m-d-Y', strtotime($reports->date_from)) }} - {{ date('m-d-Y', strtotime($reports->date_to)) }}</td>
                    <td id = "venue" value = "{{ $reports->venue }}">{{ $reports->venue }}</td>


                  </tr>
                  @endforeach



                </tbody>

                <tfoot>

                  <tr>

                    <th>Total Events</th>
                    <th></th>
                    <th></th>
                    <th>{{ count($reports2) }}</th>

                  </tr>

                </tfoot>


                </table>
              </div>


            </div>


            <br>


            <div class="card" id="student">

              <div class="card-header" style="background-color:#FFFFFF;">

                <div style="float:right;">
                  <a href=""   class="btn btn-default" onclick="printDiv2()"><i class="fa fa-print"></i> Print</a>
                </div>

                <h4 style="text-align:center;">College Student Users</h4>
              </div>

              <div class="container-fluid">
                <table id="example1" class="table table-bordered table-striped">

                  <thead>
                  <tr>

                    <th>Name</th>
                    <th>Role</th>

                  </tr>
                  </thead>

                  <tbody>
                    @foreach ($eventusers as $eventusers)
                    <tr>

                      <td id = "title" value = "{{ $eventusers->name }}">{{ $eventusers->name }} {{ $eventusers->middlename }} {{ $eventusers->lastname }}</td>
                      <td id = "role" value = "{{ $eventusers->role }}">{{ $eventusers->role }}</td>

                    </tr>
                    @endforeach



                </tbody>

                <tfoot>

                  <tr>

                    <th>Total Users</th>
                    <th>{{ count($eventusers2) }}</th>

                  </tr>

                </tfoot>


                </table>
              </div>


            </div>



          <br>

                        <div class="card" id="registration">

                          <div class="card-header" style="background-color:#FFFFFF;">

                            <div style="float:right;">
                              <a href=""   class="btn btn-default" onclick="printDiv3()"><i class="fa fa-print"></i> Print</a>
                            </div>

                            <h4 style="text-align:center;">Event Registrations</h4>
                          </div>

                          <div class="container-fluid">
                            <table id="example1" class="table table-bordered table-striped">

                              <thead>
                              <tr>

                                <th>Event</th>
                                <th>Student User</th>

                              </tr>
                              </thead>

                              <tbody>
                                @foreach ($registered as $registered)
                                <tr>

                                  <td id = "event" value = "{{ $registered->event }}">{{ $registered->event }}</td>
                                  <td id = "user" value = "{{ $registered->user }}">{{ $registered->user }}</td>

                                </tr>
                                @endforeach



                            </tbody>

                            <tfoot>
                              <tr>

                                <th>Total Registrations</th>
                                <th>{{ count($registered2) }}</th>

                              </tr>
                            </tfoot>

                            </table>
                          </div>


                        </div>

          <br>



<!-- LOOP -->
  @foreach ($attendance as $attendance)
                        <div class="card" id="attendance">

                          <div class="card-header" style="background-color:#FFFFFF;">

                            <div style="float:right;">
                              <a href=""  class="btn btn-default" onclick="printDiv4()"><i class="fa fa-print"></i> Print</a>
                            </div>

                            <h4 style="text-align:center;">{{ $attendance->title }} Attendance</h4>
                          </div>

                          <div class="container-fluid">
                            <table id="example1" class="table table-bordered table-striped">

                              <thead>
                              <tr>


                                <th>Attendee</th>
                                <th>Department</th>
                                <th>Duration</th>
                                <th>Event Time</th>
                                <th>Time-In / Time-Out</th>


                              </tr>
                              </thead>

                              <tbody>

                              <tr>



                                <td id = "attendee" value = "{{ $attendance->attendee }}">{{ $attendance->attendee }}</td>
                                <td id = "department" value = "{{ $attendance->department }}">{{ $attendance->department }}</td>
                                <td id = "duration" value = "{{ $attendance->duration }}">{{ $attendance->duration }}</td>
                                <td id = "department" value = "{{ $attendance->time_start }} - {{ $attendance->time_start }}">{{ $attendance->time_start }} - {{ $attendance->time_end }}</td>
                                <td id = "in_or_out" value = "{{ $attendance->in_or_out }}">{{ $attendance->in_or_out }}</td>


                              </tr>




                            </tbody>

                            <tfoot>
  <!--
                                                          <tr>

                                                            <th>Total Attendance</th>
                                                            <th></th>
                                                            <th></th>
                                                            <th></th>
                                                            <th>{{ count($attendance2) }}</th>

                                                          </tr>
  -->
                            </tfoot>


                            </table>
                          </div>


                        </div>

  @endforeach

<!-- LOOP -->
<hr>

                        <div>
                          <a href="javascript:window.print();" class="btn btn-default btn-block" style="border: 2px solid #b3b3b3;"><i class="fa fa-print"></i> Print Reports</a>
                        </div>





          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>








</div>


@endsection

@extends('layouts.admin')

@section('addstudent')


<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
  <div class="" style="text-align:center;">
    <h5><i class="icon fas fa-ban"></i> WARNING!</h5>
    <b>You are currently doing a restricted action that disables links. Click "Go Back" or "Cancel" to return/cancel your operation</b>
  </div>

</div>

<div class="container">


    <div class="card">
      <!-- small box -->

          <!-- Alert message (start) -->
          @if(Session::has('message'))
          <div class="alert {{ Session::get('alert-class') }}">
             {{ Session::get('message') }}
          </div>
          @endif
          <!-- Alert message (end) -->

          <div class="card-header">
            <div class="" style = "text-align:center; color:#00cc00;">
              <a href="{{ URL::previous() }}" class="btn btn-default" style="float:right;border: 2px solid #b3b3b3;">Go Back</a>
                <h3>Add Attendance</h3>
            </div>
        <div class="card-body">
          <form action="{{route('attendance.addstudentattendance',[$events->id])}}" method="post">
            @csrf

            <div class="form-group">
                <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">

                @error('author')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>



            <div class="form-group">
              <label for="usr">Title</label>
                <input type="text" class="form-control  @error('title') is-invalid @enderror" name = "title" placeholder="Add a Title" id = "title" value="{{old('title',$events->title)}}">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>


            <div class="form-group">
              <label for="usr">College</label>
                <input type="text" class="form-control  @error('department') is-invalid @enderror" name = "department" id = "department" value="{{old('department',$events->department)}}">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>


            <div class="form-group">
              <label for="usr">Duration</label>
                <input type="text" class="form-control  @error('duration') is-invalid @enderror" name = "duration" id = "duration" value="{{old('date_from',$events->date_from)}} - {{old('date_to',$events->date_to)}}">

                @error('duration')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>


            <div class="form-group">
              <label for="usr">Time start</label>
                <input type="time" class="form-control @error('time_start') is-invalid @enderror" name = "time_start" id = "time_start" value="{{old('time_start',$events->time_start)}}">

                @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr">Time end</label>
                <input type="time" class="form-control @error('time_end') is-invalid @enderror" name = "time_end" id = "time_end" value="{{old('time_end',$events->time_end)}}">

                @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr">Venue</label>
                <input type="venue" class="form-control @error('venue') is-invalid @enderror" name = "venue" id = "venue" value="{{old('venue',$events->venue)}}">

                @error('venue')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="in_or_out">Time In / Time Out</label>

              <select class="form-control" name="in_or_out">
                <option selected disabled>Select an option</option>

                <option value="Time In">Time In</option>
                <option value="Time Out">Time Out</option>

              </select>

                @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>



            <div class="form-group">

                <input type="hidden" class="form-control @error('attendee_attendance_status') is-invalid @enderror" name = "attendee_attendance_status" id = "attendee_attendance_status" value="Present">

                @error('attendee_attendance_status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label>{{ __('User Attendance') }}</label>

                  <select class="form-control" name="attendee">
                    <option selected disabled>Select Student</option>
                    @foreach($user as $users)
                    <option value="{{ $users->name }}">{{ $users->name }}</option>
                    @endforeach
                  </select>


                    @error('status')
                        <span class="invalid-feedback" status="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>

<hr>


          <div class="form-group"  style="text-align:center;">
            <button type="submit" class="btn btn-success btn-block">Add</button>
          </div>

          <div class="form-group"  style="text-align:center;">
            <a href="{{ URL::previous() }}" class="btn btn-default btn-block" style="border: 2px solid #b3b3b3;">Cancel</a>
          </div>


          </form>
        </div>







    </div>



</div>

@endsection

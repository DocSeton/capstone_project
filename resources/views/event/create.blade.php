@extends('layouts.admin')

@section('createcontent')

<div class="container">


    <div class="card" style="padding:15px;">
      <!-- small box -->

          <!-- Alert message (start) -->
          @if(Session::has('message'))
          <div class="alert {{ Session::get('alert-class') }}">
             {{ Session::get('message') }}
          </div>
          @endif
          <!-- Alert message (end) -->


        <div class="card-header" style="background-color:#FFFFFF; padding:20px;">
          <div class="" style = "text-align:center; color:#00b33c;">
              <h2>Create Event</h2>
          </div>

        </div>
        <div class="card-body">
          <form action="/addevent" method="post" enctype="multipart/form-data">
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
                <input type="hidden" class="form-control  @error('department') is-invalid @enderror" name = "department" id = "department" value="{{ Auth::user()->department }}">

                @error('department')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <input type="hidden" class="form-control  @error('status') is-invalid @enderror" name = "status" id = "status" value="Created">

                @error('status')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>



            <div class="form-group">
              <label for="usr" style="color:#00cc00;">Title</label>
                <input type="text" class="form-control  @error('title') is-invalid @enderror" name = "title" placeholder="Add a Title" id = "title" value="{{ old('title') }}">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>



            <div class="form-group">
              <label for="comment" style="color:#00cc00;">Description</label>
              <textarea class="form-control @error('description') is-invalid @enderror" rows="5" name = "description" placeholder="Add a Description" id = "description" value="{{ old('description') }}"></textarea>

              @error('description')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

            <div class="form-group">
              <label for="usr" style="color:#00cc00;">Date: (Duration start)</label>
                <input type="date" class="form-control @error('date_from') is-invalid @enderror" name = "date_from" id = "date_from" value="{{ old('date_from') }}">

                @error('date_from')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr" style="color:#00cc00;">Date: (Duration end)</label>
                <input type="date" class="form-control @error('date_to') is-invalid @enderror" name = "date_to" id = "date_to" value="{{ old('date_to') }}">

                @error('date_to')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr" style="color:#00cc00;">Time (Start)</label>
                <input type="time" class="form-control @error('time_start') is-invalid @enderror" name = "time_start" id = "time_start" value="{{ old('time_start') }}">

                @error('time_start')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr" style="color:#00cc00;">Time (End)</label>
                <input type="time" class="form-control @error('time_end') is-invalid @enderror" name = "time_end" id = "time_start" value="{{ old('time_end') }}">

                @error('time_end')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr" style="color:#00cc00;">Venue</label>
                <input type="text" class="form-control @error('venue') is-invalid @enderror" name = "venue" placeholder="Add a Venue" id = "venue" value="{{ old('venue') }}">

                @error('venue')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr" style="color:#00cc00;">With Attendance? Yes/No</label>
              <select class="form-control" name="attendance_status" id="attendance_status">
                <option selected disabled>Choose whether your event has an attendance</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
              </select>
                @error('venue')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <hr>
            <br>
            <div class="form-group">
              <button type="submit" class="btn btn-success btn-block" style="border-radius: 20px;">Create</button>
            </div>

            </div>
          </form>
        </div>

    </div>

<br>


</div>
@endsection

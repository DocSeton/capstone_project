@extends('layouts.admin')

@section('questionnaire')

<div class="container">
  <div class="card">

    <div class="card-header"><h2>Create Attendance</h2></div>

    <div class="card-body">

      <form action="/questionnaire" method="post">
        <!-- Don't forget CSRF on every FORM to avoid PAGE EXPIRATION -->
        @csrf

        <div class="form-group">
            <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">
        </div>




        <div class="form-group">
            <label for="title">Title</label>
              <input name = "title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter purpose" value="{{ old('title') }}">
              <small id="titleHelp" class="form-text text-muted">Give your Attendance a purpose.</small>

              @error('title')
                <small class = "text-danger">{{ $message }}</small>
              @enderror
        </div>

        <div class="form-group">
            <label for="event">Event</label>
            <select class="form-control" name="event" aria-describedby="eventHelp">
              <option selected disabled>Select an event</option>
              @foreach($events as $event)
                <option value="{{ $event->title }}">{{ $event->title }}</option>
              @endforeach
            </select>
            <small id="eventHelp" class="form-text text-muted">Choose an event for your questionnaire.</small>

            @error('event')
              <small class = "text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div style = "text-align:center;">
              <button type="submit" class="btn btn-outline-success">Create Attendance</button>
        </div>


      </form>

    </div>



  </div>
</div>




@endsection

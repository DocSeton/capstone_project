@extends('layouts.admin')

@section('evaluationupload')

<div class="container">
  <div class="card">

    <div class="card-header">
      <div class="" style="text-align:center;">
              <h2 style="color:#2eb82e;">Upload Evaluated Events</h2>
      </div>

    </div>

    <div class="card-body">

      <form action="/uploadevaluation" method="post">
        <!-- Don't forget CSRF on every FORM to avoid PAGE EXPIRATION -->
        @csrf

        <div class="form-group">
            <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">
        </div>


        <div class="form-group">
            <label for="title">Link</label>
              <input name = "link" type="text" class="form-control" id="link" aria-describedby="linkHelp" placeholder="Paste link" value="{{ old('link') }}">

              <small id="linkHelp" class="form-text" style="color:tomato;">Note: Paste your evaluated evaluation link here that you created. If you haven't made one just click <a href="https://www.google.com/forms/about/" target="_blank" >here.</a> </small>

              @error('link')
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
            <small id="eventHelp" class="form-text text-muted">Choose the evaluated event.</small>

            @error('event')
              <small class = "text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div style = "text-align:center;">
              <button type="submit" class="btn btn-success btn-block">Upload</button>
        </div>


      </form>

    </div>



  </div>
</div>




@endsection

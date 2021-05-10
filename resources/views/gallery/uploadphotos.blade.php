@extends('layouts.admin')

@section('uploadphotos')

<div class="container">

  <div class="card">

    <div class="card-header"><h2>Upload Event Photos</h2></div>

    <div class="card-body">

      <form action="/uploadphotos" method="post" enctype="multipart/form-data">

        @csrf

        <div class="form-group">
            <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control  @error('department') is-invalid @enderror" name = "department" id = "department" value="{{ Auth::user()->department }}">
        </div>

        <div class="form-group custom-file">
            <input type="file" name="imageFile[]" class="custom-file-input" id="images" multiple="multiple">
            <label class="custom-file-label" for="images">Choose image</label>
        </div>


        <div class="form-group">
            <label for="event">Event</label>
            <select class="form-control" name="event" aria-describedby="eventHelp">
              <option selected disabled>Select an event</option>

                <option value="1">1</option>

            </select>
            <small id="eventHelp" class="form-text text-muted">Choose an event.</small>

            @error('event')
              <small class = "text-danger">{{ $message }}</small>
            @enderror
        </div>




        <div style = "text-align:center;">
              <button type="submit" class="btn btn-outline-success">Upload</button>
        </div>


      </form>

    </div>



  </div>
</div>




@endsection

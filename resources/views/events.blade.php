@extends('layouts.admin')

@section('eventcontent')


<div class="container">
  <div class="col-md-12 mb-5">

    <!-- Alert message (start) -->
      @if(Session::has('message'))
      <div class="alert {{ Session::get('alert-class') }}">
         {{ Session::get('message') }}
      </div>
      @endif
    <!-- Alert message (end) -->



<div class="card" style="padding: 15px; box-shadow: 0 1px 5px rgb(194, 193, 193);">

  <div class="card-header" style=" background-color:#FFFFFF;color:#00cc00;">
    <div style = "text-align:center;">
        <h2>Post Event</h2>
    </div>
  </div>


  <div class="card-body">


    <div class="card"  style="padding: 15px; box-shadow: 0 1px 5px rgb(194, 193, 193);">

      <div class="form-group" >

        <div class="col-md-12">
          <div class="user-block">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" style="height:40px; weight:40px; margin-bottom:10px; float:left;">
            <span class="username"><a href="#">{{ Auth::user()->name }}</a></span>
            <span class="description">{{ $current->toTimeString() }} | {{ $current->toDateString() }}</span>
            <span class="description"></span>
          </div>
          <br>
              <hr style="margin-top:20px;">
        </div>
      </div>


  <form action="/events" method = "POST" enctype="multipart/form-data">

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
    <input type="hidden" id="department" name = "department" class="form-control" value="{{ Auth::user()->department }}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
  </div>




    <div class="form-group">
      <label for="event">Event</label>
      <select class="form-control" name="event">
        <option selected disabled>Choose an approved event to post</option>
        @foreach($postevent as $post)
        <option value="{{ $post->title }}">{{ $post->title }}</option>
        @endforeach
      </select>
    </div>

  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" id="title" name = "title" class="form-control @error('title') is-invalid @enderror" style="margin-top:10px; border-radius:20px;background-color:#ebfaeb;" placeholder="Add a title to your post">

    @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

  </div>

  <div class="form-group">
    <label for="link">Evaluation link</label>
    <input type="text" id="link" name="link" class="form-control" placeholder="Evaluation link here"style="margin-top:10px;border-radius: 20px;background-color:#ebfaeb;">

  </div>




  <div class="form-group">
    <label for="event">Duration</label>
    <select class="form-control" name="duration">
      <option selected disabled>Event Duration</option>
      @foreach($postevent as $post)
      <option value="{{ $post->time_start }} - {{ $post->time_end }}">{{ $post->title }} - {{ $post->time_start }} - {{ $post->time_end }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="event">Date Start</label>
    <select class="form-control" name="date_from">
      <option selected disabled>Event Duration</option>
      @foreach($postevent as $post)
      <option value="{{ $post->date_from }}">{{ $post->title }} - {{ $post->date_from }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <label for="event">Date End</label>
    <select class="form-control" name="date_to">
      <option selected disabled>Event Duration</option>
      @foreach($postevent as $post)
      <option value="{{ $post->date_to }}">{{ $post->title }} - {{ $post->date_to }}</option>
      @endforeach
    </select>
  </div>


  <div class="form-group">
    <label for="event">Venue</label>
    <select class="form-control" name="venue">
      <option selected disabled>Event Venue</option>
      @foreach($postevent as $post)
      <option value="{{ $post->venue }}"> {{ $post->title }} - {{ $post->venue }}</option><b></b>
      @endforeach
    </select>
  </div>


  <hr>

  <div class="user-image mb-3 text-center">
      <div class="imgPreview"></div>
  </div>

  <label for="image">Event Photo/Poster</label>
  <div class="form-group custom-file">

      <input type="file" name="image" class="custom-file-input" id="image" multiple="multiple">
      <label class="custom-file-label" for="images">Choose an image/poster</label>
  </div>


  <div class="row form-group" style="margin-top:20px;">
    <div class="col-md-12" style="text-align:center;">
      <button type="submit" name = "upload" class="btn btn-success btn-block" style="border-radius: 20px;">Post</button>
    </div>
  </div>

  </form>

    </div>




  </div>




  </div>



  </div>

</div>



@endsection

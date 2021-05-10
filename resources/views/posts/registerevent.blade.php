@extends('layouts.home')

@section('registereventcontent')
<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
  <div class="" style="text-align:center;">
    <h5><i class="icon fas fa-ban"></i> WARNING!</h5>
    <b>You are currently doing a restricted action that disables links. Click "Go Back" or "Cancel" to return/cancel your operation</b>
  </div>

</div>

<div class="container">

@foreach($postevent as $post)

  <div class="card">
    <div class="container" style="padding: 15px; box-shadow: 0 1px 5px rgb(194, 193, 193);">

      <form action="{{route('posts.register',[$post->id])}}" method = "POST" enctype="multipart/form-data">
        @csrf

        <div class="card-header">
          <a href="{{ URL::previous() }}" class="btn btn-default" style="float:right;border: 2px solid #b3b3b3;">Go Back</a>
            <h2>Register to this event? </h2>
        </div>
        <div class="form-group">
            <button type="submit" name = "upload" class="btn btn-success btn-block"><i class="fas fa-share"></i>Register</button>
        </div>

        <div class="form-group"  style="text-align:center;">
          <a href="{{ URL::previous() }}" class="btn btn-default btn-block" style="border: 2px solid #b3b3b3;">Cancel</a>
        </div>


        <div class="form-group">
            <input type="hidden" class="form-control  @error('user') is-invalid @enderror" name = "user" id = "user" value="{{ Auth::user()->name }}">

            @error('user')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

        </div>

        <div class="form-group">
          <input type="hidden" id="status" name = "status" class="form-control" value="Registered" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
        </div>

        <div class="form-group">
          <input type="hidden" id="department" name = "department" class="form-control" value="{{ Auth::user()->department }}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
        </div>

        <div class="form-group">
          <input type="hidden" id="event" name = "event" class="form-control" value="{{old('title',$post->event)}}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
        </div>

        <div class="form-group">
          <input type="hidden" id="author" name = "author" class="form-control" value="{{old('author',$post->author)}}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
        </div>



        <div class="card card-widget">
              <div class="card-body">
                <h3>{{ $post->title }}</h3>
                <br>
                <h5>Event: <b style="color:#33cc33;">{{ $post->event }}</b></h5>
                <h5>Duration: <b style="color:#33cc33;">{{ date('m-d-Y', strtotime($post->date_from)) }} - {{ date('m-d-Y', strtotime($post->date_to)) }}</b></h5>
                <h5>Time: <b style="color:#33cc33;">{{ $post->duration }}</b></h5>
                <h5>Venue: <b style="color:#33cc33;">{{ $post->venue }}</b></h5>
                <br>
                <hr>
                <img class="img-fluid pad" src="{{ asset('storage/images/posts/'. $post->image) }}" alt="No current event photo">
                <hr>
              </div>
        </div>



      </form>

          </div>
    </div>

@endforeach

</div>


@endsection

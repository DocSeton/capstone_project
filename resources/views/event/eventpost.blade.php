@extends('layouts.admin')

@section('postcontent')

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

          <div class="card-header" style="background-color:#FFFFFF;">
            <div class="" style = "color:#00cc00;">
              <a href="{{ URL::previous() }}" class="btn btn-default" style="float:right;border: 2px solid #b3b3b3;">Go Back</a>
                <h3 style="text-align:center;">Post Event</h3>
            </div>
          </div>
        <div class="card-body">
          <form action="{{route('event.postingevent',[$events->id])}}" method="post" enctype="multipart/form-data">
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
                <input type="text" id="event" name = "event" class="form-control" value="{{old('title',$events->title)}}" style="  border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;color:#00cc00;font-size:25px;">
            </div>

            <div class="form-group">
              <input type="hidden" id="date_from" name = "date_from" class="form-control" value="{{old('date_from',$events->date_from)}}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
            </div>

            <div class="form-group">
              <input type="hidden" id="date_to" name = "date_to" class="form-control" value="{{old('date_to',$events->date_to)}}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
            </div>

            <div class="form-group">
              <input type="hidden" id="duration" name = "duration" class="form-control" value="{{old('time_start',$events->time_start)}} - {{old('end',$events->time_end)}}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
            </div>

            <div class="form-group">
              <input type="hidden" id="venue" name = "venue" class="form-control" value="{{old('venue',$events->venue)}}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
            </div>



            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" id="title" name = "title" class="form-control @error('title') is-invalid @enderror" style="margin-top:10px; border-radius:20px;" placeholder="Add a title to your post">

              @error('title')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

            <div class="form-group">
              <label for="link">Evaluation link</label>
              <input type="text" id="link" name="link" class="form-control" placeholder="Paste your evaluation link here"style="margin-top:10px;border-radius: 20px;background-color:#ebfaeb;" >
              <small class="w-100" style="color:tomato;">Note: The evaluation link must come from a survey creator site like google forms. If you haven't created yet, just click <a href="https://www.google.com/forms/about/" target="_blank">here.</a> </small>
            </div>





            <hr>

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"></div>
            </div>

            <label for="image">Event Photo/Poster</label>
            <div class="form-group custom-file">

                <input type="file" name="image" class="custom-file-input" id="image">
                <label class="custom-file-label" for="image">Choose an image/poster</label>
            </div>





            <div class="row form-group" style="margin-top:20px;">
              <div class="col-md-12" style="text-align:center;">
                <button type="submit" name = "upload" class="btn btn-success btn-block" style="border-radius: 20px;">Post</button>
              </div>
            </div>

            <div class="form-group"  style="text-align:center;">
              <a href="{{ URL::previous() }}" class="btn btn-default btn-block" style="border: 2px solid #b3b3b3;border-radius: 20px;">Cancel</a>
            </div>


          </form>
        </div>







    </div>



</div>

@endsection

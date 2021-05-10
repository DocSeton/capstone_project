@extends('layouts.admin')

@section('editcontent')

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
                <h3>Edit Gallery Link</h3>
            </div>
          </div>
        <div class="card-body">
          <form action="{{route('gallery.update',[$links->id])}}" method="post" enctype="multipart/form-data">
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
              <input type="hidden" id="college" name = "college" class="form-control" value="{{ Auth::user()->department }}" style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
            </div>



            <div class="form-group">
              <label for="event">Event</label>
                <input type="text" id="event" name = "event" class="form-control" value="{{old('title',$links->event)}}" style="  border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;color:#00cc00;">
            </div>

            <div class="form-group">

                <input type="hidden" id="description" name = "description" class="form-control" value="{{old('description',$links->description)}}" style="  border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;color:#00cc00;">
            </div>

            <div class="form-group">

                <input type="hidden" id="duration" name = "duration" class="form-control" value="{{old('duration',$links->duration)}}" style="  border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;color:#00cc00;">
            </div>

            <div class="form-group">

                <input type="hidden" id="time" name = "time" class="form-control" value="{{old('time',$links->time)}}" style="  border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;color:#00cc00;">
            </div>


            <div class="form-group">

              <input type="hidden" id="venue" name = "venue" class="form-control" value="{{old('venue',$links->venue)}}" style="  border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;color:#00cc00;">
            </div>



            <div class="form-group">
              <label for="link">Gallery Link</label>
              <input type="text" id="link" name="link" class="form-control @error('link') is-invalid @enderror" placeholder="Paste your gallery link here"style="margin-top:10px;border-radius: 20px;background-color:#ebfaeb;" >
              <small class="w-100" style="color:tomato;">Note: The gallery link must come from the official Facebook album of your college.</a> </small>

              @error('link')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>





            <hr>

            <div class="user-image mb-3 text-center">
                <div class="imgPreview"></div>
            </div>

            <label for="image">Gallery Poster</label>
            <div class="form-group custom-file">

                <input type="file" name="image" class="custom-file-input @error('image') is-invalid @enderror" id="image">
                <label class="custom-file-label" for="image">Choose an image/poster</label>

                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
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

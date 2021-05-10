@extends('layouts.admin')

@section('editpostcontent')

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

      <div class="card-header" style="background-color:#FFFFFF;">
        <a href="{{ URL::previous() }}" class="btn btn-default" style="float:right;border: 2px solid #b3b3b3;">Go Back</a>
      </div>



      <form action="{{route('posts.updatepost',[$post->id])}}" method = "POST" enctype="multipart/form-data">

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
          <label for="event">Event</label>
            <input type="text" id="event" name = "event" class="form-control" value="{{old('event',$post->event)}}" style="  border-top-style: hidden;border-right-style: hidden;border-left-style: hidden;border-bottom-style: hidden;color:#00cc00;font-size:25px;">
        </div>



        <div class="form-group">
          <input type="text" id="title" name = "title" class="form-control" value="{{old('title',$post->title)}}" placeholder="Add a title here, {{ Auth::user()->name }}"style="margin-top:10px; background-color: #f0f0f5; border-radius: 20px;">
        </div>

        <div class="form-group">
          <input type="text" id="link" name="link" class="form-control" value="{{old('title',$post->link)}}" placeholder="Evaluation link here"style="margin-top:10px; background-color: #ebfaeb; border-radius: 20px;">
        </div>

        <hr>

        <div class="user-image mb-3 text-center">
            <div class="imgPreview"></div>
        </div>


        <div class="form-group custom-file">
            <input type="file" name="image" class="custom-file-input" id="image" value="{{old('title',$post->image)}}">
            <label class="custom-file-label" for="images">Choose an image/poster</label>
        </div>
<hr>

        <div class="row form-group" style="margin-top:20px;">
          <div class="col-md-12" style="text-align:center;">
            <button type="submit" name = "upload" class="btn btn-success btn-block">Update</button>
          </div>
        </div>


        <div class="row form-group" style="margin-top:20px;">
          <div class="col-md-12" style="text-align:center;">
            <a href="{{ URL::previous() }}" class="btn btn-default btn-block" style="border: 2px solid #b3b3b3;">Cancel</a>
          </div>
        </div>

      </form>

          </div>
    </div>

@endforeach

</div>


@endsection

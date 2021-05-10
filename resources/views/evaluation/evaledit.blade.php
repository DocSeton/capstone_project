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

          <div class="card-header">
            <div class="" style = "text-align:center; color:#00cc00;">
                <a href="{{ URL::previous() }}" class="btn btn-default" style="float:right;border: 2px solid #b3b3b3;">Go Back</a>
                <h3>Edit Evaluation</h3>
            </div>
        <div class="card-body">
          <form action="{{route('link.update',[$events->id])}}" method="post">
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
              <label for="usr">Link</label>
                <input type="text" class="form-control  @error('link') is-invalid @enderror" name = "link"  id = "link" value="{{old('link',$events->link)}}">

                @error('link')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>



            <div class="form-group">
                <label for="event">Event</label>
                <select class="form-control" name="event" aria-describedby="eventHelp">
                  <option selected disabled>{{old('event',$events->event)}}</option>
                  @foreach($event as $events)
                    <option value="{{ $events->title }}">{{ $events->title }}</option>
                  @endforeach
                </select>
                <small id="eventHelp" class="form-text text-muted">Choose the event you evaluated.</small>

                @error('event')
                  <small class = "text-danger">{{ $message }}</small>
                @enderror
            </div>

<hr>

<div class="form-group"  style="text-align:center;">
  <button type="submit" class="btn btn-success btn-block">Update</button>
</div>

<div class="form-group"  style="text-align:center;">
  <a href="{{ URL::previous() }}" class="btn btn-default btn-block" style="border: 2px solid #b3b3b3;">Cancel</a>
</div>


          </form>
        </div>







    </div>



</div>

@endsection

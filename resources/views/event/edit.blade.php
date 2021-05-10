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
                <h3>Edit Event</h3>
            </div>
          </div>
        <div class="card-body">
          <form action="{{route('event.update',[$events->id])}}" method="post">
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
              <label for="usr">Title</label>
                <input type="text" class="form-control  @error('title') is-invalid @enderror" name = "title" placeholder="Add a Title" id = "title" value="{{old('title',$events->title)}}">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>



            <div class="form-group">
              <label for="comment">Description</label>
              <textarea class="form-control @error('description') is-invalid @enderror" rows="5" name = "description" placeholder="Add a Description" id = "description" value="{{old('description',$events->description)}}">{{old('description',$events->description)}}</textarea>

              @error('description')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

            <div class="form-group">
              <label for="usr">Date: (Duration start)</label>
                <input type="date" class="form-control @error('date_from') is-invalid @enderror" name = "date_from" id = "date_from" value="{{old('date_from',$events->date_from)}}">

                @error('date_from')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr">Date: (Duration end)</label>
                <input type="date" class="form-control @error('date_to') is-invalid @enderror" name = "date_to" id = "date_to" value="{{old('date_to',$events->date_to)}}">

                @error('date_to')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr">Time start</label>
                <input type="time" class="form-control @error('time_start') is-invalid @enderror" name = "time_start" id = "time_start" value="{{old('time_start',$events->time_start)}}">

                @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr">Time end</label>
                <input type="time" class="form-control @error('time_end') is-invalid @enderror" name = "time_end" id = "time_end" value="{{old('time_end',$events->time_end)}}">

                @error('time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>


            <div class="form-group">
              <label for="usr">Venue</label>
                <input type="text" class="form-control @error('venue') is-invalid @enderror" name = "venue" placeholder="Add a Venue" id = "venue" value="{{old('venue',$events->venue)}}">

                @error('venue')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
                <label>{{ __('Event Status') }}</label>

                  <select class="form-control" name="status">
                    <option selected disabled>Change event status</option>
                    <option value="{{old('status',$events->status)}}">{{old('status',$events->status)}}</option>
                    <option value="Cancelled">Cancelled</option>
                  </select>


                    @error('status')
                        <span class="invalid-feedback" status="alert">
                            <strong>{{ $message }}</strong>
                        </span>
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

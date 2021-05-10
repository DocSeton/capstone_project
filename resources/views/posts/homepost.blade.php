@extends('layouts.admin')

@section('homepost')

@foreach($postevent as $post)

<div class="container">
  <div class="col-md-12 mb-5">

  <div class="card card-widget">
        <div class="card-header">
          <a href="#" class="btn btn-outline-danger" name="deletepost" style="float:right;" data-toggle="modal" data-target="#myModaldelete-{{ $post->id }}"><i class="fas fa-trash"></i></a>
          <a href="{{ route('posts.editpost',[$post->id]) }}" class="btn btn-outline-info" style="float:right;margin-right:4px;"><i class="fas fa-edit"></i></a>

          <div class="user-block">

            <img class="img-circle" src="dist/img/user2-160x160.jpg" alt="User Image">
            <span class="username"><a href="#">{{ $post->author }}</a></span>
            <span class="description">Shared: {{ $post->updated_at->format('m-d-Y - H:i:s') }}</span>

          </div>

        </div>

        <div class="card-body">
          <h3>{{ $post->title }}</h3>
          <br>
          <h5>Event: <b style="color:#33cc33;">{{ $post->event }}</b></h5>
          <h5>Duration: <b style="color:#33cc33;">{{ date('m-d-Y', strtotime($post->date_from)) }} - {{ date('m-d-Y', strtotime($post->date_to)) }}</b></h5>
          <h5>Time: <b style="color:#33cc33;">{{ $post->duration }}</b></h5>
          <h5>Venue: <b style="color:#33cc33;">{{ $post->venue }}</b></h5>
          <br>
        @if($current->toDateString() >= $post->date_from && $current->toDateString() <=  $post->date_to)

              <h5 id="evalink"><b>Evaluation link: <a href="{{ $post->link }}" target="_blank">{{ $post->link }}</a></h5>
              <small style="color:tomato;">This link will expire on {{ date('m-d-Y', strtotime('+7 days',strtotime($post->date_to))) }}</small>

        @else
              <p></p>
        @endif


<!--
          {{ $current->toDateString() }} Date Now
          <br>
          {{ $post->date_from }}  Date From
          <br>
          {{ $post->date_to }}   Date To
-->
          <hr>
          <img class="img-fluid pad" src="{{ asset('storage/images/posts/'. $post->image) }}" alt="No current event photo">
          <hr>




        </div>

  </div>


      <!-- DELETE MODAL -->

      <div id="myModaldelete-{{ $post->id }}" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">
              <div class="modal-header">
                <h4><strong>Are you sure you want to delete this?</strong></h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>

              </div>
              <div class="modal-body">

                 <input type="hidden" name="id" value="{{ $post->id }}" class = "form-control">
                  <strong>Title:</strong> <input type="text" name="id" value="{{ $post->title }}" class = "form-control">
                  <strong>Link:</strong> <input type="text" name="id" value="{{ $post->link }}" class = "form-control">
                  <strong>Image:</strong> <img class="img-fluid pad" src="{{ asset('storage/images/posts/'. $post->image) }}" alt="Photo">
                  <hr>
                  <div class="" style="float:right;">
                    <a href="{{ route('posts.delete',$post->id) }}" class="btn btn btn-danger">Delete</a>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  </div>

              </div>

            </div>

        </div>
      </div>


  </div>
</div>


@endforeach

@endsection

@extends('layouts.home')

@section('homecontent')

<div class="container">

  <!-- Alert message (start) -->
    @if(Session::has('message'))
    <div class="alert {{ Session::get('alert-class') }}">
       {{ Session::get('message') }}
    </div>
    @endif
  <!-- Alert message (end) -->

  @foreach($postevent as $post)


  <div class="container">
    <div class="col-md-12 mb-5">

    <div class="card card-widget">
          <div class="card-header">


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


          @if($current->toDateString() >= $post->date_from && $current->toDateString() <= $post->date_to)
                <h5><b>Evaluation link: <a href="{{ $post->link }}" target="_blank">{{ $post->link }}</a></h5>
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

            <div style = "text-align:center;">

                <a href="{{ route('posts.registerevent',[$post->id]) }}" class="btn btn-outline-success btn-block"><i class="fas fa-share"></i> Register</a>

            </div>


          </div>

    </div>





    </div>
  </div>


  @endforeach

</div>
@endsection

@extends('layouts.admin')

@section('survey')

<div class="container">



  <div class = "card">

        <div class="card-header">
            <h2>Event Survey</h2>
        </div>

    <div class="card-body">

        <form method="post" action="/eventsurvey">
          @csrf
            <div class="form-group">
                  <input type="hidden" class="form-control" name = "author" id = "author" value="{{ Auth::user()->name }}">
            </div>

            @foreach($questionnaire as $questionnaires)
            <div class="card">
                <div class="card-header">
                    {{ $questionnaires->title }}
                </div>
                <div class="card-body">

                </div>
            </div>
            @endforeach


            <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-success" value="SUBMIT"/>
            </div>

        </form>
     </div>

  </div>









<!-- COPY OF INPUT FIELD GROUP -->



<!-- COPY OF INPUT FIELD GROUP -->






</div>


@endsection

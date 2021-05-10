@extends('layouts.admin')

@section('view')

<div class="container">

  <div class="card">

    <div class="card-header"><h2>{{ $questionnaire->title }}</h2></div>

    <div class="card-body">
      <a class = "btn btn-outline-primary" href="/questionnaire/{{ $questionnaire->id }}/questions/create">Add Questions</a>

    </div>
  </div>


  @foreach($questionnaire->questions as $question)
    <div class="card">

      <div class="card-header"><h2>{{ $question->$question }}</h2></div>

      <div class="card-body">

          <ul class="list-group">
            @foreach($question->answers as $answer)
              <li class="list-group-item active">{{ $answer->answer }}</li>
            @endforeach
          </ul>


      </div>
    </div>
  @endforeach



</div>




@endsection

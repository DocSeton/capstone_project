@extends('layouts.home')

@section('surveytemplate')

<div class="container">

  <div class="card">

    <div class="card-header" style = "text-align:center;"><h2>Event Title of Questionnaire</h2></div>

    <div class="card-body">




      <form action="/templatesurvey" method="post">
        @csrf
        <input type="hidden" class="mr-2" name = "author" id = "author" value="{{ Auth::user()->name }}">
        @foreach($questions as $key => $question)

          <div class="card mt-4">
            <div class="card-header">
              <strong>{{ $key + 1 }}</strong>. {{ $question->question }}

            </div>
            <div class="card-body">

              @error('answer.' . $key .  '.answer_id')
                <small class = "text-danger">{{ $message }}</small>
              @enderror

              <ul class="list-group">

<!-- How to insert these datas on the db -->
                  <input type="hidden" name="question[{{ $key }}][question_id]" value="{{ $question->id }}" class = "mr-2">


                  <li class="list-group-item">
                      <input type="radio" name="answer[{{ $key }}][answer]" value="Very Satisfactory" class = "mr-2" id = "answer1"><strong> Very Satisfactory</strong>
                  </li>

                  <li class="list-group-item">
                      <input type="radio" name="answer[{{ $key }}][answer]" value="Satisfactory" class = "mr-2" id = "answer2"><strong> Satisfactory</strong>
                  </li>

                  <li class="list-group-item">
                      <input type="radio" name="answer[{{ $key }}][answer]" value="Unsatisfactory" class = "mr-2" id = "answer3"><strong> Unsatisfactory</strong>
                  </li>

                  <li class="list-group-item">
                      <input type="radio" name="answer[{{ $key }}][answer]" value="Very Unsatisfactory" class = "mr-2" id = "answer4"><strong> Very Unsatisfactory</strong>
                  </li>



              </ul>
            </div>

          </div>
        @endforeach


        <button type="submit" class="btn btn-success">Submit</button>
      </form>




    </div>

  </div>




</div>

@endsection

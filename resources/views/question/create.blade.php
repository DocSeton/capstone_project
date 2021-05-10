@extends('layouts.admin')

@section('questionnaire')

<div class="container">
  <div class="card">

    <div class="card-header"><h2>Create a Question</h2></div>

    <div class="card-body">

      <form action="/questionnaire/{{ $questionnaire->id }}/questions" method="post">
        <!-- Don't forget CSRF on every FORM to avoid PAGE EXPIRATION -->
        @csrf

        <div class="form-group">
            <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">
        </div>


        <div class="form-group">
            <label for="question">Question</label>
              <input name = "question[question]" type="text" class="form-control"
                      value="{{ old('question.question') }}"
                      id="question" aria-describedby="questionHelp" placeholder="Enter Question">
              <small id="questionHelp" class="form-text text-muted">Ask precise question</small>

              @error('question.question')
                <small class = "text-danger">{{ $message }}</small>
              @enderror
        </div>

        <div class="form-group">

          <fieldset>
            <legend>Choices</legend>
              <small id="choicesHelp" class="form-text text-muted">Give proper choices</small>
            <div>

              <div class="form-group">
                  <label for="answer1">Choice 1</label>
                    <input name = "answers[][answer]" type="text"
                        value="{{ old('answers.0.answer') }}"
                        class="form-control" id="answer1" aria-describedby="choicesHelp" placeholder="Enter Choice 1">


                    @error('answers.0.answer')
                      <small class = "text-danger">{{ $message }}</small>
                    @enderror
              </div>

              <div class="form-group">
                  <label for="answer2">Choice 2</label>
                    <input name = "answers[][answer]" type="text"
                        value="{{ old('answers.1.answer') }}"
                        class="form-control" id="answer2" aria-describedby="choicesHelp" placeholder="Enter Choice 2">


                    @error('answers.1.answer')
                      <small class = "text-danger">{{ $message }}</small>
                    @enderror
              </div>

              <div class="form-group">
                  <label for="answer3">Choice 3</label>
                    <input name = "answers[][answer]" type="text"
                        value="{{ old('answers.2.answer') }}"
                        class="form-control" id="answer3" aria-describedby="choicesHelp" placeholder="Enter Choice 3">


                    @error('answers.2.answer')
                      <small class = "text-danger">{{ $message }}</small>
                    @enderror
              </div>

              <div class="form-group">
                  <label for="answer4">Choice 4</label>
                    <input name = "answers[][answer]" type="text"
                        value="{{ old('answers.3.answer') }}"
                        class="form-control" id="answer4" aria-describedby="choicesHelp" placeholder="Enter Choice 4">


                    @error('answers.3.answer')
                      <small class = "text-danger">{{ $message }}</small>
                    @enderror
              </div>

            </div>

          </fieldset>

        </div>

        <button type="submit" class="btn btn-outline-success">Add Question</button>

        

      </form>

    </div>



  </div>
</div>




@endsection

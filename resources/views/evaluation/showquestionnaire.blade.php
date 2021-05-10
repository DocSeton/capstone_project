@extends('layouts.admin')

@section('showquestionnaire')

<div class="container">



  <div class = "card">

        <div class="card-header" style = "background-color:#d9ffcc;">
            <h2 style = "text-align:center;">{{ $questionnaire->title }}</h2>
        </div>

    <div class="card-body">

      <form method="post" action="/questionnaire/{{ $questionnaire->id }}/questions">
          @csrf
          <div class = "card">

                <div class="card-header">

                  <div class="form-group mb-3" style="text-align:center;">
                      <h4>Attendee Name</h4>
                  </div>

                </div>

                  <div class="card-body">
                    <fieldset>

                      <div class="form-group">
                          <input type="hidden" class="form-control" name = "author" id = "author" value="{{ Auth::user()->name }}">
                      </div>


                          <div class="input-group mb-3" id = "inputFormRowq1">

                              <div class="input-group mb-3">

                                <input name = "question[][question]" type="text" class="form-control" id="question1"  >

                                </div>
                            </div>
                            <!--
                              @foreach($user as $user)
                            <div class="form-group">

                                <label for="exampleFormControlSelect1">Select Student</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                  <option selected disabled></option>
                                  <option id="question1" name = "question[][question]" value="{{ $user->name }}">{{ $user->name }}</option>
                                </select>

                            </div>
                            @endforeach
                                  -->
                    </fieldset>

                  </div>

          </div>

                  <div class="form-group" style = "text-align:center;">
                    <input type="submit" name="submit" class="btn btn-lg btn-success" value="ADD"/>
                  </div>

                </form>
            </div>

        </div>


</div>


@endsection

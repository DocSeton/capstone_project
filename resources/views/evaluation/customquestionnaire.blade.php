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
              <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                        <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">
                    </div>

                    <div class="form-group"  style="text-align:center;">
                        <button id="addCardRow" type="button" class="btn btn-lg btn-outline-info"><span class="fa fa-plus"></span> Add Questionnaire</button>
                    </div>

                  </div>
              </div>
               <br/>
              <div class="questionnaire">

                  <div id="newCardRow"></div>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-lg btn-success" style = "margin-left:990px;">Submit</button>
              </div>



          </form>

    </div>

        </div>









<!-- COPY OF INPUT FIELD GROUP -->



<!-- COPY OF INPUT FIELD GROUP -->






</div>


@endsection

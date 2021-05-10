@extends('layouts.admin')

@section('addquestionnaire')

<div class="container">

<div class="card">

<div class="card-header">
  <h3>Create Questionnaire (Custom)</h3>
</div>

<div class="card-body">



    <form method="post" action="/custom">
      @csrf
        <div class="row">
            <div class="col-lg-12">
              <div class="form-group">
                  <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">
              </div>

              <div class="form-group"  style="text-align:center;">
                  <button id="addCardRow" type="button" class="btn btn-outline-info"><span class="fa fa-plus"></span> Add Questionnaire</button>
              </div>

            </div>
        </div>
         <br/>
        <div class="questionnaire">

            <div id="newCardRow"></div>
        </div>


        <button type="submit" class="btn btn-success">Submit</button>
    </form>


</div>
</div>

</div>



@endsection

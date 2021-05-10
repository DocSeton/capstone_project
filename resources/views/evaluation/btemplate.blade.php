@extends('layouts.admin')

@section('btemplate')
    <form method="post" action="#">
      @csrf
      <div class="container">

        <div class="form-group fieldGroup">

          <div class="form-group">
              <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">
          </div>


          <div class = "card">
                  <div class="card-header">
                        <h2>Create Evaluation Questionnaire
                        </h2>

                  </div>

                  <div class="card-body">

<!------------------------------------------------------------------------------------------------------------------------------------->

                  <div class = "card">
                        <div class="card-header">


                          <div class="form-group mb-3">
                            <button id="removeCardRow" type="button" data-indexval=' + index + ' onclick="removeCard(this)" class="btn btn-default" style = "margin-left:1010px;">X</button>
                          </div>

                          <div class="form-group mb-3">
                            <h2>Program Events</h2>
                          </div>



                        </div>

                        <div class="card-body field_wrapper">

                              <div class="form-group">
                                  <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "title" id = "title" value="Program Events">
                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "answers[][answer]" type="text"
                                            value="The registration process is systematic and organized."
                                                class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                                     @error('answers.0.answer')
                                       <small class = "text-danger">{{ $message }}</small>
                                     @enderror
                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "answers[][answer]" type="text"
                                            value="The registration process is systematic and organized."
                                                class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                                     @error('answers.0.answer')
                                       <small class = "text-danger">{{ $message }}</small>
                                     @enderror
                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "answers[][answer]" type="text"
                                            value="The registration process is systematic and organized."
                                                class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                                     @error('answers.0.answer')
                                       <small class = "text-danger">{{ $message }}</small>
                                     @enderror
                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "answers[][answer]" type="text"
                                            value="The registration process is systematic and organized."
                                                class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                                     @error('answers.0.answer')
                                       <small class = "text-danger">{{ $message }}</small>
                                     @enderror
                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "answers[][answer]" type="text"
                                            value="The registration process is systematic and organized."
                                                class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                                     @error('answers.0.answer')
                                       <small class = "text-danger">{{ $message }}</small>
                                     @enderror
                              </div>


                              <div class="form-group">
                                <div id="newRow"></div>
                                <button id="addRow" type="button" class="btn btn-info"><span class="fa fa-plus"></span> Add Question</button>
                              </div>


                        </div>
                  </div>

<!------------------------------------------------------------------------------------------------------------------------------------->

<div class = "card">
      <div class="card-header">
        <div class="form-group mb-3">
          <button id="removeCardRow" type="button" data-indexval=' + index + ' onclick="removeCard(this)" class="btn btn-default" style = "margin-left:1010px;">X</button>
        </div>

        <div class="form-group mb-3">
          <h2>Program Registration</h2>
        </div>
      </div>

      <div class="card-body" id="inputFormRow">

            <div class="form-group">
                <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "title" id = "title" value="Program Registration">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>


            <div class="form-group">
              <div id="newRow"></div>
              <button id="addRow" type="button" class="btn btn-info"><span class="fa fa-plus"></span> Add Question</button>
            </div>


      </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------->

<div class = "card">
      <div class="card-header">
        <div class="form-group mb-3">
          <button id="removeCardRow" type="button" data-indexval=' + index + ' onclick="removeCard(this)" class="btn btn-default" style = "margin-left:1010px;">X</button>
        </div>

        <div class="form-group mb-3">
          <h2>Program Objectives</h2>
        </div>
      </div>

      <div class="card-body" id="inputFormRow">

            <div class="form-group">
                <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "title" id = "title" value="Program Events">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>


            <div class="form-group">
              <div id="newRow"></div>
              <button id="addRow" type="button" class="btn btn-info"><span class="fa fa-plus"></span> Add Question</button>
            </div>


      </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------->

<div class = "card">
      <div class="card-header">
        <div class="form-group mb-3">
          <button id="removeCardRow" type="button" data-indexval=' + index + ' onclick="removeCard(this)" class="btn btn-default" style = "margin-left:1010px;">X</button>
        </div>

        <div class="form-group mb-3">
          <h2>Program Flow</h2>
        </div>
      </div>

      <div class="card-body field_wrapper">

            <div class="form-group">
                <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "title" id = "title" value="Program Events">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                     <div class="input-group-text">
                        <input type="checkbox" disabled>

                      </div>
                </div>
                      <input name = "answers[][answer]" type="text"
                          value="The registration process is systematic and organized."
                              class="form-control" id="1answer1" aria-describedby="choicesHelp" placeholder="The registration process is systematic and organized." disabled>

                   @error('answers.0.answer')
                     <small class = "text-danger">{{ $message }}</small>
                   @enderror
            </div>


            <div class="form-group">
              <div id="newRow"></div>
              <button id="addRow" type="button" class="btn btn-info"><span class="fa fa-plus"></span> Add Question</button>
            </div>


      </div>
</div>

<!------------------------------------------------------------------------------------------------------------------------------------->




                  <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="SUBMIT"/>
                  </div>


              </div>



          </div>



        </div>





<!-- COPY OF INPUT FIELD GROUP -->



<!-- COPY OF INPUT FIELD GROUP -->



      </div>
    </form>







@endsection

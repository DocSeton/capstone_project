@extends('layouts.admin')

@section('atemplate')

<div class="container">



  <div class = "card">

        <div class="card-header">
            <h2>Create Evaluation Questionnaire (Template A)</h2>
        </div>

    <div class="card-body">

        <form method="post" action="/atemplate">
                  @csrf
                    <div class="form-group">
                        <input type="hidden" class="form-control" name = "author" id = "author" value="{{ Auth::user()->name }}">
                    </div>


<!--                                                                                                                                           -->

          <div class = "card">

                <div class="card-header">

                  <div class="form-group mb-3">
                      <h2>Program Registration</h2>
                  </div>

                </div>

                  <div class="card-body">

                              <div class="form-group mb-3">
                                  <input type="hidden" class="form-control" name = "title[]" id = "title" value="Program Events">
                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="The registration process is systematic and organized."
                                                class="form-control" id="question1"  placeholder="The registration process is systematic and organized.">

                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Is the Information concerning the event accurate in the event registration."
                                                class="form-control" id="question2"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Registration form working as intended."
                                                class="form-control" id="question3"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Sample Question 4."
                                                class="form-control" id="question4"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Sample Question 5."
                                                class="form-control" id="question5"  placeholder="The registration process is systematic and organized.">

                              </div>





                        </div>
                  </div>


<!--                                                                                                                                           -->

          <div class = "card">

                <div class="card-header">

                  <div class="form-group mb-3">
                      <h2>Program Objectives</h2>
                  </div>

                </div>

                  <div class="card-body">

                              <div class="form-group mb-3">
                                  <input type="hidden" class="form-control" name = "title[]" id = "title" value="Progam Objectives">
                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Event Accomplish its Objectives"
                                                class="form-control" id="question1"  placeholder="The registration process is systematic and organized.">

                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Event Clearly state their Objectives."
                                                class="form-control" id="question2"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Activities in the Event are Relevant to their Objective."
                                                class="form-control" id="question3"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Sample Question 3."
                                                class="form-control" id="question4"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Sample Question 4."
                                                class="form-control" id="question5"  placeholder="The registration process is systematic and organized.">

                              </div>





                        </div>
                  </div>


<!--                                                                                                                  -->


          <div class = "card">

                <div class="card-header">

                  <div class="form-group mb-3">
                      <h2>Program Flow</h2>
                  </div>

                </div>

                  <div class="card-body">

                              <div class="form-group mb-3">
                                  <input type="hidden" class="form-control" name = "title[]" id = "title" value="Progam Objectives">
                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Event Accomplish its Objectives"
                                                class="form-control" id="question1"  placeholder="The registration process is systematic and organized.">

                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Event Clearly state their Objectives."
                                                class="form-control" id="question2"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Activities in the Event are Relevant to their Objective."
                                                class="form-control" id="question3"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Sample Question 3."
                                                class="form-control" id="question4"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Sample Question 4."
                                                class="form-control" id="question5"  placeholder="The registration process is systematic and organized.">

                              </div>





                        </div>
                  </div>


<!--                                                                                                                  -->


          <div class = "card">

                <div class="card-header">

                  <div class="form-group mb-3">
                      <h2>Venue</h2>
                  </div>

                </div>

                  <div class="card-body">

                              <div class="form-group mb-3">
                                  <input type="hidden" class="form-control" name = "title[]" id = "title" value="Progam Objectives">
                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Event Accomplish its Objectives"
                                                class="form-control" id="question1"  placeholder="The registration process is systematic and organized.">

                              </div>


                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Event Clearly state their Objectives."
                                                class="form-control" id="question2"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Does the Activities in the Event are Relevant to their Objective."
                                                class="form-control" id="question3"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Sample Question 3."
                                                class="form-control" id="question4"  placeholder="The registration process is systematic and organized.">

                              </div>

                              <div class="input-group mb-3">
                                  <div class="input-group-prepend">
                                       <div class="input-group-text">
                                          <input type="checkbox" disabled>

                                        </div>
                                  </div>
                                        <input name = "question[]" type="text"
                                            value="Sample Question 4."
                                                class="form-control" id="question5"  placeholder="The registration process is systematic and organized.">

                              </div>





                        </div>
                  </div>


<!--                                                                                                                  -->



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

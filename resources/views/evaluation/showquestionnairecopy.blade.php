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


<!--                                                                                                                                           -->
          <div class = "card">

                <div class="card-header" style = "background-color:#b3ffb3;">

                  <div class="form-group mb-3">
                      <h2>Program Registration</h2>
                  </div>

                </div>

                  <div class="card-body">
                          <!-- Question & Choices -->
                              <div class="input-group mb-3">

                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Q1</span>
                                    </div>
                                  <!-- Question -->

                                          <input name = "question[][question]" type="text"
                                              value="The registration process is systematic and organized."
                                                  class="form-control" id="question1"  placeholder="The registration process is systematic and organized.">
                                </div>



                              </div>
                      <!-- Question & Choices -->

                      <!-- Question & Choices -->
                          <div class="input-group mb-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Q2</span>
                                </div>
                              <!-- Question -->
                                      <input name = "question[][question]" type="text"
                                          value="The registration process is systematic and organized.2"
                                              class="form-control" id="question2"  placeholder="The registration process is systematic and organized.">
                            </div>



                          </div>
                  <!-- Question & Choices -->

                  <!-- Question & Choices -->
                      <div class="input-group mb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Q3</span>
                            </div>
                          <!-- Question -->
                                  <input name = "question[][question]" type="text"
                                      value="The registration process is systematic and organized.3"
                                          class="form-control" id="question3"  placeholder="The registration process is systematic and organized.">
                        </div>



                      </div>
              <!-- Question & Choices -->

              <!-- Question & Choices -->
                  <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Q4</span>
                        </div>
                      <!-- Question -->
                              <input name = "question[][question]" type="text"
                                  value="The registration process is systematic and organized.4"
                                      class="form-control" id="question4"  placeholder="The registration process is systematic and organized.">
                    </div>



                      </div>
          <!-- Question & Choices -->

          <!-- Question & Choices -->
              <div class="input-group mb-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Q5</span>
                    </div>
                  <!-- Question -->
                          <input name = "question[][question]" type="text"
                              value="The registration process is systematic and organized.5"
                                  class="form-control" id="question5"  placeholder="The registration process is systematic and organized.">
                </div>


                      </div>

                  </div>
      <!-- Question & Choices -->

                    </div>
              </div>
<!--                                                                                                                                           -->




<!--                                                                                                                                           -->
          <div class = "card">

                <div class="card-header" style="background-color:#99ffbb;">

                  <div class="form-group mb-3">
                      <h2>Program Objectives</h2>
                  </div>

                </div>

                  <div class="card-body">
                          <!-- Question & Choices -->
                              <div class="input-group mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Q1</span>
                                    </div>
                                  <!-- Question -->
                                          <input name = "question[][question]" type="text"
                                              value="The registration process is systematic and organized."
                                                  class="form-control" id="question6"  placeholder="The registration process is systematic and organized.">
                                </div>



                                  </div>
                      <!-- Question & Choices -->

                      <!-- Question & Choices -->
                          <div class="input-group mb-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Q2</span>
                                </div>
                              <!-- Question -->
                                      <input name = "question[][question]" type="text"
                                          value="The registration process is systematic and organized."
                                              class="form-control" id="question7"  placeholder="The registration process is systematic and organized.">
                            </div>


                              </div>
                  <!-- Question & Choices -->

                  <!-- Question & Choices -->
                      <div class="input-group mb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Q3</span>
                            </div>
                          <!-- Question -->
                                  <input name = "question[][question]" type="text"
                                      value="The registration process is systematic and organized."
                                          class="form-control" id="question8"  placeholder="The registration process is systematic and organized.">
                        </div>



                          </div>
              <!-- Question & Choices -->

              <!-- Question & Choices -->
                  <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Q4</span>
                        </div>
                      <!-- Question -->
                              <input name = "question[][question]" type="text"
                                  value="The registration process is systematic and organized."
                                      class="form-control" id="question9"  placeholder="The registration process is systematic and organized.">
                    </div>



                      </div>
          <!-- Question & Choices -->

          <!-- Question & Choices -->
              <div class="input-group mb-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Q5</span>
                    </div>
                  <!-- Question -->
                          <input name = "question[][question]" type="text"
                              value="The registration process is systematic and organized."
                                  class="form-control" id="question10"  placeholder="The registration process is systematic and organized.">
                </div>



                  </div>
      <!-- Question & Choices -->

                    </div>
              </div>
<!--                                                                                                                                           -->


<!--                                                                                                                                           -->
          <div class = "card">

                <div class="card-header" style="background-color:#00e6ac;">

                  <div class="form-group mb-3">
                      <h2>Program Flow</h2>
                  </div>

                </div>

                  <div class="card-body">
                          <!-- Question & Choices -->
                              <div class="input-group mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Q1</span>
                                    </div>
                                  <!-- Question -->
                                          <input name = "question[][question]" type="text"
                                              value="The registration process is systematic and organized."
                                                  class="form-control" id="question11"  placeholder="The registration process is systematic and organized.">
                                </div>


                                  </div>
                      <!-- Question & Choices -->

                      <!-- Question & Choices -->
                          <div class="input-group mb-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Q2</span>
                                </div>
                              <!-- Question -->
                                      <input name = "question[][question]" type="text"
                                          value="The registration process is systematic and organized."
                                              class="form-control" id="question12"  placeholder="The registration process is systematic and organized.">
                            </div>



                              </div>
                  <!-- Question & Choices -->

                  <!-- Question & Choices -->
                      <div class="input-group mb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Q3</span>
                            </div>
                          <!-- Question -->
                                  <input name = "question[][question]" type="text"
                                      value="The registration process is systematic and organized."
                                          class="form-control" id="question13"  placeholder="The registration process is systematic and organized.">
                        </div>



                          </div>
              <!-- Question & Choices -->

              <!-- Question & Choices -->
                  <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Q4</span>
                        </div>
                      <!-- Question -->
                              <input name = "question[][question]" type="text"
                                  value="The registration process is systematic and organized."
                                      class="form-control" id="question14"  placeholder="The registration process is systematic and organized.">
                    </div>


                      </div>
          <!-- Question & Choices -->

          <!-- Question & Choices -->
              <div class="input-group mb-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Q5</span>
                    </div>
                  <!-- Question -->
                          <input name = "question[][question]" type="text"
                              value="The registration process is systematic and organized."
                                  class="form-control" id="question15"  placeholder="The registration process is systematic and organized.">
                </div>


                  </div>
      <!-- Question & Choices -->

                    </div>
              </div>
<!--                                                                                                                                           -->



<!--                                                                                                                                           -->
          <div class = "card">

                <div class="card-header" style="background-color:#00b3b3;">

                  <div class="form-group mb-3">
                      <h2>Program Venue</h2>
                  </div>

                </div>

                  <div class="card-body">
                          <!-- Question & Choices -->
                              <div class="input-group mb-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Q1</span>
                                    </div>
                                  <!-- Question -->
                                          <input name = "question[][question]" type="text"
                                              value="The registration process is systematic and organized."
                                                  class="form-control" id="question16"  placeholder="The registration process is systematic and organized.">
                                </div>


                                  </div>
                      <!-- Question & Choices -->

                      <!-- Question & Choices -->
                          <div class="input-group mb-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Q2</span>
                                </div>
                              <!-- Question -->
                                      <input name = "question[][question]" type="text"
                                          value="The registration process is systematic and organized."
                                              class="form-control" id="question17"  placeholder="The registration process is systematic and organized.">
                            </div>


                              </div>
                  <!-- Question & Choices -->

                  <!-- Question & Choices -->
                      <div class="input-group mb-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Q3</span>
                            </div>
                          <!-- Question -->
                                  <input name = "question[][question]" type="text"
                                      value="The registration process is systematic and organized."
                                          class="form-control" id="question18"  placeholder="The registration process is systematic and organized.">
                        </div>



                          </div>
              <!-- Question & Choices -->

              <!-- Question & Choices -->
                  <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Q4</span>
                        </div>
                      <!-- Question -->
                              <input name = "question[][question]" type="text"
                                  value="The registration process is systematic and organized."
                                      class="form-control" id="question19"  placeholder="The registration process is systematic and organized.">
                    </div>



                      </div>
          <!-- Question & Choices -->

          <!-- Question & Choices -->
              <div class="input-group mb-3">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Q5</span>
                    </div>
                  <!-- Question -->
                          <input name = "question[][question]" type="text"
                              value="The registration process is systematic and organized."
                                  class="form-control" id="question20"  placeholder="The registration process is systematic and organized.">
                </div>


                  </div>
      <!-- Question & Choices -->

                    </div>
              </div>
<!--                                                                                                                                           -->



                  <div class="form-group">
                    <input type="submit" name="submit" class="btn btn-success" value="SUBMIT"/>
                  </div>

                </form>
            </div>

        </div>




</div>


@endsection

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
                                  <fieldset>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Q1</span>
                                    </div>
                                  <!-- Question -->

                                          <input name = "question[][question]" type="text"
                                              value="The registration process is systematic and organized."
                                                  class="form-control" id="question1"  placeholder="The registration process is systematic and organized.">
                                </div>

                                <!-- Choices -->
                                      <div class="input-group mb-3">

                                              <div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text">1</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="text"
                                                            value="Very Unsatisfactory"
                                                                class="form-control" id="answer1"  placeholder="Very Unsatisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text">2</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="text"
                                                            value="Unsatisfactory"
                                                                class="form-control" id="answer2"  placeholder="Unsatisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text">3</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="text"
                                                            value="Satisfactory"
                                                                class="form-control" id="answer3"  placeholder="Satisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend">
                                                      <span class="input-group-text">4</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="text"
                                                            value="Very Satisfactory"
                                                                class="form-control" id="answer4"  placeholder="Very Satisfactory">

                                                </div>

                                              </div>

                                      </div>
      </fieldset>
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
                                              class="form-control" id="question2"  placeholder="The registration process is systematic and organized.">
                            </div>

                            <!-- Choices -->
                                  <div class="input-group mb-3">
                                      <fieldset>
                                          <div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">1</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Very Unsatisfactory"
                                                            class="form-control" id="answer5"  placeholder="Very Unsatisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">2</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Unsatisfactory"
                                                            class="form-control" id="answer6"  placeholder="Unsatisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">3</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Satisfactory"
                                                            class="form-control" id="answer7"  placeholder="Satisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">4</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Very Satisfactory"
                                                            class="form-control" id="answer8"  placeholder="Very Satisfactory">

                                            </div>

                                          </div>
                                      </fieldset>
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
                                          class="form-control" id="question3"  placeholder="The registration process is systematic and organized.">
                        </div>

                        <!-- Choices -->
                              <div class="input-group mb-3">
                                  <fieldset>
                                      <div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">1</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Very Unsatisfactory"
                                                        class="form-control" id="answer9"  placeholder="Very Unsatisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">2</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Unsatisfactory"
                                                        class="form-control" id="answer10"  placeholder="Unsatisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">3</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Satisfactory"
                                                        class="form-control" id="answer11"  placeholder="Satisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">4</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Very Satisfactory"
                                                        class="form-control" id="answer12"  placeholder="Very Satisfactory">

                                        </div>

                                      </div>
                                  </fieldset>
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
                                      class="form-control" id="question4"  placeholder="The registration process is systematic and organized.">
                    </div>

                    <!-- Choices -->
                          <div class="input-group mb-3">
                              <fieldset>
                                  <div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">1</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Very Unsatisfactory"
                                                    class="form-control" id="answer13"  placeholder="Very Unsatisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">2</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Unsatisfactory"
                                                    class="form-control" id="answer14"  placeholder="Unsatisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">3</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Satisfactory"
                                                    class="form-control" id="answer15"  placeholder="Satisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">4</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Very Satisfactory"
                                                    class="form-control" id="answer16"  placeholder="Very Satisfactory">

                                    </div>

                                  </div>
                              </fieldset>
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
                                  class="form-control" id="question5"  placeholder="The registration process is systematic and organized.">
                </div>

                <!-- Choices -->
                      <div class="input-group mb-3">
                          <fieldset>
                              <div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">1</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Very Unsatisfactory"
                                                class="form-control" id="answer17"  placeholder="Very Unsatisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">2</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Unsatisfactory"
                                                class="form-control" id="answer18"  placeholder="Unsatisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">3</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Satisfactory"
                                                class="form-control" id="answer19"  placeholder="Satisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">4</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Very Satisfactory"
                                                class="form-control" id="answer20"  placeholder="Very Satisfactory">

                                </div>

                              </div>
                          </fieldset>
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

                                <!-- Choices -->
                                      <div class="input-group mb-3">
                                          <fieldset>
                                              <div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">1</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Very Unsatisfactory"
                                                                class="form-control" id="answer21"  placeholder="Very Unsatisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">2</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Unsatisfactory"
                                                                class="form-control" id="answer22"  placeholder="Unsatisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">3</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Satisfactory"
                                                                class="form-control" id="answer23"  placeholder="Satisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">4</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Very Satisfactory"
                                                                class="form-control" id="answer24"  placeholder="Very Satisfactory">

                                                </div>

                                              </div>
                                          </fieldset>
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

                            <!-- Choices -->
                                  <div class="input-group mb-3">
                                      <fieldset>
                                          <div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">1</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Very Unsatisfactory"
                                                            class="form-control" id="answer25"  placeholder="Very Unsatisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">2</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Unsatisfactory"
                                                            class="form-control" id="answer26"  placeholder="Unsatisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">3</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Satisfactory"
                                                            class="form-control" id="answer27"  placeholder="Satisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">4</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Very Satisfactory"
                                                            class="form-control" id="answer28"  placeholder="Very Satisfactory">

                                            </div>

                                          </div>
                                      </fieldset>
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

                        <!-- Choices -->
                              <div class="input-group mb-3">
                                  <fieldset>
                                      <div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">1</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Very Unsatisfactory"
                                                        class="form-control" id="answer29"  placeholder="Very Unsatisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">2</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Unsatisfactory"
                                                        class="form-control" id="answer30"  placeholder="Unsatisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">3</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Satisfactory"
                                                        class="form-control" id="answer31"  placeholder="Satisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">4</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Very Satisfactory"
                                                        class="form-control" id="answer32"  placeholder="Very Satisfactory">

                                        </div>

                                      </div>
                                  </fieldset>
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

                    <!-- Choices -->
                          <div class="input-group mb-3">
                              <fieldset>
                                  <div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">1</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Very Unsatisfactory"
                                                    class="form-control" id="answer33"  placeholder="Very Unsatisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">2</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Unsatisfactory"
                                                    class="form-control" id="answer34"  placeholder="Unsatisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">3</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Satisfactory"
                                                    class="form-control" id="answer35"  placeholder="Satisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">4</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Very Satisfactory"
                                                    class="form-control" id="answer36"  placeholder="Very Satisfactory">

                                    </div>

                                  </div>
                              </fieldset>
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

                <!-- Choices -->
                      <div class="input-group mb-3">
                          <fieldset>
                              <div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">1</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Very Unsatisfactory"
                                                class="form-control" id="answer37"  placeholder="Very Unsatisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">2</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Unsatisfactory"
                                                class="form-control" id="answer38"  placeholder="Unsatisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">3</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Satisfactory"
                                                class="form-control" id="answer39"  placeholder="Satisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">4</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Very Satisfactory"
                                                class="form-control" id="answer40"  placeholder="Very Satisfactory">

                                </div>

                              </div>
                          </fieldset>
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

                                <!-- Choices -->
                                      <div class="input-group mb-3">
                                          <fieldset>
                                              <div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">1</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Very Unsatisfactory"
                                                                class="form-control" id="answer41"  placeholder="Very Unsatisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">2</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Unsatisfactory"
                                                                class="form-control" id="answer42"  placeholder="Unsatisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">3</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Satisfactory"
                                                                class="form-control" id="answer43"  placeholder="Satisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">4</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Very Satisfactory"
                                                                class="form-control" id="answer44"  placeholder="Very Satisfactory">

                                                </div>

                                              </div>
                                          </fieldset>
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

                            <!-- Choices -->
                                  <div class="input-group mb-3">
                                      <fieldset>
                                          <div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">1</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Very Unsatisfactory"
                                                            class="form-control" id="answer45"  placeholder="Very Unsatisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">2</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Unsatisfactory"
                                                            class="form-control" id="answer46"  placeholder="Unsatisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">3</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Satisfactory"
                                                            class="form-control" id="answer47"  placeholder="Satisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">4</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Very Satisfactory"
                                                            class="form-control" id="answer48"  placeholder="Very Satisfactory">

                                            </div>

                                          </div>
                                      </fieldset>
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

                        <!-- Choices -->
                              <div class="input-group mb-3">
                                  <fieldset>
                                      <div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">1</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Very Unsatisfactory"
                                                        class="form-control" id="answer49"  placeholder="Very Unsatisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">2</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Unsatisfactory"
                                                        class="form-control" id="answer50"  placeholder="Unsatisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">3</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Satisfactory"
                                                        class="form-control" id="answer51"  placeholder="Satisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">4</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Very Satisfactory"
                                                        class="form-control" id="answer52"  placeholder="Very Satisfactory">

                                        </div>

                                      </div>
                                  </fieldset>
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

                    <!-- Choices -->
                          <div class="input-group mb-3">
                              <fieldset>
                                  <div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">1</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Very Unsatisfactory"
                                                    class="form-control" id="answer53"  placeholder="Very Unsatisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">2</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Unsatisfactory"
                                                    class="form-control" id="answer54"  placeholder="Unsatisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">3</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Satisfactory"
                                                    class="form-control" id="answer55"  placeholder="Satisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">4</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Very Satisfactory"
                                                    class="form-control" id="answer56"  placeholder="Very Satisfactory">

                                    </div>

                                  </div>
                              </fieldset>
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

                <!-- Choices -->
                      <div class="input-group mb-3">
                          <fieldset>
                              <div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">1</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Very Unsatisfactory"
                                                class="form-control" id="answer57"  placeholder="Very Unsatisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">2</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Unsatisfactory"
                                                class="form-control" id="answer58"  placeholder="Unsatisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">3</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Satisfactory"
                                                class="form-control" id="answer59"  placeholder="Satisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">4</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Very Satisfactory"
                                                class="form-control" id="answer60"  placeholder="Very Satisfactory">

                                </div>

                              </div>
                          </fieldset>
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

                                <!-- Choices -->
                                      <div class="input-group mb-3">
                                          <fieldset>
                                              <div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">1</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Very Unsatisfactory"
                                                                class="form-control" id="answer61"  placeholder="Very Unsatisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">2</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Unsatisfactory"
                                                                class="form-control" id="answer62"  placeholder="Unsatisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">3</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Satisfactory"
                                                                class="form-control" id="answer63"  placeholder="Satisfactory">

                                                </div>

                                                <div class="input-group mb-3">

                                                  <div class="input-group-prepend" hidden>
                                                      <span class="input-group-text">4</span>
                                                  </div>
                                                        <input name = "answers[][answer]" type="hidden"
                                                            value="Very Satisfactory"
                                                                class="form-control" id="answer64"  placeholder="Very Satisfactory">

                                                </div>

                                              </div>
                                          </fieldset>
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

                            <!-- Choices -->
                                  <div class="input-group mb-3">
                                      <fieldset>
                                          <div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">1</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Very Unsatisfactory"
                                                            class="form-control" id="answer65"  placeholder="Very Unsatisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">2</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Unsatisfactory"
                                                            class="form-control" id="answer66"  placeholder="Unsatisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">3</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Satisfactory"
                                                            class="form-control" id="answer67"  placeholder="Satisfactory">

                                            </div>

                                            <div class="input-group mb-3">

                                              <div class="input-group-prepend" hidden>
                                                  <span class="input-group-text">4</span>
                                              </div>
                                                    <input name = "answers[][answer]" type="hidden"
                                                        value="Very Satisfactory"
                                                            class="form-control" id="answer68"  placeholder="Very Satisfactory">

                                            </div>

                                          </div>
                                      </fieldset>
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

                        <!-- Choices -->
                              <div class="input-group mb-3">
                                  <fieldset>
                                      <div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">1</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Very Unsatisfactory"
                                                        class="form-control" id="answer69"  placeholder="Very Unsatisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">2</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Unsatisfactory"
                                                        class="form-control" id="answer70"  placeholder="Unsatisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">3</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Satisfactory"
                                                        class="form-control" id="answer71"  placeholder="Satisfactory">

                                        </div>

                                        <div class="input-group mb-3">

                                          <div class="input-group-prepend" hidden>
                                              <span class="input-group-text">4</span>
                                          </div>
                                                <input name = "answers[][answer]" type="hidden"
                                                    value="Very Satisfactory"
                                                        class="form-control" id="answer72"  placeholder="Very Satisfactory">

                                        </div>

                                      </div>
                                  </fieldset>
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

                    <!-- Choices -->
                          <div class="input-group mb-3">
                              <fieldset>
                                  <div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">1</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Very Unsatisfactory"
                                                    class="form-control" id="answer73"  placeholder="Very Unsatisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">2</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Unsatisfactory"
                                                    class="form-control" id="answer74"  placeholder="Unsatisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">3</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Satisfactory"
                                                    class="form-control" id="answer75"  placeholder="Satisfactory">

                                    </div>

                                    <div class="input-group mb-3">

                                      <div class="input-group-prepend" hidden>
                                          <span class="input-group-text">4</span>
                                      </div>
                                            <input name = "answers[][answer]" type="hidden"
                                                value="Very Satisfactory"
                                                    class="form-control" id="answer76"  placeholder="Very Satisfactory">

                                    </div>

                                  </div>
                              </fieldset>
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

                <!-- Choices -->
                      <div class="input-group mb-3">
                          <fieldset>
                              <div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">1</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Very Unsatisfactory"
                                                class="form-control" id="answer77"  placeholder="Very Unsatisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">2</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Unsatisfactory"
                                                class="form-control" id="answer78"  placeholder="Unsatisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">3</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Satisfactory"
                                                class="form-control" id="answer79"  placeholder="Satisfactory">

                                </div>

                                <div class="input-group mb-3">

                                  <div class="input-group-prepend" hidden>
                                      <span class="input-group-text">4</span>
                                  </div>
                                        <input name = "answers[][answer]" type="hidden"
                                            value="Very Satisfactory"
                                                class="form-control" id="answer80"  placeholder="Very Satisfactory">

                                </div>

                              </div>
                          </fieldset>
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

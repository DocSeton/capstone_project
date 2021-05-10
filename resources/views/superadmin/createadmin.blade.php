@extends('layouts.superadmin')

@section('createadmin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Create an Admin Account') }}</h3></div>

                <div class="card-body">
<!-- REGISTER -->
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                              <select  class="form-control @error('department') is-invalid @enderror" name = "department" id = "department">
                                <option selected disabled>Select a course</option>
                                <option>College of Arts and Sciences</option>
                                <option>College of Business and Accountancy</option>
                                <option>College of Criminal Justice Education</option>
                                <option>College of Criminal Justice Education</option>
                                <option>College of Engineering and Computer Technology</option>
                                <option>College of Education</option>
                                <option>College of Hospitality and Tourism Management</option>
                                <option>College of Nursing and Allied Medical Services</option>
                                <option>Graduate School</option>
                                <option>John Wesley School of Law and Governance</option>
                              </select>

                              <!--<input id="course" type="text" class="form-control @error('course') is-invalid @enderror" name="course" value="{{ old('course') }}" required autocomplete="course" autofocus placeholder="E.g. BSIT 1-1">-->

                                @error('department')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                              <label for="email" class="col-md-4 col-form-label text-md-right" >{{ __('E-Mail Address') }}</label>

                                  <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  </div>
                        </div>

                        <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                  @error('password')
                                      <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                      </span>
                                  @enderror
                              </div>
                        </div>

                        <div class="form-group row">
                              <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                        </div>



                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right" hidden>{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="hidden" class="form-control @error('name') is-invalid @enderror" name="name" value="None" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middlename" class="col-md-4 col-form-label text-md-right" hidden>{{ __('Middlename') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="hidden" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="None" required autocomplete="middlename" autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right" hidden>{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="hidden" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="None" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right" hidden>{{ __('Course') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="hidden" class="form-control @error('course') is-invalid @enderror" name="course" value="None" required autocomplete="course" autofocus>

                                @error('course')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" hidden>{{ __('Role') }}</label>

                            <div class="col-md-6">
                                <input id="role" type="hidden" class="form-control @error('role') is-invalid @enderror" name="role" value="Admin" required autocomplete="role">

                                @error('role')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <input type="submit" value="{{ __('Register') }}" class="btn btn-success btn-md text-white">

                                  </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection

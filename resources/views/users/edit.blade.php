@extends('layouts.superadmin')

@section('useredit')


<div class="alert alert-warning alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
  <div class="" style="text-align:center;">
    <h5><i class="icon fas fa-ban"></i> WARNING!</h5>
    <b>You are currently doing a restricted action that disables links. Click "Go Back" or "Cancel" to return/cancel your operation</b>
  </div>

</div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                      <a href="{{ URL::previous() }}" class="btn btn-default" style="float:right;">Go Back</a>
                      <h3>{{ __('Change User Role') }}</h3>

                </div>

                <div class="card-body">
<!-- REGISTER -->
                    <form method="POST" action="{{route('users.update',[$users->id])}}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                            <div class="col-md-6">
                                <input id="firstname" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name',$users->name)}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="middlename" class="col-md-4 col-form-label text-md-right">{{ __('Middlename') }}</label>

                            <div class="col-md-6">
                                <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" value="{{old('middlename',$users->middlename)}}" required autocomplete="middlename" autofocus>

                                @error('middlename')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" value="{{old('lastname',$users->lastname)}}" required autocomplete="lastname" autofocus>

                                @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Department') }}</label>

                            <div class="col-md-6">
                              <select  class="form-control @error('department') is-invalid @enderror" name = "department" id = "department">
                                <option selected value="{{old('department',$users->department)}}">{{old('department',$users->department)}}</option>
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
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{old('email',$users->email)}}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{old('password',$users->password)}}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>

                            <div class="col-md-6">

                              <select class="form-control" name="role">
                                <option selected  disabled>{{old('role',$users->role)}}</option>
                                <option value="Student">Student</option>
                                <option value="Admin">Admin</option>
                              </select>


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
                                    <input type="submit" value="{{ __('Update') }}" class="btn btn-success btn-block text-white">

                                  </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <a href="{{ URL::previous() }}" class="btn btn-default btn-block">Cancel</a>

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

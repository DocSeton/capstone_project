@extends('layouts.superadmin')

@section('eventedit')

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
                  <h3>{{ __('Change Status') }}</h3>
                </div>

                <div class="card-body">
<!-- REGISTER -->
                    <form method="POST" action="{{route('superadmin.update',[$events->id])}}">
                        @csrf


                        <div class="form-group row">
                            <label for="author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                            <div class="col-md-6">
                                <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{old('author',$events->author)}}" required autocomplete="author" autofocus>

                                @error('author')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title',$events->title)}}" required autocomplete="title" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('College') }}</label>

                            <div class="col-md-6">
                                <input id="college" type="text" class="form-control @error('department') is-invalid @enderror" name="department" value="{{old('department',$events->department)}}" required autocomplete="department" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{old('description',$events->description)}}" required autocomplete="description" autofocus>

                                @error('description')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="date_from" class="col-md-4 col-form-label text-md-right">{{ __('Date_from') }}</label>

                            <div class="col-md-6">
                                <input id="date_from" type="text" class="form-control @error('date_from') is-invalid @enderror" name="date_from" value="{{old('date_from',$events->date_from)}}" required autocomplete="date_from" autofocus>

                                @error('date_from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_to" class="col-md-4 col-form-label text-md-right">{{ __('Date_to') }}</label>

                            <div class="col-md-6">
                                <input id="date_to" type="text" class="form-control @error('date_to') is-invalid @enderror" name="date_to" value="{{old('date_to',$events->date_to)}}" required autocomplete="date_to" autofocus>

                                @error('date_to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time_start" class="col-md-4 col-form-label text-md-right">{{ __('Time Start') }}</label>

                            <div class="col-md-6">
                                <input id="time_start" type="text" class="form-control @error('time_start') is-invalid @enderror" name="time_start" value="{{old('time_start',$events->time_start)}}" required autocomplete="time_start" autofocus>

                                @error('time_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time_end" class="col-md-4 col-form-label text-md-right">{{ __('Time End') }}</label>

                            <div class="col-md-6">
                                <input id="time_end" type="text" class="form-control @error('time_end') is-invalid @enderror" name="time_end" value="{{old('time_end',$events->time_end)}}" required autocomplete="time_end" autofocus>

                                @error('time_start')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>





                        <div class="form-group row">
                            <label for="venue" class="col-md-4 col-form-label text-md-right">{{ __('Venue') }}</label>

                            <div class="col-md-6">
                                <input id="venue" type="text" class="form-control @error('venue') is-invalid @enderror" name="venue" value="{{old('venue',$events->venue)}}" required autocomplete="venue" autofocus>

                                @error('venue')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                            <div class="col-md-6">

                              <select class="form-control" name="status">
                                <option selected disabled value="{{old('status',$events->status)}}">{{old('status',$events->status)}}</option>
                                <option value="Created">Created</option>
                                <option value="Approved">Approved</option>
                              </select>


                                @error('status')
                                    <span class="invalid-feedback" status="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <div class="row form-group">
                                  <div class="col-md-12">
                                    <input type="submit" value="{{ __('Save Changes') }}" class="btn btn-success btn-md text-white btn-block">

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

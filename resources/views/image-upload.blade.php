@extends('layouts.admin')

@section('uploadphotos')

<div class="container mt-5">

  <div class="card">

    <div class="card-header"><h2>Upload Event Photos</h2></div>

    <div class="card-body">

      <form action="{{route('imageUpload')}}" method="post" enctype="multipart/form-data">
          @csrf
          @if ($message = Session::get('success'))
              <div class="alert alert-success">
                  <strong>{{ $message }}</strong>
              </div>
          @endif

          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <div class="user-image mb-3 text-center">
              <div class="imgPreview"></div>
          </div>

          <div class="custom-file">
              <input type="file" name="image" class="custom-file-input" id="image" multiple="multiple">
              <label class="custom-file-label" for="image">Choose image</label>
          </div>

          <div class="form-group">
              <input type="hidden" class="form-control  @error('author') is-invalid @enderror" name = "author" id = "author" value="{{ Auth::user()->name }}">
          </div>

          <div class="form-group">
              <input type="hidden" class="form-control  @error('department') is-invalid @enderror" name = "department" id = "department" value="{{ Auth::user()->department }}">
          </div>

          <button type="submit" name="submit" class="btn btn-success btn-block mt-4">
              Upload Image
          </button>
      </form>

    </div>



  </div>


</div>







@endsection

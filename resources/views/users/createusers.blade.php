@extends('layouts.superadmin')

@section('content')

<div class="container-fluid">
  <div class="row">

    <div class="col-lg-8 col-6" style = "margin: 0 auto;margin-top:40px;">
      <!-- small box -->
      <div class="small-box">
        <div class="inner">

          <h4>Create Admin Users</h4>
          <hr>
          <form action="/addusers" method="post">
            @csrf

            <div class="form-group">
              <label for="usr">Firstname</label>
                <input type="text" name = "firstname" class="form-control @error('firstname') is-invalid @enderror" id="" placeholder="Add a Firstname">

                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

            <div class="form-group">
              <label for="usr">Middlename</label>
                <input type="text" name = "midname" class="form-control" id="" placeholder="Add a Middlename">
            </div>

            <div class="form-group">
              <label for="usr">Lastname</label>
                <input type="text" name = "lastname" class="form-control" id="" placeholder="Add a Lastname">
            </div>

            <div class="form-group">
              <label for="usr">Birthdate</label>
                <input type="date" class="form-control" name = "age" id = "age">
            </div>

            <div class="form-group">
              <label for="usr">Address</label>
                <input type="text" name = "address" class="form-control" id="" placeholder="Add an Address">
            </div>

            <div class="form-group">
              <label for="usr">Email</label>
                <input type="text" name = "email" class="form-control" id="" placeholder="Add an Email">
            </div>

            <div class="form-group">
              <label for="usr">Username</label>
                <input type="text" name = "username" class="form-control" id="" placeholder="Add a Username">
            </div>

            <div class="form-group">
              <label for="usr">Password</label>
                <input type="text" name = "password" class="form-control" id="" placeholder="Add a password">
            </div>

            <button type="submit" class="btn btn-success">Create</button>

          </form>
        </div>

      </div>
    </div>


</div>
</div>

@endsection

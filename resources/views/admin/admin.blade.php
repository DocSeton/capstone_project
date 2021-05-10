@extends('layouts.admin')
@section('adminhome')


<div class="row">
  <div class="col-md-6">
    <!-- Box Comment -->
    <div class="card card-widget">
      <div class="card-header">
        <div class="user-block">
          <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
          <span class="username"><a href="#">{{ Auth::user()->name }}</a></span>
          <span class="description">Shared publicly - 7:30 PM Today</span>
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <h5>I took this photo this morning. What do you guys think?</h5>
        <img class="img-fluid pad" src="../dist/img/photo2.png" alt="Photo">

        <button type="button" class="float-right btn btn-outline-success" style = "margin-top:10px;"><i class="fas fa-share"></i> Register</button>

      </div>
      <!-- /.card-body -->

      <!-- /.card-footer -->
      <div class="card-footer">

      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->

  <!-- /.col -->
</div>



@endsection

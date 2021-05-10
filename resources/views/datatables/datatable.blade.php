@extends('layouts.admin')

@section('datatablecontent')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container" style = "height:40px;">

  </div>


  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">


        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Event Tables</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Time</th>
                <th>Venue</th>
                <th>File</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td>C</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.5
                </td>
                <td>Win 95+</td>
                <td>5.5</td>
                <td>A</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 6
                </td>
                <td>Win 98+</td>
                <td>6</td>
                <td>A</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet Explorer 7</td>
                <td>Win XP SP2+</td>
                <td>7</td>
                <td>A</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
                <td>X</td>
              </tr>
              <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Venue</th>
                  <th>File</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                </tr>
              </tfoot>


            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection

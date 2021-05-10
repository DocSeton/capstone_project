@extends('layouts.admin')

@section('show')

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-12">



      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Evaluation Questionnaire Table</h4>
        </div>
        <div class="">
        <p>     </p>
        </div>
        <div class="ml-auto" style = "margin-right:20px;">
          <a href="{{ route('evaluation.questionnaire') }}" class = "btn btn-outline-info btn-lg">Create New</a>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">

            <thead>
            <tr>
              <th>ID</th>
              <th>Question ID</th>
              <th>Choices</th>
              <th>Created At</th>
              <th>Updated At</th>
              <th>View</th>
              <th>Edit</th>
              <th>Delete</th>
              <th>Post</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($answers as $answer)
            <tr>
              <td id = "id" value = "{{ $answer->id }}">{{ $answer->id }}</td>
              <td id = "id" value = "{{ $answer->question_id }}">{{ $answer->question_id }}</td>
              <td id = "id" value = "{{ $answer->answer }}">{{ $answer->answer }}</td>
              <td id = "id" value = "{{ $answer->created_at }}">{{ $answer->created_at }}</td>
              <td id = "id" value = "{{ $answer->updated_at }}">{{ $answer->updated_at }}</td>
<!-- View Modal -->
              <td><a href="#" class = "btn btn-outline-success" data-toggle="modal" data-target="#myModalview-{{ $answer->id }}">View</a>

                <div id="myModalview-{{ $answer->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4><strong>Event Details</strong></h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                      <p>ID: <strong>{{ $answer->id }}</strong></p>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                  </div>
                </div>
              </td>
<!-- View Modal End -->

<!-- Edit Modal -->
              <td><a href="#" class = "btn btn-outline-warning" data-toggle="modal" data-target="#myModaledit-{{ $answer->id }}">Edit</a>

                <div id="myModaledit-{{ $answer->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4><strong>Edit Event Details</strong></h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                      <strong>Title:</strong> <input type="text" name="title" value="{{ $answer->id }}" class = "form-control">


                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success" data-dismiss="modal">Save Changes</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>

                  </div>
                </div>

              </td>
<!-- Edit Modal End -->

<!-- Delete Modal -->
              <td><a href="#" class = "btn btn-outline-danger" data-toggle="modal" data-target="#myModaldelete-{{ $answer->id }}">Delete</a>

                <div id="myModaldelete-{{ $answer->id }}" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4><strong>Are you sure you want to delete this?</strong></h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">
                      <form class="" action="#" method="post">
                        <strong>Answer:</strong> <input type="text" name="id" class="form-control" value="{{ $answer->id }}" disabled>

                      </form>

                    </div>
                    <div class="modal-footer">
                      <button type="submit" class="btn btn-danger" data-dismiss="modal">Delete</button>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    </div>
                  </div>

                  </div>
                </div>
              </td>
<!-- Delete Modal End -->
<td>

    <a class = "btn btn-outline-primary" href="#">Add Questions</a>
</td>
            </tr>
            @endforeach


            <tfoot>
              <tr>
                <th>ID</th>
                <th>Question ID</th>
                <th>Answer</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
                <th>Post</th>
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




@endsection

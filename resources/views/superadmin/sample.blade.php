@extends('/admin/base')

@section('content')

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Categories</h1>
<p>{{session('status')}}</p>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" style="float:right;"  data-toggle="modal" data-method="Add" data-target="#addCategoriesModal">
      +
    </button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Category</th>
            <th>Evaluation Type Code</th>
            <th>Action</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>Category</th>
            <th>Evaluation Type Code</th>
            <th>Action</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach($categories as $category)
          <tr>
            <td>{{$category->name}}</td>
            <td>{{$category->evaluation_types_code}}</td>

            <td><a data-toggle="modal"
              data-method="Update"
              data-id="{{$category->id}}"
              data-name="{{$category->name}}"
              data-evaluation-types-code="{{$category->evaluation_types_code}}"
              href="#addCategoriesModal" class="btn btn-primary">Edit</a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


  <!-- Add Categories Modal-->
  <div class="modal fade" id="addCategoriesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Category</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/admin/categories" method="POST" id="addCategoryForm">
            @csrf
            <div class="form-group row">
              <label for="category" class="col-sm-2 col-form-label col-form-label-sm">Category:</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="category" name="category" required>
              </div>
            </div>
            <div class="form-group row">
              <label for="evaluationType" class="col-sm-2 col-form-label-sm">Evaluation Type:</label>
              <div class="col-sm-10">
                <select class="form-control" name="evaluationTypeCode" id="evaluationTypeCode" required>
                  <option value='0'>-- Select Type -- </option>
                  @foreach($evaluationTypes as $type)
                  <option value='{{$type->code}}'>{{$type->description}}</option>
                  @endforeach
                </select>
              </div>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button class="btn btn-primary" form="addCategoryForm" id="addButton" type="submit" value="Add" >Add Category</button>

        </div>
      </div>
    </div>
  </div>

  @endsection


  @section('page_plugin')
  <script src="/sbadmin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/sbadmin/vendor/datatables/dataTables.bootstrap4.min.js"></script>
  @endsection

  @section('page_script')
  <script src="/sbadmin/js/demo/datatables-demo.js"></script>

  <script>

  $('#addCategoriesModal').on('show.bs.modal', function(e) {
    var method = $(e.relatedTarget).data('method');

    if(method=="Update"){
      var category = $(e.relatedTarget).data('name');
      $(e.currentTarget).find('input[name="category"]').val(category);

      var evaluationTypeCode = $(e.relatedTarget).data('evaluation-types-code');
      $(e.currentTarget).find('select[name="evaluationTypeCode"]').val(evaluationTypeCode);

      var element = document.getElementById("addButton");
      element.innerHTML = "Update Category";
      document.getElementById("addButton").value="Update"

      var id = $(e.relatedTarget).data('id');

      var input = document.createElement("input");
      input.setAttribute("type", "hidden");
      input.setAttribute("name", "id");
      input.setAttribute("value", id);
      document.getElementById("addCategoryForm").appendChild(input);

      var methodType = document.createElement("input");
      methodType.setAttribute("type", "hidden");
      methodType.setAttribute("name", "_method");
      methodType.setAttribute("value", "PUT");

      //append to form element that you want .
      document.getElementById("addCategoryForm").appendChild(methodType);
    }else{
      var element = document.getElementById("addButton");
      element.innerHTML = "Add Category";
      document.getElementById("addButton").value="Add"

    }

  });


    $('.modal').on('hidden.bs.modal', function(){
        $(this).find('form')[0].reset();
    });
</script>
@endsection

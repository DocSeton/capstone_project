@extends('layouts.admin')

@section('sampleholder')


<div class="container-fluid">

  <div class="row">
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Messages</span>
          <span class="info-box-number">1,410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>

    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Bookmarks</span>
          <span class="info-box-number">410</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Uploads</span>
          <span class="info-box-number">13,648</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-12">
      <div class="info-box">
        <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Likes</span>
          <span class="info-box-number">93,139</span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->

</div>




<h3 class="mt-4 mb-4">Sample Gallery for Admin</h3>
<div class="col-12">
  <div class="card card-success">
    <div class="card-header">
      <div class="card-title">
        Ekko Lightbox
      </div>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample"/>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black" data-gallery="gallery">
            <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample"/>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>




<h3 class="mt-4 mb-4">Sample Admin Orgs design for superadmin</h3>

<div class="col-md-4">
  <!-- Widget: user widget style 2 -->
  <div class="card card-widget widget-user-2">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header bg-warning">
      <div class="widget-user-image">
        <img class="img-circle elevation-2" src="../dist/img/user7-128x128.jpg" alt="User Avatar">
      </div>
      <!-- /.widget-user-image -->
      <h3 class="widget-user-username">Nadia Carmichael</h3>
      <h5 class="widget-user-desc">Lead Developer</h5>
    </div>
    <div class="card-footer p-0">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a href="#" class="nav-link">
            Projects <span class="float-right badge bg-primary">31</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            Tasks <span class="float-right badge bg-info">5</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            Completed Projects <span class="float-right badge bg-success">12</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            Followers <span class="float-right badge bg-danger">842</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- /.widget-user -->
</div>


<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

@endsection

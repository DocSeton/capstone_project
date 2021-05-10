@extends('layouts.home')

@section('usergallery')





<div class="container-fluid">

  <div class="col-12">
    <div class="card">
    <div class="card-header" style="text-align:center;"><h2>College Event Gallery</h2></div>


      <div class="card-body" style="text-align:center;">
        <!--
          <a href="https://www.facebook.com/Office-Of-Student-Affairs-WU-P-111224754395418" id="gallerylink"target="_blank" class="btn btn-success btn-block" style="border-radius:20px;background-color:#31572c;">Go to Gallery</a>
            <label for="gallerylink" style="color:tomato;"><small>Note: Every event photos should be uploaded on the official OSA facebook page for event gallery purposes.</small></label>
            <a href="https://www.facebook.com/Office-Of-Student-Affairs-WU-P-111224754395418" target="_blank"><small>Click here to upload photos</small></a>
          -->

          <div class="row">

            @foreach($images as $image)

                      <div class="col-sm-2">
                      
                        <div class="" id="galphoto">
                          <a href="{{ $image->link }}" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('storage/images/gallery/'. $image->image) }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal">{{ $image->event }}</label>
                        </div>

                      </div>
            @endforeach
          </div>


      </div>




    </div>


  </div>






</div>




@endsection

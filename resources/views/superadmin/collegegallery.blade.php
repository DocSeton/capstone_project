@extends('layouts.superadmin')

@section('collegegallery')


<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#52b788;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>CAS GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($cas as $image)

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


<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#40916c;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>CBA GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($cba as $image)

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

<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#2d6a4f;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>CCJE GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($ccje as $image)

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



<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#1b4332;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>CECT GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($cect as $image)

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


<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#081c15;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>COED GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($coed as $image)

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


<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#132a13;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>CHTM GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($chtm as $image)

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


<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#31572c;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>CONAMS GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($conams as $image)

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


<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#4f772d;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>GRADUATE SCHOOL GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($graduateschool as $image)

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


<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#90a955;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>JWSLG GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($jwslg as $image)

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


<div class="col-md-12">
                <div class="card card-success">
                  <div class="card-header" style="text-align:center;color:#26734d; background-color:#d9ed92;">
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                      </button>
                    </div>
                    <div class="" style="text-align:center; color:#FFFFFF;">
                      <h2>OSA GALLERY</h2>
                    </div>


                  </div>

                  <div class="card-body" style="text-align:center;">

                    <div class="row">

                      @foreach($osa as $image)

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






<!--

<div class="container-fluid">

  <div class="col-12">
    <div class="card">
    <div class="card-header" style="text-align:center;color:#2eb82e;"><h2>College Gallery</h2></div>


      <div class="card-body" style="text-align:center;">


          <div class="row">



                      <div class="col-sm-2" style="margin-bottom:20px;">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/media/set/?vanity=111224754395418&set=a.116676323850261" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/cas.jpg') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>CAS</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/media/set/?vanity=111224754395418&set=a.116676423850251" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/cba.jpg') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>CBA</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/media/set/?vanity=111224754395418&set=a.116676467183580" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/ccje.jpg') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>CCJE</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/media/set/?vanity=111224754395418&set=a.116676593850234" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/cect.jpg') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>CECT</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/media/set/?vanity=111224754395418&set=a.116676550516905" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/coed.jpg') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>COED</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/media/set/?vanity=111224754395418&set=a.116676840516876" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/wuplogo.png') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>CONAMS</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/media/set/?vanity=111224754395418&set=a.116676680516892" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/chtm.jpg') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>CHTM</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/Office-Of-Student-Affairs-WU-P-111224754395418/photos/?tab=album&ref=page_internal" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/graduate.jfif') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>GRADUATE SCHOOL</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/media/set/?vanity=111224754395418&set=a.116676977183529" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/wuplogo.png') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>JWSLG</h5></label>
                        </div>

                      </div>

                      <div class="col-sm-2">
                        <div class="" id="galphoto">
                          <a href="https://www.facebook.com/Office-Of-Student-Affairs-WU-P-111224754395418/photos/?tab=album&ref=page_internal" id="gal" target="_blank">
                            <img class="img-fluid pad" src="{{ asset('dist/img/osa.png') }}" alt="No current event photo" style="padding:5px;">
                          </a>
                          <label for="gal"><h5>OSA</h5></label>
                        </div>

                      </div>

          </div>


      </div>




    </div>


  </div>






</div>

-->

@endsection

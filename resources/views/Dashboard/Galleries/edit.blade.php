@extends('Dashboard.main')

@section('Dashboard')
<!-- START PAGE CONTENT -->
<div class="content ">
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid  container-fixed-lg">
      <div class="inner">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb">  
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">{{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item"><a href="{{ route('Galleries.index') }}">{{ __('Galleries')}}</a></li>
          <li class="breadcrumb-item active">{{ __('Edit')}} {{ $Gallery->Title_en }}</li>
        </ol>
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="pg-ui"></i> {{ __('Edit')}} {{ $Gallery->Title_en }}</h3>
              </div>
            </div>
            <!-- END card -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END PAGE COVER -->
  <!-- START CONTAINER FLUID -->
  <div class=" container-fluid container-fixed-lg">
    <!-- START card -->
    <div class="row">
      <div class="col-lg-6">
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header ">
            <div class="card-title">
              {{ __('Edit')}} {{ $Gallery->Title_en }}
            </div>
          </div>
          @if ($errors->any())    
          <div class="pgn-wrapper top-inline" data-position="top">
            <div class="pgn push-on-sidebar-open pgn-bar">
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">{{ __('Close')}}</span></button>
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
              </div>
            </div>
          </div>
          @endif
          <div class="card-body">
            <!-- ======================== links Content Start Setting ===================================== -->
            <form action="{{ route('Galleries.update',$Gallery->slug) }}" method="POST"  role="form" 
                  enctype="multipart/form-data">
              @csrf
              @method('PATCH')
              <div class="form-group form-group-default required">
              <label for="Title_en">{{ __('Teams Title')}}</label>
              <input type="text" class="form-control @error('Title_en') is-invalid @enderror" required="" 
                     placeholder="ex: Teams Title" id="Title_en" name="Title_en" value="{!! $Gallery->Title_en !!}">
              @error('Title_en')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 
            </div>
            <div class="form-group form-group-default required">
              <label for="body_en">{{ __('Teams Content')}}</label>
              <input type="text" class="form-control @error('body_en') is-invalid @enderror" required="" placeholder="ex:Content Teams" id="body_en" name="body_en" value="{!! $Gallery->body_en !!}">
              @error('body_en')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 
            </div>
            <div class="form-group form-group-default required">
              <label for="position">{{ __('Teams Position')}}</label>
              <input type="text" class="form-control @error('position') is-invalid @enderror" required="" placeholder="ex:Content Teams" id="position" name="position" value="{!! $Gallery->position !!}">
              @error('position')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 
            </div>
            <div class="form-group">
             <span> Dont Change Image </span>
             <input type="checkbox" id="button"  onclick="myFunction()"> 
             <script>  
              function myFunction() {
                var myobj = document.getElementById("demo");
                myobj.remove();
              } 
              </script>
               <input type="hidden"  name="ImageUpload_id" value="{{ $Gallery->ImageUpload_id }}">
               <input  type="hidden"  name="ImageUpload_id" value="{{ $ImageUpload }}" id="demo">
          </div>
            <div class="row">     
            <div class="col-lg-6">
              <div class="sm-m-l-5 sm-m-r-5">
                <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="card card-default m-b-0">
                    <div class="card-header lang-title" role="tab" id="headingTwo">
                      <div class="card-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                          <button class="btn btn-primary btn-sm  btn-rounded m-r-10"> {{ __('France language')}}</button>
                        </a>
                      </div>
                    </div>
                    <div id="collapseTwo" class="collapse" role="tabcard" aria-labelledby="headingTwo">
                      <div class="card-body">
                        <div class="tab-content bg-white col-xl-12">
                          <div class="tab-pane active" id="Turkey">
                            <div class="form-group form-group-default">
                              <label>{{ __('France Title')}}</label>
                              <input type="text" value="{!! $Gallery->Title_fr !!}" name="Title_fr" class="form-control" placeholder="ex:France Title"> 
                            </div>
                            <div class="form-group"> 
                <textarea class="form-control" name="body_fr" placeholder="ex: Content France" rows="10">{!! $Gallery->body_fr !!}</textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="sm-m-l-5 sm-m-r-5">
                <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="card card-default m-b-0">
                    <div class="card-header lang-title" role="tab" id="headingThree">
                      <div class="card-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> 
                          <button class="btn btn-primary btn-sm  btn-rounded m-r-10"> {{ __('Arabic language')}}</button>
                        </a>
                      </div>
                    </div>
                    <div id="collapseThree" class="collapse" role="tabcard" aria-labelledby="headingThree">
                      <div class="card-body">
                        <div class="tab-pane" id="Arabic">
                            <div class="form-group form-group-default">
                            <label>{{ __('Title  Arabic') }}</label>
                            <input type="text"  class="form-control" 
                                   value="{!! $Gallery->Title_ar !!}" name="Title_ar"  placeholder="ex:Title Arabic">
                            </div>
                            <div class="form-group">
                            <textarea class="form-control" name="body_ar" 
                                      placeholder="ex: Content  Arabic" rows="10">{!! $Gallery->body_ar !!}</textarea>
                            </div>
                            <!-- START card -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="btn btn-success btn-cons btn-animated from-left fa fa-save pull-right" type="submit">
              <span>{{ __('save')}}</span>
            </button>
            </div>
          </div>
        </form>
        <!-- END card -->
      </div>
      <div class="col-lg-6">
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header ">
            <div class="card-title">
              {{ __('Drag and drop Image Here')}} 
            </div>
          </div>
          <div class="card-body no-scroll no-padding">
            <form method="post" action="{{url('Dashboard/image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
              <span class="thumbnail-wrapper d48 circul2 inline">
                @if(isset($Gallery->ImageUpload->filename))
                <img src="{{ asset($Gallery->ImageUpload->filename) }}" alt="Your Image" data-src="{{ asset($Gallery->ImageUpload->filename) }}" width="42" height="42">
                @else
                <img alt="Image" width="42" height="42">
                @endif
              </span>
              @csrf
            </form> 
          </div>
        </div>
        <!-- END card -->
      </div>
    </div>
    <!-- END card -->
  </div>
  </div>
  <!-- END CONTAINER FLUID -->
  @endsection
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
          <li class="breadcrumb-item"><a href="{{ route('Posts.index') }}">{{ __('Downloads')}}</a></li>
          <li class="breadcrumb-item active"> {{ __('Create Downloads')}}</li>
        </ol> 
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="far fa-save"></i> {{ __('Create Downloads')}} </h3>
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
      <div class="col-lg-9">
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header ">
            <div class="card-title">
              {{ __('Create your Downloads')}}
            </div>
          </div>
          @if ($errors->any())    
          <div class="pgn-wrapper top-inline" data-position="top">
            <div class="pgn push-on-sidebar-open pgn-bar">
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                <span class="sr-only">{{ __('Close')}}</span></button>
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
              </div>
            </div>
          </div>
          @endif
          <div class="card-body">
           <form action="{{ route('Posts.store') }}" method="POST"  role="form" enctype="multipart/form-data"> 
            @csrf
            <div class="form-group form-group-default">
              <label for="Title_en">{{ __('Downloads Title')}}</label>
              <input type="text" class="form-control @error('Title_en') is-invalid @enderror" required="" 
                     placeholder="ex:  The title for your Downloads" 
                     id="Title_en" name="Title_en">
              @error('Title_en')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 
            </div>
            <!-- START card -->
            <div class="card card-default">
              <div class="card-header">
                <div class="card-title">{{ __('Downloads Content')}}</div>
              </div>
              <div class="card-body no-scroll card-toolbar">
                <div class="summernote-wrapper">
                  <textarea  id='summernote' name="body_en"></textarea>
                </div>
              </div>
            </div>
            <!-- END card -->
            <!-- START card -->
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
                        <div class="tab-pane active" id="France">
                          <div class="form-group form-group-default">
                            <label>{{ __('Downloads France')}}</label>
                            <input type="text" name="Title_fr" class="form-control" placeholder="ex:Downloads France"> 
                          </div>
                          <!-- START card -->
                          <div class="form-group">
                            <textarea class="form-control" name="body_fr" placeholder="Downloads France" rows="10"></textarea>
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
                            <label>{{ __('Downloads Arabic')}}</label>
                            <input type="text" class="form-control" name="Title_ar"  placeholder="ex:  The Downloads"> 
                          </div>
                          <!-- START card -->
                          <div class="form-group">
                            <textarea class="form-control" name="body_ar" placeholder="Downloads Arabic" rows="10"></textarea>
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- END card -->
            <button class="btn btn-success btn-cons btn-animated from-left fa fa-save pull-right" type="submit">
              <span>{{ __('Download save')}}</span>
            </button>
          </div>
        </div>
        <!-- END card -->
      </div>
      <div class="col-lg-3">
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header ">
            <div class="card-title">{{ __('Download Content')}}</div>
          </div>
          <div class="card-body">
              <p>{{ __('These are Default Download Category')}}</p>
              <div class="form-group form-group-default form-group-default-select2 required">
                <label class="">{{ __('Category')}}</label>
                <select class="full-width" data-placeholder="Select Category" data-init-plugin="select2" name="category_id">
                  <!-- ======================== links Content Start Setting =============================== -->
                  @if($Categores !== NULL)
                  @foreach($Categores as $Category)
                  <option value="{{ $Category->id }}">{{ $Category->Title_en }}</option>
                  @endforeach
                  @else
                  <option value="0">{{ __('NO Category')}}</option>
                  @endif
                  <option value="0">{{ __('NO Category')}}</option>
                  <!-- ============================================= links Content Start Setting ============================================= -->
                </select>
              </div>
              <p>{{ __('These are Default Download Created by')}} </p>
              <div class="form-group form-group-default form-group-default-select2 required">
                <label>{{ __('Created by')}}</label>
              <select class="full-width" data-placeholder="Select Created by" data-init-plugin="select2" name="author_id">
                  <!-- ========================= links Content Start Setting ================================ -->
                  @if($Users !== NULL)
                  @foreach($Users as $Author)
                  <option value="{{ $Author->id }}">{{ $Author->name }}</option>
                  @endforeach
                  @else
                  <option value="0">{{ __('NO Created by')}}</option>
                  @endif
                  <option value="0">{{ __('NO Created by')}}</option>
                  <!-- ========================= links Content Start Setting ============================= -->
                </select>
              </div>
              <div class="form-group form-group-default">
                <label>{{ __('Downloud link')}}</label>
                <input type="text" class="form-control" name="Downloud"  placeholder="ex:Download link"> 
              </div>
            <label>{{ __('Availiblity')}}</label>
            <input type="checkbox" data-init-plugin="switchery" checked="checked" name="featured" />
            </form>
          </div>
        </div>
        <!-- END card -->
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header ">
            <div class="card-title">
              {{ __('Drag and drop Download image Here')}} 
            </div>
          </div>
          <div class="card-body no-scroll no-padding">
            <form method="post" action="{{url('Dashboard/image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
              @csrf
            </form> 
        </div>
      </div>
      <!-- END card -->
    </div>
  </div>
  <!-- END card -->
</div>
<!-- END CONTAINER FLUID -->
</div>
<!-- END PAGE CONTENT -->
@endsection
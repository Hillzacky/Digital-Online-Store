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
    <li class="breadcrumb-item"><a href="{{ route('Categories.index') }}">{{ __('Categories')}}</a></li>
    <li class="breadcrumb-item active">{{ __('Create Category')}}</li>
  </ol>
  <!-- END BREADCRUMB -->
  <div class="container-md-height">
    <div class="row">
      <!-- START card -->
      <div class="card card-transparent">
        <div class="card-body">
          <h3><i class="pg-folder"></i> {{ __('New Category')}}</h3>
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
<div class="col-lg-12">
  <!-- START card -->
  <div class="card card-default">
    <div class="card-header ">
      <div class="card-title">
       {{ __('Create your Category')}} 
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
    <form action="{{ route('Categories.store') }}" method="POST"  role="form" enctype="multipart/form-data"> 
      @csrf
      <div class="form-group form-group-default required">
        <label class="fade" for="parent_id">{{ __('Parent Category')}}</label>
        <input type="number" class="form-control @error('parent_id') is-invalid @enderror" required="" placeholder="ex: 1 2 3"  name="parent_id">
        @error('parent_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group form-group-default required">
        <label class="fade" for="order">{{ __('Order Category')}}</label>
        <input type="number" class="form-control @error('order') is-invalid @enderror" required="" placeholder="ex: 1 2 3" name="order">
        @error('order')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group form-group-default required">
        <label class="fade" for="Title_en">{{ __('Title Category')}}</label>
        <input type="text" class="form-control" required="" placeholder="ex: Title Category" name="Title_en">
        @error('Title_en')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group form-group-default form-group-default-select2 required">
        <label class="fade" for="color">{{ __('Category Color')}}</label>
        <select class="full-width" data-placeholder="Select color" data-init-plugin="select2" name="color">
          <option value="danger">{{ __('color Red')}}</option>
          <option value="primary">{{ __('color primary')}}</option>
          <option value="complete">{{ __('color complete')}}</option>
          <option value="success">{{ __('color success')}}</option>
          <option value="info">{{ __('color info')}}</option>
          <option value="warning">{{ __('color warning')}}</option>
        </select>
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
                          <label>{{ __('Category France')}}</label>
                          <input type="text" name="Title_fr" class="form-control" placeholder="ex:Category France"> 
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
                        <label>{{ __('Title Category Arabic') }}</label>
                        <input type="text" class="form-control" name="Title_ar"  placeholder="ex: Title Category Arabic"></div>
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
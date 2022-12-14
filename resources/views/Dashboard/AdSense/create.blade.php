@extends('Dashboard.main')

@section('Dashboard')
<div class="content">
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid  container-fixed-lg">
      <div class="inner">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb">  
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">{{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item"><a href="{{ route('AdSense.index') }}">{{ __('Advertisement')}}</a></li>
          <li class="breadcrumb-item active">{{ __('Create Advertisement')}}</li>
        </ol>
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="pg-image"></i> {{ __('Advertisement')}} </h3>
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
              {{ __('Create your Advertisement')}}
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
            <form action="{{ route('AdSense.store') }}" method="POST"  role="form" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <p>{{ __('These are Default Advertisement Location')}}</p>
              <div class="form-group form-group-default form-group-default-select2 required">
                <label for="Location">{{ __('Location')}}</label>
                <select class="full-width" data-placeholder="{{ __('Select Location')}}" 
                        data-init-plugin="select2" name="Location">
                  <option value="Home">{{ __('Home')}}</option>
                  <option value="Header">{{ __('Header')}}</option>
                  <option value="Footer">{{ __('Footer')}}</option>
                  <option value="Single">{{ __('Post Single')}}</option>
                  <option value="Other">{{ __('Other')}}</option>
                </select>
              </div>
            </div>
            <div class="form-group form-group-default required">
              <label for="name">{{ __('Advertisement Title')}}</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" required="" placeholder="{{ __('ex: This Title Advertisement')}}" name="name">
              @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror  
            </div>
            <div class="form-group form-group-default required">
              <label for="Display">{{ __('Your Display Name')}}</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" required="" 
                     placeholder="{{ __('ex:  Your Display Name')}}" name="Display">
              @error('Display')
                <div class="alert alert-danger">{{ $message }}</div>
              @enderror 
            </div>
            <div class="card card-default">
          <div class="card-header ">
            <div class="card-title">{{ __('Control Advertisement')}}</div>
          </div>
          <div class="card-body">
            <label for="Active">{{ __('Active Advertisement')}}</label>
            <input type="checkbox" data-init-plugin="switchery" name="Active" />
          </div>
        </div>
        <div class="row">
        <p>{{ __('These are Default Advertisement Type')}}</p>
        <div class="form-group form-group-default form-group-default-select2 required">
        <label for="Type">{{ __('Type')}}</label>
        <select class="full-width" data-placeholder="{{ __('Select Type')}}" data-init-plugin="select2" name="Type">
            <option value="Code">{{ __('Code')}}</option>
            <option value="image">{{ __('image')}}</option>
        </select>
        </div>
        </div>
        <div class="row">     
        <div class="col-lg-6">
        <div class="sm-m-l-5 sm-m-r-5">
          <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="card card-default m-b-0">
              <div class="card-header lang-title" role="tab" id="headingTwo">
                <div class="card-title">
                  <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                    <button class="btn btn-primary btn-sm  btn-rounded m-r-10"> {{ __('Image')}}</button>
                  </a>
                </div>
              </div>
              <div id="collapseTwo" class="collapse" role="tabcard" aria-labelledby="headingTwo">
                <div class="card-body">
                  <div class="form-group form-group-default required">
                    <label for="url">{{ __('Your Url Image')}}</label>
                    <input type="text" class="form-control @error('url') is-invalid @enderror" placeholder="{{ __('ex:  Your Url Image')}}" name="url"> 
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
                    <button class="btn btn-primary btn-sm  btn-rounded m-r-10"> {{ __('AdSense')}}</button>
                  </a>
                </div>
              </div>
              <div id="collapseThree" class="collapse" role="tabcard" aria-labelledby="headingThree">
                <div class="card-body">
                  <div class="tab-pane" id="Arabic">
                    <div class="card-body no-scroll card-toolbar">
                      <div class="summernote-wrapper">
                        <textarea  id='summernote' name="code"></textarea>
                      </div>
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
        <!-- END card -->
        <button class="btn btn-success btn-cons btn-animated from-left fa fa-save pull-right mb-30" type="submit"><span>{{ __('save')}}</span>
        </button>
          </div>
        </div>
        <!-- END card -->
      </div>
      <!-- END card -->
      </form>
      <!-- START card -->
      <!-- END card -->
    </div>
  </div>
  <!-- END card -->
</div>
</div>
@endsection
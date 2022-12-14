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
            <li class="breadcrumb-item"><a href="{{ route('Roles.index') }}">{{ __('Roles')}}</a></li>
            <li class="breadcrumb-item active">{{ __('Create role')}}</li>
          </ol>
          <!-- END BREADCRUMB -->
          <div class="container-md-height">
            <div class="row">
              <!-- START card -->
              <div class="card card-transparent">
                <div class="card-body">
                  <h3><i class="pg-lock"></i>{{ __('add role')}}</h3>
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
                {{ __('Create your role')}}
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
              <form action="{{ route('Roles.store') }}" method="POST"  role="form" enctype="multipart/form-data"> 
                @csrf 
                <div class="form-group form-group-default required">
                  <label class="fade" for="name">{{ __('Name')}}</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="ex: admin User Supervisor" 
                  name="name" required="">
                  @error('name')
                   <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group form-group-default required">
                  <label class="fade" for="guard_name">{{ __('Display Name')}}</label>
        <input class="form-control @error('guard_name') is-invalid @enderror" required="" placeholder="ex: admin roles" id="guard_name" type="text" name="guard_name">
        @error('guard_name')
                   <div class="alert alert-danger">{{ $message }}</div>
        @enderror
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
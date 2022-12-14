@extends('Dashboard.main')

@section('Dashboard')
<div class="content ">
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid  container-fixed-lg">
      <div class="inner">
        <!-- ============= START BREADCRUMB ============= -->
        <ol class="breadcrumb">  
          <li class="breadcrumb-item"><a href="{{ url('admin') }}"> {{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item"><a href="{{ route('Users.index') }}"> {{ __('Users')}}</a></li>
          <li class="breadcrumb-item active"> {{ __('Edit')}} {{ $User->name }}</li>
        </ol>
        <!--  ============= START BREADCRUMB ============= -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="fa fa-user"></i> {{ __('edit')}}  {{ $User->name }}</h3>
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
          <div class="card-header">
            <div class="card-title">
               {{ __('Edit Your')}}  {{ $User->name }}
            </div>
          </div>
          @if ($errors->any())    
          <div class="pgn-wrapper top-inline" data-position="top">
            <div class="pgn push-on-sidebar-open pgn-bar">
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span>
                 <span class="sr-only">{{ __('Close')}}</span>
                </button>
                @foreach ($errors->all() as $error)
                {{ $error }}
                @endforeach
              </div>
            </div>
          </div>
          @endif
          <div class="card-body">
  <!-- ======================== links Content Start Setting ====================================== -->
  <form action="{{ route('Users.update', [ 'User' => $User->slug ])}}" method="POST" role="form" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
              <input name="name"  value="{{ $User->name }}" required="" class="form-control" hidden="" placeholder="ex: example muhannad Meteors"> 
               @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
               @enderror
            <div class='form-group'>
              @foreach ($Roles as $role)
                  {{ Form::checkbox('roles[]',  $role->id, $User->roles ) }}
                  {{ Form::label($role->name, ucfirst($role->name)) }}<br>
              @endforeach
            </div>
            <div class="form-group form-group-default required">
                <label for="Phone">{{ __('Phone')}}</label>
                <input value="{{ $User->Phone }}" type="text" class="form-control @error('Phone') is-invalid @enderror" id="Phone" name="Phone" required="" placeholder="ex:(002) 020"> 
                @error('Phone')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group form-group-default required">
                <label for="password">{{ __('Password')}}</label>
                <input type="password" placeholder="ex: example muhannad Meteors" class="form-control" id="password" name="password">
              </div>
              <div class="form-group form-group-default required">
                <label for="password_confirmation">{{ __('Password confirmation')}}</label>
                <input type="password" placeholder="ex: example muhannad Meteors" class="form-control" id="password_confirmation" name="password_confirmation">
              </div>
              <div class="form-group form-group-default required">
                <label for="email">{{ __('email')}}</label>
                <input value="{{ $User->email }}" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ex: some@example.com" required="" id="email" name="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              <span> Dont Change Image </span>
             <input type="checkbox" id="button"  onclick="myFunction()"> 
             <script>  
              function myFunction() {
                var myobj = document.getElementById("demo");
                myobj.remove();
              } 
              </script>
               <input type="hidden"  name="ImageUpload_id" value="{{ $User->ImageUpload_id }}">
               <input  type="hidden"  name="ImageUpload_id" value="{{ $ImageUpload }}" id="demo">
               <button class="btn btn-success btn-cons btn-animated from-left fa fa-save pull-right" type="submit">
                <span>{{ __('save')}}</span>
               </button>
            </form>
          </div>
        </div>
        <!-- END card -->
      </div>
      <div class="col-lg-6">
        <!-- START card -->
        <div class="card card-default">
          <div class="card-header">
            <div class="card-title">
             {{ __('Drag and drop Avatar Here')}}  
            </div>
          </div> 
          <div class="card-body no-scroll no-padding">
          <form method="post" action="{{url('Dashboard/image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
            <span class="thumbnail-wrapper d48 circul2 inline">
            @if(isset($User->ImageUpload->filename))
             <img src="{{ asset($User->ImageUpload->filename) }}" alt="Your Image" data-src="{{ asset($User->ImageUpload->filename) }}" width="42" height="42">
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
@endsection
@extends('Dashboard.main')

@section('Dashboard')
<!-- ====================== links Roles Content Start =============================================== -->
  @if ($message = Session::get('success'))
  <div class="pgn-wrapper" data-position="top-right">
    <div class="pgn push-on-sidebar-open pgn-flip">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">×</span>
          <span class="sr-only">{{ __('Close')}}</span>
        </button><span>{{ $message }}</span>
      </div>
    </div>
  </div>
  @endif 
  <!-- ====================== links Roles Content Start =============================================== -->
  @if ($message = Session::get('Delete'))
  <div class="pgn-wrapper" data-position="bottom-right">
    <div class="pgn push-on-sidebar-open pgn-flip">
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">×</span>
          <span class="sr-only">{{ __('Close')}}</span>
        </button><span>{{ $message }}</span>
      </div>
    </div>
  </div>
  @endif
  <!-- ====================== links Roles Content Start =============================================== -->
<!-- START PAGE CONTENT -->
<div class="content ">
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid  container-fixed-lg">
      <div class="inner">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">{{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item active">{{ __('Users')}}</li>
        </ol>
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="fa fa-user"></i> {{ __('Users')}} <a href="{{ route('Users.create') }}" class="btn btn-tag btn-success btn-tag-rounded">{{ __('Add User')}}</a></h3>
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
  <div class=" container-fluid   container-fixed-lg bg-white">
    <!-- START card -->
    <div class="card card-transparent">
      <div class="card-header ">
        <div class="card-title">{{ __('Table Users')}}
        </div>
        <div class="pull-right">
          <div class="col-xs-12">
            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="card-body">
        <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
          <thead>
            <tr>
              <th>{{ __('Avatar')}}</th>
              <th>{{ __('Name')}}</th>
              <th>{{ __('Role')}}</th>
              <th>{{ __('Email')}}</th>
              <th>{{ __('Edit')}}</th>
              <th class="text-right">{{ __('DELETE')}}</th>
            </tr>
          </thead>
          <tbody>
            <!-- ================================ Users Content Start ======================== -->
            @foreach($Users as $User)
            <tr>
              <td class="v-align-middle semi-bold">
                <span class="thumbnail-wrapper d48 circul2 inline">
                @if(isset($User->ImageUpload->filename))
                 <img src="{{ asset($User->ImageUpload->filename) }}" data-src="{{ asset($User->ImageUpload->filename) }}" width="32" height="32">
                 @else
                 @endif
                </span>
              </td>
              <td class="v-align-middle semi-bold">
                <p>{{ $User->name  }}</p>
              </td>
               <td class="v-align-middle semi-bold">
                <p>{{  $User->roles()->pluck('name')->implode(' ') }}</p>
              </td>
              <td class="v-align-middle semi-bold">
                <p>{{ $User->email }}</p>
              </td>
              <td class="v-align-middle text-right">
                <a href="{!! route('Users.edit', [ 'User' => $User->slug ]) !!}" class="btn btn-complete btn-cons btn-animated from-left fa fa-edit"><span>{{ __('Edit')}}</span></a>
              </td> 
              <td class="v-align-middle text-right">
                <p>
                  <form action="{{ route('Users.destroy',$User->id) }}" method="POST" role="form">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-cons btn-animated from-top fa  fa-remove">
                    <span>{{ __('Delete')}}</span>
                  </button>
                  </form>
                  </p>
              </td>
            </tr>
            @endforeach
            <!-- ================================ Users Content Start ======================== -->
          </tbody>
        </table>
        <div class="pull-right">
          <!-- ====================== links Content Start ============================ -->
           {{ $Users->links() }}
          <!-- ====================== links Content Start ============================ -->
        </div>
      </div>
    </div>
    <!-- END card -->
  </div>
</div>
@endsection
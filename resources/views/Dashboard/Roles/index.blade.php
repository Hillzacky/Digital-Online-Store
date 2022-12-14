@extends('Dashboard.main')

@section('Dashboard')
<!-- START PAGE CONTENT -->
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
<div class="content ">
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid  container-fixed-lg">
      <div class="inner">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">{{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item active">{{ __('Roles')}}</li>
        </ol>
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="pg-lock"></i>{{ __('Roles')}} <a href="{{ route('Roles.create') }}" class="btn btn-tag btn-success btn-tag-rounded">{{ __('Add Role')}}</a></h3>
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
        <div class="card-title">{{ __('Table Roles')}}
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
              <th>{{ __('Name')}}</th>
              <th>{{ __('Display Name')}}</th>
              <th>{{ __('Created at')}}</th>
              <th class="text-right">{{ __('Actions')}}</th>
            </tr>
          </thead>
          <tbody>
            <!-- ================================ Roles Content Start ======================== -->
            @foreach($Roles as $Role)
            <tr>
              <td class="v-align-middle semi-bold">
                <p>{{ $Role->name  }}</p>
              </td>
              <td class="v-align-middle"><a class="btn btn-tag">{{ $Role->guard_name  }}</a></td>
              <td class="v-align-middle"><a class="btn btn-tag">{{ date('M j, Y', strtotime($Role->created_at)) }}</a></td>
              <td class="v-align-middle text-right">
                <p>
                  <!-- ================================ delete advertisers Content Start ======================== -->
                  <form action="{{ route('Roles.destroy',$Role->id) }}" method="POST" class="displayinline-block">
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
            <!-- ================================ Roles Content Start ======================== -->
          </tbody>
        </table>
        <!-- ====================== links Galleres Content Start =============================================== -->
         {{ $Roles->links() }}
        <!-- ====================== links Galleres Content Start =============================================== -->
      </div>
    </div>
    <!-- END card -->
  </div>
</div>
<!-- END PAGE CONTENT -->
@endsection
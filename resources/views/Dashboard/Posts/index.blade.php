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
<div class="content ">
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid  container-fixed-lg">
      <div class="inner">
        <!-- START BREADCRUMB --> 
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">{{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item active">{{ __('Downloads')}}</li>
        </ol>
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="far fa-save"></i> {{ __('Downloads')}} 
                  <a href="{{ route('Posts.create') }}" class="btn btn-tag btn-success btn-tag-rounded"> 
                   {{ __('Add Downloads')}}
                  </a>
                </h3>
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
  <div class="container-fluid container-fixed-lg bg-white">
    <!-- START card -->
    <div class="card card-transparent">
      <div class="card-header ">
        <div class="card-title">{{ __('Table Downloads')}}
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
              <th>{{ __('Download Image')}}</th>
              <th>{{ __('Title')}}</th>
              <th>{{ __('Category')}}</th>
              <th>{{ __('Availability')}}</th>
              <th>{{ __('Edit')}}</th>
              <th class="text-right">{{ __('DELETE')}}</th>
            </tr>
          </thead>
          <tbody>
            <!-- ================================ Posts Content Start ======================== -->
            @foreach($Posts as $Post)
            <tr>
              <td class="v-align-middle semi-bold">
                <span class="thumbnail-wrapper d48 circul2 inline">
                @if(isset($Post->ImageUpload->filename))
                 <img src="{{ asset($Post->ImageUpload->filename) }}" data-src="{{ asset($Post->ImageUpload->filename) }}" width="32" height="32">
                 @else
                 <img src="{{ asset('Dashboard/assets/img/Favicon/apple-icon-57x57.png') }}" data-src="{{ asset('Dashboard/assets/img/Favicon/apple-icon-57x57.png') }}" width="32" height="32">
                 @endif
                </span>
              </td>
              <td class="v-align-middle semi-bold">
                <p>{{ $Post->Title_en  }}</p>
              </td>
              @if(isset($Post->Category->Title_en))
               <td class="v-align-middle"><a class="btn btn-tag">{{ $Post->Category->Title_en }}</a></td>
              @else
               <td class="v-align-middle"><a class="btn btn-tag">{{ __('Category')}}</a></td>
              @endif 
              <td class="v-align-middle semi-bold">
                <p>{{ $Post->featured }}</p>
              </td>
              <td class="v-align-middle text-right">
                <a href="{{ route('Posts.edit',$Post->slug) }}" class="btn btn-complete btn-cons btn-animated from-left fa fa-edit"><span>{{ __('Edit')}}</span></a>
              </td> 
               <td class="v-align-middle text-right">
                <form action="{{ route('Posts.destroy',$Post->id) }}" method="POST" class="displayinline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-cons btn-animated from-top fa  fa-remove">
                <span>{{ __('Delete')}}</span>
                </button>
                </form>
              </td>
            </tr>
             @endforeach
            <!-- ================================ Posts Content Start ======================== -->
          </tbody>
        </table>
        <div class="pull-right">
           <!-- ====================== links Posts Content Start =============================================== -->
            {{ $Posts->links() }}
           <!-- ====================== links Posts Content Start =============================================== -->
        </div>
      </div>
    </div>
    <!-- END card -->
  </div>
</div>
@endsection
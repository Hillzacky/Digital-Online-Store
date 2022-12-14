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
  <div class="social-wrapper">
    <div class="social " data-pages="social">
      <!-- START JUMBOTRON -->
      <div class="jumbotron" data-social="cover" data-pages="parallax">
        <div class="cover-photo">
          <img alt="Cover photo" src="{{ asset(option('settings')) }}" />
        </div>
        <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
          <div class="inner">
            <div class="pull-bottom bottom-left m-b-40 sm-p-l-15">
              <h5 class="text-white no-margin">{{ __('welcome Settings')}}</h5>
              <h1 class="text-white no-margin"><span class="semi-bold">{{ __('Settings')}}</span> {{ __('cover')}}</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- END JUMBOTRON -->
      <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
        <div class="feed">
          <!-- START DAY -->
          <div class="day" data-social="day">
            <!-- START ITEM -->
            <div class="card no-border bg-transparent full-width" data-social="item">
              <!-- START CONTAINER FLUID -->
              <div class="container-fluid p-t-30 p-b-30 ">
                <div class="row">
                  <div class="col-lg-4">
                    <p class="no-margin fs-16"> {{ __('How To Use')}} </p>
                    <p class="hint-text m-t-5 small">{{ __('You can get the value of each setting anywhere on your site by calling option someKey')}} </p>
                  </div>
                  <div class="col-lg-8">
                    <div class="container-xs-height">
                      <div class="row-xs-height">
                        <div class="col-xs-height p-l-20">
                          <form action="{{ route('Settings.store') }}" method="POST"  role="form" enctype="multipart/form-data"> 
                           @csrf
                           <div class="form-group displayinline-block">
                            <label>{{ __('Your key')}}</label>
                            <span class="help">{{ __('option someKey')}}</span>
                            <input type="text" class="form-control" required="" name="key">
                          </div>
                          <div class="form-group displayinline-block">
                            <label>{{ __('Your value')}}</label>
                            <span class="help">{{ __('option somevalue')}}</span>
                            <input type="text" class="form-control" required="" name="value">
                          </div>
                          <div class="form-group displayinline-block">
                           <button  class="btn btn-tag   btn-tag-light btn-tag-rounded m-r-20" type="submit">{{ __('Create')}}</button>
                         </div>
                       </form>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
           <!-- END CONTAINER FLUID -->
         </div>
         <!-- END ITEM -->
         <!-- START CONTAINER FLUID -->
         <div class="card-body">
          <div class="row">
            <!-- ================================ Galleries Content Start ======================== -->
            @foreach($Settings as $Setting)
            <div class="col-lg-3">
              <div class="card card-default">
                <div class="card-header">
                  <div class="card-controls">
                    <ul>
                     <form action="{{ route('Settings.destroy',$Setting->id) }}" method="POST" class="displayinline-block">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-tag btn-tag-light btn-tag-rounded m-r-20">
                        <span>{{ __('Delete')}}</span>
                      </button>
                    </form>
                  </ul>
                </div>
              </div>
              <div class="card-body">
                <div class="scrollable">
                  <div class="demo-card-scrollable">
                    <h3>
                     <span class="semi-bold">{{ $Setting->key }} <a href="{{ route('Settings.edit',$Setting->id) }}" class="btn btn-tag btn-tag-light btn-tag-rounded m-r-20">{{ __('Edit')}}</a></span>
                     <p class="no-margin fs-16"> option({{ $Setting->key  }}) </p>
                   </h3>
                   <p>{{ $Setting->value }}</p>
                 </div>
               </div>
             </div>
           </div>
         </div>
         @endforeach
       </div>
     </div>
     <!-- END CONTAINER FLUID -->
   </div>
   <!-- END DAY -->
 </div>
 <!-- END FEED -->
</div>
<!-- END CONTAINER FLUID -->
</div>
<!-- /container -->
</div>
</div>
<!-- END PAGE CONTENT -->
@endsection
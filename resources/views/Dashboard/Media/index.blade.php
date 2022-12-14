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
<div class="content">
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
              <h5 class="text-white no-margin">{{ __('Media')}}</h5>
              <h1 class="text-white no-margin"><span class="semi-bold">{{ option('SiteTitle')  }}</span> {{ __('Media')}}</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /container -->
  </div>
</div>
<!-- END PAGE CONTENT -->
<!-- START PAGE CONTENT -->
<div class="content padding-topinline">
  <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
    <!-- START CATEGORY -->
    <div class="gallery">
      @foreach($Medias as $Media)
      <div class="gallery-item" data-width="1" data-height="1">
        <img src="{{ asset($Media->filename) }}" class="image-responsive-height">
        <!-- START ITEM OVERLAY DESCRIPTION -->
        <div class="overlayer bottom-left full-width">
          <div class="overlayer-wrapper item-info ">
            <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
              <div class="">
                <p class="pull-left bold text-white fs-14 p-t-10">{{ $Media->filename }}</p>
                <div class="clearfix"></div>
              </div>
              <div class="m-t-10">
                <div class="pull-right m-t-15">
                  <form action="{{ route('Media.destroy',$Media->id) }}" method="POST" class="displayinline-block">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-cons btn-animated from-top fa  fa-remove">
                      <span>{{ __('Delete')}}</span>
                    </button>
                  </form>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- END PRODUCT OVERLAY DESCRIPTION -->
      </div>
      @endforeach
    </div>
    <!-- END CATEGORY -->
  </div>
  <!-- START DIALOG -->
</div>
<!-- END PAGE CONTENT -->
@endsection
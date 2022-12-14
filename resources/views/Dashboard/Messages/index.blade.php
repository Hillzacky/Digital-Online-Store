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
          <img alt="Cover photo" src="{!! asset(option('settings')) !!}" />
        </div>
        <div class=" container-fluid   container-fixed-lg sm-p-l-0 sm-p-r-0">
          <div class="inner">
            <div class="pull-bottom bottom-left m-b-40 sm-p-l-15">
              <h5 class="text-white no-margin">{{ __('Our Messages')}}</h5>
              <h1 class="text-white no-margin"><span class="semi-bold">{{ option('SiteTitle')  }}</span>{{ __('Messages')}} </h1>
            </div>
          </div> 
        </div>
      </div>
      <!-- END JUMBOTRON -->
      <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
        <div class="feed">
          <!-- START DAY -->
          <div class="day" data-social="day">
            <!-- END ITEM -->
            <!-- ================================ Message Content Start ======================== -->
            @foreach($Messages as $Message)
            <!-- START ITEM -->
            <div class="card social-card share col2 m-t-30 m-b-30 m-r-30" data-social="item">
              <div class="circle" data-toggle="tooltip" title="Label" data-container="body"></div>
              <div class="card-header clearfix">
                <div class="user-pic">
                  @if(isset($Message->User->ImageUpload->filename))
                  <img width="33" height="33" 
                  data-src-retina="{{ asset($Message->User->ImageUpload->filename) }}" 
                  data-src="{{ asset($Message->User->ImageUpload->filename) }}" 
                  src="{{ asset($Message->User->ImageUpload->filename) }}">
                  @else
                  @endif 
                </div>
                <h5>{{ $Message->name }}</h5>
                <h6>Subject {{ $Message->Subject }} 
                  <span class="location semi-bold"><i class="fa fa-mail"></i> {{ $Message->mail }}</span>
                  </h6>
                </div>
                <div class="card-description">
                  <p>{{ $Message->Message }}</p>
                  <div class="via">{{ date('M j, Y', strtotime($Message->created_at)) }}</div>
                  <form action="{{ route('Messages.destroy',$Message->id) }}" method="POST" class="displayinline-block">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-tag  btn-tag-danger float-right-zero" type="submit">{{ __('Remove')}}</button>
                  </form>
                </div>
              </div>
              <!-- END ITEM -->
              @endforeach
              <!-- ================================ Message Content Start ======================== -->
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
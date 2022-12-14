@extends('Dashboard.app')

@section('auth')
<span class="display-zero">{!! $Locale = LaravelLocalization::getCurrentLocale() !!}</span>
<div class="login-wrapper">
  <!-- START Login Background Pic Wrapper-->
  <div class="bg-pic">
    <!-- START Background Pic-->
    <img src="{!! asset(option('settings')) !!}" data-src="{!! asset(option('settings')) !!}" data-src-retina="{!! asset(option('settings')) !!}" class="lazy">
    <!-- END Background Pic -->
    <!-- START Background Caption -->
    <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
      <h2 class="semi-bold text-white">{!! option('SiteTitle')  !!}</h2>
      <p class="small">
       @if($Locale == 'ar')
       {!! option('Home_ar') !!}
       @elseif($Locale == 'fr')
       {!! option('Home_fr') !!}
       @else
       {!! option('Home_en') !!}
       @endif
     </p>
   </div>
   <!-- END Background Caption-->
 </div>
 <!-- END Login Background Pic Wrapper-->
 <!-- START Login Right Container-->
 <div class="login-container bg-white">
  <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
    <img src="{!! asset(option('logo')) !!}" alt="logo" data-src="{!! asset(option('logo')) !!}" 
         data-src-retina="{!! asset(option('logo')) !!}" width="120px">
    <p class="p-t-35">{!! __('main.Sign_In')!!}</p>
    <!-- START Login Form -->
    <form class="p-t-15" role="form" method="POST" action="{!! route('login') !!}">
      @csrf
      <!-- START Form Control-->
      <div class="form-group form-group-default">
        <label>{!! __('main.Sign_In') !!}</label>
        <div class="controls">
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{!! old('email') !!}" placeholder="{!! __('main.E-Mail_Address')!!}"  required autocomplete="email" autofocus>
          @error('email')
          <span class="invalid-feedback" role="alert">
            <strong>{!! $message !!}</strong>
          </span>
          @enderror
        </div>
      </div>
      <!-- END Form Control-->
      <!-- START Form Control-->
      <div class="form-group form-group-default">
        <label>{!! __('main.Password')!!}</label>
        <div class="controls">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{!! __('main.Password')!!}">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{!! $message !!}</strong>
          </span>
          @enderror
        </div>
      </div>
      <!-- START Form Control-->
      <div class="row">
        <div class="col-md-6 no-padding sm-p-l-10">
          <div class="checkbox">
            <input type="checkbox" name="remember" id="checkbox1" {!! old('remember') ? 'checked' : '' !!}>
            <label for="checkbox1">{!! __('main.Remember_Me')!!}</label>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-center justify-content-end">
          @if (Route::has('password.request'))
          <a href="{!! route('password.request') !!}" class="text-info small">{!! __('main.Forgot_Password')!!}</a>
          @endif
        </div>
      </div>
      <!-- END Form Control-->
      <button class="btn btn-primary btn-cons m-t-10" type="submit">{!! __('main.Sign_in') !!}</button>
    </form>
    <!--END Login Form-->
  </div>
</div>
<!-- END Login Right Container-->
</div>
@endsection

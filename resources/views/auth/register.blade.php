@extends('Dashboard.app')

@section('auth')
<span class="display-zero">{!! $Locale = LaravelLocalization::getCurrentLocale() !!}</span>
<div class="login-wrapper">
  <!-- START Login Background Pic Wrapper-->
  <div class="bg-pic">
    <!-- START Background Pic-->
    <img src="{!! asset(option('coveruser')) !!}" data-src="{!! asset(option('coveruser')) !!}" class="lazy">
    <!-- END Background Pic-->
    <!-- START Background Caption-->
    <!-- START Background Caption-->
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
    <img src="{!! asset(option('logo')) !!}" width="120px" alt="logo" data-src="{!! asset(option('logo')) !!}" 
         data-src-retina="{!! asset(option('logo')) !!}">
    <p class="p-t-35">{!! __('main.Sign_Up')!!}</p>
    <!-- START Login Form -->
    <form method="POST" class="p-t-15" role="form" action="{!! route('register') !!}">
      @csrf
      <!-- START Form Control-->
      <div class="form-group form-group-default">
        <label>{!! __('main.Name')!!}</label>
        <div class="controls">
          <input placeholder="{!! __('main.Name')!!}" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{!! old('name') !!}" required autocomplete="name" autofocus>
          @error('name')
          <span class="invalid-feedback" role="alert">
            <strong>{!! $message !!}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-group form-group-default">
        <label>{!! __('main.E-Mail_Address')!!}</label>
        <div class="controls">
          <input placeholder="{!! __('main.E-Mail_Address')!!}" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{!! old('email') !!}" required autocomplete="email">
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
          <input placeholder="{!! __('main.Password')!!}" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @error('password')
          <span class="invalid-feedback" role="alert">
            <strong>{!! $message !!}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-group form-group-default">
        <label>{!! __('main.Confirm_Password')!!}</label>
        <div class="controls">
          <input placeholder="{!! __('main.Confirm_Password')!!}" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>
      </div>
      <!-- END Form Control-->
      <button class="btn btn-primary btn-cons m-t-10" type="submit">{!! __('main.Sign_Up')!!}</button>
    </form>
  </div>
</div>
<!-- END Login Right Container-->
</div>
@endsection

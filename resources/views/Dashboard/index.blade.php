@extends('Dashboard.main')

@section('Dashboard')
<!-- START PAGE CONTENT -->
<div class="content sm-gutter">
<!-- START CONTAINER FLUID -->
<div class="container-fluid padding-25 sm-padding-10">
<!-- START ROW -->
<div class="row">
<div class="col-lg-5 col-xlg-5">
<div class="row">
<div class="col-md-12 m-b-10"> 
<div class="ar-3-2 widget-1-wrapper dash-user">
<!-- START WIDGET widget image Widget -->
<div class="widget-1 card no-border bg-danger no-margin widget-loader-circle-lg max-height-card">
  <style type="text/css">
    .widget-1:after { 
    background-image: url("{{ asset(option('coveruser')) }}");
    }
    .widget-2:after {
      background-image: url("{{ asset(option('covernew')) }}");
    }
    .widget-3:after {
      background-image: url("{{ asset(option('covermessage')) }}");
    }
    .widget-4:after {
      background-image: url("{{ asset(option('coveradvertisement')) }}");
    }
    .widget-5:after {
      background-image: url("{{ asset(option('coverinstagram')) }}");
    }
  </style>
<div class="card-body">
<div class="pull-bottom bottom-left bottom-right">
<span class="label font-montserrat fs-10">{{ count(Users()) }} {{ __('Users')}}</span>
<br>
<h2 class="text-white">{{ __('You have')}} {{ count(Users()) }} {{ __('Users in your Database.')}} </h2>
<p class="text-white hint-text"><a href="{{ route('Users.index') }}" class="text-white">{{ __('Learn More at Users')}}</a></p>
<div class="row stock-rates m-t-15">
<div class="company col-4">
<div>
<p class="font-montserrat text-success no-margin fs-16">
{{ count(Users()) }}
<span class="font-arial text-white fs-12 hint-text m-l-5">{{ __('Users')}}</span>
</p>
<p class="bold text-white no-margin fs-10 font-montserrat lh-normal">
 {{ __('Dashboard Users')}}
</p>
</div>
</div>
<div class="company col-4">
<div class="pull-right">
<p class="font-montserrat text-success no-margin fs-16">
{{ count(Users()) }}
<span class="font-arial text-white fs-12 hint-text m-l-5">{{ __('Admins')}}</span>
</p>
<p class="bold text-white no-margin fs-10 font-montserrat lh-normal">
{{ __('Dashboard Admin')}}
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- END WIDGET -->
</div>
<div class="row">
<ul class="navbar-nav d-flex flex-row justify-content-sm-end">
<li class="nav-item">
<a href="{{ option('Facebook')  }}" class="p-r-10" ><i class="fab fa-facebook-square"></i></a>
</li>
<li class="nav-item">
<a href="{{ option('Twitter')  }}" class="p-r-10" ><i class="fab fa-twitter-square"></i></a>
</li>
<li class="nav-item">
<a href="{{ option('Pinterest')  }}" class="p-r-10" ><i class="fab fa-pinterest-square"></i></a>
</li>
<li class="nav-item">
<a href="{{ option('Instagram')  }}" class="p-r-10" ><i class="fab fa-instagram-square"></i></a>
</li>
<li class="nav-item">
<a href="{{ option('LinkedIn')  }}" class="p-r-10" ><i class="fab fa-linkedin-square"></i></a>
</li>
<li class="nav-item">
<a href="{{ option('Tumblr')  }}" class="p-r-10" ><i class="fab fa-tumblr-square"></i></a>
</li>
<li class="nav-item">
<a href="{{ option('GitHub')  }}" class="p-r-10" ><i class="fab fa-github"></i></a>
</li> 
</ul>
</div>
</div>
</div>
</div>
<div class="col-lg-7 col-xlg-7">
<div class="row">
<div class="col-sm-4 m-b-10">
<div class="ar-1-1">
<!-- ================= START WIDGET ==================-->
<div class="widget-2 card no-border bg-primary widget widget-loader-circle-lg no-margin">
<div class="card-body">
<div class="pull-bottom bottom-left bottom-right padding-25">
<span class="label font-montserrat fs-10">{{ __('Downloads')}}  </span>
<br>
<p class="text-white m-t-10">{{ __('You have')}} {{ count(Posts()) }} 
                             {{ __('Downloads   in your Database.')}} </p>
<p class="text-white hint-text"><a href="{{ route('Posts.index') }}" class="text-white">{{ __('Learn More at Downloads ')}}</a></p>
</div>
</div>
</div>
<!-- END WIDGET -->
</div>
</div>
<div class="col-sm-4">
<div class="ar-1-1">
<!-- START WIDGET widget_plainLiveWidget-->
<div class="widget-3 card no-border bg-master  no-margin widget-loader-bar">
<div class="card-body no-padding full-height">
<div class="metro live-tile" data-mode="carousel" data-start-now="true" data-delay="3000">
<div class="slide-front tiles slide active">
<div class="padding-30">
<div class="pull-top">
<div class="pull-left visible-lg visible-xlg">
<i class="pg-lock"></i>
</div>
<div class="clearfix"></div>
</div>
<div class="pull-bottom p-b-30">
<p class="p-t-10 fs-12 p-b-5 hint-text"><a href="{{ route('Roles.index') }}" class="text-white">{{ __('Learn More at Roles')}}</a></p>
<p class="no-margin text-white p-b-10">{{ __('Dashboard Roles')}} {{ count(roles()) }}
</p>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- END WIDGET -->
</div>
</div>
<div class="col-sm-4 m-b-10">
<div class="ar-1-1">
<!-- START WIDGET widget_plainWidget-->
<div class="card no-border bg-danger widget widget-6 widget-loader-circle-lg no-margin">
<div class="card-body color-complete">
  <div class="pull-top">
<div class=" text-white pull-left visible-lg visible-xlg">
<i class="pg-settings"></i>
</div>
<div class="clearfix"></div>
</div>
<div class="pull-bottom bottom-left bottom-right padding-25">
<span class="label font-montserrat fs-10">{{ __('Settings')}}  </span>
<p class="text-white m-t-10">{{ __('You can get the value of each setting anywhere on your Site')}} </p>
<p class="text-white hint-text"><a href="{{ route('Settings.index') }}" class="text-white">{{ __('Learn More at Settings')}}</a></p>
</div>
</div>
</div>
<!-- END WIDGET -->
</div>
</div>
<div class="col-sm-4 m-b-10">
<div class="ar-1-1">
<!-- START WIDGET widget_imageWidgetBasic-->
<div class="widget-3 card no-border bg-primary widget widget-loader-circle-lg no-margin">
<div class="card-body">
<div class="pull-bottom bottom-left bottom-right padding-25">
<span class="label font-montserrat fs-10">{{ __('Messages')}}</span>
<br>
<p class="text-white m-t-10">{{ __('You have')}} {{ count(Messages()) }} {{ __('Messages in your Database.')}} </p>
<p class="text-white hint-text"><a href="{{ route('Messages.index') }}" class="text-white">{{ __('Learn More at Messages')}}</a></p>
</div>
</div>
</div>
<!-- END WIDGET -->
</div>
</div>
<div class="col-sm-4 m-b-10">
<div class="ar-1-1">
<!-- START WIDGET widget_imageWidgetBasic-->
<div class="widget-4 card no-border bg-primary widget widget-loader-circle-lg no-margin">
<div class="card-body">
<div class="pull-bottom bottom-left bottom-right padding-25">
<span class="label font-montserrat fs-10">{{ __('Google Advertisement')}}</span>
<br>
<p class="text-white m-t-10">{{ __('You have ')}} {{ count(AdSenses()) }} {{ __('Google Advertisement in your Database.')}} </p>
<p class="text-white hint-text"><a href="{{ route('AdSense.index') }}" class="text-white">{{ __('Learn More at Google Advertisement')}}</a></p>
</div>
</div>
</div>
<!-- END WIDGET -->
</div>
</div>
<div class="col-sm-4 m-b-10">
<div class="ar-1-1">
<!-- START WIDGET widget_imageWidgetBasic-->
<div class="widget-5 card no-border bg-primary widget widget-loader-circle-lg no-margin">
<div class="card-body">
<div class="pull-bottom bottom-left bottom-right padding-25">
<span class="label font-montserrat fs-10">{{ __('Categories')}}</span>
<br>
<p class="text-white m-t-10">{{ __('You have')}} {{ count(Categories()) }} {{ __('Categories in your Database.')}} </p>
<p class="text-white hint-text"><a href="{{ route('Categories.index') }}" class="text-white">{{ __('Learn More at Categories')}}</a></p>
</div>
</div>
</div>
<!-- END WIDGET -->
</div>
</div>
@foreach(Messages() as $Message)
<div class="col-sm-4 m-b-10">
<div class="card social-card share " data-social="item">
<div class="circle" data-toggle="tooltip" title="" data-container="body" data-original-title="Label">
</div>
<div class="card-header clearfix">
<div class="user-pic">
@if(isset($Message->User->ImageUpload->filename))
<img src="{{ asset($Message->User->ImageUpload->filename) }}" data-src="{{ asset($Message->User->ImageUpload->filename) }}" width="32" height="32">
@else
@endif
</div>
<h5>{{ $Message->name }}</h5>
<h6>Created at 
<span class="location semi-bold"><i class="icon-map"></i> {{ date('M j, Y', strtotime($Message->created_at)) }}</span>
</h6>
</div>
<div class="card-description">
<p>{{ $Message->Message }}</p>
</div>
</div>
</div>
@endforeach
</div>
</div>
<!-- Filler -->
</div>
<!-- END ROW -->
</div>
<!-- END CONTAINER FLUID -->
</div>
@endsection
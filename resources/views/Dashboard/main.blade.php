<!DOCTYPE html>
<html lang="en">
<head>
<!-- ===================================== Meta site ================================================ -->
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<!-- ====== Laravel description site edit delete from admin panel ================== -->
<meta name="description" content="{{ option('MetaDescription')  }}">
<!-- ====== Laravel author site edit delete from admin panel ====================== -->
<meta name="author" content="{{ option('Metaauthor')  }}">
<!-- ====== Laravel keywords site edit delete from admin panel ================== -->
<meta name="keywords" content="{{ option('MetaKeyWords')  }}">  
<!-- ====== Laravel robots site edit delete from admin panel ================== -->
<meta name="robots" content="{{ option('Metarobots')  }}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png"> 
<meta name="theme-color" content="#ffffff">
<title>{{ option('SiteTitle')  }}</title> 
<!-- ====== Laravel favicon icon ================== -->
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Dashboard/assets/img/Favicon/favicon.png') }}">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap" rel="stylesheet">
<link href="{{ asset('Dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/nvd3/nv.d3.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/mapplic/css/mapplic.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/rickshaw/rickshaw.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css" media="screen">
<link href="{{ asset('Dashboard/assets/plugins/jquery-metrojs/MetroJs.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css') }}" type="text/css"  />
<link href="{{ asset('Dashboard/assets/plugins/datatables-responsive/css/datatables.responsive.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/codrops-dialogFx/dialog.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/codrops-dialogFx/dialog-sandra.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/owl-carousel/assets/owl.carousel.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/jquery-nouislider/jquery.nouislider.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/codrops-stepsform/css/component.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/bootstrap-tag/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/jquery-menuclipper/jquery.menuclipper.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/summernote/css/summernote.css') }}" rel="stylesheet" type="text/css" media="screen">
<link href="{{ asset('Dashboard/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}" rel="stylesheet" type="text/css" media="screen">
<link href="{{ asset('Dashboard/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" type="text/css" media="screen">
  <link href="{{ asset('Dashboard/assets/Fontawesome/css/all.css') }}" rel="stylesheet"> <!--load all styles -->
<link href="{{ asset('Dashboard/assets/css/icons.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet"/>
<link href="{{ asset('Dashboard/assets/css/style.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet"/>  
</head>
<body class="fixed-header dashboard">
<!-- BEGIN SIDEBPANEL-->
<nav class="page-sidebar" data-pages="sidebar">
<!-- BEGIN SIDEBAR MENU HEADER-->
<div class="sidebar-header">
<img src="{{ asset(option('logo')) }}" class="brand width-60" data-src="{{ asset(option('logo')) }}">
<div class="sidebar-header-controls">
</div>
</div>
<!-- END SIDEBAR MENU HEADER-->
<!-- START SIDEBAR MENU -->
<div class="sidebar-menu">
<!-- BEGIN SIDEBAR MENU ITEMS--> 
<ul class="menu-items"> 
<li class="m-t-30 ">
<a href="{{ url('admin') }}" class="detailed">
<span class="title">{{ __('Dashboard')}}</span>
<span class="details">{{ option('SiteTitle')  }} {{ __('Dashboard')}}</span>
</a>
<span class="bg-primary icon-thumbnail"  data-toggle-pin="sidebar"></span>
</li>
<li>
<a href="javascript:;"><span class="title">{{ __('Roles')}}</span>
<span class="arrow"></span></a>
<span class="bg-complete  icon-thumbnail"><i class="pg-lock"></i></span>
<ul class="sub-menu">
<li>
<a href="{{ url('Dashboard/Roles') }}">{{ __('Roles')}}</a>
<span class="icon-thumbnail">R</span>
</li>
<li>
<a href="{{ url('Dashboard/Roles/create') }}">{{ __('Create Role')}}</a>
<span class="icon-thumbnail">R</span>
</li>
</ul>
</li>
<li>
<a href="javascript:;"><span class="title">{{ __('Users')}}</span>
<span class="arrow"></span></a>
<span class="bg-complete icon-thumbnail"><i class="fa fa-address-card"></i></span>
<ul class="sub-menu">
<li>
<a href="{{ url('Dashboard/Users') }}">{{ __('Users')}}</a>
<span class="icon-thumbnail">U</span>
</li>
<li>
<a href="{{ url('Dashboard/Users/create') }}">{{ __('Create User')}}</a>
<span class="icon-thumbnail">U</span>
</li>
</ul>
</li>
<li>
<a href="javascript:;"><span class="title">{{ __('Downloads')}}</span>
<span class="arrow"></span></a>
<span class="bg-complete icon-thumbnail"><i class="far fa-save"></i></span>
<ul class="sub-menu">
<li>
<a href="{{ url('Dashboard/Posts') }}">{{ __('Downloads')}}</a>
<span class="icon-thumbnail"><i class="far fa-save"></i></span>
</li>
<li>
<a href="{{ url('Dashboard/Posts/create') }}">{{ __('Create Downloads')}}</a>
<span class="icon-thumbnail"><i class="far fa-save"></i></span>
</li>
</ul>
</li>
<li>
<a href="javascript:;"><span class="title">{{ __('Categories')}}</span>
<span class="arrow"></span></a>
<span class="bg-complete icon-thumbnail"><i class="fa fa-archive"></i></span>
<ul class="sub-menu">
<li>
<a href="{{ url('Dashboard/Categories') }}">{{ __('Categories')}}</a>
<span class="icon-thumbnail">C</span>
</li>
<li>
<a href="{{ url('Dashboard/Categories/create') }}">{{ __('Create Category')}}</a>
<span class="icon-thumbnail">C</span>
</li>
</ul>
</li>
<li>
<a href="javascript:;"><span class="title">{{ __('Advertisement')}}</span>
<span class=" arrow"></span></a>
<span class="bg-complete icon-thumbnail"><i class="fa fa-bullhorn"></i></span>
<ul class="sub-menu">
<li class="">
<a href="{{ url('Dashboard/AdSense') }}">{{ __('Advertisement')}}</a>
<span class="icon-thumbnail"><i class="fa fa-bullhorn"></i></span>
</li>
<li>
<a href="{{ url('Dashboard/AdSense/create') }}">{{ __('Create Advertisement')}}</a>
<span class="icon-thumbnail"><i class="fa fa-bullhorn"></i></span>
</li>
</ul>
</li>
<li>
<a href="javascript:;"><span class="title">{{ __('Menu Maker')}}</span>
<span class=" arrow"></span></a>
<span class="bg-complete icon-thumbnail"><i class="pg-menu_justify"></i></span>
<ul class="sub-menu">
<li class="">
<a href="{{ url('Dashboard/Menus') }}">{{ __('Menu')}}</a>
<span class="icon-thumbnail"><i class="pg-menu_justify"></i></span>
</li>
</ul>
</li>
<li>
<a href="javascript:;"><span class="title">{{ __('Media')}}</span>
<span class=" arrow"></span></a>
<span class="bg-complete icon-thumbnail"><i class="pg-camera"></i></span>
<ul class="sub-menu">
<li class="">
<a href="{{ url('Dashboard/Media') }}">{{ __('Media')}}</a>
<span class="icon-thumbnail"><i class="pg-camera"></i></span>
</li>
<li>
<a href="{{ url('Dashboard/image/upload') }}">{{ __('Create Media')}}</a>
<span class="icon-thumbnail"><i class="pg-camera"></i></span>
</li>
</ul>
</li>
<li>
<a href="{{ url('Dashboard/Messages') }}"><span class="title">{{ __('Messages')}}</span></a>
<span class="bg-complete icon-thumbnail"><i class="fa fa-envelope-open"></i></span>
</li>
<li>
<a href="{{ url('Dashboard/Galleries') }}"><span class="title">{{ __('Teams')}}</span></a>
<span class="bg-complete icon-thumbnail"><i class="fas fa-chalkboard-teacher"></i></span>
</li>
<li>
<a href="{{ url('Dashboard/Settings') }}">
<span class="title">{{ __('Settings')}}</span>
</a>
<span class="bg-complete icon-thumbnail"><i class="pg-settings_small_1"></i></span>
</li>
</ul>
<div class="clearfix"></div>
</div>
<!-- END SIDEBAR MENU -->
</nav>
<!-- END SIDEBAR -->
<!-- END SIDEBPANEL-->
<!-- START PAGE-CONTAINER -->
<div class="page-container ">
<!-- START HEADER -->
<div class="header ">
<!-- START MOBILE SIDEBAR TOGGLE -->
<a href="#" class="btn-link toggle-sidebar d-lg-none pg pg-menu" data-toggle="sidebar">
</a>
<!-- END MOBILE SIDEBAR TOGGLE -->
<div class="">
<div class="brand inline">
<img >
</div>
</div>
<div class="d-flex align-items-center">
<!-- START User Info-->
<div class="pull-left p-r-10 fs-16 font-heading d-lg-block d-none">
@if(isset(Auth::user()->name))
<span class="semi-bold">{{ Auth::user()->name }}</span> 
@else
@endif
</div>
<div class="dropdown pull-right d-lg-block d-none">
<button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="thumbnail-wrapper d32 border-5  inline">
@if(isset(Auth::user()->ImageUpload->filename))
<img src="{{ asset(Auth::user()->ImageUpload->filename) }}" data-src="{{ asset(Auth::user()->ImageUpload->filename) }}" width="32" height="32">
@else
@endif
</span>
</button>
<div class="dropdown-menu dropdown-menu-right profile-dropdown" role="menu">
<a href="{{ url('Dashboard/Settings') }}" class="dropdown-item"><i class="pg-settings_small"></i>{{ __('Settings')}} </a>
@if(isset(Auth::user()->name))
<a href="{{ url('Dashboard/Users') }}/{{ Auth::user()->name }}/edit" class="dropdown-item"><i class="pg-outdent"></i>{{ __('Edit Profile')}} </a>
@else
@endif
<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="clearfix bg-master-lighter dropdown-item">
<span class="pull-left">{{ __('Logout') }}</span>
<span class="pull-right"><i class="pg-power"></i></span>
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="display-zero">
@csrf
</form>
</div>
</div>
<!-- END User Info-->
</div>
</div>
<!-- END HEADER -->
<!-- START PAGE CONTENT WRAPPER -->
<div class="page-content-wrapper">
@yield('Dashboard')
<!-- END PAGE CONTENT -->
<!-- START COPYRIGHT -->
<!-- START CONTAINER FLUID -->
<!-- START CONTAINER FLUID -->
<div class=" container-fluid  container-fixed-lg footer">
<div class="copyright sm-text-center">
<p class="small no-margin pull-left sm-pull-reset">
<span class="hint-text">{{ __('Copyright')}} &copy; 2022 </span>.
<span class="hint-text">{{ __('All rights reserved.')}} </span>
<span class="sm-block"><a href="{{ url('') }}" class="m-l-10 m-r-10">{{ option('SiteTitle')  }}</a> <span class="muted">|
</p>
<p class="small no-margin pull-right sm-pull-reset"> {{ __('Made with Love')}}  <i class="fas fa-meteor"></i>
 <span class="hint-text">&amp; {{ option('SiteTitle')  }}</span>
</p>
<div class="clearfix"></div>
</div>
</div>
<!-- END COPYRIGHT -->
</div>
<!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- BEGIN VENDOR JS -->
<script src="{{ asset('Dashboard/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/modernizr.custom.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/popper/umd/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery/jquery-easy.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-unveil/jquery.unveil.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-ios-list/jquery.ioslist.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-actual/jquery.actual.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/select2/js/select2.full.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/classie/classie.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/switchery/js/switchery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/nvd3/lib/d3.v3.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/nvd3/nv.d3.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/nvd3/src/utils.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/nvd3/src/tooltip.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/nvd3/src/interactiveLayer.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/nvd3/src/models/axis.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/nvd3/src/models/line.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/nvd3/src/models/lineWithFocusChart.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/mapplic/js/hammer.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/mapplic/js/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/mapplic/js/mapplic.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-autonumeric/autoNumeric.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/dropzone/dropzone.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-inputmask/jquery.inputmask.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/rickshaw/rickshaw.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-metrojs/MetroJs.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-isotope/isotope.pkgd.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/codrops-dialogFx/dialogFx.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/owl-carousel/owl.carousel.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-nouislider/jquery.nouislider.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-nouislider/jquery.liblink.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/skycons/skycons.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/summernote/js/summernote.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap-typehead/typeahead.bundle.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/bootstrap-typehead/typeahead.jquery.min.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/handlebars/handlebars-v4.0.5.js') }}"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/datatables-responsive/js/datatables.responsive.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/dashboard.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/gallery.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/plugins/datatables-responsive/js/lodash.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/main.js') }}"></script>
<script src="{{ asset('Dashboard/assets/js/scripts.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/datatables.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/form_elements.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/notifications.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/scripts.js') }}" type="text/javascript"></script>

</body>
</html>
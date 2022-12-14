<!DOCTYPE html>
<html lang="en-gb" dir="ltr">
<head>
  <!-- ===================================== Meta site ================================================ -->
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <!-- ====== Laravel description site edit delete from admin panel ================== -->
  <meta name="description" content="{!! option('MetaDescription')  !!}">
  <!-- ====== Laravel author site edit delete from admin panel ====================== -->
  <meta name="author" content="{!! option('Metaauthor')  !!}">
  <!-- ====== Laravel keywords site edit delete from admin panel ================== -->
  <meta name="keywords" content="{!! option('MetaKeyWords')  !!}">  
  <!-- ====== Laravel robots site edit delete from admin panel ================== -->
  <meta name="robots" content="{!! option('Metarobots') !!}">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@Premium Downloads Scripts System with Website.">
  <meta name="twitter:creator" content="@Premium Downloads Scripts System with Website.">
  <meta name="twitter:title" content="Premium Downloads Scripts System with Website.">
  <meta name="twitter:description" content="Premium Downloads Scripts System with Website.">
  <!-- ====== Laravel favicon icon ================== -->
  <link rel="apple-touch-icon" sizes="57x57" href="{!! asset('assets/images/favicon/apple-icon-57x57.png') !!}">
  <link rel="apple-touch-icon" sizes="60x60" href="{!! asset('assets/images/favicon/apple-icon-60x60.png') !!}">
  <link rel="apple-touch-icon" sizes="72x72" href="{!! asset('assets/images/favicon/apple-icon-72x72.png') !!}">
  <link rel="apple-touch-icon" sizes="76x76" href="{!! asset('assets/images/favicon/apple-icon-76x76.png') !!}">
  <link rel="apple-touch-icon" sizes="114x114" href="{!! asset('assets/images/favicon/apple-icon-114x114.png') !!}">
  <link rel="apple-touch-icon" sizes="120x120" href="{!! asset('assets/images/favicon/apple-icon-120x120.png') !!}">
  <link rel="apple-touch-icon" sizes="144x144" href="{!! asset('assets/images/favicon/apple-icon-144x144.png') !!}">
  <link rel="apple-touch-icon" sizes="152x152" href="{!! asset('assets/images/favicon/apple-icon-152x152.png') !!}">
  <link rel="apple-touch-icon" sizes="180x180" href="{!! asset('assets/images/favicon/apple-icon-180x180.png') !!}">
  <link rel="icon" type="image/png" sizes="192x192"  href="{!! asset('assets/images/favicon/android-icon-192x192.png') !!}">
  <link rel="icon" type="image/png" sizes="32x32" href="{!! asset(option('Favicon')) !!}">
  <link rel="icon" type="image/png" sizes="96x96" href="{!! asset(option('Favicon')) !!}">
  <link rel="icon" type="image/png" sizes="16x16" href="{!! asset(option('Favicon')) !!}">
  <link rel="manifest" href="{!! asset('assets/images/favicon/manifest.json') !!}">
  <title>{!! option('SiteTitle') !!}</title>
  <!-- ===========================================  googleapis =================================== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Roboto:ital,wght@0,300;0,400;0,900;1,100;1,300;1,700&display=swap" rel="stylesheet">
  <!-- ===========================================  base =================================== -->
  <link rel="stylesheet" type="text/css" href="{!! asset('assets/css/uikit.min.css') !!}" />
  <!-- ===========================================  main =================================== -->
  <link rel="stylesheet" href="{!! asset('assets/css/theme.css') !!}" />
  <!-- ===========================================  head =================================== -->
  <span class="display-zero">{!! $Locale = LaravelLocalization::getCurrentLocale() !!}</span>
  @if($Locale == 'ar')
  <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;700&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" href="{!! asset('assets/css/rtl.css') !!}" />
  @else
  @endif
</head>
<body>
<!--     start Header Section   -->
<nav id="tm-topbar" class="uk-navbar uk-contrast">
<div class="uk-container uk-container-center">
<ul class="uk-navbar-nav uk-hidden-small">
    <li>
        <a href="{!! option('youtube') !!}"><i class="uk-icon-youtube uk-icon-small"></i></a>
    </li>
    <li>
        <a href="{!! option('Pinterest') !!}"><i class="uk-icon-pinterest uk-icon-small"></i></a>
    </li>
    <li>
        <a href="{!! option('Instagram') !!}"><i class="uk-icon-instagram uk-icon-small"></i></a>
    </li>
    <li>
        <a href="{!! option('Facebook') !!}"><i class="uk-icon-facebook uk-icon-small"></i></a>
    </li>
    <li>
        <a href="{!! option('Twitter') !!}"><i class="uk-icon-twitter uk-icon-small"></i></a>
    </li>
</ul>
<div class="uk-navbar-flip">
    <ul class="uk-navbar-nav uk-hidden-small">
       @foreach(Menus() as $Menu)
       <li>
         <a href="{{ url($Menu->url) }}" target="{{ $Menu->target }}">
          {{ $Menu->{'Title_'.$Locale} }}
        </a>
      </li>
      @endforeach
    </ul>
</div>
</div>

</nav>
<nav id="tm-header" class="uk-navbar">
<div class="uk-container uk-container-center ">
<a class="uk-navbar-brand uk-hidden-small" href="{{ url('') }}">
    <img src="{{ asset(option('logo')) }}" width="120" height="120">
</a>
<div class="uk-navbar-flip uk-hidden-small">
<div class="uk-button-group">
@guest
<a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{!! route('login') !!}"><i class="uk-icon-check uk-margin-small-right"></i> {!! __('main.Sign_In') !!}</a>
<a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{!! route('register') !!}">
<i class="uk-icon-user uk-margin-small-right"></i> {!! __('main.Sign_Up') !!}</a> 
@else
@hasrole('Super-Admin')
<a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{!! url('admin') !!}">{!! Auth::user()->name !!}</a>
@else
<a class="uk-button uk-button-success uk-button-large uk-margin-left">{!! Auth::user()->name !!}</a>
@endhasrole
<a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{!! __('main.Sign_Out') !!}</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="display-zero">
  @csrf
</form>
@endguest
</div>
</div>
<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small uk-icon-medium" data-uk-offcanvas></a>
</div>
</nav>
<!--     ./ Header Section   -->
@yield('content')
<!--   ./ Main Content Section   -->
<!--   start Footer Section   -->
<footer id="tm-footer" class="uk-block-secondary uk-block-small">
<div class="uk-container-center uk-container">
    <div class="uk-grid uk-text-center">
    <div class="uk-width-medium-10">
    <div class="copyright-text"> {!! __('main.All_reserved') !!}  @if(option('Language') == 'on')
      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
      <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
        {{ $properties['native'] }}
      </a>
      @endforeach 
      @else
      @endif
    </div>
    </div>
    </div>
    </div>
    </footer>
    <!--     ./ Footer Section   -->
    <!--     start Offcanvas Menu   -->
    <div id="offcanvas" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <div class="uk-panel">
                <div class="uk-button-group">
                    @guest
                    <a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{!! route('login') !!}"><i class="uk-icon-check uk-margin-small-right"></i> {!! __('main.Sign_In') !!}</a>
                    <a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{!! route('register') !!}">
                    <i class="uk-icon-user uk-margin-small-right"></i> {!! __('main.Sign_Up') !!}</a> 
                    @else
                    @hasrole('Super-Admin')
                    <a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{!! url('admin') !!}">{!! Auth::user()->name !!}</a>
                    @else
                    <a class="uk-button uk-button-success uk-button-large uk-margin-left">{!! Auth::user()->name !!}</a>
                    @endhasrole
                    <a class="uk-button uk-button-success uk-button-large uk-margin-left" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{!! __('main.Sign_Out') !!}</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="display-zero">
                      @csrf
                    </form>
                    @endguest
                </div>
            </div>
            <ul class="uk-nav uk-nav-offcanvas uk-nav-parent-icon" data-uk-nav>
               @foreach(Menus() as $Menu)
               <li>
                 <a href="{{ url($Menu->url) }}" target="{{ $Menu->target }}">
                  {{ $Menu->{'Title_'.$Locale} }}
                </a>
              </li>
              @endforeach
            </ul>
        </div>
    </div>
    <script src="{!! asset('assets/js/jquery.js') !!}"></script>
    <script src="{!! asset('assets/js/uikit.min.js') !!}"></script>
    <script src="{!! asset('assets/js/components/grid.min.js') !!}"></script>
    <script src="{!! asset('assets/js/components/slideset.min.js') !!}"></script>
</body>
</html>
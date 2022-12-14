<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="display-zero">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

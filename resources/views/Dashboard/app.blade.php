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
<link rel="apple-touch-icon" sizes="57x57" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-57x57.png') }}">
<link rel="apple-touch-icon" sizes="60x60" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-60x60.png') }}">
<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-72x72.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-76x76.png') }}">
<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-114x114.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="144x144" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-144x144.png') }}">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-180x180.png') }}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ asset('Dashboard/assets/img/Favicon/android-icon-192x192.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="96x96" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-96x96.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Dashboard/assets/img/Favicon/apple-icon-16x16.png') }}">
<link rel="manifest" href="{{ asset('Dashboard/assets/img/Savicon/manifest.json') }}">
<link href="{{ asset('Dashboard/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('Dashboard/assets/plugins/jquery-scrollbar/jquery.scrollbar.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/plugins/switchery/css/switchery.min.css') }}" rel="stylesheet" type="text/css" media="screen" />
<link href="{{ asset('Dashboard/assets/css/icons.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet"/>
<link href="{{ asset('Dashboard/assets/css/style.css') }}" rel="stylesheet" type="text/css" class="main-stylesheet"/>  
</head>
<body class="fixed-header">
<!-- BEGIN SIDEBPANEL-->
@yield('auth')
<!-- BEGIN VENDOR JS -->
<script src="{{ asset('Dashboard/assets/plugins/jquery/jquery-3.2.1.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('Dashboard/assets/js/scripts.js') }}" type="text/javascript"></script>
</body>
</html>
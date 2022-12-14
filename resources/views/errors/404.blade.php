@extends('Dashboard.app')
@section('auth')
<!-- ===============================  CONTENT ======================================== -->
<body class="fixed-header error-page">
    <div class="d-flex justify-content-center full-height full-width align-items-center">
      <div class="error-container text-center">
        <h1 class="error-number">404</h1>
        <h2 class="semi-bold">{{ __('main.Sorry')}}</h2>
        <p class="p-b-10">{{ __('main.This_exsist')}} <a href="{{ url('') }}">{{ __('main.Home')}}</a>
        </p>
      </div>
    </div>
    <!-- END OVERLAY -->
  </body>
<!-- ========================== CONTENT : END ============================================== -->
@endsection

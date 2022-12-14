@extends('layouts.main')

@section('content')
<!-- =========================================== Content Start ================================ -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ===========================================  content =================================== -->
<div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
    <div class="uk-width-medium-1-1 uk-row-first">
    <div class="uk-vertical-align uk-text-center border-10" style="background: url('{!! asset(option('other_background')) !!}') 100%  no-repeat; height: 250px;background-size: cover;">
        <div class="uk-vertical-align-middle uk-width-1-2">
            <h1 class="uk-heading-large uk-h1-d">{!!  __('main.Contact') !!}</h1>
            <p class="uk-text-large uk-p">
            @if($Locale == 'ar')
              {!! option('Home_ar') !!}
            @elseif($Locale == 'fr')
              {!! option('Home_fr') !!}
            @else
              {!! option('Home_en') !!}
            @endif
            </p>
        </div>
    </div>
    </div>
</div>
<div id="tm-media-section" class="uk-block uk-block-small uk-text-center">
<div class="uk-container uk-container-center">
<div class="uk-grid">
  <div class="uk-width-medium-10">
  <div class="uk-panel uk-panel-box uk-panel-box-secondary">
      <h3 class="uk-panel-title">{!! __('main.Information') !!}</h3>
      <p>
          <strong>{!! option('SiteTitle') !!}</strong>
          @if($Locale == 'ar')
            {!! option('Home_ar') !!}
          @elseif($Locale == 'fr')
            {!! option('Home_fr') !!}
          @else
            {!! option('Home_en') !!}
          @endif
      </p>
      <p>
          <a>{!! option('Email') !!}</a>
      </p>
      <p>
          {!! option('PhoneNumber') !!}
      </p>
</div>
</div>
</div>
</div>
</div>
<div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
<div class="uk-grid">
    <h1 class="uk-margin-large-bottom">{!! __('main.Top_Seller') !!} </h1>
    <div id="tm-right-section" class="uk-width-large-1-1 uk-width-medium-7-10"  
         data-uk-scrollspy="{cls:'uk-animation-fade', target:'img'}">
      <div class="uk-grid-width-small-1-3 uk-grid-width-medium-1-4 uk-grid-width-large-1-10" data-uk-grid="{gutter: 20}">
            @foreach($Teams as $Team)
            <div>
                <div class="uk-overlay uk-overlay-hover">
                  @if(isset($Team->ImageUpload->filename))
                  <img src="{!! asset($Team->ImageUpload->filename) !!}">
                  @else
                  @endif                
                    <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background "></div>
                </div>
                <div class="uk-panel uk-text-center">
                    <h5 class="uk-panel-title">{!! $Team->{'Title_'.$Locale} !!}</h5>
                    <span>{!! $Team->{'body_'.$Locale} !!}</span>
                </div>
            </div>
            @endforeach
        </div>
    </dv>
</div>
</div>
</div>
<!-- ======================================== Content end   ================================= -->
@endsection

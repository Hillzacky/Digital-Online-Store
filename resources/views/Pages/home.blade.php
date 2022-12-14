@extends('layouts.main')

@section('content')
<!--********************* SITE CONTENT *********************-->
<!--********************************************************-->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ===========================================  content =================================== -->
<div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
    <div class="uk-width-medium-1-1 uk-row-first">
    <div class="uk-vertical-align uk-text-center border-10" style="background: url('{!! asset(option('home_background')) !!}') 100%  no-repeat; height: 350px;background-size: cover;">
        <div class="uk-vertical-align-middle uk-width-1-2">
            <h1 class="uk-heading-large uk-h1-d">{!!  __('main.DISCOVER') !!}</h1>
            <p class="uk-text-large uk-p">
            @if($Locale == 'ar')
              {!! option('Home_ar') !!}
            @elseif($Locale == 'fr')
              {!! option('Home_fr') !!}
            @else
              {!! option('Home_en') !!}
            @endif
            </p>
            <p>
                <a class="uk-button uk-button-primary" href="{!! url('Contact') !!}">{!!  __('main.Explore') !!}</a>
            </p>
        </div>
    </div>
    </div>
</div>
<div class="uk-container uk-container-center uk-margin-large-top uk-margin-large-bottom">
<div class="uk-grid">
    <div id="tm-right-section" class="uk-width-large-1-1 uk-width-medium-7-10"  data-uk-scrollspy="{cls:'uk-animation-fade', target:'img'}">
        <div class="uk-grid-width-small-1-3 uk-grid-width-medium-1-4 uk-grid-width-large-1-5" data-uk-grid="{gutter: 20}">
            @foreach($Downloads as $Download)
            <div>
                <div class="uk-overlay uk-overlay-hover">
                  @if(isset($Download->ImageUpload->filename))
                  <img src="{!! asset($Download->ImageUpload->filename) !!}" alt="Image Download">
                  @else
                  @endif                
                    <div class="uk-overlay-panel uk-overlay-fade uk-overlay-background  uk-overlay-icon"></div>
                    <a class="uk-position-cover" href="{!! url('Downloads') !!}/{!! $Download->slug !!}"></a>
                </div>
                <div class="uk-panel">
                    <h5 class="uk-panel-title">{!! $Download->{'Title_'.$Locale} !!}</h5>
                    <p>
                        <span class="rating">
                            <i class="uk-icon-star"></i>
                            <i class="uk-icon-star"></i>
                            <i class="uk-icon-star"></i>
                            <i class="uk-icon-star"></i>
                            <i class="uk-icon-star"></i>
                        </span>
                    <span class="uk-float-right">
    @if(isset($Download->Category->{'Title_'.$Locale}))
    <i class="uk-icon-download uk-icon-small"></i> {!! $Download->Category->{'Title_'.$Locale} !!}
    @else
    @endif
                    </span>
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="uk-margin-large-top uk-margin-bottom pagination">
            {!! $Downloads->links() !!}
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
<!-- ===========================================  content =================================== -->
@endsection

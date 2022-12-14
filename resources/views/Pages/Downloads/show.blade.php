@extends('layouts.main')

@section('content')
<!-- =============================== Content Start ====================================== -->
<span class="display-zero">{{ $Locale = LaravelLocalization::getCurrentLocale() }}</span>
<!-- ===========================================  content =============================== -->
<div id="tm-media-section" class="uk-block uk-block-small">
<div class="uk-container uk-container-center uk-width-8-10">
<div class="media-container  uk-container-center">
<a class="uk-button uk-button-large uk-button-link uk-text-muted" href="{!! url('') !!}">
  <i class=" uk-icon-arrow-left uk-margin-small-right"></i> {!! __('main.Home') !!}
</a>
</div>
<div class="uk-grid">
<div class="uk-width-medium-5-10">
    <div  class="media-cover mt-50">
        <div class="uk-margin" data-uk-slideset="{small: 2, medium: 1, large: 1}">
        <div class="uk-slidenav-position uk-margin">
            <ul class="uk-slideset uk-grid uk-flex-center">
                <li>
                    <a>
                      @if(isset($Download->ImageUpload->filename))
                      <img src="{!! asset($Download->ImageUpload->filename) !!}" width="600" height="400" 
                           class="uk-scrollspy-inview uk-animation-fade border-25">
                      @else
                      @endif
                    </a>
                </li>
            </ul>
        </div>
    </div>
    </div>
    <a class="uk-button uk-button-primary uk-button-large uk-width-1-1" download="" 
       href="{!! asset($Download->ImageUpload->filename) !!}">
      <i class="uk-icon-download uk-margin-small-right"></i> {!!  __('main.Download') !!}
    </a>
</div>
<div class="uk-width-medium-5-10">
    <div>
        <ul class="uk-tab uk-tab-grid" data-uk-switcher="{connect:'#media-tabs'}">
      <li class="uk-width-medium-1-3 uk-active"><a href="#">{!!  __('main.Description') !!}</a></li>
      @if(isset($Download->Comments)) 
      <li class="uk-width-medium-1-3"><a href="#">{!! count($Download->Comments) !!} {!!  __('main.Comments') !!}</a></li>
      @else
      <li class="uk-width-medium-1-3"><a href="#"> 0 {!!  __('main.Comments') !!}</a></li>
      @endif
        </ul>
        </div>
        <ul id="media-tabs" class="uk-switcher uk-dec">
            <li>
                <h2 class="uk-text-contrast uk-margin-large-top"> {!! $Download->{'Title_'.$Locale} !!}</h2>
                <ul class="uk-subnav uk-subnav-line">
                    @if(isset($Download->User->name))
                     <li><i class="uk-icon-user uk-margin-small-right"></i> {!! $Download->User->name !!}</li>
                    @else
                    @endif
                    <li>
                     <i class="uk-icon-clock-o uk-margin-small-right"></i> 
                     {!! date('M j, Y', strtotime($Download->created_at)) !!}
                   </li>
                   <li><i class="uk-icon-download uk-margin-small-right"></i> {!! $Download->Downloud !!}</li> 
                </ul>
                <hr>
                <p class="uk-text-muted uk-h4">{!! $Download->{'body_'.$Locale} !!}</p>
                </li>
                <li>
                   <div class="uk-margin-small-top">
                    <h3 class="uk-text-contrast uk-margin-top">{!!  __('main.Comments') !!}</h3>
                    @guest
                    <div class="uk-alert uk-alert-warning" data-uk-alert="">
                      <a href="" class="uk-alert-close uk-close"></a>
                      <p><i class="uk-icon-exclamation-triangle uk-margin-small-right "></i> {!!  __('main.Please') !!} <a class="uk-text-contrast" href="{!! route('register') !!}"> {!! __('main.Sign_In') !!}</a>  {!! __('main.Downloud_quicker') !!}</p>
                    </div>
                    @endguest
                    @if(session('Messagge'))
                    <div class="uk-alert uk-alert-success" data-uk-alert="">
                      <a href="" class="uk-alert-close uk-close"></a>
                      <p>{!! __('main.Congratulations') !!}</p>
                    </div>
                    @endif
                    <!--   ================  Messagge ================  -->
                    <!--   ================  Messagge ================  -->
                    @if(session('Delete'))
                    <div class="uk-alert uk-alert-danger" data-uk-alert="">
                      <a href="" class="uk-alert-close uk-close"></a>
                      <p>{!! __('main.Comment_deleted') !!}</p>
                    </div>
                    @endif
                    <!--   ================  Messagge ================  -->
                    @if ($errors->any())    
                    <div class="pgn-wrapper top-inline" data-position="top">
                      <div class="pgn push-on-sidebar-open pgn-bar">
                        <div class="uk-alert-warning" uk-alert>
                          <a class="uk-alert-close" uk-close></a>
                          <p>@foreach ($errors->all() as $error) {{ $error }} @endforeach</p>
                        </div>
                      </div>
                    </div>
                    @endif
                <!--   ================  Messagge ================  -->
                <form class="uk-form uk-margin-bottom" method="post" action="{!! route('Comments.store') !!}">
                {!! csrf_field() !!}
                <input type="text" name="Post_id" hidden="" value="{!! $Download->id !!}">
                <div class="uk-form-row">
                <textarea class="uk-width-1-1 @error('Comment') is-invalid @enderror" name="Comment" cols="30" rows="5" placeholder="{!! __('main.Write_Comment') !!}"></textarea>
                </div>
                <div class="uk-form-row">
                    <button class="uk-button uk-button-large uk-button-success uk-float-right" type="submit">{{ __('main.Reply')}}</button>
                </div>
                </form>
                </div>
            <div class="uk-scrollable-box uk-responsive-width">
            <ul class="uk-comment-list uk-margin-top">
            @foreach($Comments as $comment) 
            <li>
            <article class="uk-comment uk-panel uk-panel-space uk-panel-box-secondary">
            <header class="uk-comment-header">
            @if(isset($comment->User->ImageUpload->filename))
            <img class="uk-comment-avatar uk-border-circle" src="{{ asset($comment->User->ImageUpload->filename) }}" 
                width="50" height="50">
            @else
            @endif
            @if(isset($comment->User->name))
            <h4 class="uk-comment-title"> {!! $comment->User->name !!}</h4>
            @else
            @endif
            <div class="uk-comment-meta">{!! date('M j, Y', strtotime($comment->created_at)) !!}</div>
             </header>
            <div class="uk-comment-body">
                <p>{!! $comment->Comment !!}</p>
            </div>
            <form class="display-inline" action="{{ route('Comments.destroy',$comment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                  <p class="uk-margin-remove">
                  <button class="uk-button uk-button-small uk-button-danger" type="submit">{!! __('Delete') !!}</button>
                  </p>
                </form>
            </article>
            </li>  
            @endforeach  
            </ul>
            </div>
            </li>
            </ul>
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
<!-- ===========================================  content =============================== -->
@endsection
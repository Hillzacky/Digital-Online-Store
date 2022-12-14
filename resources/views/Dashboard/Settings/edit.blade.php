@extends('Dashboard.main')

@section('Dashboard')
<!-- START PAGE CONTENT -->
        <div class="content ">
          <div class="social-wrapper">
            <div class="social " data-pages="social">
              <!-- END JUMBOTRON -->
              <div class=" container-fluid container-fixed-lg sm-p-l-0 sm-p-r-0">
                <div class="feed">
                  <!-- START DAY -->
                  <div class="day" data-social="day">
                    <!-- START ITEM -->
                    <div class="card no-border bg-transparent full-width" data-social="item">
                      <!-- START CONTAINER FLUID -->
                      <div class="container-fluid p-t-30 p-b-30 ">
                        <div class="row">
                          <div class="col-lg-4">
                            <p class="no-margin fs-16"> {{ __('Edit')}} {{ $Option->key }}</p>
                            <p class="hint-text m-t-5 small">{{ __('You can get the value of each setting anywhere on your site by calling option someKey')}} </p>
                          </div>
                          <div class="col-lg-8">
                            <div class="container-xs-height">
                              <div class="row-xs-height">
                                <div class="col-xs-height p-l-20">
                                   <!-- ============================================= links Content Start Setting ============================================= -->
                                    <form action="{{ route('Settings.update',$Option->id) }}" method="POST"  role="form" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="form-group m-r-10" class="displayinline-block">
                                      <label>{{ __('Your key')}}</label>
                                      <span class="help">{{ __('option someKey')}}</span>
                                      <input type="text" class="form-control" required="" name="key" value="{{ $Option->key }}">
                                    </div>
                                    <div class="form-group" class="displayinline-block">
                                      <label>{{ __('Your value')}}</label>
                                      <span class="help">{{ __('option somevalue')}} </span>
                                      <input type="text" class="form-control" required="" name="value" value="{{ $Option->value }}">
                                    </div>
                                    <div class="form-group" class="displayinline-block">
                                     <button  class="btn btn-tag   btn-tag-light btn-tag-rounded m-r-20" type="submit">{{ __('Create')}}</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END CONTAINER FLUID -->
                    </div>
                    <!-- END ITEM -->
                  <!-- START CONTAINER FLUID -->
                  <div class="card-body">
                    <div class="row">
                      <!-- ================================ Galleries Content Start ======================== -->
                      <div class="col-lg-4">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Home English')}}</span> <p class="no-margin fs-16"> {{ __('option Home_en')}}  </p></h3>
                                 <p>{{ option('Home_en') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Home France')}}</span> <p class="no-margin fs-16"> {{ __('option Home_fr')}} </p> </h3>
                                <p>{{ option('Home_fr') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Home Arabic')}}</span> <p class="no-margin fs-16">{{ __('option Home_ar')}}  </p></h3>
                                <p>{{ option('Home_ar') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('LinkTwo')}}</span> <p class="no-margin fs-16"> {{ __('option LinkTwo')}} </p></h3>
                                 <p>{{ option('LinkTwo') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Link')}}</span> <p class="no-margin fs-16"> {{ __('option Link')}} </p></h3>
                                 <p>{{ option('Link') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('youtube')}}</span> <p class="no-margin fs-16">{{ __('option youtube')}} </p></h3>
                                 <p>{{ option('youtube') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('GitHub')}}</span> <p class="no-margin fs-16"> {{ __('option GitHub')}} </p></h3>
                                 <p>{{ option('GitHub') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Twitter')}}</span> <p class="no-margin fs-16"> {{ __('option Twitter')}} </p></h3>
                                 <p>{{ option('Twitter') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Pinterest')}}</span> <p class="no-margin fs-16"> {{ __('option Pinterest')}} </p></h3>
                                 <p>{{ option('Pinterest') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Tumblr')}}</span> <p class="no-margin fs-16"> {{ __('option Tumblr')}} </p></h3>
                                 <p>{{ option('Tumblr') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Snapchat')}}</span> <p class="no-margin fs-16"> {{ __('option Snapchat')}} </p></h3>
                                 <p>{{ option('Snapchat') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('LinkedIn')}}</span> <p class="no-margin fs-16"> {{ __('option LinkedIn')}} </p></h3>
                                 <p>{{ option('LinkedIn') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Instagram')}}</span> <p class="no-margin fs-16"> {{ __('option Instagram')}} </p></h3>
                                 <p>{{ option('Instagram') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Facebook')}}</span> <p class="no-margin fs-16"> {{ __('option Facebook')}} </p></h3>
                                 <p>{{ option('Facebook') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('MetaKeyWords')}}</span> <p class="no-margin fs-16">{{ __('option MetaKeyWords')}}  </p></h3>
                                 <p>{{ option('MetaKeyWords') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('MetaDescription')}}</span> <p class="no-margin fs-16">{{ __('option MetaDescription')}}  </p></h3>
                                 <p>{{ option('MetaDescription') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('video')}}</span> <p class="no-margin fs-16">{{ __('option video')}} </p></h3>
                                 <p>{{ option('video') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Googlemap')}}</span> <p class="no-margin fs-16"> {{ __('option Googlemap')}} </p></h3>
                                 <p>{{ option('Googlemap') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Email')}}</span> <p class="no-margin fs-16">{{ __(' option Email')}} </p></h3>
                                 <p>{{ option('Email') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('PhoneNumber')}}</span> <p class="no-margin fs-16"> {{ __('option PhoneNumber')}} </p></h3>
                                 <p>{{ option('PhoneNumber') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Address')}}</span> <p class="no-margin fs-16"> {{ __('option Address')}} </p></h3>
                                 <p>{{ option('Address') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('SiteTitle')}}</span> <p class="no-margin fs-16"> {{ __('option SiteTitle')}} </p></h3>
                                 <p>{{ option('SiteTitle') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-2">
                        <div class="card card-default">
                          <div class="card-body">
                            <div class="scrollable">
                              <div class="demo-card-scrollable">
                                <h3>
                                 <span class="semi-bold">{{ __('Language')}}</span> <p class="no-margin fs-16"> {{ __('option Language')}} </p></h3>
                                 <p>{{ option('Language') }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- START ITEM -->
                        <div class="card social-card share share-other col1 m-r-10" data-social="item">
                          <div class="card-content">
                            <img alt="logo" src="{{ option('logo') }}">
                          </div>
                          <div class="card-header clearfix last">
                            <h5>{{ __('Logo')}}</h5>
                            <h6>{{ __('option logo')}}</h6>
                          </div>
                        </div>
                        <!-- END ITEM -->
                        <!-- START ITEM -->
                        <div class="card social-card share share-other col1" data-social="item">
                          <div class="card-content">
                            <img alt="Favicon" src="{{ option('Favicon') }}">
                          </div>
                          <div class="card-header clearfix last">
                            <h5>{{ __('Favicon')}}</h5>
                            <h6>{{ __('option Favicon')}}</h6>
                          </div>
                        </div>
                        <!-- END ITEM -->
                    </div>
                  </div>
                  <!-- END CONTAINER FLUID -->
                  </div>
                  <!-- END DAY -->
                </div>
                <!-- END FEED -->
              </div>
              <!-- END CONTAINER FLUID -->
            </div>
            <!-- /container -->
          </div>
        </div>
        <!-- END PAGE CONTENT -->
@endsection
@extends('Dashboard.main')

@section('Dashboard')
<!-- START PAGE CONTENT -->
<!-- ====================== links Roles Content Start =============================================== -->
  @if ($message = Session::get('success'))
  <div class="pgn-wrapper" data-position="top-right">
    <div class="pgn push-on-sidebar-open pgn-flip">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">×</span>
          <span class="sr-only">{{ __('Close')}}</span>
        </button><span>{{ $message }}</span>
      </div>
    </div>
  </div>
  @endif 
  <!-- ====================== links Roles Content Start =============================================== -->
  @if ($message = Session::get('Delete'))
  <div class="pgn-wrapper" data-position="bottom-right">
    <div class="pgn push-on-sidebar-open pgn-flip">
      <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert">
          <span aria-hidden="true">×</span>
          <span class="sr-only">{{ __('Close')}}</span>
        </button><span>{{ $message }}</span>
      </div>
    </div>
  </div>
  @endif
  <!-- ====================== links Roles Content Start =============================================== -->
<div class="content p-b-100">
  <!-- START PAGE COVER -->
  <div class="jumbotron page-cover" data-pages="parallax">
    <div class=" container-fluid  container-fixed-lg">
      <div class="inner">
        <!-- START BREADCRUMB -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('admin') }}">{{ __('Dashboard')}}</a></li>
          <li class="breadcrumb-item active">{{ __('Menus')}}</li>
        </ol>  
        <!-- END BREADCRUMB -->
        <div class="container-md-height">
          <div class="row">
            <!-- START card -->
            <div class="card card-transparent">
              <div class="card-body">
                <h3><i class="pg-menu"></i> {{ __('Menus')}} 
              <button class="btn btn-tag btn-success btn-tag-rounded" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">{{ __('Add Menu')}}</button>
                </h3>
              </div>
            </div>
            <!-- END card -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <!-- START CONTAINER FLUID -->
  <div class="container-fluid  container-fixed-lg bg-white">
      <!-- Modal -->
      <div class="modal fade fill-in" id="modalFillIn" tabindex="-1" role="dialog" aria-hidden="true">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="pg-close"></i>
        </button>
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="text-left p-b-5"><span class="semi-bold">{{ __('Create Menu')}} </h5>
              </div>
              <div class="modal-body">
                <div class="row">
                  <form action="{{ route('Menus.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="display-inherit"> 
                  @csrf
                  <div class="col-lg-9">
                    <input type="text" placeholder="Your Menu Title" class="form-control input-lg" id="icon-filter" name="Title">
                  </div>
                  <div class="col-lg-3 no-padding sm-m-t-10 sm-text-center">
                    <button type="submit" class="btn btn-primary btn-lg btn-large fs-15">{{ __('Create')}}</button>
                  </div>
                  </form>
                </div>
              </div>
              <div class="modal-footer">
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- Modal -->
        <!-- MODAL STICK UP  -->
        <div class="modal fade stick-up" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header clearfix text-left">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="pg-close fs-14"></i>
                </button>
                <h5>{{ __('Item Menu')}}</h5>
                <p>{{ __('You can output this Item Menu anywhere')}}</p>
              </div>
              <div class="modal-body">
                  <form action="{{ route('Links.store') }}" method="POST"  role="form" enctype="multipart/form-data" class="display-inherit"> 
                  @csrf
                  <div class="form-group-attached">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label for="Title_en">{{ __('Title Item Menu English')}}</label>
                          <input type="text" class="form-control" name="Title_en">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label for="Title_ar">{{ __('Title Item Menu Arabic')}}</label>
                          <input type="text" class="form-control" name="Title_ar">
                        </div>
                      </div>
                    </div>
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label for="Title_fr">{{ __('Title Item Menu France')}}</label>
                          <input type="text" class="form-control" name="Title_fr">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label>{{ __('Url Item Menu www.example.com/Category')}}</label>
                          <input type="text" class="form-control" name="url">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group form-group-default">
                          <label>{{ __('Order Item Number')}}</label>
                          <input type="number" class="form-control" name="order">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                     <div class="form-group form-group-default">
                      <label>{{ __('Target Item Menu')}} </label>
                      <select class="full-width border-zero"  name="target">
                        <option value="_blank" selected="">{{ __('Item Menu Target')}}</option>
                        <option value="_blank">{{ __('_blank')}}</option>
                        <option value="_self">{{ __('_self')}}</option>
                        <option value="_parent">{{ __('_parent')}}</option>
                        <option value="_top">{{ __('_top')}}</option>
                      </select>
                    </div>
                  </div>
                   <div class="row">
                     <div class="form-group form-group-default">
                      <label>{{ __('Menu')}}</label>
                        <select class="full-width border-zero" name="menu_id">
                        <!-- ================================ Menus Content Start ======================== -->
                        @foreach($Menus as $Menu)
                         <option value="{{ $Menu->id }}" selected="">{{ $Menu->Title }}</option>
                        @endforeach
                        <!-- ================================ Menus Content Start ======================== -->
                      </select>
                    </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-4 m-t-10 sm-m-t-10">
                  <button type="submit" class="btn btn-primary btn-block m-t-5">{{ __('Item Menu')}}</button>
                </div>
              </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- END MODAL STICK UP  -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-default bg-success mt20">
          <div class="card-header  separator">
            <div class="card-title">{{ __('Menu Builder Static')}}
            </div>
          </div>
          <div class="card-body">
            <p class="text-black hint-text">{{ __('You can output this Menu anywhere on your site by calling Foreach Menus as Menu ')}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-borderless">
          <ul class="nav nav-tabs nav-tabs-simple" role="tablist" data-init-reponsive-tabs="dropdownfx">
            <li class="nav-item">
              <a class="active" data-toggle="tab" role="tab" data-target="#MenuBuilder" href="#">{{ __('Menu Builder')}}</a>
            </li>
            <!-- ================================ Menus Content Start ======================== -->
            @foreach($Menus as $Menu)
            <li class="nav-item">
              <a href="#" data-toggle="tab" role="tab" data-target="#{{ $Menu->id }}">{{ $Menu->Title }}</a>
            </li>
            @endforeach
            <!-- ================================ Menus Content Start ======================== -->
          </ul> 
          <div class="tab-content">
            <div class="tab-pane active" id="MenuBuilder">
              <div class="row column-seperation">
                <div class="col-lg-6">
                  <h3>
                   {{ __('Menu Builder Static')}}  <button class="btn btn-complete btn-cons" id="btnStickUpSizeToggler" data-target="#myModal" data-toggle="modal">{{ __('Item Menu')}}</button>
                    <p>
                      {{ __('You can output this Menu anywhere on your site by calling Foreach Menus as Menu')}}
                    </p>
                  </h3>
                </div>
              </div>
            </div>
            <!-- ================================ Menus Content Start ======================== -->
            @foreach($Menus as $Menu)
            <div class="tab-pane" id="{{ $Menu->id }}">
              <div class="row">
                <div class="col-lg-12">
                  <h3>{{ $Menu->Title }} <form action="{{ route('Menus.destroy',$Menu->id) }}" method="POST" class="displayinline-block">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-cons btn-animated from-top fa  fa-remove">
                    <span>{{ __('Delete')}}</span>
                  </button>
                  </form>
                </h3>
                  <p>{{ __('You can output this menu anywhere on your site by calling Edit your Menu in Helper File')}}</p>
                  <br>
                    <!-- ====================== links Menu Content Start store =============================================== -->
                    @foreach($Menu->menu_items as $item)  
                   <div id="card-circular-color" class="card card-default">
                    <div class="card-header">
                      <div class="card-title">{{ __('Target Item Menu')}} ({{ $item->target }})
                      </div>
                      <div class="card-controls">
                      <div class="btn-group btn-group-sm">
                      <form action="{{ route('Links.destroy',$item->id) }}" method="POST" class="displayinline-block">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger btn-cons"  type="submit">{{ __('Delete')}}</button>
                      </form>   
                      </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <h3>
                      {{ $item->Title_en }}</h3>
                      <p>{{ __('Url Item Menu')}} (<a href="{{ url('')}}/{{ $item->url }}" target="_blank">{{ $item->url }}</a>) {{ __('& Order Item Number')}} ({{ $item->order }})
                      </p>
                    </div>
                   </div>
                   @endforeach
                   <!-- ================================ Menus Content Start ======================== -->
                  <p class="pull-right">
                    <button type="button" class="btn btn-success btn-cons">{{ __('Save Changes')}}</button>
                  </p>
                </div>
              </div>
            </div>
            @endforeach
            <!-- ================================ Menus Content Start ======================== -->
            <div class="tab-pane" id="tab2Inspire">
              <div class="row">
                <div class="col-lg-12">
                  <h3>{{ __('Follow us')}} &amp; {{ __('get updated!')}}</h3>
                  <p>{{ __('Instantly connect to whats most important to you. Follow your friends, experts, favorite celebrities, and breaking news.')}}</p>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END CONTAINER FLUID -->
@endsection
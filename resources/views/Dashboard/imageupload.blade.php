@extends('Dashboard.main')

@section('Dashboard')
<!-- START PAGE CONTENT -->
<div class=" container-fluid m-t-80  container-fixed-lg">
<!-- START card -->
<div class="card card-default m-t-20">
<div class="card-body"> 
<div class="invoice padding-50 sm-padding-10">
<div>
<div class="pull-left">
<img alt="" class="invoice-logo" data-src-retina="{{ asset(option('Favicon')) }}" data-src="{{ asset(option('Favicon')) }}" src="{{ asset(option('Favicon')) }}">
<address class="m-t-10">
{!! option('Address') !!}
<br>{!! option('PhoneNumber') !!}
<br> 
</address> 
</div> 
<div class="clearfix"></div>
</div> 
<br>
<br>
<div class="row">
<div class="col-lg-12 col-sm-height sm-no-padding">
<form method="post" action="{{url('Dashboard/image/upload/store')}}" enctype="multipart/form-data" class="dropzone" id="dropzone">
@csrf
</form>   
<script type="text/javascript">
Dropzone.options.dropzone =
{
maxFilesize: 12,
renameFile: function(file) {
var dt = new Date();
var time = dt.getTime();
return time+file.name;
},
acceptedFiles: ".jpeg,.jpg,.png,.gif",
addRemoveLinks: true,
timeout: 50000,
removedfile: function(file) 
{
var name = file.upload.filename;
$.ajax({
headers: {
'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
},
type: 'POST',
url: '{{ url("Dashboard/image/delete") }}',
data: {filename: name},
success: function (data){
console.log("File has been successfully removed!!");
},
error: function(e) {
console.log(e);
}});
var fileRef;
return (fileRef = file.previewElement) != null ? 
fileRef.parentNode.removeChild(file.previewElement) : void 0;
},

success: function(file, response) 
{
console.log(response);
},
error: function(file, response)
{
return false;
}
};
</script>
</div>
</div>
</div>
</div>
</div>
</div>
@endsection




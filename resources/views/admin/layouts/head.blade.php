<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes"><!-- App Favicon -->
<link rel="shortcut icon" href="{{asset('assets-admin/images/favicon.ico')}}">

<meta name="author" content="Coderthemes">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- App title -->
<title>Uplon - Responsive Admin Dashboard Template</title>

<!-- Switchery css -->
<link href="{{asset('assets-admin/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

<!-- App Favicon -->
<link rel="shortcut icon" href="{{asset('assets-admin/images/favicon.ico')}}">

<!-- Bootstrap CSS -->
<link href="{{asset('assets-admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

<!-- App CSS -->
<link href="{{asset('assets-admin/css/style.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets-admin/css/custom_style.css')}}" rel="stylesheet" type="text/css" />

<!--Morris Chart CSS -->
<link rel="stylesheet" href="{{asset('assets-admin/plugins/morris/morris.css')}}">

<!-- Modernizr js -->
<script src="{{asset('assets-admin/js/modernizr.min.js')}}"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
@stack('styles')
{{--@livewireStyles--}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />
<!-- JS toast -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>
<link href="{{asset('assets-admin/plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css">


<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/css/toastr.css" rel="stylesheet" />

<!-- JS toast -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.0/js/toastr.js"></script>


<link href="{{asset('assets-admin/plugins/fileuploads/css/dropify.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets-admin/plugins/ion-rangeslider/ion.rangeSlider.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets-admin/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css')}}" rel="stylesheet" type="text/css">
@stack('styles')

@livewireStyles
{{--@livewireStyles--}}

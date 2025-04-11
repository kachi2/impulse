<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>{{$settings?->site_name}}</title>
	<meta name="keywords" content=" ">
	<meta name="description" content=" ">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
	<!--All Css-->
	<link rel="stylesheet" href="{{asset('/frontend/css/bootstrap.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/font-awesome.min.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/et-line.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/themefy-icon.css')}}" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/animate.min.css')}}">
	<!--Revolution slider-->
	<link rel="stylesheet" href="{{asset('/frontend/css/settings.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/dynamic-captions.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/static-captions.css')}}" type="text/css" />
	<!--Owl Carousel-->
	<link rel="stylesheet" href="{{asset('/frontend/css/owl.carousel.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/owl.theme.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/owl.transitions.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/spsimpleportfolio.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/featherlight.min.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{asset('/frontend/css/sp-flickr-gallery.css')}}" type="text/css" />
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/style.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('/frontend/css/skins/blue-layout.css')}}">
	<!--Jquery-->
	<script src="{{asset('/frontend/js/jQuery.js')}}" type="text/javascript"></script>
</head>

<body>
   @include('layouts.header')
    @yield('contents')


    @yield('scripts')
<!--== Start Footer Area Wrapper ==-->
@include('layouts.footer')
<!-- End Off Canvas Menu Wrapper -->

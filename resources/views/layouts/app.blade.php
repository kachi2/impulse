<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{$settings->site_name}}</title>
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="fonts.googleapis.com/cssc15a.css?family=Archivo:400,400i,500,500i,600,600i,700,700i&amp;display=swap">
    <link rel="stylesheet" href="{{asset('/frontend/css/font-awesome/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend/css/flaticon/flaticon.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend/css/bootstrap/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend/css/owl-carousel/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend/css/swiper/swiper.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend/css/animate/animate.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('/frontend/css/magnific-popup/magnific-popup.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}" />
  </head>
<body>
   @include('layouts.header')
    @yield('contents')

    @yield('scripts')

@include('layouts.footer')

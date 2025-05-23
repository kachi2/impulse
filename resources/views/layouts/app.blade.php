<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        <link rel="stylesheet" href="{{asset('/frontend/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/odometer.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('/frontend/css/responsive.css')}}">
    </head>

<body>
   @include('layouts.header')
    @yield('contents')

    @yield('scripts')

@include('layouts.footer')

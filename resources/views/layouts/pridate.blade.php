<!DOCTYPE html>
{{-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}"> --}}
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/line-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/line-awesome-font-awesome.min.css')}}">
    <link href="{{asset('template/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/jquery.mCustomScrollbar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/lib/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/lib/slick/slick-theme.css')}}">

    <link href="https://fonts.googleapis.com/css2?family=Battambang:wght@400;700&family=Hanuman:wght@400;700&family=Sarabun:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('template/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/css/responsive.css')}}">
    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- font-family: 'Hanuman','Battambang', 'Sarabun', sans-serif; --}}



</head>

    @yield('content')


    <script type="text/javascript" src="{{asset('template/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/popper.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/jquery.mCustomScrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/lib/slick/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/scrollbar.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/js/script.js')}}"></script>

</body>
</html>

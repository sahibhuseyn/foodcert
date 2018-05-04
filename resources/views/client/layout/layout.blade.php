<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<head>
    <meta charset="utf-8">
    <title>Foodcert - Ana Səhifə</title>
    <meta name="author" content="themesflat.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ url('/client/stylesheets/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/client/stylesheets/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/client/stylesheets/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/client/stylesheets/colors/color1.css') }}" id="colors">
    <link rel="stylesheet" type="text/css" href="{{ url('/client/stylesheets/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('/client/stylesheets/headline.css') }}">
    @yield('style')
    <link href="{{ url('client/images/foodcert_logo.png') }}" rel="icon">
</head>
<body class="header_sticky">
<div id="loading-overlay">
    <div class="loader"></div>
</div>

@include('client.layout.partials.header')

@yield('content')

@include('client.layout.partials.footer')


<!-- Javascript -->
<script src="{{ url('client/javascript/jquery.min.js') }}"></script>
<script src="{{ url('client/javascript/tether.min.js') }}"></script>
<script src="{{ url('client/javascript/bootstrap.min.js') }}"></script>
<script src="{{ url('client/javascript/jquery.easing.js') }}"></script>
<script src="{{ url('client/javascript/jquery-waypoints.js') }}"></script>
<script src="{{ url('client/javascript/jquery-validate.js') }}"></script>
<script src="{{ url('client/javascript/jquery.cookie.js') }}"></script>
<script src="{{ url('client/javascript/smoothscroll.js') }}"></script>
<script src="{{ url('client/javascript/owl.carousel.js') }}"></script>
<script src="{{ url('client/javascript/jquery.flexslider-min.js') }}"></script>
<script src="{{ url('client/javascript/headline.js') }}"></script>
<script src="{{ url('client/javascript/parallax.js') }}"></script>
<script src="{{ url('client/javascript/main.js') }}"></script>

@yield('script')
</body>
</html>
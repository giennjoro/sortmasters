<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Kelmas Ventures Ltd</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="We are a recruiting agency that recruits on behalf of cruise ships all over the world. We recruit, train and expose personels to work in different positions in the cruise ships. " />
    <meta name="keywords" content="Kelmas Ventures Ltd" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/owl.theme.default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('client/css/flaticon.css') }}" />
    @yield('style')
    @yield('responsive')
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('favicon.png') }}" />
    @include('client.layouts.messages')
</head>
<body>
        
     <!-- preloader Start -->
     <div id="preloader">
        <div id="status"><img src="{{ asset('client/images/header/loadinganimation.gif') }}" id="preloader_image" alt="loader">
        </div>
    </div>
    
    <!-- Top Scroll End -->
     <!-- Top Header Wrapper Start(except home page) -->
     @yield('top_menu')
    <!-- Top Header Wrapper End -->
    <!-- Header Wrapper Start -->

    @yield('menu')
    @yield('content')
    <!--main js file start-->
    <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
    <script src="{{ asset('client/js/jquery_min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.js') }}"></script>
    <script src="{{ asset('client/js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('client/js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('client/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('client/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('client/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('client/js/modernizr.js') }}"></script>
    @yield('custom_js')
    
    <!--main js file end-->
</body>
</html>
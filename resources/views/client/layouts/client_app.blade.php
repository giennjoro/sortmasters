<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Sortmasters Ltd</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <!-- External CSS libraries -->
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/animate.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/bootstrap-submenu.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('client/css/leaflet.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('client/css/map.css') }}" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/fonts/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/fonts/flaticon/font/flaticon.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('client/fonts/linearicons/style.css') }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('client/css/jquery.mCustomScrollbar.css') }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('client/css/dropzone.css') }}">
        <link rel="stylesheet" type="text/css"  href="{{ asset('client/css/slick.css') }}">

        {{-- toastr --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <!-- Custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/style.css') }}">
        <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('client/css/skins/default.css') }}">

        <!-- Favicon icon -->
        <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon" >

        <!-- Google fonts -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">

        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link rel="stylesheet" type="text/css" href="{{ asset('client/css/ie10-viewport-bug-workaround.css') }}">

        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script  src="{{ asset('client/js/ie-emulation-modes-warning.js') }}"></script>

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script  src="js/html5shiv.min.js"></script>
        <script  src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <div class="page_loader"></div>
    <!-- Main header start -->
    <header class="main-header">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand company-logo" href="/">
                    <img src="{{ asset('client/img/logo.png') }}" alt="logo">
                </a>
                <h4 style="color:rgb(7, 45, 122)"><b>Sortmasters Ltd</b></h4>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav header-ml">
                       <li class="nav-item"><a class="nav-link" href="/"> <b style="color:rgb(240, 52, 51);"> Home</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="/about"><b style="color:rgb(240, 52, 51);"> About</b></a></li>
                        <li class="nav-item"><a class="nav-link" href="/events"><b style="color:rgb(240, 52, 51);"> Events</b></a></li>
                        <li class="nav-item "><a class="nav-link" href="/contact"><b style="color:rgb(240, 52, 51);"> Contact Us</b></a></li>
                        
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="/properties" class="nav-link "><i class="lnr lnr-apartment"></i><b style="color:rgb(240, 52, 51);"> View Properties</b></a>
                        </li>
                        <li class="nav-item">
                             <a href="mailto:info@sortmasters.co.ke" class="nav-link link-color"><i class="lnr lnr-envelope"></i> Email Us</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Main header end -->

    @yield('content')

    <footer class="footer">
        <div class="container footer-inner">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-item clearfix">
                        <img src="{{ asset('client/img/logo.png')}}" alt="logo" class="f-logo">
                        <ul class="contact-info">
                            <li>
                                <i class="flaticon-pin"></i>Aqua Plaza, 1st Floor, Room No.9&10 Nairobi
                            </li>
                            <li>
                                <i class="flaticon-mail"></i><a href="mailto:info@sortmasters.co.ke">info@sortmasters.co.ke</a>
                            </li>
                            <li>
                                <i class="flaticon-phone"></i><a href="tel:+254705104222"> 0705104222</a>
                            </li>
                            <li>
                                <i class="flaticon-phone"></i><a href="tel:+254705106444"> 0705106444</a>
                            </li>
                        </ul>
                        <div >
                            <a href="/contact"><i class="fa fa-globe"> View more</i></a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="social-list-2">
                            <ul>
                                <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="footer-item">
                        <h4>
                            Navigation
                        </h4>
                        <ul class="links">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                            <li>
                                <a href="/properties">Properties</a>
                            </li>
                            <li>
                                <a href="/contact">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                    <div class="recent-properties footer-item">
                        <h4>Upcoming Events</h4>
                            @if($global_events->count() == 0)
                                <div class="media mb-4">
                                    <div class="media-body align-self-center">
                                        <h5>
                                            There are currently no upcoming events.
                                        </h5>
                                    </div>
                                </div>
                            @else
                                @foreach($global_events as $event)
                                    <div class="media mb-4">
                                        <div class="media-body align-self-center">
                                            <h5>
                                                <a href="javascript:void(0)">{{ $event->title }}</a>
                                            </h5>
                                            <div class="listing-post-meta">
                                                <a href="javascript:void(0)"><i class="fa fa-calendar"></i> {{ $event->date->format('d') . " " . $event->date->format('M') . " " . $event->date->format('Y')}} </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12">
                    <p class="copy sub-footer">&copy {{ date('Y') }} <a href="/"> Sortmasters</a> All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end -->

    <!-- Full Page Search -->
    <div id="full-page-search">
        <button type="button" class="close">×</button>
        <form action="https://storage.googleapis.com/themevessel-items/fort/index.html#">
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-sm button-theme">Search</button>
        </form>
    </div>

    <script src="{{ asset('client/js/jquery-2.2.0.min.js') }}"></script>
    <script src="{{ asset('client/js/popper.min.js') }}"></script>
    <script src="{{ asset('client/js/bootstrap.min.js') }}"></script>
    <script  src="{{ asset('client/js/bootstrap-submenu.js') }}"></script>
    <script  src="{{ asset('client/js/rangeslider.js') }}"></script>
    <script  src="{{ asset('client/js/jquery.mb.YTPlayer.js') }}"></script>
    <script  src="{{ asset('client/js/bootstrap-select.min.js') }}"></script>
    <script  src="{{ asset('client/js/jquery.easing.1.3.js') }}"></script>
    <script  src="{{ asset('client/js/jquery.scrollUp.js') }}"></script>
    <script  src="{{ asset('client/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script  src="{{ asset('client/js/leaflet.js') }}"></script>
    <script  src="{{ asset('client/js/leaflet-providers.js') }}"></script>
    <script  src="{{ asset('client/js/leaflet.markercluster.js') }}"></script>
    <script  src="{{ asset('client/js/dropzone.js') }}"></script>
    <script  src="{{ asset('client/js/slick.min.js') }}"></script>
    <script  src="{{ asset('client/js/jquery.filterizr.js') }}"></script>
    <script  src="{{ asset('client/js/jquery.magnific-popup.min.js') }}"></script>
    <script  src="{{ asset('client/js/jquery.countdown.js') }}"></script>
    <script  src="{{ asset('client/js/maps.js') }}"></script>
    <script  src="{{ asset('client/js/app.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script  src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- Custom javascript -->
    <script  src="{{ asset('js/ie10-viewport-bug-workaround.js') }}"></script>

    {{-- toastr --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    @if(session('success'))
    <script>
		toastr.success('{{session('success')}}');
    </script>
    @endif
    </body>
</html>
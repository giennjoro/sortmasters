@extends('client.layouts.client_app')
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Our Events</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li class="active">Events</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->

    <!-- Events start -->
    <div class="services content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1 style="color:rgb(240, 52, 51);">Sortmasters Events</h1>
                <p>View Our scheduled events here.</p>
            </div>
            <div class="row">
                @foreach($events as $event)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-info">
                            <div class="icon">
                                <i class="flaticon-calendar"></i>
                            </div>
                            <div class="detail">
                                <h3>Event Name</h3><hr>
                                <h4 style="color:#422774;">26th March, 2019</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-info">
                        <div class="icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <div class="detail">
                            <h3>Event Name</h3><hr>
                            <h4 style="color:#422774;">26th March, 2019</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-info">
                        <div class="icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <div class="detail">
                            <h3>Event Name</h3><hr>
                            <h4 style="color:#422774;">26th March, 2019</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-info">
                        <div class="icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <div class="detail">
                            <h3>Event Name</h3><hr>
                            <h4 style="color:#422774;">26th March, 2019</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-info">
                        <div class="icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <div class="detail">
                            <h3>Event Name</h3><hr>
                            <h4 style="color:#422774;">26th March, 2019</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="service-info">
                        <div class="icon">
                            <i class="flaticon-calendar"></i>
                        </div>
                        <div class="detail">
                            <h3>Event Name</h3><hr>
                            <h4 style="color:#422774;">26th March, 2019</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Events end -->

    <!-- Intro section start -->
    <div class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="intro-text">
                        <h3>Do You Have Questions ?</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <a href="contact.html" class="btn btn-md">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro section end -->
   
@endsection
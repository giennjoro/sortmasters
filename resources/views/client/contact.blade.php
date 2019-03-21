@extends('client.layouts.client_app')
@section('content')
   <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Contact Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    
    <!-- Contact 2 start -->
    <div class="contact-2 content-area-5">
        <div class="container">
            <!-- Main title -->
            <div class="main-title text-center">
                <h1 style="color:rgb(240, 52, 51);">Contact Us</h1>
                <p>Send Us a message through our contact form or visit one of our offices below.</p>
            </div>
            <!-- Contact info -->
            <div class="contact-info">
                <div class="row">
                    <div class="col-md-3 col-sm-6 mrg-btn-50">
                        <h4 style="color:rgb(240, 52, 51);">Nairobi Office</h4><hr>
                        <p>Aqua Plaza, 1st Floor, Room No.9&10</p>
                        <p>Murang’a Road Opp. KIE</p>
                        <p>P.O BOX 756-00600, NAIROBI</p>
                        <p>Tel: 0705104222, 0705106444</p>
                    </div>
                    <div class="col-md-3 col-sm-6 mrg-btn-50">
                        <h4 style="color:rgb(240, 52, 51);">Thika Branch</h4><hr>
                        <p>Witeithie House, 1st Floor, Left Wing, Rm. No.126</p>
                        <p>Kwame Nkurumah Avenue</p>
                        <p>P.O BOX 3825-0100, Thika</p>
                        <p>Tel: 0705105001, 0705105009, 0759935493</p>
                    </div>
                    <div class="col-md-3 col-sm-6 mrg-btn-50">
                        <h4 style="color:rgb(240, 52, 51);">Meru Branch</h4><hr>
                        <p>Ntima 2597, Ground Floor</p>
                        <p>Makutano – Meru Junction</p>
                        <p>Tel: 0792390001</p>
                    </div>
                    <div class="col-md-3 col-sm-6 mrg-btn-50">
                        <h4 style="color:rgb(240, 52, 51);">Nakuru Branch</h4><hr>
                        <p>Hoska Plaza, 2nd Floor</p>
                        <p>Pandit Nehru Road</p>
                        <p>Tel: 0711180350</p>
                    </div>
                </div>
            </div>
        <form method="POST" action="{{url('/contact-us')}}" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <div class="form-group name">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group email">
                                    <input type="email" name="email" class="form-control" placeholder="Email" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="form-control" placeholder="Subject" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="form-control" placeholder="Phone number" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group message">
                                    <textarea class="form-control" name="message" placeholder="Write message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="send-btn text-center">
                                    <button type="submit" class="btn btn-md button-theme">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="opening-hours">
                            <h3>Open Hours</h3>
                            <ul class="list-style-none">
                                <li><strong>Sunday</strong> <span class="text-red"> closed</span></li>
                                <li><strong>Monday</strong> <span> 8 AM - 5 PM</span></li>
                                <li><strong>Tuesday </strong> <span> 8 AM - 5 PM</span></li>
                                <li><strong>Wednesday </strong> <span> 8 AM - 5 PM</span></li>
                                <li><strong>Thursday </strong> <span> 8 AM - 5 PM</span></li>
                                <li><strong>Friday </strong> <span> 8 AM - 5 PM</span></li>
                                <li><strong>Saturday </strong> <span> 8 AM - 1 PM</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Contact 2 end -->
@endsection
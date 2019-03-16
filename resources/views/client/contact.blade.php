@extends('client.layouts.app')
@section('mobile_menu')
    @include('client.layouts.light_mobile_menu')
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('client/css/style_II.css')}}" />
@endsection
@section('responsive')
<link rel="stylesheet" type="text/css" href="{{ asset('client/css/responsive2.css') }}" />
@endsection
@section('menu')
@include('client.layouts.menulight')
@endsection
@section('custom_js')
<script src="{{ asset('client/js/custom_II.js') }}"></script>
@endsection
@section('top_menu')
    @include('client.layouts.topmenu')
@endsection
@section('content')
<div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Contact Us</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="/home">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Contact Us</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp Contact heading Wrapper Start -->
    <div class="jp_contact_heading_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_heading_wrapper">
                        <h2>Talk to us</h2>
                        <p>Call us at <span>+254 757 427284/ +254 780 956548</span> or Email us at <a href="javascript:void(0)">info@kelmasrecruiters.co.ke</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Contact heading Wrapper End -->
    <!-- jp Contact form Wrapper Start -->
    <div class="jp_contact_form_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_heading_wrapper">
                        <h2>Leave A Message</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="jp_contact_form_box">
                       {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST']) !!}
                            @csrf                       
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper">
                                    <i class="fa fa-user"></i><input type="text" placeholder="Name *" name = "name" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                    <i class="fa fa-envelope"></i><input type="email" placeholder="Email *" name = "email" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                    <i class="fa fa-phone"></i><input type="text" placeholder="Phone Number *" name = "phone" required>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs2_wrapper">
                                    <i class="fa fa-info"></i><input type="text" placeholder="Subject *" name = "subject" required>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_inputs_wrapper jp_contact_inputs4_wrapper">
                                    <i class="fa fa-text-height"></i><textarea rows="6" placeholder="Type Your Message *" name = "message" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="jp_contact_form_btn_wrapper">
                                    <ul>
                                        <li><button class="btn btn-primary" type = "submit"><i class = "fa fa-share-square "></i> Send</button></li>
                                    </ul>
                                </div>
                            </div>
                       </form>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_contact_right_box_wrapper">
                        <div class="jp_contact_form_add_heading_wrapper">
                            <h2>Contact Info</h2>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper1">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper">
                                <h3>Sadi Road, South B</h3>
                            </div>
                        </div>
                        <div class="jp_form_add_wrapper gc_map_add_wrapper2">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper2">
                                <h3> +254 757 427284</h3>
                                <h3> +254 780 956548</h3>
                            </div>
                        </div>
                        <!--<div class="jp_form_add_wrapper gc_map_add_wrapper2">-->
                        <!--    <div class="jp_map_location_icon_wrapper">-->
                        <!--        <i class="fa fa-fax"></i>-->
                        <!--    </div>-->
                        <!--    <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper3">-->
                        <!--        <h3> +254 799 522052</h3>-->
                        <!--    </div>-->
                        <!--</div>-->
                        <div class="jp_form_add_wrapper gc_map_add_wrapper3">
                            <div class="jp_map_location_icon_wrapper">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="gc_map_location_icon_cont_wrapper gc_map_location_icon_cont_wrapper4">
                                <h3> <a href="javascript:void(0)">info@kelmasrecruiters.co.ke</a></h3>
                            </div>
                        </div>
                        <div class="jp_contact_form_social_icon">
                            <ul>
                                <li><a href="javascript:void(0)"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                <li><a href="javascript:void(0)"><ion-icon name="logo-twitter"></ion-icon></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Contact form Wrapper End -->
@include('client.layouts.footer')
@endsection
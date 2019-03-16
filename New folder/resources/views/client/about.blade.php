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
                        <h2>About-Us</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="/home">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li>About-Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End -->
<!-- aboutus_section start-->
<div class="aboutus_section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="about_text_wrapper">
                    <div class="section_heading section_2_heading">
                        <h2>About Kelmas <span>Ventures Ltd</span></h2>
                    </div>
                    <p>We are a recruiting agency that recruits on behalf of cruise ships all over the world. 
                        We are the first company to recruit for msc cruise ship.
                        We recruit, train and expose personels to work in different positions in the cruise ships.
                        Kelmas Ventures Ltd works in association with <a style="color:#5DBCD2; text-decoration: underline; font-weight: bold;" href="https://www.taskinstitute.ac.ke">The Task Catering Training Institute</a> to train and equip the recruits with the neccessary skills.
                        <br>
                    </p>
                    <p>
                        We transform recruits into professional cruise management personels.
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="about_image_wrapper">
                    <img class="img-responsive" src="{{asset('client/images/gallery/1.png')}}" alt="about-img">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="about_image_wrapper">
                   
                    <img class="img-responsive" src="{{asset('client/images/gallery/visa.png')}}" alt="about-img">
                </div>
            </div>
            <br><br>
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="about_text_wrapper">
                        <strong><h4>Kelmas Ventures Ltd also offers the following additional services.</h4></strong>
                        
                        <ul>
                            <div class="col-sm-12">
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Air Tickets</a></li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Visas.</a> </li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Airport Transfers.</a> </li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Safaris</a></li> <br>
                            </div>
                        </ul>
                    </p>
                </div>
            </div>
            
        </div>
         <div class="row">
            <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="about_text_wrapper">
                    <p>
                        We offer training and recruitment for the following posts:
                    </p>
                    <ul>
                        <div class="row">
                            <div class="col-sm-6">
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Catering</a></li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">House keeping.</a> </li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Spar and massage.</a> </li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Catering</a></li> <br>
                            </div>
                            <div class="col-sm-6">
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">House keeping.</a> </li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Spar and massage.</a> </li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Spar and massage.</a> </li>
                                <li><i class="fa fa-check-square" aria-hidden="true"></i><a href="javascript:void(0)">Spar and massage.</a> </li>
                            </div>
                        </div>
                    </ul>
                    <p>
                        We transform recruits into professional cruise management personels.
                    </p>
                </div>
            </div>
             <div class="col-lg-6 col-md-6 col-xs-12 col-sm-12">
                <div class="about_image_wrapper">
                   
                    <img class="img-responsive" src="{{asset('client/images/gallery/safaris.jpg')}}" alt="about-img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp best deal Wrapper Start -->
<!-- jp best deal Wrapper End -->
<!-- jp career Wrapper Start -->
<div class="jp_career_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_hiring_slider_main_wrapper">
                    <div class="jp_career_slider_heading_wrapper">
                        <h2>Gallery</h2>
                    </div>
                    <div class="jp_career_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                                <!-- Start of galllery -->
                                
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/f1.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/f2.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/f3.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/f4.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/f5.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/f6.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/f7.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{ asset('client/images/gallery/camarote_con_balcon.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/1.png') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/red_velvet.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/teatro.jpg') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/wine.png') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/2.png') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/swimo.png') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item jp_recent_main">
                                    <div class="jp_career_main_box_wrapper">
                                        <div class="jp_career_img_wrapper">
                                            <img src="{{asset('client/images/gallery/3.png') }}" alt="career_img" />
                                        </div>
                                    </div>
                                </div>
                                <!-- End of gallery -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp career Wrapper End -->
<!-- jp counter Wrapper Start -->

<!-- jp counter Wrapper End -->
<!-- aboutus_section end -->
<div class="aboutus_page_2_section">
    <div class="container">
        <div class="row">
            
            <div class="col-xs-12">
                <div class="jp_career_slider_heading_wrapper">
                    <h2>Our Vision, Mission and Core Values</h2>
                </div>
                <br>
                <br>
                <div class="accordion_wrapper abt_page_2_wrapper">
                    <div class="panel-group" id="accordion_threeLeft">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftone" aria-expanded="true">
                                        Our Vision
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentyLeftone" class="panel-collapse collapse" aria-expanded="true" role="tablist">
                                <div class="panel-body">
                                    To be the best Ventures Ltd in educating the youth, creating employment for the youth, making executive employees and helping in the economic growth of our country.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading ">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftTwo" aria-expanded="false">
                                        Our Mission
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwentyLeftTwo" class="panel-collapse collapse in" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    To build and empower students to become agents of change by helping themdevelop the skills, knowledge and abilities neededin cruiships industry.
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->
                        <div class="panel panel-default">
                            <div class="panel-heading ">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion_threeLeft" href="#collapseTwentyLeftThree" aria-expanded="false">
                            Our Core Values
                          </a>
                                </h4>
                            </div>
                            <div id="collapseTwentyLeftThree" class="panel-collapse collapse" aria-expanded="false" role="tablist">
                                <div class="panel-body">
                                    <ul>
                                        <li><b>Integrity:</b> We provide integrity through our respect for individuals and fairness in everything we take.</li>
                                        <li><b>Teamwork:</b> We work as a team at all levels. We have good communication with the team and work together in unity and love.</li>
                                        <li><b>Excellence:</b> We commit our best in everything we do striving for professional excellence.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-default -->
                    </div>
                    <!--end of /.panel-group-->
                </div>
            </div>
            <!--end of /.col-sm-6-->
        </div>
    </div>
</div>
<!--end of /.col-sm-6-->
<!-- jp downlord Wrapper Start -->

<!-- jp downlord Wrapper End -->
@include('client.layouts.footer')
@endsection
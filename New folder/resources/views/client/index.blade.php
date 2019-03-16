@extends('client.layouts.app')
@section('mobile_menu')
    @include('client.layouts.dark_mobile_menu')
@endsection
@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('client/css/style.css') }}" />
@endsection
@section('responsive')
<link rel="stylesheet" type="text/css" href="{{ asset('client/css/responsive.css') }}" />
@endsection
@section('custom_js')
<script src="{{ asset('client/js/custom.js') }}"></script>
<script src="{{ asset('client/js/custom_II.js') }}"></script>
@endsection
@section('menu')                                                               
    <div class="jp_top_header_img_wrapper">
        <div class="jp_slide_img_overlay"></div>
        <div class="gc_main_menu_wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
                        <div class="gc_header_wrapper">
                            <div class="gc_logo">
                                <a href="/"><img src="{{ asset('logo_white.png') }}" alt="Logo" title="Kelmas Logo" class="img-responsive"></a>
                            </div>
                        </div>
                    </div>
                    @include('client.layouts.menu')
                    <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12 hidden-sm hidden-xs">
                            @guest
                            <div class="jp_navi_right_btn_wrapper">
                                <ul>
                                    <li><a href="/register"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                    <li><a href="login"><i class="fa fa-sign-in"></i>&nbsp; LOGIN</a></li>
                                </ul>
                            </div>
                        @elseif(Auth::user()->type == 'applicant')
                            <div class="jp_navi_right_btn_wrapper">
                                <ul>
                                    <li><a href="/profile"><i class="fa fa-user"></i>&nbsp; View Profile</a></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                         <i class="fa fa-sign-in"></i>&nbsp; LOGOUT
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="hidden">
                                <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                            @else
                            <div class="jp_navi_right_btn_wrapper">
                                    <ul>
                                        <li><a href="{{ route('home') }}"><i class="fa fa-user"></i>&nbsp; Admin</a></li>
                                    </ul>
                                </div>
                            @endif                    
                        </div>
                </div>
            </div>
        </div>
        <div class="jp_banner_heading_cont_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_job_heading_wrapper">
                            <div class="jp_job_heading">
                                <h1>We Are <span>Kelmas</span> Ventures Ltd</h1>
                                <p>Find Jobs here. We offer training, internship and jobs.</p>
                            </div>
                        </div>
                    </div>
                    
                    {!! Form::open(['action' => 'JobsController@search_jobs', 'method' => 'GET', 'id' => 'search_form']) !!}
                        @csrf
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_header_form_wrapper">
                            
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                                <input type="text" placeholder="Search Here" name="item">
                            </div>
                            
                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                                <div class="jp_form_btn_wrapper">
                                    <ul>
                                        <li><a href="javascript:void(0)"
                                       onclick="event.preventDefault();
                                                     document.getElementById('search_form').submit();"><i class="fa fa-search"></i> Search</a></li>
                                    </ul>
                                </div>
                            </div>
                            <button type="submit" style="display:none"></button>
                        </div>
                    </div>
                     </form>
                     
                     
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="jp_banner_main_jobs_wrapper">
                            <div class="jp_banner_main_jobs">
                                <ul>
                                    <li><i class="fa fa-tags"></i> Available job positions :</li>
                                    <li><a href="javascript:void(0)">Catering,</a></li>
                                    <li><a href="javascript:void(0)">House keeping,</a></li>
                                    <li><a href="javascript:void(0)">Spar and massage, </a></li>
                                    <li><a href="javascript:void(0)">Waiters and waitresses,</a></li>
                                    <li><a href="javascript:void(0)">Bar tender,</a></li>
                                    <li><a href="javascript:void(0)">Stewards,</a></li>
                                    <li><a href="javascript:void(0)">Gym Instructors,</a></li>
                                    
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="jp_banner_jobs_categories_wrapper">
            <div class="container">
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-utensils"></i>
                        <h3><a href="javascript:void(0)">Catering</a></h3>
                    
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-person-booth"></i>
                        <h3><a href="javascript:void(0)">House Keeping</a></h3>
                        
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_bottom">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-bed"></i>
                        <h3><a href="javascript:void(0)">Spar and Massage</a></h3>
                        
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper jp_job_cate_left_border_res">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-concierge-bell "></i>
                        <h3><a href="javascript:void(0)">waiters and Waitresses</a></h3>
                    
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-glass-martini-alt"></i>
                        <h3><a href="javascript:void(0)">Bartenders</a></h3>
                
                    </div>
                </div>
                <div class="jp_top_jobs_category_wrapper">
                    <div class="jp_top_jobs_category">
                        <i class="fa fa-users"></i>
                        <h3><a href="javascript:void(0)">Butlers</a></h3>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- jp Best deals Wrapper Start -->
    <div class="jp_best_deals_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_best_deal_slider_main_wrapper">
                        <div class="jp_best_deal_heading_wrapper">
                            <h2>The process involved</h2>
                        </div>
                        <div class="jp_best_deal_slider_wrapper">
                        
                                <div class="item">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-magnifying-glass"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="javascript:void(0)">Search for Jobs</a></h4>
                                                    <p>Search for jobs of your desire.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper1">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="flaticon-users"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="javascript:void(0)">Apply for a Job of your choice</a></h4>
                                                    <p>Choose a job that suits you and apply for it immediately.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                                <div class="jp_best_deal_icon_sec">
                                                    <i class="fa fa-university"></i>
                                                </div>
                                                <div class="jp_best_deal_cont_sec">
                                                    <h4><a href="javascript:void(0)">Get Trained</a></h4>
                                                    <p>Get equiped with the relevant skills to start your new career.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                                <div class="jp_best_deal_main_cont_wrapper jp_best_deal_main_cont_wrapper2">
                                                    <div class="jp_best_deal_icon_sec">
                                                        <i class="flaticon-shield"></i>
                                                    </div>
                                                    <div class="jp_best_deal_cont_sec">
                                                        <h4><a href="javascript:void(0)">Get Employed</a></h4>
                                                        <p>We will put you under a 1 year contract with a salary of over ksh 100,000</p>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                                
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Best deals Wrapper End -->
    <div class="jp_best_deals_main_wrapper">
        <div class="container">
                <div class="jp_best_deal_heading_wrapper">
                        <h2>Recent Job Posts</h2><br><br>
                </div>
        </div>
            
    </div>

    @foreach($jobs as $job)
    <div class="jp_best_deals_main_wrapper">
        <div class="container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <div class="jp_job_post_side_img">
                            <img src="{{ asset('client/images/job.png') }}" alt="post_img" />
                        </div>
                        <div class="jp_job_post_right_cont">
                            <h4>{{ $job->title }}</h4>
                            <p>Kelmas Ventures Ltd</p>
                            <ul>
                                <li><i class="fa fa-money-bill"></i>&nbsp;Ksh {{  $job->salary }} per month</li>
                                <!-- <li><i class="fa fa-map-marker"></i>&nbsp; Caliphonia, PO 455001</li> -->
                            </ul>
                        </div>
                    </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            <div class="jp_job_post_right_btn_wrapper">
                                <ul>
                                    <li><a href="/jobs">view Job</a></li>
                                </ul>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- jp Client Wrapper Start -->
    <div class="jp_client_slider_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_first_client_slider_wrapper">
                        <div class="jp_first_client_slider_img_overlay"></div>
                        <div class="jp_client_heading_wrapper">
                            <h2>What our Clients Say?</h2>
                        </div>
                        <div class="jp_client_slider_wrapper">
                            <div class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="jp_client_slide_show_wrapper">
                                        <div class="jp_client_slider_img_wrapper">
                                            <img src="{{ asset('client/images/content/client_slider_img.png') }}" alt="client_img" />
                                        </div>
                                        <div class="jp_client_slider_cont_wrapper">
                                            <p>“I was recruited as a housekeeper by Kelmas Ventures Ltd where I received a refresher course and now happily serving in my career”</p>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span>~ Applicant 1 &nbsp;<b>(housekeeper)</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="jp_client_slide_show_wrapper">
                                        <div class="jp_client_slider_img_wrapper">
                                            <img src="{{ asset('client/images/content/client_slider_img.png') }}" alt="client_img" />
                                        </div>
                                        <div class="jp_client_slider_cont_wrapper">
                                            <p>“I was recruited as a bartender by Kelmas Recruitment agency where I received a refresher course and now serving as a cruise ship attendant”</p>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span>~ Applicant 2 &nbsp;<b>(bartender)</b></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="jp_client_slide_show_wrapper">
                                        <div class="jp_client_slider_img_wrapper">
                                            <img src="{{ asset('client/images/content/client_slider_img.png') }}" alt="client_img" />
                                        </div>
                                        <div class="jp_client_slider_cont_wrapper">
                                            <p>“I was recruited as a waitress by Kelmas Ventures agency where I received a refresher course and now serving as a cruise ship attendant”</p>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i><span>~ Applicant 3 &nbsp;<b>(waitress)</b></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Client Wrapper End -->
    <div class="jp_career_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_hiring_slider_main_wrapper">
                        <div class="jp_career_slider_heading_wrapper">
                            <h2>Activities</h2>
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
    @include('client.layouts.footer')
@endsection
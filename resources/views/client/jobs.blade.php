@extends('client.layouts.app')
@section('responsive')
<link rel="stylesheet" type="text/css" href="{{ asset('client/css/responsive2.css') }}" />
@endsection
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
@section('top_menu')
    @include('client.layouts.topmenu')
@endsection
@section('custom_js')
<script src="{{ asset('client/js/custom_II.js') }}"></script>
@endsection
@section('content')
    <!-- top part start -->
    <div class="jp_bottom_footer_Wrapper_header_img_wrapper">
            <div class="jp_slide_img_overlay"></div>
            <div class="jp_banner_heading_cont_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="jp_job_heading_wrapper">
                                <div class="jp_job_heading">
                                    @if($check)
                                        <h1>Search Results for:  <span>{{ $item }}</span></h1>
                                    
                                    @else
                                    <h1>Find <span>Jobs</span> Here</h1>
                                    <p>Search for various Job positions as a cruise ship working personell</p>
                                    @endif
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
                                    <p style="font-size:20px;">We recruit both skilled and unskilled personell.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- top part End -->
    <!-- jp listing sidebar Wrapper Start -->
    <div class="jp_listing_sidebar_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_listing_heading_wrapper">
                        <h2>View all <span>available</span> Jobs.</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            @if($check)
                                @if($jobs->count() == 0)
                                    <br><br><br>
                                    <div class="jp_listing_heading_wrapper">
                                        <h4 style="font-weight:bold;">No results found for <span>{{ $item }}.</span> Click <a href="/jobs" style="color:tomato; text-align:centre">here</a> to view all jobs.</h4>
                                    </div>
                                    
                                @else
                                    <div class="tab-content">
                                <div id="grid" class="tab-pane fade in active">
                                    <div class="row">
                                        @foreach($jobs as $job)
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_side_img">
                                                                <img src="{{ asset('client/images/job.png') }}" alt="post_img" />
                                                            </div>
                                                            <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                                <h4>{{$job->title}}</h4>
                                                                <p>Kelmas Ventures Ltd.</p>
                                                                <ul>
                                                                    <li><i class="fa fa-cc-paypal"></i>&nbsp; {{'Ksh '.$job->salary}}</li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                                <ul>
                                                                    <li><a class="fa fa-eye" href="/show/{{$job->id}}">Details</a></li>
                                                                </ul>
                                                                <ul>
                                                                <li><a class="fa fa-university" href="/apply/{{$job->id}}">Apply</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="jp_job_post_keyword_wrapper">
                                                    <ul>
                                                        <li><i class="fa fa-caret"></i>Other Information :</li>
                                                        <li><a target="_blank" href="https://taskinstitute.ac.ke">Refresher course upon recruitment</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                
                            </div>
                                @endif
                            @else
                                <div class="tab-content">
                                    <div id="grid" class="tab-pane fade in active">
                                        <div class="row">
                                            @foreach($jobs as $job)
                                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                                                    <div class="jp_job_post_main_wrapper jp_job_post_grid_main_wrapper">
                                                        <div class="row">
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="jp_job_post_side_img">
                                                                    <img src="{{ asset('client/images/job.png') }}" alt="post_img" />
                                                                </div>
                                                                <div class="jp_job_post_right_cont jp_job_post_grid_right_cont">
                                                                    <h4>{{$job->title}}</h4>
                                                                    <p>Kelmas Ventures Ltd.</p>
                                                                    <ul>
                                                                        <li><i class="fa fa-cc-paypal"></i>&nbsp; {{'Ksh '.$job->salary}}</li>
                                                                        
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="jp_job_post_right_btn_wrapper jp_job_post_grid_right_btn_wrapper">
                                                                    <ul>
                                                                        <li><a class="fa fa-eye" href="/show/{{$job->id}}">Details</a></li>
                                                                    </ul>
                                                                    <ul>
                                                                    <li><a class="fa fa-university" href="/apply/{{$job->id}}">Apply</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="jp_job_post_keyword_wrapper">
                                                        <ul>
                                                            <li><i class="fa fa-caret"></i>Other Information :</li>
                                                            <li><a target="_blank" href="https://taskinstitute.ac.ke">Refresher course upon recruitment</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>
    <!-- jp listing sidebar Wrapper End -->
    <div class="jp_pricing_main_wrapper">
        <div class="container">
        
        </div>
    </div>
    @include('client.layouts.footer')
@endsection
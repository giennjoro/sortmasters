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
<!-- Header Wrapper End -->
<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
    <div class="jp_tittle_img_overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_tittle_heading_wrapper">
                    <div class="jp_tittle_heading">
                        <h2>{{ Auth::user()->name }}'s Profile</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                <li>candidate-Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp Tittle Wrapper End -->
<div class="jp_cp_profile_main_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="jp_cp_left_side_wrapper">
                    <div class="jp_cp_left_pro_wallpaper">
                        <img src="images/content/cp1.png" alt="profile_img">
                        <h2>{{ Auth::user()->name }}</h2>
                        @if(Auth::user()->application != null)
                            <p>You Applied for a {{ Auth::user()->application->job }} job</p>
                        @else
                            
                        @endif
                        
                    </div>
                    <!-- <div class="jp_cp_rd_wrapper">
                        <ul>
                            <li><a href="#"><i class="fa fa-download"></i> &nbsp;Download Resume</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i> &nbsp;Contact candidate</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="jp_cp_right_side_wrapper">
                    <div class="jp_cp_right_side_inner_wrapper">
                        <h2>PERSONAL DETAILS</h2>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="td-w25">Full Name</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">{{ Auth::user()->name }}</td>
                                </tr>
                                 @if(Auth::user()->application != null)
                                <tr>
                                    <td class="td-w25">Address</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">Street 110-B Kasarani, Nairobi-Kenya</td>
                                </tr>
                               
                                <tr>
                                    <td class="td-w25">Highest Level of Education</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">Tertiary</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Phone</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">+254 712 345678</td>
                                </tr>
                                 @endif
                                <tr>
                                    <td class="td-w25">Email</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">email@kelmasrecruiters.co.ke</td>
                                </tr>
                                 @if(Auth::user()->application != null)
                                <tr>
                                    <td class="td-w25">Job Applied</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">Bar Tenders</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Marital Status</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">Single</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Gender</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">Female</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">Date of Birth</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">1st January 2019</td>
                                </tr>
                                <tr>
                                    <td class="td-w25">ID/Passport No</td>
                                    <td class="td-w10">:</td>
                                    <td class="td-w65">12345678</td>
                                </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('client.layouts.footer')
@endsection
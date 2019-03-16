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
                        <h2>Apply for Jobs as Cruise Ships Personnel</h2>
                    </div>
                    <div class="jp_tittle_breadcrumb_main_wrapper">
                        <div class="jp_tittle_breadcrumb_wrapper">
                            <ul>
                                <li><a href="/">Home</a> <i class="fa fa-angle-right"></i></li>
                                <li>Job-application</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp ad post Wrapper Start -->
<form action="{{ route('store_application')}}" method="POST">
    @csrf
        <div class="jp_adp_main_section_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="jp_adp_form_heading_wrapper">
                            <h2><strong>Application Form</strong><span style="color:red; font-size: 12px;"> (Fields with * are mandatory)</span></h2>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="job"><span style = "color: red;">* </span>Job</label>
                            <select name="job" required>
                                <option value="{{$job_selected->title}}"> {{$job_selected->title}}</option>
                                @foreach($jobs as $job)
                                <option value="{{$job->title}}">{{$job->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="address"><span style = "color: red;">* </span>Address</label>
                            <input type="text" name="address" placeholder="eg 057-00217" required>
                        </div>
                        <div class="jp_adp_form_wrapper">
                                <label for="marital"><span style = "color: red;">* </span>marital status</label>
                            <select name="marital" required>
                                <option value=""> -- select marital status --</option>
                                <option value="single">single</option>
                                <option value="married">married</option>
                                
                            </select>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="dob"><span style = "color: red;">* </span>Date of Birth</label>
                            <input type="date" name="dob" placeholder='enter date of birth' required>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="age"><span style = "color: red;">* </span>Age</label>
                            <input type="text" name="age" placeholder='enter your age' required>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="skills">Skills</label>
                            <input type="text" name="skills" placeholder='enter your skills' required>
                        </div>
                        <div class="jp_adp_form_wrapper">
                                <label for="illness_history"><span style = "color: red;">* </span>Do you have any illness/disability which causes you to take time off from work on a regular basis?
                                </label>
                                <select name="illness_history" required>
                                    <option value=""> -- select answer --</option>
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="illness_details">illness Details</label>
                            <input type="text" name="illness_details" placeholder='enter illness details'>
                        </div>
                        <!-- <div class="row">
                            <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
                                <div class="jp_adp_form_wrapper">
                                    <input type="text" placeholder="Salary Min">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
                                <div class="jp_adp_form_wrapper">
                                    <input type="text" placeholder="Salary Max">
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
                        <div style="height:15px;" class="jp_adp_form_heading_wrapper">
                            
                        </div>
                        <div class="jp_adp_form_wrapper">
                                <label for="marital_status"><span style = "color: red;">* </span>Are you Disabled? If yes provide registration number and certificate expiry date</label>
                                <select name="disability_status" required>
                                    <option value=""> -- select disabiity status --</option>
                                    <option value="yes">yes</option>
                                    <option value="no">no</option>
                                </select>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="disability_reg">Disability Registration Number</label>
                            <input type="text" name="disability_reg" placeholder='enter your disability registration number'>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="cert_expiry">Date Disability Certificate Exipiration</label>
                            <input type="date" name="cert_expiry" placeholder='enter date of your disability certificate'>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="court_conviction"><span style = "color: red;">* </span>Do you have any court conviction, outstanding summons or prosecution (except spent convictions under the Rehabilitation of Offenders Act  1974)? If yes, please give details.
                            </label>
                            <select name="court_conviction" required>
                                <option value=""> -- select answer --</option>
                                <option value="yes">yes</option>
                                <option value="no">no</option>
                            </select>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="conviction_details">Court Conviction Details</label>
                            <input type="text" name="conviction_details" placeholder='enter your conviction details'>
                        </div>
                        <div class="jp_adp_form_wrapper">
                            <label for="id_no"><span style = "color: red;">* </span>Id Number</label>
                            <input type="text" name="id_no" placeholder='enter your id Number' required>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="btn btn-primary" type="submit"><i class = "fa fa-share-square "></i> Apply</button>
                    </div>
                </div>
            </div>
        </div>
</form>
@include('client.layouts.footer')
@endsection
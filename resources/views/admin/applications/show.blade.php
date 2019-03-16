@extends('admin.layouts.app')
@section('style')
<link id="theme" rel="stylesheet" href="{{ asset('/admin/css/style-blue-header.css') }}" type="text/css">
@stop
@section('header')
    @include('admin.layouts.header')
@endsection
@section('sidebar_left')
    @include('admin.layouts.sidebar_left')
@endsection
@section('sidebar_right')
    @include('admin.layouts.sidebar_right')
@endsection
@section('content')
    <!-- Begin page content -->
    <div class="container">
        
        <div class="row">
            <div class="col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12  order-md-1">
                <div class="card rounded-0 border-0 mb-3">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-12">
                                <h5 class="card-title">
                                    <i class="icon fa fa-briefcase text-primary mr-2"></i>
                                    {{ $application->user->name."'s Application"}}
                                    <small>{{ $application->job }}</small> 
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body ">
                        <div class="list-unstyled userlist" style="padding: 5%">
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-success"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Applicant Name:</h5>
                                                {{ $application->user->name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-primary"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Id Number:</h5>
                                                {{ $application->id_no }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Job:</h5>
                                                {{$application->job }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Age:</h5>
                                                {{ $application->age }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Marital Status:</h5>
                                                {{ $application->marital_status }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Date of Birth:</h5>
                                                {{ $application->dob}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Do you have any illness/disability which causes you to take time off from work on a regular basis? :</h5>
                                                {{ $application->illness_history }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Illness Details:</h5>
                                                {{ $application->illness_details }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Skills:</h5>
                                                {{ $application->skills }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5> Are you Disabled? If yes provide registration number and certificate expiry date:</h5>
                                                {{ $application->disability_status }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Disability Registration Number:</h5>
                                                {{ $application->disability_reg }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Date Disability Certificate Exipiration:</h5>
                                                {{ $application->cert_expiry }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5> Do you have any court conviction, outstanding summons or prosecution (except spent convictions under the Rehabilitation of Offenders Act 1974)? If yes, please give details. :</h5>
                                                {{ $application->court_conviction }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-warning"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>Court Conviction Details:</h5>
                                                {{ $application->conviction_details }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4" style="margin: 3%;">
                                {!! Form::open(['action' => ['ApplicationsController@destroy',$application->id], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                    {{ Form::hidden('_method' ,'DELETE')}}
                                    {{ Form::submit('Remove',['class'=>'btn btn-danger fa fa-trash']) }}
                                {!! Form::close() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <br>
                    <br>
                </div>
               

            </div>
        </div>
    </div>
@endsection
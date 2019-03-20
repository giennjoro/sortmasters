@extends('admin.layouts.app')
@section('style')
<link rel="stylesheet" href="{{ asset('admin/css/style-blue-header.css') }}" type="text/css">
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
        <div class="container-fluid bg-purple position-relative pb-4">
            <div class="row">
                <div class="container pt-2 pb-5">
                    <div class="row page-title-row">
                        <div class="col-8 col-md-6">
                            <h2 class="page-title text-white">Dashboard</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Begin page content -->
        <div class="container">

            <div class="row upside-summary">
            <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                <div class="card mb-3 border-0 rounded-0 bg-warning">
                    <span class="icon-background fa fa-users"></span>
                    <div class="card-body">
                        <div class="media mb-2">
                            <div class="media-body">
                                <h4>{{ $admins }}</h4>
                                <p class="text-uppercase">Admins</p>
                            </div>
                            <span class="icon fa fa-users"></span>
                        </div>
                        <div class="row">
                            <div class="col">
                                <small>Progress</small>
                            </div>
                            <div class="col">
                                <span class="dynamicsparkline2">Loading..</span>
                            </div>
                        </div>
                        <div class="progress progress-sm rounded-0 bottom light">
                            <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card mb-3 border-0 rounded-0 bg-success">
                        <span class="icon-background fa fa-building"></span>
                        <div class="card-body">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <h4>{{ $properties }}</h4>
                                    <p class="text-uppercase">Properties</p>
                                </div>
                                <span class="icon fa fa-building"></span>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <small>Progress</small>
                                </div>
                                <div class="col">
                                    <span class="dynamicsparkline2">Loading..</span>
                                </div>
                            </div>
                            <div class="progress progress-sm rounded-0 bottom light">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card mb-3 border-0 rounded-0 bg-warning">
                        <span class="icon-background fa fa-calendar"></span>
                        <div class="card-body">
                            <div class="media mb-2">
                                <div class="media-body">
                                    <h4>{{ $events }}</h4>
                                    <p class="text-uppercase">Events</p>
                                </div>
                                <span class="icon fa fa-calendar"></span>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <small>Progress</small>
                                </div>
                                <div class="col">
                                    <span class="dynamicsparkline2">Loading..</span>
                                </div>
                            </div>
                            <div class="progress progress-sm rounded-0 bottom light">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card mb-3 border-0 rounded-0 gradient-success">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="f-light">{{ $upcoming_events }}</h2>
                                    <p class="mb-0">Upcoming Events</p>
                                </div>
                                <span class="icon fa fa-check-circle"></span>
                            </div>
                            <div class="progress progress-sm rounded-0 light mt-3">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card mb-3 border-0 rounded-0 gradient-danger">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="f-light">$agents</h2>
                                    <p class="mb-0">Agents</p>
                                </div>
                                <span class="icon fa fa-exclamation-circle"></span>
                            </div>
                            <div class="progress progress-sm rounded-0 light mt-3">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card mb-3 border-0 rounded-0 gradient-info">
                        <div class="card-body">
                            <div class="media">
                                <div class="media-body">
                                    <h2 class="f-light">{{ $categories }}</h2>
                                    <p class="mb-0">Categories</p>
                                </div>
                                <span class="icon fa fa-info-circle"></span>
                            </div>
                            <div class="progress progress-sm rounded-0 light mt-3">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>


        </div>
@endsection

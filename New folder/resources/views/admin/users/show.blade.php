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
    <!-- <div class="container-fluid bg-secondary mb-3 position-relative py-4 bg-dark">
        <figure class="background">
            <img src="{{ asset('admin/images/bg.png') }}" alt="user image" >
        </figure>
        <div class="card rounded-0 border-0 mb-3 bg-none col-md-10 col-lg-6 col-xl-4 mx-auto">
            <div class="card-body  userlist_large">
                <div class="media">
                    <figure class="avatar150 rounded-circle mt-3">
                        <img src="../assets/img/user1.png" alt="user image" class="mCS_img_loaded">
                    </figure>
                    <div class="media-body">
                        <h4 class="mt-0">Maxartkiller</h4>
                        <p class="text-secondary">UX Designer</p>
                        <p class="mb-0 text-secondary">Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in
                            various business domains like Manufacturing, inventory, IT, administration etc.</p>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-none">
                <div class="row">
                    <div class="col">
                        <div class="media media-sm">
                            <div class="media-body text-center">
                                <h4 class="mb-0">263564</h4>
                                <a href="#" class="text-primary">Follower</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media media-sm">
                            <div class="media-body text-center">
                                <h4 class="mb-0">2635</h4>
                                <a href="#" class="text-primary">Following</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="media media-sm">
                            <div class="media-body text-center">
                                <h4 class="mb-0">2635k</h4>
                                <a href="#" class="text-primary">Posts</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

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
                                    {{ $user->name }}'s Profile | 
                                    <small>{{ $user->type }}</small> 
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
                                                <h5>Full Name:</h5>
                                                {{ $user->name}}
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
                                                <h5>Email</h5>
                                                {{ $user->email }}
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
                                                <h5>Phone:</h5>
                                                {{ $user->phone }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4" style="margin: 3%;">
                                    <a href='/administrator/users/{{$user->id}}/edit' ><button class="btn btn-success fa fa-edit"> Edit</button></a>
                                </div>
                                <div class="col-xs-2">
                                    
                                </div>
                                <div class="col-xs-4" style="margin: 3%;">
                                {!! Form::open(['action' => ['UsersController@destroy',$user->id], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                    {{ Form::hidden('_method' ,'DELETE')}}
                                    {{ Form::submit('Remove',['class'=>'btn btn-danger fa fa-trash']) }}
                                {!! Form::close() !!}
                                </div>
                            </div>
                            
                            <!-- <div class="list-item py-0 ">
                                <div class="row">
                                    <div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
                                        <span class="timeline-bubble bg-primary"></span>
                                        <div class="media">
                                            <div class="media-body">
                                                <h5>UX Designer - Apple</h5>
                                                <p>2010 - 2011</p>
                                                This icons are just for presentation of UI. Bootstrap template design is HTML template based on Bootstrap 4.1 framework.
                                                This html template can be used in various business domains like Manufacturing, inventory, IT, administration
                                                etc.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    
                    <br>
                    <br>
                    @if($user->type == 'applicant')
                        <a href="{{ route('applications.show', [ 'id'=> $user->id ]) }}" class="btn btn-success"> See Application</a>
                       {{-- <div class="card-header">
                            <div class="row">
                                <div class="col-12">
                                    <h5 class="card-title">
                                        <i class="icon fa fa-university text-primary mr-2"></i>
                                        Application 
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
                                                    <h5>Full Name:</h5>
                                                    {{ $user->name}}
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
                                                    <h5>Email</h5>
                                                    {{ $user->email }}
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
                                                    <h5>Phone:</h5>
                                                    {{ $user->phone }}
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
                                                    <h5>UX Designer - Apple</h5>
                                                    <p>2010 - 2011</p>
                                                    This icons are just for presentation of UI. Bootstrap template design is HTML template based on Bootstrap 4.1 framework.
                                                    This html template can be used in various business domains like Manufacturing, inventory, IT, administration
                                                    etc.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div> --}}
                    @endif
                </div>
               

            </div>
        </div>
    </div>
@endsection
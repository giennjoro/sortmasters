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
                                    {{ $event->title }}
                                    <small>@if($event->expiry_date < date('Y-m-d H:i:s')) <span style="color:red">expired</span> @else upcoming @endif</small> 
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
                                                <h5>Title:</h5>
                                                {{ $event->title }}
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
                                                <h5>Description:</h5>
                                                {{ $event->description }}
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
                                                <h5>Event Date:</h5>
                                                {{$event->date }}
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
                                                <h5>Expiry Date:</h5>
                                                {{ $event->expiry_date }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4" style="margin: 3%;">
                                    <a href="{{ route('events.edit', ['slug' => $event->slug]) }}" class="btn btn-success">Edit</a>
                                </div>
                                <div class="col-xs-4" style="margin: 3%;">
                                    {!! Form::open(['action' => ['EventsController@destroy',$event->slug], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
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
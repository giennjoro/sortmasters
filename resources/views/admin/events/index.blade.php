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
    <div class="container-fluid mb-2">
        <div class="row">
            <div class="container">
                <div class="row page-title-row">
                    <div class="col-8 col-md-6">
                        <h2 class="page-title">Events</h2>
                        <p>View All Events </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <div class="row">
            @if(count($events) > 0)
                @foreach($events as $event)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="card rounded-0 border-0 mb-3 bg-primary">
                            <div class="card-body p-3">
                                <div class="media">
                                    <div class="figure avatar60 rounded-circle bg-none">
                                        <h4 class="mt-2">
                                            <b>{{ $event->date->format('d') }}</b>
                                            <br>
                                            <small>{{ $event->date->format('M') }}</small>
                                        </h4>
                                    </div>
                                    <div class="media-body">
                                        <h4 class="f-light">{{ $event->title }}</h4>
                                        <p>
                                            <i class="fa fa-map-calendar"></i> {{ $event->date->format('d') . " " . $event->date->format('M') . " " . $event->date->format('Y')}}</p>
                                            {{ $event->description }}
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-6">
                                        @if($event->expiry_date != null)
                                            @if($event->expiry_date < date('Y-m-d H:i:s'))
                                                <span style="color: red;">
                                                    Exp date: {{ $event->expiry_date->format('d') . " " . $event->expiry_date->format('M') . " " . $event->expiry_date->format('Y')}}
                                                </span>
                                            @else
                                                Exp date: {{ $event->expiry_date->format('d') . " " . $event->expiry_date->format('M') . " " . $event->expiry_date->format('Y')}}
                                            @endif
                                        @else
                                            Exp date: Not specified.
                                        @endif
                                    </div>
                                    <div class="text-right">
                                        {!! Form::open(['action' => ['EventsController@destroy',$event->slug], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                            {{ Form::hidden('_method' ,'DELETE')}}
                                            <div class="form-input">
                                                    <a href="{{ route('events.edit', ['slug' => $event->slug]) }}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i>Edit</a>
                                                <button class="btn btn-danger btn-sm"type="submit"><i class="fa fa-trash"></i>Delete</button>
                                            </div>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>There are no events to display.</p>
            @endif
        </div>
    </div>
@endsection
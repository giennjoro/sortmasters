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
    <div class="container-fluid">
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
                <div class="col-sm-12">
                    <div class="card border-0 rounded-0 mb-3">
                      <div class="card-header">
                        <h5 class="card-title">Events | <small>You have added the following events</small></h5>
                      </div>
                      <div class="card-body">
                        @if(count($events) > 0)
                            <table class="table " id="dataTables-example">
                                <thead>
                                    <tr>
                                    <th>Title</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                        <tr class="odd">
                                            <td>{{$event->title}} @if($event->expiry_date < date('Y-m-d H:i:s')) (<span style="color: red;">expired</span>) @endif</td>
                                            <td>{{ $event->date }}</td>
                                            <td>
                                                {!! Form::open(['action' => ['EventsController@destroy',$event->slug], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                                    {{ Form::hidden('_method' ,'DELETE')}}
                                                    <div class="form-input">
                                                        <button class="btn btn-danger btn-sm" style="background-color: transparent; border: 0px" type="submit"><i class="fa fa-trash" style="color: red"></i> </button>
                                                        <a href="{{ route('events.show', ['slug' => $event->slug]) }}" class="btn btn-info btn-sm" style="background-color: transparent; border: 0px" ><i class="fa fa-eye" style="color: green"></i></a>
                                                    </div>
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>There are no events to display.</p>
                        @endif
                        <!-- /.table-responsive --> 
                      </div>
                    </div>
                  </div>

            </div>
    </div>
@endsection
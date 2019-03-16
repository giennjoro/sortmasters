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
                        <h2 class="page-title">View Subscribers</h2>
                        <p>Available Subscribers </p>
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
                        <h5 class="card-title">Subscribers <small>Subscriber Emails</small></h5>
                      </div>
                      <div class="card-body">
                        @if(count($subscribers) > 0)
                            <table class="table " id="dataTables-example">
                            <thead>
                                <tr>
                                <th>Email </th>
                                <th>Subscriber Since</th>
                                <th></th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($subscribers as $subscriber)
                                <tr class="odd">
                                <td>{{$subscriber->email}}</td>
                                <td>{{date('F d, Y', strtotime($subscriber->created_at))}}</td>
                                <td>
                                    <a href='/administrator/subscribers/{{$subscriber->id}}/edit' ><button class="btn btn-success fa fa-pencil"> Edit</button></a>
                                </td>
                                <td>
                                    {!! Form::open(['action' => ['SubscribersController@destroy',$subscriber->id], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                        {{ Form::hidden('_method' ,'DELETE')}}
                                        
                                        {{ Form::submit('Remove',['class'=>'btn btn-danger']) }}
                                    
                                    {!! Form::close() !!}
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @else
                            <p>There are no subscribers to display.</p>
                        @endif
                        <!-- /.table-responsive --> 
                      </div>
                    </div>
                  </div>

            </div>
    </div>
@endsection
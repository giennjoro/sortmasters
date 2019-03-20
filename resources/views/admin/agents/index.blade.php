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
                        <h2 class="page-title">View agents</h2>
                        <p>Available agents </p>
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
                    <h5 class="card-title">agents | <small>You have added the following agents</small></h5>
                    </div>
                    <div class="card-body">
                    @if(count($agents) > 0)
                        <table class="table " id="dataTables-example">
                        <thead>
                            <tr>
                            <th>Agent</th>
                            <th>Phone</th>
                            <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($agents as $agent)
                            <tr class="odd">
                                <td><img src="../assets/img/user1.html" alt="" class="rounded-circle avatar50 figure">{{$agent->name}}</td>
                                <td>{{$agent->phone}}</td>
                                <td>
                                {!! Form::open(['action' => ['AgentController@destroy',$agent->id], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                    {{ Form::hidden('_method' ,'DELETE')}}
                                    <div class="form-input">
                                        <button class="btn danger btn-sm" type="submit"><i class="fa fa-trash"></i> </button>
                                        <a href="{{ route('agents.edit', ['id' => $agent->id]) }}" class="btn btn-info btn-sm" style="background-color: transparent; border: 0px" ><i class="fa fa-eye" style="color: green"></i></a>
                                    </div>
                                {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    @else
                        <p>There are no agents to display.</p>
                    @endif
                    <!-- /.table-responsive --> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
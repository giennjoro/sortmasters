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
                        <h2 class="page-title">edit agent Details</h2>
                        <p>Fields with asterik (<span style="color: red">*</span>) are mandatory</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
        <i class="mr-2 fa fa-newspaper"></i>Edit {{$agent->name}}</h5>
        <div class="row">
            <div class="col-12 col-md-12">
                {!! Form::open(['action' => ['AgentController@update', $agent->id], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                    @csrf
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                    <input name='name' value="{{$agent->name}}" type="text" class="form-control" required>
                        <label>Agent Name</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='phone' value="{{$agent->phone}}" type="text" class="form-control" required>
                        <label>Phone Number</label>
                    </div>
                    <div class="form-group increment">
                        <label><span style="color: red"></span>Agent Image</label>
                        <input name='agent_image' type="file" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Save Changes</button>
                </form>
            </div>
        </div>
        <br>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@endsection
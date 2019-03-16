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
                        <h2 class="page-title">Edit Job</h2>
                        <p>edit job here </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
            <i class="mr-2 fa fa-newspaper"></i>Edit the job's details below</h5>
        <div class="row">
            <div class="col-12 col-md-12">
                <form action="{{ route('jobs.update',['id' => $job->id])}}" method="post">
                    @csrf
                    <div class="form-group float-label">
                        <input name='title'  value="{{$job->title}}" type="text" class="form-control" required>
                        <label>Job Title</label>
                    </div>
                    <div class="form-group float-label">
                        <textarea name='description' value=""class="form-control">{{$job->description}}</textarea> 
                        <label>Description</label>
                    </div>
                    <div class="form-group float-label">
                        <input name='salary' type="text" value="{{$job->salary}}" class="form-control">
                        <label>Salary</label>
                    </div>
                    <div class="form-group float-label">
                        <textarea name='requirements' class="form-control">{{$job->requirements}}</textarea>
                        <label>Requirements</label>
                    </div>
                    <div class="form-group float-label">
                        <input name='company_name' type="text" value="{{$job->company_name}}" class="form-control">
                        <label>Company Name</label>
                    </div>
                    {{ Form::hidden('_method','PUT')}}

                    <button class="btn btn-primary" type="submit"><i class="fa fa-edit"></i> Edit Job</button>
                </form>
            </div>
        </div>
        <br>
    </div>
@endsection
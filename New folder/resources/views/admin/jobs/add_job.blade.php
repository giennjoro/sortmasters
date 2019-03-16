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
                        <h2 class="page-title">Add job</h2>
                        <p>Add a new job here </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
            <i class="mr-2 fa fa-newspaper"></i>Enter the job's Details</h5>
        <div class="row">
            <div class="col-12 col-md-12">
                <form action="{{ route('jobs.store')}}" method="post">
                    @csrf
                    <div class="form-group float-label">
                        <input name='title' type="text" class="form-control">
                        <label>Job Title</label>
                    </div>
                    <div class="form-group float-label">
                        <textarea name='description' type="text" class="form-control"></textarea></textarea> 
                        <label>Description</label>
                    </div>
                    <div class="form-group float-label">
                        <input name='salary' type="text" class="form-control">
                        <label>Salary in (ksh)</label>
                    </div>
                    <div class="form-group float-label">
                        <textarea name='requirements' type="text" class="form-control"></textarea>
                        <label>Requirements</label>
                    </div>

                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Add job</button>
                </form>
            </div>
        </div>
        <br>
    </div>
@endsection
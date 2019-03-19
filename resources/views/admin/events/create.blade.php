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
                        <h2 class="page-title">Add Event</h2>
                        <p>Fields with asterik (<span style="color: red">*</span>) are mandatory</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
            <i class="mr-2 fa fa-newspaper"></i>Enter the Event's Details</h5>
        <div class="row">
            <div class="col-12 col-md-12">
                <form action="{{ route('events.store')}}" method="post" enctype = "multipart/form-data">
                    @csrf
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='title' type="text" class="form-control" required>
                        <label>Event Title</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <textarea name='description' type="text" class="form-control" rows="6" required></textarea>
                        <label>Description</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='date' type="text" class="form-control" required>
                        <label>Event Date</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='expiry_date' type="date" class="form-control" required>
                        <label>Expiry Date (mm/dd/yyyy)</label>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Add Event</button>
                </form>
            </div>
        </div>
        <br>
    </div>
    
@endsection
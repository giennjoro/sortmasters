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
                        <h2 class="page-title">Edit Event</h2>
                        <p>Fields with asterik (<span style="color: red">*</span>) are mandatory</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
            <i class="mr-2 fa fa-newspaper"></i>Edit the Event's Details</h5>
        <div class="row">
            <div class="col-12 col-md-12">
                {!! Form::open(['action' => ['EventsController@update', 'slug' => $event->slug], 'method' => 'PUT']) !!}
                    @csrf
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='title' type="text" class="form-control" value="{{ $event->title }}" required>
                        <label>Event Title</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <textarea name='description' type="text" class="form-control" rows="6" required>{{ $event->description }}</textarea>
                        <label>Description</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='date' type="date" class="form-control" value="{{ $event->date }}" required>
                        <label>Event Date</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: white">.</span>
                        <input name='expiry_date' type="date" class="form-control" value="{{ $event->expiry_date }}">
                        <label>Expiry Date (mm/dd/yyyy)</label>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Edit Event</button>
                </form>
            </div>
        </div>
        <br>
    </div>
    
@endsection
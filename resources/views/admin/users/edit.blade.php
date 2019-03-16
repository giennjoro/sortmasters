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
                        <h2 class="page-title">Edit Details</h2>
                        <p>Edit user here </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
            <i class="mr-2 fa fa-newspaper"></i>Fields with asterik(<span style="color:red;">*</span>) are mandatory</h5>
        <div class="row">
            <div class="col-12 col-md-12">
                <form action="{{ route('admin.update', ['slug' => $user->slug]) }}" method="post">
                    @csrf
                    <div class="form-group float-label">
                        <input name='name' type="text" class="form-control" required value="{{ $user->name }}">
                        <label><span style="color:red;">*</span>Full Name</label>
                    </div>
                    <div class="form-group float-label">
                        <input name='email' type="email" class="form-control" required value="{{ $user->email }}">
                        <label><span style="color:red;">*</span>User's Email</label>
                    </div>
                    <div class="form-group float-label">
                        <input name='password' type="text" class="form-control">
                        <label>Password</label>
                    </div>
                    <div class="form-group float-label">
                        <input name='confirm_password' type="text" class="form-control">
                        <label>Confirm Password</label>
                    </div>
                    <div class="form-group float-label">
                        <input name='phone' type="text" class="form-control" value="{{ $user->phone }}">
                        <label>Phone Number</label>
                    </div>
                    @if(Auth::user()->is_supper)
                    <div class="form-group ">
                        <input type="checkbox" name='is_supper' @if($user->is_supper) checked @endif>
                        <label>Make supper admin</label>
                    </div>
                    @endif
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"></i> Save</button>
                </form>
            </div>
        </div>
        <br>
    </div>
@endsection
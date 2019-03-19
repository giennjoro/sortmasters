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
                        <h2 class="page-title">{{ $category->name }} | Edit</h2>
                        <p>Fields with asterik (<span style="color: red">*</span>) are mandatory</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
            <i class="mr-2 fa fa-newspaper"></i>Edit the category's Details</h5>
        <div class="row">
            <div class="col-12 col-md-12">
            {!! Form::open(['action' => ['CategoriesController@update', 'slug' => $category->slug], 'method' => 'PUT']) !!}
                    @csrf
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='name' type="text" class="form-control" value="{{ $category->name }}" required>
                        <label>Category name</label>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Save</button>
                </form>
            </div>
        </div>
        <br>
    </div>
    
@endsection
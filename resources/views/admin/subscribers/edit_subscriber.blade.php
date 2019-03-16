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
                        <h2 class="page-title">Edit Subscriber</h2>
                        <p>edit subscriber here </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
            <i class="mr-2 fa fa-newspaper"></i>Enter the subscriber's email to edit the subscriber</h5>
        <div class="row">
            <div class="col-12 col-md-12">
                <form action="{{ route('subscribers.update',['id' => $subscriber->id])}}" method="post">
                    @csrf
                    <div class="form-group float-label">
                        <input name='email' value="{{$subscriber->email}} "type="email" class="form-control">
                        <label>Subscribers Email</label>
                    </div>
                    {{ Form::hidden('_method','PUT')}}

                    <button class="btn btn-primary" type="submit"><i class="fa fa-edit"></i> Edit Subscriber</button>
                </form>
            </div>
        </div>
        <br>
    </div>
@endsection
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
                        <h2 class="page-title">View Properties</h2>
                        <p>Available Properties </p>
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
                        <h5 class="card-title">Properties | <small>You have added the following Properties</small></h5>
                      </div>
                      <div class="card-body">
                        @if(count($properties) > 0)
                            <table class="table " id="dataTables-example">
                            <thead>
                                <tr>
                                <th>Title</th>
                                <th>Date added</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($properties as $property)
                                <tr class="odd">
                                <td>{{$property->title}}</td>
                                <td>{{date('F d, Y', strtotime($property->created_at))}}</td>
                                <td>
                                    <a href='/administrator/properties/{{$property->slug}}'>
                                        <button class="btn btn-success fa fa-eye">Show More</button>
                                    </a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @else
                            <p>There are no properties to display.</p>
                        @endif
                        <!-- /.table-responsive --> 
                      </div>
                    </div>
                  </div>

            </div>
    </div>
@endsection
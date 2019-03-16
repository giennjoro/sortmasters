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
                        <h2 class="page-title">View Jobs</h2>
                        <p>Available Jobs </p>
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
                        <h5 class="card-title">Jobs <small>You have added the following jobs</small></h5>
                      </div>
                      <div class="card-body">
                        @if(count($jobs) > 0)
                            <table class="table " id="dataTables-example">
                            <thead>
                                <tr>
                                <th>Title</th>
                                <th>created at</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($jobs as $job)
                                <tr class="odd">
                                <td>{{$job->title}}</td>
                                <td>{{date('F d, Y', strtotime($job->created_at))}}</td>
                                <td>
                                    <a href='/administrator/jobs/{{$job->id}}' ><button class="btn btn-success fa fa-eye">Show More</button></a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @else
                            <p>There are no jobs to display.</p>
                        @endif
                        <!-- /.table-responsive --> 
                      </div>
                    </div>
                  </div>

            </div>
    </div>
@endsection
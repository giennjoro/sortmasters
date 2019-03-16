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
                        <h2 class="page-title">View Applications</h2>
                        <p>Available Applications </p>
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
                        <h5 class="card-title">Applications <small>View All Applications</small></h5>
                      </div>
                      <div class="card-body">
                        @if(count($applications) > 0)
                            <table class="table " id="dataTables-example">
                            <thead>
                                <tr>
                                <th>Applicant Name</th>
                                <th>Job Applied</th>
                                <th>Id Number</th>
                                <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($applications as $application)
                                <tr class="odd">
                                <td>{{$application->user->name}}</td>
                                <td>{{$application->job}}</td>
                                <td>{{$application->id_no}}</td>
                                <td>
                                    <a href='/administrator/applications/{{$application->id}}' ><button class="btn btn-success fa fa-eye">Show More</button></a>
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @else
                            <p>There are no Applications to display.</p>
                        @endif
                        <!-- /.table-responsive --> 
                      </div>
                    </div>
                  </div>

            </div>
    </div>
@endsection
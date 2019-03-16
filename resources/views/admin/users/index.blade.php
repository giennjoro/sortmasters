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
                        <h2 class="page-title">View Admins</h2>
                        <p>Available Admins </p>
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
                        <h5 class="card-title">Admins <small>Administrator details</small></h5>
                      </div>
                      <div class="card-body">
                        @if(count($admins) > 0)
                            <table class="table " id="dataTables-example">
                            <thead>
                                <tr>
                                <th>Name </th>
                                <th>Email</th>
                                <th>View</th>
                                <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($admins as $admin)
                                <tr class="odd">
                                <td>{{$admin->name}}</td>
                                <td>{{ $admin->email }}</td>
                                <td>
                                    <a href='/administrator/users/{{$admin->slug}}' ><button class="btn btn-success fa fa-eye"> View</button></a>
                                </td>
                                <td>
                                    <!-- <form action="route('users.destroy', ['slug' => $admin->slug])" method="delete">

                                    </form> -->
                                    {!! Form::open(['action' => ['UsersController@destroy',$admin->slug], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()', 'id' => 'delete_user_form']) !!}
                                        {{ Form::hidden('_method' ,'DELETE')}}
                                        {{ Form::submit('Remove',['class'=>'btn btn-danger']) }}
                                    {!! Form::close() !!}
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @else
                            <p>There are no Admins to display.</p>
                        @endif
                        <!-- /.table-responsive -->
                      </div>
                    </div>
                  </div>

            </div>
    </div>
@endsection

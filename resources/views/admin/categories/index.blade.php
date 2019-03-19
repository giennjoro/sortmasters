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
                        <h2 class="page-title">View Categories</h2>
                        <p>Available Categories </p>
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
                        <h5 class="card-title">Categories | <small>You have added the following Categories</small></h5>
                      </div>
                      <div class="card-body">
                        @if(count($categories) > 0)
                            <table class="table " id="dataTables-example">
                            <thead>
                                <tr>
                                <th>Title</th>
                                <th>Edit</th>
                                <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                <tr class="odd">
                                <td>{{$category->name}}</td>
                                <td><a href="{{ route('categories.edit', ['slug' => $category->slug]) }}" class="btn success"><i class="fa fa-edit"></i> Edit</a></td>
                                <td>
                                    {!! Form::open(['action' => ['CategoriesController@destroy',$category->slug], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
                                        {{ Form::hidden('_method' ,'DELETE')}}
                                        {{ Form::submit('Remove',['class'=>'btn btn-danger btn-sm fa fa-trash']) }}
                                    {!! Form::close() !!}
                                </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        @else
                            <p>There are no categories to display.</p>
                        @endif
                        <!-- /.table-responsive --> 
                      </div>
                    </div>
                  </div>

            </div>
    </div>
@endsection
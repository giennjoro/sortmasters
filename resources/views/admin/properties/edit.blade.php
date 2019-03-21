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
                        <h2 class="page-title">Edit | {{ $property->title }}</h2>
                        <p>Fields with asterik (<span style="color: red">*</span>) are mandatory</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Begin page content -->
    <div class="container">
        <h5 class="f-light sub-title">
            <i class="mr-2 fa fa-newspaper"></i>Edit the property's details</h5>
        <div class="row">
            <div class="col-12 col-md-12">
                {!! Form::open(['action' => ['PropertiesController@update', 'slug' => $property->slug], 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
                    @csrf
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='title' type="text" class="form-control" value="{{ $property->title }}" required>
                        <label>Property Title</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='price' type="text" class="form-control" value="{{ $property->price }}" required>
                        <label>Price</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <input name='location' type="text" class="form-control" value="{{ $property->location }}" required>
                        <label>Location</label>
                    </div>
                    <div class="form-group float-label">
                        <span style="color: red">*</span>
                        <textarea name='description' type="text" class="form-control" rows="6" required>{{ $property->description }}</textarea> 
                        <label>Description</label>
                    </div>
                    <div class="form-group float-label">
                        <select name="status" id="" class="form-control" required>
                            <option value="{{ null }}"><span style="color: red">*</span>Select Status</option>
                            <option value="sale" @if($property->status == "sale") selected="selected" @endif>Sale</option>
                            <option value="rent" @if($property->status == "rent") selected="selected" @endif>Rent</option>
                        </select>
                    </div>
                    <div class="form-group float-label">
                        <select name="agent_id" class="form-control">
                            <option value= "{{ null }}">Select Agent</option>
                            @foreach($agents as $agent)
                                <option value="{{ $agent->id }}">{{ $agent->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group float-label">
                        <select name="category_id" class="form-control" required>
                            <option value="{{ null }}"><span style="color: red">*</span>Select Category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" @if($property->category_id == $category->id ) selected="selected" @endif>{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group increment">
                        <label>Add Property Images</label>
                        <input name='image[]' type="file" class="form-control">
                        <div class="input-group-btn"> 
                            <button class="btn btn-success" type="button"><i class="fa fa-plus"></i>Add Another Image</button>
                        </div>
                    </div>
                    <div class="form-group clone hide">
                        <div class="control-group input-group" style="margin-top:10px">
                            <input name='image[]' type="file" class="form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Edit property</button>
                </form>
            </div>
        </div>
        <br>
    </div>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script type="text/javascript">

        $(document).ready(function() {

        $(".btn-success").click(function(){ 
            var html = $(".clone").html();
            $(".increment").after(html);
        });

        $("body").on("click",".btn-danger",function(){ 
            $(this).parents(".control-group").remove();
        });

        });

    </script>
@endsection
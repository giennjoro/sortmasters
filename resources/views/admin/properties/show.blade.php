@extends('admin.layouts.app')
@section('style')
<link id="theme" rel="stylesheet" href="{{ asset('/admin/css/style-blue-header.css') }}" type="text/css">
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
    <!-- Begin page content -->
    <div class="container">
				
		<div class="row">
			<div class="col-12 col-md-12 col-lg-12  order-md-1">
				<div class="card rounded-0 border-0 mb-3">
					<div class="card-header">
						<div class="row">
							<div class="col-12">
								<h5 class="card-title">{{ $property->title }} Images
									<a href="/administrator/properties" class="small">View all properties</a>
								</h5>
							</div>
						</div>
					</div>
					<div class="card-body p-0 ">
						<div class="swipegallery" itemscope itemtype="http://schema.org/ImageGallery">
							<div style="display: none;">
								{{ $i = 0 }}
								{{ $len = count($images) }}
							</div>
							
							@foreach($images as $image)
								<figure itemprop="associatedMedia" itemscope >
									<a href="" itemprop="contentUrl" data-size="1060x640">
										<img src="{{ asset($image) }}" itemprop="thumbnail" alt="Image description" />
									</a>
									@if($i == 0)
										<a href="#" class="btn btn-primary btn-xs"><i class="fa fa-check-circle"></i>cover photo</a>
									@else
										<a href="{{ route('cover_photo', ['slug' => $property->slug, 'image' => $i]) }}" class="btn btn-primary btn-xs">Mark as cover photo</a>
									@endif
									<a href="{{ route('delete_photo', ['slug' => $property->slug, 'image' => $i]) }}"><i class="fa fa-trash" style="color:red;" onclick="return ConfirmDelete()"></i></a>
								</figure>
								<div style="display: none;">
									{{ $i++ }}
								</div>

							@endforeach
							
						</div>								
					</div>
				</div>
				<div class="card rounded-0 border-0 mb-3">
					<div class="card-header">
						<div class="row">
							<div class="col-12">
								<h5 class="card-title">
									<i class="icon fa fa-building text-primary mr-2"></i>
									Property Details
								</h5>
							</div>
						</div>
					</div>
					<div class="card-body ">
						<div class="list-unstyled userlist" style="padding: 5%">
							<div class="list-item py-0 ">
								<div class="row">
									<div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
										<span class="timeline-bubble bg-success"></span>
										<div class="media">
											<div class="media-body">
												<h5>Title:</h5>
												{{ $property->title}}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item py-0 ">
								<div class="row">
									<div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
										<span class="timeline-bubble bg-primary"></span>
										<div class="media">
											<div class="media-body">
												<h5>Category</h5>
												{{ $property->category->name }}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item py-0 ">
								<div class="row">
									<div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
										<span class="timeline-bubble bg-warning"></span>
										<div class="media">
											<div class="media-body">
												<h5>Location</h5>
												{{ $property->location }}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item py-0 ">
								<div class="row">
									<div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
										<span class="timeline-bubble bg-success"></span>
										<div class="media">
											<div class="media-body">
												<h5>Price:</h5>
												{{ $property->price }}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item py-0 ">
								<div class="row">
									<div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
										<span class="timeline-bubble bg-primary"></span>
										<div class="media">
											<div class="media-body">
												<h5>Status:</h5>
												{{ $property->status }}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item py-0 ">
								<div class="row">
									<div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
										<span class="timeline-bubble bg-warning"></span>
										<div class="media">
											<div class="media-body">
												<h5>Agent:</h5>
												{{ $property->agent }}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="list-item py-0 ">
								<div class="row">
									<div class="col-9 border-left pb-4 col-12 col-xl-12 col-sm-12  col-md-12 col-lg-12">
										<span class="timeline-bubble bg-info"></span>
										<div class="media">
											<div class="media-body">
												<h5>Description:</h5>
												{{ $property->description }}
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-4" style="margin: 3%;">
									<a href='/administrator/properties/{{$property->slug}}/edit' ><button class="btn btn-success fa fa-edit"> Edit</button></a>
								</div>
								<div class="col-xs-2">

								</div>
								<div class="col-xs-4" style="margin: 3%;">
								{!! Form::open(['action' => ['PropertiesController@destroy',$property->slug], 'method' => 'POST', 'onsubmit' => 'return ConfirmDelete()']) !!}
									{{ Form::hidden('_method' ,'DELETE')}}
									{{ Form::submit('Remove',['class'=>'btn btn-danger fa fa-trash']) }}
								{!! Form::close() !!}
								</div>
							</div>
						</div>
					</div>
					<br>
					<br>
				</div>
			</div>
		</div>
	</div>
@endsection
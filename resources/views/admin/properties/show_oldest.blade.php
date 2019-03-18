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
	<div class="main-container">
			<!-- Begin page content -->
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-12 col-lg-12  order-md-1">
						<div class="card rounded-0 border-0 mb-3">
							<div class="card-header">
								<div class="row">
									<div class="col-12">
										<h5 class="card-title">Awards(502)
											<a href="#" class="small">View all</a>
										</h5>
									</div>
								</div>
							</div>
							<div class="card-body p-0 ">
								<div class="swipegallery" itemscope itemtype="http://schema.org/ImageGallery">
								@foreach($images as $image)
									 <figure itemprop="associatedMedia" itemscope >
                                        <a href="{{ asset($image) }}" itemprop="contentUrl" data-size="960x640">
                                            <img src="{{ asset($image) }}" itemprop="thumbnail" alt="Image description" />
                                        </a>
                                    </figure>
								@endforeach
                                   

                                    <figure itemprop="associatedMedia" itemscope >
                                        <a href="../assets/img/designnomineesblog.png" itemprop="contentUrl" data-size="960x640">
                                            <img src="http://localhost:8000/uploads/properties/1552936178gallery-img4.jpg" itemprop="thumbnail" alt="Image description" />
                                        </a>
                                    </figure>

                                    <figure itemprop="associatedMedia" itemscope >
                                        <a href="../assets/img/webguru.png" itemprop="contentUrl" data-size="960x640">
                                            <img src="http://localhost:8000/admin/images/Official_passport.jpg" itemprop="thumbnail" alt="Image description" />
                                        </a>
                                    </figure>
									
									<figure itemprop="associatedMedia" itemscope >
                                        <a href="../assets/img/webguru.png" itemprop="contentUrl" data-size="960x640">
                                            <img src="http://localhost:8000/admin/images/property-img1.jpg" itemprop="thumbnail" alt="Image description" />
                                        </a>
                                    </figure>
                                  </div>								
							</div>
						</div>
						<div class="card rounded-0 border-0 mb-3">
							<div class="card-header">
								<div class="row">
									<div class="col-12">
										<h5 class="card-title">
											<i class="icon fa fa-briefcase text-primary mr-2"></i>Experience</h5>
									</div>
								</div>
							</div>
							<div class="card-body px-0">
								<div class="list-unstyled userlist">
									<div class="list-item py-0">
										<div class="row">
											<div class="col-3 col-lg-2 col-xl-2 pb-4">
												<div class="media">
													<div class="media-body">
														<img src="../assets/img/micro.png" alt="" class="mw-100">
													</div>
												</div>
											</div>
											<div class="col-9 border-left pb-4">
												<span class="timeline-bubble bg-success"></span>
												<div class="media">
													<div class="media-body">
														<h5>UX Designer - Microsoft</h5>
														<p>2011 - Present</p>
														This icons are just for presentation of UI. Bootstrap template design is HTML template based on Bootstrap 4.1 framework.
														This html template can be used in various business domains like Manufacturing, inventory, IT, administration
														etc.
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="list-item py-0">
										<div class="row">
											<div class="col-3 col-lg-2 col-xl-2 pb-4">
												<div class="media">
													<div class="media-body">
														<img src="../assets/img/app.png" alt="" class="mw-100">
													</div>
												</div>
											</div>
											<div class="col-9 border-left pb-4">
												<span class="timeline-bubble bg-primary"></span>
												<div class="media">
													<div class="media-body">
														<h5>UX Designer - Apple</h5>
														<p>2010 - 2011</p>
														This icons are just for presentation of UI. Bootstrap template design is HTML template based on Bootstrap 4.1 framework.
														This html template can be used in various business domains like Manufacturing, inventory, IT, administration
														etc.
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="list-item py-0">
										<div class="row">
											<div class="col-3 col-lg-2 col-xl-2 pb-4">
												<div class="media">
													<div class="media-body">
														<img src="../assets/img/sam.png" alt="" class="mw-100">
													</div>
												</div>
											</div>
											<div class="col-9 border-left pb-4">
												<span class="timeline-bubble bg-warning"></span>
												<div class="media">
													<div class="media-body">
														<h5>UI Desiner - Samsung</h5>
														<p>2005 - 2010</p>
														This icons are just for presentation of UI. Bootstrap template design is HTML template based on Bootstrap 4.1 framework.
														This html template can be used in various business domains like Manufacturing, inventory, IT, administration
														etc.
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="list-item py-0">
										<div class="row">
											<div class="col-3 col-lg-2 col-xl-2 pb-4">

											</div>
											<div class="col-9 border-left pb-4">
												<span class="timeline-bubble bg-danger"></span>
												<div class="media">
													<div class="media-body">
														<h5>Jr. UI Designer Alladin ka chirag</h5>
														<p>2000 - 2005</p>
														Bootstrap template design is HTML template based on Bootstrap 4.1 framework. This html template can be used in various business
														domains like Manufacturing, inventory, IT, administration etc.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
	</div>
@endsection
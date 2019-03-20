@extends('client.layouts.client_app')
@section('content')
   <!-- Sub banner start -->
<div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Properties Grid</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li class="active">View All Properties</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    
    <!-- Properties section body start -->
    <div class="properties-section-body content-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="row">
                        @foreach($properties as $property)
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="property-box">
                                    <div class="property-thumbnail">
                                        <a href="/show_property" class="property-img">
                                            <div class="tag">@if($property->status == "rent")rent @elseif($property->status == "sale")sale @endif</div>
                                            <div class="price-box"><span>Ksh {{ $property->price }} </span>@if($property->status == "rent")monthly @endif</div>
                                            <img class="d-block w-100" src="{{ asset(json_decode($property->image)[0]) }}" alt="properties">
                                        </a>
                                    </div>
                                    <div class="detail">
                                        <h1 class="title">
                                            <a href="/show-property">{{ $property->title }}</a>
                                        </h1>
                                        <div class="location">
                                            <a href="properties-details.html">
                                                {{ $property->description }} .
                                            </a>
                                        </div> 
                                        <ul class="facilities-list clearfix">
                                            <li>
                                                <i class="lnr lnr-apartment"></i> {{ $property->status }}
                                            </li>
                                            <li>
                                                <i class="flaticon-pin"></i> {{ $property->location }}
                                            </li>
                                        </ul>
                                        <a href="{{ route('show_property', ['property' => $property->slug]) }}"><button class="btn btn-danger fa fa-eye"> More Info</button></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Page navigation start -->
                    <div class="pagination-box p-box-2 text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-right">
                        <!-- Advanced search start -->
                        <div class="widget advanced-search">
                            <h3 class="sidebar-title">Search Properties</h3>
                            <form method="GET">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="all-status">
                                        <option>All Status</option>
                                        <option>For Sale</option>
                                        <option>For Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="all-type">
                                        <option>All Type</option>
                                        <option>Apartments</option>
                                        <option>Shop</option>
                                        <option>Restaurant</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="commercial">
                                        <option>Commercial</option>
                                        <option>Residential</option>
                                        <option>Land</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>Location</option>
                                        <option>American</option>
                                        <option>Florida</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                    </select>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="bedrooms">
                                                <option>Bedrooms</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="form-group">
                                            <select class="selectpicker search-fields" name="bathroom">
                                                <option>Bathroom</option>
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="range-slider">
                                    <label>Price</label>
                                    <div data-min="0" data-max="150000"  data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="search-button">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Properties section body end -->
    
    <!-- Intro section start -->
    <div class="intro-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-12">
                    <div class="intro-text">
                        <h3>Do You Have Questions ?</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <a href="/contact" class="btn btn-md">Get in Touch</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Intro section end -->
@endsection
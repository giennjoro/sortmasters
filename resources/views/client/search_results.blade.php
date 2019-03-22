@extends('client.layouts.client_app')
@section('content')
   <!-- Sub banner start -->
<div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Search results for <br> <span class="small">{!! $message !!}</span></h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li class="active"><a href="/properties">View all properties</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    
    <!-- Properties section body start -->
    <div class="properties-section-body content-area">
        <div class="container">
            <div class="row">
                @if($properties->count() == 0)
                    <div class="col-lg-8 col-md-12 text-center">
                        <p>There are no results found. <br><a href="/properties">View all properties</a> </p>
                    </div>
                @else
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            @foreach($properties as $property)
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="property-box">
                                        <div class="property-thumbnail">
                                            <a href="/show_property{{ $property->slug }}" class="property-img">
                                                <div class="tag">@if($property->status == "rent")rent @elseif($property->status == "sale")sale @endif</div>
                                                <div class="price-box"><span>Ksh {{ $property->price }} </span>@if($property->status == "rent")monthly @endif</div>
                                                <img class="d-block w-100" src="{{ asset(json_decode($property->image)[0]) }}" alt="properties">
                                            </a>
                                        </div>
                                        <div class="detail">
                                            <h1 class="title">
                                                <a href="{{ route('show_property', ['slug' => $property->slug]) }}">{{ $property->title }}</a>
                                            </h1>
                                            <div class="location">
                                                <a href="properties-details.html">
                                                    {{ $property->description }} .
                                                </a>
                                            </div> 
                                            <ul class="facilities-list clearfix">
                                                <li>
                                                    <i class="lnr lnr-apartment"></i> {{ $property->category->name }}
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
                        {{ $properties->links() }}
                    </div>
                @endif
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-right">
                        <!-- Advanced search start -->
                        <div class="widget advanced-search">
                            <h3 class="sidebar-title">Search Properties</h3>
                            <form action="/search_property" method="POST">
                                @csrf
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="status">
                                        <option value="{{ null }}">All Status</option>
                                        <option value="sale">For Sale</option>
                                        <option value="rent">For Rent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="category">
                                        <option value="{{ null }}">All categories</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Location" name="location">
                                </div>
                                <div class="range-slider">
                                    <label>Price</label>
                                    <div data-min="0" data-max="5000000"  data-min-name="min_price" data-max-name="max_price" data-unit="Ksh" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                    <div class="cleafrfix"></div>
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
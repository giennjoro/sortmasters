@extends('client.layouts.client_app')
@section('content')
   <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Property Details</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li class="active">Property Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    
    <!-- Properties details page start -->
    <div class="properties-details-page content-area-6">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="properties-details-section">
                        <div id="propertiesDetailsSlider" class="carousel properties-details-sliders slide mb-40">
                            <!-- main slider carousel items -->
                            <div class="carousel-inner">
                                <div style="display: none">
                                    {{ $n = 0 }}
                                </div>
                                @foreach($images as $image)
                                    @if($n == 0)
                                        <div class="active item carousel-item" data-slide-number="{{$n}}">
                                            <img src="{{ asset($image) }}" class="img-fluid" alt="slider-properties">
                                        </div>
                                    @else
                                        <div class="item carousel-item" data-slide-number="{{$n}}">
                                            <img src="{{ asset($image) }}" class="img-fluid" alt="slider-properties">
                                        </div>
                                    @endif
                                    <div style="display: none">
                                        {{ $n++  }}
                                    </div>
                                @endforeach
                            </div>
                            <!-- main slider carousel nav controls -->
                            <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                                <div style="display: none">
                                    {{ $n = 0 }}
                                </div>
                                @foreach($images as $image)
                                    @if($n == 0)
                                        <li class="list-inline-item active">
                                            <a id="carousel-selector-{{$n}}" class="selected" data-slide-to="{{$n}}" data-target="#propertiesDetailsSlider">
                                                <img src="{{ asset($image) }}" class="img-fluid" alt="properties-small">
                                            </a>
                                        </li>
                                    @else
                                        <li class="list-inline-item">
                                            <a id="carousel-selector-{{$n}}" data-slide-to="{{$n}}" data-target="#propertiesDetailsSlider">
                                                <img src="{{ asset($image) }}" class="img-fluid" alt="properties-small">
                                            </a>
                                        </li>
                                    @endif
                                    <div style="display: none">
                                        {{ $n++  }}
                                    </div>
                                @endforeach
                                <!-- <li class="list-inline-item">
                                    <a id="carousel-selector-1" data-slide-to="1" data-target="#propertiesDetailsSlider">
                                        <img src="{{ asset('client/img/properties/properties-2.jpg') }}" class="img-fluid" alt="properties-small">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-2" data-slide-to="2" data-target="#propertiesDetailsSlider">
                                        <img src="{{ asset('client/img/properties/properties-3.jpg') }}" class="img-fluid" alt="properties-small">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-3" data-slide-to="3" data-target="#propertiesDetailsSlider">
                                        <img src="{{ asset('client/img/properties/properties-4.jpg') }}" class="img-fluid" alt="properties-small">
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a id="carousel-selector-4" data-slide-to="4" data-target="#propertiesDetailsSlider">
                                        <img src="{{ asset('client/img/properties/properties-5.jpg') }}" class="img-fluid" alt="properties-small">
                                    </a>
                                </li> -->
                            </ul>
                            <div class="heading-properties-2">
                                <h3>{{ $property->title }}</h3>
                                <div class="price-location"><span class="property-price">Ksh {{ $property->price }}</span> <span class="rent">{{ $property->status }}</span> <span class="location"><i class="flaticon-pin"></i> {{ $property->location }}</span></div>
                            </div>
                        </div>
                        @if($property->agent()->count() != 0)
                            <div class="widget recent-properties">
                                <h3 class="sidebar-title">Property Agent</h3>
                                <div class="media mb-4">
                                    <a class="pr-3" href="properties-details.html">
                                        <img class="media-object" src="{{ asset($property->agent->image) }}" alt="agent">
                                    </a>
                                    <div class="media-body align-self-center">
                                        <h5>
                                            <a href="properties-grid-rightside.html">{{ $property->agent->name }}</a>
                                        </h5>
                                        <div class="listing-post-meta">
                                            <p><i class="fa fa-phone"></i> {{ $property->agent->phone }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <!-- Tabbing box start -->
                        <div class="tabbing tabbing-box mb-40">
                            <ul class="nav nav-tabs" id="carTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="one" aria-selected="false">Description</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="carTabContent">
                                <div class="tab-pane fade active show" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <div class="properties-description mb-50">
                                        <p>{{ $property->description }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-right">
                        <!-- Advanced search start -->
                        <div class="widget advanced-search">
                                <h3 class="sidebar-title">Search Properties</h3>
                                <form method="GET">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="status">
                                            <option>All Status</option>
                                            <option>For Sale</option>
                                            <option>For Rent</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="category">
                                            <option>Category</option>
                                            <option>Apartments</option>
                                            <option>Shop</option>
                                            <option>Restaurant</option>
                                            <option>Villa</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="  Location" name="location">
                                    </div>
                                    <div class="range-slider">
                                        <label>Price</label>
                                        <div data-min="0" data-max="5000000"  data-min-name="min_price" data-max-name="max_price" data-unit="Kes" class="range-slider-ui ui-slider" aria-disabled="false"></div>
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
    <!-- Properties details page end -->
    
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
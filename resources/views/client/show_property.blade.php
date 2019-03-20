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
                                <div class="active item carousel-item" data-slide-number="0">
                                    <img src="{{ asset('client/img/properties/properties-1.jpg') }}" class="img-fluid" alt="slider-properties">
                                </div>
                                <div class="item carousel-item" data-slide-number="1">
                                    <img src="{{ asset('client/img/properties/properties-2.jpg') }}" class="img-fluid" alt="slider-properties">
                                </div>
                                <div class="item carousel-item" data-slide-number="2">
                                    <img src="{{ asset('client/img/properties/properties-3.jpg') }}" class="img-fluid" alt="slider-properties">
                                </div>
                                <div class="item carousel-item" data-slide-number="4">
                                    <img src="{{ asset('client/img/properties/properties-4.jpg') }}" class="img-fluid" alt="slider-properties">
                                </div>
                                <div class="item carousel-item" data-slide-number="5">
                                    <img src="{{ asset('client/img/properties/properties-5.jpg') }}" class="img-fluid" alt="slider-properties">
                                </div>
                            </div>
                            <!-- main slider carousel nav controls -->
                            <ul class="carousel-indicators smail-properties list-inline nav nav-justified">
                                <li class="list-inline-item active">
                                    <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#propertiesDetailsSlider">
                                        <img src="{{ asset('client/img/properties/properties-1.jpg') }}" class="img-fluid" alt="properties-small">
                                    </a>
                                </li>
                                <li class="list-inline-item">
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
                                </li>
                            </ul>
                            <div class="heading-properties-2">
                                <h3>Relaxing Apartment</h3>
                                <div class="price-location"><span class="property-price">$35,0000</span> <span class="rent">status</span> <span class="location"><i class="flaticon-pin"></i> Location Here</span></div>
                            </div>
                        </div>
                        <!-- Advanced search start -->
                        <div class="widget-2 advanced-search bg-grea-2 d-lg-none d-xl-none">
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
                                <a class="show-more-options" data-toggle="collapse" data-target="#options-content2">
                                    <i class="fa fa-plus-circle"></i> Other Features
                                </a>
                                <div id="options-content2" class="collapse">
                                    <h3 class="sidebar-title">Amenities</h3>
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox9" type="checkbox">
                                        <label for="checkbox9">
                                            Air Condition
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox10" type="checkbox">
                                        <label for="checkbox10">
                                            Places to seat
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox11" type="checkbox">
                                        <label for="checkbox11">
                                            Swimming Pool
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox12" type="checkbox">
                                        <label for="checkbox12">
                                            Free Parking
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox13" type="checkbox">
                                        <label for="checkbox13">
                                            Central Heating
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox14" type="checkbox">
                                        <label for="checkbox14">
                                            Laundry Room
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox15" type="checkbox">
                                        <label for="checkbox15">
                                            Window Covering
                                        </label>
                                    </div>
                                    <div class="checkbox checkbox-theme checkbox-circle">
                                        <input id="checkbox16" type="checkbox">
                                        <label for="checkbox16">
                                            Alarm
                                        </label>
                                    </div>
                                    <br>
                                </div>
                                <div class="form-group mb-0">
                                    <button class="search-button">Search</button>
                                </div>
                            </form>
                        </div>
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
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.</p>
                                        <p>Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus.
    
                                            Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="sidebar-right">
                        <!-- Advanced search start -->
                        <div class="widget advanced-search d-none d-xl-block d-lg-block">
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
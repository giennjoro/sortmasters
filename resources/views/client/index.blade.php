@extends('client.layouts.client_app')
@section('content')
    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner banner-slider-inner text-center">
                <div class="carousel-item banner-max-height active">
                    <img class="d-block w-100 h-100" src="{{ asset('client/img/banner/banner-1.jpg') }}" alt="banner">
                </div>
                <div class="carousel-item banner-max-height">
                    <img class="d-block w-100 h-100" src="{{ asset('client/img/banner/banner-1.jpg') }}" alt="banner">
                </div>
                <div class="carousel-item banner-max-height">
                    <img class="d-block w-100 h-100" src="{{ asset('client/img/banner/banner-1.jpg') }}" alt="banner">
                </div>
                <div class="carousel-content container banner-info-2">
                    <h1 style="color:rgb(72, 45, 122);">Service You Deserve, People You Trust</h1>
                    <p>Real Estate Managers, Property Consultants & Valuers</p>
                </div>
            </div>
            <a class="carousel-control-prev none-580" href="#bannerCarousole" role="button" data-slide="prev">
                <span class="slider-mover-left" aria-hidden="true">
                    <i class="fa fa-angle-left"></i>
                </span>
            </a>
            <a class="carousel-control-next none-580" href="#bannerCarousole" role="button" data-slide="next">
                <span class="slider-mover-right" aria-hidden="true">
                    <i class="fa fa-angle-right"></i>
                </span>
            </a>
        </div>
    </div>
    <!-- Banner end -->

    <!-- Search box 2 start -->
    <div class="search-box-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inline-search-area">
                        <div class="row row-3">
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 search-col">
                                <select class="selectpicker search-fields" name="any-status">
                                    <option>Any Status</option>
                                    <option>For Rent</option>
                                    <option>For Sale</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 search-col">
                                <select class="selectpicker search-fields" name="all-type">
                                    <option>All Type</option>
                                    <option>Apartments</option>
                                    <option>Shop</option>
                                    <option>Restaurant</option>
                                    <option>Villa</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 search-col">
                                <select class="selectpicker search-fields" name="bedrooms">
                                    <option>Bedrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 search-col">
                                <select class="selectpicker search-fields" name="bathrooms">
                                    <option>Bathrooms</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 search-col">
                                <select class="selectpicker search-fields" name="location">
                                    <option>Location</option>
                                    <option>American</option>
                                    <option>Florida</option>
                                    <option>Belgium</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-xs-12 search-col">
                                <button class="btn white-btn btn-search btn-block">
                                    <i class="fa fa-search"></i><strong>Find</strong>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Search box 2 end -->

    <!-- Featured Properties start -->
    <div class="featured-properties content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1 style="color:rgb(240, 52, 51);">Most Recent Properties</h1>
                <p>Check out what was added recently. Get yourself an offer</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="/show_property" class="property-img">
                                <div class="tag">rent</div>
                                <div class="price-box"><span>$850.00</span>month</div>
                                <img class="d-block w-100" src="{{ asset('client/img/properties/properties-1.jpg') }}" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="/show-property">Relaxing Apartment</a>
                            </h1>
                            {{-- <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i> location here,
                                </a>
                            </div> --}}
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="lnr lnr-apartment"></i> Status
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i> Location
                                </li>
                            </ul>
                            <button class="btn btn-danger fa fa-eye"> More Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="/show_property" class="property-img">
                                <div class="tag">rent</div>
                                <div class="price-box"><span>$850.00</span>month</div>
                                <img class="d-block w-100" src="{{ asset('client/img/properties/properties-1.jpg') }}" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="/show-property">Relaxing Apartment</a>
                            </h1>
                            {{-- <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i> location here,
                                </a>
                            </div> --}}
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="lnr lnr-apartment"></i> Status
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i> Location
                                </li>
                            </ul>
                            <button class="btn btn-danger fa fa-eye"> More Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="/show_property" class="property-img">
                                <div class="tag">rent</div>
                                <div class="price-box"><span>$850.00</span>month</div>
                                <img class="d-block w-100" src="{{ asset('client/img/properties/properties-1.jpg') }}" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="/show-property">Relaxing Apartment</a>
                            </h1>
                            {{-- <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i> location here,
                                </a>
                            </div> --}}
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="lnr lnr-apartment"></i> Status
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i> Location
                                </li>
                            </ul>
                            <button class="btn btn-danger fa fa-eye"> More Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="/show_property" class="property-img">
                                <div class="tag">rent</div>
                                <div class="price-box"><span>$850.00</span>month</div>
                                <img class="d-block w-100" src="{{ asset('client/img/properties/properties-1.jpg') }}" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="/show-property">Relaxing Apartment</a>
                            </h1>
                            {{-- <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i> location here,
                                </a>
                            </div> --}}
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="lnr lnr-apartment"></i> Status
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i> Location
                                </li>
                            </ul>
                            <button class="btn btn-danger fa fa-eye"> More Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="/show_property" class="property-img">
                                <div class="tag">rent</div>
                                <div class="price-box"><span>$850.00</span>month</div>
                                <img class="d-block w-100" src="{{ asset('client/img/properties/properties-1.jpg') }}" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="/show-property">Relaxing Apartment</a>
                            </h1>
                            {{-- <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i> location here,
                                </a>
                            </div> --}}
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="lnr lnr-apartment"></i> Status
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i> Location
                                </li>
                            </ul>
                            <button class="btn btn-danger fa fa-eye"> More Info</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="property-box">
                        <div class="property-thumbnail">
                            <a href="/show_property" class="property-img">
                                <div class="tag">rent</div>
                                <div class="price-box"><span>$850.00</span>month</div>
                                <img class="d-block w-100" src="{{ asset('client/img/properties/properties-1.jpg') }}" alt="properties">
                            </a>
                        </div>
                        <div class="detail">
                            <h1 class="title">
                                <a href="/show-property">Relaxing Apartment</a>
                            </h1>
                            {{-- <div class="location">
                                <a href="properties-details.html">
                                    <i class="flaticon-pin"></i> location here,
                                </a>
                            </div> --}}
                            <ul class="facilities-list clearfix">
                                <li>
                                    <i class="lnr lnr-apartment"></i> Status
                                </li>
                                <li>
                                    <i class="flaticon-pin"></i> Location
                                </li>
                            </ul>
                            <button class="btn btn-danger fa fa-eye"> More Info</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured Properties end -->

    <!-- advantages start -->
    <div class="advantages content-area-10">
        <div class="container">
            <!-- Main title -->
            <div class="main-title-2 text-center">
                <h1 style="color:rgb(240, 52, 51);">Why Choose Sortmasters?</h1>
                <p>Our Advantages</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="advantages-box">
                        <div class="icon">
                            <i class="lnr lnr-briefcase"></i>
                        </div>
                        <div class="detail">
                            <h5>Bill</h5>
                            <p>The company encourages tenants to open personal accounts for utility services and make payments thereof. However, we take responsibility to ensure prompt payments of bills. This helps the tenants not to avoid vacating of remises with unpaid up bills.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="advantages-box">
                        <div class="icon">
                            <i class="lnr lnr-lock"></i>
                        </div>
                        <div class="detail">
                            <h5>Cleaning and Security</h5>
                            <p>Our staff plays a key supervisory to the staff engaged in cleaning and security of our premises. We encourage our landlords to allow payments for these services to the office after which we pay the staff. This provides a channel for keeping abreast of the activities of the staff in the premises and helps detecting any malpractice.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="advantages-box">
                        <div class="icon">
                            <i class="lnr lnr-apartment"></i>
                        </div>
                        <div class="detail">
                            <h5>Professional real estate service</h5>
                            <p>The firm offers a wide scope of real estate services more so specializing in rental, management and sale of up-market residential properties and a variety of commercial properties initially in Nairobi, Thika, Nakuru and Meru.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="advantages-box">
                        <div class="icon">
                            <i class="lnr lnr-magic-wand"></i>
                        </div>
                        <div class="detail">
                            <h5>Our Commitment to satisfaction</h5>
                            <p>All the above services are provided with the highest level of professionalism, efficiency and integrity following the laid down legal procedures. We make sure the services are delivered on time. Depending on the agreement, we arrange for the conveyance of the above and related services. We are committed to providing professional services to all our valued customers. This includes regular release of account updates.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- advantages end -->

    <!-- Our events -->
    <div class="our-team content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1 style="color:rgb(240, 52, 51);">Our Events</h1>
                <p>Sortmasters Upcoming Events</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <table class="table table-bordered mb-0">
                        <thead class="bg-active">
                        <tr>
                            <th scope="col">Event name</th>
                            <th scope="col">Date</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Test name</td>
                            <td>Test Date</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Our events end -->

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
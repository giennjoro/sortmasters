@extends('client.layouts.client_app')
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>About Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    
    <!-- About city estate start -->
    <div class="about-real-estate  content-area-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-slider-box simple-slider">
                        <img class="d-block w-100" src="{{ asset('client/img/about.jpg') }}" alt="about">
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Who are we?</h3>
                        <p>Sortmasters Investments Ltd is a Kenyan Real Estate company duly incorporated under the Companies act cap 486, dedicated to offering honest and knowledgeable services in Real Estate Business.</p>
                        <p class="mb-0">Sortmasters Investments Ltd is a Kenyan born that has been operating for 20(years).  We are driven to unblocking the huge untapped potential within this developing market.  Our ambitions intend to conquer not just the Kenyan Market; we aim to confidently grow and succeed internationally too.</p>
                    </div><br>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 style="color:rgb(240, 52, 51);" class="heading-2">Our Mission & Vision</h3>
                    <div id="faq" class="faq-accordion">
                        <div class="card m-b-0">
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse7">
                                    Our Mission
                                </a>
                            </div>
                            <div id="collapse7" class="card-block collapse">
                                <div class="foq-info">
                                    <p>Our mission is to ensure a sound and vibrant property market through the provision of fast and professional services in the following fields:</p>
                                    <hr>
                                    <span>
                                        <ul>
                                            <li><i class="lnr lnr-chevron-right-circle"></i> Property Management</li>
                                            <li><i class="lnr lnr-chevron-right-circle"></i> Estate Agency</li>
                                            <li><i class="lnr lnr-chevron-right-circle"></i> Letting and Leasing</li>
                                            <li><i class="lnr lnr-chevron-right-circle"></i> Property Valuations</li>
                                            <li><i class="lnr lnr-chevron-right-circle"></i> Feasibility studies for property development</li>
                                            <li><i class="lnr lnr-chevron-right-circle"></i> Physical Planning</li>
                                            <li><i class="lnr lnr-chevron-right-circle"></i> Developers</li>
                                            <li><i class="lnr lnr-chevron-right-circle"></i> Consultancy in all the above</li>
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse8">
                                    Our Vision
                                </a>
                            </div>
                            <div id="collapse8" class="card-block collapse">
                                <div class="foq-info">
                                    <p>Our vision is to manage the economic resources available to us in the most efficient way possible, to adopt the most efficient tools readily available in the market to facilitate prompt and satisfactory results in our services to you and nourish the idea of acceleration, advancement and enhancing the virtues of a real estate world market by excellence.</p>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">professional Real Estate Services</h3>
                        <p>The firm offers a wide scope of real estate services more so specializing in rental, management and sale of up-market residential properties and a variety of commercial properties initially in Nairobi, Thika, Nakuru and Meru.</p>
                        <p class="mb-0">Our experience and knowledge in both residential and commercial property markets in Kenya and particularly in Nairobi is drawn from the personnel’s wide span of experience in the real estate industry, which has been demonstrated very well for over twenty years. Our young and highly motivated graduate multi- disciplined and professional staffs are actively involved in purchasing, development, valuation letting, management and valuation of both residential and commercial properties.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Our Portfolio</h3>
                        <p>Our portfolio covers both residential and commercial establishments across the social economic divide. Our company is among the few with highly computerized systems that enables to provide quick retrieval of information on all payments and records: scanned materials for valuation; professional reports among other details, officers provide all the necessary supervision so as to ensure use of quality material and good workmanship.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Rent Collection</h3>
                        <p>We ensure timely collection of rent payments by the accounts office and property officers and thereafter prepare our clients less the monthly expenditure (if any) and the agreed upon management commission.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Cleaning/Security</h3>
                        <p>Our staff plays a key supervisory to the staff engaged in cleaning and security of our premises. We encourage our landlords to allow payments for these services to the office after which we pay the staff. This provides a channel for keeping abreast of the activities of the staff in the premises and helps detecting any malpractice.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Physical Planning</h3>
                        <p>We prepare development proposal and requisite plans for our clients. These include subdivision plan, Extension of user and general advice and physical planning.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Our Commitment to satisfaction</h3>
                        <p>All the above services are provided with the highest level of professionalism, efficiency and integrity following the laid down legal procedures. We make sure the services are delivered on time. Depending on the agreement, we arrange for the conveyance of the above and related services. We are committed to providing professional services to all our valued customers. This includes regular release of account updates.</p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Estate Agency</h3>
                        <p>Letting and Leasing.
                        We normally undertake letting/leasing assignments for both new and old developments. At the same time we also render consultancy services.
                        </p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Selling and Purchasing</h3>
                        <p>The company usually takes instructions from clients to sell their properties on their behalf and also source quality properties on their behalf.
                        </p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Reports/Property Account Statements</h3>
                        <p>Our accounts and computer office will undertake to give monthly reports on property maintained and repair, tenancy level, credits and debits brought forward, arrears among other issue. Details of the name and location of property, period for which the payments were done, date and receipt numbers are reflected in the monthly statements.
                        </p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Receipting</h3>
                        <p>All payments paid to us are promptly and appropriately receipted (by computer) with the original receipt given to the tenant. Details in the receipts including date of payment, receipt number and period for which the payments is made are contained in the property statements.
                        </p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Bills</h3>
                        <p>The company encourages tenants to open personal accounts for utility services and make payments thereof. However, we take responsibility to ensure prompt payments of bills. This helps the tenants not to avoid vacating of remises with unpaid up bills.
                        </p>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-text">
                        <h3 style="color:rgb(240, 52, 51);">Maintenance</h3>
                        <p>We propose that the contractor either recommended by our clients or our company should undertake maintenance. However, the company officers provide all the necessary supervision so as to ensure use of quality material and good workmanship.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About city estate end -->

    @if(count($agents) > 0)
    <!-- Our team start -->
    <div class="our-team content-area">
        <div class="container">
            <!-- Main title -->
            <div class="main-title">
                <h1 style="color:rgb(240, 52, 51);">Our Management Team</h1>
                <p>Sortmasters Management</p>
            </div>
            <div class="row">
                @foreach ($agents as $agent)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="team-1">
                            <div class="team-photo">
                            <a target="_blank" href="{{asset($agent->image)}}">
                                    <img src="{{ asset($agent->image)}}" alt="agent" class="img-fluid">
                                </a>
                            </div>
                            <div class="team-details">
                                <h5><a href="agent-detail.html">{{$agent->name}}</a></h5>
                                <h6> {{$agent->phone}}</h6>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- Our team end -->
    @endif

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
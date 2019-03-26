@extends('client.layouts.client_app')
@section('content')
    <!-- Sub banner start -->
    <div class="sub-banner">
        <div class="container breadcrumb-area">
            <div class="breadcrumb-areas">
                <h1>Our Services</h1>
                <ul class="breadcrumbs">
                    <li><a href="/">Home</a></li>
                    <li class="active">Our Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    
    <!-- About city estate start -->
    <div class="about-real-estate  content-area-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h3 style="color:rgb(240, 52, 51);" class="heading-2">What Do We Offer?</h3>
                    <div id="faq" class="faq-accordion">
                        <div class="card m-b-0">
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse7">
                                    Rent Collection
                                </a>
                            </div>
                            <div id="collapse7" class="card-block collapse">
                                <div class="foq-info">
                                    <p>We ensure timely collection of rent payments by the accounts office and property officers and thereafter prepare our clients less the monthly expenditure (if any) and the agreed upon management commission.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse8">
                                    Cleaning/Security
                                </a>
                            </div>
                            <div id="collapse8" class="card-block collapse">
                                <div class="foq-info">
                                    <p>Our staff plays a key supervisory to the staff engaged in cleaning and security of our premises. We encourage our landlords to allow payments for these services to the office after which we pay the staff. This provides a channel for keeping abreast of the activities of the staff in the premises and helps detecting any malpractice.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse9">
                                    Physical Planning
                                </a>
                            </div>
                            <div id="collapse9" class="card-block collapse">
                                <div class="foq-info">
                                    <p>We prepare development proposal and requisite plans for our clients. These include subdivision plan, Extension of user and general advice and physical planning.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse1">
                                    Our Commitment to satisfaction
                                </a>
                            </div>
                            <div id="collapse1" class="card-block collapse">
                                <div class="foq-info">
                                    <p>All the above services are provided with the highest level of professionalism, efficiency and integrity following the laid down legal procedures. We make sure the services are delivered on time. Depending on the agreement, we arrange for the conveyance of the above and related services. We are committed to providing professional services to all our valued customers. This includes regular release of account updates.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse2">
                                    Estate Agency
                                </a>
                            </div>
                            <div id="collapse2" class="card-block collapse">
                                <div class="foq-info">
                                    <p>Letting and Leasing. We normally undertake letting/leasing assignments for both new and old developments. At the same time we also render consultancy services.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse3">
                                    Selling and Purchasing
                                </a>
                            </div>
                            <div id="collapse3" class="card-block collapse">
                                <div class="foq-info">
                                    <p>The company usually takes instructions from clients to sell their properties on their behalf and also source quality properties on their behalf.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse4">
                                    Reports/Property Account Statements
                                </a>
                            </div>
                            <div id="collapse4" class="card-block collapse">
                                <div class="foq-info">
                                    <p>Our accounts and computer office will undertake to give monthly reports on property maintained and repair, tenancy level, credits and debits brought forward, arrears among other issue. Details of the name and location of property, period for which the payments were done, date and receipt numbers are reflected in the monthly statements.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse6">
                                    Receipting
                                </a>
                            </div>
                            <div id="collapse6" class="card-block collapse">
                                <div class="foq-info">
                                    <p>All payments paid to us are promptly and appropriately receipted (by computer) with the original receipt given to the tenant. Details in the receipts including date of payment, receipt number and period for which the payments is made are contained in the property statements.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse10">
                                   Bills
                                </a>
                            </div>
                            <div id="collapse10" class="card-block collapse">
                                <div class="foq-info">
                                    <p>The company encourages tenants to open personal accounts for utility services and make payments thereof. However, we take responsibility to ensure prompt payments of bills. This helps the tenants not to avoid vacating of remises with unpaid up bills.</p>
                                </div>
                            </div>
                            <div class="card-header">
                                <a class="card-title collapsed" data-toggle="collapse" data-parent="#faq" href="#collapse11">
                                    Maintenance
                                </a>
                            </div>
                            <div id="collapse11" class="card-block collapse">
                                <div class="foq-info">
                                    <p>We propose that the contractor either recommended by our clients or our company should undertake maintenance. However, the company officers provide all the necessary supervision so as to ensure use of quality material and good workmanship.</p>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
            </div>
        </div>
    </div>
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
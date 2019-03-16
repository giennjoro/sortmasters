<!-- jp Newsletter Wrapper Start -->
<div class="jp_main_footer_img_wrapper">
    <div class="jp_newsletter_img_overlay_wrapper"></div>
    <div class="jp_newsletter_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="jp_newsletter_text">
                        <img src="{{ asset('client/images/content/news_logo.png') }}" class="img-responsive" alt="news_logo" />
                    </div>
                </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                       <div class="jp_newsletter_field">
                            {!! Form::open(['action' => 'PagesController@subscriber_store', 'method' => 'POST']) !!}
                                @csrf
                                <i class="fa fa-envelope-o"></i>
                                {{Form::email('email' ,'', ['placeholder' => 'Enter your Email']) }}
                                {{ Form::button('Subscribe Now',['class'=>'btn' ,'type'=>'submit']) }}
                            {!! Form::close() !!}
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- jp Newsletter Wrapper End -->
    <!-- jp footer Wrapper Start -->
    <div class="jp_footer_main_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_footer_logo_wrapper">
                        <div class="jp_footer_logo">
                            <a href="javascript:void(0)"><img src="{{ asset('logo_white.png') }}" alt="footer_logo"/></a>
                            
                        </div>
                    </div>
                </div>
                <div class="jp_footer_three_sec_main_wrapper">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="jp_footer_first_cont_wrapper">
                            <div class="jp_footer_first_cont">
                                <h2>Who We Are</h2>
                                <p>We are a recruiting agency that recruits on behalf of cruise ships all over the world. 
                        We are the first company to recruit for msc cruise ship.
                        We recruit, train and expose personels to work in different positions in the cruise ships.
                        Kelmas Ventures Ltd works in association with <a style="color:#5DBCD2; text-decoration: underline; font-weight: bold;" href="https://www.taskinstitute.ac.ke">The Task Catering Training Institute</a> to train and equip the recruits with the neccessary skills.
                        <br>
                    </p>
                                <ul>
                                    <li><i class="fa fa-plus-circle"></i> <a href="/about">READ MORE</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper2">
                            <div class="jp_footer_candidate">
                                <h2>Navigation</h2>
                                <ul>
                                    <li><a href="/"><i class="fa fa-caret-right" aria-hidden="true"></i> Home</a></li>
                                    <li><a href="/about"><i class="fa fa-caret-right" aria-hidden="true"></i> About Us</a></li>
                                    <li><a href="/about"><i class="fa fa-caret-right" aria-hidden="true"></i> Apply for Jobs</a></li>
                                    <li><a href="/contact"><i class="fa fa-caret-right" aria-hidden="true"></i> Contact Us </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper3">
                            <div class="jp_footer_candidate">
                                <h2>Quick links</h2>
                                <ul>
                                    <li><a href="/jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Jobs available</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-caret-right" aria-hidden="/jobs"></i> Application Form</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-caret-right" aria-hidden="https://taskinstitute.ac.ke"></i> Get training</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa fa-caret-right" aria-hidden="true"></i> FAQs</a></li>
                                    <li><a href="/webmail"><i class="fa fa-caret-right" aria-hidden="true"></i>Webmail</a></li>
                                    <li><a href="/administrator"><i class="fa fa-caret-right" aria-hidden="true"></i>Admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="jp_footer_candidate_wrapper jp_footer_candidate_wrapper4">
                            <div class="jp_footer_candidate">
                                <h2>Available Jobs</h2>
                                <ul>
                                    <li><a href="/jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Bartenders</a></li>
                                    <li><a href="/jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Waiters & Waitresses</a></li>
                                    <li><a href="/jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Gym Instructors</a></li>
                                    <li><a href="/jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Catering</a></li>
                                    <li><a href="/jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> House Keepers</a></li>
                                    <li><a href="/jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Spar and massage therapists</a></li>
                                    <li><a href="/jobs"><i class="fa fa-caret-right" aria-hidden="true"></i> Stewards</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_bottom_footer_Wrapper">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_bottom_footer_left_cont">
                                    <p>&copy 2019 Kelmas Ventures Ltd. All Rights Reserved.</p>
                                </div>
                                <div class="jp_bottom_top_scrollbar_wrapper">
                                    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="jp_bottom_footer_right_cont">
                                    <ul>
                                        <li><a href="javascript:void(0)"><ion-icon name="logo-facebook"></ion-icon></a></li>
                                        <li><a href="javascript:void(0)"><ion-icon name="logo-twitter"></ion-icon></a></li>
                                        <li><a href="mailto:info@kelmasrecruiters.co.ke"><i class="fa fa-envelope"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <p class="pull-right" >Developed by <a style="color:javascript:void(0)5DBCD2;" target="_blank" href="https://www.24seven.co.ke">24seven Developers</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jp footer Wrapper End -->
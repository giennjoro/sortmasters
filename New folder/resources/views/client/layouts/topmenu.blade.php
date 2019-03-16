<!-- Top Header Wrapper Start -->
<div class="jp_top_header_main_wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="jp_top_header_left_wrapper">
                        <div class="jp_top_header_left_cont">
                            <p><i class="fa fa-phone"></i> &nbsp;Phone:<br> &nbsp;+254 757 427284/ +254 780 956548</p>
                            <p class=""><i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;<a href="mailto:info@kelmasrecruiters.co.ke"><br>info@kelmasrecruiters.co.ke</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="jp_top_header_right_wrapper">
                        @guest
                            <div class="jp_top_header_right_cont">
                                <ul>
                                    <li><a href="/register"><i class="fa fa-user"></i>&nbsp; SIGN UP</a></li>
                                    <li><a href="/login"><ion-icon name="log-in"></ion-icon>&nbsp; LOGIN</a></li>
                                </ul>
                            </div>
                        @elseif(Auth::user()->type == 'applicant')
                            <div class="jp_top_header_right_cont">
                                <ul>
                                    <li><a href="/profile"><i class="fa fa-user"></i>&nbsp; View Profile</a></li>
                                    <li><a href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                         <i class="fa fa-sign-in"></i>&nbsp; LOGOUT
                                        </a>
                                    </li>
                                    <div class="hidden">
                                        <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </div>
                                </ul>
                            </div>
                        @else
                            <div class="jp_top_header_right_cont">
                                <ul>
                                    <li><a href="{{ route('home') }}"><i class="fa fa-user"></i>&nbsp; Go to Admin Dashboard</a></li>
                                    
                                </ul>
                            </div>
                        @endif
                       
                    </div>
                </div>
            </div>
        </div>
</div>
<!-- Top Header Wrapper End -->
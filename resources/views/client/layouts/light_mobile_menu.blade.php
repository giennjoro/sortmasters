<header class="mobail_menu">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-6 col-sm-6">
                    <div class="gc_logo">
                            <a href="/"><img width="200px" src="{{asset('logo_black.png')}}" alt="Logo" title="Kelmas Logo"></a>
                    </div>
            </div>
            <div class="col-xs-6 col-sm-6">
                <div class="cd-dropdown-wrapper">
                    <a class="house_toggle" href="#0">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px"><g><g><path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#000000"/></g><g><path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#000000"/></g><g><path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#000000"/></g><g><path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#000000"/></g><g><path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#000000"/></g></g></svg>
                        </a>
                    <nav class="cd-dropdown">
                        <h2><a href="#">Kelmas<span>Recruiters</span></a></h2>
                        <a href="#0" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/about">About Us</a>
                            </li>
                            <li>
                                <a href="/jobs">Jobs</a>
                            </li>
                            <li>
                                <a href="/contact">Contact us</a>
                            </li>
                            @guest
                                <li>
                                    <a href="/login">Login</a>
                                </li>
                                <li>
                                    <a href="/register">Sign Up</a>
                                </li>
                            @elseif(Auth::user()->type == 'applicant')
                                <li>
                                    <a href="/login">View Profile</a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a href="/home">Go to Admin Dashboard</a>
                                </li>
                            @endif
                        </ul>
                        <!-- .cd-dropdown-content -->
                    </nav>
                    <!-- .cd-dropdown -->

                </div>
            </div>
        </div>
    </div>
    <!-- .cd-dropdown-wrapper -->
</header>
<div class="sidebar left border-right scroll-y">			
        <ul class="nav flex-column " id="side-menu" style="">
            
            <li class="title-nav">Navigation</li>
            <li class="nav-item">
                    <a href="/home"><i class="icon fa fa-home"></i> Dashboard</a>
            </li>

            <li class="nav-item ">
                <a href="javascript:void(0)" class="menudropdown nav-link">
                    <i class="icon fa fa-users"></i> Admins
                    <i class="arrow fa fa-angle-down"></i>
                </a>
                <ul class="nav flex-column nav-second-level">
                    <li class="nav-item">
                        <a href="{{ route('add_admin') }}" class="nav-link "> <i class="fa fa-plus"></i> Add Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/administrator/admins"> <i class="fa fa-users"></i> View Admins</a>
                    </li>
                </ul>
                <!-- .nav-second-level / -->
            </li>

            <li class="nav-item ">
                <a href="javascript:void(0)" class="menudropdown nav-link">
                    <i class="icon fa fa-briefcase"></i> Jobs
                    <i class="arrow fa fa-angle-down"></i>
                </a>
                <ul class="nav flex-column nav-second-level">
                    <li class="nav-item">
                        <a href="/administrator/jobs/create" class="nav-link "> <i class="fa fa-plus"></i> Add Job</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/administrator/jobs"> <i class="fa fa-briefcase"></i> View Jobs</a>
                    </li>
                </ul>
                <!-- .nav-second-level / -->
            </li>

            <li class="nav-item">
                <a href="/administrator/applications" target="_self"><i class="icon fa fa-university"></i> Applications</a>
            </li>
            
            <li class="nav-item ">
                <a href="javascript:void(0)" class="menudropdown nav-link">
                    <i class="icon fa fa-users"></i> Users
                    <i class="arrow fa fa-angle-down"></i>
                </a>
                <ul class="nav flex-column nav-second-level">
                    <li class="nav-item">
                        <a href="{{ route('users.create') }}" class="nav-link "> <i class="fa fa-plus"></i> Add User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('users.index') }}"> <i class="fa fa-users"></i> View Users</a>
                    </li>
                </ul>
                <!-- .nav-second-level / -->
            </li>

            <li class="nav-item ">
                <a href="javascript:void(0)" class="menudropdown nav-link">
                    <i class="icon fa fa-users"></i> Subscribers
                    <i class="arrow fa fa-angle-down"></i>
                </a>
                <ul class="nav flex-column nav-second-level">
                    <li class="nav-item">
                        <a href="/administrator/subscribers/create" class="nav-link "> <i class="fa fa-plus"></i> Add Subscriber</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/administrator/subscribers"> <i class="fa fa-users"></i> View Subscribers</a>
                    </li>
                </ul>
                <!-- .nav-second-level / -->
            </li>

            <li class="nav-item">
                <a href="https://delta.cloudns.io:2096/" target="_self"><i class="icon fa fa-envelope"></i> Webmail</a>
            </li>
        </ul>
        <hr>
        <h4 class="capstitle text-uppercase">Inspiring Quote</h4>
        <div class="media px-3"  >
            <div class="media-body">
                <blockquote class="blockquote">
                    <p class="mb-2 lead">Winners don't do different things, they do things differently</p>
                    <footer class="blockquote-footer">By
                        <cite title="Source Title">Shiv Khera</cite>
                    </footer>
                </blockquote>
            </div>
        </div>
        <br>
    </div>
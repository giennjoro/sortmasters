<!-- header starts -->
<header class="border-bottom">
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-sm ">
        <a class="navbar-brand" href="/" target = "blank">
            <img src="{{ asset('favicon.png') }}" alt="">
            <h5 class="text-uppercase visible-md">
                <span>Sortmasters</span>
                <small>Company <i class="fa fa-circle text-danger"></i> Ltd</small>
            </h5>
        </a>
        <button class="btn btn-link menu-btn sq-btn rounded-0 border-right " type="button" id="sidebar-left">
            <span class="fa fa-bars"></span>
        </button>

        <div class="d-flex col p-0" id="navbarCollapse">

            <form class="form-inline search-form mr-auto">
               <input class="form-control bg-none" type="text" placeholder="Search..." aria-label="Search">
                <button class="btn btn-link text-secondary search-btn" type="button">
                    <i class="fa fa-search"></i>
                </button>
                <button class="btn btn-link text-secondary search-close-btn" type="button">
                    <i class="fa fa-close"></i>
                </button>
            </form>
            <div class="d-block ">
            </div>
            <div class="d-block">

                <div class="dropdown float-left">
                    <a href="#" class="btn btn-link text-dark user-profile invisible-sm">
                        <figure class="avatar30 rounded-circle m-0">
                            <img src="{{ asset('default/download.jpg') }}" alt="user">
                        </figure>
                    </a>
                </div>

                <button class="btn btn-success sq-btn border-0 rounded-0  text-white" type="button" id="sidebar-right">
                    <span class="icon fa fa-angle-double-left"></span>
                </button>
            </div>
        </div>
    </nav>
</header>
<!-- header ends -->

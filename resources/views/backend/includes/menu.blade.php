<body class="pr-0">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header" style="background:#404E67;color:#fff;">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="#">
                            Lamp Techs Ecommerce
                            {{-- {{ $system->application_name ?? str_replace('_',' ', env('APP_NAME')) }} --}}
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    {{-- <div class="navbar-container container-fluid">

                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{ file_exists(Auth::guard('admin')->user()->image)? asset(Auth::guard('admin')->user()->image):asset('image/dummy_user.jpg') }}" class="img-radius" alt="Image">
                                        <span>{{Auth::guard('admin')->user()->name}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="{{ route('admin.edit',['id' => Auth::guard('admin')->user()->id])}}" class="ajax-click-page" ><i class="feather icon-user"></i> Profile</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admin.logout') }} "><i class="feather icon-log-out"></i> Logout</a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </nav>
            <!-- Top Navigation End -->

            <!-- Left Sidebar start -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            {{-- <div class="pcoded-navigatio-lavel">Lamp Techs Ecommerce</div> --}}
                            <ul class="pcoded-item pcoded-left-item">
                                <!-- Dashboard -->
                                <li class="{{ isset($nav) && $nav == 'dashboard' ? 'pcoded-trigger active-menu' : null }}">
                                    <a href="#">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Dashboard</span>
                                    </a>
                                </li>
                                {{-- <li class="{{ isset($nav) && $nav == 'activity_log' ? 'pcoded-trigger active-menu' : null }}">
                                    <a href="{{ route('admin.activity_log') }}">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Activity Log</span>
                                    </a>
                                </li> --}}
                                    <!-- Category List -->
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fas fa-users"></i></span>
                                            <span class="pcoded-mtext" >Category</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                                <li class="'active-subMenu' : 'none' }}" >
                                                    <a href="{{ route('admin.categories') }}"><i class="fas fa-align-justify"></i>View Categories</a>
                                                </li>
                                        </ul>
                                        <ul class="pcoded-submenu">
                                            <li class="'active-subMenu' : 'none' }}" >
                                                <a href="#"><i class="fas fa-user-plus"></i>Create Category</a>
                                            </li>
                                        </ul>
                                        <ul class="pcoded-submenu">
                                            <li class="'active-subMenu' : 'none' }}" >
                                                <a href="#"><i class="fas fa-align-justify"></i>Edit Category</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)">
                                            <span class="pcoded-micon"><i class="fas fa-users"></i></span>
                                            <span class="pcoded-mtext" >Generic Status</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                                <li class="'active-subMenu' : 'none' }}" >
                                                    <a href="#"><i class="fas fa-align-justify"></i>View Generic Statuses</a>
                                                </li>
                                        </ul>
                                        <ul class="pcoded-submenu">
                                            <li class="'active-subMenu' : 'none' }}" >
                                                <a href="#"><i class="fas fa-align-justify"></i>Create Generic Statuses</a>
                                            </li>
                                        </ul>
                                        <ul class="pcoded-submenu">
                                            <li class="'active-subMenu' : 'none' }}" >
                                                <a href="#"><i class="fas fa-align-justify"></i>Edit Generic Statuses</a>
                                            </li>
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>



                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-body">

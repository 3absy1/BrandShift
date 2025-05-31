    <!-- ========== App Menu ========== -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <a href="index" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <h1 class="logo-text" style="color: white;">BrandShift</h1>
                </span>
            </a>
            <a href="index" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ URL::asset('build/images/logo-sm.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <h1 class="logo-text" style="color: white;">BrandShift</h1>
                </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>
        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>
                <ul class="navbar-nav" id="navbar-nav">

                    <li class="menu-title"><span>@lang('translation.menu')</span></li>
                    <li class="nav-item">

                        {{-- <div class="collapse menu-dropdown" id="sidebarDashboards"> --}}
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="/home" class="nav-link {{Request::url() == route('home')? 'active':''}}" data-key="t-ecommerce">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a href="/posts" class="nav-link {{Request::url() == route('posts') ? 'active':''}}" data-key="t-ecommerce"> Posts</a>
                                </li>
                            </ul>
                        {{-- </div> --}}
                    </li>

                </ul>
            </div>
            <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>



<header class="header-area">
    <!-- Start Top Header -->
    <div class="top-header">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-12 col-sm-12">
                    <div class="header-right-content">
                        @unless (auth('admin')->check() || auth('supervisor')->check() || auth('professor')->check())
                            <a href="{{ route('admin.login') }}">
                                <span>المسئول</span>
                            </a>
                            <a href="{{ route('supervisor.login') }}">
                                <span>المشرف</span>
                            </a>
                            <a href="{{ route('professor.login') }}">
                                <span>عضور هيئة التدريس</span>
                            </a>
                        @endunless
                        @auth('admin')
                            <a href="{{ route('admin.dashboard') }}">
                                <i class="ri-user-fill"></i>
                                <span>{{ auth('admin')->user()->name }}</span>
                            </a>
                            <a href="{{ route('admin.logout') }}">
                                <i class="ri-logout-box-r-line"></i>
                                <span>خروج</span>
                            </a>
                        @endauth
                        @auth('supervisor')
                            <a href="{{ route('supervisor.profile') }}">
                                <i class="ri-user-fill"></i>
                                <span>{{ auth('supervisor')->user()->name }}</span>
                            </a>
                            <a href="{{ route('supervisor.logout') }}">
                                <i class="ri-logout-box-r-line"></i>
                                <span>خروج</span>
                            </a>
                        @endauth
                        @auth('professor')
                            <a href="{{ route('professor.profile') }}">
                                <i class="ri-user-fill"></i>
                                <span>{{ auth('professor')->user()->name }}</span>
                            </a>
                            <a href="{{ route('professor.logout') }}">
                                <i class="ri-logout-box-r-line"></i>
                                <span>خروج</span>
                            </a>
                        @endauth

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Top Header -->

    <!-- Start Navbar Area -->
    <div class="navbar-area">
        <div class="mobile-responsive-nav">
            <div class="container">
                <div class="mobile-responsive-menu">
                    <div class="logo">
                        <a class="brand" href="{{ route('home') }}">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{ route('home') }}" class="nav-link">الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('allbuildings') }}" class="nav-link">المبانى</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('allhalls') }}" class="nav-link">القاعات</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('search') }}" class="nav-link">بحث</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('aboutus') }}" class="nav-link">من نحن</a>
                            </li>
                        </ul>


                    </div>
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                    </a>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>

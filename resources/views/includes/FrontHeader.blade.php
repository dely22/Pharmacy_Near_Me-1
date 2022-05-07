<!--====== HEADER PART START ======-->

<header class="header_area shadow" style="direction: rtl;">
    <div id="header_navbar" class="header_navbar " style="background-color: white; ">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg dir">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('Front/assets/images/about/علاجي-01-3.svg') }}" id="logo" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav">
                                <li class="nav-item">
                                    <a class="page-scroll active" href="{{ route('index') }}">الرئيسية</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll active" href="{{ route('pharmacies') }}">الصيدليات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll active" href="{{ route('about') }}"> من نحن</a>
                                </li>
                                <li class="nav-item">
                                    <a class="page-scroll active" href="{{ route('contact') }}">تواصل معنا</a>
                                </li>
                            </ul>

                        </div>
                        <ul class="header-btn d-md-flex">

                            <!-- In LogIn Case  -->
                            @if (auth()->user())
                                <li>
                                    <a href="#" class="main-btn account-btn">
                                        <span class="d-md-none"><i class="lni lni-user"></i></span>
                                        <span class="d-none d-md-block">البروفايل</span>
                                    </a>
                                    <ul class="dropdown-nav dir" style="height: auto;">
                                    @if (auth()->user()->hasRole('admin'))
                                        <li><a href="{{ route('admin-dashboard') }}">لوحة التحكم</a></li>
                                    @elseif (auth()->user()->hasRole('pharmacy'))
                                        <li><a href="{{ route('pharmacy-dashboard') }}">لوحة التحكم</a></li>                                        
                                    @else
                                        <li><a href="{{ route('client-dashboard') }}">لوحة التحكم</a></li>
                                    @endif

                                        <li><a href="{{ route('logout') }}">تسجيل خروج</a></li>
                                    </ul>
                                </li>
                            @else
                                <li>
                                    <a href="{{ route('login') }}"
                                        class="main-btn mt-4 d-none mr-sm-2 d-md-block">دخول</a>
                                </li>
                            @endif


                        </ul>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </div> <!-- header navbar -->
</header>

<!--====== HEADER PART ENDS ======-->

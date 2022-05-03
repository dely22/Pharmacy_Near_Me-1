
    <!--====== HEADER PART START ======-->

<header class="header_area">
    <div id="header_navbar" class="header_navbar " style="background-color: white; ">
        <div class="container position-relative">
            <div class="row align-items-center">
                <div class="col-xl-12">
                    <nav class="navbar navbar-expand-lg dir" >
                        <a class="navbar-brand" href="#">
                            علاجي
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

                                <!-- <li>
                                <a href="#" class="main-btn account-btn">
                                    <span class="d-md-none"><i class="lni lni-user"></i></span>
                                    <span class="d-none d-md-block">البروفايل</span>
                                </a>
                                <ul class="dropdown-nav dir"style="height: auto;">
                                    <li><a href="profile-settings.html">لوحة التحكم</a></li>
                                    <li><a href="javascript:void(0)">تسجيل خروج</a></li>
                                </ul>
                            </li>  -->
                            <li>
                                <a href="{{ route('login') }}" class="main-btn mt-4 d-none mr-sm-2 d-md-block">دخول</a>
                            </li>
                        </ul>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" >
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

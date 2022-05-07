@extends('layouts.masterFront')


@section('content')

    <!--====== HERO PART START ======-->

    <section id="home" class="hero-area bg_cover" style="direction: rtl;">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-lg-9 col-xl-9 col-md-10">
                    <div class="text-center hero-content">
                        <h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">أهلا بك في موقع علاجي </h1>
                        <p class="wow fadeInUp" data-wow-delay=".4s">نسعى لتحقيق أحلام عملائنا ، من خلال الجمع بين أفكارهم
                            وحاجاتهم تجاربهم وتجربتنا الخاصة.</p><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== HERO PART END ======-->

    <!--====== SEARCH PART START ======-->

    @include('includes.FrontSearch')

    <!--====== SEARCH PART END ======-->


    <!--====== PHARMACY SLIDER PART START ======-->
    <div class="feature-pharmacy-area bg_cover">
        <div class="container">

            <h3 class="heading"><span>علاجي</span> صيدليات </h3>
            <div class="pharmacy-carousel-wrapper">
                <div class="row feature-pharmacy-carousel">

                    @foreach ($pharmacies as $pharmacy)
                        <div class="col-lg-4 col-md-6 col-4">
                            <div class="single-pharmacy col-12 shadow p-3 bg-white radius">
                                <div class="product-img col-12">
                                    <img src="{{ asset('uploads/avaters/pharmacy/'.$pharmacy->avater)}}" class="radius col-12 " alt="">
                                </div>

                                <div class="pharmacy-content ">

                                    <ul class="address">
                                        <h3 class="name p-2" style="text-align: right;">
                                            <a href="{{ route('detailes', $pharmacy->id) }}"> {{ $pharmacy->name }}
                                                <i class="lni lni-user  p-2"></i> </a>
                                        </h3>
                                        <li style="text-align: right;" class="pr-4">
                                            <a href="javascript:void(0)"> {{ $pharmacy->Cname }} -
                                                {{ $pharmacy->Zname }}
                                                <i class="lni lni-map-marker p-2"></i></a>
                                        </li>
                                    </ul>
                                    <div class="pharmacy-bottom">
                                        <a href="javascript:void(0)" class="main-btn col-12"><i
                                                class="lni lni-checkmark-circle"></i> تقديم طلب</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!--====== PHARMACY SLIDER PART ENDS ======-->




    <!--====== SERVICE PART START ======-->
    <section class="service-area pt-140 pb-110" style="direction: rtl;">
        <div class="container">
            <div class="row">
                <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                    <div class="text-center section-title mb-60">
                        <h1>ماذا سيقدم لك هذا الموقع </h1>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6 col-sm-8 col-11">
                    <div class="single-service d-flex justify-content-between">
                        <div class="icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="service-content">
                            <h3>الحصول على علاجك بسرعه </h3>
                            <p>من خلال تسهيل عملية البحث عن الصيدليه وتسهيل عملية الطلب بالاضافة الى وجود خدمة التوصيل </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-11">
                    <div class="single-service d-flex justify-content-between">
                        <div class="icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="service-content">
                            <h3>الحصول على علاجك بسرعه </h3>
                            <p>من خلال تسهيل عملية البحث عن الصيدليه وتسهيل عملية الطلب بالاضافة الى وجود خدمة التوصيل </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8 col-11">
                    <div class="single-service d-flex justify-content-between">
                        <div class="icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="service-content">
                            <h3>الحصول على علاجك بسرعه </h3>
                            <p>من خلال تسهيل عملية البحث عن الصيدليه وتسهيل عملية الطلب بالاضافة الى وجود خدمة التوصيل </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8 col-11">
                    <div class="single-service d-flex justify-content-between">
                        <div class="icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="service-content">
                            <h3>الحصول على علاجك بسرعه </h3>
                            <p>من خلال تسهيل عملية البحث عن الصيدليه وتسهيل عملية الطلب بالاضافة الى وجود خدمة التوصيل </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8 col-11">
                    <div class="single-service d-flex justify-content-between">
                        <div class="icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="service-content">
                            <h3>الحصول على علاجك بسرعه </h3>
                            <p>من خلال تسهيل عملية البحث عن الصيدليه وتسهيل عملية الطلب بالاضافة الى وجود خدمة التوصيل </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-8 col-11">
                    <div class="single-service d-flex justify-content-between">
                        <div class="icon">
                            <i class="lni lni-gift"></i>
                        </div>
                        <div class="service-content">
                            <h3>الحصول على علاجك بسرعه </h3>
                            <p>من خلال تسهيل عملية البحث عن الصيدليه وتسهيل عملية الطلب بالاضافة الى وجود خدمة التوصيل </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== SERVICE PART ENDS ======-->


    {{-- Forms --}}
    <section>
        <h3 class="heading">احرص على متابعة كل جديد على منصتنا للاستفادة من خدماتنا</h3>
        <div class="d-flex justify-content-center">

            <div class="container-fluid radius " style=" margin-block-end: 50px;direction: rtl">
                <div class="" style=" ">
                    <div class="radius d-flex justify-content-center">
                        <div class="col-md-6 col-sm-12 shadow-lg p-3 bg-light">
                            <div class="text-center">
                                <h3 class="heading fs-1">قدم طلب لنشر اعلانك في المنصة
                                </h3>
                            </div>
                            <form action="">
                                <div class="p-3">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text rounded"
                                            style="background-color: var(--main-color)"><i
                                                class="bi bi-person-plus-fill text-white"></i></span>
                                        <input type="text" class="form-control rounded" placeholder="الإسم الرباعي">
                                    </div>
                                    <div class="input-group mb-3 rounded">
                                        <span class="input-group-text rounded"
                                            style="background-color: var(--main-color)"><i
                                                class="bi bi-envelope-fill text-white align-content-end"></i></span>
                                        <input type="email" class=" rounded form-control" style="text-align:right"
                                            placeholder="البريدالالكتروني">
                                    </div>

                                    <div class="input-group mb-3 rounded">
                                        <span class="input-group-text rounded"
                                            style="background-color: var(--main-color)"><i
                                                class="bi bi-telephone-fill text-white align-content-end"></i></span>
                                        <input type="email" class=" rounded form-control" style="text-align:right"
                                            placeholder="رقم الهاتف ">
                                    </div>

                                    <button class="btn-submit radius text-center p-2 col-12 mt-2" type="submit">
                                        تقديم طلب
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid radius " style=" margin-block-end: 50px;direction: rtl">

                <div class="" style="">
                    <div class="radius d-flex justify-content-center">
                        <div class="col-md-6 col-sm-12 shadow-lg p-3 bg-light">
                            <div class="text-center">
                                <h3 class="heading fs-1">ادخل بياناتك للإشتراك في<span> اخبار المنصة</span></h3>
                            </div>
                            <form action="">
                                <div class="p-5">
                                    <div class="input-group mb-3">
                                        <span class="input-group-text rounded"
                                            style="background-color: var(--main-color)"><i
                                                class="bi bi-person-plus-fill text-white"></i></span>
                                        <input type="text" class="form-control rounded" placeholder="الإسم الرباعي">
                                    </div>
                                    <div class="input-group mb-3 rounded">
                                        <span class="input-group-text rounded"
                                            style="background-color: var(--main-color)"><i
                                                class="bi bi-envelope-fill text-white align-content-end"></i></span>
                                        <input type="email" class=" rounded form-control" style="text-align:right"
                                            placeholder="البريدالالكتروني">
                                    </div>

                                    <button class="btn-submit radius text-center p-2 col-12 mt-2" type="submit">
                                        اشتراك
                                    </button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@stop

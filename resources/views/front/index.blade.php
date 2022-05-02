@extends('layouts.masterFront')


    @section('content')

    <!--====== HERO PART START ======-->

	<section id="home" class="hero-area bg_cover">
		<div class="container">
			<div class="row">
				<div class="mx-auto col-lg-9 col-xl-9 col-md-10">
					<div class="text-center hero-content">
						<h1 class="mb-30 wow fadeInUp" data-wow-delay=".2s">أهلا بك في موقع علاجي </h1>
						<p class="wow fadeInUp" data-wow-delay=".4s">نسعى لتحقيق أحلام عملائنا ، من خلال الجمع بين أفكارهم وحاجاتهم تجاربهم وتجربتنا الخاصة.</p><br>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!--====== HERO PART END ======-->

    <!--====== SEARCH PART START ======-->

	@include('includes.FrontSearch')

	<!--====== SEARCH PART END ======-->

	<!--====== SERVICE PART START ======-->

        <section class="service-area pt-140 pb-110">
            <div class="container">
                <div class="row">
                    <div class="mx-auto col-xl-6 col-lg-7 col-md-10">
                        <div class="text-center section-title mb-60">
                            <h1>ماذا سيقدم لك هذا الموقع  </h1>

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


    @stop

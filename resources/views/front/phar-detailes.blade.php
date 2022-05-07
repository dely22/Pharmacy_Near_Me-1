@extends('layouts.masterFront')

    @section('content')

    <!--====== BANNER PART START ======-->
	{{-- <section class="banner-area bg_cover">
		<div class="container">

		</div>
	</section> --}}

	<!--====== BANNER PART END ======-->
<section class="mt-5 shadow" style="direction: rtl">
  <div class="container py-5 mt-5">
    <div class="row d-flex justify-content-center align-items-center mt-5">
      <div class="col col-lg-9 col-xl-7 mt-5">
        <div class="card mt-5">
          <div class="rounded-top search-area text-white d-flex flex-row  banner-area bg_cover" style=" height:200px;">
            <div class="ms-4 d-flex flex-column " style="width: 150px; z-index: 100000;">
              <img src="{{ asset('uploads/avaters/pharmacy/'.$pharmacy->avater)}}"
                alt="Generic placeholder image" class="img-fluid img-thumbnail  mb-2"
                style="width: 150px; z-index: 100000; background-color: var(--main-color);">
              <button type="button" class="btn btn-outline-dark" data-mdb-ripple-color="dark"
                style="z-index: 1000;">
                تقديم طلب
              </button>
            </div>
            <div class="ms-3 text-white" style="margin-top:2px;">
              <h5 style="color: #f8f9fa">{{ $pharmacy->name }}</h5>
              <p style="color: #f8f9fa">
                <i class="lni lni-map-marker"></i>
                  {{ $pharmacy->Cname }} - {{ $pharmacy->Zname }}
              </p>
            </div>
          </div>
          <div class="p-4 text-black " style="background-color: #f8f9fa;">
            <div class="d-flex justify-content-end text-center py-1 flex-wrap">
              <div class="social">
                <!-- <p class="mb-1 h5">253</p> -->
                <p class="small text-muted mb-0"><a href="javascript:void(0)"><i class="lni lni-facebook-filled pr-2"></i></a></p>
              </div>
              <div class="px-3 social">
               <a href="javascript:void(0)"><i class="lni lni-whatsapp pr-2"></i></a>

              </div>
              <div class="social">

               <a href="javascript:void(0)"><i class="lni lni-phone pr-2"></i></a>
              </div>
            </div>
          </div>
          <div class="card-body p-4 text-black">
            <div class="mb-5">
              <p class="lead fw-normal mb-1"> أهلا بك في {{ $pharmacy->name }} نوفر جميع مستلزماتك الطبية والحياتية </p>
              <div class="p-4" style="background-color: #f8f9fa;">
                <p class="font-italic mb-1">أوقات العمل </p>
                <p class="font-italic mb-1">جميع أيام الأسبوع على مدارالساعه </p>
                <!-- <p class="font-italic mb-0">على مدار الساعه</p> -->
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Card -->
    {{-- <div class="d-flex justify-content-center py-5 w-auto m-5 col-6"style="position: relative; top:1%;margin:5rem; direction:rtl;">
        <img src="{{ asset('uploads/avaters/pharmacy/'.$pharmacy->avater)}}" class="rounded-circle">
        <div class="text col-6">
            <h3>{{ $pharmacy->name }} </h3>
            <p>  أهلا بك في  {{ $pharmacy->name }}, نوفر جميع مستلزماتك الطبية والحياتية </p>
            <ul class="social text-center d-flex align-content-center justify-content-center align-self-center col-6">
                <li><a href="javascript:void(0)"><i class="lni lni-facebook-filled pr-2"></i></a></li>
                <li><a href="javascript:void(0)"><i class="lni lni-twitter-filled pr-2"></i></a></li>
                <li><a href="javascript:void(0)"><i class="lni lni-instagram-filled pr-2"></i></a></li>
                <li><a href="javascript:void(0)"><i class="lni lni-linkedin-original pr-2"></i></a></li>
            </ul>
            <div class="pharmacy-bottom">
                <a href="javascript:void(0)" class="main-btn col-6"><i class="lni lni-checkmark-circle"></i> تقديم طلب</a>
            </div>

        </div>
    </div> --}}
@stop

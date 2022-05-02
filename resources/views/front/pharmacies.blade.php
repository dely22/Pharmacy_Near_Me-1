@extends('layouts.masterFront')


@section('content')
    <!--====== BANNER PART START ======-->
<section class="banner-area bg_cover">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="banner-content">
                    <h1 class="text-white">جميع صيدليات علاجي</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{ }}"> الرئيسية</a></li>
                            <li class="breadcrumb-item active" aria-current="page">  الصيدليات  </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====== BANNER PART END ======-->

<!-- Search Pharmacy section start -->
    @include('includes.FrontSearch')
<!-- Search Pharmacy section ends -->



@stop

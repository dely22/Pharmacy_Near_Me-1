@extends('layouts.masterFront')

    @section('content')

    <!--====== LOGIN PHARMACY PART START ======-->

    {{-- <section class="h-100 gradient-form div-center">
        <div class="container py-5 h-100" style="height: 2em; ">
            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <div class="row d-flex justify-content-center align-items-center h-100" style="margin-top: -3em;">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6 x">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{ asset('auth/images/1553191-673ab7.svg') }}"
                                            style="width: 4empx;height: 6em;" alt="logo">

                                        <h2 class="heading" style=" letter-spacing: 0;"> <span>تسجيل
                                                الدخول</span></h2>
                                    </div>

                                    <form action="{{ route('login') }}" method="POST"
                                        class="contact3-form validate-form">
                                        @csrf
                                        <div class="row">
                                            <div class="input-group input-3">
                                                <input type="email" placeholder="الايميل" class="input-control"
                                                    name="email" required>
                                            </div>
                                            <div class="input-group input-3">
                                                <input type="password" placeholder="كلمة المرور" class="input-control"
                                                    name="password" required>
                                            </div>

                                        </div>


                                        <div class="row">
                                            <div class="input-group">
                                                <button type="submit" class="submit-btn2">دخول</button>
                                            </div>
                                        </div>

                                        <div class="container">

                                            <p class="small  pb-lg-2" style="margin-top: 1em;"><a class="text-muted"
                                                    href="{{ route('forget-password') }}" style="color: var(--black);
                        text-decoration: none; font-size: 1.6rem;">هل نسيت كلمة المرور؟</a><br>
                                            </p>
                                            <p>ليس لديك حساب سابق؟ <a href="{{ route('register') }}"
                                                    style="color: #0a58ca;"> سجل الان</a></p>
                                        </div>
                                        <p class="small"
                                            style="margin-bottom: -1em;color: var(--black);font-size: 1.6rem;">او يمكتك
                                            الدخول عبر </p>
                                        <div class="share2" style="padding-top: 2rem;">

                                            <a href="{{ route('facebook-client') }}"
                                                class="fa-brands fa-facebook"></a>
                                            <a href="{{ route('google-client') }}" class="fa-brands fa-google"></a>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

	<!--====== LOGIN PHARMACY PART ENDS ======-->

    @stop

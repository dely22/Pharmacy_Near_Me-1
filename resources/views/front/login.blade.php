@extends('layouts.masterFront')

    @section('content')


@extends('layouts.masterFront')

    @section('content')
<head>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


</head>
<div class="container-fluid radius " style=" margin-block-end: 50px;direction: rtl">
    <div class="" style="margin-top:150px">
        <div class="radius d-flex justify-content-center">
            <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 class="heading">تسجيل<span>دخول</span></h3>
                </div>
                <form action="">
                    <div class="p-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text rounded" style="background-color: var(--main-color)"><i
                                    class="bi bi-person-plus-fill text-white"></i></span>
                            <input type="text" class="form-control rounded" placeholder="اسم المستخدم">
                        </div>
                        <div class="input-group mb-3 rounded">
                            <span class="input-group-text rounded"style="background-color: var(--main-color)"><i
                                    class="bi bi-key-fill text-white"></i></span>
                            <input type="password" class=" rounded form-control" placeholder="كلمة المرور">
                        </div>

                        <button class="btn-submit radius text-center p-2 col-12 mt-2" type="submit">
                            دخول
                        </button>
                        <p class="text-center mt-5">ليس لديك حساب؟
                            <span class="text-primary">تسجيل حساب</span>
                        </p>
                        <p class="text-center text-primary">نسيت كلمة المرور؟</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop




{{-- <div class="container-fluid vh-100" style="margin-top:300px">
    <div class="" style="margin-top:200px">
        <div class="rounded d-flex justify-content-center">
            <div class="col-md-4 col-sm-12 shadow-lg p-5 bg-light">
                <div class="text-center">
                    <h3 class="text-primary">Sign In</h3>
                </div>
                <form action="">
                    <div class="p-4">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-primary"><i
                                    class="bi bi-person-plus-fill text-white"></i></span>
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-primary"><i
                                    class="bi bi-key-fill text-white"></i></span>
                            <input type="password" class="form-control" placeholder="password">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Remember Me
                            </label>
                        </div>
                        <button class="btn-submit text-center mt-2" type="submit">
                            Login
                        </button>
                        <p class="text-center mt-5">Don't have an account?
                            <span class="text-primary">Sign Up</span>
                        </p>
                        <p class="text-center text-primary">Forgot your password?</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}


        @stop

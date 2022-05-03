<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>انشاء حساب </title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/contact.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('auth/css/style.css') }}">
</head>

<body style="direction: rtl;">

    <section class="col-xl-10 gradient-form div-center">
        <div class="container py-5 h-100" style="height: 2em; ">
            @if (session('status'))
                <div class="alert alert-danger alert-dismissible" role="alert">
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
                                        {{-- <img src="{{ asset('auth/images/1553191-673ab7.svg') }}"
                                            style="width: 4empx;height: 6em;" alt="logo"> --}}

                                        <h2 class="heading" style=" letter-spacing: 0;"> <span>انشاء الحساب
                                            </span></h2>
                                    </div>

                                    <form action="{{ route('register') }}" method="POST"
                                        class="contact3-form validate-form">
                                        @csrf
                                        <div class="row">
                                            <div class="input-group input-3">
                                                <input type="email" name="name" placeholder="اسم المستخدم"
                                                    class="input-control" required>
                                            </div>
                                            <div class="input-group input-3">
                                                <input type="email" name="email" placeholder="الايميل"
                                                    class="input-control" required>
                                            </div>
                                            <div class="input-group input-3">
                                                <input type="password" name="password" placeholder="كلمة المرور"
                                                    class="input-control" required>
                                            </div>
                                            <div class="input-group input-3">
                                                <input type="password" name="password_confirmation"
                                                    placeholder="تاكيد كلمة المرور" class="input-control" required>
                                            </div>

                                            <div class="input-group input-3">
                                                <div class="dropdown">
                                                    <select name="user_type" onchange="changePharmacy()">
                                                        <option value="client">مستخدم</option>
                                                        <option value="pharmacy">صيدلي</option>
                                                    </select>

                                                </div>
                                            </div>




                                        </div>






                                        <div class="row">
                                            <div class="input-group">
                                                <button type="submit" class="submit-btn2"
                                                    style=" margin-top: 1em;">دخول</button>
                                            </div>
                                        </div>
                                        <p class="small2" style="color: var(--black);font-size: 1.6rem;">اذا كان
                                            لديك حساب اضغط <a href="{{ route('login') }}">دخول</a></p>
                                        <p class="small"
                                            style="margin-bottom: -2em;color: var(--black);font-size: 1.6rem;margin-top:.5em;">
                                            او يمكتك الدخول عبر </p>
                                        <div class="share2" style="padding-top: 3rem;">

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
    </section>
    <script>
        function changePharmacy() {
            document.getElementById('facebook').href = "{{ route('facebook-pharmacy') }}";
            document.getElementById('google').href = "{{ route('google-pharmacy') }}";
        }

        function changeClient() {
            document.getElementById('facebook').href = "{{ route('facebook-client') }}";
            document.getElementById('google').href = "{{ route('google-client') }}";
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>

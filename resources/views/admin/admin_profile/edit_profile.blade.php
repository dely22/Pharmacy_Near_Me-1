@extends('layouts.masterAdmin')
@section('admin_pages')

<section style="background-color: #eee;">
<div class="container py-5 my-5">

<div class="row">
    <div class="col-lg-4">
    <div class="card mb-4">
        <div class="card-body text-center">
        <img src="{{ asset('uploads/avaters/admin/'.Auth::user()->avater) }}" alt="avatar"
            class="rounded-circle img-fluid" style="width: 150px;">
        <h5 class="my-3">{{ Auth::user()->name }}</h5>
        <p class="text-muted mb-1">{{ Auth::user()->email }}</p>
        </div>
    </div>
    </div>
    <div class="col-lg-8">
        <div class="card mb-4">
        <div class="card-body">

    <form>
                <div class="mb-3">
                <label for="exampleInputName" class="form-label">الاسم الكامل</label>
                <input value="{{ Auth::user()->name }}" type="text" class="form-control" id="exampleInputName">
                </div>
            <div class="mb-3">
                <label for="exampleInputLink" class="form-label"> التخصص</label>
                <input type="text" class="form-control" id="exampleInputName">
            </div>

            <div class="mb-3">
                <label for="exampleInputLink" class="form-label"> الموبايل</label>
                <input value="{{ Auth::user()->phone }}" type="tel" class="form-control" id="exampleInputName">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">الايميل</label>
                <input value="{{ Auth::user()->email }}" type="email" class="form-control" id="exampleFormControlInput1" placeholder="haneen@example.com">
            </div>

            <div class="mb-3">
                <label for="exampleInputLink" class="form-label"> العنوان</label>
                <input type="text" class="form-control" id="exampleInputName">
            </div>

            <div class="mb-3">
            <label for="formFile" class="form-label">صورة شخصية</label>
            <input class="form-control" type="file" id="formFile">
            </div>

            <button id="edit_button" type="button" class="btn btn-outline-dark m-3">حفظ التغيرات</button>
    </form>

    </div>

</section>

@endsection

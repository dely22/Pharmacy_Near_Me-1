@extends('layouts.masterAdmin')
@section('admin_pages')


<div class="wrapper bg-white">
    <div class="row  ">
        <div class="col-12 col-m-12 col-sm-12">
        <div class="card bg-white m-5">

            <div class="card-header d-flex justify-content-between">
                <a href="/_admin/add_Complaints"><i class="fas fa-plus"></i></a>
                <h3>الشكاوى</h3>
            </div>
            <div class="card-content">
                <table class="table">
                    <thead>
                        <tr>
                            <th> مقدم الشكوى</th>
                            <th> على من الشكوى </th>
                            <th>تاريخ تقديم الشكوى</th>
                            <th>محتوى الشكوى</th>
                            <th>الحالة</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>بينكي</td>
                            <td> حنين</td>
                            <td>23/4/2022</td>
                            <td><p> اشتي اسافر وهي ما جابت لي فلوس  </p></td>
                            <td>
                                <button class="btn btn-success text-white" >مفعل</button>
                            </td>

                            <td>
                            <a href="/_admin/edit_Complaints">  <button class="btn btn-primary text-white" >تعديل</button></a>
                                <button class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">حذف</button>
                                    <div class="modal"  id="exampleModal"  tabindex="-1">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">حذف </h5>
                                            </div>
                                            <div class="modal-body">
                                                </p> هل تريد حقا حذف الاعلان ؟</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">لا</button>
                                                <button type="button" class="btn btn-primary">نعم</button>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                            </td>


                        </tr>

                    </tbody>

                </table>

            </div>
        </div>
</div>



@endsection

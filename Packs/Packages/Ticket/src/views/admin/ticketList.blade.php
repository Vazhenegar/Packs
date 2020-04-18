
@extends("AdminPanel/layouts/master")

@section("content")



                <div class="col-12 card">
                    <div class="col-12">
                        <div class="card-box p-3">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <form action="" method="GET" role="form">
                                        <div class="form-group">
                                            <input type="text" name="search" placeholder="جستجو..." class="border custom-search-field p-1 pl-2 pr-3 rounded">
                                            <i class="fa fa-search" onclick="this.parentNode.parentNode.submit()"></i>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-3">

                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6">
                                    <div class="pull-left">
                                       /add page

                                    </div>
                                </div>
                            </div>
                            <!-- End row-->
                            <div class="table-responsive">
                                <table class="table mb-0 table-hover custom-tbl">
                                    <thead>
                                    <tr>

                                        <th class="text-center">عنوان</th>
                                        <th class="text-center">دسته بندی</th>
                                        <th class="text-center">وضعیت</th>
                                        <th class="text-center">کاربر</th>
                                        <th class="text-center">تاریخ ایجاد</th>
                                        <th class="text-center">آخرین پاسخ</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{route("user_single_ticket",["ticket"=>3])}}">کمک برای خرید</a>
                                            <span class="text-info hidden">(عادی)</span>
                                        </td>
                                        <td class="text-center"><span class="badge badge-inverse">فروش</span></td>
                                        <td class="text-center">
                                            <span class="badge badge-info"></span>

                                            <span class="badge badge-info">در انتظار بررسی</span>

                                        </td>
                                        <td class="text-center">
                                            <a href="#">امید زاهد</a>
                                        </td>
                                        <td class="text-center">۱۳۹۹/۰۱/۲۴</td>
                                        <td class="text-center">
                                            <span class="badge badge-danger">بدون پاسخ</span>
                                        </td>

                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="pull-left">
                                        <ul class="pagination pagination-split">
                                            //page
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

@endsection

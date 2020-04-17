
@extends("AdminPanel/layouts/master")

@section("content")

<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">ارسال تیکت جدید</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form role="form" method="post" enctype="multipart/form-data">

            <div class="card-body row">
                <div class="form-group col-6">
                    <label>عنوان</label>

                    @csrf
                    <input type="text" class="form-control"  name="title" placeholder="عنوان را وارد کنید">
                </div>
                <div class="form-group col-6">
                    <label>انتخاب دسته بندی</label>
                    <select class="form-control" name="category">
                        <option>گزینه ۱</option>
                        <option>گزینه ۲</option>
                        <option>گزینه ۳</option>
                        <option>گزینه ۴</option>
                        <option>گزینه ۵</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label for="exampleInputPassword1">پیام </label>
                    <textarea class="form-control" style="min-height: 150px;" name="message" placeholder="پیام خود را وارد کنید"></textarea>
                </div>


                <div class="form-group col-6">
                    <label>انتخاب اولویت</label>
                    <select class="form-control" name="priority">
                        <option>گزینه ۱</option>
                        <option>گزینه ۲</option>
                        <option>گزینه ۳</option>
                        <option>گزینه ۴</option>
                        <option>گزینه ۵</option>
                    </select>
                </div>
                <div class="form-group  col-6">
                    <label for="exampleInputFile"> فایل  زمیمه</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="file_attach">
                            <label class="custom-file-label" for="exampleInputFile">انتخاب فایل</label>
                        </div>

                    </div>
                </div>

                <div class="form-group">
                @if(!empty(config("ticket_config.reCAPTCHA.SITE_KEY")))
                    <script src='https://www.google.com/recaptcha/api.js'></script>
                    <div class="g-recaptcha" data-sitekey="{{config("ticket_config.reCAPTCHA.SITE_KEY")}}"></div>
                @endif
                    <button type="submit" class="btn mt-3 btn-primary">ارسال</button>
                </div>


            </div>




            <!-- /.card-body -->



            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
    <!-- /.card -->


</div>

@endsection

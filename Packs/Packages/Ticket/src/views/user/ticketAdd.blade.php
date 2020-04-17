
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
        <form role="form">
            <div class="card-body row">
                <div class="form-group col-6">
                    <label>عنوان</label>
                    <input type="text" class="form-control"  placeholder="عنوان را وارد کنید">
                </div>
                <div class="form-group col-6">
                    <label>انتخاب دسته بندی</label>
                    <select class="form-control">
                        <option>گزینه ۱</option>
                        <option>گزینه ۲</option>
                        <option>گزینه ۳</option>
                        <option>گزینه ۴</option>
                        <option>گزینه ۵</option>
                    </select>
                </div>

                <div class="form-group col-12">
                    <label for="exampleInputPassword1">پیام </label>
                    <textarea class="form-control" style="min-height: 150px;" placeholder="پیام خود را وارد کنید"></textarea>
                </div>


                <div class="form-group col-6">
                    <label>انتخاب اولویت</label>
                    <select class="form-control">
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
                            <input type="file" class="custom-file-input" id="exampleInputFile">
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


        </form>
    </div>
    <!-- /.card -->


</div>

@endsection

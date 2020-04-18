
@extends("AdminPanel/layouts/master")

@section("content")


    <script src="/admin_asset/plugins/ckeditor/ckeditor.js"></script>


    <div class="col-md-12">

        <div class="col-12 mb-5" style="
    min-height: 140px;
    border: 1px solid #dad1d1;
    padding: 16px;
    background: #fff;
    box-shadow: -3px 5px 7px -8px #000;
">

                <div>
                    <h1 class="mb-3" style="
    display: inline-block;
    max-width: calc(100% - 160px);
    font-size: 19px;
    line-height: 35px;
    color: #413b3b;
">آدرس سرور سایت IMIConsulting</h1>
                    <span class="badge badge-primary">(عادی)</span>

                    <button type="button" class="btn btn-block btn-outline-primary btn-flat" style="
    display: inline-block;
    width: auto;
    float: left;
">بستن تیکت</button>
                </div>
                <p>ایجاد شده در تاریخ
                    :<span class="link-muted text-bold text-primary"> 10:34 - 1399/01/24</span>
                    برای دپارتمان :<span class="link-muted text-bold text-primary"> بخش توسعه نرم افزار و وب سایت</span>

                    آخرین وضعیت تیکت : <span class="link-muted text-bold text-primary">در انتظار بررسی</span></p>
            </div>


        <div class="card">
            <div class="card-header">
                <p class="pull-right m-0">
                    <img width="40" class="rounded-circle single-ticket-user-avatar" src="https://secure.gravatar.com/avatar/d9f3f2e770179d608cf585f019c9cd0e?s=80&amp;r=g&amp;d=identicon" alt="user avatar">
                    <span class="mr-2">امید زاهد</span>
                </p>


            </div>
            <div class="card-body">
                <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
            </div>
            <div class="card-footer text-muted">
                <i class="fa fa-clock-o"></i> 11:22 - 1399/01/24 &nbsp;
            </div>
        </div>

        <div class="col-12 mb-5 card" style="
    min-height: 140px;
    border: 1px solid #dad1d1;
    padding: 16px;
    background: #fff;
    box-shadow: -3px 5px 7px -8px #000;
">

            <div class="mb-3">
                <h3 style="
                font-size: 18px;
            " class="mb-4">ارسال پاسخ</h3>
                <textarea id="editor" class="cke_rtl" ></textarea>

                <script>



                  ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );

                </script>

                <button class="btm-sm btn btn-custom btn-success btn-xs-block mt-4 pull-left rounded-0 w-lg waves-effect waves-light" type="submit">
                    <i class="fa fa-check"></i>
                    <span>ارسال پاسخ</span>
                </button>

                <label class="float-left ml-2">
                    <a id="upload_btn" class="text-white btm-sm btn btn-custom btn-success btn-xs-block mt-4 pull-left rounded-0 w-lg waves-effect waves-light"  >
                        <i class=" fa fa-cloud-upload text-white"></i>
                        <span class="text-white">افزودن فایل </span>
                        <a id="omid"></a>
                    </a>

                    <input id="upload" onchange="getfilename()" class="d-none" type="file">


                    <script>
                       function getfilename() {
                           var fullPath = document.getElementById('upload').value;
                           if (fullPath) {
                               var startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'));
                               var filename = fullPath.substring(startIndex);
                               if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                                   filename = filename.substring(1);
                               }
                              $("#upload_btn").text(filename);
                           }
                       }
                    </script>

                </label>
            </div>
        </div>




        </div>



@endsection

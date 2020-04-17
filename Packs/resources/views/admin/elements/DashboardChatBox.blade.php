<!-- Chat box -->
<div class="box box-success">
    <div class="box-header">
        <i class="fa fa-comments-o"></i>
        <h3 class="box-title">ارتباط با واحد پشتیبانی</h3>
    </div>
    <div class="box-body chat" id="chat-box">
        <!-- chat item -->
        <div class="item">
            <img src="{{asset('auth/dist/img/user4-128x128.jpg')}}" alt="user image" class="online">

            <p class="message">
                <a href="#" class="name">
                    <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                        2:15</small>
                    نسترن
                </a>
                فایل مورد نظر شما
            </p>
            <div class="attachment">
                <h4>فایل ضمیمه</h4>

                <p class="filename">
                    Theme-thumbnail-image.jpg
                </p>

                <div class="pull-left">
                    <button type="button" class="btn btn-primary btn-sm btn-flat">دانلود
                    </button>
                </div>
            </div>
            <!-- /.attachment -->
        </div>
        <!-- /.item -->
        <!-- chat item -->
        <div class="item">
            <img src="{{asset('auth/dist/img/user3-128x128.jpg')}}" alt="user image" class="offline">

            <p class="message">
                <a href="#" class="name">
                    <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                        5:15</small>
                    نگین
                </a>
                ممنونم
            </p>
        </div>
        <!-- /.item -->
        <!-- chat item -->
        <div class="item">
            <img src="{{asset('images/site/user.png')}}" alt="user image" class="offline">

            <p class="message">
                <a href="#" class="name">
                    <small class="text-muted pull-left"><i class="fa fa-clock-o"></i>
                        5:30</small>
                    محمد
                </a>
                با تشکر از شما
            </p>
        </div>
        <!-- /.item -->
    </div>
    <!-- /.chat -->
    <div class="box-footer">
        <div class="input-group">
            <input class="form-control" placeholder="متن پیام...">

            <div class="input-group-btn">
                <button type="button" class="btn btn-success"><i class="fa fa-chevron-left"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- /.box (chat box) -->

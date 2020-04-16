<!-- right side column. contains the logo and sidebar -->

<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="http://vazhenegar.com/images/site/user.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>ایرج آذروند</p>
                <a id="UserMode"><i class="fa fa-circle text-success"></i>آنلاین
                </a>
            </div>
        </div>



        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="header">منو</li>
            <li>
                <a href="http://vazhenegar.com/dashboard">
                    <i class="fa fa-home"></i>
                    <span> داشبورد</span>
                </a>
            </li>


            <li class="treeview active menu-open">
                <a id="سفارشات" href="">
                    <i class="fa fa-file-text"></i>
                    <span>سفارشات</span>
                    <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a id="جدید" href="/dashboard/NewRegisteredOrders">
                            <i class="fa fa-star"></i>
                            <span>جدید</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow">1</small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="دریافتی" href="/dashboard/PaidInvoicesList">
                            <i class="fa fa-bullseye"></i>
                            <span>دریافتی</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green">0</small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="در حال انجام" href="/in progress">
                            <i class="fa fa-clock-o"></i>
                            <span>در حال انجام</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="لغو شده" href="/rejected">
                            <i class="fa fa-exclamation-triangle"></i>
                            <span>لغو شده</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="تکمیل شده" href="/done">
                            <i class="fa fa-certificate"></i>
                            <span>تکمیل شده</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="تحویل شده" href="/delivered">
                            <i class="fa fa-check-square-o"></i>
                            <span>تحویل شده</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview active menu-open">
                <a id="کاربران" href="">
                    <i class="fa fa-users"></i>
                    <span>کاربران</span>
                    <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a id="لیست کاربران" href="/users">
                            <i class="fa fa-list"></i>
                            <span>لیست کاربران</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="درخواست همکاری" href="/employment request">
                            <i class="fa fa-user-plus"></i>
                            <span>درخواست همکاری</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow">0</small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview active menu-open">
                <a id="پیام ها" href="">
                    <i class="fa fa-comments"></i>
                    <span>پیام ها</span>
                    <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a id="نوشتن پیام" href="/compose">
                            <i class="fa fa-commenting"></i>
                            <span>نوشتن پیام</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="دریافتی" href="/inbox">
                            <i class="fa fa-envelope"></i>
                            <span>دریافتی</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="ارسالی" href="/sent">
                            <i class="fa fa-paper-plane"></i>
                            <span>ارسالی</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="پیش نویس ها" href="/draft">
                            <i class="fa fa-wpforms"></i>
                            <span>پیش نویس ها</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="حذف شده" href="/trash">
                            <i class="fa fa-trash"></i>
                            <span>حذف شده</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview active menu-open">
                <a id="امور مالی و حسابداری" href="">
                    <i class="fa fa-dollar"></i>
                    <span>امور مالی و حسابداری</span>
                    <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a id="گردش مالی" href="/finance">
                            <i class="fa fa-money"></i>
                            <span>گردش مالی</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="دریافت و پرداخت" href="/transaction">
                            <i class="fa fa-usd"></i>
                            <span>دریافت و پرداخت</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview active menu-open">
                <a id="تنظیمات" href="">
                    <i class="fa fa-cogs"></i>
                    <span>تنظیمات</span>
                    <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a id="سفارشات" href="/orders setting">
                            <i class="fa fa-shopping-basket"></i>
                            <span>سفارشات</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="کاربران" href="/users setting">
                            <i class="fa fa-user-circle-o"></i>
                            <span>کاربران</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="پیام ها" href="/emails setting">
                            <i class="fa fa-envelope-o"></i>
                            <span>پیام ها</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="مالی و حسابداری" href="/finance setting">
                            <i class="fa fa-area-chart"></i>
                            <span>مالی و حسابداری</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="زبان ها" href="/languages setting">
                            <i class="fa fa-language"></i>
                            <span>زبان ها</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                    <li><a id="زمینه ها" href="/fields setting">
                            <i class="fa fa-tasks"></i>
                            <span>زمینه ها</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="treeview active menu-open">
                <a id="راهنما" href="">
                    <i class="fa fa-question-circle"></i>
                    <span>راهنما</span>
                    <span class="pull-left-container">
                            <i class="fa fa-angle-right pull-left"></i>
                        </span>
                </a>
                <ul class="treeview-menu">
                    <li><a id="راهنمای مدیر" href="/admin guide">
                            <i class="fa fa-info-circle"></i>
                            <span>راهنمای مدیر</span>
                            <span class="pull-left-container">
                                          <small id="yellow" class="label pull-left bg-yellow"></small>
                                          <small id="green" class="label pull-left bg-green"></small>
                                          <small id="red" class="label pull-left bg-red"></small>
                                        </span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

{{-- initialize badges and menus with data that sent from dashboard main page--}}

{{--    For badges and menus--}}
<script>
    //admin
    let allNewRegisteredOrders = @json(count(DashboardCurrentUser::$allNewRegisteredOrders['orders']));
    let employmentRequest =@json(DashboardCurrentUser::$employmentRequest);
    let OnlineUsers =@json(DashboardCurrentUser::$OnlineUsers);
    let SiteVisitors =@json(DashboardCurrentUser::$SiteVisitors);
    let PaidInvoices=@json(count(DashboardCurrentUser::$PaidInvoices));

    //customer
    let CurrentCustomerId =@json(DashboardCurrentUser::$CurrentUser->id);
    let CustomerRegisteredOrders =@json(count(DashboardCurrentUser::$CustomerRegisteredOrders));
    let invoices =@json(count(DashboardCurrentUser::$CustomerInvoices));


    function setBadgeMenuValues(element_id,value,color) {
        if(document.getElementById(element_id)){
           if(color){
               document.getElementById(element_id).querySelector('#'+color).innerHTML=value;
           }else{
               document.getElementById(element_id).innerHTML=value;
           }
        }
    }
    function setdata() {
        setBadgeMenuValues("NewOrders",allNewRegisteredOrders);
        setBadgeMenuValues("جدید",allNewRegisteredOrders,"yellow");
        setBadgeMenuValues("NewEmployment",employmentRequest);
        setBadgeMenuValues("درخواست همکاری",employmentRequest,"yellow");
        setBadgeMenuValues("OnlineUsers",OnlineUsers);
        setBadgeMenuValues("SiteVisitors", SiteVisitors);
        setBadgeMenuValues("دریافتی",PaidInvoices,"green");

        setBadgeMenuValues("CustomerNewOrders", CustomerRegisteredOrders);
        setBadgeMenuValues("CustomerInvoices", invoices);
        setBadgeMenuValues("فاکتور", invoices,"yellow");
    }

    setdata();


    {{--  ====================  Refresh dashboard data every 30 seconds ===================--}}
        {{--  ====================  for new orders ===================--}}

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/AllNewRegisteredOrders',
                success: function (data) {
                    allNewRegisteredOrders=data['orders'].length;
                    setdata();
                }
            });
        }, 30000);

    {{--  ====================  for online users ===================--}}

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/GetOnlineUsers',
                success: function (data) {
                    OnlineUsers=data;
                    setdata();

                }
            });
        }, 30000);


    {{--  ====================  for new employments ================--}}

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/NewEmployments',
                success: function (data) {
                    employmentRequest=data;
                    setdata();
                }
            });
        }, 30000);

    {{-- ===================   for daily visitors ===============--}}

        let day = 1;
        let token = "{{ csrf_token() }}";
        setInterval(function () {
            $.ajax({
                type: "POST",
                url: '/GetSiteVisitors/' + day,
                data: {_token: token},
                success: function (data) {
                    SiteVisitors=data;
                    setdata();
                }
            });
        }, 30000);


    {{--  ====================  for orders that invoices already paid ================--}}

    setInterval(function () {
        $.ajax({
            type: "GET",
            url: '/dashboard/PaidInvoices',
            success: function (data) {
                PaidInvoices=data.length;
                setdata();
            }
        });
    }, 30000);
</script>
{{--    End of admin badges and menus--}}
{{--==============================================--}}
{{--For customer badges and menus--}}
<script>

      // ====================  Refresh dashboard data every 30 seconds ===================
      //     ====================  for customer New Orders ===================

        setInterval(function () {
            $.ajax({
                type: "GET",
                url: '/CustomersRegisteredOrders/' + CurrentCustomerId,
                success: function (data) {
                    CustomerRegisteredOrders=data.length;
                    setdata();
                }
            });
        }, 30000);

      // ====================  for customer invoices ===================

        let status_id = 2;
        setInterval(function () {
            $.ajax({
                type: "GET",
                url: 'Invoices/' + CurrentCustomerId + '/'+ status_id,
                success: function (data) {
                    invoices=data.length;
                    setdata();
                }
            });
        }, 30000);

    //     End of customer badges and menus
    // ==============================================

</script>


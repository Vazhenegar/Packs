{{--these contents will include in dashboard master layout --}}

@include('admin.elements.DashboardAdminBadges')

<!-- Main row -->
<div class="row">
    <!-- right col -->
    <section class="col-lg-7 connectedSortable">
        @include('admin.elements.DashboardCharts')
        @include('admin.elements.DashboardEmailWidget')
    </section>
    <!-- /.right col -->


    <!-- left col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-5 connectedSortable">
        @include('admin.elements.DashboardCalendar')
        @include('admin.elements.DashboardChatBox')
    </section>
    <!-- left col -->

</div>


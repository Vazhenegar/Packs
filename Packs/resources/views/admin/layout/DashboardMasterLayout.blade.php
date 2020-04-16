<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{--    css files --}}
    @include('admin.layout.DashboardCoreCss')

</head>

<body class="hold-transition skin-blue sidebar-mini">

    <div class="wrapper">

        {{--=========================================================--}}

        @include('admin.elements.DashboardTopBar')

        {{--=========================================================--}}

        @include('admin.elements.DashboardRightSideBar')

        {{--=========================================================--}}

        @include('admin.elements.DashboardLeftSideBar')


        {{--   main content of dashboard      --}}
        <div class="content-wrapper">
            <!-- Main content -->
            <section class="content">
                @section('content')
                @show
            </section>
        </div>
    </div>

@include('admin.scripts.DashboardCoreScripts')
{{-- script for initialize badges with data --}}
{{--@include('admin.scripts.DashboardBadgesAndMenusQuantification')--}}
</body>
</html>

@extends('admin.layout.DashboardMasterLayout')
@section('content')

{{--@include('vazhenegar.DashboardCurrentUser')--}}

{{--@switch(DashboardCurrentUser::$CurrentUser->role()->value('id'))--}}
        {{--=============================== ِ Admin =======================================--}}

            @include('admin.DashboardAdminIndex')

{{--=============================== ِ Translator =======================================--}}
{{--@endswitch--}}
@endsection

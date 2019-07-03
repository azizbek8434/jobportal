<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('include.head')
</head>

<body>
    <!-- START nav -->
    @include('include.header')
    <!-- END nav -->
    <!-- START content -->
    @yield('content')
    <!-- END content -->
    <!-- START footer -->
    @include('include.footer')
    <!-- END footer -->
    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>
    @include('include.scripts')
</body>

</html>

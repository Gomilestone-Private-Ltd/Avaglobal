<!doctype html>
<html class="no-js " lang="en">
    @include('admin.layouts.header')
    @include('admin.layouts.sidebar')

    <body class="theme-blush">
        @include('admin.layouts.loader')
        @yield('content')
    </body>

</html>

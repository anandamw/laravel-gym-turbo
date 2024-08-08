<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Yoga Shop - Avone Multipurpose eCommerce Bootstrap 4 Html Template</title>
    <meta name="description" content="description">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('') }}assets_users/images/favicon.png" />
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets_users/css/plugins.css">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('') }}assets_users/css/style.css">
    <link rel="stylesheet" href="{{ asset('') }}assets_users/css/responsive.css">
</head>

<body class="template-index index-yoga-shop">
    <div id="pre-loader">
        <img src="{{ asset('') }}assets_users/images/loader.gif" alt="Loading..." />
    </div>

    @include('users.layouts.navbar')

    @yield('content')
    <!--End Quickview Popup-->

    @include('users.layouts.scrollbar')



    <!-- Including Jquery -->
    <script src="{{ asset('') }}assets_users/js/vendor/jquery-min.js"></script>
    <script src="{{ asset('') }}assets_users/js/vendor/js.cookie.js"></script>
    <!--Including Javascript-->
    <script src="{{ asset('') }}assets_users/js/plugins.js"></script>
    <script src="{{ asset('') }}assets_users/js/main.js"></script>

</body>

<!-- Mirrored from www.annimexweb.com/items/avone/index-yoga-shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Jul 2024 18:44:19 GMT -->

</html>

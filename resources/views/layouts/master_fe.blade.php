<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="Koperasi KBN" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Multi-purpose energy html5 template" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('title')

    <link href="/assets/images/favicon/favicon.png" rel="icon" />
    <!--  Fonts ==
    -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />
    <!--  Stylesheets==
    -->
    <!-- <link href="assets/css/vendor.min.css" rel="stylesheet"/> -->
    <!-- <link href="assets/css/style.css" rel="stylesheet"/> -->
    <link href="{{ asset('css/base.css') }}" rel="stylesheet">

    @stack('additional_css')

</head>

<body>
    <div class="preloader">
        <div class="dual-ring"></div>
    </div>

    @yield('content')

    <script src="{{ asset('js/base.js') }}"></script>
    @stack('additional_js')
</body>

</html>

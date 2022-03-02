<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>KOPERASI | Login</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="icon" href="/css/icon.png" type="image/gif" sizes="25x25">
    <style>
        a {
            color: #cfd8dc;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline !important;
        }
    </style>
</head>

<body>
    @yield('content')
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>

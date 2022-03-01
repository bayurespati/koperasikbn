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

    <!-- <style>
        @media only screen and (min-width: 992px) and (max-width: 1200px) {
            .navbar-nav>li {
                margin-right: 16px;
            }

            .module .module-icon,
            .module-consultation .btn {
                margin-right: 0;
            }
        }

        @media only screen and (min-width: 992px) {
            .navbar-collapse {
                padding-right: 0;
                padding-left: 0;
            }

            /* Menu with Dropdown */
            .navbar-nav>li.has-dropdown>ul.dropdown-menu {
                -webkit-box-shadow: 0px 5px 41.5px rgba(40, 40, 40, 0.11);
                box-shadow: 0px 5px 41.5px rgba(40, 40, 40, 0.11);
                -webkit-transition: all 300ms linear;
                -o-transition: all 300ms linear;
                transition: all 300ms linear;
                opacity: 0;
                visibility: hidden;
                position: absolute;
                left: -40px;
                right: auto;
                -webkit-transform-origin: left top;
                -ms-transform-origin: left top;
                transform-origin: left top;
                -webkit-transform: translateY(20px);
                -ms-transform: translateY(20px);
                transform: translateY(20px);
                display: block;
                width: 235px;
                padding: 24px 40px 25px;
                background-color: var(--global--color-white);
                border-radius: 0px 0px 8px 8px;
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu>li {
                padding-right: 0;
                position: relative;
                vertical-align: top;
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a {
                -webkit-transition: 0.3s ease-in-out;
                -o-transition: 0.3s ease-in-out;
                transition: 0.3s ease-in-out;
                position: relative;
                font-family: var(--global--font-body);
                color: var(--global--color-body);
                padding: 10px 0px 9px 0;
                display: block;
                font-size: 14px;
                font-weight: 400;
                -webkit-transition: all 300ms ease-in-out;
                -o-transition: all 300ms ease-in-out;
                transition: all 300ms ease-in-out;
                text-transform: capitalize;
                border-radius: 0;
                border-bottom: 1px solid #eaeaea;
                position: relative;
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a::before {
                content: '\e905';
                color: var(--global--color-primary);
                font-family: 'energia';
                position: absolute;
                top: 50%;
                left: -22px;
                font-size: 12px;
                opacity: 0;
                visibility: hidden;
                -webkit-transform: translate(-5px, -50%);
                -ms-transform: translate(-5px, -50%);
                transform: translate(-5px, -50%);
                -webkit-transition: 0.3s ease-in-out;
                -o-transition: 0.3s ease-in-out;
                transition: 0.3s ease-in-out;
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a::after {
                content: '';
                position: absolute;
                bottom: -1px;
                left: 0;
                height: 1px;
                width: 0px;
                -webkit-transition: 0.3s ease;
                -o-transition: 0.3s ease;
                transition: 0.3s ease;
                background-color: var(--global--color-primary);
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:active,
            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:focus,
            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:hover {
                color: var(--global--color-primary);
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:active::before,
            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:focus::before,
            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:hover::before {
                visibility: visible;
                opacity: 1;
                -webkit-transform: translate(0px, -50%);
                -ms-transform: translate(0px, -50%);
                transform: translate(0px, -50%);
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:active::after,
            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:focus::after,
            .navbar-nav>li.has-dropdown>ul.dropdown-menu li a:hover::after {
                width: 100%;
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li:last-child a {
                border-bottom: 0;
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li:last-child a::after {
                content: unset;
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li.current>a {
                border-color: var(--global--color-primary);
                color: var(--global--color-primary);
            }

            .navbar-nav>li.has-dropdown>ul.dropdown-menu li.current>a::before {
                visibility: visible;
                opacity: 1;
                -webkit-transform: translate(0px, -50%);
                -ms-transform: translate(0px, -50%);
                transform: translate(0px, -50%);
            }

            .navbar-nav>li.has-dropdown:hover>ul.dropdown-menu {
                opacity: 1;
                visibility: visible;
                -webkit-transform: translateY(0);
                -ms-transform: translateY(0);
                transform: translateY(0);
                z-index: 100;
                display: block;
            }

            .navbar-nav li ul.dropdown-menu.left {
                left: -650px !important;
                margin-left: 0 !important;
            }

            .navbar-nav li.has-dropdown.mega-dropdown>.dropdown-menu {
                background-color: var(--global--color-white);
                padding: 0;
                width: 510px;
            }

            .navbar-nav li.has-dropdown.mega-dropdown>.dropdown-menu li {
                padding-left: 0;
                padding-right: 0;
            }

            .navbar-nav li.has-dropdown.mega-dropdown>.dropdown-menu .row {
                background-color: var(--global--color-white);
                margin-right: 0;
                margin-left: 0;
                padding: 35px 23px;
            }

            .navbar-nav li.has-dropdown.mega-dropdown>.dropdown-menu .row .menu-head {
                font-size: 14px;
                font-family: var(--global--font-heading);
                font-weight: 700;
                color: var(--global--font-heading);
                text-transform: capitalize;
                margin-bottom: 15px;
            }

            .navbar-nav li.has-dropdown.mega-dropdown>.dropdown-menu .row ul {
                margin: 0;
                padding: 0;
            }

            .navbar-nav li.has-dropdown.mega-dropdown>.dropdown-menu .row ul li {
                line-height: 2.5;
            }

            .navbar-nav li.has-dropdown.mega-dropdown>.dropdown-menu .row ul li.title {
                color: var(--global--color-heading);
                font-size: 13px;
                font-weight: 600;
                text-transform: capitalize;
            }

            .navbar-nav li.has-dropdown.mega-dropdown>.dropdown-menu .row ul li a {
                margin: 0;
            }

            .navbar-nav.ml-auto.mr-auto li.has-dropdown.mega-dropdown {
                position: absolute;
            }

            .navbar-nav.ml-auto:not(.mr-auto) li.has-dropdown.mega-dropdown {
                position: relative;
            }
        }
    </style> -->
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

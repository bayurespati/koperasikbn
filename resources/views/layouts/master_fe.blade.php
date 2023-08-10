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

    <style>
        .energia-arrow-right {
            margin-left: 10px;
        }
    </style>

    <style>
        .top-bar .social-links a:hover img {
            -webkit-transform: scale(0.9);
            -ms-transform: scale(0.9);
            transform: scale(0.9);
        }

        .top-bar .social-links a img {
            display: -webkit-inline-box;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-transition: 0.3s ease-in-out;
            -o-transition: 0.3s ease-in-out;
            transition: 0.3s ease-in-out;
        }

        .footer-copyright .copyright .social-icons li a:hover img {
            filter: invert(63%) sepia(58%) saturate(494%) hue-rotate(91deg) brightness(89%) contrast(94%);
        }

        .footer-copyright .copyright .social-icons li a img {
            font-size: 20px;
            margin-right: 10px;
            filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(76deg) brightness(107%) contrast(102%);
            -webkit-transition: 0.3s ease-in-out;
            -o-transition: 0.3s ease-in-out;
            transition: 0.3s ease-in-out;
        }

        .page-title .page-title-wrap.banner_all {
            height: 400px;
            background-color: #32c36c;
        }

        @media screen and (max-width: 991.98px) {
            .page-title .page-title-wrap.banner_all {
                height: 200px;
                padding-top: 45px;
            }
        }
    </style>
    @stack('additional_css')

</head>

<body>
    <div class="preloader">
        <div class="dual-ring"></div>
    </div>

    @yield('content')

    <script src="{{ asset('js/base.js') }}"></script>
    <script type="text/javascript">
        if (Cookies.get('current_lang') == undefined) {
            Cookies.set('current_lang', 'id', {
                expires: 30
            });
        } else if (Cookies.get('current_lang') == 'id') {

        } else if (Cookies.get('current_lang') == 'eng') {

        } else {
            Cookies.set('current_lang', 'id', {
                expires: 30
            });
        }

        $('#button-lang-id').on('click', function() {
            Cookies.set('current_lang', 'id', {
                expires: 30
            });

            location.reload();
        });

        $('#button-lang-eng').on('click', function() {
            Cookies.set('current_lang', 'eng', {
                expires: 30
            });

            location.reload();
        });
    </script>
    @stack('additional_js')

    <script type="text/javascript">
        function logoutFunc() {
            let data = {
                _token: "{{ csrf_token() }}",
            };

            $.post('/logout', data)
                .done(function(response) {
                    window.location = '/';
                }).fail(function(error) {
                }).always(function() {});
        }
    </script>
</body>

</html>

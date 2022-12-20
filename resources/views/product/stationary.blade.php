@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Produk Kami - Alat Tulis Kantor (ATK)</title>
@endpush

@push('additional_css')
<style>
    .custom-active-widget a {
        color: var(--global--color-white) !important;
    }

    .custom-active-widget a::before {
        -webkit-transform: scaleX(1) !important;
        -ms-transform: scaleX(1) !important;
        transform: scaleX(1) !important;
        -webkit-transform-origin: left center !important;
        -ms-transform-origin: left center !important;
        transform-origin: left center !important;
    }

    .custom-active-widget a i {
        background-color: var(--global--color-white) !important;
        color: var(--global--color-primary) !important;
    }
</style>
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #11 Section
      ============================
      -->
    <section class="page-title page-title-11" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section"><img src="/assets/images/page-titles/11.jpg" alt="Background" /></div>
            <div class="container">
                @if(Cookie::get('current_lang') == 'eng')
                <div class="title">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h1 class="title-heading">Supply Office Supplies</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <p class="title-desc">
                                Supply of Office Stationery and Prints
                                for PT. KBN (Persero) and Subsidiary PT.
                                KBN (Persero) and investors who are in
                                PT. Nusantara Bonded Zone (Persero).
                            </p>
                        </div>
                    </div>
                </div>
                @else
                <div class="title">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h1 class="title-heading">Supply Kebutuhan Alat Kantor</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <p class="title-desc">
                                Supply Kebutuhan Alat Tulis Kantor dan Cetakan
                                untuk PT. KBN (Persero) dan Anak Perusahaan PT.
                                KBN (Persero) serta investor-investor yang ada dalam
                                lingkungan PT. Kawasan Berikat Nusantara (Persero).
                            </p>
                        </div>
                    </div>
                </div>
                @endif
                <!-- End .row-->
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    @if(Cookie::get('current_lang') == 'eng')
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Our Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Supply for office supplies</li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Produk Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Supply Kebutuhan Alat Kantor</li>
                    @endif
                </ol>
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->
    <!--
      ============================
      Services Single Section
      ============================
      -->
    <section class="service-single" id="service-single">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 order-1">
                    <!--
              ============================
              Services Sidebar
              ============================
              -->
                    <div class="sidebar sidebar-service">
                        <!-- Services-->
                        @if(Cookie::get('current_lang') == 'eng')
                        <div class="widget widget-services">
                            <div class="widget-title">
                                <h5>Our Products</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('minimart') }}"> <span>Canteen and Hawker Management</span></a></li>
                                    <li><a href="{{ route('cleaning-service') }}"> <span>Cleaning Workforce Management</span></a></li>
                                    <li><a href="{{ route('driver') }}"> <span>Service Vehicle Rentals</span></a></li>
                                    <li><a href="{{ route('administration-staff') }}"> <span>Ticketing and Hotel Reservations</span></a></li>
                                    <li class="custom-active-widget"><a href="#"> <span>Supply Office Supplies</span></a></li>
                                    <li><a href="{{ route('gardening') }}"> <span>Drinking Water and Gallons and Bottles Providers</span></a></li>
                                </ul>
                            </div>
                        </div>
                        @else
                        <div class="widget widget-services">
                            <div class="widget-title">
                                <h5>Produk Kami</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="{{ route('minimart') }}"> <span>Pengelolaan Kantin dan Pedagang Asongan</span></a></li>
                                    <li><a href="{{ route('cleaning-service') }}"> <span>Pengelolaan Tenaga Kerja Kebersihan</span></a></li>
                                    <li><a href="{{ route('driver') }}"> <span>Penyewaan Kendaraan Dinas</span></a></li>
                                    <li><a href="{{ route('administration-staff') }}"> <span>Ticketing dan Reservasi Hotel</span></a></li>
                                    <li class="custom-active-widget"><a href="#"> <span>Supply Kebutuhan Alat Kantor</span></a></li>
                                    <li><a href="{{ route('gardening') }}"> <span>Penyedia Air Minum dan Galon dan Botol</span></a></li>
                                </ul>
                            </div>
                        </div>
                        @endif
                        <!-- End .widget-services -->

                        @if(Cookie::get('current_lang') == 'eng')
                        <div class="widget widget-reservation"><img src="/assets/images/blog/sidebar/reservation.jpg" alt="img" />
                            <div class="widget-content"><i class="flaticon-040-green-energy"></i>
                                <p>Please contact our friendly reception staff with your questions</p>
                                <a class="btn btn--bordered btn--white" href="{{ route('contact') }}">Contact KBN Cooperative CS</a>
                                <a href="tel:02144820909"><span class="energia-phone-Icon"></span> (021) 4482-0909</a> <span style="color: white;">ext. 5101 to 5108</span>
                            </div>
                        </div>
                        @else
                        <div class="widget widget-reservation"><img src="/assets/images/blog/sidebar/reservation.jpg" alt="img" />
                            <div class="widget-content"><i class="flaticon-040-green-energy"></i>
                                <p>Silakan hubungi staf resepsi kami yang ramah dengan pertanyaan anda</p>
                                <a class="btn btn--bordered btn--white" href="{{ route('contact') }}">Hubungi CS Koperasi KBN</a>
                                <a href="tel:02144820909"><span class="energia-phone-Icon"></span> (021) 4482-0909</a> <span style="color: white;">ext. 5101 s/d 5108</span>
                            </div>
                        </div>
                        @endif

                        <div class="widget widget-download">
                            <div class="widget-title">
                                <h5>download brochure</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li class="inversed">
                                        <a href="{{ Request::root() . '/assets/company_profile_kopkar_KBN.pdf' }}" download>
                                            <span>company brochure</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 18" width="18" height="18">
                                                <g>
                                                    <g>
                                                        <g>
                                                            <path class="shp0" d="M2.12 2L2.93 1L14.93 1L15.87 2L2.12 2ZM9 14.5L3.5 9L7 9L7 7L11 7L11 9L14.5 9L9 14.5ZM17.54 2.23L16.15 0.55C15.88 0.21 15.47 0 15 0L3 0C2.53 0 2.12 0.21 1.84 0.55L0.46 2.23C0.17 2.57 0 3.02 0 3.5L0 16C0 17.1 0.9 18 2 18L16 18C17.1 18 18 17.1 18 16L18 3.5C18 3.02 17.83 2.57 17.54 2.23Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End .sidebar-->
                </div>
                <div class="col-12 col-lg-8 order-0 order-lg-2">
                    <!-- Start .service-entry-->
                    @if(Cookie::get('current_lang') == 'eng')
                    <div class="service-entry">
                        <div class="entry-content">
                            <div class="entry-introduction entry-infos">
                                <h5 class="entry-heading">overview</h5>
                                <p class="entry-desc">
                                    Started as a Supporting Business providing Office Stationery for PT. Kawasan Berikat Nusantara (Persero), until now Kopkar KBN is able to provide ATK needs for Tenants in the Area and outside the Area by synchronizing the PADI Platform which is the Government's Online Shop as a sales base for ATK Kopkar KBN products.
                                </p>
                                <p class="entry-desc" style="margin-bottom: 0;">
                                    How to Purchase:
                                </p>
                                <ul class="list-unstyled advantages-list" style="margin-bottom: 30px;">
                                    <li>
                                        Offline: Come directly to the KBN Kopkar Office
                                    </li>
                                    <li>
                                        Online : Through the Government-Owned Online Shop Platform, namely&nbsp;<span><a href="https://padiumkm.id/store/631a5db28755a8a98960aa89" target="_blank">PADI UMKM</a></span>
                                    </li>
                                </ul>
                                <p class="entry-desc">
                                    We also serve companies that are interested in collaborating with Drop Point with a monthly billing system.
                                </p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="service-entry">
                        <div class="entry-content">
                            <div class="entry-introduction entry-infos">
                                <h5 class="entry-heading">gambaran</h5>
                                <p class="entry-desc">
                                    Diawali sebagai Usaha Supporting penyediaan Alat Tulis Kantor untuk PT. Kawasan Berikat Nusantara (Persero), hingga saat ini Kopkar KBN mampu menyediakan kebutuhan-kebutuhan ATK bagi Tenan-tenan dalam Kawasan maupun diluar Kawasan dengan sinkronisasi Platform PADI yang merupakan Online Shop milik Pemerintah sebagai basis penjualan produk-produk ATK Kopkar KBN.
                                </p>
                                <p class="entry-desc" style="margin-bottom: 0;">
                                    Cara Pembelian:
                                </p>
                                <ul class="list-unstyled advantages-list" style="margin-bottom: 30px;">
                                    <li>
                                        Offline : Datang langsung Ke Kantor Kopkar KBN
                                    </li>
                                    <li>
                                        Online : Melalui Platform Online Shop Milik Pemerintah yaitu&nbsp;<span><a href="https://padiumkm.id/store/631a5db28755a8a98960aa89" target="_blank">PADI UMKM</a></span>
                                    </li>
                                </ul>
                                <p class="entry-desc">
                                    Kami juga melayani Perusahaan-Perusahaan yang berminat melakukan kerjasama Drop Point dengan sistem tagihan bulanan.
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    <!-- End .service-entry-->

                    <div class="row">
                        <div class="col-12">
                            <div class="video video-1 bg-overlay bg-overlay-video" id="video-1">
                                <div class="bg-section">
                                    <img src="{{ Request::root() . '/assets/images/video/produk.png' }}" alt="background" />
                                </div>
                                <a class="popup-video btn-video" href="{{ Request::root() . '/video/produk.mp4' }}">
                                    <i class="fas fa-play"></i>
                                    <span>
                                        @if(Cookie::get('current_lang') == 'eng')
                                        our product
                                        @else
                                        produk kami
                                        @endif
                                    </span>
                                </a>
                                <!-- End .popup-video-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-8-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Produk Kami - Cleaning Service</title>
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
                            <h1 class="title-heading">Cleaning Workforce Management</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <p class="title-desc">
                                Cleaning Workforce Management (Cleaning
                                Service, Office Boy, Street Sweeping and others)
                                which are mainly placed in the environment of PT.
                                Nusantara Bonded Zone (Persero).
                            </p>
                        </div>
                    </div>
                </div>
                @else
                <div class="title">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h1 class="title-heading">CLEANING SERVICE</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-5">
                            <p class="title-desc">
                                Cleaning service merupakan sebuah layanan kebersihan, kerapihan serta 
                                higienis pada sebuah gedung, perkantoran, rumah sakit, hotel, apartement 
                                atau bangunan yang lainnya baik untuk area indoor atau outdoor sehingga 
                                tercipta suasana bersih, nyaman, fresh guna menunjang aktifitas Anda. 
                                Selain itu, cleaning service juga berguna untuk menjaga semua barang-
                                barang didalamnya sehingga barang-barang tersebut jadi bersih dan terawat. 
                                Koperasi telah lebih dari 25 tahun menjadi partner PT. Kawasan Berikat 
                                Nusantara dan Anak Perusahaan PT. KBN.
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
                    <li class="breadcrumb-item active" aria-current="page">Cleaning Workforce Management</li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Produk Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cleaning Service</li>
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
                                    <li class="custom-active-widget"><a href="#"> <span>Cleaning Workforce Management</span></a></li>
                                    <li><a href="{{ route('driver') }}"> <span>Service Vehicle Rentals</span></a></li>
                                    <li><a href="{{ route('administration-staff') }}"> <span>Ticketing and Hotel Reservations</span></a></li>
                                    <li><a href="{{ route('stationary') }}"> <span>Supply Office Supplies</span></a></li>
                                    <li><a href="{{ route('drinks') }}"> <span>Drinking Water and Gallons and Bottles Providers</span></a></li>
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
                                    <li><a href="{{ route('minimart') }}"> <span>Minimarket</span></a></li>
                                    <li class="custom-active-widget"><a href="#"> <span>Cleaning Service</span></a></li>
                                    <li><a href="{{ route('driver') }}"> <span>Driver</span></a></li>
                                    <li><a href="{{ route('administration-staff') }}"> <span>Staf Administrasi</span></a></li>
                                    <li><a href="{{ route('stationary') }}"> <span>ATK (Alat Tulis Kantor)</span></a></li>
                                    <li><a href="{{ route('drinks') }}"> <span>Penyewaan Mesin Fotocopy</span></a></li>
                                    <li><a href="{{ route('surat') }}"> <span>Pengurusan Jasa Surat Kendaraan</span></a></li>
                                    <li><a href="{{ route('simpan') }}"> <span>Simpan Pinjam</span></a></li>
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
                                    Cleanliness, tidiness and hygiene in an institution, company or other building, both for indoor and outdoor areas so as to create a clean, comfortable, tidy atmosphere, all of which are for the sake of increasing employee productivity and the effectiveness of your daily activities. In addition, cleaning services are also useful for keeping all the items in it neat and well-maintained, so that these items can be used for a longer period of time without significant damage.
                                </p>
                                <p class="entry-desc">
                                    Your company or workplace can only enjoy the best service from the Labor Services that we send. Without bothering you to hold labor recruitment. You also don't have to worry about costs.
                                </p>
                                <p class="entry-desc" style="margin-bottom: 0;">
                                    Advantages of Using Our Cleaning Services:
                                </p>
                                <ul class="list-unstyled advantages-list" style="margin-bottom: 30px;">
                                    <li>
                                        Qualified Workforce
                                    </li>
                                    <li>
                                        Serving Clients Well
                                    </li>
                                    <li>
                                        Maximum Service
                                    </li>
                                    <li>
                                        The tools used are standard and complete
                                    </li>
                                    <li>
                                        Covered By Insurance
                                    </li>
                                    <li>
                                        Save cost
                                    </li>
                                    <li>
                                        Satisfying results and the best solution
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="service-entry">
                        <div class="entry-content">
                            <div class="entry-introduction entry-infos">
                                <h5 class="entry-heading">gambaran</h5>
                                <p class="entry-desc">
                                    Kebersihan, kerapihan serta higienitas pada sebuah instansi, perusahaan atau bangunan yang lain, baik untuk area dalam ruang atau luar ruang sehingga tercipta suasana bersih, nyaman, rapi yang semua itu demi guna menunjang meningkatnya produktifitas karyawan dan efektifitas kegiatan keseharian Anda. Selain itu, cleaning service juga berguna untuk menjaga semua barang-barang di dalamnya agar tetap rapi dan terawat, sehingga barang-barang tersebut dapat dipergunakan dalam jangka waktu yang lebih lama tanpa kerusakan berarti.
                                </p>
                                <p class="entry-desc">
                                    Perusahaan atau tempat kerja Anda tinggal menikmati pelayanan terbaik dari tenaga Jasa Tenaga Kerja yang kami kirimkan. Tanpa repot-repot Anda mengadakan rekruitment tenaga kerja. Anda juga tidak perlu khawatir mengenai biaya.
                                </p>
                                <p class="entry-desc" style="margin-bottom: 0;">
                                    Keuntungan Menggunakan Jasa Penyediaan Tenaga Kebersihan Kami:
                                </p>
                                <ul class="list-unstyled advantages-list" style="margin-bottom: 30px;">
                                    <li>
                                        Tenaga Kerja yang Berkualitas
                                    </li>
                                    <li>
                                        Melayani Klien dengan Baik
                                    </li>
                                    <li>
                                        Pelayanan yang Maksimal
                                    </li>
                                    <li>
                                        Alat yang digunakan sesuai standard dan lengkap
                                    </li>
                                    <li>
                                        Dilindungi Oleh Asuransi
                                    </li>
                                    <li>
                                        Menghemat Biaya
                                    </li>
                                    <li>
                                        Hasil yang memuaskan dan solusi terbaik
                                    </li>
                                </ul>
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

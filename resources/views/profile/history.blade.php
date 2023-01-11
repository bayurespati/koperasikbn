@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN -Profil Koperasi - Sejarah Singkat</title>
@endpush

@push('additional_css')
<style>
    .paragraph {
        font-size: 17px;
        line-height: 27px;
        color: var(--global--color-secondary);
        font-weight: 500;
        margin-bottom: 30px;
    }

    .paragraph_history {
        margin-bottom: 25px !important;
        font-size: 18px !important;
        text-align: justify;
    }

    .advantages-list li::before {
        background-color: transparent;
        color: #32c36c;
        width: 0px;
        height: 0px;
        margin-right: 20px;
    }

    .advantages-list li {
        line-height: 26px !important;
        margin-right: 0px;
        font-family: var(--global--font-body);
        color: var(--global--color-body);
        font-size: 18px !important;
        text-align: justify;
        font-weight: 400;
        line-height: 28px;
    }

    .about-img {
        margin-bottom: 0;
    }

    .features .advantages-list li,
    .feature .paragraph {
        color: white !important;
    }

    .about {
        padding-top: 80px;
        padding-bottom: 80px;
    }
</style>
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #1 Section
      ============================
      -->
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2 banner_all">
            <div class="bg-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            @if(Cookie::get('current_lang') == 'eng')
                            <h1 class="title-heading">A Brief History</h1>
                            @else
                            <h1 class="title-heading">Sejarah Singkat</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    @if(Cookie::get('current_lang') == 'eng')
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Cooperative Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Brief History</li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil Koperasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sejarah Singkat</li>
                    @endif
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->
    <!--
      ============================
      About #1 Section
      ============================
      -->
    <section class="about about-1" id="about-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="/assets/images/about/1.jpg" alt="about Image" /></div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="heading heading-1">
                        <h2 class="heading-title">
                            @if(Cookie::get('current_lang') == 'eng')
                            A Brief History
                            @else
                            Sejarah Singkat
                            @endif
                        </h2>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="block-left">
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <p class="paragraph" style="font-size: 21px;">
                                        Employee Cooperative PT. Bonded zone
                                        Nusantara (Persero) or called Kopkar KBN
                                        established in 1989.
                                    </p>
                                    @else
                                    <p class="paragraph" style="font-size: 21px;">
                                        Koperasi Karyawan PT. Kawasan Berikat
                                        Nusantara (Persero) atau disebut Kopkar KBN
                                        berdiri pada tahun 1989.
                                    </p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="block-right">
                                </div>
                            </div>
                            <div class="col-12">
                                @if(Cookie::get('current_lang') == 'eng')
                                <p class="paragraph_history">
                                    Initiated by
                                    BUMN employees who at that time were employees
                                    Stay PT. Nusantara Bonded Zone (Persero)
                                    Cakung. The principle of benefit in organizing for
                                    achieve the lofty ideals of prosperity
                                    Employees in particular and the public at
                                    generally, especially the local community
                                    living around the Archipelago Bonded Zone.
                                </p>

                                <p class="paragraph_history">
                                    Starting with the opening of a Shop and Business
                                    Save and Loan to meet needs
                                    members so far Kopkar KBN has
                                    develop into a formidable cooperative
                                    unable to meet the needs of its members
                                    limited to primary needs such as groceries
                                    and housing but also able to fulfill
                                    other needs of members, namely in the form of
                                    education for family members and
                                    transportation needs and goods
                                    other households.
                                </p>
                                @else
                                <p class="paragraph_history">
                                    Diprakarsai oleh
                                    Pegawai BUMN yang saat itu merupakan Pegawai
                                    Tetap PT. Kawasan Berikat Nusantara (Persero)
                                    Cakung. Asas manfaat dalam berorganisasi untuk
                                    mencapai cita-cita luhur mensejahterakan
                                    Pegawai khususnya dan masyarakat pada
                                    umumnya terutama masyarakat yang bertempat
                                    tinggal disekitar Kawasan Berikat Nusantara.
                                </p>

                                <p class="paragraph_history">
                                    Dimulai dengan pembukaan Usaha Toko dan
                                    Simpan Pinjam untuk memenuhi kebutuhan
                                    anggota hingga saat ini Kopkar KBN telah
                                    berkembang menjadi Koperasi tangguh yang
                                    sanggup memenuhi kebutuhan anggotanya tidak
                                    terbatas pada kebutuhan primer seperti sembako
                                    dan perumahan tetapi juga mampu memnuhi
                                    kebutuhan lainnya dari anggota yaitu berupa
                                    pendidikan bagi keluarga anggota dan
                                    kebutuhan alat transportasi serta barang-barang
                                    rumah tangga lainnya.
                                </p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-6-->
            </div>
        </div>
        <!-- End .container-->
    </section>

    <section class="features features-1 bg-overlay bg-overlay-theme2" id="features-1" style="padding-top: 80px; padding-bottom: 80px;">
        <div class="bg-section"> <img src="assets/images/background/2.jpg" alt="Background" /></div>
        <div class="container">
            <!-- End .carousel-->
            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="block-right">
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="prief-set">
                                        <p class="paragraph" style="font-size: 21px; color: white;">
                                            The types of businesses that then began to be developed
                                            among others :
                                        </p>
                                        <ul class="list-unstyled advantages-list" style="margin-bottom: 30px;">
                                            <li>
                                                Management of canteens and hawkers in
                                                Archipelagic Bonded Zone both within the Zone
                                                Cakung and in the Marunda Area
                                            </li>
                                            <li>
                                                Cleaning Workforce Management (Cleaning
                                                Service, Office Boy, Street Sweeping and others)
                                                which are mainly placed in the environment of PT.
                                                Nusantara Bonded Zone (Persero)
                                            </li>
                                            <li>
                                                Service Vehicle Rental for the needs of PT.
                                                Nusantara Bonded Zone (Persero) and for
                                                the need for Employees in PT. Region
                                                Bonded Archipelago (Persero)
                                            </li>
                                            <li>
                                                Provider of Parking Areas for Trailer Trucks in
                                                Marunda area, so that can help
                                                reduce congestion during the unloading process
                                                fit
                                            </li>
                                            <li>
                                                Ticketing and Hotel Reservations to help
                                                official travel, especially for employees of PT.
                                                Nusantara Bonded Zone (Persero)
                                            </li>
                                            <li>
                                                Supply of Office Stationery and Prints
                                                for PT. KBN (Persero) and Subsidiary PT.
                                                KBN (Persero) and investors who are in
                                                PT. Nusantara Bonded Zone (Persero)
                                            </li>
                                            <li>
                                                Provider of Gallon and Bottle drinking water for
                                                the needs of PT. KBN (Persero) and Subsidiaries
                                                PT. KBN (Persero)
                                            </li>
                                            <li>
                                                Etc.
                                            </li>
                                        </ul>
                                    </div>
                                    @else
                                    <div class="prief-set">
                                        <p class="paragraph" style="font-size: 21px; color: white;">
                                            Jenis-jenis usaha yang kemudian mulai dikembangkan
                                            antara lain :
                                        </p>
                                        <ul class="list-unstyled advantages-list" style="margin-bottom: 30px;">
                                            <li>
                                                Pengelolaan Kantin dan Pedagang Asongan dalam
                                                Kawasan Berikat Nusantara baik dalam Kawasan
                                                Cakung maupun dalam Kawasan Marunda
                                            </li>
                                            <li>
                                                Pengelolaan Tenaga Kerja Kebersihan (Cleaning
                                                Service, Office Boy, Penyapuan Jalan dan lain-lain)
                                                yang terutama ditempatkan di lingkungan PT.
                                                Kawasan Berikat Nusantara (Persero)
                                            </li>
                                            <li>
                                                Penyewaan Kendaraan Dinas untuk kebutuhan PT.
                                                Kawasan Berikat Nusantara (Persero) dan untuk
                                                kebutuhan Pegawai di Lingkungan PT. Kawasan
                                                Berikat Nusantara (Persero)
                                            </li>
                                            <li>
                                                Penyedia Lahan Parkir untuk Truk Trailer di
                                                Kawasan Marunda, sehingga dapat membantu
                                                mengurangi kemacetan pada saat proses bongkar
                                                muat
                                            </li>
                                            <li>
                                                Ticketing dan Reservasi Hotel untuk membantu
                                                perjalanan dinas terutama bagi Pegawai PT.
                                                Kawasan Berikat Nusantara (Persero)
                                            </li>
                                            <li>
                                                Supply Kebutuhan Alat Tulis Kantor dan Cetakan
                                                untuk PT. KBN (Persero) dan Anak Perusahaan PT.
                                                KBN (Persero) serta investor-investor yang ada dalam
                                                lingkungan PT. Kawasan Berikat Nusantara (Persero)
                                            </li>
                                            <li>
                                                Penyedia Air minum Galon dan Botol untuk
                                                kebutuhan PT. KBN (Persero) dan Anak Perusahaan
                                                PT. KBN (Persero)
                                            </li>
                                            <li>
                                                Dll.
                                            </li>
                                        </ul>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <!--
                    ============================
                    Video #1 Section
                    ============================
                    -->
                    <div class="video video-1 bg-overlay bg-overlay-video" id="video-1">
                        <div class="bg-section">
                            <img src="{{ Request::root() . '/assets/images/video/profile.png' }}" alt="background" />
                        </div>
                        <a class="popup-video btn-video" href="{{ Request::root() . '/video/profil.mp4' }}">
                            <i class="fas fa-play"></i>
                            <span>
                                @if(Cookie::get('current_lang') == 'eng')
                                watch our video!
                                @else
                                tonton video kami!
                                @endif
                            </span>
                        </a>
                        <!-- End .popup-video-->
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    <section class="about about-1" id="about-2">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="about-block">
                        <div class="row">
                            @if(Cookie::get('current_lang') == 'eng')
                            <div class="col-12">
                                <p class="paragraph_history">
                                    Currently Kopkar KBN has carried out various activities
                                    business expansion that is not limited to just as
                                    provider of household needs and loans
                                    for members. By spurring Member creativity
                                    and create a reliable workforce in
                                    Kopkar KBN management then formed
                                    Kopkar KBN manager led by Manager-
                                    Professional manager with main purpose
                                    achieve profit according to SHU target or profit
                                    others as profit institutions on
                                    generally.
                                </p>

                                <p class="paragraph_history">
                                    Akhirul said as a profit institution that
                                    in the form of a cooperative, the Kopkar KBN remains
                                    make the welfare of members, creativity
                                    members and entrepreneurial attitudes of members by
                                    goals for the welfare of the Indonesian people
                                    in accordance with Pancasila and the 45th Constitution as a goal
                                    main.
                                </p>
                                <p class="paragraph_history">
                                    In the future, Kopkar KBN is in accordance with the Industrial Revolution Era
                                    5.0 where digitalization takes a major role,
                                    then starting in 2021 Kopkar KBN has explored
                                    Collaboration with service provider vendors
                                    digital which will be business partners and members
                                    Kopkar KBN is enough to interact and transact from
                                    house with stake holders in Kopkar KBN.
                                </p>
                            </div>
                            @else
                            <div class="col-12">
                                <p class="paragraph_history">
                                    Saat ini Kopkar KBN telah melakukan berbagai
                                    ekspansi usaha yang tidak terbatas hanya sebagai
                                    penyedia kebutuhan rumah tangga dan pinjaman
                                    untuk anggota. Dengan memacu kreativitas Anggota
                                    dan menciptakan tenaga kerja yang handala dalam
                                    pengelolaan Kopkar KBN maka dibentuklah
                                    Pengelola Kopkar KBN yang dipimpin oleh Manager-
                                    Manager profesional dengan tujuan utama
                                    mencapai Laba sesuai target SHU atau keuntungan
                                    lainnya sebagaimana lembaga-lembaga profit pada
                                    umumnya.
                                </p>

                                <p class="paragraph_history">
                                    Akhirul kata sebagai sebuah lembaga profit yang
                                    berbentuk Koperasi maka Kopkar KBN tetap
                                    menjadikan kesejahteraan anggota, kreativitas
                                    anggota dan sikap enterpreneur anggota demi
                                    tujuan kesejahteraan masyarakat indonesia yang
                                    sesuai dengan Pancasila dan UUD 45 sebagai tujuan
                                    utama.
                                </p>
                                <p class="paragraph_history">
                                    Kedepannya Kopkar KBN sesuai Era Revolusi Industri
                                    5.0 dimana digitalisasi mengambil peran utama,
                                    maka mulai tahun 2021 Kopkar KBN telah menjajaki
                                    kerjasama dengan vendor – vendor penyedia layanan
                                    digital yang nantinya mitra usaha dan anggota
                                    Kopkar KBN cukup berinteraksi dan bertransaksi dari
                                    rumah dengan stake holder yang ada di Kopkar KBN.
                                </p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

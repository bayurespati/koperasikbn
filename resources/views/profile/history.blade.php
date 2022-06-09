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
        font-size: 16px;
        font-weight: 400;
        line-height: 28px;
    }

    .about-img {
        margin-bottom: 40px;
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
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="/assets/images/page-titles/1.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Sejarah Singkat</h1>
                            <!-- <p class="title-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future.</p> -->
                            <!-- <div class="title-action"> <a class="btn btn--primary" href="{{ route('saving-loan') }}"> <span>our services</span><i class="energia-arrow-right"></i></a><a class="btn-video btn-video-2 popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil Koperasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Sejarah Singkat</li>
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
                        <!-- <div> -->
                        <!-- Start .counter-->
                        <!-- <div class="counter">
                                <div class="counter-icon"> <i class="flaticon-033-plug"></i></div>
                                <div class="counter-num"> <span class="counting" data-counterup-nums="954">954</span>
                                    <p></p>
                                </div>
                                <div class="counter-name">
                                    <h6>happy clients</h6>
                                </div>
                            </div> -->
                        <!-- End .counter-->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="heading heading-1">
                        <!-- <p class="heading-subtitle heading-subtitle-bg">Complete Commercial And Residential Solar Systems</p> -->
                        <h2 class="heading-title">Sejarah Singkat</h2>
                    </div>
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="block-left">
                                    <p class="paragraph" style="font-size: 21px;">
                                        Koperasi Karyawan PT. Kawasan Berikat
                                        Nusantara (Persero) atau disebut Kopkar KBN
                                        berdiri pada tahun 1989.
                                    </p>
                                    <!-- <a class="btn btn--secondary" href="page-about.html">read more <i class="energia-arrow-right"></i></a> -->
                                </div>
                            </div>
                            <div class="col-12 col-lg-5">
                                <div class="block-right">
                                    <!-- <div class="prief-set">
                                        <p>How can we meet the growing demand for electricity while protecting our climate & make planet a better place?</p>
                                        <ul class="list-unstyled advantages-list">
                                            <li>Reliability and performance</li>
                                            <li>Just-in-time manufacturing</li>
                                            <li>solar material financing</li>
                                        </ul>
                                    </div> -->
                                </div>
                            </div>
                            <div class="col-12">
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
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-6-->
            </div>

            <div class="row">
                <div class="col-12 col-lg-7">
                    <div class="about-block">
                        <div class="row">
                            <div class="col-12">
                                <div class="block-right">
                                    <div class="prief-set">
                                        <p class="paragraph" style="font-size: 21px;">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="/assets/images/about/1.jpg" alt="about Image" /></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="about-block">
                        <div class="row">
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

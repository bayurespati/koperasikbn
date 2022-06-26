@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Profil Koperasi - Visi Misi</title>
@endpush

@push('additional_css')
<style>
    .owl-dots {
        /* position: absolute;
        bottom: -60px; */
        padding-bottom: 20px;
    }

    .processes .process-panel {
        padding-right: 50px;
        padding-left: 50px;
    }

    .processes .block-right-holder .heading {
        margin-bottom: 0px;
    }

    .processes-holder {
        border: none !important;
    }

    .block-right-holder,
    .heading-title {
        margin-bottom: 0px !important;
    }

    .heading-title,
    .process-content h5 {
        color: #212529 !important;
    }

    .block-right-holder,
    .processes-holder {
        padding-top: 30px !important;
    }

    .owl-stage {
        display: flex!important;
        align-items: center!important;
    }

    .processes .process-panel .process-body .process-content h5 {
        text-transform: none !important;
    }
</style>
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #2 Section
      ============================
      -->
    <section class="page-title page-title-2" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2 banner_all">
            <div class="bg-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Visi Misi</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="">Profil Koperasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
                </ol>
            </div>
        </div>
    </section>
    <!--
      ============================
      About #3 Section
      ============================
      -->
    <section class="about about-3" id="about-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="heading heading-12">
                        <h2 class="heading-title">
                            Company Profile
                        </h2>
                    </div>
                    <div class="about-block">
                        <div class="block-left">
                            <p class="paragraph">
                                Koperasi Karyawan PT. KBN (Persero) Sebagai sebuah koperasi yang bergerak dibidang jasa khususnya simpan pinjam,
                                penyaluran tenaga kerja, supply ATK, Sembako, penyewaan kendaraan dinas, dll yang di dirikan pada tahun 1989, kami
                                menyediakan solusi bisnis yang inovatif kepada perusahaan yang menjadi mitra kami ,yang mana kami selalu
                                mengutamakan mutu serta kepercayaan demi kelangsungan bisnis yang harmonis dan berkelanjutan.
                            </p>
                            <p>
                                Koperasi Karyawan PT. KBN (Persero) saat ini fokus terhadap Simpan Pinjam Anggota, Supply ATK/Cetakan, Chemical &
                                Alat Kebersihan, Penyewaan Kendaraan Dinas, Penyedia Lapangan Parkir untuk Trailer, dll, disamping kami juga
                                melayani kebutuhan sesuai permintaan mitra kami.
                            </p>
                            <p>
                                Tujuan kami adalah untuk menjadi pilihan utama bagi mitra bisnis kami dengan memberikan kontribusi kepada setiap klien
                                kami , melebihi dari yang mereka harapkan, melalui pelayanan istimewa dari kami secara profesional dan integritas
                                penuh.
                            </p>
                            <p>
                                Koperasi Karyawan PT. KBN (Persero) dalam menjalankan bisnis di dukung oleh sumber daya yang berkualitas dan
                                berpengalaman karena kami yakin ,hanya dengan sumber daya yang tinggi kami dapat menghasilkan kualitas pekerjaan
                                dan pelayanan yang baik sesuai yang di harapkan mitra bisnis kami.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5 offset-lg-1">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="/assets/images/about/2.jpg" alt="about Image" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--
      ============================
      Processes #1 Section
      ============================
      -->
    <section class="processes processes-1" id="processes-1">
        <div class="bg-section"> <img src="/assets/images/background/wavy-pattern.png" alt="Background" /></div>
        <div class="row carousel owl-carousel carousel-dots process-content-carousel" data-slide="1" data-slide-rs="6" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="false" data-speed="2000" data-interval="5000">
            <div class="row col-12">
                <div class="col-12 col-lg-6">
                    <div class="block-right-holder">
                        <div class="heading heading-light heading-light2">
                            <h2 class="heading-title">Visi</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="processes-holder">
                        <div>
                            <div class="process-panel">
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>
                                            Menjadi Koperasi Yang Berkembang dan Bermanfaat untuk Memenuhi Kebutuhan
                                            Masyarakat khususnya Anggota Koperasi, juga Bangsa dan Negara
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-12 col-lg-6">
                    <div class="block-right-holder">
                        <div class="heading heading-light heading-light2">
                            <h2 class="heading-title">Misi</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="processes-holder">
                        <div>
                            <div class="process-panel">
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>
                                            Membangun Bisnis dan Aset Produktif secara terintegrasi guna memberikan Manfaat &
                                            Pelayanan yang Luas Kepada Anggota Koperasi dan juga kepada Bangsa & Negara
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row col-12">
                <div class="col-12 col-lg-6">
                    <div class="block-right-holder">
                        <div class="heading heading-light heading-light2">
                            <h2 class="heading-title">Nilai</h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="processes-holder">
                        <div>
                            <div class="process-panel">
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>
                                            Cepat, Tanggap dan Penuh Tanggung Jawab
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

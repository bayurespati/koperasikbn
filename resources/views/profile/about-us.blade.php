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
        display: flex !important;
        align-items: center !important;
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
                            @if(Cookie::get('current_lang') == 'eng')
                            <h1 class="title-heading">Vision Mission</h1>
                            @else
                            <h1 class="title-heading">Visi Misi</h1>
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
                    <li class="breadcrumb-item"><a href="">Cooperative Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Vision Mission</li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="">Profil Koperasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
                    @endif
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
                            @if(Cookie::get('current_lang') == 'eng')
                            Company Profile
                            @else
                            Profil Usaha
                            @endif
                        </h2>
                    </div>
                    <div class="about-block">
                        @if(Cookie::get('current_lang') == 'eng')
                        <div class="block-left">
                            <p class="paragraph">
                                Employee Cooperative PT. KBN (Persero) As a cooperative engaged in services, especially savings and loans,
                                distribution of manpower, supply of stationery, basic necessities, rental of official vehicles, etc. which was founded in 1989, we
                                providing innovative business solutions to our partner companies, which we always do
                                prioritizing quality and trust for harmonious and sustainable business continuity.
                            </p>
                            <p>
                                Employee Cooperative PT. KBN (Persero) is currently focusing on Member Savings and Loans, ATK/Mould Supply, Chemical &
                                Cleaning Equipment, Service Vehicle Rentals, Parking Space Providers for Trailers, etc., besides us too
                                serve the needs according to the request of our partners.
                            </p>
                            <p>
                                Our goal is to be the first choice for our business partners by contributing to every client
                                us, more than they expect, through special service from us in a professional and integrity manner
                                full.
                            </p>
                            <p>
                                Employee Cooperative PT. KBN (Persero) in running the business is supported by quality resources and
                                experienced because we believe, only with high resources we can produce quality work
                                and good service as expected by our business partners.
                            </p>
                        </div>
                        @else
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
                        @endif
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
                            <h2 class="heading-title">
                                @if(Cookie::get('current_lang') == 'eng')
                                Vision
                                @else
                                Visi
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="processes-holder">
                        <div>
                            <div class="process-panel">
                                <div class="process-body">
                                    <div class="process-content">
                                        @if(Cookie::get('current_lang') == 'eng')
                                        <h5>
                                            Becoming a Growing and Beneficial Cooperative to Meet Needs
                                            Communities, especially Cooperative Members, as well as the Nation and the State
                                        </h5>
                                        @else
                                        <h5>
                                            Menjadi Koperasi Yang Berkembang dan Bermanfaat untuk Memenuhi Kebutuhan
                                            Masyarakat khususnya Anggota Koperasi, juga Bangsa dan Negara
                                        </h5>
                                        @endif
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
                            <h2 class="heading-title">
                                @if(Cookie::get('current_lang') == 'eng')
                                Mission
                                @else
                                Misi
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="processes-holder">
                        <div>
                            <div class="process-panel">
                                <div class="process-body">
                                    <div class="process-content">
                                        @if(Cookie::get('current_lang') == 'eng')
                                        <h5>
                                            Building Business and Productive Assets in an integrated manner to provide Benefits &
                                            Extensive Service to Cooperative Members and also to the Nation & State
                                        </h5>
                                        @else
                                        <h5>
                                            Membangun Bisnis dan Aset Produktif secara terintegrasi guna memberikan Manfaat &
                                            Pelayanan yang Luas Kepada Anggota Koperasi dan juga kepada Bangsa & Negara
                                        </h5>
                                        @endif
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
                            <h2 class="heading-title">
                                @if(Cookie::get('current_lang') == 'eng')
                                Value
                                @else
                                Nilai
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="processes-holder">
                        <div>
                            <div class="process-panel">
                                <div class="process-body">
                                    <div class="process-content">
                                        @if(Cookie::get('current_lang') == 'eng')
                                        <h5>
                                            Fast, Responsive and Full of Responsibility
                                        </h5>
                                        @else
                                        <h5>
                                            Cepat, Tanggap dan Penuh Tanggung Jawab
                                        </h5>
                                        @endif
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

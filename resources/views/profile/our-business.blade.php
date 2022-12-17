@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN -Profil Koperasi - Bisnis Koperasi</title>
@endpush

@push('additional_css')
<style>
    .heading-title {
        text-transform: none !important;
    }

    .project-title {
        min-height: 60px;
    }

    .project-desc {
        width: 100%;
        min-height: 180px;
    }
</style>
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2 banner_all">
            <div class="bg-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Bisnis Koperasi</h1>
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
                    <li class="breadcrumb-item active" aria-current="page">Bisnis Koperasi</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>

    <section class="projects projects-modern projects-modern-2" id="projects-modern-1" style="padding-top: 110px;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-5 text-center">
                        <h2 class="heading-title">Jenis-jenis Usaha yang Dikembangkan Adalah:</h2>
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="row">
                <div class="col-12">
                    <div class="carousel owl-carousel carousel-dots" data-slide="3" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="false" data-speed="500" data-interval="5000">
                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('minimart') }}"></a><img src="/assets/images/projects/modern/1.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('minimart') }}">Pengelolaan Kantin dan Pedagang Asongan</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Pengelolaan Kantin dan Pedagang Asongan dalam
                                                Kawasan Berikat Nusantara baik dalam Kawasan
                                                Cakung maupun dalam Kawasan Marunda.
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('minimart') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('cleaning-service') }}"></a><img src="/assets/images/projects/modern/2.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('cleaning-service') }}">Pengelolaan Tenaga Kerja Kebersihan</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Pengelolaan Tenaga Kerja Kebersihan (Cleaning
                                                Service, Office Boy, Penyapuan Jalan dan lain-lain)
                                                yang terutama ditempatkan di lingkungan PT.
                                                Kawasan Berikat Nusantara (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('cleaning-service') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('driver') }}"></a><img src="/assets/images/projects/modern/3.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('driver') }}">Penyewaan Kendaraan Dinas</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Penyewaan Kendaraan Dinas untuk kebutuhan PT.
                                                Kawasan Berikat Nusantara (Persero) dan untuk
                                                kebutuhan Pegawai di Lingkungan PT. Kawasan
                                                Berikat Nusantara (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('driver') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('administration-staff') }}"></a><img src="/assets/images/projects/modern/4.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('administration-staff') }}">Ticketing dan Reservasi Hotel</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Ticketing dan Reservasi Hotel untuk membantu
                                                perjalanan dinas terutama bagi Pegawai PT.
                                                Kawasan Berikat Nusantara (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('administration-staff') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('stationary') }}"></a><img src="/assets/images/projects/modern/4.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('stationary') }}">Supply Kebutuhan Alat Tulis Kantor</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Supply Kebutuhan Alat Tulis Kantor dan Cetakan
                                                untuk PT. KBN (Persero) dan Anak Perusahaan PT.
                                                KBN (Persero) serta investor-investor yang ada dalam
                                                lingkungan PT. Kawasan Berikat Nusantara (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('stationary') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('gardening') }}"></a><img src="/assets/images/projects/modern/4.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('gardening') }}">Penyedia Air minum Galon dan Botol</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Penyedia Air minum Galon dan Botol untuk
                                                kebutuhan PT. KBN (Persero) dan Anak Perusahaan
                                                PT. KBN (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('gardening') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->

            <div class="row" style="padding-top: 70px; padding-bottom: 70px">
                <div class="col-12">
                    <div class="video video-1 bg-overlay bg-overlay-video" id="video-1">
                        <div class="bg-section">
                            <img src="{{ Request::root() . '/assets/images/video/komersial.png' }}" alt="background" />
                        </div>
                        <a class="popup-video btn-video" href="{{ Request::root() . '/video/komersial.mp4' }}">
                            <i class="fas fa-play"></i>
                            <span>mau healing?</span>
                        </a>
                        <!-- End .popup-video-->
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

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
                            <h1 class="title-heading">
                                @if(Cookie::get('current_lang') == 'eng')
                                Cooperative Business
                                @else
                                Bisnis Koperasi
                                @endif
                            </h1>
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
                    <li class="breadcrumb-item active" aria-current="page">Cooperative Business</li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil Koperasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Bisnis Koperasi</li>
                    @endif
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
                        @if(Cookie::get('current_lang') == 'eng')
                        <h2 class="heading-title">The types of businesses being developed are:</h2>
                        @else
                        <h2 class="heading-title">Jenis-jenis Usaha yang Dikembangkan Adalah:</h2>
                        @endif
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
                                    <div class="project-img"><a class="link" href="{{ route('minimart') }}"></a><img src="/assets/images/toko.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('minimart') }}">Canteen and Hawker Management</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Management of canteens and hawkers in
                                                Archipelagic Bonded Zone both within the Zone
                                                Cakung and in the Marunda Area.
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('minimart') }}">more <i class="energia-arrow- right"></i></a></div>
                                    </div>
                                    @else
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('minimart') }}">Minimarket</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Sebagai sokoguru ekonomi bangsa, Koperasi Karyawan PT. KBN menyediakan mini market 
                                                untuk memenuhi kebutuhan sembako, pangan dan lain-lain untuk anggota koperasi maupun 
                                                masyarakat umum dan harga yang bersaing dengan retail-retail serupa sehingga tepat 
                                                menjadi solusi kebutuhan rumah tangga anda.
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('minimart') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    @endif
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('cleaning-service') }}"></a><img src="/assets/images/cleaning-service2.jpg" alt="project image" style="height: 335px;"/></div>
                                    <!-- End .project-img-->
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('cleaning-service') }}">Cleaning Workforce Management</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Cleaning Workforce Management (Cleaning
                                                Service, Office Boy, Street Sweeping and others)
                                                which are mainly placed in the environment of PT.
                                                Nusantara Bonded Zone (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('cleaning-service') }}">more <i class="energia- arrow-right"></i></a></div>
                                    </div>
                                    @else
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('cleaning-service') }}">Cleaning Service</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Cleaning service merupakan sebuah layanan kebersihan, 
                                                kerapihan serta higienis pada sebuah gedung, perkantoran, rumah sakit, 
                                                hotel, apartement atau bangunan yang lainnya baik untuk area indoor atau 
                                                outdoor sehingga tercipta suasana bersih, nyaman, fresh guna menunjang 
                                                aktifitas Anda. Selain itu, cleaning service juga berguna untuk menjaga 
                                                semua barang-barang didalamnya sehingga barang-barang tersebut jadi bersih 
                                                dan terawat. Koperasi telah lebih dari 25 tahun menjadi partner PT. Kawasan 
                                                Berikat Nusantara dan Anak Perusahaan PT. KBN.
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('cleaning-service') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    @endif
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('driver') }}"></a><img src="/assets/images/driver.jpeg" alt="project image" style="height: 335px;"/></div>
                                    <!-- End .project-img-->
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('driver') }}">Service Vehicle Rentals</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Service Vehicle Rental for the needs of PT.
                                                Nusantara Bonded Zone (Persero) and for
                                                the need for Employees in PT. Region
                                                Bonded Nusantara (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('driver') }}">more <i class="energia-arrow- right"></i></a></div>
                                    </div>
                                    @else
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('driver') }}">Driver </a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Kami menyediakan pengemudi profesional baik untuk  pribadi 
                                                atau untuk dinas perusahaan sesuai dengan kebutuhan anda.
                                            </p>
                                            <p>
                                                Kami sebagai perusahaan yang bergerak pada outsourching 
                                                menyediakan tenaga Sopir yang telah kami seleksi, didik dan 
                                                siap ditempatkan di perusahaan/instansi dengan berbagai 
                                                latar belakang bisinis.

                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('driver') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    @endif
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('administration-staff') }}"></a><img src="/assets/images/staf-administrasi.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('administration-staff') }}">Ticketing and Hotel Reservations</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Ticketing and Hotel Reservations to help
                                                official travel, especially for employees of PT.
                                                Nusantara Bonded Zone (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('administration-staff') }}">more <i class="energia- arrow-right"></i></a></div>
                                    </div>
                                    @else
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('administration-staff') }}">Staf Administrasi</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Staf Aministrasi terlatih dan berpengalaman baik lulusan SLTA, 
                                                D-3 dan S-1 kami siapkan untuk membantu perusahaan anda agar dapat 
                                                bekerja lebih efektif dalam kinerjanya, dengan seleksi dan 
                                                pendidikan yang tepat agar menjadi pioneer di latar belakang 
                                                perusahaan anda.
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('administration-staff') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    @endif
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('stationary') }}"></a><img src="/assets/images/atk.jpg" alt="project image" style="height: 335px;"/></div>
                                    <!-- End .project-img-->
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('stationary') }}">Supply Office Stationery Supplies</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Supply of Office Stationery and Prints
                                                for PT. KBN (Persero) and Subsidiary PT.
                                                KBN (Persero) and investors who are in
                                                PT. Nusantara Bonded Zone (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('stationary') }}">more <i class="energia-arrow- right"></i></a></div>
                                    </div>
                                    @else
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('stationary') }}">ATK (Alat Tulis Kantor)</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Supply dan penyediaan kebutuhan alat tulis kantor di PT. Kawasan 
                                                Berikat Nusantara, Anak Perusahaan dan vendor-vendor lainnya di 
                                                sekitar Kawasan Berikat Nusantara baik di Kawasan Cakung maupun di 
                                                Kawasan Marunda.
                                            </p>
                                            <p>    
                                                Dengan keunggulan pembayaran sistem tempo dimana petugas kami 
                                                mengirimkan dulu kebutuhan ATK Perusahaan anda dan ditagihkan 
                                                pada bulan berikutnya atau sesuai kesepakatan dengan PIC Koperasi.
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('stationary') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    @endif
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('drinks') }}"></a><img src="/assets/images/mesin-fotokopi.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('drinks') }}">Gallon and Bottle Drinking Water Provider</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Provider of Gallon and Bottle drinking water for
                                                the needs of PT. KBN (Persero) and Subsidiaries
                                                PT. KBN (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('drinks') }}">more <i class="energia-arrow- right"></i></a></div>
                                    </div>
                                    @else
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('drinks') }}">Penyewaan Mesin Fotocopy</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Memaksimalkan pelayanan Koperasi kepada PT. Kawasan Berikat 
                                                Nusantara, Anak Perusahaan dan Vendor di sekitar Kawasan 
                                                Berikat Nusantara, kami menyediakan mesin fotocopy yang dapat 
                                                disewa dan dilengkapi oleh operator yang menjalankan mesin 
                                                tersebut sehingga mempermudah Karyawan Perusahaan anda dalam 
                                                memperbanyak dokumen perusahaan dan menyimpan arsip dari 
                                                surat-surat perusahaan anda.
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('drinks') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    @endif
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('drinks') }}"></a><img src="/assets/images/jasa-surat-kendaraan.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('drinks') }}">Gallon and Bottle Drinking Water Provider</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Provider of Gallon and Bottle drinking water for
                                                the needs of PT. KBN (Persero) and Subsidiaries
                                                PT. KBN (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('drinks') }}">more <i class="energia-arrow- right"></i></a></div>
                                    </div>
                                    @else
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('drinks') }}">Pengurusan Jasa Surat Kendaraan</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Terbatasnya waktu anda dalam mengurus surat-surat kendaraan baik untuk 
                                                pribadi maupun untuk perusahaan anda sudah tidak menajdi masalah. 
                                                Cukup menghubungi Koperasi Karyawan PT. KBN, kami siap membantu anda 
                                                mengurus surat-surat kendaraan seperti STNK, KIER dan Sertifikat Uji 
                                                Emisi ditambah dengan sistem pembayaran yang fleksibel di Koperasi 
                                                Karyawan PT. KBN.
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('drinks') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    @endif
                                    <!-- End .project-content -->
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="project-panel" data-hover="">
                                <div class="project-panel-holder">
                                    <div class="project-img"><a class="link" href="{{ route('simpan') }}"></a><img src="/assets/images/Simpanpinjam.jpg" alt="project image" /></div>
                                    <!-- End .project-img-->
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('simpan') }}">Gallon and Bottle Drinking Water Provider</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Provider of Gallon and Bottle drinking water for
                                                the needs of PT. KBN (Persero) and Subsidiaries
                                                PT. KBN (Persero).
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('simpan') }}">more <i class="energia-arrow- right"></i></a></div>
                                    </div>
                                    @else
                                    <div class="project-content">
                                        <div class="project-title">
                                            <h4><a href="{{ route('simpan') }}">Simpan Pinjam</a></h4>
                                        </div>
                                        <div class="project-desc">
                                            <p>
                                                Sebagai lembaga keuangan dengan cita–cita luhur mensejahterakan anggota 
                                                dan dapat berguna bagi warga sekitarnya, kami menjadi solusi finansial 
                                                anggota koperasi, baik untuk kebutuhan konsumtif, kesehatan, pendidikan 
                                                dan lain-lain. Jangka waktu yang disusun secara fleksibel dengan jenis 
                                                pinjaman serta margin yang terjangkau dan sasaran yang tepat sehingga 
                                                dapat membantu anggota koperasi untuk memenuhi kebutuhannya
                                            </p>
                                        </div>
                                        <div class="project-more"> <a class="btn btn--bordered btn--white" href="{{ route('simpan') }}">selengkapnya <i class="energia-arrow-right"></i></a></div>
                                    </div>
                                    @endif
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
                            @if(Cookie::get('current_lang') == 'eng')
                            <span>need vacation?</span>
                            @else
                            <span>mau healing?</span>
                            @endif
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

@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN</title>
@endpush

@push('additional_css')
<style>
    .entry-content {
        height: 700px;
    }

    .entry-title {
        max-height: 70px;
    }

    .entry-title h4 {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
    }

    .entry-bio p {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
    }

    .entry-more {
        position: absolute;
        bottom: 24px;
    }

    .custom_svg {
        filter: grayscale(40%) brightness(50%) sepia(200%) hue-rotate(100deg) saturate(550%);
    }

    .feature-panel:hover .custom_svg {
        filter: none;
    }

    .service-panel {
        min-height: 550px;
    }

    .service-panel .btn {
        position: absolute !important;
        bottom: 50px !important;
    }

    .services .service-panel:hover .service-icon img {
        -webkit-transform: rotateY(360deg);
        transform: rotateY(360deg);
    }

    .services .service-panel .service-icon img {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-transition: 0.3s ease-in-out;
        -o-transition: 0.3s ease-in-out;
        transition: 0.3s ease-in-out;
    }

    .services .service-panel .service-icon img::before {
        margin-left: 0;
        font-size: 75px;
        color: var(--global--color-primary);
        -webkit-transition: 300ms ease-in-out;
        -o-transition: 300ms ease-in-out;
        transition: 300ms ease-in-out;
    }

    #wrapperParallax {
        background: #f6f7f8 !important;
    }
</style>
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')
    <!--
      ============================
      Slider #2 Section
      ============================
      -->
    <section class="slider slider-2" id="slider-2">
        <div class="container-fluid pe-0 ps-0">
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="false" data-space="0" data-loop="true" data-speed="800" data-interval="10000">
                @foreach($data['banner'] as $banner)
                <div class="slide bg-overlay bg-overlay-dark-slider-2">
                    <div class="bg-section"><img src="{{ $banner->image_link }}" alt="{{ $banner->image_name }}" /></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                @if(Cookie::get('current_lang') == 'eng')
                                <div class="slide-content">
                                    <h1 class="slide-headline">{{ $banner->title }}</h1>
                                    <p class="slide-desc">{{ $banner->description }}</p>
                                    <div class="slide-action">
                                        @if($banner->button_link !== null && $banner->button_link !== '')
                                        <a class="btn btn--primary" href="{{ $banner->button_link }}"> <span>{{ $banner->button_title }}</span><i class="energia-arrow-right"></i></a>
                                        @endif
                                        @if($banner->button_two_link !== null && $banner->button_two_link !== '')
                                        <a class="btn btn--white justify-content-center" href="{{ $banner->button_two_link }}">{{ $banner->button_two_title }}</a>
                                        @endif
                                    </div>
                                </div>
                                @else
                                <div class="slide-content">
                                    <h1 class="slide-headline">{{ $banner->title_indo }}</h1>
                                    <p class="slide-desc">{{ $banner->description_indo }}</p>
                                    <div class="slide-action">
                                        @if($banner->button_link !== null && $banner->button_link !== '')
                                        <a class="btn btn--primary" href="{{ $banner->button_link }}"> <span>{{ $banner->button_title_indo }}</span><i class="energia-arrow-right"></i></a>
                                        @endif
                                        @if($banner->button_two_link !== null && $banner->button_two_link !== '')
                                        <a class="btn btn--white justify-content-center" href="{{ $banner->button_two_link }}">{{ $banner->button_two_title_indo }}</a>
                                        @endif
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--
      ============================
      FeaturesBar #1 Section
      ============================
      -->
    <section class="features-bar bg-overlay bg-overlay-theme3" id="featuresBar-1">
        <div class="bg-section"> <img src="assets/images/background/3.jpg" alt="background" /></div>
        <div class="container">
            <div class="row g-0 features-holder">
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i>
                                <img class="custom_svg" src="assets/images/1_simpan.svg" alt="" style="width: 60%;">
                            </i>
                            <h5>
                                @if(Cookie::get('current_lang') == 'eng')
                                Saving
                                @else
                                Simpan
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i>
                                <img class="custom_svg" src="assets/images/2_pinjam.svg" alt="" style="width: 50%;">
                            </i>
                            <h5>
                                @if(Cookie::get('current_lang') == 'eng')
                                Loan
                                @else
                                Pinjam
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i>
                                <img class="custom_svg" src="assets/images/3_bisnis.svg" alt="" style="width: 50%;">
                            </i>
                            <h5>
                                @if(Cookie::get('current_lang') == 'eng')
                                Business
                                @else
                                Bisnis
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="feature-panel">
                        <div class="feature-content">
                            <i>
                                <img class="custom_svg" src="assets/images/4_komersial.svg" alt="" style="width: 60%;">
                            </i>
                            <h5>
                                @if(Cookie::get('current_lang') == 'eng')
                                Commercial
                                @else
                                Komersial
                                @endif
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="more-features more-features-2">
                    @if(Cookie::get('current_lang') == 'eng')
                    <p>Advantages of being a Cooperative member</p><a class="btn btn--bordered btn--white" href="#">Click Here</a>
                    @else
                    <p>Keuntungan menjadi anggota Koperasi</p><a class="btn btn--bordered btn--white" href="#">Klik Disini</a>
                    @endif
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      services #2 Section
      ============================
      -->
    <section class="services services-2 bg-grey" id="services-2">
        <div class="container">
            @if(Cookie::get('current_lang') == 'eng')
            <div class="heading heading-2">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="heading-title">Kopkar KBN Goes Forward, Members Prosper</h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="heading-desc">Employee Cooperative PT. KBN (Persero) as a cooperative engaged in the field of services, especially savings and loans, distribution of labor, supply of ATK, groceries, rental of official vehicles, etc.</p>
                        <div class="actions-holder">
                            <a class="btn btn--primary" href="{{ route('business') }}" style="width: 210px;">
                                Business & Commercial
                                <i class="energy-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="heading heading-2">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="heading-title">Kopkar KBN Maju, Anggota Sejahtera</h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="heading-desc">Koperasi Karyawan PT. KBN (Persero) sebagai sebuah koperasi yang bergerak di bidang jasa khususnya simpan dan pinjam, penyaluran tenaga kerja, suplai ATK, sembako, penyewaan kendaraan dinas, dll.</p>
                        <div class="actions-holder">
                            <a class="btn btn--primary" href="{{ route('business') }}" style="width: 210px;">
                                Bisnis & Komersial
                                <i class="energia-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="false" data-autoplay="false" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="500" data-interval="10000">
                @if(Cookie::get('current_lang') == 'eng')
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/5_save_pinjam.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Savings and Loans Services</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elite. Voluptatem explicabo sint pariatur unde commodi beatae exercitationem natus quod recusandae illum in impedit placeat eos consequuntur, quidem deleniti dignissimos, vel nostrum.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">More <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/5_simpan_pinjam.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Layanan Simpan Pinjam</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo sint pariatur unde commodi beatae exercitationem natus quod recusandae illum in impedit placeat eos consequuntur, quidem deleniti dignissimos, vel nostrum.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif

                @if(Cookie::get('current_lang') == 'eng')
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/6_mini_market.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Mini Market Business</a></h4>
                            <p>Lorem ipsum dolor sit amet, elite adipisicing consectetur. Ipsam aut vitae fuga quisquam aperiam odio id alias qui beatae enim rem, cum molestias, modi illo ab reprehenderit autem suscipit quidem?</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">More <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/6_mini_market.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Usaha Mini Market</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam aut vitae fuga quisquam aperiam odio id alias qui beatae enim rem, cum molestias, modi illo ab reprehenderit autem suscipit quidem?</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif

                @if(Cookie::get('current_lang') == 'eng')
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/7_atk.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Office Stationery Procurement</a></h4>
                            <p>Lorem ipsum dolor sit, elite adipisicing amet consectetur. Ex eos asperiores nulla obcaecati aut mollitia ad et animi, quo consectetur, explicabo aliquid ipsa quidem dolor officiis amet. Nostrum, aliquid sit!</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">More <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/7_atk.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Pengadaan Alat Tulis Kantor</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex eos asperiores nulla obcaecati aut mollitia ad et animi, quo consectetur, explicabo aliquid ipsa quidem dolor officiis amet. Nostrum, aliquid sit!</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif

                @if(Cookie::get('current_lang') == 'eng')
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/8_alih_daya.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Outsourcing Power Service Provider</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elite. In temporibus laudantium maxime dignissimos corporis possimus nulla dolor, sit quae! Numquam modi autem neque inventory nulla! Ipsam iusto eligendi veniam repellendus!</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">More <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/8_alih_daya.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Penyedia Jasa Tenaga Alih Daya</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In temporibus laudantium maxime dignissimos corporis possimus nulla dolor, sit quae! Numquam modi autem neque inventore nulla! Ipsam iusto eligendi veniam repellendus!</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif

                @if(Cookie::get('current_lang') == 'eng')
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/9_vehicle_files.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Vehicle Certificate Service Provider</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elite. Eos quaerat fugiat numquam natus eius repellat sit exercitationem quisquam, temporibus quos laudantium corrupti asperiores consequatur optio at quod aliquid ducimus esse.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">More <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/9_surat_kendaraan.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Penyedia Jasa Surat Kendaraan</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quaerat fugiat numquam natus eius repellat sit exercitationem quisquam, temporibus quos laudantium corrupti asperiores consequatur optio at quod aliquid ducimus esse.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif

                @if(Cookie::get('current_lang') == 'eng')
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/10_machine_photocopy.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Copier rental</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur, elite adipisicing. Dolor, cupiditate voluptate, inventory veritatis minus, ducimus nobis voluptatum iure vel sint ipsa! Maxime aperiam tempora similique perferendis quaerat in incidunt facere.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">More <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @else
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon">
                            <img class="custom_svg" src="assets/images/10_mesin_fotokopi.svg" alt="" style="width: 26%; height: 26%;">
                        </div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Penyewaan Mesin Fotokopi</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, cupiditate voluptate, inventore veritatis minus, ducimus nobis voluptatum iure vel sint ipsa! Maxime aperiam tempora similique perferendis quaerat in incidunt facere.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </section>
    <!--
      ============================
      About #2 Section
      ============================
      -->
    <section class="about about-2" id="about-2" style="margin-top: 60px;">
        <div class="about-wrapper">
            <!--
          ============================
          Video #2 Section
          ============================
          -->
            <div class="video-wrapper">
                <div class="video video-2" id="video-2">
                    <div class="bg-section"><img src="assets/images/video/preview.png" alt="background" /></div>
                    <a class="popup-video btn-video btn-video-2" href="{{ Request::url() . '/video/introduction.mp4' }}"> <i class="fas fa-play"></i>
                    </a>
                    <!-- End .popup-video-->
                </div>
                <!-- End .video-->
            </div>
            <!-- End .video-wrapper-->
            <div class="about-block-wrapper">
                @if(Cookie::get('current_lang') == 'eng')
                <div class="about-block" style="height:100%;">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">Employee Loans</p>
                        <h2 class="heading-title">Low Interest Loans</h2>
                        <p class="heading-desc">When you are ready, we are ready with the best offer from Employee Cooperative. Focus on pursuing your dreams without worrying about financial constraints.</p>
                        <!-- <div class="signature-block"><a class="btn btn--secondary" href="page-about.html">Learn More <i class="energia-arrow-right"> </i></a>
                             <div class="signature-body">
                                 <h6>michael brian</h6>
                                 <p>co founder</p> -->
                        <!-- <img class="signature-img" src="assets/images/signature/1.png" alt="signature" /> -->
                        <!-- </div>
                         </div> -->
                        <div class="advantages-list-holder">
                            <div class="row">
                                <!-- <div class="col-12 col-md-6">
                                     <p>How can we meet the growing demand for electricity while protecting our climate?</p>
                                 </div> -->
                                <div class="col-12 col-md-12">
                                    <ul class="list-unstyled advantages-list">
                                        <li>Accessible online</li>
                                        <li>Low interest</li>
                                        <li>Integrated with the Company's salary system</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="about-block" style="height:100%;">
                    <div class="heading heading-1">
                        <p class="heading-subtitle heading-subtitle-bg">Pinjaman Karyawan</p>
                        <h2 class="heading-title">Pinjaman dengan Bunga Rendah</h2>
                        <p class="heading-desc">Saat Anda siap, kami siap dengan penawaran terbaik dari Koperasi Karyawan. Fokus kejar mimpi Anda tanpa khawatir dengan kendala keuangan.</p>
                        <!-- <div class="signature-block"><a class="btn btn--secondary" href="page-about.html">Pelajari Lebih Lanjut <i class="energia-arrow-right"></i></a>
                            <div class="signature-body">
                                <h6>michael brian</h6>
                                <p>co founder</p> -->
                        <!-- <img class="signature-img" src="assets/images/signature/1.png" alt="signature" /> -->
                        <!-- </div>
                        </div> -->
                        <div class="advantages-list-holder">
                            <div class="row">
                                <!-- <div class="col-12 col-md-6">
                                    <p>How can we meet the growing demand for electricity while protecting our climate?</p>
                                </div> -->
                                <div class="col-12 col-md-12">
                                    <ul class="list-unstyled advantages-list">
                                        <li>Dapat diakses secara online</li>
                                        <li>Bunga rendah</li>
                                        <li>Terintegrasi dengan sistem gaji Perusahaan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <!-- End .about-block-wrapper-->
        </div>
        <!-- End .about-wrapper -->
    </section>
    <!--
      ============================
      Blog #2 Section
      ============================
      -->
    <section class="blog blog-2 blog-grid" id="blog-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-11 text-center">
                        @if(Cookie::get('current_lang') == 'eng')
                        <p class="heading-subtitle">News & Announcements</p>
                        <h2 class="heading-title">Recent Articles</h2>
                        @else
                        <p class="heading-subtitle">Berita & Pengumuman</p>
                        <h2 class="heading-title">Artikel Terbaru</h2>
                        @endif
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="row">
                @foreach($data['artikel'] as $artikel)
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        @if(Cookie::get('current_lang') == 'eng')
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date">{{ $artikel->formatted_dtime }}</div>
                                <!-- End .entry-date		-->
                                <!-- <div class="entry-author">
                                    <p>mike dolley</p>
                                </div> -->
                            </div>
                            <div class="entry-title">
                                <h4><a href="{{ $artikel->category == 'Berita' ? route('news') : route('announcement') }}/{{ $artikel->id }}">{{ $artikel->title }}</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img">
                                    <a href="{{ $artikel->category == 'Berita' ? route('news') : route('announcement') }}/{{ $artikel->id }}">
                                        <img src="{{ $artikel->image_link }}" alt="{{ $artikel->image_name }}" />
                                    </a>
                                </div>
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>
                                    {{ $artikel->description }}
                                </p>
                            </div>
                            <div class="entry-more">
                                <a class="btn btn--white btn-bordered" href="{{ $artikel->category == 'Berita' ? route('news') : route('announcement') }}/{{ $artikel->id }}" style="width:170px;">
                                    More <i class="energia-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        @else
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date">{{ $artikel->formatted_dtime }}</div>
                                <!-- End .entry-date		-->
                                <!-- <div class="entry-author">
                                    <p>mike dolley</p>
                                </div> -->
                            </div>
                            <div class="entry-title">
                                <h4><a href="{{ $artikel->category == 'Berita' ? route('news') : route('announcement') }}/{{ $artikel->id }}">{{ $artikel->title_indo }}</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img">
                                    <a href="{{ $artikel->category == 'Berita' ? route('news') : route('announcement') }}/{{ $artikel->id }}">
                                        <img src="{{ $artikel->image_link }}" alt="{{ $artikel->image_name }}" />
                                    </a>
                                </div>
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>
                                    {{ $artikel->description_indo }}
                                </p>
                            </div>
                            <div class="entry-more">
                                <a class="btn btn--white btn-bordered" href="{{ $artikel->category == 'Berita' ? route('news') : route('announcement') }}/{{ $artikel->id }}" style="width:170px;">
                                    Selengkapnya <i class="energia-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                        @endif
                    </div>
                    <!-- End .entry-content-->
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="more-blog">
                        <a href="{{ route('news') }}">
                            @if(Cookie::get('current_lang') == 'eng')
                            Find out more about our news!
                            @else
                            Cari tahu lebih banyak tentang berita kami!
                            @endif
                        </a>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

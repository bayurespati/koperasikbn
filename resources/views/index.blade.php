@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN</title>
@endpush

@push('additional_css')
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
            <div class="slider-carousel owl-carousel carousel-navs carousel-dots" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true" data-speed="800">
                <div class="slide bg-overlay bg-overlay-dark-slider-2">
                    <div class="bg-section"><img src="assets/images/sliders/1.jpg" alt="Background" /></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <h1 class="slide-headline">Tetap Kendalikan Keuangan Anda Dengan Kami</h1>
                                    <p class="slide-desc">Keuntungan dari pinjaman online adalah Anda dapat memperoleh informasi secara real-time pada saat akun Anda secara otomatis dikreditkan atau didebit.</p>
                                    <div class="slide-action"><a class="btn btn--primary" href="{{ route('saving-loan') }}"> <span>Ajukan Pinjaman</span><i class="energia-arrow-right"></i></a><a class="btn btn--white justify-content-center" href="{{ route('history') }}">Setor Pinjaman</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide bg-overlay bg-overlay-dark-slider-2">
                    <div class="bg-section"><img src="assets/images/sliders/3.jpg" alt="Background" /></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <h1 class="slide-headline">Pinjaman Online</h1>
                                    <p class="slide-desc">Lihat beberapa hal yang dapat Anda lakukan dengan aplikasi mobile banking kami.</p>
                                    <div class="slide-action"><a class="btn btn--primary" href="{{ route('saving-loan') }}"> <span>Ajukan Pinjaman</span><i class="energia-arrow-right"></i></a><a class="btn btn--white justify-content-center" href="{{ route('history') }}">Setor Pinjaman</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide bg-overlay bg-overlay-dark-slider-2">
                    <div class="bg-section"><img src="assets/images/sliders/4.jpg" alt="Background" /></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-lg-7">
                                <div class="slide-content">
                                    <h1 class="slide-headline">Berita Terbaru</h1>
                                    <p class="slide-desc">Periksa lebih banyak informasi & cerita tentang bank kami di posting terbaru.</p>
                                    <div class="slide-action"><a class="btn btn--primary" href="{{ route('news') }}"> <span>Berita</span><i class="energia-arrow-right"></i></a><a class="btn btn--white justify-content-center" href="{{ route('history') }}">Tentang Kami</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content"><i class="flaticon-028-greenhouse"></i>
                            <h5>Pinjaman</h5>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content"><i class="flaticon-009-ecology-1"></i>
                            <h5>Bisnis</h5>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content"><i class="flaticon-026-world"></i>
                            <h5>Komersial</h5>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <div class="col-12 col-sm-6 col-md-3 col-lg-3">
                    <!-- Start .feature-panel-->
                    <div class="feature-panel">
                        <div class="feature-content"><i class="flaticon-024-energy"></i>
                            <h5>Tabungan</h5>
                        </div>
                    </div>
                    <!-- End .feature-panel-->
                </div>
                <!-- <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content"><i class="flaticon-038-ecology"></i>
                            <h5>Certified Engineers</h5>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                    <div class="feature-panel">
                        <div class="feature-content"><i class="flaticon-003-fuel-1"></i>
                            <h5>Tabungan</h5>
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="row">
                <div class="more-features more-features-2">
                    <p>Keuntungan menjadi anggota Koperasi</p><a class="btn btn--bordered btn--white" href="{{ route('saving-loan') }}">Klik Disini</a>
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
            <div class="heading heading-2">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <h2 class="heading-title">Koperasi Karyawan Maju, Karyawan Sejahtera</h2>
                    </div>
                    <div class="col-12 col-lg-6">
                        <p class="heading-desc">Koperasi Karyawan PT. KBN (Persero) sebagai sebuah koperasi yang bergerak di bidang jasa khususnya simpan dan pinjam, penyaluran tenaga kerja, suplai ATK, sembako, penyewaan kendaraan dinas, dll.</p>
                        <div class="actions-holder"><a class="btn btn--primary" href="page-about.html">
                                Selengkapnya<i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white" href="page-services.html">find your solution</a></div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .heading-->
            <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="flaticon-004-solar-panel"></i></div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Layanan Simpanan</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem explicabo sint pariatur unde commodi beatae exercitationem natus quod recusandae illum in impedit placeat eos consequuntur, quidem deleniti dignissimos, vel nostrum.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="flaticon-039-wind-mill"></i></div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Layanan Pinjaman</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam aut vitae fuga quisquam aperiam odio id alias qui beatae enim rem, cum molestias, modi illo ab reprehenderit autem suscipit quidem?</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="flaticon-013-hydro-power"></i></div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Usaha Mini Market</a></h4>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex eos asperiores nulla obcaecati aut mollitia ad et animi, quo consectetur, explicabo aliquid ipsa quidem dolor officiis amet. Nostrum, aliquid sit!</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="flaticon-004-solar-panel"></i></div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Pengadaan Alat Tulis Kantor</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In temporibus laudantium maxime dignissimos corporis possimus nulla dolor, sit quae! Numquam modi autem neque inventore nulla! Ipsam iusto eligendi veniam repellendus!</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="flaticon-013-hydro-power"></i></div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Penyedia Jasa Tenaga Ahli Daya</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos quaerat fugiat numquam natus eius repellat sit exercitationem quisquam, temporibus quos laudantium corrupti asperiores consequatur optio at quod aliquid ducimus esse.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="flaticon-004-solar-panel"></i></div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Penyedia Jasa Surat Kendaraan</a></h4>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolor, cupiditate voluptate, inventore veritatis minus, ducimus nobis voluptatum iure vel sint ipsa! Maxime aperiam tempora similique perferendis quaerat in incidunt facere.</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
                <div>
                    <div class="service-panel services-panel-2">
                        <div class="service-icon"><i class="flaticon-039-wind-mill"></i></div>
                        <div class="service-content">
                            <h4><a href="services-turbines.html">Penyewaan Mesin Fotokopi</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint eaque similique rerum pariatur ea, repellat dolore fugit. Animi fugiat obcaecati odio, architecto exercitationem sint at nobis pariatur est similique fuga!</p>
                            <ul class="list-unstyled advantages-list">
                            </ul><a class="btn btn--secondary" href="services-turbines.html">Selengkapnya <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End .service-panel-->
                </div>
            </div>
            <!-- End .carousel-->
            <div class="row">
                <div class="col-12 col-lg-5 offset-lg-7">
                    <div class="more-services more-services-2">
                        <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p><a href="javascript:void(0)">99.9% customer satisfaction</a> based on 750+ reviews and 6,154 completed projects</p>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      About #2 Section
      ============================
      -->
    <section class="about about-2" id="about-2">
        <div class="about-wrapper">
            <!--
          ============================
          Video #2 Section
          ============================
          -->
            <div class="video-wrapper">
                <div class="video video-2" id="video-2">
                    <div class="bg-section"><img src="assets/images/video/2.jpg" alt="background" /></div><a class="popup-video btn-video btn-video-2" href="https://www.youtube.com/watch?v=_5e2dijeSUY"> <i class="fas fa-play"></i></a>
                    <!-- End .popup-video-->
                </div>
                <!-- End .video-->
            </div>
            <!-- End .video-wrapper-->
            <div class="about-block-wrapper">
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
            </div>
            <!-- End .about-block-wrapper-->
        </div>
        <!-- End .about-wrapper -->
    </section>
    <!--
      ============================
      Projects Grid #1 Section
      ============================
      -->
    <!-- <section class="projects projects-grid" id="projects-grid-1">
        <div class="container">
            <div class="heading heading-8">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">Latest Projects, Solutions And Energy Supplies</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel owl-carousel carousel-dots carousel-navs" data-slide="4" data-slide-rs="1" data-center="data-center" data-autoplay="true" data-nav="true" data-dots="true" data-space="30" data-loop="true" data-speed="800">
            <div>
                <div class="project-panel" data-hover="">
                    <div class="project-panel-holder">
                        <div class="project-img"><a class="link" href="projects-single.html"></a><img src="assets/images/projects/grid-carousel/1.jpg" alt="project image" /></div>
                        <div class="project-content">
                            <div class="project-title">
                                <h4><a href="projects-single.html">expanding The Solar Supply Finance Program</a></h4>
                            </div>
                            <div class="project-cat"><a href="projects-standard.html">finance</a><a href="projects-standard.html">supply chain</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="project-panel" data-hover="">
                    <div class="project-panel-holder">
                        <div class="project-img"><a class="link" href="projects-single.html"></a><img src="assets/images/projects/grid-carousel/2.jpg" alt="project image" /></div>
                        <div class="project-content">
                            <div class="project-title">
                                <h4><a href="projects-single.html">Addressing Wind Energy Innovation Challenges</a></h4>
                            </div>
                            <div class="project-cat"><a href="projects-standard.html">energy</a><a href="projects-standard.html">green energy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="project-panel" data-hover="">
                    <div class="project-panel-holder">
                        <div class="project-img"><a class="link" href="projects-single.html"></a><img src="assets/images/projects/grid-carousel/3.jpg" alt="project image" /></div>
                        <div class="project-content">
                            <div class="project-title">
                                <h4><a href="projects-single.html">dangerous environment impact of gas</a></h4>
                            </div>
                            <div class="project-cat"><a href="projects-standard.html">eco</a><a href="projects-standard.html">green energy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="project-panel" data-hover="">
                    <div class="project-panel-holder">
                        <div class="project-img"><a class="link" href="projects-single.html"></a><img src="assets/images/projects/grid-carousel/4.jpg" alt="project image" /></div>
                        <div class="project-content">
                            <div class="project-title">
                                <h4><a href="projects-single.html">New Attitude Towards Renewable Energy</a></h4>
                            </div>
                            <div class="project-cat"><a href="projects-standard.html">green energy</a><a href="projects-standard.html">eCO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="project-panel" data-hover="">
                    <div class="project-panel-holder">
                        <div class="project-img"><a class="link" href="projects-single.html"></a><img src="assets/images/projects/grid-carousel/5.jpg" alt="project image" /></div>
                        <div class="project-content">
                            <div class="project-title">
                                <h4><a href="projects-single.html">Smarter Way to Manage Charging Infrastructures</a></h4>
                            </div>
                            <div class="project-cat"><a href="projects-standard.html">elictrec vehicles</a><a href="projects-standard.html">infrastructures</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="project-panel" data-hover="">
                    <div class="project-panel-holder">
                        <div class="project-img"><a class="link" href="projects-single.html"></a><img src="assets/images/projects/grid-carousel/6.jpg" alt="project image" /></div>
                        <div class="project-content">
                            <div class="project-title">
                                <h4><a href="projects-single.html">Addressing Wind Energy Innovation Challenges</a></h4>
                            </div>
                            <div class="project-cat"><a href="projects-standard.html">wind energy</a><a href="projects-standard.html">innovations</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="projects-load-more"> <a class="btn btn--secondary" href="projects-grid.html">explore all projects <i class="energia-arrow-right"></i></a></div>
                </div>
            </div>
        </div>
    </section> -->
    <!--
      ============================
      Processes #1 Section
      ============================
      -->
    <!-- <section class="processes processes-1 bg-overlay bg-overlay-theme4" id="processes-1">
        <div class="bg-section"> <img src="assets/images/background/wavy-pattern.png" alt="Background" /></div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="block-right-holder">
                    <div class="heading heading-light heading-light2">
                        <p class="heading-subtitle">how it works! </p>
                        <h2 class="heading-title">Fueling The Transition To Renewable Power.</h2>
                    </div>
                    <div class="counters-holder">
                        <div class="counter counter-3">
                            <div class="counter-holder">
                                <div class="counter-num"> <span class="counting" data-counterup-nums="25" data-counterup-beginat="12">25</span></div>
                                <div class="counter-img">
                                    <div class="bg-section"><img src="assets/images/counters/1.jpg" alt="image" /></div><i class="flaticon-020-factory"></i>
                                </div>
                            </div>
                            <div class="counter-desc">
                                <p>Years Of Experience In The Solar Industry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="processes-holder">
                    <div class="carousel owl-carousel carousel-dots process-content-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="false" data-speed="800">
                        <div>
                            <div class="process-panel">
                                <p class="process-number">01.</p>
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>we design &amp; ship</h5>
                                        <p>We collaborate with you to design and deliver a system that meets your utility usage and needs, We also selecting equipment from 66+ manufacturers so you do not have to be worried or compromise with your money or with your effort.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="process-panel">
                                <p class="process-number">02.</p>
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>contract or install</h5>
                                        <p>Whether you want to install the system or hire local contractors, managing installation yourself ensures the fastest return on your solar investment.We deliver a system that meets your utility usage and needs, We also selecting equipment from.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="process-panel">
                                <p class="process-number">03.</p>
                                <div class="process-body">
                                    <div class="process-content">
                                        <h5>power your home</h5>
                                        <p>Even after your system is installed and operating, you can always count on Wholesale Solar to provide the support you need, just contact us at any time, and we will be there for you. Whether you want to install the system or hire local contractors.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="images-holder">
                        <div class="carousel owl-carousel process-image-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-drag="false" data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="800"><img src="assets/images/processes/1.jpg" alt="process" /><img src="assets/images/processes/2.jpg" alt="process" /><img src="assets/images/processes/3.jpg" alt="process" /></div>
                        <div class="processes-panel">
                            <h3 class="panel-title">Commercial, Residential And Industrial Solar Systems!</h3>
                            <p class="panel-desc">Our presence ensures timeliness, cost efficiency & compliance adherence!</p><a href="page-contact.html">schedule A Visit <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!--
      ============================
      Testimonials #2 Section
      ============================
      -->
    <!-- <section class="testimonial testimonial-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="heading heading-9">
                        <h2 class="heading-title">success stories</h2>
                    </div>
                </div>
                <div class="col-12">
                    <div class="img-hotspot img-hotspot-2">
                        <div class="img-hotspot-wrap">
                            <div class="img-hotspot-bg"> <img src="assets/images/background/world-map.png" alt="image" /></div>
                            <div class="img-hotspot-pointers">
                                <div class="img-hotspot-pointer" data-spot-x="12%" data-spot-y="25%"><img src="assets/images/testimonial/thumbs/1.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%"><img src="assets/images/testimonial/thumbs/2.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="79%" data-spot-y="15%"><img src="assets/images/testimonial/thumbs/3.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="21%" data-spot-y="36%"><img src="assets/images/testimonial/thumbs/4.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="70%" data-spot-y="39%"><img src="assets/images/testimonial/thumbs/5.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="cta-holder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta">
                        <div class="cta-img"> <img src="assets/images/cta/1.jpg" alt="image" />
                            <div class="cta-icon"> <i class="energia-phone-Icon"></i></div>
                        </div>
                        <div class="cta-body">
                            <h5>Save Money, Save Environment!</h5>
                            <div class="cta-content">
                                <p>Solar power makes energy independence possible. If you have any questions or need help, feel free to contact (002) 01061245741.</p><a class="btn btn--bordered btn--white" href="request-quote.html">free estimate <i class="energia-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="more-actions">
                        <p>Sustainable, reliable & affordable energy systems, <a href="page-services.html">Find Your Solution Now! </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--
      ============================
      Contact #2 Section
      ============================
      -->
    <!-- <section class="contact contact-2" id="contact-2">
        <div class="contact-overlay bg-overlay bg-overlay-theme5">
            <div class="bg-section"><img src="assets/images/background/4.jpg" alt="background" /></div>
        </div>
        <div class="container">
            <div class="contact-panel contact-panel-3">
                <div class="heading heading-light heading-10">
                    <h2 class="heading-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate reprehenderit quia numquam unde </h2>
                    <p class="heading-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam dicta veniam, numquam quae odit magni atque enim earum, aut voluptate officiis hic? Ipsam quibusdam dolore aperiam esse, dolorum laboriosam voluptatibus.</p>
                    <div class="contact-action contact-action-2"><a class="btn btn--white" href="page-about.html">Pelajari Lebih Lanjut <i class="energia-arrow-right"></i></a></div>
                    <div class="contact-quote contact-quote-2"> <i class="flaticon-040-green-energy"></i>
                        <div class="quote-body">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Debitis exercitationem similique nobis maiores mollitia! Officiis minima voluptas odio eius, quas rerum nemo debitis vel iusto suscipit culpa, sequi temporibus veritatis.</p>
                            <a href="https://maps.app.goo.gl/ggcoKRdoF1LibBrT8 " target="_blank"><i class="energia-arrow-right"></i>Peta Kantor Utama</a>
                        </div>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-body">
                        <h5 class="card-heading">Ajukan Pinjaman</h5>
                        <p class="card-desc">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum nesciunt voluptatem consequuntur unde in est? Facere ipsum blanditiis hic distinctio est? Possimus odit quisquam reiciendis fuga in nam dolorum sunt!</p>
                        <form class="contactForm" method="post" action="assets/php/contact.php">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-1">Lorem ipsum dolor sit amet consectetur</label>
                                    <select class="form-control" id="select-1">
                                        <option value="default">adipisicing elit</option>
                                        <option value="AL">Ipsum nesciunt </option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-2">voluptatem consequuntur unde</label>
                                    <select class="form-control" id="select-2">
                                        <option value="default">3:6 months</option>
                                        <option value="AL">6:12 months</option>
                                        <option value="AK">12:24 months</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-usage">Facere ipsum blanditiis hic</label>
                                    <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="1254 KWH" required="" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-3">tempore cupiditate maiores?</label>
                                    <select class="form-control" id="select-3">
                                        <option value="default">Debitis</option>
                                        <option value="AL">exercitationem</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-4">Nam dicta veniam</label>
                                    <select class="form-control" id="select-4">
                                        <option value="default">numquam quae</option>
                                        <option value="AL">odit magni</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-5">Sequi libero nesciunt doloribus</label>
                                    <select class="form-control" id="select-5">
                                        <option value="default">ducimus laborum</option>
                                        <option value="AL">unde sint</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Preferred Contact Method</label>
                                    <div class="custom-radio-group" id="custom-radio-group">
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline1" name="customRadioInline1" />
                                            <label for="customRadioInline1">all</label>
                                        </div>
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline2" name="customRadioInline1" />
                                            <label for="customRadioInline2">email</label>
                                        </div>
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline3" name="customRadioInline1" />
                                            <label for="customRadioInline3">phone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn--secondary w-100">Ajukan <i class="energia-arrow-right"></i></button>
                                </div>
                                <div class="col-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
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
                        <p class="heading-subtitle">Berita & Pengumuman</p>
                        <h2 class="heading-title">Artikel Terbaru</h2>
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">feb 8</span><span class="year">2021</span></div>
                                <!-- End .entry-date		-->
                                <!-- <div class="entry-author">
                                    <p>mike dolley</p>
                                </div> -->
                            </div>
                            <div class="entry-title">
                                <h4><a href="http://kbn.co.id/welcome/konten_depan/view/2746">Rapat Anggota Tahunan Pengesahan Rencana Kerja dan Anggaran Koperasi Karyawan PT. KBN (Persero) Tahun 2015</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="http://kbn.co.id/welcome/konten_depan/view/2746"><img src="assets/images/blog/grid/1.jpg" alt="Filing Solar Power Permits in 2020? Consider Following Important Factors" /></a></div>
                                <!-- <div class="entry-category"><a href="blog-grid.html">solar</a><a href="blog-grid.html">insights</a>
                                </div> -->
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>Jakarta – Koperasi Karyawan PT. KBN (Persero) mengadakan Rapat Anggota Tahunan (RAT) yang bertempat di Gedung Serbaguna, Kantor Pusat PT. KBN (Persero), J...</p>
                            </div>
                            <div class="entry-more"> <a class="btn btn--white btn-bordered" href="http://kbn.co.id/welcome/konten_depan/view/2746" style="width:170px;" >Selengkapnya <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">feb 8</span><span class="year">2021</span></div>
                                <!-- End .entry-date		-->
                                <!-- <div class="entry-author">
                                    <p>peter allan</p>
                                </div> -->
                            </div>
                            <div class="entry-title">
                                <h4><a href="http://kbn.co.id/welcome/konten_depan/view/3088">Rapat Anggota Tahunan Koperasi Karyawan PT. KBN (Persero) Tahun Buku 2014</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="http://kbn.co.id/welcome/konten_depan/view/3088"><img src="assets/images/blog/grid/2.jpg" alt="How to Add Battery Backup to an Existing Grid Tied Solar System by Yourself!" /></a></div>
                                <!-- <div class="entry-category"><a href="blog-grid.html">systems</a><a href="blog-grid.html">battery</a>
                                </div> -->
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>Jakarta – Senin (6/4) Koperasi Karyawan PT. KBN (Persero) mengadakan Rapat Anggota Tahunan (RAT) yang bertempat di Gedung Serbaguna, Kantor Pusat PT. KBN ...</p>
                            </div>
                            <div class="entry-more"> <a class="btn btn--white btn-bordered" href="http://kbn.co.id/welcome/konten_depan/view/3088" style="width:170px;" >Selengkapnya <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">feb 8</span><span class="year">2021</span></div>
                                <!-- End .entry-date		-->
                                <!-- <div class="entry-author">
                                    <p>Sophia barry</p>
                                </div> -->
                            </div>
                            <div class="entry-title">
                                <h4><a href="http://kbn.co.id/welcome/konten_depan/view/3184">Koperasi Karyawan KBN Ikuti Lomba Koperasi Berprestasi</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="http://kbn.co.id/welcome/konten_depan/view/3184"><img src="assets/images/blog/grid/3.jpg" alt="Energy Department Research Will Help Eagles Coexist with Wind Energy Deployment" /></a></div>
                                <!-- <div class="entry-category"><a href="blog-grid.html">research</a><a href="blog-grid.html">energy</a>
                                </div> -->
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p></p>
                            </div>
                            <div class="entry-more"> <a class="btn btn--white btn-bordered" href="http://kbn.co.id/welcome/konten_depan/view/3184" style="width:170px;" >Selengkapnya <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="more-blog"><a href="{{ route('news') }}">Cari tahu lebih banyak tentang berita kami!</a></div>
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

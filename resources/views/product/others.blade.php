@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Produk Kami - Dll</title>
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
                <div class="title">
                    <div class="row">
                        <div class="col-12 col-lg-6 d-flex align-items-center">
                            <h1 class="title-heading">Dll</h1>
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Produk Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dll</li>
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
                                    <li><a href="{{ route('stationary') }}"> <span>Supply Kebutuhan Alat Kantor</span></a></li>
                                    <li><a href="{{ route('drinks') }}"> <span>Penyedia Air Minum dan Galon dan Botol</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- End .widget-services -->
                        <div class="widget widget-reservation"><img src="/assets/images/blog/sidebar/reservation.jpg" alt="img" />
                            <div class="widget-content"><i class="flaticon-040-green-energy"></i>
                                <p>Please feel welcome to contact our friendly reception staff with any general or medical enquiry call us</p>
                                <a class="btn btn--bordered btn--white" href="{{ route('contact') }}">Hubungi CS Koperasi KBN</a>
                                <a href="tel:02144820909"><span class="energia-phone-Icon"></span> (021) 4482-0909</a> <span style="color: white;">ext. 5101 s/d 5108</span>
                            </div>
                        </div>
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
                    <div class="service-entry">
                        <div class="entry-content">
                            <div class="entry-introduction entry-infos">
                                <h5 class="entry-heading">overview</h5>
                                <p class="entry-desc">Wind turbines are manufactured in a wide range of vertical and horizontal axis. The smallest turbines are used for applications such as battery charging for auxiliary power for boats or caravans or to power traffic warning signs. Larger turbines can be used for making contributions to a domestic power supply while selling unused power back to the utility supplier via the electrical grid. Arrays of large turbines, known as wind farms, are becoming an increasingly important source of intermittent renewable energy and are used by many countries as part of a strategy to reduce their reliance on fossil fuels.</p>
                                <p class="entry-desc">One assessment claimed that, as of 2009, wind had the “lowest relative greenhouse gas emissions, the least water consumption demands and… the most favourable social impacts” compared to photovoltaic, hydro, geothermal, coal and gas.[1]</p>
                                <div class="row">
                                    <div class="col-12 col-md-6"><img src="/assets/images/services/single/1.jpg" alt="image" /></div>
                                    <div class="col-12 col-md-6"><img src="/assets/images/services/single/2.jpg" alt="image" /></div>
                                </div>
                            </div>
                            <div class="entry-stats entry-infos">
                                <h5 class="entry-heading">stats &amp; charts </h5>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="entry-desc">Our mix of company-owned and contractor assets allows us to retain optimal levels of control whilst expanding our reach to over 96% of towns in Australia. With 40 years of LTL experience, we are now a trusted LTL freight provider for shippers of all sizes and commodity types.</p>
                                        <p class="entry-desc">
                                            Our LTL service extends to all states and territories, and includes multiple per-week services to places many others only serve occasionally, including Darwin, Alice Springs, Newman, Mt. Isa, Launceston and Burnie.</p>
                                        <p class="entry-desc">
                                            We pride ourselves on providing the best transport and shipping services currently available in Australia. Our skilled personnel, utilising the latest communications, tracking and processing software, combined with decades of experience, ensure all freight is are shipped, trans-shipped and delivered as safely as possible.</p>
                                    </div>
                                    <div class="col-12 col-lg-6"> <img class="entry-chart" src="/assets/images/charts/chart-1.png" alt="Chart image" /></div>
                                </div>
                            </div>
                            <div class="entry-processes">
                                <div class="entry-body">
                                    <div class="process-icon">
                                        <div class="bg-section"> <img src="/assets/images/counters/1.jpg" alt="img" /></div><i class="flaticon-020-factory"></i>
                                    </div>
                                    <div class="processes processes-2">
                                        <div class="processes-holder">
                                            <div class="carousel owl-carousel carousel-dots process-content-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-nav="false" data-dots="true" data-space="0" data-loop="false" data-speed="800">
                                                <div>
                                                    <div class="process-panel process-panel-dark">
                                                        <div class="process-body">
                                                            <div class="process-content">
                                                                <h5>01. we design &amp; ship</h5>
                                                                <p>We collaborate with you to design and deliver a system that meets your utility usage and needs, We also selecting equipment from 66+ manufacturers so you do not have to be worried or compromise with your money or with your effort.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="process-panel process-panel-dark">
                                                        <div class="process-body">
                                                            <div class="process-content">
                                                                <h5>02. contract or install</h5>
                                                                <p>Whether you want to install the system or hire local contractors, managing installation yourself ensures the fastest return on your solar investment.We deliver a system that meets your utility usage and needs, We also selecting equipment from.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="process-panel process-panel-dark">
                                                        <div class="process-body">
                                                            <div class="process-content">
                                                                <h5>03. power your home</h5>
                                                                <p>Even after your system is installed and operating, you can always count on Wholesale Solar to provide the support you need, just contact us at any time, and we will be there for you. Whether you want to install the system or hire local contractors.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="images-holder">
                                    <div class="carousel owl-carousel process-image-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-drag="false" data-nav="true" data-dots="false" data-space="0" data-loop="false" data-speed="800"><img src="/assets/images/processes/1.jpg" alt="process" /><img src="/assets/images/processes/2.jpg" alt="process" /><img src="/assets/images/processes/3.jpg" alt="process" /></div>
                                </div>
                            </div>
                            <div class="entry-video entry-infos">
                                <h5 class="entry-heading">how it works?!</h5>
                                <p class="entry-desc">It has been argued that expanding use of wind power will lead to increasing geopolitical competition over critical materials for wind turbines such as rare earth elements neodymium, praseodymium, and dysprosium. But this perspective has been criticised for failing to recognise that most wind turbines.</p>
                                <!--
                    ============================
                    Video #3 Section
                    ============================
                    -->
                                <div class="video video-3" id="video-3">
                                    <div class="bg-section"><img src="/assets/images/video/3.jpg" alt="background" /></div><a class="popup-video btn-video btn-video-2" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a>
                                    <!-- End .popup-video-->
                                </div>
                                <!-- End .video-->
                            </div>
                            <div class="entry-infos entry-why">
                                <h5 class="entry-heading">why us!</h5>
                                <p class="entry-desc">Despite these diverse developments, developments in fossil fuel systems almost entirely eliminated any wind turbine systems larger than supermicro size. In the early 1970s, however, anti-nuclear protests in Denmark spurred artisan mechanics to develop microturbines of 22 kW.</p>
                                <div class="features features-3">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="feature-panel-holder" data-hover="">
                                                <div class="feature-panel feature-panel-2">
                                                    <div class="feature-icon"><i class="flaticon-024-energy"></i></div>
                                                    <div class="feature-content">
                                                        <h4>Save Your Money</h4>
                                                        <p>Save money on utilities or increase the value of your home.</p>
                                                    </div><a href="page-about.html"><i class="energia-arrow-right"></i> <span>explore more</span> </a>
                                                </div>
                                                <!-- End .feature-panel-->
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="feature-panel-holder" data-hover="">
                                                <div class="feature-panel feature-panel-2">
                                                    <div class="feature-icon"><i class="flaticon-028-greenhouse"></i></div>
                                                    <div class="feature-content">
                                                        <h4>Home Is Energy</h4>
                                                        <p>Everyday the sun provides us with free energy.</p>
                                                    </div><a href="page-about.html"><i class="energia-arrow-right"></i> <span>explore more</span> </a>
                                                </div>
                                                <!-- End .feature-panel-->
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="feature-panel-holder" data-hover="">
                                                <div class="feature-panel feature-panel-2">
                                                    <div class="feature-icon"><i class="flaticon-026-world"></i></div>
                                                    <div class="feature-content">
                                                        <h4>Consult &amp; Plan</h4>
                                                        <p>Our remote industrial solar systems designed to reliably power.</p>
                                                    </div><a href="page-about.html"><i class="energia-arrow-right"></i> <span>explore more</span> </a>
                                                </div>
                                                <!-- End .feature-panel-->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-benefits entry-infos">
                                <h5 class="entry-heading">key benefits</h5>
                                <div class="accordion accordion-2" id="accordion03">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Which Plan Is Right For Me?</a></div>
                                                <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">Do I have to commit to a contract? </a></div>
                                                <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="card active-acc">
                                                <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">What Payment Methods Are Available? </a></div>
                                                <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-infos projects projects-grid projects-grid-2">
                                <h5 class="entry-heading">latest projects</h5>
                                <div class="carousel owl-carousel" data-slide="2" data-slide-rs="2" data-autoplay="true" data-nav="true" data-dots="false" data-space="30" data-loop="true" data-speed="800">
                                    <div>
                                        <div class="project-panel" data-hover="">
                                            <div class="project-panel-holder">
                                                <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/grid-carousel/1.jpg" alt="project image" /></div>
                                                <!-- End .project-img-->
                                                <div class="project-content">
                                                    <div class="project-title">
                                                        <h4><a href="projects-single.html">expanding The Solar Supply Finance Program</a></h4>
                                                    </div>
                                                    <div class="project-cat"><a href="projects-standard.html">finance</a><a href="projects-standard.html">supply chain</a>
                                                    </div>
                                                </div>
                                                <!-- End .project-content -->
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="project-panel" data-hover="">
                                            <div class="project-panel-holder">
                                                <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/grid-carousel/2.jpg" alt="project image" /></div>
                                                <!-- End .project-img-->
                                                <div class="project-content">
                                                    <div class="project-title">
                                                        <h4><a href="projects-single.html">Addressing Wind Energy Innovation Challenges</a></h4>
                                                    </div>
                                                    <div class="project-cat"><a href="projects-standard.html">energy</a><a href="projects-standard.html">green energy</a>
                                                    </div>
                                                </div>
                                                <!-- End .project-content -->
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="project-panel" data-hover="">
                                            <div class="project-panel-holder">
                                                <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/grid-carousel/3.jpg" alt="project image" /></div>
                                                <!-- End .project-img-->
                                                <div class="project-content">
                                                    <div class="project-title">
                                                        <h4><a href="projects-single.html">dangerous environment impact of gas</a></h4>
                                                    </div>
                                                    <div class="project-cat"><a href="projects-standard.html">eco</a><a href="projects-standard.html">green energy</a>
                                                    </div>
                                                </div>
                                                <!-- End .project-content -->
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="project-panel" data-hover="">
                                            <div class="project-panel-holder">
                                                <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/grid-carousel/4.jpg" alt="project image" /></div>
                                                <!-- End .project-img-->
                                                <div class="project-content">
                                                    <div class="project-title">
                                                        <h4><a href="projects-single.html">New Attitude Towards Renewable Energy</a></h4>
                                                    </div>
                                                    <div class="project-cat"><a href="projects-standard.html">green energy</a><a href="projects-standard.html">eCO</a>
                                                    </div>
                                                </div>
                                                <!-- End .project-content -->
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="project-panel" data-hover="">
                                            <div class="project-panel-holder">
                                                <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/grid-carousel/5.jpg" alt="project image" /></div>
                                                <!-- End .project-img-->
                                                <div class="project-content">
                                                    <div class="project-title">
                                                        <h4><a href="projects-single.html">Smarter Way to Manage Charging Infrastructures</a></h4>
                                                    </div>
                                                    <div class="project-cat"><a href="projects-standard.html">elictrec vehicles</a><a href="projects-standard.html">infrastructures</a>
                                                    </div>
                                                </div>
                                                <!-- End .project-content -->
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="project-panel" data-hover="">
                                            <div class="project-panel-holder">
                                                <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/grid-carousel/6.jpg" alt="project image" /></div>
                                                <!-- End .project-img-->
                                                <div class="project-content">
                                                    <div class="project-title">
                                                        <h4><a href="projects-single.html">Addressing Wind Energy Innovation Challenges</a></h4>
                                                    </div>
                                                    <div class="project-cat"><a href="projects-standard.html">wind energy</a><a href="projects-standard.html">innovations</a>
                                                    </div>
                                                </div>
                                                <!-- End .project-content -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End .service-entry-->
                </div>
                <!-- End .col-lg-8-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      Clients #1 Section
      ============================
      -->
    <section class="clients clients-carousel clients-1" id="clients-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="d-none">Our Clients</h3>
                </div>
                <div class="col-12">
                    <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="3000">
                        <div class="client"><a href="javascript:void(0)"> </a><img src="/assets/images/clients/1.png" alt="client" /></div>
                        <div class="client"><a href="javascript:void(0)"> </a><img src="/assets/images/clients/2.png" alt="client" /></div>
                        <div class="client"><a href="javascript:void(0)"> </a><img src="/assets/images/clients/3.png" alt="client" /></div>
                        <div class="client"><a href="javascript:void(0)"> </a><img src="/assets/images/clients/4.png" alt="client" /></div>
                        <div class="client"><a href="javascript:void(0)"> </a><img src="/assets/images/clients/5.png" alt="client" /></div>
                        <div class="client"><a href="javascript:void(0)"> </a><img src="/assets/images/clients/6.png" alt="client" /></div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      Contact #1 Section
      ============================
      -->
    <section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
        <div class="bg-section"><img src="/assets/images/background/3.jpg" alt="background" /></div>
        <div class="container">
            <div class="contact-panel contact-panel-3">
                <div class="heading heading-light heading-6">
                    <p class="heading-subtitle">Improving The Performance Of Solar Energy.</p>
                    <h2 class="heading-title">Discover Independence Through Using The Power Of Solar Panels!</h2>
                    <p class="heading-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future – no matter how far along the journey to energize society with affordable energy systems.</p>
                    <div class="advantages-list-holder">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <ul class="list-unstyled advantages-list advantages-list-2">
                                    <li>Reliabe and performance</li>
                                    <li>Solar material financing</li>
                                    <li>In-time manufacturing</li>
                                </ul>
                            </div>
                            <div class="col-12 col-lg-6">
                                <ul class="list-unstyled advantages-list advantages-list-2">
                                    <li>50% more energy output</li>
                                    <li>Built using ntype mono</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="contact-action"><a class="btn btn--white" href="page-about.html">learn more <i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white" href="page-faqs.html">our core values</a></div>
                    <div class="contact-quote"> <img src="/assets/images/icons/noteicon.png" alt="icon" />
                        <p>Receive an accurate quote within 3-5 days when you fill out this form. Or, give us a call: <a href="tel:01061245741">(002) 01061245741</a></p>
                    </div>
                </div>
                <div class="contact-card">
                    <div class="contact-body">
                        <h5 class="card-heading">Request A Quote</h5>
                        <p class="card-desc">We take great pride in everything that we do, control over products allows us to ensure our customers receive the best quality service.</p>
                        <form class="contactForm" method="post" action="/assets/php/contact.php">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-1">Who will be install system?</label>
                                    <select class="form-control" id="select-1">
                                        <option value="default">local contractor</option>
                                        <option value="AL">foreign contractor </option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-2">System completed by?</label>
                                    <select class="form-control" id="select-2">
                                        <option value="default">3:6 months</option>
                                        <option value="AL">6:12 months</option>
                                        <option value="AK">12:24 months</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-usage">Monthly electric usage in kWh?</label>
                                    <input class="form-control" type="text" id="contact-usage" name="contact-usage" placeholder="1254 KWH" required="" />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-3">Solar system type?</label>
                                    <select class="form-control" id="select-3">
                                        <option value="default">OffGrid</option>
                                        <option value="AL">OnGrid</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-4">Solar panels place?</label>
                                    <select class="form-control" id="select-4">
                                        <option value="default">huge farm</option>
                                        <option value="AL">small farm</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-5">Materials on your roof?</label>
                                    <select class="form-control" id="select-5">
                                        <option value="default">comp shingle</option>
                                        <option value="AL">roof shingle</option>
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
                                    <button class="btn btn--secondary w-100">submit request <i class="energia-arrow-right"></i></button>
                                </div>
                                <div class="col-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- End .contact-body -->
                </div>
            </div>
            <!-- End .contact-panel-->
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

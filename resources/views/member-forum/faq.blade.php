@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Suara Anggota - FAQ</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #6 Section
      ============================
      -->
    <section class="page-title page-title-6" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section"><img src="/assets/images/page-titles/6.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">FAQ</h1>
                            <p class="title-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future.</p>
                            <div class="title-action"> <a class="btn btn--bordered btn--white" href="{{ route('contact') }}"> <span>learn more</span><i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Suara Anggota</a></li>
                    <li class="breadcrumb-item active" aria-current="page">FAQ</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title  -->
    <!--
      ============================
      Faqs #2 Section
      ============================
      -->
    <section class="faqs faqs-2" id="faqs-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-18 text-center">
                        <p class="heading-subtitle">What Are You Looking For?</p>
                        <h2 class="heading-title">Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="accordion accordion-2" id="accordion03">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Which Plan Is Right For Me?</a></div>
                                <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card active-acc">
                                <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">Do I have to commit to a contract? </a></div>
                                <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-5" href="#collapse01-5">What Payment Methods Are Available?</a></div>
                                <div class="collapse" id="collapse01-5" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-7" href="#collapse01-7">What if I pick the wrong plan?</a></div>
                                <div class="collapse" id="collapse01-7" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-9" href="#collapse01-9">Any contracts or commitments?</a></div>
                                <div class="collapse" id="collapse01-9" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">What are my payment options? </a></div>
                                <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-4" href="#collapse01-4">How does the free trial work?</a></div>
                                <div class="collapse" id="collapse01-4" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-6" href="#collapse01-6">When should I receive my Shipment?</a></div>
                                <div class="collapse" id="collapse01-6" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-8" href="#collapse01-8">How do I cancel my Shipment?</a></div>
                                <div class="collapse" id="collapse01-8" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card active-acc">
                                <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-10" href="#collapse01-10">If I have questions, where can I find answers?</a></div>
                                <div class="collapse show" id="collapse01-10" data-bs-parent="#accordion03">
                                    <div class="card-body">With any financial product that you buy, it is important that you know you are getting the best advice from a reputable company as often you will have to</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <div class="container">
            <div class="more-faqs">
                <p>Sustainable, reliable & affordable energy systems, <a href="page-services.html">find your solutions now! </a></p>
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      Counters #1 Section
      ============================
      -->
    <section class="counters counters-1 bg-overlay bg-overlay-theme2" id="counters-1">
        <div class="bg-section"> <img src="/assets/images/background/2.jpg" alt="Background" /></div>
        <div class="container">
            <div class="heading heading-4 heading-light heading-light2">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <p class="heading-subtitle">Pioneers Of Solar & Renewable Energy!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">Commercial, Residential & Industrial Systems!</h2>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <p class="heading-desc">Today, our company is one of the most important PV suppliers in the North America and Europe. Our sales offices and warehouses include PV industry experience enables us to provide in-depth material sourcing and supply chain expertise for every step of production and installation process.</p>
                        <div class="actions-holder"><a class="btn btn--primary btn--inversed" href="page-contact.html">
                                awards & milestones<i class="energia-arrow-right"></i></a></div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .heading-->
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="img-hotspot">
                        <div class="img-hotspot-wrap">
                            <div class="img-hotspot-bg"> <img src="/assets/images/background/world-map-dark.png" alt="image" /></div>
                            <div class="img-hotspot-pointers">
                                <div class="img-hotspot-pointer" data-spot-x="29%" data-spot-y="72%">
                                    <div class="pointer-icon"></div>
                                    <div class="info" data-info-x="" data-info-y="">
                                        <div class="border-outer">
                                            <div class="border-inner"><i class="flaticon-012-mining-1"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%">
                                    <div class="pointer-icon"></div>
                                    <div class="info" data-info-x="" data-info-y="">
                                        <div class="border-outer">
                                            <div class="border-inner"><i class="flaticon-035-battery"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="75%" data-spot-y="17%">
                                    <div class="pointer-icon"></div>
                                    <div class="info" data-info-x="" data-info-y="">
                                        <div class="border-outer">
                                            <div class="border-inner"><i class="flaticon-027-energy-tower"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="34%" data-spot-y="9%">
                                    <div class="pointer-icon"></div>
                                    <div class="info" data-info-x="" data-info-y="">
                                        <div class="border-outer">
                                            <div class="border-inner"><i class="flaticon-032-recycle"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="59%" data-spot-y="21%">
                                    <div class="pointer-icon"></div>
                                    <div class="info" data-info-x="" data-info-y="">
                                        <div class="border-outer">
                                            <div class="border-inner"><i class="flaticon-030-biology"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="68%" data-spot-y="38%">
                                    <div class="pointer-icon"></div>
                                    <div class="info" data-info-x="" data-info-y="">
                                        <div class="border-outer">
                                            <div class="border-inner"><i class="flaticon-034-coal"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="15%" data-spot-y="29%">
                                    <div class="pointer-icon"></div>
                                    <div class="info" data-info-x="" data-info-y="">
                                        <div class="border-outer">
                                            <div class="border-inner"><i class="flaticon-039-wind-mill"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 offset-lg-1">
                    <!-- Start .counter-->
                    <div class="counter counter-2">
                        <div class="counter-num"> <span class="counting" data-counterup-nums="6,154">6,154</span>
                            <h6>projects</h6>
                        </div>
                        <div class="counter-desc">
                            <p>Yet those that embrace change are thriving, building bigger, better, faster, and stronger products than ever.</p>
                        </div>
                    </div>
                    <!-- End .counter-->
                    <!-- Start .counter-->
                    <div class="counter counter-2">
                        <div class="counter-num"> <span class="counting" data-counterup-nums="2,512">2,512</span>
                            <h6>employees</h6>
                        </div>
                        <div class="counter-desc">
                            <p>Yet those that embrace change are thriving, building bigger, better, faster, and stronger products than ever.</p>
                        </div>
                    </div>
                    <!-- End .counter-->
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      Blog #1 Section
      ============================
      -->
    <section class="blog blog-1 blog-grid" id="blog-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-7 text-center">
                        <h2 class="heading-title">recent articles</h2>
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">jan 21</span><span class="year">2021</span></div>
                                <!-- End .entry-date		-->
                                <div class="entry-author">
                                    <p>mike dolley</p>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">Filing Solar Power Permits in 2020? Consider Following Important Factors</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="blog-single.html"><img src="/assets/images/blog/grid/1.jpg" alt="Filing Solar Power Permits in 2020? Consider Following Important Factors" /></a></div>
                                <div class="entry-category"><a href="blog-grid.html">solar</a><a href="blog-grid.html">insights</a>
                                </div>
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>All of these factors are important consider when permitting your solar system, and can help streamline your process. Take time to consider these.</p>
                            </div>
                            <div class="entry-more"> <a class="btn btn--white btn-bordered" href="blog-single.html">read more <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">jan 25</span><span class="year">2021</span></div>
                                <!-- End .entry-date		-->
                                <div class="entry-author">
                                    <p>peter allan</p>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">How to Add Battery Backup to an Existing Grid Tied Solar System by Yourself!</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="blog-single.html"><img src="/assets/images/blog/grid/2.jpg" alt="How to Add Battery Backup to an Existing Grid Tied Solar System by Yourself!" /></a></div>
                                <div class="entry-category"><a href="blog-grid.html">systems</a><a href="blog-grid.html">battery</a>
                                </div>
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>Batteries are the most expensive part of a solar system. Between appropriately-size battery bank and a battery-based inverter like the Outback Radian.</p>
                            </div>
                            <div class="entry-more"> <a class="btn btn--white btn-bordered" href="blog-single.html">read more <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
                <div class="col-12 col-lg-4">
                    <div class="blog-entry" data-hover="">
                        <div class="entry-content">
                            <div class="entry-meta">
                                <div class="entry-date"><span class="day">jan 28</span><span class="year">2021</span></div>
                                <!-- End .entry-date		-->
                                <div class="entry-author">
                                    <p>Sophia barry</p>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h4><a href="blog-single.html">Energy Department Research Will Help Eagles Coexist with Wind Energy Deployment</a></h4>
                            </div>
                            <div class="entry-img-wrap">
                                <div class="entry-img"><a href="blog-single.html"><img src="/assets/images/blog/grid/3.jpg" alt="Energy Department Research Will Help Eagles Coexist with Wind Energy Deployment" /></a></div>
                                <div class="entry-category"><a href="blog-grid.html">research</a><a href="blog-grid.html">energy</a>
                                </div>
                            </div>
                            <!-- End .entry-img-->
                            <div class="entry-bio">
                                <p>Batteries are the most expensive part of a solar system. Between appropriately-size battery bank and a battery-based inverter like the Outback Radian.</p>
                            </div>
                            <div class="entry-more"> <a class="btn btn--white btn-bordered" href="blog-single.html">read more <i class="energia-arrow-right"></i></a></div>
                        </div>
                    </div>
                    <!-- End .entry-content-->
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="more-blog"><a href="blog-grid.html">find out more about our news!</a></div>
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

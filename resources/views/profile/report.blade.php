@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Profil Koperasi - Laporan</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #5 Section
      ============================
      -->
    <section class="page-title page-title-5" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="/assets/images/page-titles/5.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Laporan</h1>
                            <p class="title-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future.</p>
                            <div class="title-action"> <a class="btn btn--primary btn--inversed" href="page-contact.html">
                                    get started<i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white" href="page-about.html">explore our plans</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil Koperasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Laporan</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->
    <!--
      ============================
      Awards Section
      ============================
      -->
    <section class="awards awards awards-1" id="awards">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-17 text-center">
                        <p class="heading-subtitle">Energize Society With Sustainable Energy!</p>
                        <h2 class="heading-title">A Leading Supplier Of Solar Materials For Contractors</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="award">
                        <div class="award-img"><img src="/assets/images/awards/1.png" alt="award img" /></div>
                        <!-- End .work-img-->
                        <div class="award-content">
                            <h4 class="award-title"><a href="work-single-small-images.html">family business award</a></h4>
                            <p class="award-desc">We believe that partnerships are fundamental to our growth. We'll seek the highest quality global forwarding services.</p>
                        </div>
                        <!-- End .award-content-->
                    </div>
                    <!-- End .award-->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="award">
                        <div class="award-img"><img src="/assets/images/awards/2.png" alt="award img" /></div>
                        <!-- End .work-img-->
                        <div class="award-content">
                            <h4 class="award-title"><a href="work-single-small-images.html">Excellence in Exporting</a></h4>
                            <p class="award-desc">When we communicate, we are honest and direct. We won't make excuses, simply offer you a concrete solutions.</p>
                        </div>
                        <!-- End .award-content-->
                    </div>
                    <!-- End .award-->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="award">
                        <div class="award-img"><img src="/assets/images/awards/3.png" alt="award img" /></div>
                        <!-- End .work-img-->
                        <div class="award-content">
                            <h4 class="award-title"><a href="work-single-small-images.html">Top Leading Global Trade</a></h4>
                            <p class="award-desc">As a logistics solutions provider, we’ll monitor your logistical objectives and make sure all your logistical activities.</p>
                        </div>
                        <!-- End .award-content-->
                    </div>
                    <!-- End .award-->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="award">
                        <div class="award-img"><img src="/assets/images/awards/4.png" alt="award img" /></div>
                        <!-- End .work-img-->
                        <div class="award-content">
                            <h4 class="award-title"><a href="work-single-small-images.html">Sales Excellence Award </a></h4>
                            <p class="award-desc">We believe that partnerships are fundamental to our growth. We'll seek the highest quality global forwarding services.</p>
                        </div>
                        <!-- End .award-content-->
                    </div>
                    <!-- End .award-->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="award">
                        <div class="award-img"><img src="/assets/images/awards/5.png" alt="award img" /></div>
                        <!-- End .work-img-->
                        <div class="award-content">
                            <h4 class="award-title"><a href="work-single-small-images.html">Construction Excellence</a></h4>
                            <p class="award-desc">When we communicate, we are honest and direct. We won't make excuses, simply offer you a concrete solutions.</p>
                        </div>
                        <!-- End .award-content-->
                    </div>
                    <!-- End .award-->
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="award">
                        <div class="award-img"><img src="/assets/images/awards/6.png" alt="award img" /></div>
                        <!-- End .work-img-->
                        <div class="award-content">
                            <h4 class="award-title"><a href="work-single-small-images.html">safety award</a></h4>
                            <p class="award-desc">As a logistics solutions provider, we’ll monitor your logistical objectives and make sure all your logistical activities.</p>
                        </div>
                        <!-- End .award-content-->
                    </div>
                    <!-- End .award-->
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      Faqs #1 Section
      ============================
      -->
    <section class="faqs faqs-1 bg-overlay bg-overlay-theme" id="faqs-1">
        <div class="bg-section"> <img src="/assets/images/background/4.jpg" alt="background" /></div>
        <div class="container">
            <div class="heading heading-15 heading-light">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <p class="heading-subtitle">Improving The Performance Of Solar Energy.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">Discover Independence Through Using The Power Of Solar Panels!</h2>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <p class="heading-desc">Today, our company is one of the most important PV suppliers in the North America and Europe. Our sales offices and warehouses include PV industry experience enables us to provide in-depth material sourcing and supply chain expertise for every step of production and installation process.</p>
                        <div class="faqs-action"><a class="btn btn--white" href="page-about.html">learn more <i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white" href="page-faqs.html">our core values</a></div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .heading-->
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="img-hotspot img-hotspot-3">
                        <div class="img-hotspot-wrap">
                            <div class="img-hotspot-bg"> <img src="/assets/images/background/world-map-white.png" alt="image" /></div>
                            <div class="img-hotspot-pointers">
                                <div class="img-hotspot-pointer" data-spot-x="15%" data-spot-y="29%">
                                    <div class="pointer-icon"></div>
                                    <div class="info right" data-info-x="18px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%">
                                    <div class="pointer-icon"></div>
                                    <div class="info left" data-info-x="-160px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="68%" data-spot-y="23%">
                                    <div class="pointer-icon"></div>
                                    <div class="info left" data-info-x="-160px" data-info-y="-97px"><span>2307 Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <div class="accordion accordion-light" id="accordion03">
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-1" href="#collapse01-1">Which Plan Is Right For Me?</a></div>
                                <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                    <div class="card-body">Our staff strives to make each interaction with patients clear, concise, and inviting. Support the important work of Medicsh Hospital by making a much-needed donation today. We will work with you to develop individualised care plans, including management of chronic diseases.</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-2" href="#collapse01-2">Do I have to commit to a contract? </a></div>
                                <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                                    <div class="card-body">Our staff strives to make each interaction with patients clear, concise, and inviting. Support the important work of Medicsh Hospital by making a much-needed donation today. We will work with you to develop individualised care plans, including management of chronic diseases.</div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="card active-acc">
                                <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse01-3" href="#collapse01-3">What Payment Methods Are Available? </a></div>
                                <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                                    <div class="card-body">Our staff strives to make each interaction with patients clear, concise, and inviting. Support the important work of Medicsh Hospital by making a much-needed donation today. We will work with you to develop individualised care plans, including management of chronic diseases.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
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
                        <p class="heading-subtitle">news & Announcements</p>
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

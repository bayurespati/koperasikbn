@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Profil Koperasi - Visi Misi</title>
@endpush

@push('additional_css')
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
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="/assets/images/page-titles/2.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <div class="title-list">
                                <div class="icon"> <i class="flaticon-040-green-energy"></i></div>
                                <div class="icon"> <i class="flaticon-020-factory"></i></div>
                                <div class="icon"> <i class="flaticon-031-nuclear-plant"></i></div>
                            </div>
                            <h1 class="title-heading">Visi Misi</h1>
                            <p class="title-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future.</p>
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
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->
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
                        <p class="heading-subtitle">Complete Commercial And Residential Solar Systems</p>
                        <h2 class="heading-title">The Pioneers World Of Solar And Renewable Energy!</h2>
                    </div>
                    <div class="about-block">
                        <div class="block-left">
                            <p class="paragraph">The increase in extreme weather and rising sea levels are unmistakable signs of climate change. Roughly 850 million people still without access to electricity, which is the foundation of sustainable development.</p>
                            <p>Our solar programs encompass a broad range of material sourcing, trade financing and inventory management services to help customers become more profitable by optimizing working capital and increasing liquidity. How can we meet the growing demand for electricity while protecting our climate?</p>
                            <div class="signature-block"><a class="btn btn--secondary" href="page-about.html">read more <i class="energia-arrow-right"></i></a>
                                <div class="signature-body">
                                    <h6>michael brian</h6>
                                    <p>co founder</p><img class="signature-img" src="/assets/images/signature/1.png" alt="signature" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-6-->
                <div class="col-12 col-lg-5 offset-lg-1">
                    <div class="about-img">
                        <div class="about-img-holder bg-overlay">
                            <div class="bg-section"><img src="/assets/images/about/2.jpg" alt="about Image" /></div>
                        </div>
                        <!-- Start .counter-->
                        <div class="counter counter-4">
                            <div class="counter-num"> <span class="counting" data-counterup-nums="25">25</span>
                                <p>+</p>
                                <h6>years of experience</h6>
                            </div>
                        </div>
                        <!-- End .counter-->
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      Processes #1 Section
      ============================
      -->
    <section class="processes processes-1 bg-overlay bg-overlay-theme4" id="processes-1">
        <div class="bg-section"> <img src="/assets/images/background/wavy-pattern.png" alt="Background" /></div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="block-right-holder">
                    <div class="heading heading-light heading-light2">
                        <p class="heading-subtitle">how it works! </p>
                        <h2 class="heading-title">Fueling The Transition To Renewable Power.</h2>
                    </div>
                    <div class="counters-holder">
                        <!-- Start .counter-->
                        <div class="counter counter-3">
                            <div class="counter-holder">
                                <div class="counter-num"> <span class="counting" data-counterup-nums="25" data-counterup-beginat="12">25</span></div>
                                <div class="counter-img">
                                    <div class="bg-section"><img src="/assets/images/counters/1.jpg" alt="image" /></div><i class="flaticon-020-factory"></i>
                                </div>
                            </div>
                            <div class="counter-desc">
                                <p>Years Of Experience In The Solar Industry</p>
                            </div>
                        </div>
                        <!-- End .counter-->
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
                        <div class="carousel owl-carousel process-image-carousel" data-slide="1" data-slide-rs="1" data-autoplay="true" data-drag="false" data-nav="false" data-dots="false" data-space="0" data-loop="false" data-speed="800"><img src="/assets/images/processes/1.jpg" alt="process" /><img src="/assets/images/processes/2.jpg" alt="process" /><img src="/assets/images/processes/3.jpg" alt="process" /></div>
                        <div class="processes-panel">
                            <h3 class="panel-title">Commercial, Residential And Industrial Solar Systems!</h3>
                            <p class="panel-desc">Our presence ensures timeliness, cost efficiency & compliance adherence!</p><a href="page-contact.html">schedule A Visit <i class="energia-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </section>
    <!--
      ============================
      Testimonials #2 Section
      ============================
      -->
    <section class="testimonial testimonial-2">
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
                            <div class="img-hotspot-bg"> <img src="/assets/images/background/world-map.png" alt="image" /></div>
                            <div class="img-hotspot-pointers">
                                <div class="img-hotspot-pointer" data-spot-x="12%" data-spot-y="25%"><img src="/assets/images/testimonial/thumbs/1.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%"><img src="/assets/images/testimonial/thumbs/2.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="79%" data-spot-y="15%"><img src="/assets/images/testimonial/thumbs/3.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="21%" data-spot-y="36%"><img src="/assets/images/testimonial/thumbs/4.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
                                </div>
                                <div class="img-hotspot-pointer" data-spot-x="70%" data-spot-y="39%"><img src="/assets/images/testimonial/thumbs/5.jpg" alt="pointer" />
                                    <div class="info right" data-info-x="-20px" data-info-y="-152px"><span>Energia has been absolutely the best to work with. Their attention to detail and customer support was amazing!!</span></div>
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
    <div class="cta-holder">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta">
                        <div class="cta-img"> <img src="/assets/images/cta/1.jpg" alt="image" />
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
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </div>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

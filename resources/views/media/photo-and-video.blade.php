@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Media - Foto & Video</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #12 Section
      ============================
      -->
    <section class="page-title page-title-12" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
            <div class="bg-section"><img src="/assets/images/page-titles/12.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 offset-lg-3">
                        <div class="title text-center">
                            <h1 class="title-heading">Foto & Video</h1>
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
                    <li class="breadcrumb-item"><a href="#">Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Foto & Video</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title-->
    <!--
      ============================
      Projects Modern #3 Section
      ============================
      -->
    <section class="projects projects-modern projects-modern-3" id="projects-modern-3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Start .projects-filter-->
                    <div class="projects-filter">
                        <ul class="list-inline mb-0">
                            <li><a class="active-filter" href="javascript:void(0)" data-filter="*">All</a></li>
                            <li><a href="javascript:void(0)" data-filter=".filter-finance">finance</a></li>
                            <li><a href="javascript:void(0)" data-filter=".filter-supply">supply chain</a></li>
                            <li><a href="javascript:void(0)" data-filter=".filter-inovations">inovations</a></li>
                            <li><a href="javascript:void(0)" data-filter=".filter-infrastructure">infrastructure</a></li>
                            <li><a href="javascript:void(0)" data-filter=".filter-green">green energy</a></li>
                            <li><a href="javascript:void(0)" data-filter=".filter-eco">ECO</a></li>
                        </ul>
                    </div>
                    <!-- End .projects-filter-->
                </div>
            </div>
            <!-- End .row-->
            <div class="row" id="projects-all">
                <div class="col-12 col-md-6 col-lg-4 project-item filter-finance filter-supply">
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/modern/1.jpg" alt="project image" /></div>
                            <!-- End .project-img-->
                            <div class="project-content">
                                <div class="project-cat"><a href="projects-standard.html">finance</a><a href="projects-standard.html">supply chain</a>
                                </div>
                                <div class="project-title">
                                    <h4><a href="projects-single.html">expanding The Solar Supply Chain Finance Program</a></h4>
                                </div>
                                <div class="project-desc">
                                    <p>The great thing about solar panels is that they do not requiremaintenance. However, it is still important to get them checked regularly to ensure safe.</p>
                                </div>
                                <div class="project-more"> <a class="btn btn--bordered btn--white" href="projects-single.html">explore more <i class="energia-arrow-right"></i></a></div>
                            </div>
                            <!-- End .project-content -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 project-item filter-green">
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/modern/2.jpg" alt="project image" /></div>
                            <!-- End .project-img-->
                            <div class="project-content">
                                <div class="project-cat"><a href="projects-standard.html">energy</a><a href="projects-standard.html">green energy</a>
                                </div>
                                <div class="project-title">
                                    <h4><a href="projects-single.html">Addressing Wind Energy Innovation Challenges</a></h4>
                                </div>
                                <div class="project-desc">
                                    <p>As wind turbines increase in size &amp; height to capture more energy, and as wind power plants with many turbines spread out over areas </p>
                                </div>
                                <div class="project-more"> <a class="btn btn--bordered btn--white" href="projects-single.html">explore more <i class="energia-arrow-right"></i></a></div>
                            </div>
                            <!-- End .project-content -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 project-item filter-infrastructure">
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/modern/3.jpg" alt="project image" /></div>
                            <!-- End .project-img-->
                            <div class="project-content">
                                <div class="project-cat"><a href="projects-standard.html">electric vehicle</a><a href="projects-standard.html">infrastructure</a>
                                </div>
                                <div class="project-title">
                                    <h4><a href="projects-single.html">Smarter Ways to Manage EV Charging Infrastructures</a></h4>
                                </div>
                                <div class="project-desc">
                                    <p>If you own an electric vehicle (EV), the recurring question you’ll get is: how easy is it to charge the battery on the road? Clearly, people simply want to get.</p>
                                </div>
                                <div class="project-more"> <a class="btn btn--bordered btn--white" href="projects-single.html">explore more <i class="energia-arrow-right"></i></a></div>
                            </div>
                            <!-- End .project-content -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 project-item filter-green filter-eco">
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/modern/4.jpg" alt="project image" /></div>
                            <!-- End .project-img-->
                            <div class="project-content">
                                <div class="project-cat"><a href="projects-standard.html">green energy</a><a href="projects-standard.html">eco</a>
                                </div>
                                <div class="project-title">
                                    <h4><a href="projects-single.html">New Public Attitude Tracker Towards Renewable Energy</a></h4>
                                </div>
                                <div class="project-desc">
                                    <p>Government tracks the nation’s changing attitudes towards energy infrastructure closely, with quarterly surveys led by the Department of Business.</p>
                                </div>
                                <div class="project-more"> <a class="btn btn--bordered btn--white" href="projects-single.html">explore more <i class="energia-arrow-right"></i></a></div>
                            </div>
                            <!-- End .project-content -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 project-item filter-inovations">
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/modern/5.jpg" alt="project image" /></div>
                            <!-- End .project-img-->
                            <div class="project-content">
                                <div class="project-cat"><a href="projects-standard.html">energy</a><a href="projects-standard.html">inovation</a>
                                </div>
                                <div class="project-title">
                                    <h4><a href="projects-single.html">Dangerous Environmental Impacts of Natural Gas</a></h4>
                                </div>
                                <div class="project-desc">
                                    <p>Cleaner burning than other fossil fuels, the combustion of gas produces negligible amounts of particulates. Burning natural gas oxides.</p>
                                </div>
                                <div class="project-more"> <a class="btn btn--bordered btn--white" href="projects-single.html">explore more <i class="energia-arrow-right"></i></a></div>
                            </div>
                            <!-- End .project-content -->
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 project-item filter-eco filter-supply">
                    <div class="project-panel" data-hover="">
                        <div class="project-panel-holder">
                            <div class="project-img"><a class="link" href="projects-single.html"></a><img src="/assets/images/projects/modern/6.jpg" alt="project image" /></div>
                            <!-- End .project-img-->
                            <div class="project-content">
                                <div class="project-cat"><a href="projects-standard.html">eco</a><a href="projects-standard.html">supply chain</a>
                                </div>
                                <div class="project-title">
                                    <h4><a href="projects-single.html">What Does the Future Hold for Renewable Energy?</a></h4>
                                </div>
                                <div class="project-desc">
                                    <p>Overall, renewable electricity is predicted to grow by 1 200 GW by 2024, the equivalent of the total electricity capacity. Industry experts predict that the US.</p>
                                </div>
                                <div class="project-more"> <a class="btn btn--bordered btn--white" href="projects-single.html">explore more <i class="energia-arrow-right"></i></a></div>
                            </div>
                            <!-- End .project-content -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End .row-->
            <div class="row">
                <div class="col-12 text-center"><a class="btn btn--primary" id="load-more" href="javascript:void(0)">load more <i class="fas fa-plus"></i></a></div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

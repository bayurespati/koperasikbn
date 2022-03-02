@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Profil Koperasi - Manajemen</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      Module Search
      ============================
      -->
    <div class="module-content module-search-warp">
        <div class="pos-vertical-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-8 offset-lg-2">
                        <form class="form-search">
                            <input class="form-control" type="text" placeholder="type words then enter" />
                            <button></button>
                        </form>
                        <!-- End .form-search -->
                    </div>
                    <!-- End .col-lg-8 -->
                </div>
                <!--  End .row-->
            </div>
            <!--  End .container-->
        </div><a class="module-cancel" href="#"><i class="fas fa-times"></i></a>
        <!-- End .module-cancel-->
    </div>
    <!--
      ============================
      PageTitle #3 Section
      ============================
      -->
    <section class="page-title page-title-3" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="/assets/images/page-titles/3.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Manajemen</h1>
                            <p class="title-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future.</p>
                            <div class="title-action"> <a class="btn btn--white" href="{{ route('award-certificate') }}"> <span>awards & milestones</span><i class="energia-arrow-right"></i></a></div>
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
                    <li class="breadcrumb-item active" aria-current="page">Manajemen</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->
    <!--
      ============================
      Team #1 Section
      ============================
      -->
    <section class="team team-1" id="team">
        <div class="container">
            <div class="row">
                <div class=" col-12 col-md-6 col-lg-4">
                    <div class="member">
                        <div class="member-img"><img src="/assets/images/team/1.jpg" alt="Member Mike Dooley" /></div>
                        <!-- End .member-img-->
                        <div class="member-content">
                            <div class="member-info"><a href="javascript:void(0)">Mike Dooley</a>
                                <h6>chief excutive</h6>
                            </div>
                            <!-- End .member-info-->
                            <div class="member-social"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                            <!-- End .member-social-->
                        </div>
                        <!-- End .member-content-->
                    </div>
                    <!-- End .member-->
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <div class="member">
                        <div class="member-img"><img src="/assets/images/team/2.jpg" alt="Member Michael Brian" /></div>
                        <!-- End .member-img-->
                        <div class="member-content">
                            <div class="member-info"><a href="javascript:void(0)">Michael Brian</a>
                                <h6>managing director</h6>
                            </div>
                            <!-- End .member-info-->
                            <div class="member-social"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                            <!-- End .member-social-->
                        </div>
                        <!-- End .member-content-->
                    </div>
                    <!-- End .member-->
                </div>
                <div class=" col-12 col-md-6 col-lg-4">
                    <div class="member">
                        <div class="member-img"><img src="/assets/images/team/3.jpg" alt="Member Chris Wensel" /></div>
                        <!-- End .member-img-->
                        <div class="member-content">
                            <div class="member-info"><a href="javascript:void(0)">Chris Wensel</a>
                                <h6>vice president</h6>
                            </div>
                            <!-- End .member-info-->
                            <div class="member-social"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                            <!-- End .member-social-->
                        </div>
                        <!-- End .member-content-->
                    </div>
                    <!-- End .member-->
                </div>
            </div>
            <div class="row">
                <div class=" col-12 col-md-6 col-lg-3">
                    <div class="member member-2">
                        <div class="member-img"><img src="/assets/images/team/4.jpg" alt="Member Richard Muldoone" /></div>
                        <!-- End .member-img-->
                        <div class="member-content">
                            <div class="member-info"><a href="javascript:void(0)">Richard Muldoone</a>
                                <h6>legal officer</h6>
                            </div>
                            <!-- End .member-info-->
                            <div class="member-social"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                            <!-- End .member-social-->
                        </div>
                        <!-- End .member-content-->
                    </div>
                    <!-- End .member-->
                </div>
                <div class=" col-12 col-md-6 col-lg-3">
                    <div class="member member-2">
                        <div class="member-img"><img src="/assets/images/team/5.jpg" alt="Member Maria Andaloro" /></div>
                        <!-- End .member-img-->
                        <div class="member-content">
                            <div class="member-info"><a href="javascript:void(0)">Maria Andaloro</a>
                                <h6>HR officer</h6>
                            </div>
                            <!-- End .member-info-->
                            <div class="member-social"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                            <!-- End .member-social-->
                        </div>
                        <!-- End .member-content-->
                    </div>
                    <!-- End .member-->
                </div>
                <div class=" col-12 col-md-6 col-lg-3">
                    <div class="member member-2">
                        <div class="member-img"><img src="/assets/images/team/6.jpg" alt="Member Marian Chris" /></div>
                        <!-- End .member-img-->
                        <div class="member-content">
                            <div class="member-info"><a href="javascript:void(0)">Marian Chris</a>
                                <h6>global sales</h6>
                            </div>
                            <!-- End .member-info-->
                            <div class="member-social"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                            <!-- End .member-social-->
                        </div>
                        <!-- End .member-content-->
                    </div>
                    <!-- End .member-->
                </div>
                <div class=" col-12 col-md-6 col-lg-3">
                    <div class="member member-2">
                        <div class="member-img"><img src="/assets/images/team/7.jpg" alt="Member Jack Mudson" /></div>
                        <!-- End .member-img-->
                        <div class="member-content">
                            <div class="member-info"><a href="javascript:void(0)">Jack Mudson</a>
                                <h6>manager</h6>
                            </div>
                            <!-- End .member-info-->
                            <div class="member-social"><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                            <!-- End .member-social-->
                        </div>
                        <!-- End .member-content-->
                    </div>
                    <!-- End .member-->
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

@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Suara Anggota - Whistleblower</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #1 Section
      ============================
      -->
    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="/assets/images/page-titles/1.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Whistleblower</h1>
                            <p class="title-desc"></p>
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
                    <li class="breadcrumb-item active" aria-current="page">Whistleblower</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->

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
                        <h2 class="heading-title">Oops</h2>
                    </div>
                </div>
            </div>
            <!-- End .row-->

            <div class="row">
                <div class="col-12">
                    <div class="more-blog"><a href="blog-grid.html">The page is currently being built.</a></div>
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

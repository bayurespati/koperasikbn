@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Profil Koperasi - Laporan</title>
@endpush

@push('additional_css')
<style>
    .btn_active {
        color: white;
        background-color: #2b3e4b !important;
    }
</style>
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
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2 banner_all">
            <div class="bg-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Laporan Eksternal</h1>
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
                    <li class="breadcrumb-item active" aria-current="page">Laporan Eksternal</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->

    <section class="awards awards awards-1" id="awards" style="padding-top: 110px;">
        <div class="container">
            <div class="row">
                @if(count($data) > 0)
                <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="4" data-autoplay="false" data-nav="true" data-dots="true" data-space="30" data-loop="false" data-speed="1000">
                    @foreach($data as $datum)
                    <div>
                        <div class="award">
                            <div class="award-img" style="padding: 0px;">
                                @if($datum->file_link)
                                <a href="/{{ $datum->file_link }}" download>
                                    <embed src="/{{ $datum->file_link }}" scrolling="no" />
                                </a>
                                @else
                                <img src="/assets/images/no_file_icon.png" alt="No File" style="height: 160px; padding: 40px;" />
                                @endif
                            </div>
                            <!-- End .work-img-->
                            <div class="award-content">
                                <a href="/{{ $datum->file_link }}" download>
                                    <h4 class="award-title">{{ $datum->title }}</h4>
                                </a>
                                <p class="award-desc">{{ $datum->description_indo }}</p>
                            </div>
                            <!-- End .award-content-->
                        </div>
                    </div>
                    @endforeach
                </div>
                @else
                <div class="col-12 d-flex justify-content-center">
                    <h5>*belum ada data Laporan Eksternal*</h5>
                </div>
                @endif
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

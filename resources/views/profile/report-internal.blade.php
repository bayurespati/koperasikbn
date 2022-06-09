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
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="/assets/images/page-titles/5.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Laporan Internal</h1>
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
                    <li class="breadcrumb-item active" aria-current="page">Laporan Internal</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->

    <section class="awards awards awards-1" id="awards" style="padding-top: 110px;">
        <div class="container">
            <div class="row" style="margin-bottom: 50px;">
                <div class="col-12 d-flex justify-content-center">
                    <a class="{{ request()->is('profile/report-internal') ? 'btn btn--primary btn_active' : 'btn btn--primary ' }}" href="{{ route('report-internal') }}" style="margin-right: 10px;">
                        Laporan Internal
                    </a>

                    <a class="{{ request()->is('profile/report-external') ? 'btn btn--primary btn_active' : 'btn btn--primary ' }}" href="{{ route('report-external') }}" style="margin-right: 10px;">
                        Laporan Eksternal
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <div class="heading heading-17 text-center">
                        <h2 class="heading-title">Laporan Internal</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($data as $datum)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="award">
                        <div class="award-img">
                            @if($datum->file_link)
                            <a href="/{{ $datum->file_link }}">
                                <img src="/assets/images/file_icon.png" alt="{{ $datum->file_name }}" style="height: 200px; padding: 40px;" />
                            </a>
                            @else
                            <img src="/assets/images/no_file_icon.png" alt="No File" style="height: 200px; padding: 40px;" />
                            @endif
                        </div>
                        <!-- End .work-img-->
                        <div class="award-content">
                            <h4 class="award-title">{{ $datum->title }}</h4>
                            <p class="award-desc">{{ $datum->description_indo }}</p>
                        </div>
                        <!-- End .award-content-->
                    </div>
                    <!-- End .award-->
                </div>
                @endforeach
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

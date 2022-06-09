@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Media - Kalender Kegiatan</title>
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
                            <h1 class="title-heading">Kalender Kegiatan</h1>
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
                    <li class="breadcrumb-item"><a href="#">Media</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Kalender Kegiatan</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->

    <section class="projects projects-gallery projects-modern projects-modern-3" id="projects-modern-3">
        <div class="container">
            <!-- End .row-->
            <div id="projects-all_display" class="row">
                @foreach($data as $datum)
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="project-panel">
                        <div class="project-panel-holder">
                            @if($datum->image_link !== null && $datum->image_link !== '')
                            <div class="project-img"><img src="/{{ $datum->image_link }}" alt="{{ $datum->image_name }}" />
                                <div class="project-hover">
                                    <div class="project-action">
                                        <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item" href="/{{ $datum->image_link }}" title="{{ $datum->name }}"></a></div>
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="project-img"><img src="/assets/images/no_file_icon.png" alt="No File For {{ $datum->name }}" style="padding:0px 30px 20px 30px"/>
                                <div class="project-hover">
                                    <div class="project-action">
                                        <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item" href="/assets/images/no_file_icon.png" title="{{ $datum->name }}"></a></div>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row d-flex justify-content-center">
                <div style="width: auto;">
                    <ul id="isotope-pager">
                    </ul>
                </div>
            </div>
        </div>
        <!-- End .container-->
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

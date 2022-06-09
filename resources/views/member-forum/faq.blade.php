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
                            <!-- <p class="title-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future.</p> -->
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
                    @for($i = 0; $i < count($data); $i++)
                    <div class="col-12 col-lg-6 col-md-6">
                        <div class="card {{ $i == 1 ? 'active-acc' : '' }}">
                            <div class="card-heading">
                                <a class="card-link collapsed" data-hover="" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapse_{{ $data[$i]->id }}" href="#collapse_{{ $data[$i]->id }}">
                                    {{ $data[$i]->question_indo }}
                                </a>
                            </div>
                            <div class="collapse {{ $i ==1 ? 'show' : '' }}" id="collapse_{{ $data[$i]->id }}" data-bs-parent="#accordion03">
                                <div class="card-body">
                                    {{ $data[$i]->answer_indo }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                <!-- End .row-->
            </div>
            <div class="container">
                <div class="more-faqs">
                    <p>Sustainable, reliable & affordable, <a href="#">find your solutions now! </a></p>
                </div>
            </div>
            <!-- End .container-->
    </section>


    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

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
    <section class="page-title page-title-blank-2 bg-white" id="page-title">
        <div class="container">
            <div class="row">
                <div class="col">
                    @if(Cookie::get('current_lang') == 'eng')
                    <h1 class="d-none">{{ $data->title }}</h1>
                    @else
                    <h1 class="d-none">{{ $data->title_indo }}</h1>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            @if(Cookie::get('current_lang') == 'eng')
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Media</a></li>
                            <li class="breadcrumb-item"><a href="{{ $data->category == 'News' ? route('news') : route('announcement') }}">{{ $data->category == 'News' ? 'News' : 'Announcements' }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $data->title }}</li>
                            @else
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Media</a></li>
                            <li class="breadcrumb-item"><a href="{{ $data->category == 'Berita' ? route('news') : route('announcement') }}">{{ $data->category == 'Berita' ? 'Berita' : 'Pengumuman' }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $data->title_indo }}</li>
                            @endif
                        </ol>
                    </div>
                    <!-- End .title -->
                </div>
                <!-- End .col-lg-8-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!-- End #page-title -->

    <section class="blog blog-single" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="blog-entry">
                        <div class="entry-img"><img src="/{{ $data->image_link }}" alt="{{ $data->image_name }}" />
                            <div class="entry-meta">
                                <div class="entry-category"><a href="javascript:void(0);">{{ $data->category }}</a></div>
                                <div class="entry-date">
                                    <span class="date">{{ $data->created_at }}</span>
                                </div>
                            </div>
                            <!-- End .entry-meta-->
                        </div>
                        <div class="entry-content">
                            <div class="entry-title">
                                @if(Cookie::get('current_lang') == 'eng')
                                <h4>{{ $data->title }}</h4>
                                @else
                                <h4>{{ $data->title_indo }}</h4>
                                @endif
                            </div>
                            <div class="entry-bio">
                                @if(Cookie::get('current_lang') == 'eng')
                                @php
                                echo $data->content
                                @endphp
                                @else
                                @php
                                echo $data->content_indo
                                @endphp
                                @endif
                            </div>
                            <div class="entry-holder">
                                <div class="entry-share"><span>share this article</span>
                                    <div><a class="share-facebook" href="javascript:void(0)"><i class="fab fa-facebook-f" style="font-size:22px;"></i></a><a class="share-instagram" href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a class="share-twitter" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

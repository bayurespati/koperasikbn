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
                    <h1 class="d-none">The Influence of Environmental Conditions in Arctic Regions.</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                            <li class="breadcrumb-item"><a href="#">Media</a></li>
                            <li class="breadcrumb-item"><a href="{{ $data->category == 'Berita' ? route('news') : route('announcement') }}">{{ $data->category == 'Berita' ? 'Berita' : 'Pengumuman' }}</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $data->title_indo }}</li>
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
                                <h4>{{ $data->title_indo }}</h4>
                            </div>
                            <div class="entry-bio">
                                @php
                                echo $data->content_indo
                                @endphp
                            </div>
                            <div class="entry-holder">
                                <div class="entry-share"><span>share this article</span>
                                    <div><a class="share-facebook" href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a><a class="share-instagram" href="javascript:void(0)"><i class="fab fa-twitter"></i></a><a class="share-twitter" href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="nav-posts">
                            <div class="prev-post">
                                <div class="post-img">
                                    <div class="overlay"> <i class="energia-arrow-right"></i></div><img src="assets/images/blog/thumb/prev.png" alt="title" />
                                </div>
                                <div class="post-body"><span>previous post</span><a class="post-link" href="blog-single.html">energy research will help eagles coexist wind</a></div>
                            </div>
                            <div class="next-post">
                                <div class="post-body"><span>next post</span><a class="post-link" href="blog-single.html">the middle east's top new alternative energy source</a></div>
                                <div class="post-img">
                                    <div class="overlay"> <i class="energia-arrow-right"></i></div><img src="assets/images/blog/thumb/next.png" alt="title" />
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>

                <!-- <div class="col-12 col-lg-4">
                    <div class="sidebar sidebar-blog">
                        <div class="widget widget-search">
                            <div class="widget-title">
                                <h5>search</h5>
                            </div>
                            <div class="widget-content">
                                <form class="form-search">
                                    <div class="input-group">
                                        <input class="form-control" type="text" placeholder="Search ..." /><span class="input-group-btn">
                                            <button class="btn" type="button"><i class="energia-search-Icon"></i></button></span>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="widget widget-recent-posts">
                            <div class="widget-title">
                                <h5>recent posts</h5>
                            </div>
                            <div class="widget-content">
                                <div class="post">
                                    <div class="post-img"><img src="assets/images/blog/sidebar/post-1.jpg" alt="post img" /></div>
                                    <div class="post-content">
                                        <div class="post-date"><span class="date">jan 25</span><span class="year">2021</span></div>
                                        <div class="post-title"><a href="blog-single.html">filling solar power permits in 2020? consider following </a></div>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="post-img"><img src="assets/images/blog/sidebar/post-2.jpg" alt="post img" /></div>
                                    <div class="post-content">
                                        <div class="post-date"><span class="date">jan 27</span><span class="year">2021</span></div>
                                        <div class="post-title"><a href="blog-single.html">How to Add Battery Backup to an Existing Grid Tied</a></div>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="post-img"><img src="assets/images/blog/sidebar/post-3.png" alt="post img" /></div>
                                    <div class="post-content">
                                        <div class="post-date"><span class="date">jan 23</span><span class="year">2021</span></div>
                                        <div class="post-title"><a href="blog-single.html">Energy Research Will Help Eagles Coexist Wind</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget widget-categories">
                            <div class="widget-title">
                                <h5>categories</h5>
                            </div>
                            <div class="widget-content">
                                <ul class="list-unstyled">
                                    <li><a href="blog-grid.html">Wind Turbines</a><span>9</span></li>
                                    <li><a href="blog-grid.html">Solar Panels</a><span>2</span></li>
                                    <li><a href="blog-grid.html">Battery Matrial</a><span>5</span></li>
                                    <li><a href="blog-grid.html">Hydro Plants</a><span>1</span></li>
                                    <li><a href="blog-grid.html">Fossil Resourc</a><span>7</span></li>
                                    <li><a href="blog-grid.html">Charge Control</a><span>10</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="widget widget-tags">
                            <div class="widget-title">
                                <h5>Tags</h5>
                            </div>
                            <div class="widget-content"><a href="blog-grid.html">Battery</a><a href="blog-grid.html">Hydro</a><a href="blog-grid.html">infectious</a><a href="blog-grid.html">Plants</a><a href="blog-grid.html">Solar</a><a href="blog-grid.html">Turbines</a><a href="blog-grid.html">Fossil</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

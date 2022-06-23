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
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2 banner_all">
            <div class="bg-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Manajemen</h1>
                            <!-- <p class="title-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future.</p> -->
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
                @foreach($data as $datum)
                @if($datum->user !== null)
                <div class=" col-12 col-md-6 col-lg-4">
                    <div class="member">
                        <div class="member-img">
                            @if($datum->user->image_link !== null && $datum->user->image_link !== '')
                            <img src="/{{ $datum->user->image_link }}" alt="{{ $datum->user->image_name }}" />
                            @else
                            <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;"/>
                            @endif
                        </div>
                        <!-- End .member-img-->
                        <div class="member-content">
                            <div class="member-info"><a href="javascript:void(0)">{{ $datum->user->nama }}</a>
                                <h6>{{ $datum->nama }}</h6>
                            </div>
                            <!-- End .member-info-->
                            <div class=""><a href="tel:{{ $datum->user->phone }}"><i class="energia-phone-Icon"></i> {{ $datum->user->phone }}</a></div>
                            <!-- End .member-social-->
                        </div>
                        <!-- End .member-content-->
                    </div>
                    <!-- End .member-->
                </div>
                @endif
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

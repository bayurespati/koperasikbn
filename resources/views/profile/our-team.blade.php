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
                            @if(Cookie::get('current_lang') == 'eng')
                            <h1 class="title-heading">Management</h1>
                            @else
                            <h1 class="title-heading">Manajemen</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    @if(Cookie::get('current_lang') == 'eng')
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Cooperative Profile</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Management</li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Profil Koperasi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Manajemen</li>
                    @endif
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
                @if(count($data[0]) > 0)
                <div class="col-12 d-flex justify-content-center">
                    @if(Cookie::get('current_lang') == 'eng')
                    <h3>Elder</h3>
                    @else
                    <h3>Pembina</h3>
                    @endif
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach($data[0] as $datum)
                    @if($datum->user !== null || $datum->is_custom == 1)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="member">
                            @if($datum->is_custom == 1)
                            <div class="member-img">
                                @if($datum->image_link !== null && $datum->image_link !== '')
                                <img src="/{{ $datum->image_link }}" alt="{{ $datum->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @else
                            <div class="member-img">
                                @if($datum->user->image_link !== null && $datum->user->image_link !== '')
                                <img src="/{{ $datum->user->image_link }}" alt="{{ $datum->user->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @endif
                            <!-- End .member-img-->
                            <div class="member-content d-flex justify-content-center" style="text-align: center;">
                                <div class="member-info"><a href="javascript:void(0)">{{ $datum->is_custom == 1 ? $datum->user_name : $datum->user->nama }}</a>
                                    @if($datum->is_custom == 1)
                                    <h6>{{ $datum->nama }}</h6>
                                    @else
                                    @if($datum->user->jabatanKbn !== null)
                                    <h6 class="mb-2">{{ $datum->user->jabatanKbn->nama }}</h6>
                                    @endif
                                    <h6>{{ $datum->nama }}</h6>
                                    @endif
                                </div>
                            </div>
                            <!-- End .member-content-->
                        </div>
                        <!-- End .member-->
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>

            <div class="row mt-4">
                @if(count($data[1]) > 0)
                <div class="col-12 d-flex justify-content-center">
                    @if(Cookie::get('current_lang') == 'eng')
                    <h3>Supervisor</h3>
                    @else
                    <h3>Pengawas</h3>
                    @endif
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach($data[1] as $datum)
                    @if($datum->user !== null || $datum->is_custom == 1)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="member">
                            @if($datum->is_custom == 1)
                            <div class="member-img">
                                @if($datum->image_link !== null && $datum->image_link !== '')
                                <img src="/{{ $datum->image_link }}" alt="{{ $datum->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @else
                            <div class="member-img">
                                @if($datum->user->image_link !== null && $datum->user->image_link !== '')
                                <img src="/{{ $datum->user->image_link }}" alt="{{ $datum->user->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @endif
                            <!-- End .member-img-->
                            <div class="member-content d-flex justify-content-center" style="text-align: center;">
                                <div class="member-info"><a href="javascript:void(0)">{{ $datum->is_custom == 1 ? $datum->user_name : $datum->user->nama }}</a>
                                    @if($datum->is_custom == 1)
                                    <h6>{{ $datum->nama }}</h6>
                                    @else
                                    @if($datum->user->jabatanKbn !== null)
                                    <h6 class="mb-2">{{ $datum->user->jabatanKbn->nama }}</h6>
                                    @endif
                                    <h6>{{ $datum->nama }}</h6>
                                    @endif
                                </div>
                            </div>
                            <!-- End .member-content-->
                        </div>
                        <!-- End .member-->
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>

            <div class="row mt-4">
                @if(count($data[2]) > 0)
                <div class="col-12 d-flex justify-content-center">
                    @if(Cookie::get('current_lang') == 'eng')
                    <h3>Administrator</h3>
                    @else
                    <h3>Pengurus</h3>
                    @endif
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach($data[2] as $datum)
                    @if($datum->user !== null || $datum->is_custom == 1)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="member">
                            @if($datum->is_custom == 1)
                            <div class="member-img">
                                @if($datum->image_link !== null && $datum->image_link !== '')
                                <img src="/{{ $datum->image_link }}" alt="{{ $datum->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @else
                            <div class="member-img">
                                @if($datum->user->image_link !== null && $datum->user->image_link !== '')
                                <img src="/{{ $datum->user->image_link }}" alt="{{ $datum->user->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @endif
                            <!-- End .member-img-->
                            <div class="member-content d-flex justify-content-center" style="text-align: center;">
                                <div class="member-info"><a href="javascript:void(0)">{{ $datum->is_custom == 1 ? $datum->user_name : $datum->user->nama }}</a>
                                    @if($datum->is_custom == 1)
                                    <h6>{{ $datum->nama }}</h6>
                                    @else
                                    @if($datum->user->jabatanKbn !== null)
                                    <h6 class="mb-2">{{ $datum->user->jabatanKbn->nama }}</h6>
                                    @endif
                                    <h6>{{ $datum->nama }}</h6>
                                    @endif
                                </div>
                            </div>
                            <!-- End .member-content-->
                        </div>
                        <!-- End .member-->
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>

            <div class="row mt-4">
                @if(count($data[3]) > 0)
                <div class="col-12 d-flex justify-content-center">
                    @if(Cookie::get('current_lang') == 'eng')
                    <h3>Manager</h3>
                    @else
                    <h3>Pengelola</h3>
                    @endif
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach($data[3] as $datum)
                    @if($datum->user !== null || $datum->is_custom == 1)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="member">
                            @if($datum->is_custom == 1)
                            <div class="member-img">
                                @if($datum->image_link !== null && $datum->image_link !== '')
                                <img src="/{{ $datum->image_link }}" alt="{{ $datum->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @else
                            <div class="member-img">
                                @if($datum->user->image_link !== null && $datum->user->image_link !== '')
                                <img src="/{{ $datum->user->image_link }}" alt="{{ $datum->user->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @endif
                            <!-- End .member-img-->
                            <div class="member-content d-flex justify-content-center" style="text-align: center;">
                                <div class="member-info"><a href="javascript:void(0)">{{ $datum->is_custom == 1 ? $datum->user_name : $datum->user->nama }}</a>
                                    @if($datum->is_custom == 1)
                                    <h6>{{ $datum->nama }}</h6>
                                    @else
                                    @if($datum->user->jabatanKbn !== null)
                                    <h6 class="mb-2">{{ $datum->user->jabatanKbn->nama }}</h6>
                                    @endif
                                    <h6>{{ $datum->nama }}</h6>
                                    @endif
                                </div>
                            </div>
                            <!-- End .member-content-->
                        </div>
                        <!-- End .member-->
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>

            <div class="row mt-4">
                @if(count($data[4]) > 0)
                <div class="col-12 d-flex justify-content-center">
                    @if(Cookie::get('current_lang') == 'eng')
                    <h3>Staff</h3>
                    @else
                    <h3>Staff</h3>
                    @endif
                </div>
                <div class="row d-flex justify-content-center">
                    @foreach($data[4] as $datum)
                    @if($datum->user !== null || $datum->is_custom == 1)
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="member">
                            @if($datum->is_custom == 1)
                            <div class="member-img">
                                @if($datum->image_link !== null && $datum->image_link !== '')
                                <img src="/{{ $datum->image_link }}" alt="{{ $datum->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @else
                            <div class="member-img">
                                @if($datum->user->image_link !== null && $datum->user->image_link !== '')
                                <img src="/{{ $datum->user->image_link }}" alt="{{ $datum->user->image_name }}" />
                                @else
                                <img src="/assets/images/no_user.png" alt="No User Photo" style="padding: 120px;" />
                                @endif
                            </div>
                            @endif
                            <!-- End .member-img-->
                            <div class="member-content d-flex justify-content-center" style="text-align: center;">
                                <div class="member-info"><a href="javascript:void(0)">{{ $datum->is_custom == 1 ? $datum->user_name : $datum->user->nama }}</a>
                                    @if($datum->is_custom == 1)
                                    <h6>{{ $datum->nama }}</h6>
                                    @else
                                    @if($datum->user->jabatanKbn !== null)
                                    <h6 class="mb-2">{{ $datum->user->jabatanKbn->nama }}</h6>
                                    @endif
                                    <h6>{{ $datum->nama }}</h6>
                                    @endif
                                </div>
                            </div>
                            <!-- End .member-content-->
                        </div>
                        <!-- End .member-->
                    </div>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>
        </div>
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

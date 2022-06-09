@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Suara Anggota - Pengaduan</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
            <div class="bg-section"><img src="/assets/images/page-titles/1.jpg" alt="Background" /></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Pengaduan</h1>
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
                    <li class="breadcrumb-item active" aria-current="page">Pengaduan</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>

    <div class="project-overview project-overview-1" style="padding-top: 110px; padding-bottom: 110px;">
        <div class="container">
            <div class="heading heading-20">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <p class="heading-subtitle">Minggu, 05 April 2020 11:56</p>
                        <h2 class="heading-title">Pengaduan</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="heading-desc">
                            Keluhan Pelanggan merupakan fasilitas yang disediakan kepada para pelanggan atau Investor untuk menyampaikan keluhannya kepada PT. Kawasan Berikat Nusantara (Persero). Ini merupakan hal yang sangat penting bagi kami agar dapat terus berkembang dan meningkatkan kualitas pelayanan kami terhadap para investor.
                        </p>
                    </div>
                    <div class="col-12" style="padding-top: 40px;">
                        <h5 style="margin-bottom: 10px;">Tata Cara</h5>
                        <p class="heading-desc">
                            Untuk memudahkan pengaduan, maka akan dijelaskan bagaimana prosedur untuk melakukan pengaduan kepada PT. Kawasan Berikat Nusantara (Persero) dan bagaimana proses serta mekanisme penanganannya.
                        </p>
                        <p class="heading-desc">
                            Proses pengaduan dapat dilakukan melaui 3 cara, diantaranya :
                        </p>
                    </div>
                    <div class="col-12" style="padding-top: 20px;">
                        <ul class="list-unstyled advantages-list" style="margin-bottom: 30px;">
                            <li>
                                Menghubungi kami langsung via Telefon atau Faks.
                            </li>
                            <li>
                                Mengirimkan e-mail dengan melampirkan Form Keluhan Pelanggan.
                            </li>
                            <li>
                                Kirimkan langsung Form yang telah terisi ke Bagian Pelayanan Kantor Pusat PT. Kawasan Berikat Nusantara (Persero).
                            </li>
                        </ul>
                    </div>
                    <div class="col-12" style="padding-top: 40px;">
                        <p class="heading-desc" style="margin-bottom: 0px;">
                            Hubungi Kami :
                        </p>
                        <p class="heading-desc">
                            Keluhan Pelanggan
                        </p>
                    </div>
                    <div class="col-12" style="padding-top: 20px;">
                        <div class="project-details" style="padding-left: 40px; border-left: 4px solid var(--global--color-primary);">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="name">Telp </td>
                                        <td class="value">: <a href="tel:021-4482-0909">(021) 4482-0909</a> ext 1703</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Faks</td>
                                        <td class="value">: <a href="tel:021-4482-0052">(021) 4482-0052</a></td>
                                    </tr>
                                    <tr>
                                        <td class="name">Email</td>
                                        <td class="value">: <a href="mailto:pelayanan@kbn.co.id">pelayanan@kbn.co.id</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="project-img"><img src="assets/images/projects/gallery/1.jpg" alt=" item" />
                            <div class="project-hover">
                                <div class="project-action">
                                    <div class="project-zoom"><i class="far fa-eye"></i><a class="img-gallery-item" href="assets/images/projects/full/1.jpg" title="wind generators item"></a></div>
                                </div>
                                <!-- End .project-action -->
                            </div>
                            <!-- End .project-hover-->
                        </div>
                    </div>
                    <!-- End .row-->
                </div>
                <!-- End .heading-->
            </div>
            <!-- End .container-->
        </div>
    </div>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

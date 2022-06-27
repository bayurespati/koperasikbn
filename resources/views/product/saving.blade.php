@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Produk Kami - Simpan Pinjam</title>
@endpush

@push('additional_css')
<link href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" />

<style>
    .custom-active-widget a {
        color: var(--global--color-white) !important;
    }

    .custom-active-widget a::before {
        -webkit-transform: scaleX(1) !important;
        -ms-transform: scaleX(1) !important;
        transform: scaleX(1) !important;
        -webkit-transform-origin: left center !important;
        -ms-transform-origin: left center !important;
        transform-origin: left center !important;
    }

    .custom-active-widget a i {
        background-color: var(--global--color-white) !important;
        color: var(--global--color-primary) !important;
    }
</style>
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      PageTitle #11 Section
      ============================
      -->
    <section class="page-title page-title-2" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2 banner_all">
            <div class="bg-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Simpan Pinjam</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="">Produk Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Simpan</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End #page-title -->
    <!--
      ============================
      Services Single Section
      ============================
      -->
    <section class="service-single" id="service-single">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget widget-services">
                        <div class="widget-content">
                            <ul class="list-unstyled d-flex justify-content-center col-12">
                                <li class="col-md-4 custom-active-widget"><a class="d-flex justify-content-center" href="#"> <span>Simpan</span></a></li>
                                <li class="col-md-4" style="margin-left: 10px;"><a class="d-flex justify-content-center" href="{{ route('loan') }}"> <span>Pinjam</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h5 style="margin-bottom: 10px;">Rincian Potongan Koperasi</h5>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <h5 style="margin-bottom: 10px;">Bulan {{ $data->bulan }}</h5>
                </div>
                <div class="col-12" style="margin-top: 20px;">
                    <div class="project-details" style="padding-left: 40px; border-left: 4px solid var(--global--color-primary);">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="name" style="font-weight: 800;">Nama </td>
                                    <td class="value">: {{ $data->nama }} / {{ $data->no_anggota }}</td>
                                </tr>
                                <tr>
                                    <td class="name" style="font-weight: 800;">Divisi/Biro</td>
                                    <td class="value">: {{ $data->divisi->nama }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12" style="margin-top: 20px;">
                    @if($data !== null && count($data->simpans) > 0)
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Keterangan</th>
                                <th style="text-align: center;">Simpanan Bulan Ini (Rupiah)</th>
                                <th style="text-align: right;">Jumlah (Rupiah)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data->simpans as $datum)
                            <tr>
                                <td>{{ $datum->keterangan }}</td>
                                <td style="text-align: right;">
                                    {{ number_format($datum->jumlah_angsuran, 2, '.', ',') }}
                                </td>
                                <td style="text-align: right;">
                                    {{ number_format($datum->saldo, 2, '.', ',') }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="text-align: right; font-weight: bold;">Total</th>
                                <td style="text-align: right; font-weight: bold;">
                                    {{ number_format($datum->totalAngsuran, 2, '.', ',') }}
                                </td>
                                <td style="text-align: right; font-weight: bold;">
                                    {{ number_format($datum->totalSaldo, 2, '.', ',') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

@push('additional_js')
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable();
    });
</script>
@endpush

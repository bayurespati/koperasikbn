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

    .d-none {
        display: none !important;
    }

    .info-box-notice {
        padding: 20px 24px;
        border: 2px dashed #007bff;
        border-radius: 4px;
        text-align: center;
        margin-bottom: 30px;
    }

    .info-box-notice i {
        color: #ffcc00;
        margin-bottom: 12px;
        font-size: 24px;
        display: block;
    }

    .text-right {
        text-align: right !important;
    }

    .project-panel {
        margin: 0;
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
                            @if(Cookie::get('current_lang') == 'eng')
                            <h1 class="title-heading">Save and Loan</h1>
                            @else
                            <h1 class="title-heading">Simpan Pinjam</h1>
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
                    <li class="breadcrumb-item"><a href="">Our Products</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Borrow</li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="">Produk Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pinjam</li>
                    @endif
                </ol>
            </div>
        </div>
    </section>
    <!-- End #page-title -->

    <!--
      ============================
      TABEL RINCIAN POTONGAN KOPERASI
      ============================
      -->
    <section class="service-single" id="service-single">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="widget widget-services">
                        <div class="widget-content">
                            @if(Cookie::get('current_lang') == 'eng')
                            <ul class="list-unstyled d-flex justify-content-center col-12">
                                <li class="col-md-4"><a class="d-flex justify-content-center" href="{{ route('saving') }}"> <span>Save</span>
                                    </a>
                                </li>
                                <li class="col-md-4 custom-active-widget" style="margin-left: 10px;"><a class="d-flex justify-content-center" href="#"> <span> Loan</span></a></li>
                            </ul>
                            @else
                            <ul class="list-unstyled d-flex justify-content-center col-12">
                                <li class="col-md-4"><a class="d-flex justify-content-center" href="{{ route('saving') }}"> <span>Simpan</span></a></li>
                                <li class="col-md-4 custom-active-widget" style="margin-left: 10px;"><a class="d-flex justify-content-center" href="#"> <span>Pinjam</span></a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @if(Cookie::get('current_lang') == 'eng')
                <div class="col-12 d-flex justify-content-center" style="position: relative;">
                    @if($data->lastUpdated == 'Belum ada data')
                    <h5 style="margin-bottom: 10px;">Latest Salary Cuts</h5>
                    @else
                    <h5 style="margin-bottom: 10px;">Latest Salary Cuts ({{ $data->bulan }} / {{$data->tahun}})</h5>
                    @endif
                    <a href="/download/saveloan_pdf/eng" target=”_blank” class="btn btn-primary d-flex justify-content-center" style="height: 30px; width: 176px; position:absolute; right: 13px;" id="download-report">
                        Download Report
                    </a>
                </div>
                <!-- <div class="col-12 d-flex justify-content-center"> -->
                <!-- <h5 style="margin-bottom: 10px;">Month {{ $data->bulan }}</h5> -->
                <!-- </div> -->
                <div class="col-12" style="margin-top: 20px;">
                    <div class="project-details" style="padding-left: 40px; border-left: 4px solid var(--global--color-primary);">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="name" style="font-weight: 800;">Name / Member ID</td>
                                    <td class="value">: {{ $data->nama }} / {{ $data->no_anggota }}</td>
                                </tr>
                                <tr>
                                    <td class="name" style="font-weight: 800;">Division / Bureau</td>
                                    <td class="value">: {{ $data->divisi->nama }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <b>Last updated: {{ $data->lastUpdated }}</b>
                </div>
                @else
                <div class="col-12 d-flex justify-content-center" style="position: relative;">
                    @if($data->lastUpdated == 'Belum ada data')
                    <h5 style="margin-bottom: 10px;">Rincian Potongan Koperasi</h5>
                    @else
                    <h5 style="margin-bottom: 10px;">Rincian Potongan Koperasi {{ $data->bulan_ind }} / {{ $data->tahun }}</h5>
                    @endif
                    <a href="/download/saveloan_pdf/id" target=”_blank” class="btn btn-primary d-flex justify-content-center" style="height: 30px; width: 172px; position:absolute; right: 13px;" id="download-report">
                        Unduh Laporan
                    </a>
                </div>
                <!-- <div class="col-12 d-flex justify-content-center"> -->
                <!-- <h5 style="margin-bottom: 10px;">Bulan {{ $data->bulan }}</h5> -->
                <!-- </div> -->
                <div class="col-12" style="margin-top: 20px;">
                    <div class="project-details" style="padding-left: 40px; border-left: 4px solid var(--global--color-primary);">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td class="name" style="font-weight: 800;">Nama / No. Anggota</td>
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
                <div class="col-12 d-flex justify-content-end">
                    <b>Terakhir Diperbarui: {{ $data->lastUpdated }}</b>
                </div>
                @endif
                <div class="col-12" style="margin-top: 20px;">
                    @if($data !== null && count($data->pinjams) > 0)
                    <table id="myTable" class="display nowrap" style="width:100%">
                        <thead>
                            @if(Cookie::get('current_lang') == 'eng')
                            <tr>
                                <th style="text-align: center;" rowspan="2">Description</th>
                                <th style="text-align: center;" rowspan="2">Instalment Amount</th>
                                <th style="text-align: center;" colspan="2">Instalment</th>
                                <th style="text-align: right;" rowspan="2">Sum</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">To</th>
                                <th style="text-align: center;">Remaining</th>
                            </tr>
                            @else
                            <tr>
                                <th style="text-align: center;" rowspan="2">Keterangan</th>
                                <th style="text-align: center;" rowspan="2">Jumlah Angsuran</th>
                                <th style="text-align: center;" colspan="2">Cicilan</th>
                                <th style="text-align: right;" rowspan="2">Jumlah</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">Ke</th>
                                <th style="text-align: center;">Sisa</th>
                            </tr>
                            @endif
                        </thead>
                        <tbody>
                            @foreach($data->pinjams as $datum)
                            <tr>
                                <td>{{ $datum->keterangan }}</td>
                                <td style="text-align: right;">
                                    {{ number_format($datum->jumlah_angsuran, 2, '.', ',') }}
                                </td>
                                <td style="text-align: center;">
                                    {{ $datum->cicilan_ke }}
                                </td>
                                <td style="text-align: center;">
                                    {{ $datum->sisa }}
                                </td>
                                <td style="text-align: right;">
                                    <!-- {{ number_format(($datum->jumlah_angsuran * $datum->sisa), 2, '.', ',') }} -->
                                    {{ number_format($datum->total, 2, '.', ',') }}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="text-align: right; font-weight: bold;">Total</th>
                                <td style="text-align: right; font-weight: bold;">
                                    {{ number_format($data->totalAngsuran, 2, '.', ',') }}
                                </td>
                                <th style="text-align: right; font-weight: bold;" colspan="2"></th>
                                <td style="text-align: right; font-weight: bold;">
                                    {{ number_format($data->totalSaldo, 2, '.', ',') }}
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </section>


    <!--
      ============================
      Form Section Button
      ============================
      -->
    <section style="padding: 30px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <button class="btn btn-primary w-100 d-flex justify-content-center" id="display-form-btn">
                        <span id="display-form-button-title">
                            @if(Cookie::get('current_lang') == 'eng')
                            Make a Loan Application
                            @else
                            Buat Pengajuan Pinjaman
                            @endif
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Form Section Button -->

    <!--
      ============================
      Form Section
      ============================
      -->
    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2 d-none" style="padding-top: 200px;" id="loan-form">
        <div class="bg-section"><img src="/assets/images/background/wavy-pattern.png" alt="background" /></div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-card">
                            <div class="contact-body">
                                @if(Cookie::get('current_lang') == 'eng')
                                <h5 class="card-heading">Fill in the Loan Application Form</h5>
                                @else
                                <h5 class="card-heading">Isi Form Pengajuan Pinjaman</h5>
                                @endif
                                <p class="card-desc"></p>
                                <form class="loanForm">
                                    <input type="hidden" id="loan-id" name="loan-id" required="" value="{{ $data->id }}">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <select class="form-control" id="loan-type">
                                                <option value="-">Select Loan Type</option>
                                                <option value="0">Ordinary Loan</option>
                                                <option value="1">Incidental Loans</option>
                                                <option value="2">Long Term Loans</option>
                                                <option value="3">Other Loans (Shops, Bank Loans, Goods Loans)</option>
                                            </select>
                                            @else
                                            <select class="form-control" id="loan-type">
                                                <option value="-">Pilih Jenis Pinjaman</option>
                                                <option value="0">Pinjaman Biasa</option>
                                                <option value="1">Pinjaman Insidentil</option>
                                                <option value="2">Pinjaman Jangka Panjang</option>
                                                <option value="3">Pinjaman Lainnya (Toko, Pinjaman Bank, Pinjaman Barang)</option>
                                            </select>
                                            @endif
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label for="loan-date">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Date of Filling
                                                @else
                                                Tanggal Pengajuan
                                                @endif
                                            </label>
                                            <input type="text" class="form-control" id="loan-date" name="loan-date" required="" value="{{ $data->currDate }}" disabled>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="loan-name">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Name
                                                @else
                                                Nama
                                                @endif
                                            </label>
                                            <input class="form-control" type="text" id="loan-name" name="loan-name" required="" value="{{ $data->nama }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="phone-number">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Phone Number
                                                @else
                                                Nomor Telepon
                                                @endif
                                            </label>
                                            <input class="form-control" type="text" id="phone-number" name="phone-number" required="" value="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="loan-member-id">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Member ID
                                                @else
                                                No. Anggota
                                                @endif
                                            </label>
                                            <input class="form-control" type="text" id="loan-member-id" name="loan-member-id" required="" value="{{ $data->no_anggota }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="loan-employee-id">NPP</label>
                                            <input class="form-control" type="text" id="loan-employee-id" name="loan-employee-id" required="" value="{{ $data->nip }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label for="loan-position">Jabatan</label>
                                            @if(Cookie::get('current_lang') == 'eng')
                                            Position
                                            @else
                                            Jabatan
                                            @endif
                                            <input class="form-control" type="text" id="loan-position" name="loan-position" required="" value="{{ $data->jabatan_kbn !== null ? $data->jabatan_kbn->nama : '-' }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-amount-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="loan-amount">Loan Amount<span id="loan-type-title"></span> (Rupiah)</label>
                                            @else
                                            <label for="loan-amount">Jumlah Pinjaman<span id="loan-type-title"></span> (Rupiah)</label>
                                            @endif
                                            <input class="form-control" type="text" id="loan-amount" name="loan-amount" required="" />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-period-1-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="loan-period-1">Length of Installment (1-12 months)</label>
                                            @else
                                            <label for="loan-period-1">Lama Angsuran (1-12 bulan)</label>
                                            @endif
                                            <input class="form-control" type="text" id="loan-period-1" name="loan-period-1" required="" />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-period-2-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="loan-period-2">Length of Instalment (1 month)</label>
                                            @else
                                            <label for="loan-period-2">Lama Angsuran (1 bulan)</label>
                                            @endif
                                            <input class="form-control" type="text" id="loan-period-2" name="loan-period-2" value="1" required="" disabled />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-period-3-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="loan-period-3">Length of Installment (1-120 months)</label>
                                            @else
                                            <label for="loan-period-3">Lama Angsuran (1-120 bulan)</label>
                                            @endif
                                            <input class="form-control" type="text" id="loan-period-3" name="loan-period-3" required="" />
                                        </div>
                                        <!-- <div class="col-12 col-md-6">
                                            <label for="loan-amount">Besar Angsuran</label>
                                            <input class="form-control" type="text" id="loan-amount" name="loan-amount" required="" />
                                        </div> -->
                                        <div class="col-12 col-md-12 d-none" id="loan-use-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="loan-use">Necessity</label>
                                            @else
                                            <label for="loan-use">Keperluan</label>
                                            @endif
                                            <textarea class="form-control" id="loan-use" name="loan-desc" required=""></textarea>
                                        </div>
                                        <div class="col-12 col-md-12 d-none" id="service-type-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="service-type">Type of File Transfer Service</label>
                                            @else
                                            <label for="service-type">Jenis Layanan Penyerahan File</label>
                                            @endif
                                            <select class="form-control" id="service-type">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                <option value="-">Choose the Type of File Transfer Service</option>
                                                <option value="0">Offline</option>
                                                <option value="1">Online</option>
                                                @else
                                                <option value="-">Pilih Jenis Layanan Penyerahan File</option>
                                                <option value="0">Offline</option>
                                                <option value="1">Online</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-file-1-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="loan-file-1">Upload KTP (.png or .jpeg)</label>
                                            @else
                                            <label for="loan-file-1">Unggah KTP (.png atau .jpeg)</label>
                                            @endif
                                            <input type="file" id="loan-file-1" name="proof-of-citisenship" class="form-control" style="padding-top:25px" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-file-2-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="loan-file-2">Upload Salary Slip (.png atau .jpeg)</label>
                                            @else
                                            <label for="loan-file-2">Unggah Slip Gaji (.png atau .jpeg)</label>
                                            @endif
                                            <input type="file" id="loan-file-2" name="proof-of-pay" class="form-control" style="padding-top:25px" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="col-12 d-none" id="info-box-1-wrapper">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="info-box-notice">
                                                        <i class="energia-alert-Icon"></i>
                                                        @if(Cookie::get('current_lang') == 'eng')
                                                        <p>
                                                            To complete the Long Term Loan process, please provide a photocopy of your KTP and Salary Slip directly through the cooperative admin
                                                        </p>
                                                        @else
                                                        <p>
                                                            Untuk menyelesaikan proses Pinjaman Jangka Panjang, harap berikan fotokopi KTP dan Slip Gaji secara langsung melalui admin koperasi
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-none" id="info-box-2-wrapper">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="info-box-notice">
                                                        <i class="energia-alert-Icon"></i>
                                                        @if(Cookie::get('current_lang') == 'eng')
                                                        <p>
                                                            For more information, please contact the cooperative admin either directly or via <a href="https://wa.me/628119662886">Whatsapp (087887773893)</a> or <a href="tel:021-4482- 0909">Telephone: (021) 4482-0909 ext. 5101 - 5108</a></p>
                                                        </p>
                                                        @else
                                                        <p>
                                                            Untuk informasi lebih lanjut, harap hubungi admin koperasi baik secara langsung atau melalui <a href="https://wa.me/628119662886">Whatsapp (087887773893)</a> atau <a href="tel:021-4482-0909">Telepon: (021) 4482-0909 ext. 5101 - 5108</a></p>
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="btn btn-success" id="loan-submit-button">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Apply for a Loan <i class="energia-arrow-right"></i>
                                                @else
                                                Ajukan Pinjaman <i class="energia-arrow-right"></i>
                                                @endif
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- End .contact-body -->
                        </div>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .contact-panel-->
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </section>
    <!-- End of Form Section -->

    <!--
      ============================
      TABEL RINCIAN POTONGAN KOPERASI
      ============================
      -->
    <section class="service-single" style="padding-top: 60px !important;">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    @if(Cookie::get('current_lang') == 'eng')
                    <h5 style="margin-bottom: 10px;">Submission Details</h5>
                    @else
                    <h5 style="margin-bottom: 10px;">Rincian Pengajuan</h5>
                    @endif
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button class="btn btn-primary d-flex justify-content-center" style="height: 30px; width: 172px" id="reload-table-2-btn">
                        <span>
                            Reload
                        </span>
                    </button>
                </div>
                <div class="col-12" style="margin-top: 20px;">
                    <table id="myTable2" class="display nowrap" style="width:100%">
                        <thead>
                            @if(Cookie::get('current_lang') == 'eng')
                            <tr>
                                <th style="text-align: left;">No</th>
                                <th style="text-align: center;">Submission Time</th>
                                <th style="text-align: center;">Submission Type</th>
                                <th style="text-align: right;">Nominal (Rupiah)</th>
                                <th style="text-align: center;">Document</th>
                                <th style="text-align: center;">Request Document</th>
                                <th style="text-align: right;">Status</th>
                                <th style="text-align: right;">Description</th>
                            </tr>
                            @else
                            <tr>
                                <th style="text-align: left;">No</th>
                                <th style="text-align: center;">Waktu Pengajuan</th>
                                <th style="text-align: center;">Jenis Pengajuan</th>
                                <th style="text-align: right;">Nominal (Rupiah)</th>
                                <th style="text-align: center;">Dokumen</th>
                                <th style="text-align: center;">Dokumen Permintaan</th>
                                <th style="text-align: right;">Status</th>
                                <th style="text-align: right;">Keterangan</th>
                            </tr>
                            @endif
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

@push('additional_js')
<script src="{{ asset('js/simpan-pinjam.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#myTable').DataTable({
            "scrollX": true
        });
        $('#myTable2').DataTable({
            "info": false,
            "ordering": false,
            'order': [],
            'pageLength': 10,
            "scrollX": true,
            "columns": [
                // number column
                {
                    render: function(data, type, full, meta) {
                        return meta.row + 1;
                    }
                },
                {
                    data: "created_at",
                    className: 'text-center'
                },
                {
                    data: "pengajuan",
                    className: 'text-center'
                },
                {
                    data: "nominal_format",
                    className: 'text-right'
                },
                {
                    data: "dokumen_1",
                    className: 'text-center'
                },
                {
                    data: null,
                    className: 'text-center'
                },
                {
                    data: 'status',
                    className: 'text-center'
                },
                {
                    data: "keterangan",
                    className: ''
                },
            ],
            "columnDefs": [{
                    targets: [1],
                    render: function(data) {
                        const date = new Date(data);

                        let d = date;
                        d = [
                            ('' + d.getDate()).length == 1 ? '0' + d.getDate() : d.getDate(),
                            ('' + (d.getMonth() + 1)).length ? '0' + (d.getMonth() + 1) : (d.getMonth() + 1),
                            '' + d.getFullYear(),
                            ('' + d.getHours()).length == 1 ? '0' + d.getHours() : d.getHours(),
                            ('' + d.getMinutes()).length == 1 ? '0' + d.getMinutes() : d.getMinutes()
                        ]; // take last 2 digits of every component

                        // join the components into date
                        return d.slice(0, 3).join('-') + ' | ' + d.slice(3).join(':');
                    }
                }, {
                    targets: [2],
                    render: function(data) {
                        return data['nama'];
                    }
                },
                {
                    targets: [4],
                    render: function(data) {
                        if (data !== '' && data !== null) {
                            return `
                            <div class="row d-flex justify-content-center align-items-center">
                                <div class="col-12 col-md-6 project-item">
                                    <div class="project-panel">
                                        <div class="project-panel-holder">
                                            <div class="project-img">
                                                <div class="project-hover">
                                                    <div class="project-action">
                                                        <div class="project-zoom">
                                                            <i class="far fa-eye"></i>
                                                            <a class="img-popup" href="/` + data + `" title=""></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `;
                        } else {
                            return '-';
                        }
                    }
                }, {
                    targets: [5],
                    render: function(data) {
                        if (data.status == 4 || data.status == '4') {
                            if (data.jenis_pengajuan_id == 3) {
                                // insidentil
                                return `
                            <a href="/download/pinjaman-insidentil?id=` + data.id + `" target="_blank" type="button" class="btn btn-sm btn-primary py-1" name="download-request" style="width: auto; height: auto;">
                                <span style="font-weight: normal; font-size: 12px;">download</span>
                            </a>
                            `;
                            } else if (data.jenis_pengajuan_id == 4 || data.jenis_pengajuan_id == 2) {
                                // jangka pp
                                return `
                            <a href="/download/pinjaman-jangka-pp?id=` + data.id + `" target="_blank" type="button" class="btn btn-sm btn-primary py-1" name="download-request" style="width: auto; height: auto;">
                                <span style="font-weight: normal; font-size: 12px;">download</span>
                            </a>
                            `;
                            }
                        }

                        return '-';
                    }
                },
                {
                    targets: [6],
                    render: function(data) {
                        if (data == 1 || data == '1') {
                            return 'Diajukan';
                        } else if (data == 2 || data == '2') {
                            return 'Diproses';
                        } else if (data == 3 || data == '3') {
                            return 'Ditolak';
                        } else if (data == 4 || data == '4') {
                            return 'Disetujui';
                        }
                    }
                }
            ],
            "drawCallback": function(settings) {
                var $imgPopup = $(".img-popup");
                $imgPopup.magnificPopup({
                    type: "image"
                });
                $('.img-gallery-item').magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            }
        });

        $('#phone-number').mask('0000000000000');

        $('#loan-amount').mask('000.000.000.000.000', {
            reverse: true
        });

        let isFormShown = false;
        $('#display-form-btn').on('click', function() {
            isFormShown = !isFormShown;

            if (isFormShown) {
                $('#loan-form').removeClass('d-none');
                $('#display-form-button-title').text('Cancel');
                emptyForm();
            } else {
                $('#loan-form').addClass('d-none');
                $('#display-form-button-title').text('Buat Pengajuan Pinjaman');
            }
        });

        const loanPeriod1 = $('#loan-period-1');
        loanPeriod1.mask('00', {
            onComplete: function(period) {
                if (period < 1 || period > 12) {
                    loanPeriod1.val('');
                }
            }
        });

        const loanPeriod3 = $('#loan-period-3');
        loanPeriod3.mask('000', {
            onComplete: function(period) {
                if (period < 1 || period > 120) {
                    loanPeriod3.val('1');
                }
            }
        });

        let loanSubmitButton = $('#loan-submit-button');
        loanSubmitButton.prop('disabled', true);

        let doc1Name = null;
        let doc1Content = null;

        let doc2Name = null;
        let doc2Content = null;

        let typeOfPinjaman = '-';
        $('#loan-type').on('change', function() {
            typeOfPinjaman = $('#loan-type').val();
            $('#service-type').val('-').trigger('change');
            $('select').niceSelect('update');

            if (typeOfPinjaman == '-') {
                $('#loan-amount-wrapper').addClass('d-none');
                $('#loan-period-1-wrapper').addClass('d-none');
                $('#loan-period-2-wrapper').addClass('d-none');
                $('#loan-period-3-wrapper').addClass('d-none');
                $('#loan-use-wrapper').addClass('d-none');

                $('#service-type-wrapper').addClass('d-none')
                $('#info-box-2-wrapper').addClass('d-none');
                loanSubmitButton.prop('disabled', true);
            } else {
                $('#loan-amount-wrapper').removeClass('d-none');
                $('#loan-use-wrapper').removeClass('d-none');

                if (typeOfPinjaman == '0') {
                    $('#loan-period-1-wrapper').removeClass('d-none');
                    $('#loan-period-2-wrapper').addClass('d-none');
                    $('#loan-period-3-wrapper').addClass('d-none');

                    $('#service-type-wrapper').addClass('d-none');
                    $('#info-box-2-wrapper').addClass('d-none');
                    loanSubmitButton.prop('disabled', false);
                } else if (typeOfPinjaman == '1') {
                    $('#loan-period-1-wrapper').addClass('d-none');
                    $('#loan-period-2-wrapper').removeClass('d-none');
                    $('#loan-period-3-wrapper').addClass('d-none');

                    $('#service-type-wrapper').addClass('d-none');
                    $('#info-box-2-wrapper').addClass('d-none')
                    loanSubmitButton.prop('disabled', false);
                } else if (typeOfPinjaman == '2') {
                    $('#loan-period-1-wrapper').addClass('d-none');
                    $('#loan-period-2-wrapper').addClass('d-none');
                    $('#loan-period-3-wrapper').removeClass('d-none');

                    $('#service-type-wrapper').removeClass('d-none');
                    $('#info-box-2-wrapper').addClass('d-none')
                    loanSubmitButton.prop('disabled', true);
                } else {
                    $('#loan-amount-wrapper').addClass('d-none');
                    $('#loan-period-1-wrapper').addClass('d-none');
                    $('#loan-period-2-wrapper').addClass('d-none');
                    $('#loan-period-3-wrapper').addClass('d-none');
                    $('#loan-use-wrapper').addClass('d-none');
                    $('#service-type-wrapper').addClass('d-none');
                    $('#info-box-2-wrapper').removeClass('d-none');
                    loanSubmitButton.prop('disabled', true);
                }
            }

            $('#loan-file-1-wrapper').addClass('d-none');
            $('#loan-file-2-wrapper').addClass('d-none');
            $('#info-box-1-wrapper').addClass('d-none');
        });

        let typeOfService = '-';
        $('#service-type').on('change', function() {
            typeOfService = $('#service-type').val();

            if (typeOfService == 0) {
                $('#loan-file-1-wrapper').addClass('d-none');
                $('#loan-file-2-wrapper').addClass('d-none');
                $('#info-box-1-wrapper').removeClass('d-none');
                loanSubmitButton.prop('disabled', false);
            } else if (typeOfService == 1) {
                $('#loan-file-1-wrapper').removeClass('d-none');
                $('#loan-file-2-wrapper').removeClass('d-none');
                $('#info-box-1-wrapper').addClass('d-none');
                loanSubmitButton.prop('disabled', false);
            } else {
                $('#loan-file-1-wrapper').addClass('d-none');
                $('#loan-file-2-wrapper').addClass('d-none');
                $('#info-box-1-wrapper').addClass('d-none');
                loanSubmitButton.prop('disabled', true);
            }
        });

        let doc1Checked = false;
        let doc2Checked = false;

        function postLoan() {
            let currentdate = new Date();
            let dateFormatted = currentdate.getFullYear() + "-" + (currentdate.getMonth() + 1) + "-" + currentdate.getDate();

            let data = null;

            if (typeOfPinjaman == 0) {
                data = {
                    _token: "{{ csrf_token() }}",
                    jenis_pengajuan_id: 2,
                    tanggal_pengajuan: dateFormatted,
                    user_id: $('#loan-id').val(),
                    nominal: $('#loan-amount').cleanVal(),
                    lama_angsuran: $('#loan-period-1').cleanVal(),
                    keperluan: $('#loan-use').val(),
                    phone: $('#phone-number').val(),
                };
            } else if (typeOfPinjaman == 1) {
                data = {
                    _token: "{{ csrf_token() }}",
                    jenis_pengajuan_id: 3,
                    tanggal_pengajuan: dateFormatted,
                    user_id: $('#loan-id').val(),
                    nominal: $('#loan-amount').cleanVal(),
                    lama_angsuran: $('#loan-period-2').val(),
                    keperluan: $('#loan-use').val(),
                    phone: $('#phone-number').val(),
                };
            } else if (typeOfPinjaman == 2) {
                data = {
                    _token: "{{ csrf_token() }}",
                    user_id: $('#loan-id').val(),
                    jenis_pengajuan_id: 4,
                    tanggal_pengajuan: dateFormatted,
                    nominal: $('#loan-amount').cleanVal(),
                    lama_angsuran: $('#loan-period-3').cleanVal(),
                    is_online: $('#service-type').val(),
                    keperluan: $('#loan-use').val(),
                    dokumen_1: doc1Content,
                    dokumen_1_name: doc1Name,
                    dokumen_2: doc2Content,
                    dokumen_2_name: doc2Name,
                    phone: $('#phone-number').val(),
                };
            } else {
                data = null;
            }

            if (data !== null) {
                loanSubmitButton.prop('disabled', true);

                $.post('/api/permintaan', data)
                    .done(function(response) {
                        getPengajuan();

                        let message = response;
                        let preContent = document.createElement('pre');

                        preContent.innerHTML = message;

                        swal({
                            title: "Yay!",
                            content: preContent,
                            icon: "success",
                            button: "Close",
                        });

                        emptyForm();
                    }).fail(function(error) {
                        let message = '';
                        let errorMessage = error.responseJSON.message;
                        let preContent = document.createElement('pre');

                        $.each(errorMessage, function(key, value) {
                            message = message + value[0] + '<br>';
                        });

                        preContent.innerHTML = message;

                        swal({
                            title: "Oops!",
                            content: preContent,
                            icon: "error",
                            button: "Close",
                        });
                    }).always(function() {
                        loanSubmitButton.prop('disabled', false);
                    });
            }
        }

        function checkIfBothFileFilled() {
            if (doc1Checked && doc2Checked) {
                postLoan();
            }
        }

        function checkFile() {
            let file1 = null;
            file1 = document.getElementById('loan-file-1').files[0];

            let file2 = null;
            file2 = document.getElementById('loan-file-2').files[0];

            if (file1 !== null && file1 !== undefined) {
                doc1Name = file1['name'];
                const fr1 = new FileReader();

                fr1.addEventListener("load", () => {
                    doc1Content = fr1.result;
                    doc1Checked = true;
                });

                fr1.readAsDataURL(file1);
                checkIfBothFileFilled();
            } else {
                doc1Checked = false;
            }

            if (file2 !== null && file2 !== undefined) {
                doc2Name = file2['name'];
                const fr2 = new FileReader();

                fr2.addEventListener("load", () => {
                    doc2Content = fr2.result;
                    doc2Checked = true;
                });

                fr2.readAsDataURL(file2);
                checkIfBothFileFilled();
            } else {
                doc2Checked = false;
            }
        };

        loanSubmitButton.on('click', function() {
            if (typeOfPinjaman == 0 || typeOfPinjaman == 1 || (typeOfPinjaman == 2 && typeOfService == 0)) {
                doc1Name = null;
                doc1Content = null;

                doc2Name = null;
                doc2Content = null;

                postLoan();
            } else if (typeOfService == 1 && typeOfPinjaman == 2) {
                checkFile();
            }
        });

        const reloadTable2Btn = $('#reload-table-2-btn');
        reloadTable2Btn.on('click', function() {
            getPengajuan();
        });

        function getPengajuan() {
            reloadTable2Btn.prop('disabled', true);

            $.get('/api/permintaan/by-user-id', {
                    user_id: $('#loan-id').val()
                })
                .done(function(response) {
                    $('#myTable2').DataTable().clear();
                    $('#myTable2').DataTable().rows.add(response).draw();
                    console.log(response);

                    instantiateImageEnlargable();
                }).fail(function(error) {
                    let message = '';
                    let errorMessage = error.responseJSON.message;
                    let preContent = document.createElement('pre');


                    $.each(errorMessage, function(key, value) {
                        message = message + value[0] + '<br>';
                    });

                    preContent.innerHTML = message;

                    swal({
                        title: "Oops!",
                        // text: message,
                        content: preContent,
                        icon: "error",
                        button: "Close",
                    });
                }).always(function() {
                    reloadTable2Btn.prop('disabled', false);
                });
        }

        function instantiateImageEnlargable() {
            var $imgPopup = $(".img-popup");
            $imgPopup.magnificPopup({
                type: "image"
            });
        }

        setTimeout(() => {
            getPengajuan();
        }, 1000);

        function emptyForm() {
            $('#phone-number').val('');
            $('#loan-amount').val('');
            $('#loan-period-1').val('');
            $('#service-type').val('-').trigger('change');
            $('#loan-type').val('-').trigger('change');
            $('#loan-use').val('');
            $('#loan-file-1').val(null);
            $('#loan-file-2').val(null);
            $('select').niceSelect('update');
        }
    });
</script>
@endpush

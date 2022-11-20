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
                    <li class="breadcrumb-item active" aria-current="page">Pinjam</li>
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
                            <ul class="list-unstyled d-flex justify-content-center col-12">
                                <li class="col-md-4"><a class="d-flex justify-content-center" href="{{ route('saving') }}"> <span>Simpan</span></a></li>
                                <li class="col-md-4 custom-active-widget" style="margin-left: 10px;"><a class="d-flex justify-content-center" href="#"> <span>Pinjam</span></a></li>
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
                    <b>Last updated: {{ $data->lastUpdated }}</b>
                </div>
                <div class="col-12" style="margin-top: 20px;">
                    @if($data !== null && count($data->pinjams) > 0)
                    <table id="myTable1" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Tanggal Pengajuan</th>
                                <th style="text-align: center;">Jenis Pengajuan</th>
                                <th style="text-align: right;">Nominal (Rupiah)</th>
                                <th style="text-align: center;">Dokumen</th>
                                <th style="text-align: right;">Status</th>
                            </tr>
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
                            Buat Pengajuan Pinjaman
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
                                <h5 class="card-heading">Isi Form Pengajuan Pinjaman</h5>
                                <p class="card-desc"></p>
                                <form class="loanForm">
                                    <input type="hidden" id="loan-id" name="loan-id" required="" value="{{ $data->id }}">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <select class="form-control" id="loan-type">
                                                <option value="-">Pilih Jenis Pinjaman</option>
                                                <option value="0">Pinjaman Biasa</option>
                                                <option value="1">Pinjaman Insidentil</option>
                                                <option value="2">Pinjaman Jangka Panjang</option>
                                                <option value="3">Pinjaman Lainnya (Toko, Pinjaman Bank, Pinjaman Barang)</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="loan-date">Tanggal Pengajuan</label>
                                            <input type="text" class="form-control" id="loan-date" name="loan-date" required="" value="{{ $data->currDate }}" disabled>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="loan-name">Nama</label>
                                            <input class="form-control" type="text" id="loan-name" name="loan-name" required="" value="{{ $data->nama }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="loan-member-id">No. Anggota</label>
                                            <input class="form-control" type="text" id="loan-member-id" name="loan-member-id" required="" value="{{ $data->no_anggota }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="loan-employee-id">NPP</label>
                                            <input class="form-control" type="text" id="loan-employee-id" name="loan-employee-id" required="" value="{{ $data->nip }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label for="loan-position">Jabatan</label>
                                            <input class="form-control" type="text" id="loan-position" name="loan-position" required="" value="{{ $data->jabatan_kbn !== null ? $data->jabatan_kbn->nama : '-' }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-amount-wrapper">
                                            <label for="loan-amount">Jumlah Pinjaman<span id="loan-type-title"></span> (Rupiah)</label>
                                            <input class="form-control" type="text" id="loan-amount" name="loan-amount" required="" />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-period-wrapper">
                                            <label for="loan-period">Lama Angsuran</label>
                                            <input class="form-control" type="text" id="loan-period" name="loan-period" required="" />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-period-1-wrapper">
                                            <label for="loan-period-1">Lama Angsuran</label>
                                            <input class="form-control" type="text" id="loan-period-1" name="loan-period-1" required="" />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-period-2-wrapper">
                                            <label for="loan-period-2">Lama Angsuran</label>
                                            <input class="form-control" type="text" id="loan-period-2" name="loan-period-2" value="1" required="" disabled />
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-period-3-wrapper">
                                            <label for="loan-period-3">Lama Angsuran</label>
                                            <input class="form-control" type="text" id="loan-period-3" name="loan-period-3" required="" />
                                        </div>
                                        <!-- <div class="col-12 col-md-6">
                                            <label for="loan-amount">Besar Angsuran</label>
                                            <input class="form-control" type="text" id="loan-amount" name="loan-amount" required="" />
                                        </div> -->
                                        <div class="col-12 col-md-12 d-none" id="loan-use-wrapper">
                                            <label for="loan-use">Keperluan</label>
                                            <textarea class="form-control" id="loan-use" name="loan-desc" required=""></textarea>
                                        </div>
                                        <div class="col-12 col-md-12 d-none" id="service-type-wrapper">
                                            <label for="service-type">Jenis Layanan Penyerahan File</label>
                                            <select class="form-control" id="service-type">
                                                <option value="-">Pilih Jenis Layanan Penyerahan File</option>
                                                <option value="0">Offline</option>
                                                <option value="1">Online</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-file-1-wrapper">
                                            <label for="loan-file-1">Upload KTP (.png atau .jpeg)</label>
                                            <input type="file" id="loan-file-1" name="proof-of-transfer" class="form-control" style="padding-top:25px" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-file-2-wrapper">
                                            <label for="loan-file-2">Upload Slip Gaji (.png atau .jpeg)</label>
                                            <input type="file" id="loan-file-2" name="proof-of-transfer" class="form-control" style="padding-top:25px" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="col-12 d-none" id="info-box-1-wrapper">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="info-box-notice">
                                                        <i class="energia-alert-Icon"></i>
                                                        <p>
                                                            Untuk menyelesaikan proses Pinjaman Jangka Panjang, harap berikan fotokopi KTP dan Slip Gaji secara langsung melalui admin koperasi
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-none" id="info-box-2-wrapper">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="info-box-notice">
                                                        <i class="energia-alert-Icon"></i>
                                                        <p>
                                                            Untuk informasi lebih lanjut, harap hubungi admin koperasi baik secara langsung atau melalui <a href="https://wa.me/6287887773893">Whatsapp (087887773893)</a> atau <a href="tel:021-4482-0909">Telepon: (021) 4482-0909 ext. 5101 - 5108</a></p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-success" id="loan-submit-button">Ajukan Pinjaman <i class="energia-arrow-right"></i></button>
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
                    <h5 style="margin-bottom: 10px;">Rincian Pengajuan Pinjaman</h5>
                </div>
                <div class="col-12" style="margin-top: 20px;">
                    @if($data !== null && count($data->pinjams) > 0)
                    <table id="myTable2" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center;" rowspan="2">Keterangan</th>
                                <th style="text-align: center;" rowspan="2">Jumlah Angsuran (Rupiah)</th>
                                <th style="text-align: center;" colspan="2">Cicilan</th>
                                <th style="text-align: right;" rowspan="2">Jumlah (Rupiah)</th>
                            </tr>
                            <tr>
                                <th style="text-align: center;">Ke</th>
                                <th style="text-align: center;">Sisa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data->pinjams as $datum)
                            <tr>
                                <td>{{ $datum->keterangan }}</td>
                                <td style="text-align: right;">
                                    {{ number_format($datum->jumlah_angsuran, 2, '.', ',') }}
                                </td>
                                <td style="text-align: center;">{{ $datum->cicilan_ke }}</td>
                                <td style="text-align: center;">{{ $datum->sisa }}</td>
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
                                <td style="text-align: right; font-weight: bold;" colspan="3">
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
<script>
    $(document).ready(function() {
        $('#myTable1').DataTable();
        $('#myTable2').DataTable();
    });



    $('#loan-amount').mask('000.000.000.000.000,00', {
        reverse: true
    });

    let isFormShown = false;
    $('#display-form-btn').on('click', function() {
        isFormShown = !isFormShown;

        if (isFormShown) {
            $('#loan-form').removeClass('d-none');
            $('#display-form-button-title').text('Cancel');
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
    loanPeriod3.mask('00', {
        onComplete: function(period) {
            if (period < 13 || period > 96) {
                loanPeriod3.val('1');
            }
        }
    });

    let typeOfPinjaman = '-';
    $('#loan-type').on('change', function() {
        typeOfPinjaman = $('#loan-type').val();
        $('#service-type').trigger('change', '-');

        if (typeOfPinjaman == '-') {
            $('#loan-amount-wrapper').addClass('d-none');
            $('#loan-period-1-wrapper').addClass('d-none');
            $('#loan-period-2-wrapper').addClass('d-none');
            $('#loan-period-3-wrapper').addClass('d-none');
            $('#loan-use-wrapper').addClass('d-none');

            $('#service-type-wrapper').addClass('d-none')
            $('#info-box-2-wrapper').addClass('d-none');
        } else {
            $('#loan-amount-wrapper').removeClass('d-none');
            $('#loan-use-wrapper').removeClass('d-none');

            if (typeOfPinjaman == '0') {
                $('#loan-period-1-wrapper').removeClass('d-none');
                $('#loan-period-2-wrapper').addClass('d-none');
                $('#loan-period-3-wrapper').addClass('d-none');

                $('#service-type-wrapper').addClass('d-none');
                $('#info-box-2-wrapper').addClass('d-none');
            } else if (typeOfPinjaman == '1') {
                $('#loan-period-1-wrapper').addClass('d-none');
                $('#loan-period-2-wrapper').removeClass('d-none');
                $('#loan-period-3-wrapper').addClass('d-none');

                $('#service-type-wrapper').addClass('d-none');
                $('#info-box-2-wrapper').addClass('d-none')
            } else if (typeOfPinjaman == '2') {
                $('#loan-period-1-wrapper').addClass('d-none');
                $('#loan-period-2-wrapper').addClass('d-none');
                $('#loan-period-3-wrapper').removeClass('d-none');

                $('#service-type-wrapper').removeClass('d-none');
                $('#info-box-2-wrapper').addClass('d-none')
            } else {
                $('#loan-amount-wrapper').addClass('d-none');
                $('#loan-period-1-wrapper').addClass('d-none');
                $('#loan-period-2-wrapper').addClass('d-none');
                $('#loan-period-3-wrapper').addClass('d-none');
                $('#loan-use-wrapper').addClass('d-none');
                $('#service-type-wrapper').addClass('d-none');
                $('#info-box-2-wrapper').removeClass('d-none');
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
        } else if (typeOfService == 1) {
            $('#loan-file-1-wrapper').removeClass('d-none');
            $('#loan-file-2-wrapper').removeClass('d-none');
            $('#info-box-1-wrapper').addClass('d-none');
        } else {
            $('#loan-file-1-wrapper').addClass('d-none');
            $('#loan-file-2-wrapper').addClass('d-none');
            $('#info-box-1-wrapper').addClass('d-none');
        }
    })
</script>
@endpush

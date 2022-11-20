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
                    <li class="breadcrumb-item active" aria-current="page">Simpan</li>
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
                            Buat Pengajuan Simpanan Sukarela
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
    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2 d-none" style="padding-top: 200px;" id="saving-form">
        <div class="bg-section"><img src="/assets/images/background/wavy-pattern.png" alt="background" /></div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">Isi Form Pengajuan Simpanan Sukarela</h5>
                                <p class="card-desc"></p>
                                <form class="savingForm">
                                    <div class="row">
                                        <input type="hidden" id="saving-id" name="saving-id" required="" value="{{ $data->id }}">
                                        <div class="col-12 col-md-6">
                                            <label for="saving-date">Tanggal Pengajuan</label>
                                            <input type="text" class="form-control" id="saving-date" name="saving-date" required="" value="{{ $data->currDate }}" disabled>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="saving-name">Nama</label>
                                            <input class="form-control" type="text" id="saving-name" name="saving-name" required="" value="{{ $data->nama }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="saving-member-id">No. Anggota</label>
                                            <input class="form-control" type="text" id="saving-member-id" name="saving-member-id" required="" value="{{ $data->no_anggota }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="saving-employee-id">NPP</label>
                                            <input class="form-control" type="text" id="saving-employee-id" name="saving-employee-id" required="" value="{{ $data->nip }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label for="saving-position">Jabatan</label>
                                            <input class="form-control" type="text" id="saving-position" name="saving-position" required="" value="{{ $data->jabatan_kbn !== null ? $data->jabatan_kbn->nama : '-' }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="saving-amount">Jumlah Simpanan Sukarela (Rupiah)</label>
                                            <input class="form-control" type="text" id="saving-amount" name="saving-amount" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="service-type">Jenis Layanan</label>
                                            <select class="form-control" id="service-type">
                                                <option value="-">Pilih Jenis Layanan</option>
                                                <option value="0">Cash</option>
                                                <option value="1">Transfer</option>
                                            </select>
                                        </div>
                                        <div class="col-12 d-none" id="saving-file-wrapper">
                                            <label for="saving-file">Upload Bukti Transfer (.png atau .jpeg)</label>
                                            <input type="file" id="saving-file" name="proof-of-transfer" class="form-control" style="padding-top:25px" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="col-12 d-none" id="info-box-wrapper">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="info-box-notice">
                                                        <i class="energia-alert-Icon"></i>
                                                        <p>
                                                            Untuk menyelesaikan proses, harap berikan uang Simpanan Sukarela secara langsung melalui admin koperasi
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="btn btn-success" id="saving-submit">Ajukan Simpanan Sukarela <i class="energia-arrow-right"></i></button>
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
      TABEL RINCIAN PENGAJUAN SIMPANAN
      ============================
      -->
    <section class="service-single" style="padding-top: 60px !important;">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h5 style="margin-bottom: 10px;">Rincian Pengajuan Simpanan Sukarela</h5>
                </div>
                <div class="col-12" style="margin-top: 20px;">
                    @if($data !== null && count($data->simpans) > 0)
                    <table id="myTable2" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: center;">Tanggal Pengajuan</th>
                                <th style="text-align: center;">Jenis Pengajuan</th>
                                <th style="text-align: right;">Nominal (Rupiah)</th>
                                <th style="text-align: center;">Dokumen</th>
                                <th style="text-align: right;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
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
        $('#myTable').DataTable();
        $('#myTable2').DataTable();
    });

    $('#saving-amount').mask('000.000.000.000.000,00', {
        reverse: true
    });

    let isFormShown = false;
    $('#display-form-btn').on('click', function() {
        isFormShown = !isFormShown;

        if (isFormShown) {
            $('#saving-form').removeClass('d-none');
            $('#display-form-button-title').text('Cancel');
        } else {
            $('#saving-form').addClass('d-none');
            $('#display-form-button-title').text('Buat Pengajuan Simpanan Sukarela');
        }
    })

    let typeOfService = '-';
    $('#service-type').on('change', function() {
        typeOfService = $('#service-type').val();

        if (typeOfService == 1) {
            $('#saving-file-wrapper').removeClass('d-none');
            $('#info-box-wrapper').addClass('d-none');
        } else if (typeOfService == 0) {
            $('#saving-file-wrapper').addClass('d-none');
            $('#info-box-wrapper').removeClass('d-none');
        } else {
            $('#saving-file-wrapper').addClass('d-none');
            $('#info-box-wrapper').addClass('d-none');
        }
    });

    savingSubmitButton = $('#saving-submit');
    savingSubmitButton.on('click', function() {
        savingSubmitButton.prop('disabled', true);

        // posting
    });
</script>
@endpush

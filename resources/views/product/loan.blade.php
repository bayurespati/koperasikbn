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
                                <!-- <th style="text-align: center;">Dokumen</th> -->
                                <!-- <th style="text-align: right;">Status</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data->pinjams as $datum)
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
                                    {{ number_format($data->totalAngsuran, 2, '.', ',') }}
                                </td>
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
                                            <input type="file" id="loan-file-1" name="proof-of-citisenship" class="form-control" style="padding-top:25px" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="col-12 col-md-6 d-none" id="loan-file-2-wrapper">
                                            <label for="loan-file-2">Upload Slip Gaji (.png atau .jpeg)</label>
                                            <input type="file" id="loan-file-2" name="proof-of-pay" class="form-control" style="padding-top:25px" accept="image/png, image/jpeg">
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
                                                            Untuk informasi lebih lanjut, harap hubungi admin koperasi baik secara langsung atau melalui <a href="https://wa.me/628119662886">Whatsapp (087887773893)</a> atau <a href="tel:021-4482-0909">Telepon: (021) 4482-0909 ext. 5101 - 5108</a></p>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="btn btn-success" id="loan-submit-button">Ajukan Pinjaman <i class="energia-arrow-right"></i></button>
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
                    <h5 style="margin-bottom: 10px;">Rincian Pengajuan</h5>
                </div>
                <div class="col-12 d-flex justify-content-end">
                    <button class="btn btn-primary d-flex justify-content-center" style="height: 30px; width: 172px" id="reload-table-2-btn">
                        <span>
                            Reload
                        </span>
                    </button>
                </div>
                <div class="col-12" style="margin-top: 20px;">
                    <table id="myTable2" class="display">
                        <thead>
                            <tr>
                                <th style="text-align: left;">No</th>
                                <th style="text-align: center;">Waktu Pengajuan</th>
                                <th style="text-align: center;">Jenis Pengajuan</th>
                                <th style="text-align: right;">Nominal (Rupiah)</th>
                                <th style="text-align: center;">Dokumen</th>
                                <th style="text-align: right;">Status</th>
                                <th style="text-align: right;">Keterangan</th>
                            </tr>
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
        $('#myTable1').DataTable();
        $('#myTable2').DataTable({
            "info": false,
            "ordering": false,
            'order': [],
            'pageLength': 10,
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
                    data: "nominal",
                    className: 'text-right'
                },
                {
                    data: "dokumen_1",
                    className: 'text-center'
                },
                {
                    data: "status",
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
                            '' + d.getDate(),
                            '' + (d.getMonth() + 1),
                            '' + d.getFullYear(),
                            '' + d.getHours(),
                            '' + d.getMinutes()
                        ]; // take last 2 digits of every component

                        // join the components into date
                        return d.slice(0, 3).join('-') + ' | ' + d.slice(3).join(':');
                    }
                }, {
                    targets: [2],
                    render: function(data) {
                        return data['nama'];
                    }
                }, {
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
                },
                {
                    targets: [5],
                    render: function(data) {
                        if (data == 1 || data == '1') {
                            return 'Pengajuan Diterima';
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
    });

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
    loanPeriod3.mask('00', {
        onComplete: function(period) {
            if (period < 13 || period > 96) {
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
        let dateFormatted = currentdate.getFullYear() + "-" + currentdate.getMonth() + "-" + currentdate.getDate();

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
            };
        } else {
            data = null;
        }

        if (data !== null) {
            loanSubmitButton.prop('disabled', true);

            $.post('/dashboard/permintaan', data)
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

        $.get('/dashboard/permintaan/by-user-id', {
                user_id: $('#loan-id').val()
            })
            .done(function(response) {
                $('#myTable2').DataTable().clear();
                $('#myTable2').DataTable().rows.add(response).draw();

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

    getPengajuan();

    function emptyForm() {
        $('#loan-amount').val('');
        $('#loan-period-1').val('');
        $('#service-type').val('-').trigger('change');
        $('#loan-type').val('-').trigger('change');
        $('#loan-use').val('');
        $('#loan-file-1').val(null);
        $('#loan-file-2').val(null);
        $('select').niceSelect('update');
    }
</script>
@endpush

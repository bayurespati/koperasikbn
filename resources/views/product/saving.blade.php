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
                    <li class="breadcrumb-item active" aria-current="page">Save</li>
                    @else
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="">Produk Kami</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Simpan</li>
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
                                <li class="col-md-4 custom-active-widget"><a class="d-flex justify-content-center" href="#"> <span>Save</span></a></li>
                                <li class="col-md-4" style="margin-left: 10px;"><a class="d-flex justify-content-center" href="{{ route('loan') }}"> <span>Loan</span></a></li>
                            </ul>
                            @else
                            <ul class="list-unstyled d-flex justify-content-center col-12">
                                <li class="col-md-4 custom-active-widget"><a class="d-flex justify-content-center" href="#"> <span>Simpan</span></a></li>
                                <li class="col-md-4" style="margin-left: 10px;"><a class="d-flex justify-content-center" href="{{ route('loan') }}"> <span>Pinjam</span></a></li>
                            </ul>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @if(Cookie::get('current_lang') == 'eng')
                <div class="col-12 d-flex justify-content-center" style="position: relative;">
                    <h5 style="margin-bottom: 10px;">Cooperative Cut Details</h5>
                    <a href="/download/saveloan_pdf/eng" class="btn btn-primary d-flex justify-content-center" style="height: 30px; width: 176px; position:absolute; right: 13px;" id="download-report">
                        Download Report
                    </a>
                </div>
                <div class="col-12 d-flex justify-content-center">
                    <h5 style="margin-bottom: 10px;">Month {{ $data->bulan }}</h5>
                </div>
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
                    <h5 style="margin-bottom: 10px;">Rincian Potongan Koperasi</h5>
                    <a href="/download/saveloan_pdf/id" class="btn btn-primary d-flex justify-content-center" style="height: 30px; width: 172px; position:absolute; right: 13px;" id="download-report">
                        Unduh Laporan
                    </a>
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
                    <b>Terakhir diperbarui: {{ $data->lastUpdated }}</b>
                </div>
                @endif

                <div class="col-12" style="margin-top: 20px;">
                    @if($data !== null && count($data->simpans) > 0)
                    <table id="myTable" class="display nowrap" style="width:100%">
                        @if(Cookie::get('current_lang') == 'eng')
                        <thead>
                            <tr>
                                <th style="text-align: center;">Description</th>
                                <th style="text-align: center;">Savings of the Month (Rupiah)</th>
                                <th style="text-align: right;">Amount (Rupiah)</th>
                            </tr>
                        </thead>
                        @else
                        <thead>
                            <tr>
                                <th style="text-align: center;">Keterangan</th>
                                <th style="text-align: center;">Simpanan Bulan Ini (Rupiah)</th>
                                <th style="text-align: right;">Jumlah (Rupiah)</th>
                            </tr>
                        </thead>
                        @endif
                        <tbody>
                            @foreach($data->simpans as $datum)
                            <tr>
                                <td>{{ $datum->keterangan }}</td>
                                <td style="text-align: right;">
                                    {{ number_format($datum->jumlah_angsuran, 2, '.', ',') }}
                                </td>
                                <td style="text-align: right;">
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
                        @if(Cookie::get('current_lang') == 'eng')
                        <span id="display-form-button-title">
                            Make a Voluntary Deposit Application
                        </span>
                        @else
                        <span id="display-form-button-title">
                            Buat Pengajuan Simpanan Sukarela
                        </span>
                        @endif
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
                                @if(Cookie::get('current_lang') == 'eng')
                                <h5 class="card-heading">Fill in the Voluntary Deposit Application Form</h5>
                                @else
                                <h5 class="card-heading">Isi Form Pengajuan Simpanan Sukarela</h5>
                                @endif
                                <p class="card-desc"></p>
                                <form class="savingForm">
                                    <input type="hidden" id="saving-id" name="saving-id" required="" value="{{ $data->id }}">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label for="saving-date">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Date of Filling
                                                @else
                                                Tanggal Pengajuan
                                                @endif
                                            </label>
                                            <input type="text" class="form-control" id="saving-date" name="saving-date" required="" value="{{ $data->currDate }}" disabled>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="saving-name">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Name
                                                @else
                                                Nama
                                                @endif
                                            </label>
                                            <input class="form-control" type="text" id="saving-name" name="saving-name" required="" value="{{ $data->nama }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="saving-member-id">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Member ID
                                                @else
                                                No. Anggota
                                                @endif
                                            </label>
                                            <input class="form-control" type="text" id="saving-member-id" name="saving-member-id" required="" value="{{ $data->no_anggota }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="saving-employee-id">NPP</label>
                                            <input class="form-control" type="text" id="saving-employee-id" name="saving-employee-id" required="" value="{{ $data->nip }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-12">
                                            <label for="saving-position">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Position
                                                @else
                                                Jabatan
                                                @endif
                                            </label>
                                            <input class="form-control" type="text" id="saving-position" name="saving-position" required="" value="{{ $data->jabatan_kbn !== null ? $data->jabatan_kbn->nama : '-' }}" disabled />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="saving-amount">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Nominal Voluntary Savings (Rupiah)
                                                @else
                                                Nominal Simpanan Sukarela (Rupiah)
                                                @endif
                                            </label>
                                            <input class="form-control" type="text" id="saving-amount" name="saving-amount" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <label for="service-type">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Type of Service
                                                @else
                                                Jenis Layanan
                                                @endif
                                            </label>
                                            <select class="form-control" id="service-type">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                <option value="-">Select Service Type</option>
                                                <option value="0">Cash</option>
                                                <option value="1">Transfer</option>
                                                @else
                                                <option value="-">Pilih Jenis Layanan</option>
                                                <option value="0">Cash</option>
                                                <option value="1">Transfer</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-12 d-none" id="saving-file-wrapper">
                                            @if(Cookie::get('current_lang') == 'eng')
                                            <label for="saving-file">Upload proof of transfer (.png or .jpeg)</label>
                                            @else
                                            <label for="saving-file">Upload Bukti Transfer (.png atau .jpeg)</label>
                                            @endif
                                            <input type="file" id="saving-file" name="proof-of-transfer" class="form-control" style="padding-top:25px" accept="image/png, image/jpeg">
                                        </div>
                                        <div class="col-12 d-none" id="info-box-wrapper">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-12 col-md-4 col-sm-6">
                                                    <div class="info-box-notice">
                                                        <i class="energia-alert-Icon"></i>
                                                        @if(Cookie::get('current_lang') == 'eng')
                                                        <p>
                                                            To complete the process, please provide Voluntary Savings money directly through the cooperative admin
                                                        </p>
                                                        @else
                                                        <p>
                                                            Untuk menyelesaikan proses, harap berikan uang Simpanan Sukarela secara langsung melalui admin koperasi
                                                        </p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-center">
                                            <button type="button" class="btn btn-success" id="saving-submit">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Apply for Voluntary Savings
                                                @else
                                                Ajukan Simpanan Sukarela
                                                @endif
                                                <i class="energia-arrow-right"></i>
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
      TABEL RINCIAN PENGAJUAN SIMPANAN
      ============================
      -->
    <section class="projects-gallery projects-modern projects-modern-3" style="padding-top: 60px !important;">
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
            }, {
                targets: [5],
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
            }],
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

    $('#saving-amount').mask('000.000.000.000.000', {
        reverse: true
    });

    let isFormShown = false;
    $('#display-form-btn').on('click', function() {
        isFormShown = !isFormShown;

        if (isFormShown) {
            $('#saving-form').removeClass('d-none');
            $('#display-form-button-title').text('Cancel');
            emptyForm();
        } else {
            $('#saving-form').addClass('d-none');
            $('#display-form-button-title').text('Buat Pengajuan Simpanan Sukarela');
        }
    })

    let typeOfService = '-';
    let docName = null;
    let docContent = null;
    savingSubmitButton = $('#saving-submit');
    savingSubmitButton.prop('disabled', true);
    $('#service-type').on('change', function() {
        typeOfService = $('#service-type').val();

        if (typeOfService == 1) {
            $('#saving-file-wrapper').removeClass('d-none');
            $('#info-box-wrapper').addClass('d-none');
            savingSubmitButton.prop('disabled', false);
        } else if (typeOfService == 0) {
            $('#saving-file-wrapper').addClass('d-none');
            $('#info-box-wrapper').removeClass('d-none');
            savingSubmitButton.prop('disabled', false);
        } else {
            $('#saving-file-wrapper').addClass('d-none');
            $('#info-box-wrapper').addClass('d-none');
            savingSubmitButton.prop('disabled', true);
        }
    });

    function checkFile() {
        let file = null;
        file = document.getElementById('saving-file').files[0];

        if (file !== null && file !== undefined) {
            docName = file['name'];
            const fr = new FileReader();

            fr.addEventListener("load", () => {
                docContent = fr.result;
                postSaving();
            });

            fr.readAsDataURL(file);
        } else {
            postSaving();
        }
    };

    savingSubmitButton.on('click', function() {
        if (typeOfService == 1) {
            checkFile();
        } else {
            docName = null;
            docContent = null;
            postSaving()
        }
    });

    function postSaving() {
        let currentdate = new Date();
        let dateFormatted = currentdate.getFullYear() + "-" + currentdate.getMonth() + "-" + currentdate.getDate();

        let data = {
            _token: "{{ csrf_token() }}",
            user_id: $('#saving-id').val(),
            jenis_pengajuan_id: 1,
            tanggal_pengajuan: dateFormatted,
            nominal: $('#saving-amount').cleanVal(),
            is_online: $('#service-type').val(),
            dokumen_1: docContent,
            dokumen_1_name: docName,
        };

        savingSubmitButton.prop('disabled', true);

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
                savingSubmitButton.prop('disabled', false);
            });
    }

    const reloadTable2Btn = $('#reload-table-2-btn');
    reloadTable2Btn.on('click', function() {
        getPengajuan();
    });

    function getPengajuan() {
        reloadTable2Btn.prop('disabled', true);

        $.get('/api/permintaan/by-user-id', {
                user_id: $('#saving-id').val()
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
        $('#saving-amount').val('');
        $('#service-type').val('-').trigger('change');
        $('#saving-file').val(null);
        $('select').niceSelect('update');
    }
</script>
@endpush

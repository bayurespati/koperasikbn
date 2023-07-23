<!DOCTYPE html>
<html>

<head>
    <title>Laporan Simpan Pinjam {{ $data->bulan }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style type="text/css">
        .page-break {
            page-break-after: always;
        }

        table tr td,
        table tr th {
            font-size: 12pt;
        }

        table.table-bordered tr td,
        table.table-bordered tr th {
            font-size: 12pt;
            border: 5px solid black !important;
        }

        /**
                Set the margins of the page to 0, so the footer and the header
                can be of the full height and width !
             **/
        @page {
            margin: 0cm 0cm;
        }

        /** Define now the real margins of every page in the PDF **/
        body {
            margin-top: 5.5cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 2cm;
        }

        /** Define the header rules **/
        header {
            position: fixed;
            top: 1.5cm;
            left: 0cm;
            right: 0cm;
            height: 3cm;
        }

        .pagenum:before {
            content: counter(page);
        }

        footer {
            position: fixed;
            bottom: 0cm;
            right: 0.5cm;
            height: 1cm;
        }
    </style>
</head>

<body>
    <header>
        <center>
            <img src="http://koperasikbn.test/assets/images/letterhead-kopkar.svg" alt="Kop Surat Koperasi KBN" style="width: 80%;" />
        </center>
    </header>

    <footer>
        <span class="pagenum"></span>
    </footer>

    <div>
        <main>
            <div class="row">
                <div class="col-12 text-center">
                    <h5>
                        @if($data->lang == 'eng')
                        Savings and Loans Balance of Members for the Period of {{ $data->bulan }} {{ $data->tahun }}
                        @else
                        Saldo Simpan Pinjam Anggota Periode {{ $data->bulan }} {{ $data->tahun }}
                        @endif
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12" style="margin-top: 20px;">
                    <div class="project-details" style="margin-left: 40px; margin-right: 80px; border-left: 4px solid var(--global--color-primary);">
                        <table class="table mb-5">
                            <tbody>
                                @if($data->lang == 'eng')
                                <tr>
                                    <td class="name" style="font-weight: 800; border-top: 0; border-bottom: 1px solid #dee2e6;">Name / Member ID</td>
                                    <td class="value" style="border-top: 0; border-bottom: 1px solid #dee2e6;">: {{ $data->nama }} / {{ $data->no_anggota }}</td>
                                </tr>
                                <tr>
                                    <td class="name" style="font-weight: 800; border-top: 0;">Division / Bureau</td>
                                    <td class="value" style="border-top: 0;">: {{ $data->divisi->nama }}</td>
                                </tr>
                                @else
                                <tr>
                                    <td class="name" style="font-weight: 800; border-top: 0; border-bottom: 1px solid #dee2e6;">Nama / No. Anggota</td>
                                    <td class="value" style="border-top: 0; border-bottom: 1px solid #dee2e6;">: {{ $data->nama }} / {{ $data->no_anggota }}</td>
                                </tr>
                                <tr>
                                    <td class="name" style="font-weight: 800; border-top: 0;">Divisi/Biro</td>
                                    <td class="value">: {{ $data->divisi->nama }}</td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row mb-4" style="padding-left: 60px; padding-right: 60px;">
                <table class="table table-bordered page-break">
                    <thead>
                        @if($data->lang == 'eng')
                        <tr>
                            <th style="text-align: center;">Description</th>
                            <th style="text-align: center;">Savings of the Month (Rupiah)</th>
                            <th style="text-align: right;">Amount (Rupiah)</th>
                        </tr>
                        @else
                        <tr>
                            <th style="text-align: center;">Keterangan</th>
                            <th style="text-align: center;">Simpanan Bulan Ini (Rupiah)</th>
                            <th style="text-align: right;">Jumlah (Rupiah)</th>
                        </tr>
                        @endif
                    </thead>
                    <tbody>
                        @if(count($data->simpans) > 0)
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
                        @else
                        <tr>
                            <td colspan="3" style="text-align: center;">
                                @if($data->lang == 'eng')
                                There are no loan data yet
                                @else
                                Data belum tersedia
                                @endif
                            </td>
                        </tr>
                        @endif
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
            </div>
            <div class="row" style="padding-left: 60px; padding-right: 60px;">
                <table class="table table-bordered">
                    <thead>
                        @if($data->lang == 'eng')
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
                            <th style="text-align: center; vertical-align: middle;" rowspan="2">Keterangan</th>
                            <th style="text-align: center; vertical-align: middle;" rowspan="2">Jumlah Angsuran</th>
                            <th style="text-align: center; vertical-align: middle;" colspan="2">Cicilan</th>
                            <th style="text-align: right; vertical-align: middle;" rowspan="2">Jumlah</th>
                        </tr>
                        <tr>
                            <th style="text-align: center; vertical-align: middle;">Ke</th>
                            <th style="text-align: center; vertical-align: middle;">Sisa</th>
                        </tr>
                        @endif
                    </thead>
                    <tbody>
                        @if(count($data->pinjams) > 0)
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
                        @else
                        <tr>
                            <td colspan="5" style="text-align: center;">
                                @if($data->lang == 'eng')
                                There are no saving data yet
                                @else
                                Data belum tersedia
                                @endif
                            </td>
                        </tr>
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="text-align: right; font-weight: bold;">Total</th>
                            <td style="text-align: right; font-weight: bold;">
                                {{ number_format($data->totalAngsuranPinjam, 2, '.', ',') }}
                            </td>
                            <th style="text-align: right; font-weight: bold;" colspan="2"></th>
                            <td style="text-align: right; font-weight: bold;">
                                {{ number_format($data->totalSaldoPinjam, 2, '.', ',') }}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>
    </div>
</body>

</html>

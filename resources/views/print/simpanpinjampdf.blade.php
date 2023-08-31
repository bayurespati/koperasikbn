<!DOCTYPE html>
<html>

<head>
    <title>Laporan Simpan Pinjam {{ $data['bulan'] }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 8pt;
        }

        table.table-bordered tr td,
        table.table-bordered tr th {
            font-size: 8pt;
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
            margin-top: 4.5cm;
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
            <img src="{{ env('APP_URL') }}/assets/images/letterhead-kopkar.svg" alt="Kop Surat Koperasi KBN" style="width: 80%;" />
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
                        Laporan {{$data['tipe']}} Anggota Periode {{ $data['bulan'] }} {{ $data['tahun'] }}
                    </h5>
                </div>
            </div>
            <div class="row mb-4" style="padding-left: 60px; padding-right: 60px;">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="text-align: center;">NO</th>
                            <th style="text-align: center;">NO ANGGOTA</th>
                            <th style="text-align: center;">NAMA</th>
                            <th style="text-align: right;">NOMINAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($data['results']) > 0)
                        @foreach($data['results'] as $key => $result)
                        <tr>
                            <td style="text-align: center;">
                                {{ (int) $key+1}}
                            </td>
                            <td style="text-align: center;">
                                {{ $result->no_anggota}}
                            </td>
                            <td style="text-align: center;">
                                {{ $result->user->nama ?? "TIDAK ADA" }}
                            </td>
                            <td style="text-align: right;">
                                {{ number_format($result->total_angsuran, 2, '.', ',') }}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="3" style="text-align: center;">
                                Data belum tersedia
                            </td>
                        </tr>
                        @endif
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style="text-align: right; font-weight: bold; text-transform: uppercase !important;" colspan="3">
                                TOTAL Potongan {{ $data['tipe'] }}
                            </th>
                            <td style="text-align: right; font-weight: bold;">
                                {{number_format($data['total'], 2, '.', ',')}}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <div>
            </div>
            <div class="row">
                <div class="col-11 text-right">
                    <p style="font-size: 12px; margin-right: 20px">
                        Jakarta, {{$data['tanggal_ttd']}}
                    </p>
                </div>
            </div>
        </main>
    </div>
</body>

</html>

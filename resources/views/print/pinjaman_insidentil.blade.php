<!DOCTYPE html>
<html>

<head>
    <title>Laporan Simpan Pinjam Januari</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style type="text/css">
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 4cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 1.5cm;
        }

        h5 {
            font-size: 18px !important;
        }

        header {
            position: fixed;
            top: 1cm;
            left: 0cm;
            right: 0cm;
            height: 2.5cm;
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

        .table td {
            border: none !important;
        }
    </style>
</head>

<body>
    <header>
        <center>
            <img src="{{ env('APP_URL') }}/assets/images/letterhead-kopkar.svg" alt="Kop Surat Koperasi KBN" style="width: 80%;" />
        </center>
    </header>
    <div>
        <main style="margin-top: 20px">
            <div class="row" style="margin-top: 10px;">
                <div class="col-12">
                    <h5 style="font-weight: normal;">
                        Kepada Manager Koperasi Karyawan PT. KBN (Persero), Dengan ini saya mengajukan pinjaman insidentil
                    </h5>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-12">
                    <table class="table mb-0">
                        <tbody>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">NAMA</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['permintaan']['user']['nama']}}</h5>
                                </td>
                            </tr>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;"> BAGIAN / UNIT KERJA</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['permintaan']['user']['divisi']['nama'] ?? '-'}}</h5>
                                </td>
                            </tr>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">NO. TELEPON / HP</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['permintaan']['user']['phone'] ?? '-'}}</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5 style="font-weight: normal; margin-top: 10px" align="justify">
                        Mohon diberikan Pinjaman Insidentil sebesar Rp. <span style="font-weight: bold; text-transform: uppercase">{{ number_format($data['permintaan']['nominal'], 2, '.', ',') }}</span>, yang akan saya pergunakan
                        untuk <span style="font-weight: bold; text-transform: uppercase">{{ $data['permintaan']['keperluan'] }}</span> dan bersedia untuk dipotong bulan <span style="font-weight: bold; text-transform: uppercase">{{ $data['bulan'] }} </span>dan dengan ini saya menyatakan:
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div style="margin-top: 10px; margin-left: 30px;">
                        <h5 style="font-weight: normal;">
                            1. Bersedia dipotong secara langsung melalui gaji saya di PT. Kawasan Berikat Nusantara (Persero)
                        </h5>
                        <h5 style="font-weight: normal;">
                            2. Bersedia dipotong dari hak-hak saya di PT. Kawasan Berikat Nusantaran (Persero) apabila saya
                        </h5>
                        <h5 style="padding: 0; font-weight: normal;">
                            <span style="color:white">---</span>mengundurkan diri ataupun melakukan wanprestasi.
                        </h5>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-12">
                    <table class="table mb-0">
                        <tbody>
                            <tr style="padding: 0 0 4px 0;">
                                <td class="text-center" style="width: 300px; padding: 0">
                                    <h5 style="font-weight: normal;">Jakarta, 19 April 1990</h5>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="text-center" style="width: 300px; padding: 100px 0 0 0;">
                                    <h5 style="font-weight: normal;">
                                        {{$data['permintaan']['user']['nama']}}
                                    </h5>
                                </td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title>Laporan Pinjaman Jangka {{ ucfirst($data['jenis']) }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <style type="text/css">
        @page {
            margin: 0cm 0cm;
        }

        body {
            margin-top: 2.8cm;
            margin-left: 2cm;
            margin-right: 2cm;
            margin-bottom: 1.5cm;
        }

        h4 {
            font-size: 18px !important;
            font-weight: bold;
        }

        h5 {
            font-size: 16px !important;
        }

        header {
            position: fixed;
            top: 1cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
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
                    <h4 class="text-center" style="font-weight: bold; text-decoration: underline;">
                        PERMOHONAN PINJAMAN UANG KOPERASI (PPUK)
                    </h4>
                </div>
            </div>
            <div class="row" style="margin-top: 10px;">
                <div class="col-12">
                    <table class="table mb-0">
                        <tbody>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">Tanggal Pengajuan</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['tanggal']}} </h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table m-0">
                        <tbody>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 300px; padding: 0">
                                    <h5 style="font-weight: normal;">Yang bertanda tangan di bawah ini:</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;"></h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table m-0">
                        <tbody>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">Nama</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['pinjaman']['user']['nama']}} </h5>
                                </td>
                            </tr>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">Bagian / Bidang</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['pinjaman']['user']['divisi']['nama'] ?? '-'}} </h5>
                                </td>
                            </tr>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">N.P.P.</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['pinjaman']['user']['nip']}} </h5>
                                </td>
                            </tr>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">No. Telpon</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['pinjaman']['user']['phone'] ?? '-'}}</h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5 style="font-weight:normal;">
                        Bersama ini saya mengajukan pinjaman uang kepada Koperasi Karyawan PT. KBN (Persero) dan sanggup mengembalikan dengan pemotongan gaji secara langsung, yaitu:
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table m-0">
                        <tbody>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">Jenis Pinjaman</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: Pinjaman Jangka {{ ucfirst($data['jenis']) }}</h5>
                                </td>
                            </tr>

                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">Pinjaman Pokok</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{ number_format($data['pinjaman']['nominal'], 2, '.', ',') }} </h5>
                                </td>
                            </tr>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">Lama Angsuran</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['pinjaman']['lama_angsuran'] ?? '-'}} Bulan</h5>
                                </td>
                            </tr>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">Besar Angsuran</h5>
                                </td>
                                @if($data['pinjaman']['nilai_angsuran'] !== null)
                                <td style="padding: 0;">
                                    <h5 style="font-weight: normal;">: {{ number_format($data['pinjaman']['nilai_angsuran'], 2, '.', ',') }} Per Bulan</h5>
                                </td>
                                @else
                                <td style="padding: 0;">
                                    <h5 style="font-weight: normal; color: crimson;">: Besar angsuran akan muncul setelah pengajuan disetujui </h5>
                                </td>
                                @endif
                            </tr>
                            <tr style="padding: 0 0 4px 0;">
                                <td style="width: 250px; padding: 0">
                                    <h5 style="font-weight: normal;">Keperluan</h5>
                                </td>
                                <td style="padding: 0">
                                    <h5 style="font-weight: normal;">: {{$data['pinjaman']['keperluan'] ?? '-'}} </h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h5 style="font-weight: normal; margin:0" align="justify">
                        Keterangan,
                    </h5>
                </div>
                <div class="col-12">
                    <h5 style="font-weight: normal" align="justify">
                        Bersama ini saya menyatakan bahwa:
                    </h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div style="margin-top: 0; margin-left: 30px;">
                        <h5 style="font-weight: normal;" align="justify">
                            1. Apabila saya membatalkan pembiayaan yang sudah disetujui, maka biaya yang timbul seperti: *Biaya Provisi, Biaya Administrasi, Asuransi, dan lain-lain <span style="text-decoration: underline;">menjadi beban saya</span>.
                        </h5>
                        <h5 style="font-weight: normal;" align="justify">
                            2. Atas Pinjaman dan Kewajiban tersebut di atas saya bersedia dipotong gaji setiap bulannya sesuai angsuran pinjaman maupun kewajiban yang ada.
                        </h5>
                        <h5 style="font-weight: normal;" align="justify">
                            3. Selama fasilitas ini berjalan saya tidak akan mengundurkan diri sebagai karyawan PT. (Persero) KBN//Karyawan Kopkar KBN dan Anggota Koperasi dan Apabila saya mengundurkan diri/menjalankan MPP/Pensiun/PHK karena Wanprestasi maka saya bersedia melakukan pemotongan/pelunasan atas seluruh kewajiban pinjaman dengan hak-hak yang ada di Koperasi Karyawan/PT. Kawasan Berikat Nusantara (Persero).
                        </h5>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h5 style="font-weight: normal;" align="justify">
                        Demikian permohonan ini kami ajukan dan atas perhatiannya diucapkan terima kasih.
                    </h5>
                </div>
            </div>
            <div class="row" style="margin-top: 30px;">
                <div class="col-12">
                    <table class="table mb-0">
                        <tbody>
                            <tr style="padding: 0 0 4px 0;">
                                <td></td>
                                <td class="text-center" style="width: 300px; padding: 0">
                                    <h5 style="font-weight: normal;">Hormat Kami,</h5>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center" style="width: 300px; padding: 0">
                                    <h5 style="font-weight: normal;">Pemohon</h5>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td class="text-center" style="width: 300px; padding: 100px 0 0 0;">
                                    <h5 style="font-weight: normal;"> {{$data['pinjaman']['user']['nama']}} </h5>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
</body>

</html>

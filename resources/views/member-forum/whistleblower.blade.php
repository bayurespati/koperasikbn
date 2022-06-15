@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Suara Anggota - Whistleblower</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <section class="page-title page-title-1" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-2 banner_all">
            <div class="bg-section"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="title">
                            <h1 class="title-heading">Whistleblower</h1>
                            <p class="title-desc"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-wrap">
            <div class="container">
                <ol class="breadcrumb d-flex">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="#">Suara Anggota</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Whistleblower</li>
                </ol>
                <!-- End .row-->
            </div>
        </div>
        <!-- End .container-->
    </section>

    <div class="project-overview project-overview-1" style="padding-top: 110px; padding-bottom: 110px;">
        <div class="container">
            <div class="heading heading-20">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">Whistleblower</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="heading-desc">
                            Sistem Whistleblowing PT. Kawasan Berikat Nusantara (Persero) adalah mekanisme pelaporan perbuatan yang berindikasi pelaporan/kecurangan atau tindakan korupsi yang terjadi di lingkungan PT. Kawasan Berikat Nusantara (Persero) dan merupakan salah satu cara paling efektif untuk mencegah dan memerangi praktek yang bertentangan dengan praktek Good Corporate Governance (GCG).
                        </p>
                    </div>
                    <div class="col-12" style="padding-top: 40px;">
                        <h5 style="margin-bottom: 10px;">Unsur Pengaduan</h5>
                        <p class="heading-desc">
                            Pengaduan akan mudah ditinjaklanjuti apabila memenuhi beberapa unsur berikut :
                        </p>
                    </div>
                    <div class="col-12" style="padding-top: 20px;">
                        <div class="project-details" style="padding-left: 40px; border-left: 4px solid var(--global--color-primary);">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="name">Apa</td>
                                        <td class="value">: Perbuatan berindikasi pelanggaran yang diketahui.</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Dimana</td>
                                        <td class="value">: Dimana perbuatan tersebut dilakukan.</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Kapan</td>
                                        <td class="value">: Kapan perbuatan tersebut dilakukan.</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Siapa</td>
                                        <td class="value">: Siapa saja yang terlibat dalam perbuatan tersebut.</td>
                                    </tr>
                                    <tr>
                                        <td class="name">Bagaimana</td>
                                        <td class="value">: Bagaimana perbuatan tersebut dilakukan (modus, cara, dsb).</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12" style="padding-top: 40px;">
                        <p class="heading-desc">
                            Pelapor membuat pengaduan/pengungkapan dan mengirimkannya melalui sarana/media sebagai berikut :
                        </p>
                    </div>
                    <div class="col-12" style="padding-top: 20px;">
                        <div class="project-details" style="padding-left: 40px; border-left: 4px solid var(--global--color-primary);">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td class="name">Telp.</td>
                                        <td class="value">: <a href="tel:021-4482-0909">(021) 4482-0909</a> ext. 1220</td>
                                    </tr>
                                    <tr>
                                        <td class="name">E-mail</td>
                                        <td class="value"> : <a href="mailto:pengaduan@kbn.co.id">pengaduan@kbn.co.id</a></td>
                                    </tr>
                                    <tr>
                                        <td class="name">Form Pengaduan</td>
                                        <td class="value">: <a href="https://forms.gle/PBhJeWCdvD9gERUA9">Link Pengaduan</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="col-12" style="padding-top: 40px;">
                        <p class="heading-desc">
                            Kotak pengaduan yang diletakan di tempat strategis yaitu dilingkungan Kantor Pusat PT. KBN (P), Kantor SBU Kawasan Cakung, Kantor SBU Pelayanan Logistik, Kantor SBU Kawasan Priok dan Marunda.
                        </p>
                        <h5 style="margin-bottom: 10px; margin-top: 40px;">Perlindungan dan Hak Saksi Pelapor</h5>
                        <p class="heading-desc">
                            Sesuai dengan Pasal VII dalam Surat Keputusan Direksi PT.Kawasan Berikat Nusantara ( Persero ) No. 119/SKD/DU.DU54/06/2020 tentang Perubahan Atau Pedoman Sistem Pelaporan Whistlebowing System (WBS) di PT. Kawasan Berikat Nusantara (Persero ) menyebutkan bahwa seorang sanksi pelapor berhak:
                        </p>
                    </div>

                    <div class="col-12" style="padding-top: 20px;">
                        <ul class="list-unstyled advantages-list" style="margin-bottom: 30px;">
                            <li>
                                Memperoleh perlindungan atas kerahasiaan identitas pribadi, jabatannya dan hak hak sebagai sebagai pegawai lainnya yang berkenan dengan kesaksiannya yang akan,sedang atau telah diberikannya.
                            </li>
                            <li>
                                Memberikan keterangan tanpa tekanan dari pihak manapun.
                            </li>
                            <li>
                                Bebas dari pertanyaan yang menjerat.
                            </li>
                            <li>
                                Mendapat informasi mengenai perkembangan kasus yang telah dilaporkan.
                            </li>
                            <li>
                                Memperoleh penghargaan ( reward ) yang akan ditetapkan oleh Direksi.
                            </li>
                        </ul>
                    </div>
                    <!-- End .row-->
                </div>
                <!-- End .heading-->
            </div>
            <!-- End .container-->
        </div>
    </div>

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

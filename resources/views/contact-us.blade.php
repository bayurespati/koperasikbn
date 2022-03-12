@extends('layouts.master_fe')

@push('title')
<title>Koperasi KBN - Kontak</title>
@endpush

@push('additional_css')
@endpush

@section('content')
<div class="wrapper clearfix" id="wrapperParallax">
    @include('partials.header')

    <!--
      ============================
      Google Map Section
      ============================
      -->
    <section class="map map-2">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3 class="d-none">our office map</h3>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8914631195103!2d106.93186691476866!3d-6.145277795550636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zNsKwMDgnNDMuMCJTIDEwNsKwNTYnMDIuNiJF!5e0!3m2!1sen!2sid!4v1646897422557!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <!-- <iframe src="https://maps.google.com/maps?q=Pioneer%20Works&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" width="600" height="450" style="border:0;"></iframe> -->
    </section>
    <!--
      ============================
      Testimonials #5 Section
      ============================
      -->
    <section class="testimonial testimonial-5 bg-overlay bg-overlay-white2">
        <div class="bg-section"><img src="/assets/images/background/wavy-pattern.png" alt="background" /></div>
        <div class="container">
            <div class="contact-panel contact-panel-2">
                <div class="row">
                    <div class="col-12 col-lg-5 img-card-holder">
                        <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                            <div class="bg-section"><img src="/assets/images/contact/2.jpg" alt="image" /></div>
                            <div class="card-content">
                                <div class="content-top">
                                    <p>Berdiri sejak tahun 1989, kami menyediakan solusi bisnis yang inovatif kepada Perusahaan yang menjadi mitra kami. yang mana kami selalu mengutamakan mutu serta kepercayaan demi kelangsungan bisnis yang harmonis dan bekelanjutan.</p>
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info"><i class="energia-phone-Icon"></i>
                                            <p>Emergency Line: <a href="tel:021-4482-0909">(021) 4482-0909 Ext. 5101 - 5108</a></p>
                                        </li>
                                        <li class="contact-info"><i class="energia-location-Icon"></i>
                                            <p>Lokasi: Gedung Mawar - Jl. Jawa Raya, Komplek PT. KBN (Persero)</p>
                                        </li>
                                        <li class="contact-info"><i class="energia-clock-Icon"></i>
                                            <p>Jam Operasional: Sen - Jum | 08:00 – 17:00 WIB </p>
                                        </li>
                                        <li class="contact-info"><i class="energia-email--icon"></i>
                                            <p>Email: <a href="mailto:pengelola@kopkarkbn.com">pengelola@kopkarkbn.com</a></p>
                                        </li>
                                    </ul>
                                    <a class="btn btn--white" href="javascript:void(0)" style="width: 200px;">
                                        Tentang Kami <i class="energia-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="contact-card">
                            <div class="contact-body">
                                <h5 class="card-heading">Hubungi Kami</h5>
                                <p class="card-desc">Kami sangat bangga dalam segala hal yang kami lakukan, kontrol atas produk memungkinkan kami untuk memastikan pelanggan kami menerima layanan dengan kualitas terbaik.</p>
                                <form class="contactForm" method="post" action="/assets/php/contact.php">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <input class="form-control" type="text" id="contact-name" name="contact-name" placeholder="Nama" required="" />
                                        </div>
                                        <!-- <div class="col-12 col-md-6">
                                            <input class="form-control" type="text" id="contact-email" name="contact-email" placeholder="Email" required="" />
                                        </div> -->
                                        <div class="col-12 col-md-6">
                                            <input class="form-control" type="text" id="contact-phone" name="contact-phone" placeholder="Telepon" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <select class="form-control" id="select-1">
                                                <option value="default">Pilih Layanan</option>
                                                <option value="0">Simpan</option>
                                                <option value="1">Pinjam</option>
                                                <option value="2">Bisnis</option>
                                                <option value="3">Komersial</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <textarea class="form-control" id="contact-infos" placeholder="Informasi Tambahan" name="contact-infos" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn--secondary">Kirim Pertanyaan <i class="energia-arrow-right"></i></button>
                                        </div>
                                        <div class="col-12">
                                            <div class="contact-result"></div>
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

    @include('partials.footer')

    <div class="back-top" id="back-to-top" data-hover=""><i class="energia-arrow-up"></i></div>
</div>
@endsection

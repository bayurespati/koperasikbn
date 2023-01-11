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
                    @if(Cookie::get('current_lang') == 'eng')
                    <h3 class="d-none">our office map</h3>
                    @else
                    <h3 class="d-none">lokasi kantor kami</h3>
                    @endif
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.8914631195103!2d106.93186691476866!3d-6.145277795550636!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zNsKwMDgnNDMuMCJTIDEwNsKwNTYnMDIuNiJF!5e0!3m2!1sen!2sid!4v1646897422557!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <p>Established since 1989, we provide innovative business solutions to companies that become our partners. which we always prioritize quality and trust for harmonious and sustainable business continuity</p>
                                    @else
                                    <p>Berdiri sejak tahun 1989, kami menyediakan solusi bisnis yang inovatif kepada Perusahaan yang menjadi mitra kami. yang mana kami selalu mengutamakan mutu serta kepercayaan demi kelangsungan bisnis yang harmonis dan berkelanjutan.</p>
                                    @endif
                                </div>
                                <div class="content-bottom">
                                    <ul class="list-unstyled contact-infos">
                                        <li class="contact-info"><i class="energia-phone-Icon"></i>
                                            <p>Emergency Line: <a href="tel:021-4482-0909">(021) 4482-0909 Ext. 5101 - 5108</a></p>
                                        </li>
                                        @if(Cookie::get('current_lang') == 'eng')
                                        <li class="contact-info"><i class="energia-location-Icon"></i>
                                            <p>Location: Gedung Mawar - Jl. Jawa Raya, Komplek PT. KBN (Persero)</p>
                                        </li>
                                        <li class="contact-info"><i class="energia-clock-Icon"></i>
                                            <p>Operational Hour: Mon - Fri | 08:00 – 17:00 WIB </p>
                                        </li>
                                        @else
                                        <li class="contact-info"><i class="energia-location-Icon"></i>
                                            <p>Lokasi: Gedung Mawar - Jl. Jawa Raya, Komplek PT. KBN (Persero)</p>
                                        </li>
                                        <li class="contact-info"><i class="energia-clock-Icon"></i>
                                            <p>Jam Operasional: Sen - Jum | 08:00 – 17:00 WIB </p>
                                        </li>
                                        @endif
                                        <li class="contact-info"><i class="energia-email--icon"></i>
                                            <p>Email: <a href="mailto:pengelola@kopkarkbn.com">pengelola@kopkarkbn.com</a></p>
                                        </li>
                                    </ul>
                                    <a class="btn btn--white" href="{{ route('history') }}" style="width: 200px;">
                                        @if(Cookie::get('current_lang') == 'eng')
                                        About Us <i class="energia-arrow-right"></i>
                                        @else
                                        Tentang Kami <i class="energia-arrow-right"></i>
                                        @endif
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-7">
                        <div class="contact-card">
                            <div class="contact-body">
                                @if(Cookie::get('current_lang') == 'eng')
                                <h5 class="card-heading">Contact Us</h5>
                                <p class="card-desc">We take great pride in everything we do, control over products allows us to ensure our customers receive the highest quality service.</p>
                                @else
                                <h5 class="card-heading">Hubungi Kami</h5>
                                <p class="card-desc">Kami sangat bangga dalam segala hal yang kami lakukan, kontrol atas produk memungkinkan kami untuk memastikan pelanggan kami menerima layanan dengan kualitas terbaik.</p>
                                @endif
                                <form class="contactForm" method="post" action="/contact-us">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="row">
                                        <div class="col-12 col-md-12">
                                            <input class="form-control" type="text" id="contact-name" name="nama" placeholder="Nama" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <input class="form-control" type="text" id="contact-phone" name="telepone" placeholder="Telepon" required="" />
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <select class="form-control" id="select-1" required name="layanan">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                <option value="">Choose Type of Service</option>
                                                <option value="Simpan">Saving</option>
                                                <option value="Pinjam">Loan</option>
                                                <option value="Bisnis">Business</option>
                                                <option value="Komersial">Commercial</option>
                                                @else
                                                <option value="">Pilih Layanan</option>
                                                <option value="Simpan">Simpan</option>
                                                <option value="Pinjam">Pinjam</option>
                                                <option value="Bisnis">Bisnis</option>
                                                <option value="Komersial">Komersial</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <textarea required class="form-control" id="contact-infos" placeholder="Informasi Tambahan" name="pertanyaan" cols="30" rows="10"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn--secondary">
                                                @if(Cookie::get('current_lang') == 'eng')
                                                Send Inquiry <i class="energia-arrow-right"></i>
                                                @else
                                                Kirim Pertanyaan <i class="energia-arrow-right"></i>
                                                @endif
                                            </button>
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

@push('additional_js')
<script src="{{ asset('js/simpan-pinjam.js') }}"></script>
<script type="text/javascript">
    /* ------------------  AJAX CONTACT FORM  ------------------ */
    var contactForm = $(".contactForm"),
        contactResult = $('.contact-result');
    contactForm.validate({
        debug: false,
        submitHandler: function(contactForm) {
            $.ajax({
                type: "POST",
                url: "contact-us",
                data: $(contactForm).serialize(),
                timeout: 20000,
                success: function() {
                    let preContent = document.createElement('pre');
                    preContent.innerHTML = 'Pesan Berhasil Dikirim';

                    swal({
                        title: "Yay!",
                        content: preContent,
                        icon: "success",
                        button: "Close",
                    });
                },
                error: function(error) {
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
                }
            });
            return false;
        }
    });
</script>
@endpush

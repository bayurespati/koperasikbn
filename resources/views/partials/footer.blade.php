<footer class="footer footer-1">
    <div class="footer-top">
        <div class="container">
            @if(Cookie::get('current_lang') == 'eng')
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>cooperative profile</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('history') }}">Short History</a></li>
                                <li><a href="{{ route('about') }}">Vision Mission</a></li>
                                <li><a href="{{ route('business') }}">Cooperative Business</a></li>
                                <li><a href="{{ route('management') }}">Management</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-2-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>Our Products</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                @if(Auth::user())
                                <li><a href="{{ route('saving') }}">Save and Loan</a></li>
                                @else
                                <li><a href="{{ route('login') }}">Save and Loan</a></li>
                                @endif
                                <li><a href="{{ route('minimart') }}">Business & Commercial</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-2-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <a href="{{ route('faq') }}">
                                <h5>FAQs</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-widget widget-links widget-icon">
                        <div class="footer-widget-title">
                            <h5>Media</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('photo-video') }}">Photos & Videos</a></li>
                                <li><a href="{{ route('news') }}">News</a></li>
                                <li><a href="{{ route('announcement') }}">Announcement</a></li>
                                <li><a href="{{ route('award-certificate') }}">Awards & Certifications</a></li>
                                <li><a href="{{ route('calendar') }}">Event Calendar</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-5-->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-content">
                            <ul>
                                <li class="phone">(021)<a href="tel:021-4482-0909"> 4482-0909</a></li>
                                <li class="phone" style="font-size: 20px;;">ext. 5101 to 5108</li>
                                <li class="email"><a href="mailto:manager@kopkarkbn.com">manager@kopkarkbn.com</a></li>
                                <li class="address">
                                    <p>The Rose Building - Jl. Jawa Raya, Complex PT. KBN (Persero) Jl. Raya Cakung Cilincing, DKI Jakarta, 1410.</p>
                                </li>
                                <li class="directions" style="margin-bottom: 40px;"><a href="https://maps.app.goo.gl/ggcoKRdoF1LibBrT8" target="_blank"><i class="energia- location-Icon"></i>get directions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End .col-lg-3-->
            </div>
            @else
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>profil koperasi</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('history') }}">Sejarah Singkat</a></li>
                                <li><a href="{{ route('about') }}">Visi Misi</a></li>
                                <li><a href="{{ route('business') }}">Bisnis Koperasi</a></li>
                                <li><a href="{{ route('management') }}">Manajemen</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  End .col-lg-2-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <h5>Produk Kami</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                @if(Auth::user())
                                <li><a href="{{ route('saving') }}">Simpan Pinjam</a></li>
                                @else
                                <li><a href="{{ route('login') }}">Simpan Pinjam</a></li>
                                @endif
                                <li><a href="{{ route('minimart') }}">Bisnis & Komersial</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  End .col-lg-2-->
                <div class="col-12 col-sm-6 col-md-6 col-lg-2">
                    <div class="footer-widget widget-links">
                        <div class="footer-widget-title">
                            <a href="{{ route('faq') }}">
                                <h5>FAQ</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="footer-widget widget-links widget-icon">
                        <div class="footer-widget-title">
                            <h5>Media</h5>
                        </div>
                        <div class="widget-content">
                            <ul>
                                <li><a href="{{ route('photo-video') }}">Foto & Video</a></li>
                                <li><a href="{{ route('news') }}">Berita</a></li>
                                <li><a href="{{ route('announcement') }}">Pengumuman</a></li>
                                <li><a href="{{ route('award-certificate') }}">Penghargaan & Sertifikasi</a></li>
                                <li><a href="{{ route('calendar') }}">Kalender Kegiatan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  End .col-lg-5-->
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="footer-widget widget-contact">
                        <div class="widget-content">
                            <ul>
                                <li class="phone">(021)<a href="tel:021-4482-0909"> 4482-0909</a></li>
                                <li class="phone" style="font-size: 20px;;">ext. 5101 s/d 5108</li>
                                <li class="email"><a href="mailto:pengelola@kopkarkbn.com">pengelola@kopkarkbn.com</a></li>
                                <li class="address">
                                    <p>Gedung Mawar - Jl. Jawa Raya, Komplek PT. KBN (Persero) Jl. Raya Cakung Cilincing, DKI Jakarta, 1410.</p>
                                </li>
                                <li class="directions" style="margin-bottom: 40px;">
                                    @if(Cookie::get('current_lang') == 'eng')
                                    <a href="https://maps.app.goo.gl/ggcoKRdoF1LibBrT8" target="_blank">
                                        <i class='energia-location-Icon'></i>get directions
                                    </a>
                                    @else
                                    <a href="https://maps.app.goo.gl/ggcoKRdoF1LibBrT8" target="_blank">
                                        <i class="energia-location-Icon"></i>dapatkan petunjuk arah
                                    </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--  End .col-lg-3-->
            </div>
            @endif
            <!-- End .row-->
        </div>
        <!--  End .container-->
    </div>
    <!--  End .footer-top-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-copyright">
                        <div class="copyright"><span>&copy; 2022 Koperasi Karyawan KBN. all rights reserved. </span>
                            <ul class="list-unstyled social-icons d-flex align-items-center">
                                <li>
                                    <a class="share-facebook" href="https://www.facebook.com/groups/1013674399210919" target="_blank">
                                        <i class="energia-facebook" style="font-size:22px; padding-bottom: 2px;"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li>
                                    <a class="share-instagram" href="https://www.instagram.com/kopkarkbn/" target="_blank">
                                        <img src="/fonts/instagram-round.svg" alt="instagram" style="width: 22px;">
                                        Instagram
                                    </a>
                                </li>
                                <li>
                                    <a class="share-whatsapp" href="https://wa.me/628119662886" target="_blank">
                                        <img src="/fonts/whatsapp-round.svg" alt="whatsapp" style="width: 22px;">
                                        Whatsapp
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  End .row-->
    </div>
    <!--  End .footer-bottom-->
</footer>

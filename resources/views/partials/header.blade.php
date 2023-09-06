<header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">
    <div class="top-bar">
        <div class="block-left">
            <div class="top-contact">
                @if(Cookie::get('current_lang') == 'eng')
                <div class="contact-infos"><i class="energia-phone-Icon"></i>
                    <div class="contact-body">
                        <p>phone: <a href="tel:021-4482-0909">(021) 4482-0909 ext. 5101 - 5108</a></p>
                    </div>
                </div>
                <div class="contact-infos"><i class="energia-clock-icon"></i>
                    <div class="contact-body">
                        <p>Operational Hour: Mon - Fri | 08:00 - 17:00 WIB</p>
                    </div>
                </div>
                @else
                <div class="contact-infos"><i class="energia-phone-Icon"></i>
                    <div class="contact-body">
                        <p>telepon: <a href="tel:021-4482-0909">(021) 4482-0909 ext. 5101 - 5108</a></p>
                    </div>
                </div>
                <div class="contact-infos"><i class="energia-clock-icon"></i>
                    <div class="contact-body">
                        <p>Jam Operasional: Sen - Jum | 08:00 - 17:00 WIB</p>
                    </div>
                </div>
                @endif
                <div class="contact-infos"><i class="energia-location-Icon"></i>
                    <div class="contact-body">
                        <p><a href="https://goo.gl/maps/pP3ZfaDMHyP7rBa69" target="_blank">Gedung Mawar - Jl. Jawa Raya, Komplek PT. KBN (Persero)</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-right">
            <!-- Start .social-links-->
            <div class="social-links">
                <a class="share-facebook" href="https://www.facebook.com/groups/1013674399210919" target="_blank">
                    <i style="font-size:22px; padding-top: 2px;" class="energia-facebook"></i>
                </a>
                <a class="share-instagram" href="https://www.instagram.com/kopkarkbn/" target="_blank">
                    <img src="/fonts/instagram-round.svg" alt="instagram" style="width: 22px; filter: invert(63%) sepia(58%) saturate(494%) hue-rotate(91deg) brightness(89%) contrast(94%);">
                </a>
                <a class="share-whatsapp" href="https://wa.me/628119662886" target="_blank">
                    <img src="/fonts/whatsapp-round.svg" alt="whatsapp" style="width: 22px; filter: invert(63%) sepia(58%) saturate(494%) hue-rotate(91deg) brightness(89%) contrast(94%);">
                </a>
            </div>
            <!-- End .social-links-->
            <div class="module module-language">
                @if(Cookie::get('current_lang') == 'eng')
                <div class="selected"><img src="/assets/images/module-language/en.png" alt="Eng Language" /><span>English</span><i class="fas fa-chevron-down"></i></div>
                @else
                <div class="selected"><img src="/assets/images/module-language/id.png" alt="ID Language" /><span>Indonesia</span><i class="fas fa-chevron-down"></i></div>
                @endif
                <div class="lang-list">
                    <ul>
                        @if(Cookie::get('current_lang') == 'eng')
                        <li id="button-lang-id"> <img src="/assets/images/module-language/id.png" alt="ID Language" /><a href="#">Indonesia</a></li>
                        <li id="button-lang-eng"> <img src="/assets/images/module-language/en.png" alt="En Language" /><a href="#">English</a></li>
                        @else
                        <li id="button-lang-id"> <img src="/assets/images/module-language/id.png" alt="ID Language" /><a href="#">Indonesia</a></li>
                        <li id="button-lang-eng"> <img src="/assets/images/module-language/en.png" alt="En Language" /><a href="#">Inggris</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu"><a class="navbar-brand" href="{{ route('index') }}"><img class="logo logo-dark" src="/assets/images/logo/logo-dark.png" alt="Koperasi KBN Logo" style="width: auto !important;" /><img class="logo logo-mobile" src="/assets/images/logo/logo-mobile.png" alt="Koperasi KBN Logo" style="width: auto !important;" /></a>
        <div class="module-holder module-holder-phone">
            <div class="module module-language">
                @if(Cookie::get('current_lang') == 'eng')
                <div class="selected"><img src="/assets/images/module-language/en.png" alt="En Language" style="border: 0.1px solid lightgrey;" /><span>English</span><i class="fas fa-chevron-down"></i></div>
                @else
                <div class="selected"><img src="/assets/images/module-language/id.png" alt="ID Language" style="border: 0.1px solid lightgrey;" /><span>Indonesia</span><i class="fas fa-chevron-down"></i></div>
                @endif
                <div class="lang-list" style="left: -60px !important;">
                    <ul>
                        @if(Cookie::get('current_lang') == 'eng')
                        <li id="button-lang-id-mobile"> <img src="/assets/images/module-language/id.png" alt="ID Language" style="border: 0.1px solid lightgrey;" /><a href="#">Indonesia</a></li>
                        <li id="button-lang-eng-mobile"> <img src="/assets/images/module-language/en.png" alt="En Language" /><a href="#">English</a></li>
                        @else
                        <li id="button-lang-id-mobile"> <img src="/assets/images/module-language/id.png" alt="ID Language" style="border: 0.1px solid lightgrey;" /><a href="#">Indonesia</a></li>
                        <li id="button-lang-eng-mobile"> <img src="/assets/images/module-language/en.png" alt="En Language" /><a href="#">Inggris</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
            @if(Cookie::get('current_lang') == 'eng')
            <ul class="navbar-nav me-auto" id="navbarContentUl">
                <li class="{{ request()->is('/') ? 'nav-item active' : 'nav-item' }}" id="index" data-hover=""><a href="{{ route('index') }}"><span>Home</span></a></li>

                <li class="{{ request()->is('profile/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover="">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Cooperative Profile</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->is('profile/history') || request()->is('profile/history/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('history') }}"><span>Short History</span></a></li>
                        <li class="{{ request()->is('profile/about-us') || request()->is('profile/about-us/*') ? 'nav-item current' : ' nav-item' }}"><a href="{{ route('about') }}"><span>Vision Mission</span></a></li>
                        <li class="{{ request()->is('profile/our-business') || request()->is('profile/our-business/*') ? 'nav-item current' : ' nav-item' }}"><a href="{{ route('business') }}"><span>Cooperative Business</span></a></li>
                        <li class="{{ request()->is('profile/our-team') || request()->is('profile/our-team/*') ? 'nav-item current' : ' nav-item' }}"><a href="{{ route('management') }}"><span>Management</span></a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('product/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover="">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Our Products</span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::user() && Auth::user()->email_verified_at !== null)
                        <li class="{{ request()->is('product/saving') || request()->is('product/loan') ? 'nav-item current' : 'nav-item' }} "><a href="{{ route('saving') }}"><span>Save and Loan</span></a></li>
                        @else
                        <li class="nav-item"><a href="{{ route('saving') }}"><span>Save and Loan</span></a></li>
                        @endif
                        <li class="{{ request()->is('product/minimart') || request()->is('product/minimart/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('minimart') }}"><span>Business & Commercial</span></a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('member-forum/faq') || request()->is('member-forum/faq/*') ? 'nav-item active' : ' nav-item' }}"><a href="{{ route('faq') }}"><span>FAQ</span></a></li>

                <li class="{{ request()->is('media/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover="">
                    <a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Media</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->is('media/photo-and-video') || request()->is('media/photo-and-video/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('photo-video') }}"><span>Photos & Videos</span></a></li>
                        <li class="{{ request()->is('media/news') || request()->is('media/news/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('news') }}"><span>News</span></a></li>
                        <li class="{{ request()->is('media/announcement') || request()->is('media/announcement/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('announcement') }}"><span>Announcement</span></a></li>
                        <li class="{{ request()->is('media/award-and-certificate') || request()->is('media/award-and-certificate/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('award-certificate') }}"><span>Awards & Certifications</span></a></li>
                        <li class="{{ request()->is('media/calendar') || request()->is('media/calendar/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('calendar') }}"><span>Calendar of Events</span></a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('contact-us') || request()->is('contact-us/*') ? 'nav-item active' : 'nav-item' }}" data-hover=""><a href="{{ route('contact') }}"><span>Contact</span></a></li>
            </ul>
            @else
            <ul class="navbar-nav me-auto" id="navbarContentUl">
                <li class="{{ request()->is('/') ? 'nav-item active' : 'nav-item' }}" id="index" data-hover=""><a href="{{ route('index') }}"><span>Beranda</span></a></li>

                <li class="{{ request()->is('profile/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Profil Koperasi</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->is('profile/history') || request()->is('profile/history/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('history') }}"><span>Sejarah Singkat</span></a></li>
                        <li class="{{ request()->is('profile/about-us') || request()->is('profile/about-us/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('about') }}"><span>Visi Misi</span></a></li>
                        <li class="{{ request()->is('profile/our-business') || request()->is('profile/our-business/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('business') }}"><span>Bisnis Koperasi</span></a></li>
                        <li class="{{ request()->is('profile/our-team') || request()->is('profile/our-team/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('management') }}"><span>Manajemen</span></a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('product/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Produk Kami</span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::user() && Auth::user()->email_verified_at !== null)
                        <li class="{{ request()->is('product/saving') || request()->is('product/loan') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('saving') }}"><span>Simpan Pinjam</span></a></li>
                        @else
                        <li class="nav-item"><a href="{{ route('saving') }}"><span>Simpan Pinjam</span></a></li>
                        @endif
                        <li class="{{ request()->is('product/minimart') || request()->is('product/minimart/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('minimart') }}"><span>Bisnis & Komersial</span></a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('member-forum/faq') || request()->is('member-forum/faq/*') ? 'nav-item active' : 'nav-item' }}"><a href="{{ route('faq') }}"><span>FAQ</span></a></li>

                <li class="{{ request()->is('media/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Media</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->is('media/photo-and-video') || request()->is('media/photo-and-video/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('photo-video') }}"><span>Foto & Video</span></a></li>
                        <li class="{{ request()->is('media/news') || request()->is('media/news/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('news') }}"><span>Berita</span></a></li>
                        <li class="{{ request()->is('media/announcement') || request()->is('media/announcement/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('announcement') }}"><span>Pengumuman</span></a></li>
                        <li class="{{ request()->is('media/award-and-certificate') || request()->is('media/award-and-certificate/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('award-certificate') }}"><span>Penghargaan & Sertifikasi</span></a></li>
                        <li class="{{ request()->is('media/calendar') || request()->is('media/calendar/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('calendar') }}"><span>Kalender Kegiatan</span></a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('contact-us') || request()->is('contact-us/*') ? 'nav-item active' : 'nav-item' }}" data-hover=""><a href="{{ route('contact') }}"><span>Kontak</span></a></li>
            </ul>
            @endif

            <div class="module-holder">
                @if(Cookie::get('current_lang') == 'eng')
                <div class="module-contact">
                    @if(Auth::user())
                    @if(Auth::user()->role_id !== 3)
                    <a class="btn btn--primary" href="{{ route('login') }}">
                        Dashboard
                    </a>
                    @endif
                    <a class="btn btn--primary" onclick="logoutFunc()" href="#">
                        Logout
                    </a>
                    @else
                    <a class="btn btn--primary" href="{{ route('login') }}">
                        Login
                    </a>
                    @endif
                    <a class="btn btn--primary" href="https://padiumkm.id/store/631a5db28755a8a98960aa89" target="_blank">
                        <i class="fa fa-shopping-cart m-0"></i>
                    </a>
                </div>
                @else
                <div class="module-contact">
                    @if(Auth::user())
                    @if(Auth::user()->role_id !== 3)
                    <a class="btn btn--primary" href="{{ route('login') }}">
                        <p class="m-0 p-0" style="color: white;"><b>Dasbor</b></p>
                    </a>
                    @endif
                    <a class="btn btn--primary" onclick="logoutFunc()" href="#">
                        <p class="m-0 p-0" style="color: white;"><b>Keluar</b></p>
                    </a>
                    @else
                    <a class="btn btn--primary" href="{{ route('login') }}">
                        <p class="m-0 p-0" style="color: white;"><b>Masuk</b></p>
                    </a>
                    @endif
                    <a class="btn btn--primary" href="https://padiumkm.id/store/631a5db28755a8a98960aa89" target="_blank">
                        <div>
                            <i class="fa fa-shopping-cart m-0 d-lg-block d-md-none d-sm-none"></i>
                            <p class="m-0 p-0" style="color: white; font-size: 12px;"><b>PADI UMKM</b></p>
                        </div>
                    </a>
                </div>
                @endif
            </div>
            <!--  End .module-holder-->
        </div>
        <!--  End .navbar-collapse-->
    </nav>
    <!--  End .navbar-->
</header>

<header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">
    <div class="top-bar">
        <div class="block-left">
            <div class="top-contact">
                <div class="contact-infos"><i class="energia-phone-Icon"></i>
                    <div class="contact-body">
                        <p>phone: <a href="tel:021-4482-0909">(021) 4482-0909</a></p>
                    </div>
                </div>
                <div class="contact-infos"><i class="energia-email--icon"></i>
                    <div class="contact-body">
                        <p>email: <a href="mailto:pinjaman@kopkarkbn.com">pinjaman@kopkarkbn.com </a></p>
                    </div>
                </div>
                <div class="contact-infos"><i class="energia-location-Icon"></i>
                    <div class="contact-body">
                        <p><a href="https://goo.gl/maps/CLksE8MWNYK1wi8T6" target="_blank">Jl. Raya Cakung Cilincing, DKI Jakarta, 1410</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-right">
            <!-- Start .social-links-->
            <div class="social-links"><a class="share-facebook" href="javascript:void(0)"><i class="energia-facebook"></i></a><a class="share-instagram" href="javascript:void(0)"><i class="energia-twitter"></i></a><a class="share-twitter" href="javascript:void(0)"><i class="energia-youtube"></i></a></div>
            <!-- End .social-links-->
            <div class="module module-language">
                <div class="selected"><img src="/assets/images/module-language/en.png" alt="En Language" /><span>english</span><i class="fas fa-chevron-down"></i></div>
                <div class="lang-list">
                    <ul>
                        <li> <img src="/assets/images/module-language/en.png" alt="En Language" /><a href="#">english</a></li>
                        <li> <img src="/assets/images/module-language/id.png" alt="ID Language" /><a href="#">indonesia</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu"><a class="navbar-brand" href="index.html"><img class="logo logo-dark" src="/assets/images/logo/logo-dark.png" alt="Energia Logo" /><img class="logo logo-mobile" src="/assets/images/logo/logo-mobile.png" alt="Energia Logo" /></a>
        <div class="module-holder module-holder-phone">
            <div class="module module-language">
                <div class="selected"><img src="/assets/images/module-language/en.png" alt="En Language" /><span>english</span><i class="fas fa-chevron-down"></i></div>
                <div class="lang-list">
                    <ul>
                        <li> <img src="/assets/images/module-language/en.png" alt="En Language" /><a href="#">english</a></li>
                        <li> <img src="/assets/images/module-language/id.png" alt="ID Language" /><a href="#">indonesia</a></li>
                    </ul>
                </div>
            </div>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto" id="navbarContentUl">
                <li class="{{ request()->is('/') ? 'nav-item active' : 'nav-item' }}" id="index" data-hover=""><a href="{{ route('index') }}"><span>Beranda</span></a></li>

                <li class="{{ request()->is('profile/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Profil Koperasi</span></a>
                    <ul class="dropdown-menu">
                        <!-- <li class="nav-item has-dropdown" data-hover=""><a href="#" class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Produk Kami</span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a href="{{ route('saving-loan') }}"><span>Simpan Pinjam</span></a></li>
                            </ul>
                        </li> -->
                        <li class="{{ request()->is('profile/history') || request()->is('profile/history/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('history') }}"><span>Sejarah Singkat</span></a></li>
                        <li class="{{ request()->is('profile/about-us') || request()->is('profile/about-us/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('about') }}"><span>Visi Misi</span></a></li>
                        <li class="{{ request()->is('profile/our-business') || request()->is('profile/our-business/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('business') }}"><span>Bisnis Koperasi</span></a></li>
                        <li class="{{ request()->is('profile/our-team') || request()->is('profile/our-team/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('management') }}"><span>Manajemen</span></a></li>
                        <li class="{{ request()->is('profile/report') || request()->is('profile/report/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('report') }}"><span>Laporan</span></a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('product/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Produk Kami</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->is('product/saving-and-loan') || request()->is('product/saving-and-loan/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('saving-loan') }}"><span>Simpan Pinjam</span></a></li>
                        <li class="{{ request()->is('product/minimart') || request()->is('product/minimart/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('minimart') }}"><span>Minimarket</span></a></li>
                        <li class="{{ request()->is('product/stationary') || request()->is('product/stationary/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('stationary') }}"><span>Alat Tulis Kantor (ATK)</span></a></li>
                        <li class="{{ request()->is('product/cleaning-service') || request()->is('product/cleaning-service/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('cleaning-service') }}"><span>Penyedia Jasa Tenaga Ahli Daya - Cleaning Service</span></a></li>
                        <li class="{{ request()->is('product/gardening') || request()->is('product/gardening/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('gardening') }}"><span>Penyedia Jasa Tenaga Ahli Daya - Perawatan Taman</span></a></li>
                        <li class="{{ request()->is('product/driver') || request()->is('product/driver/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('driver') }}"><span>Penyedia Jasa Tenaga Ahli Daya - Driver</span></a></li>
                        <li class="{{ request()->is('product/administration-staff') || request()->is('product/administration-staff/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('administration-staff') }}"><span>Penyedia Jasa Tenaga Ahli Daya - Staf Administrasi</span></a></li>
                        <li class="{{ request()->is('product/others') || request()->is('product/others/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('others') }}"><span>Penyedia Jasa Tenaga Ahli Daya - Dll</span></a></li>
                        <li class="{{ request()->is('product/vehicle-registration-service') || request()->is('product/vehicle-registration-service/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('vehicle-registration-service') }}"><span>Pengurusan Jasa Surat Kendaraan</span></a></li>
                        <li class="{{ request()->is('product/photocopy-machine-rental') || request()->is('product/photocopy-machine-rental/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('photocopy-machine-rental') }}"><span>Penyewaan Mesin Fotokopi</span></a></li>
                    </ul>
                </li>

                <li class="{{ request()->is('member-forum/*') ? 'nav-item has-dropdown active' : 'nav-item has-dropdown' }}" data-hover=""><a class="dropdown-toggle" href="#" data-toggle="dropdown"><span>Suara Anggota</span></a>
                    <ul class="dropdown-menu">
                        <li class="{{ request()->is('member-forum/whistleblower') || request()->is('member-forum/whistleblower/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('whistleblower') }}"><span>Whistleblower</span></a></li>
                        <li class="{{ request()->is('member-forum/complaint') || request()->is('member-forum/complaint/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('complaint') }}"><span>Pengaduan</span></a></li>
                        <li class="{{ request()->is('member-forum/faq') || request()->is('member-forum/faq/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('faq') }}"><span>FAQ</span></a></li>
                        <li class="{{ request()->is('member-forum/customer-relationship') || request()->is('member-forum/customer-relationship/*') ? 'nav-item current' : 'nav-item' }}"><a href="{{ route('customer-relationship') }}"><span>Customer Relationship</span></a></li>
                    </ul>
                </li>

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
            <div class="module-holder">
                <div class="module-contact">
                    <a class="btn btn--primary" href="{{ route('login') }}">
                        Sign In
                        <!-- <i class="energia-arrow-right"></i> -->
                    </a>
                </div>
                <div class="module-contact" style="margin-left: 0;">
                    <a class="btn btn--primary " href="#">
                        ajukan pinjaman<i class="energia-arrow-right"></i>
                    </a>
                </div>
            </div>
            <!--  End .module-holder-->
        </div>
        <!--  End .navbar-collapse-->
    </nav>
    <!--  End .navbar-->
</header>
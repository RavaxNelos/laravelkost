<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <a href="/admin/dashboard" class="text-nowrap logo-img">
                <img src="{{ asset('img/logokosthomerava.png') }}" class="dark-logo mb-0" width="180" alt="" />
                <img src="{{ asset('img.logokosthomerava.png') }}" class="light-logo mb-0" width="180" alt="" />
            </a>
            <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                <i class="ti ti-x fs-8 text-muted"></i>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar>
            <ul id="sidebarnav">
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Menu</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/pemilikmin/dashboard" aria-expanded="false">
                        <span>
                            <i class="ti ti-aperture"></i>
                        </span>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/pemilikmin/transaksi" aria-expanded="false">
                        <span>
                            <i class="ti ti-shopping-cart"></i>
                        </span>
                        <span class="hide-menu">Transaksi</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('kamar') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-door"></i>
                        </span>
                        <span class="hide-menu">Kamar</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('bayar') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-coin"></i>
                        </span>
                        <span class="hide-menu">Metode Pembayaran</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('banner') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-app-window"></i>
                        </span>
                        <span class="hide-menu">Banner</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('jamkamarkost') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-clock"></i>
                        </span>
                        <span class="hide-menu">Jam Masuk Kost</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/pemilikmin/kerusakan" aria-expanded="false">
                        <span>
                            <i class="ti ti-report"></i>
                        </span>
                        <span class="hide-menu">Lapor Kerusakan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="/pemilikmin/kehilangan" aria-expanded="false">
                        <span>
                            <i class="ti ti-search"></i>
                        </span>
                        <span class="hide-menu">Lapor Kehilangan</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('fasilitas') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-tools"></i>
                        </span>
                        <span class="hide-menu">Fasilitas</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link {{ Request::is('pemilikmin/pengguna', 'pemilikmin/editpengguna/*') ? 'active' : null }}" href="{{ route('pengguna') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-check"></i>
                        </span>
                        <span class="hide-menu">User Kost</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link" href="/pemilikmin/penghuni" aria-expanded="false">
                        <span>
                            <i class="ti ti-user"></i>
                        </span>
                        <span class="hide-menu">Penghuni Kost</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('pemilik') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-user-circle"></i>
                        </span>
                        <span class="hide-menu">Pemilik Kost</span>
                    </a>
                </li>
                <li class="nav-small-cap">
                    <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                    <span class="hide-menu">Master Data</span>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link" href="{{ route('kategori') }}" aria-expanded="false">
                        <span>
                            <i class="ti ti-square-plus"></i>
                        </span>
                        <span class="hide-menu">Tambah Kategori</span>
                    </a>
                </li>
            </ul>
            <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>

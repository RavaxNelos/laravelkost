@extends('layouts.admin.app')

@section('title', 'Transaksi')

@section('styles')

@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Transaksi</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Transaksi</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin') }}/dist/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-content searchable-container list">
        <!-- --------------------- start Contact ---------------- -->
        <div class="card card-body">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <form class="position-relative">
                        <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari Transaksi..." />
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <div class="action-btn show-btn" style="display: none">
                        <a href="javascript:void(0)" class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                            <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                        </a>
                    </div>
                    <a href="javascript:void(0)" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                        <i class="ti ti-users text-white me-1 fs-5"></i> Bukti Transfer
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="dark-transparent sidebartoggler"></div>
    <div class="dark-transparent sidebartoggler"></div>
    <div class="card card-body">
        <div class="table-responsive">
            <table class="table search-table align-middle text-nowrap">
                <thead class="header-item">
                    <th>
                        <div class="n-chk align-self-center text-center">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input primary" id="contact-check-all" />
                                <label class="form-check-label" for="contact-check-all"></label>
                                <span class="new-control-indicator"></span>
                            </div>
                        </div>
                    </th>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Total Penyewaan</th>
                    <th>Harga Per Kamar</th>
                    <th>Total Harga</th>
                </thead>
                <tbody>
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="n-chk align-self-center text-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox1" />
                                    <label class="form-check-label" for="checkbox1"></label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-number" data-nomer="1">1</span>
                        </td>
                        <td>
                            <span class="usr-name" data-nama="Ravanelo">Ravanelo</span>
                        </td>
                        <td>
                            <span class="usr-total-sewa" data-total-sewa="2">2</span>
                        </td>
                        <td>
                            <span class="usr-harga" data-harga="Rp. 2000000">Rp. 2000000</span>
                        </td>
                        <td>
                            <span class="usr-total-harga" data-total-harga="Rp. 4000000">Rp. 4000000</span>
                        </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="n-chk align-self-center text-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox2" />
                                    <label class="form-check-label" for="checkbox2"></label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-number" data-nomer="2">2</span>
                        </td>
                        <td>
                            <span class="usr-name" data-nama="Adrian">Adrian</span>
                        </td>
                        <td>
                            <span class="usr-total-sewa" data-total-sewa="1">1</span>
                        </td>
                        <td>
                            <span class="usr-harga" data-harga="Rp. 2100000">Rp. 2100000</span>
                        </td>
                        <td>
                            <span class="usr-total-harga" data-total-harga="Rp. 2100000">Rp. 2100000</span>
                        </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="n-chk align-self-center text-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input contact-chkbox primary" id="checkbox4" />
                                    <label class="form-check-label" for="checkbox4"></label>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-number" data-nomer="3">3</span>
                        </td>
                        <td>
                            <span class="usr-name" data-nama="Bramahna">Bramahna</span>
                        </td>
                        <td>
                            <span class="usr-total-sewa" data-total-sewa="3">3</span>
                        </td>
                        <td>
                            <span class="usr-harga" data-harga="Rp. 1000000">Rp. 1000000</span>
                        </td>
                        <td>
                            <span class="usr-total-harga" data-total-harga="Rp. 3000000">Rp. 3000000</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- --------------------------------------------------- -->
    <!-- Customizer -->
    <!-- --------------------------------------------------- -->
    <button class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
        <i class="ti ti-settings fs-7" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Settings"></i>
    </button>
    <div class="offcanvas offcanvas-end customizer" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel" data-simplebar="">
        <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
            <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">Settings</h4>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4">
            <div class="theme-option pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Theme Option</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="javascript:void(0)" onclick="toggleTheme('{{ asset('admin') }}/dist/css/style.min.css')" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 light-theme text-dark">
                        <i class="ti ti-brightness-up fs-7 text-primary"></i>
                        <span class="text-dark">Light</span>
                    </a>
                    <a href="javascript:void(0)" onclick="toggleTheme('{{ asset('admin') }}/dist/css/style-dark.min.css')" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 dark-theme text-dark">
                        <i class="ti ti-moon fs-7 "></i>
                        <span class="text-dark">Dark</span>
                    </a>
                </div>
            </div>
            <div class="theme-direction pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Theme Direction</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="./index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                        <i class="ti ti-text-direction-ltr fs-6 text-primary"></i>
                        <span class="text-dark">LTR</span>
                    </a>
                    <a href="../rtl/index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                        <i class="ti ti-text-direction-rtl fs-6 text-dark"></i>
                        <span class="text-dark">RTL</span>
                    </a>
                </div>
            </div>
            <div class="theme-colors pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Theme Colors</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <ul class="list-unstyled mb-0 d-flex gap-3 flex-wrap change-colors">
                        <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin1-bluetheme-primary active-theme " onclick="toggleTheme('{{ asset('admin') }}/dist/css/style.min.css')" data-color="blue_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="BLUE_THEME"><i class="ti ti-check text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin2-aquatheme-primary " onclick="toggleTheme('{{ asset('admin') }}/dist/css/style-aqua.min.css')" data-color="aqua_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="AQUA_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin3-purpletheme-primary" onclick="toggleTheme('{{ asset('admin') }}/dist/css/style-purple.min.css')" data-color="purple_theme" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="PURPLE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin4-greentheme-primary" onclick="toggleTheme('{{ asset('admin') }}/dist/css/style-green.min.css')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin5-cyantheme-primary" onclick="toggleTheme('{{ asset('admin') }}/dist/css/style-cyan.min.css')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="CYAN_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                        <li class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center justify-content-center">
                            <a href="javascript:void(0)" class="rounded-circle position-relative d-block customizer-bgcolor skin6-orangetheme-primary" onclick="toggleTheme('{{ asset('admin') }}/dist/css/style-orange.min.css')" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME"><i class="ti ti-check  text-white d-flex align-items-center justify-content-center fs-5"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="layout-type pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Layout Type</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="./index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                        <i class="ti ti-layout-sidebar fs-6 text-primary"></i>
                        <span class="text-dark">Vertical</span>
                    </a>
                    <a href="../horizontal/index.html" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2">
                        <i class="ti ti-layout-navbar fs-6 text-dark"></i>
                        <span class="text-dark">Horizontal</span>
                    </a>
                </div>
            </div>
            <div class="container-option pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Container Option</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 boxed-width text-dark">
                        <i class="ti ti-layout-distribute-vertical fs-7 text-primary"></i>
                        <span class="text-dark">Boxed</span>
                    </a>
                    <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 full-width text-dark">
                        <i class="ti ti-layout-distribute-horizontal fs-7"></i>
                        <span class="text-dark">Full</span>
                    </a>
                </div>
            </div>
            <div class="sidebar-type pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Sidebar Type</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 fullsidebar">
                        <i class="ti ti-layout-sidebar-right fs-7"></i>
                        <span class="text-dark">Full</span>
                    </a>
                    <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center text-dark sidebartoggler gap-2">
                        <i class="ti ti-layout-sidebar fs-7"></i>
                        <span class="text-dark">Collapse</span>
                    </a>
                </div>
            </div>
            <div class="card-with pb-4">
                <h6 class="fw-semibold fs-4 mb-1">Card With</h6>
                <div class="d-flex align-items-center gap-3 my-3">
                    <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 text-dark cardborder">
                        <i class="ti ti-border-outer fs-7"></i>
                        <span class="text-dark">Border</span>
                    </a>
                    <a href="javascript:void(0)" class="rounded-2 p-9 customizer-box hover-img d-flex align-items-center gap-2 cardshadow">
                        <i class="ti ti-border-none fs-7"></i>
                        <span class="text-dark">Shadow</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ---------------------------------------------- -->
    <!-- Customizer -->
    <!-- ---------------------------------------------- -->
@endsection

@push('scripts')
    <script src="{{ asset('admin') }}dist/js/apps/contact.js"></script>
@endpush
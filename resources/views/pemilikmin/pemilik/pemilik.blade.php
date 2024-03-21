@extends('layouts.admin.app')

@section('title', 'Pemilik')

@section('styles')

@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Pemilik</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Pemilik</li>
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
        <div class="card card-body" style="margin-bottom: 10px; margin-top: -30px; padding: 10px;">
            <div class="row">
                <div class="col-md-4 col-xl-3">
                    <form class="position-relative">
                        <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari Pemilik..." />
                        <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                    </form>
                </div>
                <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                    <div class="action-btn show-btn" style="display: none">
                        <a href="javascript:void(0)" class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                            <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                        </a>
                    </div>
                    <a href="{{ route('tambahkamar') }}" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                        <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Pemilik
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
                    <th>Nama Pemilik</th>
                    <th>Email</th>
                    <th>No.Tlpn</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin') }}/dist/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                                <div class="ms-3">
                                    <div class="user-meta-info">
                                        <h6 class="user-name mb-0" data-name="Emma Adams">Ravanelo</h6>
                                        <span class="user-work fs-3" data-occupation="Web Developer">Pemilik Kost</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-email-addr" data-email="rava@gmail.com">rava@gmail.com</span>
                        </td>
                        <td>
                            <span class="usr-no" data-no="082332724688">082332724688</span>
                        </td>
                        <td>
                            <div class="action-btn">
                                <button class="btn btn-danger" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <button class="btn btn-primary ms-2" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-edit fs-5"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin') }}/dist/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                                <div class="ms-3">
                                    <div class="user-meta-info">
                                        <h6 class="user-name mb-0" data-name="Olivia Allen">Olivia Allen</h6>
                                        <span class="user-work fs-3" data-occupation="Web Designer">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-email-addr" data-email="allen@mail.com">allen@mail.com</span>
                        </td>
                        <td>
                            <span class="usr-no" data-no="082332755688">082332755688</span>
                        </td>
                        <td>
                            <div class="action-btn">
                                <button class="btn btn-danger" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <button class="btn btn-primary ms-2" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-edit fs-5"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin') }}/dist/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                                <div class="ms-3">
                                    <div class="user-meta-info">
                                        <h6 class="user-name mb-0" data-name="Isabella Anderson"> Isabella Anderson </h6>
                                        <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-email-addr" data-email="anderson@mail.com">anderson@mail.com</span>
                        </td>
                        <td>
                            <span class="usr-no" data-no="083547827485">083547827485</span>
                        </td>
                        <td>
                            <div class="action-btn">
                                <button class="btn btn-danger" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <button class="btn btn-primary ms-2" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-edit fs-5"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin') }}/dist/images/profile/user-4.jpg" alt="avatar" class="rounded-circle" width="35" />
                                <div class="ms-3">
                                    <div class="user-meta-info">
                                        <h6 class="user-name mb-0" data-name="Amelia Armstrong"> Amelia Armstrong </h6>
                                        <span class="user-work fs-3" data-occupation="Ethical Hacker">Ethical Hacker</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-email-addr" data-email="armstrong@mail.com">armstrong@mail.com</span>
                        </td>
                        <td>
                            <span class="usr-no" data-no="0832937485729">0832937485729</span>
                        </td>
                        <td>
                            <div class="action-btn">
                                <button class="btn btn-danger" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <button class="btn btn-primary ms-2" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-edit fs-5"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin') }}/dist/images/profile/user-5.jpg" alt="avatar" class="rounded-circle" width="35" />
                                <div class="ms-3">
                                    <div class="user-meta-info">
                                        <h6 class="user-name mb-0" data-name="Emily Atkinson"> Emily Atkinson </h6>
                                        <span class="user-work fs-3" data-occupation="Web developer">Web developer</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-email-addr" data-email="atkinson@mail.com">atkinson@mail.com</span>
                        </td>
                        <td>
                            <span class="usr-no" data-no="083948678822">083948678822</span>
                        </td>
                        <td>
                            <div class="action-btn">
                                <button class="btn btn-danger" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <button class="btn btn-primary ms-2" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-edit fs-5"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <!-- end row -->
                    <!-- start row -->
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin') }}/dist/images/profile/user-1.jpg" alt="avatar" class="rounded-circle" width="35" />
                                <div class="ms-3">
                                    <div class="user-meta-info">
                                        <h6 class="user-name mb-0" data-name="Sofia Bailey">Sofia Bailey</h6>
                                        <span class="user-work fs-3" data-occupation="UX/UI Designer">UX/UI Designer</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-email-addr" data-email="bailey@mail.com">bailey@mail.com</span>
                        </td>
                        <td>
                            <span class="usr-no" data-no="083476885766">083476885766</span>
                        </td>
                        <td>
                            <div class="action-btn">
                                <button class="btn btn-danger" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <button class="btn btn-primary ms-2" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-edit fs-5"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin') }}/dist/images/profile/user-2.jpg" alt="avatar" class="rounded-circle" width="35" />
                                <div class="ms-3">
                                    <div class="user-meta-info">
                                        <h6 class="user-name mb-0" data-name="Victoria Sharma"> Victoria Sharma </h6>
                                        <span class="user-work fs-3" data-occupation="Project Manager">Project Manager</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-email-addr" data-email="sharma@mail.com">sharma@mail.com</span>
                        </td>
                        <td>
                            <span class="usr-no" data-no="082366478893">082366478893</span>
                        </td>
                        <td>
                            <div class="action-btn">
                                <button class="btn btn-danger" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <button class="btn btn-primary ms-2" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-edit fs-5"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <tr class="search-items">
                        <td>
                            <div class="d-flex align-items-center">
                                <img src="{{ asset('admin') }}/dist/images/profile/user-3.jpg" alt="avatar" class="rounded-circle" width="35" />
                                <div class="ms-3">
                                    <div class="user-meta-info">
                                        <h6 class="user-name mb-0" data-name="Penelope Baker"> Penelope Baker </h6>
                                        <span class="user-work fs-3" data-occupation="Web Developer">Web Developer</span>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="usr-email-addr" data-email="baker@mail.com">baker@mail.com</span>
                        </td>
                        <td>
                            <span class="usr-no" data-no="082388399841">082388399841</span>
                        </td>
                        <td>
                            <div class="action-btn">
                                <button class="btn btn-danger" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-trash fs-5"></i>
                                </button>
                                <button class="btn btn-primary ms-2" style="width: 30px; height: 30px; padding: 4px;">
                                    <i class="ti ti-edit fs-5"></i>
                                </button>
                            </div>
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

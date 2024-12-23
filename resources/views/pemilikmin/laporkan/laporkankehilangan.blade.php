@extends('layouts.admin.app')

@section('title', 'Kehilangan')

@section('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

        * {
            font-family: 'Ubuntu';
        }

        .logo {
            position: absolute;
            top: 30%;
            left: 42%;
            animation: zoom 2s infinite alternate;
            /* Menerapkan animasi 'zoom' */
        }

        @keyframes zoom {
            0% {
                transform: scale(1);
                /* Skala awal */
            }

            50% {
                transform: scale(1.2);
                /* Skala tengah */
            }

            100% {
                transform: scale(1);
                /* Skala akhir, kembali ke skala awal */
            }
        }

        .published {
            display: flex;
            /* Set the display property to inline-block */
            align-items: center;
            /* Sembunyikan konten yang keluar dari batas */
            color: #25D366;
            border-radius: 4px;
            font-weight: 500;
        }

        .Unpublish {
            display: flex;
            /* Set the display property to inline-block */
            align-items: center;
            /* Sembunyikan konten yang keluar dari batas */
            color: red;
            border-radius: 4px;
            font-weight: 500;
        }

        .btn.disabled {
            background: rgb(204, 204, 204);
            border: none;
        }

        .usr-status-kost {
            display: inline-block;
            /* Agar properti text-align berfungsi */
        }

        .text-center {
            text-align: center;
        }

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type=number] {
            -moz-appearance: textfield;
        }

        textarea {
            resize: none;
        }
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Kehilangan</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Kehilangan</li>
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
    @if (count($kehilangan) > 0)
        <div class="widget-content searchable-container list">
            <!-- --------------------- start Contact ---------------- -->
            <div class="card card-body" style="margin-bottom: 10px; margin-top: -30px; padding: 10px;">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari Kamar..." />
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
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
                        <th class="text-center">Nama User</th>
                        <th class="text-center">Nomer Kamar</th>
                        <th class="text-center">Keterangan</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($kehilangan as $item)
                            <!-- start row -->
                            <tr class="search-items">
                                <td class="text-center">
                                    <span class="user-name">{{ $item->user->name }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-kategori-kost">{{ $item->nomer_kamar }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-tipe-kost" style="text-wrap: balance;">{{ $item->keterangan }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-tipe-kost text-{{ $item->status == 'Menunggu Respon' ? 'warning' : ($item->status == 'Laporan Diterima' ? 'success' : 'danger') }}">{{ $item->status == 'Menunggu Respon' ? 'Menunggu Respon' : ($item->status == 'Laporan Diterima' ? 'Laporan Diterima' : 'Laporan Ditolak') }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-info mx-1" data-bs-toggle="modal" data-bs-target="#lihat-{{ $item->id }}">Lihat</button>
                                        <div class="modal fade" id="lihat-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content"style="width: 100%; height: 540px;">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Detail Laporkan Kehilangan</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row" style="margin-top: -20px;">
                                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                                <div class="col-12 text-start">
                                                                    <label for="Nama User">Nama User</label>
                                                                </div>
                                                                <div class="col-md-12 mt-1">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="name" id="name" value="{{ $item->user->name }}" disabled>
                                                                            @error('name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-start mt-2">
                                                                    <label for="Nomer Kamar">Nomer Kamar</label>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="nomer_kamar" id="nomer_kamar" value="{{ $item->nomer_kamar }}" disabled>
                                                                            @error('nomer_kamar')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Lokasi Hilang Barang">Lokasi Hilang Barang</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Barang Yang Hilang">Barang Yang Hilang</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="lokasi_hilang" value="{{ $item->lokasi_hilang }}" id="lokasi_hilang" disabled>
                                                                            @error('lokasi_hilang')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="barang_hilang" value="{{ $item->barang_hilang }}" id="barang_hilang" disabled>
                                                                            @error('barang_hilang')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Tanggal Hilang">Tanggal Hilang</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Jam Hilang">Jam Hilang</label>
                                                                </div>
                                                                <div class="col-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="tanggal_hilang" value="{{ Carbon\Carbon::parse($item->tanggal_hilang)->locale('id')->isoFormat('DD MMMM Y') }}" id="tanggal_hilang" disabled>
                                                                            @error('tanggal_hilang')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="jam_hilang" value="{{ $item->jam_hilang }}" id="jam_hilang" disabled>
                                                                            @error('jam_hilang')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Status Laporan">Status Laporan</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Respon Laporan">Respon Laporan</label>
                                                                </div>
                                                                <div class="col-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control text-{{ $item->status == 'Menunggu Respon' ? 'warning' : ($item->status == 'Laporan Diterima' ? 'success' : 'danger') }}" name="status" value="{{ $item->status == 'Menunggu Respon' ? 'Menunggu Respon' : ($item->status == 'Laporan Diterima' ? 'Laporan Diterima' : 'Laporan Ditolak') }}" id="status" disabled>
                                                                            @error('status')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="respon" value="{{ $item->respon ? $item->respon : 'Admin Belum Merespon Laporan Ini!' }}" id="respon" disabled>
                                                                            @error('respon')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-start mt-3">
                                                                    <label for="Keterangan Laporan">Keterangan Laporan</label>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <textarea class="form-control" name="keterangan" id="keterangan" rows="2" disabled>{{ $item->keterangan }}</textarea>
                                                                            @error('keterangan')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="height: 20px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#respon-{{ $item->id }}">Respon</button>
                                        <div class="modal fade" id="respon-{{ $item->id }}" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content"style="width: 100%; height: 350px;">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Respon Laporan Kehilangan</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <form action="{{ route('respon.store') }}" method="POST" enctype="multipart/form-data" x-data="{ respon: '' }">
                                                                @csrf
                                                                <div class="row" style="margin-top: -10px;">
                                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                                    <div class="col-6 text-start">
                                                                        <h3 class="fw-medium" style="font-size: 14px;">Laporan Ini Dari :</h3>
                                                                    </div>
                                                                    <div class="col-6 text-end">
                                                                        <h3 class="fw-medium text-secondary-emphasis" style="font-size: 14px;">{{ $item->user->name }}</h3>
                                                                    </div>
                                                                    <div class="col-12 text-start mt-3">
                                                                        <label for="Respon Untuk Laporan Kehilangan">Respon Untuk Laporan Kehilangan</label>
                                                                    </div>
                                                                    <div class="col-12 mt-3">
                                                                        <textarea class="form-control" name="respon" id="respon" value="{{ old('respon') }}" rows="5" placeholder="Ketik Respon Untuk Laporan Kehilangan..." maxlength="100" x-model="respon"></textarea>
                                                                    </div>
                                                                    <div class="col-12 text-end">
                                                                        <div class="align-items-center mt-3">
                                                                            <div class="ms-auto mt-3 mt-md-0">
                                                                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                                                                <button type="submit" class="btn btn-info font-medium" :class="respon ? null : 'disabled'">
                                                                                    <div class="align-items-center">
                                                                                        Kirim
                                                                                    </div>
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- end row -->
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="col-12 text-center mt-5">
                    <img src="{{ asset('img/planet.png') }}" width="150">
                </div>
                <div class="col-12 text-center mt-2">
                    <h1 class="fw-medium fs-3">Belum Ada Data Riwayat Laporkan Kehilangan</h1>
                </div>
            </div>
        </div>
    @endif
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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        $(document).ready(function() {
            $('.form-check-input').click(function(event) {
                var switch_id = $(this).attr("switch_id");
                var myUrl = "/toggleStatus/" + $(this).attr('data-id').replace(/\W/g, '-');
                window.location.href = myUrl;

            });
        });
        document.getElementById('form-check-input').addEventListener("change", function() {
            console.log('test');

        });

        function confirmDelete(itemId) {
            var deleteForm = document.getElementById('deleteForm');
            deleteForm.action = '/pemilikmin/kamar/destroy/' + itemId;
            $('#deleteConfirmationModal').modal('show');
        }
    </script>
    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: 'Sukses!',
                text: '{{ Session::get('success') }}',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000 // Waktu penampilan Sweet Alert (dalam milidetik)
            });
        </script>
    @endif
@endpush

@extends('layouts.admin.app')

@section('title', 'Pengguna')

@section('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

        * {
            font-family: 'Ubuntu';
        }
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Pengguna</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Pengguna</li>
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
    @if (count($users) > 0)
        <div class="widget-content searchable-container list">
            <!-- --------------------- start Contact ---------------- -->
            <div class="card card-body" style="margin-bottom: 10px; margin-top: -30px; padding: 10px;">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari Pengguna..." />
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <div class="action-btn show-btn" style="display: none">
                            <a href="javascript:void(0)" class="delete-multiple btn-light-danger btn me-2 text-danger d-flex align-items-center font-medium">
                                <i class="ti ti-trash text-danger me-1 fs-5"></i> Delete All Row
                            </a>
                        </div>
                        <a data-bs-toggle="modal" data-bs-target="#modaltambah" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                            <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Pengguna
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width: 100%; height: 540px;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Pengguna</h1>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 text-start">
                                            <label for="Gambar User">Gambar User</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mt-3 mb-3">
                                                <input class="form-control" type="file" name="gambar" id="gambar" value="{{ old('gambar') }}">
                                                @error('gambar')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 text-start">
                                            <label for="Nama Pengguna">Nama Pengguna</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mt-3 mb-3">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Masukkan Nama Pengguna">
                                                    @error('name')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-start">
                                            <label for="Email Pengguna">Email Pengguna</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mt-3 mb-3">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Masukkan Email Pengguna">
                                                    @error('email')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-start">
                                            <label for="Nomor Handphone">Nomer Handphone</label>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="mt-3 mb-3">
                                                <div class="form-group">
                                                    <input type="tel" class="form-control" name="nomorhp" value="{{ old('nomorhp') }}" id="nomorhp" placeholder="Masukkan Nomer Pengguna" min="0">
                                                    @error('nomorhp')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 mt-1">
                                            <div class="d-md-flex align-items-center mt-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="button" class="btn btn-secondary" style="background-color: rgb(161, 161, 161); color: white; border: none;" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-info font-medium">
                                                        <div class="align-items-center">
                                                            Tambahkan
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
        <div class="dark-transparent sidebartoggler"></div>
        <div class="dark-transparent sidebartoggler"></div>
        <div class="card card-body">
            <div class="table-responsive">
                <table class="table search-table align-middle text-nowrap">
                    <thead class="header-item">
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>No.Tlpn</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                            <tr class="search-items">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset($item->gambar ? 'uploadkamar/' . $item->gambar : '/img/avatar.png') }}" alt="avatar" class="rounded-circle" width="35" />
                                        <div class="ms-3">
                                            <div class="user-meta-info">
                                                <h6 class="user-name mb-0" data-name="Emma Adams">{{ $item->name }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <span class="usr-email">{{ $item->email }}</span>
                                </td>
                                <td>
                                    <span class="usr-nomer">{{ $item->nomorhp }}</span>
                                </td>
                                <td>
                                    <div class="action-btn">
                                        <a href="/pemilikmin/pengguna/destroy/{{ $item->id }}" class="btn btn-danger" style="width: 30px; height: 30px; padding: 4.5px;">
                                            <i class="ti ti-trash fs-5"></i>
                                        </a>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modaledit-{{ $item->id }}" class="btn btn-warning" style="width: 30px; height: 30px; padding: 4.5px;">
                                            <i class="ti ti-edit fs-5"></i>
                                        </button>
                                        <div class="modal fade" id="modaledit-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Pengguna</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <img src="{{ asset('uploadkamar/' . $item->gambar) }}" class="rounded-1" width="35">
                                                                </div>
                                                                <form action="/pemilikmin/editpengguna" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <input class="form-control" type="file" name="gambar" value="{{ $item->gambar }}" id="gambar">
                                                                                @error('gambar')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" name="nama_pengguna" value="{{ $item->nama_pengguna }}" id="nama_pengguna" placeholder="Masukkan Nama Pengguna">
                                                                                    @error('nama_pengguna')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="form-group">
                                                                                    <input type="email" class="form-control" name="email_pengguna" value="{{ $item->email_pengguna }}" id="email_pengguna" placeholder="Masukkan Email Pengguna">
                                                                                    @error('email_pengguna')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="form-group">
                                                                                    <input type="number" class="form-control" name="nomer_pengguna" value="{{ $item->nomer_pengguna }}" id="nomer_pengguna" placeholder="Masukkan Nomer Pengguna">
                                                                                    @error('nomer_pengguna')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="d-md-flex align-items-center mt-3">
                                                                                <div class="ms-auto mt-3 mt-md-0">
                                                                                    <button type="submit" class="btn btn-info font-medium rounded-pill px-4">
                                                                                        <div class="d-flex align-items-center">
                                                                                            Edit
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
                                        {{-- <form action="/pemilikmin/pengguna/destroy" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                    </form> --}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="col-12 text-center mt-5">
                    <img src="{{ asset('img/planet.png') }}" width="150">
                </div>
                <div class="col-12 text-center mt-2">
                    <h1 class="fw-medium fs-3">Belum Ada Data</h1>
                </div>
                <div class="col-12 text-center justify-content-center mt-3 mt-md-0">
                    <a data-bs-toggle="modal" data-bs-target="#modaltambah" id="btn-add-contact" class="btn btn-info align-items-center">
                        <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Pengguna
                    </a>
                </div>
                <div class="modal fade" id="modaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="width: 100%; height: 540px;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Pengguna</h1>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <form action="{{ route('pengguna.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 text-start">
                                                    <label for="Gambar User">Gambar User</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mt-3 mb-3">
                                                        <input class="form-control" type="file" name="gambar" id="gambar" value="{{ old('gambar') }}">
                                                        @error('gambar')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 text-start">
                                                    <label for="Nama Pengguna">Nama Pengguna</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mt-3 mb-3">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" id="name" placeholder="Masukkan Nama Pengguna">
                                                            @error('name')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-start">
                                                    <label for="Email Pengguna">Email Pengguna</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mt-3 mb-3">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" id="email" placeholder="Masukkan Email Pengguna">
                                                            @error('email')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-start">
                                                    <label for="Nomor Handphone">Nomer Handphone</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="mt-3 mb-3">
                                                        <div class="form-group">
                                                            <input type="tel" class="form-control" name="nomorhp" value="{{ old('nomorhp') }}" id="nomorhp" placeholder="Masukkan Nomer Pengguna" min="0">
                                                            @error('nomorhp')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mt-1">
                                                    <div class="d-md-flex align-items-center mt-3">
                                                        <div class="ms-auto mt-3 mt-md-0">
                                                            <button type="button" class="btn btn-secondary" style="background-color: rgb(161, 161, 161); color: white; border: none;" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-info font-medium">
                                                                <div class="align-items-center">
                                                                    Tambahkan
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
    @endif
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

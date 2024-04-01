@extends('layouts.admin.app')

@section('title', 'Banner')

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
            align-items: center;
            /* Sembunyikan konten yang keluar dari batas */
            color: #25D366;
            border-radius: 4px;
            font-weight: 500;
        }

        .Unpublish {
            display: flex;
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

        .usr-status-banner {
            display: inline-block !important;
            /* Agar properti text-align berfungsi */
        }

        .text-center {
            text-align: center !important;
        }
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Banner</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Banner</li>
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
    @if (count($banner) > 0)
        <div class="widget-content searchable-container list">
            <!-- --------------------- start Contact ---------------- -->
            <div class="card card-body" style="margin-bottom: 10px; margin-top: -30px; padding: 10px;">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari Banner..." />
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a data-bs-toggle="modal" data-bs-target="#modaltambah" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                            <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Banner
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" x-data="{ gambar: '', kategori: '', lokasi: '', status: '' }">
                <div class="modal-content" style="width: 100%; height: 540px;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Banner</h1>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 text-start">
                                            <label for="Gamabar Banner">Gambar Banner <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-12 mb-4" style="margin-top: -6px;">
                                            <div class="mt-3">
                                                <input class="form-control" type="file" name="gambar_banner" id="gambar_banner" value="{{ old('gambar_banner') }}" x-model="gambar" required>
                                                @error('gambar_banner')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 text-start">
                                            <label for="Kategori Banner">Kategori Banner <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-12 mb-4" style="margin-top: -6px;">
                                            <div class="mt-3">
                                                <div class="input-group">
                                                    <select class="form-select" id="kategori_banner" name="kategori_banner" value="{{ old('kategori_banner') }}" x-model="kategori" required>
                                                        <option selected>Pilih Kategori Banner...</option>
                                                        <option value="Slider">Slider</option>
                                                        <option value="Banner">Banner</option>
                                                        @error('kategori_banner')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-start">
                                            <label for="Lokasi Banner">Lokasi Banner <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-12 mb-4" style="margin-top: -6px;">
                                            <div class="mt-3">
                                                <div class="input-group">
                                                    <select class="form-select" id="lokasi_banner" name="lokasi_banner" value="{{ old('lokasi_banner') }}" x-model="lokasi" required>
                                                        <option selected>Pilih Kategori Banner...</option>
                                                        <option value="Home Utama">Home Utama</option>
                                                        <option value="Home Promo">Home Promo</option>
                                                        <option value="Home Ketiga">Home Ketiga</option>
                                                        <option value="Home Terakhir">Home Terakhir</option>
                                                        <option value="Area Kost Utama">Area Kost Utama</option>
                                                        <option value="Area Kost Terakhir">Area Kost Terakhir</option>
                                                        @error('lokasi_banner')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-start">
                                            <label for="Status Banner">Status Banner <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-md-12 mb-4" style="margin-top: -6px;">
                                            <div class="mt-3">
                                                <div class="input-group">
                                                    <select class="form-select" id="status_banner" name="status_banner" value="{{ old('status_banner') }}" x-model="status" required>
                                                        <option selected>Pilih Status Banner...</option>
                                                        <option value="Publish">Publish</option>
                                                        <option value="Unpublish">Unpublish</option>
                                                        @error('status_banner')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-end">
                                            <div class="align-items-center mt-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-info font-medium" :class="gambar && kategori && lokasi && status ? null : 'disabled'">
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
                        <th>Gambar Banner</th>
                        <th class="text-center">Kategori Banner</th>
                        <th class="text-center">Lokasi Banner</th>
                        <th class="text-center">Status Banner</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($banner as $item)
                            <!-- start row -->
                            <tr class="search-items">
                                <td class="text-center">
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('uploadkamar/' . $item->gambar_banner) }}" class="rounded-1" style="width: 200px; height: 100px;" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="usr-nama-banner">{{ $item->kategori_banner }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-lokasi-banner">{{ $item->lokasi_banner }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-status-banner @if ($item->status_banner == 'Publish') published @else Unpublish @endif">{{ $item->status_banner }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="action-btn d-flex justify-content-center align-items-center gap-1">
                                        <div class="toggle">
                                            <form id="edit-form" name="edit-form" method="post">
                                                <div class="form-check form-switch" style="padding: 0px; min-height: 0em; margin-bottom: 0em;">
                                                    <input class="form-check-input" type="checkbox" data-id={{ $item->id }} {{ $item->status_banner == 'Publish' ? 'checked' : null }} />
                                                </div>
                                            </form>
                                        </div>
                                        <a href="#" class="btn btn-danger" style="width: 30px; height: 30px; padding: 4.5px;" onclick="confirmDelete('{{ $item->id }}')">
                                            <i class="ti ti-trash fs-5"></i>
                                        </a>
                                        <!-- Modal -->
                                        <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="margin-top: 12rem;">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteConfirmationModalLabel">Konfirmasi Hapus</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3 class="fw-medium fs-3">Apakah Anda Yakin Ingin Menghapus Banner Ini?</h3>
                                                    </div>
                                                    <div class="modal-footer d-flex align-items-center justify-content-center text-center">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                                        <form id="deleteForm" action="" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modaledit-{{ $item->id }}" class="btn btn-warning" style="width: 30px; height: 30px; padding: 4.5px;">
                                            <i class="ti ti-edit fs-5"></i>
                                        </button>
                                        <div class="modal fade" id="modaledit-{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 100%; height: 540px;">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Banner</h1>
                                                    </div>
                                                    <div class="modal-body" style="margin-top: -20px;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <form action="/pemilikmin/editbanner" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                                    <div class="row">
                                                                        <div class="col-12 text-start">
                                                                            <label for="Gambar Banner">Gambar Banner</label>
                                                                        </div>
                                                                        <div class="col-12 text-center">
                                                                            <div class="col-md-12 mt-1">
                                                                                <img src="{{ asset('uploadkamar/' . $item->gambar_banner) }}" class="rounded-1" style="width: 100%; height: 150px;">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -10px;">
                                                                            <div class="mt-3">
                                                                                <input class="form-control" type="file" name="gambar_banner" value="{{ $item->gambar_banner }}" id="gambar_banner">
                                                                                @error('gambar_banner')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-start mt-1">
                                                                            <label for="Kategori Banner">Kategori Banner</label>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -14px;">
                                                                            <div class="mt-3">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="kategori_banner" name="kategori_banner">
                                                                                        <option value="Slider" {{ $item->kategori_banner == 'Slider' ? 'selected' : '' }}>Slider</option>
                                                                                        <option value="Banner" {{ $item->kategori_banner == 'Banner' ? 'selected' : '' }}>Banner</option>
                                                                                        @error('kategori_banner')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-start mt-1">
                                                                            <label for="Lokasi Banner">Lokasi Banner</label>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -14px;">
                                                                            <div class="mt-3">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="lokasi_banner" name="lokasi_banner">
                                                                                        <option value="Home Utama" {{ $item->lokasi_banner == 'Home Utama' ? 'selected' : '' }}>Home Utama</option>
                                                                                        <option value="Home Promo" {{ $item->lokasi_banner == 'Home Promo' ? 'selected' : '' }}>Home Promo</option>
                                                                                        <option value="Home Ketiga" {{ $item->lokasi_banner == 'Home Ketiga' ? 'selected' : '' }}>Home Ketiga</option>
                                                                                        <option value="Home Terakhir" {{ $item->lokasi_banner == 'Home Terakhir' ? 'selected' : '' }}>Home Terakhir</option>
                                                                                        <option value="Area Kost Utama" {{ $item->lokasi_banner == 'Area Kost Utama' ? 'selected' : '' }}>Area Kost Utama</option>
                                                                                        <option value="Area Kost Terakhir" {{ $item->lokasi_banner == 'Area Kost Terakhir' ? 'selected' : '' }}>Area Kost Terakhir</option>
                                                                                        @error('lokasi_banner')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-start mt-1">
                                                                            <label for="Status Banner">Status Banner</label>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -14px;">
                                                                            <div class="mt-3">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="status_banner" name="status_banner">
                                                                                        <option value="Publish" {{ $item->status_banner == 'Publish' ? 'selected' : '' }}>Publish</option>
                                                                                        <option value="Unpublish" {{ $item->status_banner == 'Unpublish' ? 'selected' : '' }}>Unpublish</option>
                                                                                        @error('status_banner')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-end">
                                                                            <div class="align-items-center mt-3">
                                                                                <div class="ms-auto mt-3 mt-md-0">
                                                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                                                                    <button type="submit" class="btn btn-info font-medium px-4">
                                                                                        <div class="d-flex align-items-center">
                                                                                            Simpan
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
                                        {{-- <form action="/pemilikmin/banner/destroy" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                        </form> --}}
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
                    <h1 class="fw-medium fs-3">Belum Ada Data Banner</h1>
                </div>
                <div class="col-12 text-center justify-content-center mt-3 mt-md-0">
                    <a data-bs-toggle="modal" data-bs-target="#modaltambah" id="btn-add-contact" class="btn btn-info align-items-center">
                        <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Banner
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" x-data="{ gambar: '', kategori: '', lokasi: '', status: '' }">
                        <div class="modal-content" style="width: 100%; height: 540px;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Banner</h1>
                            </div>
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <form action="{{ route('banner.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 text-start">
                                                    <label for="Gamabar Banner">Gambar Banner <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-12 mb-4" style="margin-top: -6px;">
                                                    <div class="mt-3">
                                                        <input class="form-control" type="file" name="gambar_banner" id="gambar_banner" value="{{ old('gambar_banner') }}" x-model="gambar" required>
                                                        @error('gambar_banner')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-12 text-start">
                                                    <label for="Kategori Banner">Kategori Banner <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-12 mb-4" style="margin-top: -6px;">
                                                    <div class="mt-3">
                                                        <div class="input-group">
                                                            <select class="form-select" id="kategori_banner" name="kategori_banner" value="{{ old('kategori_banner') }}" x-model="kategori" required>
                                                                <option selected>Pilih Kategori Banner...</option>
                                                                <option value="Slider">Slider</option>
                                                                <option value="Banner">Banner</option>
                                                                @error('kategori_banner')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-start">
                                                    <label for="Lokasi Banner">Lokasi Banner <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-12 mb-4" style="margin-top: -6px;">
                                                    <div class="mt-3">
                                                        <div class="input-group">
                                                            <select class="form-select" id="lokasi_banner" name="lokasi_banner" value="{{ old('lokasi_banner') }}" x-model="lokasi" required>
                                                                <option selected>Pilih Kategori Banner...</option>
                                                                <option value="Home Utama">Home Utama</option>
                                                                <option value="Home Promo">Home Promo</option>
                                                                <option value="Home Ketiga">Home Ketiga</option>
                                                                <option value="Home Terakhir">Home Terakhir</option>
                                                                <option value="Area Kost Utama">Area Kost Utama</option>
                                                                <option value="Area Kost Terakhir">Area Kost Terakhir</option>
                                                                @error('lokasi_banner')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-start">
                                                    <label for="Status Banner">Status Banner <span class="text-danger">*</span></label>
                                                </div>
                                                <div class="col-md-12 mb-4" style="margin-top: -6px;">
                                                    <div class="mt-3">
                                                        <div class="input-group">
                                                            <select class="form-select" id="status_banner" name="status_banner" value="{{ old('status_banner') }}" x-model="status" required>
                                                                <option selected>Pilih Status Banner...</option>
                                                                <option value="Publish">Publish</option>
                                                                <option value="Unpublish">Unpublish</option>
                                                                @error('status_banner')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <div class="align-items-center mt-3">
                                                        <div class="ms-auto mt-3 mt-md-0">
                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-info font-medium" :class="gambar && kategori && lokasi && status ? null : 'disabled'">
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
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $('.form-check-input').click(function(event) {
                var switch_id = $(this).attr("switch_id");
                var myUrl = "/toggleStatusBanner/" + $(this).attr('data-id').replace(/\W/g, '-');
                window.location.href = myUrl;

            });
        });
        document.getElementById('form-check-input').addEventListener("change", function() {
            console.log('test');

        });

        function confirmDelete(itemId) {
            var deleteForm = document.getElementById('deleteForm');
            deleteForm.action = '/pemilikmin/banner/destroy/' + itemId;
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

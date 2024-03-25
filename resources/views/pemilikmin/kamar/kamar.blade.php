@extends('layouts.admin.app')

@section('title', 'Kamar')

@section('styles')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');

        * {
            font-family: 'Ubuntu';
        }

        .published {
            display: flex;
            /* Set the display property to inline-block */
            align-items: center;
            /* Sembunyikan konten yang keluar dari batas */
            color: rgb(0, 255, 0);
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
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Kamar</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Kamar</li>
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
    @if (count($kamarkost) > 0)
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
                    <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a data-bs-toggle="modal" data-bs-target="#tambahkamar" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                            <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Kamar
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="tambahkamar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" x-data="{ gambar: '', kategori: '', harga: '', lokasi: '', ukuran: '', tipe: '', status: '', fasilitas: '' }">
                <div class="modal-content" style="width: 100%; height: 540px;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Kamar</h1>
                    </div>
                    <div class="modal-body" style="margin-top: -30px;">
                        <div class="container">
                            <div class="row">
                                <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Gambar">Gambar Kost</label>
                                            <div class="mt-1">
                                                <input class="form-control" type="file" name="gambar_kost" id="gambar_kost" value="{{ old('gambar_kost') }}" x-model="gambar">
                                                @error('gambar_kost')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Kategori">Kategori Kost</label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    {{-- <label class="input" for="inputGroupSelect01"></label> --}}
                                                    <select class="form-select" id="kategori_kost" name="kategori_kost" value="{{ old('kategori_kost') }}" x-model="kategori">
                                                        <option selected>Pilih Kategori Kost...</option>
                                                        <option value="Kost Putra">Kost Putra</option>
                                                        <option value="Kost Putri">Kost Putri</option>
                                                        <option value="Kost Karyawan">Kost Karyawan</option>
                                                        <option value="Kost Pegawai">Kost Pegawai</option>
                                                        <option value="Kost Mahasiswa">Kost Mahasiswa</option>
                                                        @error('kategori_kost')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Harga">Harga Kost</label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="harga_kost" id="harga_kost" placeholder="Masukkan Harga Kost" value="{{ old('harga_kost') }}" x-model="harga">
                                                    @error('harga_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Lokasi">Lokasi Kost</label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="lokasi_kost" id="lokasi_kost" placeholder="Masukkan Lokasi Kost" value="{{ old('lokasi_kost') }}" x-model="lokasi">
                                                    @error('lokasi_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Ukuran">Ukuran Kost</label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="ukuran_kost" id="ukuran_kost" placeholder="Masukkan Ukuran Kost" value="{{ old('ukuran_kost') }}" x-model="ukuran">
                                                    @error('ukuran_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Tipe">Tipe Kost</label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    {{-- <label class="input" for="inputGroupSelect01"></label> --}}
                                                    <select class="form-select" id="tipe_kost" name="tipe_kost" value="{{ old('tipe_kost') }}" x-model="tipe">
                                                        <option selected>Pilih Tipe Kost...</option>
                                                        <option value="Bulanan">Bulanan</option>
                                                        <option value="Harian">Harian</option>
                                                        @error('tipe_kost')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Status">Status Kost</label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    {{-- <label class="input-group-text" for="inputGroupSelect01">Status Kost</label> --}}
                                                    <select class="form-select" id="status_kost" name="status_kost" value="{{ old('status_kost') }}" x-model="status">
                                                        <option selected>Pilih Status Kost...</option>
                                                        <option value="Publish">Publish</option>
                                                        <option value="Unpublish">Unpublish</option>
                                                        @error('status_kost')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Fasilitas">Fasilitas Kost</label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="fasilitas_kost" id="fasilitas_kost" placeholder="Masukkan Fasilitas Kost" value="{{ old('fasilitas_kost') }}" x-model="fasilitas">
                                                    @error('fasilitas_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-end">
                                            <div class="align-items-center mt-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="button" class="btn btn-secondary" style="background-color: rgb(161, 161, 161); color: white; border: none;" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-info font-medium" disabled>
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
                        <th>Gambar Kost</th>
                        <th>Kategori Kost</th>
                        <th>Harga Kost</th>
                        <th>Lokasi Kost</th>
                        <th>Ukuran Kost</th>
                        <th>Tipe Kost</th>
                        <th>Status Kost</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($kamarkost as $item)
                            <!-- start row -->
                            <tr class="search-items">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" class="rounded-1" style="width: 160px; height: 100px;" />
                                    </div>
                                </td>
                                <td>
                                    <span class="usr-nama-kost">{{ $item->kategori_kost }}</span>
                                </td>
                                <td>
                                    <span class="usr-harga-kost">Rp. {{ $item->harga_kost }}</span>
                                </td>
                                <td>
                                    <span class="usr-lokasi-kost">{{ $item->lokasi_kost }}</span>
                                </td>
                                <td>
                                    <span class="usr-ukuran-kost">{{ $item->ukuran_kost }}</span>
                                </td>
                                <td>
                                    <span class="usr-tipe-kost">{{ $item->tipe_kost }}</span>
                                </td>
                                <td>
                                    <span class="usr-status-kost @if ($item->status_kost == 'Publish') published @else Unpublish @endif">{{ $item->status_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="action-btn">
                                        <a href="/pemilikmin/kamar/destroy/{{ $item->id }}" class="btn btn-danger" style="width: 30px; height: 30px; padding: 4.5px;">
                                            <i class="ti ti-trash fs-5"></i>
                                        </a>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#modaledit-{{ $item->id }}" class="btn btn-warning" style="width: 30px; height: 30px; padding: 4.5px;">
                                            <i class="ti ti-edit fs-5"></i>
                                        </button>
                                        <button class="btn btn-info" style="width: 30px; height: 30px; padding: 4.5px;" data-bs-toggle="modal" data-bs-target="#kost-{{ $item->id }}">
                                            <i class="ti ti-eye fs-5"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="kost-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content"style="width: 100%; height: 540px;">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Detail Kamar</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row" style="margin-top: -20px;">
                                                                <div class="col-12 text-start">
                                                                    <label for="Gambar Kost">Gambar Kost</label>
                                                                </div>
                                                                <div class="col-md-12 mt-1">
                                                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" class="rounded-1" style="width: 100%; height: 200px;">
                                                                </div>
                                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                                <div class="col-6 text-start mt-2">
                                                                    <label for="Kategori Kost">Kategori Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-2">
                                                                    <label for="Harga Kost">Harga Kost</label>
                                                                </div>
                                                                <div class="col-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="kategori_kost" value="{{ $item->kategori_kost }}" id="kategori_kost" disabled>
                                                                            @error('kategori_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="harga_kost" value="{{ $item->harga_kost }}" id="harga_kost" disabled>
                                                                            @error('harga_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-2">
                                                                    <label for="Lokasi Kost">Lokasi Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-2">
                                                                    <label for="Ukuran Kost">Ukuran Kost</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="lokasi_kost" value="{{ $item->lokasi_kost }}" id="lokasi_kost" disabled>
                                                                            @error('lokasi_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="ukuran_kost" value="{{ $item->ukuran_kost }}" id="ukuran_kost" disabled>
                                                                            @error('ukuran_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-2">
                                                                    <label for="Tipe Kost">Tipe Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-2">
                                                                    <label for="Status Kost">Status Kost</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="tipe_kost" value="{{ $item->tipe_kost }}" id="tipe_kost" disabled>
                                                                            @error('tipe_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="status_kost" value="{{ $item->status_kost }}" id="status_kost" disabled>
                                                                            @error('status_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-start mt-2">
                                                                    <label for="Fasilitas Kost">Fasilitas Kost</label>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="fasilitas_kost" id="fasilitas_kost" value="{{ $item->fasilitas_kost }}" disabled>
                                                                            @error('fasilitas_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="modaledit-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 100%; height: 540px;">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Edit Kamar</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row" style="margin-top: -20px;">
                                                                <div class="col-md-12">
                                                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" class="rounded-1" style="width: 100%; height: 200px;">
                                                                </div>
                                                                <form action="/pemilikmin/editkamar" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <input class="form-control" type="file" name="gambar_kost" value="{{ $item->gambar_kost }}" id="gambar_kost">
                                                                                @error('gambar_kost')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="kategori_kost" name="kategori_kost">
                                                                                        <option value="Kost Putra" {{ $item->kategori_kost == 'Kost Putra' ? 'selected' : '' }}>Kost Putra</option>
                                                                                        <option value="Kost Putri" {{ $item->kategori_kost == 'Kost Putri' ? 'selected' : '' }}>Kost Putri</option>
                                                                                        <option value="Kost Karyawan" {{ $item->kategori_kost == 'Kost Karyawan' ? 'selected' : '' }}>Kost Karyawan</option>
                                                                                        <option value="Kost Pegawai" {{ $item->kategori_kost == 'Kost Pegawai' ? 'selected' : '' }}>Kost Pegawai</option>
                                                                                        <option value="Kost Mahasiswa" {{ $item->kategori_kost == 'Kost Mahasiswa' ? 'selected' : '' }}>Kost Mahasiswa</option>
                                                                                        @error('kategori_kost')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" name="harga_kost" value="{{ $item->harga_kost }}" id="harga_kost" placeholder="Masukkan Harga Kost">
                                                                                    @error('harga_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" name="lokasi_kost" value="{{ $item->lokasi_kost }}" id="lokasi_kost" placeholder="Masukkan Lokasi Kost">
                                                                                    @error('lokasi_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" name="ukuran_kost" value="{{ $item->ukuran_kost }}" id="ukuran_kost" placeholder="Masukkan Ukuran Kost">
                                                                                    @error('ukuran_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="tipe_kost" name="tipe_kost">
                                                                                        <option value="Bulanan" {{ $item->tipe_kost == 'Bulanan' ? 'selected' : '' }}>Bulanan</option>
                                                                                        <option value="Harian" {{ $item->tipe_kost == 'Harian' ? 'selected' : '' }}>Harian</option>
                                                                                        @error('tipe_kost')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="status_kost" name="status_kost">
                                                                                        <option value="Publish" {{ $item->status_kost == 'Publish' ? 'selected' : '' }}>Publish</option>
                                                                                        <option value="Unpublish" {{ $item->status_kost == 'Unpublish' ? 'selected' : '' }}>Unpublish</option>
                                                                                        @error('status_kost')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-3">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" name="fasilitas_kost" id="fasilitas_kost" value="{{ $item->fasilitas_kost }}">
                                                                                    @error('fasilitas_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-end">
                                                                            <div class="align-items-center mt-3">
                                                                                <div class="ms-auto mt-3 mt-md-0">
                                                                                    <button type="button" class="btn btn-secondary" style="background-color: rgb(255, 0, 0); color: white; border: none;" data-bs-dismiss="modal">Batal</button>
                                                                                    <button type="submit" class="btn btn-info font-medium px-4">
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
                                        {{-- <form action="/pemilikmin/kamar/destroy">
                                            @csrf
                                            @method('delete')
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
                    <h1 class="fw-medium fs-3">Belum Ada Data Kamar</h1>
                </div>
                <div class="col-12 text-center justify-content-center mt-3 mt-md-0">
                    <a data-bs-toggle="modal" data-bs-target="#tambahkamar" id="btn-add-contact" class="btn btn-info align-items-center">
                        <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Kamar
                    </a>
                </div>
                <div class="modal fade" id="tambahkamar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" x-data="{ gambar: '', kategori: '', harga: '', lokasi: '', ukuran: '', tipe: '', status: '', fasilitas: '' }">
                        <div class="modal-content" style="width: 100%; height: 540px;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Kamar</h1>
                            </div>
                            <div class="modal-body" style="margin-top: -30px;">
                                <div class="container">
                                    <div class="row">
                                        <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Gambar">Gambar Kost</label>
                                                    <div class="mt-1">
                                                        <input class="form-control" type="file" name="gambar_kost" id="gambar_kost" value="{{ old('gambar_kost') }}" x-model="gambar">
                                                        @error('gambar_kost')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Kategori">Kategori Kost</label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            {{-- <label class="input" for="inputGroupSelect01"></label> --}}
                                                            <select class="form-select" id="kategori_kost" name="kategori_kost" value="{{ old('kategori_kost') }}" x-model="kategori">
                                                                <option selected>Pilih Kategori Kost...</option>
                                                                <option value="Kost Putra">Kost Putra</option>
                                                                <option value="Kost Putri">Kost Putri</option>
                                                                <option value="Kost Karyawan">Kost Karyawan</option>
                                                                <option value="Kost Pegawai">Kost Pegawai</option>
                                                                <option value="Kost Mahasiswa">Kost Mahasiswa</option>
                                                                @error('kategori_kost')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Harga">Harga Kost</label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="harga_kost" id="harga_kost" placeholder="Masukkan Harga Kost" value="{{ old('harga_kost') }}" x-model="harga">
                                                            @error('harga_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Lokasi">Lokasi Kost</label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="lokasi_kost" id="lokasi_kost" placeholder="Masukkan Lokasi Kost" value="{{ old('lokasi_kost') }}" x-model="lokasi">
                                                            @error('lokasi_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Ukuran">Ukuran Kost</label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="ukuran_kost" id="ukuran_kost" placeholder="Masukkan Ukuran Kost" value="{{ old('ukuran_kost') }}" x-model="ukuran">
                                                            @error('ukuran_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Tipe">Tipe Kost</label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            {{-- <label class="input" for="inputGroupSelect01"></label> --}}
                                                            <select class="form-select" id="tipe_kost" name="tipe_kost" value="{{ old('tipe_kost') }}" x-model="tipe">
                                                                <option selected>Pilih Tipe Kost...</option>
                                                                <option value="Bulanan">Bulanan</option>
                                                                <option value="Harian">Harian</option>
                                                                @error('tipe_kost')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Status">Status Kost</label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            {{-- <label class="input-group-text" for="inputGroupSelect01">Status Kost</label> --}}
                                                            <select class="form-select" id="status_kost" name="status_kost" value="{{ old('status_kost') }}" x-model="status">
                                                                <option selected>Pilih Status Kost...</option>
                                                                <option value="Publish">Publish</option>
                                                                <option value="Unpublish">Unpublish</option>
                                                                @error('status_kost')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Fasilitas">Fasilitas Kost</label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="fasilitas_kost" id="fasilitas_kost" placeholder="Masukkan Fasilitas Kost" value="{{ old('fasilitas_kost') }}" x-model="fasilitas">
                                                            @error('fasilitas_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end">
                                                    <div class="align-items-center mt-3">
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

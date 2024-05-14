@extends('layouts.admin.app')

@section('title', 'Kamar')

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

        .btn:disabled {
            background: rgb(149, 148, 148);
            border: none;
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
            <div class="modal-dialog modal-dialog-scrollable" role="document" x-data="{ gambar: '', kategori: '', harga: '', alamat: '', ukuran: '', tipe: '', status: '', fasilitas: '', lokasi: '', air: '', listik: '', alamatlengkap: '', deskripsi: '', nomer: '', fasKamar: [], fasUmum: [], fasKamarmandi: [], fasParkir: [] }">
                <div class="modal-content" style="width: 100%; height: 540px;">
                    <div class="modal-header" style=" height: 70px;">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel" style="margin-top: -24px;">Tambah Kamar</h1>
                    </div>
                    <div class="modal-body" style="margin-top: -20px; padding-bottom: 0; padding-top: 0;">
                        <div class="container">
                            <div class="row">
                                <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12">
                                            <label class="mt-2" for="Fasilitas">Fasilitas Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="fasilitas_kost" maxlength="65" id="fasilitas_kost" placeholder="Masukkan Fasilitas Kost" value="{{ old('fasilitas_kost') }}" x-model="fasilitas" required>
                                                    @error('fasilitas_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Ukuran">Ukuran Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" maxlength="11" name="ukuran_kost" id="ukuran_kost" placeholder="Masukkan Ukuran Kost" value="{{ old('ukuran_kost') }}" x-model="ukuran" required>
                                                    @error('ukuran_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Tipe">Tipe Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    <select class="form-select" id="tipe_kost" name="tipe_kost" value="{{ old('tipe_kost') }}" x-model="tipe" required>
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
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Gambar">Gambar Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <input class="form-control" type="file" name="gambar_kost" id="gambar_kost" value="{{ old('gambar_kost') }}" x-model="gambar" required>
                                                @error('gambar_kost')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Kategori">Kategori Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    {{-- <label class="input" for="inputGroupSelect01"></label> --}}
                                                    <select class="form-select" id="kategori_id" name="kategori_id" value="{{ old('kategori_id') }}" x-model="kategori" required>
                                                        <option selected>Pilih Kategori Kost...</option>
                                                        {{-- <option value="Kost Putra">Kost Putra</option>
                                                        <option value="Kost Putri">Kost Putri</option> --}}
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->kategori }}</option>
                                                        @endforeach
                                                        @error('kategori_id')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Harga">Harga Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" maxlength="10" name="harga_kost" id="harga_kost" placeholder="Masukkan Harga Kost" value="{{ old('harga_kost') }}" x-model="harga" required>
                                                    @error('harga_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Alamat">Alamat Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" maxlength="30" name="alamat_kost" id="alamat_kost" placeholder="Masukkan Alamat Kost" value="{{ old('alamat_kost') }}" x-model="alamat" required>
                                                    @error('alamat_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Status">Status Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    <select class="form-select" id="status_kost" name="status_kost" value="{{ old('status_kost') }}" x-model="status" required>
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
                                            <label class="mt-2" for="Lokasi">Lokasi Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    <select class="form-select" id="lokasi_kost" name="lokasi_kost" value="{{ old('lokasi_kost') }}" x-model="lokasi" required>
                                                        <option selected>Pilih Lokasi Kost...</option>
                                                        <option value="Didekat Kamu">Didekat Kamu</option>
                                                        <option value="Area Surabaya Timur">Area Surabaya Timur</option>
                                                        <option value="Kamar Kost Putra">Kamar Kost Putra</option>
                                                        <option value="Kamar Kost Populer">Kamar Kost Populer</option>
                                                        <option value="Kamar Kost Putri">Kamar Kost Putri</option>
                                                        <option value="Area Surabaya Barat">Area Surabaya Barat</option>
                                                        <option value="Rekomendasi Kamar Kost">Rekomendasi Kamar Kost</option>
                                                        <option value="Promo Kamar Kost">Promo Kamar Kost</option>
                                                        <option value="Kamar Kost Terpopuler">Kamar Kost Terpopuler</option>
                                                        <option value="Kamar Kost Terbaru">Kamar Kost Terbaru</option>
                                                        <option value="Area Jemursari">Area Jemursari</option>
                                                        <option value="Area Semolowaru">Area Semolowaru</option>
                                                        <option value="Area Benowo">Area Benowo</option>
                                                        <option value="Area Sukolilo">Area Sukolilo</option>
                                                        <option value="Area Rungkut">Area Rungkut</option>
                                                        @error('lokasi_kost')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Air">Air Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    <select class="form-select" id="air_kost" name="air_kost" value="{{ old('air_kost') }}" x-model="air" required>
                                                        <option selected>Pilih Air Kost...</option>
                                                        <option value="Pdam">Pdam</option>
                                                        <option value="Sumur">Sumur</option>
                                                        @error('air_kost')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Listrik">Listrik Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="input-group">
                                                    <select class="form-select" id="listrik_kost" name="listrik_kost" value="{{ old('listrik_kost') }}" x-model="listrik" required>
                                                        <option selected>Pilih listrik Kost...</option>
                                                        <option value="Token">Token</option>
                                                        <option value="Pln">Pln</option>
                                                        @error('air_kost')
                                                            {{ $message }}
                                                        @enderror
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Alamat Lengkap">Alamat Lengkap Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" maxlength="30" name="alamat_lengkap_kost" id="alamat_lengkap_kost" placeholder="Masukkan Alamat Lengkap Kost" value="{{ old('alamat_lengkap_kost') }}" x-model="alamatlengkap" required>
                                                    @error('alamat_lengkap_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="mt-2" for="Nomer Kamar">Nomer Kamar Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="number" class="form-control" min="0" oninput="limitLength(this, 2)" name="nomer_kost" id="nomer_kost" placeholder="Masukkan Nomer Kamar Kost" value="{{ old('nomer_kost') }}" x-model="nomer" required>
                                                    @error('nomer_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="mt-2" for="Deskripsi">Deskripsi Kost <span class="text-danger">*</span></label>
                                            <div class="mt-1">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" maxlength="300" name="deskripsi_kost" id="deskripsi_kost" placeholder="Masukkan Deskripsi Kost" value="{{ old('deskripsi_kost') }}" x-model="deskripsi" required>
                                                    @error('deskripsi_kost')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="items ps-2 pt-3 fasilitas">
                                            <div class="title">Fasilitas Kamar</div>
                                            <input type="hidden" name=" kondisi" class="form-control add-input" value="kosong">
                                            <input type="hidden" name="" class="form-control add-input" value="Publish">
                                        </div>
                                        <div class="items ps-2 fasilitas">
                                            <div class="row">
                                                @foreach ($fas_kamar as $facilitekamar)
                                                    <div class="col-4">
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" name="fasilitas[]" value="{{ $facilitekamar->id }}" id="fasilitasKamar-{{ $facilitekamar->id }}" x-model="fasKamar" />
                                                            <label class="form-check-label" for="fasilitasKamar-{{ $facilitekamar->id }}">
                                                                {{ $facilitekamar->nama }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="items ps-2 pt-3 fasilitas">
                                            <div class="title">Fasilitas Umum</div>
                                        </div>
                                        <div class="items ps-2 fasilitas">
                                            <div class="row">
                                                @foreach ($fas_umum as $faciliteumum)
                                                    <div class="col-4">
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" name="fasilitas[]" value="{{ $faciliteumum->id }}" id="fasilits-{{ $faciliteumum->id }}" x-model="fasUmum" />
                                                            <label class="form-check-label" for="fasilits-{{ $faciliteumum->id }}">
                                                                {{ $faciliteumum->nama }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="items ps-2 pt-3 fasilitas">
                                            <div class="title">Fasilitas Kamar Mandi</div>
                                        </div>
                                        <div class="items ps-2 fasilitas">
                                            <div class="row">
                                                @foreach ($fas_kamar_mandi as $facilitekamarmandi)
                                                    <div class="col-4">
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" name="fasilitas[]" value="{{ $facilitekamarmandi->id }}" id="fasilits-{{ $facilitekamarmandi->id }}" x-model="fasKamarmandi" />
                                                            <label class="form-check-label" for="fasilits-{{ $facilitekamarmandi->id }}">
                                                                {{ $facilitekamarmandi->nama }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="items ps-2 pt-3 fasilitas">
                                            <div class="title">Fasilitas Parkir</div>
                                        </div>
                                        <div class="items ps-2 fasilitas">
                                            <div class="row">
                                                @foreach ($fas_parkir as $faciliteparkir)
                                                    <div class="col-4">
                                                        <div class="form-check mt-2">
                                                            <input class="form-check-input" type="checkbox" name="fasilitas[]" value="{{ $faciliteparkir->id }}" id="fasilits-{{ $faciliteparkir->id }}" x-model="fasParkir" />
                                                            <label class="form-check-label" for="fasilits-{{ $faciliteparkir->id }}">
                                                                {{ $faciliteparkir->nama }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-12 text-end sticky-bottom bg-white">
                                            <div class="align-items-center mt-3 mb-3">
                                                <div class="ms-auto mt-3 mt-md-0">
                                                    <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-info font-medium" :disabled="fasKamar.length === 0 || fasUmum.length === 0 || fasKamarmandi.length === 0 || fasParkir.length === 0 || !(gambar && kategori && alamat && ukuran && tipe && status && fasilitas && lokasi && air && listrik && alamatlengkap && deskripsi && nomer)">
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
                        <th class="text-center">Kategori Kost</th>
                        <th class="text-center">Harga Kost</th>
                        <th class="text-center">Alamat Kost</th>
                        <th class="text-center">Ukuran Kost</th>
                        <th class="text-center">Tipe Kost</th>
                        <th class="text-center">Status Kost</th>
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
                                <td class="text-center">
                                    <span class="usr-kategori-kost">{{ $item->kategori->kategori }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-harga-kost">Rp. {{ $item->harga_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-lokasi-kost">{{ $item->alamat_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-ukuran-kost">{{ $item->ukuran_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-tipe-kost">{{ $item->tipe_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-status-kost @if ($item->status_kost == 'Publish') published @else Unpublish @endif">{{ $item->status_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="action-btn d-flex align-items-center gap-1">
                                        <div class="toggle ml-2">
                                            <form id="edit-form" name="edit-form" method="post">
                                                <div class="form-check form-switch" style="padding: 0px; min-height: 0em; margin-bottom: 0em;">
                                                    <input class="form-check-input" type="checkbox" data-id={{ $item->id }} {{ $item->status_kost == 'Publish' ? 'checked' : null }} style="margin-left: 14px;" />
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
                                                        <h3 class="fw-medium fs-3">Apakah Anda Yakin Ingin Menghapus Kamar Ini?</h3>
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
                                        {{-- <a href="/pemilikmin/kamar/destroy/{{ $item->id }}" class="btn btn-danger" style="width: 30px; height: 30px; padding: 4.5px;">
                                            <i class="ti ti-trash fs-5"></i>
                                        </a> --}}
                                        <a type="button" data-bs-toggle="modal" data-bs-target="#modaledit-{{ $item->id }}" class="btn btn-warning" style="width: 30px; height: 30px; padding: 4.5px;">
                                            <i class="ti ti-edit fs-5"></i>
                                        </a>
                                        <a class="btn btn-info" style="width: 30px; height: 30px; padding: 4.5px;" data-bs-toggle="modal" data-bs-target="#kost-{{ $item->id }}">
                                            <i class="ti ti-eye fs-5"></i>
                                        </a>
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
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Tipe Kost">Tipe Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
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
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Kategori Kost">Kategori Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Harga Kost">Harga Kost</label>
                                                                </div>
                                                                <div class="col-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="kategori_id" value="{{ $item->kategori->kategori }}" id="kategori_id" disabled>
                                                                            @error('kategori_id')
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
                                                                <div class="col-12 text-start mt-3">
                                                                    <label for="Alamat Kost">Alamat Kost</label>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="alamat_kost" value="{{ $item->alamat_kost }}" id="alamat_kost" disabled>
                                                                            @error('alamat_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Ukuran Kost">Ukuran Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Lokasi Kost">Lokasi Kost</label>
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
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Air Kost">Air Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Listrik Kost">Listrik Kost</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="air_kost" value="{{ $item->air_kost }}" id="air_kost" disabled>
                                                                            @error('air_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="listrik_kost" value="{{ $item->listrik_kost }}" id="listrik_kost" disabled>
                                                                            @error('listrik_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Alamat Lengkap Kost">Alamat Lengkap Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Nomer Kamar Kost">Nomer Kamar Kost</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="alamat_lengkap_kost" value="{{ $item->alamat_lengkap_kost }}" id="alamat_lengkap_kost" disabled>
                                                                            @error('alamat_lengkap_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="number" class="form-control" name="nomer_kost" value="{{ $item->nomer_kost }}" id="nomer_kost" disabled>
                                                                            @error('nomer_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-start mt-3">
                                                                    <label for="Deskripsi Kost">Deskripsi Kost</label>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="deskripsi_kost" value="{{ $item->deskripsi_kost }}" id="deskripsi_kost" disabled>
                                                                            @error('deskripsi_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="container fasilitas mt-3">
                                                            <label>Fasilitas Kamar</label>
                                                            <div class="for-fas">
                                                                <div class="row">
                                                                    @foreach ($fas_kamar as $facilite)
                                                                        @php
                                                                            $kamarkost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $item->id)
                                                                                ->where('fasilitas_id', $facilite->id)
                                                                                ->first();
                                                                        @endphp
                                                                        @if ($kamarkost)
                                                                            <div class="col-4 mt-3">
                                                                                <div class="fas-item">
                                                                                    <div class="for-img">
                                                                                        <img src="{{ asset('uploadkamar/' . $facilite->gambar) }}" style="width: 130px; height: 80px; border-radius: 8px;">
                                                                                    </div>
                                                                                    <div class="name">
                                                                                        {{ $facilite->nama }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <label class="pt-3">Fasilitas Umum</label>
                                                            <div class="for-fas umum">
                                                                <div class="row">
                                                                    @foreach ($fas_umum as $facilite)
                                                                        @php
                                                                            $kamarkost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $item->id)
                                                                                ->where('fasilitas_id', $facilite->id)
                                                                                ->first();
                                                                        @endphp
                                                                        @if ($kamarkost)
                                                                            <div class="col-4 mt-3">
                                                                                <div class="fas-item">
                                                                                    <div class="for-img">
                                                                                        <img src="{{ asset('uploadkamar/' . $facilite->gambar) }}" style="width: 130px; height: 80px; border-radius: 8px;">
                                                                                    </div>
                                                                                    <div class="name">
                                                                                        {{ $facilite->nama }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <label class="pt-3">Fasilitas Kamar Mandi</label>
                                                            <div class="for-fas umum">
                                                                <div class="row">
                                                                    @foreach ($fas_kamar_mandi as $facilite)
                                                                        @php
                                                                            $kamarkost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $item->id)
                                                                                ->where('fasilitas_id', $facilite->id)
                                                                                ->first();
                                                                        @endphp
                                                                        @if ($kamarkost)
                                                                            <div class="col-4 mt-3">
                                                                                <div class="fas-item">
                                                                                    <div class="for-img">
                                                                                        <img src="{{ asset('uploadkamar/' . $facilite->gambar) }}" style="width: 130px; height: 80px; border-radius: 8px;">
                                                                                    </div>
                                                                                    <div class="name">
                                                                                        {{ $facilite->nama }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            <label class="pt-3">Fasilitas Parkir</label>
                                                            <div class="for-fas umum">
                                                                <div class="row">
                                                                    @foreach ($fas_parkir as $facilite)
                                                                        @php
                                                                            $kamarkost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $item->id)
                                                                                ->where('fasilitas_id', $facilite->id)
                                                                                ->first();
                                                                        @endphp
                                                                        @if ($kamarkost)
                                                                            <div class="col-4 mt-3">
                                                                                <div class="fas-item">
                                                                                    <div class="for-img">
                                                                                        <img src="{{ asset('uploadkamar/' . $facilite->gambar) }}"style="width: 130px; height: 80px; border-radius: 8px;">
                                                                                    </div>
                                                                                    <div class="name">
                                                                                        {{ $facilite->nama }}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="height: 20px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="modaledit-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content" style="width: 100%; height: 540px;">
                                                    <div class="modal-header" style="height: 70px;">
                                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel" style="margin-top: -24px;">Edit Kamar</h1>
                                                    </div>
                                                    <div class="modal-body" style="margin-top: -20px; padding-bottom: 0; padding-top: 0;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-12 text-start">
                                                                    <label for="Gambar Kost">Gambar Kost</label>
                                                                </div>
                                                                <div class="col-md-12">
                                                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" class="rounded-1" style="width: 100%; height: 200px;">
                                                                </div>
                                                                <form action="/pemilikmin/editkamar" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                                    <div class="row">
                                                                        <div class="col-12 text-start mt-3">
                                                                            <label for="Fasilitas Kost"> Fasilitas Kost</label>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="mt-0">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" maxlength="65" name="fasilitas_kost" id="fasilitas_kost" value="{{ $item->fasilitas_kost }}">
                                                                                    @error('fasilitas_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Ukuran Kost">Ukuran Kost</label>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Tipe Kost">Tipe Kost</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" maxlength="11" name="ukuran_kost" value="{{ $item->ukuran_kost }}" id="ukuran_kost" placeholder="Masukkan Ukuran Kost">
                                                                                    @error('ukuran_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
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
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Gambar Kost">Gambar Kost</label>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Kategori Kost">Kategori Kost</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
                                                                                <input class="form-control" type="file" name="gambar_kost" value="{{ $item->gambar_kost }}" id="gambar_kost">
                                                                                @error('gambar_kost')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="kategori_id" name="kategori_id">
                                                                                        @foreach ($categories as $category)
                                                                                            <option value="{{ $category->id }}" {{ $item->kategori_id == $category->id ? 'selected' : '' }}>{{ $category->kategori }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Harga Kost">Harga Kost</label>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Alamat Kost">Alamat Kost</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" maxlength="10" name="harga_kost" value="{{ $item->harga_kost }}" id="harga_kost" placeholder="Masukkan Harga Kost">
                                                                                    @error('harga_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" maxlength="25" name="alamat_kost" value="{{ $item->alamat_kost }}" id="alamat_kost" placeholder="Masukkan Alamat Kost">
                                                                                    @error('alamat_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Status Kost">Status Kost</label>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Lokasi Kost">Lokasi Kost</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
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
                                                                            <div class="mt-0">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="lokasi_kost" name="lokasi_kost">
                                                                                        <option value="Didekat Kamu" {{ $item->lokasi_kost == 'Didekat Kamu' ? 'selected' : '' }}>Didekat Kamu</option>
                                                                                        <option value="Area Surabaya Timur" {{ $item->lokasi_kost == 'Area Surabaya Timur' ? 'selected' : '' }}>Area Surabaya Timur</option>
                                                                                        <option value="Kamar Kost Putra" {{ $item->lokasi_kost == 'Kamar Kost Putra' ? 'selected' : '' }}>Kamar Kost Putra</option>
                                                                                        <option value="Kamar Kost Populer" {{ $item->lokasi_kost == 'Kamar Kost Populer' ? 'selected' : '' }}>Kamar Kost Populer</option>
                                                                                        <option value="Kamar Kost Putri" {{ $item->lokasi_kost == 'Kamar Kost Putri' ? 'selected' : '' }}>Kamar Kost Putri</option>
                                                                                        <option value="Area Surabaya Barat" {{ $item->lokasi_kost == 'Area Surabaya Barat' ? 'selected' : '' }}>Area Surabaya Barat</option>
                                                                                        <option value="Rekomendasi Kamar Kost" {{ $item->lokasi_kost == 'Rekomendasi Kamar Kost' ? 'selected' : '' }}>Rekomendasi Kamar Kost</option>
                                                                                        <option value="Promo Kamar Kost" {{ $item->lokasi_kost == 'Promo Kamar Kost' ? 'selected' : '' }}>Promo Kamar Kost</option>
                                                                                        <option value="Kamar Kost Terpopuler" {{ $item->lokasi_kost == 'Kamar Kost Terpopuler' ? 'selected' : '' }}>Kamar Kost Terpopuler</option>
                                                                                        <option value="Kamar Kost Terbaru" {{ $item->lokasi_kost == 'Kamar Kost Terbaru' ? 'selected' : '' }}>Kamar Kost Terbaru</option>
                                                                                        <option value="Area Jemursari" {{ $item->lokasi_kost == 'Area Jemursari' ? 'selected' : '' }}>Area Jemursari</option>
                                                                                        <option value="Area Semolowaru" {{ $item->lokasi_kost == 'Area Semolowaru' ? 'selected' : '' }}>Area Semolowaru</option>
                                                                                        <option value="Area Benowo" {{ $item->lokasi_kost == 'Area Benowo' ? 'selected' : '' }}>Area Benowo</option>
                                                                                        <option value="Area Sukolilo" {{ $item->lokasi_kost == 'Area Sukolilo' ? 'selected' : '' }}>Area Sukolilo</option>
                                                                                        <option value="Area Rungkut" {{ $item->lokasi_kost == 'Area Rungkut' ? 'selected' : '' }}>Area Rungkut</option>
                                                                                        @error('lokasi_kost')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Air Kost">Air Kost</label>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Listrik Kost">Listrik Kost</label>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="air_kost" name="air_kost">
                                                                                        <option value="Pdam" {{ $item->air_kost == 'Pdam' ? 'selected' : '' }}>Pdam</option>
                                                                                        <option value="Sumur" {{ $item->air_kost == 'Sumur' ? 'selected' : '' }}>Sumur</option>
                                                                                        @error('air_kost')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="mt-0">
                                                                                <div class="input-group">
                                                                                    <select class="form-select" id="listrik_kost" name="listrik_kost">
                                                                                        <option value="Token" {{ $item->listrik_kost == 'Token' ? 'selected' : '' }}>Token</option>
                                                                                        <option value="Pln" {{ $item->listrik_kost == 'Pln' ? 'selected' : '' }}>Pln</option>
                                                                                        @error('listrik_kost')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Alamat Lengkap Kost">Alamat Lengkap Kost</label>
                                                                            <div class="mt-0">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" maxlength="30" name="alamat_lengkap_kost" id="alamat_lengkap_kost" value="{{ $item->alamat_lengkap_kost }}">
                                                                                    @error('alamat_lengkap_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-6 text-start mt-3">
                                                                            <label for="Nomer Kamar Kost">Nomer Kamar Kost</label>
                                                                            <div class="mt-0">
                                                                                <div class="form-group">
                                                                                    <input type="number" class="form-control" min="0" oninput="limitLength(this, 2)" name="nomer_kost" id="nomer_kost" value="{{ $item->nomer_kost }}">
                                                                                    @error('nomer_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-start mt-3">
                                                                            <label for="Deskripsi Kost">Deskripsi Kost</label>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="mt-0">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" maxlength="300" name="deskripsi_kost" id="deskripsi_kost" value="{{ $item->deskripsi_kost }}">
                                                                                    @error('deskripsi_kost')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="items ps-2 pt-3 fasilitas">
                                                                            <div class="title">Fasilitas Kamar<span class="text-danger">*</span></div>
                                                                        </div>
                                                                        <div class="items ps-2 fasilitas">
                                                                            <div class="row">
                                                                                @foreach ($fas_kamar as $facilitekamar)
                                                                                    @php
                                                                                        $kamarkost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $item->id)
                                                                                            ->where('fasilitas_id', $facilitekamar->id)
                                                                                            ->first();
                                                                                    @endphp
                                                                                    <div class="col-4">
                                                                                        <div class="form-check mt-2">
                                                                                            <input class="form-check-input" type="checkbox" name="fasilitas[]" {{ $kamarkost ? ($facilitekamar->id == $kamarkost->fasilitas_id ? 'checked' : null) : null }} value="{{ $facilitekamar->id }}" id="fasilits-{{ $facilitekamar->id }}" />
                                                                                            <label class="form-check-label" for="fasilits-{{ $facilitekamar->id }}">
                                                                                                {{ $facilitekamar->nama }}
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <div class="items ps-2 pt-3 fasilitas">
                                                                            <div class="title">Fasilitas Umum<span class="text-danger">*</span></div>
                                                                        </div>
                                                                        <div class="items ps-2 fasilitas">
                                                                            <div class="row">
                                                                                @foreach ($fas_umum as $faciliteumum)
                                                                                    @php
                                                                                        $kamarkost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $item->id)
                                                                                            ->where('fasilitas_id', $faciliteumum->id)
                                                                                            ->first();
                                                                                    @endphp
                                                                                    <div class="col-4">
                                                                                        <div class="form-check mt-2">
                                                                                            <input class="form-check-input" type="checkbox" name="fasilitas[]" {{ $kamarkost ? ($faciliteumum->id == $kamarkost->fasilitas_id ? 'checked' : null) : null }} value="{{ $faciliteumum->id }}" id="fasilits-{{ $faciliteumum->id }}" />
                                                                                            <label class="form-check-label" for="fasilits-{{ $faciliteumum->id }}">
                                                                                                {{ $faciliteumum->nama }}
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <div class="items ps-2 pt-3 fasilitas">
                                                                            <div class="title">Fasilitas Kamar Mandi<span class="text-danger">*</span></div>
                                                                        </div>
                                                                        <div class="items ps-2 fasilitas">
                                                                            <div class="row">
                                                                                @foreach ($fas_kamar_mandi as $facilitekamarmandi)
                                                                                    @php
                                                                                        $kamarkost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $item->id)
                                                                                            ->where('fasilitas_id', $facilitekamarmandi->id)
                                                                                            ->first();
                                                                                    @endphp
                                                                                    <div class="col-4">
                                                                                        <div class="form-check mt-2">
                                                                                            <input class="form-check-input" type="checkbox" name="fasilitas[]" {{ $kamarkost ? ($facilitekamarmandi->id == $kamarkost->fasilitas_id ? 'checked' : null) : null }} value="{{ $facilitekamarmandi->id }}" id="fasilits-{{ $facilitekamarmandi->id }}" />
                                                                                            <label class="form-check-label" for="fasilits-{{ $facilitekamarmandi->id }}">
                                                                                                {{ $facilitekamarmandi->nama }}
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <div class="items ps-2 pt-3 fasilitas">
                                                                            <div class="title">Fasilitas Parkir<span class="text-danger">*</span></div>
                                                                        </div>
                                                                        <div class="items ps-2 fasilitas">
                                                                            <div class="row">
                                                                                @foreach ($fas_parkir as $faciliteparkir)
                                                                                    @php
                                                                                        $kamarkost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $item->id)
                                                                                            ->where('fasilitas_id', $faciliteparkir->id)
                                                                                            ->first();
                                                                                    @endphp
                                                                                    <div class="col-4">
                                                                                        <div class="form-check mt-2">
                                                                                            <input class="form-check-input" type="checkbox" name="fasilitas[]" {{ $kamarkost ? ($faciliteparkir->id == $kamarkost->fasilitas_id ? 'checked' : null) : null }} value="{{ $faciliteparkir->id }}" id="fasilits-{{ $faciliteparkir->id }}" />
                                                                                            <label class="form-check-label" for="fasilits-{{ $faciliteparkir->id }}">
                                                                                                {{ $faciliteparkir->nama }}
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-end sticky-bottom bg-white">
                                                                            <div class="align-items-center mt-3">
                                                                                <div class="ms-auto mt-3 mb-3 mt-md-0">
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
                    <div class="modal-dialog modal-dialog-scrollable" role="document" x-data="{ gambar: '', kategori: '', harga: '', alamat: '', ukuran: '', tipe: '', status: '', fasilitas: '', lokasi: '', air: '', listik: '', alamatlengkap: '', deskripsi: '', nomer: '', fasKamar: [], fasUmum: [], fasKamarmandi: [], fasParkir: [] }">
                        <div class="modal-content" style="width: 100%; height: 540px;">
                            <div class="modal-header" style=" height: 70px;">
                                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel" style="margin-top: -24px;">Tambah Kamar</h1>
                            </div>
                            <div class="modal-body" style="margin-top: -20px; padding-bottom: 0; padding-top: 0;">
                                <div class="container">
                                    <div class="row">
                                        <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <label class="mt-2" for="Fasilitas">Fasilitas Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" name="fasilitas_kost" maxlength="65" id="fasilitas_kost" placeholder="Masukkan Fasilitas Kost" value="{{ old('fasilitas_kost') }}" x-model="fasilitas" required>
                                                            @error('fasilitas_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Ukuran">Ukuran Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" maxlength="11" name="ukuran_kost" id="ukuran_kost" placeholder="Masukkan Ukuran Kost" value="{{ old('ukuran_kost') }}" x-model="ukuran" required>
                                                            @error('ukuran_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Tipe">Tipe Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            <select class="form-select" id="tipe_kost" name="tipe_kost" value="{{ old('tipe_kost') }}" x-model="tipe" required>
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
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Gambar">Gambar Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <input class="form-control" type="file" name="gambar_kost" id="gambar_kost" value="{{ old('gambar_kost') }}" x-model="gambar" required>
                                                        @error('gambar_kost')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Kategori">Kategori Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            {{-- <label class="input" for="inputGroupSelect01"></label> --}}
                                                            <select class="form-select" id="kategori_id" name="kategori_id" value="{{ old('kategori_id') }}" x-model="kategori" required>
                                                                <option selected>Pilih Kategori Kost...</option>
                                                                {{-- <option value="Kost Putra">Kost Putra</option>
                                                                <option value="Kost Putri">Kost Putri</option> --}}
                                                                @foreach ($categories as $category)
                                                                    <option value="{{ $category->id }}">{{ $category->kategori }}</option>
                                                                @endforeach
                                                                @error('kategori_id')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Harga">Harga Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" maxlength="10" name="harga_kost" id="harga_kost" placeholder="Masukkan Harga Kost" value="{{ old('harga_kost') }}" x-model="harga" required>
                                                            @error('harga_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Alamat">Alamat Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" maxlength="30" name="alamat_kost" id="alamat_kost" placeholder="Masukkan Alamat Kost" value="{{ old('alamat_kost') }}" x-model="alamat" required>
                                                            @error('alamat_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Status">Status Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            <select class="form-select" id="status_kost" name="status_kost" value="{{ old('status_kost') }}" x-model="status" required>
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
                                                    <label class="mt-2" for="Lokasi">Lokasi Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            <select class="form-select" id="lokasi_kost" name="lokasi_kost" value="{{ old('lokasi_kost') }}" x-model="lokasi" required>
                                                                <option selected>Pilih Lokasi Kost...</option>
                                                                <option value="Didekat Kamu">Didekat Kamu</option>
                                                                <option value="Area Surabaya Timur">Area Surabaya Timur</option>
                                                                <option value="Kamar Kost Putra">Kamar Kost Putra</option>
                                                                <option value="Kamar Kost Populer">Kamar Kost Populer</option>
                                                                <option value="Kamar Kost Putri">Kamar Kost Putri</option>
                                                                <option value="Area Surabaya Barat">Area Surabaya Barat</option>
                                                                <option value="Rekomendasi Kamar Kost">Rekomendasi Kamar Kost</option>
                                                                <option value="Promo Kamar Kost">Promo Kamar Kost</option>
                                                                <option value="Kamar Kost Terpopuler">Kamar Kost Terpopuler</option>
                                                                <option value="Kamar Kost Terbaru">Kamar Kost Terbaru</option>
                                                                <option value="Area Jemursari">Area Jemursari</option>
                                                                <option value="Area Semolowaru">Area Semolowaru</option>
                                                                <option value="Area Benowo">Area Benowo</option>
                                                                <option value="Area Sukolilo">Area Sukolilo</option>
                                                                <option value="Area Rungkut">Area Rungkut</option>
                                                                @error('lokasi_kost')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Air">Air Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            <select class="form-select" id="air_kost" name="air_kost" value="{{ old('air_kost') }}" x-model="air" required>
                                                                <option selected>Pilih Air Kost...</option>
                                                                <option value="Pdam">Pdam</option>
                                                                <option value="Sumur">Sumur</option>
                                                                @error('air_kost')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Listrik">Listrik Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="input-group">
                                                            <select class="form-select" id="listrik_kost" name="listrik_kost" value="{{ old('listrik_kost') }}" x-model="listrik" required>
                                                                <option selected>Pilih listrik Kost...</option>
                                                                <option value="Token">Token</option>
                                                                <option value="Pln">Pln</option>
                                                                @error('air_kost')
                                                                    {{ $message }}
                                                                @enderror
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Alamat Lengkap">Alamat Lengkap Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" maxlength="30" name="alamat_lengkap_kost" id="alamat_lengkap_kost" placeholder="Masukkan Alamat Lengkap Kost" value="{{ old('alamat_lengkap_kost') }}" x-model="alamatlengkap" required>
                                                            @error('alamat_lengkap_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="mt-2" for="Nomer Kamar">Nomer Kamar Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" min="0" oninput="limitLength(this, 2)" name="nomer_kost" id="nomer_kost" placeholder="Masukkan Nomer Kamar Kost" value="{{ old('nomer_kost') }}" x-model="nomer" required>
                                                            @error('nomer_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <label class="mt-2" for="Deskripsi">Deskripsi Kost <span class="text-danger">*</span></label>
                                                    <div class="mt-1">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" maxlength="300" name="deskripsi_kost" id="deskripsi_kost" placeholder="Masukkan Deskripsi Kost" value="{{ old('deskripsi_kost') }}" x-model="deskripsi" required>
                                                            @error('deskripsi_kost')
                                                                {{ $message }}
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="items ps-2 pt-3 fasilitas">
                                                    <div class="title">Fasilitas Kamar</div>
                                                    <input type="hidden" name=" kondisi" class="form-control add-input" value="kosong">
                                                    <input type="hidden" name="" class="form-control add-input" value="Publish">
                                                </div>
                                                <div class="items ps-2 fasilitas">
                                                    <div class="row">
                                                        @foreach ($fas_kamar as $facilitekamar)
                                                            <div class="col-4">
                                                                <div class="form-check mt-2">
                                                                    <input class="form-check-input" type="checkbox" name="fasilitas[]" value="{{ $facilitekamar->id }}" id="fasilitasKamar-{{ $facilitekamar->id }}" x-model="fasKamar" />
                                                                    <label class="form-check-label" for="fasilitasKamar-{{ $facilitekamar->id }}">
                                                                        {{ $facilitekamar->nama }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="items ps-2 pt-3 fasilitas">
                                                    <div class="title">Fasilitas Umum</div>
                                                </div>
                                                <div class="items ps-2 fasilitas">
                                                    <div class="row">
                                                        @foreach ($fas_umum as $faciliteumum)
                                                            <div class="col-4">
                                                                <div class="form-check mt-2">
                                                                    <input class="form-check-input" type="checkbox" name="fasilitas[]" value="{{ $faciliteumum->id }}" id="fasilits-{{ $faciliteumum->id }}" x-model="fasUmum" />
                                                                    <label class="form-check-label" for="fasilits-{{ $faciliteumum->id }}">
                                                                        {{ $faciliteumum->nama }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="items ps-2 pt-3 fasilitas">
                                                    <div class="title">Fasilitas Kamar Mandi</div>
                                                </div>
                                                <div class="items ps-2 fasilitas">
                                                    <div class="row">
                                                        @foreach ($fas_kamar_mandi as $facilitekamarmandi)
                                                            <div class="col-4">
                                                                <div class="form-check mt-2">
                                                                    <input class="form-check-input" type="checkbox" name="fasilitas[]" value="{{ $facilitekamarmandi->id }}" id="fasilits-{{ $facilitekamarmandi->id }}" x-model="fasKamarmandi" />
                                                                    <label class="form-check-label" for="fasilits-{{ $facilitekamarmandi->id }}">
                                                                        {{ $facilitekamarmandi->nama }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="items ps-2 pt-3 fasilitas">
                                                    <div class="title">Fasilitas Parkir</div>
                                                </div>
                                                <div class="items ps-2 fasilitas">
                                                    <div class="row">
                                                        @foreach ($fas_parkir as $faciliteparkir)
                                                            <div class="col-4">
                                                                <div class="form-check mt-2">
                                                                    <input class="form-check-input" type="checkbox" name="fasilitas[]" value="{{ $faciliteparkir->id }}" id="fasilits-{{ $faciliteparkir->id }}" x-model="fasParkir" />
                                                                    <label class="form-check-label" for="fasilits-{{ $faciliteparkir->id }}">
                                                                        {{ $faciliteparkir->nama }}
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="col-12 text-end sticky-bottom bg-white">
                                                    <div class="align-items-center mt-3 mb-3">
                                                        <div class="ms-auto mt-3 mt-md-0">
                                                            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batal</button>
                                                            <button type="submit" class="btn btn-info font-medium" :disabled="fasKamar.length === 0 || fasUmum.length === 0 || fasKamarmandi.length === 0 || fasParkir.length === 0 || !(gambar && kategori && alamat && ukuran && tipe && status && fasilitas && lokasi && air && listrik && alamatlengkap && deskripsi && nomer)">
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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        function limitLength(element, maxLength) {
            if (element.value.length > maxLength) {
                element.value = element.value.slice(0, maxLength);
            }
        }

        function confirmDelete(itemId) {
            var deleteForm = document.getElementById('deleteForm');
            deleteForm.action = '/pemilikmin/pembayaran/destroy/' + itemId;
            $('#deleteConfirmationModal').modal('show');
        }
        4
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

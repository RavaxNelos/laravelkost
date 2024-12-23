@extends('layouts.admin.app')

@section('title', 'Pembayaran')

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

        .btn.disabled {
            background: rgb(204, 204, 204);
            border: none;
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
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Pembayaran</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Pembayaran</li>
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
    @if (count($pembayaran) > 0)
        <div class="widget-content searchable-container list">
            <!-- --------------------- start Contact ---------------- -->
            <div class="card card-body" style="margin-bottom: 10px; margin-top: -30px; padding: 10px;">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari Pembayaran..." />
                            <i class="ti ti-search position-absolute top-50 start-0 translate-middle-y fs-6 text-dark ms-3"></i>
                        </form>
                    </div>
                    <div class="col-md-8 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                        <a data-bs-toggle="modal" data-bs-target="#modaltambah" id="btn-add-contact" class="btn btn-info d-flex align-items-center">
                            <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Pembayaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document" x-data="{ pembayaran: '', logo: '', kategori: '', nomer: '', atasnama: '' }">
                <div class="modal-content" style="width: 100%; height: 540px;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Metode Pembayaran</h1>
                    </div>
                    <div class="modal-body" style="margin-top: -20px;">
                        <div class="container">
                            <div class="row">
                                <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 text-start">
                                        <label for="Metode Pembayaran">Nama Pembayaran <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-12" style="margin-top: -6px;">
                                        <div class="mt-3">
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="nama_pembayaran" name="nama_pembayaran" x-model="pembayaran" required>
                                                    <option selected>Pilih Nama Pembayaran...</option>
                                                    <option value="Transfer Bank BRI">Transfer Bank BRI</option>
                                                    <option value="Transfer Bank BCA">Transfer Bank BCA</option>
                                                    <option value="Gopay">Gopay</option>
                                                    <option value="Ovo">Ovo</option>
                                                    <option value="Dana">Dana</option>
                                                    <option value="Shopee Pay">Shopee Pay</option>
                                                    @error('nama_pembayaran')
                                                        {{ $message }}
                                                    @enderror
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-start">
                                        <label for="Logo Pembayaran">Logo Pembayaran <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-12" style="margin-top: -6px;">
                                        <div class="mt-3 mb-3">
                                            <input class="form-control" type="file" name="logo_pembayaran" id="logo_pembayaran" value="{{ old('logo_pembayaran') }}" x-model="logo" required>
                                            @error('logo_pembayaran')
                                                {{ $message }}
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 text-start">
                                        <label for="Kategori Pembayaran">Kategori Pembayaran <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-12" style="margin-top: -6px;">
                                        <div class="mt-3">
                                            <div class="input-group mb-3">
                                                <select class="form-select" id="kategori_pembayaran" name="kategori_pembayaran" value="{{ old('kategori_pembayaran') }}" x-model="kategori" required>
                                                    <option selected>Pilih Kategori Pembayaran...</option>
                                                    <option value="Transfer Bank">Transfer Bank</option>
                                                    <option value="E-Wallet">E-Wallet</option>
                                                    @error('kategori_pembayaran')
                                                        {{ $message }}
                                                    @enderror
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-start">
                                        <label for="Nomer Pembayaran">Nomer Pembayaran <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-12" style="margin-top: -6px;">
                                        <div class="mt-3 mb-3">
                                            <div class="form-group">
                                                <input type="number" class="form-control" min="0" oninput="limitLength(this, 12)" name="nomer_pembayaran" id="nomer_pembayaran" placeholder="Masukkan Nomer Pembayaran" value="{{ old('nomer_pembayaran') }}" x-model="nomer" required>
                                                @error('nomer_pembayaran')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-start">
                                        <label for="Atas Nama Pembayaran">Atas Nama Pembayaran <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-md-12" style="margin-top: -6px;">
                                        <div class="mt-3">
                                            <div class="form-group">
                                                <input type="text" class="form-control" maxlength="20" name="atasnama_pembayaran" id="atasnama_pembayaran" placeholder="Masukkan Atas Nama Pembayaran" value="{{ old('atasnama_pembayaran') }}" x-model="atasnama" required>
                                                @error('atasnama_pembayaran')
                                                    {{ $message }}
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 text-end">
                                        <div class="align-items-center mt-3">
                                            <div class="ms-auto mt-3 mt-md-0">
                                                <button type="button" class="btn btn-outline-danger"data-bs-dismiss="modal">Batal</button>
                                                <button type="submit" class="btn btn-info font-medium" :class="pembayaran && logo && kategori && nomer && atasnama ? null : 'disabled'">
                                                    <div class="align-items-center">
                                                        Tambahkan
                                                    </div>
                                                </button>
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
                        <th>Logo</th>
                        <th class="text-center">Nama Pembayaran</th>
                        <th class="text-center">Kategori</th>
                        <th class="text-center">Nomer</th>
                        <th class="text-center">Atas Nama</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($pembayaran as $item)
                            <!-- start row -->
                            <tr class="search-items">
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('uploadkamar/' . $item->logo_pembayaran) }}" class="rounded-1" width="35" />
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="usr-nama-pembayaran">{{ $item->nama_pembayaran }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-kategori-pembayaran">{{ $item->kategori_pembayaran }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-nomer-pembayaran">{{ $item->nomer_pembayaran }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="usr-atasnama-pembayaran">{{ $item->atasnama_pembayaran }}</span>
                                </td>
                                <td class="text-center">
                                    <div class="action-btn">
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
                                                        <h3 class="fw-medium fs-3">Apakah Anda Yakin Ingin Menghapus Metode Pembayaran Ini?</h3>
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
                                        <button class="btn btn-info" style="width: 30px; height: 30px; padding: 4.5px;" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $item->id }}">
                                            <i class="ti ti-eye fs-5"></i>
                                        </button>
                                        <!-- Modal -->
                                        <div class="modal fade" id="exampleModal-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 100%; height: 540px;">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Detail Metode Pembayaran</h1>
                                                    </div>
                                                    <div class="modal-body" style="margin-top: -10px;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                                <div class="row">
                                                                    <div class="col-12 text-start" style="margin-top: -4px;">
                                                                        <label for="Nama Pembayaran">Nama Pembayaran</label>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: -6px;">
                                                                        <div class="mt-3" style="margin-bottom: 30px;">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="nama_pembayaran" value="{{ $item->nama_pembayaran }}" id="nama_pembayaran" disabled>
                                                                                @error('nama_pembayaran')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 text-start" style="margin-top: -10px;">
                                                                        <label for="Kategori Pembayaran">Kategori Pembayaran</label>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: -6px;">
                                                                        <div class="mt-3" style="margin-bottom: 30px;">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="kategori_pembayaran" value="{{ $item->kategori_pembayaran }}" id="kategori_pembayaran" disabled>
                                                                                @error('kategori_pembayaran')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 text-start" style="margin-top: -10px;">
                                                                        <label for="Nomer Pembayaran">Nomer Pembayaran</label>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: -6px;">
                                                                        <div class="mt-3" style="margin-bottom: 30px;">
                                                                            <div class="form-group">
                                                                                <input type="number" class="form-control" name="nomer_pembayaran" value="{{ $item->nomer_pembayaran }}" id="nomer_pembayaran" disabled>
                                                                                @error('nomer_pembayaran')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 text-start" style="margin-top: -10px;">
                                                                        <label for="Atas Nama Pembayaran">Atas Nama Pembayaran</label>
                                                                    </div>
                                                                    <div class="col-md-12" style="margin-top: -6px;">
                                                                        <div class="mt-3" style="margin-bottom: 30px;">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control" name="atasnama_pembayaran" value="{{ $item->atasnama_pembayaran }}" id="atasnama_pembayaran" disabled>
                                                                                @error('atasnama_pembayaran')
                                                                                    {{ $message }}
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-12 text-start" style="margin-top: -10px;">
                                                                        <label for="Logo Pembayaran">Logo Pembayaran</label>
                                                                    </div>
                                                                    <div class="col-md-12 text-start" style="margin-top: -4px;">
                                                                        <img src="{{ asset('uploadkamar/' . $item->logo_pembayaran) }}" class="rounded-1 mt-3" width="55">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal fade" id="modaledit-{{ $item->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content" style="width: 100%; height: 540px;">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Edit Pembayaran</h1>
                                                    </div>
                                                    <div class="modal-body" style="margin-top: -20px;">
                                                        <div class="container">
                                                            <div class="row">
                                                                <form action="/pemilikmin/editpembayaran" method="POST" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                                                    <div class="row">
                                                                        <div class="col-12 text-start" style="margin-top: -4px;">
                                                                            <label for="Nama Pembayaran">Nama Pembayaran</label>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -6px;">
                                                                            <div class="mt-3">
                                                                                <div class="input-group mb-3">
                                                                                    <select class="form-select" id="nama_pembayaran" name="nama_pembayaran">
                                                                                        <option value="Transfer Bank BRI" {{ $item->nama_pembayaran == 'Transfer Bank BRI' ? 'selected' : '' }}>Transfer Bank BRI</option>
                                                                                        <option value="Transfer Bank BCA" {{ $item->nama_pembayaran == 'Transfer Bank BCA' ? 'selected' : '' }}>Transfer Bank BCA</option>
                                                                                        <option value="Visa" {{ $item->nama_pembayaran == 'Visa' ? 'selected' : '' }}>Visa</option>
                                                                                        <option value="Gopay" {{ $item->nama_pembayaran == 'Gopay' ? 'selected' : '' }}>Gopay</option>
                                                                                        <option value="Ovo" {{ $item->nama_pembayaran == 'Ovo' ? 'selected' : '' }}>Ovo</option>
                                                                                        <option value="Dana" {{ $item->nama_pembayaran == 'Dana' ? 'selected' : '' }}>Dana</option>
                                                                                        <option value="Shopee Pay" {{ $item->nama_pembayaran == 'Shopee Pay' ? 'selected' : '' }}>Shopee Pay</option>
                                                                                        @error('nama_pembayaran')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-start" style="margin-top: -10px;">
                                                                            <label for="Kategori Pembayaran">Kategori Pembayaran</label>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -6px;">
                                                                            <div class="mt-3">
                                                                                <div class="input-group mb-3">
                                                                                    <select class="form-select" id="kategori_pembayaran" name="kategori_pembayaran">
                                                                                        <option value="Transfer Bank" {{ $item->kategori_pembayaran == 'Transfer Bank' ? 'selected' : '' }}>Transfer Bank</option>
                                                                                        <option value="E-Wallet" {{ $item->kategori_pembayaran == 'E-Wallet' ? 'selected' : '' }}>E-Wallet</option>
                                                                                        @error('kategori_pembayaran')
                                                                                            {{ $message }}
                                                                                        @enderror
                                                                                    </select>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-start" style="margin-top: -10px;">
                                                                            <label for="Nomer Pembayaran">Nomer Pembayaran</label>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -6px;">
                                                                            <div class="mt-3 mb-3">
                                                                                <div class="form-group">
                                                                                    <input type="number" class="form-control" min="0" oninput="limitLength(this, 12)" name="nomer_pembayaran" value="{{ $item->nomer_pembayaran }}" id="nomer_pembayaran" placeholder="Masukkan Nomer Pembayaran">
                                                                                    @error('nomer_pembayaran')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 text-start" style="margin-top: -10px;">
                                                                            <label for="Atas Nama Pembayaran">Atas Nama Pembayaran</label>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -6px;">
                                                                            <div class="mt-3 mb-3">
                                                                                <div class="form-group">
                                                                                    <input type="text" class="form-control" maxlength="20" name="atasnama_pembayaran" value="{{ $item->atasnama_pembayaran }}" id="atasnama_pembayaran" placeholder="Masukkan Atas Nama Pembayaran">
                                                                                    @error('atasnama_pembayaran')
                                                                                        {{ $message }}
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 text-start" style="margin-top: -4px;">
                                                                            <img src="{{ asset('uploadkamar/' . $item->logo_pembayaran) }}" class="rounded-1 mb-3" width="35">
                                                                        </div>
                                                                        <div class="col-12 text-start" style="margin-top: -10px;">
                                                                            <label for="Logo Pembayaran">Logo Pembayaran</label>
                                                                        </div>
                                                                        <div class="col-md-12" style="margin-top: -6px;">
                                                                            <div class="mt-3">
                                                                                <input class="form-control" type="file" name="logo_pembayaran" value="{{ $item->logo_pembayaran }}" id="logo_pembayaran">
                                                                                @error('logo_pembayaran')
                                                                                    {{ $message }}
                                                                                @enderror
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
                    <h1 class="fw-medium fs-3">Belum Ada Data Metode Pembayaran</h1>
                </div>
                <div class="col-12 text-center justify-content-center mt-3 mt-md-0">
                    <a data-bs-toggle="modal" data-bs-target="#modaltambah" id="btn-add-contact" class="btn btn-info align-items-center">
                        <i class="ti ti-plus text-white me-1 fs-5"></i> Tambah Metode Pembayaran
                    </a>
                </div>
                <div class="modal fade" id="modaltambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document" x-data="{ pembayaran: '', logo: '', kategori: '', nomer: '', atasnama: '' }">
                        <div class="modal-content" style="width: 100%; height: 540px;">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Tambah Metode Pembayaran</h1>
                            </div>
                            <div class="modal-body" style="margin-top: -20px;">
                                <div class="container">
                                    <div class="row">
                                        <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="col-12 text-start">
                                                <label for="Metode Pembayaran">Nama Pembayaran <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-12" style="margin-top: -6px;">
                                                <div class="mt-3">
                                                    <div class="input-group mb-3">
                                                        <select class="form-select" id="nama_pembayaran" name="nama_pembayaran" x-model="pembayaran" required>
                                                            <option selected>Pilih Nama Pembayaran...</option>
                                                            <option value="Transfer Bank BRI">Transfer Bank BRI</option>
                                                            <option value="Transfer Bank BCA">Transfer Bank BCA</option>
                                                            <option value="Gopay">Gopay</option>
                                                            <option value="Ovo">Ovo</option>
                                                            <option value="Dana">Dana</option>
                                                            <option value="Shopee Pay">Shopee Pay</option>
                                                            @error('nama_pembayaran')
                                                                {{ $message }}
                                                            @enderror
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-start">
                                                <label for="Logo Pembayaran">Logo Pembayaran <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-12" style="margin-top: -6px;">
                                                <div class="mt-3 mb-3">
                                                    <input class="form-control" type="file" name="logo_pembayaran" id="logo_pembayaran" value="{{ old('logo_pembayaran') }}" x-model="logo" required>
                                                    @error('logo_pembayaran')
                                                        {{ $message }}
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12 text-start">
                                                <label for="Kategori Pembayaran">Kategori Pembayaran <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-12" style="margin-top: -6px;">
                                                <div class="mt-3">
                                                    <div class="input-group mb-3">
                                                        <select class="form-select" id="kategori_pembayaran" name="kategori_pembayaran" value="{{ old('kategori_pembayaran') }}" x-model="kategori" required>
                                                            <option selected>Pilih Kategori Pembayaran...</option>
                                                            <option value="Transfer Bank">Transfer Bank</option>
                                                            <option value="E-Wallet">E-Wallet</option>
                                                            @error('kategori_pembayaran')
                                                                {{ $message }}
                                                            @enderror
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-start">
                                                <label for="Nomer Pembayaran">Nomer Pembayaran <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-12" style="margin-top: -6px;">
                                                <div class="mt-3 mb-3">
                                                    <div class="form-group">
                                                        <input type="number" class="form-control" min="0" oninput="limitLength(this, 12)" name="nomer_pembayaran" id="nomer_pembayaran" placeholder="Masukkan Nomer Pembayaran" value="{{ old('nomer_pembayaran') }}" x-model="nomer" required>
                                                        @error('nomer_pembayaran')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-start">
                                                <label for="Atas Nama Pembayaran">Atas Nama Pembayaran <span class="text-danger">*</span></label>
                                            </div>
                                            <div class="col-md-12" style="margin-top: -6px;">
                                                <div class="mt-3">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control" maxlength="20" name="atasnama_pembayaran" id="atasnama_pembayaran" placeholder="Masukkan Atas Nama Pembayaran" value="{{ old('atasnama_pembayaran') }}" x-model="atasnama" required>
                                                        @error('atasnama_pembayaran')
                                                            {{ $message }}
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 text-end">
                                                <div class="align-items-center mt-3">
                                                    <div class="ms-auto mt-3 mt-md-0">
                                                        <button type="button" class="btn btn-outline-danger"data-bs-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-info font-medium" :class="pembayaran && logo && kategori && nomer && atasnama ? null : 'disabled'">
                                                            <div class="align-items-center">
                                                                Tambahkan
                                                            </div>
                                                        </button>
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

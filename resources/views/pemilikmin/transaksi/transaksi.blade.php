@extends('layouts.admin.app')

@section('title', 'Transaksi')

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
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Transaksi</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="{{ route('dashboard') }}">Dashboard</a></li>
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
    @if (count($transaksi) > 0)
        <div class="widget-content searchable-container list">
            <!-- --------------------- start Contact ---------------- -->
            <div class="card card-body" style="margin-bottom: 10px; margin-top: -30px; padding: 10px;">
                <div class="row">
                    <div class="col-md-4 col-xl-3">
                        <form class="position-relative">
                            <input type="text" class="form-control product-search ps-5" id="input-search" placeholder="Cari Transaksi..." />
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
                        <th class="text-center">Nama</th>
                        <th class="text-center">Pilihan Kost</th>
                        <th class="text-center">Tgl Pesanan</th>
                        <th class="text-center">Tgl Masuk Kost</th>
                        <th class="text-center">Total Harga</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($transaksi as $item)
                            <!-- start row -->
                            <tr class="search-items">
                                <td class="text-center">
                                    <span class="">{{ $item->user->name }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="">{{ $item->kamarkost->tipe_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="">{{ $item->tanggal_pesan_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="">{{ $item->tanggal_masuk_kost }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="">Rp. {{ number_format($item->total_harga, 0, ',', '.') }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-{{ $item->status == 'proses' ? 'warning' : ($item->status == 'selesai' ? 'success' : 'danger') }}">
                                        {{ $item->status == 'proses' ? 'Proses Pembayaran' : ($item->status == 'selesai' ? 'Pembayaran Diterima' : 'Pembayaran Ditolak') }}
                                    </span>
                                </td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center"> <!-- Menggunakan flexbox untuk menengahkan tombol -->
                                        <button class="btn btn-info mx-1" data-bs-toggle="modal" data-bs-target="#kost-{{ $item->id }}">Lihat</button>
                                        <div class="modal fade" id="kost-{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-scrollable">
                                                <div class="modal-content"style="width: 100%; height: 540px;">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Detail Transaksi</h1>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row" style="margin-top: -20px;">
                                                                <div class="col-12 text-start">
                                                                    <label for="Gambar Kost">Gambar Kost</label>
                                                                </div>
                                                                <div class="col-md-12 mt-1">
                                                                    <img src="{{ asset('uploadkamar/' . $item->kamarkost->gambar_kost) }}" class="rounded-1" style="width: 100%; height: 200px;">
                                                                </div>
                                                                <input type="hidden" name="id" value="{{ $item->id }}">
                                                                <div class="col-12 text-start mt-2">
                                                                    <label for="Fasilitas Kost">Fasilitas Kost</label>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="fasilitas_kost" id="fasilitas_kost" value="{{ $item->kamarkost->fasilitas_kost }}" disabled>
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
                                                                            <input type="text" class="form-control" name="tipe_kost" value="{{ $item->kamarkost->tipe_kost }}" id="tipe_kost" disabled>
                                                                            @error('tipe_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="status_kost" value="{{ $item->kamarkost->status_kost }}" id="status_kost" disabled>
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
                                                                            <input type="text" class="form-control" name="kategori_id" value="{{ $item->kamarkost->kategori->kategori }}" id="kategori_id" disabled>
                                                                            @error('kategori_id')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="harga_kost" value="{{ $item->kamarkost->harga_kost }}" id="harga_kost" disabled>
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
                                                                            <input type="text" class="form-control" name="alamat_kost" value="{{ $item->kamarkost->alamat_kost }}" id="alamat_kost" disabled>
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
                                                                            <input type="text" class="form-control" name="ukuran_kost" value="{{ $item->kamarkost->ukuran_kost }}" id="ukuran_kost" disabled>
                                                                            @error('ukuran_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="lokasi_kost" value="{{ $item->kamarkost->lokasi_kost }}" id="lokasi_kost" disabled>
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
                                                                            <input type="text" class="form-control" name="air_kost" value="{{ $item->kamarkost->air_kost }}" id="air_kost" disabled>
                                                                            @error('air_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="listrik_kost" value="{{ $item->kamarkost->listrik_kost }}" id="listrik_kost" disabled>
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
                                                                            <input type="text" class="form-control" name="alamat_lengkap_kost" value="{{ $item->kamarkost->alamat_lengkap_kost }}" id="alamat_lengkap_kost" disabled>
                                                                            @error('alamat_lengkap_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="number" class="form-control" name="nomer_kost" value="{{ $item->kamarkost->nomer_kost }}" id="nomer_kost" disabled>
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
                                                                            <input type="text" class="form-control" name="deskripsi_kost" value="{{ $item->kamarkost->deskripsi_kost }}" id="deskripsi_kost" disabled>
                                                                            @error('deskripsi_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-start mt-3">
                                                                    <label for="Nama User">Nama User</label>
                                                                </div>
                                                                <div class="col-md-12" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="name" value="{{ $item->user->name }}" id="name" disabled>
                                                                            @error('name')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Tanggal Pesan Kost">Tanggal Pesan Kost</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Tanggal Masuk Kost">Tanggal Masuk Kost</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="tanggal_pesan_kost" value="{{ $item->tanggal_pesan_kost }}" id="tanggal_pesan_kost" disabled>
                                                                            @error('tanggal_pesan_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="tanggal_masuk_kost" value="{{ $item->tanggal_masuk_kost }}" id="tanggal_masuk_kost" disabled>
                                                                            @error('tanggal_masuk_kost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Metode Pembayaran">Metode Pembayaran</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Total Harga Kost">Total Harga Kost</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="nama_pembayaran" value="{{ $item->pembayaran->nama_pembayaran }}" id="nama_pembayaran" disabled>
                                                                            @error('nama_pembayaran')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="total_harga" value="{{ number_format($item->total_harga, 0, ',', '.') }}" id="total_harga" disabled>
                                                                            @error('total_harga')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Nomer Transaksi">Nomer Transaksi</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Durasi Ngekost">Durasi Ngekost</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="no_transaksi" value="{{ $item->no_transaksi }}" id="no_transaksi" disabled>
                                                                            @error('no_transaksi')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="durasi_ngekost" value="{{ $item->durasi_ngekost }}" id="durasi_ngekost" disabled>
                                                                            @error('durasi_ngekost')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Status Transaksi">Status Transaksi</label>
                                                                </div>
                                                                <div class="col-6 text-start mt-3">
                                                                    <label for="Pesan Transaksi">Pesan Transaksi</label>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="status" value="{{ $item->status }}" id="status" disabled>
                                                                            @error('status')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6" style="margin-top: -12px;">
                                                                    <div class="mt-3">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control" name="pesan" value="{{ $item->pesan }}" id="pesan" disabled>
                                                                            @error('pesan')
                                                                                {{ $message }}
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 text-start mt-3">
                                                                    <label for="Bukti Pembayaran">Bukti Pembayaran</label>
                                                                </div>
                                                                <div class="col-md-12 mt-1">
                                                                    <img src="{{ asset('uploadkamar/' . $item->bukti_tf) }}" class="rounded-1" style="width: 100%; height: 400px;">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer" style="height: 20px;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <form action="/reject/{{ $item->id }}" method="post" class="mx-1"> <!-- Menggunakan mx-1 untuk memberikan margin horizontal ke tombol -->
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Tolak</button>
                                        </form>
                                        <form action="/approve/{{ $item->id }}" class="mx-1"> <!-- Menggunakan mx-1 untuk memberikan margin horizontal ke tombol -->
                                            @csrf
                                            <button class="btn btn-success">Approve</button>
                                        </form>
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
                    <h1 class="fw-medium fs-3">Belum Ada Data Transaksi</h1>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

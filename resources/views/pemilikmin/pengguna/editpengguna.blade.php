@extends('layouts.admin.app')

@section('title', 'Lihat Detail')

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
            animation: zoom 4s infinite alternate;
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
                    <h4 class="fw-semibold mb-8">Data User</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Data User</li>
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
    <div class="row">
        <div class="col-12" x-data="{ filter: 'Daftar Alamat' }">
            <!-- ----------------------------------------- -->
            <!-- 1. Basic Form -->
            <!-- ----------------------------------------- -->
            <!-- -------------------->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-0 mt-md-0">
                            <a href="{{ route('pengguna') }}" class="btn btn-primary mb-3 align-items-center"><i class="ti ti-user text-white me-1 fs-5"></i> Lihat User</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2">
                            <img src="{{ asset($users->gambar ? 'uploadkamar/' . $users->gambar : '/img/customer1.jpg') }}" class="rounded-1" style="width: 160px; height: 180px;" />
                            <input type="text" class="form-control" name="status" id="status" value="{{ $users->status }}" style="width: 100px; height: 26px; color: black; border-radius: 10px; background-color: #d7aefb; margin-top: -40px; align-items: center; margin-left: 30px; position: absolute;" readonly>
                            @error('status')
                                {{ $message }}
                            @enderror
                            {{-- <img src="{{ asset('uploadkamar/' . $users->gambar) }}" class="rounded-1" style="width: 300px; height: 180px;"> --}}
                        </div>
                        <input type="hidden" name="id" value="{{ $users->id }}">
                        <div class="col-5 text-start" style="margin-top: -6px;">
                            <label for="" class="mt-4" style="color: black;">Email User</label>
                            <div class="mt-0">
                                <div class="form-group">
                                    <input type="email" class="form-control" maxlength="20" name="email" id="email" value="{{ $users->email }}" readonly>
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <label for="" class="mt-4" style="color: black;">Nama Lengkap User</label>
                            <div class="mt-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" maxlength="30 \" id="name" value="{{ $users->name }}" readonly>
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="col-5 text-start" style="margin-top: -6px;">
                            <label for="" class="mt-4" style="color: black;">Nomer Handphone User</label>
                            <div class="mt-0">
                                <div class="form-group">
                                    <input type="number" class="form-control" min="0" oninput="limitLength(this, 12)" name="nomorhp" id="nomorhp" value="{{ $users->nomorhp }}" readonly>
                                    @error('nomorhp')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <label for="" class="mt-4" style="color: black;">Lokasi User</label>
                            <div class="mt-0">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="lokasi" maxlength="50" id="lokasi" value="{{ $users->lokasi }}" readonly>
                                    @error('lokasi')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="btn-group col-12" role="group">
                            <button class="btn filter-btn rounded-0 col-4" x-on:click="filter = 'Daftar Alamat'" :class="filter == 'Daftar Alamat' ? 'btn-secondary' : 'btn-light'" style="border-bottom: 1px solid #49BEFF;">Daftar Alamat</button>
                            <button class="btn filter-btn rounded-0 col-4" x-on:click="filter = 'History Penyewaan Kamar'" :class="filter == 'History Penyewaan Kamar' ? 'btn-secondary' : 'btn-light'" style="border-bottom: 1px solid #49BEFF;">History Penyewaan Kamar</button>
                            @if ($users->status != 'Pengguna')
                                <button class="btn filter-btn rounded-0 col-4" x-on:click="filter = 'Data Diri User'" :class="filter == 'Data Diri User' ? 'btn-secondary' : 'btn-light'" style="border-bottom: 1px solid #49BEFF;">Data Diri User</button>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12" x-show="filter == 'Daftar Alamat'">
                            <h1 class="fw-semibold fs-3">Alamat User</h1>
                        </div>
                        <div class="col-12" x-show="filter == 'History Penyewaan Kamar'">
                            <h1 class="fw-semibold fs-3">History Penyewaan Kamar User</h1>
                        </div>
                        <div class="col-12" x-show="filter == 'Data Diri User'">
                            <h1 class="fw-semibold fs-3">Data Diri User User</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('scripts')
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @endpush

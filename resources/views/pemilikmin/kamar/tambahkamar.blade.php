@extends('layouts.admin.app')

@section('title', 'Tambah Kamar')

@section('styles')
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Tambah Kamar</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Tambah Kamar</li>
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
        <div class="col-12">
            <!-- ----------------------------------------- -->
            <!-- 1. Basic Form -->
            <!-- ----------------------------------------- -->
            <!-- -------------------->
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-xl-9 text-end d-flex justify-content-md-end justify-content-center mt-3 mt-md-0">
                            <a href="{{ route('kamar') }}" class="btn btn-primary mb-3 align-items-center"><i class="ti ti-door text-white me-1 fs-5"></i> Data Kamar</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <h5 class="mb-3 fw-semibold">Tambah Kamar</h5>
                        </div>
                    </div>
                    <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <label class="mt-2" for="Gambar">Gambar Kost</label>
                                <div class="mt-1">
                                    <input class="form-control" type="file" name="gambar_kost" id="gambar_kost" value="{{ old('gambar_kost') }}">
                                    @error('gambar_kost')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mt-2" for="Kategori">Kategori Kost</label>
                                <div class="mt-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="kategori_kost" id="kategori_kost" placeholder="Masukkan Kategori Kost" value="{{ old('kategori_kost') }}">
                                        @error('kategori_kost')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mt-2" for="Harga">Harga Kost</label>
                                <div class="mt-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="harga_kost" id="harga_kost" placeholder="Masukkan Harga Kost" value="{{ old('harga_kost') }}">
                                        @error('harga_kost')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="mt-2" for="Lokasi">Lokasi Kost</label>
                                <div class="mt-1">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lokasi_kost" id="lokasi_kost" placeholder="Masukkan Lokasi Kost" value="{{ old('lokasi_kost') }}">
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
                                        <input type="text" class="form-control" name="ukuran_kost" id="ukuran_kost" placeholder="Masukkan Ukuran Kost" value="{{ old('ukuran_kost') }}">
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
                                        <select class="form-select" id="tipe_kost" name="tipe_kost" value="{{ old('tipe_kost') }}">
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
                                <label class="mt-2" for="Status">Status Kost</label>
                                <div class="mt-1">
                                    <div class="input-group">
                                        {{-- <label class="input-group-text" for="inputGroupSelect01">Status Kost</label> --}}
                                        <select class="form-select" id="status_kost" name="status_kost" value="{{ old('status_kost') }}">
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
                            <div class="col-12 text-center">
                                <div class="align-items-center mt-3">
                                    <div class="ms-auto mt-3 mt-md-0">
                                        <button type="submit" class="btn btn-info font-medium rounded-pill">
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
        @endsection

        @push('scripts')
        @endpush

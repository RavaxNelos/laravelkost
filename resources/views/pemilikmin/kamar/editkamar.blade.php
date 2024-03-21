@extends('layouts.admin.app')

@section('title', 'Edit Kamar')

@section('styles')
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Edit Kamar</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Edit Kamar</li>
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
                            <h5 class="mb-3 fw-semibold">Edit Kamar</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('uploadkamar/' . $kamarkost->gambar_kost) }}" class="rounded-1" style="width: 300px; height: 180px;">
                    </div>
                    <form action="/pemilikmin/editkamar" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{ $kamarkost->id }}">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input class="form-control" type="file" name="gambar_kost" value="{{ $kamarkost->gambar_kost }}" id="gambar_kost">
                                    @error('gambar_kost')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="kategori_kost" value="{{ $kamarkost->kategori_kost }}" id="kategori_kost" placeholder="Masukkan Kategori Kost">
                                        @error('ketegori_kost')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="harga_kost" value="{{ $kamarkost->harga_kost }}" id="harga_kost" placeholder="Masukkan Harga Kost">
                                        @error('harga_kost')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lokasi_kost" value="{{ $kamarkost->lokasi_kost }}" id="lokasi_kost" placeholder="Masukkan Lokasi Kost">
                                        @error('lokasi_kost')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="ukuran_kost" value="{{ $kamarkost->ukuran_kost }}" id="ukuran_kost" placeholder="Masukkan Ukuran Kost">
                                        @error('ukuran_kost')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="input-group">
                                        <label class="input-group-text" for="inputGroupSelect01">Tipe Kost</label>
                                        <select class="form-select" id="tipe_kost" name="tipe_kost">
                                            <option value="Bulanan" {{ $kamarkost->tipe_kost == 'Bulanan' ? 'selected' : '' }}>Bulanan</option>
                                            <option value="Harian" {{ $kamarkost->tipe_kost == 'Harian' ? 'selected' : '' }}>Harian</option>
                                            @error('tipe_kost')
                                                {{ $message }}
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="status_kost" value="{{ $kamarkost->status_kost }}" id="status_kost" placeholder="Masukkan Status Kost">
                                        @error('status_kost')
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
        @endsection

        @push('scripts')
        @endpush

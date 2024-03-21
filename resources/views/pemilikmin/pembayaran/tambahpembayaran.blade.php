@extends('layouts.admin.app')

@section('title', 'Tambah Pembayaran')

@section('styles')
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Tambah Metode Pembayaran</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Tambah Metode Pembayaran</li>
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
                            <a href="{{ route('bayar') }}" class="btn btn-primary mb-3 align-items-center"><i class="ti ti-coin text-white me-1 fs-5"></i> Data Metode Pembayaran</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <h5 class="mb-3 fw-semibold">Tambah Metode Pembayaran</h5>
                        </div>
                    </div>
                    <form action="{{ route('pembayaran.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Metode Pembayaran</label>
                                        <select class="form-select" id="nama_pembayaran" name="nama_pembayaran">
                                            <option selected>Pilih Nama Pembayaran...</option>
                                            <option value="Bank BRI">Bank BRI</option>
                                            <option value="Bank BCA">Bank BCA</option>
                                            <option value="Visa">Visa</option>
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
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <input class="form-control" type="file" name="logo_pembayaran" id="logo_pembayaran" value="{{ old('logo_pembayaran') }}">
                                    @error('logo_pembayaran')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="inputGroupSelect01">Kategori Pembayaran</label>
                                        <select class="form-select" id="kategori_pembayaran" name="kategori_pembayaran">
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
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="nomer_pembayaran" id="nomer_pembayaran" placeholder="Masukkan nomer pembayaran" value="{{ old('nomer_pembayaran') }}">
                                        @error('nomer_pembayaran')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="atasnama_pembayaran" id="atasnama_pembayaran" placeholder="Masukkan atasnama pembayaran">
                                        @error('atasnama_pembayaran')
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

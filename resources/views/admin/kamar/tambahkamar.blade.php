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
                    <h5 class="mb-3">Tambah Kamar</h5>
                    <a href="{{ route('kamar') }}" class="btn btn-primary mb-3">Data Kamar</a>
                    <form action="{{ route('kamar.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <form class="mt-3">
                                    <input class="form-control" type="file" name="gambar_kost" id="gambar_kost">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="mt-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="nama_kost" id="nama_kost" placeholder="Masukkan Nama Kost">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="harga_kost" id="harga_kost" placeholder="Masukkan Harga Kost">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="lokasi_kost" id="lokasi_kost" placeholder="Masukkan Lokasi Kost">
                                    </div>
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form class="mt-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="ukuran_kost" id="ukuran_kost" placeholder="Masukkan Ukuran Kost">
                                    </div>
                                </form>
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

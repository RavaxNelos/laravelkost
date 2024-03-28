@extends('layouts.admin.app')

@section('title', 'Edit Pembayaran')

@section('styles')
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">Pengguna</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted text-decoration-none" href="./index.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Pengguna</li>
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
                            <a href="{{ route('pengguna') }}" class="btn btn-primary mb-3 align-items-center"><i class="ti ti-coin text-white me-1 fs-5"></i> Data Pengguna</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <h5 class="mb-3 fw-semibold">Detail Pengguna</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('uploadkamar/' . $users->gambar) }}" class="rounded-1" style="width: 300px; height: 180px;">
                    </div>
                    <input type="hidden" name="id" value="{{ $users->id }}">
                    <div class="row">

                    </div>
                </div>
            </div>
        @endsection

        @push('scripts')
        @endpush

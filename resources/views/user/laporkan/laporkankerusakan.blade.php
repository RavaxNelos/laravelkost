<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporkan Kerusakan</title>
    <link rel="stylesheet" href="{{ asset('css/usercss/laporkankerusakan.css') }}">
    <!-- end css rava -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- end font google -->
    <!-- iconbootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- end iconbootstrap -->
    <!-- alphine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- end alphine js -->
    <!-- splide js -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- end splide js -->
    <!-- font awoseme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- end font awoseme -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <style>
        * {
            font-family: 'Ubuntu', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        .input-nama:focus {
            border: 1px solid red !important;
            /* Ganti #000 dengan warna yang Anda inginkan */
        }

        .form-control:focus {
            border-color: #dbdada;
            box-shadow: none;
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-top: 4px;
            vertical-align: 1.255em;
            content: "";
            border-top: 0.6em solid;
            border-right: 0.6em solid transparent;
            border-bottom: 0;
            border-left: 0.6em solid transparent;
            color: white;
        }

        .dropdown-menu {
            --bs-dropdown-zindex: 1000;
            --bs-dropdown-min-width: 19.3rem;
            --bs-dropdown-padding-x: 0;
            --bs-dropdown-padding-y: 0.5rem;
            --bs-dropdown-spacer: 0.125rem;
            --bs-dropdown-font-size: 1rem;
            --bs-dropdown-color: var(--bs-body-color);
            --bs-dropdown-bg: var(--bs-body-bg);
            --bs-dropdown-border-color: var(--bs-border-color-translucent);
            --bs-dropdown-border-radius: var(--bs-border-radius);
            --bs-dropdown-border-width: var(--bs-border-width);
            --bs-dropdown-inner-border-radius: calc(var(--bs-border-radius) - var(--bs-border-width));
            --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
            --bs-dropdown-divider-margin-y: 0.5rem;
            --bs-dropdown-box-shadow: var(--bs-box-shadow);
            --bs-dropdown-link-color: var(--bs-body-color);
            --bs-dropdown-link-hover-color: var(--bs-body-color);
            --bs-dropdown-link-hover-bg: var(--bs-tertiary-bg);
            --bs-dropdown-link-active-color: black;
            --bs-dropdown-link-active-bg: gray;
            --bs-dropdown-link-disabled-color: var(--bs-tertiary-color);
            --bs-dropdown-item-padding-x: 1rem;
            --bs-dropdown-item-padding-y: 0.25rem;
            --bs-dropdown-header-color: #6c757d;
            --bs-dropdown-header-padding-x: 1rem;
            --bs-dropdown-header-padding-y: 0.5rem;
            position: absolute;
            z-index: var(--bs-dropdown-zindex);
            display: none;
            min-width: var(--bs-dropdown-min-width);
            padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
            margin: 0;
            font-size: var(--bs-dropdown-font-size);
            color: var(--bs-dropdown-color);
            text-align: left;
            list-style: none;
            background-color: var(--bs-dropdown-bg);
            background-clip: padding-box;
            border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
            border-radius: var(--bs-dropdown-border-radius);
        }

        #tombol:disabled {
            opacity: 0.7 !important;
            border: none;
            background: rgb(149, 148, 148) !important;
            color: white;
            height: 36px;
        }


        .py-3 {
            padding-bottom: 0.5rem !important;
        }
    </style>
</head>

<body>
    <div class="sticky-bottom">
        <nav class="nav">
            <a href="{{ asset('/user/home') }}" class="nav__link">
                <i class="bi bi-house-door"></i>
                <span class="nav__text">Beranda</span>
            </a>
            <a href="{{ asset('/user/kamar') }}" class="nav__link">
                <i class="bi bi-door-closed"></i>
                <span class="nav__text">Kamar</span>
            </a>
            <div class="nav__link nav-active" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-chat-dots-fill"></i>
                <span class="nav__text">Lapor</span>
            </div>
            <a href="{{ asset('/user/riwayat') }}" class="nav__link">
                <i class="bi bi-clock"></i>
                <span class="nav__text">Riwayat</span>
            </a>
            <a href="{{ asset('/user/profil') }}" class="nav__link">
                <i class="bi bi-person"></i>
                <span class="nav__text">Profil</span>
            </a>
        </nav>
    </div>
    @if ($kamar_kost)
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="margin-top: 31rem; margin-left: 4rem; width: 210px;">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <a href="/user/kerusakan/{{ $users->id }}" class="kerusakan fw-medium"><i class="bi bi-exclamation-triangle-fill"></i> Laporkan Kerusakan</a>
                            </div>
                            <hr class="garis-pembatas-laporkan" style="border-top: 1px solid #ccc; margin-top: 10px;">
                            <div class="col-12" style="margin-top: -10px">
                                <a href="/user/kehilangan/{{ $users->id }}" class="kehilangan fw-medium"><i class='bx bxs-search-alt-2'></i> Laporkan Kehilangan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section x-data="{ filter: 'form' }">
            <div class="sticky-top" id="stickyHeader">
                <div class="container py-2" style="background-color: white;">
                    <div class="row">
                        <div class="col-12 text-start mt-2">
                            <h3 class="text-dark fw-semibold teks-kerusakan" style="font-size: 16px; transition: color 0.3s ease;">Laporan Kerusakan</h3>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="garis-1">
            <div class="container">
                <div class="row" style="margin-top: -16px;">
                    <div class="col-6 text-center" style="margin-left: -12px;">
                        <button :class="filter == 'form' ? 'btn-active' : 'btn-non-aktif'" x-on:click="filter = 'form';">Form Laporan</button>
                    </div>
                    <div class="col-6 text-center" style="margin-left: 0px;">
                        <button :class="filter == 'riwayat' ? 'btn-active' : 'btn-non-aktif'" x-on:click="filter = 'riwayat';">Riwayat Laporan</button>
                    </div>
                </div>
            </div>
            <hr class="garis-2">
            <div x-show="filter == 'form'">
                <div class="container">
                    <div class="card-laporkan-kerusakan">
                        <form action="/user/kerusakan/admin" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="container mt-3">
                                <div class="row">
                                    <div class="col-12 text-start">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Nama User</h3>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="input-nama" name="name" id="name" value="{{ $users->name }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">No. Kamar</h3>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" class="input-nama" name="nomer_kost" id="nomer_kost" value="Kamar No. {{ $kamar_kost->nomer_kost }}" disabled>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Tanggal Laporan<span class="wajib">*</span></h3>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="date" class="form-control" id="tanggal" name="tanggal_lapor" style="border: 1px solid rgb(187, 0, 255); border-top-leftradius: 4px; border-bottom-left-radius: 4px;" placeholder="Masukkan tanggal laporan" id="datepicker">
                                            <span class="input-group-text" style="border: 1px solid rgb(187, 0, 255); border-top-right-radius: 4px; border-bottom-right-radius: 4px; background: linear-gradient(45deg, #9c27b0, #673ab7, #3f51b5); color: white;" onclick="showDatePicker()">
                                                <i class="bi bi-calendar"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Apa Yang Rusak?<span class="wajib">*</span></h3>
                                    </div>
                                    <div class="col-9 text-start">
                                        <input type="text" id="barang" name="barang_rusak" class="input-kerusakan" placeholder="Barang yang mengalami kerusakan">
                                    </div>
                                    <div class="col-3 text-end">
                                        <div class="dropdown">
                                            <button class="btn-dropdown-kerusakan dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            </button>
                                            <ul class="dropdown-menu" id="barangDropdown">
                                                <li><a class="dropdown-item" href="#" onclick="updateInput('Kasur')">Kasur</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="updateInput('Lampu Kamar')">Lampu Kamar</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="updateInput('Pintu Kamar')">Pintu Kamar</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="updateInput('Jendela Kamar')">Jendela Kamar</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="updateInput('Lantai Kamar')">Lantai Kamar</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="updateInput('AC Kamar')">AC Kamar</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="updateInput('Kulkas')">Kulkas</a></li>
                                                <li><a class="dropdown-item" href="#" onclick="showTextInput()">Lainnya</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Unggah Foto<span class="wajib">*</span></h3>
                                    </div>
                                    <div class="form-item third">
                                        <div class="for-uploadFoto">
                                            <div class="uploadFoto">
                                            </div>
                                            <button type="button" id="addInput" class="btn add">
                                                <i class="bi bi-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 text-start">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Keterangan <span class="wajib">*</span></h3>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="keterangan" id="keterangan" placeholder="Tambahkan keterangan kamu" class="textarea-keterangan"></textarea>
                                    </div>
                                </div>
                            </div>
                            <hr class="kirim-laporan" style="border-top: 1px solid #ccc">
                            <div class="container text-center">
                                <button type="submit" class="fw-medium rounded-pill" style="border-radius: 50px; width: 170px;" id="tombol">Kirim Laporan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <hr class="hr-1">
            </div>
            <div class="container" x-show="filter == 'riwayat'">
                @if ($kerusakan->isEmpty())
                    <!-- Tampilkan ilustrasi kosong atau pesan bahwa tidak ada data -->
                    <div class="col-12 text-center" style="margin-top: 8rem;">
                        <img src="{{ asset('img/chat.png') }}" width="180" height="180">
                    </div>
                    <div class="col-12 text-center">
                        <p class="fw-normal" style="font-size: 14px;">Belum Ada Data Laporkan Kerusakan</p>
                    </div>
                @else
                    <!-- Tampilan ada data dari laporkan kehilangan -->
                    <div class="card-custom" style="width: 100%; height: auto; border-radius: 10px; background-color: gray; margin-bottom: 5rem;">
                        <div class="container py-3">
                            @foreach ($kerusakan as $laporkerusakan)
                                <div class="card-custom-list" data-bs-toggle="modal" data-bs-target="#detailriwayat-{{ $laporkerusakan->id }}">
                                    <div class="container py-2">
                                        <div class="row">
                                            <div class="col-3 text-start">
                                                <h3 class="fw-medium text-secondary" style="font-size: 14px; width: 200px;">Nama User</h3>
                                            </div>
                                            <div class="col-9 text-end">
                                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ $users->name }}</h3>
                                            </div>
                                            <div class="col-5 text-start" style="margin-top: -4px;">
                                                <h3 class="fw-medium text-secondary" style="font-size: 14px;">No. Kamar</h3>
                                            </div>
                                            <div class="col-7 text-end" style="margin-top: -4px;">
                                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">Kamar No.{{ $kamar_kost->nomer_kost }}</h3>
                                            </div>
                                            <div class="col-6 text-start" style="margin-top: -4px;">
                                                <h3 class="fw-medium text-secondary" style="font-size: 14px;">Tanggal Kerusakan</h3>
                                            </div>
                                            <div class="col-6 text-end" style="margin-top: -4px;">
                                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ Carbon\Carbon::parse($laporkerusakan->tanggal_lapor)->locale('id')->isoFormat('DD MMMM Y') }}</h3>
                                            </div>
                                            <div class="col-6 text-start" style="margin-top: -4px;">
                                                <h3 class="fw-medium text-secondary" style="font-size: 14px;">Yang Rusak</h3>
                                            </div>
                                            <div class="col-6 text-end" style="margin-top: -4px;">
                                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ $laporkerusakan?->barang_rusak }}</h3>
                                            </div>
                                            <div class="col-3 text-start" style="margin-top: -4px;">
                                                <h3 class="fw-medium text-secondary" style="font-size: 14px; width: 200px;">Status Laporan</h3>
                                            </div>
                                            <div class="col-9 text-end" style="margin-top: -4px;">
                                                <h3 class="fw-medium text-{{ $laporkerusakan?->status == 'Menunggu Respon' ? 'warning' : ($laporkerusakan?->status == 'Laporan Diterima' ? 'success' : 'danger') }}" style="font-size: 14px; color: #333333;">{{ $laporkerusakan?->status == 'Menunggu Respon' ? 'Menunggu Respon' : ($laporkerusakan?->status == 'Laporan Diterima' ? 'Laporan Diterima' : 'Laporan Ditolak') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="detailriwayat-{{ $laporkerusakan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content"style="width: 100%; height: auto;">
                                            <div class="modal-header">
                                                <h1 class="modal-title fw-semibold" id="exampleModalLabel" style="font-size: 16px;">Detail Laporkan Kerusakan</h1>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{ $laporkerusakan->id }}">
                                                <div class="row">
                                                    <div class="col-4 text-start">
                                                        <h3 style="font-size: 14px;" class="fw-medium text-secondary">Nama User</h3>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <h3 style="font-size: 14px;" class="fw-medium text-secondary-emphasis">{{ $users->name }}</h3>
                                                    </div>
                                                    <div class="col-4 text-start">
                                                        <h3 style="font-size: 14px; width: 200px;" class="fw-medium text-secondary">Nomer Kamar</h3>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <h3 style="font-size: 14px;" class="fw-medium text-secondary-emphasis">Kamar No.{{ $kamar_kost->nomer_kost }}</h3>
                                                    </div>
                                                    <div class="col-4 text-start">
                                                        <h3 style="font-size: 14px; width: 200px;" class="fw-medium text-secondary">Tanggal Lapor Kerusakan</h3>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <h3 style="font-size: 14px;" class="fw-medium text-secondary-emphasis">{{ Carbon\Carbon::parse($laporkerusakan->tanggal_lapor)->locale('id')->isoFormat('DD MMMM Y') }}</h3>
                                                    </div>
                                                    <div class="col-4 text-start">
                                                        <h3 style="font-size: 14px; width: 200px;" class="fw-medium text-secondary">Barang Yang Rusak</h3>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <h3 style="font-size: 14px;" class="fw-medium text-secondary-emphasis">{{ $laporkerusakan->barang_rusak }}</h3>
                                                    </div>
                                                    <div class="col-4 text-start">
                                                        <h3 style="font-size: 14px; width: 200px;" class="fw-medium text-secondary">Status Laporan</h3>
                                                    </div>
                                                    <div class="col-8 text-end">
                                                        <h3 style="font-size: 14px;" class="fw-medium text-{{ $laporkerusakan->status == 'Menunggu Respon' ? 'warning' : ($laporkerusakan->status == 'Laporan Diterima' ? 'success' : 'danger') }}" style="font-size: 14px; color: #333333;">{{ $laporkerusakan->status == 'Menunggu Respon' ? 'Menunggu Respon' : ($laporkerusakan->status == 'Laporan Diterima' ? 'Laporan Diterima' : 'Laporan Ditolak') }}</h3>
                                                    </div>
                                                    <div class="col-12 text-start">
                                                        <h3 style="font-size: 14px; width: 200px;" class="fw-medium text-secondary">Gambar Kerusakan</h3>
                                                    </div>
                                                    <div class="col-3">
                                                        @isset($laporkerusakan->gambarkerusakan->input1)
                                                            <img src="{{ asset('uploadkamar/' . $laporkerusakan->gambarkerusakan->input1) }}" style="border-radius: 6px; width: 70px; height: 70px;" data-bs-target="#detailgambar1-{{ $laporkerusakan->gambarkerusakan->id }}" data-bs-toggle="modal">
                                                        @endisset
                                                    </div>
                                                    <div class="col-3" style="margin-left: -3.6px;">
                                                        @isset($laporkerusakan->gambarkerusakan->input2)
                                                            <img src="{{ asset('uploadkamar/' . $laporkerusakan->gambarkerusakan->input2) }}" style="border-radius: 6px; width: 70px; height: 70px;" data-bs-target="#detailgambar2-{{ $laporkerusakan->gambarkerusakan->id }}" data-bs-toggle="modal">
                                                        @endisset
                                                    </div>
                                                    <div class="col-3" style="margin-left: -3.6px;">
                                                        @isset($laporkerusakan->gambarkerusakan->input3)
                                                            <img src="{{ asset('uploadkamar/' . $laporkerusakan->gambarkerusakan->input3) }}" style="border-radius: 6px; width: 70px; height: 70px;" data-bs-target="#detailgambar3-{{ $laporkerusakan->gambarkerusakan->id }}" data-bs-toggle="modal">
                                                        @endisset
                                                    </div>
                                                    <div class="col-3" style="margin-left: -3.6px;">
                                                        @isset($laporkerusakan->gambarkerusakan->input4)
                                                            <img src="{{ asset('uploadkamar/' . $laporkerusakan->gambarkerusakan->input4) }}" style="border-radius: 6px; width: 70px; height: 70px;" data-bs-target="#detailgambar4-{{ $laporkerusakan->gambarkerusakan->id }}" data-bs-toggle="modal">
                                                        @endisset
                                                    </div>
                                                    <div class="col-12 text-start mt-2">
                                                        <h3 style="font-size: 14px; width: 200px;" class="fw-medium text-secondary">Keterangan</h3>
                                                    </div>
                                                    <div class="col-12 text-start">
                                                        <textarea name="keterangan" id="keterangan" rows="3" style="width: 100%; resize: none; padding: 10px;" readonly>{{ $laporkerusakan->keterangan }}</textarea>
                                                    </div>
                                                    <div class="col-12 text-start mt-2">
                                                        <h3 style="font-size: 14px; width: 200px;" class="fw-medium text-secondary">Respon Dari Admin</h3>
                                                    </div>
                                                    <div class="col-12 text-start">
                                                        <textarea name="respon" id="respon" rows="3" style="width: 100%; resize: none; padding: 10px;" readonly>{{ $laporkerusakan->respon }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="detailgambar1-{{ $laporkerusakan->gambarkerusakan->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Gambar Kerusakan</h1>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{ $laporkerusakan->gambarkerusakan->id }}">
                                                <div class="container">
                                                    <img src="{{ asset('uploadkamar/' . $laporkerusakan->gambarkerusakan->input1) }}" style="border-radius: 6px; width: 100%; height: 200px;">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailriwayat-{{ $laporkerusakan->id }}">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="detailgambar2-{{ $laporkerusakan->gambarkerusakan->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Gambar Kerusakan</h1>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{ $laporkerusakan->gambarkerusakan->id }}">
                                                <div class="container">
                                                    <img src="{{ asset('uploadkamar/' . $laporkerusakan->gambarkerusakan->input2) }}" style="border-radius: 6px; width: 100%; height: 200px;">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailriwayat-{{ $laporkerusakan->id }}">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="detailgambar3-{{ $laporkerusakan->gambarkerusakan->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Gambar Kerusakan</h1>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{ $laporkerusakan->gambarkerusakan->id }}">
                                                <div class="container">
                                                    <img src="{{ asset('uploadkamar/' . $laporkerusakan->gambarkerusakan->input3) }}" style="border-radius: 6px; width: 100%; height: 200px;">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailriwayat-{{ $laporkerusakan->id }}">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="detailgambar4-{{ $laporkerusakan->gambarkerusakan->id }}" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Gambar Kerusakan</h1>
                                            </div>
                                            <div class="modal-body">
                                                <input type="hidden" name="id" value="{{ $laporkerusakan->gambarkerusakan->id }}">
                                                <div class="container">
                                                    <img src="{{ asset('uploadkamar/' . $laporkerusakan->gambarkerusakan->input4) }}" style="border-radius: 6px; width: 100%; height: 200px;">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#detailriwayat-{{ $laporkerusakan->id }}">Kembali</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>
        </section>
    @else
        <!-- Tampilkan ilustrasi kosong -->
        <div class="container text-center" style="margin-top: 200px;">
            <img src="{{ asset('img/planet.png') }}" alt="Ilustrasi Kosong" width="150">
            <p class="text-muted mt-3">Anda Belum Booking Kamar Kost.</p>
            <form action="/user/home" style="margin-top: -10px;">
                <button class="btn btn-info">Silahkan Booking Kamar Dulu</button>
            </form>
        </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const inputElement = document.getElementById('tanggal');
        const inputIsi = document.getElementById('barang');
        const inputKeterangan = document.getElementById('keterangan');
        const imageContainer = document.querySelector('.form-item.third');
        const submitButton = document.getElementById('tombol');

        window.onload = function() {
            checkValidation();
        };

        inputElement.addEventListener('input', function() {
            checkValidation();
        });

        imageContainer.addEventListener('DOMSubtreeModified', function() {
            checkValidation();
        });

        document.addEventListener('DOMContentLoaded', function() {
            const uploadContainer = document.querySelector('.uploadFoto');
            const addInputButton = document.getElementById('addInput');
            let inputCount = 0;

            // addInputButton.style.display = 'none';

            function checkInputs() {
                const inputs = uploadContainer.querySelectorAll('.untuk-file');
                let allInputsFilled = true;
                inputs.forEach(input => {
                    if (!input.files[0]) {
                        allInputsFilled = false;
                    }
                });

                if (allInputsFilled && inputCount < 4) {
                    addInputButton.disabled = false;
                } else {
                    addInputButton.disabled = true;
                }
            }

            uploadContainer.addEventListener('change', function(event) {
                if (event.target && event.target.classList.contains('untuk-file')) {
                    const fileInput = event.target;
                    const file = fileInput.files[0];
                    const targetLabel = fileInput.parentElement.querySelector('.labelFile');

                    if (targetLabel && file) {
                        const img = document.createElement('img');
                        img.src = URL.createObjectURL(file);

                        targetLabel.style.display = 'none';
                        targetLabel.parentElement.appendChild(img);

                        const deleteButton = document.createElement('button');
                        deleteButton.classList.add('button-delete');
                        deleteButton.innerHTML = '<i class="bi bi-trash3"></i>';
                        deleteButton.addEventListener('click', function() {
                            const parentDiv = fileInput.closest('.uploadFoto-item');
                            parentDiv.remove();
                            inputCount--;
                            acselatarion();
                            checkInputs();
                            addInputButton.style.display = 'block';
                        });
                        targetLabel.parentElement.appendChild(deleteButton);

                        if (inputCount < 4) {
                            addInputButton.style.display = 'block';
                        }
                    }

                    if (inputCount === 4) {
                        addInputButton.style.display = 'none';
                    }

                    checkInputs();
                }
            });

            addInputButton.addEventListener('click', function() {
                if (inputCount < 4) {
                    const newInputDiv = document.createElement('div');
                    newInputDiv.classList.add('uploadFoto-item');
                    newInputDiv.innerHTML = `
                <input type="file" id="files${inputCount + 1}" name="input${inputCount + 1}" class="form-control untuk-file" accept="image/*">
                <div class="input-area">
                    <label for="files${inputCount + 1}" class="labelFile" id="labelku${inputCount + 1}">
                        <i class='bx bx-cloud-upload'></i>
                    </label>
                </div>`;
                    uploadContainer.appendChild(newInputDiv);

                    inputCount++;

                    if (inputCount === 4) {
                        addInputButton.style.display = 'none';
                    }

                    checkInputs();
                }
            });


            function acselatarion() {
                const inputs = uploadContainer.querySelectorAll('.untuk-file');
                inputs.forEach((input, index) => {
                    input.id = `files${index + 1}`;
                    input.name = `input${index + 1}`;
                    const label = input.parentElement.querySelector('.labelFile');
                    label.setAttribute('for', `files${index + 1}`);
                });
            }
        });

        window.addEventListener('scroll', function() {
            var header = document.getElementById('stickyHeader');
            var scrollPosition = window.scrollY;

            // Tambahkan atau hapus kelas CSS 'scrolled' berdasarkan posisi scroll
            if (scrollPosition > 0) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        function updateInput(selectedValue) {
            document.querySelector('.input-kerusakan').value = selectedValue;
        }

        function showTextInput() {
            var inputElement = document.getElementById("barang_rusak");
            inputElement.removeAttribute("disabled");
            inputElement.focus();
        }

        function checkValidation() {
            if (inputElement.value !== '' && inputIsi.value !== '' && inputKeterangan.value !== '' && imageContainer.getElementsByTagName('img').length > 0) {
                submitButton.removeAttribute('disabled');
                submitButton.classList.add('active');
            } else {
                submitButton.setAttribute('disabled', 'disabled');
                submitButton.classList.remove('active');
                submitButton.classList.add('disabled');
            }
        }
    </script>
    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ Session::get('success') }}',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000 // Waktu penampilan Sweet Alert (dalam milidetik)
            });
        </script>
    @endif
    <script>
        function showDatePicker() {
            // Dapatkan input tanggal
            var inputTanggal = document.getElementById('tanggal');

            // Munculkan pemilih tanggal
            inputTanggal.click();
        }
    </script>
</body>

</html>

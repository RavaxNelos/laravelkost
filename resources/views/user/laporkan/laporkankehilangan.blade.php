<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kehilangan</title>
    <link rel="stylesheet" href="{{ asset('css/usercss/laporkankehilangan.css') }}">
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
                            <h3 class="text-dark fw-semibold teks-kehilangan" style="font-size: 16px; transition: color 0.3s ease;">Laporan Kehilangan</h3>
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
            <div class="container" x-show="filter == 'form'">
                <div class="card-laporkan-kehilangan">
                    <form action="/user/kehilangan/admin" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{ $kamar_kost->id }}" name="id">
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
                                    <input type="text" class="input-nama" name="nomer_kost" id="nomer_kost" value="Kamar No.{{ $kamar_kost->nomer_kost }}" disabled>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium text-secondary" style="font-size: 14px;">Lokasi Kehilangan<span class="wajib">*</span></h3>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="input-nama" name="lokasi_hilang" id="lokasi_hilang">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium text-secondary" style="font-size: 14px;">Apa Yang Hilang?<span class="wajib">*</span></h3>
                                </div>
                                <div class="col-9 text-start">
                                    <input type="text" id="inputKerusakan" class="input-kerusakan" name="barang_hilang" id="barang_hilang" placeholder="Pilih barang anda yang hilang">
                                </div>
                                <div class="col-3 text-end">
                                    <div class="dropdown">
                                        <button class="btn-dropdown-kerusakan dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        </button>
                                        <ul class="dropdown-menu" id="barangDropdown">
                                            <li><a class="dropdown-item" href="#" onclick="updateInput('Handphone')">Handphone</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateInput('Dompet')">Dompet</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateInput('Laptop')">Laptop</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateInput('Tablet')">Tablet</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateInput('Jam Tangan')">Jam Tangan</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateInput('Surat')">Surat</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="updateInput('Sandal/Sepatu')">Sandal/Sepatu</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="showTextInput()">Lainnya</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium text-secondary" style="font-size: 14px;">Tanggal Kehilangan<span class="wajib">*</span></h3>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="date" class="form-control" id="tanggal_hilang" name="tanggal_hilang" style="border: 1px solid rgb(187, 0, 255); border-top-leftradius: 4px; border-bottom-left-radius: 4px;">
                                        <span class="input-group-text" style="border: 1px solid rgb(187, 0, 255); border-top-right-radius: 4px; border-bottom-right-radius: 4px; background: linear-gradient(45deg, #9c27b0, #673ab7, #3f51b5); color: white;">
                                            <i class="bi bi-calendar"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium text-secondary" style="font-size: 14px;">Jam Kehilangan<span class="wajib">*</span></h3>
                                </div>
                                <div class="col-12">
                                    <div class="input-group">
                                        <input type="time" class="form-control" id="jam_hilang" name="jam_hilang" style="border: 1px solid rgb(187, 0, 255); border-top-leftradius: 4px; border-bottom-left-radius: 4px;">
                                        <span class="input-group-text" style="border: 1px solid rgb(187, 0, 255); border-top-right-radius: 4px; border-bottom-right-radius: 4px; background: linear-gradient(45deg, #9c27b0, #673ab7, #3f51b5); color: white">
                                            <i class="bi bi-clock"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium text-secondary" style="font-size: 14px;">Keterangan Tambahan<span class="wajib">*</span></h3>
                                </div>
                                <div class="col-12">
                                    <textarea name="keterangan" id="keterangan" placeholder="Tambahkan keterangan kamu" class="textarea-keterangan"></textarea>
                                </div>
                            </div>
                        </div>
                        <hr class="kirim-laporan" style="border-top: 1px solid #ccc">
                        <div class="container text-center">
                            <button type="submit" class="btn btn-dark" style="border-radius: 50px; width: 170px;" disabled id="submitButton">Kirim Laporan</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="container" x-show="filter == 'riwayat'">
                <div class="card-custom" style="width: 100%; height: auto; border-radius: 10px; background-color: gray;">
                    <div class="container py-3">
                        <div class="card-custom-list">
                            <div class="container py-2">
                                <div class="row">
                                    <div class="col-3 text-start">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px; width: 200px;">Nama User</h3>
                                    </div>
                                    <div class="col-9 text-end">
                                        <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ $users->name }}</h3>
                                    </div>
                                    <div class="col-5 text-start" style="margin-top: -6px;">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">No. Kamar</h3>
                                    </div>
                                    <div class="col-7 text-end" style="margin-top: -6px;">
                                        <h3 class="fw-medium" style="font-size: 14px; color: #333333;">Kamar No.{{ $kehilangan?->nomer_kamar }}</h3>
                                    </div>
                                    <div class="col-6 text-start" style="margin-top: -6px;">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Lokasi Kehilangan</h3>
                                    </div>
                                    <div class="col-6 text-end" style="margin-top: -6px;">
                                        <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ $kehilangan?->lokasi_hilang }}</h3>
                                    </div>
                                    <div class="col-6 text-start" style="margin-top: -6px;">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Yang Hilang</h3>
                                    </div>
                                    <div class="col-6 text-end" style="margin-top: -6px;">
                                        <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ $kehilangan?->barang_hilang }}</h3>
                                    </div>
                                    <div class="col-7 text-start" style="margin-top: -6px;">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Tanggal Kehilangan</h3>
                                    </div>
                                    <div class="col-5 text-end" style="margin-top: -6px;">
                                        <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ Carbon\Carbon::parse($kehilangan?->tanggal_hilang)->locale('id')->format('j F Y') }}</h3>
                                    </div>
                                    <div class="col-6 text-start" style="margin-top: -6px;">
                                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Jam Kehilangan</h3>
                                    </div>
                                    <div class="col-6 text-end" style="margin-top: -6px;">
                                        <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ $kehilangan?->jam_hilang }} WIB</h3>
                                    </div>
                                </div>
                                <hr class="hr-garis-card">
                                <div class="col-12 text-center">
                                    <h3 class="fw-medium" style="font-size: 14px; color: #9c27b0;">Selengkapnya</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr class="hr-1">
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
    <script>
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
            var inputElement = document.getElementById("inputKerusakan");
            inputElement.removeAttribute("disabled");
            inputElement.focus();
        }

        document.addEventListener('DOMContentLoaded', function() {
            var lokasiInput = document.querySelector('.input-nama');
            var barangHilangInput = document.querySelector('.input-kerusakan');
            var tanggalInput = document.querySelector('#tanggal_hilang');
            var jamInput = document.querySelector('#jam_hilang');
            var keteranganInput = document.querySelector('#keterangan');
            var submitButton = document.querySelector('#submitButton');

            var inputElements = [lokasiInput, barangHilangInput, tanggalInput, jamInput, keteranganInput];

            // Memantau setiap perubahan pada input
            inputElements.forEach(function(input) {
                input.addEventListener('input', checkInputs);
            });

            // Fungsi untuk memeriksa input
            function checkInputs() {
                var allInputsFilled = inputElements.every(function(input) {
                    return input.value.trim() !== '';
                });

                // Mengaktifkan atau menonaktifkan tombol berdasarkan status input
                submitButton.disabled = !allInputsFilled;
            }
        });
    </script>
</body>

</html>

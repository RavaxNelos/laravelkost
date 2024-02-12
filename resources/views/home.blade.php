<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/homeuser.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        :root {
            scrollbar-color: transparent transparent;
        }

        body {
            overflow: overlay;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        .splide__pagination li {
            margin-bottom: 25px;
        }

        .btn {
            border-radius: 10px;
        }

        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            background-color: rgb(0, 0, 0);
        }

        .btn:hover {
            background-color: black;
        }

        .btn-like-timur {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(50px) !important;
        }

        .btn-like-putra {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(50px) !important;
        }

        .btn-like-putri {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(50px) !important;
        }

        .btn-like-barat {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(50px) !important;
        }

        .btn-like-rekomendasi {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(50px) !important;
        }

        .btn-like-didekat-mu {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(50px) !important;
        }

        .card-black {
            border: 1px solid #ccc;
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(10px) !important;
        }
    </style>
</head>

<body>
    <div class="sticky-bottom">
        <nav class="nav">
            <a href="" class="nav__link nav-active">
                <i class="bi bi-house-door-fill"></i>
                <span class="nav__text">Beranda</span>
            </a>
            <a href="" class="nav__link">
                <i class="bi bi-house-check-fill"></i>
                <span class="nav__text">Kamar</span>
            </a>
            <a href="" class="nav__link">
                <i class="bi bi-chat-dots"></i>
                <span class="nav__text">Lapor</span>
            </a>
            <a href="" class="nav__link">
                <i class="bi bi-wallet2"></i>
                <span class="nav__text">Transaksi</span>
            </a>
            <a href="" class="nav__link">
                <i class="bi bi-person-circle"></i>
                <span class="nav__text">Profil</span>
            </a>
        </nav>
    </div>
    <div class="sticky-top" id="stickyTop">
        <div class="container py-2">
            <div class="row">
                <div class="col-3">
                    <!-- logo kost -->
                    <div class="header" style="margin-left: -5px;">
                        <img src="img/logokosthomerava.png" loading="lazy">
                    </div>
                    <!-- end logo kost -->
                </div>
                <div class="col-4" style="margin-top: 10px;">
                    <!-- Search Bar -->
                    <div class="search" style="padding-left: 10.5rem;">
                        <button><i class="bi bi-search"></i></button>
                    </div>
                    <!-- end Search Bar -->
                </div>
                <!-- Avatar icon  -->
                <div class="col-5 text-end" style="margin-top: 7px;">
                    <div class="header-kanan">
                        <img src="img/avatar.png" loading="lazy">
                    </div>
                </div>
                <!-- end Avatar icon -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="lokasi">
                    <p class="lokasi-atas"><i class="bi bi-geo-alt-fill text-danger"></i> Ruko City Pride B-23, Jl. Nginden Semolo Waru 42 - Surabaya</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- pembatas 1 -->
    <div class="garis-pembatas-1"></div>
    <!-- end pembatas 1 --> --}}
    <!-- Kost bulanan dan kost harian -->
    <section x-data="{ filter: 'bulanan' }">
        <section class="splide new-2" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                            <div class="">
                                <img src="img/reviewkost1.jpg" style="border-radius: 0px;" class="w-100">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                            <div class="">
                                <img src="img/reviewkost2.jpg" style="border-radius: 0px;" class="w-100">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                            <div class="">
                                <img src="img/reviewkost3.jpg" style="border-radius: 0px;" class="w-100">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                            <div class="">
                                <img src="img/reviewkost4.jpg" style="border-radius: 0px;" class="w-100">
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                            <div class="">
                                <img src="img/reviewkost5.jpg" style="border-radius: 0px;" class="w-100">
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="button-container">
            <button :class="filter == 'bulanan' ? 'btn btn-dark' : 'btn text-secondary'" x-on:click="filter = 'bulanan'">Kost Bulanan</button>
            {{-- <button class="btn btn-kost-bulanan active fw-semibold">Kost Bulanan</button> --}}
            <button :class="filter == 'harian' ? 'btn btn-dark' : 'btn text-secondary'" x-on:click="filter = 'harian'">Sewa Harian</button>
        </div>
        <!-- end Kost bulanan dan kost harian -->
        <div class="container mt-5">
            <div class="row mb-0">
                <div class="col-7">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Area Surabaya Timur</h1>
                </div>
                <div class="col-5 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                <!-- Area timur surabaya -->
                {{-- @for ($i = 1; $i <= 5; $i++) --}}
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <a href="{{ route('detailrumah') }}">
                                <img src="img/kostsurabaya1.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            </a>
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 3 x 4 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 3 x 4 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.000.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya2.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 5 x 5 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 5 x 5 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.500.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya3.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 7 x 7 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 7 x 7 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.750.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya4.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 6 x 4 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 6 x 4 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.750.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya5.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 7 x 8 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 7 x 8 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 3.000.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian1.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 7 x 8 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 7 x 8 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 3.000.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relaive mb-2">
                            <img src="img/kostsurabayaharian2.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 7 x 8 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 7 x 8 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 3.000.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian3.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 7 x 8 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 7 x 8 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 3.000.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian4.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 7 x 8 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 7 x 8 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 3.000.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian5.jpg" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-timur" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 195px" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kos Uk. 7 x 8 M</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: Uk. 7 x 8 M | AC 1 | toi...</h6>
                            </div>
                            <div class="col-12 text-center">
                                <h3 style="font-size: 17px; margin-right: 12px;" class="text-dark mb-0 fw-bold text-center">Rp. 3.000.000</h3>
                            </div>
                            <div class="col-12 mt-2 text-center">
                                <button class="btn-area-timur-surabaya justify-content-center" style="margin-right: 11px;">Pesan Sekarang</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endfor --}}
                <!-- end Area timur surabaya -->
            </div>
            <section class="splide new" aria-label="Splide Basic HTML Example" style="margin-top: 15px;">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="img/banner5.png" style="border-radius: 15px; width: 334px; height: 150px; object-fit: cover;">
                        </li>
                        <li class="splide__slide">
                            <img src="img/banner6.png" style="border-radius: 15px; width: 334px; height: 150px; object-fit: cover;">
                        </li>
                        <li class="splide__slide">
                            <img src="img/banner7.png" style="border-radius: 15px; width: 334px; height: 150px; object-fit: cover;">
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="garis-pembatas-2"></div>
        <div class="container">
            <div class="row mt-3 mb-0">
                <div class="col-7">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Kamar Kost Putra</h1>
                </div>
                <div class="col-5 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                {{-- @for ($i = 1; $i <= 5; $i++) --}}
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputra1.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.000.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputra2.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.500.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputra3.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.750.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputra4.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.000.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputra5.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.500.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputraharian1.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.000.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputraharian2.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.500.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputraharian3.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.750.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputraharian4.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.000.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputraharian5.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.500.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3 mb-0">
                <div class="col-8">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Kamar Kost Populer</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                <!-- Area tengah surabaya -->
                {{-- @for ($i = 1; $i <= 5; $i++) --}}
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabaya11.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 130px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Putra</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar 5 x 6 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabaya12.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 130px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Putri</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. kamar 6 x 5 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabaya13.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 150px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Pegawai</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar 7 x 9 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabaya14.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 130px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Putri</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar 8 x 6 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabaya15.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 150px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Karyawan</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar 5 x 4 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabayaharian11.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 130px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Putra</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar 5 x 6 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabayaharian12.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 130px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Putri</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. kamar 6 x 5 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabayaharian13.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 150px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Pegawai</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar 7 x 9 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabayaharian14.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 130px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Putri</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar 8 x 6 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <div class="row">
                                <div class="col-4 mb-0">
                                    <img src="img/kostsurabayaharian15.jpg" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                </div>
                                <div class="col-4" style="width: 150px; margin-left: 16px;">
                                    <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold">Kost Karyawan</h6>
                                    <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar 5 x 4 M</p>
                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                        <p>Cek</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endfor --}}
                <!-- end Area tengah surabaya -->
            </div>
            <div class="row mt-3 mb-0">
                <div class="col-7">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Kamar Kost Putri</h1>
                </div>
                <div class="col-5 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                {{-- @for ($i = 1; $i <= 5; $i++) --}}
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputri1.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.750.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputri2.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.000.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputri3.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.250.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputri4.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 3.300.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputri5.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 5.000.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputriharian1.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 1.750.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputriharian2.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.000.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputriharian3.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 2.250.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                        {{-- <div class="row g-3">
                                    <div class="col-10">
                                        <h6 class="fw-bold mb-1">Rekomendasi Rumah Kost</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                        <p class="mb-0"><i class="bi bi-star-fill text-warning"></i> <span class="fw-semibold">4.5</span></p>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small class="mb-0 text-secondary fw-semibold"><i class="bi bi-pin-map-fill"></i> Jemur Sari, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-2">
                                        <p class="mb-0 fw-semibold"><i class="ri-hotel-bed-fill"></i> 2</p>
                                    </div>
                                    <div class="col-2">
                                        <p class="mb-0 fw-semibold"><i class="ri-armchair-fill"></i></i> 4</p>
                                    </div>
                                    <div class="col-8 text-end">
                                        <h3 class="mb-0 fw-bold">Rp. 340.000</h3>
                                    </div>
                                </div> --}}
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputriharian4.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 3.300.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                        {{-- <div class="row g-3">
                                    <div class="col-10">
                                        <h6 class="fw-bold mb-1">Rekomendasi Rumah Kost</h6>
                                    </div>
                                    <div class="col-3 text-end">
                                        <p class="mb-0"><i class="bi bi-star-fill text-warning"></i> <span class="fw-semibold">4.5</span></p>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small class="mb-0 text-secondary fw-semibold"><i class="bi bi-pin-map-fill"></i> Jemur Sari, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-2">
                                        <p class="mb-0 fw-semibold"><i class="ri-hotel-bed-fill"></i> 2</p>
                                    </div>
                                    <div class="col-2">
                                        <p class="mb-0 fw-semibold"><i class="ri-armchair-fill"></i></i> 4</p>
                                    </div>
                                    <div class="col-8 text-end">
                                        <h3 class="mb-0 fw-bold">Rp. 340.000</h3>
                                    </div>
                                </div> --}}
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="card" style="padding: 10px; border-radius: 15px;">
                        <div class="position-relative mb-2">
                            <img src="img/kamarkostputriharian5.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-putri" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div class="row">
                            <div class="col-7 mt-2">
                                <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. 5.000.000</h3>
                            </div>
                            <div class="col-5 text-end">
                                <button class="btn-kamar-kost-putra">Lihat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12" style="margin-top: 20px;">
                <section class="splide new-1" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <img src="{{ asset('img/banner8.png') }}" style="border-radius: 15px; width: 334px; height: 160px; object-fit: cover;">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('img/banner9.png') }}" style="border-radius: 15px; width: 334px; height: 160px; object-fit: cover;">
                            </li>
                            <li class="splide__slide">
                                <img src="{{ asset('img/banner10.png') }}" style="border-radius: 15px; width: 334px; height: 160px; object-fit: cover;">
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <div class="garis-pembatas-3"></div>
        <div class="container">
            <!-- product rumah -->
            <div class="row mt-3 mb-0">
                <div class="col-7">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Area Surabaya Barat</h1>
                </div>
                <div class="col-5 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                <!-- Area barat surabaya -->
                {{-- @for ($i = 1; $i <= 5; $i++) --}}
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya6.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 5 x 7 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 5 x 7 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <form action="{{ route('detailrumah') }}">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya7.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 3 x 4 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 3 x 4 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya8.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 6 x 4 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 6 x 4 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya9.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 5 x 5 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 5 x 5 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabaya10.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 7 x 7 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 7 x 7 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian6.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 5 x 7 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 5 x 7 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian7.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 3 x 4 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 3 x 4 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian8.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 6 x 4 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 6 x 4 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian9.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 5 x 5 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 5 x 5 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                        <div class="position-relative mb-2">
                            <img src="img/kostsurabayaharian10.jpg" style="border-top-left-radius: 15px; border-top-right-radius: 15px; width: 265px; height: 80px; object-fit: cover;">
                            <button id="btn-like-timur" class="btn-like-barat" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                        </div>
                        <div style="width: 280px; margin-left: 5px;" class="row">
                            <div class="col-12 mt-1">
                                <h6 style="font-size: 16px;" class="fw-bold mb-1">Kamar Kost Uk. 7 x 7 Meter</h6>
                            </div>
                            <div class="col-12">
                                <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: Uk. 7 x 7 M | AC 1 | Toilet | Pk...</h6>
                            </div>
                            <div class="col-12">
                                <div class="col-12">
                                    <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endfor --}}
                <!-- end Area barat surabaya -->
            </div>
            <!-- rekomendasi rumah -->
            <div class="row mt-3 mb-0">
                <div class="col-12">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Rekomendasi Rumah Kost</h1>
                    <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;">
                        {{-- @for ($i = 1; $i <= 5; $i++) --}}
                        <div x-show="filter == 'bulanan'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkost1.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Mahasiswa</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i> Jemur Sari No 09/09, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 16px;" class="mb-0 fw-bold">Rp. 1.750.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'bulanan'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkost2.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Mahasiswi</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Kenjeran, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 2.500.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'bulanan'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkost3.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Karyawan</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Ploso Timur, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 2.350.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'bulanan'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkost4.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Putra</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Mulyorejo, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 1.500.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'bulanan'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkost5.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Putri</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Kalijudan, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 1.250.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkostharian1.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Mahasiswa</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Jemur Sari, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 1.250.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkostharian2.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Mahasiswa</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Jemur Sari, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 1.250.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkostharian3.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Mahasiswa</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Jemur Sari, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 1.250.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkostharian4.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Mahasiswa</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Jemur Sari, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 1.250.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/rumahkostharian5.jpg" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                    <button id="btn-like-timur" class="btn-like-rekomendasi" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                                </div>
                                <div class="row g-3">
                                    <div class="col-10">
                                        <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold">Kost Mahasiswa</h6>
                                    </div>
                                </div>
                                <div class="row g-3 mb-3">
                                    <div class="col-12">
                                        <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i></i> Jemur Sari, Surabaya</small>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-8">
                                        <h3 style="margin-top: 5px; font-size: 14px;" class="mb-0 fw-bold">Rp. 1.250.000</h3>
                                    </div>
                                    <div class="col-4 text-end">
                                        <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @endfor --}}
                    </div>
                </div>
            </div>
            <!-- end rekomendasi rumah -->

            <!-- didekat mu rumah -->
            <div class="row mt-3" style="margin-bottom: 2rem;">
                <div class="col-12">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;;">Didekat Kamu</h1>
                    <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;">
                        <div x-show="filter == 'bulanan'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkost6.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'bulanan'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkost7.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'bulanan'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkost8.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'bulanan'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkost9.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'bulanan'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkost10.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkostharian6.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkostharian7.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkostharian8.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkostharian9.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                        <div x-show="filter == 'harian'">
                            <div class="position-relative mb-2">
                                <img src="img/rumahkostharian10.jpg" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                <button id="btn-like-timur" class="btn-like-didekat-mu" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                            </div>
                            <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">Kost Karyawan</h6>
                                <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> 2024 Mulyorejo, Surabaya</small>
                                <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. 2.000.000</h6>
                                <button class="btn-didekat-mu">Lihat</button>
                            </div>
                        </div>
                    </div>
                    {{-- @endfor --}}
                </div>
            </div>
        </div>
        <!-- end didekat mu rumah -->
    </section>
    <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger" type="submit">Logout</button>
    </form>
    <!-- end didekat mu rumah -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide.new', {
            type: "loop",
            autoplay: true,
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby'
        });
        splide.mount();
        var splide = new Splide('.splide.new-1', {
            type: "loop",
            autoplay: true,
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby'
        });
        splide.mount();
        var splide = new Splide('.splide.new-2', {
            type: "loop",
            autoplay: true,
            arrows: false,
            lazyLoad: 'nearby',
            gap: '0.5rem'
        });
        splide.mount();
        // var splide = new Splide('.splide.new-3', {
        //     arrows: false,
        //     pagination: false,
        //     perPage: 1,
        //     autoWidth: true,
        //     gap: '0.5rem',
        //     lazyLoad: 'nearby'
        // });
        // splide.mount();
        // var splide = new Splide('.splide.new-4', {
        //     arrows: false,
        //     pagination: false,
        //     perPage: 1,
        //     autoWidth: true,
        //     gap: '0.5rem',
        //     lazyLoad: 'nearby'
        // });
        // splide.mount();
        // var splide = new Splide('.splide.new-5', {
        //     arrows: false,
        //     pagination: false,
        //     perPage: 1,
        //     autoWidth: true,
        //     gap: '0.5rem',
        //     lazyLoad: 'nearby'
        // });
        // splide.mount();
        // var splide = new Splide('.splide.new-6', {
        //     arrows: false,
        //     pagination: false,
        //     perPage: 1,
        //     autoWidth: true,
        //     gap: '0.5rem',
        //     lazyLoad: 'nearby'
        // });
        // splide.mount();
        // var splide = new Splide('.splide.new-7', {
        //     arrows: false,
        //     pagination: false,
        //     perPage: 1,
        //     autoWidth: true,
        //     gap: '0.5rem',
        //     lazyLoad: 'nearby'
        // });
        // splide.mount();
        document.addEventListener("DOMContentLoaded", function() {
            var stickyTop = document.getElementById("stickyTop");
            var lastScrollTop = 0;
            var scrollThreshold = 6; // Ubah nilai sesuai dengan ukuran y yang diinginkan

            window.addEventListener("scroll", function() {
                var scrollTop = window.scrollY || document.documentElement.scrollTop;

                if (scrollTop > scrollThreshold) {
                    // User sedang scroll ke bawah, dan sudah scroll melebihi nilai y yang ditentukan
                    stickyTop.classList.add("scrolled");
                } else {
                    // User sedang di atas sendiri
                    stickyTop.classList.remove("scrolled");
                }

                lastScrollTop = scrollTop;
            });
        });


        function changeIconAndColor(button) {
            // Mengambil elemen ikon pada tombol
            var iconElement = button.querySelector("i");

            // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
            iconElement.classList.toggle("bi-star");
            iconElement.classList.toggle("bi-star-fill");

            // Mengubah warna ikon menjadi kuning
            var currentColor = iconElement.style.color;
            iconElement.style.color = (currentColor === "purple") ? "" : "purple";
        }
    </script>
</body>

</html>

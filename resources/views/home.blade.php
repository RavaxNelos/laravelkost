<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/homeuser.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="sticky-bottom">
        <nav class="nav">
            <a href="" class="nav__link">
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
    {{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Ravax</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>

                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav> --}}
    <div class="container py-3">
        <div class="row">
            <div class="col-3">
                <!-- logo kost -->
                <div class="header">
                    <img src="img/logokosthomerava.png">
                </div>
                <!-- end logo kost -->
            </div>
            <div class="col-4 mt-1">
                <!-- Search Bar -->
                <div class="search" style="padding-left: 10.5rem;">
                    <button><i class="bi bi-search"></i></button>
                </div>
                {{-- <div class="search-bar" style="position: relative; padding-left: 20px;">
                    <input type="text" name="search" class="form-control" id="search" placeholder="     Cari disini..." style="border-radius: 50px; background-color: #f0f0f0; margin-top: -5px; font-style: italic; width: 180px; border-color: 2px solid #f0f0f0;">
                    <i class="bi bi-search" id="togglePassword" style="position: absolute; font-size: 18px; right: 50px; top: 6px; cursor: pointer;"></i>
                </div> --}}
                <!-- end Search Bar -->
            </div>
            <!-- Avatar icon  -->
            <div class="col-5 text-end">
                <div class="header-kanan">
                    <img src="img/avatar.png">
                </div>
            </div>
            <!-- end Avatar icon -->
        </div>
        <div class="row mt-3">
            <div class="col-lg-6 col-12">
                <div class="header">
                    <p class="header-atas"><i class="bi bi-geo-alt-fill text-danger"></i> Ruko City Pride B-23, Jl. Nginden Semolo 42, Nginden Jangkulan, Sukolilo - Surabaya</p>
                </div>
            </div>
        </div>
    </div>

    <!-- pembatas 1 -->
    <div class="garis-pembatas-1"></div>
    <!-- end pembatas 1 -->
    <!-- Kost bulanan dan kost harian -->
    <section class="splide new-2" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                        <div class="position-relative">
                            <img src="img/reviewkost1.jpg" style="border-radius: 0px;" class="w-100">
                        </div>
                        <div class="button-container">
                            <button class="btn btn-kost-bulanan active">Kost Bulanan</button>
                            <button class="btn btn-sewa-harian">Sewa Harian</button>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                        <div class="position-relative">
                            <img src="img/reviewkost2.jpg" style="border-radius: 0px;" class="w-100">
                        </div>
                        <div class="button-container">
                            <button class="btn btn-kost-bulanan active">Kost Bulanan</button>
                            <button class="btn btn-sewa-harian">Sewa Harian</button>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                        <div class="position-relative">
                            <img src="img/reviewkost3.jpg" style="border-radius: 0px;" class="w-100">
                        </div>
                        <div class="button-container">
                            <button class="btn btn-kost-bulanan active">Kost Bulanan</button>
                            <button class="btn btn-sewa-harian">Sewa Harian</button>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                        <div class="position-relative">
                            <img src="img/reviewkost4.jpg" style="border-radius: 0px;" class="w-100">
                        </div>
                        <div class="button-container">
                            <button class="btn btn-kost-bulanan active">Kost Bulanan</button>
                            <button class="btn btn-sewa-harian">Sewa Harian</button>
                        </div>
                    </div>
                </li>
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                        <div class="position-relative">
                            <img src="img/reviewkost5.jpg" style="border-radius: 0px;" class="w-100">
                        </div>
                        <div class="button-container">
                            <button class="btn btn-kost-bulanan active">Kost Bulanan</button>
                            <button class="btn btn-sewa-harian">Sewa Harian</button>
                        </div>
                    </div>
                </li>
        </div>
    </section>
    <!-- end Kost bulanan dan kost harian -->

    {{-- <div class="row justify-content-center">
            <div class="col-12">
                <!-- Search Bar -->
                <div class="search-bar" style="position: relative; padding-left: 20px;">
                    <input type="password" name="search" class="form-control" id="search" placeholder="Cari....." style="border-radius: 50px; background-color: #f0f0f0; margin-top: -5px; font-style: italic; width: 300px; border-color: 2px solid #f0f0f0;">
                    <i class="bi bi-search" id="togglePassword" style="position: absolute; font-size: 18px; right: 35px; top: 5px; cursor: pointer;"></i>
                </div>
            </div>
        </div> --}}
    <!-- end search bar -->
    <div class="container mt-5">
        <div class="row mb-0">
            <div class="col-7">
                <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Area Surabaya Timur</h1>
            </div>
            <div class="col-5 text-end">
                <p class="fw-semibold text-primary">Semua</p>
            </div>
        </div>
        <div class="col-12">
            <section class="splide new-3" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <!-- Area timur surabaya -->
                        {{-- @for ($i = 1; $i <= 5; $i++) --}}
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kostsurabaya1.jpg" style="border-radius: 15px; width: 180px; height: 180px; object-fit: cover;">
                                </div>
                                <div style="width: 205px" class="row">
                                    <div class="col-12 mt-1">
                                        <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kost Uk. 3,5 x 4 M</h6>
                                    </div>
                                    <div class="col-12">
                                        <h6 style="font-size: 7.5px;" class="text-secondary">Fasilitas: Uk. 3 x 4 M | KM Dalam | AC 1 pk | Toi ...</h6>
                                    </div>
                                    <div class="col-12">
                                        <h3 style="font-size: 18px;" class="text-primary mb-0 fw-bold text-center">Rp. 2.000.000</h3>
                                    </div>
                                    <div class="col-12 mt-2 text-center">
                                        <button class="btn-area-timur-surabaya justify-content-center">Pesan Sekarang</button>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kostsurabaya2.jpg" style="border-radius: 15px; width: 180px; height: 180px; object-fit: cover;">
                                </div>
                                <div style="width: 205px" class="row">
                                    <div class="col-12 mt-1">
                                        <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kost Uk. 3,3 x 3 M</h6>
                                    </div>
                                    <div class="col-12">
                                        <h6 style="font-size: 7.5px;" class="text-secondary">Fasilitas: Uk. 3 x 3 M | KM Dalam | AC 1 pk | Toi ...</h6>
                                    </div>
                                    <div class="col-12">
                                        <h3 style="font-size: 18px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.500.000</h3>
                                    </div>
                                    <div class="col-12 mt-2 text-center">
                                        <button class="btn-area-timur-surabaya justify-content-center">Pesan Sekarang</button>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kostsurabaya3.jpg" style="border-radius: 15px; width: 180px; height: 180px; object-fit: cover;">
                                </div>
                                <div style="width: 205px" class="row">
                                    <div class="col-12 mt-1">
                                        <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kost Uk. 3,3 x 3 M</h6>
                                    </div>
                                    <div class="col-12">
                                        <h6 style="font-size: 7.5px;" class="text-secondary">Fasilitas: Uk. 3 x 3 M | KM Dalam | AC 1 pk | Toi ...</h6>
                                    </div>
                                    <div class="col-12">
                                        <h3 style="font-size: 18px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.500.000</h3>
                                    </div>
                                    <div class="col-12 mt-2 text-center">
                                        <button class="btn-area-timur-surabaya justify-content-center">Pesan Sekarang</button>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kostsurabaya4.jpg" style="border-radius: 15px; width: 180px; height: 180px; object-fit: cover;">
                                </div>
                                <div style="width: 205px" class="row">
                                    <div class="col-12 mt-1">
                                        <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kost Uk. 3,3 x 3 M</h6>
                                    </div>
                                    <div class="col-12">
                                        <h6 style="font-size: 7.5px;" class="text-secondary">Fasilitas: Uk. 3 x 3 M | KM Dalam | AC 1 pk | Toi ...</h6>
                                    </div>
                                    <div class="col-12">
                                        <h3 style="font-size: 18px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.500.000</h3>
                                    </div>
                                    <div class="col-12 mt-2 text-center">
                                        <button class="btn-area-timur-surabaya justify-content-center">Pesan Sekarang</button>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kostsurabaya5.jpg" style="border-radius: 15px; width: 180px; height: 180px; object-fit: cover;">
                                </div>
                                <div style="width: 205px" class="row">
                                    <div class="col-12 mt-1">
                                        <h6 style="font-size: 14px;" class="fw-medium mb-1">Kamar Kost Uk. 3,3 x 3 M</h6>
                                    </div>
                                    <div class="col-12">
                                        <h6 style="font-size: 7.5px;" class="text-secondary">Fasilitas: Uk. 3 x 3 M | KM Dalam | AC 1 pk | Toi ...</h6>
                                    </div>
                                    <div class="col-12">
                                        <h3 style="font-size: 18px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.500.000</h3>
                                    </div>
                                    <div class="col-12 mt-2 text-center">
                                        <button class="btn-area-timur-surabaya justify-content-center">Pesan Sekarang</button>
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
                        </li>
                        {{-- @endfor --}}
                        <!-- end Area timur surabaya -->
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <div class="garis-pembatas-2"></div>
    <div class="container">
        <div class="row mt-3 mb-0">
            <div class="col-7">
                <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Kamar Kost Putra</h1>
            </div>
            <div class="col-5 text-end">
                <p class="fw-semibold text-primary">Semua</p>
            </div>
        </div>
        <div class="col-12">
            <section class="splide new-4" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        {{-- @for ($i = 1; $i <= 5; $i++) --}}
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputra1.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputra2.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputra3.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputra4.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputra5.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="row mt-3 mb-0">
            <div class="col-7">
                <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Kamar Kost Putri</h1>
            </div>
            <div class="col-5 text-end">
                <p class="fw-semibold text-primary">Semua</p>
            </div>
        </div>
        <div class="col-12">
            <section class="splide new-5" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        {{-- @for ($i = 1; $i <= 5; $i++) --}}
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputri1.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputri2.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputri3.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputri4.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                        <li class="splide__slide">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="img/kamarkostputri5.jpg" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px;" class="text-primary mb-0 fw-bold text-center">Rp. 1.000.000</h3>
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
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <div class="garis-pembatas-3"></div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <!-- category -->
                <div class="row g-1">
                    <div class="col text-center">
                        <button type="button" class="btn btn-dark btn-kategori" style="border-radius: 50%; background-color: #B0B0B0; border: none;"><i class="bi bi-house" style="font-size: 20px;"></i></button>
                        <p class="mb-0 mt-2" style=" font-size: 10px;">Rumah</p>
                    </div>
                    <div class="col text-center">
                        <button type="button" class="btn btn-dark btn-kategori" style="border-radius: 50%; background-color: #B0B0B0; border: none;"><i class="bi bi-house-door" style="font-size: 20px;"></i></button>
                        <p class="mb-0 mt-2" style=" font-size: 10px;">Apartemen</p>
                    </div>
                    <div class="col text-center">
                        <button type="button" class="btn btn-dark btn-kategori" style="border-radius: 50%; background-color: #B0B0B0; border: none;"><i class="bi bi-house-door-fill" style="font-size: 20px;"></i></button>
                        <p class="mb-0 mt-2" style=" font-size: 10px;">Villa</p>
                    </div>
                    <div class="col text-center">
                        <button type="button" class="btn btn-dark btn-kategori" style="border-radius: 50%; background-color: #B0B0B0; border: none;"><i class="bi bi-house-fill" style="font-size: 20px;"></i></button>
                        <p class="mb-0 mt-2" style=" font-size: 10px;">Gudang</p>
                    </div>
                    <div class="col text-center">
                        <button type="button" class="btn btn-dark btn-kategori" style="border-radius: 50%; background-color: #B0B0B0; border: none;"><i class="bi bi-house-heart-fill" style="font-size: 20px;"></i></button>
                        <p class="mb-0 mt-2" style=" font-size: 10px;">Ruko</p>
                    </div>
                </div>

                <!-- end category -->
            </div>
        </div>
        <!-- product rumah -->
        <div class="row mt-3">
            <div class="col-12">
                <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Rekomendasi Rumah Kost</h1>
                <section class="splide new" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            {{-- @for ($i = 1; $i <= 5; $i++) --}}
                            <li class="splide__slide">
                                <div style="width: 280px;">
                                    <div class="position-relative mb-2">
                                        <img src="img/rumahkost1.jpg" style="border-radius: 15px;" class="w-100">
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-10">
                                            <h6 class="fw-bold mb-1">Rekomendasi Rumah Kost</h6>
                                        </div>
                                        {{-- <div class="col-3 text-end">
                                            <p class="mb-0"><i class="bi bi-star-fill text-warning"></i> <span class="fw-semibold">4.5</span></p>
                                        </div> --}}
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
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div style="width: 280px;">
                                    <div class="position-relative mb-2">
                                        <img src="img/rumahkost2.jpg" style="border-radius: 15px;" class="w-100">
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-10">
                                            <h6 class="fw-bold mb-1">Rekomendasi Rumah Kost</h6>
                                        </div>
                                        {{-- <div class="col-3 text-end">
                                            <p class="mb-0"><i class="bi bi-star-fill text-warning"></i> <span class="fw-semibold">4.5</span></p>
                                        </div> --}}
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-12">
                                            <small class="mb-0 text-secondary fw-semibold"><i class="bi bi-pin-map-fill"></i> Semolowaru, Surabaya</small>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-2">
                                            <p class="mb-0 fw-semibold"><i class="ri-hotel-bed-fill"></i> 2</p>
                                        </div>
                                        <div class="col-2">
                                            <p class="mb-0 fw-semibold"><i class="ri-armchair-fill"></i> 3</p>
                                        </div>
                                        <div class="col-8 text-end">
                                            <h3 class="mb-0 fw-bold">Rp. 440.000</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- @endfor --}}
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <!-- end product rumah -->

        <!-- didekat mu rumah -->
        <div class="row mt-4 mb-5">
            <div class="col-12">
                <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;;">Didekat Kamu</h1>
                <section class="splide new-1" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            {{-- @for ($i = 1; $i <= 5; $i++) --}}
                            <li class="splide__slide">
                                <div style="width: 280px;">
                                    <div class="position-relative mb-2">
                                        <img src="img/rumahkost3.jpg" style="border-radius: 15px;" class="w-100">
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-10">
                                            <h6 class="fw-bold mb-1">Rekomendasi Rumah Kost</h6>
                                        </div>
                                        {{-- <div class="col-3 text-end">
                                            <p class="mb-0"><i class="bi bi-star-fill text-warning"></i> <span class="fw-semibold">4.5</span></p>
                                        </div> --}}
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-12">
                                            <small class="mb-0 text-secondary fw-semibold"><i class="bi bi-pin-map-fill"></i> Mulyorejo, Surabaya</small>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-2">
                                            <p class="mb-0 fw-semibold"><i class="ri-hotel-bed-fill"></i> 2</p>
                                        </div>
                                        <div class="col-2">
                                            <p class="mb-0 fw-semibold"><i class="bi bi-pin-map-fill"></i> 1</p>
                                        </div>
                                        <div class="col-8 text-end">
                                            <h3 class="mb-0 fw-bold">Rp. 240.000</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div style="width: 280px;">
                                    <div class="position-relative mb-2">
                                        <img src="img/rumahkost4.jpg" style="border-radius: 15px;" class="w-100">
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-10">
                                            <h6 class="fw-bold mb-1">Rekomendasi Rumah Kost</h6>
                                        </div>
                                        {{-- <div class="col-3 text-end">
                                            <p class="mb-0"><i class="bi bi-star-fill text-warning"></i> <span class="fw-semibold">4.5</span></p>
                                        </div> --}}
                                    </div>
                                    <div class="row g-3 mb-3">
                                        <div class="col-12">
                                            <small class="mb-0 text-secondary fw-semibold"><i class="bi bi-pin-map-fill"></i> Ploso, Surabaya</small>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-2">
                                            <p class="mb-0 fw-semibold"><i class="ri-hotel-bed-fill"></i> 2</p>
                                        </div>
                                        <div class="col-2">
                                            <p class="mb-0 fw-semibold"><i class="bi bi-pin-map-fill"></i> 4</p>
                                        </div>
                                        <div class="col-8 text-end">
                                            <h3 class="mb-0 fw-bold">Rp. 440.000</h3>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- @endfor --}}
                        </ul>
                    </div>
                </section>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
        <!-- end didekat mu rumah -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide.new', {
            autoplay: true,
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '1rem',
        });
        splide.mount();
        var splide = new Splide('.splide.new-1', {
            autoplay: true,
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '1rem',
        });
        splide.mount();
        var splide = new Splide('.splide.new-2', {
            type: "loop",
            autoplay: true,
            arrows: false,

        });
        splide.mount();
        var splide = new Splide('.splide.new-3', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '1rem',
        });
        splide.mount();
        var splide = new Splide('.splide.new-4', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '1rem',
        });
        splide.mount();
        var splide = new Splide('.splide.new-5', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '1rem',
        });
        splide.mount();
        var searchInput = document.getElementById('search');
        var toggleIcon = document.getElementById('togglePassword');

        searchInput.addEventListener('focus', function() {
            toggleIcon.style.display = 'none';
        });

        searchInput.addEventListener('blur', function() {
            // Tambahkan kondisi untuk menampilkan ikon hanya jika nilai input kosong
            if (searchInput.value === '') {
                toggleIcon.style.display = 'block';
            }
        });
    </script>
</body>

</html>

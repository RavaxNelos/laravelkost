<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('/img/logokosthomerava.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/usercss/homeuser.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        #popup {
            width: 204px;
            height: 50px;
            text-align: center;
            display: none;
            position: fixed;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 10px;
            border-radius: 10px;
            z-index: 1000;
        }

        #popup-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: none;
            z-index: 999;
        }

        p#popup-text {
            width: 186px;
            margin-top: 4px;
        }

        * {
            font-family: 'Ubuntu', sans-serif;
        }

        :root {
            scrollbar-color: transparent transparent;
        }

        body {
            overflow: overlay;
            user-select: none;
        }

        .scroll-popup {
            display: none;
            position: fixed;
            bottom: 9.6%;
            left: 34%;
            background-color: #ffffff;
            color: #000000;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            font-size: 12px;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        .splide.new-3 .splide__pagination li {
            margin-bottom: -6px !important;
        }

        .splide.new-3 .splide__pagination__page {
            margin: 2px;
            width: 4px;
            height: 4px;
        }

        .splide.new-3 .splide__pagination__page.is-active {
            background-color: #9370DB;
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
    <section x-data="{ filter: 'bulanan' }">
        <div class="sticky-bottom">
            <nav class="nav">
                <a href="#" class="nav__link nav-active">
                    <i class="bi bi-house-door-fill"></i>
                    <span class="nav__text">Beranda</span>
                </a>
                <a href="{{ asset('/user/kamar') }}" class="nav__link">
                    <i class="bi bi-door-closed"></i>
                    <span class="nav__text">Kamar</span>
                </a>
                <div class="nav__link" id="openModalBtn">
                    <i class="bi bi-chat-dots"></i>
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
        <div class="sticky-top" id="stickyTop">
            <div class="container py-2">
                <div class="row">
                    <div class="col-3">
                        <!-- logo kost -->
                        <div class="header" style="margin-left: -5px;">
                            <img src="{{ asset('/img/logokosthomerava.png') }}" loading="lazy">
                        </div>
                        <!-- end logo kost -->
                    </div>
                    <div class="col-4" style="margin-top: 10px;">
                        <!-- Search Bar -->
                        <div class="search" style="padding-left: 10.2rem;">
                            <button><i class="bi bi-search"></i></button>
                        </div>
                        <!-- end Search Bar -->
                    </div>
                    <!-- Avatar icon  -->
                    <div class="col-5 text-end" style="margin-top: 7px;">
                        <div class="header-kanan">
                            <a href="/user/profil">
                                <img src="{{ asset($users->gambar ? 'uploadkamar/' . $users->gambar : '/img/customer1.jpg') }}" loading="lazy">
                            </a>
                        </div>
                    </div>
                    <!-- end Avatar icon -->
                </div>
            </div>
        </div>
        <div class="modal" id="myModal">
            <div class="modal-content">
                <!-- Konten modal, dapat diedit sesuai kebutuhan -->
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
        <div class="scroll-popup" id="scrollPopup">
            <span onclick="scrollToTop()"><i class="bi bi-arrow-up-circle"></i> Kembali Ke Atas</span>
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

        <div id="popup-background" onclick="closePopup()"></div>
        <div id="popup">
            <p id="popup-text" style="font-size: 14px;">Berhasil DiFavoritkan</p>
        </div>

        <!-- Kost bulanan dan kost harian -->
        <section class="splide new-2" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    @if ($banner->isEmpty())
                        <li class="splide__slide">
                            <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                                <div class="">
                                    <img src="{{ asset('img/reviewkost1.jpg') }}" style="border-radius: 0px;" class="w-100">
                                </div>
                            </div>
                        </li>
                    @else
                        @foreach ($banner as $item)
                            @if ($item->kategori_banner == 'Slider' && $item->lokasi_banner == 'Home Utama')
                                <li class="splide__slide">
                                    <div style="max-width: 300%; min-height: 200px; min-width: 250px;">
                                        <div class="">
                                            <img src="{{ asset('uploadkamar/' . $item->gambar_banner) }}" style="border-radius: 0px;" class="w-100">
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    @endif
                </ul>
            </div>
        </section>
        <div class="button-container">
            <button :class="filter == 'bulanan' ? 'btn btn-dark' : 'btn text-secondary'" x-on:click="filter = 'bulanan';" onclick="resetScroll('kategori-sewa')">Kost Bulanan</button>
            <button :class="filter == 'harian' ? 'btn btn-dark' : 'btn text-secondary'" x-on:click="filter = 'harian';" onclick="resetScroll('kategori-sewa')">Sewa Harian</button>
        </div>
        <!-- end Kost bulanan dan kost harian -->
        <div class="container mt-5">
            <!-- didekat mu rumah -->
            <div class="row mt-3" style="margin-bottom: 1rem;">
                <div class="col-7 text-start">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Didekat Kamu</h1>
                </div>
                <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;" id="kategori-sewa">
                    @foreach ($kamarkost_didekat_kamu as $item)
                        <div x-show="filter == '{{ strtolower($item->tipe_kost) }}'">
                            <a href="/user/detail/{{ $item->id }}">
                                <div class="position-relative mb-2">
                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" style="border-top-right-radius: 15px; border-top-left-radius: 15px; width: 226px; height: 236px; object-fit: cover;">
                                </div>
                                <div class="card-black" style="position: relative; margin-top: -8px; width: 226px; height: 100px; border-bottom-left-radius: 15px; border-bottom-right-radius: 15px; opacity: 0.9;">
                                    <h6 style="top: 10px; left: 10px; font-size: 18px; position: absolute; color: #333;" class="fw-semibold">{{ $item->kategori->kategori }}</h6>
                                    <i style="position: absolute; top: 32px; left: 10px; color: #333; font-size: 12px" class="bi bi-geo-alt text-info"></i><small style="position: absolute; top: 32px; left: 26px; font-size: 12px; color: #333" class="text-secondary;"> {{ $item->alamat_kost }}, Surabaya</small>
                                    <h6 style="position: absolute; top: 58px; left: 10px; font-size: 16px; color: #333;" class="fw-bold">Rp. {{ $item->harga_kost }}</h6>
                                    <form action="/user/detail/{{ $item->id }}">
                                        <button class="btn-didekat-mu">Lihat</button>
                                    </form>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                {{-- @endfor --}}
            </div>
        </div>
        <!-- end didekat mu rumah -->
        <div class="garis-pembatas-2"></div>
        <div class="container py-2">
            <!-- banner promo -->
            <section class="splide new-3" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($banner as $item)
                            @if ($item->kategori_banner == 'Slider' && $item->lokasi_banner == 'Home Promo')
                                <li class="splide__slide">
                                    <img src="{{ asset('uploadkamar/' . $item->gambar_banner) }}" width="336" height="80" style="border-radius: 8px;">
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </section>
            <!-- end banner promo -->
            <section class="splide new-4" aria-label="Splide Basic HTML Example" style="margin-top: 0.5rem;">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="custom-card" style="position: relative; width: 130px; height: 80px; background-color: rgba(147, 112, 219, 0.6); border-radius: 8px;">
                                <div class="custom-card-body">
                                    <div class="lingkaran-logo" style="position: absolute; top: 10px; left: 8px; background-color: rgba(147, 112, 219, 1); width: 26px; height: 26px; border-radius: 30px; z-index: 999999;"><i class="bi bi-cash" style="color: white; padding: 6px; font-size: 14px;"></i></div>
                                    <p class="fw-semibold" style="font-size: 12px; position: absolute; top: 14px; left: 38px;">Sewa Kamar</p>
                                    <p class="fw-medium text-white" style="font-size: 12px; position: absolute; top: 40px; left: 8px;">Rp.25.000</p>
                                    <p class="text-body-tertiary" style="position: absolute; top: 58px; left: 8px; font-size: 10px; font-weight: 500;">Hemat Sewa Kamar</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="custom-card" style="position: relative; width: 130px; height:80px; background-color: rgba(142, 68, 173, 0.6); border-radius: 8px;">
                                <div class="custom-card-body">
                                    <div class="lingkaran-logo" style="position: absolute; top: 10px; left: 8px; background-color: rgba(142, 68, 173, 1); width: 26px; height: 26px; border-radius: 30px; z-index: 999999;"><i class="bi bi-wallet" style="color: white; padding: 6px; font-size: 14px;"></i></div>
                                    <p class="fw-semibold" style="font-size: 12px; position: absolute; top: 14px; left: 38px;">Cashback</p>
                                    <p class="fw-medium text-white" style="font-size: 12px; position: absolute; top: 40px; left: 8px;">Rp.50.000</p>
                                    <p class="text-body-tertiary" style="position: absolute; top: 58px; left: 8px; font-size: 10px; font-weight: 500;">Potongan Harga Kost</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="custom-card" style="position: relative; width: 130px; height: 80px; background-color: rgba(147, 112, 219, 0.6); border-radius: 8px;">
                                <div class="custom-card-body">
                                    <div class="lingkaran-logo" style="position: absolute; top: 10px; left: 8px; background-color: rgba(147, 112, 219, 1); width: 26px; height: 26px; border-radius: 30px; z-index: 999999;"><i class="bi bi-cash" style="color: white; padding: 6px; font-size: 14px;"></i></div>
                                    <p class="fw-semibold" style="font-size: 12px; position: absolute; top: 14px; left: 38px;">Sewa Kamar</p>
                                    <p class="fw-medium text-white" style="font-size: 12px; position: absolute; top: 40px; left: 8px;">Rp.50.000</p>
                                    <p class="text-body-tertiary" style="position: absolute; top: 58px; left: 8px; font-size: 10px; font-weight: 500;">Hemat Sewa Kamar</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="custom-card" style="position: relative; width: 130px; height:80px; background-color: rgba(142, 68, 173, 0.6); border-radius: 8px;">
                                <div class="custom-card-body">
                                    <div class="lingkaran-logo" style="position: absolute; top: 10px; left: 8px; background-color: rgba(142, 68, 173, 1); width: 26px; height: 26px; border-radius: 30px; z-index: 999999;"><i class="bi bi-wallet" style="color: white; padding: 6px; font-size: 14px;"></i></div>
                                    <p class="fw-semibold" style="font-size: 12px; position: absolute; top: 14px; left: 38px;">Cashback</p>
                                    <p class="fw-medium text-white" style="font-size: 12px; position: absolute; top: 40px; left: 8px;">Rp.100.000</p>
                                    <p class="text-body-tertiary" style="position: absolute; top: 58px; left: 8px; font-size: 10px; font-weight: 500;">Potongan Harga Kost</p>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="custom-card" style="position: relative; width: 130px; height: 80px; background-color: rgba(147, 112, 219, 0.6); border-radius: 8px;">
                                <div class="custom-card-body">
                                    <div class="lingkaran-logo" style="position: absolute; top: 10px; left: 8px; background-color: rgba(147, 112, 219, 1); width: 26px; height: 26px; border-radius: 30px; z-index: 999999;"><i class="bi bi-cash" style="color: white; padding: 6px; font-size: 14px;"></i></div>
                                    <p class="fw-semibold" style="font-size: 12px; position: absolute; top: 14px; left: 38px;">Sewa Kamar</p>
                                    <p class="fw-medium text-white" style="font-size: 12px; position: absolute; top: 40px; left: 8px;">Rp.75.000</p>
                                    <p class="text-body-tertiary" style="position: absolute; top: 58px; left: 8px; font-size: 10px; font-weight: 500;">Hemat Sewa Kamar</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="garis-pembatas-2" style="margin-bottom: 20px;"></div>
        <div class="container">
            <div class="row mt-0" style="margin-bottom: 0.5rem;">
                <div class="col-7">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Area Surabaya Timur</h1>
                </div>
            </div>
            <div class="col-12 d-flex gap-2 justify-content-between" style="overflow-x: auto; overflow: overlay; margin-top: -10px; margin-bottom: 2rem;" id="katagori-sewa-timur">
                <!-- Area Surabaya Timur -->
                @foreach ($kamarkost_area_surabaya_timur as $item)
                    <div x-show="filter == '{{ strtolower($item->tipe_kost) }}'">
                        <a href="/user/detail/{{ $item->id }}" style="text-decoration: none;">
                            <div class="custom-card d-flex flex-column justify-content-between" style="width: 180px; height: 290px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                                <div class="position-relative mb-2">
                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" style="border-radius: 15px; width: 160px; height: 160px; object-fit: cover;">
                                </div>
                                <div class="row m-0"> <!-- Tambahkan class m-0 untuk menghilangkan margin -->
                                    <div class="col-12 mt-1 p-0"> <!-- Tambahkan class p-0 untuk menghilangkan padding -->
                                        <h6 style="font-size: 14px;" class="fw-medium mb-1 text-secondary-emphasis">Kamar Uk. {{ $item->ukuran_kost }}</h6>
                                    </div>
                                    <div class="col-12 p-0"> <!-- Tambahkan class p-0 untuk menghilangkan padding -->
                                        <h6 style="font-size: 10px;" class="text-secondary">Fasilitas: {{ Illuminate\Support\Str::limit($item->fasilitas_kost, 24, '...') }}</h6>
                                    </div>
                                    <div class="col-12 text-center p-0"> <!-- Tambahkan class p-0 untuk menghilangkan padding -->
                                        <h3 style="font-size: 17px;" class="text-dark mb-0 fw-bold">Rp. {{ $item->harga_kost }}</h3>
                                    </div>
                                    <div class="col-12 mt-2 text-center p-0"> <!-- Tambahkan class p-0 untuk menghilangkan padding -->
                                        <form action="/user/detail/{{ $item->id }}">
                                            <button class="btn-area-timur-surabaya justify-content-center">Pesan Sekarang</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- end Area timur surabaya -->
            </div>
            <!-- banner biasa ke-1 -->
            <section class="splide new" aria-label="Splide Basic HTML Example" style="margin-top: -10px;">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($banner as $item)
                            @if ($item->kategori_banner == 'Slider' && $item->lokasi_banner == 'Home Ketiga')
                                <li class="splide__slide">
                                    <img src="{{ asset('uploadkamar/' . $item->gambar_banner) }}" style="border-radius: 15px; width: 334px; height: 150px; object-fit: cover;">
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </section>
            <!-- end banner biasa ke-1 -->
        </div>
        <div class="garis-pembatas-2"></div>
        <div class="container">
            <div class="row mt-3" style="margin-bottom: 0.5rem;">
                <div class="col-7">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Kamar Kost Putra</h1>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px; margin-bottom: 2rem;" id="kategori-sewa-putra">
                @foreach ($kamarkost_putra as $item)
                    <div x-show="filter == '{{ strtolower($item->tipe_kost) }}'">
                        <a href="/user/detail/{{ $item->id }}" style="text-decoration: none;">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                    {{-- <button id="btn-like-timur" class="btn-like-putra" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button> --}}
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. {{ $item->harga_kost }}</h3>
                                    </div>
                                    <div class="col-5">
                                        <form action="/user/detail/{{ $item->id }}">
                                            <button class="btn-kamar-kost-putra">Lihat</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            @if ($kamarkost_populer)
                <div class="row" style="margin-bottom: 0.5rem; margin-top: -0.5rem">
                    <div class="col-8">
                        <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Kamar Kost Populer</h1>
                    </div>
                </div>
                <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px; margin-bottom: 2rem;" id="kategori-sewa-populer">
                    <!-- Kamar Populer -->
                    @foreach ($kamarkost_populer as $item)
                        <div x-show="filter == '{{ strtolower($item->tipe_kost) }}'">
                            <a href="/user/detail/{{ $item->id }}" style="text-decoration: none;">
                                <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                                    <div class="position-relative mb-2">
                                        <div class="row">
                                            <div class="col-4 mb-0">
                                                <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                            </div>
                                            <div class="col-4" style="width: 150px; margin-left: 16px;">
                                                <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold text-secondary-emphasis">{{ $item->kategori->kategori }}</h6>
                                                <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. Kamar {{ $item->ukuran_kost }}</p>
                                                <form action="/user/detail/{{ $item->id }}">
                                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                                        <p>Cek</p>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- End Kamar Populer -->
                </div>
            @endif
        </div>
        <div class="garis-pembatas-2-5"></div>
        <div class="container">
            <div class="row mt-3" style="margin-bottom: 0.5rem;">
                <div class="col-7">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Kamar Kost Putri</h1>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px; margin-bottom: 2rem;" id="kategori-sewa-putri">
                <!-- Kamar Kost Putri -->
                @foreach ($kamarkost_putri as $item)
                    <div x-show="filter == '{{ strtolower($item->tipe_kost) }}'">
                        <a href="/user/detail/{{ $item->id }}" style="text-decoration: none;">
                            <div class="card" style="padding: 10px; border-radius: 15px;">
                                <div class="position-relative mb-2">
                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" style="border-radius: 15px; width: 220px; height: 150px; object-fit: cover;">
                                </div>
                                <div class="row">
                                    <div class="col-7 mt-2">
                                        <h3 style="font-size: 15px; margin-left: -12px;" class="text-dark mb-0 fw-bold text-center">Rp. {{ $item->harga_kost }}</h3>
                                    </div>
                                    <div class="col-5">
                                        <form action="/user/detail/{{ $item->id }}">
                                            <button class="btn-kamar-kost-putra">Lihat</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- End Kamar Kost Putri -->
            </div>
            <div class="col-12" style="margin-top: -10px;">
                <!-- banner biasa ke-2 -->
                <section class="splide new-1" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            @foreach ($banner as $item)
                                @if ($item->kategori_banner == 'Slider' && $item->lokasi_banner == 'Home Terakhir')
                                    <li class="splide__slide">
                                        <img src="{{ asset('uploadkamar/' . $item->gambar_banner) }}" style="border-radius: 15px; width: 334px; height: 160px; object-fit: cover;">
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </section>
                <!-- end banner biasa ke-2 -->
            </div>
        </div>
        <div class="garis-pembatas-3"></div>
        <div class="container">
            <!-- product rumah -->
            <div class="row mt-3" style="margin-bottom: 0.5rem;">
                <div class="col-7">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Area Surabaya Barat</h1>
                </div>
            </div>
            <div class="col-12 d-flex gap-2 justify-content-between" style="overflow-x: auto; overflow: overlay; margin-top: -10px; margin-bottom: 2rem;" id="kategori-sewa-barat">
                <!-- Area barat surabaya -->
                @foreach ($kamarkost_area_surabaya_barat as $item)
                    <div x-show="filter == '{{ strtolower($item->tipe_kost) }}'">
                        <a href="/user/detail/{{ $item->id }}" style="text-decoration: none;">
                            <div class="custom-card" style="width: 266px; height: 180px; padding: 0px; border-radius: 15px; border: 1px solid #ccc;">
                                <div class="position-relative mb-2">
                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" style="border-top-left-radius: 13px; border-top-right-radius: 13px; width: 264px; height: 80px; object-fit: cover;">
                                </div>
                                <div style="width: 266px; padding-left: 14px; padding-right: 14px;"> <!-- Sesuaikan padding -->
                                    <div class="col-12 mt-1">
                                        <h6 style="font-size: 16px;" class="fw-bold text-secondary-emphasis mb-1">Kamar Kost Uk. {{ $item->ukuran_kost }}</h6>
                                    </div>
                                    <div class="col-12">
                                        <h6 style="font-size: 12px;" class="text-secondary">Fasilitas: {{ Illuminate\Support\Str::limit($item->fasilitas_kost, 32, '...') }}</h6>
                                    </div>
                                    <div class="col-12">
                                        <form action="/user/detail/{{ $item->id }}">
                                            <button class="btn-area-barat">Lihat Detail dan Lokasi</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
                <!-- end Area barat surabaya -->
            </div>
            <!-- rekomendasi rumah -->
            <div class="row" style="margin-bottom: 2.8rem; margin-top: -0.5rem">
                <div class="col-12">
                    <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Rekomendasi Kamar Kost</h1>
                    <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-bottom: 4.8rem;" id="kategori-sewa-rekomendasi">
                        @foreach ($kamarkost_rekomendasi_kamar_kost as $item)
                            <div x-show="filter == '{{ strtolower($item->tipe_kost) }}'">
                                <a href="/user/detail/{{ $item->id }}" style="text-decoration: none;">
                                    <div class="card" style="padding: 10px; border-radius: 15px;">
                                        <div class="position-relative mb-2">
                                            <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" style="border-radius: 15px; width: 220px; height: 140px; object-fit: cover;">
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-10">
                                                <h6 style="font-size: 16px; margin-bottom: -0.3rem;" class="fw-bold"> {{ $item->kategori->kategori }}</h6>
                                            </div>
                                        </div>
                                        <div class="row g-3 mb-3">
                                            <div class="col-12">
                                                <small style="font-size: 12px; margin-top: -40px;" class="mb-0 text-secondary fw-normal"><i class="bi bi-geo-alt-fill text-danger"></i> {{ $item->alamat_kost }}, Surabaya</small>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: -10px;">
                                            <div class="col-8">
                                                <h3 style="margin-top: 5px; font-size: 18px; color: #9370DB;" class="mb-0 fw-bold">Rp. {{ $item->harga_kost }}</h3>
                                            </div>
                                            <div class="col-4">
                                                <form action="/user/detail/{{ $item->id }}">
                                                    <button class="btn-rekomendasi-rumah" style="margin-left: -20px;">Lihat</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- end rekomendasi rumah -->
    </section>
    <!-- end didekat mu rumah -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        });
        splide.mount();
        var splide = new Splide('.splide.new-3', {
            type: "loop",
            autoplay: true,
            arrows: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby',
            interval: '2000',
        });
        splide.mount();
        var splide = new Splide('.splide.new-4', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby',
            drag: 'free'
        });
        splide.mount();
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

        function resetScroll(id) {
            document.getElementById(id).scrollLeft = 0;
            document.getElementById('katagori-sewa-timur').scrollLeft = 0;
            document.getElementById('kategori-sewa-putra').scrollLeft = 0;
            document.getElementById('kategori-sewa-populer').scrollLeft = 0;
            document.getElementById('kategori-sewa-putri').scrollLeft = 0;
            document.getElementById('kategori-sewa-barat').scrollLeft = 0;
            document.getElementById('kategori-sewa-rekomendasi').scrollLeft = 0;
        }

        // function changeIconAndColor(button) {
        //     // Mengambil elemen ikon pada tombol
        //     var iconElement = button.querySelector("i");

        //     // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
        //     iconElement.classList.toggle("bi-star");
        //     iconElement.classList.toggle("bi-star-fill");

        //     // Mengubah warna ikon menjadi kuning
        //     var currentColor = iconElement.style.color;
        //     iconElement.style.color = (currentColor === "purple") ? "" : "purple";

        //     // button.classList.toggle('favorited');

        //     // var popupText = document.getElementById('popup-text');

        //     // if (button.classList.contains('favorited')) {
        //     //     popupText.innerText = 'Berhasil Difavoritkan';
        //     // } else {
        //     //     popupText.innerText = 'Dihapus Dari Favorit';
        //     // }

        //     // Tampilkan pop-up
        //     showPopup();
        //     // Favorit
        //     favoritadd();

        // }

        function showPopup() {
            var popupBackground = document.getElementById('popup-background');
            var popup = document.getElementById('popup');

            popupBackground.style.display = 'block';
            popup.style.display = 'block';

            // Sembunyikan pop-up setelah beberapa detik (misalnya, 3 detik)
            setTimeout(function() {
                closePopup();
            }, 3000);
        }

        function closePopup() {
            var popupBackground = document.getElementById('popup-background');
            var popup = document.getElementById('popup');

            popupBackground.style.display = 'none';
            popup.style.display = 'none';
        }

        document.addEventListener("DOMContentLoaded", function() {
            window.onscroll = function() {
                showScrollPopup();
            };
        });

        function showScrollPopup() {
            var scrollPopup = document.getElementById("scrollPopup");
            if (document.body.scrollTop > 2300 || document.documentElement.scrollTop > 2300) {
                scrollPopup.style.display = "block";
            } else {
                scrollPopup.style.display = "none";
            }
        }

        function scrollToTop() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }

        var modal = document.getElementById('myModal');
        var openModalBtn = document.getElementById('openModalBtn');
        var closeModalBtn = document.getElementById('closeModalBtn');

        // Fungsi untuk menampilkan modal
        openModalBtn.onclick = function() {
            modal.style.display = 'block';
        }

        // Menutup modal jika area di luar modal diklik
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    </script>
    <script src="{{ asset('/sw.js') }}"></script>
    <script>
        if ("serviceWorker" in navigator) {
            // Register a service worker hosted at the root of the
            // site using the default scope.
            navigator.serviceWorker.register("/sw.js").then(
                (registration) => {
                    console.log("Service worker registration succeeded:", registration);
                },
                (error) => {
                    console.error(`Service worker registration failed: ${error}`);
                },
            );
        } else {
            console.error("Service workers are not supported.");
        }
    </script>
</body>

</html>

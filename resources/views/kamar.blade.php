<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamar</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- css rava -->
    <link rel="stylesheet" href="{{ asset('css/kamar.css') }}">
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
            font-family: 'Poppins', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            color: var(--bs-btn-active-color);
            background-color: black;
            border-color: var(--bs-btn-active-border-color);
        }

        .btn:hover {
            color: var(--bs-btn-hover-color);
            background-color: black;
            border-color: var(--bs-btn-hover-border-color);
        }
    </style>
</head>

<body>
    <div class="sticky-bottom">
        <nav class="nav">
            <a href="/home" class="nav__link">
                <i class="bi bi-house-door"></i>
                <span class="nav__text">Beranda</span>
            </a>
            <a href="" class="nav__link nav-active">
                <i class="bi bi-door-closed-fill"></i>
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
                <i class="bi bi-person"></i>
                <span class="nav__text">Profil</span>
            </a>
        </nav>
    </div>
    <nav class="fixed-top" id="stickyTop">
        <div class="container py-3">
            <div class="row">
                <div class="col-12 text-end">
                    <button class="btn-like-detail" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                </div>
            </div>
        </div>
    </nav>
    <div id="popup-background" onclick="closePopup()"></div>
    <div id="popup">
        <p id="popup-text" style="font-size: 14px;">Berhasil DiFavoritkan</p>
    </div>
    <section class="splide new-1" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('img/kostsurabaya6.jpg') }}" style="width: 360px; height: 250px;">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/kostsurabaya7.jpg') }}" style="width: 360px; height: 250px;">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/kostsurabaya8.jpg') }}" style="width: 360px; height: 250px;">
                </li>
            </ul>
        </div>
    </section>
    <div class="container mt-3">
        <div class="row">
            <div class="col-4 text-start">
                <a type="submit" style="width: 100px; height: 30px; text-align: center; text-decoration: none; border: 1px solid #ccc; border-radius: 6px; padding: 2px" class="text-dark fs-6 fw-medium">Kos Putra</a>
            </div>
            <div class="col-2" style="margin-top: 0.2rem;">
                <i class="bi bi-dot text-secondary" style="margin-left: -10px;"></i>
            </div>
            <div class="col-6" style="margin-top: 0.2rem;">
                <p class="fw-medium" style="font-size: 12px; margin-left: -40px;"><i class="bi bi-geo-alt" style="font-size: 14px;"></i> Jatim, Mulyorejo, Surabaya</p>
            </div>
        </div>
    </div>
    <hr class="hr-1" style="margin-top: 4px;">
    <div class="container">
        <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Spesifikasi Tipe Kamar</h1>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/room.png') }}" height="20">
            </div>
            <div class="col-5" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">4 x 5 Meter</p>
            </div>
            <div class="row">
                <div class="col-1" style="margin-right: 4px;">
                    <img src="{{ asset('img/thunder.png') }}" height="20">
                </div>
                <div class="col-6" style="margin-top: 2px;">
                    <p class="text-secondary-emphasis" style="font-size: 16px;">Termasuk Listrik</p>
                </div>
            </div>
        </div>
        <hr class="hr-2" style="margin-top: 0px;">
        <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Kamar</h1>
        <section class="splide new-2" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('img/interior2.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/interior7.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/meja.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                    </li>
                </ul>
            </div>
        </section>
        <hr class="hr-3" style="margin-top: 20px;">
        <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Kamar Mandi</h1>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/kamarmandi.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Kamar Mandi Dalam</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/toilet.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Kloset Duduk</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/wastafel.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Wastafel</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/shower.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Shower</p>
            </div>
        </div>
    </div>
    <hr class="hr-4" style="margin-top: 10px;">
    <div class="container">
        <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Umum</h1>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/wifi.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Wifi</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/kulkas.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Kulkas</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/dapur.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Dapur</p>
            </div>
        </div>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/mesincuci.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Mesin Cuci</p>
            </div>
        </div>
        <hr class="hr-5" style="margin-top: 0px;">
        <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Parkir</h1>
        <div class="row">
            <div class="col-1" style="margin-right: 4px;">
                <img src="{{ asset('img/motor.png') }}" height="20">
            </div>
            <div class="col-7" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Parkir Motor</p>
            </div>
        </div>
    </div>
    <hr class="hr-6" style="margin-top: 0px;">
    <div class="container">
        <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Lokasi Kost</h1>
        <div class="row">
            <div class="col-1">
                <i class="bi bi-geo-alt text-secondary" style="font-size: 18px;"></i>
            </div>
            <div class="col-11" style="margin-top: 2px;">
                <p class="text-secondary-emphasis" style="font-size: 16px;">Kecamatan Mulyorejo, Kota Surabaya</p>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.890313427744!2d112.78296607375654!3d-7.253322971251772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f992c6a96b87%3A0xca71a77168fd84a8!2sGg.%20XI%2C%20Kalijudan%2C%20Kec.%20Mulyorejo%2C%20Surabaya%2C%20Jawa%20Timur%2060114!5e0!3m2!1sid!2sid!4v1709111446694!5m2!1sid!2sid" width="336" height="250" style="border-radius: 10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <hr class="hr-7" style="margin-top: 10px;">
    <div class="container" style="margin-bottom: 10rem;">
        <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Durasi Kost</h1>

    </div>
    {{-- <div class="sticky-top" id="stickyHeader" style="background-color: transparent; transition: background-color 0.3s, box-shadow 0.3s;">
        <div class="container py-2">
            <div class="row">
                <div class="search-container">
                    <form class="p-0 m-0 d-flex" style="position: relative;" role="search">
                        <input type="text" id="searchInput" name="searchInput" placeholder="Cari Kamar Kost..." style="width: 334px; height: 40px; text-indent: 40px; border: 1px solid #ccc; border-radius: 8px; font-style: italic;">
                        <i class="bi bi-search" style="position: absolute; font-size: 20px; top: 4px; left: 16px;"></i>
                        <i class="bi bi-x-circle-fill d-none" id="clearSearchIcon" style="position: absolute; font-size: 20px; top: 4px; right: 16px; cursor: pointer;"></i>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <section class="splide new-1" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="{{ asset('img/banner16.png') }}" style="border-radius: 8px; width: 334px; height: 150px;">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/banner17.png') }}" style="border-radius: 8px; width: 334px; height: 150px;">
                    </li>
                    <li class="splide__slide">
                        <img src="{{ asset('img/banner18.png') }}" style="border-radius: 8px; width: 334px; height: 150px;">
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <hr class="hr-1" style="margin-bottom: 1rem;">
    <section x-data="{ filter: 'bulanan' }">
        <div class="container">
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;">
                <button :class="filter == 'bulanan' ? 'btn btn-dark' : 'btn btn-outline-secondary text-secondary'" x-on:click="filter = 'bulanan';">Bulanan</button>
                <button :class="filter == 'harian' ? 'btn btn-dark' : 'btn btn-outline-secondary text-secondary'" x-on:click="filter = 'harian';">Harian</button>
                <button :class="filter == 'terbaru' ? 'btn btn-dark' : 'btn btn-outline-secondary text-secondary'" x-on:click="filter = 'terbaru';">Terbaru</button>
                <button :class="filter == 'rekomendasi' ? 'btn btn-dark' : 'btn btn-outline-secondary text-secondary'" x-on:click="filter = 'rekomendasi';">Rekomendasi</button>
                <button :class="filter == 'populer' ? 'btn btn-dark' : 'btn btn-outline-secondary text-secondary'" x-on:click="filter = 'populer';">Populer</button>
            </div>
            <div id="popup-background" onclick="closePopup()"></div>
            <div id="popup">
                <p id="popup-text" style="font-size: 14px;"></p>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'harian'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Kost Putra</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'bulanan'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Kost Putra</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -16px;">
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 4 x 5 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Kalijudan, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 2.000.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra2.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 6 x 5 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Jambangan, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 2.300.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra3.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 4 x 4 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Asemrowo, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 2.600.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra4.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 7 x 4 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Benowo, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 2.900.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra5.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 5 x 5 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Bubutan, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 3.200.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 4 x 5 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Kalijudan, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 500.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra2.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 6 x 5 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Jambangan, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 530.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra3.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 4 x 4 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Asemrowo, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 450.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra4.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 7 x 4 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Benowo, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 670.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 14.4rem; height: 10.6rem; border: 1px solid #ccc; margin-top: 3.4rem; border-radius: 10px; position: relative;">
                        <img src="{{ asset('img/kamarkostputra5.jpg') }}" style="width: 200px; height: 130px; border-radius: 10px; position: absolute; top: -50px; left: 14px;">
                        <p class="text-dark fw-medium" style="position: absolute; left: 14px; top: 90px; font-size: 14px;">Kamar Kost Uk. 5 x 5 Meter</p>
                        <p class="text-secondary" style="font-size: 12px; position: absolute; top: 110px; left: 14px;"><i class="bi bi-geo-alt-fill"></i> Bubutan, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 14px; top: 130px;">Rp. 400.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; top: -44px; right: 20px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7"><i class="bi bi-star"></i></button>
                    </div>
                </div>
            </div>
            <img src="{{ asset('img/banner19.png') }}" style="border-radius: 10px; margin-top: 1rem; width: 334px; height: 105px;">
        </div>
        <hr class="hr-2" style="margin-bottom: 1rem">
        <div class="container">
            <div class="row mt-3 mb-0" x-show="filter == 'harian'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Kost Putri</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'bulanan'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Kost Putri</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="scroll-container" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                <div class="col-12 d-flex gap-2">
                    <!-- Your first set of cards -->
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri1.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 4 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Jambangan, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.000.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri2.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 6 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Asemrowo, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.400.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri3.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 5 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Benowo, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.450.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri4.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 6 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bubutan, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.550.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri5.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">6 x 7 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bulak, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.750.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri1.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 4 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Jambangan, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 500.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri2.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 6 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Asemrowo, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 450.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri3.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 5 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Benowo, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 550.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri4.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 6 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bubutan, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 560.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputri5.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">6 x 7 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bulak, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 490.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex gap-2">
                    <!-- Your second set of cards -->
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian1.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 4 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Jambangan, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.000.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian2.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 6 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Asemrowo, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.400.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian3.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 5 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Benowo, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.450.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian4.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 6 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bubutan, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.550.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'bulanan'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian5.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">6 x 7 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bulak, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 2.750.000<span class="text-secondary" style="font-size: 14px;">/bln</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian1.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 4 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Jambangan, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 500.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian2.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 6 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Asemrowo, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 570.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian3.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 5 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Benowo, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 580.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian4.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 6 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bubutan, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 600.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                    <div x-show="filter == 'harian'">
                        <div class="custom-card" style="width: 19rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                            <img src="{{ asset('img/kamarkostputriharian5.jpg') }}" style="width: 288px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                            <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">6 x 7 meter</a>
                            <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bulak, Surabaya</p>
                            <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandi...</p>
                            <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp. 750.000<span class="text-secondary" style="font-size: 14px;">/hrn</span></p>
                            <a type="submit" style="position: absolute; right: 6px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                            <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputri1.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 4 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Jambangan, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.000.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputri2.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 6 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Asemrowo, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.400.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputri3.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 5 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Benowo, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.450.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputri4.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 6 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bubutan, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.550.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputri5.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">6 x 7 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bulak, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.750.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;">
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputriharian1.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 4 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Jambangan, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.000.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputriharian2.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 6 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Asemrowo, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.400.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputriharian3.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">5 x 5 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Benowo, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.450.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputriharian4.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">4 x 6 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bubutan, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.550.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'semua'">
                    <div class="custom-card" style="width: 21rem; height: 14.8rem; border-radius: 10px; border: 1px solid #ccc; margin-bottom: 1rem; position: relative;">
                        <img src="{{ asset('img/kamarkostputriharian5.jpg') }}" style="width: 320px; height: 140px; position: absolute; left: 7px; margin-top: 10px; border-radius: 4px;">
                        <a type="submit" style="position: absolute; left: 12px; width: 100px; height: 26px; background-color: white; opacity: 0.7; color: #9370DB; margin-top: 118px; text-align: center; border-radius: 4px;">6 x 7 meter</a>
                        <p class="fw-medium" style="font-size: 14px; position: absolute; left: 12px; margin-top: 160px;"><i class="bi bi-geo-alt-fill text-danger"></i> Kecamatan Bulak, Surabaya</p>
                        <p class="fw-normal text-secondary" style="font-size: 12px; position: absolute; left: 12px; margin-top: 180px;">Fasilitas Kost 1 AC | 1 Kasur | Kamar Mandri Dalam...</p>
                        <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; position: absolute; left: 12px; margin-top: 200px;">Rp.2.750.000<span class="text-secondary" style="font-size: 14px;">/bulan</span></p>
                        <a type="submit" style="position: absolute; right: 12px; margin-top: 200px; width: 80px; height: 26px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; text-align: center; border-radius: 6px; border: 1px solid #9b59b6; font-size: 14px;">Lihat</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 14px; right: 12px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-3" style="margin-bottom: 1rem; margin-top: -0.2rem">
        <div class="container">
            <div class="row mt-3 mb-0" x-show="filter == 'harian'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Kost Karyawan</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'bulanan'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Kost Karyawan</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputraharian1.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putra Uk 6 x 7 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Mulyorejo, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 2.500.000<span class="text-white" style="font-size: 12px;">/bln</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputraharian2.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putra Uk 5 x 4 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Jambangan, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 2.450.000<span class="text-white" style="font-size: 12px;">/bln</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputraharian3.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putra Uk 6 x 5 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Rungkut, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 2.300.000<span class="text-white" style="font-size: 12px;">/bln</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputriharian1.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putri Uk 6 x 6 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Pakal, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 2.100.000<span class="text-white" style="font-size: 12px;">/bln</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputriharian2.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putri Uk 5 x 5 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Pakal, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 2.175.000<span class="text-white" style="font-size: 12px;">/bln</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputraharian1.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putra Uk 6 x 7 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Mulyorejo, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 500.000<span class="text-white" style="font-size: 12px;">/hrn</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputraharian2.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putra Uk 5 x 4 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Jambangan, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 450.000<span class="text-white" style="font-size: 12px;">/hrn</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputraharian3.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putra Uk 6 x 5 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Rungkut, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 300.000<span class="text-white" style="font-size: 12px;">/hrn</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputriharian1.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putri Uk 6 x 6 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Pakal, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 100.000<span class="text-white" style="font-size: 12px;">/hrn</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 16rem; height: 14rem; background-color: #b8a1ea; position: relative; border-top-left-radius: 10px; border-top-right-radius: 10px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <img src="{{ asset('img/kamarkostputriharian2.jpg') }}" style="position: absolute; width: 256px; height: 140px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 14px; position: absolute; bottom: 40px; left: 10px">Kamar Kost Putri Uk 5 x 5 M</p>
                        <p class="fw-normal text-secondary-emphasis" style="font-size: 12px; position: absolute; bottom: 20px; left: 10px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6;"></i> Pakal, Surabaya</p>
                        <p class="fw-semibold" style="font-size: 16px; position: absolute; bottom: -4px; left: 10px; color: #fff;">Rp. 175.000<span class="text-white" style="font-size: 12px;">/hrn</span></p>
                        <a type="submit" style="width: 80px; height: 30px; text-align: center; position: absolute; bottom: 8px; right: 10px; background: rgb(106, 5, 114);background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%); color: white; border-radius: 6px; font-size: 14px; padding: 4px;">Cek</a>
                        <button id="btn-like-timur" onclick="changeIconAndColor(this)" style="width: 30px; height: 30px; position: absolute; margin-top: 10px; right: 10px; border-radius: 50%; border: none; font-size: 16px; background-color: #ccc; opacity: 0.7;"><i class="bi bi-star"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-dadakan" style="margin-top: 0.8rem;">
        <div class="container">
            <div class="row mt-3 mb-0" x-show="filter == 'harian'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Kost Mahasiswa</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'bulanan'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Kost Mahasiswa</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputraharian4.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 2.000.000<span class="text-secondary" style="font-size: 10px;">/bln</span></p>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputraharian5.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 2.200.000<span class="text-secondary" style="font-size: 10px;">/bln</span></p>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 2.400.000<span class="text-secondary" style="font-size: 10px;">/bln</span></p>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputra2.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 2.600.000<span class="text-secondary" style="font-size: 10px;">/bln</span></p>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputra3.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 2.700.000<span class="text-secondary" style="font-size: 10px;">/bln</span></p>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputraharian4.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 300.000<span class="text-secondary" style="font-size: 10px;">/hrn</span></p>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputraharian5.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 350.000<span class="text-secondary" style="font-size: 10px;">/hrn</span></p>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 400.000<span class="text-secondary" style="font-size: 10px;">/hrn</span></p>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputra2.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 600.000<span class="text-secondary" style="font-size: 10px;">/hrn</span></p>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <div class="custom-card" style="width: 160px; height: 170px; box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.2); border-radius: 20px; position: relative; margin-bottom: 1rem;">
                        <img src="{{ asset('img/kamarkostputra3.jpg') }}" style="width: 160px; height: 100px; border-top-left-radius: 10px; border-top-right-radius: 10px;">
                        <p class="fw-medium" style="font-size: 12px; margin-left: 10px; margin-top: 10px;">Kamar Kost Putra</p>
                        <p class="fw-normal text-secondary" style="font-size: 10px; margin-left: 10px; margin-top: -16px;">1 Kamar - Kamar Mandi...</p>
                        <p class="fw-semibold" style="font-size: 12px; margin-left: 10px; margin-top: -16px; color: #9b59b6;">Rp. 700.000<span class="text-secondary" style="font-size: 10px;">/hrn</span></p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-4" style="margin-bottom: 3.4rem; margin-top: -0rem;">
    </section> --}}
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide.new-1', {
            type: "loop",
            autoplay: true,
            arrows: false,
            perPage: 1,
            autoWidth: true,
            lazyLoad: 'nearby'
        });

        splide.mount();
        var splide = new Splide('.splide.new-2', {
            type: "loop",
            autoplay: true,
            arrows: false,
            perPage: 1,
            gap: '0.5rem',
            autoWidth: true,
            lazyLoad: 'nearby'
        });

        splide.mount();

        let isAlertShown = false;

        function changeIconAndColor(button) {
            // Mengambil elemen ikon pada tombol
            var iconElement = button.querySelector("i");

            // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
            iconElement.classList.toggle("bi-star");
            iconElement.classList.toggle("bi-star-fill");

            // Mengubah warna ikon menjadi kuning
            var currentColor = iconElement.style.color;
            iconElement.style.color = (currentColor === "purple") ? "" : "purple";

            button.classList.toggle('favorited');

            var popupText = document.getElementById('popup-text');

            if (button.classList.contains('favorited')) {
                popupText.innerText = 'Berhasil Difavoritkan';
            } else {
                popupText.innerText = 'Dihapus Dari Favorit';
            }

            // Tampilkan pop-up
            showPopup();

        }

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
        // var splide = new Splide('.splide.new-2', {
        //     type: "loop",
        //     pagination: false,
        //     arrows: false,
        //     perPage: 1,
        //     autoWidth: true,
        //     gap: '0.5rem',
        //     lazyLoad: 'nearby'
        // });

        // splide.mount();

        // JavaScript to show/hide clear search icon
        // document.getElementById('searchInput').addEventListener('input', function() {
        //     var clearSearchIcon = document.getElementById('clearSearchIcon');
        //     if (this.value.trim() !== '') {
        //         clearSearchIcon.classList.remove('d-none');
        //     } else {
        //         clearSearchIcon.classList.add('d-none');
        //     }
        // });

        // // JavaScript to clear search input
        // document.getElementById('clearSearchIcon').addEventListener('click', function() {
        //     var searchInput = document.getElementById('searchInput');
        //     searchInput.value = '';
        //     this.classList.add('d-none');
        // });

        // var isFavorited = false;

        // function changeIconAndColor(button) {
        //     // Mengambil elemen ikon pada tombol
        //     var iconElement = button.querySelector("i");

        //     // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
        //     iconElement.classList.toggle("bi-star");
        //     iconElement.classList.toggle("bi-star-fill");

        //     // Mengubah warna ikon menjadi kuning
        //     var currentColor = iconElement.style.color;
        //     iconElement.style.color = (currentColor === "purple") ? "" : "purple";

        //     isFavorited = !isFavorited;
        //     var popupText = document.getElementById('popup-text');

        //     if (isFavorited) {
        //         popupText.innerHTML = 'Berhasil Difavoritkan';
        //     } else {
        //         popupText.innerHTML = 'Dihapus dari Favorit';
        //     }

        //     showPopup();
        // }

        // function closePopup() {
        //     document.getElementById('popup-background').style.display = 'none';
        //     document.getElementById('popup').style.display = 'none';
        // }

        // function showPopup() {
        //     document.getElementById('popup-background').style.display = 'block';
        //     document.getElementById('popup').style.display = 'block';

        //     setTimeout(function() {
        //         closePopup();
        //     }, 2000); // Close popup after 2 seconds
        // }

        // $(document).ready(function() {
        //     var stickyHeader = $('#stickyHeader');
        //     var searchInput = $('#searchInput');
        //     var clearSearchIcon = $('#clearSearchIcon');

        //     $(window).scroll(function() {
        //         var scroll = $(window).scrollTop();

        //         // Change background and box-shadow when scrolling
        //         if (scroll > 0) {
        //             stickyHeader.css('background-color', '#ffffff');
        //             stickyHeader.css('box-shadow', '0px 4px 8px rgba(0, 0, 0, 0.1)');
        //         } else {
        //             stickyHeader.css('background-color', 'transparent');
        //             stickyHeader.css('box-shadow', 'none');
        //         }

        //         // Show/hide clear search icon based on input value
        //         if (searchInput.val().trim() !== '') {
        //             clearSearchIcon.removeClass('d-none');
        //         } else {
        //             clearSearchIcon.addClass('d-none');
        //         }
        //     });

        //     // Additional code to handle other functionalities...
        // });
    </script>
</body>

</html>

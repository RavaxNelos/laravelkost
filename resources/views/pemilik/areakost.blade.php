<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Area Kost</title>
    <link rel="stylesheet" href="{{ asset('css/pemilikcss/areakost.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

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

        .btn.btn-dark {
            width: 168px;
        }

        .btn.btn-outline-secondary {
            width: 168px;
            border: none;
        }
    </style>
</head>

<body>
    <div class="sticky-bottom">
        <nav class="nav">
            <a href="{{ asset('/pemilik/home') }}" class="nav__link">
                <ion-icon name="home-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Beranda</span>
            </a>
            <a href="{{ asset('/pemilik/area') }}" class="nav__link nav-active">
                <ion-icon name="location" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Area Kost</span>
            </a>
            <a href="{{ asset('/pemilik/transaksi') }}" class="nav__link">
                <ion-icon name="newspaper-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Transaksi</span>
            </a>
            <a href="{{ asset('/pemilik/pengguna') }}" class="nav__link">
                <ion-icon name="people-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Pengguna</span>
            </a>
            <a href="{{ asset('/pemilik/riwayat') }}" class="nav__link">
                <ion-icon name="time-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Riwayat</span>
            </a>
            <a href="{{ asset('/pemilik/profil') }}" class="nav__link">
                <ion-icon name="person-outline" style="font-size: 19px; margin-bottom: 1px;"></ion-icon>
                <span class="nav__text">Profil</span>
            </a>
        </nav>
    </div>
    <section class="splide new-1" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('img/banner19.png') }}" style="width: 360px; height: 180px;">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/banner21.png') }}" style="width: 360px; height: 180px;">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/banner22.png') }}" style="width: 360px; height: 180px;">
                </li>
            </ul>
        </div>
    </section>
    <section x-data="{ filter: 'bulanan' }">
        <div class="sticky-top" id="stickyTop">
            <hr class="hr-1" style="margin: 0px; border-top: 10px solid #ccc;">
            <div class="container">
                <div class="row" style="margin-top: 0px;">
                    <div class="col-6 text-center" style="margin-left: -12px;">
                        <button :class="filter == 'bulanan' ? 'btn-aktif' : 'btn-non-aktif'" x-on:click="filter = 'bulanan';">Kost Bulanan</button>
                    </div>
                    <div class="col-6 text-center" style="margin-left: 0px;">
                        <button :class="filter == 'harian' ? 'btn-aktif' : 'btn-non-aktif'" x-on:click="filter = 'harian';">Sewa Harian</button>
                    </div>
                </div>
            </div>
            <hr class="pemisah-button" style="margin-bottom: 1rem; margin-top: 0px; border-top: 10px solid #ccc;">
        </div>
        <div class="container">
            <div id="popup-background" onclick="closePopup()"></div>
            <div id="popup">
                <p id="popup-text" style="font-size: 14px;"></p>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'harian'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Jemursari</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'bulanan'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Jemursari</h1>
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
        <hr class="hr-2" style="margin-bottom: 1rem; border-top: 10px solid #ccc;">
        <div class="container">
            <div class="row mt-3 mb-0" x-show="filter == 'harian'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Semolowaru</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'bulanan'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Semolowaru</h1>
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
            <div class="row mb-0" x-show="filter == 'bulanan'"">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Benowo</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="col-12 d-flex gap-2 mb-3" style="overflow-x: auto; overflow: overlay; margin-top: -10px;">
                <div x-show="filter == 'bulanan'">
                    <img src="{{ asset('img/kamarkostputraharian1.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 2.000.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <img src="{{ asset('img/kamarkostputraharian2.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 2.000.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <img src="{{ asset('img/kamarkostputraharian3.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 2.000.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <img src="{{ asset('img/kamarkostputraharian4.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 2.000.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'bulanan'">
                    <img src="{{ asset('img/kamarkostputraharian5.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 2.000.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 560.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 560.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 560.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 560.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="filter == 'harian'">
                    <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 210px; height: 150px; border-radius: 8px; position: relative;">
                    <div class="custom-card" style="border: 1px solid #ccc; width: 190px; height: auto; margin-left: 6px; margin-top: -10px; border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;">
                        <div class="container">
                            <div class="row mt-3">
                                <div class="col-12 text-start">
                                    <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Uk. 3 x 6 M</h3>
                                </div>
                                <div class="col-12 text-start mb-0" style="margin-top: -8px;">
                                    <p class="text-secondary" style="font-size: 12px;"><i class="bi bi-geo-alt-fill" style="color: #9b59b6; margin-right: 4px;"></i>Benowo, Surabaya</p>
                                </div>
                                <div class="col-12 text-start" style="margin-top: -14px">
                                    <h3 class="fw-semibold" style="font-size: 14px; color: #9b59b6;">Rp. 560.000<span style="font-size: 12px; color: gray;">/bln</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-3" style="margin-bottom: 1rem; margin-top: 0px; border-top: 10px solid #ccc;">
        <div class="container">
            <div class="row mt-3 mb-0" x-show="filter == 'harian'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Sukolilo</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'bulanan'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Sukolilo</h1>
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
        <hr class="hr-dadakan" style="margin-top: 0.8rem; border-top: 10px solid #ccc;">
        <div class="container">
            <div class="row mt-3 mb-0" x-show="filter == 'harian'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Rungkut</h1>
                </div>
                <div class="col-4 text-end">
                    <p class="fw-normal text-primary">Semua</p>
                </div>
            </div>
            <div class="row mt-3 mb-0" x-show="filter == 'bulanan'">
                <div class="col-8">
                    <h1 style="font-weight: 600; font-size: 16px; font-family: 'Poppins', sans-serif;">Area Rungkut</h1>
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
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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

        function changeIconAndColor(button) {
            // Mengambil elemen ikon pada tombol
            var iconElement = button.querySelector("i");

            // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
            iconElement.classList.toggle("bi-star");
            iconElement.classList.toggle("bi-star-fill");

            // Mengubah warna ikon menjadi kuning
            var currentColor = iconElement.style.color;
            iconElement.style.color = (currentColor === "purple") ? "" : "purple";

            // Ganti ikon atau warna sesuai keinginan Anda
            // Misalnya, di sini saya hanya menambahkan kelas 'favorited'
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
            }, 1500);
        }

        function closePopup() {
            var popupBackground = document.getElementById('popup-background');
            var popup = document.getElementById('popup');

            popupBackground.style.display = 'none';
            popup.style.display = 'none';
        }

        window.addEventListener('scroll', function() {
            var stickyTop = document.getElementById('stickyTop');

            // Jika posisi scroll lebih dari 0, ubah background menjadi putih, jika tidak, kembalikan ke transparan
            if (window.scrollY > 0) {
                stickyTop.classList.add('bg-white');
            } else {
                stickyTop.classList.remove('bg-white');
            }
        });
    </script>
</body>

</html>

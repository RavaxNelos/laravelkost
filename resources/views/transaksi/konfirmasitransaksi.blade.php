<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- end icon bootstrap -->
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- end google font -->
    <!-- css rava -->
    <link rel="stylesheet" href="css/buktipembayaran.css">
    <!-- end css rava -->
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        html,
        body {
            user-drag: none;
            user-select: none;
        }

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        /* Style for sticky header when scrolled */
        .sticky-top.scrolled {
            background-color: white;
            /* Ganti warna latar belakang sesuai kebutuhan Anda */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            /* Optional: Tambahkan bayangan jika diinginkan */
        }
    </style>
</head>

<body>
    <div class="sticky-top" id="stickyHeader">
        <div class="container py-2">
            <div class="row g-3">
                <div class="col-1">
                    <a href="/transaksi" class="btn-back-home"><ion-icon name="chevron-back-outline" style="margin-bottom: -4px;"></ion-icon></a>
                </div>
                <div class="col-6 mt-4 text-start" style="margin-top: 25px !important;">
                    <h3 class="text-dark fw-semibold teks-detail" style="font-size: 16px; transition: color 0.3s ease;">Rincian Bookingan</h3>
                </div>
            </div>
        </div>
    </div>
    <hr class="garis-1">
    <!-- rincian pembayaran -->
    <div class="container">
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Nama Pelanggan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">Muhammad Ravanelo</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Durasi Ngekost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">1 Bulan</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 160px;">Tanggal Pesan Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">21 Februari 2024</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 170px;">Tanggal Booking Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">23 Februari 2024</h3>
            </div>
        </div>
    </div>
    <!-- rincian pembayaran -->
    <hr class="garis-2">
    <!-- konfirmasi nomer dana -->
    <div class="container">
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; width: 180px;">Total Pembayaran</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB;">Rp.2.100.000</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1 text-start">
                <img src="{{ asset('img/gopay.png') }}" height="30" width="30">
            </div>
            <div class="col-11">
                <h3 class="fw-medium" style="font-size: 16px; font-family: Poppins; margin-left: 6px; margin-top: 8px;">Gopay</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-start">
                <p class="fw-medium" style="font-size: 12px;">Silahkan Transfer Ke GoPay</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-start">
                <p style="margin-top:-20px"><span class="fw-semibold" id="nomorTelp" style="font-size:16px; color: #800080;">082332724688</span><button class="btn fw-semibold text-success" style="font-size:12px; margin-left:-10px; margin-bottom:3px;" onclick="copyText()"><img src="{{ asset('img/copy.png') }}" height="15" alt=""></button>
                </p>
            </div>
            <div class="col-12 text-start mb-2">
                <h3 class="fw-medium" style="font-size: 14px; margin-top: -20px;">A/N NGEKOST</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="/home" type="submit" style="width: 130px; height: 40px; border: 2px solid #9370DB; padding: 8px;text-decoration: none; color: #9370DB; border-radius: 8px; font-size: 12px; text-align: center;">Halaman Utama</a>
            </div>
            <div class="col-8">
                <button id="confirmButton" style="margin-left: 18px; width: 200px; height: 40px; background-color: #9370DB; border-radius: 8px; border: none; font-size: 12px; color: white;">Konfirmasi Pembayaran</button>
            </div>
        </div>
    </div>
    <!-- end konfirmasi nomer dana -->
    <hr class="garis-3">
    <!-- promo kost -->
    <div class="container">
        <div class="row">
            <div class="col-8 text-start">
                <h3 class="fw-semibold" style="font-size: 16px; font-family: Poppins;">Promo Kamar Kost</h3>
            </div>
            <div class="col-4 text-end">
                <p class="text-primary">Semua</p>
            </div>
        </div>
        <section class="splide new-1" aria-label="Splide Basic HTML Example" style="margin-bottom: 1rem;">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card" style="width: 14rem; height: 19.5rem; border-radius: 8px;">
                            <img src="{{ asset('img/kamarkostputri1.jpg') }}" height="150" width="222" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <a type="submit" style="border: 1px solid #ccc; width: 60px; height: 28px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px; font-size: 14px;">Putri</a>
                                    </div>
                                    <div class="col-6">
                                        <a type="submit" style="border: 1px solid #ccc; width: 120px; height: 28px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px; margin-left: -2.5rem; font-size: 14px;">Kost Andalan</a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-1 text-start mt-1">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-11 mt-2" style="width: 180px;">
                                        <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan Mulyorejo</h3>
                                    </div>
                                </div>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -4px;">K.Mandi Dalam|Wifi|AC|Lemari...</p>
                                <div class="row" style="margin-top: -14px">
                                    <div class="col-1 text-start">
                                        <i class="bi bi-lightning-fill" style="color: red;"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 195rb</p>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp.1.500.000</p>
                                    </div>
                                    <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp.1.305.000<span style="font-size: 14px; color: black; font-weight: 400;">/bulan</span></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 14rem; height: 19.5rem; border-radius: 8px;">
                            <img src="{{ asset('img/kamarkostputri4.jpg') }}" height="150" width="222" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="card-body">
                                <a type="submit" style="border: 1px solid #ccc; width: 60px; height: 28px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px; font-size: 14px;">Putri</a>
                                <div class="row mt-2">
                                    <div class="col-1 text-start mt-1">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-11 mt-2" style="width: 180px;">
                                        <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan Mulyorejo</h3>
                                    </div>
                                </div>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -4px;">K.Mandi Dalam|Wifi|AC|Lemari...</p>
                                <div class="row" style="margin-top: -14px">
                                    <div class="col-1 text-start">
                                        <i class="bi bi-lightning-fill" style="color: red;"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 135rb</p>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp.1.500.000</p>
                                    </div>
                                    <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp.1.365.000<span style="font-size: 14px; color: black; font-weight: 400;">/bulan</span></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 14rem; height: 19.5rem; border-radius: 8px;">
                            <img src="{{ asset('img/kamarkostputri3.jpg') }}" height="150" width="222" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="card-body">
                                <a type="submit" style="border: 1px solid #ccc; width: 60px; height: 28px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px; font-size: 14px;">Putri</a>
                                <div class="row mt-2">
                                    <div class="col-1 text-start mt-1">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-11 mt-2" style="width: 180px;">
                                        <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan Mulyorejo</h3>
                                    </div>
                                </div>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -4px;">K.Mandi Dalam|Wifi|AC|Lemari...</p>
                                <div class="row" style="margin-top: -14px">
                                    <div class="col-1 text-start">
                                        <i class="bi bi-lightning-fill" style="color: red;"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 100rb</p>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp.1.500.000</p>
                                    </div>
                                    <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp.1.400.000<span style="font-size: 14px; color: black; font-weight: 400;">/bulan</span></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 14rem; height: 19.5rem; border-radius: 8px;">
                            <img src="{{ asset('img/kamarkostputri5.jpg') }}" height="150" width="222" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <a type="submit" style="border: 1px solid #ccc; width: 60px; height: 28px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px; font-size: 14px;">Putri</a>
                                    </div>
                                    <div class="col-6">
                                        <a type="submit" style="border: 1px solid #ccc; width: 120px; height: 28px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px; margin-left: -2.5rem; font-size: 14px;">Kost Andalan</a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-1 text-start mt-1">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-11 mt-2" style="width: 180px;">
                                        <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan Mulyorejo</h3>
                                    </div>
                                </div>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -4px;">K.Mandi Dalam|Wifi|AC|Lemari...</p>
                                <div class="row" style="margin-top: -14px">
                                    <div class="col-1 text-start">
                                        <i class="bi bi-lightning-fill" style="color: red;"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 200rb</p>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp.1.500.000</p>
                                    </div>
                                    <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp.1.300.000<span style="font-size: 14px; color: black; font-weight: 400;">/bulan</span></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="row">
            <div class="col-8 text-start">
                <h3 class="fw-semibold" style="font-size: 16px; font-family: Poppins;">Kamar Kost Terpopuler</h3>
            </div>
            <div class="col-4 text-end">
                <p class="text-primary">Semua</p>
            </div>
        </div>
        <section class="splide new-2" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card" style="width: 10.1rem; height: 14rem; box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1); border: none;">
                            <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="border-radius: 15px; width: 160px; height: 100px;  object-fit: cover;">
                            <div class="card-body">
                                <h3 class="fw-bold" style="font-size: 14px; font-family: Poppins;">Kost Putra</h3>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -2px;">Kalijudan, Surabaya</p>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-1">
                                        <i class="bi bi-wifi" style="color: #ccc;"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">WiFi</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -14px;">
                                    <div class="col-1">
                                        <i class="bi bi-snow" style="color: #ccc"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">AC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <p class="fw-medium" style="font-size: 12px; font-family: Poppins;">
                            <h3 style="color: #800080; font-size: 14px;">Rp.2.300.000<span class="text-secondary" style="font-size: 12px;">/bulan</span></h3>
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 10.1rem; height: 14rem; box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1); border: none;">
                            <img src="{{ asset('img/kamarkostputra2.jpg') }}" style="border-radius: 15px; width: 160px; height: 100px;  object-fit: cover;">
                            <div class="card-body">
                                <h3 class="fw-bold" style="font-size: 14px; font-family: Poppins;">Kost Putra</h3>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -2px;">Mulyorejo, Surabaya</p>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-1">
                                        <i class="bi bi-wifi" style="color: #ccc;"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">WiFi</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -14px;">
                                    <div class="col-1">
                                        <i class="bi bi-snow" style="color: #ccc"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">AC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <p class="fw-medium" style="font-size: 12px; font-family: Poppins;">
                            <h3 style="color: #800080; font-size: 14px;">Rp.2.600.000<span class="text-secondary" style="font-size: 12px;">/bulan</span></h3>
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 10.1rem; height: 14rem; box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1); border: none;">
                            <img src="{{ asset('img/kamarkostputra3.jpg') }}" style="border-radius: 15px; width: 160px; height: 100px;  object-fit: cover;">
                            <div class="card-body">
                                <h3 class="fw-bold" style="font-size: 14px; font-family: Poppins;">Kost Putra</h3>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -2px;">Ploso, Surabaya</p>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-1">
                                        <i class="bi bi-wifi" style="color: #ccc;"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">WiFi</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -14px;">
                                    <div class="col-1">
                                        <i class="bi bi-snow" style="color: #ccc"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">AC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <p class="fw-medium" style="font-size: 12px; font-family: Poppins;">
                            <h3 style="color: #800080; font-size: 14px;">Rp.2.900.000<span class="text-secondary" style="font-size: 12px;">/bulan</span></h3>
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 10.1rem; height: 14rem; box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1); border: none;">
                            <img src="{{ asset('img/kamarkostputra4.jpg') }}" style="border-radius: 15px; width: 160px; height: 100px;  object-fit: cover;">
                            <div class="card-body">
                                <h3 class="fw-bold" style="font-size: 14px; font-family: Poppins;">Kost Putra</h3>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -2px;">Jambangan, Surabaya</p>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-1">
                                        <i class="bi bi-wifi" style="color: #ccc;"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">WiFi</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -14px;">
                                    <div class="col-1">
                                        <i class="bi bi-snow" style="color: #ccc"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">AC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <p class="fw-medium" style="font-size: 12px; font-family: Poppins;">
                            <h3 style="color: #800080; font-size: 14px;">Rp.3.200.000<span class="text-secondary" style="font-size: 12px;">/bulan</span></h3>
                            </p>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 10.1rem; height: 14rem; box-shadow: -10px 10px 50px rgba(0, 0, 0, 0.1); border: none;">
                            <img src="{{ asset('img/kamarkostputra5.jpg') }}" style="border-radius: 15px; width: 160px; height: 100px;  object-fit: cover;">
                            <div class="card-body">
                                <h3 class="fw-bold" style="font-size: 14px; font-family: Poppins;">Kost Putra</h3>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -2px;">Gubeng, Surabaya</p>
                                <div class="row" style="margin-top: -10px;">
                                    <div class="col-1">
                                        <i class="bi bi-wifi" style="color: #ccc;"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">WiFi</p>
                                    </div>
                                </div>
                                <div class="row" style="margin-top: -14px;">
                                    <div class="col-1">
                                        <i class="bi bi-snow" style="color: #ccc"></i>
                                    </div>
                                    <div class="col-8">
                                        <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">AC</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                            <p class="fw-medium" style="font-size: 12px; font-family: Poppins;">
                            <h3 style="color: #800080; font-size: 14px;">Rp.3.500.000<span class="text-secondary" style="font-size: 12px;">/bulan</span></h3>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <hr class="garis-4">
    <div class="container">
        <div class="row">
            <div class="col-8 text-start">
                <h3 class="fw-semibold" style="font-size: 16px; font-family: Poppins;">Kamar Kost Terbaru</h3>
            </div>
            <div class="col-4 text-end">
                <p class="text-primary">Semua</p>
            </div>
        </div>
        <section class="splide new-3" aria-label="Splide Basic HTML Example" style="margin-bottom: 2rem;">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card" style="width: 16rem;">
                            <img src="{{ asset('img/kamarkostputraharian1.jpg') }}" style="border-radius: 10px; width: 254px; height: 300px; padding: 4px;">
                            <div class="card-body">
                                <p class="text-secondary" style="font-size: 12px; margin-top: -12px">Kalijudan, Surabaya</p>
                                <h3 class="fw-semibold" style="font-size: 14px; font-family: Poppins; margin-top: -16px; color: #800080;">Rp.2.000.000</h3>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 16rem;">
                            <img src="{{ asset('img/kamarkostputraharian2.jpg') }}" style="border-radius: 10px; width: 254px; height: 300px; padding: 4px;">
                            <div class="card-body">
                                <p class="text-secondary" style="font-size: 12px; margin-top: -12px">Tambaksari, Surabaya</p>
                                <h3 class="fw-semibold" style="font-size: 14px; font-family: Poppins; margin-top: -16px; color: #800080;">Rp.2.500.000</h3>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 16rem;">
                            <img src="{{ asset('img/kamarkostputraharian3.jpg') }}" style="border-radius: 10px; width: 254px; height: 300px; padding: 4px;">
                            <div class="card-body">
                                <p class="text-secondary" style="font-size: 12px; margin-top: -12px">Gunung Anyar, Surabaya</p>
                                <h3 class="fw-semibold" style="font-size: 14px; font-family: Poppins; margin-top: -16px; color: #800080;">Rp.3.000.000</h3>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 16rem;">
                            <img src="{{ asset('img/kamarkostputraharian4.jpg') }}" style="border-radius: 10px; width: 254px; height: 300px; padding: 4px;">
                            <div class="card-body">
                                <p class="text-secondary" style="font-size: 12px; margin-top: -12px">Mulyosari, Surabaya</p>
                                <h3 class="fw-semibold" style="font-size: 14px; font-family: Poppins; margin-top: -16px; color: #800080;">Rp.3.500.000</h3>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 16rem;">
                            <img src="{{ asset('img/kamarkostputraharian5.jpg') }}" style="border-radius: 10px; width: 254px; height: 300px; padding: 4px;">
                            <div class="card-body">
                                <p class="text-secondary" style="font-size: 12px; margin-top: -12px">Jambangan, Surabaya</p>
                                <h3 class="fw-semibold" style="font-size: 14px; font-family: Poppins; margin-top: -16px; color: #800080;">Rp.4.000.000</h3>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <!-- end promo kost -->
    <!-- icon ion -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- end icon ion -->
    <!-- sweet alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- end sweet alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        function copyText() {
            // Menyalin teks ke clipboard
            var nomorDana = document.getElementById('nomorTelp');
            var teksNomorDana = nomorDana.innerText;

            var textarea = document.createElement('textarea');
            textarea.value = teksNomorDana;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
        }
        var splide = new Splide('.splide.new-1', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();
        var splide = new Splide('.splide.new-2', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();
        var splide = new Splide('.splide.new-3', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();

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
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
</body>

</html>

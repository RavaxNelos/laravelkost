<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
    <link rel="stylesheet" href="{{ asset('css/pemilikcss/transaksi.css') }}">
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
            font-family: 'Ubuntu', sans-serif;
        }

        .btn.btn-dark {
            width: 180px;
            height: 40px;
            border: 2px solid #800080;
            border-radius: 0px;
            font-family: 'Poppins';
        }

        .btn.btn-dark:hover {
            width: 180px;
            height: 40px;
            border: 2px solid #800080;
            border-radius: 0px !important;
            background-color: black;
            font-family: 'Poppins';
        }

        .btn:first-child:active {
            color: white !important;
            background-color: black !important;
            width: 180px;
            height: 40px;
            border: 2px solid #800080;
            border-radius: 0px;
            font-family: 'Poppins';
        }

        .btn.text-secondary {
            width: 180px;
            height: 40px;
            border-radius: 0px;
            font-family: 'Poppins';
        }
    </style>
</head>

<body>
    <section x-data="{ filter: 'bulanan' }">
        <div id="stickyTop" class="sticky-top" style="background-color: transparent;">
            <div class="container py-2">
                <div class="row">
                    <div class="col-5 text-end mt-1">
                        <ion-icon name="newspaper" style="font-size: 18px; color: purple;"></ion-icon>
                    </div>
                    <div class="col-5 mt-1" style="margin-left: -20px;">
                        <h3 class="fw-semibold text-dark" style="font-size: 16px;">Transaksi</h3>
                    </div>
                </div>
            </div>
            <hr class="hr-1" style="border-top: 10px solid #ccc; margin-top: 0px; margin-bottom: 0px;">
            <div class="container">
                <div class="row" style="margin-top: 0px;">
                    <div class="col-6 text-center" style="margin-left: -12px;">
                        <button :class="filter == 'bulanan' ? 'btn btn-dark' : 'btn text-secondary'" x-on:click="filter = 'bulanan';">Kost Bulanan</button>
                    </div>
                    <div class="col-6 text-center" style="margin-left: 0px;">
                        <button :class="filter == 'harian' ? 'btn btn-dark' : 'btn text-secondary'" x-on:click="filter = 'harian';">Sewa Harian</button>
                    </div>
                </div>
            </div>
            <hr class="hr-2" style="border-top: 10px solid #ccc; margin-top: 0px; margin-bottom: 0px;">
        </div>
        <div class="custom-card-body mt-3 mb-3">
            <div class="container py-2">
                <h3 class="fw-semibold" style="font-size: 16px; color: #d8d8d8">Januari</h3>
                <div class="custom-card-list" x-show="filter == 'bulanan'">
                    <div class="container py-2">
                        <div class="row" style="margin-bottom: -4px;">
                            <div class="col-6 text-start">
                                <h3 class="fw-medium" style="font-size: 14px; color:  #9400D3;">No. Pesanan</h3>
                            </div>
                            <div class="col-6 text-end">
                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">QRTU1234567</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <img src="{{ asset('img/kamarkostputra1.jpg') }}" style="width: 80px; height: 70px; border-radius: 8px;">
                            </div>
                            <div class="col-9" style="margin-left: 6px; width: 200px; margin-top: 2px;">
                                <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Putra</h3>
                                <p class="text-secondary fw-normal" style="font-size: 10px; margin-top: -6px; line-height: 14px; width: 190px;">Kamar Uk 3 x 4 M | K.Mandi Dlm | 1 AC PK | 1 Lemari | 2 Kasur | 1 Kulkas...</p>
                                <h3 class="fw-semibold" style="font-size: 16px; color: #800080; font-family: Poppins; margin-top: -14px;">Rp. 2.300.000</h3>
                            </div>
                        </div>
                        <hr class="hr-garis-card" style="margin-top: 2px;">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="fw-normal mb-0" style="font-size: 12px; color:  #9400D3;">03 Januari 2024, 18.00 WIB</p>
                            </div>
                            <div class="col-5 text-end">
                                <p class="text-success fw-normal mb-0" style="font-size: 12px;">Lunas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-card-list" x-show="filter == 'harian'">
                    <div class="container py-2">
                        <div class="row" style="margin-bottom: -4px;">
                            <div class="col-6 text-start">
                                <h3 class="fw-medium" style="font-size: 14px; color:  #9400D3;">No. Pesanan</h3>
                            </div>
                            <div class="col-6 text-end">
                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">QRTU1234567</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <img src="{{ asset('img/kamarkostputra2.jpg') }}" style="width: 80px; height: 70px; border-radius: 8px;">
                            </div>
                            <div class="col-9" style="width: 200px; margin-left: 6px; margin-top: 2px;">
                                <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Putra</h3>
                                <p class="text-secondary fw-normal" style="font-size: 10px; margin-top: -6px; line-height: 14px; width: 190px;">Kamar Uk 4 x 4 M | K.Mandi Dlm | 1 AC PK | 1 Lemari | 2 Kasur | 1 Kulkas...</p>
                                <h3 class="fw-semibold" style="font-size: 16px; color: #800080; font-family: Poppins; margin-top: -14px;">Rp. 525.000</h3>
                            </div>
                        </div>
                        <hr class="hr-garis-card" style="margin-top: 2px;">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="fw-normal mb-0" style="font-size: 12px; color:  #9400D3;">10 Januari 2024, 18.30 WIB</p>
                            </div>
                            <div class="col-5 text-end">
                                <p class="fw-normal mb-0" style="font-size: 12px; color: #800080;">Belum Lunas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="fw-semibold" style="font-size: 16px; color: #d8d8d8">Februari</h3>
                <div class="custom-card-list" x-show="filter == 'bulanan'">
                    <div class="container py-2">
                        <div class="row" style="margin-bottom: -4px;">
                            <div class="col-6 text-start">
                                <h3 class="fw-medium" style="font-size: 14px; color:  #9400D3;">No. Pesanan</h3>
                            </div>
                            <div class="col-6 text-end">
                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">QRTU1234567</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <img src="{{ asset('img/kamarkostputra3.jpg') }}" style="width: 80px; height: 70px; border-radius: 8px;">
                            </div>
                            <div class="col-9" style="margin-left: 6px; width: 200px; margin-top: 2px;">
                                <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Putra</h3>
                                <p class="text-secondary fw-normal" style="font-size: 10px; margin-top: -6px; line-height: 14px; width: 190px;">Kamar Uk 3 x 4 M | K.Mandi Dlm | 1 AC PK | 1 Lemari | 2 Kasur | 1 Kulkas...</p>
                                <h3 class="fw-semibold" style="font-size: 16px; color: #800080; font-family: Poppins; margin-top: -14px;">Rp. 2.300.000</h3>
                            </div>
                        </div>
                        <hr class="hr-garis-card" style="margin-top: 2px;">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="fw-normal mb-0" style="font-size: 12px; color:  #9400D3;">03 Februari 2024, 18.00 WIB</p>
                            </div>
                            <div class="col-5 text-end">
                                <p class="text-success fw-normal mb-0" style="font-size: 12px;">Lunas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-card-list" x-show="filter == 'harian'">
                    <div class="container py-2">
                        <div class="row" style="margin-bottom: -4px;">
                            <div class="col-6 text-start">
                                <h3 class="fw-medium" style="font-size: 14px; color:  #9400D3;">No. Pesanan</h3>
                            </div>
                            <div class="col-6 text-end">
                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">QRTU1234567</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <img src="{{ asset('img/kamarkostputra4.jpg') }}" style="width: 80px; height: 70px; border-radius: 8px;">
                            </div>
                            <div class="col-9" style="width: 200px; margin-left: 6px; margin-top: 2px;">
                                <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Putra</h3>
                                <p class="text-secondary fw-normal" style="font-size: 10px; margin-top: -6px; line-height: 14px; width: 190px;">Kamar Uk 4 x 4 M | K.Mandi Dlm | 1 AC PK | 1 Lemari | 2 Kasur | 1 Kulkas...</p>
                                <h3 class="fw-semibold" style="font-size: 16px; color: #800080; font-family: Poppins; margin-top: -14px;">Rp. 525.000</h3>
                            </div>
                        </div>
                        <hr class="hr-garis-card" style="margin-top: 2px;">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="fw-normal mb-0" style="font-size: 12px; color:  #9400D3;">10 Februari 2024, 18.30 WIB</p>
                            </div>
                            <div class="col-5 text-end">
                                <p class="fw-normal mb-0" style="font-size: 12px; color: #800080;">Belum Lunas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="fw-semibold" style="font-size: 16px; color: #d8d8d8">Maret</h3>
                <div class="custom-card-list" x-show="filter == 'bulanan'">
                    <div class="container py-2">
                        <div class="row" style="margin-bottom: -4px;">
                            <div class="col-6 text-start">
                                <h3 class="fw-medium" style="font-size: 14px; color:  #9400D3;">No. Pesanan</h3>
                            </div>
                            <div class="col-6 text-end">
                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">QRTU1234567</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <img src="{{ asset('img/kamarkostputra5.jpg') }}" style="width: 80px; height: 70px; border-radius: 8px;">
                            </div>
                            <div class="col-9" style="margin-left: 6px; width: 200px; margin-top: 2px;">
                                <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Putra</h3>
                                <p class="text-secondary fw-normal" style="font-size: 10px; margin-top: -6px; line-height: 14px; width: 190px;">Kamar Uk 3 x 4 M | K.Mandi Dlm | 1 AC PK | 1 Lemari | 2 Kasur | 1 Kulkas...</p>
                                <h3 class="fw-semibold" style="font-size: 16px; color: #800080; font-family: Poppins; margin-top: -14px;">Rp. 2.300.000</h3>
                            </div>
                        </div>
                        <hr class="hr-garis-card" style="margin-top: 2px;">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="fw-normal mb-0" style="font-size: 12px; color:  #9400D3;">03 Maret 2024, 18.00 WIB</p>
                            </div>
                            <div class="col-5 text-end">
                                <p class="text-success fw-normal mb-0" style="font-size: 12px;">Lunas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-card-list" x-show="filter == 'harian'">
                    <div class="container py-2">
                        <div class="row" style="margin-bottom: -4px;">
                            <div class="col-6 text-start">
                                <h3 class="fw-medium" style="font-size: 14px; color:  #9400D3;">No. Pesanan</h3>
                            </div>
                            <div class="col-6 text-end">
                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">QRTU1234567</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <img src="{{ asset('img/kamarkostputraharian3.jpg') }}" style="width: 80px; height: 70px; border-radius: 8px;">
                            </div>
                            <div class="col-9" style="width: 200px; margin-left: 6px; margin-top: 2px;">
                                <h3 class="fw-medium" style="font-size: 14px;">Kamar Kost Putra</h3>
                                <p class="text-secondary fw-normal" style="font-size: 10px; margin-top: -6px; line-height: 14px; width: 190px;">Kamar Uk 4 x 4 M | K.Mandi Dlm | 1 AC PK | 1 Lemari | 2 Kasur | 1 Kulkas...</p>
                                <h3 class="fw-semibold" style="font-size: 16px; color: #800080; font-family: Poppins; margin-top: -14px;">Rp. 525.000</h3>
                            </div>
                        </div>
                        <hr class="hr-garis-card" style="margin-top: 2px;">
                        <div class="row">
                            <div class="col-7 text-start">
                                <p class="fw-normal mb-0" style="font-size: 12px; color:  #9400D3;">03 Februari 2024, 18.00 WIB</p>
                            </div>
                            <div class="col-5 text-end">
                                <p class="text-success fw-normal mb-0" style="font-size: 12px;">Lunas</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="garis-pemisah-navbar">
    </section>
    <div class="sticky-bottom">
        <nav class="nav">
            <a href="{{ asset('/pemilik/home') }}" class="nav__link">
                <ion-icon name="home-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Beranda</span>
            </a>
            <a href="{{ asset('/pemilik/area') }}" class="nav__link">
                <ion-icon name="location-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Area Kost</span>
            </a>
            <a href="{{ asset('/pemilik/transaksi') }}" class="nav__link nav-active">
                <ion-icon name="newspaper" style="font-size: 20px;"></ion-icon>
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
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            var stickyTop = document.getElementById('stickyTop');

            // Jika posisi scroll lebih dari 0, berubah menjadi putih, jika tidak, kembalikan ke warna asli
            if (window.scrollY > 0) {
                stickyTop.style.backgroundColor = 'white';
            } else {
                stickyTop.style.backgroundColor = 'transparent';
            }
        });
    </script>
</body>

</html>

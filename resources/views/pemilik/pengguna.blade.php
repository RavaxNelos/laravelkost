<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pengguna</title>
    <link rel="stylesheet" href="{{ asset('css/pemilikcss/pengguna.css') }}">
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

        img.card-img {
            width: 162px;
            height: 230px;
        }

        .form-control:focus {
            color: var(--bs-body-color);
            background-color: var(--bs-body-bg);
            border-color: #000000;
            outline: 0;
            box-shadow: 0 0 0 0.25rem rgb(255, 255, 255);
        }

        .form-control {
            margin-top: -10px;
            display: block;
            width: 100%;
            padding: 0.375rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: var(--bs-body-color);
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-color: var(--bs-body-bg);
            background-clip: padding-box;
            border: var(--bs-border-width) solid var(--bs-border-color);
            border-radius: var(--bs-border-radius);
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
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
            <a href="{{ asset('/pemilik/area') }}" class="nav__link">
                <ion-icon name="location-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Area Kost</span>
            </a>
            <a href="{{ asset('/pemilik/transaksi') }}" class="nav__link">
                <ion-icon name="newspaper-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Transaksi</span>
            </a>
            <a href="{{ asset('/pemilik/pengguna') }}" class="nav__link nav-active">
                <ion-icon name="people" style="font-size: 20px;"></ion-icon>
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
    <section x-data="{ filter: 'baru', openSearch: false }">
        <div class="sticky-top" id="stickyTop">
            <div class="container py-2">
                <div class="row" x-show="openSearch === false">
                    <div class="col-10 text-end mt-1" x-show="filter == 'lama'">
                        <h3 class="fw-semibold" id="seachText" style="font-size: 15px;">Daftar Pengguna Lama <span style="color: #B19CD9;">({{ $totalUsers }})</span></h3>
                    </div>
                    <div class="col-10 text-end mt-1" x-show="filter == 'baru'">
                        <h3 class="fw-semibold" id="seachText" style="font-size: 15px;">Daftar Pengguna Baru <span style="color: #B19CD9;">({{ $totalUsers }})</span></h3>
                    </div>
                    <div class="col-2 text-end mt-1" style="margin-top: -2px;">
                        <i id="searchIcon" class="bi bi-search" x-on:click="openSearch = true" style="font-size: 16px;"></i>
                    </div>
                </div>
                <div class="container" x-show="openSearch === true">
                    <input id="searchInput" type="text" class="form-control  search-input w-100" placeholder="Cari..." style="height: 30px; margin-top: 0px;">
                </div>
            </div>
            <hr class="garis-pemisah-1" style="border-top: 10px solid #ccc; margin-top: -4px; margin-bottom: 0px;" @click="openSearch = false">
            <div class="container" @click="openSearch = false">
                <div class="row" style="margin-top: 0px;">
                    <div class="col-6 text-center" style="margin-left: -12px;">
                        <button :class="filter == 'baru' ? 'btn-aktif' : 'btn-non-aktif'" x-on:click="filter = 'baru';">Pengguna Baru</button>
                    </div>
                    <div class="col-6 text-center" style="margin-left: 0px;">
                        <button :class="filter == 'lama' ? 'btn-aktif' : 'btn-non-aktif'" x-on:click="filter = 'lama';">Pengguna Lama</button>
                    </div>
                </div>
            </div>
            <hr class="garis-kedua" style="margin-bottom: 0px; border-top: 10px solid #ccc; margin-top: 0px;">
        </div>
        <div class="container py-2" @click="openSearch = false">
            <div class="row g-2">
                @foreach ($users as $user)
                    <div class="col-6" x-show="filter == 'baru'">
                        <div class="card" style="border: none">
                            <img src="{{ asset($user->gambar ? 'uploadkamar/' . $user->gambar : '/img/customer1.jpg') }}" class="card-img" style="opacity: 0.9" alt="...">
                            <div class="card-img-overlay p-0">
                                <div class="text-content" style="margin-top: 190px; background-color: rgba(0, 0, 0, 0.5); height: 40px; width: 162px; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                                    <div class="ms-2 mt-2 pt-1">
                                        <div class="text-title-content" style="font-size: 10px;">
                                            <p class="text-white fw-medium mb-0">{{ $user->name }}</p>
                                        </div>
                                        <div class="d-flex">
                                            <p class="text-white-50 font-tag-content mb-0" style="font-size: 10px;">{{ Carbon\Carbon::parse($user->created_at)->locale('id')->isoFormat('DD MMMM Y') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <hr class="garis-terakhir" style="border-top: 10px solid #ccc; margin-top: 0px; margin-bottom: 3.4rem;">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
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
    </script>
</body>

</html>

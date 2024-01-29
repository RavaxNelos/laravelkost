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
        <div class="row ">
            <div class="col-6">
                <div class="header">
                    <img src="img/logokosthomerava.png">
                </div>
            </div>
            <div class="col-6 text-end">
                <div class="header-kanan">
                    <img src="img/avatar.png">
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-lg-6 col-8">
                <div class="header text-center">
                    <p class="header-atas">
                        Lokasi Anda
                        <span class="lokasi">Surabaya, Jawa Timur</span>
                    </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Search Bar -->
                <div class="search-bar" style="position: relative; padding-left: 20px;">
                    <input type="password" name="search" class="form-control" id="search" placeholder="Cari....." style="border-radius: 50px; background-color: #f0f0f0; margin-top: -5px; font-style: italic; width: 300px; border-color: 2px solid #f0f0f0;">
                    <i class="bi bi-search" id="togglePassword" style="position: absolute; font-size: 18px; right: 35px; top: 5px; cursor: pointer;"></i>
                </div>
            </div>
        </div>
        <!-- end search bar -->
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
        <div class="row mt-5">
            <div class="col-12">
                <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Rekomendasi Rumah Kost</h1>
                <section class="splide" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            {{-- @for ($i = 1; $i <= 5; $i++) --}}
                            <li class="splide__slide">
                                <div style="width: 280px;">
                                    <div class="position-relative mb-2">
                                        <img src="img/rumahkost1.jpg" class="w-100 rounded">
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
                                        <img src="img/rumahkost2.jpg" class="w-100 rounded">
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
                                        <img src="img/rumahkost3.jpg" class="w-100 rounded">
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
                                        <img src="img/rumahkost4.jpg" class="w-100 rounded">
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
            </div>
        </div>
        <!-- end didekat mu rumah -->
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
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
    </script>
</body>

</html>

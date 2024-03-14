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
    <div class="sticky-top" id="stickyTop">
        <div class="container py-2">
            <div class="row mt-2">
                <div class="col-6 text-start">
                    <h3 class="fw-semibold" style="font-size: 16px;">Area Kamar Kost</h3>
                </div>
                <div class="col-6 text-end">
                    <i class="bi bi-search" style="font-size: 16px;"></i>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-1" style="border-top: 10px solid #ccc; margin-top: 0px;">
    <div class="container py-3">
        <div class="row">
            <div class="col-9 text-start">
                <h3 class="fw-semibold" style="font-size: 14px;">Area Mulyorejo</h3>
            </div>
            <div class="col-3 text-end">
                <p class="text-primary" style="font-size: 14px;">Semua</p>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
</body>

</html>

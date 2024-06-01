<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="{{ asset('/img/logokosthomerava.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <title>Riwayat</title>
    <link rel="stylesheet" href="{{ asset('css/pemilikcss/riwayat.css') }}">
    <!-- end css rava -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- end font google -->
    <!-- iconbootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- end iconbootstrap -->
    <!-- alphine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- end alphine js -->
    <!-- splide js -->
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- end splide js -->
    <!-- font awoseme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- end font awoseme -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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
            <a href="{{ asset('/pemilik/pengguna') }}" class="nav__link">
                <ion-icon name="people-outline" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Pengguna</span>
            </a>
            <a href="{{ asset('/pemilik/riwayat') }}" class="nav__link nav-active">
                <ion-icon name="time" style="font-size: 20px;"></ion-icon>
                <span class="nav__text">Riwayat</span>
            </a>
            <a href="{{ asset('/pemilik/profil') }}" class="nav__link">
                <ion-icon name="person-outline" style="font-size: 19px; margin-bottom: 1px;"></ion-icon>
                <span class="nav__text">Profil</span>
            </a>
        </nav>
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
    <section x-data="{ filter: 'Bulanan' }">
        <div class="sticky-top" id="stickyHeader">
            <div class="container py-2" style="background-color: white;">
                <div class="row">
                    <div class="col-12 text-center mt-2">
                        <h3 class="fw-semibold" style="font-size: 16px;"><i class="bi bi-clock-history" style="margin-right: 6px; color: #9C27B0; transition: color 0.3s ease;"></i>Riwayat Pembayaran Kost</h3>
                    </div>
                </div>
            </div>
            <hr class="garis-pertama">
            @if (count($transaksi) > 0)
                <div class="container">
                    <div class="row" style="margin-top: -16px;">
                        <div class="col-6 text-center" style="margin-left: -12px;">
                            <button :class="filter == 'Bulanan' ? 'btn btn-dark' : 'btn text-secondary'" x-on:click="filter = 'Bulanan';">Kost Bulanan</button>
                        </div>
                        <div class="col-6 text-center" style="margin-left: 0px;">
                            <button :class="filter == 'Harian' ? 'btn btn-dark' : 'btn text-secondary'" x-on:click="filter = 'Harian';">Sewa Harian</button>
                        </div>
                    </div>
                </div>
                <hr class="garis-kedua">
        </div>
        <div class="container" x-show="filter == 'Bulanan'">
            @if ($transaksi->where('kamarkost.tipe_kost', 'Bulanan')->isEmpty())
                <div class="col-12 text-center" style="margin-top: 140px;">
                    <img src="{{ asset('img/planet.png') }}" width="150">
                </div>
                <div class="col-12 text-center mt-2">
                    <h1 class="fw-medium fs-6">Belum Ada Transaksi Bulanan</h1>
                </div>
            @else
                <div class="card-custom" style="width: 336px; height: auto; background-color: gray; border-radius : 10px; position: absolute;">
                    <div class="container">
                        @foreach ($transaksi->where('kamarkost.tipe_kost', 'Bulanan') as $item)
                            <a href="/pemilik/detailriwayat/{{ $item->id }}" style="text-decoration: none;">
                                <div class="card-item-riwayat" style="background-color: #f5f5f5; width: 100%; height: 148px; border-radius: 8px; margin-top: 10px; margin-bottom: 10px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-8 text-start mt-2">
                                                <h3 class="fw-medium text-secondary" style="font-size: 14px;">No. Pesanan</h3>
                                            </div>
                                            <div class="col-4 mt-2 text-end">
                                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ $item->no_transaksi }}</h3>
                                            </div>
                                            <div class="col-3 text-start">
                                                <img src="{{ asset('uploadkamar/' . $item->kamarkost->gambar_kost) }}" style="width: 80px; height: 70px; border-radius: 8px;">
                                            </div>
                                            <div class="col-7" style="margin-left: 14px;">
                                                <h3 class="fw-medium text-secondary-emphasis" style="font-size: 14px;">Kamar {{ $item->kamarkost->kategori->kategori }}</h3>
                                                <p class="text-secondary fw-normal" style="font-size: 10px; margin-top: -6px; line-height: 14px; width: 190px;">Kamar Uk {{ Illuminate\Support\Str::limit($item->kamarkost->ukuran_kost, 7, '') }} {{ Illuminate\Support\Str::limit($item->kamarkost->fasilitas_kost, 45, '...') }}</p>
                                                <h3 class="fw-medium" style="font-size: 16px; color: #9370DB; font-family: Poppins; margin-top: -10px;">Rp. {{ number_format($item->total_harga, 0, ',', '.') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="garis-pada-card" style="border-top: 1px solid #cccccc; margin-top: 4px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6 text-start" style="margin-top: -10px;">
                                                <p class="text-secondary fw-normal" style="font-size: 12px; width: 200px;">{{ Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('DD MMMM Y, HH:mm') . ' WIB' }}</p>
                                            </div>
                                            <div class="col-6 text-end" style="margin-top: -10px;">
                                                <p class="text-{{ $item->status == 'proses' ? 'warning' : ($item->status == 'selesai' ? 'success' : 'danger') }}" style="font-size: 12px;">
                                                    {{ $item->status == 'proses' ? 'Proses Pembayaran' : ($item->status == 'selesai' ? 'Pembayaran Diterima' : 'Pembayaran Ditolak') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
        <div class="container" x-show="filter == 'Harian'">
            <!-- Container untuk transaksi harian -->
            @if ($transaksi->where('kamarkost.tipe_kost', 'Harian')->isEmpty())
                <div class="col-12 text-center" style="margin-top: 140px;">
                    <img src="{{ asset('img/planet.png') }}" width="150">
                </div>
                <div class="col-12 text-center mt-2">
                    <h1 class="fw-medium fs-6">Belum Ada Transaksi Harian</h1>
                </div>
            @else
                <div class="card-custom" style="width: 336px; height: auto; background-color: gray; border-radius : 10px; position: absolute;">
                    <div class="container">
                        @foreach ($transaksi->where('kamarkost.tipe_kost', 'Harian') as $item)
                            <a href="/pemilik/detailriwayat/{{ $item->id }}" style="text-decoration: none;">
                                <div class="card-item-riwayat" style="background-color: #f5f5f5; width: 100%; height: 148px; border-radius: 8px; margin-top: 10px; margin-bottom: 10px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-8 text-start mt-2">
                                                <h3 class="fw-medium text-secondary" style="font-size: 14px;">No. Pesanan</h3>
                                            </div>
                                            <div class="col-4 mt-2 text-end">
                                                <h3 class="fw-medium" style="font-size: 14px; color: #333333;">{{ $item->no_transaksi }}</h3>
                                            </div>
                                            <div class="col-3 text-start">
                                                <img src="{{ asset('uploadkamar/' . $item->kamarkost->gambar_kost) }}" style="width: 80px; height: 70px; border-radius: 8px;">
                                            </div>
                                            <div class="col-7" style="margin-left: 14px;">
                                                <h3 class="fw-medium text-secondary-emphasis" style="font-size: 14px;">Kamar {{ $item->kamarkost->kategori->kategori }}</h3>
                                                <p class="text-secondary fw-normal" style="font-size: 10px; margin-top: -6px; line-height: 14px; width: 190px;">Kamar Uk {{ Illuminate\Support\Str::limit($item->kamarkost->ukuran_kost, 7, '') }} {{ Illuminate\Support\Str::limit($item->kamarkost->fasilitas_kost, 45, '...') }}</p>
                                                <h3 class="fw-medium" style="font-size: 16px; color: #9370DB; font-family: Poppins; margin-top: -10px;">Rp. {{ number_format($item->total_harga, 0, ',', '.') }}</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="garis-pada-card" style="border-top: 1px solid #cccccc; margin-top: 4px;">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-6 text-start" style="margin-top: -10px;">
                                                <p class="text-secondary fw-normal" style="font-size: 12px; width: 200px;">{{ Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('DD MMMM Y, HH:mm') . ' WIB' }}</p>
                                            </div>
                                            <div class="col-6 text-end" style="margin-top: -10px;">
                                                <p class="text-{{ $item->status == 'proses' ? 'warning' : ($item->status == 'selesai' ? 'success' : 'danger') }}" style="font-size: 12px;">
                                                    {{ $item->status == 'proses' ? 'Proses Pembayaran' : ($item->status == 'selesai' ? 'Pembayaran Diterima' : 'Pembayaran Ditolak') }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    @else
        <div class="col-12 text-center" style="margin-top: 150px;">
            <img src="{{ asset('img/planet.png') }}" width="150">
        </div>
        <div class="col-12 text-center mt-2">
            <h1 class="fw-medium fs-6">Belum Ada Riwayat Transaksi</h1>
        </div>
        @endif
        {{-- <hr class="garis-ketiga"> --}}
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
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

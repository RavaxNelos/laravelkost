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
    <title>Cari Kamar Favorit</title>
    <!-- css rava -->
    <link rel="stylesheet" href="{{ asset('css/usercss/favorit.css') }}">
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
</head>

<body>
    <section x-data="{ openSearch: false }">
        <div class="sticky-top" id="stickyHeader">
            <div class="container py-1">
                <div class="row g-3" x-show="openSearch === false">
                    <div class="col-1" style="margin-top: 22px;">
                        <a href="{{ route('favorit') }}" class="btn-back-home"><ion-icon name="chevron-back-outline"></ion-icon></a>
                    </div>
                    <div class="col-6 text-start" style="margin-top: 26px;">
                        <h3 class="text-dark fw-semibold teks-detail" style="font-size: 16px; transition: color 0.3s ease;">Cari Favorit</h3>
                    </div>
                    <div class="col-5 text-end" style="margin-top: 22px;">
                        <button class="btn-search"><i id="searchIcon" class="bi bi-search" x-on:click="openSearch = true"></i></button>
                    </div>
                </div>
                <form action="{{ route('favorit.cari') }}" method="GET">
                    <div class="mt-2" style="margin-bottom: 4px;" x-show="openSearch === true">
                        <input id="searchInput" type="text" name="search" class="form-control  search-input w-100" placeholder="Cari Kamar Favorit..." style="height: 30px;">
                        {{-- <button type="submit">Search</button> --}}
                    </div>
                </form>
            </div>
        </div>
        <hr class="hr-divider" @click="openSearch = false">
        @if (count($hasil) > 0)
            @foreach ($hasil as $hasilcari)
                <div class="container mt-3 mb-3">
                    <div class="row">
                        <div class="col-5">
                            <img src="{{ asset('uploadkamar/' . $hasilcari->kamarkost->gambar_kost) }}" @click="openSearch = false" style="width: 120px; height: 160px; border-radius: 10px;">
                        </div>
                        <div class="col-5" style="margin-left: -20px;">
                            <a href="#" class="btn btn-outline-secondary text-dark fw-medium" style="font-size: 14px; height: 30px; padding-top: 4px; padding-bottom: 4px; padding-left: 6px; padding-right: 6px;">{{ $hasilcari->kamarkost->kategori->kategori }}</a>
                            <p class="text-secondary fw-normal mt-2" style="font-size: 12px; width: 180px;">{{ $hasilcari->kamarkost->kategori->kategori }} Uk {{ $hasilcari->kamarkost->ukuran_kost }}</p>
                            <p class="fw-medium text-dark" style="font-size: 14px; margin-top: -14px;"><i class="bi bi-geo-alt" style="margin-right: 4px;"></i>{{ $hasilcari->kamarkost->alamat_kost }}</p>
                            <p class="text-secondary fw-normal" style="font-size: 12px; margin-top: -14px; width: 200px;">{{ Illuminate\Support\Str::limit($hasilcari->kamarkost->fasilitas_kost, 55, '...') }}</p>
                            <p class="fw-semibold" style="font-size: 16px; margin-top: 18px; width: 200px;">Rp. {{ $hasilcari->kamarkost->harga_kost }} <span class="text-secondary fw-normal" style="font-size: 12px;">/{{ $hasilcari->kamarkost->tipe_kost }}</span></p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="container">
                <div class="col-12 text-center" style="margin-top: 150px;">
                    <img src="{{ asset('img/planet.png') }}" width="150">
                </div>
                <div class="col-12 text-center mt-2">
                    <h1 class="fw-medium fs-6">Pencarian Tidak Ditemukan</h1>
                </div>
            </div>
        @endif
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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

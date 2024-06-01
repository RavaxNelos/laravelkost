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
    <title>Favorit</title>
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
    <!-- end font awoseme -->
    <style>
        ::-webkit-scrollbar {
            width: 10px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        .popup {
            width: 186px;
            display: none;
            position: fixed;
            top: 86%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.7);
            color: white;
            padding: 10px;
            border-radius: 5px;
            z-index: 999;
        }

        .popup-text {
            font-size: 16px;
        }
    </style>
</head>

<body>
    <section x-data="{ filter: 'Bulanan', openSearch: false }">
        <div class="sticky-top" id="stickyHeader">
            <div class="container py-1">
                <div class="row g-3" x-show="openSearch === false">
                    <div class="col-1" style="margin-top: 22px;">
                        <a href="{{ 'profil' }}" class="btn-back-home"><ion-icon name="chevron-back-outline"></ion-icon></a>
                    </div>
                    <div class="col-6 text-start" style="margin-top: 26px;">
                        <h3 class="text-dark fw-semibold teks-detail" style="font-size: 16px; transition: color 0.3s ease;">Favorit</h3>
                    </div>
                    <div class="col-5 text-end" style="margin-top: 22px;">
                        <a href="{{ route('favorit.cari') }}">
                            <button class="btn-search"><i id="searchIcon" class="bi bi-search"></i></button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-divider">
        @if (count($favorites) > 0)
            <div class="container" @click="openSearch = false">
                <div class="row">
                    <div class="col-12 d-flex gap-2">
                        <button :class="{ 'btn-nyala': filter === 'Bulanan', 'btn-mati': filter === 'Harian' }" x-on:click="filter = 'Bulanan'" class="btn-animated">
                            <span class="btn-overlay"></span>
                            Kost Bulanan
                        </button>
                        <button :class="{ 'btn-nyala': filter === 'Harian', 'btn-mati': filter === 'Bulanan' }" x-on:click="filter = 'Harian'" class="btn-animated">
                            <span class="btn-overlay"></span>
                            Sewa Harian
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="filter == 'Bulanan'">
                @if ($favorites->where('category', 'Bulanan')->isEmpty())
                    <div class="col-12 text-center" style="margin-top: 140px;">
                        <img src="{{ asset('img/planet.png') }}" width="150">
                    </div>
                    <div class="col-12 text-center mt-2">
                        <h1 class="fw-medium fs-6">Belum Ada Kamar Favorit Bulanan</h1>
                    </div>
                @else
                    @foreach ($favorites->where('category', 'Bulanan') as $favorite)
                        <div class="container mt-3" @click="openSearch = false" data-favorite-id="{{ $favorite->id }}">
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ asset('uploadkamar/' . $favorite->kamarkost->gambar_kost) }}" style="width: 120px; height: 160px; border-radius: 10px;">
                                </div>
                                <div class="col-5" style="margin-left: -20px;">
                                    <a href="#" class="btn btn-outline-secondary text-dark fw-medium" style="font-size: 14px; height: 30px; padding-top: 4px; padding-bottom: 4px; padding-left: 6px; padding-right: 6px;">{{ $favorite->kamarkost->kategori->kategori }}</a>
                                    <p class="text-secondary fw-normal mt-2" style="font-size: 12px; width: 180px;">{{ $favorite->kamarkost->kategori->kategori }} Uk {{ $favorite->kamarkost->ukuran_kost }}</p>
                                    <p class="fw-medium text-dark" style="font-size: 14px; margin-top: -14px;"><i class="bi bi-geo-alt" style="margin-right: 4px;"></i>{{ $favorite->kamarkost->alamat_kost }}</p>
                                    <p class="text-secondary fw-normal" style="font-size: 12px; margin-top: -14px; width: 200px;">{{ Illuminate\Support\Str::limit($favorite->kamarkost->fasilitas_kost, 55, '...') }}</p>
                                    <p class="fw-semibold" style="font-size: 16px; margin-top: 18px; width: 200px;">Rp. {{ $favorite->kamarkost->harga_kost }} <span class="text-secondary fw-normal" style="font-size: 12px;">/{{ $favorite->kamarkost->tipe_kost }}</span></p>
                                </div>
                                <div class="col-2 text-end">
                                    <i class="bi bi-star-fill star-icon btn" style="color: purple; font-size: 18px; width: 40px; height: auto; border: none; border-radius: 50%;  background-color: rgba(0, 0, 0, 0.8); padding-left: 4px; padding-right: 4px; margin-top: -10px;" onclick="deleteFavoriteProduct({{ $favorite->id }},'{{ $favorite->category }}')"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
            <div x-show="filter == 'Harian'">
                @if ($favorites->where('category', 'Harian')->isEmpty())
                    <div class="col-12 text-center" style="margin-top: 140px;">
                        <img src="{{ asset('img/planet.png') }}" width="150">
                    </div>
                    <div class="col-12 text-center mt-2">
                        <h1 class="fw-medium fs-6">Belum Ada Kamar Favorit Harian</h1>
                    </div>
                @else
                    @foreach ($favorites->where('category', 'Harian') as $favorite)
                        <div class="container mt-3" @click="openSearch = false" data-favorite-id="{{ $favorite->id }}">
                            <div class="row">
                                <div class="col-5">
                                    <img src="{{ asset('uploadkamar/' . $favorite->kamarkost->gambar_kost) }}" style="width: 120px; height: 160px; border-radius: 10px;">
                                </div>
                                <div class="col-5" style="margin-left: -20px;">
                                    <a href="#" class="btn btn-outline-secondary text-dark fw-medium" style="font-size: 14px; height: 30px; padding-top: 4px; padding-bottom: 4px; padding-left: 6px; padding-right: 6px;">{{ $favorite->kamarkost->kategori->kategori }}</a>
                                    <p class="text-secondary fw-normal mt-2" style="font-size: 12px; width: 180px;">{{ $favorite->kamarkost->kategori->kategori }} Uk {{ $favorite->kamarkost->ukuran_kost }}</p>
                                    <p class="fw-medium text-dark" style="font-size: 14px; margin-top: -14px;"><i class="bi bi-geo-alt" style="margin-right: 4px;"></i>{{ $favorite->kamarkost->alamat_kost }}</p>
                                    <p class="text-secondary fw-normal" style="font-size: 12px; margin-top: -14px; width: 200px;">{{ Illuminate\Support\Str::limit($favorite->kamarkost->fasilitas_kost, 55, '...') }}</p>
                                    <p class="fw-semibold" style="font-size: 16px; margin-top: 18px; width: 200px;">Rp. {{ $favorite->kamarkost->harga_kost }} <span class="text-secondary fw-normal" style="font-size: 12px;">/{{ $favorite->kamarkost->tipe_kost }}</span></p>
                                </div>
                                <div class="col-2 text-end">
                                    <i class="bi bi-star-fill star-icon btn" style="color: purple; font-size: 18px; width: 40px; height: auto; border: none; border-radius: 50%;  background-color: rgba(0, 0, 0, 0.8); padding-left: 4px; padding-right: 4px; margin-top: -10px;" onclick="deleteFavoriteProduct({{ $favorite->id }},'{{ $favorite->category }}')"></i>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        @else
            <div class="col-12 text-center" style="margin-top: 150px;">
                <img src="{{ asset('img/planet.png') }}" width="150">
            </div>
            <div class="col-12 text-center mt-2">
                <h1 class="fw-medium fs-6">Belum Ada Kamar Yang Difavoritkan</h1>
            </div>
            <div class="col-12 text-center mt-2">
                <form action="/user/home">
                    <button class="btn btn-info" style="font-size: 14px;">Tambahkan Kamar Yang Difavoritkan</button>
                </form>
            </div>
        @endif
        <div id="popup" class="popup">
            <span class="popup-text" id="popupText">Dihapus dari favorit</span>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
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
        var starIcons = document.querySelectorAll(".star-icon");
        var popup = document.getElementById("popup");
        var popupText = document.getElementById("popupText");

        // Menambahkan event listener ke setiap ikon bintang
        starIcons.forEach(function(starIcon) {
            starIcon.addEventListener("click", function() {
                if (starIcon.classList.contains("bi-star-fill")) {
                    starIcon.classList.remove("bi-star-fill");
                    starIcon.classList.add("bi-star");
                    popupText.textContent = "Dihapus Dari Favorit";
                } else {
                    starIcon.classList.remove("bi-star");
                    starIcon.classList.add("bi-star-fill");
                    popupText.textContent = "Berhasil Difavoritkan";
                }
                popup.style.display = "block";
                setTimeout(function() {
                    popup.style.display = "none";
                }, 1500); // Hide popup after 1.5 seconds
            });
        });

        function deleteFavoriteProduct(favoriteID, category) {
            $.ajax({
                url: '/favorit/delete',
                type: 'POST',
                data: {
                    favorite_id: favoriteID,
                    category: category,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    console.log(response.alert);
                    $('#popup-text').html(response.alert);
                    $('[data-favorite-id="' + favoriteID + '"]').remove();
                }
            });
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

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
    <div class="sticky-top" id="stickyHeader">
        <div class="container py-1">
            <div class="row g-3">
                <div class="col-1" style="margin-top: 22px;">
                    <a href="/profil" class="btn-back-home"><ion-icon name="chevron-back-outline"></ion-icon></a>
                </div>
                <div class="col-6 text-start" style="margin-top: 26px;">
                    <h3 class="text-dark fw-semibold teks-detail" style="font-size: 16px; transition: color 0.3s ease;">Favorit</h3>
                </div>
                <div class="col-5 text-end" style="margin-top: 22px;">
                    <button class="btn-search"><i class="bi bi-search"></i></button>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-divider">
    <section x-data="{ filter: 'bulanan' }">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex gap-2">
                    <button :class="{ 'btn-nyala': filter === 'bulanan', 'btn-mati': filter === 'harian' }" x-on:click="filter = 'bulanan'" class="btn-animated">
                        <span class="btn-overlay"></span>
                        Kost Bulanan
                    </button>
                    <button :class="{ 'btn-nyala': filter === 'harian', 'btn-mati': filter === 'bulanan' }" x-on:click="filter = 'harian'" class="btn-animated">
                        <span class="btn-overlay"></span>
                        Sewa Harian
                    </button>
                </div>
            </div>
        </div>
        <div class="container px-3" x-show="filter == 'bulanan'">
            <div class="row">
                <div class="col-12 text-center" style="margin-top: 8rem;">
                    <img src="{{ asset('img/planet.png') }}" width="180" height="180">
                </div>
                <div class="col-12 text-center">
                    <p class="fw-normal" style="font-size: 14px;">Belum Ada Kost Bulanan Yang Difavoritkan</p>
                </div>
                <div class="col-12 text-center">
                    <form action="/home">
                        <button class="btn btn-tambah" style="border: 1px solid purple; font-size: 14px; color: purple;">Tambahkan terlebih dahulu</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="container mt-3" x-show="filter == 'harian'">
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('img/kamarkostputraharian1.jpg') }}" style="width: 120px; height: 160px; border-radius: 10px;">
                </div>
                <div class="col-7" style="margin-left: -20px;">
                    <a href="#" class="btn btn-outline-secondary text-dark fw-medium" style="font-size: 14px; width: 80px; height: 30px; padding: 4px;">Putra</a><i class="bi bi-star-fill star-icon" style="color: purple; font-size: 20px; margin-left: 5.2rem;"></i>
                    <p class="text-secondary fw-normal mt-2" style="font-size: 12px;">Kost Putra Uk 3 x 4 Meter</p>
                    <p class="fw-medium text-dark" style="font-size: 14px; margin-top: -14px;"><i class="bi bi-geo-alt" style="margin-right: 4px;"></i>Mulyosari</p>
                    <p class="text-secondary fw-normal" style="font-size: 12px; margin-top: -14px;">K. Mandi Dalam | Wifi | Lemari | Kulkas | 1 PK AC... </p>
                    <p class="fw-semibold" style="font-size: 16px; margin-top: 18px;">Rp. 540.000 <span class="text-secondary fw-normal" style="font-size: 12px;">/harian</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('img/kamarkostputraharian2.jpg') }}" style="width: 120px; height: 160px; border-radius: 10px;">
                </div>
                <div class="col-7" style="margin-left: -20px;">
                    <a href="#" class="btn btn-outline-secondary text-dark fw-medium" style="font-size: 14px; width: 80px; height: 30px; padding: 4px;">Putra</a><i class="bi bi-star-fill star-icon" style="color: purple; font-size: 20px; margin-left: 5.2rem;"></i>
                    <p class="text-secondary fw-normal mt-2" style="font-size: 12px;">Kost Putra Uk 7 x 4 Meter</p>
                    <p class="fw-medium text-dark" style="font-size: 14px; margin-top: -14px;"><i class="bi bi-geo-alt" style="margin-right: 4px;"></i>Mulyorejo</p>
                    <p class="text-secondary fw-normal" style="font-size: 12px; margin-top: -14px;">K. Mandi Dalam | Wifi | Lemari | Kulkas | 1 PK AC... </p>
                    <p class="fw-semibold" style="font-size: 16px; margin-top: 18px;">Rp. 500.000 <span class="text-secondary fw-normal" style="font-size: 12px;">/harian</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('img/kamarkostputriharian1.jpg') }}" style="width: 120px; height: 160px; border-radius: 10px;">
                </div>
                <div class="col-7" style="margin-left: -20px;">
                    <a href="#" class="btn btn-outline-secondary text-dark fw-medium" style="font-size: 14px; width: 80px; height: 30px; padding: 4px;">Putra</a><i class="bi bi-star-fill star-icon" style="color: purple; font-size: 20px; margin-left: 5.2rem;"></i>
                    <p class="text-secondary fw-normal mt-2" style="font-size: 12px;">Kost Putra Uk 4 x 4 Meter</p>
                    <p class="fw-medium text-dark" style="font-size: 14px; margin-top: -14px;"><i class="bi bi-geo-alt" style="margin-right: 4px;"></i>Benowo</p>
                    <p class="text-secondary fw-normal" style="font-size: 12px; margin-top: -14px;">K. Mandi Dalam | Wifi | Lemari | Kulkas | 1 PK AC... </p>
                    <p class="fw-semibold" style="font-size: 16px; margin-top: 18px;">Rp. 530.000 <span class="text-secondary fw-normal" style="font-size: 12px;">/harian</span></p>
                </div>
            </div>
            <div class="row">
                <div class="col-5">
                    <img src="{{ asset('img/kamarkostputriharian2.jpg') }}" style="width: 120px; height: 160px; border-radius: 10px;">
                </div>
                <div class="col-7" style="margin-left: -20px;">
                    <a href="#" class="btn btn-outline-secondary text-dark fw-medium" style="font-size: 14px; width: 80px; height: 30px; padding: 4px;">Putra</a><i class="bi bi-star-fill star-icon" style="color: purple; font-size: 20px; margin-left: 5.2rem;"></i>
                    <p class="text-secondary fw-normal mt-2" style="font-size: 12px;">Kost Putra Uk 5 x 4 Meter</p>
                    <p class="fw-medium text-dark" style="font-size: 14px; margin-top: -14px;"><i class="bi bi-geo-alt" style="margin-right: 4px;"></i>Gunung Anyar</p>
                    <p class="text-secondary fw-normal" style="font-size: 12px; margin-top: -14px;">K. Mandi Dalam | Wifi | Lemari | Kulkas | 1 PK AC... </p>
                    <p class="fw-semibold" style="font-size: 16px; margin-top: 18px;">Rp. 525.000 <span class="text-secondary fw-normal" style="font-size: 12px;">/harian</span></p>
                </div>
            </div>
            <div id="popup" class="popup">
                <span class="popup-text" id="popupText">Dihapus dari favorit</span>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
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
    </script>
</body>

</html>

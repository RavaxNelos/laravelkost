<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/detailrumah.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
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

        * {
            font-family: 'Poppins', sans-serif;
        }

        html,
        body {
            user-drag: none;
            user-select: none;
        }

        button.btn-like-detail {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(50px) !important;
        }

        .read-more-btn {
            color: blue;
            cursor: pointer;
            font-style: italic;
        }

        .additional-text {
            display: none;
        }

        .custom-popup-class {
            height: auto !important;
            /* Sesuaikan dengan tinggi yang diinginkan */
        }

        .custom-content-class {
            margin-left: -8px !important;
            font-size: 18px !important;
            width: 250px;
            /* Sesuaikan ukuran teks sesuai kebutuhan */
        }

        .ellipsis {
            display: inline;
            /* Tampilkan secara default */
        }

        .hide-ellipsis {
            display: none;
            /* Sembunyikan ketika diperlukan */
        }

        .fixed-top.scrolled .btn-back-home {
            transition: color 0.3s ease;
            color: #000000 !important;
            /* Ganti dengan warna ikon yang diinginkan saat di-scroll */
        }

        div:where(.swal2-container) .swal2-html-container {
            font-size: 16px !important;
            font-weight: 400 !important;
            color: gray !important;
            margin-top: -20px !important;
        }

        div:where(.swal2-container) div:where(.swal2-popup) {
            width: 14em !important;
            height: 12em !important;
            border-radius: 10% !important;
        }

        div.swal2-success-ring {
            margin-top: -20px !important;
        }

        span.swal2-success-line-tip {
            margin-top: -20px !important;
        }

        span.swal2-success-line-long {
            margin-top: -20px !important;
        }

        div.swal2-icon.swal2-error.swal2-icon-show {
            margin-top: 20px !important;
            margin-bottom: 30px !important;
        }

        #kamarKost {
            opacity: 0;
            /* Awalnya sembunyikan */
            transform: translateY(-25px);
            /* Geser ke atas agar tidak terlihat */
        }
    </style>
</head>


<body>
    <nav class="fixed-top" id="stickyTop">
        <div class="container py-3">
            <div class="row g-3">
                <div class="col-1">
                    <a href="/home" class="btn-back-home"><ion-icon name="chevron-back-outline" style="margin-bottom: -4px;"></ion-icon></a>
                </div>
                <div class="col-6 mt-4 text-start" id="kamarKost" style="margin-top: 25px !important;">
                    <h3 class="fw-bold" style="font-size: 16px; transition: color 0.3s ease;">Detail Kamar Kost</h3>
                </div>
                <div class="col-5 text-end">
                    <button class="btn-like-detail" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                </div>
            </div>
        </div>
    </nav>
    <div id="popup-background" onclick="closePopup()"></div>
    <div id="popup">
        <p id="popup-text" style="font-size: 14px;">Berhasil DiFavoritkan</p>
    </div>
    <section class="splide new-2" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 100px; min-width: 250px; position: relative;">
                        <img src="{{ asset('img/kostsurabaya6.jpg') }}"style="border-radius: 0px;" class="w-100">
                    </div>
                </li>
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 100px; min-width: 250px; position: relative;">
                        <img src="{{ asset('img/kostsurabaya15.jpg') }}"style="border-radius: 0px;" class="w-100">
                    </div>
                </li>
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 100px; min-width: 250px; position: relative;">
                        <img src="{{ asset('img/kostsurabaya1.jpg') }}"style="border-radius: 0px;" class="w-100">
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div class="container">
        <!-- Judul kamar -->
        <div class="col-7 text-start mt-2">
            <h6 class="fw-bold" style="font-size: 18px; font-family: Poppins; color: #1e1e1ee5">Kamar Kost Putra</h6>
        </div>
        <div class="row">
            <div class="col-9 text-start">
                <p class="text-secondary" style="margin-top: -8px; font-size: 12px;">Ukuran Kamar Kostnya 3 x 4 Meter</p>
            </div>
        </div>
        <!-- end Judul kamar -->
        <!-- harga kamar -->
        <div class="row" style="margin-top: -8px; margin-bottom: 6px;">
            <div class="col-12 text-start">
                <h6 class="fw-bold" style="font-size: 22px; color: rgba(128, 0, 128, 0.9);">Rp. 2.000.000</h6>
            </div>
        </div>
        <!-- end harga kamar -->
        <div class="col-12 text-start">
            <h6 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas</h6>
        </div>
        <section class="splide new" aria-label="Splide Basic HTML Example" style="margin-top: -36px">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center;">
                            <img src="{{ asset('img/iconwifi.png') }}" width="24" height="24">
                            <div class="text-dark" style="margin-top: 4px;">
                                <p style="font-size: 10px; color: #9a8a8a;">Wifi</p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center;">
                            <img src="{{ asset('img/iconkasur.png') }}" width="24" height="24">
                            <div class="text-dark" style="margin-top: 4px;">
                                <p style="font-size: 10px; color: #9a8a8a;">Kasur</p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                            <img src="{{ asset('img/iconlemari.png') }}" width="24" height="24">
                            <div class="text-dark" style="margin-top: 4px;">
                                <p style="font-size: 10px; color: #9a8a8a;">Lemari</p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                            <img src="{{ asset('img/icondapur.png') }}" width="24" height="24">
                            <div class="text-dark" style="margin-top: 4px;">
                                <p style="font-size: 10px; color: #9a8a8a;">Dapur</p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                            <img src="{{ asset('img/iconkamarmandi.png') }}" width="24" height="24">
                            <div class="text-dark" style="margin-top: 4px;">
                                <p style="font-size: 10px; color: #9a8a8a;">Toilet</p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                            <img src="{{ asset('img/iconac.png') }}" width="24" height="24">
                            <div class="text-dark" style="margin-top: 4px;">
                                <p style="font-size: 10px; color: #9a8a8a;">Ac</p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                            <img src="{{ asset('img/iconkulkas.png') }}" width="24" height="24">
                            <div class="text-dark" style="margin-top: 4px;">
                                <p style="font-size: 10px; color: #9a8a8a;">Kulkas</p>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                            <img src="{{ asset('img/iconsofa.png') }}" width="24" height="24">
                            <div class="text-dark" style="margin-top: 4px;">
                                <p style="font-size: 10px; color: #9a8a8a;">Sofa</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="col-12">
            <h6 class="fw-semibold">Tentang Kamar Kost</h6>
            <p class="text-secondary" style="font-size: 12px;">
                Besar ukuran kamar kostnya 3 x 4 Meter. Kamar kost Putra ini juga memiliki fasilitas berbagai macam seperti ac, toilet, dan lain-lain<span class="ellipsis">...</span>
                <span class="additional-text">. Beserta ada sebuah kamar mandi vip ynag di dalamnya terdapat sebuah alat untuk mandi</span>
                <span class="read-more-btn" onclick="toggleReadMore()">Lihat Selengkapnya</span>
            </p>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="Kamarmandi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="height: 364px; width: 344px; position: absolute; top: 120px;">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="{{ asset('img/interior1.jpg') }}" height="220" width="334" style="border-radius: 5px;">
                        <div class="h3 fw-bold text-center mt-2" style="font-size: 18px;">Kamar Mandi</div>
                        <p class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;">
                            Kamar mandi memiliki ukuran yang umumnya berkisar antara 2 meter x 2 meter hingga 3 meter x 3 meter. Di dalamnya, terdapat wastafel, toilet, dan bak mandi atau shower. Dinding seringkali dilapisi keramik untuk memudahkan pembersihan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Ac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="height: 364px; width: 344px; position: absolute; top: 120px;">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="{{ asset('img/interior2.jpg') }}" height="220" width="334" style="border-radius: 5px;">
                        <div class="h3 fw-bold text-center mt-2" style="font-size: 18px;">AC PANASONIC</div>
                        <p class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;">
                            AC Panasonic hadir dalam berbagai ukuran, mulai dari model split dengan kapasitas 0.5 PK hingga model ducted dengan kapasitas 5 PK. Fitur-fitur canggihnya meliputi teknologi inverter untuk efisiensi energi, filter nanoe™ yang membersihkan udara. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Dapur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="height: 364px; width: 344px; position: absolute; top: 120px;">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="{{ asset('img/interior3.jpg') }}" height="220" width="334" style="border-radius: 5px;">
                        <div class="h3 fw-bold text-center mt-2" style="font-size: 18px;">Dapur</div>
                        <p class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;">
                            Dapur memiliki ukuran yang bervariasi, umumnya dimulai dari sekitar 3 meter x 3 meter hingga sesuai dengan kebutuhan ruang. Di dalamnya, terdapat sink, kompor atau oven, lemari penyimpanan, dan meja kerja.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Tv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="height: 364px; width: 344px; position: absolute; top: 120px;">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="{{ asset('img/interior4.jpg') }}" height="220" width="334" style="border-radius: 5px;">
                        <div class="h3 fw-bold text-center mt-2" style="font-size: 18px;">Televisi LG</div>
                        <p class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;">
                            TV LG hadir dalam berbagai ukuran, mulai dari model kecil sekitar 32 inci hingga ukuran besar lebih dari 75 inci. Fitur-fitur canggihnya mencakup teknologi OLED atau LED, resolusi 4K atau 8K untuk kualitas gambar tajam, dan dukungan untuk HDR.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Kulkas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="height: 364px; width: 344px; position: absolute; top: 120px;">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="{{ asset('img/interior5.jpg') }}" height="220" width="334" style="border-radius: 5px;">
                        <div class="h3 fw-bold text-center mt-2" style="font-size: 18px;">Kulkas LG</div>
                        <p class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;">
                            Kulkas LG menghadirkan kombinasi elegan antara desain modern dan teknologi inovatif. Dengan ukuran yang bervariasi, mulai dari yang kompak hingga besar, kulkas LG menyediakan ruang penyimpanan yang efisien.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Lemari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="height: 364px; width: 344px; position: absolute; top: 120px;">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="{{ asset('img/interior6.jpg') }}" height="220" width="334" style="border-radius: 5px;">
                        <div class="h3 fw-bold text-center mt-2" style="font-size: 18px;">Lemari IKEA</div>
                        <p class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;">
                            IKEA menawarkan berbagai jenis lemari dengan ukuran dan desain yang beragam. Contohnya, lemari PAX hadir dalam berbagai ukuran lebar, tinggi, dan kedalaman, memberikan fleksibilitas dalam penyesuaian dengan kamar kost Anda.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Kasur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="height: 364px; width: 344px; position: absolute; top: 120px;">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="{{ asset('img/interior7.jpg') }}" height="220" width="334" style="border-radius: 5px;">
                        <div class="h3 fw-bold text-center mt-2" style="font-size: 18px;">Kasur IKEA</div>
                        <p class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;">
                            Kasur IKEA hadir dalam berbagai ukuran, termasuk single, double, queen, dan king size, untuk memenuhi berbagai kebutuhan ruang tidur. Fitur-fiturnya pada kasur sebagai berikut, mencakup desain ergonomic, lapisan busa atau pegas untuk kenyamanan.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Wifi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="height: 364px; width: 344px; position: absolute; top: 120px;">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="{{ asset('img/interior8.jpg') }}" height="220" width="334" style="border-radius: 5px;">
                        <div class="h3 fw-bold text-center mt-2" style="font-size: 18px;">Wifi ASUS</div>
                        <p class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;">
                            Router WiFi Asus hadir dalam berbagai model dengan berbagai ukuran dan fitur. Ukuran umumnya kompak, cocok untuk pengaturan rumah tangga atau kantor kecil. Fitur canggihnya mencakup teknologi WiFi 6 terbaru, kecepatan transmisi tinggi, dan kapabilitas.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <h6 class="fw-semibold" style="margin-bottom: 10px;">Fasilitas Kamar</h6>
            <section class="splide new-1" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Kamarmandi" style="border: none; background-color: white; margin-left: -5px;">
                                <img src="{{ asset('img/interior1.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                            </button>
                        </li>
                        <li class="splide__slide">
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Ac" style="border: none; background-color: white;">
                                <img src="{{ asset('img/interior2.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                            </button>
                        </li>
                        <li class="splide__slide">
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Dapur" style="border: none; background-color: white;">
                                <img src="{{ asset('img/interior3.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                            </button>
                        </li>
                        <li class="splide__slide">
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Tv" style="border: none; background-color: white;">
                                <img src="{{ asset('img/interior4.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                            </button>
                        </li>
                        <li class="splide__slide">
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Kulkas" style="border: none; background-color: white;">
                                <img src="{{ asset('img/interior5.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                            </button>
                        </li>
                        <li class="splide__slide">
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Lemari" style="border: none; background-color: white;">
                                <img src="{{ asset('img/interior6.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                            </button>
                        </li>
                        <li class="splide__slide">
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Kasur" style="border: none; background-color: white;">
                                <img src="{{ asset('img/interior7.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                            </button>
                        </li>
                        <li class="splide__slide">
                            <!-- Button trigger modal -->
                            <button type="button" data-bs-toggle="modal" data-bs-target="#Wifi" style="border: none; background-color: white;">
                                <img src="{{ asset('img/interior8.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                            </button>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <div class="garis-pembatas-2"></div>
    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" id="modalImage" alt="Full Image">
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-bottom">
        <div class="container">
            <div class="row">
                <div class="col-2 mt-3">
                    <a href="https://api.whatsapp.com/send?phone=6282332724688" target="_blank" rel="noopener noreferrer">
                        <button class="btn-wa"><i class="bi bi-whatsapp"></i></button>
                    </a>
                </div>
                <div class="col-2 mt-3">
                    <a href="https://maps.app.goo.gl/pWPjQFsNmoAjsngG7" target="_blank" rel="noopener noreferrer">
                        <button class="btn-lokasi"><i class="bi bi-geo-alt-fill"></i></button>
                    </a>
                </div>
                <div class="col-8 mt-3">
                    <form action="{{ route('transaksi') }}">
                        <button class="btn-pesan">Pesan Sekarang</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        var splide = new Splide('.splide.new', {
            arrows: false,
            pagination: false,
            perPage: 3,
            autoWidth: true,
            gap: '1.6rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();
        var splide = new Splide('.splide.new-1', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '-0.2rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();

        var splide = new Splide('.splide.new-2', {
            type: 'loop',
            autoplay: true,
            lazyLoad: 'nearby',
            arrows: false,
            interval: '2000'
        });
        splide.mount();

        let isFavorite = false;

        function toggleReadMore() {
            const ellipsis = document.querySelector(".ellipsis");
            const textSecondary = document.querySelector('.text-secondary');
            const readMoreBtn = document.querySelector('.read-more-btn');
            const additionalText = document.querySelector('.additional-text');

            textSecondary.classList.toggle('expanded');

            if (textSecondary.classList.contains('expanded')) {
                additionalText.style.display = 'inline';
                ellipsis.classList.add("hide-ellipsis");
                readMoreBtn.textContent = 'Tutup';
            } else {
                additionalText.style.display = 'none';
                ellipsis.classList.remove("hide-ellipsis");
                readMoreBtn.textContent = 'Lihat Selengkapnya';
            }
        }

        let isAlertShown = false;

        function changeIconAndColor(button) {
            // Mengambil elemen ikon pada tombol
            var iconElement = button.querySelector("i");

            // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
            iconElement.classList.toggle("bi-star");
            iconElement.classList.toggle("bi-star-fill");

            // Mengubah warna ikon menjadi kuning
            var currentColor = iconElement.style.color;
            iconElement.style.color = (currentColor === "purple") ? "" : "purple";

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
            }, 3000);
        }

        function closePopup() {
            var popupBackground = document.getElementById('popup-background');
            var popup = document.getElementById('popup');

            popupBackground.style.display = 'none';
            popup.style.display = 'none';
        }
        document.addEventListener("DOMContentLoaded", function() {
            var stickyTop = document.getElementById("stickyTop");
            var lastScrollTop = 0;
            var scrollThreshold = 0; // Ubah nilai sesuai dengan ukuran y yang diinginkan

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
        document.addEventListener('DOMContentLoaded', function() {
            var kamarKost = document.getElementById('kamarKost');

            window.addEventListener('scroll', function() {
                var scrollPosition = window.scrollY;

                if (scrollPosition > 0) { // Ubah angka ini sesuai dengan tinggi scroll yang diinginkan
                    kamarKost.style.opacity = '1';
                    kamarKost.style.transform = 'translateY(0)';
                } else {
                    kamarKost.style.opacity = '0';
                    kamarKost.style.transform = 'translateY(-25px)';
                }
            });
        });
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/detailrumah.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
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
    </style>
</head>


<body>
    <nav class="fixed-top" id="stickyTop">
        <div class="container py-3">
            <div class="row g-3">
                <div class="col-6">
                    <a href="/home" class="btn-back-home"><ion-icon name="chevron-back-outline" style="margin-bottom: -4px;"></ion-icon></a>
                </div>
                <div class="col-6 text-end">
                    <button class="btn-like-detail" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
                </div>
            </div>
        </div>
    </nav>
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
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="height: 360px; width: 236px; position: absolute; top: 18%; left: 16%;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Kamar Mandi</h1>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/interior1.jpg') }}" height="200" width="200" style="border-radius: 5px;">
                        <p class="text-secondary fw-normal" style="font-size: 14px; margin-top: 1rem;">Kamar mandi/toilet ini dilengkapi dengan wastafel estetis, toilet privat, dan shower atau bak mandi yang menyegarkan. Kamar mandi di kost-kostan ini juga menawarkan suasana yang bersih dan minimalis. Dengan pencahayaan alami yang lembut dan perlengkapan mandi yang lengkap, kamar mandi ini memberikan kenyamanan bagi penghuninya. Desain fungsionalnya menciptakan ruang yang efisien untuk memenuhi kebutuhan harian tanpa kehilangan sentuhan kebersihan dan kenyamanan. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Ac" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="height: 360px; width: 236px; position: absolute; top: 18%; left: 16%;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ac</h1>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/interior2.jpg') }}" height="200" width="200" style="border-radius: 5px;">
                        <p class="text-secondary fw-normal" style="font-size: 14px; margin-top: 1rem;">AC merek Panasonic sering menjadi pilihan tepat untuk kost-kostan dengan pertimbangan kualitas dan efisiensi energi. Dikenal dengan desain yang kompak, Panasonic menyediakan AC yang mudah diintegrasikan dalam ruang terbatas. Fitur andal seperti teknologi inverter untuk penghematan energi, filter udara nanoe™ yang membersihkan udara dari partikel mikro, dan pengendalian suhu yang presisi membuatnya ideal untuk menciptakan lingkungan yang nyaman dan sehat di kost-kostan Anda. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Dapur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="height: 360px; width: 236px; position: absolute; top: 18%; left: 16%;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Dapur</h1>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/interior3.jpg') }}" height="200" width="200" style="border-radius: 5px;">
                        <p class="text-secondary fw-normal" style="font-size: 14px; margin-top: 1rem;">Dapur di kost-kostan dirancang sederhana namun fungsional. Dilengkapi dengan peralatan dasar seperti kompor gas, sink, dan kulkas, dapur ini memenuhi kebutuhan dasar penghuninya. Fasilitas tambahan seperti microwave atau rice cooker mungkin tersedia untuk memberikan kenyamanan dalam persiapan makanan sehari-hari. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Tv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="height: 360px; width: 236px; position: absolute; top: 18%; left: 16%;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tv</h1>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/interior4.jpg') }}" height="200" width="200" style="border-radius: 5px;">
                        <p class="text-secondary fw-normal" style="font-size: 14px; margin-top: 1rem;">TV merek LG merupakan pilihan ideal untuk kost-kostan dengan desain modern dan teknologi canggih. Dikenal dengan kualitas gambar yang tajam dan warna yang hidup, TV LG sering dilengkapi dengan fitur pintar (Smart TV) untuk akses mudah ke platform streaming. Teknologi suara Dolby Audio yang dimilikinya memberikan pengalaman menonton yang immersif, sementara desain yang ramping membuatnya sesuai untuk ruang yang terbatas. Keandalan dan inovasi LG membuatnya cocok untuk menciptakan pengalaman hiburan yang berkualitas di kost-kostan Anda.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Kulkas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="height: 360px; width: 236px; position: absolute; top: 18%; left: 16%;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Kulkas</h1>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/interior5.jpg') }}" height="200" width="200" style="border-radius: 5px;">
                        <p class="text-secondary fw-normal" style="font-size: 14px; margin-top: 1rem;">Kulkas merek LG merupakan pilihan unggul untuk kost-kostan dengan desain elegan dan fitur canggih. Dikenal dengan teknologi inverter yang hemat energi, kulkas LG memberikan performa pendinginan stabil. Fitur Smart Diagnosis memudahkan pemeliharaan dan pemecahan masalah, sementara tata letak rak yang fleksibel memberikan kemudahan menyusun dan mengakses makanan. Kulkas LG sering dilengkapi dengan fitur SmartThinQ, memungkinkan pengguna mengendalikan dan memonitor kulkas melalui smartphone mereka. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Lemari" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="height: 360px; width: 236px; position: absolute; top: 18%; left: 16%;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lemari</h1>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/interior6.jpg') }}" height="200" width="200" style="border-radius: 5px;">
                        <p class="text-secondary fw-normal" style="font-size: 14px; margin-top: 1rem;">Lemari IKEA dikenal untuk desainnya yang fungsional dan estetis, cocok untuk berbagai ruang dan gaya. Mereka menawarkan lemari dengan konsep modular yang memudahkan penyesuaian dengan kebutuhan ruang Anda. Di dalam lemari IKEA, Anda dapat menemukan berbagai rak terbuka, laci, dan sistem penyimpanan pintar seperti kotak penyimpanan yang dapat diintegrasikan. IKEA juga sering menawarkan solusi pintar untuk mengoptimalkan ruang dan menyediakan akses mudah ke barang-barang Anda. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Kasur" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="height: 360px; width: 236px; position: absolute; top: 18%; left: 16%;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Kasur</h1>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/interior7.jpg') }}" height="200" width="200" style="border-radius: 5px;">
                        <p class="text-secondary fw-normal" style="font-size: 14px; margin-top: 1rem;">Kasur IKEA menyediakan solusi tidur yang nyaman dan terjangkau untuk kost-kostan. Dikenal dengan beragam pilihan, fitur kasur IKEA termasuk busa memori dan pegas dalam untuk dukungan yang optimal. Desainnya modular memungkinkan pemilihan ukuran yang sesuai dengan ruang, sementara teknologi canggih seperti penutup yang dapat dilepas memudahkan perawatan dan kebersihan. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="Wifi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content" style="height: 360px; width: 236px; position: absolute; top: 18%; left: 16%;">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Wifi</h1>
                    </div>
                    <div class="modal-body">
                        <img src="{{ asset('img/interior8.jpg') }}" height="200" width="200" style="border-radius: 5px;">
                        <p class="text-secondary fw-normal" style="font-size: 14px; margin-top: 1rem;">Router WiFi ASUS merupakan solusi handal untuk konektivitas internet di kost-kostan. Dengan teknologi canggih seperti WiFi 6, router ASUS menawarkan kecepatan tinggi dan cakupan yang luas. Fitur QoS (Quality of Service) memastikan prioritas bandwidth untuk aplikasi penting, sementara Mesh WiFi memperluas jangkauan sinyal. Pengelolaan melalui aplikasi ASUS membuat monitoring dan kontrol jaringan menjadi lebih mudah dalam lingkungan kost-kostan Anda. </p>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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

        function changeIconAndColor(button) {
            // Mengambil elemen ikon pada tombol
            var iconElement = button.querySelector("i");

            // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
            iconElement.classList.toggle("bi-star");
            iconElement.classList.toggle("bi-star-fill");

            // Mengubah warna ikon menjadi kuning
            var currentColor = iconElement.style.color;
            iconElement.style.color = (currentColor === "purple") ? "" : "purple";
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
    </script>
</body>

</html>

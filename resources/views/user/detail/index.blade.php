<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://eonasdan.github.io/bootstrap-datetimepicker/css/prettify-1.0.css">
    <link rel="stylesheet" href="https://eonasdan.github.io/bootstrap-datetimepicker/css/base.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/usercss/detailrumah.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        #jam-container {
            font-family: Poppins;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        .btn-lainnya {
            font-family: Poppins;
            cursor: pointer;
        }

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
            font-family: 'Ubuntu';
            box-sizing: border-box;
        }

        html,
        body {
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

        div.scrollmenu {
            background-color: transparent;
            overflow: auto;
            white-space: nowrap;
        }

        div.scrollmenu a {
            margin-left: 20px;
            margin-top: 10px;
            font-size: 18px;
            display: inline-block;
            color: white;
            text-align: center;
            padding: 2px;
            text-decoration: none;
        }

        .scrollmenu .active {
            font-size: 18px;
            border-radius: 50%;
            background-color: purple;
            color: #ffffff;
            width: 30px;
            height: 30px;
        }

        .btn.active {
            background: rgb(106, 5, 114);
            background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%);
            color: #ffffff !important;
            /* Jika ingin mengubah warna teks juga */
        }

        .splide__arrow {
            background: transparent;
            width: 1em;
            height: 1em;
        }

        .scrollmenu {
            overflow: hidden;
            /* Menghilangkan scroll horizontal */
        }

        .scrollmenu::-webkit-scrollbar {
            width: 12px;
            /* Atur lebar scroll bar jika ingin tetap ada */
        }

        .scrollmenu::-webkit-scrollbar-thumb {
            background-color: transparent;
            /* Mengatur warna thumb scroll bar menjadi transparan */
            border-radius: 10px;
            /* Atur radius sudut thumb scroll bar jika ingin tetap ada */
        }

        .splide__arrow svg {
            fill: rgba(106, 5, 114, 1);
        }

        .btn-waktu {
            --bs-btn-padding-y: .50rem;
            width: 100%;
            --bs-btn-font-size: .75rem;
            border: 1px solid rgba(106, 5, 114, 1);
            color: #000000;
        }

        .btn-waktu-active {
            --bs-btn-padding-y: .50rem;
            width: 100%;
            --bs-btn-font-size: .75rem;
            background: rgb(106, 5, 114);
            background: linear-gradient(0deg, rgba(106, 5, 114, 1) 0%, rgba(106, 5, 114, 1) 20%, rgba(136, 68, 141, 1) 50%, rgba(106, 5, 114, 1) 80%, rgba(106, 5, 114, 1) 100%);
            color: #ffffff !important;
            border: 1px solid rgba(106, 5, 114, 1);
        }
    </style>
</head>


<body>
    <div class="modal fade" id="chooseTime" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body">
                    <input type="time" name="waktu" step="3600" class="form-control" pattern="[0-2][0-9]:[0-5][0-9]" id="waktu">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="button" onclick="updateTime()" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </div>
    <nav class="fixed-top" id="stickyTop">
        <div class="container py-3">
            <div class="row g-3">
                <div class="col-1">
                    <a href="javascript:void(0)" onclick="window.history.go(-1); return false;" class="btn-back-home"><ion-icon name="chevron-back-outline" style="margin-bottom: -4px;"></ion-icon></a>
                </div>
                <div class="col-6 mt-4 text-start" id="kamarKost" style="margin-top: 25px !important;">
                    <h3 class="fw-bold" style="font-size: 16px; transition: color 0.3s ease;">Detail Kamar Kost</h3>
                </div>
                <div class="col-5 text-end">
                    <button class="btn-like-detail" onclick="changeIconAndColor(this)"><i class="bi {{ $favorit ? 'bi-star-fill' : 'bi-star' }}" style="color: purple;"></i></button>
                </div>
            </div>
        </div>
    </nav>
    <div id="popup-background" onclick="closePopup()"></div>
    <div id="popup">
        <p id="popup-text" style="font-size: 14px;"></p>
    </div>
    <section class="splide new-2" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('uploadkamar/' . $kamarkost->gambar_kost) }}" style="height: 270px; width: 100%; position: relative; object-fit: cover; border-radius: 0px;">
                </li>
                {{-- <li class="splide__slide">
                    <img src="{{ asset('img/kostsurabaya7.jpg') }}" style="height: 270px; position: relative; object-fit: cover;border-radius: 0px;" class="w-100">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/kostsurabaya8.jpg') }}" style="height: 270px; position: relative; object-fit: cover;border-radius: 0px;" class="w-100">
                </li> --}}
            </ul>
        </div>
    </section>
    <div class="container">
        <!-- Judul kamar -->
        <div class="col-7 text-start mt-2">
            <h6 class="fw-semibold" style="font-size: 18px; color: #1e1e1ee5">{{ $kamarkost->kategori->kategori }}</h6>
        </div>
        <div class="row">
            <div class="col-9 text-start">
                <p class="text-secondary" style="margin-top: -8px; font-size: 12px;">Ukuran Kamar Kostnya {{ $kamarkost->ukuran_kost }}</p>
            </div>
        </div>
        <!-- end Judul kamar -->
        <!-- harga kamar -->
        <div class="row" style="margin-top: -8px; margin-bottom: 6px;">
            <div class="col-6 text-start">
                <h6 class="fw-bold" style="font-size: 22px; color: rgba(128, 0, 128, 0.9); font-family: Ubuntu;">Rp. {{ $kamarkost->harga_kost }}</h6>
            </div>
            {{-- <div class="col-6" style="margin-top: 12px; margin-left: -26px;">
                <p class="text-danger" style="margin-top: -8px; font-size: 10px; font-style: italic; font-family: Ubuntu;">(Tidak Termasuk Listrik) <i class="bi bi-info-circle" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: #000000; margin-left: 4px; font-size: 12px;"></i></p>
            </div> --}}
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="width: 336px; position: absolute; top: 320px; height: 84px;">
                    <div class="modal-body">
                        <p class="fw-normal" style="font-size: 12px; margin-top: -4px; justify-content: center; font-family: Ubuntu;">Biaya sewa kamar tidak termasuk listrik, dan pembayaran listrik akan dilakukan melalui sistem token dengan tarif yang berlaku.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- end harga kamar -->
        <div class="col-12 text-start" style="margin-top: 0px;">
            <h6 class="fw-semibold" style="font-size: 18px; font-family: Ubuntu;">Fasilitas</h6>
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
            <h6 class="fw-semibold" style="font-family: Ubuntu;">Tentang Kamar Kost</h6>
            <p class="text-secondary tentang-kamar" style="font-size: 12px;">
                Besar ukuran kamar kostnya {{ $kamarkost->ukuran_kost }}. Kamar kost Putra ini juga memiliki fasilitas berbagai macam seperti ac, toilet, dan lain-lain
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
            <h6 class="fw-semibold" style="margin-bottom: 10px; font-family: Ubuntu;">Fasilitas</h6>
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
        <!-- booking kost -->
        <div class="col-12 text-start">
            <h6 class="fw-semibold" style="margin-bottom: 10px; margin-top: 30px; font-family: Poppins;">Jadwal Masuk Kost</h6>
        </div>
        <div class="container px-2">
            <div id="datetimepicker"></div>
            <div class="row mt-2 g-2 justify-content-center" x-data="{ new_schedule: '' }" id="jam-container">
                @foreach ($jamkamarkost as $item)
                    <div class="col-4">
                        <button x-on:click="new_schedule = '{{ $item->jamkamar_kost }}'; setSelectedTime('{{ $item->jamkamar_kost }} WIB')" " :class="new_schedule == '{{ $item->jamkamar_kost }}' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">{{ $item->jamkamar_kost }} WIB</button>
                    </div>
                    {{-- <div class="col-4">
                    <button x-on:click="new_schedule = 'time-2'" :class="new_schedule == 'time-2' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">09.00 WIB</button>
                </div>
                <div class="col-4">
                    <button x-on:click="new_schedule = 'time-3'" :class="new_schedule == 'time-3' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">10.00 WIB</button>
                </div>
                <div class="col-4">
                    <button x-on:click="new_schedule = 'time-4'" :class="new_schedule == 'time-4' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">11.00 WIB</button>
                </div>
                <div class="col-4">
                    <button x-on:click="new_schedule = 'time-5'" :class="new_schedule == 'time-5' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">13.00 WIB</button>
                </div>
                <div class="col-4">
                    <button x-on:click="new_schedule = 'time-6'" :class="new_schedule == 'time-6' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">14.00 WIB</button>
                </div>
                <div class="col-4">
                    <button x-on:click="new_schedule = 'time-7'" :class="new_schedule == 'time-7' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">15.00 WIB</button>
                </div>
                <div class="col-4">
                    <button x-on:click="new_schedule = 'time-8'" :class="new_schedule == 'time-8' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">16.00 WIB</button>
                </div>
                <div class="col-4">
                    <button x-on:click="new_schedule = 'time-9'" :class="new_schedule == 'time-9' ? 'btn time-btn fw-semibold active btn-waktu' : 'btn fw-semibold btn-waktu'" type="button">17.00 WIB</button>
                </div> --}}
 @endforeach
                    </div>
                    <label id="addWaktu" class="btn-lainnya" data-bs-toggle="modal" data-bs-target="#chooseTime">Waktu Lainnya</label>
                    {{-- <div id="jam-container"> --}}
                    {{-- <input type="time" id="waktu" onchange="updateWaktu()"> --}}
                    {{-- <button id="waktu-btn" onclick="submitWaktu()">Set Waktu</button> --}}
                    {{-- </div> --}}
            </div>
            <!-- booking kost -->
        </div>
        <div class="garis-pembatas-2"></div>
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
                        <form method="POST" action="/user/getTime">
                            @csrf
                            <input type="hidden" name="productId" value="{{ $kamarkost->id }}">
                            <input type="hidden" name="selectedDate" id="selectedDate" x-model="selectedDate">
                            <input type="hidden" name="time" id="time" x-model="time">
                            <input type="hidden" name="getDate" value="{{ Carbon\Carbon::now()->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y, h:i') }} WIB">
                            <button type="submit" class="btn btn-dark" id="btnPesanSekarang" disabled>Pesan Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
        <script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js"></script>
        <script>
            var selectedTime = ''; // Variabel global untuk menyimpan waktu yang dipilih

            function setSelectedTime(time) {
                document.getElementById('time').value = time;
            }
        </script>
        <script id="rendered-js">
            $(function() {
                $('#datetimepicker').datetimepicker({
                    inline: true,
                    sideBySide: true,
                    locale: 'id',
                    format: 'DD/MM/YYYY',
                    minDate: new Date(),
                });

                $('#datetimepicker').on('dp.change', function(e) {
                    var selectedDate = e.date.format('YYYY-MM-DD');
                    document.getElementById('selectedDate').value = selectedDate;
                    var tglActive = document.querySelector('.day.active');
                    var jamActive = document.querySelector('.jam-item.terselect');
                    var Btarget = document.getElementById('ok-button');

                    if (tglActive && jamActive) {
                        Btarget.classList.remove('death');
                        Btarget.removeAttribute('disabled');
                    } else {
                        Btarget.classList.add('death');
                        Btarget.setAttribute('disabled', true);
                    }

                    console.log($("#datetimepicker").find("input").val());
                });

                var bulan = document.querySelector('.picker-switch');
                bulan.addEventListener('click', function(event) {
                    event.preventDefault();
                    event.stopPropagation();
                });

                var currentDate = new Date();
                var currentDay = currentDate.getDate();
                var currentMonthIndex = currentDate.getMonth();
                var currentYear = currentDate.getFullYear();
                var tanggalItems = document.querySelectorAll('.day');
                var jamItems = document.querySelectorAll('.jam-item');

                jamItems.forEach(function(divItem) {
                    divItem.addEventListener('click', function() {

                        var isSelected = this.classList.contains('terselect');
                        jamItems.forEach(function(item) {
                            item.classList.remove('terselect');
                        });
                        if (!isSelected) {
                            this.classList.add('terselect');
                        }
                        check();
                    });
                });

                function check() {
                    var tglActive = document.querySelector('.day.active');
                    var jamActive = document.querySelector('.jam-item.terselect');
                    var Btarget = document.getElementById('ok-button');
                    if (tglActive && jamActive) {
                        Btarget.classList.remove('death');
                        Btarget.removeAttribute('disabled');
                    } else {
                        Btarget.classList.add('death');
                        Btarget.setAttribute('disabled', true);
                    }
                }

                function uncheck() {
                    var tglActive = document.querySelector('.day.active');
                    var jamActive = document.querySelector('.jam-item.terselect');
                    var Btarget = document.getElementById('ok-button');
                    Btarget.classList.add('death');
                    Btarget.setAttribute('disabled', true);
                }

                document.addEventListener('change', function() {
                    check();
                });

                var okButton = document.getElementById('ok-button');
                okButton.addEventListener('click', function() {
                    uncheck();

                    var tanggalAktif = document.querySelector('.day.active');
                    var jamAktif = document.querySelector('.jam-item.terselect');

                    tanggalAktif = tanggalAktif.getAttribute('data-day');
                    jamAktif = jamAktif.querySelector('input').value;

                    // Lanjutkan dengan pemrosesan seperti yang Anda lakukan sebelumnya
                    var takeOffFormatted = tanggalAktif + ', ' + jamAktif;
                    var kananDiv = document.querySelector('#tgl-pick');
                    kananDiv.textContent = takeOffFormatted;

                    var nextDayDate = moment(tanggalAktif, 'DD/MM/YYYY').add(1, 'day').format('DD/MM/YYYY');
                    var nextDayFormatted = nextDayDate + ', ' + jamAktif;

                    var kiriDiv = document.querySelector('#tgl-selesai');
                    kiriDiv.textContent = nextDayFormatted;
                    kiriDiv.classList.add('kuning');

                });

                // Mendapatkan waktu saat ini
                var currentTime = new Date();
                // Mendapatkan jam, menit, dan detik dari waktu saat ini
                var currentHour = currentTime.getHours();
                var currentMinute = currentTime.getMinutes();
                var currentSecond = currentTime.getSeconds();

                // Menghitung waktu saat ini dalam format "HH:MM:SS"
                var formattedCurrentTime = currentHour + ":" + currentMinute + ":" + currentSecond;

                // Mendapatkan semua elemen jam
                var jamItems = document.querySelectorAll('.jam-item');

                // Iterasi melalui setiap elemen jam
                jamItems.forEach(function(jamItem) {

                    var jamValue = jamItem.querySelector('input[type="hidden"]').value;

                    if (formattedCurrentTime > jamValue) {
                        jamItem.classList.add('disabled');
                        jamItem.setAttribute('disabled', true);
                    }

                    function jamItemClickHandler(event) {
                        event.preventDefault();
                    }

                });

            });
        </script>
        <script>
            var splide = new Splide('.splide.new', {
                arrows: false,
                pagination: false,
                perPage: 3,
                autoWidth: true,
                gap: '1.65rem',
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
                // type: 'loop',
                pagination: false,
                autoplay: true,
                lazyLoad: 'nearby',
                arrows: false,
                interval: '2000',
                // autoWidth: true
            });
            splide.mount();
            // var splide = new Splide('.splide.new-3', {
            //     type: 'loop',
            //     lazyLoad: 'nearby',
            //     pagination: false,
            //     interval: '2000'
            // });
            // splide.mount();

            let isFavorite = false;

            // function toggleReadMore() {
            //     const ellipsis = document.querySelector(".ellipsis");
            //     const textSecondary = document.querySelector('.text-secondary');
            //     const readMoreBtn = document.querySelector('.read-more-btn');
            //     const additionalText = document.querySelector('.additional-text');

            //     textSecondary.classList.toggle('expanded');

            //     if (textSecondary.classList.contains('expanded')) {
            //         additionalText.style.display = 'inline';
            //         ellipsis.classList.add("hide-ellipsis");
            //         readMoreBtn.textContent = 'Tutup';
            //     } else {
            //         additionalText.style.display = 'none';
            //         ellipsis.classList.remove("hide-ellipsis");
            //         readMoreBtn.textContent = 'Lihat Selengkapnya';
            //     }
            // }

            let isAlertShown = false;

            function changeIconAndColor(button) {
                var icon = button.querySelector('i');
                if (icon.classList.contains('bi-star-fill')) {
                    icon.classList.remove('bi-star-fill');
                    icon.classList.add('bi-star');
                    icon.style.color = 'purple'; // tambahkan warna langsung ke ikon
                } else {
                    icon.classList.remove('bi-star');
                    icon.classList.add('bi-star-fill');
                    icon.style.color = 'purple'; // tambahkan warna langsung ke ikon
                }
                showPopup();
                // Favorit
                favoritadd();
            }

            // button.classList.toggle('favorited');

            // var popupText = document.getElementById('popup-text');

            // if (button.classList.contains('favorited')) {
            //     popupText.innerText = 'Berhasil Difavoritkan';
            // } else {
            //     popupText.innerText = 'Dihapus Dari Favorit';
            // }

            // Tampilkan pop-up


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
                $('#popup-text').html('');
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

            function makeActive(element) {
                // Menghapus kelas 'active' dari semua elemen
                var links = document.querySelectorAll('.scrollmenu a');
                links.forEach(function(link) {
                    link.classList.remove('active');
                });

                // Menambahkan kelas 'active' pada elemen yang dipilih
                element.classList.add('active');

                // Mengukur tinggi dan lebar elemen yang dipilih
                var height = element.clientHeight;
                var width = element.clientWidth;

                // Lakukan sesuatu dengan nilai tinggi dan lebar, contohnya:
                console.log('Tinggi:', height, 'px');
                console.log('Lebar:', width, 'px');
            }

            function addInput() {
                // Menyembunyikan tombol
                var btnLainnya = document.querySelector('.btn-lainnya');
                btnLainnya.style.display = 'none';

                // Menampilkan input
                var inputContainer = document.getElementById('inputContainer');
                inputContainer.style.display = 'block';

                // Jika Anda ingin melakukan lebih banyak tindakan, tambahkan logika lainnya di sini
            }

            function toggleJam() {
                var waktuInput = document.getElementById("waktu");
                waktuInput.style.display = (waktuInput.style.display === "block") ? "none" : "block";
            }

            function updateWaktu() {
                var waktuValue = document.getElementById("waktu").value;
                console.log("Waktu yang dipilih:", waktuValue);

                // Tambahkan kode lain sesuai kebutuhan Anda
            }

            const waktu = document.getElementById("waktu");

            waktu.addEventListener("input", function() {
                const value = this.value.replace(/[^0-9]/g, "");
                if (value.length > 2) {
                    this.value = value.slice(0, 2) + ":" + value.slice(2);
                }
            });

            // Fungsi untuk menambahkan waktu
            function updateTime() {
                $("#chooseTime").modal('hide');
                $("#addWaktu").addClass('d-none');
                var waktu = $("#waktu").val();
                var buttonHtml = "<div class='col-4'><button class='btn time-btn fw-semibold active btn-waktu' data-waktu='" + waktu + "' type='button'>" + waktu + " WIB</button></div>";
                $("#jam-container").append(buttonHtml);
            }

            document.addEventListener("DOMContentLoaded", function() {
                // Fungsi untuk memeriksa apakah tanggal dan jam sudah dipilih
                function cekPilihan() {
                    var tanggal = document.getElementById("datetimepicker").value;
                    var jam = document.querySelector(".btn-waktu.active");

                    // Jika tanggal dan jam sudah dipilih, aktifkan tombol "Pesan Sekarang"
                    if (tanggal !== '' && jam !== null) {
                        document.getElementById("btnPesanSekarang").disabled = false;
                    } else {
                        document.getElementById("btnPesanSekarang").disabled = true;
                    }
                }

                // Panggil fungsi cekPilihan setiap kali ada perubahan pada tanggal atau jam
                document.getElementById("datetimepicker").addEventListener("change", cekPilihan);
                var waktuButtons = document.querySelectorAll(".btn-waktu");
                waktuButtons.forEach(function(button) {
                    button.addEventListener("click", function() {
                        waktuButtons.forEach(function(btn) {
                            btn.classList.remove("active");
                        });
                        button.classList.add("active");
                        cekPilihan();
                    });
                });

                // Panggil cekPilihan saat halaman dimuat untuk menentukan status awal tombol
                cekPilihan();
            });
        </script>
        <script>
            function redirectToPaymentPage(productId) {
                var currentTime = new Date();
                var day = currentTime.getDate();
                var month = currentTime.getMonth() + 1; // January is 0!
                var year = currentTime.getFullYear();
                var hours = currentTime.getHours();
                var minutes = currentTime.getMinutes();
                var seconds = currentTime.getSeconds();

                var formattedTime =
                    "{{ Carbon\Carbon::now()->locale('id')->settings(['formatFunction' => 'translatedFormat'])->format('j F Y, H:i') }} WIB";
                getTime(productId, formattedTime);
            }

            function getTime(productId, formattedTime) {
                $.ajax({
                    url: '/user/getDate',
                    type: 'POST',
                    data: {
                        product_id: productId,
                        formattedTime: formattedTime,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        window.location.href = '/user/transaksi/{{ $kamarkost->id }}';
                    }
                });
            }
        </script>
        <script>
            function favoritadd() {
                $.ajax({
                    url: '/favorite/add',
                    type: 'POST',
                    data: {
                        kamar_kost_id: '{{ $kamarkost->id }}',
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        console.log(response.alert);
                        $('#popup-text').html(response.alert);
                    }
                });
            }
        </script>
</body>

</html>

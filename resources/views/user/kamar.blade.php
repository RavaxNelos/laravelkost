<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kamar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.1.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bxslider/dist/jquery.bxslider.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- css rava -->
    <link rel="stylesheet" href="{{ asset('css/usercss/kamar.css') }}">
    <style>
        /* #popup {
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
        } */

        * {
            font-family: 'Ubuntu', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            color: var(--bs-btn-active-color);
            background-color: black;
            border-color: var(--bs-btn-active-border-color);
        }

        .btn:hover {
            color: var(--bs-btn-hover-color);
            background-color: black;
            border-color: var(--bs-btn-hover-border-color);
        }

        .bayar {
            border: 2px solid #00af00;
            background-color: rgb(0, 128, 0, 0.4);
        }

        .proses {
            border: 2px solid rgb(215, 140, 0);
            background-color: rgb(255, 166, 0, 0.4);
        }

        .belum {
            border: 2px solid rgb(124, 0, 0);
            background-color: rgb(255, 0, 0, 0.4);
        }

        .btn-info:hover {
            color: white;
        }
    </style>
</head>

<body>
    <div class="sticky-bottom">
        <nav class="nav">
            <a href="{{ asset('/user/home') }}" class="nav__link">
                <i class="bi bi-house-door"></i>
                <span class="nav__text">Beranda</span>
            </a>
            <a href="{{ asset('/user/kamar') }}" class="nav__link nav-active">
                <i class="bi bi-door-closed-fill"></i>
                <span class="nav__text">Kamar</span>
            </a>
            <div class="nav__link" id="openModalBtn">
                <i class="bi bi-chat-dots"></i>
                <span class="nav__text">Lapor</span>
            </div>
            <a href="{{ asset('/user/riwayat') }}" class="nav__link">
                <i class="bi bi-clock"></i>
                <span class="nav__text">Riwayat</span>
            </a>
            <a href="{{ asset('/user/profil') }}" class="nav__link">
                <i class="bi bi-person"></i>
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
    @if ($kamar_kost)
        <nav class="fixed-top" id="stickyTop">
            <div class="container py-3">
                <div class="col-12 text-end">
                    <button class="btn-like-detail" onclick="toggleCard()"><i class="bi bi-three-dots-vertical"></i></button>
                </div>
            </div>
        </nav>
        <img src="{{ asset('uploadkamar/' . $kamar_kost->gambar_kost) }}" style="width: 360px; height: 250px;">
        {{-- <section class="splide new-1" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="{{ asset('img/kostsurabaya6.jpg') }}" style="width: 360px; height: 250px;">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/kostsurabaya7.jpg') }}" style="width: 360px; height: 250px;">
                </li>
                <li class="splide__slide">
                    <img src="{{ asset('img/kostsurabaya8.jpg') }}" style="width: 360px; height: 250px;">
                </li>
            </ul>
        </div>
    </section> --}}
        <div class="container mt-3">
            <div class="cardsidebar" id="cardContent">
                <a href="" class="jadwal fw-medium"><i class="bi bi-calendar-date-fill"></i></i> Jadwal Pembayaran</a>
                <hr class="garispemisah" style="border-top: 1px solid #ccc; margin-top: 40px;">
                <a href="/user/kerusakan/{{ $users->id }}" class="lapor fw-medium"><i class="bi bi-exclamation-circle-fill"></i> Laporkan Kerusakan</a>
            </div>
            <div class="row">
                <div class="col-3 text-start">
                    <a type="submit" style="width: 120px; height: 30px; text-align: center; text-decoration: none; border: 1px solid #ccc; border-radius: 6px; font-size: 12px; padding-top: 4px;" class="text-dark fw-medium">{{ $kamar_kost->kategori->kategori }}</a>
                </div>
                <div class="col-1" style="margin-top: 0px;">
                    <i class="bi bi-dot text-secondary" style="margin-left: 32px; font-size:20px;"></i>
                </div>
                <div class="col-8 text-end">
                    <a type="submit" style="width: 190px; height: 30px; text-align: center; text-decoration: none; border-radius: 6px; padding-top: 4px; position: relative; font-family: Poppins; color: white !important; font-size: 12px;" class="@if ($transaksi->pesan == 'Kost Sedang Diproses') proses @elseif($transaksi->pesan == 'Kost Sudah Terbayar') bayar @elseif($transaksi->pesan == 'Kost Belum Dibayar') belum @endif">{{ $transaksi->pesan }}</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-6 text-start">
                    <h1 class="fw-normal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Tgl. Masuk Kost</h1>
                </div>
                <div class="col-6 text-end">
                    <h1 class="fw-nromal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Durasi Ngekost</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6 text-start">
                    <p class="fw-medium" style="font-size: 14px; color: #9370DB; margin-top: -8px;">{{ Carbon\Carbon::parse($transaksi->tanggal_masuk_kost)->locale('id')->format('j F Y') }}</p>
                </div>
                <div class="col-6 text-end">
                    <p class="fw-medium" style="font-size: 14px; color: #9370DB; margin-top: -8px;">{{ $transaksi->durasi_ngekost }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-medium" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Harga /Bulan</h1>
                </div>
                <div class="col-12 text-center">
                    <p class="fw-semibold" style="font-size: 14px; color: #9b59b6; margin-top: -8px;">{{ $kamar_kost->harga_kost }}</p>
                </div>
            </div>
        </div>
        <hr class="hr-1" style="margin-top: -4px; border-top: 10px solid #ccc;">
        <div class="container">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Spesifikasi Kamar Kost</h1>
            <div class="row">
                <div class="col-12 text-start">
                    <h1 class="fw-normal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Ukuran Kamar</h1>
                </div>
                <p class="text-dark fw-medium" style="font-size: 12px; margin-top: -8px;">Ukuran Kamar {{ $kamar_kost->ukuran_kost }}</p>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col-12 text-start">
                    <h1 class="fw-normal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Lokasi Kost</h1>
                </div>
                <p class="text-dark fw-medium" style="font-size: 12px; margin-top: -8px;">{{ $kamar_kost->alamat_lengkap_kost }}</p>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col-12 text-start">
                    <h1 class="fw-normal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Air Bersih</h1>
                </div>
                <p class="text-secondary-emphasis fw-medium" style="font-size: 12px; margin-top: -8px;">{{ $kamar_kost->air_kost }}</p>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col-12 text-start">
                    <h1 class="fw-normal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Tipe Listrik</h1>
                </div>
                <p class="text-secondary-emphasis fw-medium" style="font-size: 12px; margin-top: -8px;">{{ $kamar_kost->listrik_kost }}</p>
            </div>
        </div>
        <hr class="hr-2" style="margin-top: 0px; border-top: 10px solid #ccc;">
        <div class="container">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Kamar</h1>
            <section class="splide new-2" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($fasKamar as $facilite)
                            <li class="splide__slide">
                                @php
                                    $kamar_kost = \App\Models\KamarKostFasilitas::where('kamar_kost_id', $facilite->id)
                                        ->where('fasilitas_id', $facilite->id)
                                        ->first();
                                @endphp
                                @if ($kamar_kost)
                                    <div class="item" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $facilite->id }}">
                                        <img src="{{ asset('uploadkamar/' . $facilite->gambar) }}" style="width: 80px; height: 80px; border-radius: 10px;">
                                    </div>
                                    <div class="modal fade" id="exampleModal{{ $facilite->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <img src="{{ asset('uploads/' . $facilite->gambar) }}">
                                                    <div class="desk">
                                                        <div class="top">
                                                            {{ $facilite->nama }}
                                                        </div>
                                                        <div class="bottom">
                                                            {{ $facilite->deskripsi }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </li>
                        @endforeach
                        {{-- <li class="splide__slide">
                            <img src="{{ asset('img/interior7.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior9.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior4.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior6.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior10.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior11.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li> --}}
                    </ul>
                </div>
            </section>
            <hr class="hr-3" style="margin-top: 20px; border-top: 1px solid #ccc;">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Kamar Mandi</h1>
            <section class="splide new-3" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior12.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior13.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior14.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior15.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior11.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <hr class="hr-4" style="margin-top: 20px; border-top: 10px solid #ccc;">
        <div class="container">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Umum</h1>
            <section class="splide new-4" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior8.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior5.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior3.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior16.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior17.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                        <li class="splide__slide">
                            <img src="{{ asset('img/interior18.jpg') }}" style="width: 80px; height: 80px; border-radius: 10px;">
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="hr-5" style="margin-top: 20px; border-top: 1px solid #ccc;">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Parkir</h1>
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('img/interior19.jpg') }}" style="width: 164px; height: 100px; border-radius: 10px;">
                </div>
                <div class="col-6" style="margin-left: -8px;">
                    <img src="{{ asset('img/interior20.jpg') }}" style="width: 164px; height: 100px; border-radius: 10px;">
                </div>
            </div>
        </div>
        <hr class="hr-6" style="margin-top: 20px; border-top: 10px solid #ccc;">
        <div class="container">
            <div class="select-menu">
                <div class="select-btn">
                    <span class="sBtn-text fw-semibold" style="font-size: 18px; font-family: Poppins;">Peraturan Kost</span>
                    <i class="bx bx-chevron-down"></i>
                </div>
                <ul class="options">
                    <li class="option">
                        <span class="option-angka">1.</span><span class="option-text">Dilarang Membuat Suara Gaduh Pada Malam Hari</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">2.</span><span class="option-text">Tidak Boleh Pasutri</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">3.</span><span class="option-text">Lawan Jenis Dilarang Ke Kamar</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">4.</span><span class="option-text">Maksimal 2 Orang/Kamar</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">5.</span><span class="option-text">Dilarang Membawa Hewan</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">6.</span><span class="option-text">Dilarang Merokok</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">7.</span><span class="option-text">Dilarang Mengganggu Ketenagan Penghuni</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">8.</span><span class="option-text">Dilarang Bawa Anak</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">9.</span><span class="option-text">Gunakan Fasilitas Dengan Benar</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">10.</span><span class="option-text">Jagalah Kebersihan Pada Kost</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">11.</span><span class="option-text">Dilarang Telat Bayar Kost</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">12.</span><span class="option-text">Kunci Pintu Kamar Kost Ketika Pergi Ke Luar</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">13.</span><span class="option-text">Dilarang Minum Minuman Keras</span>
                    </li>
                    <li class="option">
                        <span class="option-angka">14.</span><span class="option-text">Dilarang Merusak Fasilitas Di Kamar</span>
                    </li>
                    <li class="optionend">
                        <span class="option-angka">15.</span><span class="option-text">Dilarang Mengadakan Pesta Di Kamar</span>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="garis-tepi-peraturan-kost" style="margin-top: 14x; border-top: 10px solid #ccc;">
        <div class="container" style="margin-top: -10px;">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins; margin-top: 10px;">Kamar Kost Kamu</h1>
            <p class="text-secondary" style="font-size: 10px; font-style: italic; margin-top: -6px;">Update tampilan terbaru kamarmu disini (Maks. 10 foto)</p>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;">
                <div class="position-relative">
                    <img id="frame" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage()">
                    <label for="uploadfoto" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview()" hidden id="uploadfoto" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame2" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage2()">
                    <label for="uploadfoto2" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon2" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview2()" hidden id="uploadfoto2" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame3" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage3()">
                    <label for="uploadfoto3" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon3" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview3()" hidden id="uploadfoto3" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame4" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage4()">
                    <label for="uploadfoto4" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon4" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview4()" hidden id="uploadfoto4" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame5" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage5()">
                    <label for="uploadfoto5" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon5" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview5()" hidden id="uploadfoto5" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame6" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage6()">
                    <label for="uploadfoto6" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon6" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview6()" hidden id="uploadfoto6" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame7" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage7()">
                    <label for="uploadfoto7" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon7" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview7()" hidden id="uploadfoto7" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame8" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage8()">
                    <label for="uploadfoto8" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon8" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview8()" hidden id="uploadfoto8" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame9" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage9()">
                    <label for="uploadfoto9" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon9" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview9()" hidden id="uploadfoto9" accept="image/*">
                    </label>
                </div>
                <div class="position-relative">
                    <img id="frame10" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 150px; height: 150px; border-radius: 8px; cursor: pointer;" onclick="deleteImage10()">
                    <label for="uploadfoto10" class="label-upload">
                        <div class="box-icon">
                            <div class="bg-kategori rounded-5">
                                <i id="uploadIcon10" class="bi bi-cloud-upload"></i>
                            </div>
                        </div>
                        <input type="file" onchange="preview10()" hidden id="uploadfoto10" accept="image/*">
                    </label>
                </div>
            </div>
        </div>
        <!-- Tampilkan ilustrasi kosong -->
        <hr class="hr-9" style="margin-top: 20px; border-top: 10px solid #ccc; margin-bottom: 3.4rem;">
    @else
        <!-- Tampilkan ilustrasi kosong -->
        <div class="container text-center" style="margin-top: 200px;">
            <img src="{{ asset('img/planet.png') }}" alt="Ilustrasi Kosong" width="150">
            <p class="text-muted mt-3">Anda Belum Booking Kamar Kost.</p>
            <form action="/user/home" style="margin-top: -10px;">
                <button class="btn btn-info">Silahkan Booking Kamar Dulu</button>
            </form>
        </div>
    @endif
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bxslider/dist/jquery.bxslider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
        // var splide = new Splide('.splide.new-1', {
        //     type: "loop",
        //     autoplay: true,
        //     arrows: false,
        //     perPage: 1,
        //     autoWidth: true,
        //     lazyLoad: 'nearby'
        // });

        // splide.mount();
        var splide = new Splide('.splide.new-2', {
            drag: 'free',
            pagination: false,
            arrows: false,
            perPage: 1,
            gap: '0.5rem',
            autoWidth: true,
            lazyLoad: 'nearby'
        });

        splide.mount();
        var splide = new Splide('.splide.new-3', {
            drag: 'free',
            pagination: false,
            arrows: false,
            perPage: 1,
            gap: '0.5rem',
            autoWidth: true,
            lazyLoad: 'nearby'
        });

        splide.mount();
        var splide = new Splide('.splide.new-4', {
            drag: 'free',
            pagination: false,
            arrows: false,
            perPage: 1,
            gap: '0.5rem',
            autoWidth: true,
            lazyLoad: 'nearby'
        });

        splide.mount();
        // var splide = new Splide('.splide.new-5', {
        //     drag: 'free',
        //     pagination: false,
        //     arrows: false,
        //     perPage: 1,
        //     gap: '0.5rem',
        //     autoWidth: true,
        //     lazyLoad: 'nearby'
        // });

        // splide.mount();

        function toggleCard() {
            var cardContent = document.getElementById('cardContent');
            var lastScrollTop = 0;
            cardContent.classList.toggle('show'); // Toggle the 'show' class
            window.addEventListener('scroll', function() {
                var st = window.scrollY;

                // Menggunakan scroll down sebagai trigger untuk menyembunyikan cardContent
                if (st > lastScrollTop) {
                    cardContent.style.transform = 'translateY(-1000px)'; // Menggeser elemen ke atas
                } else {
                    cardContent.style.transform = 'translateY(0)'; // Menampilkan kembali elemen
                }

                lastScrollTop = st;
            });
            document.addEventListener('DOMContentLoaded', function() {
                var cardContent = document.getElementById('cardContent');
                var toggleButton = document.querySelector('.btn-like-detail');

                toggleButton.addEventListener('click', function(event) {
                    event.stopPropagation();
                    cardContent.classList.toggle('show');
                });

                document.addEventListener('click', function(event) {
                    var isClickInsideCard = cardContent.contains(event.target);
                    var isToggleButton = event.target === toggleButton;

                    if (!isClickInsideCard && !isToggleButton) {
                        cardContent.classList.remove('show');
                    }
                });

                // Menangani klik di dalam card-content agar tidak menutup card
                cardContent.addEventListener('click', function(event) {
                    event.stopPropagation();
                });
            });
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

        function preview() {
            var frame = document.getElementById('frame');
            var uploadIcon = document.getElementById('uploadIcon');
            var uploadInput = document.getElementById('uploadfoto');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage() {
            var frame = document.getElementById('frame');
            var uploadIcon = document.getElementById('uploadIcon');
            var uploadInput = document.getElementById('uploadfoto');

            // Kembalikan ke gambar semula dan tampilkan ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview2() {
            var frame = document.getElementById('frame2');
            var uploadIcon = document.getElementById('uploadIcon2');
            var uploadInput = document.getElementById('uploadfoto2');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage2() {
            var frame = document.getElementById('frame2');
            var uploadIcon = document.getElementById('uploadIcon2');
            var uploadInput = document.getElementById('uploadfoto2');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview3() {
            var frame = document.getElementById('frame3');
            var uploadIcon = document.getElementById('uploadIcon3');
            var uploadInput = document.getElementById('uploadfoto3');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage3() {
            var frame = document.getElementById('frame3');
            var uploadIcon = document.getElementById('uploadIcon3');
            var uploadInput = document.getElementById('uploadfoto3');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview4() {
            var frame = document.getElementById('frame4');
            var uploadIcon = document.getElementById('uploadIcon4');
            var uploadInput = document.getElementById('uploadfoto4');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage4() {
            var frame = document.getElementById('frame4');
            var uploadIcon = document.getElementById('uploadIcon4');
            var uploadInput = document.getElementById('uploadfoto4');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview5() {
            var frame = document.getElementById('frame5');
            var uploadIcon = document.getElementById('uploadIcon5');
            var uploadInput = document.getElementById('uploadfoto5');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage5() {
            var frame = document.getElementById('frame5');
            var uploadIcon = document.getElementById('uploadIcon5');
            var uploadInput = document.getElementById('uploadfoto5');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview6() {
            var frame = document.getElementById('frame6');
            var uploadIcon = document.getElementById('uploadIcon6');
            var uploadInput = document.getElementById('uploadfoto6');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage6() {
            var frame = document.getElementById('frame6');
            var uploadIcon = document.getElementById('uploadIcon6');
            var uploadInput = document.getElementById('uploadfoto6');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview7() {
            var frame = document.getElementById('frame7');
            var uploadIcon = document.getElementById('uploadIcon7');
            var uploadInput = document.getElementById('uploadfoto7');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage7() {
            var frame = document.getElementById('frame7');
            var uploadIcon = document.getElementById('uploadIcon7');
            var uploadInput = document.getElementById('uploadfoto7');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview8() {
            var frame = document.getElementById('frame8');
            var uploadIcon = document.getElementById('uploadIcon8');
            var uploadInput = document.getElementById('uploadfoto8');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage8() {
            var frame = document.getElementById('frame8');
            var uploadIcon = document.getElementById('uploadIcon8');
            var uploadInput = document.getElementById('uploadfoto8');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview9() {
            var frame = document.getElementById('frame9');
            var uploadIcon = document.getElementById('uploadIcon9');
            var uploadInput = document.getElementById('uploadfoto9');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage9() {
            var frame = document.getElementById('frame9');
            var uploadIcon = document.getElementById('uploadIcon9');
            var uploadInput = document.getElementById('uploadfoto9');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview10() {
            var frame = document.getElementById('frame10');
            var uploadIcon = document.getElementById('uploadIcon10');
            var uploadInput = document.getElementById('uploadfoto10');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage10() {
            var frame = document.getElementById('frame10');
            var uploadIcon = document.getElementById('uploadIcon10');
            var uploadInput = document.getElementById('uploadfoto10');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        const optionMenu = document.querySelector(".select-menu"),
            selectBtn = optionMenu.querySelector(".select-btn"),
            sBtn_text = optionMenu.querySelector(".sBtn-text");
        selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));
        // options.forEach(option => {
        //     option.addEventListener("click", () => {
        //         let selectedOption = option.querySelector(".option-text").innerText;
        //         sBtn_text.innerText = selectedOption;
        //         optionMenu.classList.remove("active");
        //     });
        // });
        // function previewImage() {
        //     var input = document.getElementById('imageInput');
        //     var preview = document.getElementById('preview');

        //     // Pastikan file yang dipilih adalah gambar
        //     if (input.files && input.files[0]) {
        //         var reader = new FileReader();

        //         reader.onload = function(e) {
        //             // Tampilkan gambar pada elemen preview
        //             preview.innerHTML = '<img src="' + e.target.result + '" alt="Preview Gambar">';
        //         };

        //         // Baca file gambar sebagai URL data
        //         reader.readAsDataURL(input.files[0]);
        //     }
        // }

        // // Menambahkan event listener untuk input gambar
        // document.getElementById('imageInput').addEventListener('change', previewImage);

        // var splide = new Splide('.splide.new-2', {
        //     type: "loop",
        //     pagination: false,
        //     arrows: false,
        //     perPage: 1,
        //     autoWidth: true,
        //     gap: '0.5rem',
        //     lazyLoad: 'nearby'
        // });

        // splide.mount();

        // JavaScript to show/hide clear search icon
        // document.getElementById('searchInput').addEventListener('input', function() {
        //     var clearSearchIcon = document.getElementById('clearSearchIcon');
        //     if (this.value.trim() !== '') {
        //         clearSearchIcon.classList.remove('d-none');
        //     } else {
        //         clearSearchIcon.classList.add('d-none');
        //     }
        // });

        // // JavaScript to clear search input
        // document.getElementById('clearSearchIcon').addEventListener('click', function() {
        //     var searchInput = document.getElementById('searchInput');
        //     searchInput.value = '';
        //     this.classList.add('d-none');
        // });

        // var isFavorited = false;

        // function changeIconAndColor(button) {
        //     // Mengambil elemen ikon pada tombol
        //     var iconElement = button.querySelector("i");

        //     // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
        //     iconElement.classList.toggle("bi-star");
        //     iconElement.classList.toggle("bi-star-fill");

        //     // Mengubah warna ikon menjadi kuning
        //     var currentColor = iconElement.style.color;
        //     iconElement.style.color = (currentColor === "purple") ? "" : "purple";

        //     isFavorited = !isFavorited;
        //     var popupText = document.getElementById('popup-text');

        //     if (isFavorited) {
        //         popupText.innerHTML = 'Berhasil Difavoritkan';
        //     } else {
        //         popupText.innerHTML = 'Dihapus dari Favorit';
        //     }

        //     showPopup();
        // }

        // function closePopup() {
        //     document.getElementById('popup-background').style.display = 'none';
        //     document.getElementById('popup').style.display = 'none';
        // }

        // function showPopup() {
        //     document.getElementById('popup-background').style.display = 'block';
        //     document.getElementById('popup').style.display = 'block';

        //     setTimeout(function() {
        //         closePopup();
        //     }, 2000); // Close popup after 2 seconds
        // }

        // $(document).ready(function() {
        //     var stickyHeader = $('#stickyHeader');
        //     var searchInput = $('#searchInput');
        //     var clearSearchIcon = $('#clearSearchIcon');

        //     $(window).scroll(function() {
        //         var scroll = $(window).scrollTop();

        //         // Change background and box-shadow when scrolling
        //         if (scroll > 0) {
        //             stickyHeader.css('background-color', '#ffffff');
        //             stickyHeader.css('box-shadow', '0px 4px 8px rgba(0, 0, 0, 0.1)');
        //         } else {
        //             stickyHeader.css('background-color', 'transparent');
        //             stickyHeader.css('box-shadow', 'none');
        //         }

        //         // Show/hide clear search icon based on input value
        //         if (searchInput.val().trim() !== '') {
        //             clearSearchIcon.removeClass('d-none');
        //         } else {
        //             clearSearchIcon.addClass('d-none');
        //         }
        //     });

        //     // Additional code to handle other functionalities...
        // });
    </script>
</body>

</html>

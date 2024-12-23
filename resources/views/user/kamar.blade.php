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

        .options {
            display: none;
        }

        .options.active {
            display: block;
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
    <div class="modal" style=" display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);" id="myModal">
        <div class="modal-content" style="position: absolute; bottom: 70px; left: 20%; background-color: #fefefe; padding: 10px; border: 1px solid #ccc; width: 59%;">
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
        <div class="" style="position: absolute; right: 2px;" id="stickyTop">
            <div class="container py-3">
                <div class="col-12 text-end">
                    <button class="btn-like-detail" onclick="toggleCard()"><i class="bi bi-three-dots-vertical"></i></button>
                </div>
            </div>
        </div>
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
                    <p class="fw-medium" style="font-size: 14px; color: #9370DB; margin-top: -8px;">{{ strtok($transaksi->tanggal_masuk_kost, ',') }}</p>
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
                    <p class="fw-semibold" style="font-size: 16px; color: #9b59b6; margin-top: -8px;">{{ $kamar_kost->harga_kost }}</p>
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
                <p class="text-dark fw-medium" style="font-size: 14px; margin-top: -8px;">Ukuran Kamar {{ $kamar_kost->ukuran_kost }}</p>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col-12 text-start">
                    <h1 class="fw-normal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Lokasi Kost</h1>
                </div>
                <p class="text-dark fw-medium" style="font-size: 14px; margin-top: -8px;">{{ $kamar_kost->alamat_lengkap_kost }}</p>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col-12 text-start">
                    <h1 class="fw-normal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Air Bersih</h1>
                </div>
                <p class="text-secondary-emphasis fw-medium" style="font-size: 14px; margin-top: -8px;">{{ $kamar_kost->air_kost }}</p>
            </div>
            <div class="row" style="margin-top: -10px;">
                <div class="col-12 text-start">
                    <h1 class="fw-normal" style="font-size: 12px; font-family: Poppins; color: #CCCCCC;">Tipe Listrik</h1>
                </div>
                <p class="text-secondary-emphasis fw-medium" style="font-size: 14px; margin-top: -8px;">{{ $kamar_kost->listrik_kost }}</p>
            </div>
        </div>
        <div class="modal fade" id="fasilitasKamar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body" style="padding: 4px;">
                        <img src="" id="itemImage" height="220" width="334" style="border-radius: 5px;">
                        <div id="itemNama" class="h3 fw-bold text-center mt-2" style="font-size: 18px;"></div>
                        <div class="container px-2">
                            <p id="itemDeskripsi" class="text-dark fw-normal" style="font-size: 12px; margin-top: 0.5rem;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-2" style="margin-top: 0px; border-top: 10px solid #ccc;">
        <div class="container">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Kamar</h1>
            <section class="splide new-2" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($kamar_kost_fasilitas as $kost_fasilitas)
                            @if ($kost_fasilitas->fasilitas->tipe == 'Kamar')
                                <li class="splide__slide" onclick="getFasilitasBed({{ $kost_fasilitas->id }})">
                                    <div class="item" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $kost_fasilitas->fasilitas->id }}">
                                        <img src="{{ asset('uploadkamar/' . $kost_fasilitas->fasilitas->gambar) }}" style="width: 80px; height: 80px; border-radius: 10px;">
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </section>
            <hr class="hr-3" style="margin-top: 20px; border-top: 1px solid #ccc;">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Kamar Mandi</h1>
            <section class="splide new-3" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        @foreach ($kamar_kost_fasilitas as $kost_fasilitas)
                            @if ($kost_fasilitas->fasilitas->tipe == 'Kamar Mandi')
                                <li class="splide__slide" onclick="getFasilitasBed({{ $kost_fasilitas->id }})">
                                    <div class="item" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $kost_fasilitas->fasilitas->id }}">
                                        <img src="{{ asset('uploadkamar/' . $kost_fasilitas->fasilitas->gambar) }}" style="width: 80px; height: 80px; border-radius: 10px;">
                                    </div>
                                </li>
                            @endif
                        @endforeach
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
                        @foreach ($kamar_kost_fasilitas as $kost_fasilitas)
                            @if ($kost_fasilitas->fasilitas->tipe == 'Umum')
                                <li class="splide__slide" onclick="getFasilitasBed({{ $kost_fasilitas->id }})">
                                    <div class="item" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $kost_fasilitas->fasilitas->id }}">
                                        <img src="{{ asset('uploadkamar/' . $kost_fasilitas->fasilitas->gambar) }}" style="width: 80px; height: 80px; border-radius: 10px;">
                                    </div>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </section>
            <hr class="hr-5" style="margin-top: 20px; border-top: 1px solid #ccc;">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins;">Fasilitas Parkir</h1>
            <div class="row">
                @foreach ($kamar_kost_fasilitas as $kost_fasilitas)
                    @if ($kost_fasilitas->fasilitas->tipe == 'Parkir')
                        <div class="col-5" style="margin-right: 20px;">
                            <img src="{{ asset('uploadkamar/' . $kost_fasilitas->fasilitas->gambar) }}" onclick="getFasilitasBed({{ $kost_fasilitas->id }})" style="width: 164px; height: 100px; border-radius: 10px;">
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <hr class="hr-6" style="margin-top: 20px; border-top: 10px solid #ccc;">
        <div class="container">
            <div class="select-menu">
                <div class="select-btn" onclick="toggleDropdown()">
                    <span class="sBtn-text fw-semibold" style="font-size: 18px; font-family: Poppins;">Peraturan Kost</span>
                    <i class="bx bx-chevron-down"></i>
                </div>
                <ul class="options">
                    <li class="option"><span class="option-angka">1.</span><span class="option-text">Dilarang Membuat Suara Gaduh Pada Malam Hari</span></li>
                    <li class="option"><span class="option-angka">2.</span><span class="option-text">Tidak Boleh Pasutri</span></li>
                    <li class="option"><span class="option-angka">3.</span><span class="option-text">Lawan Jenis Dilarang Ke Kamar</span></li>
                    <li class="option"><span class="option-angka">4.</span><span class="option-text">Maksimal 2 Orang/Kamar</span></li>
                    <li class="option"><span class="option-angka">5.</span><span class="option-text">Dilarang Membawa Hewan</span></li>
                    <li class="option"><span class="option-angka">6.</span><span class="option-text">Dilarang Mengganggu Ketenagan Penghuni</span></li>
                    <li class="option"><span class="option-angka">7.</span><span class="option-text">Dilarang Bawa Anak</span></li>
                    <li class="option"><span class="option-angka">8.</span><span class="option-text">Gunakan Fasilitas Dengan Benar</span></li>
                    <li class="option"><span class="option-angka">9.</span><span class="option-text">Jagalah Kebersihan Pada Kost</span></li>
                    <li class="option"><span class="option-angka">10.</span><span class="option-text">Dilarang Telat Bayar Kost</span></li>
                    <li class="option"><span class="option-angka">11.</span><span class="option-text">Kunci Pintu Kamar Kost Ketika Pergi Ke Luar</span></li>
                    <li class="option"><span class="option-angka">12.</span><span class="option-text">Dilarang Minum Minuman Keras</span></li>
                    <li class="option"><span class="option-angka">13.</span><span class="option-text">Dilarang Merusak Fasilitas Di Kamar</span></li>
                    <li class="optionend"><span class="option-angka">14.</span><span class="option-text">Dilarang Mengadakan Pesta Di Kamar</span></li>
                </ul>
            </div>
        </div>
        <hr class="garis-tepi-peraturan-kost" style="margin-top: 14x; border-top: 10px solid #ccc;">
        <div class="container" style="margin-top: -10px;">
            <h1 class="fw-semibold" style="font-size: 18px; font-family: Poppins; margin-top: 10px;">Kamar Kost Kamu</h1>
            <p class="text-secondary" style="font-size: 10px; font-style: italic; margin-top: -6px;">Update tampilan terbaru kamarmu disini (Maks. 10 foto)</p>
            <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;">
                @foreach ($fotoku as $foto)
                    <div class="data-foto" data-bs-toggle="modal" data-bs-target="#foto{{ $foto->id }}">
                        <div class="item">
                            <img src="{{ asset('uploadkamar/' . $foto->gambar) }}">
                        </div>
                    </div>

                    {{-- modal --}}
                    <div class="modal fade fotoku text-center" id="foto{{ $foto->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="margin-left: 2.4rem;">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img src="{{ asset('uploadkamar/' . $foto->gambar) }}">
                                </div>
                                <div class="modal-footer">
                                    <div class="for-edit">
                                        <form action="{{ route('edit.pic') }}" method="post" class="edit-form" id="formEdit{{ $foto->id }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="btns">
                                                <input type="hidden" name="id" value="{{ $foto->id }}">
                                                <input type="file" name="gambar" id="edit-{{ $foto->id }}" class="edit-pics" onchange="submitForm('formEdit{{ $foto->id }}')">
                                                <label for="edit-{{ $foto->id }}">
                                                    <i class="bi bi-pencil-square"></i>
                                                </label>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="for-delete">
                                        <form action="{{ route('delete.pic') }}" method="post" class="delete-form" id="formDelete{{ $foto->id }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="btns">
                                                <input type="hidden" name="id" value="{{ $foto->id }}">
                                                <input type="hidden" value="{{ $foto->gambar }}">
                                                <button type="submit" class="deletes">
                                                    <i class="bi bi-trash3"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <form action="{{ route('kamarUpload') }}" method="post" enctype="multipart/form-data" id="uploadForm">
                    @csrf
                    <div class="upload-foto">
                        <input type="file" id="file" name="gambar" onchange="uploadss('uploadForm')" accept="image/*">
                        <label for="file">
                            <i class="bi bi-cloud-arrow-up"></i>
                        </label>
                    </div>
                </form>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                    cardContent.style.transform = 'translateY(0px)'; // Menampilkan kembali elemen
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
    </script>
    <script>
        function getFasilitasBed(kamarKostFasilitasId) {
            $.ajax({
                url: '/getFasilitasKamar/' + kamarKostFasilitasId,
                type: 'GET',
                success: function(response) {
                    var item = response.kamarKostFasilitas;
                    $('#itemImage').attr('src', '/uploadkamar/' + item.gambar);
                    $('#itemNama').text(item.nama);
                    $('#itemDeskripsi').text(item.deskripsi);
                    console.log(item);
                    $('#fasilitasKamar').modal('show');
                },
            });
        }

        function closeModal() {
            $('#itemImage').attr('src', '');
            $('#fasilitasKamar').modal('hide');
            $('#itemNama').text('');
            $('#itemDeskripsi').text('');
        }
    </script>
    <script>
        function submitForm(formId) {
            document.getElementById(formId).submit();
            console.log(formId);
        }

        function uploadss(id) {
            document.getElementById(id).submit();
            console.log(id);
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let count = 0;
            count = document.querySelectorAll('.data-foto').length;
            if (count < 10) {
                console.log(count);
            } else {
                var formulir = document.querySelector('#uploadForm');
                formulir.classList.add('d-none');
            }

        });

        document.querySelectorAll('.deletes').forEach(function(button) {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                var form = this.closest('form');

                Swal.fire({
                    title: 'Apakah Kamu yakin?',
                    text: 'Item ini akan dihapus secara permanen!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>
    @if (Session::has('success'))
        <script>
            Swal.fire({
                title: 'Berhasil!',
                text: '{{ Session::get('success') }}',
                icon: 'success',
                showConfirmButton: false,
                timer: 3000 // Waktu penampilan Sweet Alert (dalam milidetik)
            });
        </script>
    @endif
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
    <script>
        function toggleDropdown() {
            var options = document.querySelector('.options');
            options.classList.toggle('active');
        }
    </script>
</body>

</html>

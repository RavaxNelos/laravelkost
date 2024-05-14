<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.3.1/highlight.min.js"></script>
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- end icon bootstrap -->
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- alphine js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- end google font -->
    <!-- css rava -->
    <link rel="stylesheet" href="{{ asset('css/usercss/buktipembayaran.css') }}">
    <!-- end css rava -->
    <style>
        * {
            font-family: 'Ubuntu', sans-serif;
        }

        /* html,
        body {
            user-drag: none;
            user-select: none;
        } */

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        /* Style for sticky header when scrolled */
        .sticky-top.scrolled {
            background-color: white;
            /* Ganti warna latar belakang sesuai kebutuhan Anda */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            /* Optional: Tambahkan bayangan jika diinginkan */
        }
    </style>
</head>

<body>
    <div class="sticky-top" id="stickyHeader">
        <div class="container py-2">
            <div class="row g-3">
                <div class="col-1">
                    <a href="javascript:void(0)" onclick="window.history.go(-1); return false;" class="btn-back-home"><ion-icon name="chevron-back-outline" style="margin-bottom: -4px;"></ion-icon></a>
                </div>
                <div class="col-6 mt-4 text-start" style="margin-top: 25px !important;">
                    <h3 class="text-dark fw-semibold teks-detail" style="font-size: 16px; transition: color 0.3s ease;">Rincian Bookingan</h3>
                </div>
            </div>
        </div>
    </div>
    <hr class="garis-1">
    <!-- rincian pembayaran -->
    @php
        // Menghapus titik dari nilai yang diambil dari database
        $hargaKost = str_replace('.', '', $kamarkost->harga_kost);

        // Mengonversi string ke tipe data integer
        $hargaKost = (int) $hargaKost;

        // Melakukan perhitungan dengan nilai yang sudah dikonversi
        $totalPembayaran = $hargaKost + 200000 - 25000;
    @endphp
    <div class="container">
        <div class="row">
            <div class="col-4 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Nama User</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">{{ $users->name }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Pilihan Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">{{ $kamarkost->tipe_kost }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 160px;">Tgl Pesanan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">{{ $time }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Est. Masuk Kost</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold" style="font-size: 14px; color: rgb(106, 5, 114);">{{ $selectedTime }}</h3>
            </div>
        </div>
    </div>
    <!-- rincian pembayaran -->
    <hr class="garis-2">
    <!-- konfirmasi nomer dana -->
    <div class="container">
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; width: 180px;">Total Pembayaran</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB;">Rp. {{ number_format($totalPembayaran, 0, ',', '.') }}</h3>
            </div>
        </div>
        @if ($pembayaran)
            <div class="row mt-3">
                <div class="col-1 text-start">
                    <img src="{{ asset('uploadkamar/' . $pembayaran->logo_pembayaran) }}" height="30" width="30">
                </div>
                <div class="col-11">
                    <h3 class="fw-medium" style="font-size: 16px; font-family: Poppins; margin-left: 6px; margin-top: 5px;">{{ $pembayaran->nama_pembayaran }}</h3>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12 text-start">
                <p class="fw-medium" style="font-size: 12px;">Silahkan Transfer Ke {{ $pembayaran->nama_pembayaran }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-start">
                <p style="margin-top:-20px"><span class="fw-semibold" id="nomorTelp" style="font-size:16px; color: #800080;">{{ $pembayaran->nomer_pembayaran }}</span><button class="btn fw-semibold text-success" style="font-size:12px; margin-left:-8px; margin-bottom:3px;" onclick="copyText()"><img id="copyIcon" src="{{ asset('img/copy.png') }}" height="15" alt=""></button>
                </p>
            </div>
            <div class="col-12 text-start mb-2">
                <h3 class="fw-medium" style="font-size: 14px; margin-top: -20px;">A/N {{ $pembayaran->atasnama_pembayaran }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="{{ asset('/user/home') }}" type="submit" style="width: 130px; height: 40px; border: 1px solid #9370DB; padding: 8px;text-decoration: none; color: #9370DB; border-radius: 8px; font-size: 12px; text-align: center;">Halaman Utama</a>
            </div>
            <div class="col-8">
                <button id="confirmButton" style="margin-left: 18px; width: 200px; height: 40px; background-color: #9370DB; border-radius: 8px; border: none; font-size: 12px; color: white;" data-bs-toggle="modal" data-bs-target="#konfirmasi">Konfirmasi Pembayaran</button>
                <!-- Modal -->
                <div class="modal fade" id="konfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content" style="border: 1px solid #800080; border-radius: 20px; margin-top: 10rem;">
                            <div class="modal-body">
                                <div class="container">
                                    <div class="row">
                                        <form action="/user/konfirmasitransaksi/admin" method="POST" enctype="multipart/form-data" x-data="{ gambar: '' }">
                                            @csrf
                                            <div class="col-12 text-center">
                                                <input type="hidden" value="{{ $kamarkost->id }}" name="id">
                                                <h3 class="fw-semibold" style="font-size: 16px;">Bukti Pembayaran</h3>
                                                <div class="position-relative">
                                                    <img id="frame" @click="openFileUpload" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 210px; height: 200px; border-radius: 8px; cursor: pointer;">
                                                    <label for="uploadfoto" class="label-upload">
                                                        <div class="box-icon">
                                                            <div class="bg-kategori rounded-5">
                                                                <i id="uploadIcon" class="bi bi-cloud-upload" style="position: absolute; font-size: 50px; color: white; top: 66px; left: 116px;"></i>
                                                            </div>
                                                        </div>
                                                    </label>
                                                    <input type="file" x-model="gambar" @change="changePhoto($event)" id="uploadfoto" name="gambar" accept="image/*" hidden>
                                                </div>
                                                <div class="col-12 text-center mt-3">
                                                    <button class="btn btn-kirim" :disabled="gambar ? null : 'disabled'" style="color: white; border: none; width: 150px;">Kirim</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end konfirmasi nomer dana -->
    <hr class="garis-3">
    <!-- promo kost -->
    <div class="container">
        <div class="row">
            <div class="col-8 text-start">
                <h3 class="fw-semibold" style="font-size: 16px; font-family: Poppins;">Promo Kamar Kost</h3>
            </div>
        </div>
        <section class="splide new-1" aria-label="Splide Basic HTML Example" style="margin-bottom: 1rem;">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($kamarkosts->where('lokasi_kost', 'Promo Kamar Kost') as $item)
                        <li class="splide__slide">
                            @php
                                // Menghapus titik dari nilai yang diambil dari database
                                $hargaKost = str_replace('.', '', $item->harga_kost);

                                // Mengonversi string ke tipe data integer
                                $hargaKost = (int) $hargaKost;

                                // Diskon
                                $diskon = 195000;

                                // Hitung harga setelah diskon
                                $harga_setelah_diskon = $hargaKost - $diskon;
                            @endphp
                            <a href="/user/detail/{{ $item->id }}">
                                <div class="card" style="width: 14rem; height: 16rem; border-radius: 8px;">
                                    <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" width="222" height="130" style="border-top-left-radius: 6px; border-top-right-radius: 6px; position: relative;">
                                    <div class="row">
                                        <div class="col-12">
                                            <a type="submit" style="background-color: rgba(255, 255, 255, 0.4); border: 1px solid #ccc; width: auto; height: 28px; border-radius: 8px; text-align: center; font-weight: 500; padding-top: 2px; padding-bottom: 2px; padding-left: 10px; padding-right: 10px; font-size: 14px; position: absolute; top: 10px; left: 16px;">{{ $item->kategori->kategori }}</a>
                                        </div>
                                    </div>
                                    <div class="card-body" style="margin-top: -10px;">
                                        <div class="row">
                                            <div class="col-1 text-start mt-1">
                                                <i class="bi bi-geo-alt"></i>
                                            </div>
                                            <div class="col-11 mt-2" style="width: 180px;">
                                                <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan {{ $item->alamat_kost }}</h3>
                                            </div>
                                        </div>
                                        <p class="text-secondary" style="font-size: 10px; margin-top: -4px;">{{ Illuminate\Support\Str::limit($item->fasilitas_kost, 34, '...') }}</p>
                                        <div class="row" style="margin-top: -14px">
                                            <div class="col-1 text-start">
                                                <i class="bi bi-lightning-fill" style="color: red;"></i>
                                            </div>
                                            <div class="col-5" style="margin-top: 2px;">
                                                <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 195rb</p>
                                            </div>
                                            <div class="col-5" style="margin-top: 2px;">
                                                <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp. {{ number_format($hargaKost, 0, ',', '.') }}</p>
                                            </div>
                                            <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp. {{ number_format($harga_setelah_diskon, 0, ',', '.') }}<span style="font-size: 14px; color: gray; font-weight: 400;">/bulan</span></h3>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
        <div class="row">
            <div class="col-8 text-start">
                <h3 class="fw-semibold" style="font-size: 16px; font-family: Poppins;">Kamar Kost Terpopuler</h3>
            </div>
        </div>
        <section class="splide new-2" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($kamarkosts->where('lokasi_kost', 'Kamar Kost Terpopuler') as $item)
                        <li class="splide__slide">
                            <a href="/user/detail/{{ $item->id }}">
                                <div class="card populer" style="width: 10rem; height: 14rem; border: none;">
                                    <a href="/user/detail/{{ $item->id }}">
                                        <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" class="rounded-1" width="160" height="80" />
                                    </a>
                                    <div class="card-body">
                                        <h3 class="fw-bold" style="font-size: 14px; font-family: Poppins;">{{ $item->kategori->kategori }}</h3>
                                        <p class="text-secondary" style="font-size: 12px; margin-top: -2px;">{{ $item->alamat_kost }}, Surabaya</p>
                                        <div class="row" style="margin-top: -10px;">
                                            <div class="col-1">
                                                <i class="bi bi-wifi" style="color: #ccc;"></i>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">WiFi</p>
                                            </div>
                                            <div class="col-1">
                                                <i class="bi bi-snow" style="color: #ccc"></i>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">AC</p>
                                            </div>
                                        </div>
                                        <div class="row" style="margin-top: -14px;">
                                            <div class="col-1">
                                                <ion-icon name="bed" style="color: #ccc; margin-top: 4px;"></ion-icon>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-secondary" style="font-size: 12px; margin-top: 2px; width: 100px;">Kasur</p>
                                            </div>
                                            <div class="col-1">
                                                <i class="bi bi-tv" style="color: #ccc;"></i>
                                            </div>
                                            <div class="col-4">
                                                <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">TV</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <div class="container" style="margin-top: -16px;">
                                <p class="fw-medium" style="font-size: 12px; font-family: Poppins;">
                                <h3 style="color: #800080; font-size: 14px;">Rp. {{ $item->harga_kost }}<span class="text-secondary" style="font-size: 12px;">/bulan</span></h3>
                                </p>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
    <hr class="garis-4">
    <div class="container">
        <div class="row">
            <div class="col-8 text-start">
                <h3 class="fw-semibold" style="font-size: 16px; font-family: Poppins;">Kamar Kost Terbaru</h3>
            </div>
        </div>
        <section class="splide new-3" aria-label="Splide Basic HTML Example" style="margin-bottom: 2rem;">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($kamarkosts->where('lokasi_kost', 'Kamar Kost Terbaru') as $item)
                        <li class="splide__slide">
                            <a href="/user/detail/{{ $item->id }}" style="text-decoration: none;">
                                <div class="custom-card" style="width: 260px; height: 116px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                                    <div class="position-relative mb-2">
                                        <div class="row">
                                            <div class="col-4 mb-0">
                                                <img src="{{ asset('uploadkamar/' . $item->gambar_kost) }}" style="border-radius: 15px; width: 90px; height: 90px; object-fit: cover;">
                                            </div>
                                            <div class="col-4" style="width: 150px; margin-left: 16px;">
                                                <h6 style="font-size: 16px; margin-top: 10px;" class="fw-bold text-secondary-emphasis">{{ $item->kategori->kategori }}</h6>
                                                <p style="margin-top: -5px; font-size: 12px; color: #6a6666fa;" class="mb-2 fw-normal">Uk. {{ Illuminate\Support\Str::limit($item->ukuran_kost, 13, '') }}</p>
                                                <form action="/user/detail/{{ $item->id }}">
                                                    <button class="btn-kost-populer" style="width: 125px; height: 33px; padding: 4px;">
                                                        <p>Cek</p>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>
    <!-- end promo kost -->
    <!-- icon ion -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- end icon ion -->
    <!-- sweet alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- end sweet alert 2 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function copyText() {
            // Menyalin teks ke clipboard
            var nomorDana = document.getElementById('nomorTelp');
            var teksNomorDana = nomorDana.innerText;

            var textarea = document.createElement('textarea');
            textarea.value = teksNomorDana;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);

            var copyIcon = document.getElementById('copyIcon');
            copyIcon.src = "{{ asset('img/copying.png') }}";
            copyIcon.alt = "New Copy Icon";

        }
        var splide = new Splide('.splide.new-1', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();
        var splide = new Splide('.splide.new-2', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.4rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();
        var splide = new Splide('.splide.new-3', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();

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
        // document.addEventListener('contextmenu', function(e) {
        //     e.preventDefault();
        // });
        function preview() {
            var frame = document.getElementById('frame');
            var uploadIcon = document.getElementById('uploadIcon');
            var uploadInput = document.getElementById('uploadfoto');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function openFileUpload() {
            document.getElementById('uploadfoto').click();
        }

        // Fungsi untuk mengubah gambar saat pengguna memilih file baru
        function changePhoto(event) {
            const input = event.target;
            // console.log(input.files);
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('frame').src = e.target.result;
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('form');

            form.addEventListener('submit', function(e) {
                e.preventDefault(); // Mencegah pengiriman formulir default

                const formData = new FormData(this);

                // Kirim data ke server dengan metode AJAX atau fetch
                fetch(this.action, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (response.ok) {
                            // Tampilkan modal SweetAlert jika respons dari server OK
                            swal("Pembayaran berhasil dikirim!", {
                                icon: "success",
                                buttons: false,
                                timer: 2500,
                            }).then(() => {
                                // Redirect ke halaman yang dituju setelah modal ditutup
                                window.location.href = "/user/home";
                            });
                        } else {
                            throw new Error('Network response was not ok.');
                        }
                    })
                    .catch(error => {
                        console.error('There has been a problem with your fetch operation:', error);
                        // Tampilkan pesan kesalahan jika terjadi kesalahan saat pengiriman data
                        swal("Oops!", "Terjadi kesalahan. Silakan coba lagi.", "error");
                    });
            });
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Riwayat</title>
    <!-- css rava -->
    <link rel="stylesheet" href="{{ asset('css/usercss/transaksi.css') }}">
    <!-- end css rava -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
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
        :root {
            scrollbar-color: transparent transparent;
        }

        html,
        body {
            user-drag: none;
            user-select: none;
        }

        body {
            overflow: overlay;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        /* .accordion-button:focus {
            border-color: none;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            color: rgb(0, 0, 0);
            background-color: white;
            box-shadow: none;
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

        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            background-color: rgb(0, 0, 0);
        }

        .btn:hover {
            background-color: #000000;
        }

        .payment-accordion {
            color: #212529;
            background: rgba(104, 41, 145, 0.9);
            padding: 1rem;
            padding-left: 0.8rem;
            padding-right: 0.7rem;
        }

        .payment-accordion-button {
            position: relative;
            /* display: flex; */
            align-items: center;
            width: 100%;
            padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
            font-size: 1rem;
            color: var(--bs-accordion-btn-color);
            text-align: left;
            background-color: rgba(104, 41, 145, 0.8);
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: var(--bs-accordion-transition);
            backdrop-filter: blur(50px) !important;
        }

        .payment-accordion-item {
            color: var(--bs-accordion-color);
            background-color: var(--bs-accordion-bg);
            border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
        }

        .payment-accordion-body {
            padding: 0px;
        }

        .fa-sm {
            font-size: 11px;
        }

        .clicked {
            background-color: #9370DB;
            color: #1c1d27 !important;
        }

        :focus-visible {
            outline: none;
        }

        .border-edit {
            padding: 1rem;
            border: 1px solid #30323e;
            border-top-left-radius: 15px !important;
            border-top-right-radius: 15px !important;
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
        }

        .border-non-edit {
            padding: 1rem;
            border: 1px solid #30323e;
            border-top-left-radius: 15px !important;
            border-top-right-radius: 15px !important;
            border-bottom-left-radius: 15px !important;
            border-bottom-right-radius: 15px !important;
        }

        .border-loop-bottom {
            border-bottom-left-radius: 15px !important;
            border-bottom-right-radius: 15px !important;
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
                    <h3 class="text-dark fw-semibold teks-detail" style="font-size: 16px; transition: color 0.3s ease;">Detail Riwayat</h3>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-divider">
    <div class="container mt-2">
        <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px;">Rincian Pesanan</h3>
    </div>
    <hr class="hr-rincian-pesanan">
    <div class="container">
        <div class="row">
            <div class="col-4 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Nama User</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">{{ $users->name }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Pilihan Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">{{ $transaksi->kamarkost->tipe_kost }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Tgl. Pesanan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">{{ Carbon\Carbon::parse($transaksi->created_at)->locale('id')->format('j F Y, H:i') . ' WIB' }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Est. Masuk Kost</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold" style="font-size: 14px; color: rgb(106, 5, 114);">{{ $transaksi->tanggal_masuk_kost }}</h3>
            </div>
        </div>
    </div>
    <hr class="hr-tengah">
    <div class="container">
        <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px; margin-top: -4px;">Pesanan Kamar Kost Anda</h3>
        <div class="card-custom" style="position: relative; width: 336px; height: 140px; background-color: whitesmoke; border-radius: 15px; border: 1px solid #ccc;">
            <img src="{{ asset('uploadkamar/' . $transaksi->kamarkost->gambar_kost) }}" width="110" height="130" style="position: absolute; top: 4px; left: 5px; border-radius: 14px;">
            <h3 class="fw-medium" style="position: absolute; top: 14px; left: 130px; font-size: 16px; color: #222327">Kamar {{ $transaksi->kamarkost->kategori->kategori }}</h3>
            <p class="text-secondary" style="position: absolute; top: 36px; left: 130px; font-size: 12px; line-height: 1.2; width: 200px;">Fasilitas: UK. {{ Illuminate\Support\Str::limit($kamarkost->ukuran_kost, 7, ' |') }} {{ $transaksi->kamarkost->fasilitas_kost }}</p>
            <p class="text-danger" style="position: absolute; top: 80px; left: 130px; font-size: 10px; font-style: italic;">(Tidak Termasuk Listrik) <i class="bi bi-info-circle" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: #000000; margin-left: 4px; font-size: 12px;"></i></p>
            <h3 class="fw-semibold" style="font-family: Poppins; position: absolute; top: 104px; left: 130px; font-size: 18px; color: rgb(106, 5, 114);">Rp {{ $transaksi->kamarkost->harga_kost }}</h3>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 336px; position: absolute; top: 320px; height: 84px;">
                <div class="modal-body">
                    <p class="fw-normal" style="font-size: 12px; margin-top: -4px; justify-content: center;">Biaya sewa kamar tidak termasuk listrik, dan pembayaran listrik akan dilakukan melalui sistem token dengan tarif yang berlaku.</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-pembayaran">
    <div class="container">
        <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px;">Rincian Pembayaran</h3>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Biaya Kamar Kost</h3>
            </div>
            @php
                // Menghapus titik dari nilai yang diambil dari database
                $hargaKost = str_replace('.', '', $transaksi->kamarkost->harga_kost);

                // Mengonversi string ke tipe data integer
                $hargaKost = (int) $hargaKost;

                // Melakukan perhitungan dengan nilai yang sudah dikonversi
                $totalPembayaran = $hargaKost + 200000 - 25000;
            @endphp
            <div class="col-7 text-end">
                <h3 class="fw-normal text-secondary-emphasis" style="font-size: 14px;">Rp.{{ number_format($hargaKost, 0, ',', '.') }}</h3>
            </div>
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px">Biaya Penanganan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-normal text-danger" style="font-size: 14px;">+Rp.200.000</h3>
            </div>
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 160px">Promo Voucher Kamar</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-normal text-success" style="font-size: 14px;">-Rp.25.000</h3>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-5 text-start">
                <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px; width: 190px; font-weight: 440 !important;">Total Pembayaran</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px; color: #9370DB;">Rp. {{ number_format($totalPembayaran, 0, ',', '.') }}</h3>
            </div>
        </div>
    </div>
    <hr class="hr-terakhir">
    <div class="container mt-3">
        <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px;">Metode Pembayaran</h3>
        <div class="row">
            <div class="col-2">
                <img src="{{ asset('uploadkamar/' . $transaksi->pembayaran->logo_pembayaran) }}" height="50" alt="">
            </div>
            <div class="col-10 mt-3">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">{{ $transaksi->pembayaran->nama_pembayaran }}</h3>
            </div>
        </div>
    </div>
    <hr class="hr-bukti">
    <div class="container mt-3">
        <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px;">Bukti Pembayaran</h3>
        <img src="{{ asset('uploadkamar/' . $transaksi->bukti_tf) }}" style="width: 100%; height: 500px;">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
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
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
    {{-- <script>
        // Fungsi untuk memperbarui tanggal secara satu kali saat halaman dimuat
        function updateTanggal() {
            var tanggalElement = document.getElementById('tanggal-pesanan');
            var now = new Date();
            var options = {
                day: 'numeric',
                month: 'long',
                year: 'numeric'
            };
            var formattedDate = now.toLocaleString('id-ID', options).replace(/\u200E/g, '') + ', ' + now.toLocaleString('id-ID', {
                hour: 'numeric',
                minute: 'numeric'
            }) + ' WIB'; // Menambahkan " WIB" setelah jam
            tanggalElement.innerText = formattedDate;
        }

        // Panggil fungsi updateTanggal saat halaman dimuat
        updateTanggal();
    </script> --}}
    <script>
        function getPayment(paymentId) {
            $.ajax({
                url: '/user/transaksi/check',
                type: 'POST',
                data: {
                    payment_id: paymentId,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {

                    // Handle the processed data
                },
            });
        }

        function konfirmasi() {
            console.log('test');
            $.ajax({
                url: '/user/transaksi/confirmation',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    // console.log(response);
                    $('#imageContainer').attr('src', response.gambar);
                    $('#name_bank').html(response.name);
                },
            });
        }
    </script>
</body>

</html>

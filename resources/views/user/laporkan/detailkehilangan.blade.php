<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Kehilangan</title>
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
                    <h3 class="text-dark fw-semibold teks-detail" style="font-size: 16px; transition: color 0.3s ease;">Detail Kehilangan</h3>
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
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 200px;">Status Laporan</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold text-{{ $kehilangan->status == 'Menunggu Respon' ? 'warning' : ($kehilangan->status == 'Laporan Diterima' ? 'success' : 'danger') }}" style="font-size: 14px;">{{ $kehilangan->status == 'Menunggu Respon' ? 'Menunggu Respon' : ($kehilangan->status == 'Laporan Diterima' ? 'Laporan Diterima' : 'Laporan Ditolak') }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">No. Kamar</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">{{ $kehilangan->nomer_kamar }}</h3>
            </div>
        </div>
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
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Lokasi Hilang</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">{{ $kehilangan->lokasi_hilang }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Barang Yang Hilang</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">{{ $kehilangan->barang_hilang }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Tanggal Kehilangan</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold" style="font-size: 14px; color: rgb(106, 5, 114);">{{ Carbon\Carbon::parse($kehilangan->tanggal_hilang)->locale('id')->format('j F Y') }}</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Jam Kehilangan</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold" style="font-size: 14px; color: rgb(106, 5, 114);">{{ $kehilangan->jam_hilang }} WIB</h3>
            </div>
        </div>
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

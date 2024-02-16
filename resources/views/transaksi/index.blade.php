<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
    <!-- css rava -->
    <link rel="stylesheet" href="css/transaksi.css">
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
    <style>
        :root {
            scrollbar-color: transparent transparent;
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

        .accordion-button:focus {
            border-color: none;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            color: black;
            background-color: white;
            box-shadow: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-3 text-start" style="margin-top: 10px;">
                <a href="{{ route('detailrumah') }}" style="color: black">
                    <ion-icon name="chevron-back-outline" style="font-size: 18px;"></ion-icon>
                </a>
            </div>
            <div class="col-6 text-center mt-2">
                <h3 class="fw-bold" style="font-family: Poppins; font-size: 18px;">Transaksi</h3>
            </div>
        </div>
    </div>
    <hr class="hr-divider">
    <div class="container py-4">
        <div class="col-12 d-flex gap-3" style="overflow-x: auto; white-space: nowrap; margin-top: -10px; margin-bottom: 2rem;">
            <button class="btn btn-primary" style="width: 110px; height: 40px;">Per Bulan</button>
            <button class="btn btn-outline-secondary" style="width: 110px; height: 40px;">Per 3 Bulan</button>
            <button class="btn btn-outline-secondary" style="width: 110px; height: 40px;">Per 6 Bulan</button>
            <button class="btn btn-outline-secondary" style="width: 110px; height: 40px;">Per Tahun</button>
        </div>
    </div>
    <hr class="hr-divider" style="margin-top: -40px;">
    <div class="container py-2 bg-body-secondary">
        <div class="row">
            <div class="col-2 text-start">
                <button class="tokokamarkost"><i class="bi bi-house-fill" style="color: white;"></i></button>
            </div>
            <div class="col-8">
                <h3 class="fw-semibold" style="font-size: 18px; margin-top: 10px; font-family: Poppins; margin-left: -10px">Sewa Kamar Kost</h3>
            </div>
        </div>
    </div>
    <hr class="hr-tipis">
    <div class="container py-2">
        <div class="row mt-2">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Nama Pelanggan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">Muhammad Ravanelo</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Jenis Kamar</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">Kamar Putra</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Durasi Ngekost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">1 Bulan</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Biaya Fasilitas</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">Rp.100.000</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Biaya Kamar Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">Rp.2.000.000</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Total Biaya</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">Rp.2.100.000</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-2">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" style="border: 1px solid #ccc; border-radius: 15px;">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Metode Pembayaran
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <button style="border-radius: 0px !important; width: 334px; height: 50px; background-color: white; margin-left: -20px; margin-top: -50px;">ovo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script></script>
</body>

</html>

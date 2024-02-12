<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/transaksi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            overflow: overlay;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="col-12 text-start">
            <a href="{{ route('detailrumah') }}">
                <i class="bi bi-arrow-left" style="font-size: 30px; color: #000000;"></i>
            </a>
        </div>
        <div class="col-12 mt-1">
            <h3 class="fw-semibold" style="font-size: 22px;">Detail Pembayaran Transaksi</h3>
        </div>
        <div class="col-12 mt-3" style="margin-left: -10px;">
            <section class="splide" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <button class="btn-bulan" style="font-size: 14px;">Per Bulan</button>
                        </li>
                        <li class="splide__slide">
                            <button class="btn-tigabulan" style="font-size: 14px;">Per 3 Bulan</button>
                        </li>
                        <li class="splide__slide">
                            <button class="btn-enambulan" style="font-size: 14px;">Per 6 Bulan</button>
                        </li>
                        <li class="splide__slide">
                            <button class="btn-tahun" style="font-size: 14px;">Per Tahun</button>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <div class="col-12 text-start mt-3" style="overflow-x: auto; overflow: overlay;">
            <h3 class="fw-semibold" style="font-size: 20px;">Pembayaran Pertama</h3>
        </div>
        <div x-show="filter == 'bulan'">
            <div class="custom-card" style="position: relative; width: 335px; height: 230px; padding: 9px; border-radius: 10px; border: 1px solid #ccc;">
                <p class="fw-normal mt-2">Jika kamu bayar pakai DP:</p>
                <div class="row">
                    <div class="col-6">
                        <a href="" style="color: #000000; text-decoration: underline;">
                            <p class="fw-normal mt-1" style="color: #000000;">Uang Muka(DP)</p>
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <p class="fw-semibold mt-1">Rp760.000</p>
                    </div>
                </div>
                <div class="row" style="margin-top: -5px;">
                    <div class="col-6">
                        <a href="" style="color: #000000; text-decoration: underline;">
                            <p class="fw-normal" style="color: #000000;">Pelunasan</p>
                        </a>
                    </div>
                    <div class="col-6 text-end">
                        <p class="fw-semibold">Rp2.600.000</p>
                    </div>
                </div>
                <div style="margin-top: -15px;">
                    <hr style="border-top: 3px dashed #ccc; border-bottom: none; border-left: none; border-right: none; border-radius: 15px; border-spacing: 5px;">
                </div>
                <div class="row">
                    <div class="col-12 text-start">
                        <p class="fw-normal">Jika kamu pakai pembayaran penuh:</p>
                    </div>
                    <div class="col-7 text-start" style="margin-top: -10px;">
                        <a href="" style="color: #000000; text-decoration: underline;">
                            <p class="fw-normal" style="color: #000000">Pembayaran Penuh</p>
                        </a>
                    </div>
                    <div class="col-5 text-end" style="margin-top: -10px;">
                        <p class="fw-semibold">Rp3.360.000</p>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 15px;">
                <div class="col-12 text-start">
                    <h3 class="fw-semibold" style="font-size: 20px;">Pembayaran Selanjutnya</h3>
                </div>
                <div class="col-7 text-start mt-2">
                    <p class="fw-normal" style="color: #000000">Harga Sewa Per Bulan</p>
                </div>
                <div class="col-5 text-end mt-2">
                    <p class="fw-semibold">Rp2.000.000</p>
                </div>
                <div class="col-6 text-start" style="margin-top: -5px;">
                    <a href="" style="color: #000000; text-decoration: underline">
                        <p class="fw-normal" style="color: #000000">Biaya Tambahan</p>
                    </a>
                </div>
                <div class="col-6 text-end" style="margin-top: -5px;">
                    <p class="fw-semibold">Rp15.000</p>
                </div>
                <div style="margin-top: -15px;">
                    <hr style="border-top: 3px dashed #ccc; border-bottom: none; border-left: none; border-right: none; border-radius: 15px; border-spacing: 5px;">
                </div>
                <div class="col-6 text-start">
                    <p class="fw-normal" style="color: #000000;">Total Pembayaran :</p>
                </div>
                <div class="col-6 text-end">
                    <p class="fw-semibold">2.015.000</p>
                </div>
            </div>
        </div>
    </div>
    <div style="margin-top: -20px;">
        <hr style="border-top: 3px solid #ccc; border-bottom: none; border-left: none; border-right: none; border-radius: 15px; border-spacing: 5px;">
    </div>
    <div class="col-12 text-center">
        <form action="{{ route('checkout') }}">
            <button class="btn-bayar">Bayar Sekarang</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide', {
            drag: 'free',
            lazyload: 'nearby',
            perPage: '3',
            pagination: false,
            arrows: false,
            gap: '0.1rem',
            padding: '0.6rem',
        });

        splide.mount();
    </script>
</body>

</html>

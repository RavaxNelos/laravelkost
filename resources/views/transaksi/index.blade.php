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
</head>

<body>
    <div class="container py-3">
        <div class="row">
            <div class="col-3 text-start mt-3">
                <a href="{{ route('detailrumah') }}" style="color: black">
                    <ion-icon name="chevron-back-outline" style="font-size: 30px;"></ion-icon>
                </a>
            </div>
            <div class="col-6 text-center mt-3">
                <h3 class="fw-semibold" style="font-family: Poppins">Transaksi</h3>
            </div>
        </div>
    </div>
    <hr class="hr-divider">
    <div class="container py-3">
        {{-- <div x-data="{ activeButton: 'Button 1' }"> --}}
        <section class="splide new-1" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list">
                    <div class="buttons-container">
                        <li class="splide__slide">
                            <button @click="activeButton = 'Button 1'" :class="{ 'active': activeButton === 'Button 1' }">Per Bulan</button>
                        </li>
                        <li class="splide__slide">
                            <button @click="activeButton = 'Button 2'" :class="{ 'active': activeButton === 'Button 2' }">Per 3 Bulan</button>
                        </li>
                        <li class="splide__slide">
                            <button @click="activeButton = 'Button 3'" :class="{ 'active': activeButton === 'Button 3' }">Per 6 Bulan</button>
                        </li>
                        <li class="splide__slide">
                            <button @click="activeButton = 'Button 4'" :class="{ 'active': activeButton === 'Button 4' }">Per Tahun</button>
                        </li>
                    </div>
                </ul>
            </div>
        </section>
        {{-- </div> --}}
    </div>
    <hr class="hr-divider">
    <div class="container py-2 bg-body-secondary">
        <div class="row">
            <div class="col-2 text-start">
                <button class="tokokamarkost"><i class="bi bi-house-fill" style="color: white;"></i></button>
            </div>
            <div class="col-8">
                <h3 class="fw-semibold" style="font-size: 18px; margin-top: 10px; font-family: Poppins; margin-left: -10px">Toko Sewa Kamar Kost</h3>
            </div>
            <div class="col-2 text-end mt-2">
                <i class="bi bi-three-dots-vertical" style="color: #ccc; font-size: 20px;"></i>
            </div>
        </div>
    </div>
    <hr class="hr-tipis">
    <div class="container py-2">
        <div class="row">
            <div class="col-3">
                <img src="{{ asset('img/kostsurabaya6.jpg') }}" style="width: 70px; height: 60px; object-fit: cover; border-radius: 10px">
            </div>
            <div class="col-9">
                <h6 class="fw-medium" style="font-family: Poppins; font-size: 16px; margin-left: -8px; width: 250px;">Kost Putra | Ukuran Kamar Kost 3 X 4 Meter</h6>
                <h6 class="text-secondary" style="font-size: 14px; margin-left: -8px; width: 160px;">Fasilitas : Ac 1,Toilet 1, Kasur 1, dan Selimut 2</h6>
            </div>
            <div class="col-10 text-center mt-2">
                <h6 class="fw-medium" style="margin-left: 4px; font-size: 16px;">Harga Kamar :</h6>
            </div>
            <div class="col-2">
                <div class="dropdown">
                    <button class="btn btn-outline-secondary rounded text-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style="border-radius: 0px; margin-left: -32px;">
                        Per
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Per Bulan</a></li>
                        <li><a class="dropdown-item" href="#">Per 3 Bulan</a></li>
                        <li><a class="dropdown-item" href="#">Per 6 Bulan</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-10 text-center">
                <h6 class="fw-bold" style="margin-left: 12px; font-size: 18px; color: #9b59b6">Rp. 2.000.000</h6>
            </div>
        </div>
    </div>
    <hr class="hr-tipis">
    <div class="container py-3">
        <div class="row">
            <div class="col-6 text-start">
                <h6 class="fw-semibold" style="font-size: 16px; width: 200px;">Harga Kamar Kost :</h6>
            </div>
            <div class="col-6 text-end">
                <h3 class="fw-bold" style="font-size: 16px;">Rp. 2.000.000</h3>
            </div>
            <div class="col-6 text-start">
                <h6 class="fw-semibold" style="font-size: 16px; width: 300px;">Harga Sewa Fasilitas :</h6>
            </div>
            <div class="col-6 text-end">
                <h3 class="fw-bold" style="font-size: 16px;">Rp. 100.000</h3>
            </div>
            <div class="col-6 text-start">
                <h6 class="fw-semibold" style="font-size: 16px; width: 300px;">Harga Administrasi :</h6>
            </div>
            <div class="col-6 text-end">
                <h3 class="fw-bold" style="font-size: 16px;">Rp. 50.000</h3>
            </div>
        </div>
        <hr class="hr-tipis">
        <div class="row mt-2">
            <div class="col-6 text-start">
                <h6 class="fw-semibold" style="font-size: 16px; color: #9b59b6;">Total Harga :</h6>
            </div>
            <div class="col-6 text-end">
                <h3 class="fw-bold" style="font-size: 16px; color: #9b59b6">Rp. 2.150.000</h3>
            </div>
        </div>
    </div>
    <hr class="charlie" style="margin-top: -10px;">
    <hr class="hr-tebal">
    <div class="container">
        <div class="sticky-bottom">
            <div class="row">
                <div class="col-6 text-start mt-2">
                    <p class="fw-medium text-secondary" style="width: 300px;">Total Pembayaran :</p>
                    <h3 class="fw-bold" style="font-size: 16px; margin-top: -16px;">Rp. 2.150.000</h3>
                </div>
                .col-6.text-end
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide.new-1', {
            arrows: false,
        });
        splide.mount();

        (function() {

            if (!window.StyleFix) return;
            if (hasxmldatauri()) return;

            // Test unescaped XML data uri
            function hasxmldatauri() {
                var img = new Image();
                datauri = 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0,0 1,1" fill="#000"></svg>';
                img.src = datauri;
                return (img.width == 1 && img.height == 1);
            }

            StyleFix.register(function(css) {

                return css.replace(RegExp(/url\(\'data:image\/svg\+xml,(.*)\'\)/gi), function($0, svg) {
                    return "url('data:image/svg+xml," + escape(svg) + "')";
                });

            });

        })();

        /* Radial Gradient Syntax fix */
        StyleFix.register(function(css, raw) {
            if (PrefixFree.functions.indexOf('radial-gradient') > -1) {
                css = css.replace(/radial-gradient\(([a-z-\s]+\s+)?at ([^,]+)(?=,)/g, function($0, shape, center) {
                    return 'radial-gradient(' + center + (shape ? ', ' + shape : '');
                });
            }

            return css;
        });
    </script>
</body>

</html>

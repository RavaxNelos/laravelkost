<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- icon bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- end icon bootstrap -->
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <!-- end google font -->
    <!-- css rava -->
    <link rel="stylesheet" href="css/buktipembayaran.css">
    <!-- end css rava -->
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        html,
        body {
            user-drag: none;
            user-select: none;
        }
    </style>
</head>

<body>
    <div class="container p-2">
        <div class="row">
            <div class="col-1 text-start">
                <a href="/transaksi" style="color: black">
                    <ion-icon name="chevron-back-outline" style="font-size: 18px;"></ion-icon>
                </a>
            </div>
            <div class="col-11">
                <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px; margin-left: -6px; margin-top: -2px;">Rincian Bookingan</h3>
            </div>
        </div>
    </div>
    <hr class="garis-1">
    <!-- rincian pembayaran -->
    <div class="container">
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Nama Pelanggan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">Muhammad Ravanelo</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Durasi Ngekost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">1 Bulan</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 160px;">Tanggal Pesan Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">21 Februari 2024</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 170px;">Tanggal Booking Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphesis" style="font-size: 14px;">23 Februari 2024</h3>
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
                <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB;">Rp.2.100.000</h3>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-1 text-start">
                <img src="{{ asset('img/gopay.png') }}" height="30" width="30">
            </div>
            <div class="col-11">
                <h3 class="fw-medium" style="font-size: 20px; font-family: Poppins; margin-left: 6px; margin-top: 4px;">Gopay</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-start">
                <p class="fw-medium">Silahkan transfer melalui GoPay</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-start">
                <h3 id="nomorDana" class="fw-semibold" style="font-size: 18px; color: rgb(106, 5, 114); margin-top: -16px;">082332724688 <span onclick="salinNomorDana()" style="font-size: 16px; color: #007bff; cursor: pointer;">Copy</span></h3>
            </div>
            <div class="col-12 text-start">
                <h3 class="fw-medium" style="font-size: 16px; margin-top: -6px;">Atas Nama NGEKOST</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <a href="/home" type="submit" style="width: 130px; height: 40px; border: 2px solid #9370DB; padding: 8px;text-decoration: none; color: #9370DB; border-radius: 8px; font-size: 12px; text-align: center;">Halaman Utama</a>
            </div>
            <div class="col-8">
                <button style="margin-left: 18px; width: 200px; height: 40px; background-color: #9370DB; border-radius: 8px; border: none; font-size: 12px;">Konfirmasi Pembayaran</button>
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
            <div class="col-4 text-end">
                <p class="text-primary">Semua</p>
            </div>
        </div>
        <section class="splide new-1" aria-label="Splide Basic HTML Example" style="margin-bottom: 1rem;">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <div class="card" style="width: 14rem; height: 19.5rem; border-radius: 8px;">
                            <img src="{{ asset('img/kamarkostputri1.jpg') }}" height="150" width="222" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <a type="submit" style="border: 1px solid #ccc; width: 60px; height: 30px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px;">Putri</a>
                                    </div>
                                    <div class="col-6">
                                        <a type="submit" style="border: 1px solid #ccc; width: 130px; height: 30px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px; margin-left: -2.5rem;">Kost Andalan</a>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-1 text-start mt-1">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-11 mt-2" style="width: 180px;">
                                        <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan Mulyorejo</h3>
                                    </div>
                                </div>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -4px;">K.Mandi Dalam|Wifi|AC|Lemari...</p>
                                <div class="row" style="margin-top: -14px">
                                    <div class="col-1 text-start">
                                        <i class="bi bi-lightning-fill" style="color: red;"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 195rb</p>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp.1.500.000</p>
                                    </div>
                                    <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp.1.305.000<span style="font-size: 14px; color: black; font-weight: 400;">/bulan</span></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 14rem; height: 19.5rem; border-radius: 8px;">
                            <img src="{{ asset('img/kamarkostputri4.jpg') }}" height="150" width="222" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="card-body">
                                <a type="submit" style="border: 1px solid #ccc; width: 60px; height: 30px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px;">Putri</a>
                                <div class="row mt-2">
                                    <div class="col-1 text-start mt-1">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-11 mt-2" style="width: 180px;">
                                        <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan Mulyorejo</h3>
                                    </div>
                                </div>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -4px;">K.Mandi Dalam|Wifi|AC|Lemari...</p>
                                <div class="row" style="margin-top: -14px">
                                    <div class="col-1 text-start">
                                        <i class="bi bi-lightning-fill" style="color: red;"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 135rb</p>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp.1.500.000</p>
                                    </div>
                                    <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp.1.365.000<span style="font-size: 14px; color: black; font-weight: 400;">/bulan</span></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 14rem; height: 19.5rem; border-radius: 8px;">
                            <img src="{{ asset('img/kamarkostputri3.jpg') }}" height="150" width="222" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="card-body">
                                <a type="submit" style="border: 1px solid #ccc; width: 60px; height: 30px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px;">Putri</a>
                                <div class="row mt-2">
                                    <div class="col-1 text-start mt-1">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-11 mt-2" style="width: 180px;">
                                        <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan Mulyorejo</h3>
                                    </div>
                                </div>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -4px;">K.Mandi Dalam|Wifi|AC|Lemari...</p>
                                <div class="row" style="margin-top: -14px">
                                    <div class="col-1 text-start">
                                        <i class="bi bi-lightning-fill" style="color: red;"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 100rb</p>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp.1.500.000</p>
                                    </div>
                                    <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp.1.400.000<span style="font-size: 14px; color: black; font-weight: 400;">/bulan</span></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="card" style="width: 14rem; height: 19.5rem; border-radius: 8px;">
                            <img src="{{ asset('img/kamarkostputri5.jpg') }}" height="150" width="222" style="border-top-left-radius: 4px; border-top-right-radius: 4px;">
                            <div class="card-body">
                                <a type="submit" style="border: 1px solid #ccc; width: 60px; height: 30px; border-radius: 8px; text-align: center; font-weight: 500; padding: 2px;">Putri</a>
                                <div class="row mt-2">
                                    <div class="col-1 text-start mt-1">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="col-11 mt-2" style="width: 180px;">
                                        <h3 class="fw-medium" style="font-size: 14px; margin-left: -4px;">Kecamatan Mulyorejo</h3>
                                    </div>
                                </div>
                                <p class="text-secondary" style="font-size: 12px; margin-top: -4px;">K.Mandi Dalam|Wifi|AC|Lemari...</p>
                                <div class="row" style="margin-top: -14px">
                                    <div class="col-1 text-start">
                                        <i class="bi bi-lightning-fill" style="color: red;"></i>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="fw-medium" style="color: red; font-size: 12px; margin-left: -4px; width: 96px;">Diskon 200rb</p>
                                    </div>
                                    <div class="col-5" style="margin-top: 2px;">
                                        <p class="text-secondary" style="font-size: 12px; text-decoration: line-through; width: 96px; margin-left: -12px;">Rp.1.500.000</p>
                                    </div>
                                    <h3 class="fw-semibold" style="font-size: 18px; font-family: Poppins; color: #9370DB; margin-top: -10px;">Rp.1.300.000<span style="font-size: 14px; color: black; font-weight: 400;">/bulan</span></h3>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <div class="row">
            <div class="col-8 text-start">
                <h3 class="fw-semibold" style="font-size: 16px; font-family: Poppins;">Kamar Kost Terpopuler</h3>
            </div>
            <div class="col-4 text-end">
                <p class="text-primary">Semua</p>
            </div>
        </div>
        <section class="splide new-2" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                  <ul class="splide__list">
                      <li class="splide__slide">
                        <div class="card" style="width: 10.1rem; height: 14rem;">
                            <img src="{{ asset('img/kamarkostputra1.jpg') }}"  height="100" width="160" style="border-radius: 15px;">
                            <div class="card-body">
                              <h3 class="fw-bold" style="font-size: 14px; font-family: Poppins;">Kost Putra</h3>
                              <p class="text-secondary" style="font-size: 12px; margin-top: -2px;">Kalijudan, Surabaya</p>
                              <div class="row" style="margin-top: -10px;">
                                <div class="col-1">
                                    <i class="bi bi-wifi" style="color: #ccc;"></i>
                                </div>
                                <div class="col-8">
                                    <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">WiFi</p>
                                </div>
                              </div>
                              <div class="row" style="margin-top: -14px;">
                                <div class="col-1">
                                    <i class="bi bi-snow" style="color: #ccc"></i>
                                </div>
                                <div class="col-8">
                                    <p class="text-secondary" style="font-size: 12px; margin-top: 2px;">AC</p>
                                </div>
                              </div>
                          </div>
                      </li>
                      <li class="splide__slide">Slide 02</li>
                      <li class="splide__slide">Slide 03</li>
                  </ul>
            </div>
          </section>
    </div>
    <!-- end promo kost -->
    <!-- icon ion -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- end icon ion -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        function salinNomorDana() {
            // Menyalin teks ke clipboard
            var nomorDana = document.getElementById('nomorDana');
            var teksNomorDana = nomorDana.innerText;

            var textarea = document.createElement('textarea');
            textarea.value = teksNomorDana;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);
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
            gap: '0.5rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();
    </script>
</body>

</html>

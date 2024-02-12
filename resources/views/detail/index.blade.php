<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="css/detailrumah.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        button.btn-like-detail {
            background-color: rgba(255, 255, 255, 0.8) !important;
            backdrop-filter: blur(50px) !important;
        }
    </style>
</head>


<body>
    <section class="splide new-2" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 100px; min-width: 250px; position: relative;">
                        <img src="{{ asset('img/kostsurabaya6.jpg') }}"style="border-radius: 0px;" class="w-100">
                    </div>
                </li>
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 100px; min-width: 250px; position: relative;">
                        <img src="{{ asset('img/kostsurabaya15.jpg') }}"style="border-radius: 0px;" class="w-100">
                    </div>
                </li>
                <li class="splide__slide">
                    <div style="max-width: 300%; min-height: 100px; min-width: 250px; position: relative;">
                        <img src="{{ asset('img/kostsurabaya10.jpg') }}"style="border-radius: 0px;" class="w-100">
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <form action="{{ route('kembalidetail') }}">
        <button class="btn-back-home"><i class="bi bi-arrow-left"></i></button>
    </form>
    <button class="btn-like-detail" onclick="changeIconAndColor(this)"><i class="bi bi-star"></i></button>
    </div>
    <div class="container">
        <div class="card-custom-detail" style="position: absolute; width: 335px; height: 425px; background-color: rgb(255, 255, 255); box-shadow: 5px 0 10px rgba(0, 0, 0, 0.1), -5px 0 10px rgba(0, 0, 0, 0.1); margin-top: -30px; border-radius: 25px;">
            <div class="container">
                <!-- Judul kamar -->
                <div class="col-7 text-start mt-3">
                    <h6 class="fw-bold" style="font-size: 18px; font-family: Poppins;">Kamar Kost Putra</h6>
                </div>
                {{-- <div class="col-5 text-end mt-3">
                        <h3 style="font-size: 16px;" class="text-dark fw-bold">Rp. 2.000.000</h3>
                    </div> --}}
                <div class="row">
                    <div class="col-9 text-start">
                        <p class="text-secondary" style="margin-top: -8px; font-size: 12px;">Ukuran Kamar Kostnya 3 x 4 Meter</p>
                    </div>
                </div>
                <!-- end Judul kamar -->
                <div class="col-12 text-start">
                    <h6 class="fw-semibold" style="position: absolute; top: 70px; font-size: 18px; font-family: Poppins">Fasilitas</h6>
                </div>
                <section class="splide new" aria-label="Splide Basic HTML Example" style="margin-top: -13px">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center;">
                                    <img src="{{ asset('img/iconwifi.png') }}" width="24" height="24">
                                    <div class="text-dark" style="margin-top: 4px;">
                                        <p style="font-size: 14px;">Wifi</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center;">
                                    <img src="{{ asset('img/iconkasur.png') }}" width="24" height="24">
                                    <div class="text-dark" style="margin-top: 4px;">
                                        <p style="font-size: 14px;">Kasur</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                                    <img src="{{ asset('img/iconlemari.png') }}" width="24" height="24">
                                    <div class="text-dark" style="margin-top: 4px;">
                                        <p style="font-size: 14px;">Lemari</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                                    <img src="{{ asset('img/icondapur.png') }}" width="24" height="24">
                                    <div class="text-dark" style="margin-top: 4px;">
                                        <p style="font-size: 14px;">Dapur</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                                    <img src="{{ asset('img/iconkamarmandi.png') }}" width="24" height="24">
                                    <div class="text-dark" style="margin-top: 4px;">
                                        <p style="font-size: 14px;">Toilet</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                                    <img src="{{ asset('img/iconac.png') }}" width="24" height="24">
                                    <div class="text-dark" style="margin-top: 4px;">
                                        <p style="font-size: 14px;">Ac</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                                    <img src="{{ asset('img/iconkulkas.png') }}" width="24" height="24">
                                    <div class="text-dark" style="margin-top: 4px;">
                                        <p style="font-size: 14px;">Kulkas</p>
                                    </div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="mt-6" style="margin-top: 40px; text-align: center; display: flex; flex-direction: column; align-items: center; ">
                                    <img src="{{ asset('img/iconselimut.png') }}" width="24" height="24">
                                    <div class="text-dark" style="margin-top: 4px;">
                                        <p style="font-size: 14px;">Selimut</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
                <div class="col-12">
                    <h6 class="fw-semibold">Tentang Kamar Kost</h6>
                    <p class="text-secondary" style="font-size: 12px;">
                        Kamar kost putra ini memiliki ukuran kamar 3 x 4 Meter dan mempunyai kamar mandi dalam beserta alat-alatnya.
                    </p>
                </div>
                <div class="col-12 mt-2">
                    <h6 class="fw-semibold">Isi Kamar Kost</h6>
                    <section class="splide new-1" aria-label="Splide Basic HTML Example">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <img src="{{ asset('img/interior1.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ asset('img/interior2.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ asset('img/interior3.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ asset('img/interior4.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                                </li>
                                <li class="splide__slide">
                                    <img src="{{ asset('img/interior5.jpg') }}" height="60" width="60" style="border-radius: 5px;">
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
                <div class="row">
                    <div class="col-2 mt-4">
                        <a href="https://api.whatsapp.com/send?phone=6282332724688" target="_blank" rel="noopener noreferrer">
                            <button class="btn-wa"><i class="bi bi-whatsapp"></i></button>
                        </a>
                    </div>
                    <div class="col-2 mt-4">
                        <a href="https://maps.app.goo.gl/pWPjQFsNmoAjsngG7" target="_blank" rel="noopener noreferrer">
                            <button class="btn-lokasi"><i class="bi bi-geo-alt-fill"></i></button>
                        </a>
                    </div>
                    <div class="col-8 mt-4">
                        <form action="{{ route('transaksi') }}">
                            <button class="btn-pesan">Pesan Sekarang</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        var splide = new Splide('.splide.new', {
            arrows: false,
            pagination: false,
            perPage: 3,
            autoWidth: true,
            gap: '1.3rem',
            lazyLoad: 'nearby',
            drag: 'free',
        });

        splide.mount();
        var splide = new Splide('.splide.new-1', {
            arrows: false,
            pagination: false,
            perPage: 1,
            autoWidth: true,
            gap: '0.5rem',
            lazyLoad: 'nearby',
        });

        splide.mount();

        var splide = new Splide('.splide.new-2', {
            autoplay: true,
            lazyLoad: 'nearby',
            pagination: false,
            arrows: false,
        });
        splide.mount();

        let isFavorite = false;

        function changeIconAndColor(button) {
            // Mengambil elemen ikon pada tombol
            var iconElement = button.querySelector("i");

            // Mengganti kelas ikon untuk mengubahnya menjadi bintang terisi (filled star)
            iconElement.classList.toggle("bi-star");
            iconElement.classList.toggle("bi-star-fill");

            // Mengubah warna ikon menjadi kuning
            var currentColor = iconElement.style.color;
            iconElement.style.color = (currentColor === "purple") ? "" : "purple";

            isFavorite = !isFavorite;

            Swal.fire({
                title: 'Berhasil!',
                text: isFavorite ? 'Anda favoritkan kamar kost ini!' : 'Anda tidak favoritkan kamar kost ini!',
                icon: isFavorite ? 'success' : 'error',
                confirmButtonText: 'OKE'
            }).then((result) => {
                // Callback yang dijalankan saat tombol "OK" ditekan
                if (result.isConfirmed) {
                    // Tambahkan logika atau perubahan lain yang ingin Anda lakukan di sini
                    console.log('Tombol OKE telah ditekan oleh user');
                }
            });
        }
    </script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef" />
    <link rel="apple-touch-icon" href="img/udangaksen.png">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">
    <title>Food Rava</title>

    <link rel="icon" href="img/udangaksen.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- bootstrap font awoseme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top w-100">
        <div class="container-fluid">
            <a class="navbar-brand" style="font-family: Sofia; font-size: 25px; margin-left: 3px; font-weight: 700;">Taste</a>
            <button class="navbar-toggler" style="margin-right: 3px;" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="font-family: Sofia; font-size: 25px"></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="cart-btn"><i class="fa-solid fa-cart-shopping"></i></button>
                </form>
            </div>
        </div>
    </nav>


    <div class="min-vh-100 pt-7 w-100" style="background: url('img/blur1.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container px-4">
            <div class="row align-items-center g-5 px-3">
                <div class="col-12 col-lg-6" style="margin-top: 5rem;">
                    <h1 class="deskripsi" style="font-family: Oleo Script Swash Caps;color: #000000;margin-top: -1rem;font-weight: 750;">Penyajian makanan daging dan sup disana</h1>
                    <div class="mt-5" style="margin-left: 1rem;">
                        <button type="button" class="btn btn-light btn_food" style="margin-right: 10px; border-radius: 15px;"><img src="img/pizza3.png" class="gambar_icon_food" style="width: 35px; height: 35px;"></button>
                        <button type="button" class="btn btn-light btn_food" style="margin-right: 10px; border-radius: 15px;"><img src="img/pizza 2.png" class="gambar_icon_food" style="width: 35px; height: 35px;"></button>
                        <button type="button" class="btn btn-light btn_food" style="margin-right: 10px; border-radius: 15px;"><img src="img/red-bean-soup.png" class="gambar_icon_food" style="width: 35px; height: 35px;"></button>
                        <button type="button" class="btn btn-light btn_food" style="margin-right: 10px; border-radius: 15px;"><img src="img/winter-melon-soup.png" class="gambar_icon_food" style="width: 35px; height: 35px;"></button>
                    </div>
                    <br>
                    <div class="mt-4">
                        <button type="button" class="btn btn-dark btn-keterangan" style="border-top-right-radius: 20px !important; border-bottom-left-radius: 20px !important; border-top-left-radius: 0px; border-bottom-right-radius: 0px; transition: 1s;">Keterangan Lainnya &#8599</button>
                    </div>
                </div>
                <div class="col-12 col-lg-6" style="margin-bottom: 2rem;">
                    <img src="img/gambar1-removebg-preview.png" class="w-100 gambar1" style="object-fit: contain;">
                </div>
            </div>
        </div>
    </div>
    <div class="min-vh-100 mt-5 w-100" style="background: url('img/blur2.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container px-4">
            <div class="row g-5">
                <div class="col-12 col-lg-3">
                    <div class="card card-menu" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.5);  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <img src="img/food (4).png" class="card-img-top gambarfood" style="margin-top: -145px;">
                        <div class="card-body" style="margin-top: -70px; position: relative;">
                            <button class="like" onclick="changeColor(this)">
                                <box-icon class="btn-like" name='heart'></box-icon>
                            </button>
                            <h2 class="judulfood" style="font-size: 25px; font-weight: 800; margin-top: 10px">Sup kare ayam bakar</h2>
                            <p class="card-text">Sup keju adalah hidangan yang terbuat dari campuran keju yang dilelehkan dalam kaldu atau susu.</p>
                            <span style="font-weight: 900; font-size: 25px; color: #333; margin-bottom: 30px;">$15</span>
                            <button class="btn btn-dark btn-lg btn-add-to-cart" style="border-bottom-right-radius: 35px !important; right: -3px; bottom: -1px; position: absolute;">
                                <i class="fas fa-cart-shopping"></i>
                                <!-- Menggunakan ikon cart dari Font Awesome -->
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card card-menu" style="border-radius: 30px; background-color: rgba(255, 255, 255, 0.5);  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <img src="img/food (4).png" class="card-img-top gambarfood" style="margin-top: -145px;">
                        <div class="card-body" style="margin-top: -70px; position: relative;">
                            <button class="like" onclick="changeColor(this)">
                                <box-icon class="btn-like" name='heart'></box-icon>
                            </button>
                            <h2 class="judulfood" style="font-size: 25px; font-weight: 800; margin-top: 10px;">Sup kare ayam goreng</h2>
                            <p class="card-text">Hidangan ini memiliki tekstur kental dan kaya rasa berkat keju yang meleleh di dalam sup keju tersebut.</p>
                            <span style="font-weight: 900; font-size: 25px; color: #333; margin-bottom: 30px;">$25</span>
                            <button class="btn btn-dark btn-lg btn-add-to-cart" style="border-bottom-right-radius: 35px !important; right: -3px; bottom: -1px; position: absolute;">
                                <i class="fas fa-cart-shopping"></i>
                                <!-- Menggunakan ikon cart dari Font Awesome -->
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="keterangan-food-judul" style="margin-top: 1rem;font-family: Oleo Script Swash Caps; font-size: 35px; font-weight: 750; color: #000000;">Keterangan tentang makanan disini</h3>
                    <p class="keterangan-food-deskripsi" style="margin-top: 30px; font-size: 20px; color: #000000;">Sup Kare atau Curry Soup adalah hidangan sup yang menggunakan bumbu kare sebagai bahan dasar untuk memberikan rasa gurih, pedas, dan harum rempah-rempah.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="min-vh-100 mt-5 w-100" style="background: url('img/blur3.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;">
        <div class="container px-4">
            <div class="row g-5">
                <div class="col-12 col-lg-8 mt-4">
                    <h3 class="penjelasan-lanjut-judul" style="margin-top: 2rem; font-family: Oleo Script; font-size: 35px; font-weight: 750; color: #000000;">Penjelasan Lebih Lanjut Tentang Makanan</h3>
                    <p class="penjelasan-lanjut-deskripsi" style=" color: #000000; font-size: 20px; margin-top: 2rem; margin-bottom: 2rem;">Rawon adalah sup daging hitam khas Jawa Timur. Bahan utamanya adalah daging sapi yang sudah di goreng matang dan juga diisi kuah untuk menambah rasa.</p>
                </div>
                <div class="col-12 col-lg-4">
                    <img src="img/produk-removebg-preview.png" class="img-penjelasan-lanjut" style="object-fit: contain; margin-top: -40px; position: relative;">
                    <div style="position: absolute;">
                        <button class="angka-penjelasan-lanjut" style="position: absolute; top: -280px; left: 220px; color: #ffffff; background-color: #000000; padding: 20px;border-radius: 150px; border: 2px solid white;">$20</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 w-100S" style="background: url('img/blur4.jpg');background-position: center;background-repeat: no-repeat;background-size: cover; height: 90vh;">
        <div class="container px-4">
            <div class="row align-items-center g-5">
                <div class="col-12 col-lg-6">
                    <img src="img/Group_1.png" class="w-100 gambarhp">
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="teksjudulaplikasi">Kalian Bisa Mengunduh Aplikasinya Di Media</h2>
                    <p class="teksdeskripsiaplikasi">App Store dan Play Store adalah platform distribusi aplikasi untuk perangkat mobile yang paling populer.</p>
                    <div class="row g-3 row-cols-auto pt-2">
                        <div class="col">
                            <button class="btn btn-dark btn-lg btn-aplikasi d-flex align-items-center justify-content-center">
                                <i class="fa-brands fa-apple"></i>
                                <span>App Store</span>
                            </button>
                        </div>
                        <div class="col">
                            <button class="btn btn-dark btn-lg btn-aplikasi d-flex align-items-center justify-content-center">
                                <i class="fa-brands fa-google-play"></i>
                                <span>Google Play</span>
                            </button>
                        </div>
                    </div>
                </div>
                {{-- <button onclick="addToHome()">Tambahkan ke Layar Utama</button>
                <script>
                    function addToHome() {
                        if ('addToHomescreen' in window) {
                            addToHomescreen();
                        } else {
                            alert('Tombol Tambahkan ke Layar Utama tidak didukung oleh peramban ini.');
                        }
                    }
                </script> --}}
                {{-- <div class="col-12 col-lg-12 penjelasan-bawah">
                    <h3>Ingin menghubungi kami dari jarak jauh?</h3>
                    <button class="btn-bawah">Info selengkapnya</button>
                </div>
                <div class="footer">
                    <p>Penjelasan tentang toko kami,Toko makanan sup ini adalah surga bagi para pecinta kuliner yang menyukai hidangan hangat dan lezat.</p>
                    <div class="footer-menu-group">
                        <div class="row g-6" style="margin-top: 140px;">
                            <div class="col-4">
                                <div class="brandbawah">
                                    <div class="brand-bawah">Taste</div>
                                    <div class="brand-bawahbottom">CAFE-CHILL-RAVA-AREA</div>
                                </div>
                            </div>
                            <div class="col-2">
                                <h4 class="text-black fw-bold">PERALATAN</h4>
                                <div class="row g-2 mt-2 text-black">
                                    <div class="col-12"><span style="font-size: 15px; color: white;">PERALATAN 1<span></div>
                                    <div class="col-12"><span style="font-size: 15px; color: white;">PERALATAN 2<span></div>
                                    <div class="col-12"><span style="font-size: 15px; color: white;">PERALATAN 3<span></div>
                                </div>
                            </div>
                            <div class="col-3">
                                <h4 class="text-black fw-bold">TOKO BUKA</h4>
                                <div class="row g-2 mt-2 text-black">
                                    <div class="col12"><span style="font-size: 15px; color: white;">Senin - Jumat: 08:00 - 20:00</span></div>
                                    <div class="col12"><span style="font-size: 15px; color: white;">Sabtu: 09:00 - 18:00</span></div>
                                    <div class="col12"><span style="font-size: 15px; color: white;">Minggu: Tutup</span></div>
                                </div>
                            </div>
                            <div class="col-3">
                                <h4 class="text-black fw-bold">KONTAK</h4>
                                <div class="row g-2 mt-2 text-black">
                                    <div class="col12"><span style="font-size: 15px; color: white;">Alamat: Jl Kalijudan 9/Trembesi</span></div>
                                    <div class="col12"><span style="font-size: 15px; color: white;">Telepon: (+62) 823-3272-4688</span></div>
                                    <div class="col12"><span style="font-size: 15px; color: white;">Email: info@taste.com</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>

    <!-- js saya -->
    <script src="js/script2.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.1/dist/umd/popper.min.js"></script>
    <!-- animation -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
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
        document.addEventListener("DOMContentLoaded", function() {
            window.addEventListener("scroll", function() {
                var navbar = document.querySelector(".navbar");
                navbar.classList.toggle("scrolled", window.scrollY > 0);
            });
        });
        document.addEventListener('wheel', function(event) {
            if (event.ctrlKey === true) {
                event.preventDefault();
            }
        });
        $(document).ready(function() {
            $('.navbar-toggler').click(function() {
                $('nav').toggleClass('bg-white'); // Tambahkan atau hapus kelas bg-white
            });
        });
    </script>
    {{-- <script>
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script> --}}
    <script>
        function changeColor(button) {
            if (button.style.backgroundColor === 'green') {
                button.style.backgroundColor = '';
            } else {
                button.style.backgroundColor = 'green';
            }
        }
    </script>
    <script>
        document.addEventListener('click', function(event) {
            var navbarCollapse = document.getElementById('navbarSupportedContent');
            if (navbarCollapse && !navbarCollapse.contains(event.target)) {
                navbarCollapse.classList.remove('show');
            }
        });
    </script>
    {{-- <script>
        let deferredPrompt;

        window.addEventListener('beforeinstallprompt', (e) => {
            // Prevent the default prompt
            e.preventDefault();

            // Stash the event so it can be triggered later.
            deferredPrompt = e;

            // Show your install button
            showInstallButton();
        });

        function showInstallButton() {
            // Show your install button, for example:
            const installButton = document.getElementById('installButton');
            installButton.style.display = 'block';

            installButton.addEventListener('click', () => {
                // Trigger the deferred prompt
                deferredPrompt.prompt();

                // Wait for the user to respond to the prompt
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    } else {
                        console.log('User dismissed the install prompt');
                    }

                    // Reset the deferred prompt variable
                    deferredPrompt = null;

                    // Hide the install button
                    installButton.style.display = 'none';
                });
            });
        }
    </script> --}}

</body>

</html>

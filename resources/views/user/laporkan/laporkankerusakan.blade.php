<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporkan Kerusakan</title>
    <link rel="stylesheet" href="{{ asset('css/usercss/laporkankerusakan.css') }}">
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
    <!-- font awoseme -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- end font awoseme -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
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

        .input-nama:focus {
            border: 1px solid red !important;
            /* Ganti #000 dengan warna yang Anda inginkan */
        }

        .form-control:focus {
            border-color: #dbdada;
            box-shadow: none;
        }

        .dropdown-toggle::after {
            display: inline-block;
            margin-top: 4px;
            vertical-align: 1.255em;
            content: "";
            border-top: 0.6em solid;
            border-right: 0.6em solid transparent;
            border-bottom: 0;
            border-left: 0.6em solid transparent;
            color: white;
        }

        .dropdown-menu {
            --bs-dropdown-zindex: 1000;
            --bs-dropdown-min-width: 19.3rem;
            --bs-dropdown-padding-x: 0;
            --bs-dropdown-padding-y: 0.5rem;
            --bs-dropdown-spacer: 0.125rem;
            --bs-dropdown-font-size: 1rem;
            --bs-dropdown-color: var(--bs-body-color);
            --bs-dropdown-bg: var(--bs-body-bg);
            --bs-dropdown-border-color: var(--bs-border-color-translucent);
            --bs-dropdown-border-radius: var(--bs-border-radius);
            --bs-dropdown-border-width: var(--bs-border-width);
            --bs-dropdown-inner-border-radius: calc(var(--bs-border-radius) - var(--bs-border-width));
            --bs-dropdown-divider-bg: var(--bs-border-color-translucent);
            --bs-dropdown-divider-margin-y: 0.5rem;
            --bs-dropdown-box-shadow: var(--bs-box-shadow);
            --bs-dropdown-link-color: var(--bs-body-color);
            --bs-dropdown-link-hover-color: var(--bs-body-color);
            --bs-dropdown-link-hover-bg: var(--bs-tertiary-bg);
            --bs-dropdown-link-active-color: black;
            --bs-dropdown-link-active-bg: gray;
            --bs-dropdown-link-disabled-color: var(--bs-tertiary-color);
            --bs-dropdown-item-padding-x: 1rem;
            --bs-dropdown-item-padding-y: 0.25rem;
            --bs-dropdown-header-color: #6c757d;
            --bs-dropdown-header-padding-x: 1rem;
            --bs-dropdown-header-padding-y: 0.5rem;
            position: absolute;
            z-index: var(--bs-dropdown-zindex);
            display: none;
            min-width: var(--bs-dropdown-min-width);
            padding: var(--bs-dropdown-padding-y) var(--bs-dropdown-padding-x);
            margin: 0;
            font-size: var(--bs-dropdown-font-size);
            color: var(--bs-dropdown-color);
            text-align: left;
            list-style: none;
            background-color: var(--bs-dropdown-bg);
            background-clip: padding-box;
            border: var(--bs-dropdown-border-width) solid var(--bs-dropdown-border-color);
            border-radius: var(--bs-dropdown-border-radius);
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
            <a href="{{ asset('/user/kamar') }}" class="nav__link">
                <i class="bi bi-door-closed"></i>
                <span class="nav__text">Kamar</span>
            </a>
            <div class="nav__link nav-active" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-chat-dots-fill"></i>
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="margin-top: 31rem; margin-left: 4rem; width: 210px;">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <a href="{{ asset('/user/kerusakan') }}" class="kerusakan fw-medium"><i class="bi bi-exclamation-triangle-fill"></i> Laporkan Kerusakan</a>
                        </div>
                        <hr class="garis-pembatas-laporkan" style="border-top: 1px solid #ccc; margin-top: 10px;">
                        <div class="col-12" style="margin-top: -10px">
                            <a href="{{ asset('/user/kehilangan') }}" class="kehilangan fw-medium"><i class='bx bxs-search-alt-2'></i> Laporkan Kehilangan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section x-data="{ filter: 'form' }">
        <div class="sticky-top" id="stickyHeader">
            <div class="container py-2" style="background-color: white;">
                <div class="row">
                    <div class="col-12 text-start mt-2">
                        <h3 class="text-dark fw-semibold teks-kerusakan" style="font-size: 16px; transition: color 0.3s ease;">Laporan Kerusakan</h3>
                    </div>
                </div>
            </div>
        </div>
        <hr class="garis-1">
        <div class="container">
            <div class="row" style="margin-top: -16px;">
                <div class="col-6 text-center" style="margin-left: -12px;">
                    <button :class="filter == 'form' ? 'btn-active' : 'btn-non-aktif'" x-on:click="filter = 'form';">Form Laporan</button>
                </div>
                <div class="col-6 text-center" style="margin-left: 0px;">
                    <button :class="filter == 'riwayat' ? 'btn-active' : 'btn-non-aktif'" x-on:click="filter = 'riwayat';">Riwayat Laporan</button>
                </div>
            </div>
        </div>
        <hr class="garis-2">
        <div class="container" x-show="filter == 'form'">
            <div class="card-laporkan-kerusakan">
                <div class="container mt-3">
                    <div class="row">
                        <div class="col-12 text-start">
                            <h3 class="fw-medium text-secondary" style="font-size: 14px;">Nama User</h3>
                        </div>
                        <div class="col-12">
                            <input type="text" class="input-nama" value="Muhammad Ravanelo" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-start">
                            <h3 class="fw-medium text-secondary" style="font-size: 14px;">No. Kamar</h3>
                        </div>
                        <div class="col-12">
                            <input type="text" class="input-nama" value="Kamar No. 1" disabled>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-start">
                            <h3 class="fw-medium text-secondary" style="font-size: 14px;">Tanggal Laporan<span class="wajib">*</span></h3>
                        </div>
                        <div class="col-12">
                            <div class="input-group">
                                <input type="date" class="form-control" id="tanggal" name="tanggal" style="border: 1px solid rgb(187, 0, 255); border-top-leftradius: 4px; border-bottom-left-radius: 4px;" placeholder="Masukkan tanggal laporan" id="datepicker">
                                <span class="input-group-text" style="border: 1px solid rgb(187, 0, 255); border-top-right-radius: 4px; border-bottom-right-radius: 4px; background: linear-gradient(45deg, #9c27b0, #673ab7, #3f51b5); color: white;">
                                    <i class="bi bi-calendar"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-start">
                            <h3 class="fw-medium text-secondary" style="font-size: 14px;">Apa Yang Rusak?<span class="wajib">*</span></h3>
                        </div>
                        <div class="col-9 text-start">
                            <input type="text" id="inputKerusakan" class="input-kerusakan" placeholder="Barang yang mengalami kerusakan" disabled>
                        </div>
                        <div class="col-3 text-end">
                            <div class="dropdown">
                                <button class="btn-dropdown-kerusakan dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu" id="barangDropdown">
                                    <li><a class="dropdown-item" href="#" onclick="updateInput('Kasur')">Kasur</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="updateInput('Lampu Kamar')">Lampu Kamar</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="updateInput('Pintu Kamar')">Pintu Kamar</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="updateInput('Jendela Kamar')">Jendela Kamar</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="updateInput('Lantai Kamar')">Lantai Kamar</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="updateInput('AC Kamar')">AC Kamar</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="updateInput('Kulkas')">Kulkas</a></li>
                                    <li><a class="dropdown-item" href="#" onclick="showTextInput()">Lainnya</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-start">
                            <h3 class="fw-medium text-secondary" style="font-size: 14px;">Unggah Foto<span class="wajib">*</span></h3>
                        </div>
                        <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;">
                            <div class="position-relative">
                                <img id="frame" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 100px; height: 100px; border-radius: 8px; cursor: pointer;" onclick="deleteImage(); checkImages()">
                                <label for="uploadfoto" class="label-upload">
                                    <div class="box-icon">
                                        <div class="bg-kategori rounded-5">
                                            <i id="uploadIcon" class="bi bi-cloud-upload"></i>
                                        </div>
                                    </div>
                                    <input type="file" onchange="preview()" hidden id="uploadfoto" accept="image/*">
                                </label>
                            </div>
                            <div class="position-relative">
                                <img id="frame2" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 100px; height: 100px; border-radius: 8px; cursor: pointer;" onclick="deleteImage2(); checkImages()">
                                <label for="uploadfoto2" class="label-upload">
                                    <div class="box-icon">
                                        <div class="bg-kategori rounded-5">
                                            <i id="uploadIcon2" class="bi bi-cloud-upload"></i>
                                        </div>
                                    </div>
                                    <input type="file" onchange="preview2()" hidden id="uploadfoto2" accept="image/*">
                                </label>
                            </div>
                            <div class="position-relative">
                                <img id="frame3" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 100px; height: 100px; border-radius: 8px; cursor: pointer;" onclick="deleteImage3(); checkImages()">
                                <label for="uploadfoto3" class="label-upload">
                                    <div class="box-icon">
                                        <div class="bg-kategori rounded-5">
                                            <i id="uploadIcon3" class="bi bi-cloud-upload"></i>
                                        </div>
                                    </div>
                                    <input type="file" onchange="preview3()" hidden id="uploadfoto3" accept="image/*">
                                </label>
                            </div>
                            <div class="position-relative">
                                <img id="frame4" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 100px; height: 100px; border-radius: 8px; cursor: pointer;" onclick="deleteImage4(); checkImages()">
                                <label for="uploadfoto4" class="label-upload">
                                    <div class="box-icon">
                                        <div class="bg-kategori rounded-5">
                                            <i id="uploadIcon4" class="bi bi-cloud-upload"></i>
                                        </div>
                                    </div>
                                    <input type="file" onchange="preview4()" hidden id="uploadfoto4" accept="image/*">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-12 text-start">
                            <h3 class="fw-medium text-secondary" style="font-size: 14px;">Keterangan (Opsional)</h3>
                        </div>
                        <div class="col-12">
                            <textarea name="" id="" placeholder="Tambahkan keterangan kamu" class="textarea-keterangan"></textarea>
                        </div>
                    </div>
                </div>
                <hr class="kirim-laporan" style="border-top: 1px solid #ccc">
                <div class="container text-center">
                    <button type="button" class="btn btn-dark" style="border-radius: 50px; width: 170px;" disabled id="submitButton">Kirim Laporan</button>
                </div>
            </div>
        </div>
        <div class="container" x-show="filter == 'riwayat'" style="margin-top: 8rem;">
            <div class="col-12 text-center">
                <img src="{{ asset('img/chat.png') }}" width="180" height="180">
            </div>
            <div class="col-12 text-center">
                <p class="fw-normal" style="font-size: 14px;">Belum Ada Laporan Yang Masuk</p>
            </div>
        </div>
        <hr class="hr-1" x-show="filter == 'form'">
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        function preview() {
            var frame = document.getElementById('frame');
            var uploadIcon = document.getElementById('uploadIcon');
            var uploadInput = document.getElementById('uploadfoto');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage() {
            var frame = document.getElementById('frame');
            var uploadIcon = document.getElementById('uploadIcon');
            var uploadInput = document.getElementById('uploadfoto');

            // Kembalikan ke gambar semula dan tampilkan ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview2() {
            var frame = document.getElementById('frame2');
            var uploadIcon = document.getElementById('uploadIcon2');
            var uploadInput = document.getElementById('uploadfoto2');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage2() {
            var frame = document.getElementById('frame2');
            var uploadIcon = document.getElementById('uploadIcon2');
            var uploadInput = document.getElementById('uploadfoto2');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview3() {
            var frame = document.getElementById('frame3');
            var uploadIcon = document.getElementById('uploadIcon3');
            var uploadInput = document.getElementById('uploadfoto3');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage3() {
            var frame = document.getElementById('frame3');
            var uploadIcon = document.getElementById('uploadIcon3');
            var uploadInput = document.getElementById('uploadfoto3');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

        function preview4() {
            var frame = document.getElementById('frame4');
            var uploadIcon = document.getElementById('uploadIcon4');
            var uploadInput = document.getElementById('uploadfoto4');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }
        }

        function deleteImage4() {
            var frame = document.getElementById('frame4');
            var uploadIcon = document.getElementById('uploadIcon4');
            var uploadInput = document.getElementById('uploadfoto4');

            // Kembalikan ke gambar semula dan tampilkan kembali ikon upload
            frame.src = "{{ asset('img/gambarpolosan.jpg') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
        }

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

        function updateInput(selectedValue) {
            document.querySelector('.input-kerusakan').value = selectedValue;
        }

        function showTextInput() {
            var inputElement = document.getElementById("inputKerusakan");
            inputElement.removeAttribute("disabled");
            inputElement.focus();
        }

        document.addEventListener('DOMContentLoaded', function() {
            // Memantau input dan gambar
            var inputElements = document.querySelectorAll('.input-nama, .input-kerusakan, #tanggal');
            var fileInputs = document.querySelectorAll('input[type="file"]');
            var submitButton = document.querySelector('.btn');

            // Memantau setiap perubahan pada input dan gambar
            inputElements.forEach(function(input) {
                if (input.type === "date") {
                    input.addEventListener('change', checkInputs);
                } else {
                    input.addEventListener('input', checkInputs);
                }
            });

            fileInputs.forEach(function(fileInput) {
                fileInput.addEventListener('change', checkInputs);
            });

            // Fungsi untuk memeriksa input dan gambar
            function checkInputs() {
                var namaValue = document.querySelector('.input-nama').value;
                var kerusakanValue = document.querySelector('.input-kerusakan').value;
                var tanggalValue = document.querySelector('#tanggal').value;

                // Mengaktifkan atau menonaktifkan tombol berdasarkan status input
                submitButton.disabled = !(namaValue && kerusakanValue && tanggalValue);
            }
        });

        function checkImages() {
            var frame1 = document.getElementById("frame").getAttribute("src");
            var frame2 = document.getElementById("frame2").getAttribute("src");
            var frame3 = document.getElementById("frame3").getAttribute("src");
            var frame4 = document.getElementById("frame4").getAttribute("src");

            if (frame1 === "{{ asset('img/gambarpolosan.jpg') }}" &&
                frame2 === "{{ asset('img/gambarpolosan.jpg') }}" &&
                frame3 === "{{ asset('img/gambarpolosan.jpg') }}" &&
                frame4 === "{{ asset('img/gambarpolosan.jpg') }}") {
                document.getElementById("submitButton").disabled = true;
            } else {
                document.getElementById("submitButton").disabled = false;
            }
        }
    </script>
</body>

</html>

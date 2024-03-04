<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporkan Kerusakan</title>
    <link rel="stylesheet" href="{{ asset('css/laporkankerusakan.css') }}">
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
            font-family: 'Poppins', sans-serif;
        }

        ::-webkit-scrollbar {
            width: 0px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }
    </style>
</head>

<body>
    <div class="sticky-bottom">
        <nav class="nav">
            <a href="/home" class="nav__link">
                <i class="bi bi-house-door"></i>
                <span class="nav__text">Beranda</span>
            </a>
            <a href="/kamar" class="nav__link">
                <i class="bi bi-door-closed"></i>
                <span class="nav__text">Kamar</span>
            </a>
            <div class="nav__link nav-active">
                <i class="bi bi-chat-dots-fill"></i>
                <span class="nav__text">Lapor</span>
            </div>
            <a href="" class="nav__link">
                <i class="bi bi-clock"></i>
                <span class="nav__text">Riwayat</span>
            </a>
            <a href="" class="nav__link">
                <i class="bi bi-person"></i>
                <span class="nav__text">Profil</span>
            </a>
        </nav>
    </div>
    <div class="sticky-top" id="stickyHeader">
        <div class="container py-2" style="background-color: white;">
            <div class="row">
                <div class="col-12 text-start mt-2">
                    <h3 class="text-dark fw-semibold teks-kerusakan" style="font-size: 16px; transition: color 0.3s ease;">Laporkan Kerusakan</h3>
                </div>
            </div>
        </div>
    </div>
    <hr class="garis-1">
    <div class="container">
        <div class="card-laporkan-kerusakan">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-12 text-start">
                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Nama User</h3>
                    </div>
                    <div class="col-12">
                        <input type="text" class="input-nama" value="Muhammad Ravanelo">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-start">
                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">No. Kamar</h3>
                    </div>
                    <div class="col-12">
                        <input type="text" class="input-nama" value="Kamar No. 1">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-start">
                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Apa Yang Rusak?<span class="wajib">*</span></h3>
                    </div>
                    <div class="col-12">
                        <div class="select-menu">
                            <div class="select-btn">
                                <span class="sBtn-text">Bagian yang mengalami kerusakan...</span>
                                <i class="bx bx-chevron-down"></i>
                            </div>
                            <ul class="options">
                                <li class="option">
                                    <span class="option-text">Barang</span>
                                </li>
                                <li class="option">
                                    <span class="option-text">Alat Elektronik</span>
                                </li>
                                <li class="option">
                                    <span class="option-text">Lampu</span>
                                </li>
                                <li class="option">
                                    <span class="option-text">Kran Air</span>
                                </li>
                                <li class="optionend">
                                    <span class="option-text">Lainnya...</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-start">
                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Tanggal Laporan<span class="wajib">*</span></h3>
                    </div>
                    <div class="col-12">
                        <div class="input-group">
                            <input type="date" class="form-control" id="tanggal" name="tanggal" onblur="(this.type='text')">
                            <span class="input-group-text">
                                <i class="bi bi-calendar"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-start">
                        <h3 class="fw-medium text-secondary" style="font-size: 14px;">Unggah Foto<span class="wajib">*</span></h3>
                    </div>
                    <div class="col-12 d-flex gap-2" style="overflow-x: auto; overflow: overlay;">
                        <div class="position-relative">
                            <img id="frame" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 100px; height: 100px; border-radius: 8px; cursor: pointer;" onclick="deleteImage()">
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
                            <img id="frame2" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 100px; height: 100px; border-radius: 8px; cursor: pointer;" onclick="deleteImage2()">
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
                            <img id="frame3" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 100px; height: 100px; border-radius: 8px; cursor: pointer;" onclick="deleteImage3()">
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
                            <img id="frame4" src="{{ asset('img/gambarpolosan.jpg') }}" style="width: 100px; height: 100px; border-radius: 8px; cursor: pointer;" onclick="deleteImage4()">
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
                        <textarea name="" id="" cols="22" rows="4" placeholder="Tambahkan keterangan kamu" class="textarea-keterangan"></textarea>
                    </div>
                </div>
            </div>
            <hr class="kirim-laporan">
            <div class="container text-center">
                <button class="btn btn-secondary text-white">Kirim Laporan</button>
            </div>
        </div>
    </div>
    <hr class="hr-1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
        const optionMenu = document.querySelector(".select-menu"),
            selectBtn = optionMenu.querySelector(".select-btn"),
            options = optionMenu.querySelectorAll(".option"),
            sBtn_text = optionMenu.querySelector(".sBtn-text");
        selectBtn.addEventListener("click", () => optionMenu.classList.toggle("active"));
        options.forEach(option => {
            option.addEventListener("click", () => {
                let selectedOption = option.querySelector(".option-text").innerText;
                sBtn_text.innerText = selectedOption;
                optionMenu.classList.remove("active");
            });
        });

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
    </script>
</body>

</html>

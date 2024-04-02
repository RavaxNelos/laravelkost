<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link rel="stylesheet" href="{{ asset('css/usercss/profil.css') }}">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@trimble-oss/modus-icons@1.9.0/dist/modus-solid/fonts/modus-icons.css">
    <style>
        * {
            font-family: 'Ubuntu', sans-serif;
        }

        .input-nama::placeholder {
            font-size: 12px;
            /* Sesuaikan ukuran font yang diinginkan */
            color: #808080;
            /* Sesuaikan warna font yang diinginkan */
        }

        .btn.btn-secondary:enabled {
            background-color: #9370DB;
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
            <div class="nav__link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <i class="bi bi-chat-dots"></i>
                <span class="nav__text">Lapor</span>
            </div>
            <a href="{{ asset('/user/riwayat') }}" class="nav__link">
                <i class="bi bi-clock"></i>
                <span class="nav__text">Riwayat</span>
            </a>
            <a href="{{ asset('/user/profil') }}" class="nav__link nav-active">
                <i class="bi bi-person-fill"></i>
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
    <section class="position-relative">
        <section class="header">
            <div class="col-12 text-center">
                <img id="profileImage" src="{{ asset($users->gambar ? 'uploadkamar/' . $users->gambar : '/img/customer1.jpg') }}" style="margin-top: 50px; width: 90px; height: 90px; border: 1px solid white; border-radius: 50%; position: relative;">
                <h3 class="fw-medium" style="font-size: 18px; color: white; margin-top: 16px;">{{ $users->name }}</h3>
                <button class="btn-status">{{ $users->status }}</button>
            </div>
        </section>
    </section>
    <div class="container px-4">
        <section class="card-list">
            <button class="btn-edit-profil" data-bs-toggle="modal" data-bs-target="#editprofil-{{ $users->id }}"><i class="bi bi-pencil-fill" style="font-size: 16px; margin-left: 10px; margin-right: 10px; color: #9370DB;"></i>Profil<i class="bi bi-arrow-right text-secondary" style="font-size: 16px; margin-left: 12.8rem;"></i></button>
            <!-- Modal -->
            <div class="modal fade" id="editprofil-{{ $users->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="border: 1px solid #800080; border-radius: 20px; margin-top: 10rem;">
                        <div class="modal-body">
                            <div class="container">
                                <form action="/user/profil/edit" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $users->id }}">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h3 class="fw-semibold" style="font-size: 16px;">Edit Profil</h3>
                                        </div>
                                        <div class="col-12 text-center">
                                            <div class="position-relative">
                                                <img id="frame" src="{{ asset($users->gambar ? 'uploadkamar/' . $users->gambar : '/img/customer1.jpg') }}" style="width: 100px; height: 100px; border-radius: 100px; cursor: pointer;" onclick="deleteImage()">
                                                <label for="uploadfoto" class="label-upload">
                                                    <div class="box-icon">
                                                        <div class="bg-kategori rounded-5">
                                                            <i id="uploadIcon" class="bi bi-cloud-upload" style="position: absolute; font-size: 30px; color: white; top: 30px; left: 126px;"></i>
                                                        </div>
                                                    </div>
                                                    <input type="file" onchange="preview()" hidden id="uploadfoto" accept="image/*">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-2">
                                            <p class="fw-medium" style="font-size: 14px;">Upload Foto Profil</p>
                                        </div>
                                        <div class="col-12 text-start">
                                            <label for="name" class="fw-medium" style="font-size: 14px;">Nama Barumu</label>
                                            <input type="text" class="input-nama" id="name" name="name" value="{{ $users->name }}" placeholder="Ketik Nama Barumu..." style="font-size: 14px;">
                                        </div>
                                        <div class="col-12 text-center mt-3">
                                            <button type="submit" class="btn btn-secondary" style="color: white; border: none;">Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-edit-akun" data-bs-toggle="modal" data-bs-target="#editakun"><i class="bi bi-person-fill" style="font-size: 16px; margin-left: 10px; margin-right: 10px; color: #9370DB;"></i>Akun<i class="bi bi-arrow-right text-secondary" style="font-size: 16px; margin-left: 12.8rem;"></i></button>
            <!-- Modal -->
            <div class="modal fade" id="editakun" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="border: 1px solid #800080; border-radius: 20px; margin-top: 10rem;">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="{{ asset('img/user.png') }}" width="100" height="100">
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <h3 class="fw-semibold" style="font-size: 16px;">Edit Akun</h3>
                                    </div>
                                    <div class="col-12 text-start">
                                        <label for="name" class="fw-medium" style="font-size: 14px;">Email Baru</label>
                                        <input type="email" class="input-email" id="email" value="muhammadravaneloakhtar@gmail.com" placeholder="Ketik Email Barumu..." oninput="checkInputsAkun()" style="font-size: 14px;">
                                    </div>
                                    <div class="col-12 text-start mt-2">
                                        <label for="name" class="fw-medium" style="font-size: 14px;">No. Tlpn Baru</label>
                                        <input type="number" class="input-nohp" id="no_hp" value="082332724688" placeholder="Ketik Nomor Tlpn Barumu..." oninput="checkInputsAkun()" style="font-size: 14px;">
                                    </div>
                                    <div class="col-12 text-center mt-3">
                                        <button id="simpanAkunButton" class="btn btn-secondary" style="color: white; border: none;" disabled>Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="/favorit">
                <button class="btn-edit-akun"><i class="bi bi-heart-fill" style="font-size: 16px; margin-left: 10px; margin-right: 10px; color: #9370DB;"></i>Kamar Kost Favorit<i class="bi bi-arrow-right text-secondary" style="font-size: 16px; margin-left: 6.8rem;"></i></button>
            </form>
            <button class="btn-edit-akun" data-bs-toggle="modal" data-bs-target="#bantuan"><i class="bi bi-question-circle-fill" style="font-size: 16px; margin-left: 10px; margin-right: 10px; color: #9370DB;"></i>Bantuan<i class="bi bi-arrow-right text-secondary" style="font-size: 16px; margin-left: 11.4rem;"></i></button>
            <!-- Modal -->
            <div class="modal fade" id="bantuan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="border: 1px solid #800080; border-radius: 20px; margin-top: 14rem;">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="{{ asset('img/info.png') }}" width="100" height="100">
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <h3 class="fw-semibold" style="font-size: 16px;">Bantuan</h3>
                                    </div>
                                    <div class="col-12 text-center">
                                        <form action="https://api.whatsapp.com/send" method="get" target="_blank" rel="noopener noreferrer">
                                            <input type="hidden" name="phone" value="6282332724688">
                                            <button class="btn btn-wa"><i class="bi bi-whatsapp" style="color: green; font-size: 16px; margin-right: 10px;"></i>Hubungi Kami</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-edit-akun" data-bs-toggle="modal" data-bs-target="#editsandi"><i class="bi bi-lock-fill" style="font-size: 16px; margin-left: 10px; margin-right: 10px; color: #9370DB;"></i>Edit Kata Sandi<i class="bi bi-arrow-right text-secondary" style="font-size: 16px; margin-left: 8.4rem;"></i></button>
            <!-- Modal -->
            <div class="modal fade" id="editsandi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="border: 1px solid #800080; border-radius: 20px; margin-top: 6rem;">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="{{ asset('img/security.png') }}" width="100" height="100">
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <h3 class="fw-semibold" style="font-size: 16px;">Ubah Kata Sandi</h3>
                                    </div>
                                    <div class="col-12 text-start">
                                        <label for="name" class="fw-medium" style="font-size: 14px;">Kata Sandi Lama <span class="text-danger">*</span></label>
                                        <input type="text" class="input-password" id="katasandilama" placeholder="Ketik Kata Sandi Lamamu..." oninput="checkInputsPassword()" style="font-size: 14px;">
                                        <i class="bi bi-eye" id="togglePasswordLama" onclick="togglePassword('katasandilama')" style="position: absolute; font-size: 20px; right: 40px; top: 180px; cursor: pointer;"></i>
                                    </div>
                                    <div class="col-12 text-start mt-2">
                                        <label for="name" class="fw-medium" style="font-size: 14px;">Kata Sandi Baru <span class="text-danger">*</span></label>
                                        <input type="password" class="input-password" id="katasandibaru" placeholder="Ketik Kata Sandi Barumu..." oninput="checkInputsPassword()" style="font-size: 14px;">
                                        <i class="bi bi-eye-slash" id="togglePasswordBaru" onclick="togglePassword('katasandibaru')" style="position: absolute; font-size: 20px; right: 40px; top: 252px; cursor: pointer;"></i>
                                    </div>
                                    <div class="col-12 text-start mt-2">
                                        <label for="name" class="fw-medium" style="font-size: 14px;">Konfirmasi Kata Sandi Baru <span class="text-danger">*</span></label>
                                        <input type="password" class="input-password" id="konfirmasikatasandibaru" placeholder="Ketik Ulang Kata Sandi Barumu..." oninput="checkInputsPassword()" style="font-size: 14px;">
                                        <i class="bi bi-eye-slash" id="toggleKonfirmasiBaru" onclick="togglePassword('konfirmasikatasandibaru')" style="position: absolute; font-size: 20px; right: 40px; top: 324px; cursor: pointer;"></i>
                                    </div>
                                    <div class="col-12 text-start">
                                        <p class="fw-normal" style="font-size: 14px;">Lupa kata Sandi?<a href="#" style="font-style: italic; color: #9370DB; text-decoration: none; margin-left: 4px;">Klik Disini</a></p>
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <button id="simpanPasswordButton" class="btn btn-secondary" style="color: white; border: none;" disabled>Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn-logout" data-bs-toggle="modal" data-bs-target="#logout"><i class="bi bi-arrow-right-square-fill" style="font-size: 16px; margin-left: 10px; margin-right: 10px; color: red;"></i>Logout<i class="bi bi-arrow-right text-secondary" style="font-size: 16px; margin-left: 12rem;"></i></button>
            <!-- Modal -->
            <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content" style="border: 1px solid #800080; border-radius: 20px; margin-top: 14rem;">
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        <img src="{{ asset('img/cancel.png') }}" width="100" height="100">
                                    </div>
                                    <div class="col-12 text-center mt-2">
                                        <h3 class="fw-semibold" style="font-size: 16px;">Apa Anda Yakin Ingin Keluar?</h3>
                                    </div>
                                    <div class="col-12 d-flex gap-1" style="margin-left: 38px;">
                                        <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger" style="width: 100px;">Ya</button>
                                        </form>
                                        <button class="btn btn-secondary" style="width: 100px;" data-bs-dismiss="modal">Tidak</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
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
            var profileImage = document.getElementById('profileImage');
            var saveButton = document.getElementById('saveButton');

            if (event.target.files.length > 0) {
                frame.src = URL.createObjectURL(event.target.files[0]);
                uploadIcon.style.display = 'none'; // Sembunyikan ikon upload
            }

            checkInputs();
        }

        function deleteImage() {
            var frame = document.getElementById('frame');
            var uploadIcon = document.getElementById('uploadIcon');
            var uploadInput = document.getElementById('uploadfoto');

            // Kembalikan ke gambar semula dan tampilkan ikon upload
            frame.src = "{{ asset('img/avatar.png') }}";
            uploadIcon.style.display = 'block';
            uploadInput.value = ''; // Bersihkan nilai input file
            checkInputs();
        }

        document.addEventListener('DOMContentLoaded', function() {
            var passwordLamaInput = document.getElementById('katasandilama');
            var toggleLamaIcon = document.getElementById('togglePasswordLama');

            var passwordBaruInput = document.getElementById('katasandibaru');
            var toggleBaruIcon = document.getElementById('togglePasswordBaru');

            var konfirmasiBaruInput = document.getElementById('konfirmasikatasandibaru');
            var toggleKonfirmasiIcon = document.getElementById('toggleKonfirmasiBaru');

            // Fungsi untuk toggle password dan mengganti ikon
            function togglePassword(input, toggleIcon) {
                if (input.type === 'password') {
                    input.type = 'text';
                    toggleIcon.classList.remove('bi-eye-slash');
                    toggleIcon.classList.add('bi-eye');
                } else {
                    input.type = 'password';
                    toggleIcon.classList.remove('bi-eye');
                    toggleIcon.classList.add('bi-eye-slash');
                }
            }

            // Menambahkan event listener untuk setiap input
            toggleLamaIcon.addEventListener('click', function() {
                togglePassword(passwordLamaInput, toggleLamaIcon);
            });

            toggleBaruIcon.addEventListener('click', function() {
                togglePassword(passwordBaruInput, toggleBaruIcon);
            });

            toggleKonfirmasiIcon.addEventListener('click', function() {
                togglePassword(konfirmasiBaruInput, toggleKonfirmasiIcon);
            });
        });
        // edit profil
        function checkInputs() {
            var nameInput = document.getElementById('name-user').value;
            var fileInput = document.getElementById('uploadfoto').value;

            // Jika setidaknya satu input diisi, aktifkan tombol Simpan
            if (nameInput.trim() !== '' || fileInput.trim() !== '') {
                document.getElementById('saveButton').removeAttribute('disabled');
            } else {
                // Jika keduanya kosong, nonaktifkan tombol Simpan
                document.getElementById('saveButton').setAttribute('disabled', 'disabled');
            }
        }
        //edit akun
        function checkInputsAkun() {
            var emailInput = document.getElementById('email').value;
            var noHpInput = document.getElementById('no_hp').value;

            // Jika setidaknya satu input diisi, aktifkan tombol Simpan
            if (emailInput.trim() !== '' || noHpInput.trim() !== '') {
                document.getElementById('simpanAkunButton').removeAttribute('disabled');
            } else {
                // Jika keduanya kosong, nonaktifkan tombol Simpan
                document.getElementById('simpanAkunButton').setAttribute('disabled', 'disabled');
            }
        }

        function previewAkun() {
            // Tambahkan fungsi ini jika Anda ingin mengatur aksi tambahan saat form diubah
            // ...
            checkInputsAkun();
        }

        //edit sandi
        function checkInputsPassword() {
            var katasandilamaInput = document.getElementById('katasandilama').value;
            var katasandibaruInput = document.getElementById('katasandibaru').value;
            var konfirmasikatasandibaruInput = document.getElementById('konfirmasikatasandibaru').value;

            // Jika semua input diisi, aktifkan tombol Simpan
            if (katasandilamaInput.trim() !== '' && katasandibaruInput.trim() !== '' && konfirmasikatasandibaruInput.trim() !== '') {
                document.getElementById('simpanPasswordButton').removeAttribute('disabled');
            } else {
                // Jika salah satu input kosong, nonaktifkan tombol Simpan
                document.getElementById('simpanPasswordButton').setAttribute('disabled', 'disabled');
            }
        }
    </script>
</body>

</html>

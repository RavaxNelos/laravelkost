<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .card {
            margin-top: -30px;
            background: rgba(255, 255, 255, 0.5);
            /* Latar belakang card dengan efek transparan */
            border-radius: 30px;
            /* Sudut card yang membulat */
            backdrop-filter: blur(75px);
            /* Efek blur pada latar belakang card */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Bayangan lembut */
        }
    </style>
</head>

<body>

    <div class="container px-3">
        <div class="row justify-content-center mt-6">
            <div class="col-11 col-lg-4">
                <div class="card">
                    <h1 class="card-title text-center">Daftar</h1>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success px-3 py-2" role="alert" style="font-size: 11px;">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('registerPost') }}" method="POST" id="registerForm">
                            @csrf
                            <div class="mb-2">
                                <label for="name" class="form-label" style="font-weight: 500; margin-left: 10px;">Nama</label>
                                <input type="text" name="name" class="form-control required" id="name" placeholder="Masukkan nama anda" onkeyup="enableSubmit()" required style="border-radius: 50px; background-color: #ffffff; margin-top: -5px; font-style: italic;">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label" style="font-weight: 500; margin-left: 10px;">Email</label>
                                <input type="email" name="email" class="form-control required" id="email" placeholder="Masukkan email anda" onkeyup="enableSubmit()" required style="border-radius: 50px; background-color: #ffffff; margin-top: -5px; font-style: italic;">
                            </div>
                            <div class="mb-2">
                                <label for="nomorhp" class="form-label" style="font-weight: 500; margin-left: 10px;">No. Handphone</label>
                                <input type="tel" name="nomorhp" class="form-control required" id="nomorhp" pattern="[0-9]{9,12}" placeholder="Masukkan nomer handphone anda" onkeyup="enableSubmit()" required style="border-radius: 50px; background-color: #ffffff; margin-top: -5px; font-style: italic;">
                            </div>
                            <div class="mb-2" style="position: relative">
                                <label for="password" class="form-label" style="font-weight: 500; margin-left: 10px;">Password</label>
                                <input type="password" name="password" class="form-control required" id="password" placeholder="Buat password" onkeyup="enableSubmit()" required style="border-radius: 50px; background-color: #ffffff; margin-top: -5px; font-style: italic;">
                                <i class="bi bi-eye-slash" id="togglePassword" style="position: absolute; font-size: 20px; right: 10px; top: 28px; cursor: pointer;"></i>
                            </div>
                            <div class="mb-2" style="position: relative">
                                <label for="konfirmasipassword" class="form-label" style="font-weight: 500; margin-left: 10px;">Konfirmasi Password</label>
                                <input type="password" name="konfirmasipassword" class="form-control required" id="konfirmasipassword" placeholder="Konfirmasi password" onkeyup="enableSubmit()" required style="border-radius: 50px; background-color: #ffffff; margin-top: -5px; font-style: italic;">
                                <i class="bi bi-eye-slash" id="toggleKonfirmasipassword" style="position: absolute; font-size: 20px; right: 10px; top: 28px; cursor: pointer;"></i>
                                <small id="konfirmasipasswordError" class="form-text text-danger" style="margin-left: 10px; font-style: italic; font-size: 12px;"></small>
                            </div>
                            <div class="mb-3">
                                <div class="text-center">
                                    <button class="btn btn-dark btn-register" style="border-radius: 50px; width: 170px; margin-top: -1px;">Daftar</button>
                                </div>
                            </div>
                        </form>
                        <p class="text-center text-indah">Sudah punya akun? <a href="{{ route('login') }}">klik di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- javascript -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var passwordInput = document.getElementById('password');
            var konfirmasiPasswordInput = document.getElementById('konfirmasipassword');
            var konfirmasiPasswordError = document.getElementById('konfirmasipasswordError');

            document.querySelector('form').addEventListener('submit', function(event) {
                if (passwordInput.value !== konfirmasiPasswordInput.value) {
                    konfirmasiPasswordError.textContent = 'Konfirmasi password tidak sama. ';
                    event.preventDefault(); // Mencegah formulir diajukan jika ada kesalahan
                } else {
                    konfirmasiPasswordError.textContent = ''; // Menghapus pesan kesalahan jika password cocok
                }
            });

            konfirmasiPasswordInput.addEventListener('input', function() {
                konfirmasiPasswordError.textContent = ''; // Menghapus pesan kesalahan saat pengguna mulai mengetik
            });
        });
        const passwordInput = document.getElementById("password");
        const togglePasswordButton = document.getElementById("togglePassword");

        togglePasswordButton.addEventListener("click", function() {
            const type = passwordInput.type === "password" ? "text" : "password";
            passwordInput.type = type;
            if (type == 'text') {
                togglePasswordButton.classList.remove("bi-eye-slash");
                togglePasswordButton.classList.add("bi-eye");
            } else {
                togglePasswordButton.classList.add("bi-eye-slash");
                togglePasswordButton.classList.remove("bi-eye");
            }
        });

        const konfirmasipasswordInput = document.getElementById('konfirmasipassword');
        const toggleKonfrimasipasswordButton = document.getElementById("toggleKonfirmasipassword");

        toggleKonfrimasipasswordButton.addEventListener("click", function() {
            const type = konfirmasipasswordInput.type === "password" ? "text" : "password";
            konfirmasipasswordInput.type = type;
            if (type == 'text') {
                toggleKonfrimasipasswordButton.classList.remove("bi-eye-slash");
                toggleKonfrimasipasswordButton.classList.add("bi-eye");
            } else {
                toggleKonfrimasipasswordButton.classList.add("bi-eye-slash");
                toggleKonfrimasipasswordButton.classList.remove("bi-eye");
            }
        });

        function enableSubmit() {

            var requireds = document.getElementById("registerForm").querySelectorAll("[required]");
            let btn = document.querySelector('input[type="submit"]');
            let isValid = true;

            for (var i = 0; i < requireds.length; i++) {

                let changedInput = requireds[i];

                if (changedInput.type == "checkbox") {
                    if (changedInput.checked === false) {
                        isValid = false;
                        break;
                    }
                } else {
                    if (changedInput.value.trim() === "" || changedInput.value === null) {
                        changedInput.classList.remove("bg-white");
                        isValid = false;
                        break;
                    } else {
                        changedInput.classList.add("bg-white");
                        changedInput.classList.add("text-light-emphasis");
                    }
                }
            }
            btn.disabled = !isValid;
        }
    </script>
</body>

</html>

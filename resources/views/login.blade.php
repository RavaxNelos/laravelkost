<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .card {
            background: rgba(255, 255, 255, 0.5);
            /* Latar belakang card dengan efek transparan */
            border-radius: 30px;
            /* Sudut card yang membulat */
            backdrop-filter: blur(100px);
            /* Efek blur pada latar belakang card */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Bayangan lembut */
        }

        .card-header {
            background: rgba(255, 255, 255, 0.5);
            /* Latar belakang card dengan efek transparan */
            /* Sudut card yang membulat */
            backdrop-filter: blur(100px);
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
                <div class="gambatlogo text-center">
                    <img src="img/logokostrava.png" alt="" style="width: 200px; margin-bottom: 20px;">
                </div>
                <div class="card">
                    <h1 class="card-title text-center">Masuk</h1>
                    <div class="card-body">
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert" style="font-size: 14px;">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        @if (Session::has('success'))
                            <div class="alert alert-success px-3 py-2" role="alert" style="font-size: 11px;">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form id="loginForm" action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-2">
                                <label for="name" class="form-label" style="font-weight: 500; margin-left: 10px;">Masukkan nama</label>
                                <input type="text" name="name" class="form-control" id="email" placeholder="Masukkan nama anda" style="border-radius: 50px; background-color: #ffffff; margin-top: -5px; font-style: italic;">
                            </div>
                            <div class="mb-2" style="position: relative">
                                <label for="password" class="form-label" style="font-weight: 500; margin-left: 10px;">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan password anda" style="border-radius: 50px; background-color: #ffffff; margin-top: -5px; font-style: italic;">
                                <i class="bi bi-eye-slash" id="togglePassword" style="position: absolute; font-size: 20px; right: 10px; top: 31px; cursor: pointer;"></i>
                            </div>
                            <div class="mb-3">
                                <div class="text-center">
                                    <button class="btn btn-dark btn-login" style="border-radius: 50px; width: 170px;">Masuk</button>
                                </div>
                            </div>
                        </form>
                        <p class="text-center text-indah">Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
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
    </script>
</body>

</html>

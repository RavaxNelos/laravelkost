<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        body {
            overflow: hidden;
            background: url('img/background-login.jpg') no-repeat center center fixed;
            /* Ganti 'path/to/your/image.jpg' dengan path atau URL gambar pemandangan Anda */
            background-size: cover;
            /* Menutupi seluruh elemen dengan gambar */
        }

        .mt-6 {
            margin-top: 100px;
        }

        .card {
            background: rgba(255, 255, 255, 0.8);
            /* Latar belakang card dengan efek transparan */
            border-radius: 10px;
            /* Sudut card yang membulat */
            backdrop-filter: blur(1px);
            /* Efek blur pada latar belakang card */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Bayangan lembut */
        }

        .text-indah {
            color: #000000;
            /* Warna teks */
            font-size: 14px;
            /* Ukuran teks */
            font-weight: bold;
            /* Ketebalan teks */
            margin-top: 10px;
            /* Jarak atas */
        }

        .text-indah a {
            text-decoration: none;
            /* Tanpa garis bawah pada tautan */
            transition: color 0.3s;
            /* Animasi perubahan warna tautan */
        }

        .text-indah a:hover {
            color: #0056b3;
            /* Warna tautan saat dihover */
        }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="row justify-content-center mt-6">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title">Login</h1>
                </div>
                <div class="card-body">
                    @if (Session::has('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success px-3 py-2" role="alert" style="font-size: 11px;">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email-address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="passowrd" required>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button class="btn btn-primary">Login</button>
                            </div>
                        </div>
                    </form>
                    <p class="text-center text-indah">Belum punya akun? <a href="{{ route('register') }}">Daftar di sini</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

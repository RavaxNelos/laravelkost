<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Css -->
    <link rel="stylesheet" href="css/register.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .card {
            background: rgba(255, 255, 255, 0.8);
            /* Latar belakang card dengan efek transparan */
            border-radius: 10px;
            /* Sudut card yang membulat */
            backdrop-filter: blur(35px);
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
                    <div class="card-header">
                        <h1 class="card-title text-center">Register</h1>
                    </div>
                    <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success px-3 py-2" role="alert" style="font-size: 11px;">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <form action="{{ route('registerPost') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label" style="font-weight: 500; margin-left: 10px;">Nama</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ravanelo" required style="border-radius: 50px; background-color: #ffffff;">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label" style="font-weight: 500; margin-left: 10px;">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="rafa@example.com" required style="border-radius: 50px; background-color: #ffffff;">
                            </div>
                            <div class="mb-3">
                                <label for="nomorhp" class="form-label" style="font-weight: 500; margin-left: 10px;">Nomer Hp</label>
                                <input type="tel" name="nomorhp" class="form-control" id="nomorhp" pattern="[0-9]{9,12}" placeholder="082347689271" required style="border-radius: 50px; background-color: #ffffff;">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label" style="font-weight: 500; margin-left: 10px;">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required style="border-radius: 50px; background-color: #ffffff;">
                            </div>
                            <div class="mb-3">
                                <div class="text-center">
                                    <button class="btn btn-dark" style="border-radius: 50px; width: 200px;">Register</button>
                                </div>
                            </div>
                        </form>
                        <p class="text-center text-indah">Sudah punya akun? <a href="{{ route('login') }}">klik di sini</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

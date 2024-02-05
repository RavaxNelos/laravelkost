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
</head>


<body>
    <div style="max-width: 300%; min-height: 200px; min-width: 250px; position: relative;">
        <img src="{{ asset('img/kostsurabaya1.jpg') }}"style="border-radius: 0px;" class="w-100">
        <p style="position: absolute; top: 15px; left: 44%;" class="fw-bold">Detail</p>
        <button class="btn-back-home"><i class="bi bi-arrow-left"></i></button>
        <button class="btn-like-detail"><i class="bi bi-star"></i></button>
    </div>
    <div class="container py-4">
        <div class="row">
            <div class="col-9">
                <h6 class="fw-bold text-dark fs-2">Kamar kos Putra</h6>
                <p class="text-secondary fw-semibold" style="margin-top: -5px; font-size: 12px;"><i class="bi bi-geo-alt-fill"></i> Kalijudan 9, Surabaya</p>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <h1 style="font-weight: bold; font-size: 18px; font-family: 'Inter', sans-serif;">Fasilitas</h1>
            </div>
            <div class="col-4 text-end">
                <p class="fw-medium text-primary">Semua</p>
            </div>
            <div class="col-12">
                <section class="splide" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="card-fasilitas" style="position: relative; width: 168px; height: 70px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                                    <i class='bx bx-bed' style="position: absolute; top: 12px; font-size: 22px;"></i>
                                    <p class="text-dark fw-medium fs-6" style="position: absolute; top: 36px;">1 Kasur Tidur</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card-fasilitas" style="position: relative; width: 168px; height: 70px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                                    <i class='bx bx-bath' style="position: absolute; top: 12px; font-size: 22px;"></i>
                                    <p class="text-dark fw-medium fs-6" style="position: absolute; top: 36px;">1 Kamar Mandi</p>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="card-fasilitas" style="position: relative; width: 168px; height: 70px; padding: 9px; border-radius: 15px; border: 1px solid #ccc;">
                                    <i class="bi bi-router" style="position: absolute; top: 12px; font-size: 22px;"></i>
                                    <p class="text-dark fw-medium fs-6" style="position: absolute; top: 36px;">1 Internet Wifi</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
        <script>
            var splide = new Splide('.splide', {
                pagination: false,
                arrows: false,
                type: 'loop',
                perPage: 1,
                perMove: 1,
                gap: '0.5rem',
            });

            splide.mount();
        </script>
</body>

</html>

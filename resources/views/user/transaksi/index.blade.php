<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transaksi</title>
    <!-- css rava -->
    <link rel="stylesheet" href="{{ asset('css/usercss/transaksi.css') }}">
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
    <style>
        :root {
            scrollbar-color: transparent transparent;
        }

        html,
        body {
            user-drag: none;
            user-select: none;
        }

        body {
            overflow: overlay;
        }

        ::-webkit-scrollbar {
            width: 10px;
            background: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: transparent;
            border-radius: 2px;
        }

        /* .accordion-button:focus {
            border-color: none;
            box-shadow: none;
        }

        .accordion-button:not(.collapsed) {
            color: rgb(0, 0, 0);
            background-color: white;
            box-shadow: none;
        } */

        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1000;
            background-color: transparent;
            transition: background-color 0.3s ease;
        }

        /* Style for sticky header when scrolled */
        .sticky-top.scrolled {
            background-color: white;
            /* Ganti warna latar belakang sesuai kebutuhan Anda */
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            /* Optional: Tambahkan bayangan jika diinginkan */
        }

        .btn-check:checked+.btn,
        .btn.active,
        .btn.show,
        .btn:first-child:active,
        :not(.btn-check)+.btn:active {
            background-color: rgb(0, 0, 0);
        }

        .btn:hover {
            background-color: #000000;
        }

        .payment-accordion {
            color: #212529;
            background: rgba(104, 41, 145, 0.9);
            padding: 1rem;
            padding-left: 0.8rem;
            padding-right: 0.7rem;
        }

        .payment-accordion-button {
            position: relative;
            /* display: flex; */
            align-items: center;
            width: 100%;
            padding: var(--bs-accordion-btn-padding-y) var(--bs-accordion-btn-padding-x);
            font-size: 1rem;
            color: var(--bs-accordion-btn-color);
            text-align: left;
            background-color: rgba(104, 41, 145, 0.8);
            border: 0;
            border-radius: 0;
            overflow-anchor: none;
            transition: var(--bs-accordion-transition);
            backdrop-filter: blur(50px) !important;
        }

        .payment-accordion-item {
            color: var(--bs-accordion-color);
            background-color: var(--bs-accordion-bg);
            border: var(--bs-accordion-border-width) solid var(--bs-accordion-border-color);
        }

        .payment-accordion-body {
            padding: 0px;
        }

        .fa-sm {
            font-size: 11px;
        }

        .clicked {
            background-color: #9370DB;
            color: #1c1d27 !important;
        }

        :focus-visible {
            outline: none;
        }
    </style>
</head>

<body>
    <div class="sticky-top" id="stickyHeader">
        <div class="container py-2">
            <div class="row g-3">
                <div class="col-1">
                    <a href="/user/detail" class="btn-back-home"><ion-icon name="chevron-back-outline" style="margin-bottom: -4px;"></ion-icon></a>
                </div>
                <div class="col-6 mt-4 text-start" style="margin-top: 25px !important;">
                    <h3 class="text-dark fw-semibold teks-detail" style="font-size: 16px; transition: color 0.3s ease;">Transaksi</h3>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-divider">
    <div class="container mt-2">
        <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px;">Rincian Pesanan</h3>
    </div>
    <hr class="hr-rincian-pesanan">
    <div class="container">
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Nama User</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">Muhammad Ravanelo</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px;">Pilihan Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold text-secondary-emphasis" style="font-size: 14px;">Bulanan</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Tgl. Pesanan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-semibold" style="font-size: 14px; color: rgb(106, 5, 114);">21 Februari 2024, 17.00 WIB</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-4 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Est. Masuk Kost</h3>
            </div>
            <div class="col-8 text-end">
                <h3 class="fw-semibold" style="font-size: 14px; color: rgb(106, 5, 114);">23 Februari 2024, 17.00 WIB</h3>
            </div>
        </div>
    </div>
    <hr class="hr-tengah">
    <div class="container">
        <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px; margin-top: -4px;">Pesanan Kamar Kost Anda</h3>
        <div class="card-custom" style="position: relative; width: 336px; height: 140px; background-color: whitesmoke; border-radius: 15px; border: 1px solid #ccc;">
            <img src="{{ asset('img/kostsurabaya6.jpg') }}" width="110" height="130" style="position: absolute; top: 4px; left: 5px; border-radius: 14px;">
            <h3 class="fw-medium" style="position: absolute; top: 14px; left: 130px; font-size: 16px; color: #222327">Kamar Kost Putra</h3>
            <p class="text-secondary" style="position: absolute; top: 36px; left: 130px; font-size: 12px; line-height: 1.2; width: 200px;">Fasilitas: UK. 5 x 7 M | AC 1 PK | Kamar Mandi UK. 3 x 5 M | Lemari 1 | Kulkas 1 | Kasur 1</p>
            <p class="text-danger" style="position: absolute; top: 80px; left: 130px; font-size: 10px; font-style: italic;">(Tidak Termasuk Listrik) <i class="bi bi-info-circle" data-bs-toggle="modal" data-bs-target="#exampleModal" style="color: #000000; margin-left: 4px; font-size: 12px;"></i></p>
            <h3 class="fw-semibold" style="font-family: Poppins; position: absolute; top: 104px; left: 130px; font-size: 18px; color: rgb(106, 5, 114);">Rp 2.000.000</h3>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="width: 336px; position: absolute; top: 320px; height: 84px;">
                <div class="modal-body">
                    <p class="fw-normal" style="font-size: 12px; margin-top: -4px; justify-content: center;">Biaya sewa kamar tidak termasuk listrik, dan pembayaran listrik akan dilakukan melalui sistem token dengan tarif yang berlaku.</p>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr-pembayaran">
    <div class="container">
        <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px;">Rincian Pembayaran</h3>
        <div class="row">
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px;">Biaya Kamar Kost</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-normal text-secondary-emphasis" style="font-size: 14px;">Rp.2.000.000</h3>
            </div>
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px">Biaya Kost Bulanan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-normal text-danger" style="font-size: 14px;">+Rp.100.000</h3>
            </div>
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 150px">Biaya Penanganan</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-normal text-danger" style="font-size: 14px;">+Rp.200.000</h3>
            </div>
            <div class="col-5 text-start">
                <h3 class="fw-normal text-secondary" style="font-size: 14px; width: 160px">Promo Voucher Kamar</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-normal text-success" style="font-size: 14px;">-Rp.25.000</h3>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-5 text-start">
                <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px; width: 190px; font-weight: 440 !important;">Total Pembayaran</h3>
            </div>
            <div class="col-7 text-end">
                <h3 class="fw-medium" style="font-family: Poppins; font-size: 18px; color: #9370DB;">Rp.2.275.000</h3>
            </div>
        </div>
    </div>
    <section class="payment-method" x-data="{ confirmation: true }" style="background-color: rgba(104, 41, 145, 0.8);">
        <div x-data="{ selected: false }">
            <div x-data="{ openPayment: false }" x-init="confirmation = true ? 'setTimeout(() => openPayment = false, 1000)' : null">
                <div class="payment-accordion">
                    <div class="payment-accordion-item">
                        <button class="payment-accordion-button payment-method-text" @click="openPayment = !openPayment" keydown.escape="openPayment = false">
                            <div class="d-flex align-items-center">
                                <div class="flex-fill">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-fill">
                                            <p class="fw-normal ms-2 my-auto text-white text-size">
                                                Metode Pembayaran</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <i :class="openPayment ? 'fa-solid fa-chevron-up text-white fa-sm' :
                                        'fa-solid fa-chevron-down text-white fa-sm'">
                                    </i>
                                </div>
                            </div>
                        </button>
                    </div>
                </div>
                {{-- bank --}}
                <div x-show="openPayment" x-transition.scale.origin.bottom>
                    <div class="payment-accordion" x-data="{ openPaymentBank: false }" @click.away="openPaymentBank= false" style="margin-top: -20px !important;">
                        <div class="payment-accordion-item">
                            <button class="payment-accordion-button payment-method-text text-white" style="padding: 1rem; border: 1px solid #30323e; border-top-left-radius: 15px !important; border-top-right-radius: 15px !important; !important; border-bottom-left-radius: 0px !important; border-bottom-right-radius: 0px !important;" @click="openPaymentBank = !openPaymentBank" keydown.escape="openPaymentBank = false">
                                <div class="d-flex align-items-center">
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center">
                                            <p class="fw-normal ms-2 my-auto text-white text-size">
                                                Transfer Bank</p>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <i :class="openPaymentBank ? 'fa-solid fa-chevron-up text-white fa-sm' :
                                            'fa-solid fa-chevron-down text-white fa-sm'">
                                        </i>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div x-show="openPaymentBank" x-transition.scale.origin.bottom>
                            <div class="payment-accordion-item">
                                <div style="padding: 1rem; border: 1px solid #30323e" x-on:click="selected !== 'bri' ? selected = 'bri' : selected = false" @click="confirmation = true" :class="selected == 'bri' ?
                                    'payment-accordion-button payment-method-text text-white clicked' :
                                    'payment-accordion-button payment-method-text text-white'">
                                    <div class="d-flex align-items-center">
                                        <div class="mx-auto">
                                            <img src="{{ asset('img/bri.png') }}" height="30" alt="">
                                        </div>
                                        <div class="flex-fill">
                                            <p class="my-auto ms-2">Transfer Bank BRI</p>
                                        </div>
                                    </div>
                                </div>
                                <button style="padding: 1rem; border: 1px solid #30323e; border-radius: 0px !important;" x-on:click="selected !== 'bca' ? selected = 'bca' : selected = false" @click="confirmation = true" :class="selected == 'bca' ?
                                    'payment-accordion-button payment-method-text text-white clicked' :
                                    'payment-accordion-button payment-method-text text-white'">
                                    <div class="d-flex align-items-center">
                                        <div class="mx-auto">
                                            <img src="{{ asset('img/bca.png') }}" height="30" alt="">
                                        </div>
                                        <div class="flex-fill">
                                            <p class="my-auto ms-2">Transfer Bank BCA</p>
                                        </div>
                                    </div>
                                </button>
                                <button :class="selected == 'visa' ?
                                    'payment-accordion-button payment-method-text text-white clicked' :
                                    'payment-accordion-button payment-method-text text-white'" style="padding: 1rem; border: 1px solid #30323e; border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px !important;" x-on:click="selected !== 'visa' ? selected = 'visa' : selected = false" @click="confirmation = true">
                                    <div class="d-flex align-items-center">
                                        <div class="mx-auto">
                                            <img src="{{ asset('img/visa.png') }}" height="10" alt="">
                                        </div>
                                        <div class="flex-fill">
                                            <p class="my-auto ms-2">Transfer Visa</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- waller --}}
                <div x-show="openPayment" x-transition.scale.origin.bottom>
                    <div class="payment-accordion" x-data="{ openPaymentBank: false }" @click.away="openPaymentBank= false" style="margin-top: -20px !important;">
                        <div class="payment-accordion-item">
                            <button class="payment-accordion-button payment-method-text text-white" style="padding: 1rem; border: 1px solid #30323e; border-top-left-radius: 15px !important; border-top-right-radius: 15px !important; border-bottom-left-radius: 0px !important; border-bottom-right-radius: 0px !important;" @click="openPaymentBank = !openPaymentBank" keydown.escape="openPaymentBank = false">
                                <div class="d-flex align-items-center">
                                    <div class="flex-fill">
                                        <div class="d-flex align-items-center">
                                            <p class="fw-normal ms-2 my-auto text-white text-size">
                                                E-Wallet</p>
                                        </div>
                                    </div>
                                    <div class="ms-auto">
                                        <i :class="openPaymentBank ? 'fa-solid fa-chevron-up text-white fa-sm' :
                                            'fa-solid fa-chevron-down text-white fa-sm'">
                                        </i>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div x-show="openPaymentBank" x-transition.scale.origin.bottom>
                            <div class="payment-accordion-item">
                                <button :class="selected == 'gopay' ?
                                    'payment-accordion-button payment-method-text text-white clicked' :
                                    'payment-accordion-button payment-method-text text-white'" style="padding: 1rem; border: 1px solid #30323e; border-radius: 0px !important;" x-on:click="selected !== 'gopay' ? selected = 'gopay' : selected = false" @click="confirmation = true">
                                    <div class="d-flex align-items-center">
                                        <div class="mx-auto">
                                            <img src="{{ asset('img/gopay.png') }}" height="30" alt="">
                                        </div>
                                        <div class="flex-fill">
                                            <p class="my-auto ms-2">Gopay</p>
                                        </div>
                                    </div>
                                </button>
                                <button :class="selected == 'ovo' ?
                                    'payment-accordion-button payment-method-text text-white clicked' :
                                    'payment-accordion-button payment-method-text text-white'" style="padding: 1rem; border: 1px solid #30323e; border-radius: 0px !important;" x-on:click="selected !== 'ovo' ? selected = 'ovo' : selected = false" @click="confirmation = true">
                                    <div class="d-flex align-items-center">
                                        <div class="mx-auto">
                                            <img src="{{ asset('img/ovo.png') }}" height="30" alt="">
                                        </div>
                                        <div class="flex-fill">
                                            <p class="my-auto ms-2">Ovo</p>
                                        </div>
                                    </div>
                                </button>
                                <button :class="selected == 'dana' ?
                                    'payment-accordion-button payment-method-text text-white clicked' :
                                    'payment-accordion-button payment-method-text text-white'" style="padding: 1rem; border: 1px solid #30323e; border-radius: 0px !important;" x-on:click="selected !== 'dana' ? selected = 'dana' : selected = false" @click="confirmation = true">
                                    <div class="d-flex align-items-center">
                                        <div class="mx-auto">
                                            <img src="{{ asset('img/dana.png') }}" height="30" alt="">
                                        </div>
                                        <div class="flex-fill">
                                            <p class="my-auto ms-2">Dana</p>
                                        </div>
                                    </div>
                                </button>
                                <button :class="selected == 'shoopepay' ?
                                    'payment-accordion-button payment-method-text text-white clicked' :
                                    'payment-accordion-button payment-method-text text-white'" style="padding: 1rem; border: 1px solid #30323e;border-top-left-radius: 0px !important; border-top-right-radius: 0px !important; border-bottom-left-radius: 15px !important; border-bottom-right-radius: 15px; !important" x-on:click="selected !== 'shoopepay' ? selected = 'shoopepay' : selected = false" @click="confirmation = true">
                                    <div class="d-flex align-items-center">
                                        <div class="mx-auto">
                                            <img src="{{ asset('img/shopee.png') }}" height="30" alt="">
                                        </div>
                                        <div class="flex-fill">
                                            <p class="my-auto ms-2">Shopee Pay</p>
                                        </div>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div x-show="selected">
                    <div style="background-color: rgba(104, 41, 145, 0.8);">
                        <template x-if="confirmation == true" class="">
                            <button x-on:click="confirmation = false;openPayment = false" class="ms-3 mb-2 btn btn-confirm " style="--bs-btn-padding-y: .4rem; --bs-btn-padding-x: 8rem; --bs-btn-font-size: 14px;">Konfirmasi
                            </button>
                        </template>
                        <template x-if="confirmation == false">
                            <div x-show="selected === 'bca' || selected === 'visa' || selected === 'bri' || selected === 'gopay'|| selected === 'ovo'|| selected === 'dana'|| selected === 'shoopepay'">
                                <template x-if="selected == 'bca'">
                                    <div class="payment-accordion-item">
                                        <div class="payment-accordion-button payment-method-text text-white" style="border-top: 1px solid #4e4f5b">
                                            <div class="d-flex align-items-center">
                                                <div class="mx-auto">
                                                    <img src="{{ asset('img/bca.png') }}" class="mb-3 ms-3 mt-3" height="30" alt="">
                                                </div>
                                                <div class="flex-fill">
                                                    <p class="my-auto ms-2 mb-3 mt-3">Transfer Bank BCA</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="selected == 'bri'">
                                    <div class="payment-accordion-button payment-method-text text-white" style="border-top: 1px solid #4e4f5b">
                                        <div class="d-flex align-items-center">
                                            <div class="mx-auto">
                                                <img src="{{ asset('img/bri.png') }}" class="mb-3 ms-3 mt-3" height="30" alt="">
                                            </div>
                                            <div class="flex-fill">
                                                <p class="my-auto ms-2 mb-3 mt-3">Transfer Bank BRI</p>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="selected == 'visa'">
                                    <div class="payment-accordion-button payment-method-text text-white" style="border-top: 1px solid #4e4f5b">
                                        <div class="d-flex align-items-center">
                                            <div class="mx-auto">
                                                <img src="{{ asset('img/visa.png') }}" class="mb-3 ms-3 mt-3" height="10" alt="">
                                            </div>
                                            <div class="flex-fill">
                                                <p class="my-auto ms-2 mb-3 mt-3">Transfer VISA</p>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="selected == 'gopay'">
                                    <div class="payment-accordion-button payment-method-text text-white" style="border-top: 1px solid #4e4f5b">
                                        <div class="d-flex align-items-center">
                                            <div class="mx-auto">
                                                <img class="ms-3 mb-3 mt-3" src="{{ asset('img/gopay.png') }}" height="30" alt="">
                                            </div>
                                            <div class="flex-fill">
                                                <p class="my-auto ms-2 mb-3 mt-3">Gopay</p>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="selected == 'ovo'">
                                    <div class="payment-accordion-button payment-method-text text-white" style="border-top: 1px solid #4e4f5b">
                                        <div class="d-flex align-items-center">
                                            <div class="mx-auto">
                                                <img class="ms-3 mb-3 mt-3" src="{{ asset('img/ovo.png') }}" height="30" alt="">
                                            </div>
                                            <div class="flex-fill">
                                                <p class="my-auto ms-2 mb-3 mt-3">OVO</p>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="selected == 'dana'">
                                    <div class="payment-accordion-button payment-method-text text-white" style="border-top: 1px solid #4e4f5b">
                                        <div class="d-flex align-items-center">
                                            <div class="mx-auto">
                                                <img class="ms-3 mb-3 mt-3" src="{{ asset('img/dana.png') }}" height="30" alt="">
                                            </div>
                                            <div class="flex-fill">
                                                <p class="my-auto ms-2 mb-3 mt-3">Dana</p>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                                <template x-if="selected == 'shoopepay'">
                                    <div class="payment-accordion-button payment-method-text text-white" style="border-top: 1px solid #4e4f5b">
                                        <div class="d-flex align-items-center">
                                            <div class="mx-auto">
                                                <img class="ms-3 mb-3 mt-3" src="{{ asset('img/shopee.png') }}" height="30" alt="">
                                            </div>
                                            <div class="flex-fill">
                                                <p class="my-auto ms-2 mb-3 mt-3 ">Shoope Pay</p>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr class="hr-terakhir">
    <div class="sticky-bottom">
        <div class="container py-2">
            <div class="row">
                <div class="col-12 text-start">
                    <h3 class="mb-1 mt-1" style="font-size: 12px;">Total Pembayaran</h3>
                </div>
                <div class="col-6 text-start">
                    <h3 class="fw-semibold" style="font-size: 23,5; color: #9370DB">Rp.2.100.000</h3>
                </div>
                <div class="col-6 text-end btn-bawah">
                    <a type="submit" href="{{ asset('/user/konfirmasitransaksi') }}" class="btn text-end text-white">Bayar</a>
                </div>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script>
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
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    </script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('dashboard') }}/assets/img/finger4.jpg">
    <link rel="icon" type="image/png" href="{{ asset('dashboard') }}/assets/img/finger4.jpg">
    <title>
        Selamat Datang di Aplikasi SIAP KERJA MODERN SHOES
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="{{ asset('dashboard') }}/assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="{{ asset('dashboard') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="{{ asset('dashboard') }}/assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('dashboard') }}/assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
        <!-- Navbar -->
        <nav
            class="navbar navbar-main navbar-expand-lg bg-transparent shadow-none position-absolute px-4 w-100 z-index-2">
            <div class="container-fluid py-1">
                <nav aria-label="breadcrumb">
                    <h6 class="text-white font-weight-bolder ms-2">Selamat Datang</h6>
                    <h6 class="text-white font-weight-bolder ms-2">Sistem Informasi Arsip Presensi dan Perizinan Kerja
                    </h6>
                </nav>
                <div class="collapse navbar-collapse me-md-0 me-sm-4 mt-sm-0 mt-2" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <span class="input-group-text text-body"><i class="fas fa-search"
                                    aria-hidden="true"></i></span>
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="{{ route('login') }}" class="nav-link text-white font-weight-bold px-0">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Login</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('{{ asset('dashboard') }}/assets/img/curved-images/curved0.jpg'); background-position-y: 50%;">
                <span class="mask bg-gradient-primary opacity-6"></span>
            </div>
            <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
                <div class="row gx-4">
                    <div class="col-auto">
                        <div class="avatar avatar-xl position-relative">
                            <img src="{{ asset('dashboard') }}/assets/img/finger4.jpg" alt="profile_image"
                                class="w-100 border-radius-lg shadow-sm">
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <h5 class="mb-1">
                                Sistem Informasi Arsip Presensi Kerja
                            </h5>
                            <p class="mb-0 font-weight-bold text-sm">
                                Created by Modern Technology Teams
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
                        <div class="nav-wrapper position-relative end-0">
                            <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="true">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(603.000000, 0.000000)">
                                                            <path class="color-background"
                                                                d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                                                            </path>
                                                            <path class="color-background"
                                                                d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z"
                                                                opacity="0.7"></path>
                                                            <path class="color-background"
                                                                d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z"
                                                                opacity="0.7"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Realtime</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>document</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(154.000000, 300.000000)">
                                                            <path class="color-background"
                                                                d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"
                                                                opacity="0.603585379"></path>
                                                            <path class="color-background"
                                                                d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">Simple</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="javascript:;"
                                        role="tab" aria-selected="false">
                                        <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40"
                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>settings</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF"
                                                    fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(304.000000, 151.000000)">
                                                            <polygon class="color-background" opacity="0.596981957"
                                                                points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
                                                            </polygon>
                                                            <path class="color-background"
                                                                d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z"
                                                                opacity="0.596981957"></path>
                                                            <path class="color-background"
                                                                d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                        <span class="ms-1">User Friendly</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 col-xl-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Fitur Aplikasi</h6>
                        </div>
                        <div class="card-body p-3">
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder">Presensi</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <i class="fas fa-check" style="color:green"></i>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault">Waktu Absensi Realtime</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <i class="fas fa-check" style="color:green"></i>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0">Lokasi
                                            Absen terhubung dengan Maps</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <i class="fas fa-check" style="color:green"></i>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault2">Dokumentasi saat melakukan absen</label>
                                    </div>
                                </li>
                            </ul>
                            <h6 class="text-uppercase text-body text-xs font-weight-bolder mt-4">Perizinan</h6>
                            <ul class="list-group">
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <i class="fas fa-check" style="color:green"></i>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault3">Form izin terhubung walau beda area
                                            kerja</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0">
                                    <div class="form-check form-switch ps-0">
                                        <i class="fas fa-check" style="color:green"></i>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault4">Dengan Penyetuju surat terhirarki</label>
                                    </div>
                                </li>
                                <li class="list-group-item border-0 px-0 pb-0">
                                    <div class="form-check form-switch ps-0">
                                        <i class="fas fa-check" style="color:green"></i>
                                        <label class="form-check-label text-body ms-3 text-truncate w-80 mb-0"
                                            for="flexSwitchCheckDefault5">Data Arsip tersimpan tanpa takut dokumen
                                            hilang</label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 mt-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <div class="row">
                                <div class="col-md-8 d-flex align-items-center">
                                    <h6 class="mb-0">Informasi Aplikasi</h6>
                                </div>
                                <div class="col-md-4 text-end">
                                    <a href="javascript:;">
                                        <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Edit Profile"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-3">
                            <p class="text-sm">
                                Aplikasi SIAP Kerja di desain untuk memenuhi kebutuhan perusahaan untuk mempermudah
                                pengelolaan arsip presensi dan perizinan pegawai, tanpa takut arsip dokumen hilang, area
                                kerja terpisah dan melakukan pencatatan double double.
                            </p>
                            <hr class="horizontal gray-light my-4">
                            <ul class="list-group">
                                <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong
                                        class="text-dark">Nama Aplikasi:</strong> &nbsp; SIAP KERJA</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Nama
                                        Lengkap:</strong> &nbsp; Sistem Informasi Arsip Presensi Kerja</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Bahasa Program:</strong> &nbsp; PHP, NodeJS, HTML5, CSS3
                                </li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Programmer:</strong> &nbsp; Handika Kristofan</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Desainer Logo:</strong> &nbsp; Jonif Alri Marvel</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Hak
                                        Cipta:</strong> &nbsp; Modern Technology Team</li>
                                <li class="list-group-item border-0 ps-0 text-sm"><strong
                                        class="text-dark">Didukung oleh:</strong> &nbsp; Modern Shoes Group</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-4 mt-4">
                    <div class="card h-100">
                        <div class="card-header pb-0 p-3">
                            <h6 class="mb-0">Apa Kata Mereka</h6>
                        </div>
                        <div class="card-body p-3">
                            <ul class="list-group">
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img src="{{ asset('dashboard') }}/assets/img/kal-visuals-square.jpg"
                                            alt="kal" class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Sophie B.</h6>
                                        <p class="mb-0 text-xs">Great! ini sangat ajaib</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img src="{{ asset('dashboard') }}/assets/img/marie.jpg" alt="kal"
                                            class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Anne Marie</h6>
                                        <p class="mb-0 text-xs">OMG, Ini tau lokasi saya absen</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img src="{{ asset('dashboard') }}/assets/img/ivana-square.jpg" alt="kal"
                                            class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Ivanna</h6>
                                        <p class="mb-0 text-xs">Tidak lagi mengantri di fingerspot
                                        </p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                                    <div class="avatar me-3">
                                        <img src="{{ asset('dashboard') }}/assets/img/team-4.jpg" alt="kal"
                                            class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Peterson</h6>
                                        <p class="mb-0 text-xs">Aku bisa dengan mudah absen</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                                </li>
                                <li class="list-group-item border-0 d-flex align-items-center px-0">
                                    <div class="avatar me-3">
                                        <img src="{{ asset('dashboard') }}/assets/img/team-3.jpg" alt="kal"
                                            class="border-radius-lg shadow">
                                    </div>
                                    <div class="d-flex align-items-start flex-column justify-content-center">
                                        <h6 class="mb-0 text-sm">Nick Daniel</h6>
                                        <p class="mb-0 text-xs">Damn, Benar benar luar biasa!</p>
                                    </div>
                                    <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto" href="javascript:;">Reply</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-12 mt-4">
                    <div class="card mb-4">
                        <div class="card-header pb-0 p-3">
                        <h6 class="mb-1">Projects</h6>
                        <p class="text-sm">Architects design houses</p>
                        </div>
                        <div class="card-body p-3">
                        <div class="row">
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="{{ asset('dashboard') }}/assets/img/home-decor-1.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">Project #2</p>
                                <a href="javascript:;">
                                    <h5>
                                    Modern
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    As Uber works through a huge amount of internal management turmoil.
                                </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                    <div class="avatar-group mt-2">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-4.jpg">
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="{{ asset('dashboard') }}/assets/img/home-decor-2.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">
                                </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">Project #1</p>
                                <a href="javascript:;">
                                    <h5>
                                    Scandinavian
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    Music is something that every person has his or her own specific opinion about.
                                </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                    <div class="avatar-group mt-2">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-4.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-1.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-2.jpg">
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card card-blog card-plain">
                                <div class="position-relative">
                                <a class="d-block shadow-xl border-radius-xl">
                                    <img src="{{ asset('dashboard') }}/assets/img/home-decor-3.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                                </a>
                                </div>
                                <div class="card-body px-1 pb-0">
                                <p class="text-gradient text-dark mb-2 text-sm">Project #3</p>
                                <a href="javascript:;">
                                    <h5>
                                    Minimalist
                                    </h5>
                                </a>
                                <p class="mb-4 text-sm">
                                    Different people have different taste, and various types of music.
                                </p>
                                <div class="d-flex align-items-center justify-content-between">
                                    <button type="button" class="btn btn-outline-primary btn-sm mb-0">View Project</button>
                                    <div class="avatar-group mt-2">
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Peterson">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-4.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Nick Daniel">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-3.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Milly">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-2.jpg">
                                    </a>
                                    <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Elena Morison">
                                        <img alt="Image placeholder" src="{{ asset('dashboard') }}/assets/img/team-1.jpg">
                                    </a>
                                    </div>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                            <div class="card h-100 card-plain border">
                                <div class="card-body d-flex flex-column justify-content-center text-center">
                                <a href="javascript:;">
                                    <i class="fa fa-plus text-secondary mb-3"></i>
                                    <h5 class=" text-secondary"> New project </h5>
                                </a>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <footer class="footer pt-3  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold"
                                    target="_blank">Creative Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <hr class="horizontal dark my-sm-4">
                <a class="btn bg-gradient-dark w-100"
                    href="https://www.creative-tim.com/product/soft-ui-dashboard-pro">Free Download</a>
                <a class="btn btn-outline-dark w-100"
                    href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View
                    documentation</a>
                <div class="w-100 text-center">
                    <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard"
                        data-icon="octicon-star" data-size="large" data-show-count="true"
                        aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
                    <h6 class="mt-3">Thank you for sharing!</h6>
                    <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard"
                        class="btn btn-dark mb-0 me-2" target="_blank">
                        <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('dashboard') }}/assets/js/core/popper.min.js">
        < /sc<!DOCTYPE html> <
        html lang = "{{ str_replace('_', '-', app()->getLocale()) }}" >
            <
            head >
            <
            meta charset = "utf-8" >
            <
            meta name = "viewport"
        content = "width=device-width, initial-scale=1" >

            <
            title > Laravel < /title>

            <
            !--Fonts-- >
            <
            link href = "https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
        rel = "stylesheet" >

            <
            !--Styles-- >
            <
            style >
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            html {
                line - height: 1.15; - webkit - text - size - adjust: 100 %
            }
        body {
            margin: 0
        }
        a {
            background - color: transparent
        } [hidden] {
            display: none
        }
        html {
            font - family: system - ui, -apple - system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial,
                Noto Sans, sans - serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line - height: 1.5
        }*,: after,: before {
            box - sizing: border - box;
            border: 0 solid #e2e8f0
        }
        a {
            color: inherit;text - decoration: inherit
        }
        svg, video {
            display: block;vertical - align: middle
        }
        video {
            max - width: 100 % ;
            height: auto
        }.bg - white {
            --bg - opacity: 1;
            background - color: #fff;
            background - color: rgba(255, 255, 255,
                var (--bg - opacity))
        }.bg - gray - 100 {
            --bg - opacity: 1;
            background - color: #f7fafc;
            background - color: rgba(247, 250, 252,
                var (--bg - opacity))
        }.border - gray - 200 {
            --border - opacity: 1;
            border - color: #edf2f7;
            border - color: rgba(237, 242, 247,
                var (--border - opacity))
        }.border - t {
            border - top - width: 1 px
        }.flex {
            display: flex
        }.grid {
            display: grid
        }.hidden {
            display: none
        }.items - center {
            align - items: center
        }.justify - center {
            justify - content: center
        }.font - semibold {
            font - weight: 600
        }.h - 5 {
            height: 1.25 rem
        }.h - 8 {
            height: 2 rem
        }.h - 16 {
            height: 4 rem
        }.text - sm {
            font - size: .875 rem
        }.text - lg {
            font - size: 1.125 rem
        }.leading - 7 {
            line - height: 1.75 rem
        }.mx - auto {
            margin - left: auto;
            margin - right: auto
        }.ml - 1 {
            margin - left: .25 rem
        }.mt - 2 {
            margin - top: .5 rem
        }.mr - 2 {
            margin - right: .5 rem
        }.ml - 2 {
            margin - left: .5 rem
        }.mt - 4 {
            margin - top: 1 rem
        }.ml - 4 {
            margin - left: 1 rem
        }.mt - 8 {
            margin - top: 2 rem
        }.ml - 12 {
            margin - left: 3 rem
        }. - mt - px {
            margin - top: -1 px
        }.max - w - 6 xl {
            max - width: 72 rem
        }.min - h - screen {
            min - height: 100 vh
        }.overflow - hidden {
            overflow: hidden
        }.p - 6 {
            padding: 1.5 rem
        }.py - 4 {
            padding - top: 1 rem;
            padding - bottom: 1 rem
        }.px - 6 {
            padding - left: 1.5 rem;
            padding - right: 1.5 rem
        }.pt - 8 {
            padding - top: 2 rem
        }.fixed {
            position: fixed
        }.relative {
            position: relative
        }.top - 0 {
            top: 0
        }.right - 0 {
            right: 0
        }.shadow {
            box - shadow: 0 1 px 3 px 0 rgba(0, 0, 0, .1), 0 1 px 2 px 0 rgba(0, 0, 0, .06)
        }.text - center {
            text - align: center
        }.text - gray - 200 {
            --text - opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247,
                var (--text - opacity))
        }.text - gray - 300 {
            --text - opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240,
                var (--text - opacity))
        }.text - gray - 400 {
            --text - opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224,
                var (--text - opacity))
        }.text - gray - 500 {
            --text - opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192,
                var (--text - opacity))
        }.text - gray - 600 {
            --text - opacity: 1;
            color: #718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:# 4 a5568;
            color: rgba(74, 85, 104,
                var (--text - opacity))
        }.text - gray - 900 {
            --text - opacity: 1;
            color:
                #1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:# 2 d3748;
            background - color: rgba(45, 55, 72,
                var (--bg - opacity))
        }.dark\: bg - gray - 900 {
            --bg - opacity: 1;
            background - color:
                #1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:# 4 a5568;
            border - color: rgba(74, 85, 104,
                var (--border - opacity))
        }.dark\: text - white {
            --text - opacity: 1;
            color: #fff;
            color: rgba(255, 255, 255,
                var (--text - opacity))
        }.dark\: text - gray - 400 {
            --text - opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224,
                var (--text - opacity))
        }
        } <
        /style>

        <
        style >
            body {
                font - family: 'Nunito', sans - serif;
            } <
            /style> < /
        head > <
            body class = "antialiased" >
            <
            div class =
            "relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0" >
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <
            div class = "max-w-6xl mx-auto sm:px-6 lg:px-8" >
            <
            div class = "flex justify-center pt-8 sm:justify-start sm:pt-0" >
            <
            svg viewBox = "0 0 651 192"
        fill = "none"
        xmlns = "http://www.w3.org/2000/svg"
        class = "h-16 w-auto text-gray-700 sm:h-20" >
            <
            g clip - path = "url(#clip0)"
        fill = "#EF3B2D" >
            <
            path d =
            "M248.032 44.676h-16.466v100.23h47.394v-14.748h-30.928V44.676zM337.091 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.431 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162-.001 2.863-.479 5.584-1.432 8.161zM463.954 87.202c-2.101-3.341-5.083-5.965-8.949-7.875-3.865-1.909-7.756-2.864-11.669-2.864-5.062 0-9.69.931-13.89 2.792-4.201 1.861-7.804 4.417-10.811 7.661-3.007 3.246-5.347 6.993-7.016 11.239-1.672 4.249-2.506 8.713-2.506 13.389 0 4.774.834 9.26 2.506 13.459 1.669 4.202 4.009 7.925 7.016 11.169 3.007 3.246 6.609 5.799 10.811 7.66 4.199 1.861 8.828 2.792 13.89 2.792 3.913 0 7.804-.955 11.669-2.863 3.866-1.908 6.849-4.533 8.949-7.875v9.021h15.607V78.182h-15.607v9.02zm-1.432 32.503c-.955 2.578-2.291 4.821-4.009 6.73-1.719 1.91-3.795 3.437-6.229 4.582-2.435 1.146-5.133 1.718-8.091 1.718-2.96 0-5.633-.572-8.019-1.718-2.387-1.146-4.438-2.672-6.156-4.582-1.719-1.909-3.032-4.152-3.938-6.73-.909-2.577-1.36-5.298-1.36-8.161 0-2.864.451-5.585 1.36-8.162.905-2.577 2.219-4.819 3.938-6.729 1.718-1.908 3.77-3.437 6.156-4.582 2.386-1.146 5.059-1.718 8.019-1.718 2.958 0 5.656.572 8.091 1.718 2.434 1.146 4.51 2.674 6.229 4.582 1.718 1.91 3.054 4.152 4.009 6.729.953 2.577 1.432 5.298 1.432 8.162 0 2.863-.479 5.584-1.432 8.161zM650.772 44.676h-15.606v100.23h15.606V44.676zM365.013 144.906h15.607V93.538h26.776V78.182h-42.383v66.724zM542.133 78.182l-19.616 51.096-19.616-51.096h-15.808l25.617 66.724h19.614l25.617-66.724h-15.808zM591.98 76.466c-19.112 0-34.239 15.706-34.239 35.079 0 21.416 14.641 35.079 36.239 35.079 12.088 0 19.806-4.622 29.234-14.688l-10.544-8.158c-.006.008-7.958 10.449-19.832 10.449-13.802 0-19.612-11.127-19.612-16.884h51.777c2.72-22.043-11.772-40.877-33.023-40.877zm-18.713 29.28c.12-1.284 1.917-16.884 18.589-16.884 16.671 0 18.697 15.598 18.813 16.884h-37.402zM184.068 43.892c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002-35.648-20.524a2.971 2.971 0 00-2.964 0l-35.647 20.522-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v38.979l-29.706 17.103V24.493a3 3 0 00-.103-.776c-.024-.088-.073-.165-.104-.25-.058-.157-.108-.316-.191-.46-.056-.097-.137-.176-.203-.265-.087-.117-.161-.242-.265-.345-.085-.086-.194-.148-.29-.223-.109-.085-.206-.182-.327-.252l-.002-.001-.002-.002L40.098 1.396a2.971 2.971 0 00-2.964 0L1.487 21.919l-.002.002-.002.001c-.121.07-.219.167-.327.252-.096.075-.205.138-.29.223-.103.103-.178.228-.265.345-.066.089-.147.169-.203.265-.083.144-.133.304-.191.46-.031.085-.08.162-.104.25-.067.249-.103.51-.103.776v122.09c0 1.063.568 2.044 1.489 2.575l71.293 41.045c.156.089.324.143.49.202.078.028.15.074.23.095a2.98 2.98 0 001.524 0c.069-.018.132-.059.2-.083.176-.061.354-.119.519-.214l71.293-41.045a2.971 2.971 0 001.489-2.575v-38.979l34.158-19.666a2.971 2.971 0 001.489-2.575V44.666a3.075 3.075 0 00-.106-.774zM74.255 143.167l-29.648-16.779 31.136-17.926.001-.001 34.164-19.669 29.674 17.084-21.772 12.428-43.555 24.863zm68.329-76.259v33.841l-12.475-7.182-17.231-9.92V49.806l12.475 7.182 17.231 9.92zm2.97-39.335l29.693 17.095-29.693 17.095-29.693-17.095 29.693-17.095zM54.06 114.089l-12.475 7.182V46.733l17.231-9.92 12.475-7.182v74.537l-17.231 9.921zM38.614 7.398l29.693 17.095-29.693 17.095L8.921 24.493 38.614 7.398zM5.938 29.632l12.475 7.182 17.231 9.92v79.676l.001.005-.001.006c0 .114.032.221.045.333.017.146.021.294.059.434l.002.007c.032.117.094.222.14.334.051.124.088.255.156.371a.036.036 0 00.004.009c.061.105.149.191.222.288.081.105.149.22.244.314l.008.01c.084.083.19.142.284.215.106.083.202.178.32.247l.013.005.011.008 34.139 19.321v34.175L5.939 144.867V29.632h-.001zm136.646 115.235l-65.352 37.625V148.31l48.399-27.628 16.953-9.677v33.862zm35.646-61.22l-29.706 17.102V66.908l17.231-9.92 12.475-7.182v33.841z" /
            >
            <
            /g> < /
        svg > <
            /div>

            <
            div class = "mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg" >
            <
            div class = "grid grid-cols-1 md:grid-cols-2" >
            <
            div class = "p-6" >
            <
            div class = "flex items-center" >
            <
            svg fill = "none"
        stroke = "currentColor"
        stroke - linecap = "round"
        stroke - linejoin = "round"
        stroke - width = "2"
        viewBox = "0 0 24 24"
        class = "w-8 h-8 text-gray-500" > < path d =
            "M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" >
            <
            /path></svg >
            <
            div class = "ml-4 text-lg leading-7 font-semibold" > < a href = "https://laravel.com/docs"
        class = "underline text-gray-900 dark:text-white" > Documentation < /a></div >
            <
            /div>

            <
            div class = "ml-12" >
            <
            div class = "mt-2 text-gray-600 dark:text-gray-400 text-sm" >
            Laravel has wonderful, thorough documentation covering every aspect of the framework
            .Whether you are new to the framework or have previous experience with Laravel, we recommend reading all of
            the documentation from beginning to end. <
            /div> < /
        div > <
            /div>

            <
            div class = "p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l" >
            <
            div class = "flex items-center" >
            <
            svg fill = "none"
        stroke = "currentColor"
        stroke - linecap = "round"
        stroke - linejoin = "round"
        stroke - width = "2"
        viewBox = "0 0 24 24"
        class = "w-8 h-8 text-gray-500" > < path d =
            "M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" >
            <
            /path><path d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path > < /svg> <
        div class = "ml-4 text-lg leading-7 font-semibold" > < a href = "https://laracasts.com"
        class = "underline text-gray-900 dark:text-white" > Laracasts < /a></div >
            <
            /div>

            <
            div class = "ml-12" >
            <
            div class = "mt-2 text-gray-600 dark:text-gray-400 text-sm" >
            Laracasts offers thousands of video tutorials on Laravel, PHP, and JavaScript development.Check them out, see
        for yourself, and massively level up your development skills in the process. <
            /div> < /
        div > <
            /div>

            <
            div class = "p-6 border-t border-gray-200 dark:border-gray-700" >
            <
            div class = "flex items-center" >
            <
            svg fill = "none"
        stroke = "currentColor"
        stroke - linecap = "round"
        stroke - linejoin = "round"
        stroke - width = "2"
        viewBox = "0 0 24 24"
        class = "w-8 h-8 text-gray-500" > < path d =
            "M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" > < /path></svg >
            <
            div class = "ml-4 text-lg leading-7 font-semibold" > < a href = "https://laravel-news.com/"
        class = "underline text-gray-900 dark:text-white" > Laravel News < /a></div >
            <
            /div>

            <
            div class = "ml-12" >
            <
            div class = "mt-2 text-gray-600 dark:text-gray-400 text-sm" >
            Laravel News is a community driven portal and newsletter aggregating all of
            the latest and most important news in the Laravel ecosystem, including new package releases and tutorials. <
            /div> < /
        div > <
            /div>

            <
            div class = "p-6 border-t border-gray-200 dark:border-gray-700 md:border-l" >
            <
            div class = "flex items-center" >
            <
            svg fill = "none"
        stroke = "currentColor"
        stroke - linecap = "round"
        stroke - linejoin = "round"
        stroke - width = "2"
        viewBox = "0 0 24 24"
        class = "w-8 h-8 text-gray-500" > < path d =
            "M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" >
            <
            /path></svg >
            <
            div class = "ml-4 text-lg leading-7 font-semibold text-gray-900 dark:text-white" > Vibrant Ecosystem < /div> < /
        div >

            <
            div class = "ml-12" >
            <
            div class = "mt-2 text-gray-600 dark:text-gray-400 text-sm" >
            Laravel 's robust library of first-party tools and libraries, such as <a href="https://forge.laravel.com" class="underline">Forge</a>, <a href="https://vapor.laravel.com" class="underline">Vapor</a>, <a href="https://nova.laravel.com" class="underline">Nova</a>, and <a href="https://envoyer.io" class="underline">Envoyer</a> help you take your projects to the next level. Pair them with powerful open source libraries like <a href="https://laravel.com/docs/billing" class="underline">Cashier</a>, <a href="https://laravel.com/docs/dusk" class="underline">Dusk</a>, <a href="https://laravel.com/docs/broadcasting" class="underline">Echo</a>, <a href="https://laravel.com/docs/horizon" class="underline">Horizon</a>, <a href="https://laravel.com/docs/sanctum" class="underline">Sanctum</a>, <a href="https://laravel.com/docs/telescope" class="underline">Telescope</a>, and more. < /
        div > <
            /div> < /
        div > <
            /div> < /
        div >

            <
            div class = "flex justify-center mt-4 sm:items-center sm:justify-between" >
            <
            div class = "text-center text-sm text-gray-500 sm:text-left" >
            <
            div class = "flex items-center" >
            <
            svg fill = "none"
        stroke - linecap = "round"
        stroke - linejoin = "round"
        stroke - width = "2"
        viewBox = "0 0 24 24"
        stroke = "currentColor"
        class = "-mt-px w-5 h-5 text-gray-400" >
            <
            path d =
            "M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" >
            <
            /path> < /
        svg >

            <
            a href = "https://laravel.bigcartel.com"
        class = "ml-1 underline" >
            Shop <
            /a>

            <
            svg fill = "none"
        stroke = "currentColor"
        stroke - linecap = "round"
        stroke - linejoin = "round"
        stroke - width = "2"
        viewBox = "0 0 24 24"
        class = "ml-4 -mt-px w-5 h-5 text-gray-400" >
            <
            path d =
            "M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" >
            <
            /path> < /
        svg >

            <
            a href = "https://github.com/sponsors/taylorotwell"
        class = "ml-1 underline" >
            Sponsor <
            /a> < /
        div > <
            /div>

            <
            div class = "ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0" >
            Laravel v{{ Illuminate\Foundation\Application::VERSION }}(PHP v{{ PHP_VERSION }}) <
            /div> < /
        div > <
            /div> < /
        div > <
            /body> < /
        html >
            ript >
            <
            script src = "{{ asset('dashboard') }}/assets/js/core/bootstrap.min.js" >
    </script>
    <script src="{{ asset('dashboard') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('dashboard') }}/assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('dashboard') }}/assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
</body>

</html>

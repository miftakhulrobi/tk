<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $this->auths->app()->appname ?></title>
    <link rel="icon" href="<?= base_url('assets') ?>/img/LOGO FIX.png" type="image/x-icon" />
    <script src="<?= base_url('assets') ?>/js/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Lato:300,400,700,900"]
            },
            custom: {
                families: [
                    "Flaticon",
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ["<?= base_url('assets') ?>/css/fonts.min.css"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets') ?>/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">

    <style>
        .container-panel {
            box-shadow: 0px 5px 10px 5px rgba(0, 0, 0, 0.15);
        }

        .icon-power-logout {
            animation: iconPowerLogout 3s ease infinite;
        }

        .btn-info {
            animation: btnInfo 6s ease 2s infinite;
        }

        .img-avatar-profile {
            border-radius: 90%;
            width: 150px;
        }

        .card-profile-user {
            box-shadow: 0px 5px 10px 5px rgba(0, 0, 0, .25);
        }

        .card-home-welcome {
            box-shadow: 0px 5px 10px 5px rgba(0, 0, 0, .15);
        }

        @keyframes iconPowerLogout {
            0% {
                transform: rotate(20deg);
                color: white;
            }

            25% {
                transform: rotate(0deg);
                color: white;
            }

            50% {
                transform: rotate(-20deg);
                color: white;
            }

            75% {
                color: white;
            }

            100% {
                color: red;
            }
        }

        @keyframes btnInfo {
            0% {
                color: white;
            }

            100% {
                color: lime;
            }
        }
    </style>
</head>

<body>
    <div class="container container-panel">
        <div class="header">
            <img src="<?= base_url('assets') ?>/img/HEADER.png" alt="" class="img-responsive img-thumbnail p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-primary">
                <a class="navbar-brand" href="<?= base_url('setting/profile') ?>">
                    <img src="<?= base_url('assets') ?>/img/admin.jpg" class="icon-nav-rotate" width="30" height="30" alt="" style="border-radius: 5px">

                    <span class="ml-2" style="color: navy;">TK MIFTAAHUL JANNAH</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-3" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item ml-3">
                            <a class="nav-link text-white" href="<?= base_url('home') ?>">Home</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link text-white" href="<?= base_url('siswa') ?>">Data Siswa</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link text-white" href="<?= base_url('guru') ?>">Data Guru</a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link text-white" href="<?= base_url('nilai') ?>">Nilai</a>
                        </li>
                        <li class="nav-item dropdown ml-3">
                            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Master
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="<?= base_url('setting/tahunajaran') ?>">Tahun Ajaran</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('setting/profile') ?>">Profile Saya</a>
                            </div>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link text-white icon-power-logout" href="<?= base_url('auth/logout') ?>"><i class="icon-power"></i></a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link text-white" href="#"><span id="jam"></span>:<span id="menit"></span>:<span id="detik"></span></a>
                        </li>
                        <li class="nav-item ml-3">
                            <a class="nav-link text-white" href="#"><?= date('d M Y') ?></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="content mb-5">
            <div class="row">
                <div class="col-md-12">
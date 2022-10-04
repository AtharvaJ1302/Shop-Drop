<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Drop</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="./bootstrap-5.0.2-dist/css/bootstrap.css">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/ed6a667071.js" crossorigin="anonymous"></script>

    <!--custom css file-->
    <link rel="stylesheet" href="style.css">

<?php
require('./functions.php')
?>

</head>

<body>

<!--header-->
    <header id="header">
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0" style="color: none; color: #f8f9fa!important;">Shop-Drop
            </p>
            <div class="font-rale font-size-14 justify-content-end">
                <a href="#" class="px-3 border-right border-left text-dark">Login</a>
                <a href="#" class="px-3 border-right text-dark">Wishlist(0)</a>
            </div>
        </div>

        <!--navbar primary-->
        <nav class="navbar navbar-expand-lg navbar-dark color-primary-bg">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Shop-Drop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">On Sale</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Products <i class="fas fa-chevron-down"></i> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Coming Soon</a>
                        </li>

                    </ul>
                    <form action="" class="font-size-14 font-rale">
                        <a href="#" class="py-2 rounded-pill color-second-bg">
                            <span class="font-size-16 px-2 text-white"> <i class="fas fa-shopping-cart"></i> </span>
                            <span class="px-3 py-2 rounded-pill text-dark bg-light">0</span>
                        </a>
                    </form>
                </div>
            </div>
        </nav>
        <!--navbar primary-->

    </header>
    <!--header-->

    <!--main site-->
    <main id="main-site">
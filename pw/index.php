<?php

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WACTCHES SCRT | Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--Framework Use-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="asset/favicon/logoscrt.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7e563a8c7f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <!--Framework Use-->

</head>

<body>
    <div class="coverall">
        <div class="cover">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand mt-1" href="#">
                        <img src="asset/logo/logo.png" style="height: 3vw;" alt="" srcset="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fs-3" id="navbarNavDropdown">
                        <ul class="navbar-nav fs-5">
                            <li class="nav-item me-4">
                                <a class="nav-link text-dark" href="index.php">Home</a>
                            </li>
                            <li class="nav-item dropdown me-4">
                                <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    News Series
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item text-dark" href="#news">News Collection</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link text-dark" href="#spl">Specials</a>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link text-dark" href="#">Pricing</a>
                            </li>
                            <li class="nav-item dropdown me-4">
                                <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Contact
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item text-dark" href="#footer">Feedback</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-dark" href="#footer">Number Phone</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-dark" href="#footer">Email</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-dark" href="#footer">Location</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link text-danger" href="loginadmin.php">Admin test</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!--endnavbar-->

            <div class="contentall">
                <div class="content1">
                    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel"
                        style="margin: 1vw">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <a href="#news">
                                    <img src="asset/banner/banner2.jpg" class="gmbr d-block w-100 rounded-4" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <a href="#news">
                                    <img src="asset/banner/banner1.jpg" class="gmbrd-block w-100 rounded-4" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#news">
                                    <img src="asset/banner/banner3.jpg" class="gmbr d-block w-100 rounded-4" alt="...">
                                </a>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="content2">
                    <div class="isicontent" id="jmb">
                        <!-- nav2 -->
                        <div class="nav2 container d-flex justify-content-center mt-4">
                            <div class="bungkus d-flex justify-content-center" style="margin: 1vw; cursor:pointer;">
                                <div class="logo1 me-5 ms-5 mt-2">
                                    <a href="#">
                                        <img src="asset/logo/logo1.png" alt="">
                                    </a>
                                </div>
                                <div class="logo2 me-5 ms-5">
                                    <a href="#">
                                        <img src="asset/logo/logo2.png" alt="">
                                    </a>
                                </div>
                                <div class="logo1 me-5 ms-5 mt-1">
                                    <a href="#">
                                        <img src="asset/logo/logo3.png" alt="">
                                    </a>
                                </div>
                                <div class="logo2 me-5 ms-5">
                                    <a href="">
                                        <img src="asset/logo/logo4.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- and nav2 -->
                        <section id="news" class="news">
                            <div class="container">
                                <div class="jumbotron ps-2 pe-2" id="jbm">
                                    <hr class="my-4 mt-4">
                                    <p class="display-4 fs-2" style="text-align: center;">Wactches New Series</p>
                                    <div class="cnt d-flex justify-content-center">
                                        <div class="kanan mt-3 fs-5 fixed-side">
                                            <div class="atas">
                                                <p class="collec fs-3">
                                                    <label for="nah" class="fnt me-1">
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </label>
                                                    Collections
                                                </p>
                                                <div class="isik">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                G-Shock Series
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">GA-2100-1A1</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">DW-5600BB-1</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">AW-500BB-1E</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Pro Trek Series
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">PRG-340-1</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">PRG-340-3</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">PRG-340T-7</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Baby-G Series
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">BA-110XPM-6A</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">BA-130PM-4A</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">BGA-280PM-7A</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Edifice Series
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">EQB-2000DB-1A</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">EQB-2000DC-1A</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">ECB-2000D-1A</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Casio Series
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-VD03B-1A</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-VD03B-7A</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-VD03D-1A</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Seen Series
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">SHE-4539CM-4A</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">SHE-4539GM-9A</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">SHE-4539SM-2A</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                            </div>
                                            <div class="tengah">
                                                <p class="collec fs-3">
                                                    <label for="nah" class="fnt me-1">
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </label>
                                                    Water Resistance
                                                </p>
                                                <div class="isik">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                WR for ISO 200
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <upli>
                                                                    <a class="dropdown-item" href="#">DW-291H-1AV</a>
                                                                </upli>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">DW-291H-1BV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">DW-291H-9AV</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                WR 20 bar
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MWA-100HD-2AV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MWA-100HD-7AV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MWD-100HD-1BV</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                WR 10 bar
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-E350B-1BV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-E350B-7BV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-E350BL-1BV</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="my-4">
                                            </div>
                                            <div class="bawah">
                                                <p class="collec fs-3">
                                                    <label for="nah" class="fnt me-1">
                                                        <i class="fa-solid fa-caret-right"></i>
                                                    </label>
                                                    Display Type
                                                </p>
                                                <div class="isik">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Digital and Analog
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">AEQ-120W-1AV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">AEQ-120W-2AV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">AEQ-120W-9AV</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Digital
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <upli>
                                                                    <a class="dropdown-item" href="#">LWS-1200H-1AV</a>
                                                                </upli>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">AE-1500WHX-3AV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MWD-100HD-1BV</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="isik2">
                                                    <div class="dropdown" style="cursor: pointer;">
                                                        <div class="btn-group dropend">
                                                            <p type="text" class="side fs-6" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                Analog
                                                            </p>
                                                            <ul class="dropdown-menu ms-3">
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-E350BL-1BV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-E350B-1BV</a>
                                                                </li>
                                                                <li>
                                                                    <a class="dropdown-item" href="#">MTP-E350BL-1BV</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kiri">
                                            <div class="container">
                                                <div class="src d-flex justify-content-center mt-3">
                                                    <form class="d-flex" role="search">
                                                        <input class="form-control" type="search"
                                                            placeholder="Search..." aria-label="Search">
                                                        <button class="btn btn-outline-dark ms-3"
                                                            type="submit">Search</button>
                                                    </form>
                                                </div>
                                                <hr class="my-4 w-90">
                                                <div class="isikiri">
                                                    <div class="row row-cols-1 row-cols-md-3 g-4">
                                                        <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/b.jpg" class="card1 card-img-top"
                                                                    alt="...">
                                                                <div class="cd card-body">
                                                                    <h5 class="card-title">GA-2110SC-4A</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content
                                                                    </p>
                                                                </div>
                                                                <a href="card.php"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class="dtl btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>
                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/a.jpg" class="card-img-top"
                                                                    alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">GA-B001G-1A</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content
                                                                    </p>
                                                                </div>
                                                                <a href="#"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class="dtl btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>

                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/c.jpg" class="card-img-top"
                                                                    alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">MTG-B3000D-1A</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content
                                                                </div>
                                                                <a href="#"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class="dtl btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>
                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/e.jpg" class="card-img-top"
                                                                    alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">DW-5000SS-1</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content.
                                                                    </p>
                                                                </div>
                                                                <a href="#"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class="dtl btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>

                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/f.png" class="card-img-top"
                                                                    alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">GA-700SC-3A</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content
                                                                    </p>
                                                                </div>
                                                                <a href="#"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class="dtl btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>

                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/g.jpg" class="card-img-top"
                                                                    alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">SHE-4539CM-4A</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content
                                                                    </p>
                                                                </div>
                                                                <a href="#"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class=" dtl btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>

                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/h.jpg" class="card-img-top"
                                                                    alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">SHE-4539SM-2A</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content
                                                                </div>
                                                                <a href="#"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class="btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>

                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/d.jpg" class="card-img-top"
                                                                    alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">MTP-VD03D-1A</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content.
                                                                    </p>
                                                                </div>
                                                                <a href="#"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class="btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>

                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cl1 col">
                                                            <div class="card h-90">
                                                                <img src="asset/imgW/i.png" class="card-img-top"
                                                                    alt="...">
                                                                <div class="card-body">
                                                                    <h5 class="card-title">MTP-VD03D-1A</h5>
                                                                    <p class="card-text">This is a wider card with
                                                                        supporting text below as a
                                                                        natural lead-in to additional content.
                                                                    </p>
                                                                </div>
                                                                <a href="#"
                                                                    class="opo d-flex justify-content-center mb-2"
                                                                    style="text-decoration: none;">
                                                                    <button type="button"
                                                                        class="btn btn-secondary btn-sm"
                                                                        style="width: 70%;">Details</button>
                                                                </a>

                                                                <div class="card-footer">
                                                                    <small class="text-muted">Last updated 3 mins
                                                                        ago</small>
                                                                </div>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                        </section>
                        <section id="spl" class="spl">
                            <div class="isi2">
                                <p class="display-4 fs-2" style="text-align: center;">Special Collections</p>
                                <div class="container">
                                    <div class="pagi mt-5">
                                        <div class="isipagi">
                                            <div class="container">
                                                <div class="row row-cols-1 row-cols-md-3 g-4">
                                                    <div class="col">
                                                        <div class="card h-100">
                                                            <div class="new">
                                                                <p>NEW</p>
                                                            </div>
                                                            <img src="asset/imgW/h.jpg" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Card title</h5>
                                                                <p class="card-text">This is a longer card</p>
                                                                <hr class="my-4">
                                                                <button type="button"
                                                                    class="dtl btn btn-secondary btn-sm d-grid gap-2 col-6 mx-auto"
                                                                    style="width: 70%;">Details</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card h-100">
                                                            <div class="new">
                                                                <p>NEW</p>
                                                            </div>
                                                            <img src="asset/imgW/i.png" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Card title</h5>
                                                                <p class="card-text">This is a short card.</p>
                                                                <hr class="my-4">
                                                                <button type="button"
                                                                    class="dtl btn btn-secondary btn-sm d-grid gap-2 col-6 mx-auto"
                                                                    style="width: 70%;">Details</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="card h-100">
                                                            <div class="new">
                                                                <p>NEW</p>
                                                            </div>
                                                            <img src="asset/imgW/d.jpg" class="card-img-top" alt="...">
                                                            <div class="card-body">
                                                                <h5 class="card-title">Card title</h5>
                                                                <p class="card-text">This is a longer card
                                                                </p>
                                                                <hr class="my-4">
                                                                <button type="button"
                                                                    class="dtl btn btn-secondary btn-sm d-grid gap-2 col-6 mx-auto"
                                                                    style="width: 70%;">Details</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                </div>
                            </div>
                        </section>
                        <section class="footer" id="footer">
                            <div class="footer">
                                <h2 style="text-align: center;">Contact</h2>
                                <div class="isifot d-flex justify-content-center">
                                    <div class="ftr m-3">
                                        <div class="fkanan">
                                            <div class="mb-3">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Phone
                                                    Number
                                                </label>
                                                <h5>031-1111-88</h5>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Email
                                                    address
                                                </label>
                                                <h5>scrt@yahoo.co.id</h5>
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1"
                                                    class="form-label">Feedback</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                                    rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="fkiri">
                                            <div class="maps ms-2">
                                                <div class="mapouter ms-5">
                                                    <div class="gmap_canvas">
                                                        <iframe width="1050" height="368" id="gmap_canvas"
                                                            src="https://maps.google.com/maps?q=istts&t=&z=15&ie=UTF8&iwloc=&output=embed"
                                                            frameborder="0" scrolling="no" marginheight="0"
                                                            marginwidth="0"><br>
                                                            <a
                                                                href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
<script>
$(document).ready(function() {
    $('body').bind('cut copy', function(e) {
        e.preventDefault();
    });
});
</script>

</html>
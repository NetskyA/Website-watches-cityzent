<?php
require_once("connector.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WATCHES SCRT | Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--Framework Use-->
    <link rel="stylesheet" href="css/style.css">
    <script src="css/script.js"></script>
    <link rel="shortcut icon" href="asset/favicon/logoscrt.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7e563a8c7f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
    <!-- <style>
    #panel,
    #flip {
        width: 15vw;
        background-color: white;
        border: none;
    }

    #panel {
        display: none;
    }
    </style> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <!--Framework Use-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    $(document).ready(function() {
        // panel hide
        $("#panel").hide();
        $("#panels").hide();
        $("#panelss").hide();
        $("#panel1").hide();
        $("#panel2").hide();
        $("#panel3").hide();
        // and panel hide

        // action
        $("#tgl").click(function() {
            $("#panel").toggle(1000);
        });

        $("#tgls").click(function() {
            $("#panels").toggle(1000);
        });

        $("#tglss").click(function() {
            $("#panelss").toggle(1000);
        });

        $("#tgl1").click(function() {
            $("#panel1").toggle(1000);
        });

        $("#tgl2").click(function() {
            $("#panel2").toggle(1000);
        });

        $("#tgl3").click(function() {
            $("#panel3").toggle(1000);
        });
        // and action
    });
    </script>


    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript"
        src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript"
        src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('.table-paginate').dataTable();
    });
    </script>
    <script>
    var search = "";

    function load() {
        ajax(1);
    }

    function ajax(idx) {
        var countgender = 0;
        var countbrand = 0;
        var countwarna = 0;
        var countwater = 0;
        var countdisplay = 0;
        var condition = [];
        var query = "";
        search = document
            .getElementById("cari1")
            .value;
        var gender = document.getElementsByName("gdr");
        for (i = 0; i < gender.length; i++) {
            if (gender[i].checked == true) {
                condition.push("ID_Gender=" + gender[i].value);
            }
        }
        if (condition.length != 0) {
            if (query != "") {
                query += " and ";
            }
            query += "(";
            query += condition.join(" or ");
            query += ")";
        }
        condition = [];
        var brand = document.getElementsByName("brn");
        for (i = 0; i < brand.length; i++) {
            if (brand[i].checked == true) {
                condition.push("ID_Brand=" + brand[i].value);
            }
        }
        if (condition.length != 0) {
            if (query != "") {
                query += " and ";
            }
            query += "(";
            query += condition.join(" or ");
            query += ")";
        }
        condition = [];
        var resistance = document.getElementsByName("res");
        for (i = 0; i < resistance.length; i++) {
            if (resistance[i].checked == true) {
                condition.push("ID_Resistant=" + resistance[i].value);
            }
        }
        if (condition.length != 0) {
            if (query != "") {
                query += " and ";
            }
            query += "(";
            query += condition.join(" or ");
            query += ")";
        }
        condition = [];
        var display = document.getElementsByName("dsp");
        for (i = 0; i < display.length; i++) {
            if (display[i].checked == true) {
                condition.push("ID_Display=" + display[i].value);
            }
        }
        if (condition.length != 0) {
            if (query != "") {
                query += " and ";
            }
            query += "(";
            query += condition.join(" or ");
            query += ")";
        }
        condition = [];
        var color = document.getElementsByName("col");
        for (i = 0; i < color.length; i++) {
            if (color[i].checked == true) {
                condition.push("ID_Warna=" + color[i].value);
            }
        }
        if (condition.length != 0) {
            if (query != "") {
                query += " and ";
            }
            query += "(";
            query += condition.join(" or ");
            query += ")";
        }

        var quer1 = false;
        var nilaimax = 0;
        var nilaimin = 99999999;
        if (document.getElementsByName("prc1")[0].checked == true) {
            quer1 = true;
            if (nilaimax < 1000000) {
                nilaimax = 1000000;
            }
            if (nilaimin > 800000) {
                nilaimin = 800000;
            }
        }
        if (document.getElementsByName("prc2")[0].checked == true) {
            quer1 = true;
            if (nilaimax < 1500000) {
                nilaimax = 1500000;
            }
            if (nilaimin > 1000000) {
                nilaimin = 1000000;
            }
        }
        if (document.getElementsByName("prc3")[0].checked == true) {
            quer1 = true;
            if (nilaimax < 3000000) {
                nilaimax = 3000000;
            }
            if (nilaimin > 1500000) {
                nilaimin = 1500000;
            }
        }
        minim = document.getElementById("minim").value;
        maks = document.getElementById("maks").value;
        var validmin = false;
        var validmaks = false;
        if (!isNaN(minim) && minim != "") {
            validmin = true;
        }
        if (!isNaN(maks) && maks != "") {
            validmaks = true;
        }
        if (quer1) {
            if (minim < nilaimin && validmin) {
                nilaimin = minim;
            }
            if (maks > nilaimax && validmaks) {
                nilaimax = maks;
            }
            if (query != "") {
                query += " and ";
            }
            query += "(Harga >=" + nilaimin + " and " + "Harga<=" + nilaimax + ")"
        } else {
            if (validmaks == true && validmin == true) {
                if (query != "") {
                    query += " and ";
                }
                query += "(Harga >=" + minim + " and " + "Harga<=" + maks + ")";
            } else if (validmaks == true) {
                if (query != "") {
                    query += " and ";
                }
                query += "(Harga<=" + maks + ")";
            } else if (validmin == true) {
                if (query != "") {
                    query += " and ";
                }
                query += "(Harga>=" + minim + ")";
            }
        }
        $.ajax({
            type: "GET",
            data: {
                search: search,
                idx: idx,
                query: query
            },
            url: "ajax.php",
            success: function(msg) {
                $('#con').html(msg);
            }
        });
    }
    </script>
</head>

<body onload="load()">
    <div class="coverall">
        <div class="cover">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <a class="nav-link text-white pt-2" href="loginadmin.php" style="display: flex;">
                        <img src="asset/logo/logo.png" class="logo" alt="" srcset="">
                        <h2 style="padding-top: 0.5vw; color:black;">
                            WATCHES SCRT
                        </h2>
                        <div class="nth ms-3">
                        </div>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="nsavbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse ms-3" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 fs-4">
                            <li class="nav-item dropdown me-4">
                                <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    New Series
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item text-dark" href="#news">Collection</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item me-4">
                                <a class="nav-link text-dark" href="#footer">Specials</a>
                            </li>
                            <li class="nav-item dropdown me-4">
                                <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Support
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="dropdown-item text-dark" href="contactus.php">Number Phone</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-dark" href="contactus.php">Email</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-dark" href="contactus.php">Location</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-dark" href="contactus.php">Help</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-dark" href="contactus.php">Questions</a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <a href="checkout.php" role="button" class="btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="45" height="50" fill="currentColor"
                                class="bi bi-cart4 me-3" viewBox="0 0 16 16" style="margin-right: 0vw;">
                                <path
                                    d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </a>
                        <div class="dropdown">
                            <button class="btn dropdown-toggle me-5" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false"><a href="logincus.php" role="button" class="btn"
                                    style="margin-top: 0.3vw;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="37" height="42" fill="currentColor"
                                        class="bi bi-person-circle" viewBox="0 0 16 16">
                                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                    </svg>
                                </a>
                            </button>
                            <ul class="dropdown-menu">
                                <?php
                                if (!isset($_SESSION["logged"])) {
                                    echo '<li><a class="dropdown-item" href="logincus.php">Login</a></li>';
                                } else {
                                    echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
                                }
                                ?>
                            </ul>
                        </div>

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
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="5000">
                                <a href="#news">
                                    <img src="asset/banner/banner4.jpg" class="gmbr d-block w-100 rounded-4" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item" data-bs-interval="5000">
                                <a href="#news">
                                    <img src="asset/banner/banner3.jpg" class="gmbr d-block w-100 rounded-4" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#news">
                                    <img src="asset/banner/banner1.jpg" class="gmbr d-block w-100 rounded-4" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#news">
                                    <img src="asset/banner/banner2.jpg" class="gmbr d-block w-100 rounded-4" alt="...">
                                </a>
                            </div>
                            <div class="carousel-item">
                                <a href="#news">
                                    <img src="asset/banner/banner5.jpg" class="gmbr d-block w-100 rounded-4" alt="...">
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
                <!-- nav2 -->
                <div class="nav2 d-flex justify-content-evenly align-items-center mt-4 row">
                    <div class="col-3 res">
                        <a href="#" class="gbr d-flex align-items-center justify-content-center">
                            <img class="logo2" src="asset/logo/casio.png" alt="">
                        </a>
                    </div>
                    <div class="col-3 res">
                        <a href="#" class="gbr d-flex align-items-center justify-content-center">
                            <img class="logo3" src="asset/logo/baby.png" alt="">
                        </a>
                    </div>
                    <div class="col-3 res ">
                        <a href="#" class="gbr d-flex align-items-center justify-content-center">
                            <img class="logo4" src="asset/logo/edifice.png" alt="">
                        </a>
                    </div>
                    <div class="col-3 res">
                        <a href="#" class="gbr d-flex align-items-center justify-content-center">
                            <img class="logo2" src="asset/logo/gshock.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- and nav2 -->
                <section id="news" class="news">
                    <div class="container-fluid" style="width: 90%;">
                        <div class="jumbotron" id="jbm">
                            <hr class="my-4 mt-4">
                            <div class="cnt d-flex justify-content-center">
                                <div class="kanan mt-3 fs-5 fixed-side" style="overflow:scroll;">
                                    <div class="atas">
                                        <p class="collec" id="tgl" style="font-size: 1.2vw;">
                                            <label for="nah" class="fnt">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </label>
                                            Gender
                                        </p>
                                        <div id="panel" style="width: 10vw; margin-left:1.3vw;">
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="gdr"
                                                    id="exampleRadios1" onclick="ajax(1)" value="1">
                                                <p class="brand" style="font-size: 1vw;">
                                                    Men
                                                </p>
                                            </div>
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="gdr"
                                                    id="exampleRadios1" onclick="ajax(1)" value="2">
                                                <p class="brand" style="font-size: 1vw;">
                                                    Women
                                                </p>
                                            </div>
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="gdr"
                                                    id="exampleRadios1" onclick="ajax(1)" value="3">
                                                <p class="brand" style="font-size: 1vw;">
                                                    For men and women
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-4">
                                    </div>
                                    <div class="tengah">
                                        <p class="collec" id="tgls" style="font-size: 1.2vw;">
                                            <label for="nah" class="fnt">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </label>
                                            Brands
                                        </p>
                                        <!-- <div>Click to slide down panel</div> -->
                                        <div id="panels" style="width: 10vw; margin-left:1.3vw;">

                                            <?php
                                            $stmt = $conn->prepare("SELECT * FROM brand");
                                            $stmt->execute();
                                            $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                            foreach ($data as $value) {
                                            ?>
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="brn"
                                                    id="exampleRadios1" onclick="ajax(1)" value="<?= $value["ID"] ?>">
                                                <p class="brand" style="font-size: 1vw;">
                                                    <?= $value["Nama"] ?> Series
                                                </p>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <hr class="my-4">
                                    </div>
                                    <div class="bawah">
                                        <p class="collec" id="tglss" style="font-size: 1.2vw;">
                                            <label for="nah" class="fnt">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </label>
                                            Price
                                        </p>
                                        <!-- <div>Click to slide down panel</div> -->
                                        <div id="panelss" style="width: 15vw; margin-left:1.3vw;">
                                            <div class="btn-group dropend fs-6 mb-3">
                                                <input type="text" name="min" style="width: 5vw;" id="minim"
                                                    placeholder="Min" oninput="ajax(1)">
                                                <h3 style="margin: 3px;">-</h3>
                                                <input type="text" name="max" style="width: 5vw;" id="maks"
                                                    placeholder="Max" oninput="ajax(1)">
                                            </div>
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="prc1"
                                                    id="exampleRadios1" onclick="ajax(1)">
                                                <p class="brand" style="font-size: 1vw;">
                                                    Rp 800k - 1000k
                                                </p>
                                            </div>
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="prc2"
                                                    id="exampleRadios1" onclick="ajax(1)">
                                                <p class="brand" style="font-size: 1vw;">
                                                    Rp 1000k - 1500k
                                                </p>
                                            </div>
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="prc3"
                                                    id="exampleRadios1" onclick="ajax(1)">
                                                <p class="brand" style="font-size: 1vw;">
                                                    Rp 1500k - 3000k
                                                </p>
                                            </div>
                                        </div>
                                        <hr class="my-4">

                                    </div>
                                    <div class="bawahlagi">
                                        <p class="collec" id="tgl1" style="font-size: 1.2vw;">
                                            <label for="nah" class="fnt">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </label>
                                            Water Resistant
                                        </p>
                                        <!-- <div>Click to slide down panel</div> -->
                                        <div id="panel1" style="width: 10vw; margin-left:1.3vw;">
                                            <?php
                                            $stmt = $conn->prepare("SELECT * FROM resistant");
                                            $stmt->execute();
                                            $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                            foreach ($data as $value) {
                                            ?>
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="res"
                                                    id="exampleRadios1" onclick="ajax(1)" value="<?= $value["ID"] ?>">
                                                <p class="brand" style="font-size: 1vw;">
                                                    <?= $value["Nama"] ?>
                                                </p>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <hr class="my-4">

                                    </div>
                                    <div class="bawahnih">
                                        <p class="collec" id="tgl2" style="font-size: 1.2vw;">
                                            <label for="nah" class="fnt">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </label>
                                            Display Type
                                        </p>
                                        <div id="panel2" style="width: 8.5vw; margin-left:1.3vw;">
                                            <?php
                                            $stmt = $conn->prepare("SELECT * FROM display");
                                            $stmt->execute();
                                            $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                            foreach ($data as $value) {
                                            ?>
                                            <div class="btn-group dropend fs-5">
                                                <input class="form-check-input me-1" type="checkbox" name="dsp"
                                                    id="exampleRadios1" onclick="ajax(1)" value="<?= $value["ID"] ?>">
                                                <p class="brand" style="font-size: 1vw;">
                                                    <?= $value["Nama"] ?>
                                                </p>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <hr class="my-4">
                                    <div class="bawahnih">
                                        <p class="collec" id="tgl3" style="font-size: 1.2vw;">
                                            <label for="nah" class="fnt">
                                                <i class="fa-solid fa-caret-right"></i>
                                            </label>
                                            Color
                                        </p>
                                        <div id="panel3"
                                            style="width: 8.5vw;height:18vw; margin-left:1.3vw;overflow:scroll;">
                                            <?php
                                            $stmt = $conn->prepare("SELECT * FROM color");
                                            $stmt->execute();
                                            $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                            foreach ($data as $value) {
                                            ?>
                                            <div class="btn-group dropend fs-5" style='width:100%;'>
                                                <input class="form-check-input me-1" type="checkbox" name="col"
                                                    id="exampleRadios1" onclick="ajax(1)" value="<?= $value["ID"] ?>">
                                                <p class="brand" style="font-size: 1vw;">
                                                    <?= $value["Nama"] ?>
                                                </p>
                                            </div>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <!-- and navbar kiri -->
                                <div class="kiri">
                                    <div class="container-fluid">
                                        <p class="display-4 fs-2 pt-3" style="text-align: center;">Wacthes New Series
                                        </p>
                                        <div class="src d-flex justify-content-center mb-3"
                                            style="width: 40%;float:right;">
                                            <input class="form-control" type="search" placeholder="Search..."
                                                aria-label="Search" name="tekscari" id="cari1" oninput="ajax(1)">
                                            <hr class="my-4">
                                            <button class="btn btn-outline-secondary" onclick="ajax(1)">Search</button>

                                        </div>

                                        <div id="con"></div>
                                    </div>
                                </div>

                </section>
                <hr class="my-4 mt-5">
                <section class="container-fluid d-flex justify-content-center isifot"
                    style="margin-top:2vw; width:100%;height:100%;" id="footer">
                    <div class="row ftr p-3" style="width: 100%; margin-bottom:3vw; height:17vw;">
                        <div class="over d-flex justify-content-center" style="margin-left: 5vw; margin-right:5vw">
                            <div class="col-3" style="margin: 0.3vw;">
                                <a class="nav-link text-white" href="loginadmin.php" style="display: flex;">
                                    <img src="asset/logo/logo.png" class="gambar" style="width: 3vw; height:3vw" alt=""
                                        srcset="">
                                    <h2 style="padding-top: 0.5vw; color:black;">
                                        WATCHES SCRT
                                    </h2>
                                </a>
                                <div class="des ms-5">
                                    <p style="font-size: 1vw; color:gray">Ngagel Jaya Tengah 73-77 <br>
                                        Surabaya, Indonesia</p>
                                </div>
                            </div>
                            <div class="col-2 pt-2 ms-4" style="margin: 0.3vw; font-size: 1.3vw; color:dark;">
                                <p>Useful Link</p>
                                <div class="des">
                                    <p style="font-size: 1vw; color:gray">New Series</p>
                                    <p style="font-size: 1vw; color:gray">Specials</p>
                                    <p style="font-size: 1vw; color:gray">Support</p>
                                </div>
                            </div>
                            <div class="col-2 ms-5" style="margin: 0.3vw;font-size: 1.3vw; color:dark;">
                                <p>Our Services</p>
                                <div class="des">
                                    <p style="font-size: 1vw; color:gray">Sell Watches</p>
                                    <p style="font-size: 1vw; color:gray">Save Transactions</p>
                                    <p style="font-size: 1vw; color:gray">New style</p>
                                </div>
                            </div>
                            <div class="col-4" style="margin: 0.3vw;font-size: 1.3vw; color:dark;">
                                <p>Subscribe our WATCHES SCRT</p>
                                <div class="des">
                                    <p style="font-size: 1vw; color:gray">Find your style and explore it all over</p>
                                    <form class="d-flex" role="search">
                                        <button class="btn btn-outline-secondary" type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <a href="contactus.php" style="text-decoration: none; text-align:center;">
                            <p style="padding-top: 1vw; color:black;">Support and Help</p>
                        </a>
                    </div>
                </section>
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
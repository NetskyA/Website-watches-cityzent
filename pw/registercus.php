<?php

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WACTCHES SCRT | Online Shop</title>
    <!--Framework Use-->
    <link rel="stylesheet" href="css/stylecus.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!--Framework Use-->
    <style>
    body,
    html {
        height: 100%;
        margin: 0;
    }

    .bg {
        background-image: url("asset/banner/logincus.jpg");
        height: 100%;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .kotak {
        position: absolute;
        /* bottom: 0; */
        background: rgb(0, 0, 0);
        background: rgba(0, 0, 0, 0.5);
        color: #f1f1f1;
        width: 85%;
        height: 90%;
        padding: 3vw;
        border-radius: 0.9vw;
        justify-content: center;
        margin-left: 7vw;
        margin-top: 2vw;
    }
    </style>
</head>

<body>

    <div class="bg">
        <div class="kotak d-flex justify-content-center">
            <form action="" method="POST">
                <h2 style="text-align: center;">
                    REGISTER WACTCHES SCRT
                </h2>
                <div class="isi d-flex justify-content-center mt-5">
                    <div class="kiri">
                        <div class="coverall">
                            <div class="jdl">
                                <h2>

                                </h2>
                            </div>
                            <div class="isiuser">
                                <label for="exampleInputEmail1" class="form-label" style="width: 25vw;">Full
                                    name</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="row g-3 align-items-center mt-1">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Password</label>
                                </div>
                                <div class="col-auto">
                                    <input type="password" id="inputPassword6" class="form-control"
                                        aria-describedby="passwordHelpInline">
                                </div>
                                <div class="col-auto">
                                    <span id="passwordHelpInline" class="form-text text-light">
                                        Must be 8-20 characters long.
                                    </span>
                                </div>
                            </div>
                            <div class="mb-3 mt-2">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cpass">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="isiuser">
                                <label for="exampleInputEmail1" class="form-label" style="width: 25vw;">Number
                                    Phone</label>
                                <input type="text" class="form-control" id="number" name="number"
                                    aria-describedby="emailHelp">
                            </div>



                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>

                        </div>
                    </div>
                    <div class="kanan mt-3" style="margin-left: 8vw;">
                        <div class="isinya">
                            <div class="pronvinsi">
                                <div class="dropdown d-flex">
                                    <!-- country -->
                                    <div class="col-auto me-4">
                                        <label for="inputPassword6" class="col-form-label">Country</label>
                                    </div>
                                    <button class="btn btn-light dropdown-toggle" style="width: 10vw;" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        Select
                                    </button>
                                    <ul class="dropdown-menu" style="width: 10vw;">
                                        <li><a class="dropdown-item" href="#">Indonesia</a></li>
                                        <li><a class="dropdown-item" href="#">Singapura</a></li>
                                        <li><a class="dropdown-item" href="#">Malaysia</a></li>
                                        <li><a class="dropdown-item" href="#">Brunei Darussalam</a></li>
                                        <li><a class="dropdown-item" href="#">Thailand</a></li>
                                    </ul>
                                    <!-- and country -->


                                    <!-- provinsi -->
                                    <div class="col-auto ms-5 me-4">
                                        <label for="inputPassword6" class="col-form-label">Province</label>
                                    </div>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <!-- and provinsi -->
                                </div>
                            </div>
                            <div class="city mt-3">
                                <div class="dropdown d-flex">
                                    <!-- distric -->
                                    <div class="col-auto me-4">
                                        <label for="inputPassword6" class="col-form-label">City</label>
                                    </div>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <!-- and district -->
                                    <!-- distric -->
                                    <div class="col-auto me-4 ms-5">
                                        <label for="inputPassword6" class="col-form-label">District</label>
                                    </div>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <!-- and district -->
                                </div>
                            </div>
                            <div class="street mt-3">
                                <div class="dropdown d-flex">
                                    <!-- distric -->
                                    <div class="col-auto me-4">
                                        <label for="inputPassword6" class="col-form-label">Street</label>
                                    </div>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <!-- and district -->
                                </div>

                            </div>
                            <div class="note mt-3">
                                <div class="dropdown d-flex">
                                    <!-- distric -->
                                    <div class="col-auto me-4">
                                        <label for="inputPassword6" class="col-form-label">Notes</label>
                                    </div>

                                    <!-- and district -->
                                    <!-- note -->
                                    <textarea name="note" style="border-radius: 0.5vw; width:100%; height:25vw;"
                                        id="note"></textarea>
                                    <!-- and note -->
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <div id="emailHelp" class="form-text text-light ms-2">We'll never share your data with anyone else.
                </div>
                <div class="button d-flex justify-content-end">

                    <a href="logincus.php">
                        <button style="width: 10vw;" type="button" class="btn btn-light">Register</button>
                    </a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
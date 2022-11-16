<?php

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WATCHES SCRT | Online Shop</title>
    <!--Framework Use-->
    <link rel="stylesheet" href="css/stylecus.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
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
        width: 46%;
        height: 60%;
        padding: 3vw;
        border-radius: 0.9vw;
        justify-content: center;
        margin-left: 27vw;
        margin-top: 7vw;
    }
    </style>
</head>

<body class="bd bg-dark">
    <div class="bg">
        <div class="isi">
            <div class="kotak d-flex justify-content-center">
                <form action="" method="POST">
                    <form>
                        <div class="coverall2">
                            <div class="jdl">
                                <h2>
                                    LOGIN WACTHES SCRT
                                </h2>
                            </div>
                            <div class="isiuser mt-5">
                                <label for="exampleInputEmail1" class="form-label" style="width: 25vw;">Username</label>
                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3 mt-2">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                                <div id="emailHelp" class="form-text text-light">We'll never share your password with
                                    anyone else.
                                </div>

                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>
                            <div class="button d-flex justify-content-center mb-5">
                                <a href="registercus.php">
                                    <button style="width: 10vw;" type="button"
                                        class="btn btn-secondary">Register</button>
                                </a>
                                <a href="#">
                                    <button style="width: 10vw;" type="button"
                                        class="btn btn-outline-light ms-3">Login</button>
                                </a>
                            </div>
                            <a href="index.php" class="back"
                                style="text-decoration: none; color: white; text-align:center;">
                                <h5>Cancel</h5>
                            </a>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $('body').bind('cut copy', function(e) {
            e.preventDefault();
        });
    });
    </script>
</body>

</html>
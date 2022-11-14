<?php


?>

<!doctype html>
<html lang="en">

<head>
    <!-- framework -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WACTCHES SCRT | Online Shop</title>
    <link rel="stylesheet" href="css/styl.css">
    <link rel="shortcut icon" href="asset/favicon/logoscrt.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
    <!-- and framework -->

</head>

<body class="bdy bg-dark">
    <table>
        <div class="coverall">
            <div class="bungkus ">
                <div class="kiri d-flex justify-content-center">
                    <div class="isikiri" data-aos="zoom-in" data-aos-anchor="#example-anchor" data-aos-offset="500"
                        data-aos-duration="1000">
                        <div class="jdl">
                            Welcome to Administrator
                        </div>
                        <div class="logo d-flex justify-content-center mb-2">
                            <img class="imgs" src="asset/logo/logo.png" alt="" srcset="">
                        </div>
                        <div class=" container d-flex justify-content-center mt-3">
                            <div class="fom" style="width: 50%;">
                                <form method="POST">
                                    <div class="mb-3">
                                        <label for="exampleInputUsername" class="form-label">Username</label>
                                        <input type="text" name="username" id="" placeholder="User Name"
                                            class="form-control" id="exampleInputUsername" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" id="exampleInputPassword1">
                                        <div id="emailHelp" class="form-text fs-6">We'll never share your password with
                                            anyone
                                            else.
                                        </div>
                                    </div>

                                    <div class="sub d-flex">
                                        <ul class="nav nav-pills nav-justified d-flex mb-3" id="ex1" role="tablist">
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link text-light" id="tab-register" style="width: 7vw;"
                                                    data-mdb-toggle="pill" href="index.php" role="tab"
                                                    aria-controls="pills-register" aria-selected="false">Cancel
                                                </a>
                                            </li>

                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link active bg-secondary" style="width: 7vw;"
                                                    id="tab-login" data-mdb-toggle="pill" href="admin.php" role="tab"
                                                    aria-controls="pills-login" aria-selected="true">Login
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </table>
    <script>
    AOS.init();
    </script>
</body>

</html>
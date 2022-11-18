<?php
require_once("connector.php");
if (isset($_POST["regist"])) {
    $address = "";
    $username = strip_tags($_POST["username"]);
    $pass = strip_tags($_POST["pass"]);
    $copass = strip_tags($_POST["copass"]);
    $email =
        strip_tags($_POST["email"]);
    $phone =
        strip_tags($_POST["number"]);
    $negara =
        strip_tags($_POST["negara"]);
    $provinsi =
        strip_tags($_POST["province"]);
    $district =
        strip_tags($_POST["district"]);
    $city =
        strip_tags($_POST["city"]);
    $street =
        strip_tags($_POST["street"]);
    $note =
        strip_tags($_POST["note"]);
    $address = $street . " " . $district . " " . $city . " " . $provinsi . " " . $negara;
    if (
        $username == "" || $pass == "" || $copass == "" || $email == "" || $phone == "" || $negara == "" ||
        $provinsi == "" || $district == "" || $city == "" || $street == "" || $note == ""
    ) {
        echo "<script>alert('Ada Field Kosong')</script>";
    } else {
        if ($pass == $copass) {
            $panjang = strlen($pass);
            if ($panjang >= 8 && $panjang <= 20) {
                $stmt = $conn->prepare("SELECT * FROM customer");
                $stmt->execute();
                $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                $valid = true;
                foreach ($data as $key => $value) {
                    if ($value["Email"] == $email) {
                        $valid = false;
                    }
                }
                if ($valid) {
                    $stmt = $conn->prepare("INSERT INTO customer(Nama_Lengkap, Pass, Email, Alamat_Lengkap, No_Telp) VALUES(?,?,?,?,?)");
                    $stmt->bind_param("sssss", $username, $pass, $email, $address, $phone);
                    $result = $stmt->execute();
                    header("Location: logincus.php");
                } else {
                    echo "<script>alert('Email Sudah Terdaftar')</script>";
                }
            } else {
                echo "<script>alert('Panjang Password Invalid')</script>";
            }
        } else {
            echo "<script>alert('Password dan Confirm Password Salah')</script>";
        }
    }
}
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
        background-image: url("asset/banner/banner.jpg");
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

<body class="bd bg-dark">

    <div class="bg">
        <div class="kotak d-flex justify-content-center">
            <form action="" method="POST">
                <h1 style="text-align: center;" onmousedown="return false" onselectstart="return false">
                    REGISTER WACTCHES SCRT
                </h1>
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
                                <input type="text" name="username" class="form-control" id="name"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="row g-3 align-items-center mt-1">
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Password</label>
                                </div>
                                <div class="col-auto">
                                    <input type="password" id="inputPassword6" class="form-control" name="pass"
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
                                <input type="password" class="form-control" id="cpass" name="copass">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="isiuser">
                                <label class="form-label" style="width: 25vw;">Number
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
                                    <select name="negara" id="drop" style="width:10vw;">
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Singapura">Singapura</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Brunei Darusallam">Brunei Darussalam</option>
                                        <option value="Thailand">Thailand</option>
                                    </select>
                                    <!-- and country -->


                                    <!-- provinsi -->
                                    <div class="col-auto ms-5 me-4">
                                        <label for="inputPassword6" class="col-form-label">Province</label>
                                    </div>
                                    <input type="text" name="province" class="form-control" id="exampleInputEmail1"
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
                                    <input type="text" name="city" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp">
                                    <!-- and district -->
                                    <!-- distric -->
                                    <div class="col-auto me-4 ms-5">
                                        <label for="inputPassword6" class="col-form-label">District</label>
                                    </div>
                                    <input type="text" name="district" class="form-control" id="exampleInputEmail1"
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
                                    <input type="text" name="street" class="form-control" id="exampleInputEmail1"
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
                <div class="akhir d-flex justify-content-center" style="float: right;">
                    <a href="logincus.php" class="back2"
                        style="text-decoration: none; color: white; text-align:center;">
                        <h5>Cancel</h5>
                    </a>
                    <div class="button d-flex justify-content-end">
                        <input type="submit" value="Register" style="width: 10vw;" class="btn btn-light" name="regist">
                    </div>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
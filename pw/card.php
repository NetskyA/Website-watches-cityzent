<?php
require_once("connector.php");
if (isset($_REQUEST["barang"])) {
    $data = $_REQUEST["barang"];
    $data = json_decode($data, true);
    $_SESSION["temp"] = $data;
    $_SESSION["gbr"] =  $_REQUEST["gbr"];
    if($_SESSION["temp"]["Stok"]==0){
        $_SESSION["total"]="Barang Habis";
    }else{
        $_SESSION["total"]=0;
    }
}

if(!isset($_SESSION["cart"])){
    $_SESSION["cart"]=[];
}

$result = mysqli_query($conn, "SELECT Nama FROM brand WHERE ID='".$_SESSION['temp']['ID_Brand']."'");
$brand = mysqli_fetch_assoc($result);
$result = mysqli_query($conn, "SELECT Nama FROM color WHERE ID='".$_SESSION['temp']['ID_Warna']."'");
$color = mysqli_fetch_assoc($result);
$result = mysqli_query($conn, "SELECT Nama FROM display WHERE ID='".$_SESSION['temp']['ID_Display']."'");
$display = mysqli_fetch_assoc($result);
$result = mysqli_query($conn, "SELECT Nama FROM gender WHERE ID='".$_SESSION['temp']['ID_Gender']."'");
$gender = mysqli_fetch_assoc($result);
$result = mysqli_query($conn, "SELECT Nama FROM resistant WHERE ID='".$_SESSION['temp']['ID_Resistant']."'");
$resistant = mysqli_fetch_assoc($result);

if(isset($_POST["plus"])&&($_SESSION["total"]!="Barang Habis")){
    if(!($_SESSION["total"]+1>$_SESSION["temp"]["Stok"])){
        $_SESSION["total"]=$_SESSION["total"]+1;
    }
}

if(isset($_POST["minus"])&&($_SESSION["total"]!="Barang Habis")){
    if(!($_SESSION["total"]-1<0)){
        $_SESSION["total"]=$_SESSION["total"]-1;
    }
}
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <script>
    $(document).ready(function() {
        // panel hide
        $("#panelss").hide();
        // and panel hide

        // action
        $("#tglss").click(function() {
            $("#tglss").text("Hide");
            $("#panelss").toggle(1500);
            $("#tglss").click(function() {
                $("#tglss").text("Show More");
            });
        });
        // and action
    });
    </script>
    <!--Framework Use-->
</head>

<body>
    <div class="coverall">
        <div class="cover">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fs-3" id="navbarNavDropdown">
                        <ul class="navbar-nav fs-5">
                            <li class="nav-item ms-4">
                                <a class="nav-link text-dark" href="index.php"><svg xmlns="http://www.w3.org/2000/svg"
                                        width="30" height="35" fill="currentColor" class="bi bi-arrow-left-circle"
                                        viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg></a>
                            </li>
                            <li class="nav-item dropdown ms-4">
                                <a class="nav-link text-dark" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <?= $_SESSION["temp"]["Nama_Barang"] ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- and nav -->
            <!-- content -->
            <div class="content d-flex justify-content-center">
                <div class="isic mt-5 rounded">
                    <div class="view d-flex mt-5">
                        <div class="kanan2">
                            <?php
                        echo '<img src = "data:image/png;base64,' . $_SESSION['gbr'] . '"/>';
                        ?>
                        </div>
                        <div class="kiri2 mt-4 ms-5" style="padding-left: 3vw; padding-top:2vw">
                            <div class="jdl">
                                <?= $_SESSION["temp"]["Nama_Barang"] ?>
                                <br>
                                <span class="jdl2 fs-5">
                                    NEW
                                </span>
                            </div>
                            <div class="des fs-6" style="width: 40vw;">
                            <?= $_SESSION["temp"]["Deskripsi"] ?>

                                <br>
                            </div>
                            <div class="price mt-2">
                                <h4>Price</h4>
                                <h5><span>Rp. </span><?= $_SESSION["temp"]["Harga"] ?></h5>
                                <form action="" method="post">
                                    <div class="jumlah d-flex mt-5">
                                        <input type="submit" value="+" style="width: 5%;" class="btn btn-secondary" name="plus">
                                        <input type="submit" value="-" style="width: 5%;margin-left:0.5vw" class="btn btn-secondary" name="minus">
                                    </div>
                                </form>
                                <h5 style="padding-top: 1vw;">
                                    <p>Total : <?=$_SESSION["total"]?></p>
                                </h5>
                                <div class="showmore">
                                    <p class="collec" id="tglss" style="font-size: 1.2vw; text-align:center;">
                                        Show more
                                    </p>
                                    <div id="panelss" style="width: 100%;">
                                        <div class="btn-group dropend fs-5">
                                            - Type: <?=$display["Nama"]?>
                                            <br>
                                            - Gender: <?=$gender["Nama"]?><br>
                                            - Clock dimensions: 48 mm<br>
                                            - Length of clock: 250 mm<br>
                                            - Width of clock: 22 mm<br>
                                            - Thickness of clock: 15 mm<br>
                                            - Material strap: PU silicone strap<br>
                                            - Material case: Plastic case<br>
                                            - Glass material: Resin<br>
                                            - Water resistance : <?=$resistant["Nama"]?><br>
                                            - 1 Year Warranty<br>
                                            - Feature : Date, Moon, Night Light, Waterproof And Countdown<br>
                                        </div>
                                    </div>
                                </div>
                                <hr class=" my-4 mt-4" style="width: 100%;">
                                            <form action="" method="post">
                                                <input type="submit" name="checkout" value="Check Out" class="btn btn-outline-secondary d-grid col-4 mx-auto mt-3">
                                            </form>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- and content -->
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
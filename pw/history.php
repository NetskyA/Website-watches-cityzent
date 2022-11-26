<?php
require_once("connector.php");
$dat = "";
if (isset($_POST["tgl"])) {
    $dat = $_POST["dates"];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WATCHES SCRT | Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--Framework Use-->
    <link rel="stylesheet" href="css/history.css">
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

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-SoATxc1jvSH64Jjh">
    </script>
</head>

<body onload="load()">
    <div class="coverall">
        <div class="cover">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg bg-light" onmousedown='return false;' onselectstart='return false;'>
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fs-3" id="navbarNavDropdown">
                        <ul class="navbar-nav fs-5">
                            <img src="asset/logo/logo.png" class="logo" alt="" srcset="">

                            <li class="nav-item dropdown me-4 pt-2" style="display: flex;">
                                <p style="width:11.5vw; font-size:1.5vw; font-weight:bold;">WATCHES SCRT</p>
                                <div class="nth1">
                                </div>
                            </li>
                            <a href="index.php" style="text-decoration:none">
                                <p class="home text-dark"
                                    style="padding-top: 0.5vw;font-size:1.5vw; text-decoration: none;">History</p>
                            </a>
                            <a href="index.php" style="text-decoration:none; padding-left:1.2vw;">
                                <p class="home text-dark"
                                    style="padding-top: 0.5vw;font-size:1.5vw; text-decoration: none;">Home</p>
                            </a>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- and nav -->
            <!-- content -->
            <div class="content d-flex justify-content-center">
                <div class="kiri3" style="height: auto;">
                    <div class="container-fluid">
                        <div class="judulw" onmousedown='return false;' onselectstart='return false;'>
                            <p class="display-4 fs-2 pt-3" style="text-align: center;">History Transaction</p>
                        </div>
                        <div class="sort">
                            <p class="isi3" onmousedown='return false;' onselectstart='return false;'>Search Date</p>
                            <div class="isi2">
                                <form action="" method="POST">
                                    <input style="border-radius:0.3vw; height:auto; width:8vw; border: 1px gray solid"
                                        type="date" name="dates" />
                                    <input type="submit" name="tgl"
                                        style="border-radius:0.3vw; height: auto; border: 1px gray solid;"
                                        value="Search">
                                </form>
                            </div>
                        </div>
                        <hr class="my-4" style="border: 1px solid gray">
                        <?php
                        $id = $_SESSION["logged"];
                        if ($dat == "") {
                            $stmt = $conn->prepare("SELECT d.ID as 'Invoice',c.Nama_Lengkap as 'Nama',b.Nama_Barang as 'Barang',b.Gambar as 'Gambar',d.Jumlah as 'Jumlah',b.Harga as 'Harga',h.Waktu_Transaksi as 'Waktu'  from h_trans h,d_trans d, barang b,customer c where h.ID=d.ID and d.ID_Barang=b.ID and h.ID_Customer=c.ID and h.ID_Customer=$id");
                        } else {
                            $stmt = $conn->prepare("SELECT d.ID as 'Invoice',c.Nama_Lengkap as 'Nama',b.Nama_Barang as 'Barang',b.Gambar as 'Gambar',d.Jumlah as 'Jumlah',b.Harga as 'Harga',h.Waktu_Transaksi as 'Waktu'  from h_trans h,d_trans d, barang b,customer c where h.ID=d.ID and d.ID_Barang=b.ID and h.ID_Customer=c.ID and h.ID_Customer=$id and h.Waktu_Transaksi>='" . $dat . "'");
                        }
                        $stmt->execute();
                        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                        foreach ($data as $key => $v) {
                            $subtotal = $v["Jumlah"] * $v["Harga"];
                        ?>
                        <div class="isi" onmousedown='return false;' onselectstart='return false;'>
                            <div class="kiri">
                                <div class="gmbr">
                                    <img src="<?= $v["Gambar"] ?>" class="gmbr1" alt="">
                                </div>
                                <div class="nth2">
                                </div>
                            </div>
                            <div class="tengah">
                                <div class="stts">
                                    <p>Status : <span class="sc text-success">success</span></p>
                                </div>
                                <div class="stts1">
                                    <p>Invoice number : <?= $v["Invoice"] ?></p>
                                    <p>Name Customer : <?= $v["Nama"] ?></p>
                                    <p>Product Name : <?= $v["Barang"] ?></p>
                                    <p>Total Product : <?= $v["Jumlah"] ?></p>
                                    <p>Buy Date : <?= $v["Waktu"] ?></p>
                                    <p>Subtotal : Rp <?= number_format($subtotal, 2, ',', '.') ?></p>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" style="border: 1px solid gray">
                        <?php
                        }
                        if (count($data) == 0) {
                            echo "<div class='d-flex justify-content-center align-items-center'style='width:100%;height:40vw;font-size: 5vw;'>";
                            echo "History Not Found";
                            echo "</div>";
                        }
                        ?>

                        <!-- <hr class="my-4" style="border: 1px solid gray"> -->

                        <!-- <div class="alamat" style="width: 100%; height:auto;">

                        </div> -->
                    </div>

                </div>
            </div>
            <section class="container-fluid d-flex justify-content-center isifot" style="margin-top:2vw; width:100%;height:100%;     overflow: hidden;
" id="footer">
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
                                <p style="font-size: 0.7vw; color:gray">Payment By Midtrans</p>
                                <p style="font-size: 0.6vw; color:gray">Copyright © 2022 WATCHES SCRT. All Rights
                                    Reserved.</p>

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
            <!-- and content -->
        </div>
    </div>
    <script>
    $(document).ready(function() {
        $("body").on("contextmenu", function(e) {
            return false;
        });
    });
    </script>
</body>

</html>
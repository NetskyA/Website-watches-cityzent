<?php
require_once("connector.php");
$test = "";
if (isset($_REQUEST["berhasil"])) {
    $id = $_SESSION["orderid"];
    $idcus = $_SESSION["logged"];
    $waktu = date("Y-m-d");
    $listbarang = $_SESSION["cart"];
    $subtotalall = 0;
    $listbarang2=[];
    $subtotalall = 0;
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Stok as 'Stok', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID'] . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        array_push($listbarang2,$data[0]["Nama_Barang"]);
        $subtotal = $value["jml"] * $data[0]["Harga"];
        $subtotalall += $subtotal;
    }
    $stmt = $conn->prepare("INSERT INTO h_trans(ID, ID_Customer, Total, Waktu_Transaksi) VALUES(?,?,?,?)");
    $stmt->bind_param("ssss", $id, $idcus, $subtotal, $waktu);
    $result = $stmt->execute();
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Stok as 'Stok', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID'] . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        $subtotal = $value["jml"] * $data[0]["Harga"];
        $subtotalall += $subtotal;
        $jml = $value["jml"];
        $idbar = $value['ID'];
        $hasilstok = $data[0]["Harga"] - $value["jml"];
        $stmt = $conn->prepare("UPDATE barang SET stok = ? WHERE ID = ?");
        $stmt->bind_param("ii", $hasilstok, $idbar);
        $result = $stmt->execute();
        $stmt = $conn->prepare("INSERT INTO d_trans(ID, ID_Barang, Jumlah) VALUES(?,?,?)");
        $stmt->bind_param("iii", $id, $idbar, $jml);
        $result = $stmt->execute();
    }
    unset($_SESSION["cart"]);
    $stmt = $conn->prepare("SELECT * FROM customer where customer.ID = '" . $idcus . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $nama = $data[0]["Nama_Lengkap"];
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WATCHES SCRT | Online Shop</title>
    <!--Framework Use-->
    <link rel="stylesheet" href="css/makasi.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!--Framework Use-->

</head>

<body class="bdy">
    <div class="coverall d-flex justify-content-center">
        <div class="isinya">
            <div class="atas d-flex">
                <img src="asset/logo/logo.png" class="logo2" alt="" srcset="">
                <p style="font-size:0.8vw; padding-top:0.5vw;">WATCHES SCRT</p>
            </div>
            <div class="jdl">
                <p>Appreciation to you</p>
            </div>
            <img src="asset/animate/test.gif" class="logo" alt="Computer man"
                style="width:8.2vw;height:6vw;justify-content:center;">
            <div class="sks  d-flex justify-content-center">
                <p style="text-align: center; width:28vw; font-size:0.8vw;">For those of you who care about style, the
                    purchase of this
                    watch
                    is very
                    helpful to support a very
                    fashionable look.</p>
            </div>
            <hr class="my-4 mt-2" style="width: 100%;">

            <div class="isi justify-content-center mt-2">
                <div class="kusus" style="display: flex; font-size:0.8vw;">
                    <p>Invoice number : <?=$id?></p>
                    <p style="padding-left:28vw;">Status : Gold</p>
                </div>
                <p style="font-size:0.8vw;">Name customer : <?=$nama?></p>
                <p style="font-size:0.8vw;">Product name : </p>
                <?php
                    foreach ($listbarang2 as $key => $value) {
                        echo '<p style="font-size:0.8vw;">'.$value.'</p>';
                    }
                ?>
                <p style="font-size:0.8vw;">Total price : Rp. <?=$subtotalall?></p>
            </div>
            <hr class="my-4 mt-2">
            <div class="bawah d-flex justify-content-center">
                <a href="index.php">
                    <button type="button" style="width: 8vw; font-size:0.8vw;"
                        class="btn btn-outline-secondary me-3">Close</button>
                </a>

            </div>
            <div class="print" style="margin-top: 2vw;">
                <button style="font-size:0.8vw;" class="prn text-secondary" onclick="window.print()">Print this
                    page</button>
                <a href="contactus.php" style="padding-left: 23vw;">
                    <button type="button" style="width: 8vw; font-size:0.8vw;" class="btn text-secondary">Help</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
<?php
require_once("connector.php");
$test = "";
if (isset($_REQUEST["berhasil"])) {
    $id = $_SESSION["orderid"];
    $idcus = $_SESSION["logged"];
    $waktu = date("Y-m-d");
    $listbarang = $_SESSION["cart"];
    $subtotalall = 0;
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Stok as 'Stok', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID'] . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
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
        $stmt = $conn->prepare("UPDATE barang SET stok=? WHERE ID = ?");
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
    $test = $data[0]["Nama_Lengkap"];
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

<body>
    <div class="coverall d-flex justify-content-center">
        <div class="isinya">
            <div class="jdl">
                <p>Thank you for purchasing goods in our store.</p>
            </div>
            <div class="logo d-flex justify-content-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="360" height="360" fill="currentColor"
                    class="bi bi-check-all text-success" viewBox="0 0 16 16">
                    <path
                        d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z" />
                </svg>
                <!-- <div name="name"><?= $test ?></div> -->
            </div>
            <div class="bawah d-flex justify-content-center">

                <a href="index.php">
                    <button type="button" style="width: 8vw;" class="btn btn-outline-secondary me-3">Close</button>
                </a>
                <a href="contactus.php">
                    <button type="button" style="width: 8vw;" class="btn btn-outline-secondary">Help</button>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
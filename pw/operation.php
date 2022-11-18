<?php
require_once("connector.php");
$temp = $_REQUEST["operation2"];
$listbarang = $_SESSION["cart"];
if ($temp == "plus") {
    $dts = $_REQUEST["idx"];
    $temp2 = 0;
    $jmldatabase = 0;
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT * from barang ba WHERE ba.ID='" . $dts . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        if ($dts == $value["ID"]) {
            $temp2 = $value["jml"];
            $jmldatabase = $data[0]["Stok"];
        }
    }
    if (!($temp2 + 1 > $jmldatabase)) {
        foreach ($_SESSION["cart"] as $index => $val) {
            if ($dts == $val["ID"]) {
                $_SESSION["cart"][$index]['jml'] = $_SESSION["cart"][$index]['jml'] + 1;
            }
        }
    }
} else if ($temp == "min") {
    $dts = $_REQUEST["idx"];
    $temp2 = 0;
    $jmldatabase = 0;
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT * from barang ba WHERE ba.ID='" . $dts . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        if ($dts == $value["ID"]) {
            $temp2 = $value["jml"];
            $jmldatabase = $data[0]["Stok"];
        }
    }
    if ($temp2 - 1 <= 0) {
        foreach ($_SESSION["cart"] as $index => $val) {
            if ($dts == $val["ID"]) {
                unset($_SESSION["cart"][$index]);
            }
        }
    } else {
        foreach ($_SESSION["cart"] as $index => $val) {
            if ($dts == $val["ID"]) {
                $_SESSION["cart"][$index]['jml'] = $_SESSION["cart"][$index]['jml'] - 1;
            }
        }
    }
} else if ($temp == "delete") {
    $deletebarang = $_REQUEST["idx"];
    foreach ($_SESSION["cart"] as $index => $val) {
        if ($deletebarang == $val["ID"]) {
            unset($_SESSION["cart"][$index]);
        }
    }
}
$listbarang = $_SESSION["cart"];
$total = 0;
$qtyall = 0;
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Gambar as 'Gambar', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $subtotal = $value["jml"] * $data[0]["Harga"];
    $total += $subtotal;
    $qtyall += $value["jml"];
}

?>
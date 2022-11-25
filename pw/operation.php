<?php
require_once("connector.php");
$temp = $_REQUEST["operation2"];
$idus = $_REQUEST["idus"];
$stmt = $conn->prepare("SELECT * FROM cart where ID_User='" . $idus."'");
$stmt->execute();
$listbarang = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$dts = $_REQUEST["idx"];
if ($temp == "plus") {
    $temp2 = 0;
    $jmldatabase = 0;
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT * from barang ba WHERE ba.ID='" . $dts . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        if ($dts == $value["ID_Barang"] && $idus ==  $value["ID_User"]) {
            $temp2 = $value["Jumlah"];
            $jmldatabase = $data[0]["Stok"];
        }
    }
    if (!($temp2 + 1 > $jmldatabase)) {
        foreach ($listbarang as $index => $val) {
            if ($dts == $val["ID_Barang"] && $idus == $val["ID_User"]) {
                $tot = $val["Jumlah"]+1;
                $stmt = $conn->prepare("UPDATE cart SET Jumlah = ? WHERE ID_Barang = $dts and ID_User= $idus");
                $stmt->bind_param("i", $tot);
                $result = $stmt->execute();
            }
        }
    }
} else if ($temp == "min") {
    $temp2 = 0;
    $jmldatabase = 0;
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT * from barang ba WHERE ba.ID='" . $dts . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        if ($dts == $value["ID_Barang"]) {
            $temp2 = $value["Jumlah"];
            $jmldatabase = $data[0]["Stok"];
        }
    }
    if ($temp2 - 1 <= 0) {
        foreach ($listbarang as $index => $val) {
            if ($dts == $val["ID_Barang"]&& $idus == $val["ID_User"]) {
                $result = $conn->query("DELETE FROM cart WHERE ID_Barang = $dts and ID_User = $idus");
            }
        }
    } else {
        foreach ($listbarang as $index => $val) {
            if ($dts == $val["ID_Barang"] && $idus == $val["ID_User"]) {
                $tot = $val["Jumlah"] - 1;
                $stmt = $conn->prepare("UPDATE cart SET Jumlah = ? WHERE ID_Barang = $dts and ID_User= $idus");
                $stmt->bind_param("i", $tot);
                $result = $stmt->execute();
            }
        }
    }
} else if ($temp == "delete") {
    foreach ($listbarang as $index => $val) {
        if ($dts == $val["ID_Barang"] && $idus == $val["ID_User"]) {
            $result = $conn->query("DELETE FROM cart WHERE ID_Barang = $dts and ID_User = $idus");
        }
    }
}
?>
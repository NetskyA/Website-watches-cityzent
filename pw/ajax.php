<?php
require_once("connector.php");
$text = $_REQUEST["search"];
$halaman = $_REQUEST["idx"];
$query = $_REQUEST["query"];
$batas = 8;
// $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
if ($halaman == 1) {
    $awal = 1;
} else {
    $awal = (($halaman - 1) * 8) + 1;
}

$akhir = $awal + ($batas - 1);
if ($halaman - 1 > 0) {
    $previous = $halaman - 1;
} else {
    $previous = 1;
}
$next = $halaman + 1;
if ($query == "") {
    $stmt = $conn->prepare("SELECT * FROM barang where Nama_Barang like '%" . $text . "%'");
    $stmt2 = $conn->prepare("select * from barang where Nama_Barang like '%" . $text . "%' limit $halaman_awal, $batas");
} else {
    $stmt = $conn->prepare("SELECT * FROM barang where " . $query . " and Nama_Barang like '%" . $text . "%'");
    $stmt2 = $conn->prepare("SELECT * FROM barang where " . $query . "and Nama_Barang like '%" . $text . "%' limit $halaman_awal, $batas");
}
$stmt->execute();
$data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$jumlah_data = count($data);
$total_halaman = ceil($jumlah_data / $batas);
$stmt2->execute();
$data2 = $stmt2->get_result()->fetch_all(MYSQLI_ASSOC);
$nomor = $halaman_awal + 1;
$idx = 0;
if ($akhir > $jumlah_data) {
    $akhir = $jumlah_data;
}


if ($jumlah_data == 0) {
    $awal = 0;
    $halaman = 0;
}
echo "<div style='width:100%;padding-top:1vw;font-size: 1.4vw;font-weight:bold'>" . $awal . "-" . $akhir . " of " . $jumlah_data . " Found</div>";
if ($jumlah_data == 0) {
    echo "<div class='d-flex justify-content-center align-items-center'style='width:100%;height:40vw;font-size: 5vw;'>";
    echo "Product Not Found";
    echo "</div>";
}

echo "<table class='table' style='margin: 0vw;padding:0vw;width:100%'>";
echo "<colgroup>";
echo "<col span='1' style='width: 25%;'>";
echo "<col span='1' style='width: 25%;'>";
echo "<col span='1' style='width: 25%;'>";
echo "<col span='1' style='width: 25%;'>";
echo "</colgroup>";
echo "<tbody style='margin: 0vw;padding:0vw;'>";
foreach ($data2 as $d) {
    if ($idx == 0) {

        echo "<tr style='margin: 0vw;padding:0vw;'>";
    }
    $data = array(
        "ID" => $d["ID"],
        "ID_Display" => $d["ID_Display"],
        "ID_Brand" => $d["ID_Brand"],
        "ID_Warna" => $d["ID_Warna"],
        "ID_Gender" => $d["ID_Gender"],
        "ID_Resistant" => $d["ID_Resistant"],
        "Nama_Barang" => $d["Nama_Barang"],
        "Stok" => $d["Stok"],
        "Harga" => $d["Harga"],
        "Deskripsi" => $d["Deskripsi"]
    );
    echo "<td style='width:25% margin: 0vw;padding:0vw;'>";
    echo "<div class='card' style='min-height: 20vw;height: 20vw;font-size: 1.2vw; padding-top:z1vw; font-weight: bold; text-align: center; margin:0.3vw;
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width:14vw;margin:0.5vw;'>";

    echo $d["Nama_Barang"];
    echo "<img class='card-img-top' style='margin-top:1vw' src = 'data:image/png;base64," . base64_encode($d['Gambar']) . "'/>";
    echo "<div class='card-body' style='display: none; padding-top:4vw;>";
    echo "<h5 class='card-title fs-5' style=''>";
    echo "</h5>";
    echo "</div>";
    echo "<form action='card.php' method='post'>";
    echo "<input type='hidden' name='gbr' value='" . base64_encode($d["Gambar"]) . "'>";
    echo "<button type='submit' name='barang' value='" . json_encode($data) . "' class='dtl btn-outline-secondary btn-sm' style='width: 6vw; margin-top:0.9vw; border-radius: 6px; height:2vw;font-size:1.2vw'>Details</button>";
    echo "</form>";
    // echo "<a href='card.php?barang=" . json_encode($data) ."&gbr=".$gbr."' class='opo d-flex justify-content-center' style='text-decoration: none;'>";
    // echo "<button type='button' class='dtl btn-outline-secondary btn-sm d-flex align-items-center justify-content-center'
    // style='width: 6vw; margin-top:0.9vw; border-radius: 6px; height:2vw;font-size:1.2vw'>Details</button>";
    // echo "</a>";
    echo "</div>";
    echo "</td>";
    $idx++;
    if ($idx == 4) {
        $idx = 0;
        echo "</tr>";
    }
}
echo "<td></td>";
if ($idx != 0) {
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "<nav>";
echo "<ul class='pagination justify-content-center'>";
echo "<li class='page-item'>";
if ($halaman > 1) {
    echo "<button class='page-link animasi' onclick='ajax(" . $previous . ")'>Previous</button>";
}
echo "</li>";
echo "<li class='page-item'><a class='page-link'>" . $halaman . "/" . $total_halaman . "</a>";
echo "</li>";
echo "<li class='page-item'>";
if ($halaman < $total_halaman) {
    echo "<a class='page-link animasi' onclick='ajax(" . $next . ")'>Next</a>";
}
echo "</li>";
echo "</ul>";
echo "</nav>";
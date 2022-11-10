<?php
require_once("connector.php");
$text = $_REQUEST["search"];
$halaman = $_REQUEST["idx"];
echo "<script>alert($halaman)</script>";
echo "<table class='table' style='margin: 0vw;padding:0vw;width:100%'>";
echo "<tbody style='margin: 0vw;padding:0vw;'>";
$batas = 8;
// $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
if ($halaman - 1 > 0) {
    $previous = $halaman - 1;
} else {
    $previous = 1;
}
$next = $halaman + 1;
if (isset($text) != "") {
    $stmt = $conn->prepare("SELECT * FROM barang where nama like '%" . $text . "%'");
    $stmt2 = $conn->prepare("select * from barang where nama like '%" . $text . "%' limit $halaman_awal, $batas");
} else {
    $stmt = $conn->prepare("SELECT * FROM barang");
    $stmt2 = $conn->prepare("select * from barang limit $halaman_awal, $batas");
}
$stmt->execute();
$data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$jumlah_data = count($data);
$total_halaman = ceil($jumlah_data / $batas);
$stmt2->execute();
$data2 = $stmt2->get_result()->fetch_all(MYSQLI_ASSOC);
$nomor = $halaman_awal + 1;
$idx = 0;
foreach ($data2 as $d) {
    if ($idx == 0) {

        echo "<tr style='margin: 0vw;padding:0vw;'>";
    }

    echo "<td style='width:100% margin: 0vw;padding:0vw;'>";
    echo "<div class='card' style='min-height: 20vw;height: 20vw;font-size: 16px; padding-top:1vw; font-weight: bold; text-align: center; margin:0.3vw;box-shadow: inset 0 -3em 2em rgba(0, 0, 0, 0.1), 0 0 0 1px rgb(221, 221, 221), 0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
    font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width:14vw;margin:0.5vw;'>";

    echo $d["Nama"];
    echo "<img src='" . $d['Gambar'] . "'class='card-img-top' style:'margin-top:1vw; width:5vw;height:5vw'>";
    echo "<div class='card-body' style='display: none; padding-top:4vw;>";
    echo "<h5 class='card-title fs-5' style=''>";
    echo "</h5>";
    echo "</div>";
    echo "<a href='card.php?barang=" . json_encode($d) . "' class='opo d-flex justify-content-center' style='text-decoration: none;'>";
    echo "<button type='button' class='dtl btn-outline-secondary btn-sm d-flex align-items-center justify-content-center'
    style='width: 6vw; margin-top:0.9vw; border-radius: 6px; height:2vw;font-size:1.2vw'>Details</button>";
    echo "</a>";
    echo "</div>";
    echo "</td>";
    $idx++;
    if ($idx == 4) {
        $idx = 0;
        echo "</tr>";
    }
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
echo "<li class='page-item'><a class='page-link'>" . $halaman . "</a>";
echo "</li>";
echo "<li class='page-item'>";
if ($halaman < $total_halaman) {
    echo "<a class='page-link animasi' onclick='ajax(" . $next . ")'>Next</a>";
}
echo "</li>";
echo "</ul>";
echo "</nav>";
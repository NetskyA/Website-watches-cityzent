<?php
require_once("connector.php");
$text = $_REQUEST["search"];
$halaman = $_REQUEST["idx"];
echo "<script>alert($halaman)</script>";
echo "<table class='table' border='1' style='margin: 0vw;padding:0vw;width:100%'>";
echo "<tbody style='margin: 0vw;padding:0vw;'>";
    $batas = 8;
    // $halaman = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
    $halaman_awal = ($halaman > 1) ? ($halaman * $batas) - $batas : 0;
    if($halaman-1>0){
        $previous = $halaman - 1;
    }else{
        $previous=1;
    }
    $next = $halaman + 1;
    if(isset($text)!=""){
        $stmt = $conn->prepare("SELECT * FROM barang where nama like '%".$text."%'");
        $stmt2 = $conn->prepare("select * from barang where nama like '%".$text."%' limit $halaman_awal, $batas");
    }else{
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
            echo "<div class='card' style='min-height: 25vw;height: 25vw; width:12vw;margin:0.5vw;'>";
                    echo "<img src='". $d['Gambar'] . "'class='card-img-top' style:'margin-top:0.1vw;width:5vw;height:5vw'>";
                    echo "<div class='card-body'>";
                     echo "<h5 class='card-title fs-5' style=''>";
                        echo $d["Nama"];
                    echo "</h5>";
                echo "</div>";
                echo "<hr width:80%>";
                echo "<a href='card.php?barang=".json_encode($d)."' class='opo d-flex justify-content-center' style='text-decoration: none;'>";
                echo "<button type='button' class='dtl btn btn-secondary btn-sm d-flex align-items-center justify-content-center' style='width: 6vw;height:3vw;font-size:1.2vw'>Details</button>";
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
    if($halaman > 1){
        echo "<button class='page-link animasi' onclick='ajax(".$previous.")'>Previous</button>";
    }
    echo "</li>";
    echo "<li class='page-item'><a class='page-link'>". $halaman."</a>";
    echo "</li>";
    echo "<li class='page-item'>";
    if ($halaman < $total_halaman){
        echo "<a class='page-link animasi' onclick='ajax(".$next.")'>Next</a>";
    }
    echo "</li>";
echo "</ul>";
echo "</nav>";
?>
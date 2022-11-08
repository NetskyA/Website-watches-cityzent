<?php
require_once("connector.php");
$text = $_REQUEST["search"];
$halaman = $_REQUEST["idx"];
echo "<script>alert($halaman)</script>";
echo "<table class='table' style='margin: 0vw;padding:0vw;'>";
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

        echo "<td>";
            echo "<div class='card h-90' style='height: 17vw; width:10vw;'>";
                    echo "<img src='https://www.casio.com" . $d['Gambar'] . "'class='card-img-top'>";
                    echo "<div class='card-body'>";
                     echo "<h5 class='card-title fs-6'>";
                        echo $d["Nama"];
                    echo "</h5>";
                echo "</div>";
                echo "<a href='card.php' class='opo d-flex justify-content-center mb-2' style='text-decoration: none;'>";
                echo "<button type='button' class='dtl btn btn-secondary btn-sm' style='width: 70%;'>Details</button>";
                echo "</a>";
                echo "<div class='card-footer'>";
                echo "<small class='text-muted pb-3'>Last updated 3
                        mins
                        ago</small>";
                echo "</div>";
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
        echo "<button class='page-link' onclick='ajax(".$previous.")'>Previous</button>";
    }
    echo "</li>";
    echo "<li class='page-item'><a class='page-link'>". $halaman."</a>";
    echo "</li>";
    echo "<li class='page-item'>";
    if ($halaman < $total_halaman){
        echo "<a class='page-link' onclick='ajax(".$next.")'>Next</a>";
    }
    echo "</li>";
echo "</ul>";
echo "</nav>";
?>
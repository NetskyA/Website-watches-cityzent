<?php
require_once("connector.php");
$listbarang = $_SESSION["cart"];
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Gambar as 'Gambar', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $subtotal = $value["jml"] * $data[0]["Harga"];
    $del = "delete";

    echo "<div class='d-flex' style='flex-direction:row;width:100%'>";
        echo "<div class='kc'>";
            echo '<img style="width: 15vw; height:15vw;" src = "data:image/png;base64,' . base64_encode($data[0]['Gambar']) . '"/>';
        echo "</div>";
        echo "<div class='kt mt-3' style='width: 30wv;'>";
            echo "<h4>";
                    echo "<b>".$data[0]['Nama_Brand']."</b>";
                echo "</h4>";
                echo "<p class='serial pt-1' style='color: gray;'>".$data[0]['Nama_Barang']."</p>";
                echo "<p class='serial' style='color: red;'>Rp. ". $data[0]["Harga"]."</p>";
                echo "<p class='serial' style='color: gray;'>Tanggal dimasukkan :".$value["waktu"]."</p>";
                echo "<hr class='my-4' style='border: 1px solid gray'>";
                echo "<div class='subttl d-flex'>";
                echo "<div class='enti'>";
                        echo "<input type='hidden' name='dat2' value=".$value["ID"].">";
                        echo "<div class='jumlah d-flex' style='width: 10vw;'>";
                            echo "<button id='kurang' style='width: 4vw; height: 2vw;' class='btn btn-secondary' onclick='min(". $value["ID"] .")'>-</button>";
                            echo "<button id='tambah' style='width: 4vw; height: 2vw; margin-left:0.5vw' class='btn btn-secondary' onclick='plus(" . $value["ID"] . ")'>+</button>";
                            echo "</div>";

                        echo "<p class='serial mt-1' style='color: gray; margin-right:5vw;'>Entity : ".$value["jml"]."</p>";
                    echo "</div>";
                    echo "<div class='sub'>";
                        echo "<h5>";
                            echo "<p class='serial pt-1' style='color: gray;'>Subtotal : Rp. ". $subtotal;
                                echo "</h4>";
                            echo "</p>";
                    echo "</div>";
                echo "</div>";
        echo "</div>";
        echo "<div class='kr mt-4' style='margin-left: 17vw;'>";
            echo "<div class='cancel' style='margin-right:0vw;'>";
                    echo "<input type='hidden' name='dat' value='". $value["ID"] .">";
                    echo "<a href='' style='color: gray;'>";
                        echo '<button id="delete" style="border:0px;background-color:white;" onclick="del(' . $value["ID"] . ')">';
                            echo '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewbox="0 0 16 16">';
                                echo '<path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />';
                            echo '</svg>';
                        echo '</button>';
                    echo '</a>';
            echo '</div>';
        echo '</div>';
    echo '</div>';
    echo '<hr class="my-4" style="border: 1px solid gray">';

}
if (count($listbarang) == 0) {
    echo "<div class='d-flex justify-content-center align-items-center'style='width:100%;height:40vw;font-size: 5vw;'>";
    echo "Product Not Found";
    echo "</div>";
}
?>
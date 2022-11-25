<?php
require_once("connector.php");
if (isset($_SESSION["logged"])) {
    $idx = $_SESSION["logged"];
} else {
    $idx = -1;
}
$stmt = $conn->prepare("SELECT * FROM cart where ID_User=" . $idx);
$stmt->execute();
$listbarang = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Gambar as 'Gambar', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID_Barang'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $subtotal = $value["Jumlah"] * $data[0]["Harga"];
    $del = "delete";

    echo "<div class='d-flex' style='flex-direction:row;width:100%'>";
    echo "<div class='kc'>";
    echo '<img style="width: 15vw; height:15vw;" src = "' . $data[0]['Gambar'] . '"/>';
    echo "</div>";
    echo "<div class='kt mt-3' style='width: 30wv;'>";
    echo "<h4>";
    echo "<b>" . $data[0]['Nama_Brand'] . "</b>";
    echo "</h4>";
    echo "<p class='serial pt-1' style='color: gray;'>" . $data[0]['Nama_Barang'] . "</p>";
    echo "<p class='serial' style='color: red;'>Rp. " . $data[0]["Harga"] . "</p>";
    echo "<p class='serial' style='color: gray;'>Tanggal dimasukkan :" . $value["Waktu"] . "</p>";
    echo "<hr class='my-4' style='border: 1px solid gray'>";
    echo "<div class='subttl d-flex'>";
    echo "<div class='enti'>";
    echo "<input type='hidden' name='dat2' value=" . $value["ID_Barang"] . ">";
    echo "<div class='jumlah d-flex' style='width: 10vw;'>";
    echo "<button id='kurang' style='width: 4vw; height: auto;' class='btn btn-secondary' onclick='min(" . $value["ID_Barang"] . "," . $value["ID_User"] . ")'>-</button>";
    echo "<button id='tambah' style='width: 4vw; height: auto; margin-left:0.5vw' class='btn btn-secondary' onclick='plus(" . $value["ID_Barang"] . ",". $value["ID_User"].")'>+</button>";
    echo "</div>";

    echo "<p class='serial mt-1' style='color: gray; margin-right:5vw;'>Entity : " . $value["Jumlah"] . "</p>";
    echo "</div>";
    echo "<div class='sub'>";
    echo "<h5>";
    echo "<p class='serial pt-1' style='color: gray;'>Subtotal : Rp. " . $subtotal;
    echo "</h4>";
    echo "</p>";
    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class='kr mt-4' style='margin-left: 17vw;'>";
    echo "<div class='cancel' style='margin-right:0vw;'>";
    echo "<input type='hidden' name='dat' value='" . $value["ID_Barang"]. ">";
    echo "<a href='' style='color: gray;'>";
    echo '<button id="delete" style="border:0px;background-color:white;" onclick="del(' .  $value["ID_Barang"] . "," . $value["ID_User"] . ')">';
    echo '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">';
    echo '<path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>';
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
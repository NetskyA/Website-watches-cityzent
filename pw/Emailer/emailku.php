<?php
require_once("../connector.php");
$id = $_SESSION["orderid"];
$idcus = $_SESSION["logged"];
$waktu = date("Y-m-d");
$stmt = $conn->prepare("SELECT * FROM cart where ID_User=" . $idcus);
$stmt->execute();
$listbarang = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$subtotalall = 0;
$listbarang2 = [];
$subtotalall = 0;
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Stok as 'Stok', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID_Barang'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    array_push($listbarang2, $data[0]["Nama_Barang"]);
    $subtotal = $value["Jumlah"] * $data[0]["Harga"];
    $subtotalall += $subtotal;
}
$stmt = $conn->prepare("SELECT * FROM customer where customer.ID = '" . $idcus . "'");
$stmt->execute();
$data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$nama = $data[0]["Nama_Lengkap"];
$email= $data[0]["Email"];
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'alvinbwiyono@gmail.com';
$mail->Password = 'ipratydgohtlhgwq';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->isHTML(true);
$mail->addEmbeddedImage('../asset/logo/logo.png', 'logo_p2t');
$mail->addEmbeddedImage('../asset/animate/test.gif', 'logo_p3t');

$mail->setFrom('alvinbwiyono@gmail.com');
$mail->addAddress("$email");
$mail->Subject = "Invoice";
$isi = "";
$isi .=
'
<html>
<body">
    <div style="background-color: rgb(255, 255, 255);
        width: 100%;
        margin-left: 2vw;
        height: auto;
        border-radius: 1vw;
        box-shadow: inset 0 -3em 3em rgba(125, 125, 125, 0.1), 0 0 0 2px rgb(221, 221, 221), 0.3em 0.3em 1em rgba(128, 128, 128, 0.3);
        margin-top: 0.5vw;    
        display: flex;
        justify-content: center;">
        <div class="isinya" style="">
            <div class="atas" style="display: flex;justify-content:center">
                <img src=\'cid:logo_p2t\' style="width: 3vw;height: 3vw;" alt="" srcset="">
                <p style="font-size:0.8vw; padding-top:0.5vw;">WATCHES SCRT</p>
            </div>
            <div style="font-size: 2vw;text-align: center;margin-top: 0.5vw;">
                <p>Appreciation to you</p>
            </div>
            <div class="gmb" style="position:relative;display: flex;justify-content: center;width:100%;" >
                <img src=\'cid:logo_p3t\' alt=""
                    style="position: absolute;margin-left: auto;margin-right: auto;margin-top: -2vw;display: flex;width:8.2vw;height:6vw;justify-content:center;">
            </div>
            <div class="sks" style="position:relative;display: flex;width:100%;justify-content: center;text-align:center">
                <p style="position: absolute;margin-left: auto;margin-right: auto;text-align: center; width:80%; font-size:0.8vw;">For those of you who care about style, the
                    purchase of this
                    watch
                    is very
                    helpful to support a very
                    fashionable look.</p>
            </div>
            <hr class="my-4 mt-2" style="width: 100%;">

            <div class="isi" style="margin-top:2vw;margin-left:2vw; margin-right:2vw;justify-content: center;">
                <div class="kusus" style="display: flex; font-size:0.8vw;">
                    <p>Invoice number : ' . $id . '</p>
                    <p style="padding-left:28vw;">Status : Gold</p>
                </div>
                <p style="font-size:0.8vw;">Name customer : ' . $nama . '</p>
                <p style="font-size:0.8vw;">Product name : </p>';
                foreach ($listbarang2 as $key => $value) {
                    $isi .= '<p style="font-size:0.8vw;">' . $value . '</p>';
                }

            $isi .= '<p style="font-size:0.8vw;">Total price : Rp' . number_format($subtotalall, 2, ",", ".") . '</p>
            </div>
            <hr class="my-4 mt-2">
        </div>
    </div>
</body>

</html>
';
$mail->Body = $isi;
$mail->send();

?>

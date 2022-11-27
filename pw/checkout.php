<?php

namespace Midtrans;

require_once("connector.php");
require_once dirname(__FILE__) . '/Midtrans/Midtrans.php';
// Set Your server key
// can find in Merchant Portal -> Settings -> Access keys
Config::$serverKey = 'SB-Mid-server-dWPUAKiuT1S7ZwEzaJLHZSIQ';
Config::$clientKey = 'SB-Mid-client-SoATxc1jvSH64Jjh';
if (isset($_SESSION["logged"])) {
    $idx = $_SESSION["logged"];
    $stmt = $conn->prepare("UPDATE cart SET ID_User = ? WHERE ID_User = -1");
    $stmt->bind_param("i", $idx);
    $result = $stmt->execute();
} else {
    $idx = -1;
}
$stmt = $conn->prepare("SELECT * FROM cart where ID_User=" . $idx);
$stmt->execute();
$listbarang = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$qtyall = 0;
$subtotalall = 0;
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Gambar as 'Gambar', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID_Barang'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $subtotal = $value["Jumlah"] * $data[0]["Harga"];
    $subtotalall += $subtotal;
}

Config::$isSanitized = true;

// Enable 3D-Secure
Config::$is3ds = true;

// Uncomment for append and override notification URL
// Config::$appendNotifUrl = "https://example.com";
// Config::$overrideNotifUrl = "https://example.com";

// Required
$_SESSION["orderid"] = rand();
$transaction_details = array(
    'order_id' => $_SESSION["orderid"],
    'gross_amount' => $subtotalall // no decimal allowed for creditcard
);
$item_details = [];
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT * from barang ba WHERE ba.ID='" . $value['ID_Barang'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $temp = array(
        "id" => $data[0]["ID"],
        "name" => $data[0]["Nama_Barang"],
        "quantity" => $value["Jumlah"],
        'price' => $data[0]["Harga"]
    );
    array_push($item_details, $temp);
}

$billing_address = array(
    'first_name'    => "Andri",
    'address'       => "Mangga 20",
    'phone'         => "081122334455"
);

// Optional
$shipping_address = array(
    'first_name'    => "Obet",
    'address'       => "Manggis 90",
    'phone'         => "08113366345"
);

// Optional
$customer_details = array(
    'first_name'    => "Andri",
    'last_name'     => "Litani",
    'email'         => "andri@litani.com",
    'phone'         => "081122334455",
    'billing_address'  => $billing_address,
    'shipping_address' => $shipping_address
);


if (isset($_SESSION["logged"])) {
    $stmt = $conn->prepare("SELECT * from customer c WHERE c.ID='" . $_SESSION["logged"] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $billing_address = array(
        'first_name'    => $data[0]["Nama_Lengkap"],
        'address'       => $data[0]["Alamat_Lengkap"],
        'phone'         => $data[0]["No_Telp"]
    );

    // Optional
    $shipping_address = array(
        'first_name'    => $data[0]["Nama_Lengkap"],
        'address'       => $data[0]["Alamat_Lengkap"],
        'phone'         => $data[0]["No_Telp"]
    );

    // Optional
    $customer_details = array(
        'first_name'    => $data[0]["Nama_Lengkap"],
        'address'       => $data[0]["Alamat_Lengkap"],
        'email'         => $data[0]["Email"],
        'phone'         => $data[0]["No_Telp"],
        'billing_address'  => $billing_address,
        'shipping_address' => $shipping_address
    );


    // Fill transaction details
}

$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details
);

try {
    $snap_token = Snap::getSnapToken($transaction);
} catch (\Exception $e) {
}
$stmt = $conn->prepare("SELECT * FROM cart where ID_User=" . $idx);
$stmt->execute();
$listbarang = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
$total = 0;
$qtyall = 0;
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Gambar as 'Gambar', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID_Barang'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $subtotal = $value["Jumlah"] * $data[0]["Harga"];
    $total += $subtotal;
    $qtyall += $value["Jumlah"];
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cityzent | Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--Framework Use-->
    <link rel="stylesheet" href="css/style.css">
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
    <!--Framework Use-->

    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-SoATxc1jvSH64Jjh">
    </script>
    <script type="text/javascript">
    function bayar() {
        // SnapToken acquired from previous step
        inp1 = document.getElementById("nname").value;
        inp2 = document.getElementById("nadd").value;
        inp3 = document.getElementById("ntelp").value;
        inp4 = document.getElementsByClassName("note")[0].value;
        status = document.getElementById("log").value;
        if (status == 'false') {
            window.location.href = "logincus.php";
        } else {
            if (inp1 == "" || inp2 == "" | inp3 == "" || inp4 == "") {
                alert("Inputan ada yang kosong");
            } else {
                if (isNaN(inp3)) {
                    alert("Inputan Bukan Angka");
                } else {
                    snap.pay('<?php echo $snap_token ?>', {
                        // Optional
                        onSuccess: function(result) {
                            /* You may add your own js here, this is just example */
                            window.location.href = "coba.php?berhasil=1";
                        },
                        // Optional
                        onPending: function(result) {
                            /* You may add your own js here, this is just example */

                        },
                        // Optional
                        onError: function(result) {
                            /* You may add your own js here, this is just example */
                        },

                        onClose: function(result) {

                        }
                    });
                }
            }
        }
    };

    function ajax() {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            document.getElementById("isi").innerHTML = this.responseText;
        }
        xhttp.open("GET", "ajax2.php");
        xhttp.send();
    }

    function del(idx, iduser) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {
            ajax();
            window.location.href = "checkout.php";
        }
        xhttp.open("GET", "operation.php?operation2=delete&idx=" + idx + "&idus=" + iduser);
        xhttp.send();
    }

    function min(idx, iduser) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {

            ajax();
            window.location.href = "checkout.php";
        }
        xhttp.open("GET", "operation.php?operation2=min&idx=" + idx + "&idus=" + iduser);
        xhttp.send();
    }

    function plus(idx, iduser) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function() {

            ajax();
            window.location.href = "checkout.php";
        }
        xhttp.open("GET", "operation.php?operation2=plus&idx=" + idx + "&idus=" + iduser);
        xhttp.send();

    }

    function load() {
        ajax();
    }
    </script>
</head>

<body onload="load()">
    <div class="coverall">
        <div class="cover">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fs-3" id="navbarNavDropdown">
                        <ul class="navbar-nav fs-5">
                            <!-- <li class="nav-item me-4">
                                <a class="nav-link text-dark" href="index.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="40" fill="currentColor"
                                        class="bi bi-arrow-left-circle" viewbox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg>
                                </a>
                            </li> -->
                            <img src="asset/logo/logo.png" class="logo" alt="" srcset="">

                            <li class="nav-item dropdown me-4 pt-2" style="display: flex;">
                                <p style="width:11.5vw; font-size:1.5vw; font-weight:bold;">Cityzent</p>
                                <div class="nth2">
                                </div>
                            </li>
                            <a href="index.php" style="text-decoration:none">
                                <p class="home text-dark"
                                    style="padding-top: 0.5vw;font-size:1.5vw; text-decoration: none;">Home</p>
                            </a>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- and nav -->
            <!-- content -->
            <div class="content d-flex justify-content-center">
                <div class="kiri3" style="height: auto;">
                    <div class="container-fluid">
                        <div class="judulw">
                            <p class="display-4 fs-2 pt-3" style="text-align: center;">Your Collection</p>
                        </div>
                        <hr class="my-4" style="border: 1px solid gray">
                        <div class="overall d-flex" style="flex-direction:column;width:100%;height:auto" id="isi">
                            <?php
                            if (count($listbarang) == 0) {
                                echo "<div class='d-flex justify-content-center align-items-center'style='width:100%;height:40vw;font-size: 5vw;'>";
                                echo "Product Not Found";
                                echo "</div>";
                            }
                            ?>

                        </div>

                        <div class="alamat" style="width: 100%; height:auto;">
                            <div class="judulw">
                                <p class="display-4 fs-3 pt-3" style="text-align: center;">Address Sended</p>
                            </div>
                            <div class="bgks d-flex">
                                <div class="isinya mt-5" style="width: 30vw;">
                                    <div class="dropdown mb-4">
                                        <select name="" id="drop">
                                            <option value="JNE">JNE</option>
                                            <option>J&T Express</option>
                                            <option>POS Indonesia</option>
                                            <option>SiCepat</option>
                                            <option>Pandu Logistics</option>
                                        </select>
                                    </div>
                                    <div class="up">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Customer's name</label>
                                            <input type="text" class="form-control" id="nname"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="up">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Address</label>
                                            <input type="text" class="form-control" id="nadd"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <div class="up">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="ntelp"
                                                aria-describedby="emailHelp">
                                        </div>
                                    </div>
                                    <label for="exampleFormControlTextarea1">Note</label>
                                    <textarea class="form-control note" style="resize: none;max-height: 15vw;"
                                        id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="isinya2 mt-5 pt-4" style="margin-left: 5vw;" id="bwh">
                                    <h4>
                                        <b>Quantity All</b>
                                    </h4>
                                    <p class="serial pt-1"> <?= $qtyall ?> Product</p>
                                    <h4>
                                        <b>Subtotal All</b>
                                    </h4>
                                    <p class="serial pt-1" style="color: red;">Rp
                                        <?= number_format($total, 2, ',', '.'); ?></p>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" style="border: 1px solid gray">

                        <div style="float: right;margin-right:2vw;height:10vw">
                            <?php
                            if (isset($_SESSION["logged"])) {
                            ?>
                            <input type="hidden" id="log" value="<?= $_SESSION["logged"] ?>">
                            <?php
                            } else {
                            ?>
                            <input type="hidden" id="log" value="false">
                            <?php
                            }
                            ?>

                            <input type="submit" class="order btn btn-secondary" value="ORDER" onclick="bayar()" style="width: 13vw; border:none; box-shadow: inset 0 -3em 3em rgba(125, 125, 125, 0.1), 0 0 0 2px rgb(221, 221, 221), 0.3em 0.3em 1em rgba(128, 128, 128, 0.3);
">
                        </div>
                    </div>
                </div>
            </div>
            <!-- and content -->
        </div>
    </div>
</body>
<script>
$(document).ready(function() {
    $('body').bind('cut copy', function(e) {
        e.preventDefault();
    });
});
</script>

</html>
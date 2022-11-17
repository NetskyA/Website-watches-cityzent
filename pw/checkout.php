<?php

namespace Midtrans;

require_once("connector.php");
require_once dirname(__FILE__) . '/Midtrans/Midtrans.php';
// Set Your server key
// can find in Merchant Portal -> Settings -> Access keys
Config::$serverKey = 'SB-Mid-server-dWPUAKiuT1S7ZwEzaJLHZSIQ';
Config::$clientKey = 'SB-Mid-client-SoATxc1jvSH64Jjh';

if (isset($_POST["delete"])) {
    $deletebarang = $_POST["dat"];
    foreach ($_SESSION["cart"] as $index => $val) {
        if ($deletebarang == $val["ID"]) {
            unset($_SESSION["cart"][$index]);
        }
    }
}
if (isset($_SESSION["cart"])) {
    $listbarang = $_SESSION["cart"];
} else {
    $listbarang = [];
}
$qtyall = 0;
$subtotalall = 0;
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Gambar as 'Gambar', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $subtotal = $value["jml"] * $data[0]["Harga"];
    $subtotalall += $subtotal;
}
Config::$isSanitized = true;

// Enable 3D-Secure
Config::$is3ds = true;

// Uncomment for append and override notification URL
// Config::$appendNotifUrl = "https://example.com";
// Config::$overrideNotifUrl = "https://example.com";

// Required
$transaction_details = array(
    'order_id' => rand(),
    'gross_amount' => $subtotalall, // no decimal allowed for creditcard
);
$item_details = [];
foreach ($listbarang as $key => $value) {
    $stmt = $conn->prepare("SELECT * from barang ba WHERE ba.ID='" . $value['ID'] . "'");
    $stmt->execute();
    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    $temp = array(
        "id" => $data[0]["ID"],
        "name" => $data[0]["Nama_Barang"],
        "quantity" => $value["jml"],
        'price' => $data[0]["Harga"]
    );
    array_push($item_details, $temp);
}


// Optional
// $item_details = array ($item1_details, $item2_details);

// Optional
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


// Fill transaction details
$transaction = array(
    'transaction_details' => $transaction_details,
    'customer_details' => $customer_details,
    'item_details' => $item_details
);


try {
    $snap_token = Snap::getSnapToken($transaction);
} catch (\Exception $e) {
    echo "<script>alert('Keranjang Kosong')</script>";
}

if (isset($_POST["plus"])) {
    $dts = $_POST["dat2"];
    $temp = 0;
    $jmldatabase = 0;
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT * from barang ba WHERE ba.ID='" . $dts . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        if ($dts == $value["ID"]) {
            $temp = $value["jml"];
            $jmldatabase = $data[0]["Stok"];
        }
    }
    if (!($temp + 1 > $jmldatabase)) {
        foreach ($_SESSION["cart"] as $index => $val) {
            if ($dts == $val["ID"]) {
                $_SESSION["cart"][$index]['jml'] = $_SESSION["cart"][$index]['jml'] + 1;
            }
        }
    } else {
        echo "<script>alert('Produk Habis')</script>";
    }
}

if (isset($_POST["minus"])) {
    $dts = $_POST["dat2"];
    $temp = 0;
    $jmldatabase = 0;
    foreach ($listbarang as $key => $value) {
        $stmt = $conn->prepare("SELECT * from barang ba WHERE ba.ID='" . $dts . "'");
        $stmt->execute();
        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        if ($dts == $value["ID"]) {
            $temp = $value["jml"];
            $jmldatabase = $data[0]["Stok"];
        }
    }
    if ($temp - 1 <= 0) {
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
}
if (isset($_SESSION["cart"])) {
    $listbarang = $_SESSION["cart"];
} else {
    $listbarang = [];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WATCHES SCRT | Online Shop</title>
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
        // alert(document.getElementById("tot").value);
        inp1 = document
            .getElementById("nname")
            .value;
        inp2 = document
            .getElementById("nadd")
            .value;
        inp3 = document
            .getElementById("ntelp")
            .value;
        inp4 = document
            .getElementsByClassName("note")[0]
            .value;
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
                        window.location.href = "coba.php";
                    },
                    // Optional
                    onPending: function(result) {
                        /* You may add your own js here, this is just example */

                    },
                    // Optional
                    onError: function(result) {
                        /* You may add your own js here, this is just example */
                    },

                    onClose: function(result) {}
                });
            }
        }
    };
    </script>
</head>

<body>
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
                            <li class="nav-item me-4">
                                <a class="nav-link text-dark" href="index.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="40" fill="currentColor"
                                        class="bi bi-arrow-left-circle" viewbox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg>
                                </a>
                            </li>
                            <li class="nav-item dropdown me-4 pt-2">
                                <h3>Collection</h3>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- and nav -->
            <!-- content -->
            <div class="content d-flex justify-content-center">
                <div class="kiri3">
                    <div class="container-fluid">
                        <div class="judulw">
                            <p class="display-4 fs-2 pt-3" style="text-align: center;">Your Collection</p>
                        </div>
                        <hr class="my-4" style="border: 1px solid gray">
                        <div class="overall d-flex"
                            style="flex-direction:column;overflow:scroll;width:100%;height:25vw">
                            <?php
                            foreach ($listbarang as $key => $value) {
                                $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Gambar as 'Gambar', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID'] . "'");
                                $stmt->execute();
                                $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                $subtotal = $value["jml"] * $data[0]["Harga"];
                                $qtyall += $value["jml"];
                            ?>
                            <div class="d-flex" style="flex-direction:row;width:100%">
                                <div class="kc">
                                    <?php
                                        echo '<img style="width: 15vw; height:15vw;" src = "data:image/png;base64,' . base64_encode($data[0]['Gambar']) . '"/>';
                                        ?>
                                    <!-- <img src="asset/imgW/g.jpg" alt="" style="width: 15vw; height:15vw;"
                                        srcset=""> -->
                                </div>
                                <div class="kt mt-3" style="width: 30wv;">
                                    <form action="" method="post">
                                        <h4>
                                            <b><?= $data[0]["Nama_Brand"] ?></b>
                                        </h4>
                                        <p class="serial pt-1" style="color: gray;"><?= $data[0]["Nama_Barang"] ?></p>
                                        <p class="serial" style="color: red;">Rp.
                                            <?= $data[0]["Harga"] ?></p>
                                        <p class="serial" style="color: gray;">Tanggal dimasukkan : 2022-05-30</p>
                                        <hr class="my-4" style="border: 1px solid gray">
                                        <div class="subttl d-flex">
                                            <div class="enti">
                                                <form action="" method="post">
                                                    <input type="hidden" name="dat2" value="<?= $value["ID"] ?>">
                                                    <div class="jumlah d-flex" style="width: 10vw;">
                                                        <input type="submit" value="-" style="width: 4vw; height: 2vw;"
                                                            class="btn btn-secondary" name="minus">
                                                        <input type="submit" value="+"
                                                            style="width: 4vw; height: 2vw; margin-left:0.5vw"
                                                            class="btn btn-secondary" name="plus">
                                                    </div>
                                                </form>

                                                <p class="serial mt-1" style="color: gray; margin-right:5vw;">Entity :
                                                    <?= $value["jml"] ?></p>
                                            </div>
                                            <div class="sub">
                                                <h5>
                                                    <p class="serial pt-1" style="color: gray;">Subtotal : Rp.
                                                        <?= $subtotal ?>
                                                        </h4>
                                                    </p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="kr mt-4" style="margin-left: 17vw;">
                                    <div class="cancel" style="margin-right:0vw;">
                                        <form action="" method="post">
                                            <input type="hidden" name="dat" value="<?= $value["ID"] ?>">
                                            <a href="" style="color: gray;">
                                                <button name="delete" style="border:0px;background-color:white;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                                        fill="currentColor" class="bi bi-x-lg" viewbox="0 0 16 16">
                                                        <path
                                                            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
                                                    </svg>
                                                </button>
                                            </a>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <hr class="my-4" style="border: 1px solid gray">

                            <?php
                            }
                            if (count($listbarang) == 0) {
                                echo "<div class='d-flex justify-content-center align-items-center'style='width:100%;height:40vw;font-size: 5vw;'>";
                                echo "Product Not Found";
                                echo "</div>";
                            }
                            ?>

                        </div>

                        <div class="alamat" style="width: 100%; height:30vw;overflow:scroll;">
                            <div class="judulw">
                                <p class="display-4 fs-3 pt-3" style="text-align: center;">Address Sended</p>
                            </div>
                            <div class="bgks d-flex">
                                <div class="isinya mt-5" style="width: 30vw;">
                                    <div class="dropdown">
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
                                <div class="isinya2 mt-5 pt-4" style="margin-left: 5vw;">
                                    <h4>
                                        <b>Quantity All</b>
                                    </h4>
                                    <p class="serial pt-1"><?= $qtyall ?>
                                        Product</p>
                                    <h4>
                                        <b>Subtotal All</b>
                                    </h4>
                                    <p class="serial pt-1" style="color: red;">Rp.
                                        <?= $subtotalall ?></p>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" style="border: 1px solid gray">

                        <div action="" method="post" style="float: right;margin-right:2vw;height:10vw">
                            <input type="submit" class="order btn btn-dark" value="ORDER" onclick="bayar()" style="width: 13vw; border:none; box-shadow: inset 0 -3em 3em rgba(125, 125, 125, 0.1), 0 0 0 2px rgb(221, 221, 221), 0.3em 0.3em 1em rgba(128, 128, 128, 0.3);
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
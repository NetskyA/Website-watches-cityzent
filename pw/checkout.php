<?php
require_once("connector.php");
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
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WATCHES SCRT | Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--Framework Use-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="asset/favicon/logoscrt.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/7e563a8c7f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="crossorigin">
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>
    <!--Framework Use-->
</head>

<body>
    <div class="coverall">
        <div class="cover">
            <!--navbar-->
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse fs-3" id="navbarNavDropdown">
                        <ul class="navbar-nav fs-5">
                            <li class="nav-item me-4">
                                <a class="nav-link text-dark" href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="40" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                                    </svg></a>
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
                        <div class="overall d-flex" style="flex-direction:column;overflow:scroll;width:100%;height:25vw">
                            <?php
                            foreach ($listbarang as $key => $value) {
                                $stmt = $conn->prepare("SELECT ba.Nama_Barang as  'Nama_Barang', b.Nama as 'Nama_Brand',ba.Gambar as 'Gambar', ba.Harga as'Harga' FROM brand b,color c,display d, gender g,resistant r, barang ba WHERE ba.ID_Brand = b.ID and ba.ID_Display = d.ID and ba.ID_Warna = c.ID and ba.ID_Gender = g.ID and ba.ID_Resistant = r.ID and ba.ID='" . $value['ID'] . "'");
                                $stmt->execute();
                                $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                $subtotal = $value["jml"] * $data[0]["Harga"];
                                $subtotalall += $subtotal;
                                $qtyall += $value["jml"];
                            ?>
                                <div class="d-flex" style="flex-direction:row;width:100%">
                                    <div class="kc">
                                        <?php
                                        echo '<img style="width: 15vw; height:15vw;" src = "data:image/png;base64,' . base64_encode($data[0]['Gambar']) . '"/>';
                                        ?>
                                        <!-- <img src="asset/imgW/g.jpg" alt="" style="width: 15vw; height:15vw;" srcset=""> -->
                                    </div>
                                    <div class="kt mt-3" style="width: 30wv;">
                                        <form action="" method="post">
                                            <h4><b><?= $data[0]["Nama_Brand"] ?></b></h4>
                                            <p class="serial pt-1" style="color: gray;"><?= $data[0]["Nama_Barang"] ?></p>
                                            <p class="serial" style="color: red;">Rp. <?= $data[0]["Harga"] ?></p>
                                            <p class="serial" style="color: gray;">Tanggal dimasukkan : 2022-05-30</p>
                                            <hr class="my-4" style="border: 1px solid gray">
                                            <div class="subttl d-flex">
                                                <div class="enti">
                                                    <form action="" method="post">
                                                        <div class="jumlah d-flex" style="width: 10vw;">
                                                            <input type="submit" value="-" style="width: 4vw; height: 2vw;" class="btn btn-secondary" name="minus">
                                                            <input type="submit" value="+" style="width: 4vw; height: 2vw; margin-left:0.5vw" class="btn btn-secondary" name="plus">

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
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
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

                        <div class="alamat" style="width: 100%; height:50vw;overflow:scroll;">
                            <div class="judulw">
                                <p class="display-4 fs-3 pt-3" style="text-align: center;">Address Sended</p>
                            </div>
                            <div class="bgks d-flex">
                                <div class="isinya mt-5" style="width: 30vw;">
                                    <form action="" method="POST">
                                        <div class="up">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="up">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Full Name</label>
                                                <input type="text" class="form-control" id="nmfull" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="up">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Number Phone</label>
                                                <input type="text" class="form-control" id="nphone" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="up">
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Address</label>
                                                <input type="text" class="form-control" id="address" aria-describedby="emailHelp">
                                            </div>
                                        </div>
                                        <label for="exampleFormControlTextarea1">Note</label>
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </form>
                                </div>
                                <div class="isinya2 mt-5 pt-4" style="margin-left: 5vw;">
                                    <h4><b>Quantity All</b></h4>
                                    <p class="serial pt-1"><?= $qtyall ?> Product</p>
                                    <h4><b>Subtotal All</b></h4>
                                    <p class="serial pt-1" style="color: red;">Rp. <?= $subtotalall ?></p>
                                    <h4><b>Payment</b></h4>
                                </div>
                            </div>
                        </div>

                        <hr class="my-4" style="border: 1px solid gray">

                        <div class="isiorder" style="float: right; margin-right:2vw;height:10vw">
                            <a href="coba.php">

                                <button type="button" class="order btn btn-dark" style="width: 13vw; border:none; box-shadow: inset 0 -3em 3em rgba(125, 125, 125, 0.1), 0 0 0 2px rgb(221, 221, 221), 0.3em 0.3em 1em rgba(128, 128, 128, 0.3);
">ORDER</button>
                            </a>
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
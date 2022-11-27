<?php
require_once("connector.php");
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
}
$stmt = $conn->prepare("SELECT * FROM barang WHERE ID='" . $id . "'");
$stmt->execute();
$data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

if (isset($_POST["save"])) {
    $nama = strip_tags($_POST["nama"]);
    $brand = strip_tags($_POST["brand"]);
    $note = strip_tags($_POST["note"]);
    $color = strip_tags($_POST["color"]);
    $display = strip_tags($_POST["display"]);
    $resistant = strip_tags($_POST["resistant"]);
    $price = strip_tags($_POST["harga"]);
    $stok = strip_tags($_POST["stok"]);
    $gender = strip_tags($_POST["gender"]);
    if ($nama != "" && $stok != "" && $price != "" && $note != "") {
        if ($_FILES['fileupload']['size'] != 0) {
            if ((is_numeric($stok) == 1 && is_numeric($price) == 1) && ($stok > 0 && $price > 0)) {
                $target_dir = "asset/gambar/";
                $target_file = $target_dir . basename($_FILES["fileupload"]["name"]);
                $uploadOk = true;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image
                $check = getimagesize($_FILES["fileupload"]["tmp_name"]);
                if ($check !== false) {
                    $uploadOk = true;
                } else {
                    $uploadOk = false;
                    echo '<script>alert("File is not an image.")</script>';
                }

                // Check if file already exists
                if (file_exists($target_file) && $uploadOk == true) {
                    $uploadOk = false;
                    echo '<script>alert("File already Exists")</script>';
                }

                // Allow certain file formats
                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $uploadOk == true) {
                    $uploadOk = false;
                    echo '<script>alert("Invalid Format")</script>';
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == false) {
                    $safe = false;
                } else {
                    if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
                        $safe = true;
                        unlink($data[0]['Gambar']);
                        $stmt = $conn->prepare("UPDATE barang SET ID_Brand=?,ID_Display=?,ID_Warna=?,ID_Gender=?,ID_Resistant=?,Nama_Barang=?,Gambar=?,Stok=?,Harga=?,Deskripsi=? WHERE ID = ?");
                        $stmt->bind_param("iiiiissiisi", $brand, $display, $color, $gender, $resistant, $nama, $target_file, $stok, $price, $note, $id);
                        $result = $stmt->execute();
                        header("Location: admin.php");
                    } else {
                        echo '<script>alert("Error")</script>';
                        $safe = false;
                    }
                }
            }
        } else {
            $stmt = $conn->prepare("UPDATE barang SET ID_Brand=?,ID_Display=?,ID_Warna=?,ID_Gender=?,ID_Resistant=?,Nama_Barang=?,Stok=?,Harga=?,Deskripsi=? WHERE ID = ?");
            $stmt->bind_param("iiiiisiisi", $brand, $display, $color, $gender, $resistant, $nama, $stok, $price, $note, $id);
            $result = $stmt->execute();
            header("Location: admin.php");
        }
    } else {
        echo '<script>alert("Please Input All Field")</script>';
    }
}
$stmt = $conn->prepare("SELECT * FROM barang WHERE ID='" . $id . "'");
$stmt->execute();
$data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cityzent | Online Shop</title>

    <!--Framework Use-->
    <link rel="stylesheet" href="css/syl.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
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

    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript"
        src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript"
        src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>


    <script type="text/javascript" charset="utf-8">
    $(document).ready(function() {
        $('.table-paginate').dataTable();
    });
    </script>
</head>

<body>
    <div class="judul d-flex justify-content-center" style="text-align: center;" onmousedown="return false"
        onselectstart="return false">
        <img src="asset/logo/logo.png" class="logo" style="height: 3vw; height:3vw;" alt="" srcset="">
        <h1 class="dtc pt-1">DATA CENTER</h1>
    </div>
    <nav class="navbarr">
        <div class="container-fluid">
            <div class="cover" onmousedown="return false" onselectstart="return false">
                <div class="gambar mt-3 mb-3" style="display: flex;">
                    <img class="gmbr" src="asset/logo/profile.png" alt="" srcset="">
                    <p class="sts fs-3 pt-3 text-dark">Admin</p>
                    <div class="nth ms-3">
                    </div>
                    <p class="sts fs-5 pt-4 ms-3 me-4 text-success">Active</p>
                    <!-- </div>
                <div class="list">
                    <ul class="nav">
                        <li class="nav-item fs-3 pt-2" style="display: flex;">
                            <a href="loginadmin.php">
                                <button class="btn btn-secondary mt-4 ms-4" style="width: 10vw; height:2vw"
                                    type="button">Logout</button>
                            </a>
                        </li>
                    </ul>
                </div> -->
                </div>
            </div>
    </nav>

    <form method="post" enctype="multipart/form-data">
        <div class="container-fluid" style="display: flex;">
            <div class="con" onmousedown="return false" onselectstart="return false">
                <div class="d-flex flex-column mb-3 fs-5" style="width: 9vw;">
                    <!-- <div class="add pt-4 ps-4">
                        <a href="edit.php" style="text-decoration: none; color:black;">
                            Edit Product
                        </a>
                    </div> -->
                    <div class="add pt-4 ps-4">
                        <a href="newp.php" style="text-decoration: none; color:black;">
                            New Product
                        </a>
                    </div>
                    <div class="add pt-4 ps-4">
                        <a href="admin.php" style="text-decoration: none; color:black;">
                            Back
                        </a>
                    </div>
                </div>
            </div>
            <div class="cover2 mt-1">
                <div class="ntte">
                    <div class="jdl pt-2" style="text-align: center;" onmousedown="return false"
                        onselectstart="return false">
                        <h2>Edit Product</h2>
                    </div>
                    <div class="atas mt-4 pt-1 col-8" style="display: flex;">
                        <div class="kiri">
                            <div class="serc" style="display: flex; margin-left: 1vw;">
                                <div class="namep">
                                    <label for="Nm" class="form-label">Name Product</label>
                                    <div class="ini" style="display: flex;">
                                        <input name="nama" type="name" id="name1" style="width: 15vw;"
                                            class="form-control" aria-describedby="passwordHelpBlock"
                                            value="<?= $data[0]["Nama_Barang"] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="bawah mt-3" style="display: flex; margin-left: 1vw;">
                                <div class="namep">
                                    <label for="Nm" class="form-label">Brand</label>
                                    <select name="brand"
                                        style="width: 10vw;border:0px;border-radius: 0.2vw;height:1.5vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM brand");
                                        $stmt->execute();
                                        $data2 = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        foreach ($data2 as $key => $value) {
                                            if ($value["ID"] == $data[0]["ID_Brand"]) {
                                                echo "<option value='" . $value["ID"] . "' selected>" . $value["Nama"] . "</option>";
                                            } else {
                                                echo "<option value='" . $value["ID"] . "'>" . $value["Nama"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="stock ms-3">
                                    <label for="Nm" class="form-label">Stock</label>
                                    <input type="text" id="name" name="stok" value="<?= $data[0]["Stok"] ?>"
                                        class="form-control" aria-describedby="passwordHelpBlock"
                                        style="width: 10vw;border:0px;border-radius: 0.2vw;height:1.5vw">
                                </div>
                                <div class=" price ms-3">
                                    <label for="Nm" class="form-label">Price</label>
                                    <input type="name" id="text" name="harga" value="<?= $data[0]["Harga"] ?>"
                                        class="form-control" aria-describedby="passwordHelpBlock"
                                        style="width: 10vw;border:0px;border-radius: 0.2vw;height:1.5vw">
                                </div>
                                <div class=" wat ms-3">
                                    <label for="Nm" class="form-label">Water Resistant</label>
                                    <select name="resistant"
                                        style="width: 10vw;border:0px;border-radius: 0.2vw;height:1.5vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM resistant");
                                        $stmt->execute();
                                        $data2 = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        foreach ($data2 as $key => $value) {
                                            if ($value["ID"] == $data[0]["ID_Resistant"]) {
                                                echo "<option value='" . $value["ID"] . "' selected>" . $value["Nama"] . "</option>";
                                            } else {
                                                echo "<option value='" . $value["ID"] . "'>" . $value["Nama"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="bawah2 mt-3 ms-1" style="display: flex;">
                                <div class="color ms-3" style="display:flex;flex-direction: column;">
                                    <label for="Nm" class="form-label">Color</label>
                                    <select name="color"
                                        style="width: 10vw;border:0px;border-radius: 0.2vw;height:1.5vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM color");
                                        $stmt->execute();
                                        $data2 = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        foreach ($data2 as $key => $value) {
                                            if ($value["ID"] == $data[0]["ID_Warna"]) {
                                                echo "<option value='" . $value["ID"] . "' selected>" . $value["Nama"] . "</option>";
                                            } else {
                                                echo "<option value='" . $value["ID"] . "'>" . $value["Nama"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="dis ms-3" style="display:flex;flex-direction: column;">
                                    <label for="Nm" class="form-label">Display</label>
                                    <select name="display"
                                        style="width: 10vw;border:0px;border-radius: 0.2vw;height:1.5vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM display");
                                        $stmt->execute();
                                        $data2 = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        foreach ($data2 as $key => $value) {
                                            if ($value["ID"] == $data[0]["ID_Display"]) {
                                                echo "<option value='" . $value["ID"] . "' selected>" . $value["Nama"] . "</option>";
                                            } else {
                                                echo "<option value='" . $value["ID"] . "'>" . $value["Nama"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="gen ms-3" style="display:flex;flex-direction: column;">
                                    <label for="Nm" class="form-label">Gender</label>
                                    <select name="gender"
                                        style="width: 10vw;border:0px;border-radius: 0.2vw;height:1.5vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM gender");
                                        $stmt->execute();
                                        $data2 = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        foreach ($data2 as $key => $value) {
                                            if ($value["ID"] == $data[0]["ID_Gender"]) {
                                                echo "<option value='" . $value["ID"] . "' selected>" . $value["Nama"] . "</option>";
                                            } else {
                                                echo "<option value='" . $value["ID"] . "'>" . $value["Nama"] . "</option>";
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="des ms-3 mt-3">
                                <label for="Nm" class="form-label">Description</label>
                                <textarea name="note" class="note" style="border-radius: 0.5vw; width:100%; height:8vw;"
                                    id="note"><?= $data[0]["Deskripsi"] ?></textarea>
                            </div>
                        </div>
                        <div class="kanan" style="display: flex;">
                            <div class="gisi">
                                <img src="<?= $data[0]["Gambar"] ?>" style="height:12vw; width:12vw;" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                    <div class="kanan2 col-3 ms-3 mt-3">
                        <div class="input-group">
                            <input name="fileupload" type="file" class="form-control" id="inputGroupFile04"
                                aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <button class="btn btn-outline-secondary" type="button"
                                id="inputGroupFileAddon04">Upload</button>
                        </div>
                    </div>
                    <div class="detail">
                        <hr class="my-4">
                        <input name="save" type="submit" value="Save Edit" class="btn btn-secondary ms-3 mb-3"
                            style="width: 10vw; height:2vw">
                    </div>
                </div>
            </div>
        </div>
    </form>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>


</html>
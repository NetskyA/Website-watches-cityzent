<?php
require_once("connector.php");
if (isset($_POST["edit"])) {
    $data2 = $_POST["data"];
    header("Location: editbarang.php?id=" . $data2);
}

if (isset($_POST["del"])) {
    $data2 = $_POST["data"];
    $result = $conn->query("UPDATE barang SET Stok=0 WHERE ID=$data2");
}
?>
<html>

<head>
    <title>WATCHES SCRT | Sales Reports</title>
    <link rel="stylesheet" href="css/syl.css">
    <link rel="shortcut icon" href="asset/favicon/logoscrt.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>
</head>

<body>
    <div class="judul d-flex justify-content-center" style="text-align: center;" onmousedown="return false"
        onselectstart="return false">
        <img src="asset/logo/logo.png" class="logo" style="height: 3vw; height:3vw;" alt="" srcset="">
        <h1 class="dtc pt-1 fs-5">DATA CENTER</h1>
    </div>
    <nav class="navbarr">
        <div class="container-fluid">
            <div class="cover" onmousedown="return false" onselectstart="return false">
                <div class="gambar2 mt-3 mb-3" style="display: flex;">
                    <img class="gmbr" src="asset/logo/profile.png" alt="" srcset="">
                    <p class="sts fs-2 pt-3 text-dark">Admin</p>
                    <div class="nth ms-3">
                    </div>
                    <p class="sts2 fs-5 pt-3 text-success">Active</p>
                </div>
                <a href="admin.php" style="margin-top: 0.8vw;">
                    <button class="btn bck2 btn-secondary mt-4 ms-4 me-5"
                        style="width: 10vw; height:2vw; margin-left:2vw;" type="button">Back</button>
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h4 class="jd pt-4">Data Exporting</h4>
        <div class="data-tables datatable-dark mt-4">
            <table class="table table-striped table-bordered table-paginate" id="mauexport" cellspacing="0" width="100%"
                onmousedown="return false" onselectstart="return false">
                <thead>
                    <tr>
                        <th style="width: 3vw;">ID</th>
                        <th style="width: 5.9vw;">ID BRAND</th>
                        <th style="width: 8.5vw;">Display</th>
                        <th>Color</th>
                        <th>Gender</th>
                        <th style="width: 7vw;">Resistant</th>
                        <th style="width: 8.5vw;">Name Product</th>
                        <th>Image</th>
                        <th>Stock</th>
                        <th style="width: 7.5vw;">Price</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $conn->prepare("SELECT ba.ID as 'ID',br.Nama as 'Brand',co.Nama as 'Color',di.Nama as 'Display',ge.Nama as 'Gender', re.Nama as 'Resistant',ba.Nama_Barang as 'Nama_Barang',ba.Gambar as 'Gambar',ba.Stok as 'Stok', ba.Harga as 'Harga', ba.Deskripsi as 'Deskripsi' from barang ba, brand br,color co,display di,gender ge,resistant re where
ba.ID_Brand = br.ID and ba.ID_Warna = co.ID and ba.ID_Display=di.ID and ba.ID_Gender = ge.ID and ba.ID_Resistant = re.ID");
                    $stmt->execute();
                    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                    foreach ($data as $key => $value) {
                    ?>
                    <tr>
                        <td style="text-align: center;"><?php echo $value["ID"] ?></td>
                        <td style="text-align: center;"><?php echo $value["Brand"] ?></td>
                        <td style="text-align: center;"><?php echo $value["Display"] ?></td>
                        <td style="text-align: center;"><?php echo $value["Color"] ?></td>
                        <td style="text-align: center;"><?php echo $value["Gender"] ?></td>
                        <td style="text-align: center;"><?php echo $value["Resistant"] ?></td>
                        <td style="text-align: center;"><?php echo $value["Nama_Barang"] ?></td>
                        <td style="text-align: center;"><?php echo $value["Gambar"] ?></td>
                        <td style="text-align: center;"><?php echo $value["Stok"] ?></td>
                        <td style="text-align: center;">Rp <?php echo number_format($value["Harga"], 2, ',', '.') ?>
                        </td>
                        <td style="text-align: center;">
                            <div style="height:6vw; overflow:hidden"><?php echo $value["Deskripsi"] ?></div>
                        </td>
                    </tr>

                    <?php
                    }
                    ?>
                </tbody>
            </table>

        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#mauexport').DataTable({
            dom: 'Bfrtip',
            buttons: ['copy', 'csv', 'excel', 'pdf', 'print']
        });
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

</body>

</html>
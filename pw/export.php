<?php
require_once("connector.php");
if(isset($_POST["edit"])){
    $data2 = $_POST["data"];
    $result = $conn->query("UPDATE h_trans SET Status=0 WHERE ID=$data2");
}
?>
<html>

<head>
    <title>Cityzent | Sales Reports</title>
    <link rel="stylesheet" href="css/syl.css">
    <link rel="shortcut icon" href="asset/favicon/logoscrt.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>
</head>

<body>
    <div class="judul d-flex justify-content-center" style="text-align: center;" onmousedown="return false" onselectstart="return false">
        <img src="asset/logo/logo.png" class="logo" style="height: 3vw; height:3vw;" alt="" srcset="">
        <h1 class="dtc pt-1 fs-5" onmousedown="return false" onselectstart="return false">DATA CENTER</h1>
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
                    <button class="btn bck2 btn-secondary mt-4 ms-4 me-5" style="width: 10vw; height:2vw; margin-left:2vw;" type="button">Back</button>
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <h4 class="jd pt-4">Data Exporting</h4>
        <div class="data-tables datatable-dark mt-4 mb-5">
            <table class="table table-striped table-bordered table-paginate" id="mauexport" cellspacing="0" width="100%" onmousedown="return false" onselectstart="return false">
                <thead>
                    <tr>
                        <th style="width: 5vw;">Nota</th>
                        <th style="width: 5.9vw;">Nama Customer</th>
                        <th style="width: 8.5vw;">Total</th>
                        <th style="width: 8.5vw;">Date Transaksi</th>
                        <th style="width: 1vw;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $stmt = $conn->prepare("SELECT h.Status as 'Status',c.Nama_Lengkap as 'Nama',h.ID as 'ID',h.Total as 'Total',h.Waktu_Transaksi as 'Waktu' from h_trans h,customer c where h.ID_Customer=c.ID order by h.Waktu_Transaksi");
                    $stmt->execute();
                    $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                    foreach ($data as $key => $value) {
                    ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $value["ID"] ?></td>
                            <td style="text-align: center;"><?php echo $value["Nama"] ?></td>
                            <td style="text-align: center;">Rp. <?php echo number_format($value["Total"], 2, ',', '.') ?>
                            </td>
                            <td style="text-align: center;"><?php echo $value["Waktu"] ?></td>
                            <?php
                            if ($value["Status"] == 1) {
                            ?>
                                <td style="text-align: center;">
                                    <form action="" method="post">
                                        <input type="hidden" name="data" value="<?= $value["ID"] ?>">
                                        <input type="submit" style="width:100%;height:100%" class="capek" value="Finish" name="edit">
                                    </form>
                                </td>
                            <?php
                            } else {
                            ?>
                                <td></td>
                            <?php
                            }
                            ?>
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
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
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
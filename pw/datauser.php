<?php
require_once("connector.php");
if (isset($_POST["ban"])) {
    $data2 = $_POST["data"];
    $result = $conn->query("UPDATE customer SET Status=0 WHERE ID=$data2");
}
if (isset($_POST["unban"])) {
    $data2 = $_POST["data"];
    $result = $conn->query("UPDATE customer SET Status=1 WHERE ID=$data2");
}
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
                    <div class="nth ms-3"></div>
                    <p class="sts fs-5 pt-4 ms-3 me-4 text-success">Active</p>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="display: flex;">
        <div class="con" onmousedown="return false" onselectstart="return false">
            <div class="d-flex flex-column mb-3 fs-5" style="width: 9vw;">
                <!-- <div class="add pt-4 ps-4">
                    <a href="#" style="text-decoration: none; color:black;">
                        List Product
                    </a>
                </div> -->
                <div class="add pt-4 ps-4">
                    <a href="#" style="text-decoration:
                    none; color:black;">List User
                    </a>
                </div>
                <div class="add pt-4 ps-4">
                    <a href="admin.php" style="text-decoration: none; color:black;">
                        Back
                    </a>
                </div>
                <!-- <div class="add pt-4 ps-4">
                    <a href="newp.php" style="text-decoration: none; color:black;">
                        New Product
                    </a>
                </div> -->
            </div>
        </div>
        <div class="cover2 mt-1">
            <div class="ntt">
                <div class="jdl pb-2" style="text-align: center; padding-top:0.5vw;" onmousedown="return false"
                    onselectstart="return false">
                    <h2>Data User</h2>
                </div>

            </div>
            <div class="bawah mt-1" style="width: 86vw;">
                <table class="table table-striped table-bordered table-paginate" cellspacing="0" width="100%"
                    onmousedown="return false" onselectstart="return false">
                    <thead>
                        <tr>
                            <th style="width: 3vw;">ID</th>
                            <th style="width: 15vw;">Full Name</th>
                            <th style="width: 12vw;">Password</th>
                            <th style="width: 13vw;">Email</th>
                            <th style="width: 15vw;">Address</th>
                            <th style="width: 13vw;">Number Phone</th>
                            <th style="width: 3vw;">Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $stmt = $conn->prepare("SELECT * from customer");
                        $stmt->execute();
                        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                        foreach ($data as $value) {
                        ?>
                        <tr>
                            <td style="text-align: center;">
                                <?= $value["ID"] ?>
                            </td>
                            <td style="text-align: center;">
                                <?= $value["Nama_Lengkap"] ?>
                            </td>
                            <td class="hidetext" style="text-align: center;">
                                <?= $value["Pass"] ?>
                            </td>
                            <td style="text-align: center;">
                                <?= $value["Email"] ?>
                            </td>
                            <td style="text-align: center;">
                                <?= $value["Alamat_Lengkap"] ?>
                            </td>
                            <td style="text-align: center;">
                                <?= $value["No_Telp"] ?>
                            </td>
                            <td style="text-align: center;">
                                <?php
                                    if ($value["Status"] == 1) {
                                    ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                </svg>
                                <?php
                                    } else {
                                    ?>
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                    class="bi bi-x-circle-fill text-warning" viewBox="0 0 16 16">
                                    <path
                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                </svg>
                                <?php
                                    }
                                    ?>
                            </td>
                            <td>
                                <?php
                                    if ($value["Status"] == 1) {
                                    ?>
                                <form action="" method="post" style="display: flex; justify-content:center;">
                                    <input type="hidden" name="data" value="<?= $value["ID"] ?>">
                                    <input type="submit" class="capek" value="Ban" name="ban">
                                </form>
                                <?php
                                    } else {
                                    ?>
                                <form action="" method="post" style="display: flex; justify-content:center;">
                                    <input type="hidden" name="data" value="<?= $value["ID"] ?>">
                                    <input type="submit" class="capek" value="Unban" name="unban">
                                </form>
                                <?php
                                    }
                                    ?>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>

</html>
<?php
require_once("connector.php");
if (isset($_POST["add"])) {
    $nama = $_POST["name"];
    $brand = $_POST["brand"];
    $resistant = $_POST[""];
    $nama = $_POST["name"];
    $nama = $_POST["name"];
    $nama = $_POST["name"];
    $nama = $_POST["name"];
    $nama = $_POST["name"];
    $nama = $_POST["name"];
    if ($_FILES['fileupload']['size'] != 0) {
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

        // Check file size
        // if ($_FILES["addImage"]["size"] > 10000000 && $uploadOk == true) {
        //     $uploadOk = false;
        //     alert("Sorry, your file is too large.");
        // }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png"&& $imageFileType != "jpeg" && $uploadOk == true) {
            $uploadOk = false;
            echo '<script>alert("File Format not supported")</script>';
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == false) {
            $safe = false;
        } else {
            if (move_uploaded_file($_FILES["fileupload"]["tmp_name"], $target_file)) {
                $safe = true;
            } else {
                echo '<script>alert("Error")</script>';
                $safe = false;
            }
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WATCHES SCRT | Online Shop</title>

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">
    </script>

    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <!-- Jquery DataTables -->
    <script type="text/javascript" language="javascript" src="http:////cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap dataTables Javascript -->
    <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>


    <script type="text/javascript" charset="utf-8">
        $(document).ready(function() {
            $('.table-paginate').dataTable();
        });
    </script>
</head>

<body>
    <div class="judul d-flex justify-content-center" style="text-align: center;">
        <img src="asset/logo/logo.png" class="logo" style="height: 3vw; height:3vw;" alt="" srcset="">
        <h1 class="dtc pt-1">DATA CENTER</h1>
    </div>
    <nav class="navbarr">
        <div class="container-fluid">
            <div class="cover" onmousedown="return false" onselectstart="return false">
                <div class="gambar mt-3" style="display: flex;">
                    <img class="gmbr" src="asset/logo/profile.png" alt="" srcset="">
                    <p class="sts fs-3 pt-3 text-dark">Admin</p>
                    <p class="sts fs-5 pt-4 ms-3 text-success">Active</p>
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

    <form method="POST" enctype="multipart/form-data">
        <div class="container-fluid" style="display: flex;">
            <div class="con" onmousedown="return false" onselectstart="return false">
                <div class="d-flex flex-column mb-3 fs-5" style="width: 9vw;">
                    <div class="add pt-4 ps-4">
                        <a href="admin.php" style="text-decoration: none; color:black;">
                            Home
                        </a>
                    </div>
                    <div class="add pt-4 ps-4">
                        <a href="edit.php" style="text-decoration: none; color:black;">
                            Edit Product
                        </a>
                    </div>
                    <div class="add pt-4 ps-4">
                        <a href="newp.php" style="text-decoration: none; color:black;">
                            New Product
                        </a>
                    </div>
                </div>
            </div>
            <div class="cover2 mt-1">
                <div class="ntte">
                    <div class="jdl pt-2" style="text-align: center;" onmousedown="return false" onselectstart="return false">
                        <h2>New Product</h2>
                    </div>
                    <div class="atas mt-4 pt-1 col-8" style="display: flex;">
                        <div class="kiri">
                            <div class="bawah mt-3" style="display: flex; margin-left: 1vw;">
                                <div class="namep">
                                    <label for="Nm" class="form-label">Name Product</label>
                                    <input type="name" name="name" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                                <div class="brand2 ms-3">
                                    <label for="Nm" class="form-label">Brand</label>
                                    <div class="ini" style="display: flex;">
                                        <select name="brand" style="width: 10vw;border:0px;border-radius: 0.5vw;height:2vw">
                                            <?php
                                            $stmt = $conn->prepare("SELECT * FROM brand");
                                            $stmt->execute();
                                            $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                            echo '<option value="0"></option>';
                                            foreach ($data as $value) {
                                            ?>
                                                <option value="<?= $value["ID"] ?>"><?= $value["Nama"] ?> Series</option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="entity ms-3">
                                    <label for="Nm" class="form-label">Entity</label>
                                    <input type="name" name="jumlah" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                            </div>
                            <div class="bawah2 mt-3" style="display: flex;">
                                <div class="wat ms-3">
                                    <label for="Nm" class="form-label">Water Resistant</label>
                                    <select name="resistant" style="width: 10vw;border:0px;border-radius: 0.5vw;height:2vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM resistant");
                                        $stmt->execute();
                                        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        echo '<option value="0"></option>';
                                        foreach ($data as $value) {
                                        ?>
                                            <option value="<?= $value["ID"] ?>"><?= $value["Nama"] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="color">
                                    <label for="Nm" class="form-label">Color</label>
                                    <select name="color" style="width: 10vw;border:0px;border-radius: 0.5vw;height:2vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM color");
                                        $stmt->execute();
                                        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        echo '<option value="0"></option>';
                                        foreach ($data as $value) {
                                        ?>
                                            <option value="<?= $value["ID"] ?>"><?= $value["Nama"] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="dis ms-3">
                                    <label for="Nm" class="form-label">Display</label>
                                    <select name="display" style="width: 10vw;border:0px;border-radius: 0.5vw;height:2vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM display");
                                        $stmt->execute();
                                        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        echo '<option value="0"></option>';
                                        foreach ($data as $value) {
                                        ?>
                                            <option value="<?= $value["ID"] ?>"><?= $value["Nama"] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="gen ms-3">
                                    <label for="Nm" class="form-label">Gender</label>
                                    <select name="gender" style="width: 10vw;border:0px;border-radius: 0.5vw;height:2vw">
                                        <?php
                                        $stmt = $conn->prepare("SELECT * FROM gender");
                                        $stmt->execute();
                                        $data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
                                        echo '<option value="0"></option>';
                                        foreach ($data as $value) {
                                        ?>
                                            <option value="<?= $value["ID"] ?>"><?= $value["Nama"] ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="price ms-3">
                                    <label for="Nm" class="form-label">Price</label>
                                    <input type="name" name="price" class="form-control" aria-describedby="passwordHelpBlock">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kanan2 col-3 ms-3">
                        <div class="des mt-3">
                            <label for="Nm" class="form-label">Description</label>
                            <textarea name="note" class="note" style="border-radius: 0.5vw; width:200%; height:8vw;" id="note"></textarea>
                        </div>
                        <div class="input-group mt-3">
                            <input type="file" class="form-control" name="fileupload" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">
                            <button class="btn btn-outline-secondary" type="button" id="inputGroupFileAddon04">Upload</button>
                        </div>

                    </div>
                    <div class="detail">
                        <hr class="my-4">
                        <input type="submit" value="Add Product" class="btn btn-secondary ms-3 mb-3" style="width: 10vw; height:2vw" name="add">
                    </div>
                </div>
                <div class="bawah mt-1" style="width: 86vw;">
                    <h4 style="text-align: center; padding-top:1vw;">Result</h4>
                    <hr class="my-4">

                    <table class=" table table-striped table-bordered table-paginate" cellspacing="0" width="100%" onmousedown="return false" onselectstart="return false">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011/04/25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011/07/25</td>
                                <td>$170,750</td>
                            </tr>
                            <tr>
                                <td>Ashton Cox</td>
                                <td>Junior Technical Author</td>
                                <td>San Francisco</td>
                                <td>66</td>
                                <td>2009/01/12</td>
                                <td>$86,000</td>
                            </tr>
                            <tr>
                                <td>Cedric Kelly</td>
                                <td>Senior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2012/03/29</td>
                                <td>$433,060</td>
                            </tr>
                            <tr>
                                <td>Airi Satou</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>33</td>
                                <td>2008/11/28</td>
                                <td>$162,700</td>
                            </tr>
                            <tr>
                                <td>Brielle Williamson</td>
                                <td>Integration Specialist</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2012/12/02</td>
                                <td>$372,000</td>
                            </tr>
                            <tr>
                                <td>Herrod Chandler</td>
                                <td>Sales Assistant</td>
                                <td>San Francisco</td>
                                <td>59</td>
                                <td>2012/08/06</td>
                                <td>$137,500</td>
                            </tr>
                            <tr>
                                <td>Rhona Davidson</td>
                                <td>Integration Specialist</td>
                                <td>Tokyo</td>
                                <td>55</td>
                                <td>2010/10/14</td>
                                <td>$327,900</td>
                            </tr>
                            <tr>
                                <td>Colleen Hurst</td>
                                <td>Javascript Developer</td>
                                <td>San Francisco</td>
                                <td>39</td>
                                <td>2009/09/15</td>
                                <td>$205,500</td>
                            </tr>
                            <tr>
                                <td>Sonya Frost</td>
                                <td>Software Engineer</td>
                                <td>Edinburgh</td>
                                <td>23</td>
                                <td>2008/12/13</td>
                                <td>$103,600</td>
                            </tr>
                            <tr>
                                <td>Jena Gaines</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>30</td>
                                <td>2008/12/19</td>
                                <td>$90,560</td>
                            </tr>
                            <tr>
                                <td>Quinn Flynn</td>
                                <td>Support Lead</td>
                                <td>Edinburgh</td>
                                <td>22</td>
                                <td>2013/03/03</td>
                                <td>$342,000</td>
                            </tr>
                            <tr>
                                <td>Charde Marshall</td>
                                <td>Regional Director</td>
                                <td>San Francisco</td>
                                <td>36</td>
                                <td>2008/10/16</td>
                                <td>$470,600</td>
                            </tr>
                            <tr>
                                <td>Haley Kennedy</td>
                                <td>Senior Marketing Designer</td>
                                <td>London</td>
                                <td>43</td>
                                <td>2012/12/18</td>
                                <td>$313,500</td>
                            </tr>
                            <tr>
                                <td>Tatyana Fitzpatrick</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>19</td>
                                <td>2010/03/17</td>
                                <td>$385,750</td>
                            </tr>
                            <tr>
                                <td>Michael Silva</td>
                                <td>Marketing Designer</td>
                                <td>London</td>
                                <td>66</td>
                                <td>2012/11/27</td>
                                <td>$198,500</td>
                            </tr>
                            <tr>
                                <td>Paul Byrd</td>
                                <td>Chief Financial Officer (CFO)</td>
                                <td>New York</td>
                                <td>64</td>
                                <td>2010/06/09</td>
                                <td>$725,000</td>
                            </tr>
                            <tr>
                                <td>Gloria Little</td>
                                <td>Systems Administrator</td>
                                <td>New York</td>
                                <td>59</td>
                                <td>2009/04/10</td>
                                <td>$237,500</td>
                            </tr>
                            <tr>
                                <td>Bradley Greer</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>41</td>
                                <td>2012/10/13</td>
                                <td>$132,000</td>
                            </tr>
                            <tr>
                                <td>Dai Rios</td>
                                <td>Personnel Lead</td>
                                <td>Edinburgh</td>
                                <td>35</td>
                                <td>2012/09/26</td>
                                <td>$217,500</td>
                            </tr>
                            <tr>
                                <td>Jenette Caldwell</td>
                                <td>Development Lead</td>
                                <td>New York</td>
                                <td>30</td>
                                <td>2011/09/03</td>
                                <td>$345,000</td>
                            </tr>
                            <tr>
                                <td>Yuri Berry</td>
                                <td>Chief Marketing Officer (CMO)</td>
                                <td>New York</td>
                                <td>40</td>
                                <td>2009/06/25</td>
                                <td>$675,000</td>
                            </tr>
                            <tr>
                                <td>Caesar Vance</td>
                                <td>Pre-Sales Support</td>
                                <td>New York</td>
                                <td>21</td>
                                <td>2011/12/12</td>
                                <td>$106,450</td>
                            </tr>
                            <tr>
                                <td>Doris Wilder</td>
                                <td>Sales Assistant</td>
                                <td>Sidney</td>
                                <td>23</td>
                                <td>2010/09/20</td>
                                <td>$85,600</td>
                            </tr>
                            <tr>
                                <td>Angelica Ramos</td>
                                <td>Chief Executive Officer (CEO)</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2009/10/09</td>
                                <td>$1,200,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Joyce</td>
                                <td>Developer</td>
                                <td>Edinburgh</td>
                                <td>42</td>
                                <td>2010/12/22</td>
                                <td>$92,575</td>
                            </tr>
                            <tr>
                                <td>Jennifer Chang</td>
                                <td>Regional Director</td>
                                <td>Singapore</td>
                                <td>28</td>
                                <td>2010/11/14</td>
                                <td>$357,650</td>
                            </tr>
                            <tr>
                                <td>Brenden Wagner</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>28</td>
                                <td>2011/06/07</td>
                                <td>$206,850</td>
                            </tr>
                            <tr>
                                <td>Fiona Green</td>
                                <td>Chief Operating Officer (COO)</td>
                                <td>San Francisco</td>
                                <td>48</td>
                                <td>2010/03/11</td>
                                <td>$850,000</td>
                            </tr>
                            <tr>
                                <td>Shou Itou</td>
                                <td>Regional Marketing</td>
                                <td>Tokyo</td>
                                <td>20</td>
                                <td>2011/08/14</td>
                                <td>$163,000</td>
                            </tr>
                            <tr>
                                <td>Michelle House</td>
                                <td>Integration Specialist</td>
                                <td>Sidney</td>
                                <td>37</td>
                                <td>2011/06/02</td>
                                <td>$95,400</td>
                            </tr>
                            <tr>
                                <td>Suki Burks</td>
                                <td>Developer</td>
                                <td>London</td>
                                <td>53</td>
                                <td>2009/10/22</td>
                                <td>$114,500</td>
                            </tr>
                            <tr>
                                <td>Prescott Bartlett</td>
                                <td>Technical Author</td>
                                <td>London</td>
                                <td>27</td>
                                <td>2011/05/07</td>
                                <td>$145,000</td>
                            </tr>
                            <tr>
                                <td>Gavin Cortez</td>
                                <td>Team Leader</td>
                                <td>San Francisco</td>
                                <td>22</td>
                                <td>2008/10/26</td>
                                <td>$235,500</td>
                            </tr>
                            <tr>
                                <td>Martena Mccray</td>
                                <td>Post-Sales support</td>
                                <td>Edinburgh</td>
                                <td>46</td>
                                <td>2011/03/09</td>
                                <td>$324,050</td>
                            </tr>
                            <tr>
                                <td>Unity Butler</td>
                                <td>Marketing Designer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/12/09</td>
                                <td>$85,675</td>
                            </tr>
                            <tr>
                                <td>Howard Hatfield</td>
                                <td>Office Manager</td>
                                <td>San Francisco</td>
                                <td>51</td>
                                <td>2008/12/16</td>
                                <td>$164,500</td>
                            </tr>
                            <tr>
                                <td>Hope Fuentes</td>
                                <td>Secretary</td>
                                <td>San Francisco</td>
                                <td>41</td>
                                <td>2010/02/12</td>
                                <td>$109,850</td>
                            </tr>
                            <tr>
                                <td>Vivian Harrell</td>
                                <td>Financial Controller</td>
                                <td>San Francisco</td>
                                <td>62</td>
                                <td>2009/02/14</td>
                                <td>$452,500</td>
                            </tr>
                            <tr>
                                <td>Timothy Mooney</td>
                                <td>Office Manager</td>
                                <td>London</td>
                                <td>37</td>
                                <td>2008/12/11</td>
                                <td>$136,200</td>
                            </tr>
                            <tr>
                                <td>Jackson Bradshaw</td>
                                <td>Director</td>
                                <td>New York</td>
                                <td>65</td>
                                <td>2008/09/26</td>
                                <td>$645,750</td>
                            </tr>
                            <tr>
                                <td>Olivia Liang</td>
                                <td>Support Engineer</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2011/02/03</td>
                                <td>$234,500</td>
                            </tr>
                            <tr>
                                <td>Bruno Nash</td>
                                <td>Software Engineer</td>
                                <td>London</td>
                                <td>38</td>
                                <td>2011/05/03</td>
                                <td>$163,500</td>
                            </tr>
                            <tr>
                                <td>Sakura Yamamoto</td>
                                <td>Support Engineer</td>
                                <td>Tokyo</td>
                                <td>37</td>
                                <td>2009/08/19</td>
                                <td>$139,575</td>
                            </tr>
                            <tr>
                                <td>Thor Walton</td>
                                <td>Developer</td>
                                <td>New York</td>
                                <td>61</td>
                                <td>2013/08/11</td>
                                <td>$98,540</td>
                            </tr>
                            <tr>
                                <td>Finn Camacho</td>
                                <td>Support Engineer</td>
                                <td>San Francisco</td>
                                <td>47</td>
                                <td>2009/07/07</td>
                                <td>$87,500</td>
                            </tr>
                            <tr>
                                <td>Serge Baldwin</td>
                                <td>Data Coordinator</td>
                                <td>Singapore</td>
                                <td>64</td>
                                <td>2012/04/09</td>
                                <td>$138,575</td>
                            </tr>
                            <tr>
                                <td>Zenaida Frank</td>
                                <td>Software Engineer</td>
                                <td>New York</td>
                                <td>63</td>
                                <td>2010/01/04</td>
                                <td>$125,250</td>
                            </tr>
                            <tr>
                                <td>Zorita Serrano</td>
                                <td>Software Engineer</td>
                                <td>San Francisco</td>
                                <td>56</td>
                                <td>2012/06/01</td>
                                <td>$115,000</td>
                            </tr>
                            <tr>
                                <td>Jennifer Acosta</td>
                                <td>Junior Javascript Developer</td>
                                <td>Edinburgh</td>
                                <td>43</td>
                                <td>2013/02/01</td>
                                <td>$75,650</td>
                            </tr>
                            <tr>
                                <td>Cara Stevens</td>
                                <td>Sales Assistant</td>
                                <td>New York</td>
                                <td>46</td>
                                <td>2011/12/06</td>
                                <td>$145,600</td>
                            </tr>
                            <tr>
                                <td>Hermione Butler</td>
                                <td>Regional Director</td>
                                <td>London</td>
                                <td>47</td>
                                <td>2011/03/21</td>
                                <td>$356,250</td>
                            </tr>
                            <tr>
                                <td>Lael Greer</td>
                                <td>Systems Administrator</td>
                                <td>London</td>
                                <td>21</td>
                                <td>2009/02/27</td>
                                <td>$103,500</td>
                            </tr>
                            <tr>
                                <td>Jonas Alexander</td>
                                <td>Developer</td>
                                <td>San Francisco</td>
                                <td>30</td>
                                <td>2010/07/14</td>
                                <td>$86,500</td>
                            </tr>
                            <tr>
                                <td>Shad Decker</td>
                                <td>Regional Director</td>
                                <td>Edinburgh</td>
                                <td>51</td>
                                <td>2008/11/13</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Michael Bruce</td>
                                <td>Javascript Developer</td>
                                <td>Singapore</td>
                                <td>29</td>
                                <td>2011/06/27</td>
                                <td>$183,000</td>
                            </tr>
                            <tr>
                                <td>Donna Snider</td>
                                <td>Customer Support</td>
                                <td>New York</td>
                                <td>27</td>
                                <td>2011/01/25</td>
                                <td>$112,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </form>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
</script>


</html>
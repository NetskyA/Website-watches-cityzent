<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WATCHES SCRT | Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <!--Framework Use-->
    <link rel="stylesheet" href="css/history.css">
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
                            <img src="asset/logo/logo.png" class="logo" alt="" srcset="">

                            <li class="nav-item dropdown me-4 pt-2" style="display: flex;">
                                <p style="width:11.5vw; font-size:1.5vw; font-weight:bold;">WATCHES SCRT</p>
                                <div class="nth1">
                                </div>
                            </li>
                            <a href="index.php" style="text-decoration:none">
                                <p class="home text-dark"
                                    style="padding-top: 0.5vw;font-size:1.5vw; text-decoration: none;">History</p>
                            </a>
                            <a href="index.php" style="text-decoration:none; padding-left:1.2vw;">
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
                <div class="kiri3">
                    <div class="container-fluid">
                        <div class="judulw">
                            <p class="display-4 fs-2 pt-3" style="text-align: center;">History Transaction</p>
                        </div>
                        <div class="sort">
                            <p class="isi3">Search Date</p>
                            <div class="isi2">
                                <form action="https://example.com">
                                    <input style="border-radius:0.3vw; height:auto; width:8vw; border: 1px gray solid"
                                        type="date" name="dates" />
                                    <input type="submit"
                                        style="border-radius:0.3vw; height: auto; border: 1px gray solid;"
                                        value="Search">
                                </form>
                            </div>
                        </div>
                        <hr class="my-4" style="border: 1px solid gray">
                        <div class="isi">
                            <div class="kiri">
                                <div class="gmbr">
                                    <img src="asset/imgW/e.jpg" class="gmbr1" alt="">
                                </div>
                                <div class="nth2">
                                </div>
                            </div>
                            <div class="tengah">
                                <div class="stts">
                                    <p>Status : <span class="sc text-success">success</span></p>
                                </div>
                                <div class="stts1">
                                    <p>Invoice number : </p>
                                    <p>Name Customer : </p>
                                    <p>Product Name : </p>
                                    <p>Total Name : </p>
                                    <p>Subtotal : </p>
                                </div>
                            </div>
                        </div>
                        <!-- <hr class="my-4" style="border: 1px solid gray"> -->

                        <div class="alamat" style="width: 100%; height:auto;">

                        </div>
                    </div>
                    <hr class="my-4" style="border: 1px solid gray">

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
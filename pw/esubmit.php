<?php
if (isset($_POST["kirim"])) {
    $username = strip_tags($_POST["username"]);
    $email = strip_tags($_POST["email"]);
    $desc = strip_tags($_POST["desc"]);
    if ($username == "" || $email == "" || $desc == "") {
        echo "<script>alert('Please Input All Field')</script>";
    } else {
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cityzent | Online Shop</title>
    <!--Framework Use-->
    <link rel="stylesheet" href="css/email.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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

<body>
    <div class="coverall">
        <div class="atas">
            <div class="bungkus d-flex justify-content-center" style="display: flex;">
                <img src="asset/logo/logo.png" class="logo" alt="" srcset="">
                <p style="padding-top: 1vw; font-size:1.5vw">Cityzent</p>
            </div>
        </div>
        <div class="bawah" style="width: 70%; margin:2.4vw;">
            <div class="jdl">
                <p><span>
                        <h2>
                            <b>
                                Tim Customer Service Cityzent
                            </b>
                        </h2>
                    </span>
                    We are happy to hear your questions and suggestions. Feel free to write your review here and we will
                    get back to you soon.
                </p>
            </div>
        </div>
        <hr class="my-4 mt-3">
        <div class="bawah2 " style="width: 85%; margin:3vw;">
            <form action="" method="post">
                <div class="ats1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    Username
                </div>
                <div class="ats2">
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                </div>
                <div class="ats1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    Your e-mail address
                </div>
                <div class="ats2">
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                </div>
                <div class="ats1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    Description
                </div>
                <div class="ats2">
                    <div class="mb-3">
                        <textarea class="form-control note" name="desc" style="resize: none;max-height: 15vw;"
                            id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
                <div class="ats1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    Upload File
                </div>
                <div class="ats2">
                    <div class="mb-3">
                        <div class="mb-3">
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
                <div class="oke">
                    <input type="submit" value="Submit" name="kirim" class="sub btn btn-outline-secondary">
                    <a href="contactus.php" style="text-decoration:none">
                        <p class="can text-dark">Cancel</p>
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
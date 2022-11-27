<?php

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cityzent | Online Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--Framework Use-->
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
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
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

    <!--Framework Use-->

    <script>
        $(document).ready(function() {
            // panel hide
            $(".des").hide();
            $("#panels").hide();

            // and panel hide

            // action
            $("#tgl").click(function() {
                $(".des").toggle(1000);
            });
            $("#tgls").click(function() {
                $("#panels").toggle(1000);
            });


            // and action
        });
    </script>

</head>

<body>
    <div class="header">
        <div class="atas">
            <div class="hdr mt-5 d-flex ms-5">
                <a href="contactus.php">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle me-3 text-dark" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                    </svg>
                </a>
                <p>
                <h1>
                    Orders & Delivery
                </h1>
                </p>
            </div>
            <hr class="my-4 mt-5">
            <div class="pertama" style="width: 80%; margin:5vw;">
                <div class="dot d-flex" id="tgl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                    </svg>
                    <p>
                    <h4>
                        Why can't I place an order during checkout?
                    </h4>
                    </p>
                </div>
                <div class="des ms-5" id="panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Delivery address not supported by shipping service
                        </b>
                        <br>
                    </span>
                    If the delivery address is not supported by the delivery service, you will not be able to checkout
                    your order. Delivery options may not be available due to an invalid address or inaccessible delivery
                    location. Learn more about why shipping addresses are not supported by shipping services.
                </div>
                <div class="des ms-5 mt-3" id="panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Payment method not supported
                        </b>
                        <br>
                    </span>

                    If your chosen payment method fails, your order will not be created successfully. You can choose
                    another available payment method to continue creating the order.
                </div>
                <div class="des ms-5 mt-3" id="panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Your account is restricted
                        </b>
                        <br>
                    </span>
                    Your account will be restricted if it is detected to be involved in suspicious activities that
                    violate Shopee's Terms & Conditions.
                    If your account is being restricted, you will not be able to place orders or make payments. You will
                    see a pop-up message during checkout informing you of this. Learn more about why the account is
                    restricted and how to appeal.
                </div>
                <div class="des ms-5 mt-3" id="panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Supported shipping services for different products
                        </b>
                        <br>
                    </span>
                    Supported shipping services for different products (If you purchase multiple products)
                    You cannot checkout products simultaneously in one order if the purchased products use different
                    shipping services. For a successful order, checkout simultaneously on products that have the same
                    shipping service option. You can find information about shipping services in the Shipping Costs
                    section.
                </div>
                <div class="des ms-5 mt-3" id="panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Voucher/Promo code has been used before
                        </b>
                        <br>
                    </span>
                    Make sure the Voucher/Promo code (ShopeeFood, Digital Products, or Shopee Marketplace) has not been
                    used before. Please checkout using other Voucher codes available in My Vouchers.
                </div>
                <div class="des ms-5 mt-3" id="panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Unstable connectionVoucher/Promo code has been used before
                        </b>
                        <br>
                    </span>Unstable connection
                    Please turn Airplane Mode on and off on your phone to reset the connection. If you are using Wi-Fi,
                    restart the modem or router that you are using to update the internet connection. If the problem
                    still persists, clear the cache on the Shopee app. Learn more about solutions to Shopee app issues.
                </div>
                <div class="des ms-5 mt-3" id="panel">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Your account has not entered a mobile phone
                            <br>
                        </b>
                    </span>Your account has not entered a mobile phone no.
                    Please enter a new mobile phone number or one that you have never used on another Shopee account.
                    Then, try again to checkout.
                </div>
            </div>

            <div class="pertama" style="width: 80%; margin:5vw;">
                <div class="dot d-flex" id="tgls">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-dot" viewBox="0 0 16 16">
                        <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                    </svg>
                    <p>
                    <h4>
                        New to SCRT
                    </h4>
                    </p>
                </div>
                <div class="des ms-5" id="panels">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            New to Shopee
                        </b>
                        <br>
                    </span>
                    If the delivery address is not supported by the delivery service, you will not be able to checkout
                    your order. Delivery options may not be available due to an invalid address or inaccessible delivery
                    location. Learn more about why shipping addresses are not supported by shipping services.
                </div>
                <div class="des ms-5 mt-3" id="panels">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Payment method not supported
                        </b>
                        <br>
                    </span>

                    If your chosen payment method fails, your order will not be created successfully. You can choose
                    another available payment method to continue creating the order.
                </div>
                <div class="des ms-5 mt-3" id="panels">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Your account is restricted
                        </b>
                        <br>
                    </span>
                    Your account will be restricted if it is detected to be involved in suspicious activities that
                    violate Shopee's Terms & Conditions.
                    If your account is being restricted, you will not be able to place orders or make payments. You will
                    see a pop-up message during checkout informing you of this. Learn more about why the account is
                    restricted and how to appeal.
                </div>
                <div class="des ms-5 mt-3" id="panels">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Supported shipping services for different products
                        </b>
                        <br>
                    </span>
                    Supported shipping services for different products (If you purchase multiple products)
                    You cannot checkout products simultaneously in one order if the purchased products use different
                    shipping services. For a successful order, checkout simultaneously on products that have the same
                    shipping service option. You can find information about shipping services in the Shipping Costs
                    section.
                </div>
                <div class="des ms-5 mt-3" id="panels">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Voucher/Promo code has been used before
                        </b>
                        <br>
                    </span>
                    Make sure the Voucher/Promo code (ShopeeFood, Digital Products, or Shopee Marketplace) has not been
                    used before. Please checkout using other Voucher codes available in My Vouchers.
                </div>
                <div class="des ms-5 mt-3" id="panels">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Unstable connectionVoucher/Promo code has been used before
                        </b>
                        <br>
                    </span>Unstable connection
                    Please turn Airplane Mode on and off on your phone to reset the connection. If you are using Wi-Fi,
                    restart the modem or router that you are using to update the internet connection. If the problem
                    still persists, clear the cache on the Shopee app. Learn more about solutions to Shopee app issues.
                </div>
                <div class="des ms-5 mt-3" id="panels">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                        <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z" />
                    </svg>
                    <span>
                        <b>
                            Your account has not entered a mobile phone
                            <br>
                        </b>
                    </span>Your account has not entered a mobile phone no.
                    Please enter a new mobile phone number or one that you have never used on another Shopee account.
                    Then, try again to checkout.
                </div>
            </div>
        </div>
    </div>
</body>

</html>
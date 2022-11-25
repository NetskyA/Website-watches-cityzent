<?php
    include('get_oauth_token.php');
    include('Exception.php');
    include('OAuth.php');
    include('OAuthTokenProvider.php');
    include('PHPMailer.php');
    include('POP3.php');
    include('SMTP.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer();
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> port = 587;


    // setup SMTP
    $mail -> SMTPSecure = 'tls';
    $mail -> SMTPAuth  = true;

    $mail ->Username = 'alvinbwiyono@gmail.com';
    $mail -> Password = 'ipratydgohtlhgwq';


    // set recipient
    $mail -> setFrom('abcd@absa.com');

    $mail -> addAdress('alvinbwiyono@gmail.com','Alvin Bernard Wiyono');

    $mail -> Subject = 'Coba Email';
    $mail -> Body = 'konten isi email';

    if($mail -> Send()){
        echo "terkirim";
    }else{
        echo "gagal";
    }


?>
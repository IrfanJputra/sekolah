<?php
session_start();
$_SESSION ['admin']='index.php';
if( !isset($_SESSION["level"]) ) {
	header("Location:404.php");
	exit;
}
?>

<?php 
require 'function.php';
require 'koneksi.php';

if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan!');
			  </script>";
	} else {
		echo mysqli_error($conn);
	}

}

?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="noindex">
        <meta name="robots" content="noindex, follow">
        <meta name="robots" content="index, nofollow">
        <meta name="robots" content="noindex, nofollow">
		<meta name="googlebot" content="noindex">
        <title>Login ke SMA Negeri 2 Kebumen</title>
	<link rel="canonical" href="https://smandakebumen.sch.id/login.html" />
		<meta name="keywords" content="smanda,sman 2 kebumen,sma negeri 2 kebumen,smitc,smitc cms,sma,pelajar,kebumen,jawa tengah,indonesia">
		<meta name="description" content="SMA Negeri 2 Kebumen adalah sekolah yang terletak di Kota Kebumen, Provinsi Jawa Tengah. Website ini adalah website resmi SMA NEGERI 2 KEBUMEN">
        <meta http-equiv="expires" content="Fri, 18 Jul 2022 1:00:00 GMT"><meta http-equiv="page-enter" content="revealtrans(duration=seconds,transition=num)"><meta http-equiv="page-exit" content="revealtrans(duration=seconds,transition=num)">
        <!--[if IE]> <script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); </script> <![endif]-->
        <meta content='SMA Negeri 2 Kebumen' property='og:site_name'>
        <meta content='SMA Negeri 2 Kebumen' property='og:title'>
        <meta content='website' property='og:type'>
        <link href='index.html' rel='openid.delegate'>
        <link href='index.html' rel='canonical'>
        <meta content='https://www.smandakebumen.sch.id/' property='og:url'>
        <meta content='SMITC_CMS' name='generator'>
        <meta  property='og:image'>
        <link href='user/assets/icon/favicon.ico' rel='icon' type='image/x-icon'>
        <link href="user/assets/icon/favicon.ico" rel="shortcut icon">
        <link href='user/assets/icon/favicon-32x32.png' rel='icon' sizes='32x32'>
        <link href='user/assets/icon/android-icon-192x192.png' rel='icon' sizes='192x192'>
        <link href='user/assets/icon/apple-icon-180x180.png' rel='apple-touch-icon-precomposed'>
        <meta content='user/assets/icon/ms-icon-144x144.png' name='msapplication-TileImage'>
        <meta content='#49952E' name='msapplication-navbutton-color'>
        <meta content='#49952E' name='apple-mobile-web-app-status-bar-style'>
        <meta content='#49952E' name='theme-color'>
        <meta content='#' name='google-site-verification'>
        <meta content='Indonesia' name='gßeo.placename'>
        <meta content='SMITC CMS ' name='Author'>
        <meta content='general' name='rating'>
        <meta content='id' name='geo.country'>
        <meta content='1525075227538724' property='fb:app_id'>
        <meta content='100006157928140' property='fb:admins'>
        <meta content='summary' name='twitter:card'>
        <meta content='SMAN 2 Kebumen' name='twitter:title'>
        <meta content='@officialosis2' name='twitter:site'>
        <meta content='@officialosis2' name='twitter:creator'>
        <meta content='summary_large_image' name='twitter:card'>
        <meta content="id_ID" property="og:locale">
		<meta content="en_US" property="og:locale:alternate">
		<meta content="en_GB" property="og:locale:alternate">
		<link href='https://smandakebumen.sch.id' rel='dns-prefetch'>
        <link href='https://pustaka.smandakebumen.sch.id' rel='dns-prefetch'>
        <link href='https://smitcsmandakebumen.blogspot.com' rel='dns-prefetch'>
        <meta name="keywords" content="smanda,sman 2 kebumen,sma negeri 2 kebumen,smitc,smitc cms,sma,pelajar,kebumen,jawa tengah,indonesia" />
		<meta name="description" content="SMA Negeri 2 Kebumen adalah sekolah yang terletak di Kota Kebumen, Provinsi Jawa Tengah. Website ini adalah website resmi SMA NEGERI 2 KEBUMEN" />
		<link rel="stylesheet" type="text/css" href="user/assets/css/auth/login.min.css" />
		<link rel="stylesheet" type="text/css" href="user/assets/css/font-awesome.min.css">
        <script type="text/javascript"> var BASE_URL = 'https://www.smandakebumen.sch.id/', error_message = 'Error Document'; document.onkeydown=function(a){if(a.ctrlKey&&85===a.keyCode)return window.location.replace('/about'),!1}; document.addEventListener("contextmenu",function(a){a.preventDefault()},!1);!function t(){try{!function t(n){1===(""+n/n).length&&0!==n||function(){}.constructor("debugger")(),t(++n)}(0)}catch(n){setTimeout(t,5e3)}}(); </script>
        <script type="text/javascript" src="user/assets/js/jquery-3.4.1.min.js"></script>
<body>
<div class="area">
    <ul class="circles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>
<div class="wrapper login">
    <div class="loginwrap">
        <div class="kanan">
            <a href="/sekolah" class="logo waves-effect">
                <img src="user/assets/img/logo/logo.gif" alt="SMA Negeri 2 Kebumen">
                <span class="text">SD Negeri 3 Kereng Bangkirai</span>
            </a>
            <img src="user/assets/img/auth/login.png" alt="Login">
        </div>
        <div class="kiri">

            <form id='' action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <h1>Register</h1>
                <div class="form-group">
                    <div class="icon waves-effect">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="input-field">
                        <input class="validate" id="" name="username" required="" type="text" />
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="icon waves-effect">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="input-field">
                        <input class="validate" id="password" name="password" required="" type="password" />
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="password">Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="icon waves-effect">
                        <i class="fa fa-lock"></i>
                    </div>
                    <div class="input-field">
                        <input class="validate" name="password2" required="" type="password" />
                        <span class="highlight"></span>
                        <span class="bar"></span>
                        <label for="password2">Konfirmasi Password</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="icon waves-effect">
                        <i class="fa fa-user"></i>
                    </div>
                    <select class="input-field"  name="level">
                        <option hidden>Pilih Salah Satu</option>
                        <option value="Admin">Admin</option>
                        <option value="User">User</option>

                    </select>
                </div>
                <input type="checkbox" id="rememberme" name="rememberme" value="rememberme" />
                <label for="rememberme">Remember Me</label>
                <a href="login.php" rel="noopener noreferrer">Masuk</a>
                <a class="btn btn-anim" href="login_google.html" rel="noopener noreferrer"><i class="fa fa-google "></i>Login with Google</a>
                <div class="btn-group">
                    <button class="btn btn-anim" type="submit" id="submit" name="register">Kirim</button>
                    <svg class="spinner" width="30px" height="30px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                        <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                    </svg>
                </div>
            </form>


        </div>
    </div>
</div>
		<div class="backtotop hide waves-effect" id="backtotop"><span></span></div>
		<script type="text/javascript" src="assets/js/auth/login.min.js"></script>
	</body>
</html>
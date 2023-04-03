<?php
session_start();

// Menentukan karakter yang akan digunakan dalam captcha
$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

// Mengacak karakter dan membuat captcha
$captcha = '';
for ($i = 0; $i < 6; $i++) {
    $captcha .= $characters[rand(0, strlen($characters) - 1)];
}

// Menyimpan captcha di dalam session
$_SESSION['captcha'] = $captcha;

// Membuat gambar captcha
$im = imagecreatetruecolor(100, 30);
$bg_color = imagecolorallocate($im, 255, 255, 255);
$text_color = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 100, 30, $bg_color);
imagestring($im, 5, 20, 8, $captcha, $text_color);

// Menampilkan gambar captcha di halaman
header('Content-Type: image/png');
imagepng($im);
imagedestroy($im);
?>

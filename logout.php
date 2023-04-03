
<?php 
session_start();
$_SESSION = [];
session_unset();
session_destroy();
unset($_SESSION['captcha']);
header("Location: /sekolah");
exit;

?>
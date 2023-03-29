<?php
session_start();
$_SESSION ['halaman']='index.php';
if( !isset($_SESSION["level"]) ) {
	header("Location: ../login.php");
	exit;
}
?>
<?php 
require '../function.php';

$id = $_GET['nisn'];

if( hapus_pip($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'pip.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus!');
			document.location.href = 'pip.php';
		</script>
	";
}

?>
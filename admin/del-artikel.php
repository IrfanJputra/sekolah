<?php 
require '../function.php';

$id = $_GET["id_artikel"];

if( hapus_artikel($id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus!');
			document.location.href = 'artikel.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal ditambahkan!');
			document.location.href = 'artikel.php';
		</script>
	";
}

?>
<?php
require '../function.php';
$id = $_GET["id_artikel"];

//query data siswa berdasarkan id
$sqlGet = "SELECT * FROM tb_artikel WHERE id_artikel = '$id'";
$queryGet = mysqli_query($conn, $sqlGet);
$data = mysqli_fetch_array($queryGet);
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( ubah_artikel($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'artikel.php';
			</script>
		";
	} else {
var_dump($_POST);
	}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
</head>
<body>
    <form action="" method="post">
    <label for="nama">nama</label>
    <input type="text" name="nama" value="<?php echo $data['judul'];?>">
    <label for="alamat">alamat</label>
    <input type="text" name="alamat" value="<?php echo $data['artikel'];?>">

    <button type="submit" name="submit"> ADD</button>



    </form>
</body>
</html>
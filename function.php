<?php

include 'koneksi.php';
//registrasi

function registrasi($data) {
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);
	$level     = htmlspecialchars($data["level"]);

	// cek username sudah ada atau belum
	$result = mysqli_query($conn, "SELECT username FROM tb_login WHERE username = '$username'");

	if( mysqli_fetch_assoc($result) ) {
		echo "<script>
				alert('username sudah terdaftar!')
		      </script>";
		return false;
	}


	// cek konfirmasi password
	if( $password !== $password2 ) {
		echo "<script>
				alert('konfirmasi password tidak sesuai!');
		      </script>";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambahkan userbaru ke database
	$query = "INSERT INTO tb_login VALUES (NULL, '$username', '$password', '$level')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

//upload
function upload() {

	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiFileValid = ['jpg', 'png', 'jpeg'];
	$ekstensiFile = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($ekstensiFile));
	if( !in_array($ekstensiFile, $ekstensiFileValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 10000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFile;

	move_uploaded_file($tmpName, '../upload/' . $namaFileBaru);

	return $namaFileBaru;
}

//upload
function logo() {

	$namaFile = $_FILES['logo']['name'];
	$ukuranFile = $_FILES['logo']['size'];
	$error = $_FILES['logo']['error'];
	$tmpName = $_FILES['logo']['tmp_name'];

	// cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "<script>
				alert('pilih gambar terlebih dahulu!');
			  </script>";
		return false;
	}

	// cek apakah yang diupload adalah gambar
	$ekstensiFileValid = ['jpg', 'png', 'jpeg'];
	$ekstensiFile = explode('.', $namaFile);
	$ekstensiFile = strtolower(end($ekstensiFile));
	if( !in_array($ekstensiFile, $ekstensiFileValid) ) {
		echo "<script>
				alert('yang anda upload bukan gambar!');
			  </script>";
		return false;
	}

	// cek jika ukurannya terlalu besar
	if( $ukuranFile > 10000000 ) {
		echo "<script>
				alert('ukuran gambar terlalu besar!');
			  </script>";
		return false;
	}

	// lolos pengecekan, gambar siap diupload
	// generate nama gambar baru
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiFile;

	move_uploaded_file($tmpName, '../upload/' . $namaFileBaru);

	return $namaFileBaru;
}

 
// tambah guru

function tambah($data){

		global $conn;
		$nama              	= htmlspecialchars($data["nama"]);
		$nip       			 = htmlspecialchars($data["nip"]);
		$jabatan              = htmlspecialchars($data["jabatan"]);
		$alamat                = htmlspecialchars($data["alamat"]);
		// upload gambar
		$gambar = upload();
		if( !$gambar ) {
			return false;
		}
		
		$query = "INSERT INTO tb_guru 
						VALUES (NULL,'$nama', '$nip', '$jabatan', '$alamat', '$gambar')";
	   
	   
	   mysqli_query($conn, $query);
	
		return mysqli_affected_rows($conn);
	}

	// tambah siswa

function tambah_siswa($data){

	global $conn;
	$nama              	= htmlspecialchars($data["nama"]);
	$nisn       			 = htmlspecialchars($data["nisn"]);
	$kelas              = htmlspecialchars($data["kelas"]);
	$agama                = htmlspecialchars($data["agama"]);
	$tempat_lahir                = htmlspecialchars($data["tempat_lahir"]);
	$tanggal_lahir                = htmlspecialchars($data["tanggal_lahir"]);
	$alamat                = htmlspecialchars($data["alamat"]);
	
	$query = "INSERT INTO tb_siswa 
					VALUES (NULL,'$nama', '$nisn', '$kelas', '$agama', '$tempat_lahir','$tanggal_lahir','$alamat')";
   
   
   mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//tambah artikel
function tambah_artikel($data){

	global $conn;
	$judul              	= htmlspecialchars($data["judul"]);
	$artikel       			 = htmlspecialchars($data["artikel"]);
	$tagline              = htmlspecialchars($data["tagline"]);
	$tanggal    			= date("Y-m-d H:i:s");


	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
	return false;
	}

	
	$query = "INSERT INTO tb_artikel
					VALUES (NULL,'$tagline', '$judul', '$artikel','$gambar','$tanggal')";
   
   
   mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//ubah guru
	function ubah($data) {
		global $conn;
		
		$nama = htmlspecialchars($data["nama"]);
		$nip = htmlspecialchars($data["nip"]);
		$jabatan = htmlspecialchars($data["jabatan"]);
		$alamat = htmlspecialchars($data["alamat"]);
		$gambarLama = htmlspecialchars($data["gambarLama"]);
	
		// cek apakah user pilih gambar baru atau tidak
		if( $_FILES['gambar']['error'] === 4 ) {
			$gambar = $gambarLama;
		} else {
			$gambar = upload();
		}
	
		$query = "UPDATE tb_guru SET
					nama = '$nama',
					nip = '$nip',
					jabatan = '$jabatan',
					alamat = '$alamat',
					gambar = '$gambar'
				";
	
		mysqli_query($conn, $query);
	
		return mysqli_affected_rows($conn);	
	}


	//ubah siswa
	function ubah_siswa($data) {
		global $conn;

		$nama              	= htmlspecialchars($data["nama"]);
		$nisn       			 = htmlspecialchars($data["nisn"]);
		$kelas              = htmlspecialchars($data["kelas"]);
		$agama                = htmlspecialchars($data["agama"]);
		$tempat_lahir                = htmlspecialchars($data["tempat_lahir"]);
		$tanggal_lahir                = htmlspecialchars($data["tanggal_lahir"]);
		$alamat                = htmlspecialchars($data["alamat"]);
			
		$query = "UPDATE tb_siswa SET
					nama = '$nama',
					nisn = '$nisn',
					kelas = '$kelas',
					agama = '$agama',
					tempat_lahir = '$tempat_lahir',
					tanggal_lahir = '$tanggal_lahir',
					alamat = '$alamat'
				";
	
		mysqli_query($conn, $query);
	
		return mysqli_affected_rows($conn);	
	}

		//ubah artikel
		function ubah_artikel($data) {
			global $conn;
			$id 					= $_GET['id_artikel'];
			$id_tag       			 = htmlspecialchars($data["id_tag"]);
			$judul              	= htmlspecialchars($data["judul"]);
			$artikel       			 = htmlspecialchars($data["artikel"]);
			$gambarLama = htmlspecialchars($data["gambarLama"]);
	
			// cek apakah user pilih gambar baru atau tidak
			if( $_FILES['gambar']['error'] === 4 ) {
				$gambar = $gambarLama;
			} else {
				$gambar = upload();
			}

			$query = "UPDATE tb_artikel SET
						
						id_tag	= '$id_tag',
						judul = '$judul',
						artikel = '$artikel',
						gambar = '$gambar'
						WHERE id_artikel=$id
					";
		
			mysqli_query($conn, $query);
		
			return mysqli_affected_rows($conn);	
		}

		//ubah setting
		function ubah_setting($data) {
			global $conn;
			$logo              				= htmlspecialchars($data["logo"]);
			$sambutan       			 	= htmlspecialchars($data["sambutan"]);
			$gambarLama 					= htmlspecialchars($data["gambarLama"]);
	
			// cek apakah user pilih gambar baru atau tidak
			if( $_FILES['logo']['error'] === 4 ) {
				$logo = $gambarLama;
			} else {
				$logo = logo();
			}

			$query = "UPDATE tb_setting SET			
					
						logo = '$logo',
						sambutan = '$sambutan'
					";
		
			mysqli_query($conn, $query);
		
			return mysqli_affected_rows($conn);	
		}		

//hapus guru
	function hapus($data) {
		global $conn;
		$id = ($data["id_guru"]);
		mysqli_query($conn, "DELETE FROM tb_guru WHERE id_guru = $id");
		return mysqli_affected_rows($conn);
	}
	
	//hapus siswa
	function hapus_siswa($data) {
		global $conn;
		$id = ($data["id_siswa"]);
		mysqli_query($conn, "DELETE FROM tb_siswa WHERE id_siswa = $id");
		return mysqli_affected_rows($conn);
	}

		//hapus artikel
		function hapus_artikel($id) {
			global $conn;
			mysqli_query($conn, "DELETE FROM tb_artikel WHERE id_artikel = $id");
			return mysqli_affected_rows($conn);
		}
	
?>
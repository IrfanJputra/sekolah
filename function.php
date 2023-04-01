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

// tambah pip
function tambah_pip($data){

	global $conn;
	$nisn       			 = htmlspecialchars($data["nisn"]);
	$nama              	= htmlspecialchars($data["nama"]);
	$kelas              = htmlspecialchars($data["kelas"]);
	$nama_ortu                = htmlspecialchars($data["nama_ortu"]);
	$tahap                = htmlspecialchars($data["tahap"]);
	$nominal                = htmlspecialchars($data["nominal"]);
	$status                = htmlspecialchars($data["status"]);
	
	$query = "INSERT INTO tb_pip 
					VALUES ('$nisn', '$nama', '$kelas', '$nama_ortu', '$tahap','$nominal','$status')";
   
   
   mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//tambah artikel
function tambah_artikel($data){

	global $conn;
	$judul              	= htmlspecialchars($data["judul"]);
	$artikel       			 = htmlspecialchars($data["artikel"]);
	$tagline              = htmlspecialchars($data["tagline"]);
	$slug              		= slug($judul);
	$tanggal    			= date("Y-m-d H:i:s");


	// upload gambar
	$gambar = upload();
	if( !$gambar ) {
	return false;
	}


	
	$query = "INSERT INTO tb_artikel
					VALUES (NULL,'$tagline', '$judul', '$artikel','$gambar','$slug','$tanggal')";
   
   
   mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//tambah ktg
function tambah_ktg($data){

	global $conn;
	$tagline             	= htmlspecialchars($data["tagline"]);

	$query = "INSERT INTO tb_tagline
					VALUES (NULL,'$tagline')";
   mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

//tambah inbox
function tambah_inb($data){

	global $conn;
	$nama             	= htmlspecialchars($data["nama"]);
	$email             	= htmlspecialchars($data["email"]);
	$pesan             	= htmlspecialchars($data["pesan"]);

	$query = "INSERT INTO tb_inbox
					VALUES (NULL,'$nama','$email','$pesan')";
   mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}


//ubah guru
	function ubah($data) {
		global $conn;
		$id 		= $_GET['id_guru'];
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
					WHERE id_guru = $id
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

	//ubah pip
	function ubah_pip($data) {
		global $conn;
		$id 					= $_GET['nisn'];
		$nisn       			 = htmlspecialchars($data["nisn"]);
		$nama              	= htmlspecialchars($data["nama"]);
		$kelas              = htmlspecialchars($data["kelas"]);
		$nama_ortu                = htmlspecialchars($data["nama_ortu"]);
		$tahap                = htmlspecialchars($data["tahap"]);
		$nominal                = htmlspecialchars($data["nominal"]);
		$status                = htmlspecialchars($data["status"]);
	
		$query = "UPDATE tb_pip SET
					nisn = '$nisn',
					nama = '$nama',
					kelas = '$kelas',
					nama_ortu = '$nama_ortu',
					tahap = '$tahap',
					nominal = '$nominal',
					status = '$status'
					WHERE nisn = $id
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

		//ubah kategori
		function ubah_ktg($data) {
			global $conn;
			$id 					= $_GET['id_tag'];
			$tagline       			= htmlspecialchars($data["tagline"]);
			
			$query = "UPDATE tb_tagline SET
						tagline	= '$tagline',
						WHERE id_tag = $id
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

				//hapus ktg
				function hapus_ktg($id) {
					global $conn;
					mysqli_query($conn, "DELETE FROM tb_tagline WHERE id_tag = $id");
					return mysqli_affected_rows($conn);
				}

					//hapus user
					function hapus_user($id) {
						global $conn;
						mysqli_query($conn, "DELETE FROM tb_login WHERE id_login = $id");
						return mysqli_affected_rows($conn);
					}

						//hapus pip
						function hapus_pip($id) {
							global $conn;
							mysqli_query($conn, "DELETE FROM tb_pip WHERE nisn = $id");
							return mysqli_affected_rows($conn);
						}
						//hapus allpip
						function hapus_allpip($id) {
							global $conn;
							mysqli_query($conn, "DELETE FROM tb_pip");
							return mysqli_affected_rows($conn);
						}
							//hapus inbox
							function hapus_inb($id) {
								global $conn;
								mysqli_query($conn, "DELETE FROM tb_inbox WHERE id_inbox='$id'");
								return mysqli_affected_rows($conn);
							}

					
					// //slug text
					// function slugify($text) {
					// 	$text = strtolower($text); // ubah ke lowercase
					// 	$text = preg_replace('/[^a-z0-9]+/', '-', $text); // replace non-alphanumeric with dash
					// 	$text = trim($text, '-'); // remove trailing dash
					// 	return $text;
					//   }


					  function slug($judul){
								// menyimpan post judul dengan variable
							//kita buat post slug dan mengganti spasi dengan tanda hubung(-) 
							$slug2 = preg_replace('/[^a-zA-Z0-9]+/', '-', $judul); 
							// mengubah huruf besar ke kecil
							$slug1= strtolower($slug2);
							// menghapus semua karakter unik dijudul
							$slug = preg_replace("/[^a-zA-Z0-9 -]/","",$slug1);
							// menyimpan post ke database ditabel berita
							return $slug;
					  }


?>
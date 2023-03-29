<?php
session_start();
$_SESSION ['halaman']='index.php';
if( !isset($_SESSION["level"]) ) {
	header("Location: ../../login.php");
	exit;
}
?>
<?php
// Load file koneksi.php
include "../../koneksi.php";

// Load file autoload.php
require 'vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

if(isset($_POST['import'])){ // Jika user mengklik tombol Import
	$nama_file_baru = $_POST['namafile'];
    $path = 'tmp/' . $nama_file_baru; // Set tempat menyimpan file tersebut dimana

    $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    $spreadsheet = $reader->load($path); // Load file yang tadi diupload ke folder tmp
    $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

	$numrow = 1;
	foreach($sheet as $row){
                // Ambil data pada excel sesuai Kolom
                $nisn = $row['A']; // Ambil data nama
                $nama = $row['B']; // Ambil data NIS
                $kelas = $row['C']; // Ambil data jenis kelamin
                $nama_ortu = $row['D']; // Ambil data telepon
                $tahap = $row['E']; // Ambil data alamat
		        $nominal = $row['F']; // Ambil data telepon
                $status = $row['G']; // Ambil data alamat

		// Cek jika semua data tidak diisi
		if($nisn == "" && $nama == "" && $kelas == "" && $nama_ortu == "" && $tahap == ""&& $nominal == ""&& $status == "")
			continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

		// Cek $numrow apakah lebih dari 1
		// Artinya karena baris pertama adalah nama-nama kolom
		// Jadi dilewat saja, tidak usah diimport
		if($numrow > 1){
			// Buat query Insert
			$query = "INSERT INTO tb_pip VALUES('" . $nisn . "','" . $nama . "','" . $kelas . "','" . $nama_ortu . "','" . $tahap . "','" . $nominal . "','" . $status . "')";

			// Eksekusi $query
			mysqli_query($conn, $query);
		}

		$numrow++; // Tambah 1 setiap kali looping
	}

    unlink($path); // Hapus file excel yg telah diupload, ini agar tidak terjadi penumpukan file
}
echo "
<script>
	alert('data berhasil di import!');
	document.location.href = '../pip.php';
</script>
";
<?php
session_start();
$_SESSION ['halaman']='index.php';
if( !isset($_SESSION["level"]) ) {
	header("Location: ../../login.php");
	exit;
}
?>
<?php
// Load file autoload.php
require 'vendor/autoload.php';

// Include librari PhpSpreadsheet
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Import Data Excel dengan PhpSpreadsheet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Load File jquery.min.js yang ada difolder js -->
    <script src="js/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Sembunyikan alert validasi kosong
            $("#kosong").hide();
        });
    </script>
</head>

<body>
    <div class="container">

        <h3>Import Data Excel</h3>
        <form method="post" action="form.php" enctype="multipart/form-data">
            <a href="Format.xlsx">Download Format</a>
            <br><br>
            <div class="form-group">
            <input type="file" name="file">
            </div>
            <a class="btn btn-danger" href="../pip.php" role="button">Kembali</a>
            <button class="btn btn-primary" type="submit" name="preview">Preview</button>
        </form>
    </div>
   

    <?php
    // Jika user telah mengklik tombol Preview
    if (isset($_POST['preview'])) {
        $tgl_sekarang = date('YmdHis'); // Ini akan mengambil waktu sekarang dengan format yyyymmddHHiiss
        $nama_file_baru = 'data' . $tgl_sekarang . '.xlsx';

        // Cek apakah terdapat file data.xlsx pada folder tmp
        if (is_file('tmp/' . $nama_file_baru)) // Jika file tersebut ada
            unlink('tmp/' . $nama_file_baru); // Hapus file tersebut

        $ext = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); // Ambil ekstensi filenya apa
        $tmp_file = $_FILES['file']['tmp_name'];

        // Cek apakah file yang diupload adalah file Excel 2007 (.xlsx)
        if ($ext == "xlsx") {
            // Upload file yang dipilih ke folder tmp
            // dan rename file tersebut menjadi data{tglsekarang}.xlsx
            // {tglsekarang} diganti jadi tanggal sekarang dengan format yyyymmddHHiiss
            // Contoh nama file setelah di rename : data20210814192500.xlsx
            move_uploaded_file($tmp_file, 'tmp/' . $nama_file_baru);

            $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
            $spreadsheet = $reader->load('tmp/' . $nama_file_baru); // Load file yang tadi diupload ke folder tmp
            $sheet = $spreadsheet->getActiveSheet()->toArray(null, true, true, true);

            // Buat sebuah tag form untuk proses import data ke database
            echo "<form method='post' action='import.php'>";

            // Disini kita buat input type hidden yg isinya adalah nama file excel yg diupload
            // ini tujuannya agar ketika import, kita memilih file yang tepat (sesuai yg diupload)
            echo "<input type='hidden' name='namafile' value='" . $nama_file_baru . "'>";

            // Buat sebuah div untuk alert validasi kosong
            echo "<div id='kosong' style='color: red;margin-bottom: 10px;'>
					Semua data belum diisi, Ada <span id='jumlah_kosong'></span> data yang belum diisi.
                </div>";

            echo " <div class='container'>
                    <table class='table table-striped'>
					<tr>
						<th colspan='7' class='text-center'>Preview Data</th>
					</tr>
					<tr>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Ortu</th>
                    <th>Tahap</th>
                    <th>Nominal</th>
                    <th>status</th>
                            </tr>";

            $numrow = 1;
            $kosong = 0;
            foreach ($sheet as $row) { // Lakukan perulangan dari data yang ada di excel
                // Ambil data pada excel sesuai Kolom
                $nisn = $row['A']; // Ambil data nama
                $nama = $row['B']; // Ambil data NIS
                $kelas = $row['C']; // Ambil data jenis kelamin
                $nama_ortu = $row['D']; // Ambil data telepon
                $tahap = $row['E']; // Ambil data alamat
		        $nominal = $row['F']; // Ambil data telepon
                $status = $row['G']; // Ambil data alamat

                // Cek jika semua data tidak diisi
                if ($nisn == "" && $nama == "" && $kelas == "" && $nama_ortu == "" && $tahap == ""&& $nominal == ""&& $status == "")
                    continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)

                // Cek $numrow apakah lebih dari 1
                // Artinya karena baris pertama adalah nama-nama kolom
                // Jadi dilewat saja, tidak usah diimport
                if ($numrow > 1) {
                    // Validasi apakah semua data telah diisi
                    $nisn_td = (!empty($nisn)) ? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                    $nama_td = (!empty($nama)) ? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                    $kelas_td = (!empty($kelas)) ? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                    $ortu_td = (!empty($nama_ortu)) ? "" : " style='background: #E07171;'"; // Jika Telepon kosong, beri warna merah
                    $tahap_td = (!empty($tahap)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                    $nominal_td = (!empty($nominal)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                    $status_td = (!empty($status)) ? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah

                    // Jika salah satu data ada yang kosong
                    if ($nisn == "" && $nama == "" && $kelas == "" && $nama_ortu == "" && $tahap == ""&& $nominal == ""&& $status == "") {
                        $kosong++; // Tambah 1 variabel $kosong
                    }

                    echo "<tr>";
                    echo "<td" . $nisn_td . ">" . $nisn . "</td>";
                    echo "<td" . $nama_td . ">" . $nama . "</td>";
                    echo "<td" . $kelas_td . ">" . $kelas . "</td>";
                    echo "<td" . $ortu_td . ">" . $nama_ortu . "</td>";
                    echo "<td" . $tahap_td . ">" . $tahap . "</td>";
                    echo "<td" . $nominal_td . ">" . $nominal . "</td>";
                    echo "<td" . $status_td . ">" . $status . "</td>";
                    echo "</tr>";
                }

                $numrow++; // Tambah 1 setiap kali looping
            }

            echo "</table>";
            echo "</div>";

            // Cek apakah variabel kosong lebih dari 0
            // Jika lebih dari 0, berarti ada data yang masih kosong
            if ($kosong > 0) {
    ?>
                <script>
                    $(document).ready(function() {
                        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                        $("#jumlah_kosong").html('<?php echo $kosong; ?>');

                        $("#kosong").show(); // Munculkan alert validasi kosong
                    });
                </script>
    <?php
            } else { // Jika semua data sudah diisi

                // Buat sebuah tombol untuk mengimport data ke database
                echo "<div class = 'container'>";
                echo "<button class='btn btn-primary' type='submit' name='import'>Import</button>";
                echo "</div>";
            }

            echo "</form>";
        } else { // Jika file yang diupload bukan File Excel 2007 (.xlsx)
            // Munculkan pesan validasi
            echo "<div class='container' style='color: red;margin-bottom: 10px;'>
					Hanya File Excel (.xlsx) yang diperbolehkan
                </div>";
        }
    }
    ?>
</body>

</html>
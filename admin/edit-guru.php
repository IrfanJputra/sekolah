<?php
session_start();
$_SESSION ['halaman']='index.php';
if( !isset($_SESSION["level"]) ) {
	header("Location: ../login.php");
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Projects</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
  <script src="https://cdn.tiny.cloud/1/mm6l99xsdy8839w49co27k6rib54auzv3dsdlaehcanu59xq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <style>
    .tox-notification {display: none !important;}
</style>
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

<?php
        include 'v_navbar.php';
        include 'v_sidebar.php';
        include '../koneksi.php';
        include '../function.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>  
    <!-- Main content -->
    <section class="content">
    <?php

$id = $_GET["id_guru"];

//query data siswa berdasarkan id
$sqlGet = "SELECT * FROM tb_guru WHERE id_guru = '$id'";
$queryGet = mysqli_query($conn, $sqlGet);
$baris = mysqli_fetch_array($queryGet);
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('Berhasil Disimpan!');
				document.location.href = 'guru.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Gagal Disimpan!');
				document.location.href = 'guru.php';
			</script>
		";
	}


}
?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form method='post' action='' enctype="multipart/form-data">
                        <input type="hidden" name="gambarLama" value="<?php echo $baris['gambar']; ?>">
                            <div class="mb-3">
                                <label><strong>Nama</strong></label>
                                <input type="text" name="nama" class="form-control" value="<?= $baris['nama'];?>" >
                            </div>
                            <div class="mb-3">
                                <label><strong>NIP</strong></label>
                                <input type="text" name="nip" class="form-control" value="<?= $baris['nip'];?>" >
                            </div>
                            <div class="mb-3">
                                <label><strong>Jabatan</strong></label>
                                <input type="text" name="jabatan" class="form-control" value="<?= $baris['jabatan'];?>" >
                            </div>
                            <div class="mb-3">
                                <label><strong>Alamat</strong></label>
                                <input type="text" name="alamat" class="form-control" value="<?= $baris['alamat'];?>" >
                            </div>
                            <div class="form-group">
                            <label for="foto">Foto</label>
                            <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                            
                            </div>
                            </div>
                            <p style="color: red;">  *Abaikan Jika Tidak ada perubahan gambar</p>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>

    <!-- Script -->
    <script>
        tinymce.init({
            forced_root_block : false,
            selector: '#mytextarea',
            plugins: [
                'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
                'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
                'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','help','wordcount'
            ],
            toolbar: 'undo redo | formatpainter casechange styleselect | bold italic backcolor | ' +
            'alignleft aligncenter alignright alignjustify | ' +
            'bullist numlist checklist outdent indent | removeformat | a11ycheck code table help'
        });
    </script>
</body>
</html>

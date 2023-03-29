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

$id = $_GET["nisn"];

//query data siswa berdasarkan id
$sqlGet = "SELECT * FROM tb_pip WHERE nisn = '$id'";
$queryGet = mysqli_query($conn, $sqlGet);
$baris = mysqli_fetch_array($queryGet);
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( ubah_pip($_POST) > 0 ) {
		echo "
			<script>
				alert('Berhasil Disimpan!');
				document.location.href = 'pip.php';
			</script>
		";
	} else {
		echo '<pre>';
    print_r($_POST);
	}


}
?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">

                        <form method='post' action='' enctype="multipart/form-data">
                          <div class="mb-3">
                              <label><strong>NISN</strong></label>
                              <input type="text" name="nisn" class="form-control" value="<?= $baris['nisn'];?>" >
                          </div>
                            <div class="mb-3">
                                <label><strong>Nama</strong></label>
                                <input type="text" name="nama" class="form-control" value="<?= $baris['nama'];?>" >
                            </div>
                            <div class="mb-3">
                                <label><strong>Kelas</strong></label>
                                <input type="text" name="kelas" class="form-control" value="<?= $baris['kelas'];?>" >
                            </div>
                            <div class="mb-3">
                                <label><strong>Orang Tua</strong></label>
                                <input type="text" name="nama_ortu" class="form-control" value="<?= $baris['nama_ortu'];?>" >
                            </div>
                            <div class="mb-3">
                                <label><strong>Tahap</strong></label>
                                <input type="text" name="tahap" class="form-control" value="<?= $baris['tahap'];?>" >
                            </div>
                            <div class="mb-3">
                                <label><strong>Nominal</strong></label>
                                <input type="text" name="nominal" class="form-control" value="<?= $baris['nominal'];?>" >
                            </div>
                            
                            <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status"  class="form-control">
                            <option readonly>-----------Select----------</option>
                            <option value="Sudah Cair"> Sudah Cair</option>
                            <option value="Belum Cair"> Belum Cair</option>
                            </select>
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

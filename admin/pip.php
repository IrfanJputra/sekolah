<?php
session_start();
$_SESSION ['halaman']='index.php';
if( !isset($_SESSION["level"]) ) {
	header("Location: ../login.php");
	exit;
}
?>

<?php
include '../koneksi.php';
require '../function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <?php
include 'v_navbar.php';
include 'v_sidebar.php';
 ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Guru</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Guru</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-lg">Tambah</button>
                  <a href="excel/form.php" class="btn btn-danger">Import Excel</a>  
                  <a href="del-allpip.php" class="btn btn-danger" onclick="return confirm('Yakin?');">Hapus Semua</a>                    
    
                
      
<?php


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah_pip($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'pip.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'pip.php';
			</script>
		";
	}


}
?>

     <!-- /.Modal tambah data-->
     <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah PIP</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form method='post' action='' enctype="multipart/form-data">
                        <input type="hidden" name="gambarLama" value="<?php echo $baris['gambar']; ?>">
                            <div class="mb-3">
                                <label><strong>Nama</strong></label>
                                <input type="text" name="nama" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label><strong>NISN</strong></label>
                                <input type="text" name="nisn" class="form-control"  >
                            </div>
                            <div class="mb-3">
                                <label><strong>Kelas</strong></label>
                                <input type="text" name="kelas" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label><strong>Orang Tua</strong></label>
                                <input type="text" name="nama_ortu" class="form-control" >
                            </div>
                            <div class="mb-3">
                                <label><strong>Tahap</strong></label>
                                <input type="text" name="tahap" class="form-control"  >
                            </div>
                            <div class="mb-3">
                                <label><strong>Nominal</strong></label>
                                <input type="text" name="nominal" class="form-control"  >
                            </div>
                            <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                            <option readonly>-Select-</option>
                            <option value="Sudah Cair"> Sudah Cair</option>
                            <option value="Belum Cair"> Belum Cair</option>
                            </select>
                            </div>
                            <div class="d-flex justify-content-center">
                                <input type="submit" name="submit" value="Submit" class="btn btn-success">
                            </div>
                        </form>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
      <!-- /.end modal -->
 


              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Orang Tua</th>
                    <th>Tahap</th>
                    <th>Nominal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
        include '../koneksi.php';
        $no =1;
        $data = mysqli_query($conn,"SELECT * FROM tb_pip");
        while($baris= mysqli_fetch_array($data)){
            ?>
            <tr>
                
                <td><?php echo $no++; ?></td>
                <td><?php echo $baris['nisn']; ?></td>
                <td><?php echo $baris['nama']; ?></td>
                <td><?php echo $baris['kelas']; ?></td>
                <td><?php echo $baris['nama_ortu']; ?></td>
                <td><?php echo $baris['tahap']; ?></td>
                <td><?php echo $baris['nominal']; ?></td>
                <td><?php echo $baris['status']; ?></td>
                <td>
                <a href="edit-pip.php?nisn=<?=$baris['nisn']?>" class="btn btn-primary">Edit</a>                    
                <a href="del-pip.php?nisn=<?= $baris['nisn'];?>" class="btn btn-danger" onclick="return confirm('Yakin?');">Hapus</a>                    
  
              </td>
                </tr>
                
            </form>
            </div>
          <!-- /.modal-content -->
        </div>
        
        <!-- /.modal-dialog -->
      </div>
      </div>
 
            <?php 
        }
        ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

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
            <h1>Data Siswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Siswa</li>
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
      
<?php


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah_siswa($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'siswa.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'siswa.php';
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
              <h4 class="modal-title">Tambah Siswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn" placeholder="NISN" required>
                </div>
                <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas" class="form-control">
                <option readonly>-- Pilih Kelas --</option>
                <option value="1"> Kelas 1</option>
                <option value="2"> Kelas 2</option>
                <option value="3"> Kelas 3</option>
                <option value="4"> Kelas 4</option>
                <option value="5"> Kelas 5</option>
                <option value="6"> Kelas 6</option>
                </select>
                </div>
                <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" id="agama" name="agama" placeholder="agama">
                </div>
                <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="tempat_lahir">
                </div>
                <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" placeholder="tanggal_lahir">
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
                </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
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
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Agama</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 
        include '../koneksi.php';
        $no =1;
        $data = mysqli_query($conn,"SELECT * FROM tb_siswa");
        while($baris= mysqli_fetch_array($data)){
            ?>
            <tr>
                
                <td><?php echo $no++; ?></td>
                <td><?php echo $baris['nama']; ?></td>
                <td><?php echo $baris['nisn']; ?></td>
                <td><?php echo $baris['kelas']; ?></td>
                <td><?php echo $baris['agama']; ?></td>
                <td><?php echo $baris['tempat_lahir']; ?></td>
                <td><?php echo $baris['tanggal_lahir']; ?></td>
                <td><?php echo $baris['alamat']; ?></td>
                <td>
                <a href="" class="btn btn-primary" data-toggle="modal" data-target="#modalEdit<?= $no ?>">Edit</a>                    
                <a href="" class="btn btn-danger" data-toggle="modal" data-target="#modal-default<?= $no ?>">Hapus</a>                    
  
              </td>
                </tr>
      

                <?php
                    // cek apakah tombol submit sudah ditekan atau belum
                    if( isset($_POST["ubah"]) ) {
                      
                      // cek apakah data berhasil diubah atau tidak
                      if( ubah_siswa($_POST) > 0 ) {
                        echo "
                          <script>
                            alert('data berhasil diubah!');
                            document.location.href = 'siswa.php';
                          </script>
                        ";
                      } else {
                        echo "
                        <script>
                          alert('data gagal diubah!');
                          document.location.href = 'siswa.php';
                        </script>
                      ";
                      }
                    }
                    ?>

                      
                <!-- /.Modal edit data-->
     <div class="modal fade" id="modalEdit<?= $no ?>">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Siswa</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <div class="modal-body">
           <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" value="<?= $baris['nama']; ?>" name="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                <label for="nisn">NISN</label>
                <input type="text" class="form-control" value="<?= $baris['nisn']; ?>" name="nisn" placeholder="NISN" required>
                </div>
                <div class="form-group">
                <label for="kelas">Kelas</label>
                <select name="kelas" id="kelas" class="form-control">
                <option value="" disabled>-- Pilih Kelas --</option>
                <option  value="1" <?= ($baris['kelas'] == '1' ? 'selected' : ''); ?>  > Kelas 1</option>
                <option  value="2"<?= ($baris['kelas'] == '2' ? 'selected' : ''); ?>  > Kelas 2</option>
                <option  value="3"<?= ($baris['kelas'] == '3' ? 'selected' : ''); ?>  > Kelas 3</option>
                <option  value="4"<?= ($baris['kelas'] == '4' ? 'selected' : ''); ?>  > Kelas 4</option>
                <option  value="5"<?= ($baris['kelas'] == '5' ? 'selected' : ''); ?>  > Kelas 5</option>
                <option  value="6"<?= ($baris['kelas'] == '6' ? 'selected' : ''); ?>  > Kelas 6</option>
                </select>
                </div>
                <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" class="form-control" value="<?= $baris['agama']; ?>" name="agama" placeholder="agama">
                </div>
                <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" value="<?= $baris['tempat_lahir']; ?>" name="tempat_lahir" placeholder="tempat_lahir">
                </div>
                <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" value="<?= $baris['tanggal_lahir']; ?>" name="tanggal_lahir" placeholder="tanggal_lahir">
                </div>
                <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" value="<?= $baris['alamat']; ?>" name="alamat" placeholder="alamat">
                </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                <button type="submit" name="ubah" class="btn btn-primary">Simpan</button>
              </div>
            </form>
            </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      </div>
      <!-- /.end modal -->
 
      <?php
                    // cek apakah tombol submit sudah ditekan atau belum
                    if( isset($_POST["hapus"]) ) {
                      
                      // cek apakah data berhasil diubah atau tidak
                      if( hapus_siswa($_POST) > 0 ) {
                        echo "
                          <script>
                            alert('data berhasil di hapus!');
                            document.location.href = 'siswa.php';
                          </script>
                        ";
                      } else {
                        echo "
                          <script>
                            alert('data gagal di hapus!');
                            document.location.href = 'siswa.php';
                          </script>
                        ";
                      }
                    }
                    ?>
      <!-- /.Modal hapus data-->
      <div class="modal fade" id="modal-default<?= $no ?>">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
      <h4 class="modal-title">Konfirmasi Hapus Data</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <form action="" method="post">
        <input type="hidden" name="id_siswa" value="<?= $baris['id_siswa']; ?>">
        <div class="modal-body">
          <p>Apakah anda yakin ingin menhapus data ini?</p>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary" name="hapus">Hapus</button>
        </div>
      </form>
      </div>

      </div>

      </div>

        <!-- /.end modal -->
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

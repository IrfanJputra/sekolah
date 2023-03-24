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
  <script src="https://cdn.tiny.cloud/1/mm6l99xsdy8839w49co27k6rib54auzv3dsdlaehcanu59xq/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
  <style>
    .tox-notification {display: none !important;}
</style>
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
            <h1>Artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Artikel</li>
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
      
  <!-- aksi   -->
  <?php

  // cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	if( tambah_artikel($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
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


}
?>

    <!-- /.Modal tambah data-->
 <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Artikel</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                              <label><strong>Judul</strong></label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="mb-1">
                                <label><strong>Artikel</strong></label>
                                <textarea id="" name='artikel' class="form-control"></textarea><br>
                            </div>

                            <div class="mb-3" >
                            <label for="mutasi">Tag</label>
                            <select  name="tagline" class="form-control" value="tagline" >
                            <option disabled selected> Pilih </option>
                            <?php 
                            include '../koneksi.php';
                            $data = mysqli_query($conn, "SELECT * FROM tb_tagline WHERE id_tag;");
                            while($baris= mysqli_fetch_array($data)){
                            ?>
                                <option value="<?php echo $baris['id_tag']; ?>"><?php echo $baris['tagline']; ?></option> 

                            <?php
                            }
                                ?>
                            </select>
                            </div>
                            <div class="form-group">
                            <label for="foto">Foto</label>
                            <div class="input-group">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="gambar" name="gambar">
                            <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                            <input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
                            <input type="hidden" name="slug" id="slug" value="0" />
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
                    <th> No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Tag</th>
                    <th>Slug</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                  </tr>
              </thead>
                  <tbody>
                  <?php 
       include '../koneksi.php';
       $no =1;
       $data = mysqli_query($conn, "SELECT * FROM tb_artikel, tb_tagline WHERE tb_artikel.id_tag = tb_tagline.id_tag");
      
       while($baris= mysqli_fetch_assoc($data)){
        $text_short = substr($baris['artikel'], 0, 100) . "...";
           ?>
           <tr>
               
               <td><?php echo $no++; ?></td>
               <td><?php echo $baris['judul']; ?></td>
               <td><?php echo $text_short ?></td>
               <td><?php echo $baris['tagline']; ?></td>
               <td><?php echo $baris['slug']; ?></td>
               <td><a href="upload/<?php echo $baris['gambar']; ?>" target="_blank"><img src="../upload/<?php echo $baris['gambar']; ?>" width="50"> </a></td>
   
      
                   <td>
               <a href="edit-artikel.php?id_artikel=<?php echo $baris['id_artikel'];?>" class="btn btn-primary">Edit</a>                    
               <a href="del-artikel.php?id_artikel=<?= $baris['id_artikel'];?>" class="btn btn-danger" onclick="return confirm('Yakin?');">Hapus</a>                    
 
       </td>
       </tr>
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

<!DOCTYPE html>
<html lang="en">
   <head>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Penerima Dana PIP 2023 SDN-3 Kereng Bangkirai</title>
    <link rel="canonical" href="#" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta http-equiv="expires" content="Fri, 18 Jul 2022 1:00:00 GMT">
    <meta http-equiv="page-enter" content="revealtrans(duration=seconds,transition=num)">
    <meta http-equiv="page-exit" content="revealtrans(duration=seconds,transition=num)">
    <meta content='' property='og:site_name'>
    <meta content='' property='og:title'>
    <meta content='website' property='og:type'>
    <link href='' rel='openid.delegate'>
    <link href='' rel='canonical'>
    <meta content='#' property='og:url'>
    <meta content='' name='generator'>
    <meta property='og:image'>
    <link href='user/assets/icon/favicon.ico' rel='icon' type='image/x-icon'>
    <link href="user/assets/icon/favicon.ico" rel="shortcut icon">
    <link href='user/assets/icon' rel='icon' sizes='32x32'>
    <link href='user/assets/icon' rel='icon' sizes='192x192'>
    <link href='user/assets/icon' rel='apple-touch-icon-precomposed'>
    <meta content='../user/assets/icon/ms-icon-144x144.png' name='msapplication-TileImage'>
    <meta content='#49952E' name='msapplication-navbutton-color'>
    <meta content='#49952E' name='apple-mobile-web-app-status-bar-style'>
    <meta content='#49952E' name='theme-color'>
    <meta content='#' name='google-site-verification'>
    <meta content='Indonesia' name='gßeo.placename'>
    <meta content='SMITC CMS ' name='Author'>
    <meta content='general' name='rating'>
    <meta content='id' name='geo.country'>
    <meta content="id_ID" property="og:locale">
    <meta content="en_US" property="og:locale:alternate">
    <meta content="en_GB" property="og:locale:alternate">
    <link href='#' rel='dns-prefetch'>
    <link href='#' rel='dns-prefetch'>
    <link href='#' rel='dns-prefetch'>
      <link rel="stylesheet" type="text/css" href="user/assets/css/pages/alumni.min.css">
      <link rel="stylesheet" type="text/css" href="user/assets/css/font-awesome.min.css">
        <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
      <script type="text/javascript">
         var BASE_URL = '#';
      </script>
      <script type="text/javascript" src="user/assets/js/jquery-3.4.1.min.js"></script>
   </head>
   <body>
      <section class="hero">
      <div class="navtop">
        <nav class="wrapper">
          <ul>
            <li>
              <a href="https://goo.gl/maps/UguyXTrNLRqXpkRW9" target="_blank" rel="noreferrer noopener" class="waves-effect">
                <i class="fa fa-map-marker"></i>Jl. Panenga Raya V, Palangka Raya 73113 </a>
            </li>

            <li>
              <a href="mailto:sdnkerengbangkirai3@gmail.com" class="waves-effect">
                <i class="fa fa-envelope"></i>sdnkerengbangkirai3@gmail.com </a>
            </li>
          </ul>
        </nav>
      </div>
<?php include 'navbar.php' ?>
      </section>
      <section class="image-top bg-image" data-image="user/assets/img/landing/pattern-bg.png" style="background-image: url(&quot;user/assets/img/landing/pattern-bg.png&quot;);">
         <div class="wrapper">
            <div class="container">
               <h1>Data Penerima PIP 2023</h1>
            </div>
         </div>
      </section>
      <section class="wrapper content">
         <div class="breadcrumb">
            <ul>
               <li>
                  <a href="#" class="waves-effect">
                     <i class="fa fa-home"></i>
                     <span>Beranda</span>
                  </a>
               </li>
               <li>
                  <span class="petunjuk">
                     <i class="fa fa-chevron-right"></i>
                  </span>
               </li>
               <li>
                  <span>Data PIP</span>
               </li>
            </ul>
         </div>
         <div class="bagikan">
            <main>
            <article>
            <div class="wrapalumni">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th> No</th>
                    <th>Nama</th>
                    <th>NISN</th>
                    <th>Kelas</th>
                    <th>Orang Tua</th>
                    <th>Tahap</th>
                    <th>Nominal</th>
                    <th>Status</th>
                  </tr>
              </thead>
                  <tbody>
                  <?php 
       include 'koneksi.php';
       $no =1;
       $data = mysqli_query($conn, "SELECT * FROM tb_pip ORDER BY nisn DESC");
      
       while($baris= mysqli_fetch_assoc($data)){
        
           ?>
           <tr>
               
               <td><?php echo $no++; ?></td>
               <td><?php echo $baris['nama']; ?></td>   
               <td><?php echo $baris['nisn']; ?></td>   
               <td><?php echo $baris['kelas']; ?></td>   
               <td><?php echo $baris['nama_ortu']; ?></td>   
               <td><?php echo $baris['tahap']; ?></td>   
               <td><?php echo $baris['nominal']; ?></td>   
               <td style="font-weight: bolder;"><?php echo $baris['status']; ?></td>   
       </tr>
       <?php
       }
       ?>
                  </tbody>
                </table>
                <p style="color: red;">*Jika Status Dana Sudah Cair, Silahkan Datang Ke Sekolah Dengan membawa Buku Rekening Siswa dan KTP*</p>
            </div>
            </article>              
            </main>
         </div>
      </section>
      <div id="search_popup" class="modal">
         <h2>Cari Sesuatu...</h2>
         <form class="search" action="https://www.smandakebumen.sch.id/search">
            <input type="text" placeholder="Search" aria-label="search" name="query">
            <button class="btn btn-anim btn-color" type="submit">
               <i class="fa fa-search"></i>
            </button>
         </form>
      </div>
      <?php include 'footer.php' ?>
      <div class="overlay"></div>
      <div class="backtotop hide waves-effect is-active" id="backtotop">
         <span></span>
      </div>
      <div class="wrapfab" id="fab">
         <input id="fabbuton" type="checkbox" class="fabcheckbox">
         <label class="fabutton waves-effect" for="fabbuton">
            <span class="fab_dots dots_1"></span>
            <span class="fab_dots dots_2"></span>
            <span class="fab_dots dots_3"></span>
         </label>
         <div class="fab_target">
            <a href="https://www.smandakebumen.sch.id/about" class="fab_action action_1 waves-effect btn-anim">
               <i class="fa fa-info"></i>
            </a>
            <a href="javascript:void(0)" class="fab_action action_2 waves-effect btn-anim" id="fullscreen">
               <i class="fa fa-arrows-alt"></i>
            </a>
            <a href="https://www.smandakebumen.sch.id/" class="fab_action action_3 waves-effect btn-anim">
               <i class="fa fa-home"></i>
            </a>
            <a href="javascript:void(0)" class="fab_action action_4 waves-effect btn-anim" id="darkmode">
               <i class="fa fa-lightbulb-o"></i>
            </a>
            <a href="https://www.smandakebumen.sch.id/" class="fab_action action_5 waves-effect btn-anim">
               <i class="fa fa-address-card"></i>
            </a>
         </div>
      </div>
      <script type="text/javascript" src="user/assets/js/pages/landing.min.js"></script>
      <!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy","excel", "print"]
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
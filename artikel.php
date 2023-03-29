<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Semua Postingan</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta http-equiv="expires" content="Fri, 18 Jul 2022 1:00:00 GMT">
      <meta http-equiv="page-enter" content="revealtrans(duration=seconds,transition=num)">
      <meta http-equiv="page-exit" content="revealtrans(duration=seconds,transition=num)">
      <!--[if IE]>
								<script> (function() { var html5 = ("abbr,article,aside,audio,canvas,datalist,details," + "figure,footer,header,hgroup,mark,menu,meter,nav,output," + "progress,section,time,video").split(','); for (var i = 0; i < html5.length; i++) { document.createElement(html5[i]); } try { document.execCommand('BackgroundImageCache', false, true); } catch(e) {} })(); 
								</script>
								<![endif]-->
      <meta content='' property='og:site_name'>
      <meta content='' property='og:title'>
      <meta content='website' property='og:type'>
      <link href='index.html' rel='openid.delegate'>
      <link href='index.html' rel='canonical'>
      <meta content='#/' property='og:url'>
      <meta content='SMITC_CMS' name='generator'>
      <meta property='og:image'>
      <link href='user/assets/icon/favicon.ico' rel='icon' type='image/x-icon'>
      <link href="user//assets/icon/favicon.ico" rel="shortcut icon">
      <link href='user/assets/icon/android-icon-192x192.png' rel='icon' sizes='32x32'>
      <link href='user/assets/icon/' rel='icon' sizes='192x192'>
      <link href='user/assets/icon/' rel='apple-touch-icon-precomposed'>
      <meta content='user/assets/icon/' name='msapplication-TileImage'>
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
      <link rel="stylesheet" href="user/assets/css/pages/postingan_type.min.css" type="text/css" />
      <link type="text/css" rel="stylesheet" href="user/assets/css/font-awesome.min.css">
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
                  <!-- <li>
                     <a href="tel:0" class="waves-effect">
                        <i class="fa fa-phone"></i>0 </a>
                  </li> -->
                  <li>
                     <a href="mailto:sdnkerengbangkirai3@gmail.com" class="waves-effect">
                        <i class="fa fa-envelope"></i>sdnkerengbangkirai3@gmail.com </a>
                  </li>
               </ul>
            </nav>
         </div>
         <nav class="mainav" id="sticky_nav">
            <nav class="wrapper">
               <a href="/" class="logo waves-effect">
                  <img src="user/assets/img/logo/logo.gif" alt="SD Negeri 3 Kereng Bangkirai">
                  <span>SD Negeri 3 Kereng Bangkirai</span>
               </a>
               <div class="menu">
                  <div class="menu-toggle" id="mobile-menu">
                     <span class="bar"></span>
                     <span class="bar"></span>
                     <span class="bar"></span>
                  </div>
                  <ul>
                     <li>
                        <a class="waves-effect " href="/">
                           <i class="fa fa-home mr-2"></i>Beranda </a>
                     </li>
                     <li>
                        <a class="waves-effect " href="detail/visi-dan-misi">
                           <i class="fa fa-star mr-2"></i>Visi dan Misi </a>
                     </li>
                     <li>
                        <a class="waves-effect " href="profil.php">
                           <i class="fa fa-user mr-2"></i>Profil </a>
                     </li>
                     <li>
                        <a class="waves-effect " href="#">
                           <i class="fa fa-files-o mr-2"></i>Postingan </a>
                     </li>
                     <li>
                        <a href="#search_popup" class="waves-effect btn btn-anim btn-color search">
                           <i class="fa fa-search"></i>
                        </a>
                     </li>
                     <li id="login">
                        <a href="login.php" class="waves-effect btn btn-anim btn-color">Login</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </nav>
      </section>
      <section class="wrapper content">
         <div class="bagikan">
            <main class="postingan">
               <div class="headingsection">
                  <h1>Semua Postingan</h1>
               </div>
               <div class="postwrap">
                  <div class="post">
                  <?php
            include "koneksi.php";
                  include 'function.php';
                        // Variabel untuk pagination
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $limit = 4; // Jumlah data per halaman
            $start = ($page - 1) * $limit; // Mulai dari data ke-berapa
            $result = mysqli_query($conn, "SELECT * FROM tb_artikel, tb_tagline WHERE tb_artikel.id_tag = tb_tagline.id_tag ORDER BY tanggal DESC LIMIT $start, $limit");

            ?>
            <?php 
            while ($data= mysqli_fetch_array($result)){ ?>
              <div class="grid">
              <a href="#" class="label waves-effect" title="#">
                <i class="fa fa-user"></i> <?=$data['tagline']?> </a>
              <div class="image waves-effect">
                <img class="" src="upload/<?=$data['gambar']?>" alt="<?=$data['judul']?>">
                <a href="detail/<?=$data['slug']?>" title="<?=$data['judul']?>"></a>
              </div>
              <div class="box_desc">
                <a href="detail/<?=$data['slug']?>" class="title waves-effect" title="<?=$data['judul']?>">
                  <span>
                    <h3><?=$data['judul']?></h3>
                  </span>
                </a>
              </div>
            </div>
            <?php }
            ?>
                     
                  </div>



                  
                  <div class="wrappagination">
                     <ul class="pagination">
                     <?php
                  // Menampilkan link pagination
                  $sql_total = "SELECT COUNT(*) AS total FROM tb_artikel";
                  $result_total = mysqli_query($conn, $sql_total);
                  $row_total = mysqli_fetch_assoc($result_total);
                  $total = $row_total['total'];
                  $pages = ceil($total / $limit); // Jumlah halaman
                  $prev = $page - 1; // Halaman sebelumnya
                  $next = $page + 1; // Halaman berikutnya
                  $jumlah_number = 1; //jumlah halaman ke kanan dan kiri dari halaman yang aktif
                  $start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
                  $end_number = ($page < ($pages - $jumlah_number))? $page + $jumlah_number : $pages;
                  
                  if($page == 1){
                    echo '<li class="page-item disabled"><a class="page-link" href="#">First</a></li>';
                    echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&laquo;</span></a></li>';
                  } else {
                    $prev = ($page > 1)? $page - 1 : 1;
                    echo '<li class="page-item"><a class="page-link" href="?page=1">First</a></li>';
                    echo '<li class="page-item"><a class="page-link" href="?page='.$prev.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
                  }
    
                  for($i = $start_number; $i <= $end_number; $i++){
                    $link_active = ($page == $i)? 'active' : '';
                    echo '<li class="page-item '.$link_active.'"><a class="page-link" href="?page='.$i.'">'.$i.'</a></li>';
                  }
    
                  if($page == $pages){
                    echo '<li class="page-item disabled"><a class="page-link" href="#"><span aria-hidden="true">&raquo;</span></a></li>';
                    echo '<li class="page-item disabled"><a class="page-link" href="#">Last</a></li>';
                  } else {
                    $next = ($page < $pages)? $page + 1 : $pages;
                    echo '<li class="page-item"><a class="page-link" href="?page='.$next.'" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';
                    echo '<li class="page-item"><a class="page-link" href="?page='.$pages.'">Last</a></li>';
                  }
                  ?>

                        <!-- <li class="page-item active">

                        </li>
                        <li class="page-item">
                           <a href="#" data-ci-pagination-page="2">2</a>
                        </li>
                        <li class="page-item">
                           <a href="#" data-ci-pagination-page="3">3</a>
                        </li>
                        <li class="page-item page-main">
                           <a href="#" data-ci-pagination-page="2" rel="next">Next <i class="fa fa-angle-right"></i>
                           </a>
                        </li>
                        <li class="page-item page-main">
                           <a href="#" data-ci-pagination-page="41">Last <i class="fa fa-angle-double-right "></i>
                           </a>
                        </li> -->
                     </ul>
                  </div>
               </div>
            </main>

            <?php
           
            $result = mysqli_query($conn, "SELECT * FROM tb_tagline");
            
            ?>
            <aside>
            <div class="sidebar nowrap">
                  <div class="labelwrap post_type">

                  <?php 
            while ($data= mysqli_fetch_array($result)){ ?>
               
               <a href="#" class="label btn-anim btn waves-effect">
                        <span class="text">
                           <i class="fa fa-tag"></i><?=$data['tagline']?> </span>
                     </a>
            <?php }
            ?>


                  </div>
               </div>

               <?php
            
            $result = mysqli_query($conn, "SELECT * FROM tb_artikel LIMIT 5");
            $no=1;
            ?>
               <div class="sidebar nowrap">
                  <h2 id="rand_agen">Postingan Random</h2>
                  <div class="wrappost styletiga" id="random_id">
                  <?php 
                  while ($data= mysqli_fetch_assoc($result)){ ?>
               
               <div class="wraptiga">
                        <span class="number"><?=$no++?></span>
                        <a href="detail/<?=$data['slug']?>" title="detail/<?=$data['judul']?>" class="waves-effect heading btn-anim"><?=$data['judul']?></a>
                     </div>
            <?php }
            ?>

 
                  </div>
               </div>




            </aside>
         </div>
      </section>
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
            <a href="#/about" class="fab_action action_1 waves-effect btn-anim" title="Tentang Developer">
               <i class="fa fa-info"></i>
            </a>
            <a href="javascript:void(0)" class="fab_action action_2 waves-effect btn-anim" id="fullscreen" title="Fullscreen?">
               <i class="fa fa-arrows-alt"></i>
            </a>
            <a href="#/" class="fab_action action_3 waves-effect btn-anim" title="Utama">
               <i class="fa fa-home"></i>
            </a>
            <a href="javascript:void(0)" class="fab_action action_4 waves-effect btn-anim" id="darkmode" title="Ubah Tema">
               <i class="fa fa-lightbulb-o"></i>
            </a>
            <a href="#/" class="fab_action action_5 waves-effect btn-anim" title="Kontak">
               <i class="fa fa-address-card"></i>
            </a>
         </div>
      </div>
      <div id="search_popup" class="modal">
         <h2>Cari Sesuatu...</h2>
         <form class="search" action="#/search">
            <input type="text" placeholder="Search" aria-label="search" name="query">
            <button class="btn btn-anim btn-color" type="submit">
               <i class="fa fa-search"></i>
            </button>
         </form>
      </div>
      <?php include 'footer.php' ?>
      <script type="text/javascript" src="user/assets/js/pages/postingan_type.min.js"></script>
      <script type="text/javascript" src="user/assets/js/pages/pages-core.min.js"></script>
   </body>
</html>
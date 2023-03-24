<?php
 include "koneksi.php";
 include 'function.php';
    $slug = $_GET['id'];
    $judul = str_replace("-"," ",$id);
    $judul = ucwords($judul);
       
   
    
        $result = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE slug ='$slug'");
        $data = mysqli_fetch_array($result);
         // ambil data
         $input = $data['artikel'];
         // memecah string input berdasarkan karakter '\r\n\r\n'
         $pecah = explode("\r\n\r\n", $input);
         
         // string kosong inisialisasi
         $text = "";
         for ($i=0; $i<=count($pecah)-1; $i++)
         {
            $part = str_replace($pecah[$i], "<br>".$pecah[$i]."</br>", $pecah[$i]);
            $text .= $part;
         }




if(($data['id_artikel']) == 0) {
    // Jika data tidak ditemukan, tampilkan halaman error
    header("location: ../404.php");
    exit();
  } else {
    // Jika data ditemukan, tampilkan data
   
    
  }

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title><?=$judul?></title>
      <meta name="keywords" content="#,sman 2 kebumen,sma negeri 2 kebumen,smitc,smitc cms,sma,pelajar,kebumen,jawa tengah,indonesia">
      <meta name="description" content="">
      <meta http-equiv="expires" content="Fri, 18 Jul 2022 1:00:00 GMT">
      <meta http-equiv="page-enter" content="revealtrans(duration=seconds,transition=num)">
      <meta http-equiv="page-exit" content="revealtrans(duration=seconds,transition=num)">
      <meta content='SMA Negeri 2 Kebumen' property='og:site_name'>
      <meta content='SMA Negeri 2 Kebumen' property='og:title'>
      <meta content='website' property='og:type'>
      <link href='' rel='openid.delegate'>
      <link href='' rel='canonical'>
      <meta property='og:image'>
      <link href='../user/assets/icon/favicon.ico' rel='icon' type='image/x-icon'>
      <link href="../user//assets/icon/favicon.ico" rel="shortcut icon">
      <link href='../user/assets/icon/android-icon-192x192.png' rel='icon' sizes='32x32'>
      <link href='../user/assets/icon/' rel='icon' sizes='192x192'>
      <link href='../user/assets/icon/' rel='apple-touch-icon-precomposed'>
      <meta content='../user/assets/icon/' name='msapplication-TileImage'>
      <meta content='#49952E' name='msapplication-navbutton-color'>
      <meta content='#49952E' name='apple-mobile-web-app-status-bar-style'>
      <meta content='#49952E' name='theme-color'>
      <meta content='#' name='google-site-verification'>
      <meta content='Indonesia' name='gßeo.placename'>
      <meta content="id_ID" property="og:locale">
      <meta content="en_US" property="og:locale:alternate">
      <meta content="en_GB" property="og:locale:alternate">
      <link rel="stylesheet" href="../user/assets/css/postingan/postingan.min.css" type="text/css" />
      <link type="text/css" rel="stylesheet" href="../user/assets/css/font-awesome.min.css">
      <script type="text/javascript">
         var BASE_URL = '#';
      </script>
      <script type="text/javascript" src="../user/assets/js/jquery-3.4.1.min.js"></script>
   </head>
   <body>
      <section class="hero">
         <div class="navtop">
            <nav class="wrapper">
               <ul>
                  <li>
                     <a href="https://goo.gl/maps/UguyXTrNLRqXpkRW9" target="_blank" rel="noreferrer noopener" class="waves-effect">
                        <i class="fa fa-map-marker"></i>Jl. Panenga Raya V, Palangka Raya 73113  </a>
                  </li>
                  <!-- <li>
                     <a href="tel:0287-381820" class="waves-effect">
                        <i class="fa fa-phone"></i>0287-381820 </a>
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
               <a href="/sekolah" class="logo waves-effect">
                  <img src="../user/assets/img/logo/logo.gif" alt="SD Negeri 3 Kereng Bangkirai">
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
                        <a class="waves-effect " href="/sekolah">
                           <i class="fa fa-home mr-2"></i>Beranda </a>
                     </li>
                     <li>
                        <a class="waves-effect " href="../detail/Visi-Dan-Misi">
                           <i class="fa fa-star mr-2"></i>Visi dan Misi </a>
                     </li>
                     <li>
                        <a class="waves-effect " href="../profil.php">
                           <i class="fa fa-user mr-2"></i>Profil </a>
                     </li>
                     <li>
                        <a class="waves-effect " href="../artikel.php">
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
      <?php 
      
      ?>
      <section class="image-top bg-image" data-image="upload/<?=$data['gambar']?>" style="background-image: url(&quot;upload/<?=$data['gambar']?>&quot;);">
         <div class="wrapper">
            <div class="container">
               <h1><?=$data['judul']?></h1>
               <ul class="data-article">
                  <li>
                     <a href="#" target="_blank">
                        <span>
                           <i class="fa fa-user-circle"></i>Admin </span>
                     </a>
                  </li>
                  <li>
                     <div class="grouptop">
                        <span>
                           <i class="fa fa-calendar"></i>
                           <time datetime="2003-05-23 08:55:00"></time><?=$data['tanggal']?></span>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section class="wrapper content">
         <div class="breadcrumb">
            <ul>
               <li>
                  <a href="#" class="waves-effect">
                     <i class="fa fa-search"></i>
                     <span>Detail</span>
                  </a>
               </li>

               <li>
                  <span class="petunjuk">
                     <i class="fa fa-chevron-right"></i>
                  </span>
               </li>
               <li>
                  <span><?=$data['judul']?></span>
               </li>
            </ul>
         </div>
         <div class="bagikan">
            <main idpost="">
           
               <article>
                 <p style="text-align:center"><img alt="" src="../upload/<?=$data['gambar']?>" style="height:300px; width:400px" /></p>
                 <p style="text-align:justify"> <?= $text?>  </p> 

              </article>
               <div class="tagwrap">
                  <h2>Tagar:</h2>
                  <div class="wraplabel" id="bott_label">
                     <!-- <a href="#" class="sublabel btn btn-anim waves-effect">
                        <i class="fa fa-tag"></i>
                        <span></span>
                     </a> -->
                  </div>
               </div>

               <?php
               $result = mysqli_query($conn, "SELECT * FROM tb_artikel");
               ?>
               <div class="sharewrap">
                  <h2>Bagikan Postingan ini:</h2>
                  <div class="social-buttons center share">
                     <button class="social-button facebook" data-sharer="facebook" data-title="" data-url="https://www.sdn-3kerengbangkirai.my.id/detail/<?=$data['slug']?>">
                        <span class="sharecont">
                           <i class="fa fa-facebook"></i>
                           <span class="sharetext">Facebook</span>
                        </span>
                     </button>
                     <button class="social-button linkedin" data-sharer="linkedin" data-url="https://www.sdn-3kerengbangkirai.my.id/detail/<?=$data['slug']?>">
                        <span class="sharecont">
                           <i class="fa fa-linkedin"></i>
                           <span class="sharetext">Linkedin</span>
                        </span>
                     </button>
                     <button class="social-button twitter" data-sharer="twitter" data-title="" data-url="https://www.sdn-3kerengbangkirai.my.id/detail/<?=$data['slug']?>" data-hashtags="">
                        <span class="sharecont">
                           <i class="fa fa-twitter"></i>
                           <span class="sharetext">Twitter</span>
                        </span>
                     </button>
                     <button class="social-button telegram" data-sharer="telegram" data-title="" data-url="https://www.sdn-3kerengbangkirai.my.id/detail/<?=$data['slug']?>" data-web="">
                        <span class="sharecont">
                           <i class="fa fa-telegram"></i>
                           <span class="sharetext">Telegram</span>
                        </span>
                     </button>
                     <button class="social-button email" data-title="Awesome Url" data-subject="https://www.sdn-3kerengbangkirai.my.id/detail/<?=$data['slug']?>" data-to="emailtujuan@email.com">
                        <span class="sharecont">
                           <i class="fa fa-envelope-o"></i>
                           <span class="sharetext">Email</span>
                        </span>
                     </button>
                     <button class="social-button whatsapp" data-sharer="whatsapp" data-title="" data-url="https://www.sdn-3kerengbangkirai.my.id/detail/<?=$data['slug']?>" data-web="https://www.sdn-3kerengbangkirai.my.id/detail/<?=$url_slug?>">
                        <span class="sharecont">
                           <i class="fa fa-whatsapp"></i>
                           <span class="sharetext">WhatsApp</span>
                        </span>
                     </button>

                  </div>
               </div>

            </main>


            <?php
            include "koneksi.php";
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
                        <a href="../detail/<?=$data['slug']?>" title="../detail/<?=$data['slug']?>" class="waves-effect heading btn-anim"><?=$data['judul']?></a>
                     </div>
            <?php }
            ?>

 
                  </div>
               </div>
               <?php
            
            $result = mysqli_query($conn, "SELECT * FROM tb_artikel ORDER BY tanggal DESC LIMIT 3");
            $no=1;
            ?>
               <div class="sidebar nowrap">
                  <h2>Postingan Baru</h2>
                  <div class="wrappost" id="populer_id">

                  <?php 
                  while ($data= mysqli_fetch_assoc($result)){ ?>
               
               <div class="post">
                        <a href="../detail/<?=$data['slug']?>" class="image waves-effect">
                           <img src="../upload/<?=$data['gambar']?>" data-src="../upload/<?=$data['gambar']?>" class="" alt="" title="">
                        </a>
                        <div class="box_desc">
                           <a href="../detail/<?=$data['slug']?>" class="title waves-effect" title="../detail/<?=$data['slug']?>">
                              <span>
                                 <h3><?=$data['judul']?></h3>
                              </span>
                           </a>
                        </div>
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
            <a href="" id="prev" class="fab_action action_1 waves-effect btn-anim" title="">
               <i class="fa fa-arrow-left"></i>
            </a>
            <a href="javascript:void(0)" class="fab_action action_2 waves-effect btn-anim" id="fullscreen" title="FullScreen?">
               <i class="fa fa-arrows-alt"></i>
            </a>
            <a href="#" class="fab_action action_3 waves-effect btn-anim">
               <i class="fa fa-home"></i>
            </a>
            <a href="javascript:void(0)" class="fab_action action_4 waves-effect btn-anim" id="darkmode" title="Tema Gelap?">
               <i class="fa fa-lightbulb-o"></i>
            </a>
            <a href="#" id="next" class="fab_action action_5 waves-effect btn-anim" title="">
               <i class="fa fa-arrow-right"></i>
            </a>
         </div>
      </div>
      <div id="search_popup" class="modal">
         <h2>Cari Sesuatu...</h2>
         <form class="search" action="#search">
            <input type="text" placeholder="Search" aria-label="search" name="query">
            <button class="btn btn-anim btn-color" type="submit">
               <i class="fa fa-search"></i>
            </button>
         </form>
      </div>
      <?php include 'footer.php'?>
      <script type="text/javascript" src="../user/assets/js/postingan/postingan.min.js"></script>
      <script type="text/javascript" src="../user/assets/js/postingan/postingan-core.min.js"></script>
   </body>
</html>
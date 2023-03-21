<?php
 include "koneksi.php";
    $id = $_GET['id_artikel'];
    $judul = str_replace("-"," ",$id);
       
   
    
        $result = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE judul ='$judul'");
        $data = mysqli_fetch_array($result);



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
      <title>Semua Postingan</title>
      <link rel="canonical" href="https://smandakebumen.sch.id/postingan.html" />
      <meta name="keywords" content="smanda,sman 2 kebumen,sma negeri 2 kebumen,smitc,smitc cms,sma,pelajar,kebumen,jawa tengah,indonesia">
      <meta name="description" content="SMA Negeri 2 Kebumen adalah sekolah yang terletak di Kota Kebumen, Provinsi Jawa Tengah. Website ini adalah website resmi SMA NEGERI 2 KEBUMEN">
      <meta http-equiv="expires" content="Fri, 18 Jul 2022 1:00:00 GMT">
      <meta http-equiv="page-enter" content="revealtrans(duration=seconds,transition=num)">
      <meta http-equiv="page-exit" content="revealtrans(duration=seconds,transition=num)">
      <meta content='SMA Negeri 2 Kebumen' property='og:site_name'>
      <meta content='SMA Negeri 2 Kebumen' property='og:title'>
      <meta content='website' property='og:type'>
      <link href='index.html' rel='openid.delegate'>
      <link href='index.html' rel='canonical'>
      <meta content='https://www.smandakebumen.sch.id/' property='og:url'>
      <meta content='SMITC_CMS' name='generator'>
      <meta property='og:image'>
      <link href='user/assets/icon/favicon.ico' rel='icon' type='image/x-icon'>
      <link href="user//assets/icon/favicon.ico" rel="shortcut icon">
      <link href='user/assets/icon/favicon-32x32.png' rel='icon' sizes='32x32'>
      <link href='user/assets/icon/android-icon-192x192.png' rel='icon' sizes='192x192'>
      <link href='user/assets/icon/apple-icon-180x180.png' rel='apple-touch-icon-precomposed'>
      <meta content='user/assets/icon/ms-icon-144x144.png' name='msapplication-TileImage'>
      <meta content='#49952E' name='msapplication-navbutton-color'>
      <meta content='#49952E' name='apple-mobile-web-app-status-bar-style'>
      <meta content='#49952E' name='theme-color'>
      <meta content='#' name='google-site-verification'>
      <meta content='Indonesia' name='gßeo.placename'>
      <meta content='SMITC CMS ' name='Author'>
      <meta content='general' name='rating'>
      <meta content='id' name='geo.country'>
      <meta content='1525075227538724' property='fb:app_id'>
      <meta content='100006157928140' property='fb:admins'>
      <meta content='summary' name='twitter:card'>
      <meta content='SMAN 2 Kebumen' name='twitter:title'>
      <meta content='@officialosis2' name='twitter:site'>
      <meta content='@officialosis2' name='twitter:creator'>
      <meta content='summary_large_image' name='twitter:card'>
      <meta content="id_ID" property="og:locale">
      <meta content="en_US" property="og:locale:alternate">
      <meta content="en_GB" property="og:locale:alternate">
      <link href='https://smandakebumen.sch.id' rel='dns-prefetch'>
      <link href='https://pustaka.smandakebumen.sch.id' rel='dns-prefetch'>
      <link href='https://smitcsmandakebumen.blogspot.com' rel='dns-prefetch'>
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
                     <a href="https://goo.gl/maps/ztKKwwCQYfDkGT5HA" target="_blank" rel="noreferrer noopener" class="waves-effect">
                        <i class="fa fa-map-marker"></i>Jln Cincin Kota No. 8, Karangsari, Kebumen 54351 </a>
                  </li>
                  <li>
                     <a href="tel:0287-381820" class="waves-effect">
                        <i class="fa fa-phone"></i>0287-381820 </a>
                  </li>
                  <li>
                     <a href="mailto:smanda.kbm@gmail.com" class="waves-effect">
                        <i class="fa fa-envelope"></i>smanda.kbm@gmail.com </a>
                  </li>
               </ul>
            </nav>
         </div>
         <nav class="mainav" id="sticky_nav">
            <nav class="wrapper">
               <a href="https://www.smandakebumen.sch.id/" class="logo waves-effect">
                  <img src="https://www.smandakebumen.sch.id/assets/img/logo/smanda.png" alt="SMA Negeri 2 Kebumen">
                  <span>SMA Negeri 2 Kebumen</span>
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
                        <a class="waves-effect " href="https://www.smandakebumen.sch.id/lihat/Visi-dan-Misi-SMA-Negeri-2-Kebumen-29112019.html">
                           <i class="fa fa-star mr-2"></i>Visi dan Misi </a>
                     </li>
                     <li>
                        <a class="waves-effect " href="https://www.smandakebumen.sch.id/author">
                           <i class="fa fa-user mr-2"></i>Profil </a>
                     </li>
                     <li>
                        <a class="waves-effect " href="https://www.smandakebumen.sch.id/postingan">
                           <i class="fa fa-files-o mr-2"></i>Postingan </a>
                     </li>
                     <li>
                        <a href="#search_popup" class="waves-effect btn btn-anim btn-color search">
                           <i class="fa fa-search"></i>
                        </a>
                     </li>
                     <li id="login">
                        <a href="https://www.smandakebumen.sch.id/login" class="waves-effect btn btn-anim btn-color">Login</a>
                     </li>
                  </ul>
               </div>
            </nav>
         </nav>
      </section>
      <section class="image-top bg-image" data-image="upload/<?=$data['gambar']?>" style="background-image: url(&quot;upload/<?=$data['gambar']?>&quot;);">
         <div class="wrapper">
            <div class="container">
               <h1><?= $judul?></h1>
               <ul class="data-article">
                  <li>
                     <a href="#" target="_blank">
                        <span>
                           <i class="fa fa-user-circle"></i>Jurnalistik </span>
                     </a>
                  </li>
                  <li>
                     <div class="grouptop">
                        <span>
                           <i class="fa fa-eye"></i> 105 </span>
                     </div>
                  </li>
                  <li>
                     <div class="grouptop">
                        <span>
                           <i class="fa fa-clock-o"></i> 17:02 </span>
                     </div>
                  </li>
                  <li>
                     <div class="grouptop">
                        <span>
                           <i class="fa fa-calendar"></i>
                           <time datetime="2003-05-23 08:55:00"></time> Sab, 11 Feb 2023 (diedit) </span>
                     </div>
                  </li>
                  <li>
                     <div class="grouptop label" id="top_label">
                        <i class="fa fa-tags"></i>
                        <a href="https://www.smandakebumen.sch.id/tagar/smanda">smanda</a>
                        <a href="https://www.smandakebumen.sch.id/tagar/Gaspala,_lingkungan,_adiwiyata">Gaspala,_lingkungan,_adiwiyata</a>
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
                  <a href="https://www.smandakebumen.sch.id/" class="waves-effect">
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
                  <a href="https://www.smandakebumen.sch.id/ekstra" class="waves-effect">
                     <i class="fa fa-trophy"></i>
                     <span>Ekstra</span>
                  </a>
               </li>
               <li>
                  <span class="petunjuk">
                     <i class="fa fa-chevron-right"></i>
                  </span>
               </li>
               <li>
                  <span>GASPALA Tanam 500 Bibit Nyamplung di Kawasan Konservasi Penyu Kaliratu</span>
               </li>
            </ul>
         </div>
         <div class="bagikan">
            <main idpost="1895">

            
               <article>
                 <p style="text-align:center"><img alt="" src="../upload/<?=$data['gambar']?>" style="height:300px; width:400px" /></p>
                 <p style="text-align:justify"> <?= $data['artikel']?>  </p> 

              </article>
               <div class="authorwrap">
                  <div class="author">
                     <a href="https://www.smandakebumen.sch.id/author/Jurnalistik" class="waves-effect image">
                        <img class="" src="https://www.smandakebumen.sch.id/assets/img/default_profile/tas.jpg" data-src="https://www.smandakebumen.sch.id/assets/img/default_profile/tas.jpg" alt="Jurnalistik" title="Foto Profil Jurnalistik">
                     </a>
                     <div class="content">
                        <h3>Jurnalistik SMANDA</h3>
                        <div class="desc"></div>
                        <a href="https://www.smandakebumen.sch.id/author/Jurnalistik" class="btn btn-anim btn-ln"> About <i class="fa fa-chevron-right reverse"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="tagwrap">
                  <h2>Tagar:</h2>
                  <div class="wraplabel" id="bott_label">
                     <a href="https://www.smandakebumen.sch.id/tagar/smanda" class="sublabel btn btn-anim waves-effect">
                        <i class="fa fa-tag"></i>
                        <span>smanda</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/tagar/Gaspala,_lingkungan,_adiwiyata" class="sublabel btn btn-anim waves-effect">
                        <i class="fa fa-tag"></i>
                        <span>Gaspala,_lingkungan,_adiwiyata</span>
                     </a>
                  </div>
               </div>
               <div class="sharewrap">
                  <h2>Bagikan Postingan ini:</h2>
                  <div class="social-buttons center share">
                     <button class="social-button facebook" data-sharer="facebook" data-title="Ayo cek postingan GASPALA Tanam 500 Bibit Nyamplung di Kawasan Konservasi Penyu Kaliratu di website SMA N 2 Kebumen link:" data-url="https://www.smandakebumen.sch.id/lihat/gaspala-tanam-500-bibit-nyamplung-di-kawasan-konservasi-penyu-kaliratu-20230211.html" data-hashtag="smanda">
                        <span class="sharecont">
                           <i class="fa fa-facebook"></i>
                           <span class="sharetext">Facebook</span>
                        </span>
                     </button>
                     <button class="social-button linkedin" data-sharer="linkedin" data-url="https://www.smandakebumen.sch.id/lihat/gaspala-tanam-500-bibit-nyamplung-di-kawasan-konservasi-penyu-kaliratu-20230211.html">
                        <span class="sharecont">
                           <i class="fa fa-linkedin"></i>
                           <span class="sharetext">Linkedin</span>
                        </span>
                     </button>
                     <button class="social-button twitter" data-sharer="twitter" data-title="GASPALA Tanam 500 Bibit Nyamplung di Kawasan Konservasi Penyu Kaliratu di:" data-url="https://www.smandakebumen.sch.id/lihat/gaspala-tanam-500-bibit-nyamplung-di-kawasan-konservasi-penyu-kaliratu-20230211.html" data-hashtags="smanda_kebumen,kebumen,jawa_tengah">
                        <span class="sharecont">
                           <i class="fa fa-twitter"></i>
                           <span class="sharetext">Twitter</span>
                        </span>
                     </button>
                     <button class="social-button telegram" data-sharer="telegram" data-title="Ayo cek postingan GASPALA Tanam 500 Bibit Nyamplung di Kawasan Konservasi Penyu Kaliratu di website SMA N 2 Kebumen link:" data-url="https://www.smandakebumen.sch.id/lihat/gaspala-tanam-500-bibit-nyamplung-di-kawasan-konservasi-penyu-kaliratu-20230211.html" data-web="">
                        <span class="sharecont">
                           <i class="fa fa-telegram"></i>
                           <span class="sharetext">Telegram</span>
                        </span>
                     </button>
                     <button class="social-button email" data-title="Awesome Url" data-subject="Ayo cek postingan GASPALA Tanam 500 Bibit Nyamplung di Kawasan Konservasi Penyu Kaliratu di website SMA N 2 Kebumen link:" data-url="https://www.smandakebumen.sch.id/lihat/gaspala-tanam-500-bibit-nyamplung-di-kawasan-konservasi-penyu-kaliratu-20230211.html" data-to="emailtujuan@email.com">
                        <span class="sharecont">
                           <i class="fa fa-envelope-o"></i>
                           <span class="sharetext">Email</span>
                        </span>
                     </button>
                     <button class="social-button whatsapp" data-sharer="whatsapp" data-title="Ayo cek postingan GASPALA Tanam 500 Bibit Nyamplung di Kawasan Konservasi Penyu Kaliratu di website SMA N 2 Kebumen link:" data-url="https://www.smandakebumen.sch.id/lihat/gaspala-tanam-500-bibit-nyamplung-di-kawasan-konservasi-penyu-kaliratu-20230211.html" data-web="">
                        <span class="sharecont">
                           <i class="fa fa-whatsapp"></i>
                           <span class="sharetext">WhatsApp</span>
                        </span>
                     </button>
                     <button class="social-button google_bookmark" data-sharer="googlebookmarks" data-title="Ayo cek postingan GASPALA Tanam 500 Bibit Nyamplung di Kawasan Konservasi Penyu Kaliratu di website SMA N 2 Kebumen link:" data-labels="SMA Negeri 2 Kebumen, SMANDA, Kebumen, Jawa Tengah, GASPALA Tanam 500 Bibit Nyamplung di Kawasan Konservasi Penyu Kaliratu" data-notes="

TALENTA - Dalam rangka reboisasi, Gaspala berkolaborasi bersama pihak Konservasi Penyu Kaliratu untuk melakukan penanaman bibit nyamplung di sepanjang pinggiran pantainya. Acara tersebut dilakukan pada…" data-url="https://www.smandakebumen.sch.id/lihat/gaspala-tanam-500-bibit-nyamplung-di-kawasan-konservasi-penyu-kaliratu-20230211.html">
                        <span class="sharecont">
                           <i class="fa fa-bookmark-o"></i>
                           <span class="sharetext">Bookmark</span>
                        </span>
                     </button>
                  </div>
               </div>
               <div class="commentku">
                  <h2>Komentar:</h2>
                  <div class="wrappercomment">
                     <div class="privacy">
                        <ol>
                           <li>
                              <b>Dilarang</b> melakukan <b>spam</b> pada <b>komentar</b> blog, posingan, agenda.
                           </li>
                           <li>
                              <b>Dilarang</b> memberikan komentar yang melanggar <b>hukum Indonesia</b>
                              <br>
                              <small>* sara, asusila, kata - kata kasar, flaming, prostitusi, perjudian, narkoba</small>
                           </li>
                           <li>
                              <b>Dilarang</b> melakukan <b>promosi/iklan</b>
                           </li>
                           <li>
                              <b>Dilarang</b> menyebarkan informasi <b>palsu/ <em>hoax</em>
                              </b>
                           </li>
                           <li>Dengan mengklik tombol <b>'Load Comment'</b> dan/atau <b>memberikan komentar</b> anda <b>setuju</b> dengan peraturan diatas. </li>
                        </ol>
                        <a href="#" class="btn btn-anim">Privacy Policy</a>
                     </div>
                     <button class="btn btn-anim btn-ln" id="load-comment">Load Comment</button>
                  </div>
               </div>
            </main>
            <aside>
               <div class="sidebar nowrap">
                  <h2>Penulis Postingan</h2>
                  <div class="labelwrap" id="penulis_id">
                     <a href="https://www.smandakebumen.sch.id/author/smitc" class="label btn-anim btn waves-effect">
                        <span class="text">smitc</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/author/pancak_silat_smanda" class="label btn-anim btn waves-effect">
                        <span class="text">pancak_silat_smanda</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/author/r_eka_gunawan" class="label btn-anim btn waves-effect">
                        <span class="text">r_eka_gunawan</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/author/kkr_smanda" class="label btn-anim btn waves-effect">
                        <span class="text">kkr_smanda</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/author/voli_smanda" class="label btn-anim btn waves-effect">
                        <span class="text">voli_smanda</span>
                     </a>
                  </div>
               </div>
               <div class="sidebar nowrap">
                  <h2>Semua Label</h2>
                  <div class="labelwrap counter" id="label_id">
                     <a href="https://www.smandakebumen.sch.id/tagar/smanda" class="label btn-anim btn waves-effect">
                        <span class="counter">201</span>
                        <span class="text">smanda</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/tagar/MPLS" class="label btn-anim btn waves-effect">
                        <span class="counter">31</span>
                        <span class="text">MPLS</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/tagar/COVID-19" class="label btn-anim btn waves-effect">
                        <span class="counter">25</span>
                        <span class="text">COVID-19</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/tagar/PPDB" class="label btn-anim btn waves-effect">
                        <span class="counter">22</span>
                        <span class="text">PPDB</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/tagar/Lawan_Corona" class="label btn-anim btn waves-effect">
                        <span class="counter">16</span>
                        <span class="text">Lawan_Corona</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/tagar/KBM" class="label btn-anim btn waves-effect">
                        <span class="counter">12</span>
                        <span class="text">KBM</span>
                     </a>
                     <a href="https://www.smandakebumen.sch.id/tagar/Seleksi_P3K" class="label btn-anim btn waves-effect">
                        <span class="counter">8</span>
                        <span class="text">Seleksi_P3K</span>
                     </a>
                  </div>
               </div>
               <div class="sidebar nowrap">
                  <h2 id="rand_agen">Postingan Random</h2>
                  <div class="wrappost styletiga" id="random_id">
                     <div class="wraptiga">
                        <span class="number">1</span>
                        <a href="https://www.smandakebumen.sch.id/lihat/atlit-silat-smanda-borong-juara-dalam-kejuaraan-silat-pelajar-terate-emas-2022-20221220.html" title="Lihat Atlit Silat SMANDA Borong Juara Dalam Kejuaraan Silat Pelajar Terate Emas 2022?" class="waves-effect heading btn-anim">Atlit Silat SMANDA Borong Juara Dalam Kejuaraan Silat…</a>
                     </div>
                     <div class="wraptiga">
                        <span class="number">2</span>
                        <a href="https://www.smandakebumen.sch.id/lihat/pengenalan-ekstra-pentaque-20210714.html" title="Lihat Pengenalan Ekstra Pentaque?" class="waves-effect heading btn-anim">Pengenalan Ekstra Pentaque</a>
                     </div>
                     <div class="wraptiga">
                        <span class="number">3</span>
                        <a href="https://www.smandakebumen.sch.id/lihat/mengenal-taekwondo-sma-negeri-2-kebumen-20200712.html" title="Lihat Mengenal TAEKWONDO SMA Negeri 2 Kebumen?" class="waves-effect heading btn-anim">Mengenal TAEKWONDO SMA Negeri 2 Kebumen</a>
                     </div>
                     <div class="wraptiga">
                        <span class="number">4</span>
                        <a href="https://www.smandakebumen.sch.id/lihat/profil-sekolah-20191119.html" title="Lihat Profil Sekolah?" class="waves-effect heading btn-anim">Profil Sekolah</a>
                     </div>
                  </div>
               </div>
               <div class="sidebar nowrap">
                  <h2>Postingan Terpopuler</h2>
                  <div class="wrappost" id="populer_id">
                     <div class="post">
                        <a href="https://www.smandakebumen.sch.id/lihat/sosiologi-sebagai-ilmu-20191126.html" class="image waves-effect">
                           <img src="https://www.smandakebumen.sch.id/assets/no_image.jpg" data-src="https://www.smandakebumen.sch.id/assets/no_image.jpg" class="" alt="Sosiologi Sebagai Ilmu Image" title="Sosiologi Sebagai Ilmu Image">
                        </a>
                        <div class="box_desc">
                           <a href="https://www.smandakebumen.sch.id/lihat/sosiologi-sebagai-ilmu-20191126.html" class="title waves-effect" title="Lihat Sosiologi Sebagai Ilmu?">
                              <span>
                                 <h3>Sosiologi Sebagai Ilmu</h3>
                              </span>
                           </a>
                        </div>
                     </div>
                     <div class="post">
                        <a href="https://www.smandakebumen.sch.id/lihat/ppdb-2020-2021-20200422.html" class="image waves-effect">
                           <img src="https://www.smandakebumen.sch.id/assets/no_image.jpg" data-src="https://www.smandakebumen.sch.id/assets/no_image.jpg" class="" alt="PPDB 2020/2021 Image" title="PPDB 2020/2021 Image">
                        </a>
                        <div class="box_desc">
                           <a href="https://www.smandakebumen.sch.id/lihat/ppdb-2020-2021-20200422.html" class="title waves-effect" title="Lihat PPDB 2020/2021?">
                              <span>
                                 <h3>PPDB 2020/2021</h3>
                              </span>
                           </a>
                        </div>
                     </div>
                     <div class="post">
                        <a href="https://www.smandakebumen.sch.id/lihat/sambutan-kepala-sekolah-20191119.html" class="image waves-effect">
                           <img src="https://smandakebumen.sch.id/assets/img/postingan/478337c597a1b208e7600636dcffcbfe.jpg" data-src="https://smandakebumen.sch.id/assets/img/postingan/478337c597a1b208e7600636dcffcbfe.jpg" class="" alt="Sambutan Kepala Sekolah Image" title="Sambutan Kepala Sekolah Image">
                        </a>
                        <div class="box_desc">
                           <a href="https://www.smandakebumen.sch.id/lihat/sambutan-kepala-sekolah-20191119.html" class="title waves-effect" title="Lihat Sambutan Kepala Sekolah?">
                              <span>
                                 <h3>Sambutan Kepala Sekolah</h3>
                              </span>
                           </a>
                        </div>
                     </div>
                     <div class="post">
                        <a href="https://www.smandakebumen.sch.id/lihat/profil-sekolah-20191119.html" class="image waves-effect">
                           <img src="https://smandakebumen.sch.id/assets/img/postingan/0f760e31d768bd1adfd1665c0775b170bea76c4a.jpg" data-src="https://smandakebumen.sch.id/assets/img/postingan/0f760e31d768bd1adfd1665c0775b170bea76c4a.jpg" class="" alt="Profil Sekolah Image" title="Profil Sekolah Image">
                        </a>
                        <div class="box_desc">
                           <a href="https://www.smandakebumen.sch.id/lihat/profil-sekolah-20191119.html" class="title waves-effect" title="Lihat Profil Sekolah?">
                              <span>
                                 <h3>Profil Sekolah</h3>
                              </span>
                           </a>
                        </div>
                     </div>
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
            <a href="https://www.smandakebumen.sch.id/lihat/tim-estafet-smanda-berhasil-lolos-kejurnas-sac-2023-20230206.html" id="prev" class="fab_action action_1 waves-effect btn-anim" title="Postingan Sebelumnya: Tim Lari Estafet SMANDA Berhasil Lolos Kejurnas SAC 2023">
               <i class="fa fa-arrow-left"></i>
            </a>
            <a href="javascript:void(0)" class="fab_action action_2 waves-effect btn-anim" id="fullscreen" title="FullScreen?">
               <i class="fa fa-arrows-alt"></i>
            </a>
            <a href="https://www.smandakebumen.sch.id/" class="fab_action action_3 waves-effect btn-anim">
               <i class="fa fa-home"></i>
            </a>
            <a href="javascript:void(0)" class="fab_action action_4 waves-effect btn-anim" id="darkmode" title="Tema Gelap?">
               <i class="fa fa-lightbulb-o"></i>
            </a>
            <a href="https://www.smandakebumen.sch.id/lihat/dance-crew-smanda-gelar-workshop-di-sanggar-satria-kembar-20230224.html" id="next" class="fab_action action_5 waves-effect btn-anim" title="Postingan Berikutnya: Dance Crew SMANDA Gelar Workshop di Sanggar Satria Kembar">
               <i class="fa fa-arrow-right"></i>
            </a>
         </div>
      </div>
      <div id="search_popup" class="modal">
         <h2>Cari Sesuatu...</h2>
         <form class="search" action="https://www.smandakebumen.sch.id/search">
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
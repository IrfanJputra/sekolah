<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Sekolah- SDN-3 Kereng Bangkirai</title>
    <link rel="stylesheet" href="web/css/style.css">
    <link rel="stylesheet" href="web/css/style2.css">
    <link rel="stylesheet" href="web/css/mobile.css">
    <link rel="stylesheet" href="web/css/tablet.css">
    <link rel="stylesheet" href="web/css/swiper.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#DDF0FF">
    <meta name="description" content="Laman Informasi Kurikulum Merdeka">
    <meta name="keywords" content="kurikulum merdeka, capaian pembelajaran, dukungan implementasi, informasi terkini, sering ditanya">
    <meta name="author" content="Pusat Kurikulum dan Pembelajaran">
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Kurikulum Merdeka" />
    <meta property="og:title" content="Kemendikbudristek Berikan Pendampingan Kurikulum Merdeka di Kota Medan" />
    <meta property="og:description" content="Kemendikbudristek Berikan Pendampingan Kurikulum Merdeka di Kota Medan" />
    <meta property="og:image" content="https://kurikulum.kemdikbud.go.id/file/post/1675174243_info.jpeg" />
    <meta property="og:url" content="http://kurikulum.kemdikbud.go.id/kurikulum-merdeka/berita/detail/kemendikbudristek-berikan-pendampingan-kurikulum-merdeka-di-kota-medan" />
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="web/js/swiper.min.js"></script>
    <script src="web/js/jquery-3.6.1.min.js"></script>
    <script src="web/js/jquery.sticky.js"></script>
    <script src="web/js/barba.umd.js"></script>
    <script src="web/js/barba-css.umd.js"></script>
    <script src="web/js/scripts.js"></script>
  </head>
  <body>
    <?php
      include 'koneksi.php';

      $query = mysqli_query($conn, 'SELECT * FROM tb_setting');
      $data = mysqli_fetch_array($query);

    ?>
  <header class="header desktop column align items-center">
    <div class="header wrapper column align items-center">
      <nav class="header main row align content-spbw items-center">
        <div class="header logo row">
          <a href="index.php" class="logo link" title="SDN 3 Kereng Bangkirai">
            <img src="upload/<?=$data['logo'];?>" width="95" height="70">
          </a>
          <div class="hamburger">
            <span class="itemicon ic-menu"></span>
            <span class="itemicon ic-close"></span>
          </div>
        </div>
        <div class="header menu column">
          <ul class="menu-item row">
            <li class="home menu-link">
              <a href="index.php">Beranda</a>
            </li>
            <li class="visi-misi menu-link">
              <a href="visi-misi.php?id_artikel=<?=$baris['id_artikel']=18?>">Visi & Misi</a>
            </li>
            <li class="berita menu-link">
              <a href="artikel.php">Postingan</a>
            </li>

            <li class="guru menu-link">
              <a href="team.php">Profil</a>
            </li>
            <li class="kontak menu-link">
              <a href="#">Kontak Kami</a>
            </li>
            <li class="Login button accent menu-link" >
              <a href="admin/login.php" target="_blank">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  </body>

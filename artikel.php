


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Sekolah- SDN-3 Kereng Bangkirai</title>
    <link rel="stylesheet" href="web/css/style.css">
    <link rel="stylesheet" href="web/css/style2.css">
    <link rel="stylesheet" href="web/css/mobile.css">
    <link rel="stylesheet" href="web/css/tablet.css">
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
    <script src="web/js/jquery-3.6.1.min.js"></script>
	<script src="web/js/jquery.sticky.js"></script>
	<script src="web/js/barba.umd.js"></script>
	<script src="web/js/barba-css.umd.js"></script>
	<script src="web/js/scripts.js"></script>
  </head>
  <body data-barba="wrapper">
    <div class="flyout-cs">
      <div class="person"></div>
      <div class="balloon">
        <div class="button-part">
          <div class="help-text">Butuh bantuan?</div>
          <div class="button-set">
            <div class="button-body">Hubungi kami</div>
            <a href="https://wa.me/6281281435091" target="_blank" class="button-cs accent whatsapp">
              <div>
                <i>Helpdesk</i>
              </div>
            </a>
            <a href="mailto:kurikulum@kemdikbud.go.id" target="_blank" class="button-cs accent email">
              <div>Surat Elektronik</div>
            </a>
          </div>
        </div>
        <div class="expcol">
          <span class="material-symbols-outlined with-icon"></span>
        </div>
      </div>
    </div>
    <?php include 'navbar.php'; ?>
    <main class="berita wrapper" data-barba="container" data-barba-namespace="berita" data-page-title="Kemendikbudristek Berikan Pendampingan Kurikulum Merdeka di Kota Medan" id="wrap-berita">
      <section id="berita-detail" class="section hero mainhero">
        <div class="equal row gap-64">
          <div class="column align content-center">
            <div class="align left">
              <h1></h1>
              <div class="spacing-40"></div>
              <p></p>
              <div class="spacing-32"></div>
              <div class="row btn-wrapper gap-24"></div>
            </div>
          </div>
          <div class="column align content-center items-center">
            <div class="imageboxfit"></div>
          </div>
        </div>
      </section>
      <section id="berita" class="section altsection2">
        <div class="column">
          <div class="row align content-spbw col-mobile gap-32">
            <h2>Semua Postingan</h2>
            <a class="button secondary hidden-on-mobile shown-on-desktop" href="./berita">Lihat Semua <span class="material-symbols-outlined with-icon">arrow_forward</span>
            </a>
          </div>
          <div class="spacing-64"></div>
          <div class="equal row news wrapper">
            <div class="news-list gap-32">

                <?php
                            require 'koneksi.php';


                            
                            $data = mysqli_query($conn, "SELECT * FROM tb_artikel, tb_tagline WHERE tb_artikel.id_tag = tb_tagline.id_tag ORDER BY id_artikel DESC LIMIT 6");

                            while ($baris=mysqli_fetch_assoc($data)){
                            $limited_text = substr($baris['artikel'], 0, 50) . "...";
                            
                            ?>
                            <a href="berita.php?id_artikel=<?php echo $baris['id_artikel'];?>" class="news link">
                            <div class="news box column">
                            <div class="news image" style="background-image: url(upload/<?=$baris['gambar'];?>);"></div>
                            <div class="news blurb">
                            <div class="news label publikasi"><?=$baris['tagline'];?></div>
                            <div class="spacing-24"></div>
                            <h3 class="news title"><?= $baris['judul'];?> </h3>
                            <div class="spacing-24"></div>
                            <div class="news date"><?=$baris['tanggal'];?></div>
                            </div>
                            </div>
                            </a>
                            <?php
                            }
                        ?>


              
              <!-- <a href="#" class="news link">
                <div class="news box column">
                  <div class="news image" style="background-image: url(/file/post/1675172080_info.jpg);"></div>
                  <div class="news blurb">
                    <div class="news label praktik baik">Praktik Baik</div>
                    <div class="spacing-24"></div>
                    <h3 class="news title">Kabupaten Lombok Tengah Lakukan Transformasi Pembelajaran Melalui Implementasi Kurikulum Merdeka</h3>
                    <div class="spacing-24"></div>
                    <div class="news date">30 Januari 2023</div>
                  </div>
                </div>
              </a> -->
            </div>
          </div>
          <div class="row align content-flen">
            <a class="button secondary hidden-on-desktop shown-on-mobile" href="./berita">Lihat Semua <span class="material-symbols-outlined with-icon">arrow_forward</span>
            </a>
          </div>
        </div>
      </section>

      <?php include 'footer.php';
     ?>
      <button class="scrl-top top-hid" title="Kembali ke atas"></button>
    </main>
    <script>
      function prevsrc(pdfSrc) {
        document.getElementById("pdfPreview").setAttribute("src", pdfSrc);
      };
    </script>
  </body>
</html>



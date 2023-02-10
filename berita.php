<?php
    include 'koneksi.php';
    $id = $_GET["id_artikel"];
    
    //query data siswa berdasarkan id
    $sqlGet = "SELECT * FROM tb_artikel, tb_tagline WHERE tb_artikel.id_tag=tb_tagline.id_tag and id_artikel = '$id'";
    $queryGet = mysqli_query($conn, $sqlGet);
    $baris = mysqli_fetch_array($queryGet);

 
?>


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
      <section id="berita-detail-sect" class="section overflowshow">
        <div class="row align content-spbw col-mobile gap-64">
          <div class="equal row news news-detail wrapper height-full remove-padding remove-margin fbas-info">
            <div class="news box column news-main">
              <div class="news blurb">
                <div class="news label Publikasi"><?=$baris['tagline'];?></div>
                <div class="spacing-16"></div>
                <h3 class="news title"><?=$baris['judul'];?></h3>
                <div class="spacing-16"></div>
                <div class="news date">12 Desember 2022</div>
                <div class="spacing-16"></div>
                <div class="sharer-bar row align items-center gap-16">
                  <div class="row">Bagikan</div>
                  <div class="row sh-opt gap-12">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://kurikulum.kemdikbud.go.id/kurikulum-merdeka/berita/detail/kemendikbudristek-berikan-pendampingan-kurikulum-merdeka-di-kota-medan" target="_blank" title="Bagikan ke Facebook">
                      <div class="row sh-ico sh-fb"></div>
                    </a>
                    <a href="http://twitter.com/share?url=https://kurikulum.kemdikbud.go.id/kurikulum-merdeka/berita/detail/kemendikbudristek-berikan-pendampingan-kurikulum-merdeka-di-kota-medan" target="_blank" title="Bagikan ke Twitter">
                      <div class="row sh-ico sh-tw"></div>
                    </a>
                    <a href="https://api.whatsapp.com/send?text=https://kurikulum.kemdikbud.go.id/kurikulum-merdeka/berita/detail/kemendikbudristek-berikan-pendampingan-kurikulum-merdeka-di-kota-medan" target="_blank" title="Bagikan ke WhatsApp">
                      <div class="row sh-ico sh-wa"></div>
                    </a>
                  </div>
                </div>
                <div class="spacing-64"></div>
                <div class="news image-inline" style="background-image: url(upload/<?=$baris['gambar'];?>);"></div>
                <div class="spacing-64"></div>
                <div class="news nws-content">
                  <div>
                    <?=$baris['artikel'];?>
                  </div>
                  <div>
                    <br>
                    <br>
                  </div>
                </div>
                <div class="sharer-bar row align items-center gap-16">
                  <div class="row">Bagikan</div>
                  <div class="row sh-opt gap-12">
                    <a href="https://www.facebook.com/sharer/sharer.php?u=https://kurikulum.kemdikbud.go.id/kurikulum-merdeka/berita/detail/kemendikbudristek-berikan-pendampingan-kurikulum-merdeka-di-kota-medan" target="_blank" title="Bagikan ke Facebook">
                      <div class="row sh-ico sh-fb"></div>
                    </a>
                    <a href="http://twitter.com/share?url=https://kurikulum.kemdikbud.go.id/kurikulum-merdeka/berita/detail/kemendikbudristek-berikan-pendampingan-kurikulum-merdeka-di-kota-medan" target="_blank" title="Bagikan ke Twitter">
                      <div class="row sh-ico sh-tw"></div>
                    </a>
                    <a href="https://api.whatsapp.com/send?text=https://kurikulum.kemdikbud.go.id/kurikulum-merdeka/berita/detail/kemendikbudristek-berikan-pendampingan-kurikulum-merdeka-di-kota-medan" target="_blank" title="Bagikan ke WhatsApp">
                      <div class="row sh-ico sh-wa"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="column news height-full remove-padding remove-margin">
            <div class="row align content-spbw col-mobile gap-32">
              <h2 class="related-title">Berita Terkait</h2>
            </div>
            <div class="spacing-32"></div>
            <div class="column gap-32">
              <a href="/kurikulum-merdeka/berita/detail/siapkan-pengembang-kurikulum-berkompeten-kemendikbudristek-gelar-pelatihan-teknis--" class="news link">
                <div class="news box column">
                  <div class="news image" style="background-image: url(/file/post/1675175073_info.jpeg);"></div>
                  <div class="news blurb">
                    <div class="news label publikasi">Publikasi</div>
                    <div class="spacing-24"></div>
                    <h3 class="news title">Siapkan Pengembang Kurikulum Berkompeten, Kemendikbudristek Gelar Pelatihan Teknis </h3>
                    <div class="spacing-24"></div>
                    <div class="news date">13 September 2022</div>
                  </div>
                </div>
              </a>
              <a href="/kurikulum-merdeka/berita/detail/kurikulum-merdeka-tingkatkan-kualitas-pembelajaran-siswa" class="news link">
                <div class="news box column">
                  <div class="news image" style="background-image: url(/file/post/1675173159_info.jpeg);"></div>
                  <div class="news blurb">
                    <div class="news label publikasi">Publikasi</div>
                    <div class="spacing-24"></div>
                    <h3 class="news title">Kurikulum Merdeka Tingkatkan Kualitas Pembelajaran Siswa</h3>
                    <div class="spacing-24"></div>
                    <div class="news date">28 Januari 2023</div>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        </div>
      </section>
      <footer class="footer column align items-center">
        <nav class="footer wrapper column align content-center">
          <div class="row align equal content-spbw gap-10 gapbigger-mobile col-mobile">
            <div class="column">
              <p class="ftr-heading">Menu Utama</p>
              <div class="spacing-24"></div>
              <ul class="ftr-links">
                <li>
                  <a href="./">Tentang</a>
                </li>
                <li>
                  <a href="./capaian-pembelajaran">Capaian Pembelajaran</a>
                </li>
                <li>
                  <a href="./rujukan">Rujukan</a>
                </li>
                <li>
                  <a href="./dukungan">Dukungan</a>
                </li>
                <li>
                  <a href="./berita">Info Terkini</a>
                </li>
                <li>
                  <a href="./faq">Sering Ditanya</a>
                </li>
              </ul>
            </div>
            <div class="column">
              <p class="ftr-heading">Kurikulum</p>
              <div class="spacing-24"></div>
              <ul class="ftr-links">
                <li>
                  <a href="../pengembangan-kurikulum" data-barba-prevent="self">Pengembangan Kurikulum</a>
                </li>
                <li>
                  <a href="../kurikulum-2013" data-barba-prevent="self">Kurikulum 2013</a>
                </li>
                <li>
                  <a href="../kurikulum-merdeka" data-barba-prevent="self">Kurikulum Darurat</a>
                </li>
                <li>
                  <a href="./">Kurikulum Merdeka</a>
                </li>
                <li>
                  <a href="../perbandingan-kurikulum" data-barba-prevent="self">Perbandingan Kurikulum</a>
                </li>
              </ul>
            </div>
            <div class="column">
              <p class="ftr-heading">Tautan</p>
              <div class="spacing-24"></div>
              <ul class="ftr-links">
                <li>
                  <a href="../" data-barba-prevent="self">Sistem Informasi Kurikulum Nasional</a>
                </li>
                <li>
                  <a href="https://buku.kemdikbud.go.id/" target="_blank" class="interaksi sibi">SIBI</a>
                </li>
                <li>
                  <a href="https://guru.kemdikbud.go.id/" target="_blank">Platform Merdeka Mengajar</a>
                </li>
                <li>
                  <a href="https://gurubelajardanberbagi.kemdikbud.go.id/" target="_blank">Guru Belajar dan Berbagi</a>
                </li>
                <li>
                  <a href="https://anbk.kemdikbud.go.id/" target="_blank">Asesmen Nasional</a>
                </li>
                <li>
                  <a href="https://raporpendidikan.kemdikbud.go.id/app/login" target="_blank">Rapor Pendidikan</a>
                </li>
              </ul>
            </div>
            <div class="column">
              <p class="ftr-heading">Kontak Kami</p>
              <div class="spacing-24"></div>
              <ul class="ftr-list mail">
                <li>
                  <a href="mailto:kurikulum@kemdikbud.go.id" target="_blank">kurikulum@kemdikbud.go.id</a>
                </li>
              </ul>
              <ul class="ftr-list instagram">
                <li>
                  <a href="https://instagram.com/kurikulum.merdeka" target="_blank">kurikulum.merdeka</a>
                </li>
              </ul>
              <div class="spacing-16"></div>
              <p class="ftr-heading">Layanan Pusat Bantuan</p>
              <div class="spacing-24"></div>
              <ul class="ftr-list nospace phone">
                <li>
                  <a href="https://wa.me/6281281435091" target="_blank">081281435091</a>
                </li>
              </ul>
              <div class="spacing-8"></div>
              <p class="ftr-links nospace">
                <b>Jam Operasional</b>
              </p>
              <div class="spacing-8"></div>
              <ul class="ftr-list nospace hours">
                <li>Senin – Jumat</li>
                <li>Pukul 08.00 – 16.00 WIB</li>
              </ul>
              <div class="spacing-24"></div>
              <p class="ftr-links external">
                <a href="https://kemdikbud.lapor.go.id/" target="_blank">Lapor!</a>
              </p>
              <div class="spacing-8"></div>
              <p class="ftr-links external">
                <a href="https://wbs.kemdikbud.go.id/" target="_blank">
                  <i>Whistleblowing System</i>
                </a>
              </p>
              <div class="spacing-24"></div>
            </div>
          </div>
        </nav>
        <div class="spacing-40"></div>
        <div class="attribu">&copy; 2023 • Hak Cipta Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi • Badan Standar, Kurikulum, dan Asesmen Pendidikan • Pusat Kurikulum dan Pembelajaran</div>
      </footer>
      <button class="scrl-top top-hid" title="Kembali ke atas"></button>
    </main>
    <script>
      function prevsrc(pdfSrc) {
        document.getElementById("pdfPreview").setAttribute("src", pdfSrc);
      };
    </script>
  </body>
</html>
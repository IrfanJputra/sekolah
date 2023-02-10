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
    <!-- <link rel="stylesheet" type="text/css" href="web/css/pages-landing.min.css"> -->
 		<!-- <link rel="stylesheet" type="text/css" href="web/css/css-font-awesome.min.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#DDF0FF">
    <meta name="description" content="Laman Informasi Kurikulum yang berlaku di Indonesia">
    <meta name="keywords" content="kurikulum merdeka, kurikulum 2013, kurikulum darurat, perbandingan kurikulum">
    <meta name="author" content="Pusat Kurikulum dan Pembelajaran">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Sistem Informasi Kurikulum Nasional">
    <meta property="og:title" content="Sistem Informasi Kurikulum Nasional">
    <meta property="og:description" content="Laman Informasi Kurikulum pendidikan yang berlaku di Indonesia | Pusat Kurikulum dan Pembelajaran | Badan Standar, Kurikulum, dan Asesmen Pendidikan | Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi">
    <meta property="og:image" content="images/logo_315.png">
    <meta property="og:url" content="http://kurikulum.kemdikbud.go.id/">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <script src="web/js/swiper.min.js"></script>
    <script src="web/js/jquery-3.6.1.min.js"></script>
    <script src="web/js/jquery.sticky.js"></script>
    <script src="web/js/barba.umd.js"></script>
    <script src="web/js/barba-css.umd.js"></script>
    <script src="web/js/scripts.js"></script>
    <script src="web/js/pages-landing.min.js"></script>
		<script src="web/js/pages-core-landing.min.js"></script>
  </head>
  <body data-barba="wrapper">
    <div class="flyout-cs">
      <div class="person"></div>
      <div class="balloon">
        <div class="button-part">
          <div class="help-text">Butuh bantuan?</div>
          <div class="button-set">
            <div class="button-body">Hubungi kami</div>
            <a href="https://wa.me/#" target="_blank" class="button-cs accent whatsapp">
              <div>
                <i>Helpdesk</i>
              </div>
            </a>
            <a href="mailto:sdnkerengbangkirai3@gmail.com" target="_blank" class="button-cs accent email">
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

    <main class="home wrapper" data-barba="container" data-barba-namespace="home" data-page-title="Beranda" id="home">
      <div id="mp-video-km" class="modal" data-modalname="video-km">
        <div class="modal-content">
          <span class="modal-close cl-video-km" data-modalname="video-km" title="Tutup">×</span>
          <div>
            <iframe id="videoyoutube" class="videostyle" src="https://www.youtube-nocookie.com/embed/0w0OvOEv43w?controls=1&amp;fs=0&amp;modestbranding=1&amp;color=white&amp;iv_load_policy=3" 
            title="Kenali Kurikulum Merdeka, Tingkatkan Kualitas Pembelajaran" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <section id="home" class="section hero mainhero ultimate padhero">
        <div class="equal row gap-64">
          <div class="column align content-center">
            <div class="align left">
              <h1>Kenali <b>Kurikulum Merdeka</b>, Tingkatkan <b>Kualitas Pembelajaran</b>
              </h1>
              <div class="spacing-40"></div>
              <p>Pada Tahun Ajaran 2022/2023 dan 2023/2024, Kurikulum Merdeka menjadi salah satu opsi yang dapat dipilih oleh satuan pendidikan. Kurikulum Merdeka memberi keleluasaan dan memudahkan pendidik menerapkan pembelajaran yang lebih mendalam, sesuai dengan kebutuhan peserta didik, dan fokus pada penguatan karakter.</p>
              <div class="spacing-32"></div>
              <div class="row btn-wrapper gap-24">
                <a class="button secondary" target="_blank" href="https://kurikulum.kemdikbud.go.id/kurikulum-merdeka">Pelajari Lebih Lanjut</a>
                <a class="button accent" href="#mp-daftar-ubah-t">Daftar/Ubah Pilihan Implementasi</a>
              </div>
            </div>
          </div>
          <div class="column align content-center items-center">
            <div class="imageboxfit section-video">
              <a href="#mp-video-km-t" class="video-thumb" oncontextmenu="return false;" title="Kenali Kurikulum Merdeka, Tingkatkan Kualitas Pembelajaran">
                <div class="video-preview-wrapper">
                  <video oncontextmenu="return false;" autoplay muted preload loop class="video-preview img-fill" src="media/preview-video-km-loop.webm"></video>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
      <section id="carousel" class="section padshort">
        <div class="column">
          <div class="swiper-title">
            <!-- <i>Update</i> Terbaru -->
          </div>
          <div class="spacing-24"></div>
          <div class="swiper-container row">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <a href="#mp-daftar-ubah-t" class="item">
                  <img src="web/images/1675407682_highlight.png">
                </a>
              </div>
              <div class="swiper-slide">
                <a href class="item">
                  <img src="web/images/1675407774_highlight.png">
                </a>
              </div>
              <div class="swiper-slide">
                <a href class="item">
                  <img src="web/images/1675407765_highlight.png">
                </a>
              </div>
              <div class="swiper-slide">
                <a href class="item">
                  <img src="web/images/1675407628_highlight.png">
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="sambutan" class="section padheadingonly">
        <div class="equal row gap-64">
          <div class="column align content-center">
          </div>
        </div>
      </section>
      <?php
      $query = mysqli_query($conn, 'SELECT * FROM tb_setting');
      $data = mysqli_fetch_array($query);

      ?>
      <section class="section smallheading">
        <div class="equal row gap-64 row-reverse">
          <div class="column align content-center">
            <div class="align left">
              <h1>Sambutan Kepala Sekolah</h1>
              <div class="spacing-40"></div>
              <p></p>
              <p style="text-align: justify;"><?=$data['sambutan'];?></p>
              <p></p>
              <div class="spacing-32"></div>
              <div class="row btn-wrapper gap-24">
                <!-- <a class="button secondary" target="_blank" href="https://buku.kemdikbud.go.id/katalog/buku-kurikulum-merdeka">Lihat Buku Teks <span class="material-symbols-outlined with-icon">arrow_forward</span> -->
                </a>
              </div>
            </div>
          </div>
          <div class="column align content-center items-center">
            <div class="imageboxfit">
              <img class="img-fill" src="web/fonts/section-fokus-materi.svg">
            </div>
          </div>
        </div>
      </section>
      <section id="faq" class="section">	<div class="equal row gap-64 rev-mobile">
		<div class="column fbas-short">			<div class="align left">
				<h2>Agenda</h2>
							</div>
		</div>
		<div class="column">
			<div class="align left">
        		
					<div class="acc-wrapper column">
						<div class="acc-heading column align items-flst content-spbw">
							<div class="row align items-center content-spbw width-full">Mengapa Kurikulum Merdeka?
								<span class="acc-expcol"><img src="web/images/expcol.svg"></span>
							</div>
							<div class="acc-content">Kurikulum Merdeka memberikan keleluasaan kepada pendidik untuk bersama menciptakan pembelajaran berkualitas yang sesuai dengan kebutuhan dan lingkungan belajar murid.</div>
						</div>
					</div>
					<div class="acc-wrapper column">
						<div class="acc-heading column align items-flst content-spbw">
							<div class="row align items-center content-spbw width-full">Bagaimana cara mendaftar implementasi Kurikulum Merdeka secara mandiri?
								<span class="acc-expcol"><img src="web/images/expcol.svg"></span>
							</div>
							<div class="acc-content">Mekanisme dan waktu pendaftaran implementasi Kurikulum Merdeka untuk tahun ajaran 2023/2024 akan diinformasikan lebih lanjut pada laman <a href="https://kurikulum.kemdikbud.go.id" target="_blank">kurikulum.kemdikbud.go.id. </a></div>
						</div>
					</div>
					<div class="acc-wrapper column">
						<div class="acc-heading column align items-flst content-spbw">
							<div class="row align items-center content-spbw width-full">Apa yang dimaksud dengan Capaian Pembelajaran (CP)?
								<span class="acc-expcol"><img src="web/images/expcol.svg"></span>
							</div>
							<div class="acc-content">Capaian Pembelajaran (CP) merupakan pengetahuan, keterampilan, dan sikap yang dirangkaikan sebagai satu kesatuan proses yang berkelanjutan sehingga membangun kompetensi yang utuh dari suatu mata pelajaran. Capaian Pembelajaran di PAUD didesain untuk membangun kesenangan belajar dan kesiapan bersekolah anak.</div>
						</div>
					</div>			</div>
		</div>
	</div>
</section>
      <section id="berita" class="section altsection2">
        <div class="column">
          <div class="row align content-spbw col-mobile gap-32">
            <h2>Info Terkini</h2>
            <a class="button secondary hidden-on-mobile shown-on-desktop" href="./berita">Lihat Semua <span class="material-symbols-outlined with-icon">arrow_forward</span>
            </a>
          </div>
          <div class="spacing-64"></div>
          <div class="equal row news wrapper">
            <div class="news-list gap-32">

                <?php
                            require 'koneksi.php';
                            
                            $data = mysqli_query($conn, "SELECT * FROM tb_artikel, tb_tagline WHERE tb_artikel.id_tag = tb_tagline.id_tag ORDER BY id_artikel DESC LIMIT 3");

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
                            <div class="news date">13 September 2022</div>
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
      <div id="mp-preview" class="modal overlay-close" data-modalname="preview">
        <div class="modal-content">
          <span class="modal-close cl-preview close-hidden" data-modalname="preview" title="Tutup">×</span>
          <div>
            <iframe id="pdfPreview" src frameborder="0" width="100%" height="500px"></iframe>
          </div>
        </div>
      </div>

      <div id="mp-daftar-ubah" class="modal overlay-close" data-modalname="daftar-ubah">
        <div class="modal-content">
          <span class="modal-close cl-daftar-ubah" data-modalname="daftar-ubah" title="Tutup">×</span>
          <div>
            <h1 style="text-align: left;">Segera Dibuka</h1>
            <h2 style="text-align: left;">Pendaftaran Implementasi Kurikulum Merdeka TA 2023/2024</h2>
            <p style="text-align: left;">Bagi satuan pendidikan yang akan mengimplementasi Kurikulum Merdeka <b>dapat memilih salah satu dari ketiga opsi</b> berikut. </p>
            <div class="equal row gap-24 grid grid-3">
              <div class="icon-box column gap-16">
                <div class="icon">
                  <img class="icon-img" src="fonts/plh-1.svg">
                </div>
                <div>
                  <h3>Mandiri Belajar</h3>
                </div>
                <div>
                  <p class="box par nospace">Satuan pendidikan <b>menggunakan struktur Kurikulum 2013</b> dalam mengembangkan kurikulum satuan pendidikannya dan <b>menerapkan beberapa prinsip Kurikulum Merdeka</b> dalam melaksanakan pembelajaran dan asesmen. </p>
                </div>
              </div>
              <div class="icon-box column gap-16">
                <div class="icon">
                  <img class="icon-img" src="fonts/plh-2.svg">
                </div>
                <div>
                  <h3>Mandiri Berubah</h3>
                </div>
                <div>
                  <p class="box par nospace">Satuan pendidikan <b>menggunakan struktur Kurikulum Merdeka</b> dalam mengembangkan kurikulum satuan pendidikannya dan <b>menerapkan prinsip-prinsip Kurikulum Merdeka</b> dalam melaksanakan pembelajaran dan asesmen. </p>
                </div>
              </div>
              <div class="icon-box column gap-16">
                <div class="icon">
                  <img class="icon-img" src="fonts/plh-3.svg">
                </div>
                <div>
                  <h3>Mandiri Berbagi</h3>
                </div>
                <div>
                  <p class="box par nospace">Satuan pendidikan <b>menggunakan struktur Kurikulum Merdeka</b> dalam mengembangkan kurikulum satuan pendidikannya dan <b>menerapkan prinsip-prinsip Kurikulum Merdeka</b> dalam melaksanakan pembelajaran dan asesmen, dengan komitmen untuk <b>membagikan praktik-praktik baiknya</b> kepada satuan pendidikan lain. </p>
                </div>
              </div>
            </div>
            <p style="text-align: left;">
              <b>Pendaftaran akan dibuka pada Februari 2023.</b> Nantikan informasi selanjutnya di laman ini atau di berbagai kanal media sosial Kemendikbudristek.
            </p>
            <div class="row gap-16">
              <a class="button accent" target="_blank" href="https://linktr.ee/kurikulum__merdeka">Lihat Kanal Media</a>
              <a class="modal-close-dis button secondary" href="#">Tutup</a>
            </div>
          </div>
        </div>
      </div>
      <section id="lebihlanjut" class="section hero">
        <div class="equal column gap-32 rev-mobile">
          <div class="column one">
            <div class="align left">
              <h1 class="linkslist header">Pelajari Lebih Lanjut dan Daftarkan/Ubah Pilihan Implementasi Kurikulum Merdeka di Satuan Pendidikan Anda</h1>
            </div>
          </div>
          <div class="row align content-center">
            <div class="row">
              <div class="row gap-32 gapbig-mobile col-mobile align items-center">
                <a data-barba-prevent="self" class="linkslist button secondary" target="_blank" href="./kurikulum-merdeka/">Pelajari Lebih Lanjut</a>
                <a data-barba-prevent="self" class="linkslist button accent" href="#mp-daftar-ubah-t">Daftar/Ubah Pilihan Implementasi</a>
              </div>
            </div>
          </div>
        </div>
      </section>
     <?php include 'footer.php';
     ?>
      <button class="scrl-top top-hid" title="Kembali ke atas"></button>
    </main>
    <span id="breaking" data-bartype data-bartext data-barbtn data-barlnk></span>
    <script>
      function prevsrc(pdfSrc) {
        document.getElementById("pdfPreview").setAttribute("src", pdfSrc);
      };
    </script>
  </body>
</html>
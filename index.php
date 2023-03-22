<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php' ?>
  <body id="body">
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

      <nav class="mainav" id="sticky_nav">
        <nav class="wrapper">
          <div class="logo waves-effect" id="mainavlogo">
            <img src="user/assets/img/logo/logo.gif" alt="SD Negeri 3 Kereng Bangkirai">
            <span>SD Negeri 3 Kereng Bangkirai</span>
          </div>
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
                <a class="waves-effect " href="detail/visi-dan-misi">
                  <i class="fa fa-star mr-2"></i>Visi dan Misi </a>
              </li>
              <li>
                <a class="waves-effect " href="profil.php">
                  <i class="fa fa-user mr-2"></i>Profil </a>
              </li>
              <li>
                <a class="waves-effect " href="artikel.php">
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
      <div class="parallax pagi">
        <div class="layer sky" data-parallax-speed="0.4" data-max-scroll="1000"></div>
        <div class="layer layer_0" data-parallax-speed="0.1" data-max-scroll="1000"></div>
        <div class="layer layer_1" data-parallax-speed="0.4" data-max-scroll="1000"></div>
        <div class="layer layer_2" data-parallax-speed="0.5" data-max-scroll="1000"></div>
        <div class="layer layer_3" data-parallax-speed="0.775" data-max-scroll="1000"></div>
        <div class="layer layer_4" data-parallax-speed="0.85" data-max-scroll="1000"></div>
        <div class="layer layer_5" data-parallax-speed="0.95" data-max-scroll="1000"></div>
      </div>
    </section>
    <section class="utama">
      <div class="wrapper">
        <!-- slide -->
      <!-- <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
  <div class="swiper-wrapper" style="transition-duration: 5ms; transform: translate3d(-1600px, 0px, 0px);">
    <div class="swiper-slide" data-swiper-slide-index="1" style="width: 800px;">
      <div class="postingan">
        <div class="image waves-effect">
          <img src="user/assets/img/postingan/72b59fafb52906b549a1bc3ac735ed3d.jpg" alt="Postingan 2"  class="swiper-lazy swiper-lazy-loaded">
          <a href="#" title=""></a>
        </div>
      </div>
    </div>
    <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 800px;">
      <div class="postingan">
        <div class="image waves-effect">
          <img src="user/assets/img/postingan/c2aea85381c491d8567e4527fa736520.jpg" alt="Postingan 3"  class="swiper-lazy swiper-lazy-loaded">
          <a href="#" title=""></a>
        </div>
      </div>
    </div>
  </div>
  <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide">
    <i style="display:inline-block" class="fa fa-chevron-left"></i>
  </div>
  <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide">
    <i style="display:inline-block" class="fa fa-chevron-right"></i>
  </div>
  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
  <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
</div> -->
<?php include 'koneksi.php';
include 'function.php';
$result = mysqli_query($conn,"SELECT * FROM tb_artikel WHERE id_artikel= 21");
$data = mysqli_fetch_array($result);
$judul = $data['judul'];
$url_slug = slugify($judul);
$text_short = substr($data['artikel'], 0, 500) . "...";
?>
        <div class="utamapost ">
          <a href="#" class="image waves-effect" title="">
            <img class="malas" src="upload/<?=$data['gambar']?>" data-src="" alt="" title="" />
          </a>
          <div class="utamacontent">
            <h2><?=$data['judul']?></h2>
            <span class="desc"> <?=$text_short?> </span>
            <a class="btn btn-anim btn-ln" href="detail/<?=$url_slug?>">Read more <i class="fa fa-chevron-right reverse"></i>
            </a>
          </div>
        </div>

<?php include 'koneksi.php';
$result = mysqli_query($conn,"SELECT * FROM tb_artikel ORDER BY id_artikel DESC");
$data = mysqli_fetch_array($result);
$judul = $data['judul'];
$url_slug = slugify($judul);
$text_short = substr($data['artikel'], 0, 500) . "...";
?>
        <div class="utamapost">
          <a href="#" class="image waves-effect" title="">
            <img class="malas" src="upload/<?=$data['gambar']?>" data-src="" alt="" title="" />
          </a>
          <div class="utamacontent">
            <h2><?=$data['judul']?></h2>
            <span class="desc"><?= $text_short?> </span>
            <a class="btn btn-anim btn-ln" href="detail/<?=$url_slug?>">Read more <i class="fa fa-chevron-right reverse"></i>
            </a>
          </div>
        </div>
      </div>
    </section>
    <?php
    include 'koneksi.php';

    $result = mysqli_query($conn, "SELECT COUNT(*) AS jumlah_data FROM tb_guru");
    $data = mysqli_fetch_assoc($result);
    $jumlah = $data['jumlah_data'];
    ?>
    <section class="fouricon">
      <div class="wrapper">
        <div class="wrapicon">
          <a href="#" class="subicon btn-anim waves-effect">
            <span class="icon">
              <i class="fa fa-graduation-cap"></i>
            </span>
            <span class="title"><?=$jumlah?></span>
            <span class="title">Guru</span>
          </a>
          <?php
          include 'koneksi.php';
          $result = mysqli_query($conn, "SELECT COUNT(*) AS jumlah_data FROM tb_siswa");
          $data = mysqli_fetch_assoc($result);
          $jumlah = $data['jumlah_data'];
          ?>
          <a href="#" class="subicon btn-anim waves-effect">
            <span class="icon">
              <i class="fa fa-user"></i>
            </span>
            <span class="title"><?=$jumlah?></span>
            <span class="title">Siswa</span>
          </a>
          <a href="#" class="subicon btn-anim waves-effect">
            <span class="icon">
              <i class="fa fa-credit-card"></i>
            </span>
            <span class="title">49</span>
            <span class="title">PIP</span>
          </a>
          <a href="#" class="subicon btn-anim waves-effect">
            <span class="icon">
              <i class="fa fa-pencil-square-o"></i>
            </span>
            <span class="title">Agenda</span>
          </a>
        </div>
      </div>
    </section>

    <section class="berita">
      <div class="wrapper">
        <div class="headingsection">
          <h1>News Update</h1>
        </div>
        <div class="bagidua">
          <div class="image">
            <img src="user/assets/img/landing/berita.png" alt="Berita">
          </div>
          <div class="content beritapost">
          <?php
            include "koneksi.php";
            $result = mysqli_query($conn, "SELECT * FROM tb_artikel WHERE id_tag=3 ORDER BY id_artikel DESC LIMIT 5");
            ?>
            <?php 
            while ($data= mysqli_fetch_array($result)){  
              $judul = $data['judul'];
              $url_slug = slugify($judul);
            $date_str = date("d/m/Y", strtotime($data['tanggal'])); ?>

            
            <div class="wrapberita">
              <span class="number"><?= $date_str?></span>
              <a href="detail/<?=$url_slug?>" class="waves-effect heading btn-anim has-ripple" title=""><?=$data['judul']?></a>
            </div>
          

            <?php }
            ?>
</div>
        </div>
      </div>
    </section>
    <div class="devider atas">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 90 100" preserveAspectRatio="none">
        <path d="M0 100 C 20 0 50 0 100 100 Z" />
      </svg>
    </div>
    <section class="postingan">
    <div class="headingsection" >
      <h1>Postingan</h1>
    </div> 
      <div class="wrapper">
        <div class="postwrap">
          <div class="post" id="all">

          <?php
            include "koneksi.php";
            $result = mysqli_query($conn, "SELECT * FROM tb_artikel, tb_tagline WHERE tb_artikel.id_tag = tb_tagline.id_tag ORDER BY tanggal DESC LIMIT 3");

            ?>
            <?php 
            while ($data= mysqli_fetch_array($result)){
              $judul = $data['judul'];
              $url_slug = slugify($judul); ?>
              <div class="grid">
              <a href="#" class="label waves-effect" title="#">
                <i class="fa fa-user"></i> <?=$data['tagline']?> </a>
              <div class="image waves-effect">
                <img class="" src="upload/<?=$data['gambar']?>" alt="<?=$data['judul']?>">
                <a href="detail/<?=$url_slug?>" title="<?=$data['judul']?>"></a>
              </div>
              <div class="box_desc">
                <a href="detail/<?=$url_slug?>" class="title waves-effect" title="<?=$data['judul']?>">
                  <span>
                    <h3><?=$data['judul']?></h3>
                  </span>
                </a>
              </div>
            </div>
            <?php }
            ?>


          </div>
          <div class="post_stat">
            <a href="artikel.php"><button class="btn btn-ln btn-anim has-ripple">
              <span>Lebih Banyak</span>
            </button></a>
          </div>
        </div>
      </div>
    </section>

    <section class="label">
      <div class="wrapper">
      <div class="wraplabel">
      <?php
          include "koneksi.php";
          $result = mysqli_query($conn, "SELECT * FROM tb_tagline ORDER BY id_tag DESC");
          ?>
          <?php 
          while ($data= mysqli_fetch_array($result)){ ?>
                  
          <a href="#" class="sublabel btn btn-anim waves-effect has-ripple">
            <i class="fa fa-tag"></i>
            <span><?=$data['tagline']?></span>
            </a>
        
          <?php }
          ?>
      </div>
      <br>
      <div class="main-operasi">
            <h1>Sistem Informasi</h1>
            <div class="wrapoperasi">
                <a href="#" class="operasi waves-effect btn-anim" target="_blank" rel="noopener noreferrer">
                    <div class="image">
                        <img src="user/assets/img/about/dapo.png" alt="Apache" />
                    </div>
                    <div class="text">
                        <h3>Dapodik</h3>
                        <p>v.2023.d</p>
                    </div>
                </a>
                <a href="#" class="operasi waves-effect btn-anim" target="_blank" rel="noopener noreferrer">
                    <div class="image">
                        <img src="user/assets/img/about/tutwuri.png" alt="PHP" />
                    </div>
                    <div class="text">
                        <h3>E-Rapor SD</h3>
                        <p>v2023</p>
                    </div>
                </a>
                <a href="#" class="operasi waves-effect btn-anim" target="_blank" rel="noopener noreferrer">
                    <div class="image">
                        <img src="user/assets/img/about/siptk.png" alt="MySQL" />
                    </div>
                    <div class="text">
                        <h3>SIP-PTK</h3>
                        <p>v5.5.61</p>
                    </div>
                </a>
                <a href="#" class="operasi waves-effect btn-anim" target="_blank" rel="noopener noreferrer">
                    <div class="image">
                        <img src="user/assets/img/about/php.png" alt="" />
                    </div>
                    <div class="text">
                        <h3>PHP</h3>
                        <p>v7.2</p>
                    </div>
                </a>
            </div>
        </div>
      </div>
    </section>
    <section class="contact">
      <div class="wrapper">
        <div class="wrapcontact">
          <div class="bagidua">
            <div class="content">
              <div class="heading">
                <h1>Contact</h1>
              </div>
              <form id='kritiksaran' action="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                <div class="formtwo">
                  <div class="input-field">
                    <input class="validate" id="name_form" name="" required="" type="text">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label for="name_form">Name</label>
                  </div>
                  <div class="input-field">
                    <input class="validate" id="email_form" name="" required="" type="email">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label for="email_form">E-mail</label>
                  </div>
                </div>
                <div class="input-field">
                  <textarea class="validate" name="pesan_kritiksaran" id="pesan_form" cols="10" rows="10" required="" type="text"></textarea>
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label for="pesan_form">Pesan</label>
                </div>
                <span class="pesan">*NB tidak perlu login untuk Komentar</span>
                <div class="btn-group">
                  <button class="btn btn-ln btn-anim" type="submit" id="submit">Kirim</button>
                  <svg class="spinner" width="30px" height="30px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                    <circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle>
                  </svg>
                </div>
              </form>
            </div>
            <div class="content">
              <div class="heading alamat">
                <h1>SDN-3 Kereng Bangkirai</h1>
                <div class="groupdesc">
                  <a href="https://goo.gl/maps/UguyXTrNLRqXpkRW9">
                    <i class="fa fa-map-marker"></i>Jl. Panenga Raya V, Palangka Raya 73113 </a>
                  <!-- <a href="tel:">
                    <i class="fa fa-phone"></i>08 </a> -->
                  <a href="mailto:sdnkerengbangkirai3@gmail.com">
                    <i class="fa fa-envelope"></i>sdnkerengbangkirai3@gmail.com </a>
                </div>
              </div>
              <div class="google-maps">
              <iframe title="SDN-3 Kereng Bangkirai" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3986.6715373886705!2d113.91143231446394!3d-2.275741938146932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2de34d1b388b4575%3A0xcb58b9ad7b48dc5e!2sSDN%203%20Kereng%20Bangkirai!5e0!3m2!1sid!2sid!4v1679410731061!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div id="search_popup" class="modal">
      <h2>Cari Sesuatu...</h2>
      <form class="search" action="#">
        <input type="text" placeholder="Search" aria-label="search" name="query" />
        <button class="btn btn-anim btn-color" type="submit">
          <i class="fa fa-search"></i>
        </button>
      </form>
    </div>
    <!-- footer -->
    <?php include 'footer.php' ?>
    <div id="search_popup" class="modal">
      <h2>Cari Sesuatu...</h2>
      <form class="search" action="search.html">
        <input type="text" placeholder="Search" aria-label="search" name="query" />
        <button class="btn btn-anim btn-color" type="submit">
          <i class="fa fa-search"></i>
        </button>
      </form>
    </div>
    <div class="overlay"></div>
    <div class="backtotop hide waves-effect" id="backtotop">
      <span></span>
    </div>
    <div class="wrapfab" id="fab">
      <input id="fabbuton" type="checkbox" class="fabcheckbox" />
      <label class="fabutton waves-effect" for="fabbuton">
        <span class="fab_dots dots_1"></span>
        <span class="fab_dots dots_2"></span>
        <span class="fab_dots dots_3"></span>
      </label>
      <div class="fab_target">
        <a href="about.html" class="fab_action action_1 waves-effect btn-anim" title="Tentang Developer">
          <i class="fa fa-info"></i>
        </a>
        <a href="javascript:void(0)" class="fab_action action_2 waves-effect btn-anim" id="fullscreen" title="Fullscreen?">
          <i class="fa fa-arrows-alt"></i>
        </a>
        <a href="index.html" class="fab_action action_3 waves-effect btn-anim" title="Utama">
          <i class="fa fa-home"></i>
        </a>
        <a href="javascript:void(0)" class="fab_action action_4 waves-effect btn-anim" id="darkmode" title="Ubah Tema">
          <i class="fa fa-lightbulb-o"></i>
        </a>
        <a href="index.html" class="fab_action action_5 waves-effect btn-anim" title="Kontak">
          <i class="fa fa-address-card"></i>
        </a>
      </div>
    </div>
    <script type="text/javascript" src="user/assets/js/pages/landing.min.js"></script>
    <script type="text/javascript" src="user/assets/js/swiper.min.js"></script>
    <script type="text/javascript" src="user/assets/js/pages/core-landing.min.js"></script>
</html>
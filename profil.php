<!DOCTYPE html>
<html lang="en">
  <?php include 'header.php';
  include 'koneksi.php'; ?>
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
                <a class="waves-effect " href="#">
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
    </section>
    </section>
<?php 
$result = mysqli_query($conn, "SELECT * FROM tb_guru")
?>
    <section class="author_section" id="author">
   <div class="wrapper">
      <h1>Profil</h1>
      <div class="authorwrap">
      <?php 
while ($data= mysqli_fetch_array($result)){ ?>
                 <div class="author btn-anim">
            <div class="sekolah">
               <div class="image">
                  <div class="svg">
                     <svg class="atas" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90.13 39.15">
                        <path d="M132.16,69.54S105.52,38.73,74.26,63A48,48,0,0,0,62.51,76.74c-11.78,20-26.63,8.37-17.35-10.2C55.38,46.1,106.16,37.54,132.16,69.54Z" transform="translate(-42.12 -48.2)"></path>
                     </svg>
                     <svg class="tigaatas" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 27.25 28.61">
                        <path d="M161.16,81.54c9-3,15,10,16-1C177.16,71.54,164.16,77.54,161.16,81.54Z" transform="translate(-151.04 -56.56)"></path>
                        <path d="M159.16,77.54c6-6,19-6,19-11S166.16,56.54,159.16,77.54Z" transform="translate(-151.04 -56.56)"></path>
                        <path d="M156.16,75.54c-4-9,8-9,6-16-2-6-11-2-11,7,0,7,5,9,5,9" transform="translate(-151.04 -56.56)"></path>
                     </svg>
                     <svg class="lingkaran" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126 126">
                        <circle cx="63" cy="63" r="63"></circle>
                     </svg>
                     <svg class="bawah" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 158.35 74.58">
                        <path d="M32.16,150.54s-9,22,12,37c28,19,32-10,54-19,18-7,34,6,49,4,20,0,40-18,18-28s6-29,17-7-11,45-36,42-39.09-12-56,7c-16,18-35,19-50,8C16.23,177,32.16,150.54,32.16,150.54Z" transform="translate(-26.84 -127.23)"></path>
                     </svg>
                     <svg class="mask_lingkaran" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 126.25 93.25">
                        <path d="M173,128.07V218H47V125h.18A63,63,0,0,0,173,128.07Z" transform="translate(-46.88 -124.88)"></path>
                     </svg>
                  </div>
                  <img src="upload/<?=$data['gambar']?>" alt="<?=$data['nama']?>">
               </div>
               <div class="datasekolah">
                  <span>
                     <span class="quotes"><?=$data['alamat']?> </span>
                     <!-- <a href="#" class="btn btn-anim" rel="noopener noreferrer">More <i class="fa fa-chevron-right reverse"></i> -->
                     </a>
                  </span>
                  <ul class="social-icons">
                     <li>
                        <a class="btn-anim" href="https://www.instagram.com/">
                           <i class="fa fa-instagram"></i>
                        </a>
                     </li>
                     <li>
                        <a class="btn-anim" href="https://web.facebook.com/">
                           <i class="fa fa-facebook-square"></i>
                        </a>
                     </li>
                     <li>
                        <a class="btn-anim" href="#">
                           <i class="fa fa-github"></i>
                        </a>
                     </li>
                     <li>
                        <a class="btn-anim" href="https://api.whatsapp.com/send?phone=">
                           <i class="fa fa-whatsapp"></i>
                        </a>
                     </li>
                     <li>
                        <a class="btn-anim" href="mailto:">
                           <i class="fa fa-envelope"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
            <div class="caption">
               <h2><?=$data['nama']?></h2>
               <h4>NIP.<?=$data['nip']?></h4>
               <span class="quotes"> <?=$data['jabatan']?>  </span>
               <a href="author/Iqbal0105.html" class="btn btn-anim" rel="noopener noreferrer">More <i class="fa fa-chevron-right reverse"></i>
               </a>
            </div>
         </div>

<?php }
?>


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
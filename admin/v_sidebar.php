  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../admin" class="brand-link">
      <img src="../assets/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <?php include '../koneksi.php';
      $query= mysqli_query($conn, 'SELECT * FROM tb_setting');
      $baris = mysqli_fetch_array($query);
      
      ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="../admin" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="guru.php" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                Data Guru
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="siswa.php" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Data Siswa
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pip.php" class="nav-link">
              <i class="nav-icon fas fa-user-graduate"></i>
              <p>
                Data PIP
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="artikel.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Artikel
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="kategori.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Kategori
             
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="user.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="setting.php?id_setting=<?=$baris['id_setting'];?>" class="nav-link">
              <i class="nav-icon fas fa-wrench"></i>
              <p>
                Setting 
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="inbox.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
            </ul>
            <li class="nav-item">
            <a href="../logout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
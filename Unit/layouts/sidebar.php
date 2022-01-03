<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="../AdminLTE/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
    <span class="brand-text font-weight-light">Audit <b>PBJ</b></span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img class="img-circle elevation-2" alt="User Image" src="../AdminLTE/dist/img/foto/<?= $data_user['foto']; ?>">
      </div>
      <div class="info">
        <a class="d-block"><?= $data_user['nama']; ?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="unit.php" class="nav-link <?php if ($page == "Dashboard") echo "active" ?>">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="barang.php" class="nav-link <?php if ($page == "Paket Barang") echo "active" ?>">
            <i class="nav-icon fas fa-box-open"></i>
            <p>
              Paket Barang
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="audit.php" class="nav-link <?php if ($page == "Data Audit") echo "active" ?>">
            <i class="nav-icon fas fa-box-open"></i>
            <p>
              Data Audit
            </p>
          </a>
        </li>
        <!-- <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-invoice"></i>
            <p>
              Temuan Hasil Audit
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-newspaper"></i>
            <p>
              Berita Acara
            </p>
          </a>
        </li> -->
        <li class="nav-item">
          <a href="../Login/logout.php" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              Logout
              <!-- <i class="fas fa-angle-left right"></i> -->
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
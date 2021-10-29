    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <?php
            $sql_userDaftar = mysqli_query($conn, "SELECT * FROM tb_user WHERE status='Mendaftar'");
            $jumlah_daftar = mysqli_num_rows($sql_userDaftar);
            if ($jumlah_daftar > 0) {
              echo '<span class="badge badge-warning navbar-badge">' . $jumlah_daftar . '</span>';
            }
            ?>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="data_user.php" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> <?= $jumlah_daftar ?> user mendaftar
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
        <li class="nav-item">
          <div class="mb-4"><input type="checkbox" value="1" class="mr-1"><span>Dark Mode</span></div>
          <script>
            // function($) {
              var $dark_mode_container = $('<div />', {
                class: 'mb-4'
              }).append($dark_mode_checkbox).append('<span>Dark Mode</span>')
              $container.append($dark_mode_container)
            // }
          </script>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../logo/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PHXVIEW</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../back/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['fullname']; ?></a>
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

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <?php if($_SESSION['role'] == 1){ ?>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Entry
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="client.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Client Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="task.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Task Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="announcement.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Announcement</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="payout.php" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Payout Request
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reports.php" class="nav-link">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                Reports
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <?php } else if($_SESSION['role'] == 0) { ?>
          <li class="nav-item">
            <a href="announcement.php" class="nav-link">
              <i class="nav-icon fas fa-bullhorn"></i>
              <p>
                Announcement
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="package.php" class="nav-link">
              <i class="nav-icon fas fa-database"></i>
              <p>
                Package
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="market.php" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Market
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Task
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendingtask.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pending Task</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="expiretask.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Expire Task</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="donetask.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Done Task</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="withdraw.php" class="nav-link">
              <i class="nav-icon fas fa-credit-card"></i>
              <p>
                Withdraw
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="profile.php" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reports.php" class="nav-link">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                Reports
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <?php } else { ?>
            
          <li class="nav-item">
            <a href="statistics.php" class="nav-link">
              <i class="nav-icon fas fa-chart-area"></i>
              <p>
                Statistics
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="reports.php" class="nav-link">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                Reports
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
            <?php } ?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
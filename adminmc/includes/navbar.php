  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
      <div class="sidebar-brand-icon rotate-n-15">
      </div>
      <div class="sidebar-brand-text mx-3">Welcome Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading mb-4">
      Interface
    </div>
    <!-- Divider -->
    <hr class="sidebar-divider mb-2">
    <li class="nav-item">
      <a class="nav-link" href="project.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Contracts</span></a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false"><span>Table Entries</span></a>
      <div class="dropdown-menu" aria-labelledby="dropdown01">
        <a class="dropdown-item" href="employee.php">Employee</a>
        <a class="dropdown-item" href="vehicles.php">Vehicles</a>
        <a class="dropdown-item" href="tools.php">Tools</a>
        <a class="dropdown-item" href="materials.php">Daily Work</a>
        <a class="dropdown-item" href="expenses.php">Expenses</a>
        <a class="dropdown-item" href="overtime.php">Overtime</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="register.php">
        <i class="fas fa-fw fa-user"></i>
        <span>Admin</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="attendance.php">
        <i class="fas fa-fw fa-user"></i>
        <span>Attendance</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="attendancerecord.php">
        <i class="fas fa-fw fa-table"></i>
        <span>Attendance Record</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="vehicleassign.php">
        <i class="fas fa-fw fa-car"></i>
        <span>Vehicle Assign</span> 
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="budget.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Budget System</span> </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->



  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a href="adminlogin.php" class="btn btn-primary" name="logout">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <nav class="navbar navbar-expand navbar-light bg-light topbar static-top shadow">
        <h1 class="h4 font-weight-bold mb-0 text-grey text-uppercase">Motasim Tariq Hamoua Cont. Est.</h1>
      <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>


        <!-- Topbar Navbar -->
        <ul class="navbar-nav ml-auto">
          <div class="topbar-divider d-none d-sm-block"></div>

          <!-- Nav Item - User Information -->
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <span class="mr-2 d-none d-lg-inline text-gray-600">
            <?php 
            echo $_SESSION['email'];
             ?>
              </span>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>

      </nav>
      <!-- End of Topbar -->
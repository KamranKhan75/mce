<?php
session_start();
if(!$_SESSION['email']){
  session_unset();
    header('location:adminlogin.php');
  
}
include('includes/header.php');
include('includes/navbar.php');
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
$result=$mysqli->query("SELECT COUNT(*) as count FROM projecttable") or die($mysqli->error());
$result1=$mysqli->query("SELECT COUNT(*) as count FROM projecttable WHERE status='Completed'") or die($mysqli->error());
$result2=$mysqli->query("SELECT COUNT(*) as count FROM projecttable WHERE status='Pending'") or die($mysqli->error());
?>
        <!-- Begin Page Content -->
        <div class="container-fluid background">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-center mb-4">
          </div>

          <!-- Content Row -->
          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Contracts</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        while ($row=$result->fetch_assoc()):?>
                        <?php echo $row['count']; ?>
                        <?php endwhile; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">contracts (Progress)</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                        while ($row=$result2->fetch_assoc()):?>
                        <?php echo $row['count']; ?>
                        <?php endwhile; ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Contracts (Completed)</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                          <?php
                        while ($row=$result1->fetch_assoc()):?>
                        <?php echo $row['count']; ?>
                        <?php endwhile; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->


  <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>

  


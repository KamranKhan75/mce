<?php 
require_once'addvehicle.php';
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php
if(isset($_SESSION['message'])): ?>
<div class="alert alert-<?=$_SESSION['msg_type']; ?>">
    <?php
     echo $_SESSION['message'];
     unset($_SESSION['message']);
     ?>
</div>
<?php endif; ?>

<?php
    $mysqli=new mysqli('localhost','root','','mce')or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM vehicletable") or die($mysqli->error());
    ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vehicles Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="addvehicle.php" method="POST">
                <div class="modal-body">
                <div class="form-group">
                <input type="hidden" class="form-control form-control-user" name="id" value="<?php echo $vehicleid; ?>">
                </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                             value="<?php echo $vehiclename; ?>" placeholder="Enter Vehicle Name" name="txtvehicleName" id="txtempName">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            value="<?php echo $vehiclemodel;?>" placeholder="Enter Model No." name="txtvehicleModel">
                    </div>               
                        <button type="submit" name="save" class="btn btn-primary btn-user btn-block">Save </button>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row mb-2">
        <!-- Button trigger modal -->
        <div class="col text-left">
        <a href="reports/vehiclereport.php" class="btn btn-success pull-left">Print Report</a>
        </div>
        <div class="col text-right">
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
            New Entry
        </button>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Vehicles DataTable</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Vehicle Name</th>
                            <th>Vehicle No</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Vehicle Name</th>
                            <th>Vehicle No</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                        <?php
                        while ($row=$result->fetch_assoc()):?>
                        <tr>

                            <td><?php echo $row['vehicleName']; ?></td>
                            <td><?php echo $row['vehicleNo']; ?></td> 
                            <td>
                            <form action="vupdate.php" method="POST">
                            <input type="hidden" name="editID" value="<?php echo $row['vehicleID']; ?>">
                            <button type="submit" name="edit" class="btn btn-info">Edit</button>
                            </form>
                            </td>                          
                            <!-- <td><a href="empupdate.php?edit=<?php //echo $row['empID']; ?>" class="btn btn-info editbtn">Edit</a></td> -->
                            <td><a href="addvehicle.php?delete=<?php echo $row['vehicleID']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
<?php 
require_once'addvehassign.php';
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
<!-- CONNECT TO THE DATABASE -->
<?php
    $mysqli=new mysqli('localhost','root','','mce')or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT vehID,empName,vehicleNo FROM vehicledetails,employeetable,vehicletable WHERE vehicledetails.empID=employeetable.empID AND vehicledetails.vehicleID=vehicletable.vehicleID") or die(mysqli_error($mysqli));
    $select=$mysqli->query("SELECT * FROM employeetable WHERE jobDesc='Driver'") or die($mysqli->error());
    $select1=$mysqli->query("SELECT * FROM vehicletable")or die($mysqli->error());
   
?>
<!-- PROJECT ENTRY FORM  -->
<!-- IT'S A BOOTSTRAP MODAL THAT POPUPS THE ENTRY FORM WHEN THE BUTTON IS CLICKED -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Assign Vehicle Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="addvehassign.php" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" class="form-control form-control-user" name="id"
                            value="<?php echo $vehid; ?>">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="eid" name="eid">
                            <option value="">Select Employee</option>
                            <?php while($row=$select->fetch_array()): ?>
                            <option id="<?php echo $row['empID']; ?>" value="<?php echo $row['empID']; ?>">
                                <?php echo $row['empName']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="vid" name="vid">
                            <option value="">Assign Vehicle</option>
                            <?php while($row=$select1->fetch_array()): ?>
                            <option id="<?php echo $row['vehicleID']; ?>" value="<?php echo $row['vehicleID']; ?>">
                                <?php echo $row['vehicleNo']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <button type="submit" name="save" class="btn btn-primary btn-user btn-block">Save </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- END OF MODAL AND END OF FORM -->
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>-->
    <div class="row mb-2">
        <!-- Button trigger modal -->
        <div class="col text-left">
        <a href="reports/vehicleassignreport.php" class="btn btn-success pull-left">Print Report</a>
        </div>
        <div class="col text-right">
        <button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#exampleModal">
            New Entry
        </button>
        </div>
    </div>
    <!-- DataTale -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Project DataTable</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>

                            <th>Employee Name</th>
                            <th>Vehicle No.</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Employee Name</th>
                            <th>Vehicle No.</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                        <?php
                        while ($row=$result->fetch_assoc()):?>
                        <tr>

                            <td><?php echo $row['empName']; ?></td>
                            <td><?php echo $row['vehicleNo']; ?></td>
                            <td>
                                <form action="vehupdate.php" method="POST">
                                    <input type="hidden" name="editID" value="<?php echo $row['overtimeID']; ?>">
                                    <button type="submit" name="edit" class="btn btn-info">Edit</button>
                                </form>
                            </td>
                            <!-- <td><a href="empupdate.php?edit=<?php //echo $row['empID']; ?>" class="btn btn-info editbtn">Edit</a></td> -->
                            <td><a href="addovertime.php?delete=<?php echo $row['overtimeID']; ?>"
                                    class="btn btn-danger">Delete</a></td>
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
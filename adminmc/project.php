<?php 
require_once'addproject.php';
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
    $result=$mysqli->query("SELECT * FROM projecttable") or die($mysqli->error());
    ?>
    <!-- PROJECT ENTRY FORM  -->
    <!-- IT'S A BOOTSTRAP MODAL THAT POPUPS THE ENTRY FORM WHEN THE BUTTON IS CLICKED -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Project Entry Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="addproject.php" method="POST">
                <div class="modal-body">
                <div class="form-group">
                <input type="hidden" class="form-control form-control-user" name="id" value="<?php echo $pid; ?>">
                </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            aria-describedby="emailHelp" value="<?php echo $pdesc; ?>" placeholder="Contract Description" name="txtpdesc">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            aria-describedby="emailHelp" value="<?php echo $location;?>" placeholder="Location" name="txtlocation">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            placeholder="Enter Budget" value="<?php echo $budget; ?>" name="txtbudget">
                    </div>
                    <div class="form-group">
                    <input type="date" class="form-control" value="<?php echo $date ?>" placeholder="yyyy-mm-dd" name="txtdate">
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
    <div class="row mb-2">
        <!-- Button trigger modal -->
        <div class="col text-left">
        <a href="reports/projectreport.php" class="btn btn-success pull-left">Print Report</a>
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
            <h6 class="m-0 font-weight-bold text-primary">Contracts DataTable</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Project Description</th>
                            <th>Location</th>
                            <th>Budget</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Print</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Project Description</th>
                            <th>Location</th>
                            <th>Budget</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Print</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                        <?php
                        while ($row=$result->fetch_assoc()):?>
                        <tr>

                            <td><?php echo $row['projectDescription']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['budget']; ?></td> 
                            <td><?php echo $row['date']; ?></td>
                            <td>
                            <form action="prupdate.php" method="POST">
                            <input type="hidden" name="editID" value="<?php echo $row['projectID']; ?>">
                            <button type="submit" name="edit" class="btn btn-info">Edit</button>
                            </form>
                            </td>                          
                            <td><a href="addproject.php?delete=<?php echo $row['projectID']; ?>" class="btn btn-danger">Delete</a></td>
                            <td><a href="reports/singleProjectreport.php?id=<?php echo $row['projectID']; ?>" class="btn btn-success">Print</a></td>
                            <td><?php echo $row['status']; ?></td>
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
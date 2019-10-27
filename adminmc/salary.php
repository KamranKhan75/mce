<?php 
require_once'addsalary.php';
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
    $result=$mysqli->query("SELECT salaryID,JobDesc,salary FROM salarytable,jobstable WHERE salarytable.jobID=jobstable.jobID ") or die($mysqli->error());
    $select=$mysqli->query("SELECT * FROM jobstable");
    ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Salary Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="addsalary.php" method="POST">
                <div class="modal-body">
                <div class="form-group">
                <input type="hidden" class="form-control form-control-user" name="id" value="<?php echo $sid; ?>">
                </div>
                    <div class="form-group">
                        <select class="form-control" id="jobid" name="jobid">
                            <option value="">Job Description</option>
                                <?php while($row=$select->fetch_array()): ?>
                                    <option id="<?php echo $row['jobID']; ?>" value="<?php echo $row['jobID']; ?>"><?php echo $row['JobDesc']; ?></option>
                                <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            aria-describedby="emailHelp" value="<?php echo $salary; ?>" placeholder="Enter Amount of Salary" name="txtsalary">
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
    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>-->
    <div class="text-right mb-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            New Entry
        </button>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Salary DataTable</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Job Description</th>
                            <th>Salary</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Job Description</th>
                            <th>Salary</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                        <?php
                        while ($row=$result->fetch_assoc()):?>
                        <tr>

                            <td><?php echo $row['JobDesc']; ?></td>
                            <td>SAR <?php echo $row['salary']; ?></td>
                            <td>
                            <form action="salupdate.php" method="POST">
                            <input type="hidden" name="editID" value="<?php echo $row['salaryID']; ?>">
                            <button type="submit" name="edit" class="btn btn-info">Edit</button>
                            </form>
                            </td>                          
                            <!-- <td><a href="empupdate.php?edit=<?php //echo $row['empID']; ?>" class="btn btn-info editbtn">Edit</a></td> -->
                            <td><a href="addsalary.php?delete=<?php echo $row['empID']; ?>" class="btn btn-danger">Delete</a></td>
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
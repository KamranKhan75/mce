<?php 
require_once'addemployee.php';
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
    $result=$mysqli->query("SELECT * FROM employeetable") or die($mysqli->error());
    ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Employee Entry Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="addemployee.php" method="POST">
                <div class="modal-body">
                <div class="form-group">
                <input type="hidden" class="form-control form-control-user" name="id" id="id" value="<?php echo $eid; ?>">
                </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            aria-describedby="emailHelp" value="<?php echo $ename; ?>" placeholder="Enter Employee Name" name="txtempName" id="txtempName">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            aria-describedby="emailHelp" value="<?php echo $iNo;?>" placeholder="Enter Iqama No." name="txtiqamaNo" id="txtiqamaNo">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            placeholder="Enter Passport No." value="<?php echo $passNo; ?>" name="txtPno">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            placeholder="Job Description" value="<?php echo $jobdesc; ?>" name="txtjobdesc" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            placeholder="Salary Amount" value="<?php echo $salary; ?>" name="txtsalary">
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
    <div class="row mb-2">
        <!-- Button trigger modal -->
        <div class="col text-left">
        <a href="reports/employeereport.php" class="btn btn-success pull-left">Print Report</a>
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
            <h6 class="m-0 font-weight-bold text-primary">Employee DataTable</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Iqama No.</th>
                            <th>Passport No.</th>
                            <th>Job Description</th>
                            <th>Salary</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Print</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Iqama No.</th>
                            <th>Passport No.</th>
                            <th>Job Description</th>
                            <th>Salary</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Print</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                        <?php
                        while ($row=$result->fetch_assoc()):?>
                        <tr>

                            <td><?php echo $row['empName']; ?></td>
                            <td><?php echo $row['iqamaNo']; ?></td>
                            <td><?php echo $row['passportNo']; ?></td> 
                            <td><?php echo $row['jobDesc']; ?></td>
                            <td><?php echo $row['Salary']; ?></td> 
                            <td>
                            <form action="empupdate.php" method="POST">
                            <input type="hidden" name="editID" value="<?php echo $row['empID']; ?>">
                            <button type="submit" name="edit" class="btn btn-info">Edit</button>
                            </form>
                            </td>                          
                            <!-- <td><a href="empupdate.php?edit=<?php //echo $row['empID']; ?>" class="btn btn-info editbtn">Edit</a></td> -->
                            <td><a href="addemployee.php?delete=<?php echo $row['empID']; ?>" class="btn btn-danger">Delete</a></td>
                            <td><a href="reports/singleemployee.php?id=<?php echo $row['empID']; ?>" class="btn btn-success">Print</a></td>
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
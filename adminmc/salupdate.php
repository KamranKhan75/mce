<?php 
require_once'addsalary.php';
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
$result=$mysqli->query("SELECT salaryID,JobDesc,salary FROM salarytable,jobstable WHERE salarytable.jobID=jobstable.jobID ") or die($mysqli->error());
    $select=$mysqli->query("SELECT * FROM jobstable");
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employee Form</h6>
        </div>
        <div class="card-body">
            <form class="user" action="addsalary.php" method="post">
                <input type="hidden" class="form-control form-control-user" name="id" value="<?php echo $sid; ?>">
                <div class="form-group">
                    <select class="form-control" id="jobid" name="jobid">
                        <option value="">Job Description</option>
                        <?php while($row=$select->fetch_array()): ?>
                        <option id="<?php echo $row['jobID']; ?>" value="<?php echo $row['jobID']; ?>">
                            <?php echo $row['JobDesc']; ?></option>
                        <?php endwhile; ?>
                    </select>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" aria-describedby="emailHelp"
                        value="<?php echo $salary; ?>" placeholder="Enter Amount of Salary" name="txtsalary">
                </div>
                <button type="submit" name="update" class="btn btn-info btn-user btn-block">Update </button>
            </form>
        </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
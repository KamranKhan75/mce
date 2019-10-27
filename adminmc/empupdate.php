<?php
require_once'addemployee.php';
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>
<?php
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
//$result=$mysqli->query("SELECT * FROM employeetable") or die($mysqli->error());
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employee Form</h6>
        </div>
        <div class="card-body">
        <form class="user" action="addemployee.php" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control form-control-user" name="id"
                    value="<?php echo $eid; ?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" aria-describedby="emailHelp"
                    value="<?php echo $ename; ?>" placeholder="Enter Employee Name" name="txtempName" id="txtempName">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" aria-describedby="emailHelp"
                    value="<?php echo $iNo;?>" placeholder="Enter Iqama No." name="txtiqamaNo" id="txtiqamaNo">
            </div>
            <div class="form-group">
                <input type="text" class="form-control form-control-user" placeholder="Enter Passport No."
                    value="<?php echo $passNo; ?>" name="txtPno" id="txtPno">
            </div>
            <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            placeholder="Job Description" value="<?php echo $jobdesc; ?>" name="txtjobdesc" >
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            placeholder="Salary Amount" value="<?php echo $salary; ?>" name="txtsalary">
                    </div>
            <button type="submit" name="update" class="btn btn-info btn-user btn-block">Update </button>
        </div>
        </form>
    </div>
</div>
    <?php
include('includes/scripts.php');
include('includes/footer.php');
?>
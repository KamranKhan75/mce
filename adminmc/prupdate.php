<?php 
require_once'addproject.php';
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
// $result=$mysqli->query("SELECT * FROM employeetable") or die($mysqli->error());
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employee Form</h6>
        </div>
        <div class="card-body">
            <form class="user" action="addproject.php" method="post">
            <div class="form-group">
                <input type="hidden" class="form-control form-control-user" name="id" value="<?php echo $pid; ?>">
                </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            aria-describedby="emailHelp" value="<?php echo $pdesc; ?>" placeholder="Project Description" name="txtpdesc">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            aria-describedby="emailHelp" value="<?php echo $location;?>" placeholder="Location" name="txtlocation">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" 
                            placeholder="Enter Passport No." value="<?php echo $budget; ?>" name="txtbudget">
                    </div>
                    <div class="form-group">
                    <input type="date" class="form-control" value="<?php echo $date ?>" placeholder="yyyy-mm-dd" name="txtdate">
                    </div>
                    <div class="form-group">
                    <select class="form-control" id="pid" name="pid">
                            <option value="">Contract Status</option>
                            <option value="Pending">Pending</option>
                            <option value="Completed">Completed</option>
                        </select>
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
<?php 
require_once'addtools.php';
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
            <form class="user" action="addtools.php" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control form-control-user" name="id"
                        value="<?php echo $toolsid; ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" aria-describedby="emailHelp"
                        value="<?php echo $name; ?>" placeholder="Enter Tool Name" name="txtname">
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
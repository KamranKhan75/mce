<?php 
require_once'addvehassign.php';
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
$result=$mysqli->query("SELECT vehID,empName,vehicleNo FROM vehicledetails,employeetable,vehicletable WHERE vehicledetails.empID=employeetable.empID AND vehicledetails.vehicleID=vehicletable.vehicleID") or die(mysqli_error($mysqli));
$select=$mysqli->query("SELECT * FROM employeetable WHERE JobDesc='Driver'") or die($mysqli->error());
$select1=$mysqli->query("SELECT * FROM vehicletable")or die($mysqli->error());
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employee Form</h6>
        </div>
        <div class="card-body">
            <form class="user" action="addvehassign.php" method="post">
            <div class="form-group">
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
                <button type="submit" name="update" class="btn btn-info btn-user btn-block">Update </button>
            </form>
        </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
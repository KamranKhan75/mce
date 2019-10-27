<?php 
require_once'addovertime.php';
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
$result=$mysqli->query("SELECT overtimeID,projectDescription,empName,NoofHours,amountPerHour,totalAmount,odate FROM overtimetable,projecttable,employeetable WHERE overtimetable.projectID=projecttable.projectID AND overtimetable.empID=employeetable.empID") or die(mysqli_error($mysqli));
$select=$mysqli->query("SELECT * FROM projecttable") or die($mysqli->error());
$select1=$mysqli->query("SELECT * FROM employeetable")or die($mysqli->error());
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employee Form</h6>
        </div>
        <div class="card-body">
            <form class="user" action="addovertime.php" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control form-control-user" name="id"
                        value="<?php echo $overtimeid; ?>">
                </div>
                <div class="form-group">
                        <select class="form-control" id="pid" name="pid">
                            <option value="">Job Description</option>
                            <?php while($row=$select->fetch_array()): ?>
                            <option id="<?php echo $row['projectID']; ?>" value="<?php echo $row['projectID']; ?>">
                                <?php echo $row['projectDescription']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="eid" name="eid">
                            <option value="">Employee Name</option>
                            <?php while($row=$select1->fetch_array()): ?>
                            <option id="<?php echo $row['empID']; ?>" value="<?php echo $row['empID']; ?>">
                                <?php echo $row['empName']; ?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="No. of hours worked"
                            value="<?php echo $NoofHours; ?>" name="txtnoHours" //id="qty" id="NoofHours">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Amount/hr worked"
                            value="<?php echo $amountPerHour; ?>" name="txtamountPerHour" //id="AperQty"
                            id="amountPerHour">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user" placeholder="Total Amount"
                            value="<?php echo $totalAmount; ?>" name="txtTotalAmount" //id="totalPrice"
                            id="totalAmount">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" value="<?php echo $odate ?>" name="txtdate">
                    </div>
                <button type="submit" name="update" class="btn btn-info btn-user btn-block">Update</button>
            </form>
        </div>
    </div>
</div>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
<?php 
require_once'addmaterials.php';
?>
<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
$result=$mysqli->query("SELECT dailyID,projectDescription,location,ddescription,Qty,amountPerQty,totalPrice,NoofLabors,ddate FROM dailyworkusage,projecttable WHERE dailyworkusage.projectID=projecttable.projectID") or die(mysqli_error($mysqli));
$select=$mysqli->query("SELECT * FROM projecttable") or die($mysqli->error());
?>
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Employee Form</h6>
        </div>
        <div class="card-body">
            <form class="user" action="addmaterials.php" method="post">
                <div class="form-group">
                    <input type="hidden" class="form-control form-control-user" name="id"
                        value="<?php echo $dailyid; ?>">
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
                    <input type="text" class="form-control form-control-user" value="<?php echo $ddesc;?>"
                        placeholder="Description" name="textDdesc">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Enter Qty"
                        value="<?php echo $qty; ?>" name="txtQty" id="qty">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Enter Amount/Qty"
                        value="<?php echo $Aperqty; ?>" name="txtAmountPerQty" id="AperQty">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Total Amount"
                        value="<?php echo $totalPrice; ?>" name="txtTotalAmount" id="totalPrice">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" placeholder="Total Amount"
                        value="<?php echo $NoofLabours; ?>" name="txtLabours" id="totalPrice">
                </div>
                <div class="form-group">
                    <input type="date" class="form-control" value="<?php echo $ddate ?>" placeholder="yyyy-mm-dd"
                        name="txtdate">
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
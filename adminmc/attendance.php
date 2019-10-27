<?php
require_once'addattendance.php';
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
    $result=$mysqli->query("SELECT * FROM employeetable") or die($mysqli->error());
    $counter=0;
?>
<!-- DataTale -->
<form action="addattendance.php" method="post">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Attendance DataTable</h6>
        <h6 class="text-primary font-weight-bold text-center"><?php echo date("Y-m-d"); ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-dark" id="" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Iqama No.</th>
                        <th>Passport No.</th>
                        <th>Job Description</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Name</th>
                        <th>Iqama No.</th>
                        <th>Passport No.</th>
                        <th>Job Description</th>
                        <th>Edit</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                    <?php
                        while ($row=$result->fetch_assoc()):?>
                    <tr>

                        <td><?php echo $row['empName']; ?></td>
                        <input type="hidden" value="<?php echo $row['empName']; ?>" name="empName[]">
                        <td><?php echo $row['iqamaNo']; ?></td>
                        <input type="hidden" value="<?php echo $row['iqamaNo']; ?>" name="iqamaNo[]">
                        <td><?php echo $row['passportNo']; ?></td>
                        <input type="hidden" value="<?php echo $row['passportNo']; ?>" name="passportNo[]">
                        <td><?php echo $row['jobDesc']; ?></td>
                        <input type="hidden" value="<?php echo $row['jobDesc']; ?>" name="jobDesc[]">
                        <td>
                        <input type="radio" name="attendance_status[<?php echo $counter; ?>]" id="" value="Present" required>Present
                        <input type="radio" name="attendance_status[<?php echo $counter; ?>]" id="" value="Absent" required>Absent
                        </td>
                    </tr>
                    <?php
                        $counter++;
                        endwhile; 
                    ?>
                </tbody>
            </table>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </div>
    </div>
</div>
</form>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
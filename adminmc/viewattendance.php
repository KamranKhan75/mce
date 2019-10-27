<?php
include'addattendance.php';
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- CONNECT TO THE DATABASE -->
<?php
    $mysqli=new mysqli('localhost','root','','mce')or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM attendancetable where date='$_POST[date]'") or die($mysqli->error());
    $counter=0;
?>
<!-- DataTale -->
<form action="viewattendance.php" method="post">
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Attendance DataTable</h6>
        <h6 class="m-0 font-weight-bold text-primary text-center"><?php echo $date=$_POST['date']; ?></h6>    
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
                        <td><?php echo $row['iqamaNo']; ?></td>
                        <td><?php echo $row['passportNo']; ?></td>
                        <td><?php echo $row['jobDesc']; ?></td>
                        <td>
                        <input type="radio" name="attendance_status[<?php echo $counter; ?>]" id="" value="Present"
                        <?php
                        if($row['attendance_status']=='Present'){
                            echo "checked=checked";
                        }
                        ?>
                        >Present
                        <input type="radio" name="attendance_status[<?php echo $counter; ?>]" id="" value="Absent"
                        <?php
                        if($row['attendance_status']=='Absent'){
                            echo "checked=checked";
                        }
                        ?>
                        >Absent
                        </td>
                    </tr>
                    <?php
                        $counter++;
                        endwhile; 
                    ?>
                </tbody>
            </table>
            <!-- <input type="submit" name="update" value="Update" class="btn btn-info"> -->
        </div>
    </div>
</div>
</form>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
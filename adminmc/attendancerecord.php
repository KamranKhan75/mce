<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- CONNECT TO THE DATABASE -->
<?php
    $mysqli=new mysqli('localhost','root','','mce')or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT distinct date FROM attendancetable") or die($mysqli->error());
    $serialno=0;
?>
<!-- DataTale -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Attendance DataTable</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Date</th>
                        <th>Attendance Record</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                    <th>S. No.</th>
                        <th>Date</th>
                        <th>Attendance Record</th>
                    </tr>
                </tfoot>
                <tbody>
                    <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                    <?php
                        while ($row=$result->fetch_assoc()):
                        $serialno++;
                    ?>
                    <tr>

                        <td><?php echo $serialno; ?></td>
                        <td><?php echo $row['date']; ?></td>
                        <td>
                        <form action="viewattendance.php" method="post">
                        <input type="hidden" value="<?php echo $row['date']; ?>" name="date">
                        <input type="submit" value="Show Attendance" class="btn btn-success user">
                        </form>
                        </td>
                    </tr>
                    <?php
                        endwhile; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>
<?php
    $mysqli=new mysqli('localhost','root','','mce')or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT projectDescription, location,budget,date, ebudget,totalAmount,totalPrice FROM projecttable,expensestable,overtimetable,dailyworkusage WHERE expensestable.projectID = projecttable.projectID AND overtimetable.projectID = projecttable.projectID AND dailyworkusage.projectID = projecttable.projectID") or die($mysqli->error());
    ?>
    <!-- DataTale -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Contracts DataTable</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Project Description</th>
                            <th>Location</th>
                            <th>Budget</th>
                            <th>Date</th>
                            <th>Total Exp Budget</th>
                            <th>Total OT Budget</th>
                            <th>Total Daily Budget</th>
                            <th>Print</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Project Description</th>
                            <th>Location</th>
                            <th>Budget</th>
                            <th>Date</th>
                            <th>Total Exp Budget</th>
                            <th>Total OT Budget</th>
                            <th>Total Daily Budget</th>
                            <th>Print</th>
                        </tr>
                    </tfoot>
                    <tbody>
                            <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                        <?php
                        while ($row=$result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['projectDescription']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['budget']; ?></td> 
                            <td><?php echo $row['date']; ?></td>
                            <td><?php echo $row['ebudget'];?></td>
                            <td><?php echo $row['totalAmount'];?></td>
                            <td><?php echo $row['totalPrice'];?></td>
                            <!-- <td>
                            <form action="prupdate.php" method="POST">
                            <input type="hidden" name="editID" value="<?php //echo $row['projectID']; ?>">
                            <button type="submit" name="edit" class="btn btn-info">Edit</button>
                            </form>
                            </td>                           -->
                            <!-- <td><a href="empupdate.php?edit=<?php //echo $row['empID']; ?>" class="btn btn-info editbtn">Edit</a></td> -->
                            <!-- <td><a href="addproject.php?delete=<?php //echo $row['projectID']; ?>" class="btn btn-danger">Delete</a></td> -->
                            <td><a href="reports/budgetreport.php?id=<?php echo $row['projectDescription']; ?>" class="btn btn-success">Print</a></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
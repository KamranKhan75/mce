<?php
include('includes/header.php');
include('includes/navbar.php');
?>

<?php 
require_once'addregister.php';
?>

<?php
    $mysqli=new mysqli('localhost','root','','mce')or die(mysqli_error($mysqli));
    $result=$mysqli->query("SELECT * FROM admintable") or die($mysqli->error());
    ?>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Admin Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="addregister.php" method="POST">
                <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $aid; ?>">
                    <div class="form-group">
                        <input type="email" value="<?php echo $email; ?>" class="form-control form-control-user" id="exampleInputEmail"
                            aria-describedby="emailHelp" placeholder="Enter Email Address..." name="txtemail">
                    </div>
                    <div class="form-group">
                        <input type="password" value="<?php echo $pwd; ?>" class="form-control form-control-user" id="exampleInputPassword"
                            placeholder="Password" name="txtpwd">
                    </div>
                    <?php if($update==true):?>
                    <button type="submit" name="update" class="btn btn-info btn-user btn-block">Update </button>
                    <?php else:?>
                    <button type="submit" name="save" class="btn btn-primary btn-user btn-block">Save </button>
                    <?php endif;?>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <div class="text-right mb-2">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            New Entry
        </button>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin DataTable</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-dark" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                      <!--------------------SELECT QUERY FOR EMPLOYEE TABLE------------------------>
                      <?php
                        while ($row=$result->fetch_assoc()):?>
                        <tr>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><a href="register.php?edit=<?php echo $row['adminID']; ?>" class="btn btn-info">Edit</a></td>
                            <td><a href="addregister.php?delete=<?php echo $row['adminID']; ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                      <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
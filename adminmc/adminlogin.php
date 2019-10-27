<?php session_start();
include('includes/header.php');
?>


<div class="container">
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>
                                <form action="addlogin.php" method="POST" class="user">
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <input type="email" id="inputEmail" class="form-control form-control-user"
                                                name="txtemail" placeholder="Email address" required="required"
                                                autofocus="autofocus">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <input type="password" id="inputPassword" name="txtpassword"
                                                class="form-control form-control-user" placeholder="Password"
                                                required="required">
                                        </div>
                                    </div>
                                    <?php
                        if(isset($_SESSION['message']) && $_SESSION['message']!=''): ?>
                                    <div class="alert alert-<?=$_SESSION['msg_type']; ?>">
                                        <?php
                                echo $_SESSION['message'];
                                unset($_SESSION['message']);
                                ?>
                                    </div>
                                    <?php endif ?>
                                    <button type="submit" name="loginbtn"
                                        class="btn btn-primary btn-user btn-block">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include('includes/scripts.php');
 ?>
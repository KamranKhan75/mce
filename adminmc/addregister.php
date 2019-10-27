<?php
//session_start();

$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
$aid=0;
$update=false;
$uname='';
$email='';
$pwd='';
if (isset($_POST['save'])){
    $uname=ucwords($_POST['txtuname']);
    $email=strtoupper($_POST['txtemail']);
    $pwd=strtoupper($_POST['txtpwd']);

    $mysqli->query("INSERT INTO admintable (username, email, password) VALUES ('$uname', '$email', '$pwd)")or die(mysqli_error($mysqli));

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: register.php");
}

if(isset($_GET['delete'])){
    $aid=$_GET['delete'];
    $mysqli->query("DELETE FROM admintable WHERE adminID=$aid") or die(mysqli_error($mysqli));

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: register.php");
}

if (isset($_GET['edit'])){
    $aid=$_GET['edit'];
    $update=true;
    $result=$mysqli->query("SELECT adminID,username,email,password FROM admintable") or die($mysqli->error());

    if (count([$result])==1) {
        $row = $result->fetch_array();
        $uname = $row['username'];
        $email = $row['email'];
        $pwd = $row['password'];
    }
}

if(isset($_POST['update'])){
    $aid=$_POST['id'];
    $uname=$_POST['txtuname'];
    $email=$_POST['txtemail'];
    $pwdd=$_POST['txtpwd'];

    $result=$mysqli->query("UPDATE admintable SET username='$uname',email='$email',password='$pwd',jobID='$emptype' WHERE empID='$eid'")
        or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: register.php');
}
?>

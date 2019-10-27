<?php
include('security.php');
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());

if(isset($_POST['loginbtn'])){
    $email=$_POST['txtemail'];
    $pwd=$_POST['txtpassword'];

    $result=$mysqli->query("SELECT * FROM admintable WHERE email='$email' AND password='$pwd'");
    
    if(mysqli_fetch_array($result)){
        $_SESSION['email']=$email;
        header('location:index.php');
    }
    else{
        $_SESSION['message']="Username or password is incorrect";
        $_SESSION['msg_type']="danger";
        header("location:adminlogin.php");
    }
}

?>
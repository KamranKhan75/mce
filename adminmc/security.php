<?php
session_start();

if(!$_SESSION['email']){
    header('location:adminlogin.php');
}
// session_start();
// session_unset();  // where $_SESSION["nome"] is your own variable. if you do not have one use only this as follow **session_unset();**
// header("Location: adminlogin.php")
?>
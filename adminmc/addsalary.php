<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce') or die($mysqli->error());

$sid=0;
$jdesc='';
$salary='';

if (isset($_POST['save'])){
    $jdesc=$_POST['jobid'];
    $salary=$_POST['txtsalary'];

    $mysqli->query("INSERT INTO salarytable (jobID,salary) VALUES ('$jdesc','$salary')")or die($mysqli->error());

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: salary.php");
}

if(isset($_GET['delete'])){
    $sid=$_GET['delete'];
    $mysqli->query("DELETE FROM salarytable WHERE salaryID=$sid") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: salary.php");
}

if (isset($_POST['edit'])){
    $sid=$_POST['editID'];

    $result=$mysqli->query("SELECT JobDesc,salary FROM salarytable,jobstable WHERE salarytable.jobID=jobstable.jobID AND salaryID='$sid'") or die($mysqli->error());
    if (count([$result])==1) {
        $row = $result->fetch_array();
        $jdesc = $row['JobDesc'];
        $salary=$row['salary'];
    }
}

if(isset($_POST['update'])){
    $sid=$_POST['id'];
    $jdesc=$_POST['jobid'];
    $salary=$_POST['txtsalary'];

    $result=$mysqli->query("UPDATE salarytable SET jobID='$jdesc',salary='$salary' WHERE salaryID='$sid'") or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: salary.php');
}

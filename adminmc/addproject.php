<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce') or die($mysqli->error());

$pid=0;
$pdesc='';
$location='';
$budget='';
$date='';
$status='';

if (isset($_POST['save'])){
    $pdesc=$_POST['txtpdesc'];
    $location=$_POST['txtlocation'];
    $budget=$_POST['txtbudget'];
    $date=$_POST['txtdate'];
    $status='Pending';

    $mysqli->query("INSERT INTO projecttable (projectDescription, location,budget,date,status) VALUES ('$pdesc','$location','$budget','$date','$status')")or die($mysqli->error());

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: project.php");
}

if(isset($_GET['delete'])){
    $pid=$_GET['delete'];
    $mysqli->query("DELETE FROM projecttable WHERE projectID=$pid") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: project.php");
}

if (isset($_POST['edit'])){
    $pid=$_POST['editID'];

    $result=$mysqli->query("SELECT * FROM projecttable WHERE projectID=$pid") or die($mysqli->error());
    if (count([$result])==1) {
        $row = $result->fetch_array();
        $pdesc = $row['projectDescription'];
        $location = $row['location'];
        $budget=$row['budget'];
        $date=$row['date'];
        $status=$row['status'];

    }
}

if(isset($_POST['update'])){
    $pid=$_POST['id'];
    $pdesc=$_POST['txtpdesc'];
    $location=$_POST['txtlocation'];
    $budget=$_POST['txtbudget'];
    $date=$_POST['txtdate'];
    $status=$_POST['pid'];
    $result=$mysqli->query("UPDATE projecttable SET projectDescription='$pdesc',location='$location',budget='$budget',date='$date',status='$status' WHERE projectID='$pid'")
    or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: project.php');
}


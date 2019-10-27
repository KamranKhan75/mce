<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());

$empname='';
$iNo='';
$pNo='';
$jobdesc='';
$date=date("Y-m-d");

if (isset($_POST['submit'])){
    foreach($_POST['attendance_status'] as $id=>$attendance_status)
    {
    $empname=$_POST['empName'] [$id];
    $iNo=$_POST['iqamaNo'][$id];
    $passNo=$_POST['passportNo'][$id];
    $jobdesc=$_POST['jobDesc'][$id];
    
    $mysqli->query("INSERT INTO attendancetable (empName, iqamaNo, passportNo,jobDesc,attendance_status,date) VALUES ('$empname', '$iNo', '$passNo','$jobdesc','$attendance_status','$date')") or die(mysqli_error($mysqli));
    }

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: attendance.php");
}

if(isset($_POST['update'])){
    foreach($_POST['attendance_status'] as $id=>$attendance_status)
    {
    $empname=$_POST['empName'] [$id];
    $iNo=$_POST['iqamaNo'][$id];
    $passNo=$_POST['passportNo'][$id];
    $jobdesc=$_POST['jobDesc'][$id];
    
    $mysqli->query("UPDATE attendancetable SET empName='$empname', iqamaNo='$iNo', passportNo='$passNo',jobDesc='$jobdesc',attendance_status='$attendance_status',date='$date' WHERE date='$date'") or die(mysqli_error($mysqli));
    }

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: viewattendance.php");
}
?>
<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
$eid=0;
$ename='';
$iNo='';
$passNo='';
$jobdesc='';
$salary='';

if (isset($_POST['save'])){
    $ename=ucwords($_POST['txtempName']);
    $iNo=strtoupper($_POST['txtiqamaNo']);
    $passNo=strtoupper($_POST['txtPno']);
    $jobdesc=ucwords($_POST['txtjobdesc']);
    $salary=$_POST['txtsalary'];

    $mysqli->query("INSERT INTO employeetable (empName, iqamaNo, passportNo,jobDesc,Salary) VALUES ('$ename', '$iNo', '$passNo','$jobdesc','$salary')") or die(mysqli_error($mysqli));

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: employee.php");
}

if(isset($_GET['delete'])){
    $eid=$_GET['delete'];
    $mysqli->query("DELETE FROM employeetable WHERE empID=$eid") or die(mysqli_error($mysqli));

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: employee.php");
}

if (isset($_POST['edit'])){
    $eid=$_POST['editID'];
    $result=$mysqli->query("SELECT empName,iqamaNo,passportNo,jobDesc,Salary FROM employeetable WHERE empID='$eid'") or die($mysqli->error());

    if (count([$result])==1) {
        $row = $result->fetch_array();
        $ename = $row['empName'];
        $iNo = $row['iqamaNo'];
        $passNo = $row['passportNo'];
        $jobdesc=$row['jobDesc'];
        $salary=$row['Salary'];
    }
}

if(isset($_POST['update'])){
    $eid=$_POST['id'];
    $ename=ucwords($_POST['txtempName']);
    $iNo=strtoupper($_POST['txtiqamaNo']);
    $passNo=strtoupper($_POST['txtPno']);
    $jobdesc=ucwords($_POST['txtjobdesc']);
    $salary=$_POST['txtsalary'];

    $result=$mysqli->query("UPDATE employeetable SET empName='$ename',iqamaNo='$iNo',passportNo='$passNo',jobDesc='$jobdesc',Salary='$salary' WHERE empID='$eid'")
        or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: employee.php');
}
?>

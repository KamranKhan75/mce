<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce') or die($mysqli->error());

$overtimeid=0;
$update=false;
$pdesc='';
$emp='';
$NoofHours='';
$amountPerHour='';
$totalAmount='';
$odate='';

if (isset($_POST['save'])){
    
    $pdesc=$_POST['pid'];
    $emp=$_POST['eid'];
    $NoofHours=$_POST['txtnoHours'];
    $amountPerHour=$_POST['txtamountPerHour'];
    $totalAmount=$_POST['txtTotalAmount'];
    // $totalAmount=$NoofHours*$amountPerHour;
    $odate=$_POST['txtdate'];

    $mysqli->query("INSERT INTO overtimetable(projectID,empID,NoofHours,amountPerHour,totalAmount,odate) VALUES ('$pdesc','$emp','$NoofHours','$amountPerHour','$totalAmount','$odate')")or die($mysqli->error());

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: overtime.php");
}

if(isset($_GET['delete'])){
    $overtimeid=$_GET['delete'];
    $mysqli->query("DELETE FROM overtimetable WHERE overtimeID=$overtimeid") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: overtime.php");
}

if (isset($_POST['edit'])){
    $overtimeid=$_POST['editID'];

    $result=$mysqli->query("SELECT projectDescription,empName,NoofHours,amountPerHour,totalAmount,odate FROM overtimetable,projecttable,employeetable WHERE overtimetable.projectID=projecttable.projectID AND overtimetable.empID=employeetable.empID  AND overtimeID='$overtimeid'") or die($mysqli->error());
    if (count([$result])==1) {
        $row = $result->fetch_array();
        $pdesc = $row['projectDescription'];
        $emp = $row['empName'];
        $NoofHours=$row['NoofHours'];
        $amountPerHour = $row['amountPerHour'];
        $totalAmount = $row['totalAmount'];
        $odate=$row['odate'];
    }
}

if(isset($_POST['update'])){
    $overtimeid=$_POST['id'];
    $pdesc=$_POST['pid'];
    $emp=$_POST['eid'];
    $NoofHours=$_POST['txtnoHours'];
    $amountPerHour=$_POST['txtamountPerHour'];
    // $totalPrice=$_POST['txtTotalAmount'];
    $totalAmount=$_POST['txtTotalAmount'];
    $odate=$_POST['txtdate'];

    $result=$mysqli->query("UPDATE overtimetable SET projectID='$pdesc',empID='$emp',NoofHours='$NoofHours',amountPerHour='$amountPerHour',totalAmount='$totalAmount',odate='$odate' WHERE overtimeID='$overtimeid'") or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: overtime.php');
}
?>
<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce')or die($mysqli->error());
$vehid=0;
$ename='';
$vname='';

if (isset($_POST['save'])){
    $ename=ucwords($_POST['eid']);
    $vname=strtoupper($_POST['vid']);

    $mysqli->query("INSERT INTO vehicledetails (empID, vehicleID) VALUES ('$ename', '$vname')") or die(mysqli_error($mysqli));

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: vehicleassign.php");
}

if(isset($_GET['delete'])){
    $eid=$_GET['delete'];
    $mysqli->query("DELETE FROM vehicledetails WHERE vehID=$vehid") or die(mysqli_error($mysqli));

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: vehicleassign.php");
}

if (isset($_POST['edit'])){
    $vehid=$_POST['editID'];
    $result=$mysqli->query("SELECT empName,vehicleNo FROM vehicledetails,employeetable,vehicletable WHERE vehicledetails.empID=employeetable.empID AND vehicledetails.vehicleID=vehicletable.vehicleID AND vehID='$vehid'") or die($mysqli->error());

    if (count([$result])==1) {
        $row = $result->fetch_array();
        $ename = $row['empName'];
        $vname = $row['vehicleNo'];
    }
}

if(isset($_POST['update'])){
    $vehid=$_POST['id'];
    $ename=ucwords($_POST['eid']);
    $vname=$_POST['vid'];

    $result=$mysqli->query("UPDATE vehicledetails SET empID='$ename',vehicleID='$vname' WHERE vehID='$vehid'")
        or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: vehicleassign.php');
}
?>

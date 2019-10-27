<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce') or die($mysqli->error());
$vehicleid=0;
$vehiclename='';
$vehiclemodel='';
if (isset($_POST['save'])){
    $vehiclename=ucwords($_POST['txtvehicleName']);
    $vehiclemodel=ucwords($_POST['txtvehicleModel']);

    $mysqli->query("INSERT INTO vehicletable (vehicleName, vehicleNo) VALUES ('$vehiclename','$vehiclemodel')")or die($mysqli->error());

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: vehicles.php");
}

if(isset($_GET['delete'])){
    $vehicleid=$_GET['delete'];
    $mysqli->query("DELETE FROM vehicletable WHERE vehicleID=$vehicleid") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: vehicles.php");
}

if (isset($_POST['edit'])){
    $vehicleid=$_POST['editID'];
    $update=true;

    $result=$mysqli->query("SELECT * FROM vehicletable,employeetable WHERE vehicleID='$vehicleid'") or die($mysqli->error());
    if (count([$result])==1) {
        $row = $result->fetch_array();
        $vehiclename = $row['vehicleName'];
        $vehiclemodel = $row['vehicleNo'];
        $emp=$row['empName'];
    }
}

if(isset($_POST['update'])){
    $vehicleid=$_POST['id'];
    $vehiclename=ucwords($_POST['txtvehicleName']);
    $vehiclemodel=ucwords($_POST['txtvehicleModel']);
    $emp=$_POST['empid'];

    $result=$mysqli->query("UPDATE vehicletable SET vehicleName='$vehiclename',vehicleNo='$vehiclemodel',empID='$emp' WHERE vehicleID='$vehicleid'")
    or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: vehicles.php');
}
?>
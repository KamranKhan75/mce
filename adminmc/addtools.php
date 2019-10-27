<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce') or die($mysqli->error());

$toolsid=0;
$name='';

if (isset($_POST['save'])){
    $name=$_POST['txtname'];

    $mysqli->query("INSERT INTO toolstable(name) VALUES ('$name')")or die($mysqli->error());

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: tools.php");
}

if(isset($_GET['delete'])){
    $toolsid=$_GET['delete'];
    $mysqli->query("DELETE FROM toolstable WHERE toolsID=$toolsid") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: tools.php");
}

if (isset($_POST['edit'])){
    $toolsid=$_POST['editID'];
    $update=true;

    $result=$mysqli->query("SELECT * FROM toolstable WHERE toolsID=$toolsid") or die($mysqli->error());
    if (count([$result])==1) {
        $row = $result->fetch_array();
        $name = $row['name'];
    }
}

if(isset($_POST['update'])){
    $toolsid=$_POST['id'];
    $name=$_POST['txtname'];

    $result=$mysqli->query("UPDATE toolstable SET name='$name'  WHERE toolsID='$toolsid'")
    or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: tools.php');
}

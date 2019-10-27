<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce') or die($mysqli->error());

$expenseid=0;
$update=false;
$edesc='';
$pdesc='';
$budget='';
$date='';

if (isset($_POST['save'])){
    $edesc=$_POST['txtedesc'];
    $pdesc=$_POST['pid'];
    $budget=$_POST['txtbudget'];
    $date=$_POST['txtdate'];

    $mysqli->query("INSERT INTO expensestable(description,projectID,ebudget,edate) VALUES ('$edesc','$pdesc','$budget','$date')")or die($mysqli->error());

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: expenses.php");
}

if(isset($_GET['delete'])){
    $expenseid=$_GET['delete'];
    $mysqli->query("DELETE FROM expensestable WHERE expenseID=$expenseid") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: expenses.php");
}

if (isset($_POST['edit'])){
    $expenseid=$_POST['editID'];

    $result=$mysqli->query("SELECT description,projectDescription,ebudget,edate FROM expensestable,projecttable WHERE expensestable.projectID=projecttable.projectID AND expenseID='$expenseid'") or die($mysqli->error());
    if (count([$result])==1) {
        $row = $result->fetch_array();
        $edesc = $row['description'];
        $pdesc=$row['projectDescription'];
        $budget=$row['ebudget'];
        $date=$row['edate'];
    }
}

if(isset($_POST['update'])){
    $expenseid=$_POST['id'];
    $edesc=$_POST['txtedesc'];
    $pdesc=$_POST['pid'];
    $budget=$_POST['txtbudget'];
    $date=$_POST['txtdate'];

    $result=$mysqli->query("UPDATE expensestable SET description='$edesc',projectID='$pdesc',ebudget='$budget',edate='$date' WHERE expenseID='$expenseid'")
    or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: expenses.php');
}

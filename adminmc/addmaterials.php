<?php
session_start();
$mysqli=new mysqli('localhost','root','','mce') or die($mysqli->error());

$dailyid=0;
$pdesc='';
$ddesc='';
$qty='';
$Aperqty='';
$totalPrice='';
$NoofLabours='';
$ddate='';

if (isset($_POST['save'])){
    
    $pdesc=$_POST['pid'];
    $ddesc=$_POST['textDdesc'];
    $qty=$_POST['txtQty'];
    $Aperqty=$_POST['txtAmountPerQty'];
    $totalPrice=$_POST['txtTotalAmount'];
    // $totalPrice=$qty*$Aperqty;
    $NoofLabours=$_POST['txtLabours'];
    $ddate=$_POST['txtdate'];

    $mysqli->query("INSERT INTO dailyworkusage(projectID,ddescription,Qty,amountPerQty,totalPrice,NoofLabors,ddate) VALUES ('$pdesc','$ddesc','$qty','$Aperqty','$totalPrice','$NoofLabours','$ddate')")or die($mysqli->error());

    $_SESSION['message']="Record has been added";
    $_SESSION['msg_type']="success";
    header("location: materials.php");
}

if(isset($_GET['delete'])){
    $dailyid=$_GET['delete'];
    $mysqli->query("DELETE FROM dailyworkusage WHERE dailyID=$dailyid") or die($mysqli->error());

    $_SESSION['message']="Record has been deleted";
    $_SESSION['msg_type']="danger";
    header("location: materials.php");
}

if (isset($_POST['edit'])){
    $dailyid=$_POST['editID'];

    $result=$mysqli->query("SELECT dailyID,projectDescription,ddescription,Qty,amountPerQty,totalPrice,NoofLabors,ddate FROM dailyworkusage,projecttable WHERE dailyworkusage.projectID=projecttable.projectID AND dailyID='$dailyid'") or die($mysqli->error());
    if (count([$result])==1) {
        $row = $result->fetch_array();
        $pdesc = $row['projectDescription'];
        $ddesc = $row['ddescription'];
        $qty=$row['Qty'];
        $Aperqty = $row['amountPerQty'];
        $totalPrice = $row['totalPrice'];
        $NoofLabours = $row['NoofLabors'];
        $ddate=$row['ddate'];
    }
}

if(isset($_POST['update'])){
    $dailyid=$_POST['id'];
    $pdesc=$_POST['pid'];
    $ddesc=$_POST['textDdesc'];
    $qty=$_POST['txtQty'];
    $Aperqty=$_POST['txtAmountPerQty'];
    $totalPrice=$_POST['txtTotalAmount'];
    // $totalPrice=$qty*$Aperqty;
    $NoofLabours=$_POST['txtLabours'];
    $ddate=$_POST['txtdate'];

    $result=$mysqli->query("UPDATE dailyworkusage SET projectID='$pdesc',ddescription='$ddesc',Qty='$qty',amountPerQty='$Aperqty',totalPrice='$totalPrice',NoofLabors='$NoofLabours',ddate='$ddate' WHERE dailyID='$dailyid'") or die($mysqli->error());

    $_SESSION['message']="Record has been updated";
    $_SESSION['msg_type']='info';
    header('location: materials.php');
}
?>